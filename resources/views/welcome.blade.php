<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="">
    <!-- Hero -->
    <section class="bg-[#fbfbfb]">
        <div class="w-full h-[45rem] md:h-screen container mx-auto">
            <div class="grid md:grid-cols-2 md:place-items-center text-[#32333c] w-full h-full">
                <div class="flex flex-col px-4 space-y-4">
                    <p class="text-2xl md:text-4xl font-bold mt-20 md:mt-0">Muhammed Riyas A</p>
                    <p>React & Laravel Developer | Full-Stack Engineer | 4+ Years Experience</p>
                    <button
                        class="py-3 my-5 cursor-pointer flex justify-center items-center w-[14rem] shadow-md bg-[#FEC110] text-white text-xl group hover:bg-white hover:text-[#feb633] border border-[#feb633] transition ease-in-out delay-150 duration-300">
                        Hire Me
                    </button>
                </div>

                <div class="">
                    <img src="{{ asset('images/hero_img-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section class="container mx-auto mt-10 md:my-20">
        <div class="w-full md:flex justify-center items-center gap-x-2">
            <div class="bg-cover bg-center py-16 px-6 w-full relative md:translate-x-[10rem]">
                <img class="" src="{{ asset('images/about_shap_bg.png') }}" alt="">
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 space-2 flex flex-col gap-2">
                    <h2 class="text-[#32333c] text-4xl font-bold text-center">About Me</h2>
                    <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
                </div>
            </div>

            <div class="w-full px-4">
                <p class="text-justify text-[#8a91ac] leading-relaxed">
                    Full-Stack Developer with 4+ years of experience building scalable web applications using Laravel
                    for the backend and React for dynamic,
                    responsive frontends. Skilled in REST API development, Flutter mobile apps, and real-time
                    applications with Firebase. Known for writing clean,
                    maintainable code and collaborating in Agile teams. Open to international roles focused on Laravel,
                    React, or full-stack development.
                </p>

                <div class="flex gap-x-5 items-center">
                    <button
                        class="py-3 my-5 cursor-pointer flex justify-center items-center w-[14rem] shadow-md bg-[#feb633] text-white border border-[#feb633] group hover:bg-white hover:text-[#feb633] transition ease-in-out delay-150 duration-300">
                        View Works
                    </button>

                    <button
                        class="py-3 my-5 cursor-pointer flex justify-center items-center w-[14rem] shadow-md bg-white text-[#feb633] border border-[#feb633] group hover:bg-[#feb633] hover:text-white transition ease-in-out delay-150 duration-300">
                        Download CV
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="container mx-auto my-10 md:my-20">
        <div class="flex flex-col justify-center items-center gap-2">
            <h2 class="text-center text-[#32333c] text-4xl font-bold">
                Services
            </h2>
            <div class="text-center w-20 h-0.5 bg-[#feb633]"></div>
        </div>

        <div class="text-center py-5">What I do.</div>

        <div class="grid md:grid-cols-3 place-items-center gap-5">
            <div
                class="relative w-full border border-[#feb633] shadow-md rounded-md flex flex-col justify-center items-center px-4 gap-2 transition ease-in-out delay-300 duration-150 group h-[14rem]">
                <h2
                    class="font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-20  transition ease-in-out delay-150 duration-200 uppercase">
                    web design
                </h2>
                <p
                    class="opacity-0 group-hover:opacity-100 ease-in-out duration-300 delay-200 text-justify translate-y-5 text-[#8a91ac]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique voluptas minus quos animi! Eaque
                    nam, totam animi ipsam esse alias.
                </p>
            </div>
            <div
                class="relative w-full border border-[#feb633] shadow-md rounded-md flex flex-col justify-center items-center px-4 gap-2 transition ease-in-out delay-300 duration-150 group h-[14rem]">
                <h2
                    class="font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-20 transition ease-in-out delay-150 duration-200 uppercase">
                    frontend
                </h2>
                <p
                    class="opacity-0 group-hover:opacity-100 ease-in-out duration-300 delay-200 text-justify translate-y-5 text-[#8a91ac]">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat esse ea quasi, nam quis obcaecati
                    placeat. Quis placeat quo quos, maiores laudantium totam harum! Earum aliquam perspiciatis delectus
                    debitis nobis.
                </p>
            </div>
            <div
                class="relative w-full border border-[#feb633] shadow-md rounded-md flex flex-col justify-center items-center px-4 gap-2 transition ease-in-out delay-300 duration-150 group h-[14rem]">
                <h2
                    class="font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:-translate-y-20 transition ease-in-out delay-150 duration-200 uppercase">
                    backend
                </h2>
                <p
                    class="opacity-0 group-hover:opacity-100 ease-in-out duration-300 delay-200 text-justify translate-y-5 text-[#8a91ac]">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, architecto? Explicabo amet
                    suscipit nisi consectetur, quasi debitis libero esse hic aspernatur magni, odio dolorum culpa.
                </p>
            </div>
        </div>
    </section>

    <!-- Experiences and Education -->
    <section class="container mx-auto my-10 md:my-20" x-data="{ activeTab: 'experience' }">
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

        <div x-show="activeTab === 'experience'" class="flex w-full flex-col items-center justify-center">
            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute -translate-x-56">
                    <h2 class="text-xl text-[#32333c]">INFOLKS PVT LTD</h2>
                    <p>Full Stack Developer</p>
                </div>
                <div class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>Present</p>
                    <p>|</p>
                    <p>2021</p>
                </div>
            </div>

            <div class="h-20 w-0.5 bg-[#8a91ac]"></div>

            <div class="relative flex w-full items-center justify-center gap-x-10">
                <div class="absolute translate-x-[23rem]">
                    <h2 class="text-xl">FLEMING EMBEDDED AND SOFTWARE SOLUTIONS</h2>
                    <p>Python Intern</p>
                </div>
                <div class="flex h-40 w-40 flex-col items-center justify-center rounded-full border bg-[#feb633] text-white">
                    <p>2015</p>
                    <p>|</p>
                    <p>2020</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
