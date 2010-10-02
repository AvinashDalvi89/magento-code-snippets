<?php
class PWS_ExtCustomerFields_Model_Entity_Setup extends Mage_Customer_Model_Entity_Setup
{


    public function getDefaultEntities()
    {
       
        $defaultEntities = parent::getDefaultEntities();
                           
        $defaultEntities['customer']['attributes']['registration_number'] = array(
                        'label'        => 'Company Registration Number',
                        'visible'      => 1,
                        'required'     => 1,
                        'position'     => 1,
                    );              
                                       
        $defaultEntities['customer']['attributes']['registration_comment'] = array(
                        'label'        => 'Comment',
                        'visible'      => 1,
                        'input'        => 'textarea',
                        'required'     => 1,
                        'position'     => 1,
                    );                          
                    
        return $defaultEntities;
    }

}
