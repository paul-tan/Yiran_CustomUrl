<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-07-01
 * Time: 11:06
 */
class Yiran_CustomUrl_Model_Observer
{
    public function updateurl($observer)
    {
        if ($observer->getEvent()->getProduct()) {
            $product = $observer->getEvent()->getProduct();
            $url = '';

            if (!is_null($product->getData('name')) && !is_null($product->getData('sku'))) {
                $url = $url . $product->getData('name') . '-' . $product->getData('sku');
            }

            $product->setData('url_key', $url);
        }
    }
}