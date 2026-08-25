<!DOCTYPE html>
<html>
<head>
    <title>AJAX Search</title>
</head>
<body>

<h2>Search</h2>

<input
    type="text"
    id="search"
    onkeyup="searchData()"
    placeholder="Type something..."
>

<p id="result"></p>

<script>

function searchData() {

    var value = document.getElementById("search").value;

    var xhttp = new XMLHttpRequest();

    xhttp.open(
        "GET",
        "search.php?query=" + encodeURIComponent(value),
        true
    );

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