{{-- features news start --}}
@php
    
    $all_ads_4 = App\Models\Navigation::query()
        // ->where('nav_category', 'Home')
        ->where('page_type', '=', 'Ads')
        ->where('page_status', '1')
        ->where('position', '4')
        // ->orderBy('position', 'ASC')
        ->first();
    
@endphp



<section>


    {{-- feature news --}}
    <div class="popular__news-header-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper__list__article">
                        <h4 class="border_section">अर्थ/बिजनेस</h4>
                    </div>
                    <div class="top__news__slider">

                        @foreach ($economy as $economys_item)
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="/detail/{{ $economys_item->nav_name }}">
                                            {{-- <a href="/detail/{{ $programs_item->nav_name }}"><i class="fa fa-link"></i></a> --}}
                                            <img src="{{ $economys_item->banner_image }}" alt=""
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by {{ $economys_item->icon_image_caption }}
                                                </span>,
                                            </li>

                                            <li class="list-inline-item">
                                                <span>
                                                    {{ $economys_item->page_keyword }}
                                                </span>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="/detail/{{ $economys_item->nav_name }}">
                                                {{ Str::limit($economys_item->caption, 52) }}

                                                {{-- {!! $economys_item->short_content !!} --}}
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ads_after_features_news">
                        <a target="_blank" href="{{ $all_ads_4->extra_one ?? ' ' }}">
                            <img src="{{ $all_ads_4->banner_image ?? '' }}" alt="">
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>





    <!-- End Popular news carousel -->
</section>
