<?php
include "dispFuncs.php";

    const status = array(
        "Release",
        "Obsolete",
        "In Change",
    );

    $testArray=array(
        'PID'   => array(
            array(
            'Num' => 10,
            'Mfg' => 'NihonMarco',
            'Rev' =>  array(
                array(
                'Num'  => 1,
                'Status'  =>'Good',
                'Date'  => "2018/10/13",
                'Doc'   =>array(),
                'Serial' =>array(
                    array(
                    'Num'       => 1,
                    'Doc'      => array(),
                    'Status'   => 'Good',
                    ),
                 ),
                ),
                'Parent'   => array(
                    array(
                        'PID'      => 100,
                        'Rev'      => 2,
                        'Status'   => 'Good',
                    ),
                ),
                'Child'     => array(
                    array(
                        'PID'      => 120,
                        'Rev'      => 03,
                        'Status'   => 'No',
                    ),
                ),
            ),
            ),
        ),
    );

    disp_PID($testArray,0);
    echo "<br/>";

    disp_PID($testArray,0,0);
/*
    echo "P".sprintf("%05d",$testArray['PID']['Num'])."-".sprintf("%02d",$testArray['PID']['Rev']['Num']);
    echo "<br />";
    echo "P".sprintf("%05d",$testArray['PID']['Rev']['Parent'][0]['PID']);
*/

    /*
    echo    $testArray['Status']['name'];
    */

    /*
    if(in_array('oshima', $testArray())){
        echo $testArray['ID'];
    }else{
        echo "No Oshima";
    }
    */

?>