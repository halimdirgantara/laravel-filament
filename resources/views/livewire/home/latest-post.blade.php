<div class="container mx-auto px-6 lg:px-16 py-8">
    <h2 class="text-2xl font-bold mb-4 text-center">Latest Posts</h2>
    <div class="grid grid-cols-3 card-group gap-2 max-w-sm sm:max-w-full">
    @foreach ($posts as $post)
        <div class="card">
            <div class="absolute top-0 left-0 bg-opacity-75 text-white bg-primary m-2 p-2 rounded-lg">
                {{ $post->category->name }}
            </div>
            <figure><img src="{{ asset('storage/' . $post->feature_image) }}" alt="{{ $post->title }}" /></figure>
            <div class="card-body">
                <a class="link-animated" href="{{ route('post.show', $post->slug) }}">
                    <h5 class="card-title mb-2.5">{{ $post->title }}</h5>
                </a>
                <p>{{ $post->body }}</p>
            </div>
            <div class="card-footer">
                <div class="flex justify-between items-center">
                    <p class="text-base-content/50 text-sm">
                        <span class="icon-[tabler--user] size-5"></span>
                        {{ $post->creator->name }}
                    </p>
                    <p class="text-base-content/50 text-sm">{{ $post->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
