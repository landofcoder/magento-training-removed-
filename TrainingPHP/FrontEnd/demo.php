<?php

$menu = array(
    1 => array(
        'id' => 1,
        'title' => "VESTIBULUM",
        'parent_id' => 0
    ),
    2 => array(
        'id' => 2,
        'title' => "PHASELLUS",
        'parent_id' => 0
    ),
    3 => array(
        'id' => 3,
        'title' => "PRAESENT",
        'parent_id' => 0
    ),
    4 => array(
        'id' => 4,
        'title' => "CURABITUR",
        'parent_id' => 0
    ),
    5 => array(
        'id' => 5,
        'title' => "SUB-ESTIBULUM",
        'parent_id' => 0
    ),
    6 => array(
        'id' => 6,
        'title' => "SUB-PHASELLUS",
        'parent_id' => 0
    ),
    7 => array(
        'id' => 7,
        'title' => "SUB-PRAESENT",
        'parent_id' => 0
    ),
    8 => array(
        'id' => 8,
        'title' => "SUB-ESTIBULUM",
        'parent_id' => 0
    ),
    9 => array(
        'id' => 9,
        'title' => "SUB-PHASELLUS",
        'parent_id' => 0
    ),
    10 => array(
        'id' => 10,
        'title' => "SUB-PHASELLUS",
        'parent_id' => 0
    ),
    
);

function data_tree($data, $parent_id = 0, $level = 0){
    $result = [];
    foreach ($data as $item) {
        if ($item['parent_id'] == $parent_id) {
            $item['level'] = $level;

            $result[] = $item;


            $child = data_tree($data, $item['id']);
            $result = array_merge($result , $child);
        }
    }
    return $result;
}
$list_cat = data_tree($menu , 0);
?>