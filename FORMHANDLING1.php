<!-- form.html -->
<form method="get">
Name: <input type="text" name="uname"><br>
Age: <input type="text" name="age"><br>
<input type="submit" value="Submit">
</form>
<?php
// welcome.php
$name = $_GET["uname"];
$age = $_GET["age"];
echo "Hello $name, you are $age years old.";
?>
