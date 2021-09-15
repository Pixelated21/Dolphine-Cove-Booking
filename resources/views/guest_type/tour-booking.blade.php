<!doctype html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOLPHIN COVE</title>
</head>
<body>

<!-- component -->
<form action="{{url('/tour-booking-book')}}" method="post" class="mx-auto relative max-w-6xl p-5">
    @csrf
    <div class="flex flex-col md:flex-row justify-center">
        <div class="md:w-1/2 max-w-md flex flex-col justify-center">
            <div class="md:text-4xl text-xl font-black uppercase">Dolphin Cove</div>
            <div class="text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laudantium
                minima officia, officiis quaerat quibusdam voluptates. Alias fugiat impedit laborum nisi repellat soluta
                tempora ullam unde. Commodi hic impedit itaque modi nisi nobis porro sapiente sit voluptas voluptatem!
                Beatae, perspiciatis.
            </div>
        </div>


        <div id="guestInfo" class="md:w-1/2   flex justify-start mt-5 md:justify-end w-full md:w-1/2 ">
            <div  class="shadow-2xl rounded flex-auto max-w-sm p-10 pb-20">
                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">First Name</div>
                    <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="First Name" name="first_nm"
                                                                                              class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    </div>
                </div>
                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Last Name</div>
                    <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Last Name" name="last_nm"
                                                                                              class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                    </div>
                </div>
                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Tour Company</div>
                    <div class="my-2 bg-white  flex  rounded">

                        <select name="tour_comp"
                            class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            @foreach($tour_companies as $tour_company)
                            <option value="{{$tour_company->tour_company_id}}">{{$tour_company->company_name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Hotel</div>
                    <div class="my-2 bg-white  flex  rounded">

                        <select name="hotel"
                            class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            @foreach($hotels as $hotel)
                                <option value="{{$hotel->hotel_id}}">{{$hotel->hotel_name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>


                <div class="mt-6 relative">
                    <button id="next-btn" class="shadow-md font-medium py-2 px-4 text-green-100
                  cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-gradient-to-r from-pink-500 via-pink-500 to-purple-900  absolute text-center w-full">
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div id="programmeInfo" class="md:w-1/2   flex justify-start mt-5  md:justify-end w-full md:w-1/2 ">
            <div class="shadow-2xl rounded flex-auto max-w-sm p-10 pb-20">
                <div class="text-4xl ">Programme</div>

                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Name</div>
                    <div class="my-2 bg-white  flex  rounded">

                        <select name="prog_nm"
                                id="prog_nm"
                            class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            @foreach($programs as $program)
                            <option value="{{$program->programme_id}}">{{$program->programme_name}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>


                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost</div>
                    <div class="my-2 bg-white p-1 flex border border-gray-200 rounded">

                        <select name="prog_cost"
                                id="prog_cost"
                                disabled
                                class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            @foreach($programs as $program)
                                <option value="{{$program->programme_id}}">{{$program->programme_cost}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Excursion Date</div>
                    <div class="my-2 bg-white p-1 flex border border-gray-200 rounded">

                        <select name="excur_dt"
                                id="excur_dt"
                                disabled
                                class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            @foreach($programs as $program)
                                <option value="{{$program->programme_id}}">{{$program->excursion_date}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>


                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Payment Type</div>
                    <div class="my-2 bg-white  flex  rounded">

                        <select name="payment_type"
                                class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            <option value="Credit">Credit</option>
                            <option value="Cash">Cash</option>
                        </select>

                    </div>
                </div>
                <div class="flex w-full mt-5 gap-3">
                    <div class= w-full">
                        <button id="back-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                  cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                            Back
                        </button>
                    </div>

                    <div class="w-full">
                        <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                  cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                            Book
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>

</body>
</html>
<script>
    $(document).ready(function (){
        let guestInfo = $("#guestInfo");
        let programmeInfo = $("#programmeInfo");
        let nextBtn = $("#next-btn");
        let backBtn = $("#back-btn");
        let prg_nm = $("#prog_nm");
        let prg_cost = $("#prog_cost");
        let excu_dt = $("#excur_dt");


       prg_nm.on("change",function (){

           prg_cost[0].options.selectedIndex = prg_nm[0].options.selectedIndex;
           excu_dt[0].options.selectedIndex = prg_nm[0].options.selectedIndex;

       });




        programmeInfo.toggle();


        nextBtn.on("click",function (event){
            event.preventDefault();
            guestInfo.hide();
            programmeInfo.toggle();

        });

        backBtn.on("click",function (event){
            event.preventDefault();
            guestInfo.toggle();
            programmeInfo.toggle();
        })

    });
</script>
