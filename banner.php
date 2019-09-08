<!DOCTYPE html>
<html>
<head>
	<title>banner</title>
</head>
<style >
	.banner {
		padding: 80px 0;
		text-align: center;
		color: white;
		background-color: #eee;
		background-image: url(img/sunrise.jpg);
		background-repeat: no-repeat;
		/*background-size: contain;*/
		/*background-size: cover;*/
		background-size: auto;
	}

/*	li:first-child {

		background-color: yellow;
		color: red;
	}

	li:last-child {
		background-color: blue;
		color: red;
	}*/

	/*li:nth-child(2),
	li:nth-child(3) {
		background-color: yellow;
		color: red;
	}*/

/*	li:nth-child(odd) 
	{
		background-color: yellow;
	}

	li:nth-child(even)
	{
		background-color: orange;
	}
*/
	div	
	{
		padding:10px;
		margin: 10px 20px;
		box-shadow: 2px 2px 10px 2px rgba(0,0,0,.3);
	}

	h1
	{
		text-shadow: 2px 2px 8px #aaa;
		color: white;
	}

	#value1
	{
		border-radius: 20% 10%;
		background:#000FFF;
		padding: 20px;
		width: 200px;
		height: 140px;
	}
	#value2
	{
		
		border-radius: 25px;
		background:#000FFF;
		padding: 20px;
		width: 200px;
		height: 140px;
	}

	#value4
	{
		
		border-radius: 25px 50px;
		background:#000FFF;
		padding: 20px;
		width: 200px;
		height: 140px;
	}

	#value3
	{
		border-radius: 25px 50px 50px;
		background:#000FFF;
		padding: 20px;
		width: 200px;
		height: 140px;
	}

		#value5	{
		border-radius: 25px 50px 50px 50px;
		background:#000FFF;
		padding: 20px;
		width: 200px;
		height: 140px;
	}

	.container div
	{
		width: 130px;
		height: 130px;
		display: inline-block;
		margin: 2px;

	}

	#el1 { background:linear-gradient(to bottom, yellow, red); }
	#el2 { background:linear-gradient(red 5%, yellow 15%, green 60%); }
	#el3 { background:repeating-linear-gradient(red , yellow 10%, green 15%); }
	#el4 { background:repeating-radial-gradient(red, green 5px, white 5px, white 10px, white 10px); }
</style>
<body>
	<!-- <div class="banner">
		<h1>Hello Jay</h1>
	</div> -->
	<h1>Daftar Bekal Piknik</h1>

	<ul>
		<li>Nasi</li>
		<li>Sate</li>
		<li>Sayuran</li>
		<li>Minuman</li>
	</ul>

	<div>
		<p>The optional fourth value defines the spread of the shadow</p>
	</div>

	<div id="value1"></div>
	<div id="value2"></div>
		<div id="value3"></div>
	<div id="value4"></div>
	<div id="value5"></div>

	<div class="container">
		<div id="el1">Linear</div>
		<div id="el2">Radial</div>
		<div id="el3">Repeating Lin</div>
		<div id="el4">Repeating Rad</div>
	</div>

</body>
</html>