<html>
<head>
<title>WebNetwork</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalabe=0" />
	
</head>

<body>

	<div id="header">
		<div class="logo"><a href="#">Web<span>Network</span></a></div>
	</div>

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a class="selected" href="#">MENU</a></li>
				<li><a href="/dw/ip_info.html">IP_INFO</a></li>
				<li><a href="/dw/ps.html">PS</a></li>
				<li><a href="/dw/dynamic-update/index.html">DYNAMIC</a></li>
				<li><a href="/dw/ping.html">PING</a></li>
				<li><a href="/dw/contato.php">CONTATO</a></li>
				<li><a href="/dw/sair.html">SAIR</a></li>
			</ul>
		</div>
		<div class="content">
		<h1>NWS - Network web services</h1>
			<p>network services</p>


			<div id="box">
				
				<div class="box-top">News</div>
				<div class="box-panel">
				<?php include "hostname.php" ?>
				</div>
				
			</div>

			<div id="box">
				<div class="box-top">News</div>
				<div class="box-panel">
					<?php include "uname.php" ?>
				</div>
			</div>

			<div id="box">
				<div class="box-top">News</div>
				<div class="box-panel">
				<?php include "free.php" ?>
				</div>
				
			</div>

			<div id="box">
				<div class="box-top">News</div>
				<div class="box-panel">
					<?php include "uptime.php" ?>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="rodape">
			<h2>NWS - Network web services ser Developed by Gutemberg Ferreira</h2>
		</div><!--fim divrodape-->	
	</footer><!--fim rodape-->

</body>
</html>