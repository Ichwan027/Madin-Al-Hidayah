<div class="card">

    <div class="card-header">

        <h4>Form Pengumuman</h4>

    </div>

    <div class="card-body">

        {{-- Judul --}}
        <div class="mb-3">

            <label class="form-label">
                Judul Pengumuman
            </label>

            <input type="text"
                   name="judul"
                   class="form-control"
                   placeholder="Masukkan judul pengumuman"
                   value="{{ old('judul', $pengumuman->judul ?? '') }}">

        </div>


        {{-- Tanggal --}}
        <div class="mb-3">

            <label class="form-label">
                Tanggal Pengumuman
            </label>

            <input type="date"
                   name="tanggal"
                   class="form-control"
                   value="{{ old('tanggal', $pengumuman->tanggal ?? date('Y-m-d')) }}">

        </div>


        {{-- Isi --}}
        <div class="mb-3">

            <label class="form-label">
                Isi Pengumuman
            </label>

            <textarea name="isi"
                      rows="10"
                      class="form-control"
                      placeholder="Masukkan isi pengumuman">{{ old('isi', $pengumuman->isi ?? '') }}</textarea>

        </div>


        {{-- Status --}}
        <div class="mb-3">

            <label class="form-label">
                Status
            </label>

            <select name="status"
                    class="form-select">

                <option value="Draft"
                    {{ old('status', $pengumuman->status ?? '') == 'Draft' ? 'selected' : '' }}>

                    Draft

                </option>

                <option value="Publish"
                    {{ old('status', $pengumuman->status ?? '') == 'Publish' ? 'selected' : '' }}>

                    Publish

                </option>

            </select>

        </div>

    </div>

</div>