<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <input type="date" name="" id="dt">
  <input type="button" name="" id="btn">
 <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function () {
 	    $('#btn').click(function () {
 	$dat=$('#dt').val();
 	var d1 = new Date();
 	var d2 = new Date($dat);
 	 years = Math.floor((d1.getTime() - d2.getTime()) / (365.25 * 24 * 60 * 60 * 1000));
alert(years);
 	//alert(d1.getYear()-d2.getYear());
 	});
 	});
 	
 </script>
</body>
</html>