@extends('layouts.master')

@section('content')
    <!-- Product Detail Section -->
    <section class="bg-white py-8 mt-20">
        <div class="container mx-auto px-6">
           
            <div class="md:flex justify-between">
                <div class="md:w-1/2">
                    <img class="rounded-lg w-full" src="/image/cupcake2.jpg" alt="Product Image">
                </div>
                <div class="md:w-1/2 md:pl-6 mt-4 md:mt-0">
                    <h2 class="text-3xl font-bold text-gray-800">CupCake</h2>
                    <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus, eros eu viverra iaculis, mauris urna rutrum lacus, eu mattis ligula nisi non lectus.</p>
                    <div class="mt-4">
                        <span class="text-gray-800 font-bold">3000 MMK</span>
                    </div>
                    <div class="mt-6">
                        <a href="{{route('cart')}}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                            Add to Cart
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
@endsection
    

   
