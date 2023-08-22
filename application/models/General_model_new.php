<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class General_model_new extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // insert data
    function insert_data($table, $data)
    {
        $this->db->insert($table, $data);
    }

     // insert data
    function insert_log($logtable, $logdata)
    {
        $this->db->insert($logtable, $logdata);
    }

    // update data
    function update_data($table,$col_guid, $guid, $data)
    {
        $this->db->where($col_guid, $guid);
        $this->db->update($table, $data);
    }

    // update2 data
    function update2_data($table,$col_guid, $guid,$col_guid2, $guid2, $data)
    {
        $this->db->where($col_guid, $guid);
        $this->db->where($col_guid2, $guid2);
        $this->db->update($table, $data);
    }

    // delete data
    function delete_data($table, $col_guid, $guid)
    {
        $this->db->where($col_guid, $guid);
        $this->db->delete($table);
    }

    // insert ingnore batch data
    function insert_batch($table, $data)
    {
        $this->db->insert_batch($table, $data);
    }    
    // insert data
    function insert_cr($table2, $data2)
    {
        $this->db->insert($table2, $data2);
    }

    function update_batch($table, $col_guid, $guid, $data_up,$key)
    {
        $this->db->where_in($col_guid, $guid);
        $this->db->update_batch($table, $data_up, $key);
    }

     function insert_ignore_batch($table,$data)
    {
        $this->db->insert_ignore_batch($table, $data);
    }

    // insert data
    function replace_data($table, $data)
    {
        $this->db->replace($table, $data);
    }

    function load_page($data,$check_module)
    {   
        if($check_module == 'panda_po_2_new')
        {   
            $data_footer = array(
                'activity_logs_section' => 'po'
            );

            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('po_new/panda_po_list_view',$data);
            $this->load->view('general_modal_new',$data);
            $this->load->view('footer',$data_footer);
        };

        if($check_module == 'panda_gr_new')
        {

            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('gr_new/panda_gr_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_grda_new')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('grda_new/panda_grda_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_prdncn')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('prdncn/panda_prdncn_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_pdncn')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('pdncn/panda_pdncn_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_pci')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('pci/panda_pci_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_di')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('di/panda_di_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_return_collection')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('return_collection/panda_rc_list_view',$data);
            $this->load->view('footer');
        };

        if($check_module == 'panda_gr_download')
        {
            $this->panda->get_uri();
            $this->load->view('header');
            $this->load->view('gr/panda_gr_download',$data);
            $this->load->view('footer');
        };
    }

    function check_supchecklist_query($customer_guid)
    {
      $result = $this->db->query("SELECT count(1) as count
FROM 
(SELECT * FROM b2b_summary.supcus WHERE customer_guid = '$customer_guid' AND TYPE= 'S') a
LEFT JOIN
(SELECT  a.block,a.customer_guid, a.code, a.name, a.supcus_guid,a.reg_no,a.AccountCode,
MAX(b.remark1) AS remark1
,MAX(CASE WHEN b.`title1` = 'IsActive' THEN b.`value1` ELSE NULL END ) AS IsActive
, MAX(CASE WHEN b.`title1` = 'PAYMENT' THEN b.`value1` ELSE NULL END ) AS PAYMENT
, MAX(CASE WHEN b.`title1` = 'PIC' THEN b.`value1` ELSE NULL END ) AS PIC
, MAX(CASE WHEN b.`title1` = 'sup_name' THEN b.`value1` ELSE NULL END ) AS sup_name
, MAX(CASE WHEN b.`title1` = 'STATUS' THEN b.`value1` ELSE NULL END ) AS STATUS
, MAX(CASE WHEN b.`title1` = 'invoice_no' THEN b.`value1` ELSE NULL END ) AS invoice_no
, MAX(CASE WHEN b.`title1` = 'tel' THEN b.`value1` ELSE NULL END ) AS tel
, MAX(CASE WHEN b.`title1` = 'ACCEPT_FORM' THEN b.`value1` ELSE NULL END ) AS ACCEPT_FORM
, MAX(CASE WHEN b.`title1` = 'REG_FORM' THEN b.`value1` ELSE NULL END ) AS REG_FORM
, MAX(CASE WHEN b.`title1` = 'training_pax' THEN b.`value1` ELSE NULL END ) AS training_pax
, MAX(CASE WHEN b.`title1` = 'STATUS' THEN b.`remark1` ELSE NULL END ) AS remark
 FROM b2b_summary.supcus  AS a
LEFT JOIN lite_b2b.`supplier_checklist` AS b
ON a.`customer_guid` = b.`customer_guid` 
AND a.code = b.scode 
WHERE a.`customer_guid` = '$customer_guid'
GROUP BY scode
ORDER BY NAME ASC
) b
ON a.customer_guid = b.customer_guid
AND a.code = b.code
AND a.supcus_guid = b.supcus_guid
");
        return $result;

    }

    function check_supchecklist_result($limit,$start,$customer_guid,$dir,$order )
   {
     $result = $this->db->query("SELECT 
IFNULL(a.customer_guid, b.customer_guid) AS customer_guid
, IFNULL(a.AccountCode, b.AccountCode) AS `AccountCode`
, IFNULL(a.code, b.code) AS `code`
, IFNULL(a.name, b.name) AS `name`
, IFNULL(a.reg_no, b.reg_no) AS `reg_no`
, IFNULL(a.block, b.block) AS `block`
,IF(b.remark1 IS NULL OR b.remark1 = '', '', b.remark1) as remark1
, IFNULL(a.supcus_guid, b.supcus_guid) AS supcus_guid
, IFNULL(b.IsActive, '') AS IsActive
, IFNULL(IF(b.PAYMENT = '',0,b.PAYMENT),0) AS PAYMENT
, IFNULL(b.PIC, '' ) AS PIC 
, IFNULL(b.STATUS, '') AS STATUS
, IFNULL(b.invoice_no, '') AS invoice_no
, IFNULL(b.sup_name, '') AS sup_name
, IFNULL(b.tel, '') AS tel
, IFNULL(b.ACCEPT_FORM, '') AS ACCEPT_FORM
, IFNULL(b.REG_FORM, '') AS REG_FORM
, IFNULL(b.training_pax, '') AS training_pax
, IFNULL(b.remark, '') AS remark
, '' as folder
, if(consign = '1', concat('CONSIGN'), concat('OUTRIGHT')) as supply_type
FROM 
(SELECT * FROM b2b_summary.supcus WHERE customer_guid = '$customer_guid' AND TYPE= 'S') a
LEFT JOIN
(SELECT  a.block,a.customer_guid, a.code, a.name, a.supcus_guid,a.reg_no,a.AccountCode,
MAX(b.remark1) AS remark1
,MAX(CASE WHEN b.`title1` = 'IsActive' THEN b.`value1` ELSE NULL END ) AS IsActive
, MAX(CASE WHEN b.`title1` = 'PAYMENT' THEN b.`value1` ELSE NULL END ) AS PAYMENT
, MAX(CASE WHEN b.`title1` = 'PIC' THEN b.`value1` ELSE NULL END ) AS PIC
, MAX(CASE WHEN b.`title1` = 'sup_name' THEN b.`value1` ELSE NULL END ) AS sup_name
, MAX(CASE WHEN b.`title1` = 'STATUS' THEN b.`value1` ELSE NULL END ) AS STATUS
, MAX(CASE WHEN b.`title1` = 'invoice_no' THEN b.`value1` ELSE NULL END ) AS invoice_no
, MAX(CASE WHEN b.`title1` = 'tel' THEN b.`value1` ELSE NULL END ) AS tel
, MAX(CASE WHEN b.`title1` = 'ACCEPT_FORM' THEN b.`value1` ELSE NULL END ) AS ACCEPT_FORM
, MAX(CASE WHEN b.`title1` = 'REG_FORM' THEN b.`value1` ELSE NULL END ) AS REG_FORM
, MAX(CASE WHEN b.`title1` = 'training_pax' THEN b.`value1` ELSE NULL END ) AS training_pax
, MAX(CASE WHEN b.`title1` = 'STATUS' THEN b.`remark1` ELSE NULL END ) AS remark
 FROM b2b_summary.supcus  AS a
LEFT JOIN lite_b2b.`supplier_checklist` AS b
ON a.`customer_guid` = b.`customer_guid` 
AND a.code = b.scode 
WHERE a.`customer_guid` = '$customer_guid'
GROUP BY scode
ORDER BY NAME ASC
) b
ON a.customer_guid = b.customer_guid
AND a.code = b.code
AND a.supcus_guid = b.supcus_guid
ORDER BY  $order $dir limit $start,$limit");
     return $result->result();
   }

   function posts_supchecklist_search($limit,$start,$customer_guid,$dir,$order, $search )
   {
     $result = $this->db->query("SELECT * from (
      select
IFNULL(a.customer_guid, b.customer_guid) AS customer_guid
, IFNULL(a.AccountCode, b.AccountCode) AS `AccountCode`
, IFNULL(a.code, b.code) AS `code`
, IFNULL(a.name, b.name) AS `name`
, IFNULL(a.reg_no, b.reg_no) AS `reg_no`
, IFNULL(a.block, b.block) AS `block`
,IF(b.remark1 IS NULL OR b.remark1 = '', '', b.remark1) as remark1
, IFNULL(a.supcus_guid, b.supcus_guid) AS supcus_guid
, IFNULL(b.IsActive, '') AS IsActive
, IFNULL(IF(b.PAYMENT = '',0,b.PAYMENT),0) AS PAYMENT
, IFNULL(b.PIC, '' ) AS PIC 
, IFNULL(b.STATUS, '') AS STATUS
, IFNULL(b.invoice_no, '') AS invoice_no
, IFNULL(b.sup_name, '') AS sup_name
, IFNULL(b.tel, '') AS tel
, IFNULL(b.ACCEPT_FORM, '') AS ACCEPT_FORM
, IFNULL(b.REG_FORM, '') AS REG_FORM
, IFNULL(b.training_pax, '') AS training_pax
, IFNULL(b.remark, '') AS remark
, '' as folder
, if(consign = '1', concat('CONSIGN'), concat('OUTRIGHT')) as supply_type
FROM 
(SELECT * FROM b2b_summary.supcus WHERE customer_guid = '$customer_guid' AND TYPE= 'S') a
LEFT JOIN
(SELECT  a.block,a.customer_guid, a.code, a.name, a.supcus_guid,a.reg_no,a.AccountCode,
MAX(b.remark1) AS remark1
,MAX(CASE WHEN b.`title1` = 'IsActive' THEN b.`value1` ELSE NULL END ) AS IsActive
, MAX(CASE WHEN b.`title1` = 'PAYMENT' THEN b.`value1` ELSE NULL END ) AS PAYMENT
, MAX(CASE WHEN b.`title1` = 'PIC' THEN b.`value1` ELSE NULL END ) AS PIC
, MAX(CASE WHEN b.`title1` = 'sup_name' THEN b.`value1` ELSE NULL END ) AS sup_name
, MAX(CASE WHEN b.`title1` = 'STATUS' THEN b.`value1` ELSE NULL END ) AS STATUS
, MAX(CASE WHEN b.`title1` = 'invoice_no' THEN b.`value1` ELSE NULL END ) AS invoice_no
, MAX(CASE WHEN b.`title1` = 'tel' THEN b.`value1` ELSE NULL END ) AS tel
, MAX(CASE WHEN b.`title1` = 'ACCEPT_FORM' THEN b.`value1` ELSE NULL END ) AS ACCEPT_FORM
, MAX(CASE WHEN b.`title1` = 'REG_FORM' THEN b.`value1` ELSE NULL END ) AS REG_FORM
, MAX(CASE WHEN b.`title1` = 'training_pax' THEN b.`value1` ELSE NULL END ) AS training_pax
, MAX(CASE WHEN b.`title1` = 'STATUS' THEN b.`remark1` ELSE NULL END ) AS remark
 FROM b2b_summary.supcus  AS a
LEFT JOIN lite_b2b.`supplier_checklist` AS b
ON a.`customer_guid` = b.`customer_guid` 
AND a.code = b.scode 
WHERE a.`customer_guid` = '$customer_guid'
GROUP BY scode
ORDER BY NAME ASC
) b
ON a.customer_guid = b.customer_guid
AND a.code = b.code
AND a.supcus_guid = b.supcus_guid
) c 
WHERE  (`code` LIKE '%$search%' or `name` like '%$search%' OR PIC LIKE '%$search%' OR `STATUS` LIKE '%$search%' OR PAYMENT LIKE '%$search%' OR supply_type LIKE '%$search%' ) 
     ORDER BY  $order $dir limit $start,$limit ");
     return $result->result();
   }


   function check_module_query($check_status,$loc, $check_module,$q_doc_from_to, $q_exp_from_to, $q_refno , $q_period_code,$search)
   {
    if($check_module == 'panda_po_2_new') //  check module = panda_po_2_new
    {

        if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                     //$result = $this->db->query("SELECT customer_guid, refno, location, date_format(podate, '%Y-%m-%d %a') as podate,date_format(expiry_date, '%Y-%m-%d %a') expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax, IF(status = '', 'NEW', status) as status, rejected_remark, scode, sname from b2b_summary.pomain where customer_guid = '".$_SESSION['customer_guid']."' and location IN ($loc) and status IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");
                     $result = $this->db->query("SELECT count(1) as count FROM (SELECT customer_guid, refno, loc_group, date_format(podate, '%Y-%m-%d %a') as podate,date_format(expiry_date, '%Y-%m-%d %a') expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax, IF(status = '', 'NEW', status) as status, rejected_remark, scode as scode1, sname as sname1,date_format(deliverdate, '%Y-%m-%d %a') delivery_date from b2b_summary.pomain where customer_guid = '".$_SESSION['customer_guid']."' and loc_group IN ($loc) and status IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code) a LEFT JOIN (SELECT po_refno,GROUP_CONCAT(gr_refno) as gr_refno FROM b2b_summary.po_grn_inv WHERE customer_guid = '".$_SESSION['customer_guid']."' AND gr_date >= DATE_ADD(DATE_FORMAT(NOW(),'%Y-%m-%d'),INTERVAL - 6 month) GROUP BY po_refno) b ON a.RefNo = b.po_refno WHERE (a.refno like '%".$search."%' or a.loc_group like '%".$search."%' or a.podate like '%".$search."%' or a.scode like '%".$search."%' or a.sname like '%".$search."%' or b.gr_refno like '%".$search."%') ");
                }
                else
                {
                    //$result = $this->db->query("SELECT customer_guid, refno, location, date_format(podate, '%Y-%m-%d %a') as podate,date_format(expiry_date, '%Y-%m-%d %a') expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax,  IF(status = '', 'NEW', status) as status, rejected_remark, scode, sname from b2b_summary.pomain where customer_guid = '".$_SESSION['customer_guid']."'and scode IN (".$_SESSION['query_supcode'].")  and location IN ($loc) and status IN ($check_status)  $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");
                      $result = $this->db->query("SELECT count(1) as count FROM (SELECT customer_guid, refno, loc_group, date_format(podate, '%Y-%m-%d %a') as podate,date_format(expiry_date, '%Y-%m-%d %a') expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax,  IF(status = '', 'NEW', status) as status, rejected_remark, scode as scode1, sname as sname1,date_format(deliverdate, '%Y-%m-%d %a') delivery_date from b2b_summary.pomain where customer_guid = '".$_SESSION['customer_guid']."' and scode IN (".$_SESSION['query_supcode'].")  and loc_group IN ($loc) and status IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code) a LEFT JOIN (SELECT po_refno,GROUP_CONCAT(gr_refno) as gr_refno FROM b2b_summary.po_grn_inv WHERE customer_guid =  '".$_SESSION['customer_guid']."' AND gr_date >= DATE_ADD(DATE_FORMAT(NOW(),'%Y-%m-%d'),INTERVAL - 6 month) GROUP BY po_refno) b ON a.RefNo = b.po_refno WHERE (a.refno like '%".$search."%' or a.loc_group like '%".$search."%' or a.podate like '%".$search."%' or a.scode like '%".$search."%' or a.sname like '%".$search."%' or b.gr_refno like '%".$search."%')");
                      // and (refno like "%'.$search.'%" or location like "%'.$search.'%" or podate like "%'.$search.'%" or scode like "%'.$search.'%" or  sname like "%'.$search.'%")
                };
    }
        if($check_module == 'panda_gr') // panda_gr
            {

                if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.grmain  AS a
  LEFT JOIN (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."'  and a.loc_group in ($loc) and a.status IN ($check_status) and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");

                  //  echo $this->db->last_query();die;
                }
                else
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."' and a.loc_group in ($loc) and a.code IN (".$_SESSION['query_supcode'].") and a.status IN ($check_status) and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");
                
                };
            }
        if($check_module == 'panda_grda')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.grmain AS a
