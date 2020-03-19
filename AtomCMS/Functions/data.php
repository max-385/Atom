<?php 

function data_setting_value($id, $dbc){
	
	$q = "SELECT * FROM settings WHERE id = '$id'";
	$r = mysqli_query($dbc, $q);

	$data = mysqli_fetch_assoc($r);
	
	return $data['value'];

}


function data_page($id, $dbc)
{
	
	
	$query = "SELECT * FROM pages WHERE id = $id"; //zapros
	$result = mysqli_query($dbc, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	$data['body_nohtml'] = strip_tags($data['body']);  //no HTML tags in body
	
	if ($data['body'] == $data['body_nohtml']) {       // if body doesnt have html tags
			$data['body_formatted'] = '<p>'.$data['body'].'<p>';     //then give him paragraph tags
	} else {
			$data['body_formatted'] = $data['body'];				// else leave unaltered
	}
	
	
	
	return $data;
}


?>