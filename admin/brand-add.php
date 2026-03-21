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
                    <h1 class="text-2xl font-bold text-gray-800">Add New Brand</h1>
                    <a href="categories.php" class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2">
                        <i class="fa-solid fa-arrow-left"></i> Back to Brands
                    </a>
                </div>
                <div class="max-w-3xl mx-auto">
                    <form class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Brand Name *</label>
                                <input type="text" placeholder="e.g. Samsung" class="w-full border px-4 py-2 rounded-lg outline-none focus:ring-1 focus:ring-primary">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Brand Slug</label>
                                <input type="text" placeholder="samsung" class="w-full border px-4 py-2 rounded-lg bg-gray-50 outline-none">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Brand Logo *</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <i class="fa-solid fa-image text-3xl text-gray-400 mb-2"></i>
                                        <p class="text-sm text-gray-500">Upload brand logo (PNG/JPG)</p>
                                    </div>
                                    <input type="file" class="hidden" />
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center gap-2">
                            <input type="checkbox" id="status" class="w-4 h-4 text-primary rounded border-gray-300 focus:ring-primary">
                            <label for="status" class="text-sm text-gray-700">Set as Active Brand</label>
                        </div>

                        <div class="flex justify-end gap-3 pt-4 border-t">
                            <a href="brands.php" class="px-6 py-2 border rounded-lg hover:bg-gray-50 transition text-sm">Cancel</a>
                            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition text-sm font-medium shadow-sm">Save Brand</button>
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