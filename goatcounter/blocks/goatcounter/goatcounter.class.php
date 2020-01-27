<?php
namespace Block;
/**
 * GoatCounter - Main Class
 * 
 * GoatCounter aims to give meaningful privacy-friendly web analytics for business purposes, while still staying usable for non-technical users to use on personal websites
 * 
 * @copyright 2020 Beplas Studio
 *
 * @license MIT
 *
 * @package goatcounter
 * @version 1.0.2
 * @author  Beplas Studio <alip@beplasstudio.com>
 * @link    https://beplasstudio.com/
 */
class GoatCounter extends \SCHLIX\cmsBlock {

    public function Run() {
        global $__goatcounter_loaded;
        if ($__goatcounter_loaded !== 'loaded') { // prevent the built-in duplicate blocks feature 
            $enable_counter = $this->config['bool_enable_counter'];
            $goatcounter_code = $this->config['str_goatcounter_code'];

            $__goatcounter_loaded = 'loaded';
            $this->loadTemplateFile('view.block', compact(array_keys(get_defined_vars())));
        }
    }

}
