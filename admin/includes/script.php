<script>
    // Sidebar Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');

    function toggleSidebar() {
        const isClosed = sidebar.classList.contains('-translate-x-full');
        if (isClosed) {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        } else {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }
    }

    mobileMenuBtn.addEventListener('click', toggleSidebar);
    overlay.addEventListener('click', toggleSidebar);

    // Delete Simulation
    function deleteCategory(btn) {
        if (confirm('Are you sure you want to delete this category?')) {
            const row = btn.closest('tr');
            row.remove();
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        // 1. Get the current URL filename
        const currentLocation = window.location.pathname.split("/").pop();

        // 2. Select all navigation links
        const menuLinks = document.querySelectorAll(".nav-link");

        menuLinks.forEach(link => {
            // 3. Check if link's href matches the current location
            const linkHref = link.getAttribute("href");

            if (linkHref === currentLocation) {
                // 4. Apply Active Tailwind Classes
                link.classList.add("bg-primary", "text-white", "shadow-md");
                link.classList.remove("hover:bg-sky-700");

                // 5. Optionally bold the text
                const span = link.querySelector("span");
                if (span) span.classList.add("font-medium");
            }
        });
    });
</script>