<?php
/*
 * This file is part of the AlphaLemonThemeEngineBundle and it is distributed
 * under the MIT License. In addiction, to use this bundle, you must leave
 * intact this copyright notice.
 *
 * Copyright (c) AlphaLemon <webmaster@alphalemon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://alphalemon.com
 * 
 * @license    MIT License
 * 
 */

namespace AlphaLemon\ThemeEngineBundle\Core\ThemeManager;

/**
 * Defines the methods to manage a theme
 * 
 * @author AlphaLemon
 */
interface AlThemeManagerInterface {
    
    /**
     * Adds the theme to the database after it has been loaded and makes it available
     * for using
     * 
     * @param string    $themeName  The name of the theme to add
     * @param array     $values
     * 
     * @return boolean 
     */
    public function add(array $values = array());
    
    /**
    * Activates the theme after it has been loaded and makes it available to be used
    * 
    * @return boolen
    */
    public function activate($themeName);
    
    /**
     * Removes a theme from the website
     *
     * @param string Theme name
     */
    public function remove($themeName);
}