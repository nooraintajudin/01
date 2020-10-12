<?php
$servername = "localhost";
$username = "root";
$password = "ain6314";
$dbname = "diagnosis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT no_tentera, kata_laluan, emel, kategori FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        //echo "" . $row["no_tentera"]. "" . $row["kata_laluan"]. "" . $row["emel"]. "" . $row["kategori"]."<br>";
		//$U1 = $row["no_tentera"];
        //$U2 = $row["kata_laluan"];
        //$U3 = $row["emel"];
		//$U4 = $row["kategori"];
	}
	
} 

else
 
    {
    echo "0 results";
    }
    
    
$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Sistem Diagnosis</title>
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
        <h1 id="logo"><a>Sistem Penjanaan Ubat Berdasarkan Diagnosis PPAT<span></span></a></h1>
        <hr class="noscreen" />          

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li><a href="index.html">Laman Utama<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="registration.html">Pendaftaran<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="pengguna.html">Maklumat Pengguna<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="main_admin.html">Keluar<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
                <h2><span><a>Laman Maklumat Pengguna</a></span></h2>
		
		<form action="list2.php" method="post">
			<table>
			<tr>
				<td>No. Tentera</td>
				<td>Kata Laluan</td>
				<td>Alamat E-mel</td>
				<td>Kategori</td>
			</tr>
			<tr>
				<td><input value="<?php echo $row["no_tentera"];?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="kata_laluan" value="<?php echo $row["kata_laluan"];?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="emel" value="<?php echo $row["emel"];?>"></td>
			</tr>
			<tr>
				<td><input type="text" name="kategori" value="<?php echo $row["kategoril"];?>"></td>
			</tr>
			</table>
		</form>
               
            </div> <!-- /article -->

            <hr class="noscreen" />
    
        </div> <!-- /content -->

        <!-- Right column -->
        <div id="col" class="noprint">
            <div id="col-in">

                <hr class="noscreen" />
 
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