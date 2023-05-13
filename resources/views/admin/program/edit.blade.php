<x-app-layout>
    <x-slot name="title">Update Program</x-slot>

    <div class="container-fluid py-4">
        <div class="mx-3 mx-md-4">
            <div class="card card-body">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Update Program</h6>
                  </div>

                <form role="form" class="m-4">
                    <div class="form-group mb-3">
                        <label for="gambarInput">Pilih Gambar : </label>
                        <input type="file" class="form-control-file" id="gambarInput" aria-describedby="gambarHelp" accept="image/*">
                        <small id="gambarHelp" class="form-text text-muted">Format gambar yang diperbolehkan: JPG, PNG.</small>
                      </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Judul</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Deksripsi</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group input-group input-group-outline mb-3">
                      <label class="m-2">Open Date :</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="form-group input-group input-group-outline mb-3">
                        <label class="m-2">Close Date :</label>
                        <input type="date" class="form-control">
                      </div>


                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Tambah</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
