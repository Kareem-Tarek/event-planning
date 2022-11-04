<div class="row mb60">
    <div class="col-lg-12">
        <nav class="navigation">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a disabled class="page-numbers current"><span>«</span></a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="page-numbers"><span>«</span></a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a disabled class="page-numbers"><span>{{ $element }}</span></a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a disabled class="page-numbers current"><span>{{ $page }}</span></a>
                        @else
                            <a href="{{ $url }}" class="page-numbers"><span>{{ $page }}</span></a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())

                <a href="{{ $paginator->nextPageUrl() }}" class="page-numbers"><span>»</span></a>
            @else

                <a disabled class="page-numbers current"><span>»</span></a>
            @endif
        </nav>
    </div>
</div>
