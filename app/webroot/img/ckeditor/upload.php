<?php 

if($_SERVER['HTTP_HOST'] == 'demo.xicom.us')
{	
	$site_url =  'http://demo.xicom.us/crossfit/';
}
elseif($_SERVER['HTTP_HOST'] == '192.168.1.200' || $_SERVER['HTTP_HOST'] == 'localhost')
{
	$site_url =  'http://'.$_SERVER['HTTP_HOST'].'/crossfit/website/';
}
else 
{
	$site_url =   'http://localhost/crossfit/website/';
}

$file_name = time().'_'.$_FILES['upload']['name'];
$url = $file_name;
 //extensive suitability check before doing anything with the file…
    if (($_FILES['upload'] == “none”) OR (empty($_FILES['upload']['name'])) )
    {
       $message = 'No file uploaded.';
    }
    else if ($_FILES['upload']["size"] == 0)
    {
       $message = 'The file is of zero length.';
    }
    else if (($_FILES['upload']["type"] != 'image/pjpeg') AND ($_FILES['upload']["type"] != 'image/jpeg') AND ($_FILES['upload']["type"] != 'image/png'))
    {
       $message = 'The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.';
    }
    else if (!is_uploaded_file($_FILES['upload']["tmp_name"]))
    {
       $message = 'You may be attempting to hack our server. We’re on to you; expect a knock on the door sometime soon.';
    }
    else {
      $message = '';
      $move = @ move_uploaded_file($_FILES['upload']['tmp_name'], $url);
      if(!$move)
      {
         $message = 'Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.';
      }
	  $url = $site_url.'img/ckeditor/'.$file_name;
     // $url =  'http://localhost/crossfit/website/img/ckeditor/'.$file_name;
    }
$funcNum = $_GET['CKEditorFuncNum'] ;
echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
?>