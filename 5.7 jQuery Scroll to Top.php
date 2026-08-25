<!DOCTYPE html>
<html>
<head>

    <title>Scroll to Top</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>

        body {
            height: 1500px;
            font-family: Arial;
        }

        #topButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
        }

    </style>

</head>

<body>

<h1>Scroll Down</h1>

<p>
    Scroll down the page and click the button
    to return smoothly to the top.
</p>

<button id="topButton">Go to Top</button>

<script>

$("#topButton").click(function() {

    $("html, body").animate(
        {
            scrollTop: 0
        },
        800
    );

});

</script>

</body>
</html>