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
    {{-- Validasi menggunakan if statement untuk edit mode --}}
    <input type="text" name="title" value="{{ count($errors) > 0 ? old('title') : $blog->title }}">
    @if($errors->has('title'))
      <p>{{ $errors->first('title') }}</p>
    @endif
    <br>
    <textarea name="description"cols="30" rows="10">{{ count($errors) > 0 ? old('description') : $blog->description }}</textarea>
    @if($errors->has('description'))
      <p>{{ $errors->first('description') }}</p>
    @endif
    <br>
    <input type="submit" name="submit" value="edit">

    @csrf

    {{-- Untuk dapat mengakses pada route yang memiliki method PUT --}}
    <input type="hidden" name="_method" value="PUT">
  </form>
@endsection