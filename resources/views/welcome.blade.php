<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="flex md:items-center justify-center h-screen">
        <div class="bg-white md:flex md:gap-3 md:justify-center md:w-7xl md:h-[550px]">
            <div class="flex-1">
                <div class="w-full h-full">
                    <img class="rounded-sm h-full" src="{{asset('img/ilustrasi2.jpg')}}" alt="ilustrasi">
                </div>
            </div>
            <div class="p-3 md:p-8 flex justify-center items-center flex-col flex-1">
                <div class="py-4">
                    <p class="text-center text-lg md:mb-2">👟Laundry-Sepatu</p>
                    <p class="text-center text-xl md:text-3xl font-semibold text-teal-900 font-sans">Hai, selamat datang
                        kembali
                    </p>

                </div>
                <div class="md:mt-3 w-full">
                    <div class="hidden">
                        <form action="#">
                            <div class="mb-3">
                                <label class="font-sans block md:text-lg mb-2" for="username">Username</label>
                                <input id="username" name="username"
                                    class="focus:outline-gray-300 w-full border border-gray-200 rounded-sm px-4 py-2 md:py-3"
                                    type="text" placeholder="Masukan Username" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="block md:text-lg mb-2" for="password">Password</label>
                                <input id="password" name="password"
                                    class="focus:outline-gray-300 w-full border border-gray-200 rounded-sm px-4 py-2 md:py-3"
                                    type="password" placeholder="Masukan Password" autocomplete="off">
                            </div>

                            <button
                                class="mt-3 bg-teal-700 w-full px-4 py-2 md:py-3 text-white font-bold rounded-sm cursor-pointer hover:bg-teal-600">Login</button>
                        </form>
                        <p class="my-2 text-center text-teal-500">Belum punya akun? <span
                                class="underline font-semibold hover text-teal-600 cursor-pointer">Register</span></p>
                    </div>
                    <div>
                        <form action="#">
                            <div class="mb-3">
                                <label class="font-sans block md:text-lg mb-2" for="username">Name</label>
                                <input id="name" name="name"
                                    class="focus:outline-gray-300 w-full border border-gray-200 rounded-sm px-4 py-2 md:py-3"
                                    type="text" placeholder="Masukan Nama anda" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="font-sans block md:text-lg mb-2" for="username">Username</label>
                                <input id="username" name="username"
                                    class="focus:outline-gray-300 w-full border border-gray-200 rounded-sm px-4 py-2 md:py-3"
                                    type="text" placeholder="Masukan Username" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="block md:text-lg mb-2" for="password">Password</label>
                                <input id="password" name="password"
                                    class="focus:outline-gray-300 w-full border border-gray-200 rounded-sm px-4 py-2 md:py-3"
                                    type="password" placeholder="Masukan Password" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="block md:text-lg mb-2" for="password">Number Telpon</label>
                                <input id="no_telp" name="no_telp"
                                    class="focus:outline-gray-300 w-full border border-gray-200 rounded-sm px-4 py-2 md:py-3"
                                    type="text" placeholder="Masukan Number Telpon" autocomplete="off">
                            </div>

                            <button
                                class="mt-3 bg-teal-700 w-full px-4 py-2 md:py-3 text-white font-bold rounded-sm cursor-pointer hover:bg-teal-600">Login</button>
                        </form>
                        <p class="my-2 text-center text-teal-500">Sudah punya akun? <span
                                class="underline font-semibold hover text-teal-600 cursor-pointer">Register</span></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>