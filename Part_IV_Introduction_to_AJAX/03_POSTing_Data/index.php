<html>
	<head>
		<script type="text/javascript">
			function insert(){
            	if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("message").innerHTML = xmlhttp.responseText;
                }
            }
			
			parameters = 'text='+document.getElementById('text').value;
			
            xmlhttp.open("POST", "update.php", true);
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            xmlhttp.send(parameters);
        }          
		</script>
	</head>
	<body>
		
			Type a Name:
			<input type="text" id="text" /> <input type="button" value="Submit" onClick="insert();" />
		
		<div id="message"></div>
	</body>
</html>