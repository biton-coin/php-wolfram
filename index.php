<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP Wolfram 1.0</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<style>
	.row{
		width: 500px !important;
		margin: 0 auto;
		text-align: center;
	}
	.input-group{
		width: 100% !important;
	}
</style>
</head>

<body>

<div style="text-align:center; position: absolute; top: 40%; left: 50%; margin-top: -140px; margin-left: -270px;">
<h2>PHP Wolfram</h2>
<h3>Wolfram Alpha PHP parser</h3>
<form action="wolfram.php" method="GET" class="row">
	<div class="input-group">
		<input type="text" class="form-control" name="q"/>
		<span class="input-group-btn">
			<input class="btn btn-default" name="sbt" type="submit" value="="/>
		</span>
	</div>
</form>
<br/>
<p align="center">Developed by <a href="https://github.com/greekdev/php-wolfram">GreekDev</a>
<br/><br/>
Use this script for personal or educational purposes only.
<br/>For commercial use you will need a commercial license.<br/><br/>
For more information please read the <a href="http://www.wolframalpha.com/termsofuse">Terms of Use</a>
</div>

<a href="https://github.com/greekdev"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
</body>

</html>