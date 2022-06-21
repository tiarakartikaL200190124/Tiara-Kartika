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
            $hasil=0;
            $hasil = ($peroleh-$residu)/$umur;  
        }
    ?>
    <div class="rows">
        <form action="straight_line.php" method="get">
            <h2><b><center> PERHITUNGAN DEPRESIASI </center></b></h2>
            <b><input type="text" name="operasi" class="form-control" value="Straight Line" stye="center" disabled></b><br>
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
                $hasil = "Hasil depresiasi pertahunnya selama ". $umur . " tahun menggunakan metode Straight Line adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
    </div>
</div>
</body>
</html>