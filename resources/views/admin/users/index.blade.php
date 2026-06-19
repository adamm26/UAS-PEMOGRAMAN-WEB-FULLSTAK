@extends('layouts.app')

@section('content')

<h1>Daftar User</h1>

<a >
    Tambah User
</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Dibuat Pada</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>

                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>{{ ucfirst($user->role) }}</td>

                <td>{{ $user->created_at }}</td>

                <td>
                    <a >
                        Detail
                    </a>

                    |

                    <a >
                        Edit
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    Tidak ada data user.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
