<?php
//Set PID, Rev, SN and kind
function setPIDInfo(&$Array, $PID, $Rev = null, $SN=null){
    $Num = getMaxNum($Array);//新規追加なので配列番号は1つ増える
    $AddArray = array(
        $Num => array(
            'Kind'       => null,
            'PID'        => null,
            'Rev'        => null,
            'SN'         => null,
            'Status'     => null,
            'Date'       => null,
            'MFG'        => null,
            'Ordered'    => null,
            'Parent'     => array(

            ),
            'Child'     => array(

            ),
            'Doc'       => array(

            ),

        ),
    );

    $AddArray[$Num]["Status"] = "InChange";
    
    $AddArray[$Num]["PID"] = $PID;
    $AddArray[$Num]["Rev"] = $Rev;
    $AddArray[$Num]["SN"] = $SN;
    $AddArray[$Num]["Kind"] = "SN";

    $Array += $AddArray;

//    return array_merge($Array, $AddArray);
    
    //return $Array;
}


//Search Number
function getNum($Array, $PID, $Rev = null, $SN = null){//
    $num = func_num_args();
    $args = func_get_args();
    for($Num = 0;$Num < count($Array);$Num++){
        if($Array[$Num]["PID"] == $PID &&
           $Array[$Num]["Rev"] == $Rev &&
           $Array[$Num]["SN"]  == $SN ){
               return $Num;
               break;
        }
    }
    echo "GetNum: Not Found";
}

function getNumDispPID($Array, $PID, $Rev = null, $SN = null){//
    $num = func_num_args();
    $args = func_get_args();
    for($Num = 0;$Num < count($Array);$Num++){
        if($Array[$Num]["PID"] == $PID &&
           $Array[$Num]["Rev"] == $Rev &&
           $Array[$Num]["SN"]  == $SN ){
            if($num == 2){
                $PID = $args[1];
                echo "P".sprintf("%05d",$PID);
            }elseif($num == 3){
                $PID = $args[1];
                $Rev = $args[2];
                echo "P".sprintf("%05d",$PID)."-".sprintf("%02d",$Rev);
            }elseif($num == 4){
                $PID = $args[1];
                $Rev = $args[2];
                $SN  = $args[3];
                echo "P".sprintf("%05d",$PID)."-".sprintf("%02d",$Rev)."  SN:".sprintf("%02d",$SN);
            }
            return $Num;
            break;
        }
    }
    echo "Not Found";
}

//Display PID, Rev, SN
function dispPID(){//args1:PID, 2:Rev, 3:SN
    $num = func_num_args();
    $args = func_get_args();
    if($num == 1){
        $PID = $args[0];
        echo "P".sprintf("%05d",$PID);
    }elseif($num == 2){
        $PID = $args[0];
        $Rev = $args[1];
        echo "P".sprintf("%05d",$PID)."-".sprintf("%02d",$Rev);
    }elseif($num == 3){
        $PID = $args[0];
        $Rev = $args[1];
        $SN  = $args[2];
        echo "P".sprintf("%05d",$PID)."-".sprintf("%02d",$Rev)."  SN:".sprintf("%02d",$SN);
    }
}
//Set Date


//Set Child, Parent and Doc;
function setInfo(&$Array, $AddWhat, $PID, $addPID, $Rev = null, $addRev = null, $SN = null, $addSN = null){
    $num = getNum($Array,$PID,$Rev,$SN);
    $addNum = getNUm($Array,$addPID,$addRev,$addSN); 
    if($num && $addNum){
        array_push($Array[$num][$AddWhat], $addNum);
    }else{
        echo "setInfo:Not Found Num";
    }

}


//Set Parent


//Get Maximum Number
function getMaxNum($Array){
    return count($Array);
}

//GetPID
?>