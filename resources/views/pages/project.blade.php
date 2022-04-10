@extends('main')

@section('content')
    <div class="col-lg-12 project-cover">
        <img src="{{ asset('storage/' . $project->cover) }}">
    </div>

    <a class="menu-toggle rounded" href="/#portfolio"><i class="fas fa-arrow-left"></i></a>

    <section class="content-section bg-primary text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h1>{{ $project->title }}</h1>
            <p class="mt-xxl-5">{{ $project->short_description }}</p>
        </div>
    </section>
    <section class="content" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-12 project-content mt-4">
                    {!! $project->long_description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
