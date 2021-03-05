<!-- a -->
<?php
$a1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2 = ["a"=>"red","b"=>"green","c"=>"blue"];
function duplicates() {
    $raw = array();
    $args = func_get_args();
    $i = 1;
    foreach($args as $arg) {
        if(is_array($arg)) {
            foreach($arg as $value) {
                $raw[$value][] = "array $i";
            }
            $i++;
        }
    }

    $out = array();
    foreach($raw as $key => $value) {
        if(count($value)>1)
            $out[$key] = $value;
    }
    return $out;
}
echo '<pre>';
print_r(
    duplicates(
        $a1,$a2
        
    )
);
echo '</pre>';
?>
<!-- b -->
<?php
function ham_chuyen_doi_kieu($input, $ucase)  
{  
  $case = $ucase;  
  $narray = array();  
  if (!is_array($input))  
  {  
    return $narray;  
  }  
  foreach ($input as $key => $value)  
  {  
    if (is_array($value))  
      {  
        $narray[$key] = ham_chuyen_doi_kieu($value, $case);  
        continue;  
      }  
    $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));  
  }  
  return $narray;  
}  
$age = ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
$mang_ban_dau = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');    
echo '<br>Các giá trị ở dạng chữ hoa.<br>';  
$mang_dang_chu_hoa = ham_chuyen_doi_kieu($mang_ban_dau,CASE_UPPER);  
print_r($mang_dang_chu_hoa);
?>
