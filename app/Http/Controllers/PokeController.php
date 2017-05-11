<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;
use App\Trainer;

class PokeController extends Controller
{

    public function poke(){
        return view('poke');
    }

    //pulls all pokemon and shows it
    public function read(){
        $monsters = Monster::all();
        return view('read')->with(['monsters' => $monsters]);
    }


    public function create(){
        return view('create');
    }

    //pulls the three trainers and shows it
    public function readTrainers(){
        $trainers = Trainer::all();
        return view('trainers')->with(['trainers' => $trainers]);
    }

    //adds the pokemon
    public function executeCreation(Request $request){

        //Validate
        $this->validate($request,[
            'name' => 'required|alpha|min:3|max:12',
        ]);

        //Upper case the first letter
        $name = ucfirst($request->input('name',null));

        //Pull the information, default Trainer to 2/Oak
        $monster = new Monster();
        $monster->name = $name;
        $monster->type1 = $request->type1;
        if($request->type2 === ''){
            $monster->type2 = NULL;
        }
        else {
            $monster->type2 = $request->type2;
        }
        $monster->level = $request->level;
        $monster->trainer_id = 2;

        $monster->save();

        return view('execute')->with([
            'name' => $name
        ]);
    }

    //transfer pokemon from Oak to Will
    public function giveWill(){
        $monster = new Monster();
        $monsters = $monster->where('trainer_id','=',2)->get();

        if(!($monsters->isEmpty())){
            foreach($monsters as $monster){
                $monster->trainer_id = 1;
                $monster->save();
            }


        }
        $monsters2 = Monster::all();
        return view('read')->with(['monsters' => $monsters2]);
    }

    //transfer pokemon from Oak to Dawn
    public function giveDawn(){
        $monster = new Monster();
        $monsters = $monster->where('trainer_id','=',2)->get();

        if(!($monsters->isEmpty())){
            foreach($monsters as $monster){
                $monster->trainer_id = 3;
                $monster->save();
            }


        }
        $monsters2 = Monster::all();
        return view('read')->with(['monsters' => $monsters2]);
    }

    //release the pokemon that belongs to Will and Dawn
    public function release(){
        $monster = new Monster();
        $monsters = $monster->where('trainer_id','!=',2)->get();

        if(!($monsters->isEmpty())){
            foreach($monsters as $monster){
                $monster->delete();
            }


        }
        $monsters2 = Monster::all();
        return view('read')->with(['monsters' => $monsters2]);
    }
}
