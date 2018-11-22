<?

/*****************************************
** Decryption Provided By Spiner         *
**                                       *
** Contact : yamhisse@gmail.com          *
******************************************/

class Spiner {
	
	
	public function save($file,$content){
		$content = base64_decode('PD8KLyoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqCioqIERlY3J5cHRpb24gUHJvdmlkZWQgQnkgU3BpbmVyICAgICAgICAgKgoqKiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICoKKiogQ29udGFjdCA6IHlhbWhpc3NlQGdtYWlsLmNvbSAgICAgICAgICAqCioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKi8KCgo=').$content;
		$file = fopen($file,"w");
		fwrite($file,$content);
		fclose($file);
		return true;
	}
	
	public function get_xb($file)
	{
		if(file_exists($file)){
			$file = file_get_contents($file);
			if(substr($file,14,8)!= 'XBOOMBER')exit('This Is Not The Encryption To Decode..!');
		}else{
			exit('File '.$file.' Does not exists, Check Your Spelling ..!');
		}
		return $file;
	}
	
	public function decode($get){
		
		$_1 = 424; //fix
		// Get index Hex Start
		$cr_content = $this->get_xb($get);
		$_2p = strpos($cr_content, "0x");
		$_2 = substr($cr_content,$_2p,6);
		// Get index Hex End
		//$_64 = 1367; //base64
		$_64p = strpos($cr_content, "eval");
		$_64 = base64_decode(substr($cr_content,$_64p+28,452));
		$_64p = strpos($_64, "0x");
		$_64 = substr($_64,$_64p,5);
		// 64 end
		$open=fopen($get,'rb');fread($open,$_64);
		$decoded=base64_decode(strtr(fread($open,$_1),'dA61PgCMoqBO0J3fbU9Rs8lrtu2WF+xvkz/QTZ7EN4KSYcpaIhGL5yXDnejmiwVH=','ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'));
		$decoded=base64_decode(strtr(fread($open,$_2),'dA61PgCMoqBO0J3fbU9Rs8lrtu2WF+xvkz/QTZ7EN4KSYcpaIhGL5yXDnejmiwVH=','ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/'));fclose($open);
		$F_name = substr($get,0,-4).'_de.php';
		$saved = $this->save($F_name,$decoded);
		
		if($saved) echo 'File Decoded Successufly ^_^ => '.$F_name;
	}
}