<?php
/**
 * @param $arg
 * @param int $mode
 */
function debug($arg, $mode = 1) {
    echo '<div style="background: orange;">';
    if($mode == 1){
        echo '<pre>';print_r($arg);echo '</pre>';
    }
    else{
        echo '<pre>';var_dump($arg);echo '</pre>';
    }
    echo '<hr />';

    $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS); // Permet de récupérer les infos de débogage

    echo '<p>Débogage demandé dans le fichier <br>'.$trace[0]['file'].' à la ligne : '.$trace[0]['line'].'</p>';

    echo '</div>';
}
