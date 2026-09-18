@extends('admin.layout')
@section('title', 'Transaksi')
@section('content')
<div class="px-1 md:py-4 md:px-8">
    <div class="grid grid-cols-1 md:grid-cols-6 gap-2 md:gap-5">
        <div class="col-span-1 md:col-span-4">
            <div class="p-4 bg-white rounded-lg border border-gray-300 mb-2 md:mb-4">
                <div class="flex justify-between items-center">
                    <p class="flex items-center gap-2 text-xs md:text-lg font-semibold text-slate-800">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="text-cyan-700 size-4 md:size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        Informasi Pelanggan
                    </p>
                    <button
                        class="text-xs md:text-base rounded-sm cursor-pointer p-1 md:p-2 border border-cyan-600">Pelanggan
                        Baru</button>
                </div>
                <hr class="my-2 border border-gray-100">
                <div class="px-1 md:px-2 flex items-center gap-4">
                    <div
                        class="w-9 h-9 rounded-full bg-cyan-100 text-cyan-700 font-bold text-xs flex items-center justify-center shrink-0">
                        BD
                    </div>
                    <div>
                        <p class="text-xs md:text-base font-semibold text-slate-800">Budiono Siregar</p>
                        <p class="text-xs md:text-base text-gray-500">0897887338</p>
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg border border-gray-300">
                <div class="mb-2 flex justify-between items-center">
                    <p class="flex items-center gap-2 text-xs md:text-lg font-semibold text-slate-800">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="text-cyan-700 size-4 md:size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3 1.5 1.5 3-3.75" />
                        </svg>

                        Order Sepatu
                    </p>
                    <p class="text-xs md:text-lg">4 Order</p>
                </div>
                <hr class="my-2 border border-gray-100">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-4">
                        <div>
                            <img class="w-25 rounded-sm" src="{{asset('img/ilustrasi.jpg')}}" alt="ilustrasi">
                        </div>
                        <div>
                            <p class="text-xs md:text-base text-slate-800 font-semibold">Nike Air Force</p>
                            <p class="text-xs md:text-base text-white bg-blue-300 px-2 rounded-sm w-[max-content]">Deep
                                Clean</p>
                            <p class="text-xs md:text-base text-slate-500">Sol bagian belakang Menguning</p>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs md:text-base text-right mb-2 text-cyan-600">Rp. 35.000</p>
                        <div class="flex gap-2">
                            <button
                                class="text-xs md:text-base text-yellow-500 rounded-sm cursor-pointer p-2 border border-yellow-200">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                            <button
                                class="text-xs md:text-base text-red-500 rounded-sm cursor-pointer p-2 border border-red-200">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2">
            <div class="mb-3 bg-white rounded-lg border border-gray-300 p-4">
                <div class="mb-2 flex justify-between items-center">
                    <p class="text-xs md:text-lg flex items-center gap-2 font-semibold text-slate-800">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="text-cyan-700 size-4 md:size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        Tambah Order
                    </p>
                </div>
                <hr class="my-2 border border-gray-100">
                <div>
                    <form action="#">
                        <div class="mb-2">
                            <label class="text-xs md:text-base mb-2 block" for="#">Nama / Tipe sepatu</label>
                            <input class="text-xs md:text-base w-full border border-gray-200 rounded-sm p-2" type="text"
                                placeholder="Contoh : Vans old school">
                        </div>
                        <div class="mb-2">
                            <label class="text-xs md:text-base mb-2 block" for="#">Layanan Laundry</label>
                            <select class="text-xs md:text-base w-full border border-gray-200 rounded-sm p-2">
                                <option value="#">Standar</option>
                                <option value="#">Fast clean</option>
                                <option value="#">Deep clean</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="text-xs md:text-base mb-2 block" for="#">Foto Sepatu</label>
                            <input class="text-xs md:text-base w-full border border-gray-200 rounded-sm p-2"
                                type="file">
                        </div>
                        <div class="mb-2">
                            <label class="text-xs md:text-base mb-2 block" for="#">Catatan</label>
                            <textarea
                                class="text-xs md:text-base w-full min-h-[40px] border border-gray-200 rounded-sm p-2"
                                placeholder="Contoh : ada sobekan kecil di sebelah kanan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="text-xs md:text-base mb-2 block" for="#">Harga Layanan</label>
                            <input class="text-xs md:text-base w-full border border-gray-200 rounded-sm p-2" type="text"
                                value="Rp. 35.000" readonly>
                        </div>
                        <div>
                            <button
                                class="text-xs md:text-base flex items-center justify-center text-cyan-600 font-semibold p-2 rounded-sm cursor-pointer border border-cyan-600 w-full">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
                                Tambah Order
                            </button>

                        </div>
                    </form>
                </div>

            </div>

            <div class="bg-white rounded-lg border border-gray-300 p-4">
                <div class="mb-2 flex justify-between items-center">
                    <p class="text-xs md:text-lg flex items-center gap-2 text-lg font-semibold text-slate-800">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="size-4 md:size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        Ringkasan Transaksi
                    </p>
                </div>
                <hr class="my-2 border border-gray-100">
                <div>
                    <div class="flex justify-between items-center">
                        <p class="text-xs md:text-base text-slate-500">Total Sepatu (3 pasang)</p>
                        <p class="text-xs md:text-base text-slate-700">Rp. 120.000</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-xs md:text-base text-slate-500">Diskon 10%</p>
                        <p class="text-xs md:text-base text-red-700">-Rp.20.000</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-xs md:text-base text-slate-700">Total Tagihan</p>
                        <p class="text-xs md:text-base text-cyan-600 text-lg">Rp. 100.000</p>
                    </div>
                </div>
                <button
                    class="text-xs md:text-base mt-2 text-white bg-cyan-600 font-semibold p-2 rounded-sm cursor-pointer border border-cyan-600 w-full">Selesaikan
                    Transaksi</button>
            </div>
        </div>
    </div>
</div>
@endsection