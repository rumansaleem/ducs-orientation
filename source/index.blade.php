@extends('_layouts.master')

@section('body')
    <div class="relative min-h-64 h-screen-3/4 bg-cover" style="background-image: url('{{ $page->baseUrl }}/assets/images/department.jpg');">
        <div class="absolute inset-0 bg-black-75"></div>
        <div class="relative container flex flex-col h-full justify-center">
            <h1 class="text-center text-3xl"> Welcome to <span class="text-blue-400 font-bold">DUCS</span></h1>
            <p class="text-center mt-4 text-lg max-w-md lg:mx-auto">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis voluptates ut quis maiores sit, blanditiis debitis natus eveniet dignissimos consequatur expedita, accusantium deserunt distinctio corporis quasi rem odio at quibusdam.
            </p>
        </div>
    </div>
    <div class="container mb-24">
        <section class="py-8 text-center">
            <h2 class="section-header">
                DUCS Gallery
            </h2>
            <vue-lightbox :images="{{ json_encode($page->gallery()) }}"></vue-lightbox>
        </section>
        <section class="py-8 text-center">
            <h2 class="section-header">Courses Overview</h2>
            <div class="courses md:flex justify-center -my-2 md:-mx-2 md:my-0">
                <div class="w-full md:w-1/3 lg:w-1/4 bg-gray-700 rounded-lg p-4 my-2 md:my-0 md:mx-2">
                    <h3 class="text-lg font-bold mb-1">M.C.A</h3>
                    <h4 class="text-xs uppercase font-bold text-gray-400 mb-2">
                        2 years
                        <span class="mx-2">&#x2022;</span>
                        4 semester
                    </h4>
                    <ul class="list-disc ml-6 text-left">
                        <li>some arbitary info</li>
                        <li>some information</li>
                        <li>some arbitary information</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 lg:w-1/4 bg-gray-700 rounded-lg p-4 my-2 md:my-0 md:mx-2">
                    <h3 class="text-lg font-bold mb-1">M.Sc</h3>
                    <h4 class="text-xs uppercase font-bold text-gray-400 mb-2">
                        2 years
                        <span class="mx-2">&#x2022;</span>
                        4 semester
                    </h4>
                    <ul class="list-disc ml-6 text-left">
                        <li>some arbitary information</li>
                        <li>some arbitary information</li>
                        <li>some arbitary information</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="py-8 text-center">
            <h2 class="section-header">Teaching Staff</h2>
            <div class="staff flex flex-wrap -m-2 mb-12">
                @foreach ($page->content('staff.teaching.permanent') as $member)
                    <div class="staff-wrapper w-1/4 p-2">
                        @include('_partials.staff-member', ['member' => $member])
                    </div>
                @endforeach
            </div>
            <div class="staff flex flex-wrap -m-2">
                @foreach ($page->content('staff.teaching.temporary') as $member)
                <div class="staff-wrapper w-1/4 p-2">
                    @include('_partials.staff-member', ['member' => $member])
                </div>
                @endforeach
            </div>
        </section>
        <section class="py-8 text-center">
            <h2 class="section-header">Non-Teaching Staff</h2>
            <div class="staff flex flex-wrap justify-center -m-2">
                @foreach ($page->content('staff.non-teaching') as $member)
                <div class="staff-wrapper w-1/4 p-2">
                    @include('_partials.staff-member', ['member' => $member])
                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
