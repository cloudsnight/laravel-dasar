@extends('layouts.master')

@section('title', '404 Tidak Ketemu !')

@section('style')
  <style>
    header>nav>a{
      background: darkblue;
      color: red;
    }
  </style>
@endsection

@section('content')
  <h1>Maaf page tidak diketemukan ! Kode 404.</h1>
@endsection