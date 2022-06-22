<?php  
$connect = mysqli_connect("localhost", "root", "", "monitoring1");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM monitoring1";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>NO</th>  
                         <th>TMA</th>  
                         <th>SUHU</th>
                         <th>TEG_SOLAR</th>  
                         <th>ANS_SOLAR</th>  
                         <th>TEG_BATTERY</th>
                         <th>ANS_BATTERY</th> 
                         <th>perhitungan</>
                         <th>DATE</th> 
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
 <tr>        
    <td>'.$row ["NO"].'</td>  
    <td>'.$row["TMA"].'</td>
    <td>'.$row["SUHU"].'</td>
    <td>'.$row["TEG_SOLAR"].'</td>
    <td>'.$row["ANS_SOLAR"].'</td>
    <td>'.$row["TEG_BATTERY"].'</td>
    <td>'.$row["ANS_BATTERY"].'</td>
    <td>'.$row["perhitungan"].'</td>                         
    <td>'.$row["DATE"].'</td>
    
  </tr> 
   ';
  }  n
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }  
}
 ?> 