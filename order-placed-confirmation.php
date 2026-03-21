<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body class="font-sans text-gray-600 antialiased">

    <?php include 'includes/header.php'; ?>

    
    <!-- Main Content Start -->

    <div class="relative bg-sky-700 text-white h-64 flex items-center justify-center bg-cover bg-center" style="background-image: url('assets/images/page-banner.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative z-10 text-center">
            <h2 class="text-4xl font-bold mb-2">Order Confirmed</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">Success</li>
            </ul>
        </div>
    </div>
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-gray-50 p-8 md:p-12 rounded border text-center">
                
                <div class="mb-6 inline-flex items-center justify-center w-20 h-20 bg-green-100 text-green-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>

                <h2 class="text-3xl font-bold text-gray-800 mb-2">Thank You for Your Order!</h2>
                <p class="text-lg mb-8">Your order has been placed successfully. Your order ID is <span class="font-bold text-primary">#ORD-78452</span>.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left mb-10">
                    <div class="bg-white p-6 rounded border">
                        <h4 class="font-bold border-b pb-2 mb-4">Order Details</h4>
                        <ul class="space-y-2 text-sm">
                            <li class="flex justify-between"><span>Date:</span> <span class="font-medium">March 21, 2026</span></li>
                            <li class="flex justify-between"><span>Total:</span> <span class="font-medium text-primary">$617.10</span></li>
                            <li class="flex justify-between"><span>Payment Mode:</span> <span class="font-medium">Cash on Delivery</span></li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded border">
                        <h4 class="font-bold border-b pb-2 mb-4">Shipping To</h4>
                        <address class="text-sm not-italic leading-relaxed">
                            <span class="font-bold block">John Doe</span>
                            123 Street Name, Area Colony,<br>
                            City Name, State - 000000<br>
                            Phone: +1 234 567 890
                        </address>
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    <a href="index.php" class="bg-primary text-white px-8 py-3 rounded font-bold hover:bg-blue-600 transition shadow-lg">
                        Continue Shopping
                    </a>
                    <a href="#" class="bg-white border border-gray-300 px-8 py-3 rounded font-bold hover:bg-gray-100 transition">
                        View Order History
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content End -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/script.php'; ?>

</body>
</html>