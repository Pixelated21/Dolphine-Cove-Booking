<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- component -->
<body class="bg-gray-100 text-gray-700  font-sans quicksand">

<div class="p-10 flex items-center w-screen h-screen text-center">
    <div class="grid md:grid-cols-2 w-full h-full sm:grid-cols-1 lg:grid-cols-2 m-5  gap-10">




        <a href="{{url('/booking')}}" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
            <div class="m-2 flex items-center text-justify  text-sm">
                <p class="text-6xl">Booking</p>
            </div>
        </a>

        <a href="{{url('/view-booking')}}" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
            <div class="m-2 flex items-center text-justify text-sm">
                <p class="text-6xl">View Bookings</p>
            </div>
        </a>

{{--        <div class="bg-white justify-center items-center flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">--}}
{{--            <div class="m-2 text-sm">--}}
{{--                <p class="text-5xl">Add Tour Company</p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="bg-white justify-center items-center flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">--}}
{{--            <div class="m-2 flex items-center text-justify text-sm">--}}
{{--                <p class="text-6xl">Booking</p>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
</div>

</body>

</body>
</html>
