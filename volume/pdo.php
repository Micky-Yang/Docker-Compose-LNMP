<?php
try {
    $pdo = new PDO("mysql:host=mysql","root","Abcd@123456");
    $pdo = null;
    print "θΏζ₯ζε";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}