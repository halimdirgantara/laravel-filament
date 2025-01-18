<nav class="navbar rounded-box shadow">
    <div class="w-full md:flex md:items-center md:gap-2">
        <div class="flex items-center justify-between">
            <div class="navbar-start items-center justify-between max-md:w-full">
                <a class="link text-base-content link-neutral text-xl font-semibold no-underline" href="#">{{ config('app.name') }}</a>
                <div class="md:hidden">
                    <button type="button" class="collapse-toggle btn btn-outline btn-secondary btn-sm btn-square"
                        data-collapse="#default-navbar-collapse" aria-controls="default-navbar-collapse"
                        aria-label="Toggle navigation">
                        <span class="icon-[tabler--menu-2] collapse-open:hidden size-4"></span>
                        <span class="icon-[tabler--x] collapse-open:block hidden size-4"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="default-navbar-collapse"
            class="md:navbar-end collapse hidden grow basis-full overflow-hidden transition-[height] duration-300 max-md:w-full">
            <ul class="menu md:menu-horizontal gap-2 p-0 text-base max-md:mt-2">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('post') }}">Blog</a></li>
                <li><a href="{{ route('category') }}">Category</a></li>
                <li><a href="{{ route('about') }}">About</a></li>                
            </ul>
        </div>
    </div>
</nav>