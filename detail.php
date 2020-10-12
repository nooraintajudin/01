<?php
$conn = mysqli_connect("localhost", "root", "ain6314", "diagnosis");
$query = "SELECT * FROM diagnos_awal ORDER BY no_tentera desc";
$sql = mysqli_query($conn, $query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Sistem Pemilihan Ubat  Berdasarkan Diagnosis PPAT</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body {
		font-family: "verdana", sans-serif;
		font-size: 11px;
	}
	</style>
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
            <p id="breadcrumbs">Anda disini: <a>Laman Detail Pesakit</a></p>
            <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content" style="padding: 0 0 0 20px;">

            <!-- Article -->
            <div class="article">
                <h2><span><a>Detail Pesakit</a></span></h2>
		
		<br/>
		<br/>
		<div class="col-md-4">
		<input type="text" name="From" id="From" class="form-control" placeholder="From Date"/>
		</div>
		<div class="col-md-4">
		<input type="text" name="to" id="to" class="form-control" placeholder="To Date"/>
		</div>
		<div class="col-md-4">
		<input type="button" name="range" id="range" value="Range" class="btn btn-success"/>
		</div>
		<div class="clearfix"></div>
		<br/>
		<div id="purchase_order">
		<table class="table table-bordered">
		<tr>
		<th width="1%">No. Tentera</th>
		<th width="1%">Tarikh</th>
		<th width="1%">Bp</th>
		<th width="1%">Pulse</th>
		<th width="1%">Pr</th>
		<th width="1%">Suhu</th>
		</tr>

		<?php
		while($row= mysqli_fetch_array($sql))
		{
			?>
			<tr>
			<td><?php echo $row["no_tentera"]; ?></td>
			<td><?php echo $row["tarikh"]; ?></td>
			<td><?php echo $row["bp"]; ?></td>
			<td><?php echo $row["pulse"]; ?></td>
			<td><?php echo $row["pr"]; ?></td>
			<td><?php echo $row["suhu"]; ?></td>
			</tr>
			<?php
		}
		?>
		</table>
		</div>
		<!-- <button type="submit"><a href="main_peg.php">Keluar</a></button> -->

        </div> <!-- /article -->

        <hr class="noscreen" />
            
        </div> <!-- /content -->

	<!-- Right column -->
        <div id="col" class="noprint" style="margin: 0px 20px;">
            <div id="col-in">

               <!-- <hr class="noscreen" /> -->
 
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

		
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<!-- Script -->
<script>
$(document).ready(function(){
	$.datepicker.setDefaults({
		dateFormat: 'dd-mm-yy'
	});
	$(function(){
		$("#From").datepicker();
		$("#to").datepicker();
	});
	$('#range').click(function(){
		var From = $('#From').val();
		var to = $('#to').val();
		if(From != '' && to != '')
		{
			$.ajax({
				url:"range.php",
				method:"POST",
				data:{From:From, to:to},
				success:function(data)
				{
					$('#purchase_order').html(data);
				}
			});
		}
		else
		{
			alert("Please Select the Date");
		}
	});
});
</script>
</body>
</html>