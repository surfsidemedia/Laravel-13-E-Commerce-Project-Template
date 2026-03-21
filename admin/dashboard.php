<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <?php include 'includes/sidebar.php'; ?>

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <?php include 'includes/header.php'; ?>

            <!-- Main Content Start -->

            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard Overview</h1>                    
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Total Sales</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">$24,500</h3>
                                <p class="text-sm text-green-500 mt-1 flex items-center gap-1">
                                    <i class="fa-solid fa-arrow-trend-up"></i> +12%
                                </p>
                            </div>
                            <div class="p-3 bg-blue-50 rounded-lg text-primary">
                                <i class="fa-solid fa-dollar-sign text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Total Orders</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">1,245</h3>
                                <p class="text-sm text-green-500 mt-1 flex items-center gap-1">
                                    <i class="fa-solid fa-arrow-trend-up"></i> +5%
                                </p>
                            </div>
                            <div class="p-3 bg-purple-50 rounded-lg text-purple-600">
                                <i class="fa-solid fa-bag-shopping text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Customers</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">845</h3>
                                <p class="text-sm text-red-500 mt-1 flex items-center gap-1">
                                    <i class="fa-solid fa-arrow-trend-down"></i> -2%
                                </p>
                            </div>
                            <div class="p-3 bg-orange-50 rounded-lg text-orange-600">
                                <i class="fa-solid fa-users text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide">Products</p>
                                <h3 class="text-2xl font-bold text-gray-800 mt-2">120</h3>
                                <p class="text-sm text-green-500 mt-1 flex items-center gap-1">
                                    <i class="fa-solid fa-plus"></i> 4 New
                                </p>
                            </div>
                            <div class="p-3 bg-green-50 rounded-lg text-green-600">
                                <i class="fa-solid fa-box text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mb-8">
                    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="font-bold text-gray-800">Recent Orders</h3>
                        <a href="#" class="text-sm text-primary hover:underline">View All</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                                <tr>
                                    <th class="px-6 py-3">Order ID</th>
                                    <th class="px-6 py-3">Customer</th>
                                    <th class="px-6 py-3">Product</th>
                                    <th class="px-6 py-3">Date</th>
                                    <th class="px-6 py-3">Amount</th>
                                    <th class="px-6 py-3">Status</th>
                                    <th class="px-6 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-bold text-gray-700">#ORD-001</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">JD</div>
                                            <span class="text-sm text-gray-700">John Doe</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Modern Sofa</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Oct 24, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-700">$120.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold">Completed</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary transition"><i class="fa-solid fa-eye"></i></button>
                                        <button class="text-gray-400 hover:text-red-500 transition ml-2"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-bold text-gray-700">#ORD-002</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">AS</div>
                                            <span class="text-sm text-gray-700">Alice Smith</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Wooden Chair</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Oct 23, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-700">$45.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-semibold">Pending</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary transition"><i class="fa-solid fa-eye"></i></button>
                                        <button class="text-gray-400 hover:text-red-500 transition ml-2"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-bold text-gray-700">#ORD-003</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-600">RJ</div>
                                            <span class="text-sm text-gray-700">Robert Johnson</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Office Desk</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Oct 22, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-700">$250.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs font-semibold">Processing</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button class="text-gray-400 hover:text-primary transition"><i class="fa-solid fa-eye"></i></button>
                                        <button class="text-gray-400 hover:text-red-500 transition ml-2"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>

            <!-- Main Content End -->

        </div>
    </div>

    <?php include 'includes/script.php'; ?>
</body>
</html>