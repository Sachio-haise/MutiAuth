$<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

        *, body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }

        html, body {
            height: 100%;
            background-color: #152733;

        }


        .form-holder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            padding: 60px;
        }

        .form-content .form-items {
            border: 3px solid #fff;
            padding: 40px;
            display: inline-block;
            width: 100%;
            min-width: 540px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: left;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        @media(max-width:1000px){
            .form-content .form-items {
                border: 3px solid #fff;
                padding: 40px;
                display: inline-block;
                width: 100%;
                min-width: 340px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                text-align: left;
                -webkit-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }
        }


        .form-content h3 {
            color: #fff;
            text-align: left;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .form-content h3.form-title {
            margin-bottom: 30px;
        }

        .form-content p {
            color: #fff;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 30px;
        }


        .form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
            color: #fff;
        }

        .form-content input[type=file],.form-content input[type=number],
        .form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
            width: 100%;
            padding: 9px 20px;
            text-align: left;
            border: 0;
            outline: 0;
            border-radius: 6px;
            background-color: #fff;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            margin-top: 16px;
        }


        .btn-primary{
            background-color: #6C757D;
            outline: none;
            border: 0px;
            box-shadow: none;
        }

        .btn-primary:hover, .btn-primary:focus, .btn-primary:active{
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
        }

        .form-content textarea {
            position: static !important;
            width: 100%;
            padding: 8px 20px;
            border-radius: 6px;
            text-align: left;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: #8D8D8D;
            outline: none;
            resize: none;
            height: 120px;
            -webkit-transition: none;
            transition: none;
            margin-bottom: 14px;
        }

        .form-content textarea:hover, .form-content textarea:focus {
            border: 0;
            background-color: #ebeff8;
            color: #8D8D8D;
        }

        .mv-up{
            margin-top: -9px !important;
            margin-bottom: 8px !important;
        }

        .invalid-feedback{
            color: #ff606e;
        }

        .valid-feedback{
            color: #2acc80;
        }
    </style>

</head>
<body>

<div class="form-body" >

    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">


                    <h3>Fill In The Data For Laptop Below.</h3>
                    <form  method="post" action="{{route('admin.laptop-store')}}" enctype="multipart/form-data">
                        @csrf
                        @if(session('status'))
                            <p @class('alert alert-success') style="background: rgb(25,135,84) !important;font-weight: 600;">{{session('status')}}</p>
                        @endif



                        <div class="col-md-12">
                            <input class="form-control" type="text" name="brand" placeholder="Brand Name" value="{{ old('brand') }}" style="margin-bottom: .8rem;">

                            @error('brand')
                            <p style="color:red;font-weight: 600;">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="number" name="ram" placeholder="Ram" value="{{ old('ram') }}">

                            @error('ram')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="number" name="ssd" placeholder="SSD" value="{{ old('ssd') }}">

                            @error('ssd')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="graphic" placeholder="Graphic" value="{{ old('graphic') }}" >

                            @error('graphic')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="generation" placeholder="Generation" value="{{ old('generation') }}" >

                            @error('generation')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="number" name="price" placeholder="Price" value="{{ old('price') }}">

                            @error('price')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="file" name="file" placeholder="File" >

                            @error('file')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <hr style="background-color: white;padding: .1rem;margin: 2rem 0;">

                        <h3>Fill In The Modal Data Below</h3>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="modaltitle" placeholder="Modal Title" value="{{ old('modaltitle') }}">

                            @error('modaltitle')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="text" name="modalbrand" placeholder="Modal Brand" value="{{ old('modalbrand') }}">

                            @error('modalbrand')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="col-md-12 description">
                            <input class="form-control" type="text" name="modaldescription[]" placeholder="Modal Description" >
                            @error('modaldescription')
                            <p style="color:red;font-weight: 600;margin-top: .8rem;">{{$message}}</p>
                            @enderror
                            <button class="btn btn-primary mt-3" id="add" style="background: rgb(25,135,84);">Add</button>
                        </div>



                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary" style="background: rgb(13,110,253);">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<script>




    var html ='<div class="col-md-12"><input class="form-control" type="text" name="modaldescription[]"placeholder="Modal Description" required id="childmodaldescription"><button class="btn btn-danger mt-3" id="remove">Remove</button></div>';
    var max = 5;
    var x=1;

    $(document).ready(function(){
        $("#add").click(function(e){
            if(x <= max){
                $('.form-body .form-items .description').append(html);
                x++;
            }
        });
        $('.form-body .form-items .description').on('click','#remove',
            function(e){
                $(this).parent('div').remove();
                x--;
            });

    });

</script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
