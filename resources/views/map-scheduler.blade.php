@extends('layouts.app')

@section('content')

<div class="relative w-full h-full mt-16">
    <image src="{{asset("/images/map-scheduler.png")}}" class="w-[1920px] h-[1080px] object-cover mx-auto">

    <div class="bar absolute top-16 left-4 bg-purple-300 rounded-full w-5 h-5">
        <svg class="absolute top-2 left-2 fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mouse-pointer-2"><path d="M4.037 4.688a.495.495 0 0 1 .651-.651l16 6.5a.5.5 0 0 1-.063.947l-6.124 1.58a2 2 0 0 0-1.438 1.435l-1.579 6.126a.5.5 0 0 1-.947.063z"/></svg>
    </div>

    <svg class="bar motion-path-demo">
        <path d="M 468 867 C 781 483 1200 400 1732 266" />
    </svg>
</div>

@endsection
