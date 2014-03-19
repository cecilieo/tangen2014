
<div id="maintop">
    <?php print displayStatus();?>
<?php
if(isset($pagecontent['content']))
{// this if is for the installation without this it will display an error
  echo "<div id=\"pagecont\" >";
  $prefix="../";
  $pagecontent = str_replace($prefix, "", $pagecontent['content']);
  echo $pagecontent;
  echo "</div>";
}
;?>
</div><!-- end of #maintop -->

