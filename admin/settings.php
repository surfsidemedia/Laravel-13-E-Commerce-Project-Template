<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <?php include 'includes/sidebar.php'; ?>

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
            
            <?php include 'includes/header.php'; ?>

            <!-- Main Content Start -->

            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Account Settings</h1>
                    <p class="text-sm text-gray-500">Update your profile, security, and store preferences.</p>
                </div>

                <div class="w-full mx-auto">
                    <div class="flex border-b border-gray-200 mb-8 overflow-x-auto no-scrollbar">
                        <button class="tab-btn active px-6 py-3 text-sm font-medium border-b-2 border-transparent transition whitespace-nowrap" data-target="profile-tab">
                            <i class="fa-solid fa-user-gear mr-2"></i> Profile Info
                        </button>
                        <button class="tab-btn px-6 py-3 text-sm font-medium border-b-2 border-transparent transition whitespace-nowrap" data-target="security-tab">
                            <i class="fa-solid fa-shield-halved mr-2"></i> Password & Security
                        </button>
                        <button class="tab-btn px-6 py-3 text-sm font-medium border-b-2 border-transparent transition whitespace-nowrap" data-target="store-tab">
                            <i class="fa-solid fa-store mr-2"></i> Store Configuration
                        </button>
                    </div>

                    <div id="profile-tab" class="tab-content block animate-fadeIn">
                        <form action="#" class="space-y-6">
                            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                                <h3 class="text-lg font-bold text-gray-800 mb-6 border-b pb-4">Personal Information</h3>
                                
                                <div class="flex flex-col md:flex-row gap-8 items-start mb-8">
                                    <div class="relative group">
                                        <img src="https://i.pravatar.cc/150?img=12" class="w-32 h-32 rounded-full border-4 border-gray-100 shadow-sm object-cover" alt="Profile">
                                        <label class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded-full opacity-0 group-hover:opacity-100 cursor-pointer transition text-white">
                                            <i class="fa-solid fa-camera"></i>
                                            <input type="file" class="hidden">
                                        </label>
                                    </div>
                                    <div class="flex-1 space-y-4 w-full">
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                                <input type="text" value="Admin User" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                                <input type="email" value="admin@surfsidemedia.com" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                            <input type="text" value="+1 234 567 890" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-end gap-3 border-t pt-6">
                                    <button type="submit" class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition text-sm font-medium shadow-md">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div id="security-tab" class="tab-content hidden animate-fadeIn">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 max-w-2xl mx-auto">
                            <h3 class="text-lg font-bold text-gray-800 mb-6 border-b pb-4">Update Password</h3>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                    <input type="password" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                    <input type="password" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                    <input type="password" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                </div>
                                <div class="pt-4">
                                    <button type="submit" class="w-full bg-primary text-white py-2.5 rounded-lg hover:bg-blue-600 transition font-medium shadow-sm">Update Password</button>
                                </div>
                            </form>
                            
                            <div class="mt-8 pt-6 border-t">
                                <h4 class="text-sm font-bold text-red-600 mb-2">Two-Factor Authentication</h4>
                                <p class="text-xs text-gray-500 mb-4">Add an extra layer of security to your account.</p>
                                <button class="px-4 py-2 border border-primary text-primary rounded-lg text-xs font-bold hover:bg-primary hover:text-white transition">Enable 2FA</button>
                            </div>
                        </div>
                    </div>

                    <div id="store-tab" class="tab-content hidden animate-fadeIn">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                            <h3 class="text-lg font-bold text-gray-800 mb-6 border-b pb-4">Store Settings</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Store Name</label>
                                        <input type="text" value="Surfside Media" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Currency</label>
                                        <select class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm bg-white">
                                            <option selected>USD ($)</option>
                                            <option>EUR (€)</option>
                                            <option>GBP (£)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Store Status</label>
                                        <div class="flex items-center gap-3 py-2">
                                            <div class="relative inline-block w-10 h-5 transition duration-200 ease-in-out bg-green-500 rounded-full cursor-pointer">
                                                <div class="absolute w-5 h-5 bg-white border border-gray-300 rounded-full transform translate-x-5 transition-transform duration-200"></div>
                                            </div>
                                            <span class="text-sm text-gray-600">Online / Public</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Order Notifications Email</label>
                                        <input type="email" value="orders@surfsidemedia.com" class="w-full border px-4 py-2 rounded-lg focus:ring-1 focus:ring-primary outline-none text-sm">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end pt-8">
                                <button class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-600 transition text-sm font-medium shadow-md">Update Store</button>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

            <!-- Main Content End -->

        </div>
    </div>

    <?php include 'includes/script.php'; ?>
    <script>
         // Tabs Switching Logic
         const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active classes
                tabBtns.forEach(b => b.classList.remove('active', 'border-primary', 'text-primary'));
                tabContents.forEach(c => c.classList.add('hidden'));

                // Add active classes
                btn.classList.add('active', 'border-primary', 'text-primary');
                const target = btn.getAttribute('data-target');
                document.getElementById(target).classList.remove('hidden');
            });
        });
    </script>
</body>
</html>