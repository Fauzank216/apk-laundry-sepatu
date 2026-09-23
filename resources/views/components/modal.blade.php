<div class="modal hidden fixed inset-0 z-[999] flex items-center justify-center bg-slate-900/30 p-4">

    <div class="w-full max-w-[560px] overflow-hidden rounded-md border border-gray-300 bg-white shadow-xl">

        <div class="flex items-center justify-between border-b border-gray-200 px-3 py-2 md:px-6 md:py-4">
            <div>
                <h2 class="text-xs md:text-xl font-semibold text-slate-800">
                    Konfirmasi
                </h2>
            </div>

            <button onclick="closeModal()" type="button"
                class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full text-xl text-slate-400 transition hover:bg-slate-100 hover:text-slate-700"
                aria-label="Tutup">
                &times;
            </button>

        </div>

        <div class="px-3 py-2 md:px-6 md:py-5">
            <div class="flex items-center justify-center flex-col text-center">
                <div class="text-red-500">
                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="size-15 md:size-25">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                    </svg>

                </div>
                <div>
                    <p class="text-xl md:text-2xl text-slate-800 font-semibold">Anda yakin?</p>
                    <p class="text-xs md:text-lg text-slate-500">Data tidak dapat dipulihkan. Silahkan konfirmasi untuk
                        melanjutkan
                        tindakan
                    </p>
                </div>
            </div>
            <div class="mt-2 flex items-center justify-end gap-3 border-t border-gray-200 pt-4">

                <button onclick="closeModal()" type="button"
                    class="cursor-pointer rounded-md border border-slate-300 bg-white px-5 py-2.5 text-xs md:text-base font-semibold text-slate-600 transition hover:bg-slate-50">
                    Batal
                </button>

                <button type="submit"
                    class="cursor-pointer rounded-md bg-red-700 px-5 py-2.5 text-xs md:text-base font-semibold text-white transition hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-cyan-300">
                    Hapus
                </button>

            </div>

        </div>
    </div>
</div>