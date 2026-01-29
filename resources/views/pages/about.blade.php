<x-site-layout :title="'About | Mamalikidou Anastasia'">
    <x-slot name="header">
        <h1>About</h1>
    </x-slot>

    @include('partials.about.bio')
    @include('partials.about.education')
    @include('partials.about.experience')
    @include('partials.about.certifications')
    @include('partials.about.languages')
</x-site-layout>