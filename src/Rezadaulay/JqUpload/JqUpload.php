<?php
namespace Rezadaulay\JqUpload;
use Illuminate\Support\Facades\File as File;
class JqUpload
{
	public static function init($options=[]){
		return new jQueryUploadHandler($options);
	}
	public static function getList( $dir,$file_types = array('gif' => 'image/gif','png' => 'image/png','jpg' => 'image/jpeg',) ){
		$images = array();
		if (is_dir($dir)) {
			foreach (File::files($dir) as $entry) {/* return $entry; */
				if (!is_dir($entry)) {
					if (in_array(mime_content_type($entry), $file_types)) {
						$images[] = $entry;
					}
				}
			}
		}
		return $images;
	}

}