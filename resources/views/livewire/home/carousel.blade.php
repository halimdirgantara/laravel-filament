<div class="w-full p-4">
    <div id="infinite-loop" data-carousel='{ "loadingClasses": "opacity-0", "isInfiniteLoop": true }'
        class="relative w-full">
        <div class="carousel h-80">
            <div class="carousel-body h-full opacity-0">
                @foreach ($posts as $key => $post)
                    <!-- Slide 1 -->
                    <div class="carousel-slide">
                        <div class="bg-base-300/60 flex h-full flex-col relative">
                            <img src="{{ asset('storage/' . $post->feature_image) }}"
                                class="object-cover absolute inset-0 w-full h-full" alt="{{ $post->title }}">
                            <a href="{{ route('post.show', $post->slug) }}" class="z-10 link-animated absolute bottom-4 left-0 right-0 text-center pt-4">
                                <span class="text-2xl sm:text-4xl">{{ $post->title }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Previous Slide -->
        <button type="button" class="carousel-prev">
            <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                <span class="icon-[tabler--chevron-left] size-5 cursor-pointer rtl:rotate-180"></span>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <!-- Next Slide -->
        <button type="button" class="carousel-next">
            <span class="sr-only">Next</span>
            <span class="size-9.5 bg-base-100 flex items-center justify-center rounded-full shadow">
                <span class="icon-[tabler--chevron-right] size-5 cursor-pointer rtl:rotate-180"></span>
            </span>
        </button>
    </div>
</div>
