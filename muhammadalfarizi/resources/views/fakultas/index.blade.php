<!-- @include('layout.header',['title' => 'Halaman Fakultas']) -->
@extends('layout.master')
@section('title', 'Halaman Fakultas')

@section('content')
<h2>Fakultas</h2>
<ul>
    @if(count($fakultas ) > 0)
    @foreach ($fakultas as $res)
    <li>{{$res}}</li>
    @endforeach
    @else
    <li>Blom ado data</li>
    @endif
</ul>
@endsection

<!-- @include('layout.footer') -->