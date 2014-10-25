<?php
include('html_dom.php');

function between($content, $start, $end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}

//search query
$q = urlencode($_GET['q']);
if(empty($q)){
	die();
}
if(!empty($q)){
	$url = "http://www.wolframalpha.com/input/?i=$q";
	$html = file_get_html($url);
	$answer1 = between($html,'context.jsonArray.popups.pod_0100.push( {"stringified": "','",');
	$answer1 = str_replace("\'","'",$answer1);
	$answer1 = str_replace('\/','/',$answer1);
	$answer2 = between($html,'context.jsonArray.popups.pod_0200.push( {"stringified": "','",');
	$answer2 = str_replace("\'","'",$answer2);
	$answer2 = str_replace('\/','/',$answer2);
	$answer2 = str_replace('(euros)','!@#',$answer2);
	$answer2 = str_replace('euro','&euro;',$answer2);
	$answer2 = str_replace('!@#','(euros)',$answer2);
	$answer3 = between($html,'context.jsonArray.popups.pod_0300.push( {"stringified": "','",');
	$answer3 = str_replace("\'","'",$answer3);
	$answer3 = str_replace('\/','/',$answer3);
	$answer4 = between($html,'context.jsonArray.popups.pod_0700.push( {"stringified": "','",');
	$answer4 = str_replace("\'","'",$answer4);
	$answer4 = str_replace('\/','/',$answer4);
	if(empty($answer2) && empty($answer3) && empty($answer4)){
		die();
	}

	if(empty($answer1)){
		die();
	}
	else{
		echo '<b>Answer:</b> ';
		echo str_replace('\n','<br/>',$answer1);
	}
	if(!empty($answer2)){
		echo '<div id="pod1">'. str_replace('\n','<br/>',$answer2) . '</div>';
	}
	if(!empty($answer3)){
		echo '<div id="pod2">'. str_replace('\n','<br/>',$answer3) . '</div>';
	}
	if(!empty($answer4)){
		echo '<br/><div id="pod3">'. str_replace('\n','<br/>',$answer4) . '</div>';
	}
	echo'<br/>';
	$answer5 = between($html,'context.jsonArray.popups.pod_0800.push( {"stringified": "','",');
	if(!empty($answer5)){
		echo '<div id="pod4">'. str_replace('\n','<br/>',$answer5) . '</div>';
	}
}
?>