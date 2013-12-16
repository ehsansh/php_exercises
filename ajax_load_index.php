<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<script type="text/javascript">
	
function load(thediv, thefile){

	if( window.XMLHttpRequest ){
		var xmlhttp = new XMLHttpRequest();
	} else{
		var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}


	xmlhttp.onreadystatechange = function(){
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
			document.getElementById(thediv).innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open('GET', thefile, true );
	xmlhttp.send();


}



</script>



<body>


<input type="submit" onclick="load('adiv','include.inc.php');" />

<div id="adiv"></div>

	
</body>
</html>
