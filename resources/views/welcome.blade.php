<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="">
        <div class="w-full h-screen text-white relative">
            <div class="grid grid-cols-2 place-items-center w-full h-full">
                <div class="flex flex-col">
                    <p class="text-4xl ">Muhammed Riyas A</p>
                    <div class="w-10 h-0.5 my-5 bg-[#282828]"></div>
                    <p>Software Developer</p>
                </div>

                <div class="">

                </div>
            </div>
            <div class="absolute left-5 bottom-20">
                <div class="flex flex-col justify-center items-center gap-y-5">
                    <div class="h-10 w-0.5 bg-[#282828]"></div>
                    <div class="">
                        aaa
                    </div>
                    <div class="">
                        bbb
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
