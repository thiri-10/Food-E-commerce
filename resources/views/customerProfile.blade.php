
@extends('layouts.master')

@section('content')
     {{-- <!-- Profile Section -->
     <section class="container flex mx-auto mt-20 pt-20">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Profile Settings</h2>
                <!-- Change Phone Number -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="Enter your phone number">
                </div>
                <!-- Change Name -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
                </div>
                <!-- Change Address -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="address">Address</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" placeholder="Enter your address"></textarea>
                </div>
                <!-- Save Button -->
                <div class="flex justify-end">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save Changes</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Order History Section -->
    <section class="container flex mx-auto mt-10">
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Order History</h2>
                <!-- Sample Order History (Replace with actual order history data) -->
                <div class="border-t border-gray-200">
                    <div class="p-4 flex justify-between items-center">
                        <span class="text-gray-700">Order #12345</span>
                        <span class="text-gray-700">$100.00</span>
                    </div>
                    <div class="p-4 border-t border-gray-200">
                        <!-- Order details -->
                        <p class="text-gray-700">Date: January 1, 2024</p>
                        <p class="text-gray-700">Items: Product A, Product B, Product C</p>
                    </div>
                </div>
                <!-- End of Sample Order History -->
            </div>
        </div>
    </section> --}}
   
{{-- 
    <div class="container mx-auto mt-20 flex">
        <!-- Left Column (size 3) -->
        <div class="w-1/4 mr-10">
            <!-- User Profile Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="w-20 h-20 rounded-full bg-gray-300 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-gray-700 font-semibold text-xl">JD</span> <!-- Initials of the user's name -->
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-4">John Doe</h2>
                <!-- Order History Section -->
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Order History</h3>
                    <!-- Sample Order History (Replace with actual order history data) -->
                    <ul>
                        <li class="text-sm text-gray-600">Order #12345 - $100.00</li>
                        <li class="text-sm text-gray-600">Order #67890 - $150.00</li>
                        <li class="text-sm text-gray-600">Order #98765 - $75.00</li>
                    </ul>
                    <!-- End of Sample Order History -->
                </div>
                <!-- Settings Section -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Settings</h3>
                    <ul>
                        <li class="text-sm text-gray-600">Change Password</li>
                        <li class="text-sm text-gray-600">Security Settings</li>
                        <li class="text-sm text-gray-600">Privacy Settings</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right Column (size 9) -->
        <div class="w-3/4">
            <!-- Settings Form -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Personal Information</h2>
                <form>
                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="gender">Gender</label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="gender" value="male">
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="gender" value="female">
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>
                    <!-- First Name and Last Name -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="first_name">First Name</label>
                            <input type="text" class="form-input" placeholder="Enter your first name" id="first_name">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="last_name">Last Name</label>
                            <input type="text" class="form-input" placeholder="Enter your last name" id="last_name">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                        <input type="email" class="form-input" placeholder="Enter your email" id="email">
                    </div>
                    <!-- Address -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="address">Address</label>
                        <input type="text" class="form-input" placeholder="Enter your address" id="address">
                    </div>
                    <!-- Phone Number, Date of Birth, Location, Postal Code -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
                            <input type="text" class="form-input" placeholder="Enter your phone number" id="phone">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="dob">Date of Birth</label>
                            <input type="text" class="form-input" placeholder="Enter your date of birth" id="dob">
                        </div>
                    </div>
                    <!-- Location, Postal Code -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="location">Location</label>
                            <input type="text" class="form-input" placeholder="Enter your location" id="location">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="postal_code">Postal Code</label>
                            <input type="text" class="form-input" placeholder="Enter your postal code" id="postal_code">
                        </div>
                    </div>
                    <!-- Save Changes Button -->
                    <div class="flex mx-auto justify-around">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            discard Changes
                        </button>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}


    <div class="container mx-auto mt-20 flex">
        
        <div class="w-1/4 mr-10">
            <!-- User Profile Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="w-20 h-20 rounded-full bg-gray-300 flex items-center justify-center mb-4 mx-auto">
                    <span class="text-gray-700 font-semibold text-xl">T</span> 
                </div>
                <h2 class="flex justify-center text-lg  text-gray-800 mb-4">Thiha</h2>
                <!-- Order History Section -->
                <div class="mb-4">
                    <a href="{{route('order-history')}}" class="text-lg font-semibold text-gray-700 mb-2">Order History</a>
                </div>
                <!-- Settings Section -->
                <div>
                    <a href="#" class="text-lg font-semibold text-gray-700 mb-2">Settings</a>
                   
                </div>
            </div>
        </div>

        
        <div class="w-3/4">
           
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Profile Settings</h2>
                <form>
                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="gender">Gender</label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="gender" value="male">
                                <span class="ml-2">Male</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="gender" value="female">
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                    </div>
                    <!-- First Name and Last Name -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="first_name">First Name</label>
                            <input type="text" class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your first name" id="first_name">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="last_name">Last Name</label>
                            <input type="text" class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your last name" id="last_name">
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                        <input type="email" class="form-input w-3/4 bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your email" id="email">
                    </div>
                    <!-- Address -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="address">Address</label>
                        <input type="text" class="form-input w-3/4 bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your address" id="address">
                    </div>
                    <!-- Phone Number, Date of Birth, Location, Postal Code -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="phone">Phone Number</label>
                            <input type="text" class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your phone number" id="phone">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="dob">Date of Birth</label>
                            <input type="text" class="form-input bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your date of birth" id="dob">
                        </div>
                    </div>
                    <!-- Location, Postal Code -->
                    <div class="mb-4 flex">
                        <div class="w-1/2 mr-4">
                            <label class="block text-gray-700 font-bold mb-2" for="location">Location</label>
                            <input type="text" class="bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your location" id="location">
                        </div>
                        <div class="w-1/2">
                            <label class="block text-gray-700 font-bold mb-2" for="postal_code">Postal Code</label>
                            <input type="text" class="bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none" placeholder="Enter your postal code" id="postal_code">
                        </div>
                    </div>
                    <!-- Save Changes Button -->
                    <div class="flex justify-around">
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                            Discard Changes
                        </button>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


  
       

      
         




@endsection
    
    

   

