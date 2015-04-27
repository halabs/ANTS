<?php if ( ! defined('BASEPATH')) exit('Error: Authentication denied...');
 
class WelcomeModel extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function doRegistration($Data = ''){
        $qryData = array('OrgName'          =>  $Data['OrgName'],
                         'OrgKey'           =>  $Data['OrgKey'], 
                         'LinkURL'          =>  $Data['LinkURL'],
                         'MasterUser'       =>  $Data['MasterUser'], 
                         'Email'            =>  $Data['Email'], 
                         'Contact'          =>  $Data['Contact'], 
                         'Password'         =>  $Data['Password'], 
                         'status'           =>  0);
        
        //$this->db->set($qryData);
        //return $this->db->insert('organizations', $qryData);
    }
}
