@extends('frontend.master')
@section('content')

{{-- Blog Updated  --}}
<style>
    .blog_header {
    background-image: url(../images/buy-category-hero.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 180px 0px;
    height: 450px;
}
.special_character{
    color: #ae0a46;
    font-weight: bold;
}
.date_blog{
    font-family: 'Poppins', sans-serif !important;
}
.blog_feature_description{
    border-left: 5px solid #ae0a46;
    border-right: 5px solid #ae0a46;
    padding: 20px 20px 20px;
    overflow-wrap: break-word;
    text-align: justify;
    background-color: #f7f6f5;
}
.blog_feature_extra{
    text-align: justify;
}
.tag_btn{
    background-color: #f7f6f5;
    color: black;
    font-size: 13px;
    padding: 5px;
}
.tag_title{
    background-color: #ae0a46;
    color: #fff;
}
.blogins_tags a{
    color: #808080;
}
</style>

    <!--======// Header Title //======-->
    <section class="blog_header" style="background-image: linear-gradient(
        rgba(0,0,0,0.3),
        rgba(0,0,0,0.3)
        ),url('http://165.22.48.109/ngenit/storage/requestImg/fTDRhB7Kf5QdT2Ht1674022324.jpg');">
        <div class="container ">
            <div class="row ">
              <!--BUTTON START-->
              {{-- <div class="d-flex justify-content-center align-items-center">
                <div class="m-4">
                    <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                  </div>
                  <div class="m-4">
                    <button class="common_button3" href="#">Shop all Surface devices</button>
                  </div>
              </div> --}}
          </div>
        </div>
      </section>
      <!----------End--------->
<!--======// Home Cart Section //======-->
<section class="" >
    <div class="container">
        <!-- wrapper -->
            <div class="row m-0" >
                <!-- home card item -->
                <div class="col-lg-12 col-sm-12 shadow-lg px-5 py-3 text-center  bg-white" style="margin-top: -4.5rem; ">
                    <h1>A character can be any letter, number, punctuation, special character, or space. Each of these characters takes up one byte of space in a computer's memory. </h1>
                    <div class="d-flex justify-content-between">
                        <p>By <span class="special_character">Ngen IT</span> <span class="date_blog">/ 15-01-2023 /</span> Topics : <span class="special_character">Brands , Software</span></p>
                        <div class="bySocial col-3">
                            <ul class="social-icon-links pull-right" style="font-size: 1.5rem;">
                                {!! Share::page(url('/blog/'. $blog->id . '/details'))->facebook()->twitter()->whatsapp() !!}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</section>
