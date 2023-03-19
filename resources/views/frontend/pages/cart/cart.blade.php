@extends('frontend.master')

@section('content')
<style>

.card{
    margin: auto;
    max-width: 1000px;
    width: 100%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent;
}
@media(max-width:767px){
    .card{
        margin: 3vh auto;
    }
}
.cart{
    background-color: #fff;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem;
    padding: 0px ;
}
@media(max-width:767px){
    .cart{
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem;
    }
}
.summary{
    background-color: #f5f5f5;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 2vh;
    color: rgb(65, 65, 65);
}
@media(max-width:767px){
    .summary{
    border-top-right-radius: unset;
    border-bottom-left-radius: 1rem;
    }
}
.summary .col-2{
    padding: 0;
}
.summary .col-10
{
    padding: 0;
}.row{
    margin: 0;
}
.title {
    padding: 10px;
    border-top-left-radius: 0.85rem;

}
.title b{
    font-size: 1.5rem;
    color: #fff !important;
}
.main{
    margin: 0;
    padding: 2vh 0;
    width: 100%;
}
.col-2, .col{
    padding: 0 1vh;
}
a{
    padding: 0 1vh;
}
.close{
    margin-left: auto;
    font-size: 0.7rem;
}
img{
    width: 3.5rem;
}
.back-to-shop{
    margin-right: 1rem;
    margin-top: 1rem;
}

