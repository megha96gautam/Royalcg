<?php
// Resize Manipulation.
  if( !function_exists('resize_image') ) {
function resize_image($image_data) {
	
$img = substr($image_data['full_path'], 51);
$config['image_library'] = 'gd2';
$config['source_image'] = $image_data['full_path'];
$config['new_image'] = './uploads/new_' . $img;
$config['width'] = $this->input->post('width');
$config['height'] = $this->input->post('height');

//send config array to image_lib's  initialize function
$this->image_lib->initialize($config);
$src = $config['new_image'];
$data['new_image'] = substr($src, 2);
$data['img_src'] = base_url() . $data['new_image'];
// Call resize function in image library.
$this->image_lib->resize();
// Return new image contains above properties and also store in "upload" folder.
return $data;

}
  }