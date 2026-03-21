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
            <h2 class="text-4xl font-bold mb-2">My Account</h2>
            <ul class="flex justify-center space-x-2 text-sm">
                <li><a href="index.php" class="hover:text-primary">Home</a></li>
                <li>/</li>
                <li class="text-primary">My Account</li>
            </ul>
        </div>
    </div>

    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-8">
                
                <div class="w-full lg:w-1/4">
                    <div class="bg-gray-50 border rounded overflow-hidden">
                        <ul class="flex flex-col divide-y">
                            <li>
                                <button class="account-tab-btn active w-full text-left px-6 py-4 transition flex items-center gap-3" data-target="dashboard">
                                    <i class="fa fa-tachometer w-5 text-center"></i> Dashboard
                                </button>
                            </li>
                            <li>
                                <button class="account-tab-btn w-full text-left px-6 py-4 transition flex items-center gap-3" data-target="orders">
                                    <i class="fa fa-shopping-cart w-5 text-center"></i> Orders
                                </button>
                            </li>
                            <li>
                                <button class="account-tab-btn w-full text-left px-6 py-4 transition flex items-center gap-3" data-target="downloads">
                                    <i class="fa fa-cloud-download w-5 text-center"></i> Downloads
                                </button>
                            </li>
                            <li>
                                <button class="account-tab-btn w-full text-left px-6 py-4 transition flex items-center gap-3" data-target="payment">
                                    <i class="fa fa-credit-card w-5 text-center"></i> Payment Method
                                </button>
                            </li>
                            <li>
                                <button class="account-tab-btn w-full text-left px-6 py-4 transition flex items-center gap-3" data-target="address">
                                    <i class="fa fa-map-marker w-5 text-center"></i> Address
                                </button>
                            </li>
                            <li>
                                <button class="account-tab-btn w-full text-left px-6 py-4 transition flex items-center gap-3" data-target="details">
                                    <i class="fa fa-user w-5 text-center"></i> Account Details
                                </button>
                            </li>
                            <li>
                                <a href="login.php" class="w-full text-left px-6 py-4 transition flex items-center gap-3 hover:bg-gray-100 hover:text-red-500">
                                    <i class="fa fa-sign-out w-5 text-center"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full lg:w-3/4">
                    
                    <div id="dashboard" class="account-tab-content">
                        <div class="bg-white border rounded p-6">
                            <h4 class="text-xl font-bold mb-4">Dashboard</h4>
                            <div class="bg-blue-50 border-l-4 border-primary p-4 mb-6">
                                <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong> <a href="login.php" class="text-primary hover:underline">Logout</a>)</p>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                From your account dashboard, you can easily check & view your recent orders, manage your shipping and billing addresses, and edit your password and account details.
                            </p>
                        </div>
                    </div>

                    <div id="orders" class="account-tab-content hidden">
                        <div class="bg-white border rounded p-6">
                            <h4 class="text-xl font-bold mb-6">Orders</h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="p-4 font-bold">No</th>
                                            <th class="p-4 font-bold">Name</th>
                                            <th class="p-4 font-bold">Date</th>
                                            <th class="p-4 font-bold">Status</th>
                                            <th class="p-4 font-bold">Total</th>
                                            <th class="p-4 font-bold">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <tr>
                                            <td class="p-4">1</td>
                                            <td class="p-4">Mostarizing Oil</td>
                                            <td class="p-4">Aug 22, 2020</td>
                                            <td class="p-4"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Pending</span></td>
                                            <td class="p-4">$100</td>
                                            <td class="p-4"><a href="#" class="bg-primary text-white px-4 py-1 rounded hover:bg-blue-600 text-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="p-4">2</td>
                                            <td class="p-4">Katopeno Altuni</td>
                                            <td class="p-4">July 22, 2020</td>
                                            <td class="p-4"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Approved</span></td>
                                            <td class="p-4">$45</td>
                                            <td class="p-4"><a href="#" class="bg-primary text-white px-4 py-1 rounded hover:bg-blue-600 text-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td class="p-4">3</td>
                                            <td class="p-4">Murikhete Paris</td>
                                            <td class="p-4">June 22, 2020</td>
                                            <td class="p-4"><span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">On Hold</span></td>
                                            <td class="p-4">$99</td>
                                            <td class="p-4"><a href="#" class="bg-primary text-white px-4 py-1 rounded hover:bg-blue-600 text-sm">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="downloads" class="account-tab-content hidden">
                        <div class="bg-white border rounded p-6">
                            <h4 class="text-xl font-bold mb-6">Download</h4>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-gray-100 border-b">
                                            <th class="p-4 font-bold">Product</th>
                                            <th class="p-4 font-bold">Date</th>
                                            <th class="p-4 font-bold">Expire</th>
                                            <th class="p-4 font-bold">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <tr>
                                            <td class="p-4">Mostarizing Oil</td>
                                            <td class="p-4">Aug 22, 2020</td>
                                            <td class="p-4">Yes</td>
                                            <td class="p-4"><a href="#" class="text-primary hover:underline">Download File</a></td>
                                        </tr>
                                        <tr>
                                            <td class="p-4">Katopeno Altuni</td>
                                            <td class="p-4">July 22, 2020</td>
                                            <td class="p-4">Never</td>
                                            <td class="p-4"><a href="#" class="text-primary hover:underline">Download File</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div id="payment" class="account-tab-content hidden">
                        <div class="bg-white border rounded p-6">
                            <h4 class="text-xl font-bold mb-4">Payment Method</h4>
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
                                <p class="text-yellow-700">You Can't Save Your Payment Method yet.</p>
                            </div>
                        </div>
                    </div>

                    <div id="address" class="account-tab-content hidden">
                        <div class="bg-white border rounded p-6">
                            <h4 class="text-xl font-bold mb-6">Address</h4>
                            <div class="grid md:grid-cols-2 gap-8">
                                <div class="border p-4 rounded bg-gray-50">
                                    <h5 class="font-bold text-lg mb-2">Billing Address</h5>
                                    <address class="not-italic text-sm text-gray-600 mb-4">
                                        <strong class="block text-gray-800 text-base mb-1">Alex Tuntuni</strong>
                                        1355 Market St, Suite 900<br>
                                        San Francisco, CA 94103<br>
                                        Mobile: (123) 456-7890
                                    </address>
                                    <a href="#" class="inline-block bg-primary text-white px-4 py-2 rounded hover:bg-blue-600 text-sm"><i class="fa fa-edit"></i> Edit Address</a>
                                </div>
                                <div class="border p-4 rounded bg-gray-50">
                                    <h5 class="font-bold text-lg mb-2">Shipping Address</h5>
                                    <address class="not-italic text-sm text-gray-600 mb-4">
                                        <strong class="block text-gray-800 text-base mb-1">Alex Tuntuni</strong>
                                        1355 Market St, Suite 900<br>
                                        San Francisco, CA 94103<br>
                                        Mobile: (123) 456-7890
                                    </address>
                                    <a href="#" class="inline-block bg-primary text-white px-4 py-2 rounded hover:bg-blue-600 text-sm"><i class="fa fa-edit"></i> Edit Address</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="details" class="account-tab-content hidden">
                        <div class="bg-white border rounded p-6">
                            <h4 class="text-xl font-bold mb-6">Account Details</h4>
                            <form action="#" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block mb-1 text-sm">First Name</label>
                                        <input type="text" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                    </div>
                                    <div>
                                        <label class="block mb-1 text-sm">Last Name</label>
                                        <input type="text" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                    </div>
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm">Display Name</label>
                                    <input type="text" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm">Email Address</label>
                                    <input type="email" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                </div>
                                
                                <div class="pt-4">
                                    <h5 class="text-lg font-bold mb-3">Password Change</h5>
                                    <div class="space-y-4">
                                        <input type="password" placeholder="Current Password" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <input type="password" placeholder="New Password" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                            <input type="password" placeholder="Confirm Password" class="w-full border p-3 rounded focus:outline-none focus:border-primary">
                                        </div>
                                    </div>
                                </div>

                                <button class="bg-primary text-white px-6 py-3 rounded hover:bg-blue-600 transition shadow">Save Changes</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Main Content End -->

    <?php include 'includes/footer.php'; ?>

    <?php include 'includes/script.php'; ?>

    <script>
        // --- Account Tab Switching Logic ---
        const tabBtns = document.querySelectorAll('.account-tab-btn');
        const tabContents = document.querySelectorAll('.account-tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // 1. Remove active state from all buttons
                tabBtns.forEach(b => {
                    b.classList.remove('active'); // bg-primary, text-white
                    b.classList.remove('bg-primary');
                    b.classList.remove('text-white');
                    // Add back hover states if needed, though CSS handles simple hover
                });

                // 2. Add active state to clicked button
                btn.classList.add('active');
                btn.classList.add('bg-primary');
                btn.classList.add('text-white');

                // 3. Hide all tab contents
                tabContents.forEach(content => content.classList.add('hidden'));

                // 4. Show target tab content
                const targetId = btn.getAttribute('data-target');
                document.getElementById(targetId).classList.remove('hidden');
            });
        });
        </script>

</body>
</html>