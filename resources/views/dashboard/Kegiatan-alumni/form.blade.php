<div class="card-body">

    <div class="form-group">

        <label>Judul</label>

        <input type="text"
               name="judul"
               class="form-control"
               value="{{ old('judul',$kegiatan_alumni->judul ?? '') }}"
               required>

    </div>

    <div class="form-group">

        <label>Tanggal</label>

        <input type="date"
               name="tanggal"
               class="form-control"
               value="{{ old('tanggal',$kegiatan_alumni->tanggal ?? '') }}"
               required>

    </div>

    <div class="form-group">

        <label>Cover</label>

        <input type="file"
               name="cover"
               class="form-control">

        @isset($kegiatan_alumni)

            @if($kegiatan_alumni->cover)

                <img src="{{ asset('uploads/kegiatan-alumni/'.$kegiatan_alumni->cover) }}"
                     class="img-thumbnail mt-2"
                     width="200">

            @endif

        @endisset

    </div>

    <div class="form-group">

        <label>Isi</label>

        <textarea name="isi"
                  id="editor"
                  rows="10"
                  class="form-control">{{ old('isi',$kegiatan_alumni->isi ?? '') }}</textarea>

    </div>

    <div class="form-group">

        <label>Status</label>

        <select name="status"
                class="form-control">

            <option value="Publish"

            {{ old('status',$kegiatan_alumni->status ?? '')=='Publish'?'selected':'' }}>

                Publish

            </option>

            <option value="Draft"

            {{ old('status',$kegiatan_alumni->status ?? '')=='Draft'?'selected':'' }}>

                Draft

            </option>

        </select>

    </div>

</div>

<div class="card-footer">

    <button class="btn btn-primary">

        Simpan

    </button>

    <a href="{{ route('dash.kegiatan-alumni') }}"
       class="btn btn-secondary">

        Kembali

    </a>

</div>