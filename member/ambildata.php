<?php
include "../login/koneksi.php";
$query = "select * from laundry";
$Q = mysqli_query($koneksi, $query)or die(mysqli_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }
      $data = json_encode(array('results'=>$posts));
      echo $data;
}

?>
