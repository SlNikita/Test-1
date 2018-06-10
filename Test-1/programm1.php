<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $file = file_get_contents("INPUT.txt");
    $arrFile = str_split($file);
    //$o=0;//number of ones
    $row=0;//number of ones in a row
    $compare=0;//the biggest number
    echo "<br>";
    for ($i=0;$i<strlen($file);$i++){
        if( $arrFile[$i] == 1 ) {
        $row=$row+1;
            }else{
                if($row>$compare){
                    $compare=$row;
                    $row=0;
                }else{
                    $row=0;
                }                
        }
    }
    $fin='';//final string
    $fin = str_pad($fin, $compare, "1");
    file_put_contents('OUTPUT.txt',$fin);
    echo "Check the OUTPUT.txt for results!";
    ?>
</body>
</html>