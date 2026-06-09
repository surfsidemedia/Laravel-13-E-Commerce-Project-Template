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

            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">

                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Coupons</h1>
                        <p class="text-sm text-gray-500">Manage discount codes and promotional offers</p>
                    </div>
                    <a href="coupon-add.php" class="bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-plus"></i> Add New Coupon
                    </a>
                </div>

                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6">
                    <div class="flex flex-col md:flex-row gap-4 justify-between">
                        <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                            <div class="relative w-full md:w-64">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fa-solid fa-search text-gray-400"></i>
                                </span>
                                <input type="text" class="w-full pl-10 pr-4 py-2 border rounded-lg text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary" placeholder="Search coupon code...">
                            </div>

                            <select class="w-full md:w-40 border px-3 py-2 rounded-lg text-sm focus:outline-none focus:border-primary bg-white text-gray-600">
                                <option value="">All Types</option>
                                <option value="fixed">Fixed</option>
                                <option value="percent">Percent</option>
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
                                    <th class="px-6 py-4">Code</th>
                                    <th class="px-6 py-4">Type</th>
                                    <th class="px-6 py-4">Value</th>
                                    <th class="px-6 py-4">Min. Cart Value</th>
                                    <th class="px-6 py-4">Expiry Date</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#1</td>
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-gray-800 tracking-wider">SUMMER20</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-purple-50 text-purple-700 px-2 py-1 rounded text-xs font-semibold uppercase">Percent</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">20%</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">$50.00</td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-600"><i class="fa-regular fa-calendar mr-1"></i> 2026-12-31</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="coupon-edit.php?id=1" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteCoupon(this, 'SUMMER20', 1)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 text-sm text-gray-500">#2</td>
                                    <td class="px-6 py-4">
                                        <span class="font-bold text-gray-800 tracking-wider">FLAT50</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="bg-blue-50 text-blue-700 px-2 py-1 rounded text-xs font-semibold uppercase">Fixed</span>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-800">$50.00</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">$200.00</td>
                                    <td class="px-6 py-4">
                                        <span class="text-sm text-gray-600"><i class="fa-regular fa-calendar mr-1"></i> 2026-08-15</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="coupon-edit.php?id=2" class="w-8 h-8 rounded-full hover:bg-gray-100 text-blue-500 transition flex items-center justify-center" title="Edit">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <button class="w-8 h-8 rounded-full hover:bg-gray-100 text-red-500 transition flex items-center justify-center" onclick="deleteCoupon(this, 'FLAT50', 2)" title="Delete">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-2</span> of <span class="font-bold text-gray-700">2</span> coupons</span>

                        <div class="flex gap-2">
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 disabled:opacity-50 text-sm" disabled>Previous</button>
                            <button class="px-3 py-1 border rounded bg-primary text-white text-sm">1</button>
                            <button class="px-3 py-1 border rounded hover:bg-gray-50 text-gray-600 disabled:opacity-50 text-sm" disabled>Next</button>
                        </div>
                    </div>
                </div>

            </main>
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
                                <h3 class="text-lg font-semibold leading-6 text-gray-900" id="modal-title">Delete Coupon</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Are you sure you want to delete the coupon <strong id="delete-coupon-code" class="text-gray-800"></strong>? This action cannot be undone.</p>
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
        const deleteModal = document.getElementById('deleteModal');
        const confirmBtn = document.getElementById('confirmDeleteBtn');
        const cancelBtn = document.getElementById('cancelDeleteBtn');
        const couponCodeSpan = document.getElementById('delete-coupon-code');

        let rowToDelete = null;
        let couponIdToDelete = null;

        function deleteCoupon(buttonElement, couponCode, couponId) {
            rowToDelete = buttonElement.closest('tr');
            couponIdToDelete = couponId;
            couponCodeSpan.textContent = couponCode;
            deleteModal.classList.remove('hidden');
        }

        function closeModal() {
            deleteModal.classList.add('hidden');
            rowToDelete = null;
            couponIdToDelete = null;
        }

        cancelBtn.addEventListener('click', closeModal);

        deleteModal.addEventListener('click', function(event) {
            if (event.target === this || event.target.classList.contains('bg-opacity-75')) {
                closeModal();
            }
        });

        confirmBtn.addEventListener('click', function() {
            if (rowToDelete) {
                rowToDelete.style.transition = "all 0.3s ease";
                rowToDelete.style.opacity = "0";
                setTimeout(() => {
                    rowToDelete.remove();
                    closeModal();
                }, 300);
            }
        });
    </script>
</body>
</html>