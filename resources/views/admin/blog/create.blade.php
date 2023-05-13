<x-app-layout>
    <x-slot name="title">Create Blog</x-slot>

    <div class="container-fluid py-4">
        <div class="mx-3 mx-md-4">
            <div class="card card-body">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Tambah Blog</h6>
                  </div>

                <form role="form" class="m-4">
                    <div class="form-group mb-3">
                        <label for="gambarInput">Pilih Gambar : </label>
                        <input type="file" class="form-control-file" id="gambarInput" aria-describedby="gambarHelp" accept="image/*">
                        <small id="gambarHelp" class="form-text text-muted">Format gambar yang diperbolehkan: JPG, PNG.</small>
                      </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Deksripsi Konten</label>
                      <input type="text" class="form-control"> --}}
                      <div class="container">
                        <div class="options">
                          <!-- Text Format -->
                          <button id="bold" class="option-button format">
                            <i class="fa-solid fa-bold"></i>
                          </button>
                          <button id="italic" class="option-button format">
                            <i class="fa-solid fa-italic"></i>
                          </button>
                          <button id="underline" class="option-button format">
                            <i class="fa-solid fa-underline"></i>
                          </button>
                          <button id="strikethrough" class="option-button format">
                            <i class="fa-solid fa-strikethrough"></i>
                          </button>
                          <button id="superscript" class="option-button script">
                            <i class="fa-solid fa-superscript"></i>
                          </button>
                          <button id="subscript" class="option-button script">
                            <i class="fa-solid fa-subscript"></i>
                          </button>
                          <!-- List -->
                          <button id="insertOrderedList" class="option-button">
                            <div class="fa-solid fa-list-ol"></div>
                          </button>
                          <button id="insertUnorderedList" class="option-button">
                            <i class="fa-solid fa-list"></i>
                          </button>
                          <!-- Undo/Redo -->
                          <button id="undo" class="option-button">
                            <i class="fa-solid fa-rotate-left"></i>
                          </button>
                          <button id="redo" class="option-button">
                            <i class="fa-solid fa-rotate-right"></i>
                          </button>
                          <!-- Link -->
                          <button id="createLink" class="adv-option-button">
                            <i class="fa fa-link"></i>
                          </button>
                          <button id="unlink" class="option-button">
                            <i class="fa fa-unlink"></i>
                          </button>
                          <!-- Alignment -->
                          <button id="justifyLeft" class="option-button align">
                            <i class="fa-solid fa-align-left"></i>
                          </button>
                          <button id="justifyCenter" class="option-button align">
                            <i class="fa-solid fa-align-center"></i>
                          </button>
                          <button id="justifyRight" class="option-button align">
                            <i class="fa-solid fa-align-right"></i>
                          </button>
                          <button id="justifyFull" class="option-button align">
                            <i class="fa-solid fa-align-justify"></i>
                          </button>
                          <button id="indent" class="option-button spacing">
                            <i class="fa-solid fa-indent"></i>
                          </button>
                          <button id="outdent" class="option-button spacing">
                            <i class="fa-solid fa-outdent"></i>
                          </button>
                          <!-- Headings -->
                          <select id="formatBlock" class="adv-option-button">
                            <option value="H1">H1</option>
                            <option value="H2">H2</option>
                            <option value="H3">H3</option>
                            <option value="H4">H4</option>
                            <option value="H5">H5</option>
                            <option value="H6">H6</option>
                          </select>
                          <!-- Font -->
                          <select id="fontName" class="adv-option-button"></select>
                          <select id="fontSize" class="adv-option-button"></select>
                          <!-- Color -->
                          <div class="input-wrapper">
                            <input type="color" id="foreColor" class="adv-option-button" />
                            <label for="foreColor">Font Color</label>
                          </div>
                          <div class="input-wrapper">
                            <input type="color" id="backColor" class="adv-option-button" />
                            <label for="backColor">Highlight Color</label>
                          </div>
                        </div>
                        <div id="text-input" contenteditable="true"></div>
                      </div>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name Author</label>
                      <input type="text" class="form-control">
                    </div>


                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">Tambah</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>
