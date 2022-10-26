@extends('layout')

@section("content")
<div class="relative h-2 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4 height: 1px">

</div>
<div class="mx-4 flex justify-center items-center my-5">
    <x-card class="p-20">
        <div class="flex flex-col items-center justify-center text-center">
            <img
                class="w-64 mr-6 mb-6 rounded shadow-md"
                src="{{ URL::to('/') }}/images/funny-cat.png"
                alt=""= />

            <h3 class="text-2xl mb-2">{{$cat->name}}</h3>
            <div class="text-xl font-bold mb-4">{{$cat->type}}</div>
            <x-cat-tags :tagsCSL="$cat->tags"/>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{$cat->address}}
            </div>
            <div class="border border-gray-200 mb-6"></div>
            <div class= "box-border w-80">
                <h3 class="text-3xl font-bold mb-4">
                    About me
                </h3>
                <div class="text-lg space-y-6">
                    {{$cat->description}}
                    <a
                        href="mailto:test@test.com"
                        class="block bg-laravel text-white mt-6 py-2 w-1/2rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact Owner</a
                    >

                </div>
            </div>
        </div>
    </x-card>
</div>
@endsection