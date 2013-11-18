<?php


function generatePixelsTable(){
    $html = "";
    $db=Database::obtain();
    $sql="SELECT * FROM `pixel`";
    $rows = $db->query($sql);
    while ($record = $db->fetch($rows)) {
     $html .= '<tr><td>'.$record['pid'].'</td>';
     $html .= '<td>'.$record['pixelName'].'</td>';
     $html .= '<td>'.$record['type'].'</td>';
     $html .= '<td>'.$record['site'].'</td>';
     $html .= '<td>'.$record['comment'].'</td></tr>';
    }
    return $html;
    /*
     * 
     [pid] => 1
    [pixelName] => citrades - server
    [type] => server
    [site] => http://www.citrades.com
    [comment] => 
     */
    
}