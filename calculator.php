<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
     $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>CALCULATOR</title>
    <style>
        *{
    margin:0;
    padding:0;
    font-family:'Poppins',sans-serif;
    box-sizing: border-box;
}
.container{
    width:100%;
    height:100vh;
    background:#e3f9ff;
    display: flex;
    align-items:center ;
    justify-content:center;
}
.calculator{
    background:#3a4452;
    padding :20px;
    border-radius: 20px;
}
.calculator form input{
    border:0;
    outline:0;
    width:60px;
    height:60px;
    border-radius:10px;
    box-shadow:-8px -8px 15px rgba(255,255,255,0.1),5px 5px 15px rgba(0,0,0,0.2) ;
    background:transparent;
    font-size: 20px;
    color:#fff;
    cursor:pointer;
    margin:10px;
}
form .display{
    display:flex;
    justify-content: center;
    margin:20px 0;
}
form .display input{
    text-align:right;
    flex:1;
    font-size: 45px;
    box-shadow: none;
}
form input.equal{
    width:145px;
}
form input.operator{
    color:#54ac0c;

}
</style>
</head>
<body>
   <div class="container">
    <div class="calculator">
        <form>
            <div class="display">
                <input type="text" name="display">
            </div>
            <div>
                <input type="button" value="AC" onclick="display.value =''" class="operator">
                <input type="button" value="DE" onclick="display.value =display.value.toString().slice(0,-1) "class="operator">
                <input type="button" value="." onclick="display.value +='.'">
                <input type="button" value="/" onclick="display.value +='/'">
            </div>
            <div>
                <input type="button" value="7" onclick="display.value +='7'" >
                <input type="button" value="8" onclick="display.value +='8'">
                <input type="button" value="9" onclick="display.value +='9'">
                <input type="button" value="*" onclick="display.value +='*'">
            </div>
            <div>
                <input type="button" value="4" onclick="display.value +='4'">
                <input type="button" value="5" onclick="display.value +='5'">
                <input type="button" value="6" onclick="display.value +='6'">
                <input type="button" value="-" onclick="display.value +='-'">
            </div>
            <div>
                <input type="button" value="1" onclick="display.value +='1'">
                <input type="button" value="2" onclick="display.value +='2'">
                <input type="button" value="3" onclick="display.value +='3'">
                <input type="button" value="+" onclick="display.value +='+'">
            </div>
            <div>
                <input type="button" value="00" onclick="display.value +='00'">
                <input type="button" value="0" onclick="display.value +='0'">
                <input type="button" value="=" onclick="display.value=eval(display.value)"class="equal">
            </div>
        </form>
    </div>
   </div>
</body>
</html>