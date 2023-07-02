<!--  Display the result of total charge for the programmes by calculating the criteria
(Criteria for charge of Internal member is C# = Rs1000/day, and C++ =1750/day,
C=1500/day, Java=1250/day) in the next page in an enhanced and heighted text
 Display the result of total charge for the programme by calculating the criteria
(Criteria for charge of External member is C# = Rs1500/day, and C++ =2000/day,
C=1750/day, Java=1500/day) in the next page in an enhanced and highlighted text -->
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $prgms=$_POST['programme'];
    $charge=0;
    $memberType=$_POST['memberType'];
    if($memberType=='internal'){
        foreach($prgms as $prgm){
            switch($prgm){
                case 'Cprog': $charge+=1000;
            }
            switch($prgm){
                case 'Corejava': $charge+=1750;
            }
            switch($prgm){
                case 'Python': $charge+=1500;
            }
            switch($prgm){
                case 'Web': $charge+=2000;
            }
        }
    }
//  C# = Rs1500/day, and C++ =2000/day,
//  C=1750/day, Java=1500/day)
    if($memberType=='external'){
        foreach($prgms as $prgm){
            switch($prgm){
                case 'Cprog': $charge+=1500;
            }
            switch($prgm){
                case 'Corejava': $charge+=2000;
            }
            switch($prgm){
                case 'Python': $charge+=1750;
            }
            switch($prgm){
                case 'Web': $charge+=1500;
            }
        }
    }
    echo "<span style='background-color: yellow; font-weight: bold; font-size:30px'>".$name=$_POST['name']. " as a " .$memberType." member"." has selected programmes";
    foreach($prgms as $prgm){
        echo "<span style='background-color: yellow; font-weight: bold; font-size:30px'>".$prgm." ";
    }
    echo "<span style='background-color: yellow; font-weight: bold; font-size:30px'>"."Total charge is "."$charge";
    echo "<br><br>";
    
    
}

?>