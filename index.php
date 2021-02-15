<?php 
$input_arr = array(
  'Web Development',
  'Artificial Intelligence',
  array(
      'Robotics',
      array(
          'Machine Learning',
          array(
              'Internet of Things',
          ),
      ),
      'Data Science',
  ),
  'Virtual Reality',
);

function array_flatten(array $array){
    $oneDimArray = [];
    foreach ($array as $list) {
        if (is_array($list)) {
            $oneDimArray = array_merge($oneDimArray, array_flatten($list));
        } else {
            $oneDimArray[] = $list;
        }
    }
    return $oneDimArray;
}

$input_arr =  array_flatten($input_arr);

echo "\$output_arr = array(<br />'".implode("',<br />'", $input_array)."'<br />);";

?>