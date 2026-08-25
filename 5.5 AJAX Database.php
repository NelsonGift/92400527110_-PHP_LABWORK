<!DOCTYPE html>
<html>
<head>
    <title>AJAX Database</title>
</head>
<body>

<h2>Student Information</h2>

<button onclick="loadStudents()">Load Students</button>

<div id="result"></div>

<script>

function loadStudents() {

    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "students.php", true);

    xhttp.send();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("result").innerHTML =
                this.responseText;

        }

    };

}

</script>

</body>
</html>