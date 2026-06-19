@extends('layouts.app')

@section('content')

<form action="{{ route('room-update-submit', $room->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <table>
        <tr>
            <td><label for="name">Nama Ruangan</label></td>
            <td>
                <input type="text" name="name" id="name"
                    value="{{ old('name', $room->name) }}" required>
            </td>
        </tr>

        <tr>
            <td><label for="code">Kode Ruangan</label></td>
            <td>
                <input type="text" name="code" id="code"
                    value="{{ old('code', $room->code) }}" required>
            </td>
        </tr>

        <tr>
            <td><label for="category_id">Kategori</label></td>
            <td>
                <select name="category_id" id="category_id" required>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}"
                            {{ $room->category_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="building">Gedung</label></td>
            <td>
                <input type="text" name="building"
                    value="{{ old('building', $room->building) }}" required>
            </td>
        </tr>

        <tr>
            <td><label for="floor">Lantai</label></td>
            <td>
                <input type="number" name="floor"
                    value="{{ old('floor', $room->floor) }}" required>
            </td>
        </tr>

        <tr>
            <td><label for="capacity">Kapasitas</label></td>
            <td>
                <input type="number" name="capacity"
                    value="{{ old('capacity', $room->capacity) }}" required>
            </td>
        </tr>

        <tr>
            <td><label for="description">Deskripsi</label></td>
            <td>
                <textarea name="description" rows="5" cols="50" required>{{ old('description', $room->description) }}</textarea>
            </td>
        </tr>

        <tr>
            <td><label>Gambar Ruangan</label></td>
            <td>
                <div style="display:flex; gap:20px; align-items:flex-start;">

                    {{-- Gambar Lama --}}
                    <div>
                        <p>Gambar Saat Ini</p>
                        <img src="{{ asset('uploads/rooms/' . $room->image) }}"
                             width="250"
                             style="border:1px solid #ccc">
                    </div>

                    {{-- Gambar Baru --}}
                    <div>
                        <p>Ganti Gambar (Opsional)</p>

                        <input type="file"
                               name="image"
                               id="imageInput"
                               accept=".png,.jpg,.jpeg,.webp">

                        <br><br>

                        <img id="imagePreview"
                             src="#"
                             width="250"
                             style="display:none;border:1px solid #ccc">
                    </div>

                </div>
            </td>
        </tr>

        <tr>
            <td><label for="is_active">Status</label></td>
            <td>
                <select name="is_active">
                    <option value="1" {{ $room->is_active ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ !$room->is_active ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="open_time">Jam Buka</label></td>
            <td>
                <input type="time"
                       name="open_time"
                       value="{{ old('open_time', $room->open_time) }}"
                       required>
            </td>
        </tr>

        <tr>
            <td><label for="close_time">Jam Tutup</label></td>
            <td>
                <input type="time"
                       name="close_time"
                       value="{{ old('close_time', $room->close_time) }}"
                       required>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit">Update</button>

                <a href="{{ route('index-rooms') }}">
                    Batal
                </a>
            </td>
        </tr>
    </table>

</form>

@endsection
