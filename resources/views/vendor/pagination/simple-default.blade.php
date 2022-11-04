@if(LaravelLocalization::getCurrentLocale() == 'ar')
    @if ($paginator->hasPages())
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
            <div class="btn-slider-wrap pt80">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <div class="btn-prev btn--style">
                        <span>{{__('website/home.Prev_Page')}}</span>
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>

                    </div>
                @else
                    <div class="btn-prev btn--style">

                        <a href="{{ $paginator->previousPageUrl() }}" ><span>{{__('website/home.Prev_Page')}}</span></a>
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                    </div>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <div class="btn-next btn--style">
                        <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                        <a href="{{ $paginator->nextPageUrl() }}"><span>{{__('website/home.Next_Page')}}</span></a>
                    </div>
                @else
                    <div class="btn-next btn--style">

                        <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                        <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                        <span>{{__('website/home.Next_Page')}}</span>
                    </div>
                @endif
            </div>
        </div>
    @endif
@else
    @if ($paginator->hasPages())
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <div class="btn-slider-wrap pt80">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <div class="btn-prev btn--style">

                <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                <span>{{__('website/home.Prev_Page')}}</span>
            </div>
            @else
                <div class="btn-prev btn--style">
                    <svg class="utouch-icon icon-hover utouch-icon-arrow-left-1"><use xlink:href="#utouch-icon-arrow-left-1"></use></svg>
                    <svg class="utouch-icon utouch-icon-arrow-left1"><use xlink:href="#utouch-icon-arrow-left1"></use></svg>
                    <a href="{{ $paginator->previousPageUrl() }}" ><span>{{__('website/home.Prev_Page')}}</span></a>
                </div>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <div class="btn-next btn--style">
                <a href="{{ $paginator->nextPageUrl() }}"><span>{{__('website/home.Next_Page')}}</span></a>
                <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
            </div>
            @else
                <div class="btn-next btn--style">
                    <span>{{__('website/home.Next_Page')}}</span>
                    <svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
                    <svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
                </div>
            @endif
        </div>
    </div>
    @endif
@endif
