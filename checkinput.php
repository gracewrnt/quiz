<?ob_start();?>
<?php $f = $_POST['Question'];
$q= $_POST["Question"];
 $a=     $_POST["choice_A"];
    $b=    $_POST["choice_B"];
       $c= $_POST["choice_C"];
        $d = $_POST["choice_D"];
       $cor = $_POST["correct"];
$x=0;
$y=0;
// Evaluates to true because $var is empty
if (empty($f)) {
    echo '$var is either 0, empty, or not set at all';
}
else
{ $x=1;}

// Evaluates as true because $var is set
if (isset($f)) {
    echo '$var is set even though it is empty';
}
else
{$y=1;}

if($x=1&&$y=1){
     header('location:save_register2.php');

}
else
    echo 'ERROR';
?>