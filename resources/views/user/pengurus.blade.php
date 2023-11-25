@extends('layout.main')
@section('container')
    <h1>Pengurus</h1>
    @foreach ($pengurus as $item)
    <p>{{ $item->nama }}</p>
    <p>{{ $item->divisi }}</p>
    @endforeach
@endsection
