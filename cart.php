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
            <h2 class="text-4xl font-bold mb-2">Cart</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">Cart</li>
            </ul>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto px-4">
            
            <div id="empty-cart" class="text-center py-10 hidden">
                <h2 class="text-2xl font-bold mb-4">There are no more items in your cart</h2>
                <img src="assets/images/cart.png" alt="Empty Cart" class="mx-auto mb-6 max-w-xs">
                <p class="text-gray-500 mb-6">No item found in your cart</p>
                <a href="shop.php" class="inline-block bg-primary text-white px-6 py-2 rounded hover:bg-blue-600 transition">Continue Browsing</a>
            </div>
    
            <div id="cart-content" class="cart-wrapper">
                <div class="overflow-x-auto mb-8">
                    <table class="w-full cart-table">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="py-4 px-4 text-left font-bold text-gray-700">Image</th>
                                <th class="py-4 px-4 text-left font-bold text-gray-700">Product Information</th>
                                <th class="py-4 px-4 text-left font-bold text-gray-700">Quantity</th>
                                <th class="py-4 px-4 text-left font-bold text-gray-700">Total Price</th>
                                <th class="py-4 px-4 text-left font-bold text-gray-700">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="py-4 px-4 product-thumb" data-label="Image">
                                    <a href="details.php"><img src="assets/images/product/product-03.jpg" class="w-20 h-20 object-cover rounded" alt="Product"></a>
                                </td>
                                <td class="py-4 px-4" data-label="Product">
                                    <h6 class="font-bold text-gray-800"><a href="details.php" class="hover:text-primary">Pendant Chandelier Light</a></h6>
                                    <div class="text-sm mt-1">
                                        <span class="line-through text-gray-400 mr-2">$35.90</span>
                                        <span class="text-primary font-bold">$28.72</span>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        <p>Size: S</p>
                                        <p>Color: White</p>
                                    </div>
                                </td>
                                <td class="py-4 px-4" data-label="Quantity">
                                    <div class="flex border rounded w-max">
                                        <button class="px-3 py-1 hover:bg-gray-100" onclick="updateCartQty(this, -1)">-</button>
                                        <input type="number" value="1" class="w-12 text-center focus:outline-none" readonly>
                                        <button class="px-3 py-1 hover:bg-gray-100" onclick="updateCartQty(this, 1)">+</button>
                                    </div>
                                </td>
                                <td class="py-4 px-4 font-bold text-primary" data-label="Total">$28.72</td>
                                <td class="py-4 px-4" data-label="Action">
                                    <button class="text-gray-400 hover:text-red-500 transition"><i class="fa-solid fa-trash-can text-xl"></i></button>
                                </td>
                            </tr>
    
                            <tr>
                                <td class="py-4 px-4 product-thumb" data-label="Image">
                                    <a href="details.php"><img src="assets/images/product/product-04.jpg" class="w-20 h-20 object-cover rounded" alt="Product"></a>
                                </td>
                                <td class="py-4 px-4" data-label="Product">
                                    <h6 class="font-bold text-gray-800"><a href="details.php" class="hover:text-primary">High quality vase bottle</a></h6>
                                    <div class="text-sm mt-1">
                                        <span class="text-primary font-bold">$35.72</span>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        <p>Size: S</p>
                                        <p>Color: White</p>
                                    </div>
                                </td>
                                <td class="py-4 px-4" data-label="Quantity">
                                    <div class="flex border rounded w-max">
                                        <button class="px-3 py-1 hover:bg-gray-100" onclick="updateCartQty(this, -1)">-</button>
                                        <input type="number" value="1" class="w-12 text-center focus:outline-none" readonly>
                                        <button class="px-3 py-1 hover:bg-gray-100" onclick="updateCartQty(this, 1)">+</button>
                                    </div>
                                </td>
                                <td class="py-4 px-4 font-bold text-primary" data-label="Total">$35.72</td>
                                <td class="py-4 px-4" data-label="Action">
                                    <button class="text-gray-400 hover:text-red-500 transition"><i class="fa-solid fa-trash-can text-xl"></i></button>
                                </td>
                            </tr>
    
                            <tr>
                                <td class="py-4 px-4 product-thumb" data-label="Image">
                                    <a href="details.php"><img src="assets/images/product/product-08.jpg" class="w-20 h-20 object-cover rounded" alt="Product"></a>
                                </td>
                                <td class="py-4 px-4" data-label="Product">
                                    <h6 class="font-bold text-gray-800"><a href="details.php" class="hover:text-primary">Reece Seater Sofa</a></h6>
                                    <div class="text-sm mt-1">
                                        <span class="text-primary font-bold">$28.72</span>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1">
                                        <p>Size: S</p>
                                        <p>Color: White</p>
                                    </div>
                                </td>
                                <td class="py-4 px-4" data-label="Quantity">
                                    <div class="flex border rounded w-max">
                                        <button class="px-3 py-1 hover:bg-gray-100" onclick="updateCartQty(this, -1)">-</button>
                                        <input type="number" value="1" class="w-12 text-center focus:outline-none" readonly>
                                        <button class="px-3 py-1 hover:bg-gray-100" onclick="updateCartQty(this, 1)">+</button>
                                    </div>
                                </td>
                                <td class="py-4 px-4 font-bold text-primary" data-label="Total">$28.72</td>
                                <td class="py-4 px-4" data-label="Action">
                                    <button class="text-gray-400 hover:text-red-500 transition"><i class="fa-solid fa-trash-can text-xl"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <div class="flex flex-col sm:flex-row justify-between items-center mb-12 gap-4">
                    <a href="shop.php" class="bg-sky-800 text-white px-6 py-3 rounded hover:bg-primary transition w-full sm:w-auto text-center">Continue Shopping</a>
                    <div class="flex gap-4 w-full sm:w-auto">
                        <a href="#" class="border border-gray-800 text-gray-800 px-6 py-3 rounded hover:bg-sky-800 hover:text-white transition w-full sm:w-auto text-center">Clear Cart</a>
                        <a href="#" class="border border-gray-800 text-gray-800 px-6 py-3 rounded hover:bg-sky-800 hover:text-white transition w-full sm:w-auto text-center">Update Cart</a>
                    </div>
                </div>
    
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-6 rounded border">
                        <h4 class="font-bold text-lg mb-2">Calculate Shipping</h4>
                        <p class="text-sm text-gray-500 mb-4">Estimate your shipping fee *</p>
                        <form class="space-y-4">
                            <select class="w-full border p-3 rounded bg-white focus:outline-none focus:border-primary text-gray-500">
                                <option>Select a country...</option>
                                <option>Bangladesh</option>
                                <option>Canada</option>
                                <option>USA</option>
                                <option>UK</option>
                            </select>
                            <select class="w-full border p-3 rounded bg-white focus:outline-none focus:border-primary text-gray-500">
                                <option>Select a state/region...</option>
                                <option>Dhaka</option>
                                <option>New York</option>
                                <option>London</option>
                            </select>
                            <input type="text" placeholder="Postcode/Zip" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                            <button class="bg-sky-800 text-white px-6 py-3 rounded hover:bg-primary transition w-full">Update Totals</button>
                        </form>
                    </div>
    
                    <div class="bg-gray-50 p-6 rounded border">
                        <h4 class="font-bold text-lg mb-2">Coupon Code</h4>
                        <p class="text-sm text-gray-500 mb-4">Enter your coupon code if you have one.</p>
                        <form class="space-y-4">
                            <input type="text" placeholder="Enter coupon code..." class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                            <button class="bg-sky-800 text-white px-6 py-3 rounded hover:bg-primary transition w-full">Apply Coupon</button>
                        </form>
                    </div>
    
                    <div class="bg-gray-50 p-6 rounded border">
                        <h4 class="font-bold text-lg mb-4">Cart Totals</h4>
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-medium">Subtotal</span>
                                <span class="font-bold">£600.00</span>
                            </div>
                            <div class="flex justify-between items-start border-b pb-2">
                                <span class="font-medium pt-1">Shipping</span>
                                <div class="text-right text-sm space-y-1">
                                    <label class="flex items-center justify-end cursor-pointer">
                                        <input type="radio" name="shipping" checked class="mr-2"> Flat Rate
                                    </label>
                                    <label class="flex items-center justify-end cursor-pointer">
                                        <input type="radio" name="shipping" class="mr-2"> Free Shipping
                                    </label>
                                    <label class="flex items-center justify-end cursor-pointer">
                                        <input type="radio" name="shipping" class="mr-2"> Local Pickup
                                    </label>
                                </div>
                            </div>
                            <div class="flex justify-between pt-2">
                                <span class="font-bold text-lg">Total</span>
                                <span class="font-bold text-lg text-primary">£600.00</span>
                            </div>
                        </div>
                        <a href="checkout.php" class="block bg-sky-800 text-white text-center px-6 py-3 rounded hover:bg-primary transition w-full">Proceed To Checkout</a>
                    </div>
                </div>
    
            </div>
        </div>
    </section>

    <!-- Main Content End -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/script.php'; ?>

</body>
</html>