@if($degrees->isNotEmpty())
    <section id="education" class="about-section">
        <h2>Education</h2>

        <ul>
        @foreach($degrees as $degree)
            <li>
                {{-- Degree title and optional field --}}
                <strong>{{ $degree->title }}</strong>
                @if($degree->field)
                    - {{ $degree->field }}
                @endif
                <br>

                {{-- Issuer name --}}
                <em>{{ $degree->issuer->name ?? 'Unknown issuer' }}</em>
                <br>

                {{-- Formatted start and end dates --}}
                <span>{{ $degree->formatted_start }} - {{ $degree->formatted_end }}</span>

                {{-- Optional grade --}}
                @if($degree->grade)
                    <br>Grade: {{ $degree->grade }}
                @endif
            </li>
        @endforeach
        </ul>
    </section>
@endif