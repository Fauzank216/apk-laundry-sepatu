@extends('admin.layout')

@section('content')
<div class="px-1 py-2 md:py-4 md:px-8">
    <div class="mb-2 md:mb-4 flex flex-col md:flex-row md:justify-between">
        <div class="">
            <p class="text-xs md:text-base text-slate-500">Menu Utama > Riwayat</p>
            <p class="text-lg md:text-2xl text-slate-900  font-semibold">Kelola Riwayat Transaksi</p>
        </div>
        <div class="flex items-center"></div>
    </div>
    <div class="gap-2 my-2 flex items-center">
        <div>
            <select class="text-xs md:text-base w-full border border-gray-400 rounded-sm p-2">
                <option value="#">Pilih tahun</option>
                <option value="#">2026</option>
                <option value="#">2027</option>
                <option value="#">2028</option>
            </select>
        </div>
        <div>
            <select class="text-xs md:text-base w-full border border-gray-400 rounded-sm p-2">
                <option value="#">Pilih Bulan</option>
                <option value="#">Januari</option>
                <option value="#">Febuari</option>
                <option value="#">Maret</option>
            </select>
        </div>
        <div>

        </div>
    </div>
    <div class="bg-white border border-gray-300 overflow-x-auto">
        <table class="text-xs md:text-base rounded-sm min-w-[700px] w-full text-center">
            <thead class="text-xs md:text-base text-slate-800 font-semibold bg-gray-50">
                <tr>
                    <th class="p-3 border-b border-gray-100">NO</th>
                    <th class="p-3 border-b border-gray-100">PELANGGAN</th>
                    <th class="p-3 border-b border-gray-100">QTY</th>
                    <th class="p-3 border-b border-gray-100">STATUS</th>
                    <th class="p-3 border-b border-gray-100">TOTAL</th>
                    <th class="p-3 border-b border-gray-100">Tanggal</th>
                    <th class="p-3 border-b border-gray-100">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border-b border-gray-200">1</td>
                    <td class="p-2 border-b border-gray-200">Fauzan Muammar Kamil</td>
                    <td class="p-2 border-b border-gray-200">2</td>
                    <td class="p-2 border-b border-gray-200">Lunas</td>
                    <td class="p-2 border-b border-gray-200">Rp. 50.000</td>
                    <td class="p-2 border-b border-gray-200">2026-08-10</td>
                    <td class="p-2 border-b border-gray-200">
                        <button
                            class="text-xs md:text-base cursor-pointer bg-cyan-500 rounded-sm text-white p-2 hover:bg-cyan-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </button>
                        <button
                            class="text-xs md:text-base cursor-pointer bg-slate-500 rounded-sm text-white p-2 hover:bg-slate-600">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-4 md:size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection