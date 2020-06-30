<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://aminehr.com
 * @since             1.0.0
 * @package           My_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       my-plugin
 * Plugin URI:        localhost
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            amine
 * Author URI:        http://aminehr.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       my-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MY_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-my-plugin-activator.php
 */
function activate_my_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-plugin-activator.php';
	My_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-my-plugin-deactivator.php
 */
function deactivate_my_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-my-plugin-deactivator.php';
	My_Plugin_Deactivator::deactivate();
}

/*register_activation_hook( __FILE__, 'activate_my_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_my_plugin' );*/

register_activation_hook( __FILE__, 'createtable' );
register_deactivation_hook( __FILE__, 'deletetable' );



/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-my-plugin.php';


    

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_my_plugin() {

	$plugin = new My_Plugin();
	$plugin->run();

}

function createtable(){
    
   global $wpdb;
     $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}myplugin0(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, nom varchar(255) NOT NULL,option varchar(255) NOT NULL , description varchar(255) NOT NULL);");
   

}

function deletetable(){
    
   global $wpdb;
     $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}myplugin0");
   

}



run_my_plugin();

add_action("admin_menu","addMenu");
function addMenu()
{
    add_menu_page("my plugin","my plugin", 'zero',"manage_options","exampleMenu");
    add_submenu_page("manage_options","générale", "générale", 4, "example-option-1", "Option1");
    add_submenu_page("manage_options","réglages", "réglages", 4, "example-option-2", "option2");
}


function option1()
{
    
       
    
    echo "<h1>Bienvenue à my plugin</h2>";
        echo "<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>";
     
    echo"<h1>les informations</h1>";
  
         include_once('desp.php');
    
         
          }
    
    
 





function option2() {

      
  
   
    echo "<h1>réglages</h2>";
    
    
include_once('setting.php');
    

}


?>


























