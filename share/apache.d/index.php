<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Test page</title>
	<style type="text/css" media="screen">
	* {
		font-family: "Helvetica", Arial, "MS Trebuchet", sans-serif;
    font-size: 1.1em;
	}
  body {
    background: #f8f8f8;
  }
  .container {
    width: 50%;
    margin: 50px auto;
    padding: 40px;
    background: white;
    border: 1px dashed #a0a0a0;
  }
  h1 {
    font-family: "Helvetica", Arial, "MS Trebuchet", sans-serif;	
    font-size: 48px;
    font-weight: bold;
    color: #0071bd;
  }
	</style>
</head>
<body>
  <div class="container">
    <h1>Fantastic!</h1>
    <p>This page is served by Apache, running in a Docker container on CoreOS.</p>
    <p>Check out the <a href="test.php">PHP environment</a></p>
    <p>Created at <?php print date("D M j G:i:s T Y") ?>    
  </div>
</body>
</html>
