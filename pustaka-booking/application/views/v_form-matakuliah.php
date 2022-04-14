<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mata Kuliah</title>
</head>
<body>
    <center>
    <form action="http://localhost/TugasWebProgramming_DanielRahardja_17190521/pustaka-booking/matakuliah/cetak" method="post">
        <table>
            <tr>
                <th colspan=  "3">
                    FORM INPUT MATA KULIAH
                </th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <td>Kode Matkul</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode"></td>
            </tr>
            <tr>
                <td>Nama Matkul</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>