hr{
    margin-top: 1.25rem;
}
form{
    padding: 2vh 0;
}
select{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input{
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247);
}
input:focus::-webkit-input-placeholder
{
      color:transparent;
}
.btn:focus{
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none;
}
.btn:hover{
    color: white;
}
a{
    color: black;
}
a:hover{
    color: black;
    text-decoration: none;
}
 #code{
    background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253) , rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: center;
}
</style>

    <!--======// Header Title //======-->
    <section class="common_product_header p-0" style="background-image: linear-gradient(
        rgba(0,0,0,0.8),
        rgba(0,0,0,0.8)
        ),url('https://tapcom-live.ams3.cdn.digitaloceanspaces.com/media/cache/bb/74/bb749b579a0f712fb8ab4065645e8918.jpg');">
        <div class="container ">
          <h1>My Cart</h1>
            <div class="row ">
              <!--BUTTON START-->
              <div class="d-flex justify-content-center align-items-center">
                <div class="m-4">
                    <button class="common_button2" href="product_filters.html">Talk to a specialist</button>
                  </div>
                  <div class="m-4">
                    <button class="common_button3" href="#">Shop all Surface devices</button>
                  </div>
              </div>
          </div>
        </div>
      </section>
      <!----------End--------->
      {{-- Cart Section Start --}}
      <div class="card mt-4 mb-4">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Shopping Cart</b></h4></div>
                        <div class="col align-self-center text-right text-white fw-bold">3 Items</div>
                    </div>
                </div>
                {{--Header Title --}}
                <div class="row border-top border-bottom px-3">
                    <div class="row main align-items-center">
                        <div class="col-2">

                        </div>
                        <div class="col-2">
                            <div class="row text-muted">Item Name</div>
                        </div>
                        <div class="col">Unit Price</div>
                        <div class="col">QTY</div>
                        <div class="col">Unit Total</div>
                        <div class="col-2">
                            <a href="">
                                Empty Cart
                            </a>
                        </div>
                    </div>
                </div>
                {{--Header Title End--}}
                @foreach ($cart_details as $item)
                    @php
                        $slug = App\Models\Admin\Product::where('id', $item->id)->value('slug');
                    @endphp
                <div class="row border-top border-bottom px-3">
                    <div class="row main align-items-center">
                        <div class="col-2">
                            <img class="img-fluid" src="{{$item->options->has('image') ? $item->options->image : ''}}" alt="{{ $item->name }}">
                        </div>
                        <div class="col-2">
                            <div class="row text-muted">
                                <a href="{{ route('product.details', $slug) }}" title="{{ $item->name }}">
                                    {{ Str::limit($item->name, 16) }}</a></div>
                            {{-- <div class="row">Cotton T-shirt</div> --}}
                        </div>
                        <div class="col">
                            $ {{ number_format($item->price, 2) }}
                        </div>
                        <div class="col">
                            <form class="myForm">
                                <input type="hidden" id="price" name="price" value="{{ $item->price }}">
                                    <div class="pro-qty mb-2" style="width: 5.5rem">
                                        <div class="counter" style="width: 2rem">
                                            <input name="rowID" type="hidden" id="rowID" value="{{ $item->rowId }}">
                                            <span class="down" id="{{ $item->rowId }}" onClick='decreaseCount(event, this, this.id)'>-</span>
                                            <input type="text" name="qty" value="{{ $item->qty }}" style="width: 1.5rem;" readonly>
                                            <span class="up" id="{{ $item->rowId }}" onClick='increaseCount(event, this, this.id)'>+</span>
                                        </div>
                                    </div>
                                    {{-- <a href="javascript:void(0);" class="common_button2 p-1 mt-1" id="update">Update</a> --}}
                            </form>
                        </div>
                        <div class="col">$ {{ number_format($item->price * $item->qty , 2)}}  <span class="close">&#10005;</span></div>
                    </div>
                </div>
                 @endforeach

                <div class="d-flex justify-content-end  mb-2">
                    <div class="back-to-shop">
                    <a href="#">&leftarrow; <span class="text-danger fw-bold" style="font-size: 16px">Back to shop</span></a>
                </div>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div><h5 class="text-center"><b>Summary</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">Sub Total</div>
                    <div class="col text-right">$ {{number_format(Cart::subtotal(), 2)}}</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Tax Estimate</div>
                    <div class="col text-right">$ 0.00</div>
                </div>
                <div class="row">
                    <div class="col" style="padding-left:0;">Shipping Cost</div>
                    <div class="col text-right">$ 0.00</div>
                </div>
                <hr>
                <div class="row" style=" padding: 1vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">$ {{ number_format(Cart::total(), 2) }}</div>
                </div>
                <div class="d-flex justify-content-center pt-5">
                    <button href="{{route('checkout')}}" class="btn product_btn">CHECKOUT</button>
                </div>
            </div>
        </div>

    </div>
            <!--=======// Popular products //======-->
    <section class="popular_product_section section_padding">
        <!-- container -->
        <div class="container">
            <div class="popular_product_section_content">
                <!-- section title -->
                <div class="Hardware_feature_title mb-3">
                    <h1 class="text-center p-3 ">Popular Product</h1>
                </div>
                <!-- wrapper colum -->
                <div class="populer_product_slider">


                    @foreach ($products as $item)
                    <div class="product_item">
                        <!-- image -->
                        <div class="product_item_thumbnail">
                            <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="150px"
                                height="113px">
                        </div>
                        <!-- product content -->
                        <div class="product_item_content">
                            <a href="{{ route('product.details', $item->slug) }}" class="product_item_content_name"
                                style="height: 3rem;">{{ Str::limit($item->name, 50) }}</a>
                            @if ($item->rfq != 1)
                                <!-- price -->
                                <div class="product_item_price">
                                    <span class="price_currency">USD</span>
                                    @if (!empty($item->discount))
                                        <span class="price_currency_value"
                                            style="text-decoration: line-through; color:red">$
                                            {{ $item->price }}</span>
                                        <span class="price_currency_value" style="color: black">$
                                            {{ $item->discount }}</span>
                                    @else
                                        <span class="price_currency_value">$ {{ $item->price }}</span>
                                    @endif
                                </div>
                                <!-- button -->
                                @php
                                    $cart = Cart::content();
                                    $exist = $cart->where('id', $item->id);
                                @endphp
                                @if ($cart->where('id', $item->id)->count())

                                    <span class="common_button6">Already in Cart</span>
                                @else
                                    <form action="{{ route('add.cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id"
                                            value="{{ $item->id }}">
                                        <input type="hidden" name="name" id="name"
                                            value="{{ $item->name }}">
                                        <input type="hidden" name="qty" id="qty" value="1">
                                        <button type="submit" class="common_button effect01">Add to Basket</button>
                                    </form>
                                @endif
                            @else
                                <div class="product_item_price">
                                    <span class="price_currency_value">
                                        <a class="fw-bolder text-primary" href="javascript:void(0);" data-toggle="modal" data-target="#get_quote_modal_{{ $item->id }}">Ask For Price</a>
                                        <div class="modal fade" id="get_quote_modal_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content">
                                                    <div class="modal-header text-white" style="background-color: #a80b6e; border: none;">
                                                        <h5 class="modal-title text-white" id="exampleModalLabel">Product Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- style="background-color: #3e3e3e;" -->
                                                        <div class="">
                                                            <!-- form Sidebar -->
                                                            <div class="background">
                                                                <div class="containers">
                                                                    <div class="screen">
                                                                        <div class="screen-body">
                                                                            <div class="screen-body-item screen-body-item-right modal_form">
                                                                                <form action="">
                                                                                    <div class="app-form">
                                                                                        <div class="app-form-group">
                                                                                            <input type="text" class="app-form-control2"
                                                                                                placeholder="NAME">
                                                                                        </div>
                                                                                        <div class="app-form-group">
                                                                                            <input type="email" class="app-form-control2"
                                                                                                placeholder="EMAIL">
                                                                                        </div>
                                                                                        <div class="app-form-group">
                                                                                            <input type="number" class="app-form-control2"
                                                                                                placeholder="CONTACT NO">
                                                                                        </div>
                                                                                        <div class="app-form-group">
                                                                                            <input type="text" class="app-form-control2"
                                                                                                placeholder="Company">
                                                                                        </div>
                                                                                        <div class="app-form-group">
                                                                                            <input type="number" class="app-form-control2"
                                                                                                placeholder="Quantity">
                                                                                        </div>
                                                                                        <div class="app-form-group">
                                                                                            <input class="app-form-control2 rounded-0 form-control-sm"
                                                                                                id="formFileSm" type="file">
                                                                                        </div>
                                                                                        <div class="app-form-group message">
                                                                                            <input class="app-form-control2" placeholder="MESSAGE">
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox"
                                                                                                value="" id="flexCheckChecked">
                                                                                            <label class="form-check-label" for="flexCheckChecked">
                                                                                                Please Call Me
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="app-form-group buttons">
                                                                                            <button class="app-form-button">CANCEL</button>
                                                                                            <button type="submit" class="app-form-button">SEND</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <button href="{{ route('product.details', $item->slug) }}" class="common_button effect01">Details</button>



                            @endif
                        </div>
                    </div>


                        <!-- Product Modal Start-->

                        <!---------Product Modal End -------->

                    @endforeach
                    <!-- product item -->


                </div>
            </div>
        </div>
    </section>

    <!---------End -------->
      {{-- Cart Section end --}}



