<div id="main" style="width: 100%">  
    <style type="text/css">
    body
    {
        background-color:#ffffff;
        margin-left: auto;
        margin-right: auto;
        max-width: 1000px;
        width: 90%
    }
    #contentwrapper{
    float: left;
    width: 100%;
    }
    #contentcolumn{
    margin-right: 200px; /*Set right margin to RightColumnWidth*/
    }

    #rightcolumn{
    float: left;
    width: 200px; /*Width of right column in pixels*/
    margin-left: -200px; /*Set left margin to -(RightColumnWidth) */
    background: #FDE95E;
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
    img{
    max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    
    }
    img.center 
    {
    width: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    #nav { 
      margin: 0 auto;
      padding: 0;
      list-style: none;
      background-color: black;
    }
    #nav li {
      display: inline;
    }
    #nav a {
    display: inline-block;
    font-family: Arial;
    font-size:11px;
    text-decoration: none;
    font-weight: bold;
    padding: 10px;
    background-color: #black;
    color: #fff;
    }
    
    #blogPosts div{
        max-width: 500px;
        width:100%;
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
    </div>
    
    <div id="contentwrapper">
    <div id="contentcolumn">
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
    </div>
    <div id="rightcolumn">
    <div class="innertube"><b>Right Column: <em>200px</em></b></div>

    </div>
</div>  
