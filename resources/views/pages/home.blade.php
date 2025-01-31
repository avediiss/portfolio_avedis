@extends('layouts.main')

@section('title')
    <title>Home</title>
@endsection
@section('content')

        @include('components.hero')
        @include('components.about')
        @include('components.who')
        @include('components.metrics')
        @include('components.parallax')
        @include('components.services')
        @include('components.investments')
        @include('components.casestudy')
        @include('components.contact')


@endsection