INNER JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid = '".$_SESSION['customer_guid']."' group by refno) AS b
ON a.refno = b.refno  and a.customer_guid = b.customer_guid
WHERE b.`customer_guid` = '".$_SESSION['customer_guid']."' AND a.loc_group in ($loc) and (b.refno like '%$search%' or a.loc_group like '%$search%' or sup_cn_date like '%$search%' or code like '%$search%' or name like '%$search%') $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");
                }
                else
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.grmain AS a
INNER JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid = '".$_SESSION['customer_guid']."' group by refno) AS b
ON a.refno = b.refno  and a.customer_guid = b.customer_guid
WHERE b.`customer_guid` = '".$_SESSION['customer_guid']."' AND a.loc_group in ($loc) AND ap_sup_code IN (".$_SESSION['query_supcode'].") and (b.refno like '%$search%' or a.loc_group like '%$search%' or sup_cn_date like '%$search%' or code like '%$search%' or name like '%$search%') $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");
                };
        }

        if($check_module == 'panda_prdncn')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM  b2b_summary.dbnotemain  WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."'  and locgroup IN ($loc) and type IN ($check_status) and (refno like '%$search%' or locgroup like '%$search%' or docdate like '%$search%' or  code like '%$search%' or  name like '%$search%' ) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code
                    UNION ALL
                    SELECT count(1) as count  FROM  b2b_summary.cnnotemain WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."'  and locgroup IN ($loc) and type IN ($check_status) and (refno like '%$search%' or locgroup like '%$search%' or docdate like '%$search%' or  code like '%$search%' or  name like '%$search%' ) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code ");
                }
                else
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.dbnotemain  WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."' and locgroup IN ($loc) and type IN ($check_status)  and code IN (".$_SESSION['query_supcode'].") and (refno like '%$search%' or locgroup like '%$search%' or docdate like '%$search%' or  code like '%$search%' or  name like '%$search%' ) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code
                    UNION ALL
                    SELECT count(1) as count FROM  b2b_summary.cnnotemain WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."' and locgroup IN ($loc) and type IN ($check_status)   and code IN (".$_SESSION['query_supcode'].") and (refno like '%$search%' or locgroup like '%$search%' or docdate like '%$search%' or  code like '%$search%' or  name like '%$search%' ) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code ");
                };
        }

        if($check_module == 'panda_pdncn')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.cndn_amt WHERE trans_type IN ('PCNAMT' , 'PDNAMT') AND  customer_guid = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and (refno like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or docno like '%$search%' or trans_type like '%$search%' or name like '%$search%' or code like '%$search%')");
                }
                else
                {
                     $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.cndn_amt WHERE trans_type IN ('PCNAMT' , 'PDNAMT') AND  customer_guid = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and code IN (".$_SESSION['query_supcode'].") and (refno like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or docno like '%$search%' or trans_type like '%$search%' )");
                }
        }

        if($check_module == 'panda_pci')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.promo_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and (inv_refno like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or promo_refno like '%$search%')");
                }
                else
                {
                     $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.promo_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") and (inv_refno like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or promo_refno like '%$search%')");
                }
        }

        if($check_module == 'panda_di')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.discheme_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and (inv_refno like '%$search%' or loc_group like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%')");
                }
                else
                {
                     $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.discheme_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") and (inv_refno like '%$search%' or loc_group like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%')");
                }
        }

        if($check_module == 'panda_return_collection')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.dbnote_batch AS a LEFT JOIN (SELECT refno, docno, customer_guid FROM b2b_summary.dbnotemain WHERE customer_guid = '".$_SESSION['customer_guid']."' ) AS b ON a.`batch_no` = b.docno WHERE a.customer_guid = '".$_SESSION['customer_guid']."' AND location IN ($loc) AND a.status <= 3 and (batch_no like '%$search%' or location like '%$search%' or expiry_date like '%$search%' or a.sup_name like '%$search%' or doc_date like '%$search%' or a.sup_code like '%$search%')");
                }
                else
                {
                     $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.dbnote_batch AS a LEFT JOIN (SELECT refno, docno, customer_guid FROM b2b_summary.dbnotemain WHERE customer_guid = '".$_SESSION['customer_guid']."' ) AS b ON a.`batch_no` = b.docno WHERE a.customer_guid  = '".$_SESSION['customer_guid']."' AND location IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") and status <= 3 and (batch_no like '%$search%' or location like '%$search%' or expiry_date like '%$search%' or a.sup_name like '%$search%' or doc_date like '%$search%' or a.sup_code like '%$search%')");
                }
        }

                if($check_module == 'panda_gr_download') // panda_gr
            {

                if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.grmain  AS a
  LEFT JOIN (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."'  and a.loc_group in ($loc) and a.status IN ($check_status) and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");

                  //  echo $this->db->last_query();die;
                }
                else
                {
                    $result = $this->db->query("SELECT count(1) as count FROM b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."' and a.loc_group in ($loc) and a.code IN (".$_SESSION['query_supcode'].") and a.status IN ($check_status) and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') $q_doc_from_to $q_exp_from_to $q_refno $q_period_code");
                
                };
            }
          // echo $this->db->last_query();die;

        return $result;
   }

   function check_module_result($limit,$start,$check_status,$q_doc_from_to, $q_exp_from_to, $q_refno, $q_period_code ,$loc,$check_module,$dir,$order)
   {

        if($check_module == 'panda_po_2_new') //  check module = panda_po_2_new
        {
            if(!in_array('VGR',$_SESSION['module_code']))
            {
              $module = 'gr_download_child';
            }
            else
            {
              $module = 'gr_child';
            }
            // echo $start;
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                     $result = $this->db->query("SELECT a.*,b.gr_refno,c.portal_description as rejected_remarks FROM (SELECT customer_guid, refno, loc_group, date_format(podate, '%Y-%m-%d %a') as podate,date_format(expiry_date, '%Y-%m-%d %a') expiry_date, scode as scode1, sname as sname1, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax,  IF(status = '', 'NEW', status) as status, rejected_remark, scode, sname,date_format(deliverdate, '%Y-%m-%d %a') delivery_date from b2b_summary.pomain where customer_guid = '".$_SESSION['customer_guid']."' and loc_group IN ($loc)  $q_doc_from_to $q_exp_from_to $q_refno  and status IN ($check_status) $q_period_code) a LEFT JOIN (SELECT po_refno,GROUP_CONCAT('<a href=".base_url()."index.php/panda_gr/".$module."?trans=',gr_refno,'&loc=".$_REQUEST['loc']."&fmodule=1>',gr_refno,'</a>') as gr_refno FROM b2b_summary.po_grn_inv WHERE customer_guid = '".$_SESSION['customer_guid']."' AND gr_date >= DATE_ADD(DATE_FORMAT(NOW(),'%Y-%m-%d'),INTERVAL - 6 month) GROUP BY po_refno) b ON a.refno = b.po_refno LEFT JOIN status_setting c ON a.rejected_remark = c.code AND c.type = 'reject_po' order by $order $dir limit $start,$limit");
                     // echo $this->db->last_query();
                      
                }
                else
                {
                    $result = $this->db->query("SELECT *,c.portal_description as rejected_remarks FROM (SELECT customer_guid, refno, loc_group, date_format(podate, '%Y-%m-%d %a') as podate,date_format(expiry_date, '%Y-%m-%d %a') expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax,  IF(status = '', 'NEW', status) as status, rejected_remark, scode as scode1, sname as sname1,date_format(deliverdate, '%Y-%m-%d %a') delivery_date from b2b_summary.pomain where customer_guid = '".$_SESSION['customer_guid']."'and scode IN (".$_SESSION['query_supcode'].")  and loc_group IN ($loc) $q_doc_from_to $q_exp_from_to $q_refno and status IN ($check_status)  $q_period_code) a LEFT JOIN (SELECT po_refno,GROUP_CONCAT('<a href=".base_url()."index.php/panda_gr/".$module."?trans=',gr_refno,'&loc=".$_REQUEST['loc']."&fmodule=1>',gr_refno,'</a>') as gr_refno FROM b2b_summary.po_grn_inv WHERE customer_guid = '".$_SESSION['customer_guid']."' AND gr_date >= DATE_ADD(DATE_FORMAT(NOW(),'%Y-%m-%d'),INTERVAL - 6 month) GROUP BY po_refno) b ON a.RefNo = b.po_refno LEFT JOIN status_setting c ON a.rejected_remark = c.code AND c.type = 'reject_po' order by $order $dir  limit $start,$limit");

                };
        }
        if($check_module == 'panda_gr') // panda_gr
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid = '".$_SESSION['customer_guid']."'  and a.loc_group in ($loc) and a.status in ($check_status)  $q_doc_from_to $q_exp_from_to $q_refno $q_period_code order by $order $dir limit $start,$limit");
                }
                else
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."' and a.loc_group in ($loc) and a.code IN (".$_SESSION['query_supcode'].") and a.status in ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code order by $order $dir limit $start,$limit");
                
                };
        }
        if($check_module == 'panda_grda')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT b.customer_guid
