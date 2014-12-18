<?php
// THEME
define('THEME', 'catalog/view/theme/' . $this->config->get('config_template') . '/');

// CSS

define('THEME_CSS_JQUERYUI', 'catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css');  // product/product.tpl, account/return_form.tpl
//define('THEME_CSS_COLORBOX', 'catalog/view/javascript/jquery/colorbox/colorbox.css');  // unused
define('THEME_CSS_STYLE', THEME . 'stylesheet/style.css');  // common/header.tpl
define('THEME_CSS_STYLESHEET', THEME . 'stylesheet/stylesheet.css');  // common/header.tpl


// JS
define('THEME_JS_JQUERY', 'catalog/view/javascript/jquery/jquery-1.7.1.min.js');  // common/header.tpl
define('THEME_JS_COMMON', 'catalog/view/javascript/common.js');  // common/header.tpl

define('THEME_JS_HTML5SHIV', THEME . 'bootstrap-3.0.0/assets/js/html5shiv.js');  // common/header.tpl
define('THEME_JS_RESPOND', THEME . 'bootstrap-3.0.0/assets/js/respond.min.js');  // common/header.tpl

define('THEME_JS_JQUERYUI', 'catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js');  // product/product.tpl, account/return_form.tpl
define('THEME_JS_JQUERYUI_TIMEPICKER', 'catalog/view/javascript/jquery/ui/jquery-ui-timepicker-addon.js'); // product/product.tpl
//define('THEME_JS_COOKIE', 'catalog/view/javascript/jquery/ui/external/jquery.cookie.js');  // unused
define('THEME_JS_AJAXUPLOAD', 'catalog/view/javascript/jquery/ajaxupload.js');  // product/product.tpl
//define('THEME_JS_COLORBOX', 'catalog/view/javascript/jquery/colorbox/jquery.colorbox.js');  // unused
//define('THEME_JS_TABS', 'catalog/view/javascript/jquery/tabs.js');  // unused
define('THEME_JS_PLUGINS', THEME . 'javascript/plugins.js');  // common/header.tpl
