<?php
$installer = $this;
/* @var $installer PWS_ExtCustomerFields_Model_Entity_Setup */

$installer->startSetup();

$installer->addAttribute('customer', 'registration_number', array(
    'label'        => 'Company Registration Number',
    'visible'      => 1,
    'required'     => 1,
    'position'     => 1,
));

$installer->addAttribute('customer', 'registration_comment', array(
    'label'        => 'Comment',
    'visible'      => 1,
    'input'        => 'textarea',
    'required'     => 0,
    'position'     => 1,
));


$installer->endSetup();
