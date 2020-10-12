<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link1 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
$link2 = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
 
// Check connection

if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($link2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$no_tentera = mysqli_real_escape_string($link1, $_REQUEST['no_tentera']);
$no_tentera = mysqli_real_escape_string($link2, $_REQUEST['no_tentera']);

// attempt insert query execution
$sql1 = "select * FROM rekod_pesakit where no_tentera = '$no_tentera'";
$result1 = $link1->query($sql1);

$sql2 = "select * FROM diagnos_awal where no_tentera = '$no_tentera'";
$result2 = $link2->query($sql2);


if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        //echo "NO.TENTERA: " . $row["no_tentera"]. " - NAMA: " . $row["nama"]. " - TARIKH: " . $row["tarikh"]. " - JANTINA: " . $row["jantina"]. " - BP: " . $row["bp"]. " - PULSE: " . $row["pulse"]. " - PR: " . $row["pr"]. " - SUHU: " . $row["suhu"]."<br>";
        $U1 = $row["no_tentera"];
        $U2 = $row["nama"];
        $U3 = $row["tarikh_lahir"];
		$U4 = $row["jenis_darah"];
		$U5 = $row["tinggi"];
        $U6 = $row["berat"];
        $U7 = $row["jantina"];
		
    }
} else {
    echo "<script>alert('0 results')</script>";
}

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        //echo "NO.TENTERA: " . $row["no_tentera"]. " - NAMA: " . $row["nama"]. " - TARIKH: " . $row["tarikh"]. " - JANTINA: " . $row["jantina"]. " - BP: " . $row["bp"]. " - PULSE: " . $row["pulse"]. " - PR: " . $row["pr"]. " - SUHU: " . $row["suhu"]."<br>";
		$U8 = $row["tarikh"];
        $U9 = $row["bp"];
        $U10 = $row["pulse"];
		$U11 = $row["pr"];
        $U12 = $row["suhu"];
		
    }
} else {
    echo "<script>alert('0 results')</script>";
}


// close connection

