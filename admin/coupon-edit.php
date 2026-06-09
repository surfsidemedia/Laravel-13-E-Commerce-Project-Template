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

            <main class="flex-1 overflow-y-auto p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Edit Coupon</h1>
                    <div class="flex gap-2">
                        <a href="coupons.php" class="border border-gray-300 bg-white hover:bg-gray-50 text-gray-700 px-5 py-2.5 rounded-lg text-sm font-medium transition">
                            Cancel
                        </a>
                        <button class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-sm">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </div>
                </div>
                
                <div class="max-w-3xl mx-auto">
                    <form action="#" method="POST" class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 space-y-6">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Coupon Code *</label>
                                <input type="text" id="code" name="code" value="SUMMER20" required class="w-full border px-4 py-2 rounded-lg outline-none focus:ring-1 focus:ring-primary uppercase">
                                <p class="text-xs text-gray-500 mt-1">Must be unique.</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Discount Type *</label>
                                <select id="type" name="type" required class="w-full border px-4 py-2 rounded-lg bg-white outline-none focus:ring-1 focus:ring-primary">
                                    <option value="percent" selected>Percentage (%)</option>
                                    <option value="fixed">Fixed Amount</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Discount Value *</label>
                                <input type="number" step="0.01" id="value" name="value" value="20.00" required class="w-full border px-4 py-2 rounded-lg outline-none focus:ring-1 focus:ring-primary">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Minimum Cart Value *</label>
                                <input type="number" step="0.01" id="cart_value" name="cart_value" value="50.00" required class="w-full border px-4 py-2 rounded-lg outline-none focus:ring-1 focus:ring-primary">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date *</label>
                                <input type="date" id="expiry_date" name="expiry_date" value="2026-12-31" required class="w-full border px-4 py-2 rounded-lg outline-none focus:ring-1 focus:ring-primary">
                            </div>
                        </div>

                        <div class="flex justify-end gap-3 pt-4 border-t">
                            <a href="coupons.php" class="px-6 py-2 border rounded-lg hover:bg-gray-50 transition text-sm">Cancel</a>
                            <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition text-sm font-medium shadow-sm">Save Changes</button>
                        </div>
                    </form>
                </div>
            </main>
            </div>
    </div>

    <?php include 'includes/script.php'; ?>
    <script>
        // Force uppercase on code input
        document.getElementById('code').addEventListener('input', function() {
            this.value = this.value.toUpperCase().replace(/\s+/g, '');
        });
    </script>
</body>
</html>