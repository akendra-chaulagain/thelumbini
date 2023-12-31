@php
    
    $all_ads_5 = App\Models\Navigation::query()
        // ->where('nav_category', 'Home')
        ->where('page_type', '=', 'Ads')
        ->where('page_status', '1')
        ->where('position', '5')
        // ->orderBy('position', 'ASC')
        ->first();
    
    $all_ads_6 = App\Models\Navigation::query()
        // ->where('nav_category', 'Home')
        ->where('page_type', '=', 'Ads')
        ->where('page_status', '1')
        ->where('position', '6')
        // ->orderBy('position', 'ASC')
        ->first();
    
@endphp



<div class="popular__section-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="wrapper__list__article">
                    <h4 class="border_section">विश्व</h4>
                </div>
                <div class="row ">
                    @foreach ($world as $world_item)
                        <div class="col-sm-12 col-md-6 mb-4">
                            <!-- Post Article -->
                            <div class="card__post ">
                                <div class="card__post__body card__post__transition">
                                    <a href="/detail/{{ $world_item->nav_name }}">
                                        <img src="{{ $world_item->banner_image }}" class="img-fluid" alt="">
                                    </a>
                                    <div class="card__post__content bg__post-cover">

                                        <div class="card__post__title">
                                            <h5>
                                                <a href="/detail/{{ $world_item->nav_name }}">
                                                    {{ Str::limit($world_item->caption, 50) }}</a>
                                            </h5>
                                        </div>
                                        <div class="card__post__author-info">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a style="color: white" href="#">
                                                        by {{ $world_item->icon_image_caption }}
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <span>
                                                        {{ $world_item->page_keyword }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>


            <div class="col-md-12 col-lg-4">
                <aside class="wrapper__list__article">



                    {{-- world side ads --}}


                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="world_sidebar_ads_1">
                                        <a target="_blank" href="{{ $all_ads_5->extra_one ?? ' ' }}">
                                            <img src="{{ $all_ads_5->banner_image ?? '' }}" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="bg-light">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="world_sidebar_ads_2">
                                        <a target="_blank" href="{{ $all_ads_6->extra_one ?? ' ' }}">
                                            <img src="{{ $all_ads_6->banner_image ?? '' }}" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>





                </aside>
            </div>
        </div>
    </div>
</div>
