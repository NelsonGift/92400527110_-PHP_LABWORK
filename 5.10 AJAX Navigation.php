<!DOCTYPE html>
<html>
<head>

    <title>AJAX Navigation</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body>

<h2>My Website</h2>

<nav>

    <a href="#" class="menu" data-page="home.php">
        Home
    </a>

    <br><br>

    <a href="#" class="menu" data-page="about.php">
        About
    </a>

    <br><br>

    <a href="#" class="menu" data-page="contact.php">
        Contact
    </a>

</nav>

<hr>

<div id="content">

    <h3>Welcome</h3>

    <p>Select a menu item.</p>

</div>

<script>

$(".menu").click(function(event) {

    event.preventDefault();

    var page = $(this).data("page");

    $.ajax({

        url: page,

        type: "GET",

        success: function(data) {

            $("#content").html(data);

        },

        error: function() {

            $("#content").html(
                "Error loading page."
            );

        }

    });

});

</script>

</body>
</html>