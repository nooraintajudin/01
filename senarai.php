<?php
$link = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
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
				<li><a href="senarai.php">Maklumat Pengguna<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="main_admin.html">Keluar<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>

        <hr class="noscreen" />
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">


            <!-- Breadcrumbs -->
            <p id="breadcrumbs">Anda disini: <a>Laman Maklumat Pengguna</a></p>
            <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

            <!-- Article -->
            <div class="article">
                <h2><span><a>Laman Maklumat Pengguna</a></span></h2>
				

<form name="form1" action="" method="post">
	<table>
		<tr>
			<td>NO. TENTERA:</td>
			<td><input type="text" name="t1"></td>
		</tr>
		<tr>
			<td>KATA LALUAN:</td>
			<td><input type="password" name="t2"></td>
		</tr>
		<tr>
			<td>ALAMAT E-MEL:</td>
			<td><input type="text" name="t3"></td>
		</tr>
		<tr>
			<td>KATEGORI:</td>
			<td>
				<select select name="t4" id="category">
					<option value="pentadbir">Pentadbir</option>
					<option value="staf">Staf Perubatan</option>
					<option value="pegawai">Pegawai Perubatan</option>
				</select>
			</td>
		</tr>
	</table>
		<input type="submit" name="submit1" value="insert">
		<input type="submit" name="submit2" value="delete">
		<input type="submit" name="submit3" value="update">
		<input type="submit" name="submit4" value="display">
		<input type="submit" name="submit5" value="search">
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
<?php
if(isset($_POST["submit1"]))
{
	mysqli_query($link,"insert into users values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]')");
}

if(isset($_POST["submit2"]))
{
	mysqli_query($link,"delete from users where no_tentera='$_POST[t1]'");
}

if(isset($_POST["submit3"]))
{
	mysqli_query($link,"update users set no_tentera='$_POST[t2]' where no_tentera='$_POST[t1]'");
}

if(isset($_POST["submit4"]))
{
	$res=mysqli_query($link,"select * from users");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "no_tentera"; echo "</th>";
	echo "<th>"; echo "kata_laluan"; echo "</th>";
	echo "<th>"; echo "e-mel"; echo "</th>";
	echo "<th>"; echo "kategori"; echo "</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["no_tentera"]; echo "</td>";
		echo "<td>"; echo $row["kata_laluan"]; echo "</td>";
		echo "<td>"; echo $row["e-mel"]; echo "</td>";
		echo "<td>"; echo $row["kategori"]; echo "</td>";
		echo "</tr>";
	
	}
	echo "</table>";
}

if(isset($_POST["submit5"]))
{
	$res=mysqli_query($link,"select * from users where no_tentera='$_POST[t1]'");
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>"; echo "no_tentera"; echo "</th>";
	echo "<th>"; echo "kata_laluan"; echo "</th>";
	echo "<th>"; echo "e-mel"; echo "</th>";
	echo "<th>"; echo "kategori"; echo "</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td>"; echo $row["no_tentera"]; echo "</td>";
		echo "<td>"; echo $row["kata_laluan"]; echo "</td>";
		echo "<td>"; echo $row["e-mel"]; echo "</td>";
		echo "<td>"; echo $row["kategori"]; echo "</td>";
		echo "</tr>";
	
	}
	echo "</table>";
}

?>

</body>
</html>