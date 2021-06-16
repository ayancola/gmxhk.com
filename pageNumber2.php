<?php
if(!function_exists(showpage))
{
	function showpage($page,$page_count,$total,$queryString)
	{
		switch(LANG)
		{
			case '':
				echo showpage_gb($page,$page_count,$total,$queryString);
				break;
			default:
				echo showpage_en($page,$page_count,$total,$queryString);
		}
	}
	function showpage_gb($page,$page_count,$total,$queryString='')
	{
		//global $page,$page_count,$total,$queryString; //param from genpage function
		$shownum = 10 / 2; //$page_count = 12;
		$startpage = ($page > $shownum) ? $page - $shownum : 1;
		if($page <= $shownum)
		{
			$endpage = $shownum * 2 + 1 < $page_count ? $shownum * 2 + 1 : $page_count;
		}else{
			$endpage = ($page + $shownum < $page_count) ? $page + $shownum : $page_count;
		}

		$str = "";

		if($page > 1)
		{
			$str .= "<a href=\"?".$queryString."page=1\">首页</a>\n";
			$str .= "<a href=\"?".$queryString."page=".($page-1)."\">上一页</a>\n";
		}else{
			$str .= "<span>首页</span>\n";
			$str .= "<span>上一页</span>\n";
		}
			for($i = $startpage;$i <= $endpage;$i++)
			{
				if($i == $page)
					$str .= "<span class='cur'>".$i."</span>\n";
				else
					$str .= "<a href=\"?".$queryString."page=".$i."\">".$i."</a>\n";
			}

		if($page < $page_count)
		{
			$str .= "<a href=\"?".$queryString."page=".($page+1)."\">下一页</a>\n";
			$str .= "<a href=\"?".$queryString."page=".$page_count."\">尾页</a>\n";
		}else{
			$str .= "<span>下一页</span>\n";
			$str .= "<span>尾页</span>\n";
		}
		$str .= "<div class='pageinfo'>共".$total."记录 第".$page."页 / 共".$page_count."页</div>\n";
		return $str;
	}

	function showpage_en($page,$page_count,$total,$queryString='')
	{
	 	//global $page,$page_count,$total,$queryString; //param from genpage function
		$shownum = 10 / 2; //$page_count = 12;
	    $startpage = ($page > $shownum) ? $page - $shownum : 1;
		if($page <= $shownum)
		{
	    	$endpage = $shownum * 2 + 1 < $page_count ? $shownum * 2 + 1 : $page_count;
		}else{
			$endpage = ($page + $shownum < $page_count) ? $page + $shownum : $page_count;
		}

		$str = "";

		if($page > 1)
		{
			$str .= "<a href=\"?".$queryString."page=1\">&lt;&lt;</a>\n";
			$str .= "<a href=\"?".$queryString."page=".($page-1)."\">&lt;</a>\n";
		}else{
			$str .= "<span>&lt;&lt;</span>\n";
			$str .= "<span>&lt;</span>\n";
		}
			for($i = $startpage;$i <= $endpage;$i++)
			{
				if($i == $page)
					$str .= "<span class='cur'>".$i."</span>\n";
				else
					$str .= "<a href=\"?".$queryString."page=".$i."\">".$i."</a>\n";
			}

		if($page < $page_count)
		{
			$str .= "<a href=\"?".$queryString."page=".($page+1)."\">&gt;</a>\n";
			$str .= "<a href=\"?".$queryString."page=".$page_count."\">&gt;&gt;</a>\n";
		}else{
			$str .= "<span>&gt;</span>\n";
			$str .= "<span>&gt;&gt;</span>\n";
		}
		$str .= "<div class='pageinfo'>Total:".$total." Page ".$page." / ".$page_count."</div>\n";
		return $str;
	}
}

	//if((int)$_REQUEST['page']==0)
	//{
	//	$queryString = $_SERVER['QUERY_STRING'].'&';
	//}else
	//{
	//	$pattern = "/page=\d*/i";
	//    $queryString = preg_replace($pattern, '', $_SERVER['QUERY_STRING']);
	//}
	
	//if($_SERVER['QUERY_STRING'] != '')
	//{
	//	$queryString = $_SERVER['QUERY_STRING'].'&';
	//	$queryString = preg_replace("/&page=\d*/i", '',$queryString);
    //    $queryString = preg_replace("/&cid=\d*/i", '', $queryString);
		// $queryString = preg_replace("/page=\d*/i", '', $_SERVER['QUERY_STRING']);
		// $queryString = preg_replace("/cid=\d*/i", '', $_SERVER['QUERY_STRING']);
	//}else{
	//	$queryString = "rid=".(int)$rid."&";
	//}
	
    $queryString = getPara();
    if(isset($search)&&!empty($search)) $queryString .= "search=".$search."&";
    $queryString = preg_replace("/[\&|]page=\d*/i", '', $queryString);

	$page_count = intval($total/$per_page_num);
	if ($total % $per_page_num > 0){$page_count ++;}

	echo showpage($page,$page_count,$total,$queryString);
?>
