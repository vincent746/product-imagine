<?php
class MasterTestimoniModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAll($is_active = '')
    {

        $qry =    "	
				SELECT 
					*
				FROM 
				tbl_testimoni";
        
        if($is_active != ''){
            $qry .= " WHERE is_active = '" . $is_active . "'";
        }
                

        // die($qry);
        $res = $this->db->query($qry);

        if ($res->num_rows() > 0)
            return $res->result();
        else
            return array();
    }

    function Get($id)
    {
        $qry = "
                SELECT hd.*
                from tbl_testimoni hd 
                where hd.id = " . $id;

        $res = $this->db->query($qry);
        if ($res->num_rows() > 0)
            return $res->row();
        else
            return array();
    }

    function Insert($data)
    {
        $this->db->insert('tbl_testimoni', $data);
    }

    function Update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_testimoni', $data);
    }

    function Delete($id)
    {
        $this->db->delete('tbl_testimoni', array('id' => $id));
    }

}
