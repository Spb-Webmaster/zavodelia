<div class="robotil-counter-bg breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 txtc  text-center">
                <div class="brpt brptsize">
                    <h1>{{ $item->title }}</h1>
                </div>
                <div class="breadcumb-inner">
                    <ul>Вы здесь!<i class="icofont-thin-right"></i>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <i class="icofont-thin-right"></i><span
                            class="current">{{ $item->title }}</span></ul>
                    <!-- .breadcrumbs -->
                </div>
            </div>
        </div>
    </div>

</div>

<section
    class="block elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default elementor-section-height-default pad_t40 pad_b40">

    <div class="elementor-container elementor-column-gap-default">
        <div class="witr_section_title">
            <div class="witr_section_title_inner text-center pad_b24">
                <h1>{{ $item->title }}</h1>
                {!!  (isset($item->subtitle))?'<h2>' .  $item->subtitle . '</h2>' : ''  !!}
            </div>


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
