@extends('layouts.operator')

@section('content')
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-4/5 max-w-full px-3 mt-0 lg:flex-none">
            <div
                class="relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white shadow-xl">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b border-solid p-6 pt-4 pb-0">
                    <h6 class="capitalize font-semibold">Form Edit User</h6>
                </div>
                <div class="flex-auto p-6">

                    {{-- Error Handling --}}
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                            <ul class="list-disc ml-6">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Form --}}
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            {{-- Name --}}
                            <div>
                                <label for="name" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Nama</label>
                                <input type="text" name="name" id="name" required value="{{ old('name', $user->name) }}"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>

                            {{-- Role --}}
                            <div>
                                <label for="role" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Role</label>
                                <select name="role" id="role" required
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                                    <option value="">Pilih Role</option>
                                    <option value="operator" {{ old('role', $user->role) == 'operator' ? 'selected' : '' }}>
                                        Operator</option>
                                    <option value="walikelas" {{ old('role', $user->role) == 'walikelas' ? 'selected' : '' }}>
                                        Wali Kelas</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            {{-- Email --}}
                            <div>
                                <label for="email"
                                    class="block text-sm font-semibold py-2 text-slate-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" required
                                    value="{{ old('email', $user->email) }}"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>

                            {{-- Password --}}
                            <div>
                                <label for="password" class="block text-sm font-semibold py-2 text-slate-700 mb-1">Password
                                    Baru (opsional)</label>
                                <input type="password" name="password" id="password"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>

                        {{-- Confirm Password --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="password_confirmation"
                                    class="block text-sm font-semibold py-2 text-slate-700 mb-1">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="focus:shadow-primary-outline text-sm block w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-gray-700 focus:border-blue-500 focus:outline-none">
                            </div>
                        </div>

                        {{-- Button --}}
                        <div class="text-right mt-4">
                            <a href="{{ route('users.index') }}"
                                class="inline-block px-6 py-2 text-xs font-bold text-center text-gray-600 border border-gray-300 rounded-lg uppercase hover:bg-gray-100 mr-2">
                                Kembali
                            </a>
                            <button type="submit"
                                class="inline-block px-6 py-2 text-xs font-bold text-center text-white bg-blue-500 uppercase rounded-lg shadow-md hover:bg-blue-600 active:opacity-85">
                                Perbarui
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection