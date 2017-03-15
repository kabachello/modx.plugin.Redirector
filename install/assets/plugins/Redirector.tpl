//<?php
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
 * @lastupdate  15/03/2017
 */

return require MODX_BASE_PATH.'assets/plugins/Redirector/redirector.plugin.php';