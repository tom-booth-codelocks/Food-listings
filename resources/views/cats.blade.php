@extends('layout')

@section("content")

@include(".partials._hero")
@include("partials._search")
<div class="lg:grid lg:grid-cols-5 gap-4 space-y-4 md:space-y-0 mx-4">

@foreach($cats as $cat)
<div class="bg-gray-50 border border-gray-200 rounded p-6 hover:bg-light_grey">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block rounded shadow-md"
            src="{{ URL::to('/') }}/images/funny-cat.png"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/cats/{{$cat->id}}">{{$cat->name}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$cat->name}}</div>
            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                >
                    <a href="#">Laravel</a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$cat->address}},
            
            </div>
        </div>
    </div>
</div>

@endforeach
</div>
@endsection