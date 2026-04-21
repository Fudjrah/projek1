<!DOCTYPE html>
<html lang="en">
<head>
    <tittle>Edit Lagu Favorit</tittle>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit Data Lagu</h2>
    <form action="{{route('lagu.update',$lagu->id) }}"method="POST">
        @csrf
        @method('PUT') <label>Judul</label><br>
        <input type="text" name="judul" value="{{ $lagu->judul }}"
    required><br><br>

    <label>Penulis:</label><br>
    <input type="text" name="penulis" value="{{$lagu->penulis}}"
    required><br><br>

    <label>Tahun Rilis:</label><br>
    <input type="number" name="tahun_rilis" value="{{$lagu->tahun_rilis }}" required><br><br>

    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('lagu.index')}}">Batal</a>
    </form>
    
</body>
</html>