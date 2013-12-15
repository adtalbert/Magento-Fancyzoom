<?php
/**
 * Appmerce - Applications for Ecommerce
 * http://www.appmerce.com
 *
 * @extension   FancyZoom
 * @type        Simple product media lightbox
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    Magento Commerce
 * @package     Appmerce_FancyZoom
 * @copyright   Copyright (c) 2011-2013 Appmerce (http://www.appmerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Appmerce_FancyZoom_Model_Media extends Varien_Object
{
    const FANCYZOOM_MINIMUM_ITEMS = 3;
    const FANCYZOOM_GALLERY_MARGIN = 5;
    
    /**
     * Return FancyZoom config information
     *
     * @param string $path
     * @param int $store_id
     * @return Simple_Xml
     */
    public function getConfigData($path, $store_id = null)
    {
        if (!empty($path)) {
            return Mage::getStoreConfig($path, $store_id);
        }
        return false;
    }

}
