
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <style>



        @media(min-width:990px){ .navbar .navbar-nav{ margin-left: 42rem;} }

    </style>

    <!--My Css File-->
    <link rel="stylesheet" href="{{asset('css/myapp.css')}}">
</head>
<body>
<!--Navbar-->



<nav class="navbar navbar-expand-lg navbar-light bg-light header_area">

    <div class="container-fluid main-menu">
        <a class="navbar-brand" href="{{url('/admin')}}"><span style="color: #4346ff;">𝐒</span>𝐡𝐨𝐩 & <span style="color: #4346ff;">𝐒</span>𝐦𝐢𝐥𝐞</a>
        <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bars"></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-sm-auto mb-2 mb-lg-0"  >

                <li class="nav-item">
                    <a class="nav-link" href="{{route('show-cart')}}">{{ __('Cart')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#product">{{ __('Product') }}</a>
                </li>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">


                            <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                    {{ __('Logout') }}
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest


            </ul>

        </div>
    </div>
</nav>

<!--Navbar End-->

<!--Carousel-->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://assets2.razerzone.com/images/gaming-systems/gaming-laptops-og-image.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="https://assets2.rockpapershotgun.com/hp-omen-mindframe.jpg/BROK/resize/1920x1920%3E/format/jpg/quality/80/hp-omen-mindframe.jpg" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
            <img src="https://mspoweruser.com/wp-content/uploads/2018/12/tablet-cover.jpg" class="d-block w-100" alt="...">

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--Carousel END-->

<!--Body-->

<div class="container" id="product">
    <div class="row">
        <div class="col-12  col-lg-3">


            <div class="list-group">
                <a  class="list-group-item
            list-group-item-action active"
                    data-name="all"> ALL</a>
                <a  class="list-group-item list-group-item-action" data-name="laptop">Laptop</a>
                <a class="list-group-item list-group-item-action" data-name="desktop">Desktop</a>
                <a  class="list-group-item list-group-item-action" data-name="tablet">Tablet & Phone</a>
                <a  class="list-group-item list-group-item-action" data-name="accessory">Accessories</a>

            </div>

            <div class="vertical-menu">
                <div class="items">
                    <button class="item active btn" data-name="all">ALL</button>
                    <button class="item btn" data-name="laptop">Laptop</button>
                    <button class="item btn" data-name="desktop">Desktop</button>
                    <button class="item btn" data-name="tablet">Tablet & Phone</button>
                    <button class="item btn" data-name="accessory">Accessories</button>
                </div>

            </div>


        </div>
        <div class="col-12 col-lg-9 products" >

         @foreach($laptops as $laptop)

            <div class="card" data-name="laptop" style="position: relative">
                <img src="{{asset('img/' . $laptop->file)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$laptop->brand}}</h5>
                    <p class="card-text">Ram - {{$laptop->ram}} GB</p>
                    <p class="card-text">SSD - {{$laptop->ssd}}GB</p>
                    <p class="card-text">Generation - {{$laptop->generation}}</p>
                    <p class="card-text">Card Description - {{$laptop->graphic}}</p>
                    <p class="card-text">Price - ${{$laptop->price}}</p>
                    <a href="{{route('addToCard',[$laptop->id])}}" class="btn btn-primary" >Add To Card</a>
                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{'#gg'.$laptop->id}}">
                        Read More
                    </a>
                </div>
            </div>



            <div class="modal fade" id="{{'gg'.$laptop->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">{{$laptop->modaltitle}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img src="{{asset('/img/'. $laptop->file)}}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-12 col-lg-6 mt-sm-5 mt-sm-5">
                                        <h2>{{$laptop->modalbrand}}
                                        </h2>
                                        <ul>
                                            @foreach(unserialize($laptop->modaldescription) as $description)
                                            <li>{{$description}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>

            @endforeach

             @foreach($desktops as $desktop)

                 <div class="card" data-name="desktop">
                     <img src="{{asset('img/' . $desktop->file)}}" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">{{$desktop->brand}}</h5>
                         <p class="card-text">Ram - {{$desktop->ram}} GB</p>
                         <p class="card-text">SSD - {{$desktop->ssd}}GB</p>
                         <p class="card-text">Generation - {{$desktop->generation}}</p>
                         <p class="card-text">Card Description - {{$desktop->graphic}}</p>
                         <p class="card-text">Price - ${{$desktop->price}}</p>
                         <a href="{{url(route('addToCard',[$desktop->id]))}}" class="btn btn-primary">Add To Card</a>
                         <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{'#gg'.$desktop->id}}">
                             Read More
                         </a>
                     </div>
                 </div>



                 <div class="modal fade" id="{{'gg'.$desktop->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="staticBackdropLabel">{{$desktop->modaltitle}}</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <div class="container-fluid">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <img src="{{asset('/img/'. $desktop->file)}}" class="card-img-top" alt="...">
                                         </div>
                                         <div class="col-12 col-lg-6 mt-sm-5 mt-sm-5">
                                             <h2>{{$desktop->modalbrand}}
                                             </h2>
                                             <ul>
                                                 @foreach(unserialize($desktop->modaldescription) as $description)
                                                     <li>{{$description}}</li>
                                                 @endforeach
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                             </div>
                         </div>
                     </div>
                 </div>

             @endforeach

             @foreach($PTs as $PT)

                 <div class="card" data-name="tablet">
                     <img src="{{asset('img/' . $PT->file)}}" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">{{$PT->brand}}</h5>
                         <p class="card-text">Modal - {{$PT->model}} </p>
                         <p class="card-text">Screen Size - {{$PT->screensize}}GB</p>
                         <p class="card-text">Operation System - {{$PT->operationsystem}}</p>
                         <p class="card-text">Storage Capacity - {{$PT->storage}}</p>
                         <p class="card-text">Price - ${{$PT->price}}</p>
                         <a href="{{route('addToCard',[$PT->id])}}" class="btn btn-primary">Add To Card</a>
                         <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{'#gg'.$PT->id}}">
                             Read More
                         </a>
                     </div>
                 </div>



                 <div class="modal fade" id="{{'gg'.$PT->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="staticBackdropLabel">{{$PT->modaltitle}}</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <div class="container-fluid">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <img src="{{asset('/img/'. $PT->file)}}" class="card-img-top" alt="...">
                                         </div>
                                         <div class="col-12 col-lg-6 mt-sm-5 mt-sm-5">
                                             <h2>{{$PT->modalbrand}}
                                             </h2>
                                             <ul>
                                                 @foreach(unserialize($PT->modaldescription) as $description)
                                                     <li>{{$description}}</li>
                                                 @endforeach
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                             </div>
                         </div>
                     </div>
                 </div>

             @endforeach

             @foreach($Accessories as $accessory)

                 <div class="card" data-name="accessory">
                     <img src="{{asset('img/' . $accessory->file)}}" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">{{$accessory->brand}}</h5>
                         <p class="card-text">Modal - {{$accessory->modal}} GB</p>
                         <p class="card-text">Screen Size - {{$accessory->colour}}GB</p>
                         <p class="card-text">Price - ${{$accessory->price}}</p>
                         <a href="{{route('addToCard',[$accessory->id])}}" class="btn btn-primary">Add To Card</a>
                         <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{'#gg'.$accessory->id}}">
                             Read More
                         </a>
                     </div>
                 </div>



                 <div class="modal fade" id="{{'gg'.$accessory->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="staticBackdropLabel">{{$accessory->modaltitle}}</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <div class="container-fluid">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <img src="{{asset('/img/'. $accessory->file)}}" class="card-img-top" alt="...">
                                         </div>
                                         <div class="col-12 col-lg-6 mt-sm-5 mt-sm-5">
                                             <h2>{{$accessory->modalbrand}}
                                             </h2>
                                             <ul>
                                                 @foreach(unserialize($PT->modaldescription) as $description)
                                                     <li>{{$description}}</li>
                                                 @endforeach
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                             </div>
                         </div>
                     </div>
                 </div>

             @endforeach




        </div>

    </div>
</div>

<!--Body END-->


<!--Jquery FIle-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--My Js File-->
<script src="{{asset('js/myapp.js')}}"></script>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
