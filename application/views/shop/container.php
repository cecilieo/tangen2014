<?php
$lang = $this->data['short_lang'];
if(empty($lang)){
  $lang = "en";
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<meta name="description" content="<?php 
if(isset($pagecontent['metadesc']))
{
  echo $pagecontent['metadesc'];
}
?>" />
<meta name="keywords" content="<?php 
if(isset($pagecontent['metakeyword']))
{
  echo $pagecontent['metakeyword'];
}
?>" />
<base href="<?php echo base_url();?>" />

<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

<?php print $this->bep_site->get_variables()?>
<?php print $this->bep_assets->get_header_assets();?>
<?php //print $this->kk_assets->get_header_assets();?>
<?php print $this->bep_site->get_js_blocks()?>

<!--[if IE]>
<link href="<?php echo base_url();?>assets/css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if IE 6]>
<link href="<?php echo base_url();?>assets/css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body class="no-js">
<div id="container">
  <?php $this->load->view($this->config->item('backendpro_template_shop') . 'header');?>
</div>
<div id="wrapper">
  <div class="inside">
    <div id="main">

<?php
if(count($this->data['mainnav']))
{
  echo "<nav id=\"topNav\">\n";
  //echo "\n<ul id='nav'>";
  echo "<ul>\n";
  foreach ($this->data['mainnav'] as $key => $menu)
  {
    if($menu['lang_id']==$this->data['lang_id'])
    {
      echo "\n<li class='menuone'>\n";
      // need to find page uri from id
      // menu /page_uri/lang_id
      echo anchor ($this->data['mainmodule']."/pages/".$menu['id'], strtoupper($menu['name']));
      if (count($menu['children']))
      {
        echo "\n<ul>";
        foreach ($menu['children'] as $subkey => $submenu)
        {
          echo "\n<li class='menutwo'>\n";
          echo anchor($this->data['mainmodule']."/pages/".$submenu['id'],strtoupper($submenu['name']));
          if (count($submenu['children']))
          {
            echo "\n<ul>";
            foreach ($submenu['children'] as $subkey => $subsubname)
            {
              echo "\n<li class='menuthree'>\n";
              echo anchor($this->data['mainmodule']."/cat/",strtoupper($subsubname['name']));
              echo "\n</li>";
            }
            echo "\n</ul>";
          }
          echo "\n</li>";
        }
        // for tangen I need to add image gallery which is in category products 
        /* if($this->data['language']==='norwegian') */
        /* { */
        /*       echo "\n<li>\n"; */
        /*       echo anchor($this->data['mainmodule']."/pages/image-gallery/",strtoupper("Bildegalleri")); */
        /*       echo "\n</li>"; */
        /*   //echo "<li><a href='image-gallery'>BILDEGALLERI</a></li>"; */
        /* } */
        /* else */
        /* { */
        /*       echo "\n<li>\n"; */
        /*       echo anchor($this->data['mainmodule']."/pages/image-gallery/",strtoupper("Image gallery")); */
        /*       echo "\n</li>"; */
        /*   //echo "<li><a href='image-gallery'>IMAGE GALLERY</a></li>"; */
        /* } */
        echo "\n</ul>";
      }
      echo "\n</li>\n";
    }
  }
  echo "\n</ul>\n";
  echo "</nav>\n";
}
?>


<?php 
//   print displayStatus();
print (isset($content)) ? $content : NULL; 
if( isset($page))
{
  if( isset($module))
  {
    $this->load->view($module.'/'.$page);
  } 
  else 
  {
    $this->load->view($page);
  }
}
?>
  <div id="footer">
    <?php $this->load->view($this->config->item('backendpro_template_shop') . 'footer');?>
  </div><!-- END of FOOTER  -->

    </div><!--End of main-->
    <div id="left"><!--Start of leftcol -->
      <?php $this->load->view($this->config->item('backendpro_template_shop') . 'left');?>
    </div><!--End of leftcol -->

    <div id="right"><!--START RIGHT COLUMN -->
      <?php $this->load->view($this->config->item('backendpro_template_shop') . 'right');?>
    </div><!--End of rightcol-->
  </div><!-- end of inside -->
</div><!--End of wrapper-->
<!-- sharethis buttons -->
<?php

if ($this->preference->item('sharethis_pub_key'))
{
  $this->load->helper('sharethis');
  echo '<div id="sthoverbuttons" class="sthoverbuttons-pos-left">';
  echo sharethis();
  echo "</div>";
}

?>
<!-- end of sharethis -->
<?php 
print $this->bep_assets->get_footer_assets();
// this will print all the js
if ($this->preference->item('ga_tracking'))
{
  $this->load->view($this->config->item('backendpro_template_shop') . 'google_analytics');
}
?>

</body>
</html>
