<?php
/**
 * Img
 *
 * @category   ZfLib
 * @package    ZfLib_View
 * @subpackage Helper
 */
namespace ZfLib\View\Helper;

use Zend\View\Helper\AbstractHtmlElement;

class Img extends AbstractHtmlElement
{
    /**
     * @param $src
     * @param $alt
     * @param array $options
     * @return string
     */
    public function __invoke($src, $alt, array $options = array())
    {
        $options['alt'] = $alt;
        // Don't escape the src attrib ...
        return sprintf('<img%s src="%s"/>', $this->htmlAttribs($options), $src);
    }
}
