<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex bg-gray-100 h-full">
    <aside
        class="fixed top-0 left-0 z-30 border-r border-gray-300 hidden lg:block py-2 px-4 w-[250px] bg-white h-screen">
        <header class="text-center">
            <img src="{{asset('img/logo2.jpg')}}" alt="">
        </header>
        <hr class="my-2 border-gray-300">
        <div class="my-2">
            <div>
                <div class="text-slate-400  text-sm">MENU UTAMA</div>
                <div>
                    <a href="/admin/dashboard"
                        class="text-sm flex items-center gap-4 text-slate-600 py-2 px-4 block hover:text-white hover:bg-green-700 rounded-sm">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                        </svg>
                        Dashboard
                    </a>
                </div>
                <div>
                    <a href="/transactions"
                        class="text-sm flex items-center gap-4 text-slate-600 block py-2 px-4 hover:text-white hover:bg-green-700 rounded-sm">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                        </svg>
                        Transaksi
                    </a>
                </div>
                <div>
                    <a href="/transactions/history"
                        class="text-sm flex items-center gap-4 text-slate-600 block py-2 px-4 hover:text-white hover:bg-green-700 rounded-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                        </svg>

                        Riwayat Transaksi
                    </a>
                </div>
            </div>
        </div>

        <div class="my-2">
            <div class="mb-2 text-slate-400  text-sm">KELOLA DATA</div>
            <div>
                <div class="mb-2 text-sm flex gap-3 items-center text-slate-700">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="text-slate-500 size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                    <p>Data Master</p>
                </div>
                <ul>
                    <li>
                        <a href="/admin/users"
                            class="text-sm flex items-center gap-4 text-slate-600 block py-2 px-4 hover:text-white hover:bg-green-700 rounded-sm">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                            Pengguna
                        </a>
                    </li>
                    <li>
                        <a href="/admin/customers"
                            class="text-sm flex items-center gap-4 text-slate-600 block py-2 px-4 hover:text-white hover:bg-green-700 rounded-sm">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>

                            Pelanggan
                        </a>
                    </li>
                    <li>
                        <a href="/admin/services"
                            class="text-sm flex items-center gap-4 text-slate-600  py-2 px-4 block hover:text-white hover:bg-green-700 rounded-sm">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>


                            Layanan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="my-2">
            <div class="text-sm mb-2 text-slate-400 text-sm">LOGOUT & AUDIT</div>
            <ul>
                <li>
                    <a href="/admin/petugas"
                        class="text-sm flex items-center gap-4 text-slate-700 block py-2 px-4 hover:text-white hover:bg-green-700 rounded-sm">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                        Log Activity
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-sm flex items-center gap-4 text-slate-700 block py-2 px-4 hover:text-white hover:bg-green-700 rounded-sm">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                        Logout
                    </a>

                </li>
            </ul>
        </div>
    </aside>
    <main class="min-w-0 flex-1 lg:pl-60">
        <nav class="mb-2 p-2 lg:p-4 flex items-center rounded-sm h-16 bg-white border border-gray-300 rounded-sm">
            <div class="md:hidden flex flex-1 items-center">
                <button class="text-cyan-600 cursor-pointer">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <input type="search" placeholder="Cari Petugas..."
                    class="text-xs md:text-base block flex-1 border border-gray-300 rounded-sm py-2 px-2 mx-2">
            </div>
            <button class="hidden md:block cursor-pointer ms-auto">
                <div
                    class="w-12 h-12 rounded-full bg-slate-300 text-white font-bold text-sm flex items-center justify-center shrink-0">
                    BD
                </div>
            </button>
        </nav>
        <div>
            @yield('content')
        </div>
        @if(session('success'))
        <div id="success-modal" class="fixed top-15 px-3 md:px-0 right-0 md:top-50 z-[999] -translate-y-1/2">
            <div class="flex gap-2 items-center overflow-hidden rounded-md border border-gray-200 bg-white shadow-md">
                <div class="self-stretch flex items-center justify-center bg-green-500 p-3 text-white">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                </div>

                <div class="flex items-center gap-3">
                    <div class="pr-4">
                        <p class=text-base font-semibold text-gray-800">
                            Success
                        </p>
                        <p class="text-xs md:text-sm text-slate-500">
                            {{session('success')}}
                        </p>
                    </div>
                </div>

                <button onclick="closeModal('success-modal')" type="button"
                    class="cursor-pointer flex h-full items-center border-l border-gray-200 px-4 py-3 text-sm font-medium text-gray-500 transition hover:bg-gray-50 hover:text-gray-700">
                    Close
                </button>
            </div>
        </div>
        @endif
        <div class="hidden fixed top-15 px-3 md:px-0 right-0 md:top-50 z-[999] -translate-y-1/2">
            <div class="flex gap-2 items-center overflow-hidden rounded-md border border-gray-200 bg-white shadow-md">
                <div class="self-stretch flex items-center justify-center bg-red-500 p-3 text-white">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>


                </div>

                <div class="flex items-center gap-3">
                    <div class="pr-4">
                        <p class=text-base font-semibold text-gray-800">
                            Error
                        </p>
                        <p class="text-xs md:text-sm text-slate-500">
                            Your email address invalid
                        </p>
                    </div>
                </div>

                <button type="button"
                    class="cursor-pointer flex h-full items-center border-l border-gray-200 px-4 py-3 text-sm font-medium text-gray-500 transition hover:bg-gray-50 hover:text-gray-700">
                    Close
                </button>
            </div>
        </div>
    </main>

    <script>
    function showModal(id, path, btn) {
        const modal = document.getElementById(id)
        if (modal.classList.contains('hidden')) {
            if (path) {
                const form = modal.querySelector('form')
                form.action = path
                if (btn) {
                    form.querySelector('input[name="_method"]').value = "PUT"
                    const inputs = modal.querySelectorAll('.form-control')
                    inputs.forEach(input => {
                        input.value = btn.getAttribute(`data-${input.name}`)
                    });
                }
            }
            modal.classList.remove('hidden')
        }
    }

    function closeModal(id) {
        const modal = document.getElementById(id)
        if (!modal.classList.contains('hidden')) {
            const form = modal.querySelector('form')
            if (form) {
                form.reset()
                form.action = "#"
                form.querySelector('input[name="_method"]').value = "POST"
            }
            modal.classList.add('hidden')
        }
    }
    </script>
    @stack('scripts')
</body>

</html>