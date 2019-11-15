@extends('layouts.master')

@section('style')
  <style>
    #blog{
      background: red;
      color: white;
    }
  </style>
@endsection

{{-- section title cara panjang --}}
{{-- @section('title')
  BLog Sekolah Koding
@endsection --}}

{{-- section title cara pendek --}}
@section('title', 'BLog Sekolah Koding')

@section('content')
  <h1>Selamat Datang di Blog kami</h1>
@endsection