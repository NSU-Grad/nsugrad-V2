
<?php
include_once 'include/db.php';

//where the files are
$downloads_folder = './files/';
$counters_folder = './counters/';


//has a file name been passed?
if(!empty($_GET['file'])){
	//protect from people getting other files
	$file = basename($_GET['file']);
	$md_file = md5($file);

	//does the file exist?
	if(file_exists($downloads_folder.$file)){

		$sql = "UPDATE counter SET `count`=`count`+1 WHERE `file_name`= '$md_file';";

    	mysqli_query($con, $sql);



    	
    	
	    

	   

		//set force download headers
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.$file.'"');
		header('Content-Transfer-Encoding: binary');
		header('Connection: Keep-Alive');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . sprintf("%u", filesize($downloads_folder.$file)));

		//open and output file contents
		$fh = fopen($downloads_folder.$file, "rb");
		while (!feof($fh)) {
			echo fgets($fh);
			flush();
		}
		fclose($fh);
		exit;
	}else{
		header("HTTP/1.0 404 Not Found");
		exit('File not found!');
	}
}else{
	exit(header("Location: ./Index.php"));
}