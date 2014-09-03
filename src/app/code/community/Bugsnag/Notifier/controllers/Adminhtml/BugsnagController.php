<?php

class Bugsnag_Notifier_Adminhtml_BugsnagController extends Mage_Adminhtml_Controller_Action
{
    private static $NOTIFIER = array(
        'name' => 'Bugsnag Magento (Official)',
        'version' => '1.0.0',
        'url' => 'https://bugsnag.com/notifiers/magento'
    );

    public function checkAction()
    {
        Bugsnag_Notifier_Model_Observer::fireTestEvent($_POST["apiKey"]);
        $successCode = 1;
        Mage::app()->getResponse()->setBody($successCode);
    }
}