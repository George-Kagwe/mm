
<?php 

foreach($all as $alls)
{
    $new_arr[] = $alls->id;
}
$res_arr = implode(',',$new_arr);
print_r($res_arr);


 ?>


