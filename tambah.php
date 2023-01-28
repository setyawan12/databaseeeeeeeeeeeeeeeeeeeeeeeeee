
<?php 

$conn = mysqli_connect("sql306.epizy.com", "epiz_32972482", "ahlXVclRp3", "epiz_32972482_mestere");
if( isset($_POST["submit"]) ) {
	$date = htmlspecialchars($_POST["date"]);
	$pln = htmlspecialchars($_POST["pln"]);
	$query = "INSERT INTO report VALUES('', '$date', '$pln')";
	mysqli_query($conn, $query);


	if( mysqli_affected_rows($conn) > 0){
	echo "
<script>
	alert('Berhasil Ditambahkan!');
	document.location.href = 'index.php';

</script>
";

} else {
echo "
<script>
	alert('Gagal Ditambahkan!');
	document.location.href = 'index.php';

</script>
";
}
 }


// BERANTAKAN ? 
 // KARNA MASIH BELAJAR

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DansSite - Tambah Teks</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<body style="background-color:powderblue;">
<style>
.myButton {
	background-color:#44c767;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:16px 31px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
</head>
<body>
<h1>Mestere-Form</h1>
<hr />
<form action="" method="post">
                <center><h6>Tambah Data:</h6></center>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="text" name="date" class="form-control" 
                    required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="pln" class="col-sm-2 col-form-label">tagihan</label>
                  <div class="col-sm-10">
                    <input type="text" name="pln" class="form-control">
                  </div>
                </div>
                
		<center>
                <button type="submit" name="submit" class="myButton">Tambah Data!</button>
		</center>
                </form>
</body>
</html>