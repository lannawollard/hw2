<?php
$pageTitle= "Home";
include "view-header.php";
?>
    <h1>Home</h1>
<p id="demo" style="display:none">Hello! Welcome to Homework 5!</p>

<button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>

<h2>Java Script Examples</h2>
<p id="second">JavaScript can change HTML content--just watch!.</p>
<button type="button" onclick='document.getElementById("second").innerHTML = "Told you!"'>Click Me!</button>

<h3>and another one</h3>
<p id="third">JavaScript can change the style of an HTML element.</p>
<button type="button" onclick="document.getElementById('third').style.fontSize='35px'">Click Me!</button>

<?php
include "view-footer.php";
?>
