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
        <h2 class="text-4xl font-bold mb-2">Register</h2>
        <ul class="flex justify-center space-x-2 text-sm">
            <li><a href="index.php" class="hover:text-primary">Home</a></li>
            <li>/</li>
            <li class="text-primary">Register</li>
        </ul>
    </div>
</div>

<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-gray-50 border rounded-lg p-8 shadow-sm">
                    <h4 class="text-2xl font-bold text-center mb-2">Create New Account</h4>
                    <p class="text-center text-sm mb-8 text-gray-500">
                        Already have an account? 
                        <a href="login.php" class="text-primary hover:underline">Log in instead!</a>
                    </p>
                    
                    <form action="#" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <input type="text" placeholder="First Name" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" />
                            </div>
                            <div>
                                <input type="text" placeholder="Last Name" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" />
                            </div>
                        </div>
                        
                        <div>
                            <input type="email" placeholder="Email Address *" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" required />
                        </div>

                        <div>
                            <input type="text" placeholder="Username *" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" required />
                        </div>
                        
                        <div>
                            <input type="password" placeholder="Password" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" required />
                        </div>
                        <div>
                            <input type="password" placeholder="Confirm Password" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" required />
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="receive" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary cursor-pointer" />
                            <label for="receive" class="ml-2 text-sm text-gray-600 cursor-pointer">Receive Offers From Our Partners</label>
                        </div>
                        
                        <div class="pt-4">
                            <button class="w-full bg-primary text-white font-medium py-3 rounded hover:bg-blue-600 transition shadow-lg">
                                Register
                            </button>
                        </div>
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