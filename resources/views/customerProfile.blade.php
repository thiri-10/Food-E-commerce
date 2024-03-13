@extends('layouts.master')

@section('content')
    <div class="container pt-10 mx-auto mt-20 flex">

        <div class="w-1/4 mr-10">
            <!-- User Profile Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="w-20 h-20 rounded-full bg-yellow-400 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-gray-700 font-semibold text-xl">T</span>
                </div>
                <h2 class="flex justify-center text-lg  text-gray-800 mb-4">Thiha</h2>
                <!-- Order History Section -->
                <div class="mb-4">
                    <a href="{{ route('order-history') }}" class="text-lg font-semibold text-gray-700 hover:text-yellow-500 mb-2">Order History</a>
                </div>
                <!-- Settings Section -->
                <div>
                    <a href="#" class="text-lg font-semibold text-gray-700 hover:text-yellow-500 mb-2">Settings</a>

                </div>
            </div>
        </div>


        <div class="w-3/4">

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Profile Settings</h2>
                <form>

                    <!-- First Name and Last Name -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="first_name">First Name</label>
                            <input type="text"
                                class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                                placeholder="Enter your first name" id="first_name">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="last_name">Last Name</label>
                            <input type="text"
                                class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                                placeholder="Enter your last name" id="last_name">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                        <input type="email"
                            class="form-input w-3/4 bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                            placeholder="Enter your email" id="email">
                    </div>
                    <!-- Address -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="address">Address</label>
                        <input type="text"
                            class="form-input w-3/4 bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                            placeholder="Enter your address" id="address">
                    </div>
                    <!-- Phone Number, Date of Birth, Location, Postal Code -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
                            <input type="text"
                                class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                                placeholder="Enter your phone number" id="phone">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="dob">Date of Birth</label>
                            <input type="text"
                                class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                                placeholder="Enter your date of birth" id="dob">
                        </div>
                    </div>
                    <!-- Location, Postal Code -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="location">Location</label>
                            <input type="text"
                                class="bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                                placeholder="Enter your location" id="location">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="postal_code">Postal Code</label>
                            <input type="text"
                                class="bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                                placeholder="Enter your postal code" id="postal_code">
                        </div>
                    </div>
                    <!-- Save Changes Button -->
                    <div class="flex w-3/4 justify-around">
                        <button type="submit"
                            class=" bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                            Discard Changes
                        </button>
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
