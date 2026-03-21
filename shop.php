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
            <h2 class="text-4xl font-bold mb-2">Shop</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">Shop</li>
            </ul>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <aside class="w-full lg:w-1/4 order-2 lg:order-1 space-y-8">
                
                <div class="bg-gray-50 p-6 rounded-lg border">
                    <form class="relative">
                        <input type="text" placeholder="Search product..." class="w-full border p-3 rounded focus:outline-none focus:border-primary pr-10">
                        <button class="absolute right-3 top-3 text-gray-400 hover:text-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg border">
                    <h4 class="font-bold text-lg mb-4">Categories</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <label class="flex items-center cursor-pointer hover:text-primary">
                                <input type="checkbox" class="custom-checkbox hidden">
                                <div class="w-4 h-4 border border-gray-300 rounded mr-3 flex items-center justify-center bg-white transition"></div>
                                Office Chair
                            </label>
                        </li>
                        <li class="flex items-center">
                            <label class="flex items-center cursor-pointer hover:text-primary">
                                <input type="checkbox" class="custom-checkbox hidden">
                                <div class="w-4 h-4 border border-gray-300 rounded mr-3 flex items-center justify-center bg-white transition"></div>
                                Dining Chair
                            </label>
                        </li>
                        <li class="flex items-center">
                            <label class="flex items-center cursor-pointer hover:text-primary">
                                <input type="checkbox" class="custom-checkbox hidden">
                                <div class="w-4 h-4 border border-gray-300 rounded mr-3 flex items-center justify-center bg-white transition"></div>
                                Sofa Set
                            </label>
                        </li>
                        <li class="flex items-center">
                            <label class="flex items-center cursor-pointer hover:text-primary">
                                <input type="checkbox" class="custom-checkbox hidden">
                                <div class="w-4 h-4 border border-gray-300 rounded mr-3 flex items-center justify-center bg-white transition"></div>
                                Lighting
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg border">
                    <h4 class="font-bold text-lg mb-4">Filter By Price</h4>
                    <div class="relative pt-6 pb-2">
                        <div class="relative w-full h-1 bg-gray-300 rounded">
                            <div class="absolute h-1 bg-primary rounded left-0 right-0" id="range-track" style="left: 10%; right: 30%;"></div>
                        </div>
                        <input type="range" min="0" max="500" value="50" class="absolute w-full h-1 bg-transparent appearance-none top-6 left-0 pointer-events-none z-20" id="range-min">
                        <input type="range" min="0" max="500" value="350" class="absolute w-full h-1 bg-transparent appearance-none top-6 left-0 pointer-events-none z-20" id="range-max">
                        
                        <div class="flex justify-between mt-4 text-sm font-medium text-gray-600">
                            <span>$<span id="price-min-display">50</span></span>
                            <span>$<span id="price-max-display">350</span></span>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg border">
                    <h4 class="font-bold text-lg mb-4">Filter By Color</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <input type="checkbox" id="c1" class="hidden peer">
                            <label for="c1" class="flex items-center cursor-pointer hover:text-primary peer-checked:text-primary group">
                                <span class="w-4 h-4 rounded-full bg-blue-500 mr-3 border border-gray-200 group-hover:shadow-md"></span>
                                Blue
                            </label>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" id="c2" class="hidden peer">
                            <label for="c2" class="flex items-center cursor-pointer hover:text-primary peer-checked:text-primary group">
                                <span class="w-4 h-4 rounded-full bg-green-500 mr-3 border border-gray-200 group-hover:shadow-md"></span>
                                Green
                            </label>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" id="c3" class="hidden peer">
                            <label for="c3" class="flex items-center cursor-pointer hover:text-primary peer-checked:text-primary group">
                                <span class="w-4 h-4 rounded-full bg-gray-500 mr-3 border border-gray-200 group-hover:shadow-md"></span>
                                Gray
                            </label>
                        </li>
                        <li class="flex items-center">
                            <input type="checkbox" id="c4" class="hidden peer">
                            <label for="c4" class="flex items-center cursor-pointer hover:text-primary peer-checked:text-primary group">
                                <span class="w-4 h-4 rounded-full bg-black mr-3 border border-gray-200 group-hover:shadow-md"></span>
                                Black
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg border">
                    <h4 class="font-bold text-lg mb-4">Tags</h4>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="px-3 py-1 bg-white border rounded text-sm hover:bg-primary hover:text-white transition">Clothing</a>
                        <a href="#" class="px-3 py-1 bg-white border rounded text-sm hover:bg-primary hover:text-white transition">Furniture</a>
                        <a href="#" class="px-3 py-1 bg-white border rounded text-sm hover:bg-primary hover:text-white transition">Lights</a>
                        <a href="#" class="px-3 py-1 bg-white border rounded text-sm hover:bg-primary hover:text-white transition">Modern</a>
                    </div>
                </div>

            </aside>

            <div class="w-full lg:w-3/4 order-1 lg:order-2">
                
                <div class="flex flex-col sm:flex-row justify-between items-center bg-white border p-4 rounded mb-8 shadow-sm">
                    <p class="text-sm mb-4 sm:mb-0">
                        Showing <span class="font-bold text-primary">12</span> of <span class="font-bold">30</span> Results
                    </p>
                    
                    <div class="flex items-center space-x-6">
                        <div class="flex space-x-2">
                            <button id="btn-grid" class="w-8 h-8 flex items-center justify-center rounded bg-primary text-white transition">
                                <i class="fa fa-th"></i>
                            </button>
                            <button id="btn-list" class="w-8 h-8 flex items-center justify-center rounded bg-gray-200 hover:bg-primary hover:text-white transition">
                                <i class="fa fa-list"></i>
                            </button>
                        </div>

                        <div class="flex items-center">
                            <span class="mr-2 text-sm font-medium">Sort By:</span>
                            <select class="border rounded p-1 text-sm focus:outline-none focus:border-primary">
                                <option>Featured</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Newest</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div id="product-grid-view" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="group">
                        <div class="relative overflow-hidden bg-gray-100 rounded-lg mb-4">
                            <a href="details.php">
                                <img src="assets/images/product/product-01.jpg" alt="Product" class="w-full h-[300px] object-cover transition duration-500 group-hover:scale-105" />
                            </a>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-lg font-medium hover:text-primary"><a href="details.php">Elona bedside grey table</a></h4>
                            <p class="text-primary font-bold mt-1">$40.00</p>
                        </div>
                    </div>
                
                    <div class="group">
                        <div class="relative overflow-hidden bg-gray-100 rounded-lg mb-4">
                            <a href="details.php">
                                <img src="assets/images/product/product-02.jpg" alt="Product" class="w-full h-[300px] object-cover transition duration-500 group-hover:scale-105" />
                            </a>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-lg font-medium hover:text-primary"><a href="details.php">Simple Minimal Chair</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                
                    <div class="group">
                        <div class="relative overflow-hidden bg-gray-100 rounded-lg mb-4">
                            <a href="details.php">
                                <img src="assets/images/product/product-03.jpg" alt="Product" class="w-full h-[300px] object-cover transition duration-500 group-hover:scale-105" />
                            </a>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-lg font-medium hover:text-primary"><a href="details.php">Pendant Chandelier Light</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                
                    <div class="group">
                        <div class="relative overflow-hidden bg-gray-100 rounded-lg mb-4">
                            <a href="details.php">
                                <img src="assets/images/product/product-04.jpg" alt="Product" class="w-full h-[300px] object-cover transition duration-500 group-hover:scale-105" />
                            </a>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-lg font-medium hover:text-primary"><a href="details.php">High quality vase bottle</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                
                    <div class="group">
                        <div class="relative overflow-hidden bg-gray-100 rounded-lg mb-4">
                            <a href="details.php">
                                <img src="assets/images/product/product-05.jpg" alt="Product" class="w-full h-[300px] object-cover transition duration-500 group-hover:scale-105" />
                            </a>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-lg font-medium hover:text-primary"><a href="details.php">Living & Bedroom Chair</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                
                    <div class="group">
                        <div class="relative overflow-hidden bg-gray-100 rounded-lg mb-4">
                            <a href="details.php">
                                <img src="assets/images/product/product-06.jpg" alt="Product" class="w-full h-[300px] object-cover transition duration-500 group-hover:scale-105" />
                            </a>
                            <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full shadow hover:bg-primary hover:text-white flex items-center justify-center transition">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <h4 class="text-lg font-medium hover:text-primary"><a href="details.php">Herman Arm Grey Chair</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                </div>

                <div id="product-list-view" class="flex flex-col space-y-8 hidden">
                    <div class="flex flex-col md:flex-row gap-6 bg-white border rounded-lg p-4 hover:shadow-lg transition">
                        <div class="w-full md:w-1/3 relative bg-gray-100 rounded overflow-hidden">
                            <a href="details.php"><img src="assets/images/product/product-01.jpg" alt="Product" class="w-full h-full object-cover"></a>
                        </div>
                        <div class="w-full md:w-2/3 flex flex-col justify-center">
                            <h4 class="text-xl font-bold hover:text-primary mb-2"><a href="details.php">Elona bedside grey table</a></h4>
                            <p class="text-primary font-bold text-lg mb-4">$40.00</p>
                            <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket. Part of the Kaval Collection. Regular fit is eased, but not sloppy, and perfect for any activity.
                            </p>
                            <div class="flex space-x-2">
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-regular fa-heart"></i></button>
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                
                    <div class="flex flex-col md:flex-row gap-6 bg-white border rounded-lg p-4 hover:shadow-lg transition">
                        <div class="w-full md:w-1/3 relative bg-gray-100 rounded overflow-hidden">
                            <a href="details.php"><img src="assets/images/product/product-02.jpg" alt="Product" class="w-full h-full object-cover"></a>
                        </div>
                        <div class="w-full md:w-2/3 flex flex-col justify-center">
                            <h4 class="text-xl font-bold hover:text-primary mb-2"><a href="details.php">Simple Minimal Chair</a></h4>
                            <p class="text-primary font-bold text-lg mb-4">$240.00</p>
                            <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket. Part of the Kaval Collection. Regular fit is eased, but not sloppy, and perfect for any activity.
                            </p>
                            <div class="flex space-x-2">
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-regular fa-heart"></i></button>
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                
                    <div class="flex flex-col md:flex-row gap-6 bg-white border rounded-lg p-4 hover:shadow-lg transition">
                        <div class="w-full md:w-1/3 relative bg-gray-100 rounded overflow-hidden">
                            <a href="details.php"><img src="assets/images/product/product-03.jpg" alt="Product" class="w-full h-full object-cover"></a>
                        </div>
                        <div class="w-full md:w-2/3 flex flex-col justify-center">
                            <h4 class="text-xl font-bold hover:text-primary mb-2"><a href="details.php">Pendant Chandelier Light</a></h4>
                            <p class="text-primary font-bold text-lg mb-4">$40.00</p>
                            <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker Jacket. Part of the Kaval Collection. Regular fit is eased, but not sloppy, and perfect for any activity.
                            </p>
                            <div class="flex space-x-2">
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-regular fa-heart"></i></button>
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-bag-shopping"></i> Add to Cart</button>
                                <button class="px-4 py-2 border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex justify-center">
                    <ul class="flex space-x-2">
                        <li><a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition">1</a></li>
                        <li><a href="#" class="w-10 h-10 flex items-center justify-center border rounded bg-primary text-white shadow">2</a></li>
                        <li><a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition">3</a></li>
                        <li><a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Content End -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/script.php'; ?>

</body>
</html>