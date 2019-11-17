@extends('layouts.master')

@section('title', 'Blog Home')

@section('style')
  <style>
    #blog{
      background: darkred;
      color: white;
    }

    h3{
      text-decoration: underline;
    }

    #btn-action{
      display: flex;
      width: 100px;
    }
  </style>
@endsection

@section('content')
  <h1>Selamat datang di blog kami</h1>

  <h3>Daftar Blog :</h3>
  <ul>
    @foreach($blogs as $blog)
      <li>
        <a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a>
          <div id="btn-action">
            <form action="blog/{{ $blog->id }}" method="post">
              <input type="submit" name="submit" value="Delete">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
            </form>
            <form action="/blog/{{ $blog->id }}/edit" method="get">
              <button type="submit">Edit</button>
            </form>
          </div>
      </li>
    @endforeach
  </ul>
@endsection