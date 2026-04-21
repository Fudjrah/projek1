<!DOCTYPE html>
<html lang="en">
<head>
    <title>Katalog Lagu</title>
    <style>
       table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
       }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Tambah Lagu Favorit</h2>

        <form action="{{route('lagu.store')}}"method="POST">
       @csrf 
        <div class="form-group">
            <input type="text" name="judul" placeholder="Judul Lagu" required>
            <input type="text" name="penulis" placeholder="Penulis" required>
            <input type="text" name="nama_grup" placeholder="Nama Grup" required>
            <input type="number" name="tahun_rilis" placeholder="Tahun Rilis" required>
            <button type="submit">Simpan Lagu</button>
        </div>
        </form>

        <hr>

        <h2>Daftar Lagu</h2>
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Grup</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semuaLagu as $l)
                <tr>
                    <td>{{ $l->judul }}</td>
                    <td>{{ $l->penulis }}</td>
                    <td>{{ $l->nama_grup }}</td>
                    <td>{{ $l->tahun_rilis }}</td>
                    <td>
                        <form action="{{ route('lagu.destroy',$l->id) }}"method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>

                        <a href="{{route('lagu.edit',$l->id)}}"style="padding:3px 10px;text-decoration:none;color:black;border:1px solid black;">edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>