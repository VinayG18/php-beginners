<html>
	<head>
		<script type="text/javascript">
			function load(){
            
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("adiv").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "include.php", true);
            xmlhttp.send();
        }
		</script>
	</head>
	<body>
		<input type="submit" onclick="load()" />
		
		<div id="adiv"></div>
	</body>
</html>