<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resource/js/app.js')

    <title>Welcome</title>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased ">

    <main>
        <div class="flex flex-col items-center justify-center bg-white dark:bg-gray-900 h-screen ">
            <h1 class="text-3xl  text-center text-gray-700 dark:text-white pb-2">Welcome!</h1>
            <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white pb-3"> {{ $email }} </h2>
            <p class="text-center text-gray-700 dark:text-white pb-4">
                <b> Your subscription are Ready!</b> 
            </p>

            <pre>
Is a pleasure for us! When the ajfero.com app is ready we will tell you!
            </pre> 

        </div>
    </main>

</body>

</html>