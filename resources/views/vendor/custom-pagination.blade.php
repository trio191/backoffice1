<nav aria-label="Page navigation" style="float: right;">
    <ul class="pagination pagination-square pagination-secondary">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link waves-effect"><i class="ti ti-chevrons-left ti-xs"></i></span></li>
            <li class="page-item disabled"><span class="page-link waves-effect"><i class="ti ti-chevron-left ti-xs"></i></span></li>
        @else
            <li class="page-item">
                <a class="page-link waves-effect" href="{{ $paginator->url(1) }}" rel="prev"><i class="ti ti-chevrons-left ti-xs"></i></a>
            </li>
            <li class="page-item">
                <a class="page-link waves-effect" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="ti ti-chevron-left ti-xs"></i></a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link waves-effect">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link waves-effect" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link waves-effect" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="ti ti-chevron-right ti-xs"></i></a>
            </li>
            <li class="page-item">
                <a class="page-link waves-effect" href="{{ $paginator->url($paginator->lastPage()) }}" rel="next"><i class="ti ti-chevrons-right ti-xs"></i></a>
            </li>
        @else
            <li class="page-item disabled"><span class="page-link waves-effect"><i class="ti ti-chevron-right ti-xs"></i></span></li>
            <li class="page-item disabled"><span class="page-link waves-effect"><i class="ti ti-chevrons-right ti-xs"></i></span></li>
        @endif
    </ul>
</nav>
