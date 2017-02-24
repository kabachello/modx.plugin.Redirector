# Redirector plugin for MODx Evolution
This plugin will redirect allows the use of short ID-URLs (e.g. http:&#8203;//modx.&#8203;com/167) in parallel to user friendly URLs. Technically it examines every URL, for which MODx was not able to find a resource itself, and redirects to the resource with the corresponding id.

##Installation
1) Copy the included assets folder to the root of your MODx installation. This will add the Redirector to the plugins folder

2) Create a new plugin in the MODx backend and set it's static file path to "Redirector/redirector.plugin.php". After saving, the contents of tis file will be loaded automatically. If everything goes well, you should see the plugin code in the MODx manager now.

##
Licensed under GPL, just like MODx itself.
