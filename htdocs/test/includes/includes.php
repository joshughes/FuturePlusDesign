<?php
include 'blogpost.php';
$connection = mysql_connect("localhost", "root", "") or die ("<p class='error'>Sorry, we were unable to connect to the database server.</p>");
$database = "blog";
mysql_select_db($database, $connection) or die ("<p class='error'>Sorry, we were unable to connect to the database.</p>");   

function GetBlogPosts($inId=null, $inTagId =null)  
{  
    if (!empty($inId))  
    {  
        $query = mysql_query("SELECT * FROM blog_posts WHERE id = " . $inId . " ORDER BY id DESC");  
    }  
    else if (!empty($inTagId))  
    {  
        $query = mysql_query("SELECT blog_posts.* FROM blog_post_tags LEFT JOIN (blog_posts) ON (blog_post_tags.postID = blog_posts.id) WHERE blog_post_tags.tagID =" . $tagID . " ORDER BY blog_posts.id DESC");  
    }  
    else  
    {  
        $query = mysql_query("SELECT * FROM blog_posts ORDER BY id DESC");  
    }  
  
    $postArray = array();  
    while ($row = mysql_fetch_assoc($query))  
    {  
        $myPost = new BlogPost($row["id"], $row['title'], $row['post'], $row['postfull'], $row["author_id"], $row['dateposted']);  
        array_push($postArray, $myPost);  
    }  
    return $postArray;  
}  

?>

