<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Piket</title>
    <!-- Sertakan CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Jadwal Piket</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Shift</th>
                    <th>Anggota Tim</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Simpan data tim Anda di sini
                $teams = [
                    1 => ['Catur', 'Tri', 'Tyas', 'Andre'],
                    2 => ['Nauli', 'Ega', 'Ridho', 'Siti'],
                    3 => ['Munada', 'Ismail', 'Anton']
                ];

                // Tanggal awal
                $startDate = strtotime('2023-09-02');
                $endDate = strtotime('+30 days', $startDate); // Ganti 30 dengan jumlah hari yang Anda butuhkan

                $teamIndex = 1;

                for ($currentDate = $startDate; $currentDate <= $endDate; $currentDate = strtotime('+1 day', $currentDate)) {
                    $date = date('d/m/Y', $currentDate);
                    $shift = ($teamIndex % 3) + 1; // Bergantian antara shift 1, 2, dan 3
                    $teamMembers = implode(', ', $teams[$teamIndex]);
                    echo "<tr><td>$date</td><td>Shift $shift</td><td>$teamMembers</td></tr>";

                    // Pindah ke tim berikutnya
                    $teamIndex = ($teamIndex % 3) + 1;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Sertakan script JavaScript Bootstrap di sini (jika diperlukan) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
