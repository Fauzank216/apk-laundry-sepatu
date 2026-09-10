@extends('admin.layout')
@section('title', 'Dashboard')
@section('content')
<div>
    <div class="mb-4 grid grid-cols-2 gap-2 lg:grid-cols-4 md:gap-4">
        <div class="flex items-center gap-4 border border-gray-200 rounded-sm p-2 lg:p-4 bg-white">
            <div class="p-2 bg-blue-50 text-blue-500 rounded-lg">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-300 md:text-lg">Order Hari Ini</p>
                <p class="font-semibold text-base md:text-xl text-slate-700">2</p>
            </div>
        </div>
        <div class="flex items-center gap-4 border border-gray-200 rounded-sm p-2 md:p-4 bg-white">
            <div class="p-2 bg-orange-50 text-orange-500 rounded-lg">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-300 md:text-lg">Total Paket</p>
                <p class="font-semibold text-base md:text-xl text-slate-700">5</p>
            </div>
        </div>
        <div class="flex items-center gap-4 border border-gray-200 rounded-sm p-2 md:p-4 bg-white">
            <div class="p-2 bg-purple-50 text-purple-500 rounded-lg">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <div>
                <p class="text-xs text-gray-300 md:text-lg">Total Pelanggan</p>
                <p class="font-semibold text-base md:text-xl text-slate-700">200</p>
            </div>
        </div>
        <div class="flex items-center gap-4 border border-gray-200 rounded-sm p-2 md:p-4 bg-white">
            <div class="p-2 bg-emerald-50 rounded-lg text-emerald-500">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 md:size-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                </svg>
            </div>
            <div>
                <p class="text-gray-300 md:text-lg">Kas</p>
                <p class="text-xs font-semibold text-base md:text-xl text-slate-700">Rp. 1.500.000</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
        <div class="col-span-4 lg:col-span-3">
            <div class="border border-gray-200 h-80 relative mb-3 bg-white rounded-sm p-3">
                <canvas id="chartPendapatan"></canvas>
            </div>
            <div class="border border-gray-200 bg-white rounded-sm p-2">
                <div class="overflow-x-auto p-3">
                    <table class="w-full text-center border border-gray-200">
                        <thead>
                            <tr>
                                <th class="p-2 border border-gray-200">#</th>
                                <th class="p-2 border border-gray-200">Nama</th>
                                <th class="p-2 border border-gray-200">Paket</th>
                                <th class="p-2 border border-gray-200">Total</th>
                                <th class="p-2 border border-gray-200">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2 border border-gray-200">1</td>
                                <td class="p-2 border border-gray-200">Irfan</td>
                                <td class="p-2 border border-gray-200">Deep Clean</td>
                                <td class="p-2 border border-gray-200">Rp. 100.000</td>
                                <td class="p-2 border border-gray-200">Senin, 4 Januari 2026</td>
                            </tr>
                            <tr>
                                <td class="p-2 border border-gray-200">2</td>
                                <td class="p-2 border border-gray-200">Bagas</td>
                                <td class="p-2 border border-gray-200">Standar</td>
                                <td class="p-2 border border-gray-200">Rp. 40.000</td>
                                <td class="p-2 border border-gray-200">Senin, 4 Januari 2026</td>
                            </tr>
                            <tr>
                                <td class="p-2 border border-gray-200">3</td>
                                <td class="p-2 border border-gray-200">Pasha</td>
                                <td class="p-2 border border-gray-200">Standar</td>
                                <td class="p-2 border border-gray-200">Rp. 20.000</td>
                                <td class="p-2 border border-gray-200">Senin, 4 Januari 2026</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-span-4 lg:col-span-1">
            <div
                class="border border-gray-200 lg:h-60 relative flex justify-center items-center mb-3 bg-white rounded-sm p-2">
                <canvas id="chartTrending"></canvas>
            </div>
            <div class="border border-gray-200 lg:h-70 relative bg-white rounded-sm p-2">
                <canvas id="chartInventory"></canvas>
            </div>
        </div>

    </div>
</div>

@endsection

@push('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ctxPendapatan = document.getElementById('chartPendapatan').getContext('2d');
        const ctxTrending = document.getElementById('chartTrending').getContext('2d');
        const ctxInventory = document.getElementById('chartInventory').getContext('2d');

        // Konfigurasi Chart.js
        new Chart(ctxPendapatan, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Jumlah Order',
                    data: ['10', '20', '40', '10', '30'],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f5f9'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        new Chart(ctxTrending, {
            type: 'doughnut',
            data: {

                labels: ['Standar', 'Deep Clean', 'Repaint'],
                datasets: [{
                    label: 'Paket Terlaris',
                    data: ['10', '20', '5'],
                    backgroundColor: [
                        'rgba(70, 235, 180, 0.91)',
                        'rgba(227, 152, 71, 0.93)',
                        'rgba(56, 127, 227, 0.91)'
                    ],
                    borderWidth: 0,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle',
                            padding: 20,
                            font: {
                                family: 'sans-serif',
                                size: 12
                            },
                            color: '#475569'
                        }
                    },

                    tooltip: {
                        backgroundColor: '#1e293b',
                        padding: 10,
                        cornerRadius: 4,
                        callbacks: {
                            label: function(context) {
                                return ` ${context.label}: ${context.raw}%`;
                            }
                        }
                    }
                }
            }
        });

        new Chart(ctxInventory, {
            type: 'bar',
            data: {
                labels: ['Sabun', 'Pewangi', 'Plastik', 'Stiker'],
                datasets: [{
                    label: 'Sisa Stok',
                    data: ['10', '20', '40', '10'],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                indexAxis: 'y',
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f1f5f9'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

    });
</script>
@endpush