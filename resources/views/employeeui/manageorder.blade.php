<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Manage Order</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.empheader')
</head>
<body class="bg-mainbackground  bg-cover overflow-y-hidden">

    <div class= "mx-auto bg-brownbgcolor w-full bg-opacity-80 p-4 " style="height: calc(100vh - 48px);">

            <div class="GoBackContainer flex ml-4 " onclick="window.location.href='{{ route('employee.dashboard') }}'">
                    <img class="GoBackButtonSvg h-10 w-10  " src="../img/gobackbutton.svg">
                </a>
            </div>

       
        <!-- Header -->

            <div class=" w-full text-2xl font-semibold text-white mx-auto p-4 rounded-t-lg justify-center"> Manage Orders</div>
            

        <!-- Orders Table -->
        <div class=" w-full block mx-auto max-w-7xl ">
            <table class="table-auto w-full text-left rounded-b-lg shadow-lg">
                <thead>
                    <tr class="bg-brown-600">
                        <th class="px-4 py-2 text-sm text-white"> Order ID </th>
                        <th class="px-4 py-2 text-sm text-white">Customer Name</th> <!--name in the user_id table-->
                        <th class="px-4 py-2 text-sm text-white">Order Status</th> <!--orderStatus in the orders table-->
                        <th class="px-4 py-2 text-sm text-white">Quantity</th>  <!--orderTotal in the orders table-->
                        <th class="px-4 py-2 text-sm text-white">Size</th>
                        <th class="px-4 py-2 text-sm text-white">Total Price</th>
                        <th class="px-4 py-2 text-sm text-white"> Date Ordered </th>
                        <th class="px-4 py-2 text-sm text-white"> Date Received </th>
                        <th class="px-4 py-2 text-sm text-white">Schedule</th> <!--appointment in the orders table-->
                        <th class="px-4 py-2 text-sm text-white">Product</th> <!--productFile in the product table-->
                    </tr>
                </thead>

                <tbody>
                        @foreach($ManageOrder as $orders)
                        <tr class="group cursor-pointer hover:relative hover:z-10 " onclick="window.location.href='{{ route('employeeui.MoreDetails', $orders->orderID) }}'">
                        <td class="py-2 w-32"> {{ $orders->orderID }} </a></td>
                        <td class="py-2 w-32"> {{ $orders->user_id }} </td>
                        <td class="py-2 w-32"> {{ $orders->orderStatus }} </td>
                        <td class="py-2 w-32"> {{ $orders->orderTotal }} </td>
                        <td class="py-2 w-32"> {{ $orders->sizeID }} </td>
                        <td class="py-2 w-32"> {{ $orders->totalPrice }} </td>
                        <td class="py-2 w-32"> {{ $orders->dateOrder }} </td>
                        <td class="py-2 w-32"> {{ $orders->dateReceived }} </td>
                        <td class="py-2 w-32"> {{ $orders->appointment }} </td>
                        <td class="py-2 w-32"> {{ $orders->UploadFile }} </td>
                        </tr>
                        @endforeach
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>
    
</body>
</html>