, a.grdate 
, b.status
, b.refno
, a.loc_group
, b.`transtype`
, ap_sup_code AS `code`
, a.name
, b.`varianceamt`
, b.`sup_cn_no`
, b.`sup_cn_date`
, dncn_date
, dncn_date_acc
FROM b2b_summary.grmain AS a
INNER JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid = '".$_SESSION['customer_guid']."' group by refno) AS b
ON a.refno = b.refno  and a.customer_guid = b.customer_guid
WHERE b.`customer_guid` ='".$_SESSION['customer_guid']."' and b.transtype IN ($check_status) AND a.loc_group in ($loc) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code order by $order $dir  limit $start,$limit");
                }
                else
                {
                    $result = $this->db->query("SELECT b.customer_guid
, a.grdate 
, b.status
, b.refno
, a.loc_group
, b.`transtype`
, ap_sup_code AS `code`
, a.name
, b.`varianceamt`
, b.`sup_cn_no`
, b.`sup_cn_date`
, dncn_date
, dncn_date_acc
FROM b2b_summary.grmain AS a
INNER JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid = '".$_SESSION['customer_guid']."' group by refno) AS b
ON a.refno = b.refno  and a.customer_guid = b.customer_guid
WHERE b.`customer_guid` ='".$_SESSION['customer_guid']."' and b.transtype IN ($check_status) AND a.loc_group in ($loc) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code AND ap_sup_code IN (".$_SESSION['query_supcode'].") order by $order $dir  limit $start,$limit");
                };
        }


        if($check_module == 'panda_prdncn')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("select * from (
                        SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum, round(amount+gst_tax_sum ,2 ) as total_incl_tax   FROM  b2b_summary.dbnotemain  WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."'  and locgroup IN ($loc) and type IN ($check_status)  $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code
                    UNION ALL
                    SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum , round(amount+gst_tax_sum ,2 ) as total_incl_tax  FROM  b2b_summary.cnnotemain WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."'  and locgroup IN ($loc) and type IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code ) a  order by $order $dir  limit $start,$limit ");
                }
                else
                {
                    $result = $this->db->query("select * from ( SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum , round(amount+gst_tax_sum ,2 ) as total_incl_tax  FROM  b2b_summary.dbnotemain  WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."' and locgroup IN ($loc) and code IN (".$_SESSION['query_supcode'].") and type IN ($check_status)  $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code
                    UNION ALL
                    SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum , round(amount+gst_tax_sum ,2 ) as total_incl_tax FROM  b2b_summary.cnnotemain WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."' and locgroup IN ($loc)  and code IN (".$_SESSION['query_supcode'].") and type IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code ) a order by $order $dir  limit $start,$limit ");
                };
        }


        if($check_module == 'panda_pdncn')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT customer_guid, trans_type, loc_group, refno, docno, docdate, CODE, name, amount, gst_tax_sum, amount_include_tax,status FROM b2b_summary.cndn_amt WHERE trans_type IN ('PCNAMT' , 'PDNAMT') AND  customer_guid = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) order by $order $dir  limit $start,$limit ");
                }
                else
                {
                     $result = $this->db->query("SELECT customer_guid, trans_type, loc_group, refno, docno, docdate, CODE, amount, gst_tax_sum, amount_include_tax,status FROM b2b_summary.cndn_amt WHERE trans_type IN ('PCNAMT' , 'PDNAMT') AND  customer_guid = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and code IN (".$_SESSION['query_supcode'].") order by $order $dir  limit $start,$limit ");
                }
        }


        if($check_module == 'panda_pci')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT customer_guid, inv_refno , promo_refno, loc_group,sup_code,sup_name, docdate, sup_code AS CODE, total_bf_tax , gst_value, total_af_tax,status
