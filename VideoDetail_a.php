<!--标题,url-->

<div class="VideoDisplay_a<?php echo $verson[1]?>">
	<h2 class="f-30 fm-36"><? echo $rowP['title'.LANG]?></h2>
    <div class="VideoDisplay_a1_C mt-20 mt-m40">
    	<video src="<? echo $rowP['linkurl']?>" controls="controls" poster="<?echo $rowP['images'];?>"></video>
    </div>
    <div class="VideoDisplay_a1_back clearfix">
        <a href="video_list.php?rid=42" class="more"><? echo LANGTYPE=='gb' ? '返回上一级' : 'Return' ?></a>
    </div>
</div>