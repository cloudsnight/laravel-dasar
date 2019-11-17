@extends('layouts.master')

@section('title', 'Single Blog Page')

@section('style')
  <style>
    #content{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Show Page Secara Spesifik</h1>

  <h3>Judul Blog</h3>
  <p>{{ $blog->title }}</p>
  <hr>

  <h3>Isi Kontent</h3>
  <p>{{ $blog->description }}</p>
  <hr>
@endsection