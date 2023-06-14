<x-app-layout>
    <x-slot name="title">Data User</x-slot>

    <div class="card card-body mx-3 mx-md-4 mt-4">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4  z-index-2">
                <div
                    class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                    <h6 class="text-white text-capitalize ps-3">Data User</h6>
                    <a class="btn btn-lg btn-lg my-0 me-3" style="background-color: #DCE0E3;" href="{{ route('admin.user.create') }}">Tambah
                        User</a>
                </div>

            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Role</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Employed</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                function role($role)
                                {
                                    switch ($role) {
                                        case 0:
                                            return 'Super Admin';
                                        case 1:
                                            return 'Admin';
                                        default:
                                            return 'User';
                                    }
                                }
                            @endphp
                            @forelse ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="https://ui-avatars.com/api/?name={{ $user->name }}"
                                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ role($user->role) }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if ($user->aktif)
                                            <span class="badge badge-sm bg-gradient-success">Aktif</span>
                                        @else
                                            <span class="badge badge-sm bg-gradient-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $user->created_at }}</span>
                                    </td>
                                    <td class="align-middle">
                                        @if ($user->role !== 0)
                                            <a href="{{ route('admin.user.edit', $user) }}"
                                                class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                Edit
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
