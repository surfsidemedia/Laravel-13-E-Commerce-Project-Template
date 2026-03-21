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
                        <h1 class="text-2xl font-bold text-gray-800">Brands</h1>
                        <p class="text-sm text-gray-500">Manage product brands and partners</p>
                    </div>
                    <a href="brand-add.php" class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-plus"></i> Add New Brand
                    </a>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Search brand...">
                            </div>
                            
                            <select class="w-full md:w-40 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                                <tr>
                                    <th class="px-6 py-4">ID</th>
                                    <th class="px-6 py-4">Logo</th>
                                    <th class="px-6 py-4">Brand Name</th>
                                    <th class="px-6 py-4">Slug</th>
                                    <th class="px-6 py-4">Products</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#101</td>
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center border">
                                            <img src="uploads/brands/1.png" class="max-w-[30px] max-h-[30px] object-contain" alt="Brand Logo" onerror="this.src='https://placehold.co/40x40?text=B'">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Samsung</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">samsung</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs font-semibold">120 Items</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteBrand(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#102</td>
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center border">
                                            <img src="uploads/brands/2.png" class="max-w-[30px] max-h-[30px] object-contain" alt="Brand Logo" onerror="this.src='https://placehold.co/40x40?text=A'">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Apple</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">apple</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs font-semibold">85 Items</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteBrand(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#103</td>
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center border">
                                            <img src="uploads/brands/3.png" class="max-w-[30px] max-h-[30px] object-contain" alt="Brand Logo" onerror="this.src='https://placehold.co/40x40?text=N'">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Nike</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">nike</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs font-semibold">340 Items</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="brand-edit.php" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteBrand(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#104</td>
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center border">
                                            <img src="uploads/brands/4.png" class="max-w-[30px] max-h-[30px] object-contain" alt="Brand Logo" onerror="this.src='https://placehold.co/40x40?text=A'">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Adidas</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">adidas</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs font-semibold">210 Items</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full text-xs font-semibold">Inactive</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="brand-edit.php" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteBrand(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-4</span> of <span class="font-bold text-gray-700">24</span> brands</span>
                        
                        <div class="flex gap-2">
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 disabled:opacity-50 text-sm" disabled>Previous</button>
                            <button class="px-3 py-1 border rounded bg-primary text-white text-sm">1</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 text-sm">2</button>
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