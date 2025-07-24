@extends('layouts.operator')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl border-black-125 rounded-2xl bg-clip-border">
                <div class="p-6 m-[40px] rounded-t-4">
                    <div class="flex justify-between items-center">
                        <h6 class="mb-2 text-lg font-semibold">Hasil Seleksi Kelayakan</h6>
                        {{-- Tombol jika butuh aksi tambahan --}}
                        {{-- <a href="{{ route('fuzzy-mamdani.create') }}"
                            class="inline-block px-4 py-2 text-sm font-semibold text-white bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg shadow-md hover:-translate-y-px transition-all duration-150 ease-in-out">
                            <i class="fas fa-plus mr-1"></i> Tambah Data
                        </a> --}}
                    </div>
                </div>

                <div class="overflow-x-auto px-6 pb-6">
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
                        <thead>
                            <tr>
                                <th class="p-2 text-sm text-center">NISN</th>
                                <th class="p-2 text-sm text-center">Nama Siswa</th>
                                <th class="p-2 text-sm text-center">Kelayakan</th>
                                <th class="p-2 text-sm text-center">Status</th>
                                <th class="p-2 text-sm text-center">Tanggal Proses</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr class="border-t">
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            {{ $item->sosialEkonomi->nisn ?? '-' }}
                                        </p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            {{ $item->sosialEkonomi->siswa->nama ?? '-' }}
                                        </p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            {{ $item->kelayakan }}%
                                        </p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <span
                                            class="inline-block px-2 py-1 text-white text-xs font-semibold rounded-lg
                                                                                    {{ $item->status === 'layak' ? 'bg-green-500' : 'bg-red-500' }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            {{ \Carbon\Carbon::parse($item->tgl_proses)->format('d M Y') }}
                                        </p>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-4 text-center text-sm text-slate-500">
                                        Belum ada data kelayakan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="mt-4 px-6">
        {{ $data->links() }}
    </div> --}}

@endsection