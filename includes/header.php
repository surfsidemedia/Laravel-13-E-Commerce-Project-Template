<header class="hidden lg:block bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto py-4">
            <div class="flex justify-between items-center">
                <div class="w-1/4">
                    <a href="index.php">
                        <img src="assets/images/logo.png" alt="Logo" class="max-w-[200px]" />
                    </a>
                </div>

                <div class="w-1/2 flex justify-center">
                    <nav>
                        <ul class="flex space-x-8 font-medium text-gray-700">
                            <li><a href="index.php" class="hover:text-primary transition">Home</a></li>
                            <li><a href="shop.php" class="hover:text-primary transition">Shop</a></li>
                            <li><a href="cart.php" class="hover:text-primary transition">Cart</a></li>
                            <li><a href="wishlist.php" class="hover:text-primary transition">Wishlist</a></li>
                            <li><a href="contact.php" class="hover:text-primary transition">Contact</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="w-1/4 flex justify-end items-center space-x-6">
                <div class="relative group">
                    <button class="text-2xl hover:text-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <div class="absolute right-0 mt-2 w-64 bg-white border shadow-lg p-3 rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <form class="flex">
                            <input type="text" placeholder="Search..." class="w-full border p-2 text-sm outline-none focus:border-primary" />
                            <button class="p-2 text-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>

                <a href="wishlist.php" class="text-2xl hover:text-primary"><i class="fa-regular fa-heart"></i></a>
                
                <a href="cart.php" class="text-2xl hover:text-primary relative">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="absolute -top-2 -right-2 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </a>

                <div class="relative group">
                    <button class="text-2xl hover:text-primary">
                        <i class="fa-regular fa-user"></i>                           
                        <!-- <span class="flex items-center justify-center w-10 h-10 bg-blue-600 text-white rounded-full font-bold uppercase text-lg shadow-sm">
                            <i class="fa-regular fa-user"></i>
                        </span> -->
                    </button>
                    <ul class="absolute right-0 mt-2 w-40 bg-white border shadow-lg py-2 rounded opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">                            
                        <li><a href='login.php' class="block px-4 py-2 hover:bg-gray-100 text-sm">Sign In</a></li>  
                        <li><a href='My-Account.php' class="block px-4 py-2 hover:bg-gray-100 text-sm">My Account</a></li>
                        <li><a href="login.php" class="block px-4 py-2 hover:bg-gray-100 text-sm">Sign Out</a></li>                            
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </header>

    <header class="lg:hidden bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center mb-4">
            <button id="mobile-menu-btn" class="text-2xl focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>

            <a href="index.php">
                <img src="assets/images/logo.png" alt="Logo" class="max-w-[120px]" />
            </a>

            <div class="flex items-center space-x-5">
                <a href="wishlist.php" class="text-xl hover:text-primary">
                    <i class="fa-regular fa-heart"></i>
                </a>

                <a href="cart.php" class="text-xl hover:text-primary relative">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="absolute -top-2 -right-2 bg-primary text-white text-[10px] rounded-full w-4 h-4 flex items-center justify-center">3</span>
                </a>

                <div class="relative">
                    <button id="mobile-avatar-button" class="text-xl hover:text-primary focus:outline-none">
                        <i class="fa-regular fa-user"></i>
                    </button>
                    
                    <ul id="avatar-submenu-mobile" class="absolute right-0 mt-3 w-44 bg-white border border-gray-100 shadow-xl py-2 rounded-lg hidden z-[100]">
                        <li><a href="my-account.php" class="block px-4 py-2 hover:bg-gray-100 text-sm text-gray-700">My Account</a></li>
                        <li><a href="checkout.php" class="block px-4 py-2 hover:bg-gray-100 text-sm text-gray-700">Checkout</a></li>
                        <li class="border-t border-gray-50 mt-1">
                            <a href="login.php" class="block px-4 py-2 hover:bg-gray-100 text-sm font-bold text-primary">Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pb-2">
            <form action="shop.php" method="GET" class="relative">
                <input type="text" name="q" placeholder="Search for products..." 
                       class="w-full bg-gray-100 border-none px-4 py-2.5 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:bg-white transition-all outline-none">
                <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
</header>

    <div id="mobile-sidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 z-[60]">
        <div class="p-4 flex justify-between items-center border-b">
            <span class="font-bold text-lg">Menu</span>
            <button id="close-menu-btn" class="text-xl"><i class="pe-7s-close"></i></button>
        </div>
        <nav class="p-4">
            <ul class="space-y-4">
                <li><a href="index.php" class="block hover:text-primary">Home</a></li>
                <li><a href="shop.php" class="block hover:text-primary">Shop</a></li>
                <li><a href="cart.php" class="block hover:text-primary">Cart</a></li>
                <li><a href="wishlist.php" class="block hover:text-primary">Wishlist</a></li>
                <li><a href="contact.php" class="block hover:text-primary">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div id="menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-[55]"></div>