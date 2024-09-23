<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>{{ $title }}</h1>
        <p>Tanggal: {{ $date }}</p>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Pasien</th>
                <th>Usia</th>
                <th>Tanggal Pemeriksaan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($healthReports as $report)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $report->patient_name }}</td>
                <td>{{ $report->age }}</td>
                <td>{{ date('d-m-Y', strtotime($report->checkup_date)) }}</td>
                <td>{{ $report->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
