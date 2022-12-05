
@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')
    <h2>Contact Manager</h2>

    <a href='/contacts/index'> <button type="button">Contact List</button></a>
    <a href='/contacts/new'> <button type="button">New Contact Entry</button></a>
@endsection