FROM b2b_summary.promo_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) order by $order $dir  limit $start,$limit");
                }
                else
                {
                     $result = $this->db->query("SELECT customer_guid, inv_refno , promo_refno, loc_group,sup_code,sup_name, docdate, sup_code AS CODE, total_bf_tax , gst_value, total_af_tax,status
FROM b2b_summary.promo_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") order by $order $dir  limit $start,$limit");
                }
        }


        if($check_module == 'panda_di')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT inv_refno, loc_group, sup_code, sup_name, docdate, datedue, total_net,status FROM b2b_summary.discheme_taxinv WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) order by $order $dir  limit $start,$limit");
                }
                else
                {
                     $result = $this->db->query("SELECT inv_refno, loc_group, sup_code, sup_name, docdate, datedue, total_net,status FROM b2b_summary.discheme_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") order by $order $dir  limit $start,$limit");
                }
        }

        if($check_module == 'panda_return_collection')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT a.customer_guid, IFNULL(b.refno, '') AS prdn_refno, batch_no, location, doc_date, expiry_date, sup_code, sup_name, canceled, IF( STATUS = '0', 'Pending Accept', IF( STATUS = '1', 'Accepted', IF( STATUS = '2', 'Pending PRDN', IF( STATUS = '3', 'PRDN generated/Pending to collect', IF( STATUS = '-1', 'Rejected', 'Undefined' ) ) ) ) ) AS status_desc, status, accepted_at FROM b2b_summary.dbnote_batch AS a LEFT JOIN (SELECT refno, docno, customer_guid FROM b2b_summary.dbnotemain WHERE customer_guid = '".$_SESSION['customer_guid']."' ) AS b ON a.`batch_no` = b.docno WHERE a.customer_guid  = '".$_SESSION['customer_guid']."' AND location IN ($loc)    $q_doc_from_to $q_exp_from_to $q_refno  and status IN ($check_status) $q_period_code   order by $order $dir  limit $start,$limit");
                    // echo $this->db->last_query();die;
                }
                else
                {
                     $result = $this->db->query("SELECT a.customer_guid, IFNULL(b.refno, '') AS prdn_refno, batch_no, location, doc_date, expiry_date, sup_code, sup_name, canceled, IF( STATUS = '0', 'Pending Accept', IF( STATUS = '1', 'Accepted', IF( STATUS = '2', 'Pending PRDN', IF( STATUS = '3', 'PRDN generated/Pending to collect', IF( STATUS = '-1', 'Rejected', 'Undefined' ) ) ) ) ) AS status_desc, status, accepted_at FROM b2b_summary.dbnote_batch AS a LEFT JOIN (SELECT refno, docno, customer_guid FROM b2b_summary.dbnotemain WHERE customer_guid = '".$_SESSION['customer_guid']."' ) AS b ON a.`batch_no` = b.docno WHERE a.customer_guid  = '".$_SESSION['customer_guid']."' AND location IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].")  $q_doc_from_to $q_exp_from_to $q_refno  and status IN ($check_status) $q_period_code   order by $order $dir  limit $start,$limit");
                }
        }

