<?php

if (!function_exists('asset')) 
{
	function asset($file=null)
	{
		$asset_path = base_url(). "assets/";
		
		if(!empty($file)){
			$asset_path .="/$file";
		}
		
		return $asset_path;
	}
}
