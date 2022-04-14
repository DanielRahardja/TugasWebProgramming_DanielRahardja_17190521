<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
    <table>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <th>Kode Matkul</th>
            <th>:</th>
            <td><?= $kode ;?></td>
        </tr>
        <tr>
            <th>Nama Matkul</th>
            <th>:</th>
            <td><?= $nama ;?></td>
        </tr>
        <tr>
            <th>SKS</th>
            <th>:</th>
            <td><?= $sks ;?></td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="http://localhost/TugasWebProgramming_DanielRahardja_17190521/pustaka-booking/matakuliah">Kembali</a>
            </td>
        </tr>
    </table>
    </center>
</body>
</html>