if($check_module == 'panda_gr_download') // panda_gr
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid = '".$_SESSION['customer_guid']."'  and a.loc_group in ($loc) and a.status in ($check_status)  $q_doc_from_to $q_exp_from_to $q_refno $q_period_code order by $order $dir limit $start,$limit");
                }
                else
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."' and a.loc_group in ($loc) and a.code IN (".$_SESSION['query_supcode'].") and a.status in ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code order by $order $dir limit $start,$limit");
                
                }
        }
        return $result->result();
   }

   function posts_search($limit,$start,$check_status,$loc,$check_module,$dir,$order,$search,$q_doc_from_to, $q_exp_from_to, $q_refno, $q_period_code )
   {
     if($check_module == 'panda_po_2_new') //  check module = panda_po_2_new
        {
            if(!in_array('VGR',$_SESSION['module_code']))
            {
              $module = 'gr_download_child';
            }
            else
            {
              $module = 'gr_child';
            }
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                     $result = $this->db->query('SELECT *,c.portal_description as rejected_remarks FROM (SELECT customer_guid, refno, loc_group, date_format(podate, "%Y-%m-%d %a") as podate,date_format(expiry_date, "%Y-%m-%d %a") expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax,  IF(status = "", "NEW", status) as status, rejected_remark, scode as scode1, sname as sname1,date_format(deliverdate, "%Y-%m-%d %a") delivery_date from b2b_summary.pomain where customer_guid = "'.$_SESSION['customer_guid'].'" and loc_group IN ('.$loc.') and status IN ('.$check_status.')'. $q_doc_from_to.' '.$q_exp_from_to.' '.$q_refno .' '.$q_period_code.') a LEFT JOIN (SELECT po_refno,GROUP_CONCAT("<a href='.base_url().'index.php/panda_gr/'.$module.'?trans=",gr_refno,"&loc='.$_REQUEST['loc'].'&fmodule=1>",gr_refno,"</a>") as gr_refno FROM b2b_summary.po_grn_inv WHERE customer_guid =  "'.$_SESSION['customer_guid'].'" AND gr_date >= DATE_ADD(DATE_FORMAT(NOW(),"%Y-%m-%d"),INTERVAL - 6 month) GROUP BY po_refno) b ON a.RefNo = b.po_refno LEFT JOIN status_setting c ON a.rejected_remark = c.code WHERE (a.refno like "%'.$search.'%" or a.loc_group like "%'.$search.'%" or a.podate like "%'.$search.'%" or a.scode like "%'.$search.'%" or  a.sname like "%'.$search.'%" or  b.gr_refno like "%'.$search.'%" ) order by '.$order.' '.$dir.' limit ' .$start.','.$limit );
                     
                }
                else
                {
                    $result = $this->db->query('SELECT *,c.portal_description as rejected_remarks FROM (SELECT customer_guid, refno, loc_group, date_format(podate, "%Y-%m-%d %a") as podate,date_format(expiry_date, "%Y-%m-%d %a") expiry_date, scode, sname, round( total,2) as total,round(gst_tax_sum,2) as gst_tax_sum, round( total_include_tax,2) as total_include_tax,  IF(status = "", "NEW", status) as status, rejected_remark, scode as scode1, sname as sname1,date_format(deliverdate, "%Y-%m-%d %a") delivery_date from b2b_summary.pomain where customer_guid = "'.$_SESSION['customer_guid'].'" and scode IN ('.$_SESSION['query_supcode'].')  and loc_group IN ('.$loc.') and status IN ('.$check_status.') '.$q_doc_from_to.' '.$q_exp_from_to.' '.$q_refno.' '.$q_period_code.') a LEFT JOIN (SELECT po_refno,GROUP_CONCAT("<a href='.base_url().'index.php/panda_gr/'.$module.'?trans=",gr_refno,"&loc='.$_REQUEST['loc'].'&fmodule=1>",gr_refno,"</a>") as gr_refno FROM b2b_summary.po_grn_inv WHERE customer_guid = "'.$_SESSION['customer_guid'].'" AND gr_date >= DATE_ADD(DATE_FORMAT(NOW(),"%Y-%m-%d"),INTERVAL - 6 month) GROUP BY po_refno) b ON a.RefNo = po_refno LEFT JOIN status_setting c ON a.rejected_remark = c.code WHERE (a.refno like "%'.$search.'%" or a.loc_group like "%'.$search.'%" or a.podate like "%'.$search.'%" or a.scode like "%'.$search.'%" or  a.sname like "%'.$search.'%" or b.gr_refno like "%'.$search.'%") order by '.$order.' '.$dir.'  limit '.$start.','.$limit);
                };
        }
        if($check_module == 'panda_gr') // panda_gr
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."'  and a.loc_group in ($loc) and a.status IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') order by $order $dir limit $start,$limit");
                }
                else
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."' and a.loc_group in ($loc) and a.code IN (".$_SESSION['query_supcode'].") and a.status IN ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') order by $order $dir limit $start,$limit");
                
                };
        }
        if($check_module == 'panda_grda')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT b.customer_guid
