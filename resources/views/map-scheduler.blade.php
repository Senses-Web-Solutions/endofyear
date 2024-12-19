@extends('layouts.app')

@section('content')

<div class="relative w-full h-full mt-16">
    <image src="{{asset("/images/map-scheduler.png")}}" class="w-full h-full object-cover">

    <div class="bar absolute h-10 w-48 top-16 left-4 bg-white border rounded-md z-[100]">
        <div class="flex items-center gap-2">
            <div class="p-2 text-gray-500 border-r">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-grip"><circle cx="12" cy="5" r="1"/><circle cx="19" cy="5" r="1"/><circle cx="5" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/><circle cx="12" cy="19" r="1"/><circle cx="19" cy="19" r="1"/><circle cx="5" cy="19" r="1"/></svg>
            </div>

            <div class="text-gray-700 text-sm">
                <p>Task 42548356</p>
            </div>
        </div>
    </div>

    <svg class="bar motion-path-demo">
        <path d="M 18 846 C 381 283 800 200 1284 213" />
    </svg>
</div>

@endsection
