
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Student Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="border-bottom:1px solid #fff">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#FFFFFF">Welcome User !!!!!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
           <li><a href="logout.php" title="click here to logout" style="color:#FFFFFF"><span style="color:#FFFFFF" class="glyphicon glyphicon-log-out"></span></a></li>
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="border-right:1px solid #CCC;background:#101010">
          <ul class="nav nav-sidebar">
            <li><a href=""><img src="kiet/p1.jpg" style="width:120px;height:120px;margin-top:75px" class="img-rounded"></li>
			
		    <li><a href="index.php"><span class="glyphicon glyphicon-edit"></span>Course File</a></li>
			<li><a href="index.php?option=supervisior"><span class="glyphicon glyphicon-edit"></span>Select Subject</a></li>
			
			<li><a href="index.php?option=supervisior_request"><span class="glyphicon glyphicon-edit"></span>Time Table</a></li>
			
			<li><a href="index.php?option=submit_title"><span class="glyphicon glyphicon-edit"></span>E Learning</a></li>
			
            <li><a href="index.php?option=remainder"><span class="glyphicon glyphicon-edit"></span>KIET Portal</a></li>
            <li><a href="index.php?option=upload_course"><span class="glyphicon glyphicon-edit"></span>View Data</a></li>
			
			<li><a href="index.php?option=results"><span class="glyphicon glyphicon-edit"></span> Check Results</a></li>

			<li><a href="index.php?option=inbox"><span class="glyphicon glyphicon-edit"></span> Inbox</a></li>
			<li><a href="index.php?option=sent"><span class="glyphicon glyphicon-edit"></span> Sent</a></li>
			
			<li><a href="index.php?option=Announcements" title="Announcements for all supervisior and Student"><span class="glyphicon glyphicon-check"></span>Announcements From Admin</a></li>
			
			 
			 <li><a href="index.php?option=update_password"><span class="glyphicon glyphicon-lock"></span> Update_Password</a></li>
          </ul>
          
        </div>
		<!-- sidebar end-->
        
		<div class="col-sm-0 col-sm-offset-1 col-md-8 col-md-offset-0 main" style="background:#000000">
         <center>
<script type="text/javascript">
    google_ad_client = "ca-pub-6338063578832547";
    google_ad_slot = "1675963313";
    google_ad_width = 760;
    google_ad_height = 120;
</script>
<!-- new header -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>

		
			  
 <div class="col-lg-12 well">
 <form method="post" enctype="multipart/form-data">
	<div>
	<?php 
	$total=rand(1,5000);
	$current=rand(1,$total);
	$percent=rand(( $current/$total)*100,1);
	echo "$current is $percent of $total ,</p>";
    ?>
	<style  type ="text/css">
	.outter
	{
		height:25px;
		width:500px;
		border:solid 1px #000;
	}
	.inner
	{
		height:25px;
		width:<?php echo $percent ?>%;
		border-right:solid 1px #000;
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,2989d8+50,207cca+51,7db9e8+100;Blue+Gloss+Default */
background: #1e5799; /* Old browsers */
background: -moz-linear-gradient(top, #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */	}
	
	</style>
	<div class ="outter">
		<div class ="inner"><?php echo $percent ?>%</div>
     </div>
	</div>
	</form>	
	
	</div>		  
        </div>
      </div>
    </div>

    <!-- /#wrapper -->
    <script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({"lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]});
        } );
    </script>
	
  </body>
</html>