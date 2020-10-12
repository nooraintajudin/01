	<?php

	$host = "localhost";
	$user = "root";
	$password = "ain6314";
	$database = "diagnosis";
	
	$username = "";
	$name = "";
	$date = "";
	$gender = "";
	$bp = "";
	$pulse = "";
	$pr = "";
	$temp = "";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

	try{
		$connect = mysqli_connect($host, $user, $password, $database);
	} catch (Exception $ex) {
		echo 'Error';
	}
	
	//Search
	
	if(isset($_POST['search']))
	{
		$data = getPosts();
		
		$searchQuery = "SELECT * FROM data_pesakit WHERE username = $data[0]";
		
		$search_Result = mysqli_query($connect, $search_Query);
		
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$username = $row['username'];
					$name = $row['name'];
					$date = $row['date'];
					$gender = $row['gender'];
					$bp = $row['bp'];
					$pulse = $row['pulse'];
					$pr = $row['pr'];
					$temp = $row['temp'];
				}
			}else{
				echo 'No Data For This Id';
			}
		}else{
			echo 'Result Error';
		}
	}
	
	if(isset($_POST['insert']))
	{
		$data = getPosts();
		$insert_Query = "INSERT INTO 'data_pesakit'('username', 'name', 'date', 'gender', 'bp', 'pulse', 'pr', 'temp') VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]')";
		try{
			$insert_Result = mysqli_query($connect, $insert_Query);
			
			if($insert_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					echo 'Data Inserted';
				}else{
					echo 'Data Not Inserted';
				}
			}
		} catch (Exception $ex) {
			echo 'Error Insert'.$ex->getMessage();
		}
	}
	
	if(isset($_POST['delete']))
	{
		$data = getPosts();
		$delete_Query = "DELETE FROM 'data_pesakit' WHERE 'username' = $data[0]";
		try{
			$delete_Result = mysqli_query($connect, $delete_Query);
			
			if($delete_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					echo 'Data Deleted';
				}else{
					echo 'Data Not Deleted';
				}
			}
		} catch (Exception $ex) {
			echo 'Error Delete'.$ex->getMessage();
		}
	}
	
	if(isset($_POST['update']))
	{
		$data = getPosts();
		$update_Query = "UPDATE 'data_pesakit' SET 'name'='$data[1]', 'date'='$data[2]', 'gender'='$data[3]', 'bp'='$data[4]', 'pulse'='$data[5]', 'pr'='$data[6]', 'temp'=$data[4] WHERE 'username' = $data[0]";
		try{
			$update_Result = mysqli_query($connect, $update_Query);
			
			if($update_Result)  
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					echo 'Data Updated';
				}else{
					echo 'Data Not Updated';
				} 
			}
		} catch (Exception $ex) {
			echo 'Error Update'.$ex->getMessage();
		}
	}

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
        <h1 id="logo"><a>Sistem Diagnosis PPAT<span></span></a></h1>
        <hr class="noscreen" />          

        <!-- Quick links -->
        <div class="noscreen noprint">
            <p><em>Quick links: <a href="#content">content</a>, <a href="#tabs">navigation</a>, <a href="#search">search</a>.</em></p>
            <hr />
        </div>

        <!-- Search -->
        <div id="search" class="noprint">
            <form action="" method="get">
                <fieldset><legend>Search</legend>
                    <label><span class="noscreen">Find:</span>
                    <span id="search-input-out"><input type="text" name="" id="search-input" size="30" /></span></label>
                    <input type="image" src="design/search_submit.gif" id="search-submit" value="OK" />
                </fieldset>
            </form>
        </div> <!-- /search -->

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="noprint">

            <h3 class="noscreen">Navigation</h3>
            <ul class="box">
                <li><a href="index.html">Laman Utama<span class="tab-l"></span><span class="tab-r"></span></a></li>
				<li><a href="record.php">Rekod Pesakit<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="main_staf.html">Keluar<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
		
		<form action="record3.php" method="post">
			<table>
			<tr>
				<td>NO.TENTERA:</td>
				<td><input type="text" name="no_tentera" value="<?php echo $no_tentera;?>"></td>
			</tr>
			<tr>
				<td>NAMA:</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			
			<tr>
				<td>TARIKH:</td>
				 <td><input type="date" name="date" value="<?php echo $date;?>"></td>
			</tr>
			<tr>
				<td>JANTINA:</td>
				<td>
					<select name="gender" value="<?php echo $gender;?>">
						<option value="lelaki">Lelaki</option>
						<option value="perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>BP(mmHg):</td>
				<td><input type="text" name="bp" value="<?php echo $bp;?>"></td>
			</tr>
			<tr>
				<td>PULSE(bpm):</td>
				<td><input type="text" name="pulse" value="<?php echo $pulse;?>"></td>
			</tr>
			<tr>
				<td>PR(rpm):</td>
				<td><input type="text" name="pr" value="<?php echo $pr;?>"></td>
			</tr>
			<tr>
				<td>SUHU(fehr):</td>
				<td><input type="text" name="temp" value="<?php echo $temp;?>"></td>
			</tr>
			<tr>
				<td>NAMA PEGAWAI PERUBATAN:</td>
				<td>
					<select>
						<option value="">Lt. Kol Dr Shahida</option>
						<option value="">Mejar Dr Nurhidayah</option>
						<option value="">M/A Manirajan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>DIAGNOSA:</td>
				<td>
					<select>
						<option value="demam">Demam</option>
						<option value="cirit">Cirit Birit</option>
						<option value="selsema">Selsema</option>
						<option value="kepala">Sakit Kepala</option>
						<option value="jantung">Sakit Jantung</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>JENIS UBAT:</td>
				<td>
					<select>
						<option value="">Panadol</option>
						<option value="">Antidiarea</option>
						<option value="">Chloramine</option>
						<option value="">Paracetamol (acetaminophen) </option>
						<option value="">Aspirin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>CATATAN(ULASAN PEG. PERUBATAN):</td>
				<td><input type="text" name="notes"></td>
			</tr>
			</table>
			<input type="submit" name="insert" value="Masuk">
			<input type="submit" name="update" value="Kemaskini">
			<input type="submit" name="delete" value="Padam">
			<input type="submit" name="search" value="Cari">
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
