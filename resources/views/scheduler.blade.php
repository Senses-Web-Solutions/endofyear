@extends('layouts.app')

@section('content')

<div class="relative w-full h-full mt-16">
    <image src="{{asset("/images/scheduler.png")}}" class="w-[1920px] h-[1080px] object-cover mx-auto">

    <div class="bar absolute h-10 w-48 top-16 left-20 bg-white border rounded-md z-[100]">
        <div class="flex items-center gap-2">
            <div class="p-2 text-gray-500 border-r">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-grip"><circle cx="12" cy="5" r="1"/><circle cx="19" cy="5" r="1"/><circle cx="5" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/><circle cx="12" cy="19" r="1"/><circle cx="19" cy="19" r="1"/><circle cx="5" cy="19" r="1"/></svg>
            </div>

            <div class="text-gray-700 text-sm">
                <p>Task 42548356</p>
            </div>
        </div>

        <svg class="absolute top-6 left-4 fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mouse-pointer-2"><path d="M4.037 4.688a.495.495 0 0 1 .651-.651l16 6.5a.5.5 0 0 1-.063.947l-6.124 1.58a2 2 0 0 0-1.438 1.435l-1.579 6.126a.5.5 0 0 1-.947.063z"/></svg>
    </div>

    <svg class="bar motion-path-demo">
        <path d="M 268 667 C 581 283 1000 200 1484 213" />
    </svg>
</div>

@endsection
