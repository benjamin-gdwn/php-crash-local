<?php
if (isset($_GET['submit'])) {
    echo $_GET['name'];
}
 

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>? name=Ben">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="$_GET">
<div>
<label for="name">Name</label>
<input type="text" name="name">
</div>
<div>
<label for="age">Age</label>
<input type="text" name="age">
</div>
<input type="submit" name="submit" value="Submit" >
</form>