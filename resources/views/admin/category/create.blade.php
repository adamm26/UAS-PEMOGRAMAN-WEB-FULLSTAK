@extends('layouts.app')

@section('content')
<div class="cat-page">

    <div class="hero-head">
        <div class="hero-text">
            <p class="eyebrow">Manajemen Ruangan</p>
            <h1>Tambah Kategori Ruangan</h1>
            <p class="subtitle">Buat kategori baru untuk mengelompokkan ruangan/venue di platform.</p>
        </div>
        <a href="{{ route('index-category') }}" class="btn btn-outline">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6"/>
            </svg>
            Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-error">
            <strong>Periksa kembali isian Anda:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('category-submit') }}" method="POST" class="cat-form" id="catForm">
        @csrf

        <div class="card">
            <div class="step-marker">1</div>
            <div class="card-head">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18"/><path d="M9 21V9"/>
                    </svg>
                </div>
                <div>
                    <h2>Informasi Dasar</h2>
                    <p>Nama, identitas, dan deskripsi kategori</p>
                </div>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="name">NAMA KATEGORI</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}" placeholder="Contoh: Gedung Pertemuan" required>
                    @error('name')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="slug">SLUG</label>
                    <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror"
                        value="{{ old('slug') }}" placeholder="gedung-pertemuan" required>
                    @error('slug')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="icon">ICON <span class="optional">(mis. "building")</span></label>
                    <input type="text" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror"
                        value="{{ old('icon') }}" placeholder="building">
                    @error('icon')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="color">WARNA PENANDA</label>
                    <div class="color-field">
                        <label class="color-swatch-wrap">
                            <input type="color" id="color_picker" value="{{ old('color', '#3B82F6') }}">
                            <span class="color-swatch" id="colorSwatch" style="background: {{ old('color', '#3B82F6') }}"></span>
                        </label>
                        <input type="text" name="color" id="color" class="form-control @error('color') is-invalid @enderror"
                            value="{{ old('color', '#3B82F6') }}" placeholder="#3B82F6">
                    </div>
                    @error('color')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group full">
                    <label for="description">DESKRIPSI</label>
                    <textarea name="description" id="description" rows="4"
                        class="form-control @error('description') is-invalid @enderror"
                        placeholder="Jelaskan secara singkat kategori ruangan ini">{{ old('description') }}</textarea>
                    @error('description')<span class="error-text">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <div class="card">
            <div class="step-marker">2</div>
            <div class="card-head">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>
                    </svg>
                </div>
                <div>
                    <h2>Aturan Booking</h2>
                    <p>Batasan waktu dan durasi pemesanan</p>
                </div>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="max_booking_days_ahead">MAKS. BOOKING DI MUKA (HARI)</label>
                    <div class="input-suffix">
                        <input type="number" name="max_booking_days_ahead" id="max_booking_days_ahead"
                            class="form-control @error('max_booking_days_ahead') is-invalid @enderror"
                            value="{{ old('max_booking_days_ahead') }}" placeholder="30" min="0">
                        <span>hari</span>
                    </div>
                    @error('max_booking_days_ahead')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="max_duration_hours">MAKS. DURASI</label>
                    <div class="input-suffix">
                        <input type="number" name="max_duration_hours" id="max_duration_hours"
                            class="form-control @error('max_duration_hours') is-invalid @enderror"
                            value="{{ old('max_duration_hours') }}" placeholder="8" min="0">
                        <span>jam</span>
                    </div>
                    @error('max_duration_hours')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="min_duration_minutes">MIN. DURASI</label>
                    <div class="input-suffix">
                        <input type="number" name="min_duration_minutes" id="min_duration_minutes"
                            class="form-control @error('min_duration_minutes') is-invalid @enderror"
                            value="{{ old('min_duration_minutes') }}" placeholder="30" min="0">
                        <span>menit</span>
                    </div>
                    @error('min_duration_minutes')<span class="error-text">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="sort_order">URUTAN TAMPIL</label>
                    <input type="number" name="sort_order" id="sort_order"
                        class="form-control @error('sort_order') is-invalid @enderror"
                        value="{{ old('sort_order', 0) }}" min="0">
                    @error('sort_order')<span class="error-text">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <div class="card">
            <div class="step-marker">3</div>
            <div class="card-head">
                <div class="card-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/><circle cx="12" cy="12" r="9"/>
                    </svg>
                </div>
                <div>
                    <h2>Status</h2>
                    <p>Visibilitas dan persetujuan kategori</p>
                </div>
            </div>

            <div class="toggle-grid">
                <label class="toggle-card">
                    <input type="checkbox" name="requires_approval" value="1" {{ old('requires_approval') == '1' ? 'checked' : '' }}>
                    <span class="toggle-switch"></span>
                    <span class="toggle-text">
                        <strong>Perlu Approval</strong>
                        <small>Booking harus disetujui admin sebelum dikonfirmasi</small>
                    </span>
                </label>

                <label class="toggle-card">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
                    <span class="toggle-switch"></span>
                    <span class="toggle-text">
                        <strong>Aktifkan Kategori</strong>
                        <small>Kategori akan langsung tampil & bisa dipilih</small>
                    </span>
                </label>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12l5 5L20 7"/>
                </svg>
                Simpan Kategori
            </button>
            <a href="{{ route('index-category') }}" class="btn btn-ghost">Batal</a>
        </div>
    </form>
