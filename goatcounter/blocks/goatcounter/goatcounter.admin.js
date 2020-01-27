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
class Goatcounter
{
    constructor()
    {
        this.timeout= 1000;
        this.timer= null;
        SCHLIX.Event.onDOMReady(this.onDOMReady, this, true);
    }
    
    onDOMReady()
    {   
        SCHLIX.Event.on('code_snippet', 'input', this.onCodeSnippetChange, this, true);
    }
    
    onCodeSnippetChange(e)
    {
        clearTimeout(this.timer);
        this.timer = setTimeout(function () {
            var code_snippet = SCHLIX.Dom.get('code_snippet').value;
            var js_pattern = /window.counter = '(.*?)'/;
            var js_url = code_snippet.split(js_pattern)[1];
            if (js_url !== undefined)
            {   
                var pattern = RegExp("^(([^:/?#]+):)?(//([^/?#]*))?([^?#]*)(\\?([^#]*))?(#(.*))?");
                var matches = js_url.match(pattern);
                var goatcounter_code = matches[4].split(".")[0];

                SCHLIX.Dom.get('goatcounter_code').value = goatcounter_code;
                SCHLIX.Dom.get('code_snippet').value = "";
                SCHLIX.Alert.info('Goatcounter Code updated'); 
            } 
            else 
            {
                SCHLIX.Alert.error('Some form field values are invalid');
            }
        }, this.timeout);
    }
    
}

var __goatcounter = new Goatcounter();
