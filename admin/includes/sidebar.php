<aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-sky-800 text-gray-100 transition-transform transform -translate-x-full md:translate-x-0 md:static md:inset-0 flex flex-col">
    <div class="flex items-center justify-center h-16 bg-sky-700 border-b border-gray-800">
        <a href="dashboard.php"><img src="assets/images/logo.png" alt="Logo" class="h-12" /></a>
    </div>

    <div class="flex-1 overflow-y-auto py-4">
        <nav class="px-4 space-y-2">
            <a href="dashboard.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-gauge-high w-5 text-center"></i>
                <span>Dashboard</span>
            </a>
            
            <p class="px-4 text-xs font-semibold text-gray-300 uppercase mt-4 mb-2">Management</p>
            
            <a href="products.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-box w-5 text-center"></i>
                <span>Products</span>
            </a>

            <a href="categories.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-layer-group w-5 text-center"></i>
                <span class="font-medium">Categories</span>
            </a>

            <a href="brands.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-tag w-5 text-center"></i>
                <span>Brands</span>
            </a>

            <a href="orders.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-cart-shopping w-5 text-center"></i>
                <span>Orders</span>
            </a>
            <a href="customers.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-users w-5 text-center"></i>
                <span>Customers</span>
            </a>
            <a href="reviews.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-regular fa-star w-5 text-center"></i>
                <span>Reviews</span>
            </a>

            <p class="px-4 text-xs font-semibold text-gray-300 uppercase mt-4 mb-2">Settings</p>

            <a href="settings.php" class="nav-link flex items-center gap-3 px-4 py-2.5 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
                <i class="fa-solid fa-gear w-5 text-center"></i>
                <span>General Settings</span>
            </a>
        </nav>
    </div>

    <div class="p-4 border-t border-gray-800">
        <a href="../login.php" class="nav-link flex items-center gap-3 w-full px-4 py-2 text-gray-100 hover:text-white hover:bg-gray-800 rounded-lg transition">
            <i class="fa-solid fa-right-from-bracket w-5 text-center"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>

<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden"></div>