</div>

<style>
    :root {
        --navy: #1e3a5f;
        --navy-dark: #16293f;
        --gold: #d8a13a;
        --gold-light: #f1c66b;
        --bg: #f4f5f7;
        --card: #ffffff;
        --border: #e6e8ec;
        --text: #1f2733;
        --text-muted: #6b7380;
        --danger: #c0392b;
        --success: #1e7e4f;
    }

    .cat-page { max-width: 800px; margin: 0 auto; font-family: 'Plus Jakarta Sans', -apple-system, sans-serif; }

    .hero-head {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        flex-wrap: wrap;
        gap: 16px;
        background: linear-gradient(120deg, var(--navy-dark) 0%, var(--navy) 60%, #2a4d76 100%);
        border-radius: 18px;
        padding: 28px 30px;
        margin-bottom: 24px;
        position: relative;
        overflow: hidden;
    }
    .hero-head::after {
        content: "";
        position: absolute;
        right: -40px;
        top: -60px;
        width: 220px;
        height: 220px;
        background: radial-gradient(circle, rgba(216,161,58,.35), transparent 70%);
    }
    .hero-text { position: relative; z-index: 1; }
    .eyebrow {
        text-transform: uppercase;
        font-size: 11.5px;
        letter-spacing: .1em;
        color: var(--gold-light);
        font-weight: 700;
        margin: 0 0 8px;
    }
    .hero-head h1 { font-size: 25px; font-weight: 800; color: #fff; margin: 0 0 6px; }
    .subtitle { color: rgba(255,255,255,.72); margin: 0; font-size: 14px; max-width: 480px; }

    .btn {
        display: inline-flex; align-items: center; gap: 8px;
        padding: 11px 20px; border-radius: 10px;
        font-weight: 700; font-size: 14px;
        text-decoration: none; border: 1px solid transparent;
        cursor: pointer; transition: all .15s ease;
        position: relative; z-index: 1;
    }
    .btn-outline { background: rgba(255,255,255,.12); border-color: rgba(255,255,255,.25); color: #fff; backdrop-filter: blur(2px); }
    .btn-outline:hover { background: rgba(255,255,255,.2); }
    .btn-primary { background: var(--navy-dark); color: #fff; box-shadow: 0 4px 14px rgba(22,41,63,.35); }
    .btn-primary:hover { background: var(--navy); }
    .btn-ghost { background: transparent; color: var(--text-muted); border-color: var(--border); }
    .btn-ghost:hover { color: var(--text); border-color: var(--navy); }

    .card {
        background: var(--card);
        border: 1px solid var(--border);
        border-left: 4px solid var(--gold);
        border-radius: 16px;
        padding: 26px 28px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(16,24,40,.05);
        position: relative;
    }
    .step-marker {
        position: absolute;
        top: 22px;
        right: 26px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #f1f3f6;
        color: var(--text-muted);
        font-weight: 800;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-head { display: flex; gap: 14px; align-items: flex-start; margin-bottom: 22px; }
    .card-icon {
        width: 38px; height: 38px;
        border-radius: 10px;
        background: #fbf2e1;
        color: var(--gold);
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
    }
    .card-head h2 { font-size: 16px; font-weight: 800; color: var(--navy-dark); margin: 0 0 3px; }
    .card-head p { font-size: 13px; color: var(--text-muted); margin: 0; }

    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px 20px; }
    .form-group.full { grid-column: 1 / -1; }

    .form-group label {
        display: block; font-size: 12px; font-weight: 700;
        letter-spacing: .04em; color: var(--navy-dark); margin-bottom: 8px;
    }
    .optional { color: var(--text-muted); font-weight: 500; text-transform: none; letter-spacing: 0; }

    .form-control {
        width: 100%; background: #eef0f3; border: 1px solid transparent;
        border-radius: 10px; padding: 11px 14px; font-size: 14.5px;
        color: var(--text); outline: none; font-family: inherit;
        transition: border-color .15s ease, background .15s ease;
    }
    .form-control::placeholder { color: #9aa1ad; }
    .form-control:focus { background: #fff; border-color: var(--gold); box-shadow: 0 0 0 3px rgba(216,161,58,.18); }
    .form-control.is-invalid { border-color: var(--danger); background: #fdf1f0; }
    textarea.form-control { resize: vertical; min-height: 96px; }

    .input-suffix { position: relative; }
    .input-suffix input { padding-right: 56px; }
    .input-suffix span {
        position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
        font-size: 12.5px; color: var(--text-muted); font-weight: 600;
        pointer-events: none;
    }

    .color-field { display: flex; gap: 10px; align-items: center; }
    .color-swatch-wrap { position: relative; flex-shrink: 0; cursor: pointer; }
    .color-swatch-wrap input[type="color"] { position: absolute; inset: 0; opacity: 0; cursor: pointer; }
    .color-swatch {
        display: block; width: 44px; height: 42px;
        border-radius: 10px; border: 1px solid var(--border);
        box-shadow: inset 0 0 0 3px #fff;
    }

    .error-text { display: block; color: var(--danger); font-size: 12.5px; margin-top: 6px; font-weight: 600; }

    .alert { border-radius: 10px; padding: 14px 16px; font-size: 13.5px; margin-bottom: 22px; }
    .alert-error { background: #fdf1f0; color: var(--danger); border: 1px solid #f4d4d0; }
    .alert-error ul { margin: 6px 0 0 18px; padding: 0; }
    .alert-success { background: #ecf8f1; color: var(--success); border: 1px solid #c9ecd8; }

    .toggle-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .toggle-card {
        display: flex; align-items: flex-start; gap: 14px;
        background: #f8f9fb; border: 1px solid var(--border);
        border-radius: 12px; padding: 16px; cursor: pointer;
        transition: border-color .15s ease, background .15s ease;
    }
    .toggle-card:has(input:checked) { border-color: var(--navy); background: #eef3f8; }
    .toggle-card input { display: none; }
    .toggle-switch {
        width: 38px; height: 22px; border-radius: 999px; background: #d3d7dd;
        flex-shrink: 0; position: relative; transition: .2s; margin-top: 2px;
    }
    .toggle-switch::before {
        content: ""; position: absolute; width: 16px; height: 16px; border-radius: 50%;
        background: #fff; top: 3px; left: 3px; transition: .2s; box-shadow: 0 1px 2px rgba(0,0,0,.2);
    }
    .toggle-card input:checked + .toggle-switch { background: var(--navy); }
    .toggle-card input:checked + .toggle-switch::before { transform: translateX(16px); }
    .toggle-text strong { display: block; font-size: 14px; color: var(--text); margin-bottom: 2px; }
    .toggle-text small { font-size: 12px; color: var(--text-muted); line-height: 1.4; }

    .form-actions {
        display: flex; gap: 12px;
        position: sticky; bottom: 16px;
        background: rgba(244,245,247,.9);
        backdrop-filter: blur(6px);
        padding: 14px;
        border-radius: 14px;
        border: 1px solid var(--border);
    }

    @media (max-width: 640px) {
        .form-grid, .toggle-grid { grid-template-columns: 1fr; }
        .hero-head { flex-direction: column; align-items: stretch; }
        .form-actions { flex-direction: column; position: static; }
        .btn { width: 100%; justify-content: center; }
        .card { padding: 20px; }
        .step-marker { display: none; }
    }
</style>

<script>
    const colorPicker = document.getElementById('color_picker');
    const colorText = document.getElementById('color');
    const colorSwatch = document.getElementById('colorSwatch');

    colorPicker.addEventListener('input', () => {
        colorText.value = colorPicker.value;
        colorSwatch.style.background = colorPicker.value;
    });
    colorText.addEventListener('input', () => {
        if (/^#[0-9A-Fa-f]{6}$/.test(colorText.value)) {
            colorPicker.value = colorText.value;
            colorSwatch.style.background = colorText.value;
        }
    });
</script>
@endsection
