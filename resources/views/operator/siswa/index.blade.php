@extends('layouts.operator')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl  border-black-125 rounded-2xl bg-clip-border">
                <div class="p-6 m-[40px] rounded-t-4">
                    <div class="flex justify-between items-center">
                        <h6 class="mb-2 ">Daftar Siswa</h6>
                        {{-- Tombol Tambah Siswa --}}
                        <a href="{{ route('siswa.create') }}"
                            class="inline-block px-4 py-2 text-sm font-semibold text-white bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg shadow-md hover:-translate-y-px transition-all duration-150 ease-in-out">
                            <i class="fas fa-plus mr-1"></i> Tambah Siswa
                        </a>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 ">
                        <thead>
                            <tr>
                                <th class="p-2 text-sm text-center ">NISN</th>
                                <th class="p-2 text-sm text-center ">Nama</th>
                                <th class="p-2 text-sm text-center ">Kelas</th>
                                <th class="p-2 text-sm text-center ">Tanggal Lahir</th>
                                <th class="p-2 text-sm text-center ">No HP</th>
                                <th class="p-2 text-sm text-center ">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswa as $row)
                                <tr class="border-t ">
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $row->nisn }}</p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $row->nama }}</p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $row->kelas }}</p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">
                                            {{ \Carbon\Carbon::parse($row->tgl_lahir)->format('d-m-Y') }}
                                        </p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $row->no_hp }}</p>
                                    </td>
                                    <td class="p-2 text-center space-x-1">
                                        <a href="{{ route('siswa.edit', $row->nisn) }}"
                                            class="inline-block px-3 py-3 mr-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 hover:-translate-y-px active:opacity-85 hover:shadow-md">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('siswa.destroy', $row->nisn) }}" method="POST"
                                            class="inline-block" onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-red-600 to-orange-600 leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:-translate-y-px active:opacity-85 hover:shadow-md">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-4 text-center text-sm text-slate-500 /60">
                                        Tidak ada data siswa.
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