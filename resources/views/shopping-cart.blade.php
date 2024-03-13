@extends('layouts.master')

@section('content')
     
  

    <div class="container mx-auto px-6 pt-10">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6 mt-20">
            <div class="flex items-center justify-between mb-6 border-b border-gray-200 pb-4">
                <div class="flex items-center">
                    
                    <img class="h-24 w-24 object-cover rounded" src="https://via.placeholder.com/150" alt="Product Image">

                    <!-- Product Details -->
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Dessert</h2>
                    </div>
                </div>
                <!-- Product Quantity -->
                <div class="flex items-center">
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                       <i class="fas fa-minus"></i>
                    </button>
                    <span class="text-gray-700 mx-2">1</span>
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- Product Price -->
                <span class="text-gray-700">$10.00</span>
                <!-- Delete Button -->
                <button class="text-red-500 hover:text-red-700 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-between mb-6 border-b border-gray-200 pb-4">
                <div class="flex items-center">
                    
                    <img class="h-24 w-24 object-cover rounded" src="https://via.placeholder.com/150" alt="Product Image">

                    <!-- Product Details -->
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Dessert</h2>
                    </div>
                </div>
                <!-- Product Quantity -->
                <div class="flex items-center">
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                       <i class="fas fa-minus"></i>
                    </button>
                    <span class="text-gray-700 mx-2">1</span>
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- Product Price -->
                <span class="text-gray-700">$10.00</span>
                <!-- Delete Button -->
                <button class="text-red-500 hover:text-red-700 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-between mb-6 border-b border-gray-200 pb-4">
                <div class="flex items-center">
                    
                    <img class="h-24 w-24 object-cover rounded" src="https://via.placeholder.com/150" alt="Product Image">

                    <!-- Product Details -->
                    <div class="ml-4">
                        <h2 class="text-lg font-semibold text-gray-800">Dessert</h2>
                    </div>
                </div>
                <!-- Product Quantity -->
                <div class="flex items-center">
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                       <i class="fas fa-minus"></i>
                    </button>
                    <span class="text-gray-700 mx-2">1</span>
                    <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <!-- Product Price -->
                <span class="text-gray-700">$10.00</span>
                <!-- Delete Button -->
                <button class="text-red-500 hover:text-red-700 focus:outline-none">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <!-- Total Price -->
            <div class="flex justify-end">
                <span class="text-lg font-semibold text-gray-800 mr-2">Total:</span>
                <span class="text-lg font-semibold text-gray-700">$10.00</span>
            </div>
            <!-- Checkout Button -->
            <div class="mt-4 flex justify-center">
                <a href="{{route('menu')}}" class="mx-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                    Back to menu
                </a>
                <a href="{{route('checkout')}}" class="mx-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                    Checkout
                </a>
            </div>
        </div>
    </div>
@endsection

   

   