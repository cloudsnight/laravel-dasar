@extends('layouts.master')

@section('title', 'Single Page')

@section('style')
  <link rel="stylesheet" href="/css/single-page.css">
@endsection

@section('content')
  <h1>Blog dengan page spesifik</h1>

  <h2>Judul Blog</h2>
  <p>{{ $blog->title }}</p>
  <hr>

  <h2>Isi Blog</h2>
  <p>{{ $blog->description }}</p>
@endsection