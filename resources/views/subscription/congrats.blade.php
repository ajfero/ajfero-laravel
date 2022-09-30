<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite('resource/js/app.js')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Welcome</title>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        px{
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }
    </style>

</head>

<body class="antialiased ">

    <section class="flex flex-col items-center mx-auto justify-center bg-white dark:bg-gray-900 h-screen">
            <h1 class="text-3xl text-center text-gray-700 dark:text-white pb-4">Welcome!</h1>
            <h2 class=" text-xl md:text-2xl lg:text-4xl font-bold text-center text-gray-700 dark:text-white pb-6 "> {{ $email }} </h2>
            <p class="text-center text-gray-700 dark:text-white pb-4">
                <b> Your subscription are Ready!</b> 
            </p>
            <px class="text-center text-gray-700 dark:text-white mx-5 pb-5 ">
                Is a pleasure for us! When the ajfero.com app is ready we will tell you!
            </px> 
    </section>

</body>

</html>
