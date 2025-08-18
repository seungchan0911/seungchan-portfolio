@extends('layout')

@section('content')
    <section class="introduce">
        <div class="text-group">
            <div class="title">Designing Code<br>Coding Design.</div>
            <div class="subtitle">Blending creativity and logic to build seamless digital experiences.</div>
        </div>
        <div class="button-group">
            <a href=""><div>About</div></a>
            <a href="{{ route('contact') }}"><div>Contact</div></a>
        </div>
    </section>
    <section class="works">
        <div class="section-title">featured projects</div>
        <div class="projects">
            @foreach ($projects->take(4) as $project)
                <a href="{{ $project->link_url }}">
                    <div class="project">
                        <img src="{{ asset($project->image_path) }}" alt="">
                        @if ($project->published_at)
                            <div class="created-at">{{ $project->published_at->format('Y. m. d.') }}</div>
                        @endif
                        <div class="description">{{ $project->title }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <section class="capabilities">
        <div class="section-title">capabilities</div>
        <div class="table">
            <div class="table-group">
                <div class="h">design</div>
                <div class="h">code</div>
                <div class="r">You get a clean interface, built to function without distraction.</div>
                <div class="r">You can expect solid structure, written to work without surprises.</div>
            </div>
            <div class="table-group">
                <div class="h">speed</div>
                <div class="h">accuracy</div>
                <div class="r">You send a message, I respond and deliver without delay.</div>
                <div class="r">You receive results as intended, with no detail left behind.</div>
            </div>
        </div>
    </section>
@endsection