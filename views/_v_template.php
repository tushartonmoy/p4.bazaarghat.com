<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">
     <link href="/css/custom.less" rel="stylesheet/less" type="text/css">
     <link href="/css/style.css" rel="stylesheet" type="text/css">
     <script src="/js/less-1.5.0.min.js"></script>	
         <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="/js/jquery.tablesorter.js"></script> 
    <script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#assign_table").tablesorter(); 
    } 
);
</script>
</head>
	

	<body>  
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
        
        <!-- Menu for users who are logged in -->
        <?php if($user): ?>

             <ul class="nav navbar-nav">
            <li><a href="/assignments/add">Add Assignment</a></li>
            <li><a href="/assignments/index">Review Assignments</a></li>
            <li><a href="/users/logout">Logout</a></li>
          </ul>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

             <ul class="nav navbar-nav">
            <li><a href="/users/signup">Sign Up</a></li>
            <li><a href="/users/login">Log In</a></li>
          </ul>

        <?php endif; ?>
         
         <span class="navbar-right">
           <span class="glyphicon glyphicon-envelope"></span> support@bazaarghat.com
         </span>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><?php if(isset($title)) echo $title; ?></h1>
        <p>
        <?php if(isset($content)) echo $content; ?></p>
    <?php if(isset($client_files_body)) echo $client_files_body; ?>
      </div>
    </div>

    <div class="container">
      <hr>

      <footer>
        <p>&copy; Md Rezwan Al Islam </p>
      </footer>
    </div> <!-- /container -->
    <!--end test-->
    
        <!-- Bootstrap core JavaScript + Less CSS
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


</body>
</html>