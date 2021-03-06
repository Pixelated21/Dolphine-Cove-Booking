<!doctype html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-100  text-gray-700  font-sans quicksand">

<div class="h-screen flex flex-col w-screen">

    <nav class="flex sticky top-0 justify-between px-10 p-2 bg-black shadow-2xl">
        <div class="text-white text-center text-2xl font-bold text-blue-300"><span class="text-blue-500">Dolphin</span> Cove</div>
        <a href="{{route("Homepage")}}" class="text-white text-center hover:border border w-20 p-1 rounded transform duration-300 hover:scale-110 hover:border-blue-300 hover:bg-blue-300 hover:text-black text-xl">Back</a>
    </nav>
{{--    FORM AND DISPLAY--}}
    <div class="formBody   hidden flex justify-around items-center  relative  w-screen h-screen">
        <div class="flex flex-col  h-full w-full  md:flex-row items-center justify-center">
            <div class="md:w-1/2 max-w-md flex flex-col justify-center">
                <div class="md:text-4xl text-xl font-black uppercase">Dolphin Cove</div>
                <div class="text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi laudantium
                    minima officia, officiis quaerat quibusdam voluptates. Alias fugiat impedit laborum nisi repellat soluta
                    tempora ullam unde. Commodi hic impedit itaque modi nisi nobis porro sapiente sit voluptas voluptatem!
                    Beatae, perspiciatis.
                </div>
            </div>



            <div id="displayAlterForm" class="md:w-1/2  flex justify-start mt-5   md:justify-end w-full md:w-1/2 ">
                <div class="shadow-2xl rounded flex-auto max-w-sm p-10 pb-20">

                    <form action="{{route("Add_Hotel")}}" method="post" class="add-hotel hidden">
                        @csrf
                        <div class="text-4xl mb-15 ">Add Hotel</div>

                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Hotel Name</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input  placeholder="Hotel Name"
                                                                                                      name="hotel_nm"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>

                        <div class="flex w-full mt-10 gap-3">
                            <div class= w-full">
                                <button id="addHotel-back-btn" class="addHote-back-btn relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                    Back
                                </button>
                            </div>

                            <div class="w-full">
                                <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                    Add Hotel
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{route("Add_Tour_Company")}}" method="post" class="add-tour-company hidden">
                        @csrf
                        <div class="text-4xl mb-15 ">Add Tour Company</div>

                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Tour Company Name</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Tour Company Name"
                                                                                                      name="tour_company_nm"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>

                        <div class="flex w-full mt-10 gap-3">
                            <div class= w-full">
                                <button id="addTour-back-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                    Back
                                </button>
                            </div>

                            <div class="w-full">
                                <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                    Add Tour Company
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{route("Add_Programme")}}" method="post" class="add-programme hidden">
                        @csrf
                        <div class="text-4xl  ">Add Programme</div>



                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Name</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Programme Name"
                                                                                                      name="prog_nm" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Cost</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Programme Cost"
                                                                                                      name="prog_cost"
                                                                                                      type="number"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>

                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Programme Capacity</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Programme Capacity"
                                                                                                      name="prog_cap"
                                                                                                      type="number"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>

                        <table class="w-full">
                            <tr>
                                <td>
                                    <div class="w-full  ">
                                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs">Excursion Date</div>
                                        <div class="my-1 bg-white  flex border border-gray-200 rounded"><input name="excur_dt"
                                                                                                               id="excur_dt"
                                                                                                                  type="date"
                                                                                                                  class="p-1  appearance-none rounded outline-none w-full text-gray-800">
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="w-full flex flex-col items-center  justify-center">
                                        <div class="font-bold mb-1  text-gray-600 text-xs">Everyday Excursion</div>
                                        <input id="excu_check" class="text-center mt-4 rounded form-checkbox border-8" type="checkbox">
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="flex w-full mt-5 gap-3">
                            <div class= w-full">
                                <button id="addProgramme-back-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                    Back
                                </button>
                            </div>

                            <div class="w-full">
                                <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                    Add Programme
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{route("Add_Entity_Type")}}" method="post" class="add-entity-type hidden">
                        @csrf
                        <div class="text-4xl mb-15 ">Add Entity Type</div>


                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Entity Type</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Entity Type"
                                                                                                      name="entity_type"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>
                        <div class="flex w-full mt-10 gap-3">
                            <div class= w-full">
                                <button id="addEntity-back-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                    Back
                                </button>
                            </div>

                            <div class="w-full">
                                <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                   Add Entity
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{route("Add_Guest_Type")}}" method="post" class="add-guest-type hidden">
                        @csrf
                        <div class="text-4xl mb-15 ">Add Guest Type</div>

                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Guest Type</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Guest Type"
                                                                                                      name="guest_type"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>


                        <div class="flex w-full mt-10 gap-3">
                            <div class= w-full">
                                <button id="addGuest-back-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                    Back
                                </button>
                            </div>

                            <div class="w-full">
                                <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                    Add Guest Type
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{route("Add_Payment_Type")}}" method="post" class="add-payment-type hidden">
                        @csrf
                        <div class="text-4xl mb-15 ">Add Payment Type</div>


                        <div class="w-full">
                            <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Payment Type</div>
                            <div class="my-2 bg-white p-1 flex border border-gray-200 rounded"><input placeholder="Payment Type"
                                                                                                      name="payment_type"
                                                                                                      class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
                            </div>
                        </div>
                        <div class="flex w-full mt-10 gap-3">
                            <div class= w-full">
                               <button id="addPayment-back-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                  cursor-pointer rounded text-lg tr-mt bg-red-600  absolute text-center w-full">
                                    Back
                                </button>
                            </div>

                            <div class="w-full">
                                <button id="book-btn" class="relative shadow-md font-medium py-2 px-4 text-green-100
                                    cursor-pointer bg-teal-600 rounded text-lg tr-mt bg-green-500  absolute text-center w-full">
                                    Add Payment Type
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
{{--    End Of Form--}}

