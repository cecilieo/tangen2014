<div id="maintop">

    <?php print displayStatus();?>

<?php
if($this->preference->item('webshop_slideshow')=="jmpress")
{
  if(!empty($slides))
  {
    echo '<section id="jms-slideshow" class="jms-slideshow">'."\n";
    // find the image 
    $numimage = count($slides);
    $input = array(
      '', 
      'data-y="500" data-scale="0.4" data-rotate-x="30"', 
      'data-x="2000" data-z="3000" data-rotate="170"', 
      'data-x="3000"', 
      'data-x="4500" data-z="1000" data-rotate-y="45"'
    );
    $rand_keys = array_rand($input, $numimage);
    //echo $input[$rand_keys[0]] . "\n";
    //echo $input[$rand_keys[1]] . "\n";
    foreach ($slides as $slide)
    {
      $imageinfo = $slide['image'];
      $slideimg=convert_image_path($imageinfo);
      $data_order =  $slide['slide_order']-1;// array is 0,1,2 and so on
      $slide_order = $slide['slide_order'];
      $data_atr = $input[$rand_keys[$data_order]] . "\n";
      //$order = $slide_order - 1;
      echo '<div class="step" data-color="color-'.$slide_order.'" '.$data_atr.'>'."\n";
      // echo '<div class="step" data-color="color-">'."\n";
      echo '<div class="jms-content">'."\n";
      echo '<h3>'.$slide['shortdesc']. '</h3>'."\n";
      echo '<p>'.$slide['longdesc']. '</p>'."\n";
      echo '<a class="jms-link" href="'.$slide['readmorelink'].'">Read more</a>'."\n";
      echo '</div>'."\n".'<img src="'.$slideimg.'" />'."\n".'</div>'."\n";

      //'<img class="hideme" src="'. $slideimg. '" alt="' . $slide['name'] .
      //'" />';
    }
    echo  '</section>'."\n";
  }
}
else
{
  if(!empty($slides))
  {
    echo "<div id=\"slideshow\" class=\"pics\">";
    foreach ($slides as $slide)
    {
      $imageinfo = $slide['image'];
      $slideimg=convert_image_path($imageinfo);
      echo '<img class="hideme" src="'. $slideimg. '" alt="' . $slide['name'] .
        '" />';
    }
    echo "</div>";
  }
}

//  print_r ($slides);

// print_r ($pagecontent);
if(isset($pagecontent['content']))
{// this if is for the installation without this it will display an error
  echo "<div id=\"pagecont\" >";
  echo $pagecontent['content'];
  echo "</div>";
}
;?>
</div><!-- end of #maintop -->
<div id="frontproducttable">

<?php
echo "<div class=\"clearboth\" ></div>";
?>

</div><!-- end of #frontproducttable -->


<?php
$base=$this->config->item('base_url');
$mystring = $base;
$findme   = 'localhost';
$pos = strpos($mystring, $findme);
if(ENVIRONMENT=='development' OR $pos)
{
  echo "<pre>pagecontent: ";
  print_r($pagecontent);
  echo "</pre>";

//  echo "<pre>images is: ";
//  print_r($images);
//  echo "</pre>";

  echo "<pre>multilang is: ";
  print_r ($this->data['multilang']);
  echo "</pre>";
  echo "<pre>mylanguage: ";
  print_r ($this->data['mylanguage']);
  echo "</pre>";
  echo "<pre>lang_id: ";
  print_r ($this->data['lang_id']);
  echo "</pre>";
  echo "<pre>language: ";
  var_dump ($this->data['language']);
  echo "</pre>";
  echo "<pre>mylanguate1: ";
  print_r ($this->data['mylanguage1']);
  echo "</pre>";
  echo "<pre>sessionlang: ";
  if(!empty($this->data['sessionlang']))
  {
    var_dump ($this->data['sessionlang']);
  }
  echo "</pre>";

  echo "<pre>get_class is: ";
  print_r($get_class);
  echo "</pre>";
  echo "<pre>module name is: ";
  print_r($module);
  echo "</pre>";
  echo "<pre>index path is: ";
  print_r($index_path);
  echo "</pre>";
  echo "<pre>cat_parent is: ";
  print_r ($this->data['cat_parent']);
  echo "</pre>";
  echo "<pre>navlist: ";
  print_r ($this->data['navlist']);
  echo "</pre>";

//  echo "<pre>slides is: ";
//  print_r($slides);
//  echo "</pre>";  
}
?>

