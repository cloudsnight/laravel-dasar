@extends('layouts.master')

@section('title', 'Trash Page')

@section('style')
  <style>
    #trash{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Atur mana yang mau di-restore ataupun di-delete</h1>

  <ul>
    @foreach($blogs as $blog)
      <li>{{ $blog->title }}
        <form action="blog/{{ $blog->id }}" method="post">
          <input type="submit" name="submit" value="Delete Permanently">
          <input type="submit" name="submit" value="Restore">
          @csrf
          <input type="hidden" name="_method" value="DELETE">
        </form>
      </li>
    @endforeach
  </ul>

@endsection