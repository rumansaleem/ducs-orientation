@extends('_layouts.master')

@section('body')

<div class="container">
    <section class="py-8 text-center">
        <h2 class="section-header">Shining Stars</h2>
        @foreach($achievements as $achievement)
        <div class="w-full p-4">
            @include("_partials.achievements.{$achievement->type}", compact('achievement'))
        </div>
        @endforeach
    </section>
    <section class="text-center py-8">
        <h2 class="section-header">
            DUCS Panel
        </h2>

        <div class="flex flex-wrap -m-2">
            @foreach($page->content('ducs_panel') as $designation => $student)
            <div class="staff-wrapper w-full md:w-1/2 lg:w-1/3 p-2">
                @include('_partials.student', [
                    'designation' => $designation,
                    'student' => $page->content("students.{$student}")->all()
                ])
            </div>
            @endforeach
        </div>
    </section>
    <section class="text-center py-8">
        <h2 class="section-header">
            Placement Coordinators
        </h2>
    
        <div class="flex flex-wrap -m-2">
            @foreach($page->content('placement_coordinators') as $designation => $student)
            <div class="staff-wrapper w-full md:w-1/2 lg:w-1/3 p-2">
                @include('_partials.student', [
                    'designation' => $designation,
                    'student' => $page->content("students.{$student}")->all()
                ])
            </div>
            @endforeach
        </div>
    </section>
    <section class="text-center py-8">
        <h2 class="section-header">
            Magazine Editors
        </h2>
        <div class="flex flex-wrap -m-2">
            @foreach($page->content('magazine_editors') as $designation => $student)
            <div class="staff-wrapper w-full md:w-1/2 lg:w-1/3 p-2">
                @include('_partials.student', [
                    'designation' => $designation,
                    'student' => $page->content("students.{$student}")->all()
                ])
            </div>
            @endforeach
        </div>
    </section>
</div>

@endsection