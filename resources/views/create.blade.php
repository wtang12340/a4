@extends('layouts.master')

@section('create')
    <form method='GET' action='/execute' class='form'>
        <label for='name'> Give it a name: (3-12 letters): </label>
        <input type='text' name='name' id='name'>
        <br>
        <br>
        <label> Choose a type: </label>
        <select name='type1' id='type1'>
            <option value="Normal">Normal</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Grass">Grass</option>
            <option value="Electric">Electric</option>
            <option value="Bug">Bug</option>
            <option value="Poison">Poison</option>
            <option value="Dark">Dark</option>
            <option value="Psychic">Psychic</option>
            <option value="Ghost">Ghost</option>
            <option value="Steel">Steel</option>
            <option value="Flying">Flying</option>
            <option value="Ice">Ice</option>
            <option value="Rock">Rock</option>
            <option value="Ground">Ground</option>
            <option value="Dragon">Dragon</option>
            <option value="Fighting">Fighting</option>
            <option value="Fairy">Fairy</option>
        </select>
        <br>
        <br>
        <label> Secondary typing: </label>
        <select name='type2' id='type2'>
            <option value=""></option>
            <option value="Normal">Normal</option>
            <option value="Fire">Fire</option>
            <option value="Water">Water</option>
            <option value="Grass">Grass</option>
            <option value="Electric">Electric</option>
            <option value="Bug">Bug</option>
            <option value="Poison">Poison</option>
            <option value="Dark">Dark</option>
            <option value="Psychic">Psychic</option>
            <option value="Ghost">Ghost</option>
            <option value="Steel">Steel</option>
            <option value="Flying">Flying</option>
            <option value="Ice">Ice</option>
            <option value="Rock">Rock</option>
            <option value="Ground">Ground</option>
            <option value="Dragon">Dragon</option>
            <option value="Fighting">Fighting</option>
            <option value="Fairy">Fairy</option>
        </select>
        <br>
        <br>
        <label for='level'>Pokemon Level</label>
        <br>
        <input type='radio' name='level' id='level' value='1' checked> 1
        <input type='radio' name='level' id='level' value='5'> 5
        <br>
        <br>
        <input type='submit' class='button' value='Create! It will appear in Oak&#39;s Laboratory'>
    </form>
@endsection