, a.grdate 
, b.status
, b.refno
, a.loc_group
, b.`transtype`
, ap_sup_code AS `code`
, a.name
, b.`varianceamt`
, b.`sup_cn_no`
, b.`sup_cn_date`
, dncn_date
, dncn_date_acc
FROM b2b_summary.grmain AS a
INNER JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid = '".$_SESSION['customer_guid']."' group by refno) AS b
ON a.refno = b.refno  and a.customer_guid = b.customer_guid
WHERE b.`customer_guid` ='".$_SESSION['customer_guid']."' and b.transtype IN ($check_status) AND a.loc_group in ($loc) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code and (b.refno like '%$search%' or a.loc_group like '%$search%' or sup_cn_date like '%$search%' or code like '%$search%' or name like '%$search%') order by $order $dir  limit $start,$limit");
                }
                else
                {
                    $result = $this->db->query("SELECT b.customer_guid
, a.grdate 
, b.status
, b.refno
, a.loc_group
, b.`transtype`
, ap_sup_code AS `code`
, a.name
, b.`varianceamt`
, b.`sup_cn_no`
, b.`sup_cn_date`
, dncn_date
, dncn_date_acc
FROM b2b_summary.grmain AS a
INNER JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid = '".$_SESSION['customer_guid']."' group by refno) AS b
ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE b.`customer_guid` = '".$_SESSION['customer_guid']."' and b.transtype IN ($check_status) AND a.loc_group in ($loc) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code AND ap_sup_code IN (".$_SESSION['query_supcode'].") and (b.refno like '%$search%' or a.loc_group like '%$search%' or sup_cn_date like '%$search%' or code like '%$search%' or name like '%$search%') order by $order $dir  limit $start,$limit");
                };
        }


        if($check_module == 'panda_prdncn')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("select * from (
                        SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum, round(amount+gst_tax_sum ,2 ) as total_incl_tax   FROM  b2b_summary.dbnotemain  WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."'  and locgroup IN ($loc) and type IN ($check_status)  
                    UNION ALL
                    SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum , round(amount+gst_tax_sum ,2 ) as total_incl_tax  FROM  b2b_summary.cnnotemain WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."'  and locgroup IN ($loc) and type IN ($check_status)  ) a where  (refno like '%$search%' or locgroup like '%$search%' or docdate like '%$search%' or  code like '%$search%' or  name like '%$search%' ) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code order by $order $dir  limit $start,$limit ");
                }
                else
                {
                    $result = $this->db->query("select * from ( SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum , round(amount+gst_tax_sum ,2 ) as total_incl_tax  FROM  b2b_summary.dbnotemain  WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."' and locgroup IN ($loc) and code IN (".$_SESSION['query_supcode'].") and type IN ($check_status) 
                    UNION ALL
                    SELECT customer_guid, type, refno, locgroup, docno, docdate, code, name, amount, gst_tax_sum , round(amount+gst_tax_sum ,2 ) as total_incl_tax FROM  b2b_summary.cnnotemain WHERE sctype = 'S' and customer_guid = '".$_SESSION['customer_guid']."' and locgroup IN ($loc)  and code IN (".$_SESSION['query_supcode'].") and type IN ($check_status)  ) a where (refno like '%$search%' or locgroup like '%$search%' or docdate like '%$search%' or  code like '%$search%' or  name like '%$search%' ) $q_doc_from_to $q_exp_from_to $q_refno  $q_period_code order by $order $dir  limit $start,$limit ");
                };
        }



        if($check_module == 'panda_pdncn')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT customer_guid, trans_type, loc_group, refno, docno, docdate, CODE, name, amount, gst_tax_sum, amount_include_tax,status FROM b2b_summary.cndn_amt WHERE trans_type IN ('PCNAMT' , 'PDNAMT') AND  customer_guid = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and (refno like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or docno like '%$search%' or trans_type like '%$search%' or name like '%$search%' or code like '%$search%') order by $order $dir  limit $start,$limit ");
                }
                else
                {
                     $result = $this->db->query("SELECT customer_guid, trans_type, loc_group, refno, docno, docdate, CODE, amount, gst_tax_sum, amount_include_tax,status FROM b2b_summary.cndn_amt WHERE trans_type IN ('PCNAMT' , 'PDNAMT') AND  customer_guid = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and code IN (".$_SESSION['query_supcode'].")  and (refno like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or docno like '%$search%' or trans_type like '%$search%' ) order by $order $dir  limit $start,$limit ");
                }
        }


        if($check_module == 'panda_pci')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT customer_guid, inv_refno , promo_refno, loc_group,sup_code,sup_name, docdate, sup_code AS CODE, total_bf_tax , gst_value, total_af_tax,status
