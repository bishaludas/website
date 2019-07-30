<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bishal Udash</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <!-- Styles -->
    <style>
        html, body {
            background-color: #000;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        
        .full-height {
            height: 100vh;
        }
        
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        
        .position-ref {
            position: relative;
        }
        
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        
        .content {
            text-align: center;
        }
        
        .title {
            font-size: 84px;
        }
        
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover{
            text-decoration: underline;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        }
        
        .leaf-1 {
            border-radius: 5px 20px 5px;
            min-height: 50px;
            width: 50px;
            /* background: #BADA55; */
            list-style: none;
            display: inline-block;
            float: left;
            margin: 0 10px;
            position: relative;
        }
        
        .leaf-2{
            /* background-color: green; */
            position: absolute;
            list-style: none;
            margin: 10px;
            width: 29px;
            height: 29px;
            border-radius: 2px 15px 2px;
        }

        .about_data{
            text-align:left !important;
            color: #fff;
            /* display: none; */
            visibility: hidden;
        }
        .card{
            border: 1px dashed #636b6f;
            padding: 2%;
        }
        

        @media only screen and (max-width: 460px) {
            .title {
                font-size: 60px;
            }
            .links > a{
                display: inline-block;
                width: 50%;
                padding: 0;
                text-align: center;
                float: left;
            }
            .about_data{
                text-align:left !important;
                color: #fff;
                margin-top: 5%;
            }
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        
        <div class="top-right links">
            @auth
            <a href="{{ route('blog.home') }}">Home</a>
            @else
            <a href="{{ route('be.login') }}">Login</a>
            @endauth
        </div>
        
        @php
            // leaf 2
            $inside = ['#FFC312', '#0652DD', '#6F1E51', '#ED4C67', 'green', '#9980FA'];
            // leaf 1
            $outside = ['#AE6A07', '#12CBC4', '#d275bd', '#821348', '#BADA55', '#5758BB'];
            $count = count($inside) -1;
            $color =  mt_rand(0, $count);
        @endphp

        <div class="content">
            <ul style="display:block">
                <li class="leaf-1" style="background:{{$outside[$color]}}">
                    <ul style="margin:0px; padding:0px;">
                        <li class="leaf-2" style="background:{{$inside[$color]}}"></li>
                    </ul>
                </li>
                
                <li class="leaf-1" style="background:{{$inside[$color]}}">
                    <ul style="margin:0px; padding:0px;">
                        <li class="leaf-2" style="background:{{$outside[$color]}}"></li>
                    </ul>
                </li>
            </ul>
            <div class="title m-b-md">
                @php
                    $greet = ['Bonjour', 'Hola', 'नमस्ते', 'Namaste'];
                    $lang = ['French', 'Spanish', 'Nepali', 'Nepali'];
                    // French, Spanish, Chinese, Nepali
                    $len = count($greet) - 1;
                    $num = mt_rand(0, $len);
                @endphp 
                {{-- Namaste --}}
            <p style="margin-bottom: 30px" title={{$lang[$num]}}>{{$greet[$num]}}</p>
            </div>
            
            <div class="links">
                <a href="#about-data" class="about-data">About</a>
                <a href="{{route('blog.home')}}">Blog</a>
                <a href="{{route('home.projects')}}">Project</a>
                <a href="https://github.com/bishaludas" target="_blank">GitHub</a>
            </div>

            <br><br>
            <div class="about_data">
                <div class="card">
                    <span style="display:block">### Hello world !</span>
                    {{$aboutUser->about}}
                </div>
                
            </div>
        </div>
    </div>

<script>
    var display = false;
    document.querySelector('.about-data').addEventListener('click', function(){
        if(display == false){
            document.querySelector('.about_data').style.visibility = 'visible';
            display = true
        }else{
            document.querySelector('.about_data').style.visibility = 'hidden';
            display = false
        }
    });
</script>
</body>
</html>
