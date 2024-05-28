@extends('layouts.master')

@section('title')
Welcome
@endsection

@section('content')
    <h1>Selamat Datang {{ $Name }} {{ $name }} </h1>
    <h3>Terima kasih Telah bergabung di SanberBook. Social Media kita bersama!</h3>
    <a href="/register">Kembali</a>

@endsection