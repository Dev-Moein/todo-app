@if ($paginator->hasPages())
    <div class="w-full flex justify-center mt-6">
        <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center space-x-1">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 text-sm font-medium text-yellow-400 bg-yellow-900 border border-yellow-700 rounded-md cursor-default">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 text-sm font-medium text-yellow-500 bg-transparent border border-yellow-500 rounded-md hover:bg-yellow-500 hover:text-black transition">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Dots --}}
                @if (is_string($element))
                    <span class="px-3 py-1 text-sm font-medium text-yellow-500">{{ $element }}</span>
                @endif

                {{-- Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-1 text-sm font-medium text-black bg-yellow-500 border border-yellow-500 rounded-md">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-1 text-sm font-medium text-yellow-500 bg-transparent border border-yellow-500 rounded-md hover:bg-yellow-500 hover:text-black transition">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 text-sm font-medium text-yellow-500 bg-transparent border border-yellow-500 rounded-md hover:bg-yellow-500 hover:text-black transition">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="px-3 py-1 text-sm font-medium text-yellow-400 bg-yellow-900 border border-yellow-700 rounded-md cursor-default">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </nav>
    </div>
@endif

