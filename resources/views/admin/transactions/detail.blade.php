@extends('admin.layout')
@section('content')
<div class="relative px-1 py-2 md:py-4 md:px-8">
    <div>
        <!-- Ini section header -->
        <header class="shadow-sm rounded-sm p-4 mb-4 bg-cyan-700">
            <nav class="flex items-center justify-between">
                <div>
                    <span class="text-white font-semibold">#INV-20261004-001</span>
                    <p class="text-slate-400 text-xs"> <span class="text-slate-300">Budi Santoso - </span>4 Oktober,
                        10:30 WIB
                    </p>
                </div>
                <div>
                    <button class="text-white">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </nav>
        </header>


        <div class="grid grid-cols-5 gap-4">
            <!-- Ini div tracking -->
            <div class="shadow-sm p-3 bg-white rounded-sm col-span-6 min-h-[150px]">
                <div class="flex mb-3 items-center justify-between text-xs">
                    <div class="flex items-center gap-1">
                        <div class="text-cyan-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <p class="uppercase font-semibold text-slate-500">
                            PROGRES OPERASIONAL
                        </p>
                    </div>
                    <p class="font-semibold text-slate-700">
                        <span class="text-slate-400">Estimasi Selesai: </span>
                        5 Okt, 16:00 WIB
                    </p>
                </div>

                <!-- Ini section tracking -->
                <div class="px-2 md:px-8">
                    <div class="relative flex items-center justify-between md:justify-around">
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[2px] bg-slate-200 -z-0"></div>
                        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-2/5 h-[2px] bg-green-700 -z-0"></div>

                        <div class="relative flex flex-col items-center">
                            <!-- Icon -->
                            <div
                                class="shadow-lg mb-1 flex w-8 h-8 md:w-10 md:h-10  items-center justify-center rounded-full border border-green-700 bg-green-700 text-white font-semibold">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>

                            <!-- Text -->
                            <div
                                class="absolute top-11 text-center w-[max-content] block whitespace-nowrap text-xs font-semibold text-slate-700 text-center">
                                <span class="block whitespace-nowrap text-xs font-semibold text-slate-700">
                                    Diterima
                                </span>
                                <span class="block whitespace-nowrap text-xs text-slate-400">
                                    04 Okt 10:30
                                </span>
                            </div>
                        </div>

                        <div class="relative flex flex-col items-center">
                            <div
                                class="shadow-lg mb-1 w-8 h-8 md:w-10 md:h-10 rounded-full bg-green-700 text-white font-semibold border border-green-700 flex items-center justify-center">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div
                                class="absolute top-11 text-center w-[max-content] block whitespace-nowrap text-xs font-semibold text-slate-700">
                                <span class="text-slate-700 font-semibold block text-xs">Dicuci</span>
                                <span class="text-slate-400 text-xs">05, Okt 07:00</span>
                            </div>
                        </div>

                        <div class="relative flex flex-col items-center">
                            <div
                                class="shadow-lg mb-1 w-8 h-8 md:w-10 md:h-10 rounded-full bg-white text-white font-semibold border border-orange-700 flex items-center justify-center">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </div>
                            <div
                                class="absolute top-11 text-center w-[max-content] block whitespace-nowrap text-xs text-slate-700">
                                <span class="text-orange-400 font-semibold block text-xs">Dikeringkan</span>
                                <span class="text-orange-300 text-xs">Sedang berlangsung</span>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center">
                            <div
                                class="shadow-lg mb-1 w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-200 text-gray-500 font-semibold border border-gray-500 flex items-center justify-center">
                                4
                            </div>
                            <div
                                class="absolute top-11 text-center w-[max-content] block whitespace-nowrap text-xs font-semibold text-slate-700">
                                <span class="text-slate-700 font-semibold block text-xs">Quality Check</span>
                                <span></span>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center">
                            <div
                                class="shadow-lg mb-1 w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-200 text-gray-500 font-semibold border border-gray-500 flex items-center justify-center">
                                5
                            </div>
                            <div
                                class="absolute top-11 text-center w-[max-content] block whitespace-nowrap text-xs font-semibold text-slate-700">
                                <span class="text-slate-700 font-semibold block text-xs">Selesai</span>
                                <span></span>
                            </div>
                        </div>
                        <div class="relative flex flex-col items-center">
                            <div
                                class="shadow-lg mb-1 w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-200 text-gray-500 font-semibold border border-gray-500 flex items-center justify-center">
                                6
                            </div>
                            <div
                                class="absolute top-11 text-center w-[max-content] block whitespace-nowrap text-xs font-semibold text-slate-700">
                                <span class="text-slate-700 font-semibold block text-xs">Diambil</span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ini div detail sepatu -->
            <div class="shadow-sm p-3 bg-white rounded-sm col-span-6 md:col-span-3 ">
                <div class="flex items-center justify-between text-xs">
                    <div class="flex items-center gap-1">
                        <div class="text-cyan-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>

                        </div>
                        <p class="uppercase font-semibold text-slate-500">Detail Item Sepatu</p>
                    </div>
                    <div class="p-2 font-semibold text-cyan-600 bg-cyan-100 rounded-lg">
                        <p>1 Pasang Sepatu</p>
                    </div>
                </div>
                <hr class="my-2 border border-gray-100">

                <div>
                    <div class="flex mt-2 gap-2 text-xs">
                        <div>
                            <img class="w-35 rounded-lg" src="{{asset('img/ilustrasi.jpg')}}" alt="ilustrasi">
                        </div>
                        <div>
                            <p class="font-semibold mb-1">NIKE Air Force</p>
                            <p class="text-slate-700 mb-1">
                                <span class="text-slate-300">Warna Utama:</span>
                                Tripple White
                            </p>
                            <div class="rounded-sm p-2 bg-orange-50 border border-orange-200 text-orange-400">
                                <div class="flex items-center gap-1 text-orange-700">
                                    <div>
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                        </svg>

                                    </div>
                                    <p class="font-semibold">Catatan</p>
                                </div>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia adipisci modi quo
                                    dolorem laudantium officiis?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ini div status pembayaran -->
            <div class="shadow-sm p-3 bg-white rounded-sm col-span-6 md:col-span-3 max-h-[185px]">
                <div class="flex items-center justify-between text-xs">
                    <div class="flex items-center gap-1">
                        <div class="text-cyan-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                            </svg>


                        </div>
                        <p class="uppercase font-semibold text-slate-500">Status Pembayaran</p>
                    </div>

                    <div
                        class="px-2 py-1 gap-1 flex items-center font-semibold text-emerald-600 bg-emerald-100 rounded-lg">
                        <div>
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <p>Lunas</p>
                    </div>
                </div>
                <hr class="my-2 border border-gray-100">
                <div class="text-xs">
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-slate-500">Total Tagihan</p>
                        <p class="font-semibold text-red-400">Rp.
                            0</p>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-slate-500">Jumlah Dibayar</p>
                        <p class="font-semibold text-emerald-600">Rp. 0</p>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-slate-500">Sisa Tagihan</p>
                        <p class="font-semibold text-slate-500">Rp. 0</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-slate-500">Metode Pembayaran</p>
                        <p class="text-cyan-500 font-semibold">QRIS (Gopay)</p>
                    </div>
                </div>
            </div>

            <!-- Ini div rincian biaya -->
            <div class="shadow-sm p-3 bg-white rounded-sm col-span-6 md:col-span-3">
                <div class="flex items-center justify-between text-xs">
                    <div class="flex items-center gap-1">
                        <div class="text-cyan-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                            </svg>


                        </div>
                        <p class="uppercase font-semibold text-slate-500">Rincian Layanan & Biaya</p>
                    </div>
                </div>
                <hr class="my-2 border border-gray-100">
                <div>
                    <table class="text-xs rounded-sm w-full">
                        <thead class="text-xs text-slate-400 font-semibold">
                            <tr>
                                <th class="uppercase p-2 text-left">Layanan</th>
                                <th class="uppercase p-2 text-center">QTY</th>
                                <th class="uppercase p-2 text-right">Harga Satuan</th>
                                <th class="uppercase p-2 text-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 text-left">Cuci standar</td>
                                <td class="p-2 text-center">2</td>
                                <td class="p-2 text-right">Rp. 20.000</td>
                                <td class="p-2 text-right">Rp. 40.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Ini div informasi lengkap pelanggan -->
            <div class="shadow-sm mb-8 md:mb-0 p-3 bg-white rounded-sm col-span-6 md:col-span-3 max-h-[185px]">
                <div class="flex items-center justify-between text-xs">
                    <div class="flex items-center gap-1">
                        <div class="text-cyan-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="text-cyan-700 size-4 md:size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>


                        </div>
                        <p class="uppercase font-semibold text-slate-500">Informasi Pelanggan</p>
                    </div>
                </div>
                <hr class="my-2 border border-gray-100">
                <div class="text-xs">
                    <div class="mb-2">
                        <p class="font-bold text-slate-700">Budi Santoso</p>
                        <p class="text-slate-500">08978887338</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-slate-500">Alamat : </p>
                        <p class="text-slate-500 font-semibold">Jl. Teratai II Puri Indah Lestari</p>
                    </div>
                    <div>
                        <button
                            class="w-full flex items-center justify-center gap-1 text-white font-semibold p-2 bg-emerald-700 rounded-sm">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                            </svg>

                            Hubungi Via WhatsApp
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="text-xs fixed h-15 z-20 w-full left-0 bottom-0 shadow-sm border border-gray-200 bg-white">
        <div class="flex items-center justify-center md:justify-end gap-2 h-full p-4">
            <div>
                <button
                    class="font-semibold rounded-sm px-2 py-1 bg-slate-300 text-slate-600 flex items-center gap-1 hover:bg-slate-400">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                    </svg>
                    Cetak Nota
                </button>
            </div>
            <div>
                <button
                    class="font-semibold rounded-sm px-2 py-1 bg-cyan-700 text-white flex items-center gap-1 hover:bg-cyan-800">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    Update Progres
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Ini section -->
@endsection