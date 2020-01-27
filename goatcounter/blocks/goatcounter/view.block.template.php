<?php
/**
 * GoatCounter - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($enable_counter): ?>
    <?php if ($goatcounter_code): ?>
        <script>
            (function() {
                window.counter = 'https://<?= ___h($goatcounter_code)?>.goatcounter.com/count'

                var script = document.createElement('script');
                script.async = 1;
                script.src = '//gc.zgo.at/count.js';
                var ins = document.getElementsByTagName('script')[0];
                ins.parentNode.insertBefore(script, ins)
            })();
        </script>
    <?php else: ?>
        <!-- NOTE - Goat Counter was not set up correctly - please add code snippet -->
        <script>console.error("Goat Counter has not been set from configuration");</script>
    <?php endif ?>
<?php endif ?>
