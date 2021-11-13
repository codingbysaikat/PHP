<?php 
$cannection= mysqli_connect('localhost','root','','user_info');
$query="SELECT * FROM user_information";
$add = mysqli_query($cannection, $query);
//$count=mysqli_num_rows($add );
while ($rows=mysqli_fetch_assoc($add)) {
 
    echo"{$rows['ID']}";
        echo "<br>";
     echo "{$rows['username']}";
     echo "<br>";


   
}

 ?>
