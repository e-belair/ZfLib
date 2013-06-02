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
    public function __invoke($src, $alt, array $options = array())
    {
        $options['src'] = $src;
        $options['alt'] = $alt;
        return sprintf('<img%s />', $this->htmlAttribs($options));
    }
}
