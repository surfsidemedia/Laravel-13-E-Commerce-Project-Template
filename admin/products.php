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
                        <h1 class="text-2xl font-bold text-gray-800">Products</h1>
                        <p class="text-sm text-gray-500">Manage your product catalog</p>
                    </div>
                    <a href="product-add.php" class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-plus"></i> Add New Product
                    </a>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Search product name...">
                            </div>
                            
                            <select class="w-full md:w-48 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Categories</option>
                                <option value="furniture">Furniture</option>
                                <option value="decor">Decor</option>
                                <option value="lighting">Lighting</option>
                            </select>

                            <select class="w-full md:w-40 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="draft">Draft</option>
                                <option value="out">Out of Stock</option>
                            </select>
                        </div>
                        
                        <button class="border border-gray-300 text-gray-600 hover:bg-gray-50 px-4 py-2 rounded-lg text-sm font-medium transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-file-export"></i> Export
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                                <tr>
                                    <th class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </th>
                                    <th class="px-6 py-4">Product Name</th>
                                    <th class="px-6 py-4">Category</th>
                                    <th class="px-6 py-4">Price</th>
                                    <th class="px-6 py-4">Stock</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-01.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Elona Bedside Table</p>
                                                <p class="text-xs text-gray-500">ID: #PROD-001</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Furniture</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">$140.00</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">45</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="product-edit.php" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteProduct(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-02.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Minimal Chair</p>
                                                <p class="text-xs text-gray-500">ID: #PROD-002</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Furniture</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">$85.00</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">12</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-yellow-100 text-yellow-700 px-2.5 py-1 rounded-full text-xs font-semibold">Low Stock</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteProduct(this)"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-03.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Chandelier Light</p>
                                                <p class="text-xs text-gray-500">ID: #PROD-003</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Lighting</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">$210.00</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">0</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-red-100 text-red-700 px-2.5 py-1 rounded-full text-xs font-semibold">Out of Stock</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteProduct(this)"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-04.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm">Ceramic Vase</p>
                                                <p class="text-xs text-gray-500">ID: #PROD-004</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">Decor</td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">$45.00</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">100+</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full text-xs font-semibold">Draft</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center"><i class="fa-solid fa-pen-to-square"></i></button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteProduct(this)"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-4</span> of <span class="font-bold text-gray-700">120</span> products</span>
                        
                        <div class="flex gap-2">
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 disabled:opacity-50 text-sm" disabled>Previous</button>
                            <button class="px-3 py-1 border rounded bg-primary text-white text-sm">1</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 text-sm">2</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 text-sm">3</button>
                            <span class="px-2 text-gray-400">...</span>
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