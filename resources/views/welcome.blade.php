@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <header class="bg-gray-100 py-12 pt-20 mt-5">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-center text-gray-800">Discover Delicious Food!</h1>
            <p class="mt-4 text-center text-gray-600">Order your favorite dishes online and get them delivered to your
                doorstep.</p>
            <div class="flex justify-center mt-6">
                <a class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline"
                    href="#">Order Now</a>
            </div>
        </div>
    </header>

    <!-- Featured Products Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Taste You Like</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full" src="/image/salad1.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full object-fill" src="/image/salad2.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full" src="/image/cupcake2.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full object-fill" src="/image/piza1.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full" src="/image/coca1.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full" src="/image/salad3.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full" src="/image/drink2.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 px-4 mb-4">
                    <div class="bg-white rounded-lg shadow-md">
                        <img class="rounded-t-lg w-full" src="/image/donut1.jpg" alt="Food">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="flex justify-between items-center mt-4">
                                <span class="font-bold text-gray-800">$10.99</span>
                                <button
                                    class="text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add
                                    to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

               
               
            </div>
        </div>
    </section>


@endsection