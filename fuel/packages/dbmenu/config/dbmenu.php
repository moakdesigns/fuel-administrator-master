<?php
/**
 * FuelPHP DbMenu Package
 *
 * @author     Phil Foulston
 * @version    1.0
 * @package    Fuel
 * @subpackage DbMenu
 */

return array (
    'db'            => array (
                        'table'             => 'dbmenu',
                        'table_category'    => 'dbmenu_categories'
                    ),
    
    'bootstrap'     => array( 
                        'active'            => true,
                        'ul_class'          => 'class="dropdown-menu"',
                        'first_class'       => 'class="dropdown"',
                        'second_class'      => 'class="dropdown-submenu"',
                        'dropdown_icon'     => '<i class="fa fa-caret-down"></i>',
                        'first_link_class'  => 'dropdown-toggle',
                        'first_link_toggle' => 'dropdown'
            
                    ),
);

/* End of file dbmenu.php */