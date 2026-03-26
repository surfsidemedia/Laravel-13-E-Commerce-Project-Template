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
                                    <input type="text" id="name" name="name" value="Furniture" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                    <input type="text" id="slug" name="slug" value="furniture" class="w-full border px-4 py-2 rounded-lg bg-gray-50 outline-none text-gray-500">
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Parent Category</label>
                                <select id="parent_id" name="parent_id" class="w-full border px-4 py-2 rounded-lg outline-none bg-white">
                                    <option value="">None (Top Level)</option>
                                    <option value="1">Electronics</option>
                                    <option value="2">Home Decor</option>
                                </select>
                            </div>

                            <div class="flex flex-col md:flex-row gap-8 items-start pt-4">
                                <div class="w-full md:w-1/3">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Current Image</label>
                                    <div class="p-4 border rounded-lg bg-gray-50 w-full h-40 flex items-center justify-center">
                                        <img src="uploads/categories/1.png" class="max-h-full max-w-full object-contain" alt="Current" onerror="this.src='https://placehold.co/100x100?text=No+Image'">
                                    </div>
                                </div>

                                <div class="w-full md:w-2/3">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Upload New Image</label>
                                    
                                    <div class="relative w-full h-40">
                                        <label for="category-image" class="relative flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition overflow-hidden">
                                            
                                            <div id="upload-content" class="text-center z-10">
                                                <i class="fa-solid fa-cloud-arrow-up text-2xl text-gray-400 mb-2"></i>
                                                <p class="text-xs text-gray-500">Drop files here to update</p>
                                            </div>

                                            <img id="image-preview" class="hidden absolute inset-0 w-full h-full object-contain p-2 z-20 bg-white" src="" alt="New Category Image Preview">

                                            <input type="file" id="category-image" name="image" class="hidden" accept="image/png, image/jpeg, image/jpg, image/webp" />
                                        </label>

                                        <button type="button" id="remove-image-btn" class="hidden absolute top-2 right-2 z-30 bg-white text-red-500 hover:text-white hover:bg-red-500 rounded-full w-8 h-8 flex items-center justify-center shadow-md border border-gray-200 transition-colors focus:outline-none" title="Remove image">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-2 pt-6">
                                <input type="checkbox" id="status" class="w-4 h-4 text-primary rounded border-gray-300 focus:ring-primary">
                                <label for="status" class="text-sm text-gray-700">Set as Active Category</label>
                            </div>

                            <div class="flex justify-end gap-3 mt-6 pt-6 border-t">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // ==========================================
            // 1. NEW CATEGORY IMAGE PREVIEW & REMOVE
            // ==========================================
            const imageInput = document.getElementById('category-image');
            const uploadContent = document.getElementById('upload-content');
            const imagePreview = document.getElementById('image-preview');
            const removeBtn = document.getElementById('remove-image-btn');

            if (imageInput) {
                // Handle file selection
                imageInput.addEventListener('change', function(event) {
                    const file = event.target.files[0];

                    if (file && file.type.startsWith('image/')) {
                        // Show preview
                        imagePreview.src = URL.createObjectURL(file);
                        uploadContent.classList.add('hidden');
                        imagePreview.classList.remove('hidden');
                        removeBtn.classList.remove('hidden');
                    } else {
                        // Invalid file or canceled
                        resetImageState();
                    }
                });
            }

            if (removeBtn) {
                // Handle remove button click
                removeBtn.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent accidental form submission
                    resetImageState();
                });
            }

            // Helper function to reset the new logo upload UI
            function resetImageState() {
                imageInput.value = ''; // Clear the actual file input
                imagePreview.src = '';
                
                // Toggle visibility classes back to default
                uploadContent.classList.remove('hidden');
                imagePreview.classList.add('hidden');
                removeBtn.classList.add('hidden');
            }


            // ==========================================
            // 2. AUTO-SLUG GENERATOR LOGIC
            // ==========================================
            const nameInput = document.getElementById('name');
            const slugInput = document.getElementById('slug');

            if (nameInput && slugInput) {
                nameInput.addEventListener('input', function() {
                    const name = this.value;
                    
                    // Generate the slug
                    const slug = name.toLowerCase()
                        .trim()                               // Remove whitespace from both ends
                        .replace(/[^a-z0-9 -]/g, '')          // Remove invalid characters
                        .replace(/\s+/g, '-')                 // Replace spaces with hyphens
                        .replace(/-+/g, '-');                 // Replace multiple hyphens with a single one
                        
                    slugInput.value = slug;
                });
            }

        });
    </script>
</body>
</html>