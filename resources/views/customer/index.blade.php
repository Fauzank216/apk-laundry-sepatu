<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="min-h-screen bg-slate-50 font-sans text-slate-800 flex justify-center items-center p-4">
        <!-- Mobile Container (Max Width 420px) -->
        <div
            class="w-full max-w-sm bg-white rounded-[32px] shadow-xl shadow-slate-200/50 p-6 space-y-6 border border-slate-100">

            <!-- 1. Success Header -->
            <div class="text-center pt-2 space-y-2">
                <!-- Animated / Glowing Check Icon -->
                <div
                    class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-emerald-50 text-emerald-500 mb-1 ring-8 ring-emerald-50/50">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900">Pesanan Berhasil!</h1>
                <p class="text-sm text-slate-500">Pesanan kamu sudah kami terima dan siap dirawat.</p>
            </div>

            <!-- 2. Invoice Meta Info -->
            <div class="flex items-center justify-between bg-slate-50 p-4 rounded-2xl border border-slate-100 text-xs">
                <div>
                    <span class="text-slate-400 block font-medium">NO. INVOICE</span>
                    <span class="font-bold text-slate-700 text-sm">#SC-20261004-002</span>
                </div>
                <div class="text-right">
                    <span class="text-slate-400 block font-medium">TANGGAL</span>
                    <span class="font-semibold text-slate-700">04 Okt 2026, 09:05</span>
                </div>
            </div>

            <!-- 3. Order Progress Tracking -->
            <div class="space-y-3 bg-slate-50/60 p-4 rounded-2xl border border-slate-100/80">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Status Pesanan</span>
                <div class="relative flex items-center justify-between text-xs">
                    <!-- Connecting Line -->
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-full h-[2px] bg-slate-200 -z-0"></div>
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1/2 h-[2px] bg-sky-500 -z-0"></div>

                    <!-- Step 1: Diterima -->
                    <div class="relative z-10 flex flex-col items-center gap-1.5 bg-white px-1">
                        <div
                            class="w-6 h-6 rounded-full bg-sky-500 text-white flex items-center justify-center font-bold text-[10px]">
                            ✓</div>
                        <span class="font-semibold text-slate-800 text-[11px]">Diterima</span>
                    </div>

                    <!-- Step 2: Diproses -->
                    <div class="relative z-10 flex flex-col items-center gap-1.5 bg-white px-1">
                        <div
                            class="w-6 h-6 rounded-full bg-sky-500 text-white ring-4 ring-sky-100 flex items-center justify-center">
                            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                        </div>
                        <span class="font-semibold text-sky-600 text-[11px]">Diproses</span>
                    </div>

                    <!-- Step 3: Siap Ambil -->
                    <div class="relative z-10 flex flex-col items-center gap-1.5 bg-white px-1">
                        <div
                            class="w-6 h-6 rounded-full bg-slate-200 text-slate-400 flex items-center justify-center font-bold text-[10px]">
                            ○</div>
                        <span class="font-medium text-slate-400 text-[11px]">Siap Ambil</span>
                    </div>
                </div>
            </div>

            <!-- 4. Items List -->
            <div class="space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Detail Treatment</h3>

                <!-- Item 1 -->
                <div class="flex items-center gap-3 p-3 rounded-2xl bg-slate-50/50 border border-slate-100">
                    <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=150" alt="Nike Air Force 1"
                        class="w-14 h-14 rounded-xl object-cover border border-slate-200" />
                    <div class="flex-1 min-w-0">
                        <h4 class="text-sm font-bold text-slate-800 truncate">Nike Air Force 1</h4>
                        <p class="text-xs text-sky-600 font-medium">Deep Cleaning</p>
                        <p class="text-xs text-slate-400 mt-0.5">1 Pasang</p>
                    </div>
                    <span class="text-sm font-bold text-slate-800">Rp35.000</span>
                </div>

                <!-- Item 2 -->
                <div class="flex items-center gap-3 p-3 rounded-2xl bg-slate-50/50 border border-slate-100">
                    <img src="https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?w=150" alt="Vans Old Skool"
                        class="w-14 h-14 rounded-xl object-cover border border-slate-200" />
                    <div class="flex-1 min-w-0">
                        <h4 class="text-sm font-bold text-slate-800 truncate">Vans Old Skool Black</h4>
                        <p class="text-xs text-sky-600 font-medium">Unyellowing + Treatment</p>
                        <p class="text-xs text-slate-400 mt-0.5">1 Pasang</p>
                    </div>
                    <span class="text-sm font-bold text-slate-800">Rp50.000</span>
                </div>
            </div>

            <!-- 5. Payment Summary & Method -->
            <div class="space-y-3 pt-2 border-t border-slate-100">
                <div class="space-y-1.5 text-xs text-slate-500">
                    <div class="flex justify-between">
                        <span>Subtotal</span>
                        <span class="font-medium text-slate-700">Rp85.000</span>
                    </div>
                    <div class="flex justify-between text-emerald-600">
                        <span>Diskon (Promo Pelanggan Baru)</span>
                        <span class="font-medium">-Rp10.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Biaya Layanan Antar-Jemput</span>
                        <span class="font-medium text-slate-700">Rp5.000</span>
                    </div>
                </div>

                <!-- Prominent Total -->
                <div class="flex justify-between items-center p-3.5 bg-slate-900 rounded-2xl text-white mt-2">
                    <div>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase font-medium">Total
                            Pembayaran</span>
                        <div class="flex items-center gap-2 mt-0.5">
                            <!-- Badge Pembayaran -->
                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                                QRIS
                            </span>
                            <span class="text-xs text-slate-300">Lunas</span>
                        </div>
                    </div>
                    <span class="text-xl font-extrabold text-emerald-400">Rp80.000</span>
                </div>
            </div>

            <!-- 6. Estimated Completion -->
            <div class="flex items-center justify-between p-3.5 bg-sky-50/60 rounded-2xl border border-sky-100 text-xs">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-sky-500 text-white flex items-center justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-slate-500 block font-medium">Estimasi Selesai</span>
                        <span class="font-bold text-slate-800 text-sm">Rabu, 07 Oktober 2026</span>
                    </div>
                </div>
            </div>

            <!-- 7. Action Buttons -->
            <div class="space-y-2.5 pt-2">
                <div class="grid grid-cols-2 gap-2.5">
                    <button
                        class="w-full py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl font-semibold text-xs transition flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                        </svg>
                        Unduh Struk
                    </button>
                    <button
                        class="w-full py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl font-semibold text-xs transition flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314" />
                        </svg>
                        Bagikan
                    </button>
                </div>

                <button
                    class="w-full py-3.5 px-4 bg-sky-500 hover:bg-sky-600 text-white rounded-xl font-bold text-xs tracking-wide shadow-lg shadow-sky-500/25 transition">
                    Kembali ke Beranda
                </button>
            </div>

        </div>
    </div>
</body>

</html>