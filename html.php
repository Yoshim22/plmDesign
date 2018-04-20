<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>HTML内でのPHP</title>
</head>
<body>
<!--検索するPIDの入力項目
<form action="xxxxxxxxx" method="post">
  <p>検索したいキーワードを入力してください。</p>
  <input type="search" name="PIDSearch" placeholder="キーワードを入力">
  <input type="submit" name="submit" value="検索">
</form>
-->
<table border = "1">
<?php
include "test2.php";
//$PIDSearch = $_GET["PIDSearch"];
echo '<tr>';
echo '<th>'."PID".'</th>';
echo '<th>'."Rev".'</th>';
echo '<th>'."SN".'</th>';
echo '</tr>';
//所望のPIDとRevを表示
for($i=0;$i<getMaxNum($testArray);$i++){
    if($testArray[$i]["PID"] == 80 && $testArray[$i]["Rev"] == 2){
        echo '<tr>';
        echo '<td>'."P".sprintf("%05d",$testArray[$i]["PID"]).'</td>';
        echo '<td>'.sprintf("%02d",$testArray[$i]["Rev"]).'</td>';
        echo '<td>'.$testArray[$i]["SN"].'</td>';
        echo '</tr>'; 
    }
}
//
/*一覧表示
for($i=0;$i<getMaxNum($testArray);$i++){
    echo '<tr>';
    echo '<td>'."P".sprintf("%05d",$testArray[$i]["PID"]).'</td>';
    echo '<td>'.sprintf("%02d",$testArray[$i]["Rev"]).'</td>';
    echo '<td>'.$testArray[$i]["SN"].'</td>';
    echo '</tr>';
}
*/
?>
</body>
</html>
