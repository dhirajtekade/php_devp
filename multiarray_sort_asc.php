$a = array(9, 'd', 'f',45, 345, 1, 0, 99, array(12,4,50,7,8));

echo '<pre>'; print_r(sort_array_asc($a)); echo '</pre>';

function sort_array_asc($unsort_array) {
 $array_count = count($unsort_array);
 
  for($i=0; $i< $array_count; $i++) {
     for($j=0; $j< $array_count-1; $j++) {
            if($unsort_array[$j] > $unsort_array[$j+1]) {
             $temp = $unsort_array[$j+1];
            $unsort_array[$j+1] = $unsort_array[$j];
               $unsort_array[$j] = $temp;            
            } elseif(is_array($unsort_array[$j+1])) {
              $unsort_array[$j+1] =  sort_array_asc($unsort_array[$j+1]);        
                        
           }
     } 
  }
  return $unsort_array;
}
