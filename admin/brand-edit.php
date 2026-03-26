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
                                    <input type="text" id="name" value="Samsung" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Brand Slug</label>
                                    <input type="text" id="slug" value="samsung" class="w-full border px-4 py-2 rounded-lg bg-gray-50 outline-none">
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
                                    
                                    <div class="relative w-full h-40">
                                        <label for="brand-image" class="relative flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition overflow-hidden">
                                            
                                            <div id="upload-content" class="text-center z-10">
                                                <i class="fa-solid fa-image text-3xl text-gray-300 mb-2"></i>
                                                <p class="text-sm text-gray-500">Upload new logo</p>
                                            </div>

                                            <img id="image-preview" class="hidden absolute inset-0 w-full h-full object-contain p-2 z-20 bg-white" src="" alt="New Logo Preview">

                                            <input type="file" id="brand-image" name="images" class="hidden" accept="image/png, image/jpeg, image/jpg, image/webp" />
                                        </label>

                                        <button type="button" id="remove-logo-btn" class="hidden absolute top-2 right-2 z-30 bg-white text-red-500 hover:text-white hover:bg-red-500 rounded-full w-8 h-8 flex items-center justify-center shadow-md border border-gray-200 transition-colors focus:outline-none" title="Remove new image">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center gap-2">
                                <input type="checkbox" id="status" class="w-4 h-4 text-primary rounded border-gray-300 focus:ring-primary">
                                <label for="status" class="text-sm text-gray-700">Set as Active Brand</label>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // ==========================================
            // 1. BRAND LOGO PREVIEW & REMOVE LOGIC
            // ==========================================
            const logoInput = document.getElementById('brand-image');
            const uploadContent = document.getElementById('upload-content');
            const imagePreview = document.getElementById('image-preview');
            const removeBtn = document.getElementById('remove-logo-btn');

            if (logoInput) {
                // Handle file selection
                logoInput.addEventListener('change', function(event) {
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
                logoInput.value = ''; // Clear the actual file input
                imagePreview.src = '';
                
                // Toggle visibility classes back to default
                uploadContent.classList.remove('hidden');
                imagePreview.classList.add('hidden');
                removeBtn.classList.add('hidden');
            }


            // ==========================================
            // 2. AUTO-SLUG GENERATOR LOGIC
            // ==========================================
            const brandNameInput = document.getElementById('name');
            const brandSlugInput = document.getElementById('slug');

            if (brandNameInput && brandSlugInput) {
                brandNameInput.addEventListener('input', function() {
                    const name = this.value;
                    
                    // Generate the slug
                    const slug = name.toLowerCase()
                        .trim()                               // Remove whitespace from both ends
                        .replace(/[^a-z0-9 -]/g, '')          // Remove invalid characters
                        .replace(/\s+/g, '-')                 // Replace spaces with hyphens
                        .replace(/-+/g, '-');                 // Replace multiple hyphens with a single one
                        
                    brandSlugInput.value = slug;
                });
            }

        });
    </script>
</body>
</html>