FROM b2b_summary.promo_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and (inv_refno like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%' or loc_group like '%$search%' or docdate like '%$search%' or promo_refno like '%$search%') order by $order $dir  limit $start,$limit");
                }
                else
                {
                     $result = $this->db->query("SELECT customer_guid, inv_refno , promo_refno, loc_group,sup_code,sup_name, docdate, sup_code AS CODE, total_bf_tax , gst_value, total_af_tax,status
FROM b2b_summary.promo_taxinv  WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") and (inv_refno like '%$search%' or loc_group like '%$search%'  or sup_code like '%$search%' or sup_name like '%$search%' or  docdate like '%$search%' or promo_refno like '%$search%')  order by $order $dir  limit $start,$limit");
                }
        }

        if($check_module == 'panda_di')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT inv_refno, loc_group, sup_code, sup_name, docdate, datedue, total_net,status FROM b2b_summary.discheme_taxinv WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and (inv_refno like '%$search%' or loc_group like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%') order by $order $dir  limit $start,$limit");
                }
                else
                {
                     $result = $this->db->query("SELECT inv_refno, loc_group, sup_code, sup_name, docdate, datedue, total_net,status FROM b2b_summary.discheme_taxinv WHERE customer_guid  = '".$_SESSION['customer_guid']."' AND loc_group IN ($loc) and sup_code IN (".$_SESSION['query_supcode'].") and (inv_refno like '%$search%' or loc_group like '%$search%' or sup_code like '%$search%' or sup_name like '%$search%')  order by $order $dir  limit $start,$limit");
                }
        }


        if($check_module == 'panda_return_collection')
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT a.customer_guid, IFNULL(b.refno, '') AS prdn_refno, batch_no, location, doc_date, expiry_date, sup_code, sup_name, canceled, IF( STATUS = '0', 'Pending Accept', IF( STATUS = '1', 'Accepted', IF( STATUS = '2', 'Pending PRDN', IF( STATUS = '3', 'PRDN generated/Pending to collect', IF( STATUS = '-1', 'Rejected', 'Undefined' ) ) ) ) ) AS status_desc, status, accepted_at FROM b2b_summary.dbnote_batch AS a LEFT JOIN (SELECT refno, docno, customer_guid FROM b2b_summary.dbnotemain WHERE customer_guid = '".$_SESSION['customer_guid']."' ) AS b ON a.`batch_no` = b.docno WHERE a.customer_guid  = '".$_SESSION['customer_guid']."' AND location IN ($loc)  $q_doc_from_to $q_exp_from_to $q_refno  and status IN ($check_status) $q_period_code and (batch_no like '%$search%' or location like '%$search%' or expiry_date like '%$search%' or a.sup_name like '%$search%' or doc_date like '%$search%' or a.sup_code like '%$search%') order by $order $dir  limit $start,$limit");
                }
                else
                {
                     $result = $this->db->query("SELECT a.customer_guid, IFNULL(b.refno, '') AS prdn_refno, batch_no, location, doc_date, expiry_date, sup_code, sup_name, canceled, IF( STATUS = '0', 'Pending Accept', IF( STATUS = '1', 'Accepted', IF( STATUS = '2', 'Pending PRDN', IF( STATUS = '3', 'PRDN generated/Pending to collect', IF( STATUS = '-1', 'Rejected', 'Undefined' ) ) ) ) ) AS status_desc, status, accepted_at FROM b2b_summary.dbnote_batch AS a LEFT JOIN (SELECT refno, docno, customer_guid FROM b2b_summary.dbnotemain WHERE customer_guid = '".$_SESSION['customer_guid']."' ) AS b ON a.`batch_no` = b.docno WHERE a.customer_guid  = '".$_SESSION['customer_guid']."' AND location IN ($loc) and status IN ($check_status) $q_period_code and sup_code IN (".$_SESSION['query_supcode'].") and (batch_no like '%$search%' or location like '%$search%' or expiry_date like '%$search%' or a.sup_name like '%$search%' or doc_date like '%$search%' or a.sup_code like '%$search%')  order by $order $dir  limit $start,$limit");
                } 
        }

