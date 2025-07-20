@extends('layouts.operator')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-4/5 max-w-full px-3 mt-0 lg:flex-none">
            <div
                class="relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white shadow-xl ">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalizep-5 font-semibold ">Form Tambah Data Sosial Ekonomi</h6>
                </div>
                <div class="flex-auto p-6">
                    <form action="{{ route('sosial-ekonomi.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="nisn" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Nama
                                    Siswa</label>
                                <select name="nisn" id="nisn" required
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                                    <option value="">Pilih Siswa</option>
                                    @foreach ($siswa as $item)
                                        <option value="{{ $item->nisn }}">{{ $item->nama }} ({{ $item->nisn }})</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="jml_penghasilan"
                                    class="block text-sm font-semibold py-2 text-slate-700 mb-1">Jumlah Penghasilan</label>
                                <input type="number" step="0.01" name="jml_penghasilan" id="jml_penghasilan"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="tanggungan" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Jumlah
                                    Tanggungan</label>
                                <input type="number" name="tanggungan" id="tanggungan"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>

                            <div>
                                <label for="tempat_tinggal"
                                    class="block text-sm font-semibold py-2 text-slate-700 mb-1">Tempat Tinggal</label>
                                <input type="text" name="tempat_tinggal" id="tempat_tinggal"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="aset" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Aset</label>
                            <input type="text" name="aset" id="aset"
                                class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                        </div>

                        <div class="mb-4">
                            <label for="pkh" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Upload PKH</label>

                            <label for="pkh"
                                class="inline-block cursor-pointer px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-lg shadow-md hover:shadow-lg active:opacity-85">
                                Pilih File
                            </label>
                            <span id="pkh-filename" class="ml-2 text-sm text-gray-600">Belum ada file</span>

                            <input type="file" name="pkh" id="pkh" class="hidden" onchange="updateFileName('pkh')">
                        </div>

                        <div class="mb-4">
                            <label for="dtks" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Upload
                                DTKS</label>

                            <label for="dtks"
                                class="inline-block cursor-pointer px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-lg shadow-md hover:shadow-lg active:opacity-85">
                                Pilih File
                            </label>
                            <span id="dtks-filename" class="ml-2 text-sm text-gray-600">Belum ada file</span>

                            <input type="file" name="dtks" id="dtks" class="hidden" onchange="updateFileName('dtks')">
                        </div>

                        <div class="mb-4">
                            <label for="sktm" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Upload
                                SKTM</label>

                            <label for="sktm"
                                class="inline-block cursor-pointer px-4 py-2 text-sm font-semibold text-white bg-blue-500 rounded-lg shadow-md hover:shadow-lg active:opacity-85">
                                Pilih File
                            </label>
                            <span id="sktm-filename" class="ml-2 text-sm text-gray-600">Belum ada file</span>

                            <input type="file" name="sktm" id="sktm" class="hidden" onchange="updateFileName('sktm')">
                        </div>

                        <script>
                            function updateFileName(field) {
                                const input = document.getElementById(field);
                                const label = document.getElementById(field + '-filename');
                                const fileName = input.files.length > 0 ? input.files[0].name : 'Belum ada file';
                                label.textContent = fileName;
                            }
                        </script>


                        <div class="text-right">
                            <a href="{{ route('sosial-ekonomi.index') }}"
                                class="inline-block px-6 py-2 text-xs font-bold text-center text-gray-600 border border-gray-300 rounded-lg uppercase hover:bg-gray-100 mr-2">
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-block px-6 py-2 text-xs font-bold text-center text-white bg-blue-500 uppercase rounded-lg shadow-md hover:bg-blue-600 active:opacity-85">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection