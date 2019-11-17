@extends('layouts.master')

@section('title', 'Blog Home')

@section('style')
  <link rel="stylesheet" href="/css/blog-home.css">
@endsection

@section('content')
  <h1>Selamat Datang di Blog Kami</h1>

  <h2>Daftar Blog</h2>
  <ul>
    @foreach($blogs as $blog)
      <li><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></li>
    @endforeach
  </ul>
@endsection