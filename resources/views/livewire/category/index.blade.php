<div class="max-w-screen-lg mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Category List</h1>
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
        @foreach ($categories as $category)
            <div class="card group m-2 hover:shadow sm:max-w-sm flex flex-col h-full">
                <figure>
                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                        class="transition-transform duration-500 group-hover:scale-110" />
                </figure>
                <div class="card-body flex flex-col flex-1">
                    <h5 class="card-title mb-2.5">{{ $category->name }}</h5>
                    <p class="mb-6">{{ Str::limit($category->description, 100) }}</p>
                    <div class="card-actions justify-between items-center">
                        <p class="mb-2">Total Posts: {{ $category->posts->count() }}</p>
                        <a href="{{ route('category.show', $category->slug) }}" class="btn btn-primary">View All
                            Posts</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-between my-4">
        <x-pagination :page="$categories->currentPage()" :totalPages="$categories->lastPage()" />
    </div>
</div>
