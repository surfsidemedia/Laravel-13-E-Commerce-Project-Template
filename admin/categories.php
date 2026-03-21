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
                        <h1 class="text-2xl font-bold text-gray-800">Categories</h1>
                        <p class="text-sm text-gray-500">Manage product categories</p>
                    </div>
                    <a href="category-add.php" class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-plus"></i> Add New Category
                    </a>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Search category...">
                            </div>
                            
                            <select class="w-full md:w-48 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">Parent Category</option>
                                <option value="furniture">Furniture</option>
                                <option value="electronic">Electronics</option>
                                <option value="fashion">Fashion</option>
                            </select>
                        </div>
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
                                    <th class="px-6 py-4">ID</th>
                                    <th class="px-6 py-4">Image/Icon</th>
                                    <th class="px-6 py-4">Category Name</th>
                                    <th class="px-6 py-4">Slug</th>
                                    <th class="px-6 py-4">Items</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">#CAT-001</td>
                                    <td class="px-6 py-4">
                                        <div class="w-10 h-10 bg-gray-100 rounded flex items-center justify-center text-gray-600">
                                            <i class="fa-solid fa-chair text-lg"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Furniture</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">furniture</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-purple-50 text-purple-700 px-2 py-1 rounded text-xs font-semibold">1,240</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="category-edit.php" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteCategory(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">#CAT-002</td>
                                    <td class="px-6 py-4">
                                        <div class="w-10 h-10 bg-gray-100 rounded flex items-center justify-center text-gray-600">
                                            <i class="fa-solid fa-lightbulb text-lg"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Lighting</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">lighting</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-purple-50 text-purple-700 px-2 py-1 rounded text-xs font-semibold">450</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="category-edit.php" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteCategory(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">#CAT-003</td>
                                    <td class="px-6 py-4">
                                        <img src="uploads/categories/1.png" class="w-10 h-10 object-contain rounded border bg-white" alt="Icon" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                                        <div class="w-10 h-10 bg-gray-100 rounded items-center justify-center text-gray-600 hidden">
                                            <i class="fa-solid fa-image"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Home Decor</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">home-decor</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-purple-50 text-purple-700 px-2 py-1 rounded text-xs font-semibold">890</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-yellow-100 text-yellow-700 px-2.5 py-1 rounded-full text-xs font-semibold">Hidden</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteCategory(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">#CAT-004</td>
                                    <td class="px-6 py-4">
                                        <div class="w-10 h-10 bg-gray-100 rounded flex items-center justify-center text-gray-600">
                                            <i class="fa-solid fa-mobile-screen-button text-lg"></i>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Electronics</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">electronics</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-purple-50 text-purple-700 px-2 py-1 rounded text-xs font-semibold">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full text-xs font-semibold">Draft</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteCategory(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-4</span> of <span class="font-bold text-gray-700">18</span> categories</span>
                        
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