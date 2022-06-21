<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-info text-white">
    <?php
        $peroleh=null;
        $residu=null;
        $umur=null;
    ?>
    <div class="rows">
        <form action="reducing_balance.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <b><input type="text" name="operasi" class="form-control" value="Reducing Balance"  disabled></b><br>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="peroleh" class="form-control" value="<?php echo $peroleh; ?>" required>
            </div>
            <div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" class="form-control" value="<?php echo $umur; ?>"  required>
            </div>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        
        <?php
            if (isset($_GET['peroleh'])) {
                $peroleh=$_GET['peroleh'];
                $umur=$_GET['umur'];
                $hasil = ($peroleh / $umur) * 2;
                $hasila = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasila</h1>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($peroleh-$hasil) / $umur) * 2;
                    $hasilla = "Hasil depresiasi menggunakan metode Reducing Balance pada tahun ke " .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h1>$hasilla</h1>";
                    $perolehan = $peroleh - $hasill;
                    $hasill = ($peroleh/$umur)*2;
                }
            }
        ?>
    </div>
</div>
</body>
</html>