<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a class="text-xl font-bold text-gray-800 hover:text-gray-700" href="#"><span class="text-yellow-500 font-bold text-6xl">S</span>lurpie</a>
            </div>
            <div class="flex items-center justify-center flex-grow">
                <!-- Search Bar -->
                <div class="relative ">
                    <input type="text"
                        class="bg-gray-200 h-10 pl-3 pr-10 rounded-full text-sm focus:outline-none"
                        placeholder="Search">
                    <button class="absolute right-0 top-0 mt-2 mr-4">
                        <i class="fas fa-search text-yellow-400"></i>
                    </button>
                </div>
            </div>
            <!-- End of Search Bar -->

            <div class="flex items-center -mx-2">
                <a class="mx-4 text-gray-800 hover:text-gray-400 text-xl" href="{{route('home')}}"><i
                        class="fas fa-home text-yellow-500"></i><span class="ml-2">Home</span></a>
                <a class="mx-4 text-gray-800 hover:text-gray-400 text-lg" href="{{route('menu')}}">
                    <i class="fas fa-utensils text-yellow-500"></i><span class="ml-2">Menu</span></a>
                <a class="mx-4 text-gray-800 hover:text-gray-400 text-lg" href="{{route('cart')}}">
                    <i class="fas fa-shopping-cart text-yellow-500"></i><span class="ml-2">Cart</span></a>
                <div class="flex items-center justify-center h-8 w-8 rounded-full overflow-hidden bg-yellow-400 flex-shrink-0">
                    <a class="mx-4 text-gray-800 hover:text-gray-400 text-lg" href="{{route('profile')}}"><i
                        class="fas fa-user"></i></a>
                </div>
                
               
                
            </div>
        </div>
    </div>
    </div>
</nav>

<!-- Shopping Cart -->
<input type="checkbox" id="cart-toggle" class="hidden">
<div id="cart" class="fixed inset-y-0 right-0 bg-white shadow-lg w-80 overflow-y-auto transform translate-x-full transition duration-300 ease-in-out">
    <div class="p-4">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Shopping Cart</h2>
        <p>Your cart is empty</p>
    </div>
</div>