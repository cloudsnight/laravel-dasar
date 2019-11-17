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
  <h1>Tempat Pembuangan</h1>

  @if($blogs->count() <= 0)
    <p>Kosong</p>
  @else
    <ul>
      @foreach($blogs as $blog)
        <li>{{ $blog->title }}
          <form action="/blog/{{ $blog->id }}/force_destroy" method="post">
            <button type="submit" onclick="return confirm('Are you sure want to delete this forever ?');">Delete Permanently</button>
            @csrf
            <input type="hidden" name="_method" value="DELETE">
          </form>
          
          <form action="/blog/{{ $blog->id }}/restore" method="post">
            <input type="submit" name="submit" value="Restore">
            @csrf
          </form>
        </li>
      @endforeach
    </ul>
  @endif

@endsection