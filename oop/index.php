<?php
require_once("Mysql.php");

$sqlObj = new Mysql();
//Post Table Data
$table = 'posts';
$get_posts = $sqlObj->selectAllFromTable($table);
//echo "<pre>";print_r($get_posts);
//Comments Table data
$tbl = 'comments';
$get_comments = $sqlObj->selectAllFromTable($tbl);
//echo "<pre>";print_r($get_comments);

?>


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>OOP AND MYSQL</title>
</head>
<body>
<style>
  body{
    text-align: center;
  }
  section{
    background: #f3f3f3;
  }
  table{
    width:7%;
    text-align: center;
    margin:auto;
  }
  td{
   border:1px solid black;
  }
  
</style>
<section>
    <h1>All POSTS</h1>
  <table>  
      <?php  foreach($get_posts as $post){
        echo '<tr>';
            echo '<td>'.$post['post_id'].'</td>';
            echo '<td>'.$post['post_title'].'</td>';
        echo '<tr>';
      } ?>  
   </table>
</section>

    
<section>
    <h1>All Comments</h1>
  <table>  
    
      <?php  foreach($get_comments as $comment){
        echo '<tr>';
            echo '<td>'.$comment['comments_id'].'</td>';
            echo '<td>'.$comment['comment_details'].'</td>';
        echo '</tr>';
      } ?>  
   </table> 
</section>

</body>
<a href="http://onlinewebcv.com" class="copyright">onlinewebcv</a>
</html>




