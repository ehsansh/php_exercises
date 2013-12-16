<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<script type="text/javascript">

function findmatch(){

	if( window.XMLHttpRequest ){
		var xmlhttp = new XMLHttpRequest();
	} else{
		var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
	}


	xmlhttp.onreadystatechange = function(){
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
			document.getElementById('result').innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open('GET', 'search.inc.php?search_text='+document.search.search_text.value, true );
	xmlhttp.send();
	
}
	


</script>


<body>

<form id="search" name="search">
	Type a name.<br />
	<input type="text" name="search_text" onkeyup="findmatch();" />	
</form>

<div id="result"></div>
	
</body>
</html>
