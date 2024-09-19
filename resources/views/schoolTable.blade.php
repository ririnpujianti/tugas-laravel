<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Guru dan Siswa</title>
</head>
<body>
    <h1>Daftar Guru dan Siswa</h1>

    <table border='1' cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Guru</h1>
                <th>Mata Pelajaran</h1>
                <th>Daftar Siswa</h1>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $teacher)
    <tr>
        <td>{{ $teacher->nama }}</td>
        <td>{{ $teacher->mapel }}</td>
        <td>
            <ul>
                @if($teacher->student->isNotEmpty())
                    @foreach($teacher->student as $student)
                        <li>{{ $student->nama }}</li>
                    @endforeach
                @else
                    <li><em>Tidak ada siswa</em></li>
                @endif
            </ul>
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
</body>
</html>
