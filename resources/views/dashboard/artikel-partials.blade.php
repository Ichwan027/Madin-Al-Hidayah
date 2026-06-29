<div class="card">

    <div class="card-header">

        <h4>Form Artikel</h4>

    </div>

    <div class="card-body">

        {{-- Kategori --}}
        <div class="mb-3">

            <label class="form-label">Kategori</label>

            <select name="kategori" class="form-select">

                <option value="">-- Pilih Kategori --</option>

                <option value="Kegiatan"
                    {{ old('kategori', $artikel->kategori ?? '') == 'Kegiatan' ? 'selected' : '' }}>
                    Kegiatan
                </option>

                <option value="Prestasi"
                    {{ old('kategori', $artikel->kategori ?? '') == 'Prestasi' ? 'selected' : '' }}>
                    Prestasi
                </option>

                <option value="Pembelajaran"
                    {{ old('kategori', $artikel->kategori ?? '') == 'Pembelajaran' ? 'selected' : '' }}>
                    Pembelajaran
                </option>

                <option value="Pengumuman"
                    {{ old('kategori', $artikel->kategori ?? '') == 'Pengumuman' ? 'selected' : '' }}>
                    Pengumuman
                </option>

            </select>

        </div>

        {{-- Judul --}}
        <div class="mb-3">

            <label class="form-label">Judul Artikel</label>

            <input type="text"
                   name="judul"
                   class="form-control"
                   value="{{ old('judul', $artikel->judul ?? '') }}"
                   placeholder="Masukkan judul artikel">

        </div>

        {{-- Penulis --}}
        <div class="mb-3">

            <label class="form-label">Penulis</label>

            <input type="text"
                   name="penulis"
                   class="form-control"
                   value="{{ old('penulis', $artikel->penulis ?? auth()->user()->name) }}"
                   readonly>

        </div>

        {{-- Thumbnail --}}
        <div class="mb-3">

            <label class="form-label">Foto Thumbnail Artikel</label>

            <input type="file"
                   name="thumbnail"
                   class="form-control">

        </div>

        {{-- Preview Thumbnail (halaman edit) --}}
        @isset($artikel)

            @if($artikel->thumbnail)

                <div class="mb-3">

                    <label>Thumbnail Saat Ini</label>

                    <br>

                    <img src="{{ asset('uploads/artikel/'.$artikel->thumbnail) }}"
                         width="220"
                         class="img-thumbnail">

                </div>

            @endif

        @endisset

        {{-- Isi Artikel --}}
        <div class="mb-3">

            <label class="form-label">Isi Artikel</label>

            <textarea name="isi"
                      rows="10"
                      class="form-control"
                      placeholder="Isi artikel">{{ old('isi', $artikel->isi ?? '') }}</textarea>

        </div>

        {{-- Status --}}
        <div class="mb-3">

            <label class="form-label">Status</label>

            <select name="status" class="form-select">

                <option value="Draft"
                    {{ old('status', $artikel->status ?? '') == 'Draft' ? 'selected' : '' }}>
                    Draft
                </option>

                <option value="Publish"
                    {{ old('status', $artikel->status ?? '') == 'Publish' ? 'selected' : '' }}>
                    Publish
                </option>

            </select>

        </div>

    </div>

</div>