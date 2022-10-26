@props(['cat'])

<x-card class="hover:bg-light_grey">
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
            <div class="text-xl font-bold mb-4">{{$cat->type}}</div>
            <x-cat-tags :tagsCSL="$cat->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$cat->address}},
            </div>
        </div>
    </div>
</x-card>
