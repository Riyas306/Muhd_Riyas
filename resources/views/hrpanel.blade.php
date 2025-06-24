<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('navbar')
    <div class="w-full h-screen flex justify-center items-center">
        <h2 class="text-2xl">HR PANEL</h2>
    </div>
    <div class="container mx-auto py-5 px-10">
        <!-- Role -->
        <div class="">
            <p class="py-2 font-semibold">
                Role :
            </p>

            <p class="py-2 px-4 rounded-full w-fit ring-1 ring-[#feca34] text-gray-400 shadow-md">
                Full Stack Developer (Solo)
            </p>
        </div>

        <!-- Stack -->
        <div class="py-5">
            <p class="py-2 font-semibold">
                Stack :
            </p>

            <div class="flex flex-wrap gap-4 items-center">
                <p class="py-2 px-4 rounded-full w-fit ring-1 ring-[#feca34] text-gray-400 shadow-md">
                    Laravel
                </p>

                <p class="py-2 px-4 rounded-full w-fit ring-1 ring-[#feca34] text-gray-400 shadow-md">
                    Tailwind
                </p>

                <p class="py-2 px-4 rounded-full w-fit ring-1 ring-[#feca34] text-gray-400 shadow-md">
                    Alpaine.Js
                </p>

                <p class="py-2 px-4 rounded-full w-fit ring-1 ring-[#feca34] text-gray-400 shadow-md">
                    MySql
                </p>

                <p class="py-2 px-4 rounded-full w-fit ring-1 ring-[#feca34] text-gray-400 shadow-md">
                    Java Script
                </p>
            </div>
        </div>

        <!-- Description -->
        <div class="py-5">
            <p class="py-2 font-semibold">
                Description
            </p>

            <p class="text-gray-400">
                Developed a comprehensive Admin Panel for HR management, featuring user
                data maintenance, attendance tracking, user authentication, role-based permissions, and
                observer functionality.
            </p>
        </div>

        <!-- Responsibilities -->
        <div class="py-5">
            <p class="py-2 font-semibold">
                Responsibilities
            </p>

            <ul class="list-disc px-5">
                <li class="py-2">
                    Designed and implemented the user interface using Tailwind CSS and Alpine.js, ensuring a
                    responsive and intuitive experience.
                </li>

                <li class="py-2">
                    Developed backend functionality with Laravel, including user authentication and role
                    management.
                </li>

                <li class="py-2">
                    Integrated APIs to facilitate communication between the front end and backend services.
                </li>

                <li class="py-2">
                    Utilized MySQL for data management, ensuring efficient storage and retrieval of user data
                    and attendance records.
                </li>
            </ul>
        </div>
    </div>

    @include('footer')
</body>

</html>
