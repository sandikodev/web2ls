<!DOCTYPE html>
<html>
<head>
	<title>lk21. Lite</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
<br>
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><h2><span class="badge badge-primary">lk21. Lite</span></h2></li>
  </ol>
</nav>
<div class="alert alert-primary" role="alert">
  Made with ❤ by <a href="https://instagram.com/azisek_" class="alert-link">Azisek</a>
</div>
</div>
<div class="container">
<form action="" method="post">
  <div class="form-group">
    <label for="query"><h5>Search:</h5></label>
    <input type="text" name="query" class="form-control" id="query" placeholder="Enter query">
  </div>
<button type="submit" class="btn btn-primary" name="submit">Submit!</button>
</div>
</form>
<br>
<?php 
/*
  lk21. PHP Version by Theo Samuel
  Python Version by Lazuardy Khatulistiwa
*/
  
if(isset($_POST["submit"])) {
	$query = $_POST['query'];
	$req = file_get_contents("https://dunia21.me/?s=".urlencode($query));
	preg_match_all('/<h2><a href="(.*?)" title=/', $req, $links);
  preg_match_all('/<h2><a href=".*?" title="(.*?)"/', $req, $judul);
  preg_match_all('/rel="bookmark"><img src="(.*?)" alt="(.*?)" class="img-thumbnail"/', $req, $ler);
  //echo $ler[1][2];
	$arr = [];
	for($i = 0;$i < count($links[1]); $i++){
		$arr[$links[1][$i]] = $judul[1][$i].'|'.$ler[1][$i];
	}
	?>
	<div class="container">
		<?php 
		foreach($arr as $key => $value){
      $unch = explode("|", $value);
			?>
			<div class="table-responsive">
  			<table class="table">
  				<tr>
  					<form action ="download.php" method="post" target="_blank">
  					  <input type="hidden" name="link" value="<?php echo $key; ?>">
  					  <input type="hidden" name="judul" value="<?php echo $unch[0]; ?>">
              <input type="hidden" name="poster" value="<?php echo $unch[1]; ?>">
              <td><?php echo $unch[0]; ?></td>
              <td><button type="download" class="btn btn-success" name="download">Download</button></td>
  					</form>
  				</tr>
  			</table>
			</div>
		<?php
		}

}
?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>