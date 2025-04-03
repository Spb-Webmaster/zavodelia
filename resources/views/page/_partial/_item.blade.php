




<section
    class="block elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40 pad_b40">




    <div class="elementor-container elementor-column-gap-default">


        <div class="witr_section_title">
            <div class="witr_section_title_inner text-center pad_b24">
                <h1>{{ $item->title }}</h1>
                {!!  (isset($item->subtitle))?'<h2>' .  $item->subtitle . '</h2>' : ''  !!}
            </div>

            @if($item->short_desc)
                <!-- single event -->
                <div class="col-lg-12 col-md-12 col-sm-12  witr_all_mb_30 pad_t16">
                    <div class="row techite-single-event_adn witr_event_style_5 align_item_center">
                        <div class="col-lg-3 col-md-6">
                            <!-- BLOG THUMB -->
                            <div class="techite-event-thumb_adn techite_no_before">
                                <a href="{{ Storage::url($item->img) }}" data-fancybox="img">
                                    <img fetchpriority="high" decoding="async" width="420"
                                         height="315"
                                         src="{{ Storage::url($item->img) }}"
                                         class="attachment-techite-event-default size-techite-event-default wp-post-image"
                                    ></a>
                            </div>

                        </div>
                        <div class="col-lg-9 col-md-9">
                            <!-- BLOG TITLE -->
                            <div class="event-page-title_adn ">
                                <h2>
                                    <a href="{{ route('product', ['slug' => $item->slug]) }}">{{ $item->title }}</a></h2>
                            </div>
                            <!-- content -->
                            <div class="witr_content_event">
                                {!!   $item->short_desc  !!}
                            </div>

                        </div>

                    </div>

                </div>
                <!-- single event -->

            @endif


        </div>
    </div>
    @if($item->image)
        <div class="elementor-container elementor-column-gap-default pad_t20 pad_b20">
            <div class="desc item_image">
                <img src="{{ Storage::url($item->image) }}" width="100%" style="width: 100%; height: auto" loading="lazy" alt="" />
            </div>
        </div>
    @endif

    <div class="elementor-container elementor-column-gap-default">
        <div class="desc item_image">
            {!!  $item->desc!!}
        </div>
    </div>

    <div class="elementor-container elementor-column-gap-default">
        <div class="desc w_100_important">
            @if($item->docs_visible)

                <div class="_docs">
                    <div class="_docs__flex">
                        @if($item->docs)
                            @foreach($item->docs as $d)
                                <div class="_d_item">
                                    <a class="co" href="{{ Storage::url($d['doc'])  }}"
                                       data-fancybox="gallery"
                                       data-caption=""
                                    >
                                        <img src="{{ Storage::url($d['doc'])  }}" alt="{{ (isset($d['doc_text']))? $d['doc_text'] : ''}}" />
                                    </a>
                                    <div class="_d_doc_text">{{ $d['doc_text'] }}</div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

            @endif
        </div>
    </div>

    <div class="elementor-container elementor-column-gap-default">
        <div class="desc w_100_important">
            @if($item->video_visible)

                <div class="ob_video">
                    @if($item->video)
                        @foreach($item->video as $v)

                            <div class="ob_controls">
                                @if($v['video_video_title'])
                                    <div class="desc ">
                                        <h4 class="">{{$v['video_video_title']}}</h4>
                                    </div>
                                @endif
                                @if($v['video_video_video'])

                                    <video controls width="840" height="473">
                                        <source src="{{ asset('/storage/' .$v['video_video_video'])  }}"
                                                type="video/mp4">
                                    </video>
                                @endif

                                @if($v['video_video_youtube'])
                                    {!!  render_video($v['video_video_youtube'], 840, 473)  !!}
                                @endif

                                @if($v['video_video_rutube'])
                                    {!!  render_video($v['video_video_rutube'], 840, 473)  !!}
                                @endif


                            </div>

                        @endforeach
                    @endif
                </div>
            @endif
        </div>
    </div>


    @if($item->image2)
        <div class="elementor-container elementor-column-gap-default pad_t20 pad_b20">
            <div class="desc item_image">
                <img src="{{ Storage::url($item->image2) }}" width="100%" style="width: 100%; height: auto" loading="lazy" alt="" />
            </div>
        </div>
    @endif

    <div class="elementor-container elementor-column-gap-default">
        <div class="desc item_image">
            {!!  $item->desc2!!}
        </div>
    </div>
</section>
