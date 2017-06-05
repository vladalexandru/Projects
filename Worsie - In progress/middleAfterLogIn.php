<?php 

      $conn = oci_connect("TWProject", "TWProject", "localhost/xe");
      
$query = 'select * from curse ';
$s = oci_parse($conn, $query);
oci_execute($s);
oci_fetch_all($s, $res);
echo "<pre>\n";
var_dump($res);
echo "</pre>\n";
// echo $_SESSION['q'];


// Close the Oracle connection
oci_close($conn);
        
 ?>


