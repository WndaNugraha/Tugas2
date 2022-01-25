<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    
    <table>
        <form action="" method ="POST">
        <tr>
            <td><h3><b> Destinasi Wisata Bali</b></h3></td>
        </tr>
        <tr>
            <td>1.Bukit Bintang</td>
        </tr>
        <tr>
            <td>2.Pantai Sadranan</td>
        </tr>
        <tr>
            <td>3.Candi Borobudur</td>
        </tr>
        <tr>
            <td>4.Candi Prambanan</td>
        </tr>
        <tr>
            <td>5.Keraton Yogyakarta</td>
        </tr>
        <tr>
            <td>6.Malioboro</td>
        </tr>
        <tr>
            <td>7.Pendopo Lawas</td>
        </tr>
        <tr>
            <td>8.Goa Pindul</td>
        </tr>
        <tr>
            <td><input type="number"  name="pilih" placeholder="Pilih Destinasi.."></td>
        </tr>
        <tr>
            <td><input type="submit" value="Kirim" name="kirim"></td>
        </tr>
        </form>
    </table>

    <?php
        if (isset($_POST ['kirim'])){
         $pilih = $_POST ['pilih'];
         

        if ($pilih == 1){
                echo "<table>";
                echo "<br>";
                echo "<form method ='POST'>";
                echo "<tr>";
                echo "<td><b>Destinasi Bukit Bintang</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga 1 tiket</td> <td>:</td> <td>Rp.10.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Beli tiket</td><td>:</td><td><input type='number'  name='tiket'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='oke'></td>";
                echo "</table>";

            }   
        }
        ?>
        <?php
        if (isset($_POST ['oke'])){
             $tiket = $_POST ['tiket'];
             $bayar = $_POST ['bayar'];

             $harga = 10000 * $tiket;

              if($tiket >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($tiket < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td></b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>
            <?php
if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];


     if ($pilih == 2){
        echo "<table>";
        echo "<br>";
        echo "<form method ='POST'>";
        echo "<tr>";
        echo "<td><b>Pantai Sadranan</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Harga 1 tiket</td> <td>:</td> <td>Rp.15.000</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Beli tiket</td><td>:</td><td><input type='number'  name='tiket'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type='submit' value='bayar' name='iya'></td>";
        echo "</table>";

    }   

}
            ?>
            <?php
        if (isset($_POST ['iya'])){
             $tiket = $_POST ['tiket'];
             $bayar = $_POST ['bayar'];

             $harga = 15000 * $tiket;

              if($tiket >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($tiket < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>

<?php
if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];


     if ($pilih == 3){
        echo "<table>";
        echo "<br>";
        echo "<form method ='POST'>";
        echo "<tr>";
        echo "<td><b>Candi Borobudur</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Harga 1 tiket</td> <td>:</td> <td>Rp.50.000</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Beli tiket</td><td>:</td><td><input type='number'  name='tiket'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type='submit' value='bayar' name='nya'></td>";
        echo "</table>";

    }   

}
            ?>
            <?php
        if (isset($_POST ['nya'])){
             $tiket = $_POST ['tiket'];
             $bayar = $_POST ['bayar'];

             $harga = 50000 * $tiket;

              if($tiket >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($tiket < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>

<?php
if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];


     if ($pilih == 5){
        echo "<table>";
        echo "<br>";
        echo "<form method ='POST'>";
        echo "<tr>";
        echo "<td><b>Keraton Yogyakarta</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Harga 1 tiket</td> <td>:</td> <td>Rp.5.000</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Beli tiket</td><td>:</td><td><input type='number'  name='tiket'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type='submit' value='bayar' name='simpan'></td>";
        echo "</table>";

    }   

}
            ?>
            <?php
        if (isset($_POST ['simpan'])){
             $tiket = $_POST ['tiket'];
             $bayar = $_POST ['bayar'];

             $harga = 50000 * $tiket;

              if($tiket >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($tiket < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>

<?php
if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];


     if ($pilih == 6){
        echo "<table>";
        echo "<br>";
        echo "<form method ='POST'>";
        echo "<tr>";
        echo "<td><b>Malioboro</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Harga 1 tiket</td> <td>:</td> <td>Rp.5.000</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Beli tiket</td><td>:</td><td><input type='number'  name='tiket'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type='submit' value='bayar' name='simpan'></td>";
        echo "</table>";

    }   

}
            ?>
            <?php
        if (isset($_POST ['simpan'])){
             $tiket = $_POST ['tiket'];
             $bayar = $_POST ['bayar'];

             $harga = 50000 * $tiket;

              if($tiket >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($tiket < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>

<?php
if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];

    if ($pilih == 7){

            echo "<table>";
            echo "<form action='' method='POST'>";
            echo "<tr>";
            echo "<td><b>Silahkan Pilih</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><b>--Makanan--</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>1.Rendang</td><td>=</td><td>Rp.15.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>2.Gulai</td><td>=</td><td>Rp.10.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>3.Kepala Kakap</td><td>=</td><td>Rp.20.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>4.Paket Lengkap</td><td>=</td><td>Rp.35.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<tr>";
            echo "<td><br></td>";
            echo "</tr>";
            echo "<td><b>--Minuman--</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>5.Kopi</td><td>=</td><td>Rp.5.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>6.Es Teh</td><td>=</td><td>Rp.5.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>7.Teh Hangat</td><td>=</td><td>Rp.5.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>8.Es Susu</td><td>=</td><td>Rp.7.000</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Pilih Menu</td><td>:</td><td><input type='number' name='makan'></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><input type='submit' value='Pesan' name='pesan'></td>";
            echo "</tr>";
            echo "</form>";
            echo "</table>";
        }
      }
?>

<?php
      
              if (isset($_POST ['pesan'])){
                $makan = $_POST ['makan'];
                    
                    if($makan == 1){
                        
                        echo "<table>";
                        echo "<form action='' method='post'>";
                        echo "<tr>";
                        echo "<td><b>Rendang</b></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Harga Satuan</td><td>:</td><td>Rp.15.000</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<tr>";
                        echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                        echo "</tr>";
                        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><input type='submit' value='bayar' name='okk'></td>";
                        echo "</form>";
                        echo "<table>";
                    }

              }
?>

<?php
        if (isset($_POST ['okk'])){
             
             $bayar = $_POST ['bayar'];
             $jumlah = $_POST ['jumlah'];

             $harga = 15000 * $jumlah;

              if($jumlah >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($jumlah >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($jumlah >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($jumlah < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>

           
<?php
      
              if (isset($_POST ['pesan'])){
                $makan = $_POST ['makan'];
                    
                    if($makan == 2){
                        
                        echo "<table>";
                        echo "<form action='' method='post'>";
                        echo "<tr>";
                        echo "<td><b>Gulai</b></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Harga Satuan</td><td>:</td><td>Rp.10.000</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<tr>";
                        echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                        echo "</tr>";
                        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><input type='submit' value='bayar' name='ok'></td>";
                        echo "</form>";
                        echo "<table>";
                    }

              }
?>

<?php
        if (isset($_POST ['ok'])){
             
             $bayar = $_POST ['bayar'];
             $jumlah = $_POST ['jumlah'];

             $harga = 10000 * $jumlah;

              if($jumlah >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($jumlah >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($jumlah >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($jumlah < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>
            <?php
      
      if (isset($_POST ['pesan'])){
        $makan = $_POST ['makan'];
            
            if($makan == 3){
                
                echo "<table>";
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td><b>Kepala Kakap</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga Satuan</td><td>:</td><td>Rp.20.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                echo "</tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='oko'></td>";
                echo "</form>";
                echo "<table>";
            }

      }
?>

<?php
if (isset($_POST ['oko'])){
     
     $bayar = $_POST ['bayar'];
     $jumlah = $_POST ['jumlah'];

     $harga = 20000 * $jumlah;

      if($jumlah >= 10){
                $diskon = $harga * 15 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 5){
                $diskon = $harga * 10 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 3){
                $diskon = $harga * 5 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
        
            }

     else if ($jumlah < 3){
        $total_harga = $harga;
        echo "<table>";
        echo "<tr>";
        echo "<td><b>anda tidak mendapatkan diskon</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

            
     if($bayar == $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Pass</b></td>";
        echo "</tr>";
        echo "<table>";
     }

     else if($bayar <= $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Kureng</b></td>";
        echo "</tr>";
        echo "<table>";
     }
     else if($bayar >= $total_harga){
        $kembalian =  $bayar - $total_harga;
        echo "<table>";
        echo "<tr>";
        echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "<table>";
     }

    }


    ?>

<?php
      
      if (isset($_POST ['pesan'])){
        $makan = $_POST ['makan'];
            
            if($makan == 4){
                
                echo "<table>";
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td><b>Paket Lengkap</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga Satuan</td><td>:</td><td>Rp.35.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                echo "</tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='ok1'></td>";
                echo "</form>";
                echo "<table>";
            }

      }
?>

<?php
if (isset($_POST ['ok1'])){
     
     $bayar = $_POST ['bayar'];
     $jumlah = $_POST ['jumlah'];

     $harga = 35000 * $jumlah;

      if($jumlah >= 10){
                $diskon = $harga * 15 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 5){
                $diskon = $harga * 10 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 3){
                $diskon = $harga * 5 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
        
            }

     else if ($jumlah < 3){
        $total_harga = $harga;
        echo "<table>";
        echo "<tr>";
        echo "<td><b>anda tidak mendapatkan diskon</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

            
     if($bayar == $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Pass</b></td>";
        echo "</tr>";
        echo "<table>";
     }

     else if($bayar <= $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Kureng</b></td>";
        echo "</tr>";
        echo "<table>";
     }
     else if($bayar >= $total_harga){
        $kembalian =  $bayar - $total_harga;
        echo "<table>";
        echo "<tr>";
        echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "<table>";
     }

    }


    ?>

<?php
      
      if (isset($_POST ['pesan'])){
        $makan = $_POST ['makan'];
            
            if($makan == 5){
                
                echo "<table>";
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td><b>Kopi</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga Satuan</td><td>:</td><td>Rp.5.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                echo "</tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='1'></td>";
                echo "</form>";
                echo "<table>";
            }

      }
?>

<?php
if (isset($_POST ['1'])){
     
     $bayar = $_POST ['bayar'];
     $jumlah = $_POST ['jumlah'];

     $harga = 5000 * $jumlah;

      if($jumlah >= 10){
                $diskon = $harga * 15 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 5){
                $diskon = $harga * 10 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 3){
                $diskon = $harga * 5 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
        
            }

     else if ($jumlah < 3){
        $total_harga = $harga;
        echo "<table>";
        echo "<tr>";
        echo "<td><b>anda tidak mendapatkan diskon</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

            
     if($bayar == $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Pass</b></td>";
        echo "</tr>";
        echo "<table>";
     }

     else if($bayar <= $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Kureng</b></td>";
        echo "</tr>";
        echo "<table>";
     }
     else if($bayar >= $total_harga){
        $kembalian =  $bayar - $total_harga;
        echo "<table>";
        echo "<tr>";
        echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "<table>";
     }

    }


    ?>

<?php
      
      if (isset($_POST ['pesan'])){
        $makan = $_POST ['makan'];
            
            if($makan == 6){
                
                echo "<table>";
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td><b>Es Teh</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga Satuan</td><td>:</td><td>Rp.5.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                echo "</tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='2'></td>";
                echo "</form>";
                echo "<table>";
            }

      }
?>

<?php
if (isset($_POST ['2'])){
     
     $bayar = $_POST ['bayar'];
     $jumlah = $_POST ['jumlah'];

     $harga = 5000 * $jumlah;

      if($jumlah >= 10){
                $diskon = $harga * 15 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 5){
                $diskon = $harga * 10 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 3){
                $diskon = $harga * 5 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
        
            }

     else if ($jumlah < 3){
        $total_harga = $harga;
        echo "<table>";
        echo "<tr>";
        echo "<td><b>anda tidak mendapatkan diskon</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

            
     if($bayar == $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Pass</b></td>";
        echo "</tr>";
        echo "<table>";
     }

     else if($bayar <= $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Kureng</b></td>";
        echo "</tr>";
        echo "<table>";
     }
     else if($bayar >= $total_harga){
        $kembalian =  $bayar - $total_harga;
        echo "<table>";
        echo "<tr>";
        echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "<table>";
     }

    }


    ?>

<?php
      
      if (isset($_POST ['pesan'])){
        $makan = $_POST ['makan'];
            
            if($makan == 7){
                
                echo "<table>";
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td><b>Teh Hangat</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga Satuan</td><td>:</td><td>Rp.5.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                echo "</tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='3'></td>";
                echo "</form>";
                echo "<table>";
            }

      }
?>

<?php
if (isset($_POST ['3'])){
     
     $bayar = $_POST ['bayar'];
     $jumlah = $_POST ['jumlah'];

     $harga = 5000 * $jumlah;

      if($jumlah >= 10){
                $diskon = $harga * 15 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 5){
                $diskon = $harga * 10 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 3){
                $diskon = $harga * 5 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
        
            }

     else if ($jumlah < 3){
        $total_harga = $harga;
        echo "<table>";
        echo "<tr>";
        echo "<td><b>anda tidak mendapatkan diskon</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

            
     if($bayar == $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Pass</b></td>";
        echo "</tr>";
        echo "<table>";
     }

     else if($bayar <= $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Kureng</b></td>";
        echo "</tr>";
        echo "<table>";
     }
     else if($bayar >= $total_harga){
        $kembalian =  $bayar - $total_harga;
        echo "<table>";
        echo "<tr>";
        echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "<table>";
     }

    }


    ?>

<?php
      
      if (isset($_POST ['pesan'])){
        $makan = $_POST ['makan'];
            
            if($makan == 8){
                
                echo "<table>";
                echo "<form action='' method='post'>";
                echo "<tr>";
                echo "<td><b>Teh Hangat</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Harga Satuan</td><td>:</td><td>Rp.5.000</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Jumlah Pesanan</td><td>:</td><td><input type='number' name='jumlah'></td>";
                echo "</tr>";
                echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td><input type='submit' value='bayar' name='4'></td>";
                echo "</form>";
                echo "<table>";
            }

      }
?>

<?php
if (isset($_POST ['4'])){
     
     $bayar = $_POST ['bayar'];
     $jumlah = $_POST ['jumlah'];

     $harga = 7000 * $jumlah;

      if($jumlah >= 10){
                $diskon = $harga * 15 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 5){
                $diskon = $harga * 10 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

        else if($jumlah >= 3){
                $diskon = $harga * 5 / 100;
                $total_harga = $harga - $diskon;
                
        echo "<table>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
        
            }

     else if ($jumlah < 3){
        $total_harga = $harga;
        echo "<table>";
        echo "<tr>";
        echo "<td><b>anda tidak mendapatkan diskon</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
        echo "</tr>";
        echo "</table>";
            }

            
     if($bayar == $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Pass</b></td>";
        echo "</tr>";
        echo "<table>";
     }

     else if($bayar <= $total_harga){
        echo "<table>";
        echo "<tr>";
        echo "<td><b>Uang Anda Kureng</b></td>";
        echo "</tr>";
        echo "<table>";
     }
     else if($bayar >= $total_harga){
        $kembalian =  $bayar - $total_harga;
        echo "<table>";
        echo "<tr>";
        echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
        echo "</tr>";
        echo "<table>";
     }

    }


    ?>

<?php
if (isset($_POST ['kirim'])){
    $pilih = $_POST ['pilih'];


     if ($pilih == 8){
        echo "<table>";
        echo "<br>";
        echo "<form method ='POST'>";
        echo "<tr>";
        echo "<td><b>Goa Pindul</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Harga 1 tiket</td> <td>:</td> <td>Rp.100.000</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Beli tiket</td><td>:</td><td><input type='number'  name='tiket'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar</td><td>:</td><td><input type='number' name='bayar'></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type='submit' value='bayar' name='0'></td>";
        echo "</table>";

    }   

}
            ?>
            <?php
        if (isset($_POST ['0'])){
             $tiket = $_POST ['tiket'];
             $bayar = $_POST ['bayar'];

             $harga = 100000 * $tiket;

              if($tiket >= 10){
                        $diskon = $harga * 15 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 15%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 5){
                        $diskon = $harga * 10 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 10%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                else if($tiket >= 3){
                        $diskon = $harga * 5 / 100;
                        $total_harga = $harga - $diskon;
                        
                echo "<table>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Diskon 5%</td> <td>:</td> <td>Rp.$diskon</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td><td>Rp.$total_harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                
                    }

             else if ($tiket < 3){
                $total_harga = $harga;
                echo "<table>";
                echo "<tr>";
                echo "<td><b>anda tidak mendapatkan diskon</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Total yang harus dibayar</td> <td>:</td> <td>Rp.$harga</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Uang anda</td> <td>:</td> <td>Rp.$bayar</td>";
                echo "</tr>";
                echo "</table>";
                    }

                    
             if($bayar == $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Pass</b></td>";
                echo "</tr>";
                echo "<table>";
             }

             else if($bayar <= $total_harga){
                echo "<table>";
                echo "<tr>";
                echo "<td><b>Uang Anda Kureng</b></td>";
                echo "</tr>";
                echo "<table>";
             }
             else if($bayar >= $total_harga){
                $kembalian =  $bayar - $total_harga;
                echo "<table>";
                echo "<tr>";
                echo "<td>Kembalian</td> <td>:</td> <td>Rp.$kembalian</td>";
                echo "</tr>";
                echo "<table>";
             }

            }
        
        
            ?>


    




</body>
</html>
