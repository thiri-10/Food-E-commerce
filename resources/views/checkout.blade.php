@extends('layouts.master')

@section('content')
<div class="container mx-auto px-6">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6 mt-20">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Shipping Information</h2>
        <form>
            <!-- Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                <input type="text" class="form-input border border-gray-300 rounded-md px-4 py-2 w-full" id="name" placeholder="Enter your name">
            </div>
            <!-- Address -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="address">Address</label>
                <input type="text" class="form-input border border-gray-300 rounded-md px-4 py-2 w-full" id="address" placeholder="Enter your address">
            </div>
            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                <input type="email" class="form-input border border-gray-300 rounded-md px-4 py-2 w-full" id="email" placeholder="Enter your email">
            </div>
            <!-- Phone Number -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
                <input type="text" class="form-input border border-gray-300 rounded-md px-4 py-2 w-full" id="phone" placeholder="Enter your phone number">
            </div>

             <!-- Order Notes -->
             <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="order_notes">
                    Order notes(optional)</label>
                <textarea class="form-textarea border border-gray-300 rounded-md px-4 py-2 w-full" id="order_notes" 
                placeholder="Notes about your order,e.g. special notes for delivery"></textarea>
            </div>
            <!-- Order Summary -->
            <div class="mb-6 border-t border-gray-200 pt-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Your order</h2>
              
                <div class="flex justify-between mb-2">
                    <span class="text-gray-700">Product 1</span>
                    <span class="text-gray-700">$10.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-700">Product 2</span>
                    <span class="text-gray-700">$20.00</span>
                </div>
                <!-- Subtotal -->
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">Subtotal</span>
                    <span class="font-semibold">$30.00</span>
                </div>
                <!-- Total -->
                <div class="flex justify-between">
                    <span class="font-semibold">Total</span>
                    <span class="font-semibold">$30.00</span>
                </div>
            </div>
            <!-- Payment Method -->
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Payment Method</label>
                <div>
                    <label class="flex items-center mb-2">
                        <input type="radio" class="form-radio" name="payment_method" value="credit_card">
                        <span class="ml-2">Credit Card</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" class="form-radio" name="payment_method" value="paypal">
                        <span class="ml-2">PayPal</span>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <a href="{{route('cart')}}" type="submit" class="mx-3 text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                    Bact to cart
                </a>
                <button type="submit" class="mx-3 text-sm text-white bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                    Place Order
                </button>
            </div>
        </form>
    </div>
</div>
@endsection