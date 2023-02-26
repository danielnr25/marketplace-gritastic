@extends('layouts.learning')

@section('hero')
    @include('partials.learning.banner')
@endsection

@section('content')
    @include('partials.learning.aboutme')
    @include('partials.learning.team')
@endsection

