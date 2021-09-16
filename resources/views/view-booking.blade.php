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
<div class="overflow-x-auto h-screen w-screen">
    <div class=" bg-gray-100  h-full w-full flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full h-full flex items-center flex-col justify-center">
            <div><p class="text-5xl">Booking Table</p></div>

            <div class="bg-white w-5/6 shadow-md rounded  h-10/12 overflow-y-auto my-6">
                <table class="min-w-max w-full table-auto overflow-y-auto" style="height: 70vh">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Booking ID</th>
                        <th class="py-3 px-6 text-left">First Name</th>
                        <th class="py-3 px-6 text-left">Last Name</th>
                        <th class="py-3 px-6 text-center">Tour Company</th>
                        <th class="py-3 px-6 text-center">Programme Name</th>
                        <th class="py-3 px-6 text-center">Payment Type</th>
                        <th class="py-3 px-6 text-center">Date Booked</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    @foreach($bookings as $booking)

                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">{{$booking->booking_id}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span class="font-medium">{{(\App\Models\Guest::where("guests.guest_id","=",$booking->guest_id)->get("first_nm"))[0]->first_nm}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span class="font-medium">{{(\App\Models\Guest::where("guests.guest_id","=",$booking->guest_id)->get("last_nm"))[0]->last_nm}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                <span class="font-medium">{{(\App\Models\Tour_Company::where("tour_companies.tour_company_id","=",$booking->tour_company_id)->get("company_name"))[0]->company_name}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                <span class="font-medium">{{(\App\Models\Program::where("programs.programme_id","=",$booking->programme_id)->get("programme_name"))[0]->programme_name}}</span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span>{{\App\Models\Payment_Type::where("payment_types.payment_type_id","=",$booking->payment_type_id)->get("payment_type")[0]->payment_type}}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="flex items-center">
                                <span>{{date("Y-m-d h:m:s")}}</span>
{{--                                <span>{{(date("Y" ,strtotime($booking->date_booked)))}}</span>--}}
                            </div>
                        </td>

                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
