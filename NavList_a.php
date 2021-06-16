<!--url,标题-->
<div class="NavList_a<? echo $verson[1]?>">
    <ul class="clearfix">
	<?php
	$lang = LANG;
	//dg($arr);
	if($fid !=0){
		if(!empty($arr))
		{
			foreach($arr as $row)
			{	
		?>
		  <li><a href="<? echo $row['pageUrl'];?>" title="<? echo $row['name']?>" class="more <? if($rid == $row['resource_id']){echo 'on';} ?>" ><? echo $row['name']?></a></li>
		<?php
			}
		}
	}else{
		if($cid==0)
		{
			//$url = $_SERVER['QUERY_STRING'].'&'; //kenhom
			$url = getPara1();
		}else
		{
			$pattern = "/&cid=\d*/i";
			//$url = preg_replace($pattern, '', $_SERVER['QUERY_STRING']); //kenhom
			$url = getPara1();
			$url = preg_replace($pattern, '', $url);
		}

		if(!empty($arr2)){
			foreach($arr2 as $row)
			{
				// dg($url);
			?>
			  <li><a href="?<?php echo $url.'cid='.$row['class_id'];?>" title="<?php echo $row['title']?>" class="more <? if($cid == $row['class_id']){echo 'on';} ?>" ><?php echo $row['title']?></a></li>
			<?php
			}	
		}
	}	
		?>
	</ul>
</div>