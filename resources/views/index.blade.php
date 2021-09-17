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
<body class="bg-gray-100  text-gray-700  font-sans quicksand">

<div class="h-screen w-screen">
{{--<nav class="flex justify-between h-1/12 px-10 p-2 bg-black shadow-2xl">--}}
{{--    <div class="text-white text-center text-2xl font-bold text-blue-300"><span class="text-blue-500">Dolphin</span> Cove</div>--}}
{{--    <a href="/settings" class="text-white text-center hover:border border w-20 p-1 rounded transform duration-300 hover:scale-110 hover:border-blue-300 hover:bg-blue-300 hover:text-black text-xl">Setting</a>--}}
{{--</nav>--}}
<!-- component -->

<div class=" flex items-center w-full  h-full w-full   text-center">
    <div class="grid md:grid-cols-2 w-full h-full sm:grid-cols-1 lg:grid-cols-2   gap-10">



        <a href="{{url('/booking')}}" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 ">
            <div class="m-2 flex items-center text-justify  text-sm">
                <p class="text-6xl">Booking</p>
            </div>
        </a>

        <a href="{{url('/view-booking')}}" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200">
            <div class="m-2 flex items-center text-justify text-sm">
                <p class="text-6xl">View Bookings</p>
            </div>
        </a>

        <a href="{{url("/activity")}}" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
            <div class="m-2 text-sm">
                <p class="text-6xl">Activity</p>
            </div>
        </a>

        <a href="{{url("/settings")}}" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
            <div class="m-2 flex items-center text-justify text-sm">
                <p class="text-6xl">Settings</p>
            </div>
        </a>

    </div>
</div>
</div>
</body>

</html>
