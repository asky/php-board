<?php
mysql_connect('localhost', 'luxury', 'luxury');
mysql_select_db('boards');

$ID = 1;
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <div>
    <?php
       $query = "SELECT COUNT(*) FROM board";
       $result = mysql_fetch_row(mysql_query($query));
       $max = $result[0];

       for($i = 1; $i <= $max; $i++) {
	   $query = "SELECT name, content FROM board WHERE id='$i'";
	   $result = mysql_fetch_row(mysql_query($query));
	   
	   if($result) {
	       $name = $result[0];
	       $content = $result[1];
	       
	       echo "Name : $name " . " Content : $content" . "<br />";
	   }
       }
    ?>
  </div>

  <div>
    <a href="write.php">New Post</a>
  </div>
</body>
</html>