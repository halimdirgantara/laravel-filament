<div class="max-w-screen-lg mx-auto mt-6">
    <div class="card bg-base-100">
        <!-- Feature Image -->
        <figure class="h-96">
            <img src="{{ asset('storage/' . $post->feature_image) }}" 
                 alt="{{ $post->title }}" 
                 class="w-full h-full object-cover">
        </figure>

        <div class="card-body">
            <!-- Category Badge -->
            <div class="mb-4">
                <span class="badge badge-primary">{{ $post->category->name }}</span>
            </div>

            <!-- Title -->
            <h1 class="card-title text-4xl mb-4">{{ $post->title }}</h1>

            <!-- Author and Date Info -->
            <div class="flex items-center gap-4 mb-6 text-base-content/60">
                <div class="flex items-center gap-2">
                    <span class="icon-[tabler--user] size-5"></span>
                    <span>{{ $post->creator->name }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="icon-[tabler--calendar] size-5"></span>
                    <span>{{ $post->created_at->format('M d, Y') }}</span>
                </div>
            </div>

            <!-- Content -->
            <div class="prose max-w-none">
                {!! $post->body !!}
            </div>

            <!-- Tags -->
            @if($post->tags->count() > 0)
                <div class="flex gap-2 mt-8">
                    @foreach($post->tags as $tag)
                        <a href="#">
                            <span class="badge badge-outline">{{ $tag->name }}</span>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    <!-- Share Buttons -->
    <div class="card bg-base-100 mt-6 p-6">
        <h3 class="text-lg font-semibold mb-4">Share this post</h3>
        <div class="flex gap-4">
            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" 
               target="_blank" 
               class="btn btn-outline btn-square">
                <span class="icon-[tabler--brand-twitter] size-5"></span>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" 
               target="_blank" 
               class="btn btn-outline btn-square">
                <span class="icon-[tabler--brand-facebook] size-5"></span>
            </a>
            <a href="https://www.linkedin.com/shareArticle?url={{ url()->current() }}" 
               target="_blank" 
               class="btn btn-outline btn-square">
                <span class="icon-[tabler--brand-linkedin] size-5"></span>
            </a>
        </div>
    </div>
</div>
