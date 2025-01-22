<div class="max-w-screen-lg mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Category : {{ Str::title($category->name) }}</h1>
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
        @foreach ($posts as $post)
            <div class="card group m-2 hover:shadow sm:max-w-sm flex flex-col h-full">
                <figure>
                    <img src="{{ asset('storage/' . $post->feature_image) }}" alt="{{ $post->title }}"
                        class="transition-transform duration-500 group-hover:scale-110" />
                </figure>
                <div class="card-body flex flex-col flex-1">
                    <h5 class="card-title mb-2.5">{{ $post->title }}</h5>
                    <p class="mb-6">{{ Str::limit($post->body, 100) }}</p>
                    <div class="card-actions mt-auto">
                        <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-between my-4">
        <x-pagination :page="$posts->currentPage()" :totalPages="$posts->lastPage()" />
    </div>
</div>
