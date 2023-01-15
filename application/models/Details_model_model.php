<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Details_model_model extends CI_Model 
{
    public function getAllInstrDetails($namatabeldata)
    {
        $this->db->get('$namatabeldata')->result_array();
    }                        
                        
}


/* End of file Details_model_model.php and path \application\models\Details_model_model.php */
