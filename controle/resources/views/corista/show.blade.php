@extends('layout.layout')

@section('title', 'Coristas')

@section('content')
{{ $corista->pessoas->name }}
@endsection