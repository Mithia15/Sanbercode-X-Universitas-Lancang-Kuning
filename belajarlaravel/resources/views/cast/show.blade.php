@extends('layouts.master')

@section('title')
    Detail Cast
@endsection

@section('content')
    <p>Name : {{$cast->nama}}</p>
    <p>Umur : {{$cast->umur}}</p>
    <p>Bio : {{$cast->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Kembali</a>
@endsection