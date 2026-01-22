<!DOCTYPE html>
<head>
    </head>
    <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Kelvin</label>
<input name="kelvinVal">
<input type="submit" value="Clear">
<input type="submit" value="Calculate">
</form>
</body>

<?php
if (result < 30){
    echo "cold";
} elseif($result < 50)
echo "mild";
else {
    echo "hot";
}

?>

<?php
    echo $celcius;

?>
</html>