{{--Settings Display--}}
    <div class="setting flex items-center    w-full   h-full w-full   text-center">


        <div class="grid md:grid-cols-2  w-full h-full sm:grid-cols-1 lg:grid-cols-2   gap-10">


            <button id="add-hotel-btn"  class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 ">
                <div class="m-2 flex items-center text-justify  text-sm">
                    <p class="text-6xl">Add Hotel</p>
                </div>
            </button>

            <button id="add-tour-btn" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200">
                <div class="m-2 flex items-center text-justify text-sm">
                    <p class="text-6xl">Add Tour Company</p>
                </div>
            </button>

            <button id="add-program-btn" class="bg-white justify-center items-center hover:shadow-2xl flex overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                <div class="m-2 text-sm">
                    <p class="text-6xl">Add Programme</p>
                </div>
            </button>

            <div class="bg-white h-full justify-center items-center hover:shadow-2xl flex overflow-hidden ">
                <div class="flex items-center flex-col h-full w-full text-justify text-sm">
                    <div class=" w-full flex flex-col h-full">
                        <button id="add-entity-type-btn"  class="w-full h-full border flex items-center transition duration-300 hover:bg-green-100 justify-center text-2xl">Add Entity Type</button>
                        <button id="add-payment-type-btn"  class="w-full h-full border flex items-center transition duration-300 hover:bg-green-100 justify-center text-2xl">Add Payment Type</button>
                        <button id="add-guest-type-btn"  class="w-full h-full border flex items-center transition duration-300 hover:bg-green-100 justify-center text-2xl">Add Guest Type</button>
                </div>
            </div>

        </div>
    </div>
</div>

{{--    End OF Settings--}}
</div>
</body>
</html>

