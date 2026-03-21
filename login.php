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
        <h2 class="text-4xl font-bold mb-2">Login</h2>
        <ul class="flex justify-center space-x-2 text-sm">
            <li><a href="index.php" class="hover:text-primary">Home</a></li>
            <li>/</li>
            <li class="text-primary">Login</li>
        </ul>
    </div>
</div>

<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full lg:w-1/2">
                <div class="bg-gray-50 border rounded-lg p-8 shadow-sm">
                    <h4 class="text-2xl font-bold text-center mb-6">Login to Your Account</h4>
                    
                    <form action="#" class="space-y-4">
                        <div>
                            <input type="text" placeholder="Username or email *" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" required />
                        </div>
                        
                        <div>
                            <input type="password" placeholder="Password" class="w-full border p-3 rounded focus:outline-none focus:border-primary transition" required />
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary cursor-pointer" />
                            <label for="remember" class="ml-2 text-sm text-gray-600 cursor-pointer">Remember me</label>
                        </div>
                        
                        <div>
                            <button class="w-full bg-primary text-white font-medium py-3 rounded hover:bg-blue-600 transition shadow-lg">
                                Login
                            </button>
                        </div>
                    </form>
                    
                    <div class="mt-6 text-center text-sm space-y-2">
                        <p><a href="#" class="text-gray-500 hover:text-primary transition">Lost your password?</a></p>
                        <p class="text-gray-600">
                            No account? 
                            <a href="register.php" class="text-primary font-bold hover:underline">Create one here.</a>
                        </p>
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