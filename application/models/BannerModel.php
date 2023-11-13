<?php
class BannerModel extends CI_Model
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
				tbl_banner";
        
        if($is_active != ''){
            $qry .= " WHERE is_active = '" . $is_active . "'";
        }
                
        $qry .= " order by no_urut ASC, created_at DESC";

        // die($qry);
        $res = $this->db->query($qry);

        if ($res->num_rows() > 0)
            return $res->result();
        else
            return array();
    }

    function GetAllFiltered($company, $mo, $ye, $filter)
    {
        $qry =    "	
                    SELECT hd.*
                    FROM tbl_banner hd
                    
                    WHERE hd.company = '" . $company . "'
                    AND MONTH(tanggal_invoice) = " . $mo . "
                    AND YEAR(tanggal_invoice) = " . $ye;

        if ($filter != "") {
            $qry .= " AND (
                hd.nomor_invoice LIKE '%" . $filter . "%'
                OR hd.tanggal_invoice LIKE '%" . $filter . "%'
                OR hd.keterangan LIKE '%" . $filter . "%'
            )";
        }

        $qry .= " ORDER BY nomor_invoice DESC ";

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
                from tbl_banner hd 
                where hd.id = " . $id;

        $res = $this->db->query($qry);
        if ($res->num_rows() > 0)
            return $res->row();
        else
            return array();
    }

    function Insert($data)
    {
        $this->db->insert('tbl_banner', $data);
    }

    function Update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_banner', $data);
    }

    function Delete($id)
    {
        $this->db->delete('tbl_banner', array('id' => $id));
    }

}
