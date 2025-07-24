@extends('layouts.operator')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl border-black-125 rounded-2xl bg-clip-border">
                <div class="p-6 m-[40px] rounded-t-4">
                    <div class="flex justify-between items-center">
                        <h6 class="mb-2 font-bold">Daftar User</h6>
                        {{-- Tombol Tambah User --}}
                        <a href="{{ route('users.create') }}"
                            class="inline-block px-4 py-2 text-sm font-semibold text-white bg-gradient-to-tl from-blue-500 to-violet-500 rounded-lg shadow-md hover:-translate-y-px transition-all duration-150 ease-in-out">
                            <i class="fas fa-plus mr-1"></i> Tambah User
                        </a>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="items-center w-full mb-4 align-top border-collapse border-gray-200">
                        <thead>
                            <tr>
                                <th class="p-2 text-sm text-center">No</th>
                                <th class="p-2 text-sm text-center">Nama</th>
                                <th class="p-2 text-sm text-center">Email</th>
                                <th class="p-2 text-sm text-center">Role</th>
                                <th class="p-2 text-sm text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr class="border-t">
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $index + 1 }}</p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $user->name }}</p>
                                    </td>
                                    <td class="p-2 text-center">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $user->email }}</p>
                                    </td>
                                    <td class="p-2 text-center capitalize">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $user->role }}</p>
                                    </td>
                                    <td class="p-2 text-center space-x-1">
                                        <a href="{{ route('users.edit', $user->id) }}"
                                            class="inline-block px-3 py-3 mr-1 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-blue-500 to-violet-500 leading-normal text-xs ease-in tracking-tight-rem shadow-md hover:-translate-y-px active:opacity-85 hover:shadow-md">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                            class="inline-block" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
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
                                    <td colspan="5" class="p-4 text-center text-sm text-slate-500/60">
                                        Tidak ada data user.
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