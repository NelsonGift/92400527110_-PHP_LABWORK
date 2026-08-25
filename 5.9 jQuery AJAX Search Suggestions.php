<!DOCTYPE html>
<html>
<head>

    <title>Search Suggestions</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>

<h2>Search</h2>

<input
    type="text"
    id="search"
    placeholder="Search student..."
>

<div id="suggestions"></div>

<script>

$("#search").keyup(function() {

    var query = $(this).val();

    if (query != "") {

        $.ajax({

            url: "suggestions.php",

            type: "GET",

            data: {
                search: query
            },

            success: function(data) {

                $("#suggestions").html(data);

            }

        });

    } else {

        $("#suggestions").html("");

    }

});

</script>

</body>
</html>