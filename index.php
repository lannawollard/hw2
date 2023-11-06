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

<h4>and again</h4>
<p>JavaScript can show hidden HTML elements.</p>

<p id="fourth" style="display:none">Hello JavaScript!</p>

<button type="button" onclick="document.getElementById('fourth').style.display='block'">Click Me!</button>

<h5>last example</h5>
<button onclick="document.getElementById('myImage').src='laughing.jpeg'">Turn on the light</button>

<img id="myImage" src="laughing.jpeg" style="width:100px">

<button onclick="document.getElementById('myImage').src='laughing.jpeg'">Turn off the light</button>

<body style = "text-align: center; font-size: 20px;">

<h1> Welcome to the javaScript world!! </h1>

Enter a particular number: <input id = "num">

<br><br>

<button onclick = "fact()"> Please type any Factorial number </button>

<p id = "res"></p>

<script>

function fact(){

var i, num, f;

f = 1;

num = document.getElementById("num").value;

for(i = 1; i <= num; i++)  

{

f = f * i;

}

i = i - 1;  

document.getElementById("res").innerHTML = "The factorial of the number " + i + " is: " + f ;

}

</script>


<?php
include "view-footer.php";
?>
