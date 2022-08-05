@if ($paginator->hasPages())
     <nav>
         <ul class="news_pages">
             {{-- Previous Page Link --}}
             @if (!$paginator->onFirstPage())
             <li>
                  <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-angle-left"></i></a>
             </li>
             @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                   @foreach($element as $page => $url)
                      @if ($page == $paginator->currentPage())
                         <li><a class="news__page__link active">{{ $page }}</a></li>
                      @else
                         <li><a class="news__page__link" href="{{ $url }}">{{ $page }}</a></li>  
                      @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                      <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('paginator.next')"><i class="fas fa-angle-right"></i></a>
                </li>
            @endif
         </ul>
     </nav>
@endif