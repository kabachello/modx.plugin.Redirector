<?php
/**
 * Redirector
 *
 * Redirects from http://modx.com/167 to page with ID=167 regardles of the user friendly URL settings
 *
 * @category    plugin
 * @version     0.2
 * @documentation Readme https://github.com/kabachello/modx.plugin.Redirector/blob/master/README.md
 * @internal    @events OnPageNotFound
 * @internal    @modx_category Navigation
 * @internal    @installset base, sample
 * @author		kabachello
 * @lastupdate  25/10/2017
 */
switch ($modx->Event->name) {
	case "OnPageNotFound":
		$params = '';
		$addr = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/')+1);
		if($params_start = strpos($addr, '?')){
			$params = substr($addr, $params_start+1);
			$addr = substr($addr, 0, $params_start);	
		}
		$ext = $modx->getConfig('friendly_url_suffix');
		if (substr($addr, (-1*strlen($ext))) === $ext) {
			$addr = substr($addr, 0, -5);	
		}
		if (is_numeric($addr)){
			$doc = $modx->getDocument($addr, 'id');
			if (! empty($doc)) {
				$to = $modx->makeUrl(intval($addr), '', $params, 'full');
				return $modx->sendRedirect($to,0,'REDIRECT_HEADER','HTTP/1.1 301 Moved Permanently');
			}
		} 
		break;

	default: break;
}