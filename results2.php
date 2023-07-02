<!-- Display the entire results by calculating average, pass/fail result ( 50 and above in all
subjects is a pass), class (80 and above distinction , >= 60 and < 80 = first class, >=50
and <60 = second class, rest of them are No class) in the next page in an enhanced and
highlighted text  -->
<?php
 $sname=$_POST['sname'];
 $usn=$_POST['usn'];
 $dept=$_POST['dept'];
 $sub1_marks=$_POST['sub1_marks'];
 $sub2_marks=$_POST['sub2_marks'];
 $sub3_marks=$_POST['sub3_marks'];
 $sub4_marks=$_POST['sub4_marks'];
 $sub5_marks=$_POST['sub5_marks'];
if($_SERVER['REQUEST_METHOD']=="POST"){
    $Avg=($sub1_marks+$sub2_marks+$sub3_marks+$sub4_marks+$sub5_marks)/5;
    $passFail='';
        if($sub1_marks>=50&&$sub2_marks>=50&&$sub3_marks>=50&&$sub4_marks>=50&&$sub5_marks){
            $passFail='passed';
    }
    else{
        $passFail='failed';
    }
   
        $class='';
        if($Avg>=80){
            $class='distinction';
        }
        else if($Avg>=60&&$Avg<80){
            $class='first class';
        }
        else if($Avg>=50&&$Avg<60){
            $class='second class';
    }
    else if($Avg<50){
        $class='no class';
    }
    echo "Student Name: ".$sname."<br>"."USN: ".$usn."<br>"." Department: ".$dept."<br>";
    echo "<p style='background-color: yellow; font-weight: bold; font-size:30px'>Average is $Avg and  You have $passFail with $class</p>";
    echo "<a href='menu.html'>Back to Menu</a>";
}
?>