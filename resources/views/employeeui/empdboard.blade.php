<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Title</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.header')
</head>
<body class="bg-mainbackground bg-cover">
    <button type="submit" class="AssistCustomer text-white w bg-maroonbgcolor p-2 rounded"  onclick="window.location.href='{{ route('employeeui.assistcustomer') }}'">Assist Customer</button>
    <button type="submit" class="ManageOrder text-white bg-maroonbgcolor p-2 rounded"  onclick="window.location.href='{{ route('employeeui.ManageOrder') }}'">Manage Order</button>
</body>
</html>
