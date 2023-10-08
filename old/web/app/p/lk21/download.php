<?php 
set_time_limit(0);
error_reporting(0);

function getstringbetween($teks, $sebelum, $sesudah){
	$teks = ' ' . $teks;
	$ini = strpos($teks, $sebelum);
	if ($ini ==0) return '';
	$ini += strlen($sebelum);
	$panjang = strpos($teks, $sesudah, $ini) - $ini;
	return substr($teks, $ini, $panjang);
}

 ?>

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

<?php
/*
	lk21. PHP Version by Theo Samuel
	Python Version by Lazuardy Khatulistiwa
*/

if(isset($_POST['download'])) {
	$link = $_POST['link'];
	$judul = $_POST['judul'];
	$gambar = $_POST['poster'];
?>

<div class="row">
	<div class="col-lg-12">
		<div class="card border-primary mb-3">
  			<div class="card-body text-secondary">

				<div class="card mb-3" >
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img src="<?php echo $gambar ?>" class="card-img" alt="poster">
    					</div>
    					<div class="col-md-8">
      						<div class="card-body">
        						<h3 class="card-title">Judul : <?php echo $judul; ?></h3>
<?php
	$getid = str_replace('https://dunia21.me/', '', $link);
	$idfilm =  str_replace('/', '', $getid);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://asdahsdkjajslkfbkaujsgfbjaeghfyjj76e8637e68723rhbfajkl.akurat.co/verifying.php');
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
		"Accept: */*",
		"X-Requested-With: XMLHttpRequest"
	));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, 'slug='.$idfilm);
	$data = curl_exec ($ch);
	curl_close($ch);	

	$get_data = getstringbetween($data, "</a></p>", "</table>");

	//$satu = getstringbetween($get_data, "$server", );
	$satu = str_replace('<table width="100%">', '<table class="table table-responsive table-bordered">', $get_data);
	echo $satu.'</table>';
}
?>
      						</div>
    					</div>
  					</div>
				</div>
  			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>