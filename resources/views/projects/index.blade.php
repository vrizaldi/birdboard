@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex items-center justify-between w-full">
            <h2 class="text-gray-200 text-small font-normal">My Projects</h2>
            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="bg-white rounded-lg shadow p-5" style="height: 200px">
                    <h1 class="font-normal text-xl py-4 -ml-5 border-l-4 border-blue-400 pl-4 mb-3">
                        <a href="{{$project->path()}}">
                            {{ $project->title }}
                        </a>
                    </h1>
                    <div class="text-gray-200">{{ Str::limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
@endsection
