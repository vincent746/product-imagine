<?php
class MasterQuotesModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function GetAll()
    {

        $qry =    "	
				SELECT 
					*
				FROM 
				tbl_quotes";
                

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
                from tbl_quotes hd 
                where hd.id = " . $id;

        $res = $this->db->query($qry);
        if ($res->num_rows() > 0)
            return $res->row();
        else
            return array();
    }

    function Update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_quotes', $data);
    }

    function Delete($id)
    {
        $this->db->delete('tbl_quotes', array('id' => $id));
    }

}
