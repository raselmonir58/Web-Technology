<?php
$ename="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(empty($_POST['name']))
    {
        $ename="";
        echo $ename;
    }
    else
        $ename= $_POST['name'];
}

$eemail="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(empty($_POST['email']))
    {
        $eemail="";
        echo $eemail;
    }
    else
        $eemail= $_POST['email'];
}

$epass="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(empty($_POST['pass']))
    {
        $epass="Password is Empty";
    }
    else
        echo "ok";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">


        <fieldset>
            <legend>REGISTRATION</legend>
 

        Name: <input type="text" name="name" placeholder="Enter your name"><br> <hr>
        Eamil: <input type="text" name="email" placeholder="Enter your Email"><br><hr>
        Password: <input type="Password" name="pass" placeholder="Enter your Password"><br><hr>

        Your image: <input type="file" id="img" name="img" accept="image/*"> <br> <hr>
       


        <button>Submit</button>


        </fieldset>        

    </form>

<?php echo $ename?> <br>
<?php echo $eemail?>
 
</body>
</html>

