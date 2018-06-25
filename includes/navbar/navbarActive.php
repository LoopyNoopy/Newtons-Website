<?php
$index = "/index.php";
$aboutUs = "/aboutUs.php";
$contactUs = "/contactUs.php";
$currentPage = $_SERVER['REQUEST_URI'];

switch ($currentPage) {
    
    case $index:
        echo "<li class = 'active'><a href='index.php'>Home</a></li>";
        echo "<li><a href='aboutUs.php'>About Us</a></li>";
        echo "<li><a href='#'>Online Shop</a></li>";
        echo "<li><a href='contactUs.php'>Contact Us</a></li>";
        break;
        
    case $aboutUs:
        echo "<li><a href='index.php'>Home</a></li>";
        echo "<li class = 'active'><a href='about Us.php'>aboutUs</a></li>";
        echo "<li><a href='#'>Online Shop</a></li>";
        echo "<li><a href='contactUs.php'>Contact Us</a></li>";
        break;
        
    case $contactUs:
        echo "<li><a href='index.php'>Home</a></li>";
        echo "<li><a href='aboutUs.php'>About Us</a></li>";
        echo "<li><a href='#'>Online Shop</a></li>";
        echo "<li class = 'active'><a href='contactUs.php'>Contact Us</a></li>";
        break;
        
    default:
        echo "<li><a href='index.php'>Home</a></li>";
        echo "<li><a href='aboutUs.php'>About Us</a></li>";
        echo "<li><a href='#'>Online Shop</a></li>";
        echo "<li><a href='contactUs.php'>Contact Us</a></li>";
        break;
}

?>