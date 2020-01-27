<?php
/**
 * GoatCounter - Config
 * 
 * GoatCounter aims to give meaningful privacy-friendly web analytics for business purposes, while still staying usable for non-technical users to use on personal websites
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php 
global $HTMLHeader;
$script_src = CURRENT_SUBSITE_URL_PATH . '/blocks/goatcounter/goatcounter.admin.js';
$HTMLHeader->JAVASCRIPT($script_src);
?>
<h4><?= ___('Goat Counter Settings') ?></h4>
<schlix-config:checkbox config-key="bool_enable_counter" label="<?= ___('Enable Goat Counter') ?>" />
<schlix-config:textbox id="goatcounter_code" config-key="str_goatcounter_code" required="required" label="<?= ___('Goatcounter Code') ?>"   />
<hr />
<strong><?= ___('Code Snippet') ?></strong>
<schlix-config:textarea id="code_snippet" config-key="str_code_snippet" style="min-height:100px" placeholder="{...}" />
<p><?= ___('Enter your goatcounter code snippet. you can find <a href="https://www.goatcounter.com/" target="_blank">goatcounter</a> here.') ?></p>