mysqli_close($link1);

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
				<li><a href="record.html">Rekod Pesakit<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="result2_peg.html">Diagnosis<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="detail.php">Detail<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="main_peg.php">Keluar<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>

        <hr class="noscreen" />
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">


            <!-- Breadcrumbs -->
            <p id="breadcrumbs">Anda disini: <a>Laman Rekod Pemeriksaan Pesakit</a></p>
            <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

            <!-- Article -->
            <div class="article">
                <h2><span><a>Rekod Pemeriksaan Pesakit</a></span></h2>
						
		<p>*Jika Diastolic >90-100mmHg:
		
		Rujuk pesakit ke hospital yang berdekatan.</p>
		
		<form action="insert.php" method="post">
			<table>
			<tr>
				<td>NO.TENTERA:</td>
				<td><input type="text" name="no_tentera" value="<?php echo $U1;?>"></td>
			</tr>
			<tr>
				<td>NAMA:</td>
				<td><input type="text" name="nama" value="<?php echo $U2;?>"></td>
			</tr>
			
			<tr>
				<td>TARIKH LAHIR:</td>
				 <td><input type="date" name="tarikh_lahir" value="<?php echo $U3;?>"></td>
			</tr>
			<tr>
				<td>JENIS DARAH:</td>
				<td><input type="text" name="jenis_darah" value="<?php echo $U4;?>"></td>
			</tr>
			<tr>
				<td>TINGGI(cm):</td>
				<td><input type="text" name="tinggi" value="<?php echo $U5;?>"></td>
			</tr>
			<tr>
				<td>BERAT(kg):</td>
				<td><input type="text" name="berat" value="<?php echo $U6;?>"></td>
			</tr>
			<tr>
				<td>JANTINA:</td>
				<td><input type="text" name="jantina" value="<?php echo $U7;?>"></td>
			</tr>
			<tr>
				<td>TARIKH:</td>
				<td><input type="text" name="tarikh" value="<?php echo $U8;?>"></td>
			</tr>
			<tr>
				<td>BP(mmHg):</td>
				<td><input type="text" name="bp" value="<?php echo $U9;?>"></td>
			</tr>
			<tr>
				<td>PULSE(bpm):</td>
				<td><input type="text" name="pulse" value="<?php echo $U10;?>"></td>
			</tr>
			<tr>
				<td>PR(rpm):</td>
				<td><input type="text" name="pr" value="<?php echo $U11;?>"></td>
			</tr>
			<tr>
				<td>SUHU(celsius):</td>
				<td><input type="text" name="suhu" value="<?php echo $U12;?>"></td>
			</tr>
			<tr>
				<td>DIAGNOSA:</td>
				<td>
					<select name="diagnosa">
						<option value="DEMAM">DEMAM</option>
						<option value="CIRIT BIRIT">CIRIT BIRIT</option>
						<option value="SELSEMA">SELSEMA</option>
						<option value="SAKIT KEPALA">SAKIT KEPALA</option>
						<option value="BATUK">BATUK</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>JENIS UBAT:</td>
				<td>
				<div class="checkbox">
                <label>
                <input type="checkbox" name="jenis_ubat[]" value="124 - TAB. PARACETAMOL(PANADOL)1000MG TDS" />124 - TAB. PARACETAMOL(PANADOL)1000MG TDS
				</label>
				</div>
				<div class="checkbox">
                <label>
                <input type="checkbox" name="jenis_ubat[]" value="125 - TAB. PARACETAMOL 500MG TDS " />125 - TAB. PARACETAMOL 500MG TDS
				</label>
				</div>
				<div class="checkbox">
                <label>
                <input type="checkbox" name="jenis_ubat[]" value="126 - SY. PARACETAMOL 5ML TDS " />126 - SY. PARACETAMOL 5ML TDS
				</label>
				</div>
				<div class="checkbox">
                <label>
                <input type="checkbox" name="jenis_ubat[]" value="127 - SY. PARACETAMOL 2.5ML TDS " />127 - SY. PARACETAMOL 2.5ML TDS
				</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="152 - TAB. ATROPINE SULPHATE 2.5MG TDS " />152 - TAB. ATROPINE SULPHATE 2.5MG TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="153 - DIPHENOXYLATE HCL(LOMOTIL)2.5MG TDS " />153 - DIPHENOXYLATE HCL(LOMOTIL)2.5MG TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="154 - ORS 1/1 3 PACKET PRN " />154 - ORS 1/1 3 PACKET PRN
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="185 - TAB. CHLORPHENIRAMINEN MALEATE 4MG TDS " />185 - TAB. CHLORPHENIRAMINEN MALEATE 4MG TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="186 - SY. CHLORPHENIRAMINEN MALEATE 5ML TDS " />186 - SY. CHLORPHENIRAMINEN MALEATE 5ML TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="187 - SY. CHLORPHENIRAMINEN MALEATE 2.5ML TDS " />187 - SY. CHLORPHENIRAMINEN MALEATE 2.5ML TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="238 - CAP. MEFENAMIC ACID 250MG TDS " />238 - CAP. MEFENAMIC ACID 250MG TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="239 - PAIN KILLER " />239 - PAIN KILLER
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="240 - SEVERE HEADACHE " />240 - SEVERE HEADACHE
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="486 - EKSP. DIPHENHYDRAMINE HCL 10ML TDS " />486 - EKSP. DIPHENHYDRAMINE HCL 10ML TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="487 - EKSP. DIPHENHYDRAMINE HCL 5ML TDS " />487 - EKSP. DIPHENHYDRAMINE HCL 5ML TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="488 - EKSP. DIPHENHYDRAMINE HCL 2.5ML TDS " />488 - EKSP. DIPHENHYDRAMINE HCL 2.5ML TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="489 - TAB. BROMHEXINE (BISOLVON) 8MG TDS " />489 - TAB. BROMHEXINE (BISOLVON) 8MG TDS
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="880 - TAB. BACAMPICILLINE(PENGLOBE) 400MG BD " />880 - TAB. BACAMPICILLINE(PENGLOBE) 400MG BD
					</label>
				</div>
				<div class="checkbox">
					<label>
					<input type="checkbox" name="jenis_ubat[]" value="990 - SUSP. AMPICILLINE 125MG/5ML BD " />990 - SUSP. AMPICILLINE 125MG/5ML BD
					</label>
				</div>
				</td>
			<tr>
				<td>KUANTITI(doz):</td>
				<td>
				<select name="kuantiti">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="1">4</option>
						<option value="2">5</option>
				</select>

				</td>
			</tr>
				
		</div>
			</tr>
			</table>
			<input type="submit" name="search" value="search">
			<input type="submit" name="submit" value="insert">
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

