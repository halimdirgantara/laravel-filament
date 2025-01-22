<div class="max-w-screen-lg mx-auto mt-6">
    <div class="breadcrumbs">
        <ul>
            <li>
                <a href="{{ route('home') }}" class="text-primary hover:text-primary-hover">
                    <span class="icon-[tabler--home] size-4"></span>
                    <span>Home</span>
                </a>
            </li>
            <li class="breadcrumbs-separator rtl:rotate-180">
                <span class="icon-[tabler--chevron-right] size-4"></span>
            </li>
            @foreach ($breadcrumbs as $breadcrumb)
                <li>
                    @if ($breadcrumb['url'])
                        <a href="{{ $breadcrumb['url'] }}" class="text-primary hover:text-primary-hover">
                            {{ $breadcrumb['label'] }}
                        </a>
                    @else
                        <span class="text-gray-600">{{ $breadcrumb['label'] }}</span>
                    @endif
                </li>
                @unless ($loop->last)
                    <li class="breadcrumbs-separator rtl:rotate-180">
                        <span class="icon-[tabler--chevron-right] size-4"></span>
                    </li>
                @endunless
            @endforeach
        </ul>
    </div>
</div>
