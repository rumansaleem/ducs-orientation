@extends('_layouts.master')

@section('body')
    <div class="relative min-h-64 h-screen-3/4 bg-cover group" style="background-image: url('{{ $page->baseUrl }}/assets/images/department.jpg');">
        <div class="absolute inset-0 bg-black-75 group-hover:bg-transparent transition-background"></div>
        <div class="relative container flex flex-col h-full justify-center group-hover:opacity-0 transition-opacity">
            <h1 class="text-center text-3xl"> Welcome to <span class="text-blue-400 font-bold">DUCS</span></h1>
            <p class="text-center mt-4 text-lg max-w-sm lg:mx-auto text-lg">
                {{ $page->intro }}
            </p>
        </div>
    </div>
    <div class="container mb-24">
        <section class="py-8 text-center">
            <h2 class="section-header">Courses Overview</h2>
            <div class="courses md:flex justify-center -my-2 md:-mx-2 md:my-0">
                @foreach ($page->content('courses') as $course)
                <div class="w-full md:w-1/3 shadow-md bg-gray-800 rounded-lg p-4 my-2 md:my-0 md:mx-2">
                    <h3 class="text-lg font-bold mb-1">{{ $course['title'] }}</h3>
                    <h4 class="text-xs uppercase font-bold text-gray-400 mb-2">
                        {{ $course['years'] }} years
                        <span class="mx-2">&#x2022;</span>
                        {{ $course['semesters'] }} semesters
                    </h4>
                    <ul class="list-disc ml-6 text-left">
                        @foreach($course['semester-details'] as $semester => $detail)
                        <li>
                            <span class="text-sm uppercase font-bold tracking-wide text-gray-500 mr-1">Semester {{ $semester }}</span> 
                            <br>
                            {{ $detail }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </section>
        @foreach( $page->content('staff') as $staffType => $members)
        <section class="py-8 text-center">
            <h2 class="section-header">{{ $staffType }}</h2>
            <div class="staff flex flex-wrap -m-2 mb-8">
                @foreach ($members as $member)
                    <div class="staff-wrapper w-full md:w-1/2 lg:w-1/3 p-2">
                        @include('_partials.staff-member', ['member' => $member])
                    </div>
                @endforeach
            </div>
        </section>
        @endforeach
        <section class="py-8 text-center">
            <h2 class="section-header">
                Life @ DUCS
            </h2>
            <vue-lightbox :images="{{ json_encode($page->gallery()) }}"></vue-lightbox>
        </section>
    </div>

@endsection
