<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript">

	function insert(){

		if( window.XMLHttpRequest ){
			var xmlhttp = new XMLHttpRequest();
		} else{
			var xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}


		xmlhttp.onreadystatechange = function(){
			if ( xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById('message').innerHTML = xmlhttp.responseText;
			}
		}

		var parameter = 'text='+document.getElementById('text').value;

		xmlhttp.open('POST', 'update.inc.php', true );		
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(parameter);
	
	}

	</script>


</head>
<body>


Insert: <input type="text" id="text" /> <input type="button" value="submit" onclick="insert();" />

<div id="message"></div>
	
</body>
</html>
