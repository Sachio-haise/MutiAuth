<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        body{
            background-color: whitesmoke !important;
        }

        .quantity {
            float: left;
            margin-right: 15px;
            background-color: #eee;
            position: relative;
            width: 80px;
            overflow: hidden
        }

        .quantity input {
            margin: 0;
            text-align: center;
            width: 15px;
            height: 15px;
            padding: 0;
            float: right;
            color: #000;
            font-size: 20px;
            border: 0;
            outline: 0;
            background-color: #F6F6F6
        }

        .quantity input.qty {
            position: relative;
            border: 0;
            width: 100%;
            height: 40px;
            padding: 10px 25px 10px 10px;
            text-align: center;
            font-weight: 400;
            font-size: 15px;
            border-radius: 0;
            background-clip: padding-box
        }

        .quantity .minus, .quantity .plus {
            line-height: 0;
            background-clip: padding-box;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-background-size: 6px 30px;
            -moz-background-size: 6px 30px;
            color: #bbb;
            font-size: 20px;
            position: absolute;
            height: 50%;
            border: 0;
            right: 0;
            padding: 0;
            width: 25px;
            z-index: 3
        }

        .quantity .minus:hover, .quantity .plus:hover {
            background-color: #dad8da
        }

        .quantity .minus {
            bottom: 0
        }
        .shopping-cart {
            margin-top: 20px;
        }
    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<script src="https://use.fontawesome.com/c560c025cf.js"></script>

<script>
    $(document).ready(function (){



        var $product_price = $('.container .card .card-body .row .product-price h5 ul li ').val();
        console.log($product_price);



    });



    function update_total(){
        var $quantity =$('.container .card .card-body .row .quantity input').val() || 0;
        var $product_price = $('.container .card .card-body .row .product-price h5 ul li ').val();
        $('.container .card .card-footer .total input').val($quantity * $product_price);
    }
    setInterval(update_total,30);


</script>
<div class="container">
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shipping cart
            <a href="{{route('home')}}" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a>
            <div class="clearfix"></div>
        </div>






        <div class="card-body">


        @foreach($newproducts as $product)





            <!-- PRODUCT -->

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="{{asset('img/'.$product->file)}}" alt="prewiew" width="120" height="80">
                    </div>
                    <div class="product-price col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>{{$product->brand}}</strong></h4>
                        <h5>
                            <ul>
                                <li value="{{$product->price}}">$<span>{{$product->price}}</span></li>
                            </ul>
                        </h5>
                    </div>
                    <div class=" col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class=" price col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong>{{$product->price}} <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">

                                <input  type="number" step="1" max="99" min="1"  title="Qty" class="qty"
                                       size="4">

                            </div>
                        </div>



                        <div class="col-2 col-sm-2 col-md-2 text-right">

                            <a href="{{route('delete-cart',[$product->id])}}" type="button" class="btn btn-outline-danger btn-xs" >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            <!-- END PRODUCT -->
        @endforeach


        </div>

        <div class="card-footer">


            <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">

            </div>
            <div class="pull-right" style="margin: 10px">

                <div class="total pull-right" style="margin: 5px">
                    Total price:<b>$</b>
                    <input  type="number" step="1" max="99" min="1"  title="Qty" class="qty"
                            size="4" value="" disabled>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
