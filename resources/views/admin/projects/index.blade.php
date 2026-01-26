<x-layout :title="'Admin Projects'">

    <h1>Projects (Admin)</h1>

    <p>
        <a href="{{ route('admin.projects.create') }}">+ Add new project</a>
    </p>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @forelse($projects as $project)
            <li>
                <strong>{{ $project->title }}</strong>

                @if($project->type)
                    - {{ $project->type }}
                @endif

                - {{ ucfirst($project->status) }}
                <br>

                {{ Str::limit($project->description, 150) }}

                @if($project->highlights)
                    <ul>
                        @foreach($project->highlights as $highlight)
                            <li>{{ $highlight }}</li>
                        @endforeach
                    </ul>
                @endif

                @if($project->project_url)
                    <a href="{{ $project->project_url }}" target="_blank">Project URL</a>
                @endif

                @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
                @endif

            </li>
            
        @empty
            <li>No projects found.</li>
        @endforelse
    </ul>

</x-layout>
