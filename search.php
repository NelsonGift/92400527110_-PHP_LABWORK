<?php

$query = $_GET["query"] ?? "";

if ($query == "") {

    echo "Start typing to search...";

} else {

    echo "You searched for: " . htmlspecialchars($query);

}

?>