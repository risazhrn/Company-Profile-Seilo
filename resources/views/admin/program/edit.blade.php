<x-app-layout>
    <x-slot name="title">Update Program</x-slot>

    <div class="container-fluid py-4">
        <div class="mx-3 mx-md-4">
            <div class="card card-body">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Update Program</h6>
                </div>

                <form method="POST" role="form" class="m-4" enctype="multipart/form-data"
                    action="{{ route('admin.program.update', $program) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="gambarInput">Pilih Gambar : </label>
                        <input name="gambar" type="file" class="form-control-file" id="gambarInput"
                            aria-describedby="gambarHelp" accept="image/*">
                        <small id="gambarHelp" class="form-text text-muted">Format gambar yang diperbolehkan: JPG,
                            PNG.</small>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control"
                            value="{{ old('judul', $program->judul) }}">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label">Deksripsi</label>
                        <textarea name="deskripsi" id="description" rows="10" class="form-control">{{ old('deskripsi', $program->deskripsi) }}</textarea>
                    </div>
                    <div class="form-group input-group input-group-outline mb-3">
                        <label class="m-2">Open Date :</label>
                        <input type="date" class="form-control" name="tgl_dibuka"
                            value="{{ old('tgl_dibuka', $program->tgl_dibuka) }}">
                    </div>
                    <div class="form-group input-group input-group-outline mb-3">
                        <label class="m-2">Close Date :</label>
                        <input type="date" class="form-control" name="tgl_ditutup"
                            value="{{ old('tgl_ditutup', $program->tgl_ditutup) }}">
                    </div>
                    <div class="form-group input-group input-group-outline mb-3">

                        <div class="flex flex-row gap-3">
                            <label class="m-2">Status:</label>
                            <input type="radio" name="aktif" value="0" id="tidak-aktif"
                                {{ $program->aktif === 0 ? 'checked' : '' }}>
                            <label for="tidak-aktif">Tidak Aktif</label>
                            <input type="radio" name="aktif" value="1" id="aktif"
                                {{ $program->aktif === 1 ? 'checked' : '' }}>
                            <label for="aktif">Aktif</label>
                        </div>

                        {{-- <input type="checkbox" class="form-control" name="tgl_ditutup"
                            value="{{ old('tgl_ditutup', $program->tgl_ditutup) }}"> --}}
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Update</button>
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
            //     tinycomments_author: 'Author name',
            //     mergetags_list: [{
            //             value: 'First.Name',
            //             title: 'First Name'
            //         },
            //         {
            //             value: 'Email',
            //             title: 'Email'
            //         },
            //     ]
            // });
        </script>
    @endpush
</x-app-layout>
