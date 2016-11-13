<?php
 $images = [
 ['file' => 'mynd1',
 'caption' => 'Bíll að framan'],
 ['file' => 'mynd2',
 'caption' => 'Klukka'],
  ['file' => 'mynd3',
 'caption' => 'Bíll að aftan'],
  ['file' => 'mynd4',
 'caption' => 'Litir'],
  ['file' => 'mynd5',
 'caption' => 'Sprenging'],
];

 $i = rand(0, count($images)-1);
 $selectedImage = "includes/images/{$images[$i]['file']}.jpg";
 $caption = $images[$i]['caption'];


$pic = array('includes/images/mynd1.jpg','includes/images/mynd2.jpg','includes/images/mynd3.jpg','includes/images/mynd4.jpg','includes/images/mynd5.jpg');
shuffle($pic);