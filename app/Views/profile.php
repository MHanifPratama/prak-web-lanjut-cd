<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Validate -->
    <table>
        <tr aria-colspan="3">
            <td>
                <img src="<?=base_url('/assets/img/erd_API_Phase2.png')?>" size="200" height="200">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$nama?></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><?=$npm?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?=$id_kelas?></td>
        </tr>
    </table>
</body>
</html>