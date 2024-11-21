@extends('layouts.default')

@section('title', 'Product Owner | Expérience')
@section('pagetitle', 'Expériences professionnelles')

@section('content')
    @foreach ($experiences as $experience)
    <div class="relative overflow-hidden rounded-lg mb-6 bg-gradient-to-br p-px dark:from-gray-700 dark:via-gray-800 dark:to-darker">
        <div class="relative flex h-full flex-col gap-6 rounded-lg p-8 bg-gray-900">

            <div class="-my-8 divide-y-2 divide-gray-100">
                    <div class="py-8 flex flex-wrap md:flex-nowrap">
                        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                            <span
                                class="font-semibold title-font ">{{ $experience->company->name }}</span>
                            <span class="mt-1 text-gray-500 text-sm">
                                @isset($experience->end_date)
                                    De {{ date('m/Y', strtotime($experience->start_date)) }} à
                                    {{ date('m/Y', strtotime($experience->end_date)) }}
                                @else
                                    Depuis {{ date('m/Y', strtotime($experience->start_date)) }}
                                @endisset
                            </span>
                            <img class="w-20 h-20 mt-5 bg-gray-100 rounded-md"
                                src="images/company/{{ $experience->company->logo }}"
                                alt="">
                        </div>
                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-semibold text-n9turquoise title-font mb-2">
                                {{ $experience->title }}</h2>
                            <h3 class="text-md font-medium text-gray-500 title-font mb-2">
                                {{ $experience->subtitle }}</h3>
                            <p class="leading-relaxed">
                                {!! $experience->description !!}
                            </p>
                            <ul class="list-none mt-6">
                                @foreach ($experience->skills as $skill)
                                    <li class="flex items-center">
                                        <span
                                            class="inline-flex text-xs font-semibold text-gray-200 0">
                                            {{ $skill->name }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@stop
