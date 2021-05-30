// Global interactions handeler javascript file

// sample AJAX Snippet

var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();

function loadProfile() {
	// body...
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "profile.php", true);
        xmlhttp.send();
}

function loadDM() {

	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			// body...
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("main_div").innerHTML = xmlhttp.responseText;
			}
		};

		xmlhttp.open("GET", "direct_messaging.php", true);
		xmlhttp.send(); 
}