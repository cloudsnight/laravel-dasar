@extends('layouts.master')

@section('title', 'single blade')

@section('style')
  <style>
    #blog1{
      background: green;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Halaman Blog secara spesifik</h1>
  <h2>
    {{-- Mengakses data $id dari BlogController --}}
    {{-- id : {{ $id }} --}}

    {{-- Mengakses $nilai dan $user dari BlogController --}}
    {{ $nilai }}
  </h2>

  <ul>
    @foreach($users as $user)
      <li>Username: {{ $user->username }} || Dengan Password: {{ $user->password }}. </li>
    @endforeach
  </ul>

  @if(count($users) > 5)
    <p>Usernya lebih dari lima</p>
  @else
    <p>Usernya tidak lebih dari lima</p>
  @endif

  {{-- Eksekusi unescaped disini --}}
  {{-- {!! $unescaped !!} --}}
@endsection