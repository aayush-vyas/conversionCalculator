<?php
    $inputVal = $_POST['inputVal'];
    $fromOption = $_POST['fromSelect'];
    $toOption = $_POST['toSelect'];
    $unitType = $_POST['unitType'];
    $result = 0;

    // echo $toOption;



    if($unitType == 'length'){
        
        if($fromOption == "Kilometer"){
            $inputVal = $inputVal * 1000; 
        } 
        else if ($fromOption == "Centimeter"){
            $inputVal = $inputVal  * 100;
        }
        else if ($fromOption == "Milimeter"){
            $inputVal = $inputVal / 1000; 
        }else{
            $inputVal= $inputVal;
        }

        switch($toOption){
           
            case 'Kilometer':
                
                $result = $inputVal / 1000;
                break;
            case 'Centimeter':
                $result = $inputVal * 100;
                break;
            case 'Milimeter':
                $result = $inputVal * 1000;
                break;
            default :
                $result = $inputVal;
        }
    }
    else if ($unitType == 'temperature'){
        if($fromOption == "Fahrenheit"){
            $inputVal = ($inputVal - 32) * 5/9;
        }
        else if($fromOption == 'Kelvin'){   
            $inputVal = $inputVal - 273.15;
            // echo "kelvin";
        }
        else{
            $inputVal = $inputVal;
        }

        switch($toOption){
            case 'Kelvin':

                $result = $inputVal + 273.15;
                break;
            
            case 'Fahrenheit':
                $result = ($inputVal * 9/5) + 32;
                break;
            default:
                $result = $inputVal;
                break;
        }
     
    }
    else if ($unitType == 'weight')
    {
        if($fromOption == "Gram"){
            $inputVal = $inputVal / 1000;
        }
        else if($fromOption == "Milligram"){
            $inputVal = $inputVal / 1000000;
        }
        else if($fromOption == "Metric Ton"){
            $inputVal = $inputVal * 1000;
        } 
        else if($fromOption == "Long Ton"){
            $inputVal = $inputVal * 1016;

        }
        else{
            $inputVal = $inputVal;
        }

        switch($toOption){
            case 'Gram':
                $result = $inputVal * 1000;
                break;
            
            case 'Milligram':
                $result = $inputVal * 1000000;
                break;
            case 'Metric Ton':
                $result = $inputVal / 1000 ;
                break;
            case 'Long Ton':
                $result = $inputVal / 1016;
                break;
            
            default:
                $result = $inputVal;
        }
    }


    
   echo $result;
?>