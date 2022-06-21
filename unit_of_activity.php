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
        $pmakai = null;
        $kpasitas_max=null;
        if (isset($_GET['peroleh'])) {
            $peroleh=$_GET['peroleh'];
            $residu=$_GET['residu'];
            $pmakai=$_GET['pmakai'];
            $kpasitas_max=$_GET['kpasitas_max'];
            $hasil=0;
                    $hasil = ($peroleh - $residu) * ($pmakai / $kpasitas_max);
        }
    ?>
    <div class="rows">
        <form action="unit_of_activity.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <b><input type="text" name="operasi" class="form-control" value="Unit of Activity"  disabled></b><br>
            <div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="peroleh" class="form-control" value="<?php echo $peroleh; ?>" required>
            </div>
            <div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" class="form-control" value="<?php echo $residu; ?>"  required>
            </div>
                <label>Pemakaian:</label>
                <input type="text" name="pmakai" class="form-control" value="<?php echo $pmakai; ?>"  required>
            </div>
            <div class="form-group">
                <label>Kapasitas Maksimal:</label>
                <input type="text" name="kpasitas_max" class="form-control" value="<?php echo $kpasitas_max; ?>"  required>
            </div>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>
        <br>
        <?php
            if (isset($_GET['peroleh'])) {
                $hasil = "Hasil depresiasi menggunakan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
    </div>
</div>
</body>
</html>