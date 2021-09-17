<!doctype html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body class="bg-gray-100  text-gray-700  font-sans quicksand">

    <div class="h-screen w-screen">

        <div class="mx-auto  relative max-w-6xl p-12">
            @csrf
            <div class="flex flex-col md:flex-row  justify-center">
                <div class="md:w-1/2 max-w-md flex flex-col justify-center">
                    <div class="md:text-4xl text-xl font-black uppercase">Dolphin Cove</div>
                    <div class="text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                        laudantium
                        minima officia, officiis quaerat quibusdam voluptates. Alias fugiat impedit laborum nisi
                        repellat soluta
                        tempora ullam unde. Commodi hic impedit itaque modi nisi nobis porro sapiente sit voluptas
                        voluptatem!
                        Beatae, perspiciatis.
                    </div>
                </div>



                <div id="displayAlterForm" class="md:w-1/2  flex justify-start mt-5  md:justify-end w-full md:w-1/2 ">
                    <div class="shadow-2xl rounded flex-auto max-w-sm p-10 pb-20">

                        <form action="" method="post">

                            <div class="text-4xl mb-15 ">Hotel</div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="5000"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="09/02/2001"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>
                            <div class="flex w-full mt-10 gap-3">
                                <div class=w-full">
                                    <button id="back-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                        Back
                                    </button>
                                </div>

                                <div class="w-full">
                                    <button id="book-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                        Book
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="" method="post">

                            <div class="text-4xl mb-15 "></div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="5000"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="09/02/2001"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>
                            <div class="flex w-full mt-10 gap-3">
                                <div class=w-full">
                                    <button id="back-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                        Back
                                    </button>
                                </div>

                                <div class="w-full">
                                    <button id="book-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                        Book
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="" method="post">

                            <div class="text-4xl mb-15 ">Entity Type</div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="5000"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="09/02/2001"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>
                            <div class="flex w-full mt-10 gap-3">
                                <div class=w-full">
                                    <button id="back-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                        Back
                                    </button>
                                </div>

                                <div class="w-full">
                                    <button id="book-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                        Book
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="" method="post">

                            <div class="text-4xl mb-15 ">Entity Type</div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="5000"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="09/02/2001"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>
                            <div class="flex w-full mt-10 gap-3">
                                <div class=w-full">
                                    <button id="back-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                        Back
                                    </button>
                                </div>

                                <div class="w-full">
                                    <button id="book-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                        Book
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="" method="post">

                            <div class="text-4xl mb-15 ">Entity Type</div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="5000"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="09/02/2001"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>
                            <div class="flex w-full mt-10 gap-3">
                                <div class=w-full">
                                    <button id="back-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                        Back
                                    </button>
                                </div>

                                <div class="w-full">
                                    <button id="book-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                        Book
                                    </button>
                                </div>
                            </div>
                        </form>

                        <form action="" method="post">

                            <div class="text-4xl mb-15 ">Entity Type</div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="5000"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>

                            <div class="w-full">
                                <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date
                                </div>
                                <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input disabled
                                        placeholder="09/02/2001"
                                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                                </div>
                            </div>
                            <div class="flex w-full mt-10 gap-3">
                                <div class=w-full">
                                    <button id="back-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                        Back
                                    </button>
                                </div>

                                <div class="w-full">
                                    <button id="book-btn"
                                        class="relative shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                        Book
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>


        <div class=" flex items-center hidden   w-full   h-full w-full   text-center">


            <div class="grid md:grid-cols-2  w-full h-full sm:grid-cols-1 lg:grid-cols-2   gap-10">


                <button id="add-hotel-btn" href="{{ url('/add-hotel') }}"
                    class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 ">
                    <div class="m-2 flex items-center text-justify  text-sm">
                        <p class="text-6xl">Add Hotel</p>
                    </div>
                </button>

                <button id="add-tour-btn" href="{{ url('/add-tour-company') }}"
                    class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200">
                    <div class="m-2 flex items-center text-justify text-sm">
                        <p class="text-6xl">Add Tour Company</p>
                    </div>
                </button>

                <button id="add-program-btn" href="{{ url('/add-programme') }}"
                    class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-sm">
                        <p class="text-6xl">Add Programme</p>
                    </div>
                </button>

                <div class="bg-white h-full justify-center items-center hover:shadow-2xl flex overflow-hidden ">
                    <div class="flex items-center flex-col h-full w-full text-justify text-sm">
                        <div class=" w-full flex flex-col h-full">
                            <button id="add-entity-type-btn" href="{{ url('/add-entity-type') }}"
                                class="w-full h-full border flex items-center transition duration-300 hover:bg-green-100 justify-center text-2xl">Add
                                Entity Type</button>
                            <button id="add-payment-type-btn" href="{{ url('/add-payment-type') }}"
                                class="w-full h-full border flex items-center transition duration-300 hover:bg-green-100 justify-center text-2xl">Add
                                Payment Type</button>
                            <button id="add-guest-type-btn" href="{{ url('/add-guest-type') }}"
                                class="w-full h-full border flex items-center transition duration-300 hover:bg-green-100 justify-center text-2xl">Add
                                Guest Type</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        // let payment_add-btn =
        console.log($("add-payment-type-btn"))
    });
</script>
