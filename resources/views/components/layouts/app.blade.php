@props(['title' => config('app.name')])

<x-layouts.page title="{{$title}}">
    {{$slot}}
</x-layouts.page>