
{{-- merge attribute class with the class that can be passed in. (it does overwrite is theres e.g. p-6 would be overwritten if p-10 was passed in)  --}}

<div {{$attributes->merge(["class"=> "bg-gray-50 border border-gray-200 rounded p-6"])}}>
    {{$slot}}
</div>