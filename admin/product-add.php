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
                    <h1 class="text-2xl font-bold text-gray-800">Add New Product</h1>
                    <a href="products.php" class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2">
                        <i class="fa-solid fa-arrow-left"></i> Back to Products
                    </a>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        
                        <div class="lg:col-span-2 space-y-6">
                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Basic Information</h3>
                                <div class="space-y-4">
                                <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Product Name *</label>
                                        <input type="text" id="product-name" name="name" placeholder="e.g. Modern Sofa" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-sm" required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                        <input type="text" id="product-slug" name="slug" placeholder="e.g. modern-sofa" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-sm bg-gray-50">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Short Description</label>
                                        <textarea id="short_description" name="short_description" rows="3" placeholder="Brief summary..." class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-sm"></textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                        <textarea id="description" name="description" rows="6" placeholder="Detailed description..." class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary text-sm"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Pricing & Inventory</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Regular Price ($)</label>
                                        <input type="number"  id="regular_price" name="regular_price" placeholder="0.00" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Sale Price ($)</label>
                                        <input type="number"  id="sale_price" name="sale_price" placeholder="0.00" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                                        <input type="text" id="SKU" name="SKU" placeholder="Product SKU" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Stock Status</label>
                                        <select id="stock_status" name="stock_status" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="instock">In Stock</option>
                                            <option value="outofstock">Out of Stock</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
                                        <input type="number" id="quantity" name="quantity" placeholder="Total items" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
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
                                        <select id="status" name="status" class="border rounded text-sm px-2 py-1 bg-white focus:outline-none">
                                            <option>Draft</option>
                                            <option>Published</option>
                                        </select>
                                    </div>
                                    <div class="flex items-center gap-2 pt-2">
                                        <input type="checkbox" id="featured" name="featured" class="rounded border-gray-300 text-primary focus:ring-primary">
                                        <label for="featured" class="text-sm text-gray-700 cursor-pointer">This is a featured product</label>
                                    </div>
                                    <button class="w-full bg-primary hover:bg-blue-600 text-white py-2 rounded-lg text-sm font-medium transition mt-4 shadow">Save Product</button>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Organization</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                                        <select id="category_id" name="category_id" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="">Select Category</option>
                                            <option value="1">Furniture</option>
                                            <option value="2">Electronics</option>
                                            <option value="3">Clothing</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
                                        <select id="brand_id" name="brand_id" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="">Select Brand</option>
                                            <option value="1">Nike</option>
                                            <option value="2">Samsung</option>
                                            <option value="3">Apple</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Product Images</h3>
                                
                                <label for="product-images" class="block border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:bg-gray-50 transition cursor-pointer">
                                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-500">Click to upload multiple images</p>
                                    <input type="file" id="product-images" name="images" class="hidden" multiple accept="image/png, image/jpeg, image/jpg, image/webp">
                                </label>

                                <div id="image-preview-container" class="grid grid-cols-3 gap-3 mt-4">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // ==========================================
            // 1. AUTO-SLUG GENERATOR
            // ==========================================
            const productNameInput = document.getElementById('product-name');
            const productSlugInput = document.getElementById('product-slug');

            if (productNameInput && productSlugInput) {
                productNameInput.addEventListener('input', function() {
                    const slug = this.value.toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9 -]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                    productSlugInput.value = slug;
                });
            }

            // ==========================================
            // 2. MULTIPLE IMAGE UPLOAD & PREVIEW
            // ==========================================
            const imageInput = document.getElementById('product-images');
            const previewContainer = document.getElementById('image-preview-container');
            
            // Array to store our selected files in memory
            let selectedFiles = [];

            if (imageInput && previewContainer) {
                imageInput.addEventListener('change', function(event) {
                    const files = Array.from(event.target.files);
                    
                    // Add newly selected valid images to our tracking array
                    files.forEach(file => {
                        if (file.type.startsWith('image/')) {
                            // Prevent duplicates based on name and size
                            const isDuplicate = selectedFiles.some(f => f.name === file.name && f.size === file.size);
                            if (!isDuplicate) {
                                selectedFiles.push(file);
                            }
                        }
                    });

                    updateFileInputAndPreviews();
                });
            }

            function updateFileInputAndPreviews() {
                // 1. Sync the HTML input with our tracking array
                // We use DataTransfer to programmatically set the files of the input
                const dataTransfer = new DataTransfer();
                selectedFiles.forEach(file => dataTransfer.items.add(file));
                imageInput.files = dataTransfer.files;

                // 2. Clear the current previews
                previewContainer.innerHTML = '';

                // 3. Re-render the previews
                selectedFiles.forEach((file, index) => {
                    const objectUrl = URL.createObjectURL(file);
                    
                    // Create wrapper div
                    const div = document.createElement('div');
                    div.className = 'relative h-24 bg-gray-50 rounded-lg border border-gray-200 flex items-center justify-center overflow-hidden group shadow-sm';
                    
                    // Create Image element
                    const img = document.createElement('img');
                    img.src = objectUrl;
                    img.className = 'w-full h-full object-cover';
                    
                    // Create Remove Button
                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    // The button appears when hovering over the image
                    removeBtn.className = 'absolute top-1 right-1 bg-red-500 text-white rounded-md w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity focus:outline-none shadow-md';
                    removeBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
                    
                    // Remove logic
                    removeBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        // Remove the file from our tracking array based on index
                        selectedFiles.splice(index, 1);
                        // Re-run the update to refresh the view and the actual file input
                        updateFileInputAndPreviews();
                        
                        // Clean up memory
                        URL.revokeObjectURL(objectUrl);
                    });

                    div.appendChild(img);
                    div.appendChild(removeBtn);
                    previewContainer.appendChild(div);
                });
            }
        });
    </script>
    
</body>
</html>