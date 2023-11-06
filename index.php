<?php
$pageTitle= "Home";
include "view-header.php";
?>
    <h1>Home</h1>
<p id="demo" style="display:none">Hello JavaScript!</p>

<button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>
<?php
include "view-footer.php";
?>
