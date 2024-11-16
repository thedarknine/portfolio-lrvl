@extends('layouts.default')

@section('title', 'Product Owner | Expérience')

@section('content')
    <div class="relative" id="home">
        <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
            <div class="relative pt-36 ml-auto">
                @foreach ($experiences as $experience)
                <div class="lg:w-2/3 mx-auto mb-20">
                    <h2 class="text-gray-200 text-xl">{{ $experience->title }}</h2>
                    <span class="text-gray-200">{{ $experience->subtitle }}</span>
                    <div class="text-gray-200">{{ $experience->company->name }}</div> 
                    <div class="text-gray-200">{!! $experience->description !!}</div> 
                    <div class="text-gray-200">
                        <ul>
                            @foreach ($experience->skills as $skill)
                                <li>{{ $skill->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop