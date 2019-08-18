@php
$team = collect($achievement->team ?? [])->map(function($team) use ($page) {
    $student = $page->content("students.{$team['member']}")->all();
    $student['designation'] = $team['designation'] ?? 'Member';
    return $student;
})->groupBy('designation');
@endphp

<div class="bg-gray-800 rounded-lg text-left overflow-hidden">
    <div class="flex flex-col bg-cover bg-fixed bg-center" style="min-height: 60vh; background-image: url('{{ $page->baseUrl }}/{{ $achievement['avatar'] }}');">
        <div class="px-6 w-full flex-1 flex flex-col justify-end h-full" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 70%, rgba(0, 0, 0, 0.9) 100%);">
            <h3 class="text-2xl font-bold mb-1"> {{ $achievement->title }}</h2>
            <h4 class="text-xl font-bold capitalize mb-2">
                {{ $achievement->event }}
            </h3>
        </div>
    </div>
    <div class="p-6">

        <div class="markdown opacity-75 mb-6">
            {!! $achievement !!}
        </div>
        
        @foreach(['Leader', 'Member', 'Mentor'] as $designation)
        <h5 class="mt-2 mb-1 font-semibold uppercase text-xs">{{ $designation . ($designation == 'Leader' ? '' : 's') }}</h5>
        <div class="flex flex-wrap -m-2 mb-4">
            @foreach($team->get($designation) as $student)
                <div class="m-2 bg-gray-600 flex items-center rounded-full">
                    <div class="flex-shrink-0">
                        <img src="{{ $page->baseUrl }}/{{ $student['avatar'] }}" alt="{{ $student['name'] }}" 
                            class="w-12 h-12 rounded-full">
                    </div>
                    <div class="pl-2 pr-3">
                        <h4 class="text-sm capitalize font-bold mb-1">{{ $student['name'] }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>