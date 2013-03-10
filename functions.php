<?PHP
/* Include the General Files in the Following order
 * (1) Globel Configration FIle
 * (2) Admin Init Using Theme
 * (3) General List of Actions
 * (4) General List of Filters
 * (5) All the Modules of the System
 */
define('BLACK_THEME_DIR' ,dirname(__File__));

require_once 'config.php';

if(!is_null(BLACK_PEAR_PATH)){
    set_include_path(get_include_path() . PATH_SEPARATOR . BLACK_PEAR_PATH);
}
    

require_once 'admin/init.php';
require_once 'add_action.php';
require_once 'add_filter.php';

$modules = glob(__DIR__."/modules/*.php");

if(count($modules)>0)  {
    
    foreach ($modules as $filename){
        require_once $filename;
        }
}

add_theme_support( 'post-thumbnails' ); 

function new_excerpt_more( $more ) {
return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
