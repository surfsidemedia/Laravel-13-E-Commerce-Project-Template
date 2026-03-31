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
                        <h1 class="text-2xl font-bold text-gray-800">Brands</h1>
                        <p class="text-sm text-gray-500">Manage product brands and partners</p>
                    </div>
                    <a href="brand-add.php" class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-plus"></i> Add New Brand
                    </a>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Search brand...">
                            </div>

                            <select class="w-full md:w-40 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left whitespace-nowrap">
                            <thead class="bg-gray-50 text-gray-500 text-xs uppercase font-semibold">
                                <tr>
                                    <th class="px-6 py-4">ID</th>
                                    <th class="px-6 py-4">Logo</th>
                                    <th class="px-6 py-4">Brand Name</th>
                                    <th class="px-6 py-4">Slug</th>
                                    <th class="px-6 py-4">Products</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#101</td>
                                    <td class="px-6 py-4">
                                        <div class="w-12 h-12 bg-gray-50 rounded-lg flex items-center justify-center border">
                                            <img src="uploads/brands/1.png" class="max-w-[30px] max-h-[30px] object-contain" alt="Brand Logo" onerror="this.src='https://placehold.co/40x40?text=B'">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-semibold text-gray-800">Samsung</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">samsung</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs font-semibold">120 Items</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-green-100 text-green-700 px-2.5 py-1 rounded-full text-xs font-semibold">Active</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteBrand(this, 'Samsung', 101)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td colspan="7" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center text-gray-500">
                                        <i class="fa-solid fa-boxes-stacked text-4xl mb-3 text-gray-300"></i>
                                        <h3 class="text-lg font-medium text-gray-900">Brands not available</h3>
                                        <p class="text-sm mt-1">You haven't added any brands to your store yet.</p>
                                        <a href="brand-add.php" class="mt-4 text-primary hover:underline text-sm font-medium">
                                            Add your first brand
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-4</span> of <span class="font-bold text-gray-700">24</span> brands</span>

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

    <div id="deleteModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity backdrop-blur-sm"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-xl bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <i class="fa-solid fa-triangle-exclamation text-red-600"></i>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Delete Brand</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Are you sure you want to delete <strong id="delete-brand-name" class="text-gray-800">this brand</strong>? All of its data will be permanently removed. This action cannot be undone.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="confirmDeleteBtn" class="inline-flex w-full justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto transition">Delete</button>
                        <button type="button" id="cancelDeleteBtn" class="mt-3 inline-flex w-full justify-center rounded-lg bg-white px-4 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto transition">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'includes/script.php'; ?>
    <script>
        // Modal Elements
        const deleteModal = document.getElementById('deleteModal');
        const confirmBtn = document.getElementById('confirmDeleteBtn');
        const cancelBtn = document.getElementById('cancelDeleteBtn');
        const brandNameSpan = document.getElementById('delete-brand-name');

        // Variables to hold the state of what we are deleting
        let rowToDelete = null;
        let brandIdToDelete = null;

        // Function triggered when the trash icon is clicked
        function deleteBrand(buttonElement, brandName, brandId) {
            // Save the row so we can remove it later
            rowToDelete = buttonElement.closest('tr');
            brandIdToDelete = brandId;

            // Update the modal text dynamically
            brandNameSpan.textContent = brandName || "this brand";

            // Show the modal by removing the 'hidden' class
            deleteModal.classList.remove('hidden');
        }

        // Close Modal Function
        function closeModal() {
            deleteModal.classList.add('hidden');
            rowToDelete = null;
            brandIdToDelete = null;
        }

        // Handle Cancel Button
        cancelBtn.addEventListener('click', closeModal);

        // Handle clicking outside the modal to close it
        deleteModal.addEventListener('click', function(event) {
            // If the user clicks on the backdrop (not the panel), close it
            if (event.target === this || event.target.classList.contains('bg-opacity-75')) {
                closeModal();
            }
        });

        // Handle Confirm Delete Button
        confirmBtn.addEventListener('click', function() {
            if (rowToDelete) {
                // For the UI demo, we will just remove the row from the table smoothly
                rowToDelete.style.transition = "all 0.3s ease";
                rowToDelete.style.opacity = "0";

                setTimeout(() => {
                    rowToDelete.remove();
                    closeModal(); // Hide modal after deleting
                }, 300);
            }
        });
    </script>

</body>

</html>