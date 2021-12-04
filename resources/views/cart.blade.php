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

                <div class="row wrap">
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <img class="img-responsive" src="{{asset('img/'.$product->file)}}" alt="prewiew" width="120" height="80">
                    </div>
                    <div class="product-price col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                        <h4 class="product-name"><strong>{{$product->brand}}</strong></h4>
                        <h5>
                            <ul>
                                <li  value="{{$product->price}}">${{$product->price}}</li>
                            </ul>
                        </h5>
                    </div>
                    <div class=" col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                        <div class=" price col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                            <h6><strong>{{$product->price}} <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col-4 col-sm-4 col-md-4">
                            <div class="quantity">

                                <input value="1"  type="number" step="1" max="99" min="1"  title="Qty" class="qty"
                                       size="4">

                            </div>
                        </div>




                    </div>
                </div>
                <hr>
            <!-- END PRODUCT -->
        @endforeach


        </div>

        <div class="card-footer">





            <div class="pull-right" style="margin: 10px">

                    Total price:<b>$</b>
                    <input value="0" type="number" step="1" max="99" min="1"  title="Qty" class="qty"
                            size="4"  disabled>


            </div>

        </div>



    </div>
</div>

<script>
    update_total();
    var quantity = document.getElementsByClassName('quantity');
    for (var j = 0;j<quantity.length;j++){
        var input = quantity[j].querySelector('input');
        input.addEventListener('change',update);
    }

    function update(event){
       var input = event.target;
       if(isNaN(input.value) || input.value <= 0){
           input.value = 1;
       }
       update_total();

    }



    function update_total(){
        var rows = document.getElementsByClassName('wrap');
        var Subtotal = document.querySelector('.card-footer input');
        var total = 0;
        for(var i =0;i<rows.length;i++){
            var cartrow = rows[i];
            var price = cartrow.querySelector('.container .card .card-body .row .product-price h5 ul li').innerText.replace('$','');
            var quantity = cartrow.querySelector('.container .card .card-body .row .quantity input').value;

            total += quantity * price;

        }
        Subtotal.value = total;
    }


</script>

</body>
</html>
