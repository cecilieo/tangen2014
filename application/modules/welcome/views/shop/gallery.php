

<div class="popup-gallery">
<?php


foreach ($galleryimages as $image)
{
  $imageinfo = $image['image'];
  $thumbnail=convert_image_path($imageinfo);
  $imagelink=base_url().$thumbnail;
  echo '<a class="group1" href="' .$imagelink. '" title="'.$image['shortdesc'].'">';
  echo "<img src='".$imagelink."' width='125' height='115'>";
  echo "\n</a>\n";
}
?>
</div>


<?php
$base=$this->config->item('base_url');
$mystring = $base;
$findme   = 'localhost';
$pos = strpos($mystring, $findme);
if(ENVIRONMENT=='development' OR $pos)
{
  echo "<pre>";
  echo "path: ";
  print_r ($path);
  if(isset($galleryimages))
  {
    //print_r ($galleryimages);
  }
  print_r ($this->data['navlist']);
  print_r($galleryname);
  echo "<br>thumbnail";
  /* print_r($thumbnail); */
  /* echo "<br>imageinfo"; */
  /* print_r($imageinfo); */
  echo "<br>imagelink";
  /* print_r($imagelink); */
  echo "</pre>";
}
?>
