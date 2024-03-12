@extends('layouts.master')

@section('content')
     <!-- Shopping Cart Section -->
     {{-- <section class="bg-white py-8">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Shopping Cart</h2>
            <!-- Sample Cart Items (Replace with actual cart items) -->
            <div class="flex justify-between items-center border-b pb-8">
                <div class="flex">
                    <img class="h-24 w-24 object-cover rounded" src="https://via.placeholder.com/150" alt="Product Image">
                    <div class="ml-6">
                        <h3 class="text-sm font-semibold text-gray-600">Product Name</h3>
                        <p class="mt-2 text-lg font-semibold text-gray-800">$10.99</p>
                        <div class="mt-2">
                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8 4a1 1 0 0 1 2 0v7h7a1 1 0 1 1 0 2h-7v7a1 1 0 1 1-2 0v-7H4a1 1 0 1 1 0-2h7V4z" clip-rule="evenodd" /></svg>
                            </button>
                            <span class="text-gray-700 mx-2">1</span>
                            <button class="text-gray-500 focus:outline-none focus:text-gray-600">
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8 4a1 1 0 0 1 0 2h4a1 1 0 1 1 0 2H8v6a1 1 0 1 1-2 0V8H3a1 1 0 1 1 0-2h3V4z" clip-rule="evenodd" /></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="text-red-500 hover:text-red-600 focus:outline-none focus:text-red-600">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 4.293a1 1 0 0 1 1.414 0L10 8.586l3.293-3.293a1 1 0 1 1 1.414 1.414L11.414 10l3.293 3.293a1 1 0 0 1-1.414 1.414L10 11.414l-3.293 3.293a1 1 0 1 1-1.414-1.414L8.586 10 5.293 6.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                </div>
            </div>
            <!-- End of Sample Cart Items -->
            <!-- Sample Cart Summary (Replace with actual cart summary) -->
            <div class="mt-8">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-600">Subtotal</h3>
                    <span class="text-lg font-semibold text-gray-800">$10.99</span>
                </div>
                <div class="mt-4">
                    <a href="{{route('checkout')}}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                        Checkout
                    </a>
                </div>
            </div>
            <!-- End of Sample Cart Summary -->
        </div>
    </section> --}}

    <div class="container mx-auto px-6">
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

   

   