<?php
$pageTitle= "Home";
include "view-header.php";
?>
    <h1>Home</h1>
<p id="demo" style="display:none">Hello! Welcome to Homework 5!</p>

<button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>
<p id="demo">JavaScript can change HTML content--just watch!.</p>

<button type="button" onclick='document.getElementById("demo").innerHTML = "Told you!"'>Click Me!</button>
<?php
include "view-footer.php";
?>
