@extends('layout')

@section('content')
    <section class="introduce">
        <div class="text-group">
            <div class="title">Gallery of My Work.</div>
            <div class="subtitle">My projects, collected here.</div>
        </div>
    </section>
    <section>
        <div class="section-title">Client Works</div>
        <div class="projects">
            @foreach ($projects as $project)
                @if ($project->tags->contains('slug', 'client_works'))
                    <a href="{{ $project->link_url }}">
                        <div class="project">
                            <img src="{{ asset($project->image_path) }}" alt="">
                            @if ($project->published_at)
                                <div class="created-at">{{ $project->published_at->format('Y. m. d.') }}</div>
                            @endif
                            <div class="description">{{ $project->title }}</div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </section>
    <section>
        <div class="section-title">Personal Works</div>
        <div class="projects">
            @foreach ($projects as $project)
                @if ($project->tags->contains('slug', 'personal_works'))
                    <a href="{{ $project->link_url }}">
                        <div class="project">
                            <img src="{{ asset($project->image_path) }}" alt="">
                            @if ($project->published_at)
                                <div class="created-at">{{ $project->published_at->format('Y. m. d.') }}</div>
                            @endif
                            <div class="description">{{ $project->title }}</div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </section>
    <section>
        <div class="section-title">Other Experiments</div>
        <div class="projects">
            @foreach ($projects as $project)
                @if ($project->tags->contains('slug', 'concept_projects'))
                    <a href="{{ $project->link_url }}">
                        <div class="project">
                            <img src="{{ asset($project->image_path) }}" alt="">
                            @if ($project->published_at)
                                <div class="created-at">{{ $project->published_at->format('Y. m. d.') }}</div>
                            @endif
                            <div class="description">{{ $project->title }}</div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </section>
@endsection