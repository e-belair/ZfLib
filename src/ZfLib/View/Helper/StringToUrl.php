<?php
/**
 * Created by EBelair.
 * User: manu
 * Date: 29/08/13
 * Time: 17:41
 */

namespace ZfLib\View\Helper;


use Zend\View\Helper\AbstractHelper;

class StringToUrl extends AbstractHelper
{
    /**
     * Return a cleaned string
     *
     * @param string $string
     * @return string
     */
    public function __invoke($string)
    {
        $string = utf8_decode($string);
        $string = strtolower(strtr($string, utf8_decode('ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ°=()[]\'"~$&%*@!?;,:/\^¨€{}<>|+.- '),  'aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn      --        ---    e       --'));
        $string = str_replace(' ', '', $string);
        $string = str_replace('---', '-', $string);
        $string = str_replace('--', '-', $string);
        $string = trim($string, '-');

        return $string;
    }
}
