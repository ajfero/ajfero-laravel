<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AjFernandez - Subs</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class="antialiased">

    {{-- Main --}}
    <main>
        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">

                {{-- Left --}}
                <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80)">
                    <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                        <div>
                            <p class="max-w-xl mt-3 text-gray-300"> Welcome tech travellers!</p>
                            <p class="mt-3 text-gray-300 "> </p>
                            <h2 class="text-4xl font-bold text-white"> <span class="text-xl"> I'm</span> Anthony F.</h2>
                            <p class="max-w-xl mt-3 text-gray-300"> Anthony Fernandez, is a Personal Brand with the
                                purpose of sharing projects and skills developed over time in digital platforms.
                                Oriented as a portfolio in fundamentals and bases of Electronic Engineering and Backend
                                Developer. Enjoy it!
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right --}}
                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                    <div class="flex-1">

                        {{-- about --}}
                        <div class="text-center">
                            <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white">ajfero.com </h2>
                            <h2 class="text-4xl font-bold text-center text-gray-700 dark:text-white"> in Construction!</h2>
                            <p class="mt-3 text-gray-500 dark:text-gray-300">You can subscribe to me newsletter, and let
                                you know when this web is ready. </p>
                        </div>

                        {{-- form --}}
                        <form class="mt-8" action="{{ route( 'home.store' ) }}" method="POST" enctype="multipart/form-data" id="subscribeForm">
                            @csrf
                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label class="text-sm text-gray-600 dark:text-gray-200" for="email">Your Email</label>
                                </div>
                                <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-purple-400 dark:focus:border-purple-400 focus:ring-purple-400 focus:outline-none focus:ring focus:ring-opacity-40" id="email" name="email" type="email" placeholder="example@example.com" />
                            </div>
                            @error('email')
                            <span class=" text-sm text-red-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <button type="submit" id="buttonSubmit"></button>
                        </form>



                        {{-- follow me --}}
                        <div class=" px-4 mt-5">
                            <p class="text-sm text-center text-gray-400"> Fallow me on social medias.</p>
                            <div class="grid grid-cols-6 my-4 mx-12 ">

                                <!-- Github -->
                                <a class="rounded-full outline-none focus:outline-none flex justify-center" type="button" href="http://www.github.com/ajfero">
                                    <svg class="text-gray-700 transition duration-700 ease-in-out fill-current dark:text-gray-400 hover:text-black dark:hover:text-white" role="img" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Github</title>
                                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                                    </svg>
                                </a>

                                <!-- Gitlab -->
                                <a class=" rounded-full outline-none focus:outline-none flex justify-center" type="button" href="http://www.gitlab.com/ajfero">
                                    <svg class="text-gray-700 transition duration-700 ease-in-out fill-current dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 26" fill="none">
                                        <path d="M27.0514 10.29L27.0135 10.193L23.3395 0.604746C23.2648 0.416821 23.1324 0.257404 22.9615 0.149367C22.7904 0.0431666 22.5908 -0.00798327 22.3898 0.00282433C22.1887 0.0136319 21.9958 0.0858765 21.8371 0.209804C21.6801 0.337289 21.5663 0.510035 21.511 0.704536L19.0303 8.29418H8.98527L6.50458 0.704536C6.45078 0.508976 6.33668 0.335363 6.17851 0.208398C6.0198 0.0844707 5.82689 0.0122261 5.62582 0.00141854C5.42474 -0.00938906 5.2252 0.0417608 5.05412 0.147962C4.88353 0.256434 4.75129 0.415712 4.67604 0.60334L0.995063 10.1874L0.95852 10.2844C0.429638 11.6662 0.364356 13.1826 0.772517 14.6048C1.18068 16.0271 2.04015 17.278 3.22136 18.1692L3.23401 18.179L3.26774 18.2029L8.8644 22.3941L11.6332 24.4896L13.3198 25.763C13.5171 25.9128 13.758 25.9939 14.0057 25.9939C14.2534 25.9939 14.4943 25.9128 14.6916 25.763L16.3782 24.4896L19.147 22.3941L24.7774 18.1776L24.7914 18.1663C25.97 17.2751 26.8274 16.0254 27.235 14.6051C27.6425 13.1848 27.5781 11.6705 27.0514 10.29V10.29Z"></path>
                                        <path d="M27.0472 10.2923L27.0092 10.1953C25.219 10.5628 23.5321 11.321 22.0689 12.416L14 18.5172C16.7477 20.5959 19.1399 22.402 19.1399 22.402L24.7703 18.1855L24.7843 18.1743C25.9646 17.283 26.8234 16.0325 27.2315 14.611C27.6396 13.1895 27.5749 11.6739 27.0472 10.2923Z"></path>
                                        <path d="M8.86719 22.4004L11.636 24.496L13.3226 25.7694C13.5199 25.9191 13.7608 26.0002 14.0085 26.0002C14.2562 26.0002 14.4971 25.9191 14.6944 25.7694L16.3809 24.496L19.1498 22.4004C19.1498 22.4004 16.7548 20.5887 14.0071 18.5156C11.2593 20.5887 8.86719 22.4004 8.86719 22.4004Z"></path>
                                        <path d="M5.93395 12.4138C4.47195 11.3166 2.78538 10.5563 0.995063 10.1875L0.95852 10.2845C0.429638 11.6664 0.364356 13.1827 0.772517 14.605C1.18068 16.0272 2.04015 17.2782 3.22136 18.1693L3.23401 18.1791L3.26774 18.203L8.8644 22.3942C8.8644 22.3942 11.2537 20.5881 14.0043 18.5094L5.93395 12.4138Z"></path>
                                        <title>Gitlab</title>
                                    </svg>
                                </a>

                                <!-- Twitter -->
                                <a class=" rounded-full outline-none focus:outline-none flex justify-center" type="button" href="http://www.twitter.com/ajfero">
                                    <svg class="text-gray-700 transition duration-700 ease-in-out fill-current dark:text-gray-400 hover:text-cyan-400 dark:hover:text-cyan-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 23" fill="none">
                                        <path d="M8.78874 23C5.55374 23 2.53817 22.0591 0 20.4356C2.15499 20.5751 5.95807 20.2411 8.32358 17.9848C4.76508 17.8215 3.16026 15.0923 2.95094 13.926C3.25329 14.0426 4.6953 14.1826 5.50934 13.856C1.4159 12.8296 0.787928 9.23732 0.927477 8.14097C1.695 8.67749 2.99745 8.8641 3.50913 8.81744C-0.305207 6.08823 1.06703 1.98276 1.74151 1.09635C4.47882 4.88867 8.5812 7.01857 13.6564 7.13704C13.5607 6.71736 13.5102 6.28042 13.5102 5.83164C13.5102 2.61092 16.1134 0 19.3247 0C21.0025 0 22.5144 0.712754 23.5757 1.85284C24.6969 1.59011 26.3843 0.975068 27.2092 0.443205C26.7934 1.93611 25.4989 3.18149 24.7159 3.64308C24.7224 3.65878 24.7095 3.62731 24.7159 3.64308C25.4037 3.53904 27.2648 3.18137 28 2.68256C27.6364 3.52125 26.264 4.91573 25.1377 5.69642C25.3473 14.9381 18.2765 23 8.78874 23Z"></path>
                                        <title>Twitter</title>
                                    </svg>
                                </a>

                                <!-- Instagram -->
                                <a class=" rounded-full outline-none focus:outline-none flex justify-center" type="button" href="https://www.instagram.com/ajferox/">
                                    <svg class="text-gray-700 transition duration-700 ease-in-out fill-current dark:text-gray-400 hover:text-pink-600 dark:hover:text-pink-600" role="img" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                                    </svg>
                                </a>

                                <!-- Linkdin -->
                                <a class=" rounded-full outline-none focus:outline-none flex justify-center" type="button" href="https://www.linkedin.com/in/Ajfero/">
                                    <svg class="text-gray-700 transition duration-700 ease-in-out fill-current dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-500" role="img" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>LinkedIn</title>
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                                    </svg>
                                </a>

                                <!-- Web -->
                                <p class=" pl-8 text-md text-center text-gray-400 flex justify-center">
                                    <a class="text-blue-500 focus:outline-none focus:underline hover:underline" href="https://ajfero.com">@ajfero</a>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Script -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        const input = document.getElementById('email');
        const sendForm = document.querySelector('#buttonSubmit');
        input.addEventListener('keyup'), (event) => {

            if (event.keyCode === 13) {
                sendForm.click()
            }
        }

    </script>

</body>
</html>
