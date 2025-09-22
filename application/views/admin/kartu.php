<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Kartu Pemilih</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png"> <!-- favicon custom -->
    <script>
        window.print();
    </script>
    <style>
        .kartu {
            position: relative;
            float: left;
            border: 1px solid black;
            margin: 10px;
            padding: 0 5px 5px 5px;
            width: 325px;
            height: 155px;
        }

        h4 {
            margin: 0px;
            text-align: center;
        }

        hr {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php foreach ($pemilih as $p) : ?>
        <div class="kartu">
            <h4>Kartu Pemilihan Ketua OSIM</h4>
            <h4>MAN 2 PEKANBARU</h4>
            <hr>
            <table>

                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td><?= base64_decode($p->nama); ?></td>
                </tr>
                <tr>
                    <th>Level</th>
                    <td>:</td>
                    <td><?= base64_decode($p->kelas); ?></td>
                </tr>
                <tr>
                    <th>Kode</th>
                    <td>:</td>
                    <td><?= $p->kunci ?></td>
                </tr>
            </table>
            <div style="margin-top: 4px; padding-left: 5px">
                Pemilih dapat melakukan pemilihan di :
                <?= base_url(); ?>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>