if($check_module == 'panda_gr_download') // panda_gr
        {
            if($_SESSION['user_group_name'] == 'SUPER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN' || $_SESSION['user_group_name'] == 'CUSTOMER_CLERK' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_NO_HIDE' || $_SESSION['user_group_name'] == 'CUSTOMER_ADMIN_FINANCE')
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid = '".$_SESSION['customer_guid']."'  and a.loc_group in ($loc) and a.status in ($check_status)  $q_doc_from_to $q_exp_from_to $q_refno $q_period_code and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') order by $order $dir limit $start,$limit");
                }
                else
                {
                    $result = $this->db->query("SELECT 
  a.customer_guid,
  a.refno,
  IFNULL(b.refno,'') AS grda_status,
  a.loc_group,
  a.dono,
  a.invno,
  DATE_FORMAT(a.docdate, '%Y-%m-%d %a') AS docdate,
  DATE_FORMAT(a.grdate, '%Y-%m-%d %a') grdate,
  a.code,
  a.name,
  a.total,
  a.gst_tax_sum,
  a.tax_code_purchase,
  a.total_include_tax,
  a.doc_name_reg,
  a.cross_ref,
  IF(a.status = '', 'NEW', a.status) AS status 
FROM
  b2b_summary.grmain  AS a
  LEFT JOIN  (select * from b2b_summary.grmain_dncn WHERE customer_guid =  '".$_SESSION['customer_guid']."' group by refno) AS b
  ON a.refno = b.refno and a.customer_guid = b.customer_guid
WHERE a.customer_guid =  '".$_SESSION['customer_guid']."' and a.loc_group in ($loc) and a.code IN (".$_SESSION['query_supcode'].") and a.status in ($check_status) $q_doc_from_to $q_exp_from_to $q_refno $q_period_code and (a.refno like '%$search%' or a.loc_group like '%$search%' or a.grdate like '%$search%' or code like '%$search%' or name like '%$search%' or a.invno like '%$search%' or a.dono like '%$search%') order by $order $dir limit $start,$limit");
                
                }
//echo $this->db->last_query();
        }



        return $result->result();
   }


 
}

