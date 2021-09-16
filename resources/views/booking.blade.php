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

<div class="h-screen w-screen flex items-center justify-center">

    <div class="shadow-2xl h-56 w-1/2 flex-col rounded-xl  flex justify-center items-center">

        <div class="flex justify-around w-full ">
            <div>
                <a
                    href="{{url("/booking/walk-in-booking")}}"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                >
                    Walk-In Booking
                </a>
            </div>

            <div>
                <a
                    href="{{url("/booking/tour-company-booking")}}"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline"
                >
                    Tour Company Booking
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
