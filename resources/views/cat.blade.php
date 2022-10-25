@extends('layout')

@section("content")

<h2>
    {{$cat["name"]}}
</h2>
<p>
    {{$cat["tags"]}}
</p>

@endsection