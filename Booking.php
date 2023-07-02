<!-- (Criteria for charge of summer package is SUPER DELUXE = Rs1500/day, and DELUXE
=1000/day, DOUBLE=750/day, SINGLE=500/day)
 (Criteria for charge of non-summer package is SUPER DELUXE = Rs1250/day, and DELUXE
=750/day, DOUBLE=600/day, SINGLE=300/day) in the next page in an enhanced and
highlighted text -->

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $pkgType=$_POST['packageType'];
    $roomType=$_POST['roomType'];
    $charges=0;
    if(isset($_POST['packageType'])&&isset($_POST['roomType'])){
        if($pkgType=='summer'){
            switch($roomType){
                case 'superDeluxe': $charges=1500;
                break;
                case 'deluxe': $charges=1000;
                break;
                case 'double': $charges=750;
                break;
                case 'single': $charges=500;
            }
        }
        if($pkgType=='nonSummer'){
            switch($roomType){
                case 'superDeluxe': $charges=1250;
                break;
                case 'deluxe': $charges=750;
                break;
                case 'double': $charges=600;
                break;
                case 'single': $charges=300;
            }
        }
        $name=$_POST['cname'];
        echo "<span style='background-color: yellow; font-weight: bold; font-size:30px'>$name has booked $roomType with Package $pkgType and Charge is $charges</span>";
    }
    else{
        echo "missing parameter";
    }
    echo "<br><a href='menu.html'>Back to Menu</a>";
}
?>