<style>
    .bgcolorinfo
    {
        background-color: black;
        opacity: 1;
        margin-left: 10px;
        border-radius: 2px;
    }
</style>
<div id="drugHelp" style="margin-left: 210px; padding: 10px;" class="bgcolorinfo">
    <strong><font color="white"> <?php if(isset($show_druginfo))
    { 
        echo "<font size='3'>".$show_druginfo->brand_name." is advised for the use of :"."</font><br>";
        echo $show_druginfo->drug_advice_info;
        
    }
    ?></font></strong>
</div>

 