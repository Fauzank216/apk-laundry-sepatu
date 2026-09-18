@extends('admin.layout')

@section('content')
<div class="px-1 py-2 md:py-4 md:px-8">
    <div class="mb-2 md:mb-4 flex flex-col md:flex-row md:justify-between">
        <div class="">
            <p class="text-xs md:text-base text-slate-500">Master Data > Layanan</p>
            <p class="text-lg md:text-2xl text-slate-900  font-semibold">Kelola Data Layanan</p>
        </div>
        <div class="flex items-center">
            <input type="search" placeholder="Cari Layanan..."
                class="hidden md:block flex-1 md:flex-0 md:w-[220px] border border-gray-300 rounded-sm py-2 px-2 mx-2">
            <button class="text-xs md:text-base cursor-pointer bg-cyan-500 rounded-sm text-white p-2 hover:bg-cyan-600">
                <!-- <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15">
                </svg> -->
                Tambah Layanan
            </button>
        </div>
    </div>

    <div class="bg-white border border-gray-300 overflow-x-auto">
        <table class="text-xs md:text-base rounded-sm min-w-[700px] w-full text-center">
            <thead class="text-slate-800 font-semibold text-sm bg-gray-50">
                <tr>
                    <th class="p-3 border-b border-gray-100">NO</th>
                    <th class="p-3 border-b border-gray-100">NAME</th>
                    <th class="p-3 border-b border-gray-100">HARGA</th>
                    <th class="p-3 border-b border-gray-100">THUMBNAIL</th>
                    <th class="p-3 border-b border-gray-100">DESKRIPSI</th>
                    <th class="p-3 border-b border-gray-100">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2 border-b border-gray-200">1</td>
                    <td class="p-2 border-b border-gray-200">Standar</td>
                    <td class="p-2 border-b border-gray-200">Rp. 20.000</td>
                    <td class="p-2 border-b border-gray-200">Null</td>
                    <td class="p-2 border-b border-gray-200">
                        <textarea class="w-full max-h-[80px] border border-gray-200 rounded-sm p-2" name="#" id=""
                            readonly>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, tenetur?
                        </textarea>
                    </td>
                    <td class="p-2 border-b border-gray-200">
                        <button class="text-red-500">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-4 md:size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                        <button class="text-yellow-500">
                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="size-4 md:size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>

                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection