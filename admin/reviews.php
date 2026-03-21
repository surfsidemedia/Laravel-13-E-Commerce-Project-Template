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
                        <h1 class="text-2xl font-bold text-gray-800">Product Reviews</h1>
                        <p class="text-sm text-gray-500">Moderate ratings and feedback from customers</p>
                    </div>
                    <button class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-check-double"></i> Approve Selected
                    </button>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Search content or product...">
                            </div>
                            
                            <select class="w-full md:w-48 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Ratings</option>
                                <option value="5">5 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="2">2 Stars</option>
                                <option value="1">1 Star</option>
                            </select>

                            <select class="w-full md:w-48 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Status</option>
                                <option value="published">Published</option>
                                <option value="pending">Pending</option>
                                <option value="spam">Spam</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                                <tr>
                                    <th class="px-6 py-4 w-10">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                                    </th>
                                    <th class="px-6 py-4">Product</th>
                                    <th class="px-6 py-4">Reviewer</th>
                                    <th class="px-6 py-4">Rating</th>
                                    <th class="px-6 py-4 w-1/3">Review</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                
                                <tr class="hover:bg-gray-50 transition bg-yellow-50/30">
                                    <td class="px-6 py-4 align-top">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary mt-1">
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-01.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm truncate w-32">Elona Bedside</p>
                                                <a href="#" class="text-xs text-primary hover:underline">View Product</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="font-semibold text-gray-800 text-sm">Rosie Silva</p>
                                        <p class="text-xs text-gray-500">rosie@email.com</p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex text-yellow-400 text-xs">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 font-medium">5.0</span>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="text-sm text-gray-600 whitespace-normal line-clamp-2">
                                            Absolutely love this table! It fits perfectly in my bedroom and the finish is amazing. Highly recommend to anyone looking for a modern touch.
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <span class="bg-yellow-100 text-yellow-700 px-2.5 py-1 rounded-full text-xs font-semibold">Pending</span>
                                    </td>
                                    <td class="px-6 py-4 align-top text-sm text-gray-500">Oct 24, 2025</td>
                                    <td class="px-6 py-4 align-top text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-green-100 text-green-600 transition flex items-center justify-center" title="Approve">
                                                <i class="fa-solid fa-check"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteReview(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 align-top">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary mt-1">
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-02.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm truncate w-32">Minimal Chair</p>
                                                <a href="#" class="text-xs text-primary hover:underline">View Product</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="font-semibold text-gray-800 text-sm">John Doe</p>
                                        <p class="text-xs text-gray-500">john@email.com</p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex text-yellow-400 text-xs">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 font-medium">4.0</span>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="text-sm text-gray-600 whitespace-normal line-clamp-2">
                                            Great chair, very comfortable. The only downside was the delivery took a bit longer than expected.
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Published</span>
                                    </td>
                                    <td class="px-6 py-4 align-top text-sm text-gray-500">Oct 22, 2025</td>
                                    <td class="px-6 py-4 align-top text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-yellow-100 text-yellow-600 transition flex items-center justify-center" title="Unpublish">
                                                <i class="fa-solid fa-ban"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteReview(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 align-top">
                                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary mt-1">
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex items-center gap-3">
                                            <img src="assets/images/product/product-03.jpg" class="w-12 h-12 rounded object-cover border" alt="Prod">
                                            <div>
                                                <p class="font-semibold text-gray-800 text-sm truncate w-32">Chandelier</p>
                                                <a href="#" class="text-xs text-primary hover:underline">View Product</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="font-semibold text-gray-800 text-sm">Mike Smith</p>
                                        <p class="text-xs text-gray-500">mike@email.com</p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex text-yellow-400 text-xs">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <span class="text-xs text-gray-500 font-medium">1.0</span>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <p class="text-sm text-gray-600 whitespace-normal line-clamp-2">
                                            Product arrived broken. Very disappointed with the packaging.
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 align-top">
                                        <span class="bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full text-xs font-semibold">Published</span>
                                    </td>
                                    <td class="px-6 py-4 align-top text-sm text-gray-500">Oct 20, 2025</td>
                                    <td class="px-6 py-4 align-top text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-yellow-100 text-yellow-600 transition flex items-center justify-center" title="Unpublish">
                                                <i class="fa-solid fa-ban"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteReview(this)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-3</span> of <span class="font-bold text-gray-700">45</span> reviews</span>
                        
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