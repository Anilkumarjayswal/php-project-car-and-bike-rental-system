<?php
$value="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $p=$_POST['first'];
    $q=$_POST['second'];
    if($_REQUEST["btn"]=="+")
    {
        $value=$p+$q;
    }
    if($_REQUEST["btn"]=="-")
    {
        $value=$p-$q;
    }
    if($_REQUEST["btn"]=="*")
    {
        $value=$p*$q;
    }
    if($_REQUEST["btn"]=="/")
    {
        $value=$p/$q;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>csenotes12.in</title>
    <style type="text/css">
        .block
        {
          
            color:black;
        }
        input
        {
            font-size: 12px;
            border-radius: 12px;
            outline: 12px;
        }
        fieldset{
            background-color: yellow; margin-left: 300px; margin-right: 780px; border-radius: 50px;
        }
    </style>
</head>
<body>
<div class="block">
<fieldset>
    <h1>Calculator using PHP</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
Enter First Num: <input type="text" name="first"><br><br>
Enter First Num::<input type="text" name="second"><br><br>
<button name="btn" value="+">Add</button>
<button name="btn" value="-">sub</button>
<button name="btn" value="*">multiply</button>
<button name="btn" value="/">divide</button>
</form>
<hr>
<?php
echo "Output Is ".$value;
?>
</div>
</fieldset>
</body>
</html>