<br>
<form method="post">
    <table>
            <tr>
                <td>Dari tanggal</td>
                <td><input type="date" name="dari_tgl" required="required"></td>
                <td>Sampai tanggal</td>
                <td><input type="date" name="sampai_tgl" required="required"></td>
                <td><input type="submit" class="btn btn-primary"
                name="filter" value="Filter"></td>
            </tr>
    </table>
</form>
<br><br>
<?phpju
include "koneksi.php";
if (isset($_POST['filter'])) {
    $dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
    $sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
    echo "Dari tanggal " .$dari_tgl. " Sampai tanggal " .$sampai_tgl;
}
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>TMA</th>
        <th>Suhu</th>
        <th>Teg_solar</th>
        <th>ANS_solar</th>
        <th>Teg_battery</th>  
        <th>ANS_battery</th>
        <th>perhitungan</th>
        <th>Date</th>
    </tr>
    
    <?php

    include "koneksi.php";
    $no=1; 
    if (isset($_POST['filter'])) {
        $dari_tgl = mysqli_real_escape_string(mysqli_connect("localhost","root","","monitoring1"), $_POST['dari_tgl']);
        $sampai_tgl = mysqli_real_escape_string(mysqli_connect("localhost","root","","monitoring1"), $_POST['sampai_tgl']);
        $ambildata = mysqli_query(mysqli_connect("localhost","root","","monitoring1"),"SELECT * FROM monitoring1 WHERE DATE BETWEEN '$dari_tgl' AND '$sampai_tgl'");
    }
    else{
        $ambildata = mysqli_query(mysqli_connect("localhost","root","","MONITORING1"),"SELECT * FROM MONITORING1");
    }

    while ($tampil = mysqli_fetch_array($ambildata)){
        $IBatt=$tampil['ANS_BATTERY'];
        $ISolar=$tampil['ANS_SOLAR'];
        $perhitungan=($ISolar-$IBatt);

    echo"
    <tr>
        <td>$no</td>
        <td>$tampil[TMA]</td>
        <td>$tampil[SUHU]</td>
        <td>$tampil[TEG_SOLAR]</td>
        <td>$tampil[ANS_SOLAR]</td>
        <td>$tampil[TEG_BATTERY]</td>
        <td>$tampil[ANS_BATTERY]</td>
        <td>$perhitungan</td>
        <td>$tampil[DATE]</td>
    </tr>"; 

    $no++;

    }
    ?>
    </form>
</table>
<br>
   <form method="post" action="export.php">
       <input type="submit" name="export" class="btn btn-success" value="Export to excel" />
   </form>
</br>