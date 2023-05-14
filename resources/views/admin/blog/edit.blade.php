<x-app-layout>
    <x-slot name="title">Update Blog</x-slot>
    <div class="container-fluid py-4">
        <div class="mx-3 mx-md-4">
            <div class="card card-body">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Update Blog</h6>
                </div>

                <form role="form" action="{{ route('admin.blog.store') }}" class="m-4" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="gambarInput">Pilih Gambar : </label>
                        <input name="gambar" type="file" class="form-control-file" id="gambarInput"
                            aria-describedby="gambarHelp" accept="image/*">
                        <small id="gambarHelp" class="form-text text-muted">Format gambar yang diperbolehkan: JPG,
                            PNG.</small>
                        <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Title</label>
                        <input name="judul" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Isi Konten</label>
                        <textarea name="isi" class="form-control" id="description" rows="10"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            tinymce.init({
                selector: 'textarea#description',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [{
                        value: 'First.Name',
                        title: 'First Name'
                    },
                    {
                        value: 'Email',
                        title: 'Email'
                    },
                ]
            });
        </script>
    @endpush
</x-app-layout>
