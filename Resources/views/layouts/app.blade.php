@extends('layouts.module')

@section('title', config('calendar.name') )

@section('sidebar')
    @include('calendar::layouts.sidebar')
@endsection
