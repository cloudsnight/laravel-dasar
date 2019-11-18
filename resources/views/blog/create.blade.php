@extends('layouts.master')

@section('title', 'Create Page')

@section('style')
  <style>
    #create{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Buat Blog Baru disini</h1>

  {{-- @if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif --}}

  <form action="/blog" method="post">
    <input type="text" name="title" value="{{ old('title') }}">
    @if($errors->has('title'))
      <p>{{ $errors->first('title') }}</p>
    @endif
    <br>
    <textarea name="description"cols="30" rows="10">{{ old('description') }}</textarea><br>
    @if($errors->has('description'))
      <p>{{ $errors->first('description') }}</p>
    @endif
    <input type="submit" name="submit" value="Create">
    @csrf
  </form>
@endsection