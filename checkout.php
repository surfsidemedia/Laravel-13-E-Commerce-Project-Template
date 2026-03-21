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
            <h2 class="text-4xl font-bold mb-2">Checkout</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">Checkout</li>
            </ul>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <form action="#">
                <div class="flex flex-col lg:flex-row gap-12">
                    
                    <div class="w-full lg:w-7/12">
                        <div class="bg-gray-50 p-8 rounded border">
                            <h4 class="text-xl font-bold mb-6 border-b pb-4">Shipping Details</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block mb-2 text-sm font-medium">Full Name *</label>
                                    <input type="text" name="name" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium">Phone Number *</label>
                                    <input type="text" name="phone" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium">Pincode *</label>
                                    <input type="text" name="zip" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium">State *</label>
                                    <input type="text" name="state" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div>
                                    <label class="block mb-2 text-sm font-medium">Town / City *</label>
                                    <input type="text" name="city" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block mb-2 text-sm font-medium">House no, Building Name *</label>
                                    <input type="text" name="address" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block mb-2 text-sm font-medium">Road Name, Area, Colony *</label>
                                    <input type="text" name="locality" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block mb-2 text-sm font-medium">Landmark *</label>
                                    <input type="text" name="landmark" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-5/12">
                        <div class="bg-gray-50 p-8 rounded border">
                            <h4 class="text-xl font-bold mb-6 border-b pb-4">Your Order</h4>

                            <div class="bg-white rounded border mb-6 overflow-hidden">
                                <table class="w-full text-left">
                                    <thead>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="p-4 font-bold">Product</th>
                                            <th class="p-4 font-bold text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <tr>
                                            <td class="p-4 flex items-center">
                                                <img src="assets/images/product/product-01.jpg" class="w-12 h-12 object-cover rounded mr-3" alt="Thumb">
                                                <span>Fourth Product × 1</span>
                                            </td>
                                            <td class="p-4 text-right">$210.00</td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 flex items-center">
                                                <img src="assets/images/product/product-02.jpg" class="w-12 h-12 object-cover rounded mr-3" alt="Thumb">
                                                <span>Second Product × 1</span>
                                            </td>
                                            <td class="p-4 text-right">$300.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="bg-gray-50">
                                        <tr>
                                            <td class="p-4 font-bold">Subtotal</td>
                                            <td class="p-4 text-right">$510.00</td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 font-bold">Shipping</td>
                                            <td class="p-4 text-right">Free</td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 font-bold">VAT</td>
                                            <td class="p-4 text-right">$107.10</td>
                                        </tr>
                                        <tr class="text-primary text-lg">
                                            <td class="p-4 font-bold">Total</td>
                                            <td class="p-4 text-right font-bold">$617.10</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="space-y-4 mb-6">
                                <div class="bg-white border rounded p-4">
                                    <div class="flex items-center mb-2">
                                        <input type="radio" name="mode" id="card" value="card" class="hidden peer">
                                        <label for="card" class="flex items-center cursor-pointer text-gray-800 font-bold hover:text-primary">
                                            <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-400 bg-white"></span>
                                            Debit or Credit Card
                                        </label>
                                    </div>
                                    <p class="text-sm text-gray-500 pl-6 hidden peer-checked:block">
                                        Make payment using your credit or debit card directly on our secure server.
                                    </p>
                                </div>

                                <div class="bg-white border rounded p-4">
                                    <div class="flex items-center mb-2">
                                        <input type="radio" name="mode" id="paypal" value="paypal" class="hidden peer">
                                        <label for="paypal" class="flex items-center cursor-pointer text-gray-800 font-bold hover:text-primary">
                                            <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-400 bg-white"></span>
                                            Paypal
                                        </label>
                                    </div>
                                    <p class="text-sm text-gray-500 pl-6 hidden peer-checked:block">
                                        Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                    </p>
                                </div>

                                <div class="bg-white border rounded p-4">
                                    <div class="flex items-center mb-2">
                                        <input type="radio" name="mode" id="cod" value="cod" checked class="hidden peer">
                                        <label for="cod" class="flex items-center cursor-pointer text-gray-800 font-bold hover:text-primary">
                                            <span class="w-4 h-4 inline-block mr-2 rounded-full border border-gray-400 bg-white"></span>
                                            Cash on Delivery
                                        </label>
                                    </div>
                                    <p class="text-sm text-gray-500 pl-6 hidden peer-checked:block transition-all">
                                        Pay with cash upon delivery.
                                    </p>
                                </div>
                            </div>

                            <!-- <button type="submit" class="w-full bg-primary text-white font-bold py-4 rounded hover:bg-blue-600 transition shadow-lg">Place Order</button> -->
                             <a href="order-placed-confirmation.php" class="w-full inline-block text-center bg-primary text-white font-bold py-4 rounded hover:bg-blue-600 transition shadow-lg">
                                Place Order
                             </a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <!-- Main Content End -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/script.php'; ?>

</body>
</html>