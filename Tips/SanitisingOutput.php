<?php
    //return from database
    $postContent="Hello world <b>I love NY</b> <script>alert('This is my life')</script>";
    echo $postContent."<br/>";
    echo htmlentities($postContent)."<br/>";
    //htmlentities:This function is identical to htmlspecialchars() in all ways, except with  htmlentities(), all characters which have HTML character entity equivalents are translated into these entities.
    echo strip_tags($postContent,'<b>');
    //except <b></b>
