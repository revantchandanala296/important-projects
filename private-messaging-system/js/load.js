function change() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("insertText").innerHTML = xmlhttp.responseText;
			$("#subject").css({color:'black'});
			
        }
    }
    xmlhttp.open("POST", "file.php", true);
    xmlhttp.send();
}



