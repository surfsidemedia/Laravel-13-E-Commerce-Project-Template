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
        <h2 class="text-4xl font-bold mb-2">Wishlist</h2>
        <ul class="flex justify-center space-x-2 text-sm">
            <li><a href="index.php" class="hover:text-primary">Home</a></li>
            <li>/</li>
            <li class="text-primary">Wishlist</li>
        </ul>
    </div>
</div>

<section class="py-16">
    <div class="container mx-auto px-4">
        
        <div id="empty-wishlist" class="text-center py-10 hidden">
            <h2 class="text-2xl font-bold mb-4">There are no more items in your wishlist</h2>
            <img src="assets/images/wishlist.png" alt="Empty Wishlist" class="mx-auto mb-6 max-w-xs">
            <p class="text-gray-500 mb-6">No item found in your wishlist</p>
            <a href="shop.php" class="inline-block bg-primary text-white px-6 py-2 rounded hover:bg-blue-600 transition">Wishlist Now</a>
        </div>

        <div id="wishlist-content" class="overflow-x-auto">
            <table class="w-full wishlist-table">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-4 px-4 text-left font-bold text-gray-700">Image</th>
                        <th class="py-4 px-4 text-left font-bold text-gray-700">Product Information</th>
                        <th class="py-4 px-4 text-left font-bold text-gray-700">Quantity</th>
                        <th class="py-4 px-4 text-left font-bold text-gray-700">Total Price</th>
                        <th class="py-4 px-4 text-left font-bold text-gray-700">Add to Cart</th>
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
                                <button class="px-3 py-1 hover:bg-gray-100" onclick="updateQty(this, -1)">-</button>
                                <input type="number" value="1" class="w-12 text-center focus:outline-none" readonly>
                                <button class="px-3 py-1 hover:bg-gray-100" onclick="updateQty(this, 1)">+</button>
                            </div>
                        </td>
                        <td class="py-4 px-4 font-bold text-primary" data-label="Total">$28.72</td>
                        <td class="py-4 px-4" data-label="Add to Cart">
                            <button class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-primary transition text-sm">Add to Cart</button>
                        </td>
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
                                <button class="px-3 py-1 hover:bg-gray-100" onclick="updateQty(this, -1)">-</button>
                                <input type="number" value="1" class="w-12 text-center focus:outline-none" readonly>
                                <button class="px-3 py-1 hover:bg-gray-100" onclick="updateQty(this, 1)">+</button>
                            </div>
                        </td>
                        <td class="py-4 px-4 font-bold text-primary" data-label="Total">$28.72</td>
                        <td class="py-4 px-4" data-label="Add to Cart">
                            <button class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-primary transition text-sm">Add to Cart</button>
                        </td>
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
                                <button class="px-3 py-1 hover:bg-gray-100" onclick="updateQty(this, -1)">-</button>
                                <input type="number" value="1" class="w-12 text-center focus:outline-none" readonly>
                                <button class="px-3 py-1 hover:bg-gray-100" onclick="updateQty(this, 1)">+</button>
                            </div>
                        </td>
                        <td class="py-4 px-4 font-bold text-primary" data-label="Total">$28.72</td>
                        <td class="py-4 px-4" data-label="Add to Cart">
                            <button class="bg-sky-800 text-white px-4 py-2 rounded hover:bg-primary transition text-sm">Add to Cart</button>
                        </td>
                        <td class="py-4 px-4" data-label="Action">
                            <button class="text-gray-400 hover:text-red-500 transition"><i class="fa-solid fa-trash-can text-xl"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

    <!-- Main Content End -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/script.php'; ?>

</body>
</html>