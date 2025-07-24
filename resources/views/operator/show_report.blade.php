@extends('layouts.operator')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl border-black-125 rounded-2xl bg-clip-border">
                <div class="p-6 px-6 pb-0 mb-0 border-b-0 rounded-t-2xl">
                    <h6 class="mb-0 font-bold dark:text-white">Detail Laporan Kelayakan Siswa</h6>
                </div>

                <div class="flex-auto p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">NISN</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->siswa->nisn }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">Nama</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->siswa->nama }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">Jumlah Penghasilan</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->jml_penghasilan }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">Tanggungan</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->tanggungan }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">Aset</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->aset }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">Tempat Tinggal</p>
                            <img src="{{ asset('storage/' . $data->tempat_tinggal) }}" alt="Tempat Tinggal"
                                class="w-32 rounded shadow">
                        </div>

                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">PKH</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->pkh ? 'Ya' : 'Tidak' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">DTKS</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->dtks ? 'Ya' : 'Tidak' }}</p>
                        </div>

                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">SKTM</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->sktm ? 'Ya' : 'Tidak' }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-semibold dark:text-white mb-2">Kelayakan</p>
                            <p class="text-gray-700 dark:text-white/80">{{ $data->fuzzyMamdani->kelayakan }}%</p>
                        </div>

                        <div class="col-span-1 md:col-span-2">
                            <p class="text-sm font-semibold dark:text-white mb-2">Status</p>
                            <span
                                class="inline-block px-3 py-1 text-white text-sm font-semibold rounded-lg 
                                                    {{ $data->fuzzyMamdani->status === 'layak' ? 'bg-green-500' : 'bg-red-500' }}">
                                {{ ucfirst($data->fuzzyMamdani->status) }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <a href="{{ route('dashboard.report') }}"
                            class="px-4 py-2 font-semibold text-white bg-gradient-to-tl from-slate-700 to-slate-500 rounded-lg shadow hover:-translate-y-px transition-all duration-150">
                            <i class="fas fa-arrow-left mr-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection