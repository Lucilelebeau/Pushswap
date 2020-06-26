<?php
include ("function_swap.php");

function mypush($la, $lb){
    global $argc;
    global $la;
    global $lb;
    global $res;
    $n = count($la)-1;
    $ordre = 0;
    
    if($argc == 2){
        echo "\n";
    }
    
    foreach($la as $key=>$value){
        $current = current($la);
        $next = next($la);
        if($next != false){
            if($next < $current){
                $ordre++;
            }
        }
    }

    if($ordre == 0 && $argc != 2) {
        echo "\n";
    }
    else{
        for ($i = 0; $i < $n; $i++)
        {
            for ($j = 0; $j < $n; $j++)
            { 
                if($la[0] > $la[1]){
                    sa($la);
                    $res .= " sa";
                    pb($la, $lb);
                    $res .= " pb";
                }
                else{
                    pb($la, $lb);
                    $res .= " pb";
                }
        
                if(!empty($lb) && count($lb) >= 2){
                    if($lb[0] < $lb[1]){
                        sb($lb);
                        $res .= " sb";
                    }
                }
            }
            
            $v = count($lb);
            for ($k = 0; $k < $v; $k++)
            {
                if(!empty($lb)){
                    pa($la, $lb);
                    $res .= " pa";
                }
            }
        }
    }
  
    echo trim($res);
}
mypush($la, $lb);

?>