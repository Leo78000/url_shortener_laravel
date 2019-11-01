@extends('layouts.base')

@section('content')
    <h1> L'ultime raccourcisseur d'URL ! </h1>

    <form method="POST">
        <input
        type="hidden"> {{ csrf_field() }}
        <input
        type="text"
        placeholder="Entre ton URL à raccourcir !"
        name="url"
        value="{{ old('url') }}">
    <p>{!! $errors->first('url','<p class="error-msg">:message</p>') !!}</p>
    </form>
@endsection
