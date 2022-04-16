<html>
	<head>
		<script type="text/javascript">
			function findmatch(){
            
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("result").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "search.php?search_text="+document.search.search_text.value, true);
            xmlhttp.send();
        }
		</script>
	</head>
	<body>
		<form name="search" id="search" action="anotherpage.php">
			Type a Name:<br />
			<input type="text" name="search_text" onkeyup="findmatch();" />
		</form>
		
		<div id="result"></div>
	</body>
</html>