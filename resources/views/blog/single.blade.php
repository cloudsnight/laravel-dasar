<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Single Blade</title>
</head>
<body>
  <h1>Halaman Blog secara spesifik</h1>
  <h2>
    {{-- Mengakses data $id dari BlogController --}}
    {{-- id : {{ $id }} --}}

    {{-- Mengakses $nilai dan $user dari BlogController --}}
    {{ $nilai }}
  </h2>

  <ul>
    @foreach($users as $user)
      <li>{{ $user }}</li>
    @endforeach
  </ul>
</body>
</html>