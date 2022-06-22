<?php
include 'koneksi.php';

if (isset($_POST['save'])) {
    $no = mysqli_real_escape_string($koneksi, $_POST['NO']);
    $tma = mysqli_real_escape_string($koneksi, $_POST['TMA']);
    $suhu = mysqli_real_escape_string($koneksi, $_POST['SUHU']);
    $teg_solar = mysqli_real_escape_string($koneksi, $_POST['TEG_SOLAR']);
    $ans_solar = mysqli_real_escape_string($koneksi, $_POST['ANS_SOLAR']);
    $teg_batery = mysqli_real_escape_string($koneksi, $_POST['TEG_BATTERY']);
    $ans_battery = mysqli_real_escape_string($koneksi, $_POST['ANS_BATTERY']);

    mysqli_query($koneksi,"INSERT INTO monitoring1(No,TMA,Suhu,Teg solar,ANS Solar,Teg battery,ANS battery) VALUES('$no','$tma','$suhu','$teg_solar','$ans_solar','$teg_solar','$ans_solar')");
 
    
}
?> 
<!DOCTYPE html>
<html> 
<head>
    <title>input data ke database</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }
        .page {
            width: 17em;
            margin: auto;
        }
    </style>
</head>
<body>
    
    <div class="page">
        <h1>input PHP</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <th>NO</th>
                    <td><input type="text" name="no" required="required"></td>
                </tr>
                <tr>
                    <th>TMA</th>
                    <td><input type="text" name="tma" required="required"></td>
                </tr>
                <tr>
                    <th>SUHU</th>
                    <td><input type="text" name="suhu" required="required"></td>
                </tr>
                <tr>
                    <th>TEG SOLAR</th>
                    <td><input type="text" name="teg_solar" required="required"></td>
                </tr>
                <tr>
                    <th>ANS SOLAR</th>
                    <td><input type="text" name="ans_solar" required="required"></td>
                </tr>
                <tr>
                    <th>TEG BATTERY</th>
                    <td><input type="text" name="teg_battery" required="required"></td>
                </tr>
                <tr>
                    <th>ANS BATTERY</th>
                    <td><input type="text" name="ans_battery" required="required"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="save" value="Input">
                    </td>
                </tr> 
            </table>
        </form>
    </div>      
</body>
</html>





