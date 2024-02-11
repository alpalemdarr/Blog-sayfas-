<?php
include("header.php");
?>


<?php
$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
    
  echo '
  <div class="container">
  <h2 style="text-align:center; color:white;">'.$row["heading"].'</h2>
  <p style=color:white;>'.$row["text"].'</p>
  </div>
  ';
  }
}
?>

</body>

</html>