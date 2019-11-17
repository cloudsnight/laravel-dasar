@extends('layouts.master')

@section('title', 'Edit Page')

@section('style')
  <style>
    #edit{
      background: darkgreen;
      color: salmon;
      cursor: default;
    }
  </style>
@endsection

@section('nav-link')
  <a id="edit">Edit Mode</a>
@endsection

@section('content')
  <h1>Edit datang di Blog ini</h1>
  <form action="/blog/{{ $blog->id }}" method="post">
    <input type="text" name="title" value="{{ $blog->title }}"><br>
    <textarea name="description"cols="30" rows="10">{{ $blog->description }}</textarea><br>
    <input type="submit" name="submit" value="edit">

    @csrf

    {{-- Untuk dapat mengakses pada route yang memiliki method PUT --}}
    <input type="hidden" name="_method" value="PUT">
  </form>
@endsection