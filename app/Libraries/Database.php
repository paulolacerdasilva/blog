<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog_aula', 'root', '');
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>