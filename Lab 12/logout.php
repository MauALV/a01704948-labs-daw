<?php
    session_start();
    session_unset();
    session_destroy();

    include 'partials/_header.html';
    include 'partials/_logout.html';
    include 'partials/_footer.html';
?>
