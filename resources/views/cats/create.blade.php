@extends('layout')

@section("content")
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                MEOW MEOW MEOW
            </h2>
            <br>
        </header>

        <form method="POST" action="/cats">
            @csrf
            <div class="mb-6">
                <label
                    for="cat"
                    class="inline-block text-lg mb-2"
                    >Cat Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value = "{{old("name")}}"
                />
            @error("name")
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
            @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Cat type</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="type"
                    value = "{{old("type")}}"
                    placeholder="Example: Persian"
                />
            @error("type")
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
            @enderror
            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                    >Address</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="address"
                    value = "{{old("address")}}"
                    placeholder="Example: Remote, Boston MA, etc"
                />
            @error("address")
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
            @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Contact Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    value = "{{old("email")}}"
                    name="email"
                />
            
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    value = "{{old("tags")}}"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                />
            @error("tags")
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
            @enderror
            </div>
            
            <div class="mb-6">
                <label
                    for="rating"
                    class="inline-block text-lg mb-2"
                    >Rating</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rating"
                    value = "{{old("rating")}}"
                    placeholder="5"
                />
            @error("rating")
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
            @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Pussy Pics
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    value = "{{old("logo")}}"
                    name="logo"
                />
            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Pussy Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    value = "{{old(description)}}"
                    placeholder="Include tasks, requirements, salary, etc"
                ></textarea>
            @error("description")
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
            @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Post Cat!
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
@endsection