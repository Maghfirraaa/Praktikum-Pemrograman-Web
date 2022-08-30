<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jadwal</title>
</head>
<body>
    <form action="aksi.php" method="post">
        <table>
            <tr>
                <td>Hari</td>
                <td>
                    <select name="hari" id="">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam</td>
                <td><input type="text" name="jam" required=""></td>
            </tr>
            <tr>
                <td>Ruang</td>
                <td><input type="text" name="ruang" required=""></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>
                    <select name="matkul" id="">
                        <option value="1">Pemrograman Web</option>
                        <option value="2">Metodologi Penelitian</option>
                        <option value="3">Artificial Intelligence</option>
                        <option value="4">Jaringan Komputer</option>
                        <option value="5">Grafika Komputer</option>
                        <option value="6">Bahasa Inggris</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SAVE"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>
</html>