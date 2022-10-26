@extends('layout')

@section("content")

@include(".partials._hero")
@include("partials._search")
@if(isset($search))
<div class = "mx-10">
    <div class = "font-bold bg-black text-white opacity-30 my-2 text-white">
        <h1 class = "bg-black p-1"> showing results for: {{$search}} <h1>
    </div>
    @endif
    <div class="lg:grid lg:grid-cols-5 gap-4 space-y-4 md:space-y-0">

    @foreach($cats as $cat)
    <x-cat-card :cat="$cat"/>
    @endforeach
    </div>


    @endsection
</div>