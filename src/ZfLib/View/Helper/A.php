<?php
/**
 * A
 *
 * @category   ZfLib
 * @package    ZfLib_View
 * @subpackage Helper
 */
namespace ZfLib\View\Helper;

use Zend\View\Helper\AbstractHtmlElement;

class A extends AbstractHtmlElement
{
    public function __invoke($url, $innerHTML = null, array $options = array())
    {
        $options['href'] = $url;
        // Avoid to match 0
        if ($innerHTML === null || $innerHTML === '') {
            $innerHTML = $url;
        }

        if (!isset($options['title'])
            && !preg_match("/([\<])([^\>]{1,})*([\>])/i", $innerHTML)) {
            $options['title'] = $innerHTML;
        }
        return sprintf('<a%s>%s</a>', $this->htmlAttribs($options), $innerHTML);
    }
}
