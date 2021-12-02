<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:ital@0;1&display=swap');

        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Ubuntu', sans-serif;
        }

        body{
            background-image: url('https://media.istockphoto.com/vectors/abstract-background-with-geometric-on-pastel-color-vector-template-vector-id1060096810?k=20&m=1060096810&s=170667a&w=0&h=QwMqpTXzZm8v0OwY89eIbavvcyShJujW449YMC8Jw3A=');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .container{
            background: whitesmoke;
            max-width: 80%;
            margin: 100px auto;
            box-shadow: 6px 3px 22px 3px rgba(0,0,0,0.75);

        }


        .container .navbar{
            border-bottom: 2px solid rgb(131, 125, 125);
            padding: 1rem 0;

        }

        .container .navbar .navbar-brand {
            font-weight: 800;
            font-size: 2rem;
            color: #cf27a2;
            text-shadow: 1px 1px 1px #919191,
            1px 2px 1px #ffffffb0,
            1px 3px 1px #ffffffb0,
            1px 4px 1px #ffffffb0,
            1px 5px 1px #ffffffb0,
            1px 6px 1px #ffffffb0,

            1px 10px 6px rgba(0, 0, 0, 0.116),
            1px 12px 10px rgba(0, 0, 0, 0.116),
            1px 15px 15px rgba(0, 0, 0, 0.116),
            1px 20px 20px rgba(0, 0, 0, 0.116);

        }





        .container .navbar .img{
            width: 3rem;
            height: 3rem;

        }

        .container .navbar .navbar-nav .nav-item > a{
            font-size: 1.1rem;
            font-weight: 700;
            color: #cf27a2;
        }

        .container .row .text > h1{
            line-height: 4.5rem;
            font-size: 4rem;
            font-weight:bolder;
            color:#cf27a2;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 1px #919191,
            1px 2px 1px #ffffff,
            1px 3px 1px #ffffff,
            1px 4px 1px #ffffff,
            1px 5px 1px #ffffff,
            1px 6px 1px #ffffff,
            1px 7px 1px #ffffff,
            1px 8px 1px #ffffff,
            1px 9px 1px #ffffff,
            1px 10px 1px #ffffff,
            1px 18px 6px rgba(0, 0, 0, 0.233),
            1px 22px 10px rgba(0, 0, 0, 0.233),
            1px 25px 35px rgba(0, 0, 0, 0.233),
            1px 30px 60px rgba(0, 0, 0, 0.233);
        }

        .container .row .text {
            margin: 4rem 0;
            padding-left: 2rem;

        }

        .container .row .text > p{
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        .container .row .text > a{
            padding: 1rem 1.5rem;
            margin-bottom: .5rem;
        }

        @media(max-width:1030px){
            .container .row .text > h1{
                font-size: 2.8rem;
            }
            .container .row .text > p{
                font-size: 1.1rem;

            }

            .container .row .text > a{
                padding: .6rem 1rem;
                font-size: .8rem;
                margin-bottom: .5rem;
            }
            .container .row .img > img{
                width: 70%;
                height: 70%;
            }

        }

        .container .row .img > img{
            width: 95%;
            height: 95%;
        }

        .navbar-toggler{

            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 50px;
            border: 3px solid rgb(146, 146, 146);
            border-radius: 50%;
            outline: none  !important;
            position: relative;
        }




        .navbar-toggler .bars{
            height: 2px;
            width: 50px;
            background-color: black;
            position: relative;

        }

        .navbar-toggler .bars::before,
        .navbar-toggler .bars::after{
            content: '';
            width: 100%;
            height: 100%;
            background-color: black;
            position: absolute;
            right: 0;
            transition:top .3s ease , bottom .3s ease;

        }

        .navbar-toggler .bars::before{
            top: 8px;
        }

        .navbar-toggler .bars::after{
            bottom: 8px;
        }

        .navbar-toggler.active .bars::before{
            top:0;
            bottom: 0;
        }

        .navbar-toggler.active .bars::after{
            bottom:0;
            top: 0;
        }

        @keyframes button_plus{
            0% {
                opacity: 1;
                transform: scale(1);

            }

            100% {
                opacity: 0;
                transform: scale(1.4);

            }
        }



        .navbar .container-fluid > .navbar-toggler::after {

            content: '';
            position:absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 4px solid #cf27a2;
            animation: button_plus 1s ease infinite;
        }


        @media(max-width:990px){

            .navbar-toggler{

                display: flex;
                justify-content: center;
                align-items: center;

            }
        }


    </style>
</head>
<body>

<div class="container">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><span style="color: #4346ff;">𝐒</span>𝐡𝐨𝐩 & <span style="color: #4346ff;">𝐒</span>𝐦𝐢𝐥𝐞</a>
            <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bars"></span>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item d-flex">
                        @if (Route::has('login'))

                            @auth
                                <a class="nav-link" href="{{ url('/home') }}" >Home</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                                <a class="nav-link" href="{{ route('admin.login') }}" >Admin</a>

                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}" >Sign Up</a>
                                @endif
                            @endauth

                        @endif
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!--Navbar End-->

    <div class="row">
        <div class="col-12 col-md-5  text">
            <h1>ONLINE<br>SHOPPING</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nemo inventore consequatur, quia ut ipsam excepturi assumenda blanditiis dolore similique.</p>
            <a href="{{route('login')}}" class="btn btn-danger" >GET STARTED</a>
            <a href="" class="btn btn-primary ">LEARN MORE</a>
        </div>

        <div class="col-12 col-md-7 img mt-5">
            <img src="{{asset('img/home.png')}}" alt="">
        </div>
    </div>
</div>

<script>
    const change_class = document.querySelector(' .navbar-toggler');
    change_class.addEventListener('click',()=>{
        change_class.classList.toggle('active');
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
