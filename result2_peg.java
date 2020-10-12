<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link3 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
$link2 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection

if($link3 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($link2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$no_tentera = mysqli_real_escape_string($link3, $_REQUEST['no_tentera']);
$no_tentera = mysqli_real_escape_string($link2, $_REQUEST['no_tentera']);

// attempt insert query execution
$sql3 = "select * FROM keputusan_diagnos where no_tentera = '$no_tentera'";
$result3 = $link3->query($sql3);

$sql2 = "select * FROM diagnos_awal where no_tentera = '$no_tentera'";
$result2 = $link2->query($sql2);


if ($result3->num_rows > 0) {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
        //echo "NO.TENTERA: " . $row["no_tentera"]. " - NAMA: " . $row["nama"]. " - TARIKH: " . $row["tarikh"]. " - JANTINA: " . $row["jantina"]. " - BP: " . $row["bp"]. " - PULSE: " . $row["pulse"]. " - PR: " . $row["pr"]. " - SUHU: " . $row["suhu"]."<br>";
        $U1 = $row["no_tentera"];
        $U3 = $row["diagnosa"];
		$U4 = $row["jenis_ubat"];
		$U5 = $row["kuantiti"];
    }
} else {
    echo "<script>alert('0 results')</script>";
}

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        //echo "NO.TENTERA: " . $row["no_tentera"]. " - NAMA: " . $row["nama"]. " - TARIKH: " . $row["tarikh"]. " - JANTINA: " . $row["jantina"]. " - BP: " . $row["bp"]. " - PULSE: " . $row["pulse"]. " - PR: " . $row["pr"]. " - SUHU: " . $row["suhu"]."<br>";
		$U8 = $row["tarikh"];
		
    }
} else {
    echo "<script>alert('0 results')</script>";
}

// close connection

mysqli_close($link3);

mysqli_close($link2);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Sistem Pemilihan Ubat Berdasarkan Diagnosis PPAT</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo"><a>Sistem Pemilihan Ubat Berdasarkan Diagnosis PPAT<span></span></a></h1>
        <hr class="noscreen" />          

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li><a href="index.html">Laman Utama<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="pesakit.html">Rekod Pesakit<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="result2.html">Diagnosis<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="main_staf.html">Keluar<span class="tab-l"></span><span class="tab-r"></span></a></li>  
            </ul>

        <hr class="noscreen" />
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">


            <!-- Breadcrumbs -->
            <p id="breadcrumbs">Anda disini: <a>Laman Rekod Kes Pesakit Dalam (Diagnosis)</a></p>
            <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

            <!-- Article -->
            <div class="article">
                <h2><span><a>Laman Rekod Kes Pesakit Dalam (Diagnosis)</a></span></h2>
				
			<form action="result2.php" method="post">
			<table>
			<tr>
				<td>NO.TENTERA:</td>
				<td><input type="text" name="no_tentera" value="<?php echo $U1;?>"></td>
			</tr>
			<tr>
				<td>DIAGNOSA:</td>
				<td><input type="text" name="diagnosa" value="<?php echo $U3;?>"></td>
			</tr>
			<tr>
				<td>JENIS UBAT:</td>
				<td>
					<div>
					<label>
						<input type="text" name="jenis_ubat" size="50" value="<?php echo $U4;?>">
					</label>
					</div>
				</td>
			</tr>
			<tr>
				<td>KUANTITI:</td>
				<td><input type="text" name="kuantiti" value="<?php echo $U5;?>"></td>
			</tr>
			<tr>
				<td>TARIKH:</td>
				<td><input type="text" name="tarikh" value="<?php echo $U8;?>"></td>
			</tr>
			</table>
				<input type="submit" value="search">
			</form>
 
            </div> <!-- /article -->

            <hr class="noscreen" />

            
            
        </div> <!-- /content -->

        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <hr class="noscreen" />

                
                <!-- Links -->
           			
				<tr>
				<td colspan=15>
				<img src="images/Slice11.gif" width=185 height=240></td>
				</tr>
            
            </div> <!-- /col-in -->
        </div> <!-- /col -->

    </div> <!-- /page-in -->
    </div> <!-- /page -->

    <!-- Footer -->
    <div id="footer">
        <div id="top" class="noprint"><p><span class="noscreen">Back on top</span> <a href="#header" title="Back on top ^">^<span></span></a></p></div>
        <hr class="noscreen" />
        
        <p id="createdby">created by <a>Noorain</a> <!-- DON? REMOVE, PLEASE! --></p>
        <p id="copyright">&copy; 2018 <a href="mailto:nooraintajudin@gmail.com">My Name</a></p>
    </div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>
