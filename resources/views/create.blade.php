@extends('layout.master')

@section('content')
    <form method="POST" action="{{ route('createNote') }}">
        @csrf
        <label>Title:</label><input name="title" type="text">
        <label>Content: </label><input type="text" name="content" width="50">
        <input name="submit" type="submit">
    </form>
@endsection