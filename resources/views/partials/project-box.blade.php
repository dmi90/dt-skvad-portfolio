<div class="col-lg-6">
    <a class="portfolio-item" href="{{ route('project', ['seo_name' => $project->seo_name]) }}">
        <div class="caption">
            <div class="caption-content">
                <div class="h2">{{ $project->title }} ● {{ $project->year }}</div>
                <p class="mb-0">{{ $project->short_description }}</p>
            </div>
        </div>
        <img class="img-fluid" src="{{ asset('storage/' . $project->cover) }}" alt="{{ $project->short_description }}"/>
    </a>
</div>
