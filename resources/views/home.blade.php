@extends('layout.layout')

@section('title', 'Ayti - IT')

@section('content')
    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Particles -->
    <div class="particles" id="particles"></div>

    <x-sections.hero />

    <x-sections.services />

    <x-sections.contact />


@endsection
