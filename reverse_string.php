/* reverse string without using inbuild function */

$string = 'weekened';
echo reverse_string($string);

function reverse_string($string){
$str_array = str_split($string);
$str_count = count($str_array);
  
for($i = $str_count-1; $i>=0; $i--) {
  $rev_string .= $str_array[$i];
}

return $rev_string;
}
