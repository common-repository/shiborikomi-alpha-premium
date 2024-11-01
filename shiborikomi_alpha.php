<?php 
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 *
 * @wordpress-plugin
 * Plugin Name:       Shiborikomi Alpha Basic
 * Plugin URI:        https://salpha.edgenium.com/salpha
 * Description:       簡単3ステップで高品質な絞り込み検索を設置できる、次世代型チェックボックス 導入ツール
 * Version:           2.0.0
 * Author: Edgenium.inc
 * Author URI:        http://www.edgenium.com
 */

${"\x47\x4c\x4fB\x41\x4c\x53"}["nr\x6d\x6b\x61\x63\x6c"]="\x70lug\x69n";if(!defined("WPIN\x43")){die;}define("SH\x49BO\x52I\x4b\x4fM\x49_A\x4cP\x48A\x5fV\x45\x52SION","2\x2e0\x2e0");function activate_shiborikomi_alpha(){require_once plugin_dir_path(__FILE__)."\x69\x6ec\x6c\x75\x64e\x73/cla\x73s_\x73\x68\x69\x62\x6fr\x69\x6b\x6f\x6di\x5falp\x68a\x5f\x61c\x74\x69\x76\x61tor.\x70h\x70";Shiborikomi_Alpha_Activator::activate();}function deactivate_shiborikomi_alpha(){require_once plugin_dir_path(__FILE__)."\x69\x6e\x63l\x75\x64\x65s/\x63\x6c\x61ss\x5fshib\x6frik\x6f\x6di\x5fa\x6c\x70\x68\x61\x5f\x64eact\x69va\x74or.p\x68\x70";Shiborikomi_Alpha_Deactivator::deactivate();}register_activation_hook(__FILE__,"\x61ct\x69\x76at\x65\x5f\x73hi\x62or\x69\x6bom\x69\x5f\x61l\x70ha");register_deactivation_hook(__FILE__,"de\x61c\x74ivate\x5f\x73hib\x6f\x72\x69\x6bo\x6d\x69_\x61\x6cp\x68a");require plugin_dir_path(__FILE__)."\x69n\x63\x6c\x75\x64e\x73/cl\x61s\x73_shibo\x72\x69\x6bo\x6d\x69_\x61lph\x61\x2ep\x68\x70";function run_shiborikomi_alpha(){${${"\x47\x4c\x4f\x42\x41L\x53"}["nr\x6dka\x63l"]}=new Shiborikomi_Alpha();$plugin->run();}run_shiborikomi_alpha();
?>