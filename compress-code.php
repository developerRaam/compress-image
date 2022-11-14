<?php 
// $input_img="o.jpg";
// $output_img="output2.jpg";
// $img=imagecreatefromjpeg($input_img);
// imagejpeg($img,$output_img,50);
$pr_img='';
$smg='';
$compress='';
$range='';
if(isset($_POST['submit'])){
	$range=$_POST['range'];
	$info=getimagesize($_FILES['image']['tmp_name']);
	if(isset($info['mime'])){
		if($info['mime']=="image/jpeg"){
			$img=imagecreatefromjpeg($_FILES['image']['tmp_name']);
		}elseif($info['mime']=="image/png") {
			$img=imagecreatefrompng($_FILES['image']['tmp_name']);
		}else{
			$smg="Only select jpg or png image";
		}
	}
	//========== Before compress ===========
		$get_file=($_FILES['image']);
		$b_name=$get_file['name'];
		$b_size=$get_file['size'];

		$b_width=$info['0'];
		$b_height=$info['1'];
		$b_type=$info['mime'];

	if(isset($img)){
		$path="convert/";
		$output_image="convert/"."IMG".time().'.jpg';
		$compress=imagejpeg($img,$output_image,$range);
		$smg="Proccessing done.";
		$pr_img=$output_image;
		//========== After compress ===========
		//find size using filesize()
		$filesize=filesize($pr_img);
		// Get more information using getimagesize()
		$getimagesize=getimagesize($pr_img);
		$width=$getimagesize['0'];
		$height=$getimagesize['1'];
		$type=$getimagesize['mime'];
	}else{
		$smg="Only select jpg or png image";
	}
}


// Know about file size
function formatBytes($filesize) {
    if ($filesize > 0) {
        $i = floor(log($filesize) / log(1024));
        $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        return sprintf('%.02F', round($filesize / pow(1024, $i),1)) * 1 . ' ' . @$sizes[$i];
    } else {
        return 0;
    }
}
function b_formatBytes($b_filesize) {
    if ($b_filesize > 0) {
        $i = floor(log($b_filesize) / log(1024));
        $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        return sprintf('%.02F', round($b_filesize / pow(1024, $i),1)) * 1 . ' ' . @$sizes[$i];
    } else {
        return 0;
    }
}
