@php
    $student = $page->content("students.{$achievement->student}")->all();
@endphp
<div class="bg-gray-800 p-6 rounded-lg text-left">
    <h2 class="text-2xl text-center mb-6">{{ $achievement->title }}</h2>
    <div class="flex items-center mb-8">
        <img src="{{ $page->baseUrl }}/{{ $student['avatar'] }}" class="rounded-full w-24 h-24 object-cover"
            alt="{{ $student['name'] }}">
        <div class="flex-1 text-left pl-6 text-gray-300">
            <h3 class="text-xl font-bold mb-1 flex items-center">
                @if(array_key_exists('link', $student))
                <a href="{{ $student['link'] }}" class="hover:text-blue-400">{{ $student['name'] }}</a>
                @else
                {{ $student['name'] }}
                @endif
                <div class="ml-3 px-3 py-1 rounded-full bg-blue-400 text-white shadow-md">
                    <h5 class="text-xs font-bold uppercase tracking-wide leading-none whitespace-no-wrap">{{ $student['course'] }}</h5>
                </div>
            </h3>
            @if(array_key_exists('contact', $student) && count($student['contact']) > 0)
                <div class="flex flex-wrap -mx-3 -my-1">
                    @foreach($student['contact'] as $type => $value)
                    <p class="whitespace-no-wrap mx-3 my-1">
                        @include("_svg.{$type}", ['class' => 'h-current mr-1'])
                        {{ $value }}
                    </p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <div class="markdown opacity-75">
        {!! $achievement !!}
    </div>
</div>