<script>

    $(document).ready(function (){

        let excur_check = $("#excu_check"),
            excur_dt = $("#excur_dt");

        console.log(excur_check);
        excur_check.on("change",function (){
            if (excur_check[0].checked === true){
                excur_dt.attr("disabled",true)
                excur_check.attr("name","excur_dt")
                excur_check.attr("value","Everyday Excursion")
                console.log(excur_check);

            }
            else if (excur_check[0].checked === false){
                excur_check.removeAttr("name")
                excur_check.removeAttr("value")
                excur_dt.attr("disabled",false)
                console.log(excur_check);

            }
        })


        let addHotel = $('#add-hotel-btn'),
        addTour = $('#add-tour-btn'),
        addProgram = $('#add-program-btn'),
        addEntity = $('#add-entity-type-btn'),
        addPayment = $('#add-payment-type-btn'),
        addGuest = $('#add-guest-type-btn'),
        // variable to get setting body
        settingBody = $('.setting'),
        // variables to get form body
        formBody = $('.formBody'),
        addHotelForm = $('.add-hotel'),
        addTourCompanyForm = $('.add-tour-company'),
        addProgrammeForm = $('.add-programme'),
        addEntityForm = $('.add-entity-type'),
        addGuestTypeForm = $('.add-guest-type'),
        addPaymentTypeForm = $('.add-payment-type')

        // function to hide/show element on click

        addHotel.click(function(){
            settingBody.addClass('hidden')
            formBody.removeClass('hidden')
            addHotelForm.removeClass('hidden')
        })
        addTour.click(function(){
            settingBody.addClass('hidden')
            formBody.removeClass('hidden')
            addTourCompanyForm.removeClass('hidden')
        })
        addProgram.click(function(){
            settingBody.addClass('hidden')
            formBody.removeClass('hidden')
            addProgrammeForm.removeClass('hidden')
        })
        addEntity.click(function(){
            settingBody.addClass('hidden')
            formBody.removeClass('hidden')
            addEntityForm.removeClass('hidden')
        })
        addPayment.click(function(){
            settingBody.addClass('hidden')
            formBody.removeClass('hidden')
            addPaymentTypeForm.removeClass('hidden')
        })
        addGuest.click(function(){
            settingBody.addClass('hidden')
            formBody.removeClass('hidden')
            addGuestTypeForm.removeClass('hidden')
        })


       let hotelbkbtn = $("#addHotel-back-btn"),
       tourbkbtn = $("#addTour-back-btn"),
       programmebkbtn = $("#addProgramme-back-btn"),
       entitybkbtn = $("#addEntity-back-btn"),
       guestbkbtn = $("#addGuest-back-btn"),
       paymentbkbtn = $("#addPayment-back-btn")

       hotelbkbtn.on("click",function(event){
        event.preventDefault();
        settingBody.removeClass('hidden')
        formBody.addClass('hidden')
        addHotelForm.addClass('hidden')

       })
       tourbkbtn.on("click",function(event){
        event.preventDefault();
        settingBody.removeClass('hidden')
        formBody.addClass('hidden')
        addTourCompanyForm.addClass('hidden')

       })
       programmebkbtn.on("click",function(event){
        event.preventDefault();
        settingBody.removeClass('hidden')
        formBody.addClass('hidden')
        addProgrammeForm.addClass('hidden')
       })
       entitybkbtn.on("click",function(event){
        event.preventDefault();
        settingBody.removeClass('hidden')
        formBody.addClass('hidden')
        addEntityForm.addClass('hidden')
       })
       guestbkbtn.on("click",function(event){
        event.preventDefault();
        settingBody.removeClass('hidden')
        formBody.addClass('hidden')
        addGuestTypeForm.addClass('hidden')
       })
       paymentbkbtn.on("click",function(event){
        event.preventDefault();
        settingBody.removeClass('hidden')
        formBody.addClass('hidden')
        addPaymentTypeForm.addClass('hidden')
       })

    });

</script>
