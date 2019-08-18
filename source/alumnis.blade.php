@extends('_layouts.master')

@section('body')

<div class="container">
    <section class="py-8 text-center mb-12">
        <h2 class="section-header">
            Alumnis
        </h2>
        <table class="w-full md:5/6 lg:w-3/4 mx-auto border-collapse rounded-lg overflow-hidden">
            <thead>
                <tr class="uppercase text-sm text-gray-400">
                    <th class="bg-gray-700 border-b-4 border-blue-400 px-3 pt-2 pb-2 text-left">Name</th>
                    <th class="bg-gray-700 border-b-4 border-blue-400 px-3 pt-2 pb-2 text-left table-fit">Course / Batch</th>
                    <th class="bg-gray-700 border-b-4 border-blue-400 px-3 pt-2 pb-2 text-left table-fit">Designation</th>
                    <th class="bg-gray-700 border-b-4 border-blue-400 px-3 pt-2 pb-2 text-left">Company</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($page->content('alumnis') as $alumni)
                <tr class="border-b border-{{ $loop->last ? 'transparent' : 'gray-700' }} text-left text-base lg:text-lg bg-gray-800">
                    <td class="px-3 py-2 font-bold">
                        @if(array_key_exists('link', $alumni))
                        <a href="{{ $alumni['link'] }}" class="hover:text-blue-400">{{ $alumni['name'] }}</a>
                        @else
                        {{ $alumni['name'] }}
                        @endif
                    </td>
                    <td class="px-3 py-2 table-fit">{{ $alumni['course'] }} ({{ $alumni['year'] }})</td>
                    <td class="px-3 py-2 table-fit">{{ $alumni['designation'] }}</td>
                    <td class="px-3 py-2 ">{{ $alumni['company'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>

@endsection