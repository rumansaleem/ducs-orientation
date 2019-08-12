@extends('_layouts.master')

@section('body')

<div class="container">
    <section class="py-8 text-center mb-12">
        <h2 class="section-header">
            Alumnis
        </h2>
        <div class="flex flex-wrap -m-2">
            @foreach ($page->content('alumnis') as $alumni)
            <div class="staff-wrapper w-full md:w-1/2 lg:w-1/3 p-2">
                @include('_partials.alumni', ['member' => $alumni])
            </div>
            @endforeach
        </div>
    </section>
</div>

@endsection