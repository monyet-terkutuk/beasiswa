@extends('layouts.operator')

@section('content')
                <div class="flex flex-wrap mt-6 -mx-3">
                    <div class="w-4/5 max-w-full px-3 mt-0 lg:flex-none">
                        <div
                            class="relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl">
                            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b border-solid p-6 pt-4 pb-0">
                                <h6 class="capitalize p-5 font-semibold dark:text-white">Form Tambah Siswa</h6>
                            </div>
                            <div class="flex-auto p-6">
                                <form action="{{ route('siswa.store') }}" method="POST">
                                    @csrf

                                    @php
    $fields = [
        ['nisn', 'NISN', 'text'],
        ['nama', 'Nama', 'text'],
        ['kelas', 'Kelas', 'text'],
        ['tgl_lahir', 'Tanggal Lahir', 'date'],
        ['nama_ayah', 'Nama Ayah', 'text'],
        ['nama_ibu', 'Nama Ibu', 'text'],
        ['no_hp', 'No. HP', 'text'],
    ];
                                    @endphp

                                    @foreach (array_chunk($fields, 2) as $row)
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                            @foreach ($row as [$name, $label, $type])
                                                <div>
                                                    <label for="{{ $name }}" class="block text-sm font-semibold py-2 text-slate-700 mb-1">
                                                        {{ $label }}
                                                    </label>
                                                    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" required
                                                        class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach


                                    <div class="mb-4">
                                        <label for="alamat"
                                            class="block text-sm font-medium text-slate-700 dark:text-white mb-1">Alamat</label>
                                        <textarea name="alamat" id="alamat" placeholder="Alamat"
                                            class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                            rows="3" required></textarea>
                                    </div>

                                    <div class="text-right flex justify-end">
                                        <a href="{{ route('sosial-ekonomi.index') }}"
                                            class="inline-block px-6 py-2 text-xs font-bold text-center text-gray-600 border border-gray-300 rounded-lg uppercase hover:bg-gray-100 mr-2">
                                            Kembali
                                        </a>

                                        <div class="text-right">
                                            <button type="submit"
                                                class="inline-block px-6 py-2 text-xs font-bold text-center bg-blue-500 text-white uppercase align-middle transition-all bg-gradient-to-tr from-blue-500 to-blue-700 rounded-lg shadow-md hover:shadow-lg active:opacity-85">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection