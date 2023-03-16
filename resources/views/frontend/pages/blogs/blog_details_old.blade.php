@extends('frontend.master')
@section('content')



<!--======// Banner Section //======-->
<section class="banner_section">
    <!-- slider -->
    <div class="banner_slider">
        <!-- slider -->
        <div class="slider_inage">
            <img src="http://165.22.48.109/ngenit/storage/kjX8qXJiNTFU4iQj1678868147.jpg" alt="">
        </div>
        <!-- slider -->
        <!-- slider -->
        {{-- <div class="slider_inage">
            <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
        </div> --}}
        <!-- slider -->
        {{-- <div class="slider_inage">
            <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
        </div> --}}
        <!-- slider -->
        {{-- <div class="slider_inage">
            <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
        </div> --}}
        <!-- slider -->
        {{-- <div class="slider_inage">
            <img src="{{ asset('storage/requestImg/' . $home->branner1) }}" alt="">
        </div> --}}
    </div>
</section>
<!-- banner start end-->
<!--======// Home Cart Section //======-->
<section class="home_card_wrapper" style="margin-top: 2.6rem;">
    <div class="container">
        <!-- wrapper -->

            <div class="row m-0">
                <!-- home card item -->
                <div class="col-lg-6 col-sm-12">
                    <div class="home_card_item">
                        <h5 class="home_card_item_title"></h5>
                        <div class="home_card_button">
                            <a class="effect01" href="{{ route('learn.more') }}"></a>
                        </div>
                        <!-- button -->
                    </div>
                </div>
                <!-- home card item -->
                <div class="col-lg-6 col-sm-12">
                    <div class="home_card_item">
                        <h5 class="home_card_item_title"></h5>
                        <div class="home_card_button">
                            <a class="effect01" href=""></a>
                        </div>
                        <!-- button -->
                    </div>
                </div>
            </div>

    </div>
</section>
<!-- home card end -->




















<!--=======// Single blog image //=======-->
<section class="container">
    <div class="assetType">
        <a href="javascript:void(0);">{{$blog->badge}}</a>
    </div>
    <div class="headline">
        <h1>{{$blog->title}}</h1>
    </div>
    <div class="aria-text">
        <h2 class="text-center">{!! $blog->header !!}</h2>
    </div>
    <div class="row">
        <div class="byTopics col-9">
            @php
                $all_tags = $blog->tags;
                $tags = explode(',', $all_tags);
            @endphp
            <p>By <a href="javascript:void(0);"> {{$blog->created_by}}</a><span>/ </span><span>{{ date('d-m-Y', strtotime($blog->created_at)) }}</span> <span>/</span> <span>Topics :</span>
                @foreach ($tags as $tag)
                    <a href="javascript:void(0);">{{ ucwords($tag)  }} , </a>
                @endforeach
            </p>
        </div>
        <div class="bySocial col-3">
            <ul class="social-icon-links pull-right" style="font-size: 1.5rem;">
                {!! Share::page(url('/blog/'. $blog->id . '/details'))->facebook()->twitter()->whatsapp() !!}
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img class="img-fluid" src="{{asset('storage/requestImg/'.$blog->image)}}" alt="{{$blog->badge}}">
        </div>
    </div>
</section>
<!-------End------->

<!--=======// Single blog content //=======-->
<section class="container">
    <div class="row content_wrapper">
        <div class="col-10 blog_text_area">

            <blockquote style="margin-top:0.8rem; margin-bottom:1rem; padding: 20px 30px 20px 25px; border-left: 5px solid #af0e2e; background-color: #f7f6f5;">
                <p>{!!$blog->short_des!!}</p>
            </blockquote>

            {{-- <div class="infographic">
                <img src="images/innovate_icon.png" class="mx-auto d-block">
                <p><strong>Infographic: </strong>Adapting your modern technology to build a digital-first culture.<a href="#">Empower your workforce to build meaningful experiences with the versatile power of the VMware® environment.</a></p>
            </div> --}}

            <p>{!!$blog->long_des!!}</p>

        </div>
        <div class="col-lg-12 mb-3">
            <div class="callout">
                <p><strong>{!!$blog->footer!!} </strong></p>
            </div>
        </div>
    </div>
    <div class="byTopics">
        <p>All keyword categories: </span> <a href="#">Client story, </a><a href="#">Connected Workforce, </a><a href="#">Endpoint management, </a><a href="#">Virtualization, </a><a href="#">Remote work, </a><a href="#">Financial</a></p>
    </div>

</section>
<br>
<!-------End------->

<!--=======// Single blog related //=======-->
<section class="related_posts_wrapper">
    <div class="container">
        <div class="related_posts_title">
            <h1 class="text-center">Related Contents</h1>
        </div>

        <div class="row">
            <!--------item------->
            @foreach ($storys as $item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="related-item">
                        <a href="{{route('blog.details',$item->id)}}">
                            <img class="img-fluid" src="{{ asset('storage/' . $item->image) }}" alt=""  style="height:150px;width:100%">
                            <h4>{{$item->badge}}</h6>
                            <h3><strong>{{Str::limit($item->title,55)}}</strong></h3>
                        </a>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-------End------->
@endsection

