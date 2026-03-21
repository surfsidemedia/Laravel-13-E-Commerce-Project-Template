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
                    <h1 class="text-2xl font-bold text-gray-800">Edit Product</h1>
                    <div class="flex gap-2">
                        <a href="products.php" class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition">
                            Cancel
                        </a>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-sm">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </div>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <div class="lg:col-span-2 space-y-6">
                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Basic Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Product Name *</label>
                                        <input type="text" value="Modern Sofa" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                        <input type="text" value="modern-sofa" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-gray-50">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Short Description</label>
                                        <textarea rows="3" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">Comfortable grey modern sofa perfect for living rooms.</textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                        <textarea rows="6" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Pricing & Inventory</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Regular Price ($)</label>
                                        <input type="number" value="500.00" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Sale Price ($)</label>
                                        <input type="number" value="450.00" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                                        <input type="text" value="SOFA-001" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Stock Status</label>
                                        <select class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="instock" selected>In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
                                        <input type="number" value="15" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Publish</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-600">Status:</span>
                                        <select class="border rounded text-sm px-2 py-1 bg-white focus:outline-none">
                                            <option>Draft</option>
                                            <option selected>Published</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center gap-2 pt-2">
                                        <input type="checkbox" id="featured" checked class="rounded border-gray-300 text-primary focus:ring-primary">
                                        <label for="featured" class="text-sm text-gray-700 cursor-pointer">This is a featured product</label>
                                    </div>
                                    <button class="w-full bg-primary hover:bg-blue-600 text-white py-2 rounded-lg text-sm font-medium transition mt-4 shadow">Update Product</button>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Organization</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                                        <select class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="">Select Category</option>
                                            <option value="1" selected>Furniture</option>
                                            <option value="2">Electronics</option>
                                            <option value="3">Clothing</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
                                        <select class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="">Select Brand</option>
                                            <option value="1">Nike</option>
                                            <option value="2" selected>Samsung</option>
                                            <option value="3">Apple</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Product Images</h3>
                                
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:bg-gray-50 transition cursor-pointer mb-4">
                                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-500">Upload New Images</p>
                                    <input type="file" class="hidden">
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <div class="relative group h-20 bg-gray-100 rounded border overflow-hidden">
                                        <img src="assets/images/product/product-01.jpg" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex items-center justify-center cursor-pointer text-white">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                    <div class="relative group h-20 bg-gray-100 rounded border overflow-hidden">
                                        <img src="assets/images/product/product-02.jpg" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex items-center justify-center cursor-pointer text-white">
                                            <i class="fa-solid fa-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </main>

            <!-- Main Content End -->

        </div>
    </div>

    <?php include 'includes/script.php'; ?>
</body>
</html>