@endsection


@section('scripts')
    {{-- <script type="text/javascript">
        // $(".update-cart").change(function() {
        //     alert("is it cart");
        //     // var ele = $(this);
        //     // console.log(ele);
        //     // $.ajax({
        //     //     url: '{{ route('update.cart') }}',
        //     //     method: "patch",
        //     //     data: {
        //     //         _token: '{{ csrf_token() }}',
        //     //         id: ele.parents("tr").attr("data-id"),
        //     //         quantity: ele.parents("tr").find(".quantity").val()
        //     //     },
        //     //     success: function(response) {
        //     //         window.location.reload();
        //     //     }
        //     // });
        // });

        $("#InputId").on('change', function() {
            alert('Handler for "change" called.');
        });
    </script> --}}



    <script>
        if ($('#checkout').val() == 0) {
            $('#work').hide();
        }
    </script>

    <script>
        var buttonAdd = document.querySelectorAll('.cart_input')
        var cartUpdateBtn = document.querySelectorAll('.update_button')
        cartUpdateBtn.forEach(element => {
            element.style.cssText = 'all:unset;display:block;cursor:pointer'
        });
    </script>


<script>
    //----- Quantity
        function increaseCount(a, b, c) {
            var input = b.previousElementSibling;
            var value = parseInt(input.value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            input.value = value;
            let form = $(this).closest('.myForm');
            // let rowId = form.find("input[name=rowID]").val();
            var rowId = c;
            //var routeName = 'cart.increment';
            //alert(b);
            $.ajax({
                type: 'GET',
                url: "cart-increment/"+rowId,
                //url: route(routeName, { rowId }),
                dataType: 'json',
                success: function(response) {
                    window.location.reload();
                }
        });


    }


 // ---------- END CART INCREMENT -----///



 // -------- CART Decrement  --------//


        function decreaseCount(a, b, c) {
            var input = b.nextElementSibling;
            var value = parseInt(input.value, 10);
            if (value > 1) {
                value = isNaN(value) ? 0 : value;
                value--;
                input.value = value;
            }

            var form = $(this).closest('.myForm');
            // var rowId = form.find("input[name=rowID]").val();
            var rowId = c;

            $.ajax({
            type:'GET',
            url: "cart-decrement/"+rowId,
            dataType:'json',
            success:function(response){
                window.location.reload();
            }
        });
        }



// Cart Remove End



</script>





@endsection
