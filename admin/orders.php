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
                
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Orders</h1>
                        <p class="text-sm text-gray-500">Manage and track customer orders</p>
                    </div>
                    <button class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-file-export"></i> Export All
                    </button>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Order ID or Customer Name...">
                            </div>
                            
                            <select class="w-full md:w-48 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">Order Status</option>
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="shipped">Shipped</option>
                                <option value="delivered">Delivered</option>
                                <option value="cancelled">Cancelled</option>
                            </select>

                            <input type="date" class="w-full md:w-48 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary text-gray-500">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                                <tr>
                                    <th class="px-6 py-4">Order ID</th>
                                    <th class="px-6 py-4">Customer</th>
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4">Total</th>
                                    <th class="px-6 py-4">Payment</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-gray-700">#ORD-5521</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">JD</div>
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">John Doe</p>
                                                <p class="text-xs text-gray-500">john@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Oct 24, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-800">$120.50</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-50 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">Paid</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-100 text-blue-700 px-2.5 py-1 rounded-full text-xs font-semibold">Processing</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="View Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="Download Invoice">
                                                <i class="fa-solid fa-download"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-gray-700">#ORD-5520</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center text-xs font-bold">AS</div>
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Alice Smith</p>
                                                <p class="text-xs text-gray-500">alice@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Oct 23, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-800">$45.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-yellow-50 text-yellow-700 px-2 py-1 rounded-full text-xs font-semibold">Unpaid</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-yellow-100 text-yellow-700 px-2.5 py-1 rounded-full text-xs font-semibold">Pending</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="View Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="Download Invoice">
                                                <i class="fa-solid fa-download"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-gray-700">#ORD-5519</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xs font-bold">RJ</div>
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Robert Johnson</p>
                                                <p class="text-xs text-gray-500">robert@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Oct 22, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-800">$250.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-50 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">Paid</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Delivered</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="View Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="Download Invoice">
                                                <i class="fa-solid fa-download"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-gray-700">#ORD-5518</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center text-xs font-bold">MK</div>
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Michael King</p>
                                                <p class="text-xs text-gray-500">michael@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Oct 21, 2025</td>
                                    <td class="px-6 py-4 text-sm font-bold text-gray-800">$85.00</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-red-50 text-red-700 px-2 py-1 rounded-full text-xs font-semibold">Refunded</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-red-100 text-red-700 px-2.5 py-1 rounded-full text-xs font-semibold">Cancelled</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="View Details">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-gray-500 transition flex items-center justify-center" title="Download Invoice">
                                                <i class="fa-solid fa-download"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-4</span> of <span class="font-bold text-gray-700">56</span> orders</span>
                        
                        <div class="flex gap-2">
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 disabled:opacity-50 text-sm" disabled>Previous</button>
                            <button class="px-3 py-1 border rounded bg-primary text-white text-sm">1</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 text-sm">2</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 text-sm">3</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 text-sm">Next</button>
                        </div>
                    </div>
                </div>

            </main>

            <!-- Main Content End -->

        </div>
    </div>

    <?php include 'includes/script.php'; ?>
</body>
</html>