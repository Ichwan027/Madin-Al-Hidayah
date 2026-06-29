<div class="card">

    <div class="card-header">
        <h4>Form Galeri</h4>
    </div>

    <div class="card-body">

        {{-- Kategori --}}
        <div class="mb-3">
            <label class="form-label">Kategori</label>

            <select name="kategori" class="form-select">

                <option value="Kegiatan"
                    {{ old('kategori', $galeri->kategori ?? '') == 'Kegiatan' ? 'selected' : '' }}>
                    Kegiatan
                </option>

                <option value="Pembelajaran"
                    {{ old('kategori', $galeri->kategori ?? '') == 'Pembelajaran' ? 'selected' : '' }}>
                    Pembelajaran
                </option>

                <option value="Prestasi"
                    {{ old('kategori', $galeri->kategori ?? '') == 'Prestasi' ? 'selected' : '' }}>
                    Prestasi
                </option>

                <option value="Ramadhan"
                    {{ old('kategori', $galeri->kategori ?? '') == 'Ramadhan' ? 'selected' : '' }}>
                    Ramadhan
                </option>

                <option value="Wisuda"
                    {{ old('kategori', $galeri->kategori ?? '') == 'Wisuda' ? 'selected' : '' }}>
                    Wisuda
                </option>

            </select>
        </div>


        {{-- Judul --}}
        <div class="mb-3">

            <label class="form-label">Judul Galeri</label>

            <input type="text"
                   name="judul"
                   class="form-control"
                   placeholder="Masukkan judul galeri"
                   value="{{ old('judul', $galeri->judul ?? '') }}">

        </div>


        {{-- Deskripsi --}}
        <div class="mb-3">

            <label class="form-label">Deskripsi</label>

            <textarea rows="5"
                      name="deskripsi"
                      class="form-control"
                      placeholder="Masukkan deskripsi galeri">{{ old('deskripsi', $galeri->deskripsi ?? '') }}</textarea>

        </div>


        {{-- Cover --}}
        <div class="mb-3">

            <label class="form-label">Foto Cover</label>

            <input type="file"
                   name="cover"
                   class="form-control">

        </div>


        {{-- Preview Cover Lama (halaman edit) --}}
        @isset($galeri)

            @if($galeri->cover)

                <div class="mb-3">

                    <label class="form-label">
                        Cover Saat Ini
                    </label>

                    <br>

                    <img src="{{ asset('uploads/galeri/'.$galeri->cover) }}"
                         width="200"
                         class="img-thumbnail">

                </div>

            @endif

        @endisset


        {{-- Upload Banyak Foto --}}
        <div class="mb-3">

            <label class="form-label">
                Upload Banyak Foto
            </label>

            <input type="file"
                   name="foto[]"
                   multiple
                   class="form-control">

        </div>

    </div>

</div>