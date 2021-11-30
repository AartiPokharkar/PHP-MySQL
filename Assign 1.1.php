<html>  
<body>  
<form method="post">  
Enter 1st Number:  
<input type="number" name="number1" /><br><br>  
Enter 2nd Number:  
<input type="number" name="number2" /><br><br>  
<input  type="submit" name="Add" value="Add">  
<input  type="submit" name="Subtract" value="Subtract">
<input  type="submit" name="Multiply" value="Multiply">
<input  type="submit" name="Divide" value="Divide">
</form>  
<?php  
    if(isset($_POST['Add']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $sum =  $number1+$number2;     
echo "$number1 + $number2 = ".$sum;  
    }
if(isset($_POST['Subtract']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $subtract =  $number1-$number2;     
echo "$number1 - $number2 = ".$subtract;
    }
if(isset($_POST['Multiply']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $multiply =  $number1*$number2;     
echo "$number1 * $number2 = ".$multiply;
    }
if(isset($_POST['Divide']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
        $divide =  $number1/$number2;     
echo "$number1 / $number2 = ".$divide;
    }  
?>  
</body>  
</html>