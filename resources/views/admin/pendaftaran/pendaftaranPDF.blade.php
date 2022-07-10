<!DOCTYPE html>
<html>

    <head>
        <title>Data Pendaftaran</title>
    </head>

    <body>
        <h2 align="center">Data Pendaftaran</h2>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
            <thead>
                <tr bgcolor="grey">
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>No Antrian</th>
                    <th>Tanggal Pendaftaran</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($data as $r)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $r->pasien }}</td>
                    <td>{{ $r->dokter }}</td>
                    <td>{{ $r->no_antrian }}</td>
                    <td>{{ $r->tgl_pendaftaran }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>