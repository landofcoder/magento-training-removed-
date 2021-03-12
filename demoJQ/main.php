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
    11 => array(
        'id' => 11,
        'title' => "--Sub-one",
        'parent_id' => 1
    ),
    12 => array(
        'id' => 12,
        'title' => "--Sub-twe",
        'parent_id' => 2
    ),
    13 => array(
        'id' => 13,
        'title' => "--Sub-three",
        'parent_id' => 3
    ),
);
function data_tree($data, $parent_id = 0, $level = 0){
    $result = [];
    foreach ($data as $item) {
        if ($item['parent_id'] == $parent_id) {
            $result[] = $item;
        }
    }
    return $result;
}
$result = data_tree($menu , 0);
$sub_menu = data_tree($menu, 1);
?>