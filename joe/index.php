<div id="main" style="width: 100%">  
    <style type="text/css">
    body
    {
        background-color:#ffffff;
        margin-left: auto;
        margin-right: auto;
    }
    h1
    {
    color:blue;
    text-align:center;
    }
    p
    {
    font-family:"Times New Roman";
    font-size:20px;
    }
    img.center 
    {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 90%;
    }
    #nav {
      width: 100%;
      float: left;
      margin: 0 0 3em 0;
      padding: 0;
      list-style: none;
      background-color: black;
      border-bottom: 1px solid #ccc; 
      border-top: 1px solid #ccc; }
    #nav li {
    position: relative;
    float: left;
    }
    #nav li a {
    display: block;
    font-family: Arial;
    font-size:11px;
    text-decoration: none;
    float:left;
    font-weight: bold;
    padding: 8px 15px;
    background-color: #black;
    color: #fff;
    }
    #nav li a:hover {
    background-color: #fff;
    color: black;
    margin-top:-2px;
    padding-bottom:12px;
    }
    </style>
    
    <img class="center" src="http://futuresplus.files.wordpress.com/2011/10/header2a-fd1.jpg" >
    <div class=""menu">
         <ul id="nav">
             <li>
                 <a href="http://futuresplus.wordpress.com/lectures/">Home</a>
             </li>
              <li>
                 <a href="http://futuresplus.wordpress.com/lectures/">About</a>
             </li>
              <li>
                 <a href="http://futuresplus.wordpress.com/lectures/">Lectures</a>
             </li>
             <li>
                 <a href="http://futuresplus.wordpress.com/lectures/">Submit</a>
             </li>
        </ul>
    <h1>My Simple Blog</h1>  
    <div id="blogPosts">  
    <?php  
    include 'includes/includes.php';  
  
    $blogPosts = GetBlogPosts();  
    foreach ($blogPosts as $post)  
    {  
    echo "<div class='post'>";  
    echo "<h2>" . $post->title . "</h2>";  
    echo "<p>" . $post->post . "</h1>";  
      echo "<span class='footer'> Posted By: " . $post->author . " Posted On: " . $post->datePosted . " Tags: " . $post->tags . "</span>";  
    echo "</div>"; 
    }  
    ?> 
    </div>  
</div>  
