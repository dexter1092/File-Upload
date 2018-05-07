
 $this->upload_file('owner_profilepic','owerner_image'); // function call


//file is name of input file
//folder is name of folder where to upload ur file 

functuion upload_file($file,$folder) {
	//echo "hit";

	
	$config = array(
		
      'upload_path' => "uploads/".$folder."/",
      'upload_url' => base_url() . "uploads/".$folder."/",
      'allowed_types' => "jpg|png|gif|jpeg|pdf|mp4|mkv|webm|ogg"
  	);

	$this->upload->initialize($config);

	$this->upload->do_upload($file);
	
	$upload_files = array('upload_data' => $this->upload->data());

	$imagepath = base_url()."uploads/".$folder."/".$upload_files['upload_data']['file_name'];
	$this->upload->data();
	
	//echo "End";
	return $imagepath;
}