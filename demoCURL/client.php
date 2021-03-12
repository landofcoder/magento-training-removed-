<?php
include_once('index.php');
​
$null = new DemoCurl();
    echo  $null -> getTitle ('https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm');
    echo  $null -> getDescription ('https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm');
    echo  $null -> getContent ('https://dantri.com.vn/xa-hoi/hai-duong-lap-doi-xu-ly-khan-cap-ho-tro-kinh-mon-dap-dich-20210306101921769.htm');
​

​nclude_once('fromcurl.php');
?>