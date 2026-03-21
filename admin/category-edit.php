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

            <main class="flex-1 overflow-y-auto p-6">

                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Edit Cagegory</h1>
                    <div class="flex gap-2">
                        <a href="categories.php" class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition">
                            Cancel
                        </a>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-sm">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto">                    

                    <form action="#" class="space-y-6">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Category Name *</label>
                                    <input type="text" value="Furniture" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                    <input type="text" value="furniture" class="w-full border px-4 py-2 rounded-lg bg-gray-50 outline-none text-gray-500">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Parent Category</label>
                                <select class="w-full border px-4 py-2 rounded-lg outline-none bg-white">
                                    <option value="">None (Top Level)</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Home Decor</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                                    <div class="p-4 border rounded-lg bg-gray-50 w-full flex justify-center">
                                        <img src="uploads/categories/1.png" class="h-32 object-contain" alt="Current" onerror="this.src='https://placehold.co/100x100?text=No+Image'">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload New Image</label>
                                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:bg-gray-50 transition cursor-pointer">
                                        <i class="fa-solid fa-cloud-arrow-up text-2xl text-gray-400 mb-2"></i>
                                        <p class="text-xs text-gray-500">Drop files here to update</p>
                                        <input type="file" class="hidden">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end gap-3 mt-10 pt-6 border-t">
                                <a href="categories.php" class="px-6 py-2 border rounded-lg hover:bg-gray-50 text-sm">Cancel</a>
                                <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition text-sm font-medium shadow-md">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>

            <!-- Main Content End -->

        </div>
    </div>

    <?php include 'includes/script.php'; ?>
</body>
</html>