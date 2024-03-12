@extends('layouts.master')

@section('content')
<div class="container mx-auto mt-20 flex">
    <div class="w-1/4 mr-10">
        <!-- User Profile Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="w-20 h-20 rounded-full bg-gray-300 flex items-center justify-center mb-4 mx-auto">
                <span class="text-gray-700 font-semibold text-xl">T</span> 
            </div>
            <h2 class="flex justify-center text-lg text-gray-800 mb-4">Thiha</h2>
           
            <!-- Order History Section -->
            <div class="mb-4">
                <a href="#" class="text-lg font-semibold text-gray-700 mb-2">Order History</a>
            </div>
            <!-- Settings Section -->
            <div>
                <a href="{{route('profile')}}" class="text-lg font-semibold text-gray-700 mb-2">Settings</a>
               
            </div>
        </div>
    </div>

    
    <div class="w-3/4 h-full">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Order History</h2>

            <div class="mb-4">
                <div class="border border-gray-300 rounded-md p-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold">Order #12345</span>
                        <span class="text-sm text-gray-600">$100.00</span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold">Order #67890</span>
                        <span class="text-sm text-gray-600">$150.00</span>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-semibold">Order #98765</span>
                        <span class="text-sm text-gray-600">$75.00</span>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection