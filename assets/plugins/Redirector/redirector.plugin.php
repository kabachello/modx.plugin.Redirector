<?php
/**
 * Redirector
 *
 * Redirects from http://modx.com/167 to page with ID=167 regardles of the user friendly URL settings
 *
 * @category    plugin
 * @version     0.1
 * @documentation Readme https://github.com/kabachello/modx.plugin.Redirector/blob/master/README.md
 * @internal    @events OnPageNotFound
 * @internal    @modx_category Navigation
 * @internal    @installset base, sample
 * @author		kabachello
 * @lastupdate  24/01/2017
 */
switch ($modx->Event->name) {
	case "OnPageNotFound":
		$params = '';
		$addr = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/')+1);
		if($params_start = strpos($addr, '?')){
			$params = substr($addr, $params_start+1);
			$addr = substr($addr, 0, $params_start);	
		}
		if (is_numeric($addr)){
			$to = $modx->makeUrl(intval($addr), '', $params, 'full');
			return $modx->sendRedirect($to,0,'REDIRECT_HEADER','HTTP/1.1 301 Moved Permanently');
		} 
		break;

	default: break;
}