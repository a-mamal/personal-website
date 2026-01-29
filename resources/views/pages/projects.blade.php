<x-site-layout :title="'Projects'">

    <header class="projects-header">
        <h1>Projects</h1>
        <p>A selection of projects I’ve developed, showcasing skills and focus areas.</p>
    </header>

    <section class="projects-list">

        @forelse($projects as $project)
            <article class="project-item">
                {{-- Title  --}}
                <h2>{{ $project->title }}</h2>

                {{-- Type --}}
                @if($project->type)
                    <h3 class="project-type">{{ $project->type }}</h3>
                @endif

                {{-- Description --}}
                @if($project->description)
                    <p class="project-description">{{ $project->description }}</p>
                @endif

                {{-- Highlights --}}
                @if($project->highlights)
                    <ul class="project-highlights">
                        @foreach($project->highlights as $highlight)
                            <li>{!! $highlight !!}</li>
                        @endforeach
                    </ul>
                @endif

                {{-- Links --}}
                <div class="project-links">
                    @if($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank">GitHub</a>
                    @endif
                    @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank">Live Demo</a>
                    @endif
                </div>
            </article>

            @empty
                <p>No projects available at the moment. Check back soon!</p>
            @endforelse

    </section>

</x-site-layout>