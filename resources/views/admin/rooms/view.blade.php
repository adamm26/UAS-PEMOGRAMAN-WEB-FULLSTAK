@extends('layouts.app')
@vite(['resources/css/admin/rooms/view.css'])
@section('content')

<h1>Detail Ruangan</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <td>{{ $view->id }}</td>
    </tr>

    <tr>
        <th>Nama Ruangan</th>
        <td>{{ $view->name }}</td>
    </tr>

    <tr>
        <th>Kode Ruangan</th>
        <td>{{ $view->code }}</td>
    </tr>

    <tr>
        <th>ID Kategori</th>
        <td>{{ $view->category_id }}</td>
    </tr>

    <tr>
        <th>Gedung</th>
        <td>{{ $view->building }}</td>
    </tr>

    <tr>
        <th>Lantai</th>
        <td>{{ $view->floor }}</td>
    </tr>

    <tr>
        <th>Kapasitas</th>
        <td>{{ $view->capacity }}</td>
    </tr>

    <tr>
        <th>Deskripsi</th>
        <td>{{ $view->description }}</td>
    </tr>

    <tr>
        <th>Status</th>
        <td>
            {{ $view->is_active ? 'Aktif' : 'Tidak Aktif' }}
        </td>
    </tr>

    <tr>
        <th>Jam Buka</th>
        <td>{{ $view->open_time }}</td>
    </tr>

    <tr>
        <th>Jam Tutup</th>
        <td>{{ $view->close_time }}</td>
    </tr>

    <tr>
        <th>Dibuat Pada</th>
        <td>{{ $view->created_at }}</td>
    </tr>

    <tr>
        <th>Diubah Pada</th>
        <td>{{ $view->updated_at }}</td>
    </tr>
</table>

<br>

<h2>Gambar Ruangan</h2>

<div>
    @if ($view->image)

    <figure class="container-image-view">

        <img
        src="{{ asset('uploads/rooms/' . $view->image) }}"
        alt="{{ $view->name }}"
        width="500"
        >
    </figure>
    @else
        <p>Belum ada gambar ruangan.</p>
    @endif
</div>

<br>

<a >
    Edit
</a>

|

<a href="{{ route('index-rooms') }}">
    Kembali
</a>

@endsection
