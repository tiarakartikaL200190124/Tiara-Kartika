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
        if (isset($_GET['peroleh'])) {
            $peroleh=$_GET['peroleh'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $jml_umur = 0;
            for ($i=1; $i<=$umur ; $i++) { 
                $jml_umur = $jml_umur + $i;
            }
            $hasil = ($peroleh - $residu) * $umur / $jml_umur;    
        }
    ?>
    <div class="rows">
        <form action="sum_of_the_year.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <b><input type="text" name="operasi" class="form-control" value="Sum of The Year" disabled></b><br>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="peroleh" class="form-control" value="<?php echo $peroleh; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
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
            $hasil = "Hasil depresiasi menggunakan metode Sum of The Year pada tahun ke-" . $umur . " adalah " .number_format($hasil,0,',',);
            echo "<h1>$hasil</h1>" ;
        }
        ?>
    </div>
</div>
</body>
</html>