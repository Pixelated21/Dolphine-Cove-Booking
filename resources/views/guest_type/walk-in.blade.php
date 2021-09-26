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
    <title>Document</title>
</head>

<body>

<div class=" h-screen w-screen flex flex-col">
    <iframe id="iframeId"  class="h-screen w-screen absolute filter brightness-50"  src="https://www.youtube.com/embed/Moc4F9sBRqg?autoplay=1&controls='0&loop=1'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; fullscreen" allowtransparency=""    allowfullscreen></iframe>

    <nav class="flex relative justify-between  px-10 p-2 bg-black shadow-2xl">
        <div class="text-white  relative text-center text-2xl font-bold text-blue-300"><span class="text-blue-500">Dolphin</span> Cove</div>
        <a href="{{route("Booking")}}" class="text-white text-center hover:border border w-20 p-1 rounded transform duration-300 hover:scale-110 hover:border-blue-300 hover:bg-blue-300 hover:text-black text-xl">Back</a>
    </nav>

<!-- component -->
<form action="{{url('/walk-in-booking-book ')}}" method="post" class="h-full w-full relative">
    @csrf
    <div class="flex flex-col relative  h-full w-full  md:flex-row items-center justify-center">
        <div class="md:w-1/2 max-w-md text-white    flex flex-col justify-center">
            <div class="md:text-4xl text-xl font-black uppercase">Dolphin Cove</div>
            <div class="text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laudantium
                minima officia, officiis quaerat quibusdam voluptates. Alias fugiat impedit laborum nisi repellat soluta
                tempora ullam unde. Commodi hic impedit itaque modi nisi nobis porro sapiente sit voluptas voluptatem!
                Beatae, perspiciatis.
            </div>
        </div>


        <div id="guestInfo" class="md:w-1/2   flex justify-start mt-5 md:justify-end w-full md:w-1/2 ">
            <div  class="shadow-2xl bg-white rounded flex-auto max-w-sm p-10 pb-20">
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

        <div id="programmeInfo" class="md:w-1/2  flex justify-start mt-5  md:justify-end w-full md:w-1/2 ">
            <div class="shadow-2xl bg-white rounded flex-auto max-w-sm p-10 pb-20">
                <div class="text-4xl ">Programme</div>

                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Name</div>
                    <div class="my-2 bg-white  flex  rounded">
                        <input hidden type="text" name="hidden_prog_nm" id="hidden_prog_nm" value=''>
                        <select name="prog_nm[]"
                                multiple
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
                    <div class="my-2 bg-white p-1 flex rounded">

                        <select name="prog_cost"
                                id="prog_cost"
                                hidden
                                disabled
                                class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">
                            @foreach($programs as $program)
                                <option value="{{$program->programme_cost}}">{{$program->programme_cost}}</option>
                            @endforeach
                        </select>

                        <input
                            value="0"
                            type="text"
                            id="total"
                            class="w-full p-1 active:outline-none focus:outline-none rounded p-2.5 border border-gray-200 ">


                    </div>
                </div>


                <div class="w-full">
                    <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Date Booked</div>
                    <div class="my-2 bg-white p-1 flex  rounded">
                        <input
                            type="date"
                            name="date_booked"
                            class="w-full p-1 outline-none rounded p-2.5 border border-gray-200 ">
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
</div>

</body>
</html>
<script>
    $(document).ready(function (){






        let guestInfo = $("#guestInfo");
        let programmeInfo = $("#programmeInfo");
        let nextBtn = $("#next-btn");
        let backBtn = $("#back-btn");
        let prg_nm = $("#prog_nm");
        let hidden_prg_nm = document.getElementById('hidden_prog_nm');
        let prg_cost = $("#prog_cost");
        let excu_dt = $("#excur_dt");
        let total = $("#total");



        let totalsumarr = [];

        prg_nm.on("change",function (){

            prg_cost[0].options.selectedIndex = prg_nm[0].options.selectedIndex;

            totalsumarr.push(Number(prg_cost[0].value));
            let totalSum = 0;

            for (let i = 0; i < totalsumarr.length; i++) {

                totalSum += totalsumarr[i]
            }
            total[0].value = totalSum;

        });

        prg_nm.on('click', function(){
            hidden_prg_nm.value += prg_nm[0].value+','
            // console.log()
        })




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

<script type="text/javascript">
    myVid=document.getElementById("iframeId");
    myVid.muted=true;
</script>
