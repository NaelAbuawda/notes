@extends('layout.master')

@section('content')
    @foreach($notes as $note)
        <p style="font-size: 20px">Title: {{ $note->title }}, Content: {{ $note->content }}</p>
    @endforeach
@endsection