@extends('layouts.master')

@section('content')
    <!-- Product Detail Section -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-6">
            <!-- Sample Product Detail (Replace with actual product data) -->
            <div class="md:flex justify-between">
                <div class="md:w-1/2">
                    <img class="rounded-lg w-full" src="https://via.placeholder.com/500" alt="Product Image">
                </div>
                <div class="md:w-1/2 md:pl-6 mt-4 md:mt-0">
                    <h2 class="text-3xl font-bold text-gray-800">Product Name</h2>
                    <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus, eros eu viverra iaculis, mauris urna rutrum lacus, eu mattis ligula nisi non lectus.</p>
                    <div class="mt-4">
                        <span class="text-gray-800 font-bold">$10.99</span>
                    </div>
                    <div class="mt-6">
                        <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- End of Sample Product Detail -->
        </div>
    </section>
@endsection
    

   
