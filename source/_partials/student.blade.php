<div class="bg-gray-800 p-4 rounded-lg flex items-center">
    <div class="relative w-32 h-32 mx-auto mr-3">
        <img src="{{ $page->baseUrl }}/{{ $student['avatar'] }}" class="rounded-full w-full h-full object-cover"
            alt="{{ $student['name'] }}">
        @if(array_key_exists('course', $student))
        <div class="absolute bottom-0 -mb-2 right-0 -mr-2 px-3 py-1 rounded-full bg-blue-400 text-white shadow">
            <h5 class="text-xs font-bold uppercase tracking-wide leading-none">{{ $student['course'] }}</h5>
        </div>
        @endif
    </div>
    <div class="flex-1 text-left pl-2">
        <h3 class="text-xl font-bold mb-1">
            @if(array_key_exists('name', $student))
                <a href="{{ $student['link'] }}" class="hover:text-blue-400">{{ $student['name'] }}</a>
            @else
                {{ $student['name'] }}
            @endif
        </h3>
        @if(isset($designation))
        <h5 class="text-xs uppercase font-bold text-gray-400 mb-1">{{ $designation }}</h5>
        @endif
        @if(array_key_exists('contact', $student) && count($student['contact']))
        <div class="flex flex-wrap -mx-2 -my-1">
            @foreach($student['contact'] as $type => $value)
            <p class="whitespace-no-wrap mx-2 my-1">
                @include("_svg.{$type}", ['class' => 'h-current mr-1'])
                {{ $value }}
            </p>
            @endforeach
        </div>
        @endif
    </div>
</div>