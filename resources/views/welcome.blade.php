<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="">
    @include('navbar')
    <!-- Hero -->
    <section class="bg-[#fbfbfb]" id="home">
        <div class="w-full h-[45rem] md:h-screen container mx-auto">
            <div class="grid md:grid-cols-2 md:place-items-center text-[#32333c] w-full h-full">
                <div class="flex flex-col px-4 space-y-4 justify-center items-center md:items-start">
                    <p class="text-2xl lg:text-4xl font-bold mt-20 md:mt-0">Muhammed Riyas A</p>
                    <p class="text-center md:text-left text-sm lg:text-base">React & Laravel Developer | Full-Stack
                        Engineer | 4+ Years
                        Experience</p>
                    <a href="#contact"
                        class="py-3 my-5 rounded-full cursor-pointer lg:text-xl flex justify-center items-center w-[14rem] shadow-md bg-[#FEC110] text-white group hover:bg-white hover:text-[#feb633] border border-[#feb633] transition ease-in-out delay-150 duration-300">
                        Hire Me
                    </a>
                </div>

                <div class="">
                    <img src="{{ asset('images/hero_img-1.png') }}" class="w-[40rem] mt-10" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About Me -->
    <section class="container mx-auto mt-10 xl:my-20 xl:px-10 scroll-mt-52" id="about">
        <div class="w-full md:flex justify-center items-center gap-x-2">
            <div class="bg-cover bg-center py-8 w-full relative xl:translate-x-[8rem] z-10">
                <img class="" src="{{ asset('images/about_shap_bg.png') }}" alt="">
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 space-2 flex flex-col gap-2">
                    <h2 class="text-[#32333c] text-2xl lg:text-4xl font-bold text-center">About Me</h2>
                    <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
                </div>
            </div>

            <div class="w-full px-4 md:px-2 xl:px-0 z-20">
                <p class="text-justify text-[#8a91ac] text-sm lg:text-base leading-relaxed">
                    Full-Stack Developer with 4+ years of experience building scalable web applications using Laravel
                    for the backend and React for dynamic,
                    responsive frontends. Skilled in REST API development, Flutter mobile apps, and real-time
                    applications with Firebase. Known for writing clean,
                    maintainable code and collaborating in Agile teams. Open to international roles focused on Laravel,
                    React, or full-stack development.
                </p>

                <div class="flex gap-x-5 items-center text-sm lg:text-base">
                    <a href="#project"
                        class="py-3 my-5 rounded-full cursor-pointer flex justify-center items-center w-[14rem] shadow-md bg-[#feb633] text-white border border-[#feb633] group hover:bg-white hover:text-[#feb633] transition ease-in-out delay-150 duration-300">
                        View Works
                    </a>

                    <a href="CV - Muhd Riyas.pdf" download="MuhdRiyas - CV.pdf"
                        class="py-3 my-5 rounded-full cursor-pointer flex justify-center items-center w-[14rem] shadow-md bg-white text-[#feb633] border border-[#feb633] group hover:bg-[#feb633] hover:text-white transition ease-in-out delay-150 duration-300">
                        Download CV
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiences and Education -->
    <section class="container mx-auto my-10 md:my-20 scroll-mt-52 hidden md:block" x-data="{ activeTab: 'experience' }"
        id="experience">
        <div class="flex flex-col justify-center items-center gap-2">
            <h2 class="text-center text-[#32333c] text-4xl font-bold capitalize">
                People i've worked with
            </h2>
            <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
        </div>

        <div class="flex justify-center gap-x-5 py-8">
            <button @click="activeTab = 'experience'; localStorage.setItem('activeTab', 'experience')"
                class="text-lg cursor-pointer"
                :class="activeTab === 'experience' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                Experience
            </button>

            <button @click="activeTab = 'education'; localStorage.setItem('activeTab', 'education')"
                class="text-lg cursor-pointer" :class="activeTab === 'education' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                Education
            </button>
        </div>

        <!-- Experience -->
        <div x-show="activeTab === 'experience'" x-transition:enter="transition duration-500 delay-500 ease-out"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition duration-300 ease-in" x-transition:leave-end="opacity-0 scale-95"
            class="flex w-full flex-col items-center justify-center">
            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute -translate-x-56">
                    <h2 class="text-xl">INFOLKS PVT LTD</h2>
                    <p class="text-[#32333c] italic">Full Stack Developer</p>
                </div>
                <div
                    class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>Present</p>
                    <p>|</p>
                    <p>2021</p>
                </div>
            </div>

            <div class="h-20 w-0.5 bg-[#8a91ac]"></div>

            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute translate-x-[23rem]">
                    <h2 class="text-xl">FLEMING EMBEDDED AND SOFTWARE SOLUTIONS</h2>
                    <p class="text-[#32333c] italic">Python Intern</p>
                </div>
                <div
                    class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>2015</p>
                    <p>|</p>
                    <p>2020</p>
                </div>
            </div>
        </div>

        <!-- Education -->
        <div x-show="activeTab === 'education'" x-transition:enter="transition duration-500 delay-500 ease-out"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95" class="flex w-full flex-col items-center justify-center">

            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute -translate-x-60">
                    <h2 class="text-xl">Central University of Kerala</h2>
                    <p class="text-[#32333c] italic">MSC Computer Science</p>
                </div>
                <div
                    class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>2021</p>
                    <p>|</p>
                    <p>2019</p>
                </div>
            </div>

            <div class="h-20 w-0.5 bg-[#8a91ac]"></div>

            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute translate-x-56">
                    <h2 class="text-xl">MES College Ponnani</h2>
                    <p class="text-[#32333c] italic">BSC Computer Science</p>
                </div>
                <div
                    class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>2015</p>
                    <p>|</p>
                    <p>2018</p>
                </div>
            </div>

            <div class="h-20 w-0.5 bg-[#8a91ac]"></div>

            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute -translate-x-56">
                    <h2 class="text-xl">KHSS Kumaramputhur</h2>
                    <p class="text-[#32333c] italic">Plus Two</p>
                </div>
                <div
                    class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>2015</p>
                    <p>|</p>
                    <p>2013</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="container mx-auto my-10 md:my-20 xl:px-10 scroll-mt-52" id="service">
        <div class="flex flex-col justify-center items-center gap-2">
            <h2 class="text-center text-[#32333c] text-2xl lg:text-4xl font-bold">
                Services
            </h2>
            <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
        </div>

        <div class="text-center py-5 text-sm lg:text-base">What I do.</div>

        <div class="grid md:grid-cols-3 place-items-center px-4 md:px-0 xl:px-10">
            <div
                class="w-full border border-gray-300 shadow-md flex flex-col py-10 px-4 lg:px-10 gap-2 transition ease-in-out duration-300 group h-fit md:h-[26rem] xl:h-[23rem] hover:bg-[#FEC110] active:bg-[#FEC110]">
                <h2 class="uppercase pb-3 lg:pb-5 font-semibold text-lg">
                    web design
                </h2>
                <p class="text-[#8a91ac] pb-5 text-justify group-hover:text-white text-sm lg:text-base">
                    I develop full-stack web applications using Laravel and React, integrating RESTful APIs, real-time
                    features with Firebase,
                    and secure user authentication. From concept to deployment, I design scalable and maintainable
                    solutions that solve real
                    business problems, including ticketing systems, HR panels, and e-commerce platforms.
                </p>
            </div>
            <div
                class="w-full border border-gray-300 shadow-md flex flex-col py-10 px-4 lg:px-10 gap-2 transition ease-in-out duration-300 group h-fit md:h-[26rem] xl:h-[23rem] hover:bg-[#FEC110] active:bg-[#FEC110]">
                <h2 class="uppercase pb-3 lg:pb-5 font-semibold text-lg">
                    frontend
                </h2>
                <p class="text-[#8a91ac] pb-5 text-justify group-hover:text-white text-sm lg:text-base">
                    I craft responsive, user-friendly interfaces using React.js, Tailwind CSS, Bootstrap, and Alpine.js.
                    My focus is on building clean UI components that enhance user experience and performance across all
                    devices.
                    Whether it's a dynamic dashboard or an interactive web portal, I ensure pixel-perfect designs and
                    smooth interactivity.
                </p>
            </div>
            <div
                class="w-full border border-gray-300 shadow-md flex flex-col py-10 px-4 lg:px-10 gap-2 transition ease-in-out duration-300 group h-fit md:h-[26rem] xl:h-[23rem] hover:bg-[#FEC110] active:bg-[#FEC110]">
                <h2 class="uppercase pb-3 lg:pb-5 font-semibold text-lg">
                    backend
                </h2>
                <p class="text-[#8a91ac] pb-5 text-justify group-hover:text-white text-sm lg:text-base">
                    I build robust and scalable backends using Laravel and PHP, designing optimized database structures
                    with MySQL and SQLite.
                    I implement clean architecture and efficient API communication to ensure high performance and
                    maintainability.
                    I also integrate third-party services and handle complex role-based access systems.
                </p>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section class="my-10 md:my-20 bg-[#fbfbfb] md:px-10 scroll-mt-52" x-data="{ projectTab: 'all' }" id="project">
        <div class="container mx-auto">
            <div class="flex flex-col justify-center items-center gap-2 py-5">
                <h2 class="text-center text-[#32333c] text-4xl font-bold capitalize">
                    Projects
                </h2>
                <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
            </div>

            <div class="flex justify-center gap-x-5 py-8">
                <button @click="projectTab = 'all'; localStorage.setItem('projectTab', 'all')"
                    class="text-lg cursor-pointer"
                    :class="projectTab === 'all' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                    All
                </button>

                <button @click="projectTab = 'application'; localStorage.setItem('projectTab', 'application')"
                    class="text-lg cursor-pointer"
                    :class="projectTab === 'application' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                    Applications
                </button>

                <button @click="projectTab = 'website'; localStorage.setItem('projectTab', 'website')"
                    class="text-lg cursor-pointer"
                    :class="projectTab === 'website' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                    Websites
                </button>
            </div>

            <!-- All -->
            <div class="" x-show="projectTab === 'all'" x-data="{ open: false }">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center px-4 gap-4">
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            it support ticket system
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <a href="{{ route('project.hr') }}" class="capitalize">
                            hr panel
                        </a>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            kitchen managment system
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            online food ordering system
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            interview panel
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            online hall booking system
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            infolksgroup
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            infolks
                        </h2>
                    </div>
                </div>

                <div x-show="open"
                    class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center px-4 gap-4 mt-4">
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            medrays
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            webfolks
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            dataways
                        </h2>
                    </div>
                    <div
                        class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                        <h2 class="capitalize">
                            medfolks
                        </h2>
                    </div>
                </div>
                <!-- Toggle Button -->
                <div class="flex justify-center items-center">
                    <p @click="open = !open"
                        class="cursor-pointer text-[#feb633] font-semibold my-4 hover:underline">
                        <span x-text="open ? 'Show Less' : 'Show More'"></span>
                    </p>
                </div>


            </div>

            <!-- Applications -->
            <div x-show="projectTab === 'application'"
                class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center px-4 gap-4">
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        it support ticket system
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        hr panel
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        kitchen managment system
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        online food ordering system
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        interview panel
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        online hall booking system
                    </h2>
                </div>
            </div>

            <!-- Websites -->
            <div x-show="projectTab === 'website'"
                class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 place-items-center px-4 gap-4">
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        infolksgroup
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        infolks
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        medrays
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        webfolks
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        dataways
                    </h2>
                </div>
                <div
                    class="flex justify-center items-center border rounded-md border-[#feb633] shadow-md w-full h-[15rem]">
                    <h2 class="capitalize">
                        medfolks
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="my-10 xl:px-10 container mx-auto scroll-mt-52" id="contact">
        <div class="flex flex-col justify-center items-center gap-2">
            <h2 class="text-center text-[#32333c] text-2xl lg:text-4xl font-bold capitalize">
                Contact Me
            </h2>
            <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
        </div>

        <div class="py-10 grid lg:grid-cols-3 gap-5 px-4">
            <div class="flex flex-col lg:gap-5 w-full text-[#727b86] text-sm lg:text-base">
                <h2 class="font-semibold text-black text-xl">Contact Info</h2>
                <div class="flex items-center gap-2 py-2">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>

                    </p>
                    <p>
                        Palakkad, Kerala, India
                    </p>
                </div>

                <div class="flex items-center gap-2 py-2">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path
                                d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>

                    </p>
                    <p>
                        riyasmuhammed306@gmail.com
                    </p>
                </div>

                <div class="flex items-center gap-2 py-2">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </p>
                    <p>
                        8089999424
                    </p>
                </div>

                <div class="flex flex-col gap-2 py-2">
                    <p class="text-black text-lg">
                        Follow me
                    </p>
                    <div class="flex gap-x-2 items-center">
                        <p><i class="fa-brands w-6 h-6 hover:text-[#FEC110] fa-instagram"></i></p>
                        <p><i class="fa-brands w-6 h-6 hover:text-[#FEC110] fa-facebook"></i></p>
                        <p><i class="fa-brands w-6 h-6 hover:text-[#FEC110] fa-x-twitter"></i></p>
                    </div>
                </div>
            </div>

            <div class="col-span-2 w-full text-sm lg:text-base">
                <form action="">
                    <div class="w-full flex flex-col gap-2 pb-4">
                        <label for="name">
                            Name
                        </label>
                        <input id="name" type="text"
                            class="w-full px-4 border shadow-md rounded-md border-transparent py-2 focus:outline-none focus-within:ring-2 focus:ring-[#FEC110]"
                            placeholder="Type your name" required>
                    </div>
    
                    <div class="grid lg:grid-cols-2 gap-4 py-4">
                        <div class="w-full flex flex-col gap-2">
                            <label for="phone">
                                Phone Number
                            </label>
                            <input id="phone" type="text"
                                class="w-full px-4 border shadow-md rounded-md border-transparent py-2 focus:outline-none focus-within:ring-2 focus:ring-[#FEC110]"
                                placeholder="Type your number" required>
                        </div>
    
                        <div class="w-full flex flex-col gap-2">
                            <label for="email">
                                Email
                            </label>
                            <input id="email" type="text"
                                class="w-full px-4 border shadow-md rounded-md border-transparent py-2 focus:outline-none focus-within:ring-2 focus:ring-[#FEC110]"
                                placeholder="Type your email" required>
                        </div>
                    </div>
    
                    <div class="w-full flex flex-col gap-2 py-4">
                        <label for="message">Message</label>
                        <textarea id="message" name="message"
                            class="shadow-md rounded-md px-4 py-1 focus:outline-none focus-within:ring-2 focus:ring-[#FEC110]" rows="6"
                            placeholder="Type your message here"></textarea>
                    </div>
    
                    <button type="submit"
                        class="py-3 my-5 cursor-pointer flex justify-center items-center w-fit px-4 lg:px-6 shadow-md bg-[#FEC110] text-white rounded-full hover:bg-black transition ease-in-out delay-150 duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('footer')


    <div class="hidden">
        <section class="md:hidden px-4 py-10" id="experience" x-data="{ activeTabMobile: 'experience' }">
            <div class="flex flex-col justify-center items-center gap-2">
                <h2 class="text-center text-[#32333c] text-4xl font-bold capitalize">
                    People i've worked with
                </h2>
                <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
            </div>

            <div class="flex justify-center gap-x-5 py-8">
                <button @click="activeTabMobile = 'experience'; localStorage.setItem('activeTabMobile', 'experience')"
                    class="text-lg cursor-pointer"
                    :class="activeTabMobile === 'experience' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                    Experience
                </button>

                <button @click="activeTabMobile = 'education'; localStorage.setItem('activeTabMobile', 'education')"
                    class="text-lg cursor-pointer"
                    :class="activeTabMobile === 'education' ? 'text-[#feb633]' : 'text-[#8a91ac]'">
                    Education
                </button>
            </div>

            <div class="flex flex-col w-full">
                <div class="flex items-center gap-4">
                    <div
                        class="flex h-28 w-28 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                        <p>Present</p>
                        <p>|</p>
                        <p>2021</p>
                    </div>

                    <div class="">
                        <h2 class="">INFOLKS PVT LTD</h2>
                        <p class="text-[#32333c] italic">Full Stack Developer</p>
                    </div>
                </div>

                <div class="h-20 w-0.5 bg-[#8a91ac] flex justify-start translate-x-14"></div>

                <div class="flex items-center gap-4">
                    <div
                        class="flex h-28 w-28 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                        <p>Present</p>
                        <p>|</p>
                        <p>2021</p>
                    </div>

                    <div class="flex flex-col flex-wrap">
                        <h2 class="text-xs">FLEMING EMBEDDED AND SOFTWARE SOLUTIONS</h2>
                        <p class="text-[#32333c] italic">Full Stack Developer</p>
                    </div>
                </div>
            </div>
        </section>








    </div>
</body>

</html>
