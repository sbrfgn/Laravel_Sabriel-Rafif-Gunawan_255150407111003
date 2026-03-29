<!DOCTYPE html>
<html>
<body>
    <h2>Form Input Data</h2>
    <form action="/store" method="POST">
        @csrf
        Nama: <input type="text" name="nama" required><br>
        Keterangan: <input type="text" name="keterangan" required><br>
        <button type="submit">Simpan</button>
    </form>

    <h2>Daftar Data</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Keterangan</th>
        </tr>
        @foreach($records as $r)
        <tr>
            <td>{{ $r->id }}</td>
            <td>{{ $r->nama }}</td>
            <td>{{ $r->keterangan }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>