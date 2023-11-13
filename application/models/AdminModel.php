<?php
class AdminModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function CheckLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $res = $this->db->get('tbl_admin');
        // die($this->db->last_query());
        if ($res->num_rows() > 0)
            return true;
        else
            return false;
    }

    function GetUserLogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $res = $this->db->get('tbl_admin');
        // die($this->db->last_query());
        if ($res->num_rows() > 0)
            return $res->row();
        else
            return array();
    }

    function UpdateLastLogin($data, $userlogin)
    {
        $this->db->where('UserName', $userlogin);
        $this->db->update('tbl_admin', $data);
    }

    function Insert($data)
    {
        $this->db->insert('tbl_admin', $data);
    }

    function CheckUsername($username)
    {
        $this->db->where('username', $username);
        $res = $this->db->get('tbl_admin');
        // die($this->db->last_query());
        if ($res->num_rows() > 0)
            return true;
        else
            return false;
    }

    function getalladmin()
    {
        $qry = "SELECT * FROM tbl_admin order by id";
        $res = $this->db->query($qry);

        if ($res->num_rows() > 0)
            return $res->result();
        else
            return array();
    }

    function Get($id)
    {
        $qry = "SELECT * FROM tbl_admin where id = " . $id;
        $res = $this->db->query($qry);

        if ($res->num_rows() > 0)
            return $res->row();
        else
            return array();
    }

    function Update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_admin', $data);
    }

    function Delete($id_admin)
    {
        $this->db->where('id', $id_admin);
        $this->db->delete('tbl_admin');
    }
}