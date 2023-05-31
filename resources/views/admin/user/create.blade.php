<x-app-layout>
    <x-slot name="title">Tambah User</x-slot>
    <div class="container-fluid py-4">
        <div class="mx-3 mx-md-4">
            <div class="card card-body">
                <div
                    class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                    <h6 class="text-white text-capitalize ps-3">Tambah User</h6>
                    <a class="btn btn-lg bg-gradient-info btn-lg my-0 me-3"
                        href="{{ route('admin.user.index') }}">Kembali</a>
                </div>

                <form role="form" action="{{ route('admin.user.store') }}" class="m-4" method="POST">
                    @csrf

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" value="{{ old('nama') }}">
                    </div>
                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('textarea#description'))
                .catch(error => {
                    console.error(error);
                })
            // tinymce.init({
            //     selector: 'textarea#description',
            //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            //     tinycomments_mode: 'embedded',
            // });
        </script>
    @endpush
</x-app-layout>
