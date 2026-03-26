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
                                        <input type="text" id="product-name" name="name" value="Modern Sofa" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                        <input type="text" id="product-slug" name="slug" value="modern-sofa" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-gray-50">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Short Description</label>
                                        <textarea id="short_description" name="short_description" rows="3" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">Comfortable grey modern sofa perfect for living rooms.</textarea>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                                        <textarea id="description" name="description" rows="6" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
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
                                        <select id="category_id" name="category_id" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="">Select Category</option>
                                            <option value="1" selected>Furniture</option>
                                            <option value="2">Electronics</option>
                                            <option value="3">Clothing</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
                                        <select id="brand_id" name="brand_id" class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-primary text-sm bg-white">
                                            <option value="">Select Brand</option>
                                            <option value="1">Nike</option>
                                            <option value="2" selected>Samsung</option>
                                            <option value="3">Apple</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Product Image (Main)</h3>
                                
                                <label for="product-image" id="single-upload-label" class="block border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:bg-gray-50 transition cursor-pointer mb-4">
                                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-500">Upload New Main Image</p>
                                    <input type="file" id="product-image" name="image" class="hidden" accept="image/png, image/jpeg, image/jpg, image/webp">
                                </label>

                                <div id="single-new-preview-container" class="hidden mb-6 relative h-40 bg-gray-50 rounded border border-blue-200 flex items-center justify-center overflow-hidden group shadow-sm">
                                    <img id="single-image-preview" src="" class="max-w-full max-h-full object-contain">
                                    <button type="button" id="remove-single-new-btn" class="absolute top-2 right-2 bg-red-500 text-white rounded-md w-7 h-7 flex items-center justify-center text-sm shadow-md hover:bg-red-600 transition focus:outline-none">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <h4 class="text-sm font-medium text-gray-700 mb-3 border-b pb-1">Existing Image</h4>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="existing-image-wrapper relative group h-24 bg-gray-100 rounded border overflow-hidden">
                                        <img src="assets/images/product/product-01.jpg" class="w-full h-full object-cover">
                                        <div class="remove-existing-btn absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex items-center justify-center cursor-pointer text-white transition-opacity" data-input-name="deleted_main_image" data-image="product-01.jpg">
                                            <i class="fa-solid fa-trash pointer-events-none"></i>
                                        </div>
                                    </div>                                                                      
                                </div>
                            </div>

                            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                                <h3 class="font-bold text-gray-800 mb-4 border-b pb-2">Product Gallery Images</h3>
                                
                                <label for="product-images" class="block border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:bg-gray-50 transition cursor-pointer mb-4">
                                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-gray-400 mb-2"></i>
                                    <p class="text-sm text-gray-500">Upload New Gallery Images</p>
                                    <input type="file" id="product-images" name="images[]" class="hidden" multiple accept="image/png, image/jpeg, image/jpg, image/webp">
                                </label>

                                <div id="gallery-new-preview-container" class="grid grid-cols-3 gap-2 mb-6"></div>

                                <h4 class="text-sm font-medium text-gray-700 mb-3 border-b pb-1">Existing Gallery Images</h4>
                                <div class="grid grid-cols-3 gap-2">
                                    
                                    <div class="existing-image-wrapper relative group h-20 bg-gray-100 rounded border overflow-hidden">
                                        <img src="assets/images/product/product-01.jpg" class="w-full h-full object-cover">
                                        <div class="remove-existing-btn absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex items-center justify-center cursor-pointer text-white transition-opacity" data-input-name="deleted_gallery_images[]" data-image="product-01.jpg">
                                            <i class="fa-solid fa-trash pointer-events-none"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="existing-image-wrapper relative group h-20 bg-gray-100 rounded border overflow-hidden">
                                        <img src="assets/images/product/product-02.jpg" class="w-full h-full object-cover">
                                        <div class="remove-existing-btn absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex items-center justify-center cursor-pointer text-white transition-opacity" data-input-name="deleted_gallery_images[]" data-image="product-02.jpg">
                                            <i class="fa-solid fa-trash pointer-events-none"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div id="deleted-existing-images-container" class="hidden"></div>

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
            // 2. SINGLE NEW IMAGE UPLOAD (MAIN)
            // ==========================================
            const singleImageInput = document.getElementById('product-image');
            const singleUploadLabel = document.getElementById('single-upload-label');
            const singlePreviewContainer = document.getElementById('single-new-preview-container');
            const singleImagePreview = document.getElementById('single-image-preview');
            const removeSingleNewBtn = document.getElementById('remove-single-new-btn');

            if (singleImageInput) {
                singleImageInput.addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file && file.type.startsWith('image/')) {
                        singleImagePreview.src = URL.createObjectURL(file);
                        singleUploadLabel.classList.add('hidden');
                        singlePreviewContainer.classList.remove('hidden');
                        singlePreviewContainer.classList.add('flex');
                    } else {
                        resetSingleNewImage();
                    }
                });
            }

            if (removeSingleNewBtn) {
                removeSingleNewBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    resetSingleNewImage();
                });
            }

            function resetSingleNewImage() {
                singleImageInput.value = '';
                singleImagePreview.src = '';
                singlePreviewContainer.classList.add('hidden');
                singlePreviewContainer.classList.remove('flex');
                singleUploadLabel.classList.remove('hidden');
            }

            // ==========================================
            // 3. MULTIPLE NEW IMAGE UPLOAD (GALLERY)
            // ==========================================
            const galleryInput = document.getElementById('product-images');
            const galleryPreviewContainer = document.getElementById('gallery-new-preview-container');
            let selectedGalleryFiles = []; // Array to store multiple files

            if (galleryInput && galleryPreviewContainer) {
                galleryInput.addEventListener('change', function(event) {
                    const files = Array.from(event.target.files);
                    
                    files.forEach(file => {
                        if (file.type.startsWith('image/')) {
                            // Prevent duplicates
                            const isDuplicate = selectedGalleryFiles.some(f => f.name === file.name && f.size === file.size);
                            if (!isDuplicate) {
                                selectedGalleryFiles.push(file);
                            }
                        }
                    });
                    updateGalleryPreviews();
                });
            }

            function updateGalleryPreviews() {
                // Sync the HTML input
                const dataTransfer = new DataTransfer();
                selectedGalleryFiles.forEach(file => dataTransfer.items.add(file));
                galleryInput.files = dataTransfer.files;

                // Clear current previews
                galleryPreviewContainer.innerHTML = '';

                // Re-render
                selectedGalleryFiles.forEach((file, index) => {
                    const objectUrl = URL.createObjectURL(file);
                    
                    const div = document.createElement('div');
                    div.className = 'relative h-20 bg-gray-50 rounded border border-blue-200 flex items-center justify-center overflow-hidden group shadow-sm';
                    
                    const img = document.createElement('img');
                    img.src = objectUrl;
                    img.className = 'w-full h-full object-cover';
                    
                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'absolute top-1 right-1 bg-red-500 text-white rounded-md w-6 h-6 flex items-center justify-center text-xs opacity-0 group-hover:opacity-100 transition-opacity focus:outline-none shadow-md';
                    removeBtn.innerHTML = '<i class="fa-solid fa-xmark"></i>';
                    
                    removeBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        selectedGalleryFiles.splice(index, 1);
                        updateGalleryPreviews();
                        URL.revokeObjectURL(objectUrl);
                    });

                    div.appendChild(img);
                    div.appendChild(removeBtn);
                    galleryPreviewContainer.appendChild(div);
                });
            }

            // ==========================================
            // 4. REMOVE EXISTING IMAGES (TRACK FOR BACKEND)
            // ==========================================
            const removeExistingBtns = document.querySelectorAll('.remove-existing-btn');
            const deletedImagesContainer = document.getElementById('deleted-existing-images-container');

            removeExistingBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // We pull the input name dynamically so PHP knows if it's the main image or a gallery array
                    const inputName = this.getAttribute('data-input-name'); 
                    const imageName = this.getAttribute('data-image');
                    const wrapper = this.closest('.existing-image-wrapper');
                    
                    // Hide the image from the UI
                    wrapper.style.display = 'none';
                    
                    // Create a hidden input for PHP
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = inputName;
                    hiddenInput.value = imageName;
                    
                    deletedImagesContainer.appendChild(hiddenInput);
                });
            });

        });
    </script>
</body>
</html>