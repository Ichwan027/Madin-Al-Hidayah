<div class="card">

    <div class="card-header">
        <h4>Form User</h4>
    </div>

    <div class="card-body">

        {{-- FOTO --}}
        <div class="mb-3">
            <label>Foto Profil</label>
            <input type="file"
                   name="foto"
                   class="form-control">
        </div>

        {{-- NAMA --}}
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name', $user->name ?? '') }}">
        </div>

        {{-- USERNAME --}}
        <div class="mb-3">
            <label>Username</label>
            <input type="text"
                   name="username"
                   class="form-control"
                   value="{{ old('username', $user->username ?? '') }}">
        </div>

        {{-- EMAIL --}}
        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ old('email', $user->email ?? '') }}">
        </div>

        {{-- PASSWORD --}}
        <div class="mb-3">
            <label>Password</label>
            <input type="password"
                   name="password"
                   class="form-control">
        </div>

        {{-- KONFIRMASI PASSWORD --}}
        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control">
        </div>

        {{-- ROLE --}}
        <div class="mb-3">
            <label>Role</label>

            <select name="role" class="form-select">

                <option value="Admin"
                    {{ ($user->role ?? '') == 'Admin' ? 'selected' : '' }}>
                    Admin
                </option>

                <option value="User"
                    {{ ($user->role ?? '') == 'User' ? 'selected' : '' }}>
                    User
                </option>

            </select>
        </div>

        {{-- STATUS --}}
        <div class="mb-3">

            <label>Status</label>

            <select name="status" class="form-select">

                <option value="Aktif"
                    {{ ($user->status ?? '') == 'Aktif' ? 'selected' : '' }}>
                    Aktif
                </option>

                <option value="Nonaktif"
                    {{ ($user->status ?? '') == 'Nonaktif' ? 'selected' : '' }}>
                    Nonaktif
                </option>

            </select>

        </div>

    </div>

</div>