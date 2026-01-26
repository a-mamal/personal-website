<x-layout :title="'Admin Projects'">

    <h1>Projects (Admin)</h1>

    <p>
        <a href="{{ route('admin.projects.create') }}">+ Add new project</a>
    </p>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($projects as $project)
            <li>
                {{ $project->title }} — {{ $project->status }}
            </li>
        @endforeach
    </ul>

</x-layout>