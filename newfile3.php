<!--Addition,Multpliction,subtraction,Division Using PHP -->
<form action ="" method ="post">
    <input type ="text" name ="n" value ="" placeholder ="enter no" ><br>
    <input type ="text" name ="n2" value ="" placeholder ="enter no" ><br>
    <input type = "submit" name ="a" value ="ADD  +">
    <input type = "submit" name ="m" value ="MUL *">
    <input type = "submit" name ="d" value ="DIV /">
    <input type = "submit" name ="s" value ="SUB -">
</form>
<?php
if(isset($_POST['a'])){//a us a add button name 
    $n=$_POST['n'];// textbox 1
    $n2=$_POST['n2'];//textbox2
    $add=$n+$n2;//addition logic
    echo "Addition is" .$add;//calculate
}
//Multipliction
if(isset($_POST['m'])){//m is a multipliction button name 
    $n=$_POST['n'];// textbox 1
    $n2=$_POST['n2'];//textbox2
    $m=$n*$n2;//mutipliction logic
    echo "Multipliction is".$m;//calculate
}
// division
if(isset($_POST['d'])){//d is a division button name 
    $n=$_POST['n'];// textbox 1
    $n2=$_POST['n2'];//textbox2
    $d=$n/$n2;//division logic
    echo "Divisionis" .$d;// calculate
}
//subraction
if(isset($_POST['s'])){//s is subtraction button name 
    $n=$_POST['n'];// textbox 1
    $n2=$_POST['n2'];//textbox2
    $s=$n-$n2;//subtraction logic
    echo "subraction is" .$s;//calculate
}
?>