<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pegawai</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0px 5px 20px rgba(0,0,0,0.15);
            padding: 30px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 14px 18px;
            text-align: left;
        }
        th {
            background: #3498db;
            color: #fff;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        tr:hover {
            background: #f1f7fd;
        }
        /* Hobby styling */
        .hobby-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .hobby-item {
            background: #3498db;
            color: white;
            padding: 6px 14px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 500;
            transition: 0.3s;
        }
        .hobby-item:hover {
            background: #2c80b4;
        }
        /* Motivasi highlight */
        .motivasi {
            font-weight: bold;
            color: #27ae60;
        }
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Pegawai</h1>
        <table>
            <tr>
                <th>Data</th>
                <th>Informasi</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>{{ $my_age }} tahun</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <div class="hobby-list">
                        @foreach($hobbies as $hobby)
                            <span class="hobby-item">{{ $hobby }}</span>
                        @endforeach
                    </div>
                </td>
            </tr>
            <tr>
                <td>Tanggal Harus Wisuda</td>
                <td>{{ $tgl_harus_wisuda }}</td>
            </tr>
            <tr>
                <td>Sisa Hari Menuju Wisuda</td>
                <td>{{ $time_to_study_left }} hari</td>
            </tr>
            <tr>
                <td>Semester Saat Ini</td>
                <td>{{ $current_semester }}</td>
            </tr>
            <tr>
                <td>Motivasi</td>
                <td class="motivasi">{{ $motivasi }}</td>
            </tr>
            <tr>
                <td>Cita-cita</td>
                <td>{{ $future_goal }}</td>
            </tr>
        </table>
        <div class="footer">
            &copy; {{ date('Y') }} Profil Pegawai - Dibuat dengan Laravel
        </div>
    </div>
</body>
</html>
