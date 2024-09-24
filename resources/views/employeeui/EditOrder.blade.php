<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <title> Edit Order </title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.empheader')
</head>
<body class="bg-mainbackground bg-cover">

    <div>
        <form action="{{ route('employeeui.EditOrder', $orders->orderID) }}" method="post">
            @csrf
            @method('PUT')
            <label for="order_name">Order Name:</label>
            <input type="text" id="order_name" name="order_name" value="{{ $order->name }}"><br><br>
            <label for="order_description">Order Description:</label>
            <input type="text" id="order_description" name="order_description" value="{{ $order->description }}"><br><br>
            <input type="submit" value="Update Order">
            <button type="submit" class="text-blue-600 hover:text-blue-900">
                Edit
            </button>
        </form>
        </form>
    </div>
    
</body>
</html>