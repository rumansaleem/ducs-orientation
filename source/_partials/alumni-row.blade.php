<div class="bg-gray-800 p-4 rounded-lg flex items-center">
    <div class="relative w-24 h-24 mx-auto mr-3">
        <img src="{{ $page->baseUrl }}/{{ $alumni['avatar'] }}" 
            class="rounded-full w-full h-full object-cover"
            alt="{{ $alumni['name'] }}">
        @if(array_key_exists('company-logo', $alumni))
        <div class="absolute bottom-0 right-0 p-1 rounded-full bg-white shadow">
            <img src="{{ $page->baseUrl }}/{{ $alumni['company-logo'] }}" 
                class="object-fit w-8 h-8"
                alt="{{ $alumni['company'] }}">
        </div>
        @endif
    </div>
    <div class="flex-1 text-left pl-2">
        <h5 class="text-xs uppercase font-bold text-gray-400 mb-1">{{ $alumni['designation'] }}</h5>
        <h3 class="text-xl font-bold mb-1">
            @if(array_key_exists('name', $alumni))
            <a href="{{ $alumni['link'] }}" class="hover:text-blue-400">{{ $alumni['name'] }}</a>
            @else
            {{ $alumni['name'] }}
            @endif
        </h3>
        <h4 class="text-base font-bold text-gray-400">{{ $alumni['company'] }}</h4>
        @if(array_key_exists('email', $alumni))
        <p class="mt-2 whitespace-no-wrap">
            @include('_svg.email', ['class' => 'h-current mr-2'])
            {{ $alumni['email'] }}
        </p>
        @endif
    </div>
</div>