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
    <div class="flex flex-wrap items-end gap-3 my-4">
        <!-- Input Pencarian (Lebih Lebar) -->
        <div class="flex-1 min-w-[220px]">
            <label class="block text-xs font-medium text-gray-700 mb-1">Cari</label>
            <input id="search-transaction" type="search" placeholder="Masukan Invoice"
                class="text-xs md:text-base block border border-gray-400 rounded-sm px-3 py-2 w-full focus:outline-none focus:ring-1 focus:ring-cyan-600">
        </div>

        <!-- Filter Tahun -->
        <div class="w-30">
            <label class="block text-xs font-medium text-gray-700 mb-1">Tahun</label>
            <select
                class="text-xs md:text-base w-full border border-gray-400 rounded-sm px-3 py-2 bg-white focus:outline-none focus:ring-1 focus:ring-cyan-600">
                <option value="">Semua</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
            </select>
        </div>

        <!-- Filter Bulan -->
        <div class="w-30">
            <label class="block text-xs font-medium text-gray-700 mb-1">Bulan</label>
            <select
                class="text-xs md:text-base w-full border border-gray-400 rounded-sm px-3 py-2 bg-white focus:outline-none focus:ring-1 focus:ring-cyan-600">
                <option value="">Semua</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <!-- Tambahkan bulan lainnya -->
            </select>
        </div>

        <!-- Filter Status Pesanan -->
        <div class="w-30">
            <label class="block text-xs font-medium text-gray-700 mb-1">Status</label>
            <select
                class="text-xs md:text-base w-full border border-gray-400 rounded-sm px-3 py-2 bg-white focus:outline-none focus:ring-1 focus:ring-cyan-600">
                <option value="">Semua</option>
                <option value="diterima">Diterima</option>
                <option value="dicuci">Dicuci</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>

        <!-- Filter Status Pembayaran -->
        <div class="w-30">
            <label class="block text-xs font-medium text-gray-700 mb-1">Status Pembayaran</label>
            <select
                class="text-xs md:text-base w-full border border-gray-400 rounded-sm px-3 py-2 bg-white focus:outline-none focus:ring-1 focus:ring-cyan-600">
                <option value="">Semua</option>
                <option value="lunas">Lunas</option>
                <option value="belum">Belum Lunas</option>
            </select>
        </div>

        <!-- Tombol Clear Filter -->
        <div>
            <button type="button"
                class="text-xs md:text-base border border-gray-300 bg-gray-50 hover:bg-gray-100 text-gray-700 rounded-sm px-4 py-2 transition-colors">
                Clear Filter
            </button>
        </div>
    </div>
    <div class="rounded-t-lg border border-gray-300 overflow-x-auto">
        <table id="history-table" class="text-xs md:text-base rounded-sm min-w-[700px] w-full text-center">
            <thead class="bg-cyan-700 text-white text-xs md:text-base text-slate-800 font-semibold">
                <tr>
                    <th class="p-3 border-b border-gray-100">INVOICE</th>
                    <th class="p-3 border-b border-gray-100">PELANGGAN</th>
                    <th class="p-3 border-b border-gray-100">STATUS</th>
                    <th class="p-3 border-b border-gray-100">TOTAL</th>
                    <th class="p-3 border-b border-gray-100">Tanggal</th>
                    <th class="p-3 border-b border-gray-100">AKSI</th>
                </tr>
            </thead>
            <tbody class="bg-slate-50">
                @foreach($transactions as $transaction)
                <tr>
                    <td class="p-2 border-b border-gray-200">{{$transaction->no_invoice}}</td>
                    <td class="p-2 border-b border-gray-200">{{$transaction->customers->name}}</td>
                    <td class="p-2 border-b border-gray-200"></td>
                    <td class="p-2 border-b border-gray-200">Rp.
                        {{Number::format($transaction->total_amount, locale:'idn')}}
                    </td>
                    <td class="p-2 border-b border-gray-200">{{ $transaction->created_at->format('d M Y')}}</td>
                    <td class="p-2 border-b border-gray-200">
                        <a href="{{route('transactions.show', $transaction->id)}}">
                            <button
                                class="text-xs md:text-base cursor-pointer bg-cyan-600 rounded-sm text-white p-2 hover:bg-cyan-700">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6" data-id="{{$transaction->id}}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </a>

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
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('scripts')
<script>
const tbody = document.getElementById('history-table').querySelector('tbody')
const inputSearch = document.getElementById('search-transaction')

function renderTable(data) {
    if (!tbody) return

    if (data.length == 0) {
        tbody.innerHTML = `<tr>
                            <td colspan='6' class="text-center text-gray-500 p-2 border-b border-gray-200">Data tidak ditemukan...</td>
                           </tr>`
        return
    }

    tbody.innerHTML = data.map(d => {
        return `
                <tr>
                    <td class="p-2 border-b border-gray-200">${d.no_invoice}</td>
                    <td class="p-2 border-b border-gray-200">${d.customer}</td>
                    <td class="p-2 border-b border-gray-200">${d.status}</td>
                    <td class="p-2 border-b border-gray-200">${d.total}</td>
                    <td class="p-2 border-b border-gray-200">${d.created_at}</td>
                    <td class="p-2 border-b border-gray-200">
                        <a href="${d.transaction_id}">
                            <button
                                class="text-xs md:text-base cursor-pointer bg-cyan-600 rounded-sm text-white p-2 hover:bg-cyan-700">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-4 md:size-6" data-id="${d.transaction_id}">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </button>
                        </a>

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
            `
    }).join('')
}

let apiUrl = 'http://127.0.0.1:8000/api/transactions'

function findTransaction(e) {
    const key = e.target.value
    fetch(`${apiUrl}?search=${key}`)
        .then(response => response.json())
        .then(json => renderTable(json.data))
        .catch(response => console.error(response))
}

inputSearch.addEventListener('input', findTransaction)
</script>
@endpush