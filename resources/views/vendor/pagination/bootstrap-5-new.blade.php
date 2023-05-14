@if ($paginator->hasPages())
    <div class="basic-pagination wow fadeInUp text-center" data-wow-delay=".2s">
        <ul>
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="arrow_left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span><a href=""><i
                                    class="fal fa-ellipsis-h"></i></a></span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @php($count = 1)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><a href="#"><span>{{ $page }}</span></a>
                            </li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                        @php($count++)
                    @endforeach
                @endif
            @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i
                            class="arrow_right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
