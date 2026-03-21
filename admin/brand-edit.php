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
                    <h1 class="text-2xl font-bold text-gray-800">Edit Brand</h1>
                    <div class="flex gap-2">
                        <a href="brands.php" class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition">
                            Cancel
                        </a>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-sm">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
                <div class="max-w-3xl mx-auto">
                    <form class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Brand Name *</label>
                                    <input type="text" value="Samsung" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Brand Slug</label>
                                    <input type="text" value="samsung" class="w-full border px-4 py-2 rounded-lg bg-gray-50 outline-none">
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-8 items-start pt-4">
                                <div class="w-full md:w-1/3">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Logo</label>
                                    <div class="h-40 w-full border rounded-lg bg-white flex items-center justify-center p-4">
                                        <img src="uploads/brands/1.png" class="max-h-full max-w-full object-contain" alt="Brand Logo">
                                    </div>
                                </div>
                                <div class="w-full md:w-2/3">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Change Brand Logo</label>
                                    <label class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                        <div class="text-center">
                                            <i class="fa-solid fa-image text-3xl text-gray-300 mb-2"></i>
                                            <p class="text-sm text-gray-500">Upload new logo</p>
                                        </div>
                                        <input type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>

                            <div class="flex items-center gap-3 py-4 border-t border-b">
                                <div class="relative inline-block w-12 h-6 transition duration-200 ease-in-out bg-green-500 rounded-full">
                                    <input type="checkbox" id="brand-active" checked class="absolute w-6 h-6 bg-white border-4 border-green-500 rounded-full appearance-none cursor-pointer translate-x-6">
                                </div>
                                <label for="brand-active" class="text-sm font-medium text-gray-700">Brand is Active</label>
                            </div>

                            <div class="flex justify-end gap-3 pt-2">
                                <a href="brands.php" class="px-6 py-2 border rounded-lg hover:bg-gray-50 text-sm transition">Cancel</a>
                                <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition text-sm font-medium shadow-md">Save Changes</button>
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