<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Fira+Mono:400');

    body{
        display: flex;
        width: 100vw;
        height: 100vh;
        align-items: center;
        justify-content: center;
        margin: 0;
        background: #131313;
        color: #fff;
        font-size: 96px;
        font-family: 'Fira Mono', monospace;
        letter-spacing: -7px;
    }

    a{
        animation: glitch 1s linear infinite;
    }

    @keyframes glitch{
        2%,64%{
            transform: translate(2px,0) skew(0deg);
        }
        4%,60%{
            transform: translate(-2px,0) skew(0deg);
        }
        62%{
            transform: translate(0,0) skew(5deg);
        }
    }

    a:before,
    a:after{
        content: attr(title);
        position: absolute;
        left: 0;
    }

    a:before{
        animation: glitchTop 1s linear infinite;
        clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 33%, 0 33%);
    }

    @keyframes glitchTop{
        2%,64%{
            transform: translate(2px,-2px);
        }
        4%,60%{
            transform: translate(-2px,2px);
        }
        62%{
            transform: translate(13px,-1px) skew(-13deg);
        }
    }

    a:after{
        animation: glitchBotom 1.5s linear infinite;
        clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
        -webkit-clip-path: polygon(0 67%, 100% 67%, 100% 100%, 0 100%);
    }

    @keyframes glitchBotom{
        2%,64%{
            transform: translate(-2px,0);
        }
        4%,60%{
            transform: translate(-2px,0);
        }
        62%{
            transform: translate(-22px,5px) skew(21deg);
        }
    }
</style>
<body>

<a href="{{route("Homepage")}}" title="Page Under Construction">Page Under Construction</a>



</body>
</html>
