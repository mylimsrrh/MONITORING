<!DOCTYPE html>
<html>
<title>Autosum</title>
<body>

<h1>Auto SUM</h1>
<form name="autoSumForm" action="">
  Nilai Pertama :<br>
  <input type="text" name="nilai1" onFocus="startCalc();">
  <br>
  Nilai ke dua:<br>
  <input type="text" name="nilai2" onFocus="startCalc();"" onBlur="stopCalc();" >
  <br><br>
  Hasil :<br>
  <input type="text" name="hasil" onchange="tryNumberFormat(this.form.thirdBox);">
  <br>
</form>

<script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
y = document.autoSumForm.nilai1.value;
z = document.autoSumForm.nilai2.value;

document.autoSumForm.hasil.value = ( y - z );}
function stopCalc(){
clearInterval(interval);}
</script>
</body>
</html>