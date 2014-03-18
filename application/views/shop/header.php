
<div id="header">
  <div id="logotop">
    <a href="<?php echo base_url();?>index.php/">
      <img src="assets/images/tangen/logo-tangen.png" alt="Logo" name="logo" width="150" height="69" id="logo" title="Tangen Logo" /></a>
  </div>
  <div id="langbox"><!-- start of #langbox -->
<?php 
// if preference multi_language is yes display the following
$multilang = $this->data['multilang'];?>
    <?php if($multilang):?>
    <ul>
      <li><a href="<?php echo site_url();?>/welcome/changelang/norwegian"><img src="assets/images/tangen/flag_norway.jpg" alt="Norwegian" width="33" height="20" id="norflag" title="Norwegian flag" /></a></li>

      <li><a href="<?php echo site_url();?>/welcome/changelang/english"><img src="assets/images/tangen/flag_uk.jpg" alt="English" width="33" height="20" id="engflag" title="English flag" /></a></li>
    </ul>
    <?php endif; ?>

  </div><!-- end of #langbox -->
  <div class="cb">&nbsp;</div>
</div><!-- End of div header-->
