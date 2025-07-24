@extends('layouts.wali_kelas')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl  border-black-125 rounded-2xl bg-clip-border">
                <div class="p-6 m-[40px] rounded-t-4">
                    <div class="flex justify-between items-center">
                        <h6 class="mb-2 dark:text-white font-bold">Report Data Beasiswa</h6>
                        {{-- <a href="{{ route('sosial-ekonomi.create') }}"
                            class="inline-block px-4 py-2 text-sm font-semibold text-white bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg shadow-md hover:-translate-y-px transition-all duration-150 ease-in-out">
                            <i class="fas fa-plus mr-1"></i> Tambah Data
                        </a> --}}
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                        <thead>
                            <tr>
                                <th class="p-2 text-sm text-center dark:text-white">NISN</th>
                                <th class="p-2 text-sm text-center dark:text-white">Nama</th>
                                <th class="p-2 text-sm text-center dark:text-white">Penghasilan</th>
                                <th class="p-2 text-sm text-center dark:text-white">Tanggungan</th>
                                <th class="p-2 text-sm text-center dark:text-white">Tempat Tinggal</th>
                                <th class="p-2 text-sm text-center dark:text-white">Aset</th>
                                <th class="p-2 text-sm text-center dark:text-white">PKH</th>
                                <th class="p-2 text-sm text-center dark:text-white">DTKS</th>
                                <th class="p-2 text-sm text-center dark:text-white">SKTM</th>
                                <th class="p-2 text-sm text-center dark:text-white">Kelayakan</th>
                                <th class="p-2 text-sm text-center dark:text-white">Status</th>
                                {{-- <th class="p-2 text-sm text-center dark:text-white">Lihat</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $item)
                                <tr class="border-t dark:border-white/40">
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">{{ $item->nisn }}</td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">{{ $item->siswa->nama ?? '-' }}
                                    </td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">{{ $item->jml_penghasilan }}
                                    </td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">{{ $item->tanggungan }}</td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">{{ $item->aset }}</td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">
                                        {{-- {{ $item->tempat_tinggal }} --}}
                                        <img src="{{ asset('storage/' . $item->tempat_tinggal) }}" alt="{{ $item->tempat_tinggal }}"
                                            width="80">


                                    </td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">
                                        {{ $item->pkh ? 'Ya' : 'Tidak' }}
                                    </td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">
                                        {{ $item->dtks ? 'Ya' : 'Tidak' }}
                                    </td>
                                    <td class="p-2 text-center dark:text-white dark:opacity-80">
                                        {{ $item->sktm ? 'Ya' : 'Tidak' }}
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            {{ $item->fuzzyMamdani->kelayakan }}%
                                        </p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <span
                                            class="inline-block px-2 py-1 text-white text-xs font-semibold rounded-lg
                                                                                                                {{ $item->fuzzyMamdani->status === 'layak' ? 'bg-green-500' : 'bg-red-500' }}">
                                            {{ ucfirst($item->fuzzyMamdani->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('walikelas.report.show', $item->id_sosial_ekonomi) }}"
                                            class="px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-blue-300 leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:-translate-y-px active:opacity-85 hover:shadow-md">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=11" class="p-4 text-center text-sm text-slate-500 dark:text-white/60">
                                        Tidak ada data beasiswa.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection