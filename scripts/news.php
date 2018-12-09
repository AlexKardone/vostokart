<?  
header('Content-Type: text/html; charset=utf-8');
mysql_connect("localhost", "root", "xcjzikribc");  
mysql_select_db("vostokart_db");  
mysql_set_charset('utf8');


$file = "news.csv";
if (is_writeable($file)):
	
	$fh = fopen($file, "w");
	
	// пишем названия колонок, разделитель берем стандартный - ;
	$data = "IE_NAME;IE_ACTIVE;IE_ACTIVE_FROM;IE_PREVIEW_TEXT;IE_PREVIEW_TEXT_TYPE;IE_DETAIL_TEXT;IE_DETAIL_TEXT_TYPE;IE_CODE;IE_PREVIEW_PICTURE;IE_DETAIL_PICTURE\r\n";
	$success = fwrite($fh, $data);
	fclose($fh);



$result = mysql_query("SELECT * FROM `static_pages` WHERE `enabled` = 1 ORDER BY `date` DESC");
$c = 0;

while ($row = mysql_fetch_array($result))
{

	$c++;	
	if ($c < 20) {
	
		// title in h4
		$text = $row['fronttext'];
		
		$title = "";
		$title = explode("</h4>", $text);
		
//		echo "<pre>", print_r($title)."</pre><br><hr><br>";
		
		$type = "html";

		if (is_array($title) && count($title) > 0) {
//			$type = "html";
			$title = str_replace("<h4>", "", $title[0]);
			$title = str_replace("&nbsp;", " ", $title);
//			$title = html_entity_decode($title);
			$text = str_replace("<h4>".$title."</h4>\r\n", "", $text);
		} else {
			$title = "empty";
//			$type = "text";
		}


		$code = "n_".$row['id'];
		$preview = str_replace('"','""',$text);
		$text = str_replace('"','""',$text);

		// get images
		$previewPic = "http://vostok-art.ru/about3/pics/".$row['frontpic'];
		$detailPic = "http://vostok-art.ru/about3/pics/".$row['ofrontpic'];
		
		$destPreviewPic = "imgs/".$row['frontpic'];
		$destDetailPic = "imgs/".$row['ofrontpic'];
		
		
		// copy to local dir
		copy($previewPic, $destPreviewPic);		
		copy($detailPic, $destDetailPic);


		// запишем полученные данные в csv
		$data2 = '"'.$title.'";Y;'.$row['date'].' '.$row['time'].';" — '.$preview.'";'.$type.';"'.$text.'";'.$type.';'.$code.';'.$destPreviewPic.';'.$destDetailPic."\r\n";
			
		$fh = fopen($file, "a+");
		$success = fwrite($fh, $data2);
	}
			
		// закрываем файл
		fclose($fh);

	
}

else:
	
	echo "Check file!";
	
endif;

mysql_close();

?>