    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-xl font-bold text-[#32333c]">MyPortfolio</div>
            <div class="hidden md:flex space-x-10 py-3">
                <a href="/"
                    class="hover:text-[#feca34] font-semibold transition duration-200 text-[#32333c] group relative inline-block">
                    Home
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-[#feca34] group-hover:w-1/2 transition-all duration-300 ease-in-out"></span>
                </a>

                 <a href="#about"
                    class="hover:text-[#feca34] font-semibold transition duration-200 text-[#32333c] group relative inline-block">
                    About
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-[#feca34] group-hover:w-1/2 transition-all duration-300 ease-in-out"></span>
                </a>

                 <a href="#experience"
                    class="hover:text-[#feca34] font-semibold transition duration-200 text-[#32333c] group relative inline-block">
                    Experience
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-[#feca34] group-hover:w-1/2 transition-all duration-300 ease-in-out"></span>
                </a>

                <a href="#service"
                    class="hover:text-[#feca34] font-semibold transition duration-200 text-[#32333c] group relative inline-block">
                    Service
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-[#feca34] group-hover:w-1/2 transition-all duration-300 ease-in-out"></span>
                </a>
                 <a href="#project"
                    class="hover:text-[#feca34] font-semibold transition duration-200 text-[#32333c] group relative inline-block">
                    Project
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-[#feca34] group-hover:w-1/2 transition-all duration-300 ease-in-out"></span>
                </a>

                 <a href="#contact"
                    class="hover:text-[#feca34] font-semibold transition duration-200 text-[#32333c] group relative inline-block">
                    Contact
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-[#feca34] group-hover:w-1/2 transition-all duration-300 ease-in-out"></span>
                </a>
            </div>
            <button class="md:hidden" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white text-sm px-4 pb-4">
            <a href="#home" class="block py-2 hover:text-[#feca34]">Home</a>
            <a href="#about" class="block py-2 hover:text-[#feca34]">About</a>
            <a href="#experience" class="block py-2 hover:text-[#feca34]">Experience</a>
            <a href="#project" class="block py-2 hover:text-[#feca34]">Project</a>
            <a href="#contact" class="block py-2 hover:text-[#feca34]">Contact</a>
        </div>
    </nav>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const mobileMenu = document.getElementById("mobileMenu");
        const mobileLinks = mobileMenu.querySelectorAll("a");

        mobileLinks.forEach(link => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
            });
        });
    });
</script>
