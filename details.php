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
            <h2 class="text-4xl font-bold mb-2">Product Details</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">Product Details</li>
            </ul>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <div class="w-full lg:w-1/2 overflow-hidden">
                    <div class="swiper-container gallery-top mb-4 rounded border bg-gray-50">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/images/product-details/product-details-1.jpg" class="w-full h-auto object-cover" alt="Product"></div>
                            <div class="swiper-slide"><img src="assets/images/product-details/product-details-2.jpg" class="w-full h-auto object-cover" alt="Product"></div>
                            <div class="swiper-slide"><img src="assets/images/product-details/product-details-3.jpg" class="w-full h-auto object-cover" alt="Product"></div>
                            <div class="swiper-slide"><img src="assets/images/product-details/product-details-4.jpg" class="w-full h-auto object-cover" alt="Product"></div>
                            <div class="swiper-slide"><img src="assets/images/product-details/product-details-5.jpg" class="w-full h-auto object-cover" alt="Product"></div>
                        </div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cursor-pointer border rounded overflow-hidden opacity-50 hover:opacity-100 transition">
                                <img src="assets/images/product-details/product-details-1.jpg" class="w-full" alt="Thumb">
                            </div>
                            <div class="swiper-slide cursor-pointer border rounded overflow-hidden opacity-50 hover:opacity-100 transition">
                                <img src="assets/images/product-details/product-details-2.jpg" class="w-full" alt="Thumb">
                            </div>
                            <div class="swiper-slide cursor-pointer border rounded overflow-hidden opacity-50 hover:opacity-100 transition">
                                <img src="assets/images/product-details/product-details-3.jpg" class="w-full" alt="Thumb">
                            </div>
                            <div class="swiper-slide cursor-pointer border rounded overflow-hidden opacity-50 hover:opacity-100 transition">
                                <img src="assets/images/product-details/product-details-4.jpg" class="w-full" alt="Thumb">
                            </div>
                            <div class="swiper-slide cursor-pointer border rounded overflow-hidden opacity-50 hover:opacity-100 transition">
                                <img src="assets/images/product-details/product-details-5.jpg" class="w-full" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="w-full lg:w-1/2">
                    <h2 class="text-3xl font-bold mb-4">High quality vase bottle.</h2>
                    
                    <div class="flex items-center space-x-4 mb-4">
                        <span class="text-2xl text-primary font-bold">$240.00</span>
                        <span class="text-xl text-gray-400 line-through">$290.00</span>
                    </div>
    
                    <div class="flex items-center mb-6 space-x-4">
                        <div class="text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <a href="#reviews" class="text-sm text-gray-500 hover:text-primary">( 1 Customer Review )</a>
                    </div>
    
                    <div class="mb-6">
                        <span class="font-bold block mb-2">Color:</span>
                        <div class="flex space-x-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="color" class="hidden peer">
                                <span class="block w-6 h-6 rounded-full bg-blue-500 border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-blue-500"></span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="color" class="hidden peer">
                                <span class="block w-6 h-6 rounded-full bg-gray-400 border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-400"></span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="color" class="hidden peer">
                                <span class="block w-6 h-6 rounded-full bg-indigo-900 border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-indigo-900"></span>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="color" class="hidden peer">
                                <span class="block w-6 h-6 rounded-full bg-sky-800 border-2 border-transparent peer-checked:ring-2 peer-checked:ring-offset-2 peer-checked:ring-gray-800"></span>
                            </label>
                        </div>
                    </div>
    
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod temporf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                    </p>
    
                    <div class="flex flex-wrap items-center gap-4 mb-8">
                        <div class="flex border rounded">
                            <button class="qty-btn px-3 py-2 hover:bg-gray-100" onclick="updateQty(-1)">-</button>
                            <input type="number" id="qty-input" value="1" class="w-12 text-center focus:outline-none" readonly>
                            <button class="qty-btn px-3 py-2 hover:bg-gray-100" onclick="updateQty(1)">+</button>
                        </div>
    
                        <button class="bg-sky-700 text-white px-8 py-3 rounded hover:bg-primary transition font-medium">Add To Cart</button>
                        
                        <div class="flex space-x-2">
                            <a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa-regular fa-heart text-xl"></i></a>
                            <a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa-solid fa-shuffle text-xl"></i></a>
                        </div>
                    </div>
    
                    <div class="space-y-2 text-sm text-gray-600 border-t pt-6">
                        <p><span class="font-bold text-gray-800 w-24 inline-block">SKU:</span> Ch-256xl</p>
                        <p><span class="font-bold text-gray-800 w-24 inline-block">Categories:</span> <a href="#" class="hover:text-primary">Office</a>, <a href="#" class="hover:text-primary">Home</a></p>
                        <p><span class="font-bold text-gray-800 w-24 inline-block">Tags:</span> <a href="#" class="hover:text-primary">Furniture</a></p>
                        <div class="flex items-center">
                            <span class="font-bold text-gray-800 w-24 inline-block">Share:</span>
                            <div class="flex space-x-4">
                                <a href="#" class="hover:text-primary"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="hover:text-primary"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="hover:text-primary"><i class="fa-brands fa-pinterest-p"></i></a>
                                <a href="#" class="hover:text-primary"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-gray-50" id="details-tabs">
        <div class="container mx-auto px-4">
            <div class="flex justify-center border-b mb-8 overflow-x-auto">
                <button class="tab-btn px-6 py-3 font-medium text-gray-600 hover:text-primary transition" data-target="info">Information</button>
                <button class="tab-btn active px-6 py-3 font-medium text-gray-600 hover:text-primary transition" data-target="desc">Description</button>
                <button class="tab-btn px-6 py-3 font-medium text-gray-600 hover:text-primary transition" data-target="review">Reviews (03)</button>
            </div>

            <div class="max-w-4xl mx-auto">
                <div id="info" class="tab-content hidden space-y-4">
                    <h4 class="font-bold text-lg">Information</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                    <h4 class="font-bold text-lg mt-4">Fabric & Care</h4>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Faux suede fabric</li>
                        <li>Gold tone metal hoop handles</li>
                        <li>RI branding</li>
                        <li>Height: 31cm; Width: 32cm; Depth: 12cm</li>
                    </ul>
                </div>

                <div id="desc" class="tab-content">
                    <p class="leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimlo ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiarty deserunt mollit anim id est laborum.</p>
                </div>

                <div id="review" class="tab-content hidden">
                    <div class="space-y-6 mb-10">
                        <div class="flex gap-4">
                            <img src="assets/images/author/author-1.png" class="w-16 h-16 rounded-full" alt="User">
                            <div>
                                <h6 class="font-bold">Rosie Silva <span class="text-xs font-normal text-gray-500 ml-2">11/20/2023</span></h6>
                                <div class="text-yellow-400 text-xs my-1">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </div>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <img src="assets/images/author/author-2.png" class="w-16 h-16 rounded-full" alt="User">
                            <div>
                                <h6 class="font-bold">Aidyn Cody <span class="text-xs font-normal text-gray-500 ml-2">11/20/2023</span></h6>
                                <div class="text-yellow-400 text-xs my-1">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                                </div>
                                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded border">
                        <h3 class="text-xl font-bold mb-4">Add a review</h3>
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Enter your name" class="w-full border p-3 rounded focus:border-primary outline-none">
                                <input type="email" placeholder="john.smith@example.com" class="w-full border p-3 rounded focus:border-primary outline-none">
                            </div>
                            <div>
                                <label class="block mb-2 font-medium">Rating:</label>
                                <div class="text-gray-400 hover:text-yellow-400 cursor-pointer text-lg inline-block transition">
                                    <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <textarea placeholder="Write your comments here" class="w-full border p-3 rounded h-32 focus:border-primary outline-none"></textarea>
                            <button class="bg-sky-700 text-white px-6 py-2 rounded hover:bg-primary transition">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <h2 class="text-2xl font-bold">Related Products</h2>
                <div class="flex space-x-2">
                    <button class="related-prev w-10 h-10 rounded-full border hover:bg-primary hover:text-white transition flex items-center justify-center">
                        <i class="fa-solid fa-angle-left text-xl"></i>
                    </button>
                    <button class="related-next w-10 h-10 rounded-full border hover:bg-primary hover:text-white transition flex items-center justify-center">
                        <i class="fa-solid fa-angle-right text-xl"></i>
                    </button>
                </div>
            </div>
    
            <div class="swiper-container related-slider overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="group text-center">
                            <div class="relative overflow-hidden bg-gray-100 rounded mb-4">
                                <a href="#"><img src="assets/images/product/product-07.jpg" class="w-full object-cover group-hover:scale-105 transition duration-500" alt="Prod"></a>
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition">
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-bag-shopping"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                            <h4 class="font-medium hover:text-primary"><a href="#">Wooden decorations</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="group text-center">
                            <div class="relative overflow-hidden bg-gray-100 rounded mb-4">
                                <a href="#"><img src="assets/images/product/product-08.jpg" class="w-full object-cover group-hover:scale-105 transition duration-500" alt="Prod"></a>
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition">
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-bag-shopping"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                            <h4 class="font-medium hover:text-primary"><a href="#">Herman Seater Sofa</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="group text-center">
                            <div class="relative overflow-hidden bg-gray-100 rounded mb-4">
                                <a href="#"><img src="assets/images/product/product-09.jpg" class="w-full object-cover group-hover:scale-105 transition duration-500" alt="Prod"></a>
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition">
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-bag-shopping"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                            <h4 class="font-medium hover:text-primary"><a href="#">Reece Seater Sofa</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="group text-center">
                            <div class="relative overflow-hidden bg-gray-100 rounded mb-4">
                                <a href="#"><img src="assets/images/product/product-10.jpg" class="w-full object-cover group-hover:scale-105 transition duration-500" alt="Prod"></a>
                                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2 opacity-0 group-hover:opacity-100 transition">
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-solid fa-bag-shopping"></i></button>
                                    <button class="w-8 h-8 bg-white rounded shadow hover:bg-primary hover:text-white flex items-center justify-center transition"><i class="fa-regular fa-heart"></i></button>
                                </div>
                            </div>
                            <h4 class="font-medium hover:text-primary"><a href="#">Round Swivel Chair</a></h4>
                            <p class="text-primary font-bold mt-1">$240.00</p>
                        </div>
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