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
            <h2 class="text-4xl font-bold mb-2">Contact Us</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">Contact Us</li>
            </ul>
        </div>
    </div>

    <section class="py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8 items-stretch">
            
            <div class="w-full lg:w-1/3 flex flex-col">
                <div class="bg-gray-50 p-8 rounded border flex-grow">
                    <h2 class="text-2xl font-bold mb-4">Contact Info</h2>
                    <p class="text-gray-500 mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-white rounded-full shadow text-primary text-xl">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Phone</h4>
                                <p class="text-sm text-gray-500"><a href="tel:0000000000" class="hover:text-primary transition">+000 000 0000</a></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-white rounded-full shadow text-primary text-xl">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Email</h4>
                                <p class="text-sm text-gray-500"><a href="mailto:info@surfsidemedia.in" class="hover:text-primary transition">info@surfsidemedia.in</a></p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-white rounded-full shadow text-primary text-xl">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Address</h4>
                                <p class="text-sm text-gray-500">Your Address Goes Here</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4 mt-8">
                        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center border rounded hover:bg-primary hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="hidden lg:block mt-6">
                     <img src="assets/images/contact-info.png" alt="Contact" class="w-full rounded shadow-sm" />
                </div>
            </div>

            <div class="w-full lg:w-2/3">
                <div class="bg-gray-50 p-8 rounded border h-full">
                    <h2 class="text-2xl font-bold mb-6">Get In Touch</h2>
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="Name*" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required />
                            <input type="email" name="email" placeholder="Email*" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" required />
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="subject" placeholder="Subject" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" />
                            <input type="text" name="phone" placeholder="Phone No" class="w-full border p-3 rounded focus:outline-none focus:border-primary bg-white" />
                        </div>
                        <textarea name="message" placeholder="Write your message here..." class="w-full border p-3 rounded h-48 focus:outline-none focus:border-primary bg-white" required></textarea>
                        
                        <button type="submit" class="bg-sky-800 text-white px-8 py-3 rounded hover:bg-primary transition shadow-lg font-medium">Send Message</button>
                    </form>
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