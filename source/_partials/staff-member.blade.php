<div class="bg-gray-800 p-4 rounded-lg shadow-inner-drop-md">
    <div class="rounded-full w-24 h-24 object-cover mx-auto mb-3 bg-gray-600 overflow-hidden shadow-md">
        <img src="{{ $page->baseUrl }}/{{ $member['avatar'] }}" 
            class="w-full h-full flex items-center"
            alt="{{ $member['name'] }}">
    </div>
    <h3 class="text-lg font-bold mb-1 flex justify-center">
        {{ $member['name'] }}
        
    </h3>
    <h4 class="text-xs uppercase font-bold text-gray-400 mb-2 flex justify-center items-center">
        {{ $member['designation'] }}
        @if(array_key_exists('label', $member))
        <span class="ml-2 bg-blue-400 text-white px-3 py-1 rounded-full">{{ $member['label'] }}</span>
        @endif
    </h4>
    <p class="mb-4 whitespace-no-wrap">
        <svg class="inline-block h-current mr-1 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
            <polyline points="22,6 12,13 2,6"></polyline>
        </svg>
        {{ $member['email'] }}
    </p>
    @if(array_key_exists('interests',$member) && count($member['interests']))
    <div class="text-left">
        <h5 class="whitespace-no-wrap text-xs uppercase font-bold text-gray-400 mb-2">
            Areas of Interest
        </h5>
        <div class="flex flex-wrap -m-1">
            @foreach ($member['interests'] as $interest)
            <span class="inline-block text-xs bg-blue-500 upppercase font-bold text-white m-1 px-2 py-1 rounded">
                {{ $interest }}
            </span>
            @endforeach
        </div>
    </div>
    @endif
</div>