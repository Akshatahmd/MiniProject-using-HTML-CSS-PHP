<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['Name'];
        $id_no=$_POST['Id_no'];
        $email=$_POST['email_id'];
        $age=$_POST['age'];
        if(isset($_POST['gender'])){
            $gender=$_POST['gender'];
        }
        $qual=$_POST['qualification'];
        $class=$_POST['class'];
        $exp=$_POST['experience'];
    }
    
    echo "<br>";
    $result='';
    if(($qual=="Bachelor's degree"&&$class=="distinction")&&$exp=="great_3"&&$age<=30){
        $result="You are selected..!!";
    }
    else if(($qual=="PostGraduate"&&$class=="first class")&&$exp=="great_1"&&$age<=35){
        $result= "You are selected..!!";
    }
    else{
        $result= "Better luck next time";
    }
    echo "Id: ".$id_no . "<br>"." name: ". $name."<br>". " qualification : ".$qual."<br>". " class: ".$class."<br>"." age: ".$age."<br>"."experience: ".$exp;
    echo "<p style='background-color: yellow; font-weight: bold; font-size:30px'>$result</p>";
    echo "<a href='menu.html'>Back to Menu</a>";
?>

