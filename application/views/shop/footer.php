<div id="mainfoot">
<?php
echo "<p>".$this->preference->item('company_name')." ".$this->preference->item('company_post')." ".$this->preference->item('company_city').
        ", ".$this->preference->item('company_country')."<span id='phone'> | 24 Hours Telephone:".
        $this->preference->item('company_telephone')."</span><span id='mobile'>".$this->preference->item('company_mobile')."</span>".
        $this->preference->item('company_organization_number')."<span id='webcom'>".$this->preference->item('company_other_one')."</span></p>";  
?>   	
</div>
<div id="secondfoot">

<?php
echo "<p id='copy'>Copyright &copy; ".$this->preference->item('company_name')."</p>";
echo "<p id='design'>".$this->preference->item('company_other_two')."</p>";
?>  
</div>

	