<!-- home card end -->
<section>
    <div class="container mt-5 px-2">
        <div class="row m-0">
            <div class="col-4 d-flex justify-content-start ml-2" style="border-top: 4px dotted red">

            </div>
        </div>
        <div class="row m-0 px-3">
            <div class="col-12 d-flex justify-content-center border-top-info">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laboriosam dolores consectetur consequuntur quasi iusto dolorem accusamus inventore ipsa ratione earum ipsam, tenetur animi nam nostrum, nemo odit officiis ut, corrupti atque quo? Eveniet tenetur provident cumque quaerat ea sed. Saepe reiciendis impedit optio est suscipit! Dolorum amet inventore ullam fuga sunt nulla voluptatem nisi vel laborum debitis. Labore, voluptatem, <br> eligendi maxime esse dignissimos minus id commodi obcaecati sunt quisquam voluptatum excepturi eius aliquam neque ullam quod magni veniam blanditiis porro! Optio repudiandae, voluptas doloremque fugit pariatur ullam totam dicta quia eius consequatur? Officiis, quasi nostrum maxime tempore alias natus amet eum. Eos fugiat eius libero sed soluta impedit quibusdam voluptates illo dignissimos assumenda et quis ex, laudantium est incidunt, eveniet deserunt modi veritatis officia provident dolore. Enim ratione ex amet eos nisi beatae, dolorum eveniet, <br> eligendi sed aliquid distinctio cumque debitis architecto dolor! Nemo qui quis, suscipit enim eaque dolorem. Voluptas deserunt vel amet minima aut consequuntur, earum obcaecati ab officiis esse eum laboriosam illum natus vitae suscipit distinctio aliquam velit nihil sint? Labore optio maiores aliquam quibusdam. Id eos esse illum, excepturi delectus ratione sit ipsa in natus recusandae ad vel neque eum! Commodi assumenda cupiditate omnis! Modi.</p>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-4 " >

            </div>
            <div class="col-4 " >

            </div>

            <div class="col-4" style="border-bottom: 4px dotted red">

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
               <div class="blog_feature_description">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet nesciunt odio eligendi itaque, dolorem aut aliquid excepturi quibusdam placeat repellendus voluptatibus saepe voluptatum pariatur sequi at minus voluptas cumque assumenda quos consequuntur ex a necessitatibus deleniti aperiam! Illum autem ipsam voluptatibus consequuntur reprehenderit! Magni vitae accusamus assumenda cupiditate quas illum temporibus, repudiandae, quasi iure exercitationem animi. Iure quisquam eius nobis dignissimos quos similique blanditiis ad laudantium! Corporis pariatur cupiditate nostrum. Perspiciatis eos sed possimus officiis voluptas quasi officia, pariatur unde neque incidunt. Et rerum fuga tenetur itaque reprehenderit quod omnis pariatur necessitatibus asperiores voluptates sit at delectus excepturi suscipit accusamus voluptatem libero, magnam explicabo dignissimos nulla minima nisi! Non culpa illo nam sint quaerat ratione aspernatur ab eligendi, in voluptatum eum veritatis optio quam perferendis. Minus similique asperiores et pariatur maiores odit? Tempora aliquid, sequi minus exercitationem itaque libero ipsa accusamus, cumque suscipit impedit placeat perspiciatis, ipsum accusantium porro officia rerum minima molestias. Odit, repudiandae placeat delectus ducimus veniam enim, molestiae excepturi aperiam atque ipsum magnam hic dignissimos qui cumque recusandae officia veritatis praesentium vel? Debitis sapiente voluptas est repudiandae ea enim quaerat odit ad? Optio nemo porro, eius laboriosam itaque totam delectus necessitatibus commodi! Deleniti aliquid explicabo consequatur. Nulla laborum eveniet repellat expedita rerum beatae sint saepe amet blanditiis vero quia sapiente pariatur recusandae nam id non voluptatum, quibusdam enim ut. Iusto magnam minus quos commodi obcaecati quasi totam nostrum necessitatibus maxime nulla molestiae, ratione corporis est. In debitis rerum optio, mollitia aspernatur recusandae dignissimos alias ad id qui minus autem amet dolorum natus magni repellendus, possimus neque doloremque delectus, magnam molestias quo consectetur quasi animi. Sequi accusantium ea ex in odio voluptatibus sint libero deserunt? Voluptatem, aliquam id eius commodi vero ipsum tempora assumenda possimus sed eveniet fuga numquam esse hic natus earum beatae officiis, obcaecati maiores magni.</p>
               </div>
               <div>
                <div class="blog_feature_extra py-5">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet nesciunt odio eligendi itaque, dolorem aut aliquid excepturi quibusdam placeat repellendus voluptatibus saepe voluptatum pariatur sequi at minus voluptas cumque assumenda quos consequuntur ex a necessitatibus deleniti aperiam! Illum autem ipsam voluptatibus consequuntur reprehenderit! Magni vitae accusamus assumenda cupiditate quas illum temporibus, repudiandae, quasi iure exercitationem animi. Iure quisquam eius nobis dignissimos quos similique blanditiis ad laudantium! Corporis pariatur cupiditate nostrum. Perspiciatis eos sed possimus officiis voluptas quasi officia, pariatur unde neque incidunt. Et rerum fuga tenetur itaque reprehenderit quod omnis pariatur necessitatibus asperiores voluptates sit at delectus excepturi suscipit accusamus voluptatem libero, magnam explicabo dignissimos nulla minima nisi! Non culpa illo nam sint quaerat ratione aspernatur ab eligendi, in voluptatum eum veritatis optio quam perferendis. Minus similique asperiores et pariatur maiores odit? Tempora aliquid, sequi minus exercitationem itaque libero ipsa accusamus, cumque suscipit impedit placeat perspiciatis, ipsum accusantium porro officia rerum minima molestias. Odit, repudiandae placeat delectus ducimus veniam enim, molestiae excepturi aperiam atque ipsum magnam hic dignissimos qui cumque recusandae officia veritatis praesentium vel? Debitis sapiente voluptas est repudiandae ea enim quaerat odit ad? Optio nemo porro, eius laboriosam itaque totam delectus necessitatibus commodi! Deleniti aliquid explicabo consequatur. Nulla laborum eveniet repellat expedita rerum beatae sint saepe amet blanditiis vero quia sapiente pariatur recusandae nam id non voluptatum, quibusdam enim ut. Iusto magnam minus quos commodi obcaecati quasi totam nostrum necessitatibus maxime nulla molestiae, ratione corporis est. In debitis rerum optio, mollitia aspernatur recusandae dignissimos alias ad id qui minus autem amet dolorum natus magni repellendus, possimus neque doloremque delectus, magnam molestias quo consectetur quasi animi. Sequi accusantium ea ex in odio voluptatibus sint libero deserunt? Voluptatem, aliquam id eius commodi vero ipsum tempora assumenda possimus sed eveniet fuga numquam esse hic natus earum beatae officiis, obcaecati maiores magni.</p>
                   </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 ">
                {{-- Releted Industry --}}
                <div class="border my-3">
                    <h4 class="text-center py-1 tag_title">Releted Industry</h4>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="btn-group">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                        <div class="btn-group pt-1">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                    </div>
                </div>
                {{-- Releted Categories --}}
                <div class="border my-3">
                    <img class="img-fluid" src="https://source.unsplash.com/random/580x360" alt="">
                </div>
                {{-- Releted Brand --}}
                <div class="border my-3">
                    <h4 class="text-center py-1 tag_title">Releted Brand</h4>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="btn-group">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                        <div class="btn-group pt-1">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                    </div>
                </div>
                {{-- Releted Categories --}}
                <div class="border my-3">
                    <h4 class="text-center py-1 tag_title">Releted Categories</h4>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="btn-group">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                        <div class="btn-group pt-1">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                    </div>
                </div>
                {{-- Add Image --}}
                <div class="border my-3">
                    <img class="img-fluid" src="https://source.unsplash.com/random/480x360" alt="">
                </div>

                {{-- Releted Solution --}}
                <div class="border my-3 ">
                    <h4 class="text-center py-1 tag_title">Releted Solution</h4>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="btn-group">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                        <div class="btn-group pt-1">
                            <button type="button" class="btn tag_btn">Apple</button>
                            <button type="button" class="btn tag_btn ml-1">Samsung</button>
                            <button type="button" class="btn tag_btn ml-1 ">Sony</button>
                          </div>
                    </div>
                </div>
                {{-- Add Image --}}
                <div class="border my-3">
                    <img class="img-fluid" src="https://source.unsplash.com/random/680x360" alt="">
                </div>
                {{-- Releted Solution --}}
                <div class="border my-3 ">
                    <h4 class="text-center py-1 tag_title">TAGS</h4>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="d-flex blogins_tags">
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                          </div>
                          <div class="d-flex blogins_tags">
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                            <a href="#news" class="mr-2">#news</a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





{{-- Blog Updated End --}}




















<!--=======// Single blog image //=======-->
<section class="container" style="margin-top: 130px;">
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

