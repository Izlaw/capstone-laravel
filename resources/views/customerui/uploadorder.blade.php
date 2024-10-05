<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Order Page</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.header')

</head>
<body class="bg-mainbackground bg-cover overflow-y-hidden">

<!-- Ask for gender -->
  <div class="QuestionContainer flex justify-center items-center h-screen">
    <div class="BoxContainer bg-maroonbgcolor w-[400px] h-[300px] p-4 rounded-lg shadow-md bg-opacity-80 backdrop-blur-md text-center">

      <!-- Back button to addorderpage.html -->
      <a href="{{ route('addorder')}}" class="group">
        <img class="BackButton h-8 w-8 float-right rounded-lg p-1 cursor-pointer" src="../img/gobackbutton.svg">
      </a>
      
      <!-- Question -->
      <div class="MoveContentsDown pt-8">
        <span class="QuestionTxt text-white text-[48px]">Which gender?</span>
        <div class="flex justify-center mt-10">
          <a href="{{ route('uploadordermale')}}">
            <button class="bg-maroonbgcolor hover:bg-white hover:text-maroonbgcolor text-white font-bold py-2 px-4 rounded-lg text-[24px]" data-gender="Male">Male</button>
          </a>
          <a href="{{ route('uploadorderfemale')}}">
            <button class="bg-maroonbgcolor hover:bg-white hover:text-maroonbgcolor text-white font-bold py-2 px-4 rounded-lg ml-20 text-[24px]" data-gender="Female">Female</button>
          </a>
        </div>
      </div>

      <div class="max-w-md mx-auto bg-white p-8 shadow-lg rounded-lg">
          <h1 class="text-2xl font-bold mb-5">Create an Order</h1>

        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5">
            {{ session('success') }}
        </div>
        @endif

    <form action="{{ route('uploadorder') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}" required>
            @error('name')
                <p class="text-red-500 text-xs italic mt-2">{{ $Userser }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="contact" class="block text-gray-700 font-bold mb-2">Contact Number</label>
            <input type="tel" id="contact" name="contact" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('product') }}" required>
            @error('contact')
                <p class="text-red-500 text-xs italic mt-2">{{ $Userser }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="dateOrder" class="block text-gray-700 font-bold mb-2">Date Ordered</label>
            <input type="date" id="dateOrder" name="dateOrder" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('product') }}" required>
            @error('dateOrder')
                <p class="text-red-500 text-xs italic mt-2">{{ $orders }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="TargetDate" class="block text-gray-700 font-bold mb-2">Target Date</label>
            <input type="date" id="TargetDate" name="TargetDate" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('product') }}" required>
            @error('TargetDate')
                <p class="text-red-500 text-xs italic mt-2">{{ $orders }}</p>
            @enderror
        </div>

        <div class="mb-4">
          <label for="UploadFile" class="block text-gray-700 font-bold mb-2">Upload File</label>
          <input type="file" id="UploadFile" name="UploadFile" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          @error('file')
          <p class="text-red-500 text-xs italic mt-2">{{ $orders }}</p>
          @enderror
        </div>

        <div class="mb-4">
            <label for="orderTotal" class="block text-gray-700 font-bold mb-2">Quantity</label>
            <input type="number" id="orderTotal" name="orderTotal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('quantity') }}" required>
            @error('orderTotal')
                <p class="text-red-500 text-xs italic mt-2">{{ $orders }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>

    </form>
  </div>


    </div>

      
     

</body>
</html>