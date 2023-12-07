<x-app-layout>
    @foreach($teams as $team)
        <h1>{{ $team->name }}</h1>
    @endforeach
</x-app-layout>
