<x-app-layout>
    <x-slot name="title">Blog</x-slot>

    <div class="card card-body mx-3 mx-md-4 mt-4">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 z-index-2">
                <div
                    class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                    <h6 class="text-white text-capitalize ps-3">Data Blog</h6>
                    <a class="btn btn-lg bg-gradient-info btn-lg my-0 me-3" href="{{ route('admin.blog.create') }}">Tambah
                        Blog</a>
                </div>
                <div class="mt-2">
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>

                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Artikel</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penulis
                                </th>
                                {{-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th> --}}
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Dibuat Pada</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{ asset($blog->media->path) }}"
                                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $blog->judul }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $blog->penulis->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ $blog->penulis->email }}</p>
                                        </div>
                                    </td>
                                    {{-- <td class="align-middle text-center text-sm">
                              <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td> --}}
                                    <td class="align-middle text-center">
                                        <span
                                            class="text-secondary text-xs font-weight-bold">{{ $blog->created_at->diffForHumans() }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('admin.blog.edit', $blog) }}"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="Edit artikel">
                                            Edit
                                        </a>
                                        |
                                        <a href="javascript:;" data-id="{{ $blog->id }}"
                                            class="text-secondary font-weight-bold text-xs btn-delete"
                                            data-toggle="tooltip" data-original-title="Hapus artikel">
                                            Hapus
                                        </a>
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
    @push('scripts')
        <script>
            $('.btn-delete').click((evt) => {
                let url = '{{ route('admin.blog.destroy', ':id') }}';
                url = url.replace(':id', $(evt.target).data('id'));
                Swal.fire({
                    title: 'Apakah kamu ingin menghapus blog?',
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url,
                            type: 'DELETE',
                            data: {
                                _token: "{{ csrf_token() }}",
                            },
                            success: () => {
                                Swal.fire('Dihapus!', '', 'berhasil')
                                location.reload()
                            },
                            error: () => {
                                Swal.fire('Dihapus!', '', 'gagal')
                            }
                        })
                    }
                })
            })
        </script>
    @endpush
</x-app-layout>
