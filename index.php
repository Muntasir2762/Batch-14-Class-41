<?php

// class Car{

//     public function color(){
//         echo 'Red'.'<br>';
//     }

//     public function model(){
//         echo 'B142024';
//     }

//     public function engine(){
//         echo '4000CC';
//     }
// }

// $carObject = new Car();

// $carObject->color();
// $carObject->model();
// echo '<br>';
// $carObject->engine();

class Calculation{

    public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x+$y;

        return $result;
    }

    public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x-$y;

        return $result;
    }

    public function mul($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x*$y;

        return $result;
    }

    public function div($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x/$y;

        return $result;
    }
}

$calculation = new Calculation();

echo $calculation->sum(300, 400). '<br>';
echo $calculation->sub(400, 200). '<br>';
echo $calculation->mul(50, 40). '<br>';
echo $calculation->div(40, 20). '<br>';

echo $calculation->sum(67, 50);

?>