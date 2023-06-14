<x-app-layout>
    <x-slot name="title">Edit User</x-slot>
    <div class="container-fluid py-4">
        <div class="mx-3 mx-md-4">
            <div class="card card-body">
                <div
                    class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                    <h6 class="text-white text-capitalize ps-3">Edit User</h6>
                    <a class="btn btn-lg btn-lg my-0 me-3" style="background-color: #DCE0E3;"
                        href="{{ route('admin.user.index') }}">Kembali</a>
                </div>

                <form role="form" action="{{ route('admin.user.update', $user) }}" class="m-4" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control"
                            value="{{ old('nama', $user->name) }}">
                    </div>
                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control"
                            value="{{ old('email', $user->email) }}">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div class="form-group input-group input-group-outline mb-3">

                        <div class="flex flex-row gap-3">
                            <label class="m-2">Status:</label>

                            <input type="radio" name="aktif" value="1" id="aktif"
                                {{ $user->aktif === 1 ? 'checked' : '' }}>
                            <label for="aktif">Aktif</label>

                            <input type="radio" name="aktif" value="0" id="tidak-aktif"
                                {{ $user->aktif === 0 ? 'checked' : '' }}>
                            <label for="tidak-aktif">Tidak Aktif</label>

                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
