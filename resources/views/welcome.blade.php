@extends('layout')


@section('title', 'Home Page')


@section('content')


    <h1>Laravel Assignment</h1>

<ul>
    @foreach ($tasks as $task)

        <li> {{$task}} </li>



   @endforeach
</ul>


    @endsection