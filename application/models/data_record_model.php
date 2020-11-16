<?php

class Data_Record_Model extends CI_Model {

    public function save_doseType($data) {
        // $this->db->insert('tbl_doses', $data);
        $this->db->select('*');
        $this->db->from('tbl_doses');
        //return true;
        $this->db->where('dose_type', $data['dose_type']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_doses', $data);

            return true;
        }
    }

    public function save_patientAdviceInfo_revisit($data) {
        $this->db->insert('tbl_advice', $data);
    }

    public function save_patientAdviceInfo($data) {

        //$this->db->insert('tbl_add_advice_name', $data);
        $this->db->select('*');
        $this->db->from('tbl_add_advice_name');
        //return true;
        $this->db->where('patient_advice_name', $data['patient_advice_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_add_advice_name', $data);

            return true;
        }
    }

    public function save_comorbidity($data) {
        // $this->db->insert('tbl_comorbidity', $data);
        $this->db->select('*');
        $this->db->from('tbl_comorbidity');
        //return true;
        $this->db->where('comorbidity_name', $data['comorbidity_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_comorbidity', $data);

            return true;
        }
    }

    public function save_category_data($data) {

        //$this->db->insert('tbl_category_data', $data);

        $this->db->select('*');
        $this->db->from('tbl_category_data', $data);
        $this->db->where('cell_number', $data['cell_number']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/my_dictonary');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_category_data');
            $this->db->insert('tbl_category_data', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/my_dictonary');
        }
    }

    public function save_cytogenetic_report($data) {
        $this->db->insert('tbl_cytogenetic_report', $data);
    }

    public function save_patient_history_Info_by_haematologyReport($data) {
        $this->db->insert('tbl_haematology_report', $data);
    }

    public function save_urine_re_rpt($data) {
        $this->db->insert('tbl_urine_re', $data);
    }

    public function save_karyotype_report_report($data) {
        $this->db->insert('tbl_karyotype_report', $data);
    }

    public function save_multiple_report($data) {
        $this->db->insert('tbl_multiple_report', $data);
    }

    public function save_histopathology_report($data) {
        $this->db->insert('tbl_histopathology_report', $data);
    }

    public function save_cytopathology_report($data) {
        $this->db->insert('tbl_cytopathology_report', $data);
    }

    public function save_chemotherapy_regimen_man($data) {
        $this->db->insert('tbl_chemotherapy_regimen_main', $data);
    }

    public function save_chemotherapy_regimen_protocol_cycle($data) {
        $this->db->insert('tbl_protocol_cycle', $data);
    }

    public function save_chemotherapy_regimen_help($data) {
        $this->db->insert('tbl_protocol_help', $data);
    }

    public function save_dosesheduleInfo($data) {
        // $this->db->insert('tbl_dose_schedule', $data);
        $this->db->select('*');
        $this->db->from('tbl_dose_schedule');
        //return true;
        $this->db->where('tbl_dose_schedule', $data['tbl_dose_schedule']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_dose_schedule', $data);

            return true;
        }
    }

    public function save_genericName($data) {
        //   $this->db->insert('tbl_generics', $data);
        $this->db->select('*');
        $this->db->from('tbl_generics');
        //return true;
        $this->db->where('generic_name', $data['generic_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_generics', $data);

            return true;
        }
    }

    public function save_complaint_group_name($data) {
        // $this->db->insert('tbl_chief_complain_group_name', $data);
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_group_name', $data);
        $this->db->where('complain_group_name', $data['complain_group_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_complaint_group_name');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_chief_complain_group_name');
            $this->db->insert('tbl_chief_complain_group_name', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_complaint_group_name');
        }
    }

    public function save_patientremarks_name($data) {
        $this->db->insert('tbl_patient_remarks', $data);
    }

    public function save_remarksinformation_name($data) {
        // $this->db->insert('tbl_remarks', $data);
        $this->db->select('*');
        $this->db->from('tbl_remarks', $data);
        $this->db->where('remarks', $data['remarks']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/new_remarks_information');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_remarks');
            $this->db->insert('tbl_remarks', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/new_remarks_information');
        }
    }

    public function save_doctor_seal($data) {
        $this->db->insert('tbl_doctor_seal', $data);
    }

    public function save_complaint_info($data) {
        //   $this->db->insert('tbl_chief_complain_name', $data);
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name');
        //return true;
        $this->db->where('complain_name', $data['complain_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_chief_complain_name', $data);

            return true;
        }
    }

    public function save_complaint_info_modal($data) {
        //   $this->db->insert('tbl_chief_complain_name', $data);
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name', $data);
        $this->db->where('complain_name', $data['complain_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/patient_prescription_step_one');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_chief_complain_name');
            $this->db->insert('tbl_chief_complain_name', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/patient_prescription_step_one');
        }
    }

    public function save_suggestion_info($data) {
        //  $this->db->insert('tbl_dose_suggestion', $data);
        $this->db->select('*');
        $this->db->from('tbl_dose_suggestion');
        //return true;
        $this->db->where('dose_suggestion', $data['dose_suggestion']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_dose_suggestion', $data);

            return true;
        }
    }

    public function save_advice_info($data) {
        $this->db->insert('tbl_advice', $data);
    }

    public function save_add_newd__drug_info($data) {
        //  $this->db->insert('tbl_drug', $data);
        $this->db->select('*');
        $this->db->from('tbl_drug');
        //return true;
        $this->db->where('brand_name', $data['brand_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_drug', $data);

            return true;
        }
    }

    public function save_drug_helpinformation($data) {
        // $this->db->insert('tbl_complaint_wise_generic_brand_and_doctor_help', $data);
        $this->db->select('*');
        $this->db->from('tbl_complaint_wise_generic_brand_and_doctor_help');
        //return true;
        $this->db->where('drug_help_name', $data['drug_help_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_complaint_wise_generic_brand_and_doctor_help', $data);

            return true;
        }
    }

    public function save_advice_group_name($data) {
        //   $this->db->insert('tbl_path_advice_group_name', $data);

        $this->db->select('*');
        $this->db->from('tbl_path_advice_group_name');
        //return true;
        $this->db->where('path_test_group_name', $data['path_test_group_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_path_advice_group_name', $data);

            return true;
        }
    }

    public function save_diagnosis_category_name($data) {

        // $this->db->insert('tbl_add_new_diagnosis_category_name', $data);   
        $this->db->select('*');
        $this->db->from('tbl_add_new_diagnosis_category_name');
        //return true;
        $this->db->where('customized_diagnosis_category_name', $data['customized_diagnosis_category_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_add_new_diagnosis_category_name', $data);

            return true;
        }
    }

    public function save_diagnosis_category($data) {

        $this->db->insert('tbl_add_new_diagnosis_category_name', $data);
    }

    public function save_cytogenetic_name($data) {
        //  $this->db->insert('tbl_cytogenetic_test_name', $data);   

        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_test_name', $data);
        $this->db->where('cytogenetic_test_name', $data['cytogenetic_test_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_cytogenetic_test_name');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_cytogenetic_test_name');
            $this->db->insert('tbl_cytogenetic_test_name', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_cytogenetic_test_name');
        }
    }

    public function save_immunophenotype_name($data) {
        //  $this->db->insert('tbl_immunophenotype_test_name', $data); 
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_test_name', $data);
        $this->db->where('immunophenotype_test_name', $data['immunophenotype_test_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_immunophenotype_test_name');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_immunophenotype_test_name');
            $this->db->insert('tbl_immunophenotype_test_name', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_immunophenotype_test_name');
        }
    }

    public function save_customChemotherapy_regimenName($data) {
        //$this->db->insert('tbl_add_custom_chemotherapy_regimen', $data); 
        $this->db->select('*');
        $this->db->from('tbl_add_custom_chemotherapy_regimen');
        //return true;
        $this->db->where('customized_chemotherapy_regimen_name', $data['customized_chemotherapy_regimen_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_add_custom_chemotherapy_regimen', $data);

            return true;
        }
    }

    public function save_customPhysicalFidings($data) {
        //$this->db->insert('tbl_add_custom_physical_findings', $data);
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings');
        //return true;
        $this->db->where('customized_physical_findings_name', $data['customized_physical_findings_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_add_custom_physical_findings', $data);

            return true;
        }
    }

    public function save_customPhysicalFidings_ph($data) {
        $this->db->insert('tbl_add_custom_physical_findings', $data);
    }

    public function save_customPhysicalFidings_systolic($data) {

        //$this->db->insert('tbl_add_custom_physical_findings', $data);
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_systolic');
        //return true;
        $this->db->where('customized_physical_findings_systolic_name', $data['customized_physical_findings_systolic_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_add_custom_physical_findings_systolic', $data);

            return true;
        }
    }

    public function save_PhysicalFidings_systolic($data) {

//        //$this->db->insert('tbl_add_custom_physical_findings', $data); 
        $this->db->select('*');
        $this->db->from('tbl_add_physicalFindings_systolicInfo');
        //return true;
        $this->db->where('phy_fin_value_systolic', $data['phy_fin_value_systolic']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_add_physicalFindings_systolicInfo', $data);

            return true;
        }
    }

    public function save_customPhysicalFidings_value_ph($data) {
        $this->db->insert('tbl_add_custom_physical_findings_value', $data);
    }

    public function save_customPhysicalFidings_value($data) {
//        //$this->db->insert('tbl_add_custom_physical_findings_value', $data);
//        $this->db->select('*');
//        $this->db->from('tbl_add_custom_physical_findings_value');
//        //return true;
//        $this->db->where('phy_fin_value', $data['phy_fin_value']);
//        $quary = $this->db->get();
//        $numbr_row = $quary->num_rows();
//        if ($numbr_row > 0) {
//            return false;
//        } else {
//
//            $this->db->insert('tbl_add_custom_physical_findings_value', $data);
//
//            return true;
//        }
        
          $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value', $data);
        $this->db->where('phy_fin_value', $data['phy_fin_value']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/physical_findings');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_add_new_category');
            $this->db->insert('tbl_add_new_category', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/physical_findings');
        }

    }

    public function save_remarks_name($data) {
        //$this->db->insert('tbl_remarks', $data);
        $this->db->select('*');
        $this->db->from('tbl_remarks');
        //return true;
        $this->db->where('remarks', $data['remarks']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_remarks', $data);

            return true;
        }
    }

    public function save_chemotherapy_regimen_value($data) {
        $this->db->insert('tbl_chemotherapy_regimen_value', $data);
    }

    public function save_category_name($data) {
        //$this->db->insert('tbl_add_new_category', $data);

        $this->db->select('*');
        $this->db->from('tbl_add_new_category', $data);
        $this->db->where('category_name', $data['category_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/my_dictonary');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_add_new_category');
            $this->db->insert('tbl_add_new_category', $data);
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/my_dictonary');
        }
    }

    public function save_advice_name($data) {
        //$this->db->insert('tbl_path_adivce_test_name', $data);
        $this->db->select('*');
        $this->db->from('tbl_path_adivce_test_name');
        //return true;
        $this->db->where('test_name', $data['test_name']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            return false;
        } else {

            $this->db->insert('tbl_path_adivce_test_name', $data);

            return true;
        }
    }

    public function save_revisit_no($spdata) {
        $this->db->insert('tbl_visit_counting', $spdata);
    }

    public function save_new_user_info($data) {
        $this->db->insert('tbl_users', $data);
    }

    public function revisitdruginformation($data) {
        $this->db->insert('prescription_ajax', $data);
    }

    public function findpatientid($patient_id, $manual_pid) {
        $this->db->select('patient_id');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_id', $patient_id);
        $this->db->or_where('manual_pid', $manual_pid);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
        //echo '<pre>';
        //print_r($result);
        //exit();
    }

    public function findvisit_bypatientidpres($patient_id) {
        $this->db->select('visiting_no');
        $this->db->where('patient_id', $patient_id);
        //$this->db->or_where('manual_pid',$manual_pid);
        $query_result = $this->db->get('tbl_investigation_name');
        $result = $query_result->result();
        return $result;
    }

    public function findvisit_bypatientid($patient_id) {

        $this->db->select('visiting_no');
        $this->db->where('patient_id', $patient_id);
        //$this->db->or_where('manual_pid',$manual_pid);
        $query_result = $this->db->get('prescription_ajax');
        $result = $query_result->result();
        return $result;
        //$this->db->select_max('visiting_no');
        //$this->db->from('prescription_ajax');
        //$this->db->where('patient_id', $patientid);
        //$query_result = $this->db->get();
        //$result = $query_result->result();
        //return $result;
    }

    public function save_prescription_ajax_table($data) {
        $this->db->insert('prescription_ajax', $data);
    }

    public function revisit_save_prescription_ajax_table($data) {
        $this->db->insert('prescription_ajax', $data);
    }

    public function save_personal_historyInfo($data) {
        $this->db->insert('tbl_personal_history', $data);
    }

    public function save_immunophenotype_report($data) {

        $this->db->insert('tbl_immunophenotype_report', $data);
    }

    public function save_patient_history_Info($data) {
        $this->db->insert('tbl_patient_history_info', $data);
    }

    public function save_patient_systolic_Info($data) {
        $this->db->insert('tbl_systolic_information', $data);
    }

    public function save_patient_history_Info_by_familyhistory($data) {
        $this->db->insert('tbl_family_history', $data);
    }

    public function save_patient_history_Info_by_physical_findings($data) {
        $this->db->insert('tbl_physical_findings', $data);
    }

    public function save_patient_history_Info_by_physical_findings_multipledata($data) {
        $this->db->insert('tbl_physical_findings_multiple_data', $data);
    }

    public function save_physical_findings_value($data, $phy_fin_value) {

        foreach ($phy_fin_value as $phy_value) {
            //  echo '<pre>';
            //print_r($data);
            $this->db->set('patient_id', $data['patient_id']);
            $this->db->set('manual_pid', $data['manual_pid']);
            $this->db->set('visiting_no', $data['visiting_no']);
            $this->db->set('user_id', $data['user_id']);
            $this->db->set('current_date', $data['current_date']);
            $this->db->set('custom_phy_findings_id', $data['custom_phy_findings_id']);
            $this->db->set('others_information', $data['others_information']);
            $this->db->set('phy_fin_value', $phy_value);
            $this->db->insert('tbl_physical_findings_multiple_data');
        }
    }

    public function save_patient_history_Info_by_diagnosis($data) {
        $this->db->insert('tbl_diagnosis', $data);
    }

    public function save_patient_history_Info_personal_history($data) {
        $this->db->insert('tbl_personal_history_info', $data);
    }

    public function save_patient_history_Info_by_comorbidity($data) {
        $this->db->insert('tbl_comorbidity_info', $data);
    }

    public function save_stool_re($data) {
        $this->db->insert('tbl_stool_re', $data);
    }

    public function save_radiology_report($data) {
        $this->db->insert('tbl_radiology_report', $data);
    }

    public function save_usg_report($data) {
        $this->db->insert('tbl_usg', $data);
    }

    public function save_bonemarrow_report($data) {
        $this->db->insert('tbl_bonemarrow', $data);
    }

    public function save_echo_report($data) {
        $this->db->insert('tbl_echo', $data);
    }

    public function save_others_report($data) {
        $this->db->insert('tbl_others_report', $data);
    }
    public function save_patient_appointment($data){
        $this->db->insert('tbl_patient_appointment', $data);
    }
    
    public function save_manange_patient_appointment($data){
          $this->db->insert('tbl_configure_patient', $data);
    }

    public function save_patient_info_by_prescription($data) {
        //$this->db->insert('tbl_prescription_patient_info', $data);
        //$patient_id = $this->db->insert_id();
        //return $patient_id;

        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('cell_number', $data['cell_number']);
        $quary = $this->db->get();
        $numbr_row = $quary->num_rows();
        if ($numbr_row > 0) {
            $sdata = array();
            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
            $this->session->set_userdata($sdata);
            redirect('welcome/patient_informaiton_record');
        } else {

            $this->db->select('*');
            $this->db->from('tbl_prescription_patient_info');
            $this->db->insert('tbl_prescription_patient_info', $data);
            $patient_id = $this->db->insert_id();
            return $patient_id;
            $sdata = array();
            $sdata['save_message'] = 'Successfully Save ..!!';
            $this->session->set_userdata($sdata);
            redirect('welcome/patient_prescription_step_one');
        }
    }

    public function save_patient_info_by_prescription_visting_count($data) {
        $this->db->insert('tbl_visit_counting', $data);
//        $this->db->select('*');
//        $this->db->from('tbl_visit_counting', $data);
//        $this->db->where('manual_pid', $data['manual_pid']);
//        $quary = $this->db->get();
//        $numbr_row = $quary->num_rows();
//        if ($numbr_row > 0) {
//            $sdata = array();
//            $sdata['save_message'] = '<font color="red">Sorry already save</font>';
//            $this->session->set_userdata($sdata);
//            redirect('welcome/patient_informaiton_record');
//        } else {
//
//            $this->db->select('*');
//            $this->db->from('tbl_visit_counting');
//            $this->db->insert('tbl_visit_counting', $data);
//            $patient_id = $this->db->insert_id();
//            return $patient_id;
//            $sdata = array();
//            $sdata['save_message'] = 'Successfully Save ..!!';
//            $this->session->set_userdata($sdata);
//            redirect('welcome/patient_prescription_step_one');
//        }
    }

    public function complainInformation($cc_group_id) {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name');
        $this->db->where('cc_group_id', $cc_group_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function doseInfo_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_doses');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function patient_appointmentInfo() {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->join('tbl_patient_history_info','tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id');
        //$this->db->limit(10);
        $this->db->order_by('patient_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function p_name() {
        $this->db->select('patient_name');
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->join('tbl_patient_history_info','tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id');
        //$this->db->limit(10);
        $this->db->order_by('patient_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function remarks_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_remarks');
        //$this->db->join('tbl_patient_history_info','tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id');
        //$this->db->limit(10);
        $this->db->order_by('remarks_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function test_wise_unit($path_test_id) {
        $this->db->select('*');
        $this->db->from('tbl_path_adivce_test_name');
        $this->db->where('path_test_id', $path_test_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function delete_dosename_info($dose_id) {
        $this->db->where('dose_id', $dose_id);
        $this->db->delete('tbl_doses');
    }

    public function delete_patient_information_view($patient_remarks_id) {
        $this->db->where('patient_remarks_id', $patient_remarks_id);
        $this->db->delete('tbl_patient_remarks');
    }

    public function delete_protocolhelp_info($protocol_help_id) {
        $this->db->where('protocol_help_id', $protocol_help_id);
        $this->db->delete('tbl_protocol_help');
    }

    public function delete_diagnosisCategory_info($diagnosis_category_id) {
        $this->db->where('diagnosis_category_id', $diagnosis_category_id);
        $this->db->delete('tbl_add_new_diagnosis_category_name');
    }

    public function delete_patientadvice_info($add_advice_id) {
        $this->db->where('add_advice_id', $add_advice_id);
        $this->db->delete('tbl_add_advice_name');
    }

    public function delete_diagnosis_info($diagnosis_id) {
        $this->db->where('diagnosis_id', $diagnosis_id);
        $this->db->delete('tbl_diagnosis');
    }

    public function delete_dose_schedule_info($dose_schedule_id) {
        $this->db->where('dose_schedule_id', $dose_schedule_id);
        $this->db->delete('tbl_dose_schedule');
    }

    public function delete_cc_group_info($cc_group_id) {
        $this->db->where('cc_group_id', $cc_group_id);
        $this->db->delete('tbl_chief_complain_group_name');
    }

    public function delete_personalhistory_id($personal_id) {
        $this->db->where('personal_id', $personal_id);
        $this->db->delete('tbl_personal_history');
    }

    public function delete_generic_info($medicine_generic_id) {
        $this->db->where('medicine_generic_id', $medicine_generic_id);
        $this->db->delete('tbl_generics');
    }

    public function delete_suggestion_info($doseSuggestion_id) {
        $this->db->where('doseSuggestion_id', $doseSuggestion_id);
        $this->db->delete('tbl_dose_suggestion');
    }

    public function delete_new_drug_info($drug_id) {
        $this->db->where('drug_id', $drug_id);
        $this->db->delete('tbl_drug');
    }

    public function delete_drug_info($dr_help_drug_id) {
        $this->db->where('dr_help_drug_id', $dr_help_drug_id);
        $this->db->delete('tbl_complaint_wise_generic_brand_and_doctor_help');
    }

    public function delete_test_name_info($path_test_id) {
        $this->db->where('path_test_id', $path_test_id);
        $this->db->delete('tbl_path_adivce_test_name');
    }

    public function delete_phy_fin_heading_info($custom_phy_findings_id) {
        $this->db->where('custom_phy_findings_id', $custom_phy_findings_id);
        $this->db->delete('tbl_add_custom_physical_findings');
    }

    public function delete_multiplereport_info($multiple_report_id) {
        $this->db->where('multiple_report_id', $multiple_report_id);
        $this->db->delete('tbl_multiple_report');
    }

    public function delete_complaint_name_delete($cc_name_id) {
        $this->db->where('cc_name_id', $cc_name_id);
        $this->db->delete('tbl_patient_history_info');
    }

    public function delete_multiplereport_delete($multiple_report_id) {
        $this->db->where('multiple_report_id', $multiple_report_id);
        $this->db->delete('tbl_multiple_report');
    }

    public function delete_familyhistory_name_delete($family_history_id) {
        $this->db->where('family_history_id', $family_history_id);
        $this->db->delete('tbl_family_history');
    }

    public function delete_personal_history_info($personal_histor_id) {
        $this->db->where('personal_histor_id', $personal_histor_id);
        $this->db->delete('tbl_personal_history_info');
    }

    public function delete_family_history_info($family_history_id) {
        $this->db->where('family_history_id', $family_history_id);
        $this->db->delete('tbl_family_history');
    }

    public function delete_immunphenotype_info($immuno_type_report_id) {
        $this->db->where('immuno_type_report_id', $immuno_type_report_id);
        $this->db->delete('tbl_immunophenotype_report');
    }

    public function delete_cytogenetic_info($cytogenetic_rpt_id) {
        $this->db->where('cytogenetic_rpt_id', $cytogenetic_rpt_id);
        $this->db->delete('tbl_cytogenetic_report');
    }

    public function delete_chemotherapyRegimen_info_main($chemotherapy_main_id) {
        $this->db->where('chemotherapy_main_id', $chemotherapy_main_id);
        $this->db->delete('tbl_chemotherapy_regimen_main');
    }

    public function delete_user_info($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->delete('tbl_users');
    }

    public function delete_prescription_info($prescription_id) {
        $this->db->where('prescription_id', $prescription_id);
        $this->db->delete('prescription_ajax');
    }

    public function delete_comorbidity_info($comorbidity_id) {
        $this->db->where('comorbidity_id', $comorbidity_id);
        $this->db->delete('tbl_comorbidity');
    }

    public function delete_comorbidity_infoprescription($comoribdity_info_id) {
        $this->db->where('comoribdity_info_id', $comoribdity_info_id);
        $this->db->delete('tbl_comorbidity_info');
    }

    public function delete_remarksinformation($remarks_id) {
        $this->db->where('remarks_id', $remarks_id);
        $this->db->delete('tbl_remarks');
    }

    public function delete_diangosis_infoprescription($diagnosis_id) {
        $this->db->where('diagnosis_id', $diagnosis_id);
        $this->db->delete('tbl_diagnosis');
    }

    public function delete_physicalFindingsinformation($physical_examination_id) {
        $this->db->where('physical_examination_id', $physical_examination_id);
        $this->db->delete('tbl_physical_findings');
    }

    public function delete_systolic_infoprescription($new_systolic_id) {
        $this->db->where('new_systolic_id', $new_systolic_id);
        $this->db->delete('tbl_systolic_information');
    }

    public function delete_physical_findings($physical_examination_id) {
        $this->db->where('physical_examination_id', $physical_examination_id);
        $this->db->delete('tbl_physical_findings');
    }

    public function delete_diagnosiInfo($diagnosis_id) {
        $this->db->where('diagnosis_id', $diagnosis_id);
        $this->db->delete('tbl_diagnosis');
    }

    public function delete_diagnosisupdate($diagnosis_id) {
        $this->db->where('diagnosis_id', $diagnosis_id);
        $this->db->delete('tbl_diagnosis');
    }

    public function delete_physical_findings_value_byInfo($physical_examination_id) {
        $this->db->where('physical_examination_id', $physical_examination_id);
        $this->db->delete('tbl_physical_findings');
    }

    public function delete_physical_findings_value_byInfo_multiple($physical_finds_multiple_id) {
        $this->db->where('physical_finds_multiple_id', $physical_finds_multiple_id);
        $this->db->delete('tbl_physical_findings_multiple_data');
    }

    public function delete_p_advice($patient_advice_id) {
        $this->db->where('patient_advice_id', $patient_advice_id);
        $this->db->delete('tbl_advice');
    }

    public function delete_complaint_name_info($cc_name_id) {
        $this->db->where('cc_name_id', $cc_name_id);
        $this->db->delete('tbl_chief_complain_name');
    }

    public function delete_investigation_by_prescription($investigation_id) {
        $this->db->where('investigation_id', $investigation_id);
        $this->db->delete('tbl_investigation_name');
    }

    public function delete_drug_by_prescription($prescription_id) {
        $this->db->where('prescription_id', $prescription_id);
        $this->db->delete('prescription_ajax');
    }

    public function delete_familyhistory_by_update_prescription($family_history_id) {
        $this->db->where('family_history_id', $family_history_id);
        $this->db->delete('tbl_family_history');
    }

    public function delete_physicalFindings($physical_examination_id) {
        $this->db->where('physical_examination_id', $physical_examination_id);
        $this->db->delete('tbl_physical_findings');
    }

    public function doseInformation($dose_id) {
        $this->db->select('*');
        $this->db->from('tbl_doses');
        $this->db->where('dose_id', $dose_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function complaint_by_search_name($cc_name_id) {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name');
        $this->db->where('cc_name_id', $cc_name_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function userinformation($user_id) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function physicalFindingsinformation($physical_examination_id) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->where('physical_examination_id', $physical_examination_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function diagnosisinformation($diagnosis_id) {
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->where('diagnosis_id', $diagnosis_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function dictionary_name_by_id_search($category_data_id) {
        $this->db->select('*');
        $this->db->from('tbl_category_data');
        //  $this->db->join('tbl_add_new_category', 'tbl_add_new_category.category_id=tbl_category_data.category_id');
        $this->db->where('category_data_id', $category_data_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function call_cycleno($manual_pid) {

        $this->db->select_max('cycle_no');
        $this->db->from('tbl_protocol_cycle');
        //  $this->db->join('tbl_add_new_category', 'tbl_add_new_category.category_id=tbl_category_data.category_id');
        $this->db->where('manual_pid', $manual_pid);
        //$this->db->or_where('patient_id', $patient_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function comorbidityInformation_bypt($comorbidity_id) {
        $this->db->select('*');
        $this->db->from('tbl_comorbidity');
        $this->db->where('comorbidity_id', $comorbidity_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function ptadviceInformation_bypt($add_advice_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_advice_name');
        $this->db->where('add_advice_id', $add_advice_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function DiagnosiCategoryInfo_bypt($diagnosis_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_add_new_diagnosis_category_name');
        $this->db->where('diagnosis_category_id', $diagnosis_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function physicalfindings_bypt($custom_phy_findings_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings');
        $this->db->where('custom_phy_findings_id', $custom_phy_findings_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function physicalfindingsValueOnchange_bypt($phy_fin_value_Id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        // $this->db->join('tbl_add_custom_physical_findings','tbl_add_custom_physical_findings.custom_phy_findings_id=tbl_add_custom_physical_findings_value.custom_phy_findings_id');
        $this->db->where('phy_fin_value_Id', $phy_fin_value_Id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function dictionary_by_cat_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_new_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function add_new_drug_by_search($drug_id) {
        $this->db->select('*');
        $this->db->from('tbl_drug');
        //  $this->db->join('tbl_generics','tbl_generics.user_id=tbl_drug.user_id');
        $this->db->where('drug_id', $drug_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function complaint_name($cc_group_id) {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_group_name');
        $this->db->where('cc_group_id', $cc_group_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function investigationGroup_name($path_test_group_id) {
        $this->db->select('*');
        $this->db->from('tbl_path_advice_group_name');
        $this->db->where('path_test_group_id', $path_test_group_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function generic_Information($medicine_generic_id) {
        $this->db->select('*');
        $this->db->from('tbl_generics');
        $this->db->where('medicine_generic_id', $medicine_generic_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function doseschedule_Information($dose_schedule_id) {
        $this->db->select('*');
        $this->db->from('tbl_dose_schedule');
        $this->db->where('dose_schedule_id', $dose_schedule_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisitinformation_by_ID($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->join('tbl_patient_history_info', 'tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id');
        $this->db->join('tbl_chief_complain_group_name', 'tbl_chief_complain_group_name.cc_group_id=tbl_patient_history_info.cc_group_id');
        $this->db->where('tbl_prescription_patient_info.patient_id', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function doseSuggestionID($doseSuggestion_id) {
        $this->db->select('*');
        $this->db->from('tbl_dose_suggestion');
        $this->db->where('doseSuggestion_id', $doseSuggestion_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function patient_appointmentInformation($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        // $this->db->join('tbl_patient_history_info','tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id');
        $this->db->where('patient_id', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function personalhistory_by_edit($personal_id) {
        $this->db->select('*');
        $this->db->from('tbl_personal_history');
        //$this->db->join('tbl_personal_history','tbl_personal_history.personal_id=tbl_patient_history_info.personal_id');
        $this->db->where('personal_id', $personal_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function advice_nameInfo($path_test_id) {

        $this->db->select('*');
        $this->db->from('tbl_path_adivce_test_name');
        $this->db->where('path_test_id', $path_test_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function phy_findingsInfo($custom_phy_findings_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings');
        $this->db->where('custom_phy_findings_id', $custom_phy_findings_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function phy_findingsInfo_value($phy_fin_value_Id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        $this->db->where('phy_fin_value_Id', $phy_fin_value_Id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function chemotherapy_regimentInformation($custom_chemotherapy_regmine_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_chemotherapy_regimen');
        $this->db->where('custom_chemotherapy_regmine_id', $custom_chemotherapy_regmine_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function remarksInformation($remarks_id) {
        $this->db->select('*');
        $this->db->from('tbl_remarks');
        $this->db->where('remarks_id', $remarks_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function editdoctorseal_search($seal_id) {
        $this->db->select('*');
        $this->db->from('tbl_doctor_seal');
        $this->db->where('seal_id', $seal_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function protocol_helping_data($protocol_help_id) {
        $this->db->select('*');
        $this->db->from('tbl_protocol_help');
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_protocol_help.custom_chemotherapy_regmine_id');
        $this->db->where('protocol_help_id', $protocol_help_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function chemotherapy_regiment_valueInformation($chemotherapy_regimen_value_id) {
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_value');
        $this->db->where('chemotherapy_regimen_value_id', $chemotherapy_regimen_value_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function phy_findingsInfo_value_by_update($phy_fin_value_Id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        $this->db->join('tbl_add_custom_physical_findings', 'tbl_add_custom_physical_findings.custom_phy_findings_id=tbl_add_custom_physical_findings_value.custom_phy_findings_id');
        $this->db->where('phy_fin_value_Id', $phy_fin_value_Id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function particularInfo($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_id', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function familyhistoryInfo($family_history_id) {
        $this->db->select('*');
        $this->db->from('tbl_family_history');
        $this->db->where('family_history_id', $family_history_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function haematologyInfo($haematology_id) {
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        $this->db->where('haematology_id', $haematology_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function othersreportinfo($others_id) {
        $this->db->select('*');
        $this->db->from('tbl_others_report');
        $this->db->where('others_id', $others_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function multiplereport($multiple_report_id) {
        $this->db->select('*');
        $this->db->from('tbl_multiple_report');
        $this->db->where('multiple_report_id', $multiple_report_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function urinereInfo($urine_id) {
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        $this->db->where('urine_id', $urine_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function stoolreInfo($stool_id) {
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        $this->db->where('stool_id', $stool_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function radiologyrptInfo($radiology_id) {
        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        $this->db->where('radiology_id', $radiology_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function usgrptInfo($usg_id) {
        $this->db->select('*');
        $this->db->from('tbl_usg');
        $this->db->where('usg_id', $usg_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function bonemarrow($bonemarrow_id) {
        $this->db->select('*');
        $this->db->from('tbl_bonemarrow');
        $this->db->where('bonemarrow_id', $bonemarrow_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function echoInfo($echo_id) {

        $this->db->select('*');
        $this->db->from('tbl_echo');
        $this->db->where('echo_id', $echo_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function systolicInformation($custom_phy_findings_systolic_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_systolic');
        $this->db->where('custom_phy_findings_systolic_id', $custom_phy_findings_systolic_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function karyotypeInformation($karyotype_id) {
        $this->db->select('*');
        $this->db->from('tbl_karyotype_report');
        $this->db->where('karyotype_id', $karyotype_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function histopahtologyInformation($histopathology_id) {
        $this->db->select('*');
        $this->db->from('tbl_histopathology_report');
        $this->db->where('histopathology_id', $histopathology_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function cytopahtologyInformation($cytopathology_id) {
        $this->db->select('*');
        $this->db->from('tbl_cytopathology_report');
        $this->db->where('cytopathology_id', $cytopathology_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function diagnosis_categoryInformation($diagnosis_category_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_new_diagnosis_category_name');
        $this->db->where('diagnosis_category_id', $diagnosis_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function immunophenotypeInformation($immunphenotype_id) {
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_test_name');
        $this->db->where('immunphenotype_id', $immunphenotype_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function cytogeneticInformation($cytogenetic_test_name_id) {

        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_test_name');
        $this->db->where('cytogenetic_test_name_id', $cytogenetic_test_name_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function systolicvalueInformation($phy_fin_systolic_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_physicalfindings_systolicinfo');
        $this->db->where('phy_fin_systolic_id', $phy_fin_systolic_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function systolicvalue($phy_fin_value_Id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        $this->db->where('phy_fin_value_Id', $phy_fin_value_Id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_doseType($data) {
        $this->db->where('dose_id', $data['dose_id']);
        $this->db->update('tbl_doses', $data);
    }

    public function update_remarks_info($data) {

        $this->db->where('remarks_id', $data['remarks_id']);
        $this->db->update('tbl_remarks', $data);
    }

    public function update_othersreport($data) {
        $this->db->where('others_id', $data['others_id']);
        $this->db->update('tbl_others_report', $data);
    }

    public function update_cytogenetic_testnameupdate($data) {
        $this->db->where('cytogenetic_test_name_id', $data['cytogenetic_test_name_id']);
        $this->db->update('tbl_cytogenetic_test_name', $data);
    }

    public function update_advice_group_nameInfo($data) {
        $this->db->where('path_test_group_id', $data['path_test_group_id']);
        $this->db->update('tbl_path_advice_group_name', $data);
    }

    public function update_patient_history_Info_by_physical_findings($data) {
        $this->db->where('physical_examination_id', $data['physical_examination_id']);
        $this->db->update('tbl_physical_findings', $data);
    }

    public function update_dosesheduleInfo($data) {
        $this->db->where('dose_schedule_id', $data['dose_schedule_id']);
        $this->db->update('tbl_dose_schedule', $data);
    }

    public function update_dic_cate_name($data) {
        $this->db->where('category_id', $data['category_id']);
        $this->db->update('tbl_add_new_category', $data);
    }

    public function update_genericName($data) {
        $this->db->where('medicine_generic_id', $data['medicine_generic_id']);
        $this->db->update('tbl_generics', $data);
    }

    public function update_diagnosis($data) {
        $this->db->where('diagnosis_id', $data['diagnosis_id']);
        $this->db->update('tbl_diagnosis', $data);
    }

    public function update_complaint_group_name($data) {
        $this->db->where('cc_group_id', $data['cc_group_id']);
        $this->db->update('tbl_chief_complain_group_name', $data);
    }

    public function update_patientadvice($data) {
        $this->db->where('add_advice_id', $data['add_advice_id']);
        $this->db->update('tbl_add_advice_name', $data);
    }

    public function update_echoreport($data) {

        $this->db->where('echo_id', $data['echo_id']);
        $this->db->update('tbl_echo', $data);
    }

    public function update_suggestion_info($data) {
        $this->db->where('doseSuggestion_id', $data['doseSuggestion_id']);
        $this->db->update('tbl_dose_suggestion', $data);
    }

    public function update_dictoinary_infodata($data) {
        $this->db->where('category_data_id', $data['category_data_id']);
        $this->db->update('tbl_category_data', $data);
    }

    public function update_add_newd_drug_info($data) {
        $this->db->where('drug_id', $data['drug_id']);
        $this->db->update('tbl_drug', $data);
    }

    public function update_advice_name($data) {
        $this->db->where('path_test_id', $data['path_test_id']);
        $this->db->update('tbl_path_adivce_test_name', $data);
    }

    public function update_new_user_information($data) {
        $this->db->where('user_id', $data['user_id']);
        $this->db->update('tbl_users', $data);
    }

    public function update_systolic_information($data) {
        $this->db->where('custom_phy_findings_systolic_id', $data['custom_phy_findings_systolic_id']);
        $this->db->update('tbl_add_custom_physical_findings_systolic', $data);
    }

    public function update_histopathology_information($data) {
        $this->db->where('histopathology_id', $data['histopathology_id']);
        $this->db->update('tbl_histopathology_report', $data);
    }

    public function update_cytopathology_information($data) {
        $this->db->where('cytopathology_id', $data['cytopathology_id']);
        $this->db->update('tbl_cytopathology_report', $data);
    }

    public function update_comorbidity_info($data) {
        $this->db->where('comorbidity_id', $data['comorbidity_id']);
        $this->db->update('tbl_comorbidity', $data);
    }

    public function update_patient_info_by_prescription($data) {
        $this->db->where('patient_id', $data['patient_id']);
        $this->db->update('tbl_prescription_patient_info', $data);
    }

    public function update_doctor_seal($data) {
        $this->db->where('seal_id', $data['seal_id']);
        $this->db->update('tbl_doctor_seal', $data);
    }

    public function update_customizedPhysicalFindings($data) {
        $this->db->where('custom_phy_findings_id', $data['custom_phy_findings_id']);
        $this->db->update('tbl_add_custom_physical_findings', $data);
    }

    public function update_customizedPhysicalFindingsOnChangeValue($data) {
        $this->db->where('phy_fin_value_Id', $data['phy_fin_value_Id']);
        $this->db->update('tbl_add_custom_physical_findings_value', $data);
    }

    public function update_customizedPhysicalFindingsValue($data) {
        $this->db->where('phy_fin_value_Id', $data['phy_fin_value_Id']);
        $this->db->update('tbl_add_custom_physical_findings_value', $data);
    }

    public function update_complaint_information_by_complaint($data) {
        $this->db->where('cc_name_id', $data['cc_name_id']);
        $this->db->update('tbl_chief_complain_name', $data);
    }

    public function update_patient_history_Info_by_familyhistory($data) {
        $this->db->where('family_history_id', $data['family_history_id']);
        $this->db->update('tbl_family_history', $data);
    }

    public function update_personal_history_information($data) {
        $this->db->where('personal_id', $data['personal_id']);
        $this->db->update('tbl_personal_history', $data);
    }

    public function update_systolicValue_information($data) {
        $this->db->where('phy_fin_systolic_id', $data['phy_fin_systolic_id']);
        $this->db->update('tbl_add_physicalfindings_systolicinfo', $data);
    }

    public function update_systolicValue($data) {
        $this->db->where('phy_fin_value_Id', $data['phy_fin_value_Id']);
        $this->db->update('tbl_add_custom_physical_findings_value', $data);
    }

    public function update_history_Info_by_haematologyReport($data) {
        $this->db->where('haematology_id', $data['haematology_id']);
        //$this->db->or_where('patient_id', $data['patient_id']);
//        echo '<pre>';
//print_r($data);
//exit();
        $this->db->update('tbl_haematology_report', $data);
    }

    public function update_urine_re_rpt($data) {
        $this->db->where('urine_id', $data['urine_id']);
        $this->db->update('tbl_urine_re', $data);
    }

    public function update_stool_info($data) {
        $this->db->where('stool_id', $data['stool_id']);
        $this->db->update('tbl_stool_re', $data);
    }

    public function update_radiology_report($data) {
        $this->db->where('radiology_id', $data['radiology_id']);
        $this->db->update('tbl_radiology_report', $data);
    }

    public function update_usg_report($data) {
        $this->db->where('usg_id', $data['usg_id']);
        $this->db->update('tbl_usg', $data);
    }

    public function update_bonemarrow_report($data) {
        $this->db->where('bonemarrow_id', $data['bonemarrow_id']);
        $this->db->update('tbl_bonemarrow', $data);
    }

    public function update_karyotype_information($data) {
        $this->db->where('karyotype_id', $data['karyotype_id']);
        $this->db->update('tbl_karyotype_report', $data);
    }

    public function update_prescrption_ajax($data) {
        $this->db->where('prescription_id', $data['prescription_id']);
        $this->db->update('prescription_ajax', $data);
    }

    public function update_immunopenotyping_information($data) {
        $this->db->where('immunphenotype_id', $data['immunphenotype_id']);
        $this->db->update('tbl_immunophenotype_test_name', $data);
    }

    public function update_chemotherapy_information($data) {
        $this->db->where('custom_chemotherapy_regmine_id', $data['custom_chemotherapy_regmine_id']);
        $this->db->update('tbl_add_custom_chemotherapy_regimen', $data);
    }

    public function update_chemotherapy_information_value($data) {
        $this->db->where('chemotherapy_regimen_value_id', $data['chemotherapy_regimen_value_id']);
        $this->db->update('tbl_chemotherapy_regimen_value', $data);
    }

    public function update_customize_diagnosis_information($data) {
        $this->db->where('diagnosis_category_id', $data['diagnosis_category_id']);
        $this->db->update('tbl_add_new_diagnosis_category_name', $data);
    }

    public function update_chemotherapy_regimen_help($data) {
        $this->db->where('protocol_help_id', $data['protocol_help_id']);
        $this->db->update('tbl_protocol_help', $data);
    }

    public function doseScheduleInformation() {
        $this->db->select('*');
        $this->db->from('tbl_dose_schedule');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function p_remarks() {
        $this->db->select('*');
        $this->db->from('tbl_patient_remarks');
        // $this->db->order_by("patient_remarks_id", "asc");
        $this->db->join('tbl_remarks', 'tbl_remarks.remarks_id=tbl_patient_remarks.remarks_id');
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_patient_remarks.manual_pid');
        $this->db->join('tbl_diagnosis', 'tbl_diagnosis.manual_pid=tbl_patient_remarks.manual_pid');
        $this->db->join('tbl_add_new_diagnosis_category_name', 'tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function remarks_searching_pagination($num, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_patient_remarks');
        //$this->db->limit(10);
        $this->db->order_by("patient_remarks_id", "desc");
        $this->db->join('tbl_remarks', 'tbl_remarks.remarks_id=tbl_patient_remarks.remarks_id');
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_patient_remarks.manual_pid');
        $this->db->join('tbl_diagnosis', 'tbl_diagnosis.manual_pid=tbl_patient_remarks.manual_pid');
        $this->db->join('tbl_add_new_diagnosis_category_name', 'tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id');


        $this->db->limit($num, $offset);
        $query_result = $this->db->get();
        $results = $query_result->result();
        return $results;
    }

    public function categoryInformation() {
        $this->db->select('*');
        $this->db->from('tbl_add_new_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function category_data_Information_bySearch() {
        $this->db->select('*');
        $this->db->from('tbl_category_data');
        $this->db->order_by("name", "asc");
        $this->db->join('tbl_add_new_category', 'tbl_add_new_category.category_id=tbl_category_data.category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function call_manage_app_bySearch() {
        $this->db->select('*');
        $this->db->from('tbl_patient_appointment');
        $this->db->order_by("appointment_id", "desc");
       // $this->db->join('tbl_add_new_category', 'tbl_add_new_category.category_id=tbl_category_data.category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function sealdata_bySearch() {
        $this->db->select('*');
        $this->db->from('tbl_doctor_seal');
        // $this->db->order_by("name", "asc");
        //$this->db->join('tbl_add_new_category', 'tbl_add_new_category.category_id=tbl_category_data.category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByecytogeneticreportingdatainformation() {
        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_test_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchimmunophenotypeInformation() {
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_test_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByinvestigationbiochemistryInformation() {
        $this->db->select('*');
        $this->db->from('tbl_path_adivce_test_name');
        $this->db->order_by("test_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function complaint_group_nameInformaiton() {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_group_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function advice_group_nameInformaiton() {
        $this->db->select('*');
        $this->db->from('tbl_path_advice_group_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function dosetypeInfo() {
        $this->db->select('*');
        $this->db->from('tbl_doses');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_physicalfindingsdata() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_physicalfindingsdata_systolic() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_systolic');
        //$this->db->order_by("custom_phy_findings_systolic", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_physicalfindingsdata_systolic_value() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        // $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_systolic_id=tbl_add_physicalfindings_systolicinfo.custom_phy_findings_systolic_id');
        //$this->db->order_by("custom_phy_findings_systolic", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByUrineReInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("urine_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchBystoolReInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("stool_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByradiologyInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("radiology_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByusgInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_usg');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("usg_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchBybonemarrowInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_bonemarrow');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("bonemarrow_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByekaryotypeInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_karyotype_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("karyotype_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByechoreportnformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_echo');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("echo_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByehistopathologyInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_histopathology_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("histopathology_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByecytopathologyInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_cytopathology_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByeothersreportnformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_others_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("others_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_physicalfindingsdata_systolicInformation($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_systolic_information');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->join('tbl_add_custom_physical_findings_systolic', 'tbl_add_custom_physical_findings_systolic.custom_phy_findings_systolic_id=tbl_systolic_information.custom_phy_findings_systolic_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_physicalfindingValuesdata() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_diagnosis_categorydata() {
        $this->db->select('*');
        $this->db->from('tbl_add_new_diagnosis_category_name');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_doctorsealdata() {
        $this->db->select('*');
        $this->db->from('tbl_doctor_seal');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function by_chemotherapy_regimenInfo() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_chemotherapy_regimen');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_immunophenotypedata() {
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_test_name');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_cytogeneticdata() {
        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_test_name');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_chemotherapydata() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_chemotherapy_regimen');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        $this->db->order_by("customized_chemotherapy_regimen_name", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_remarksdata() {
        $this->db->select('*');
        $this->db->from('tbl_remarks');
        //$this->db->join('tbl_diagnosis', 'tbl_diagnosis.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id');
        $this->db->order_by("remarks_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_chemotherapydata_value() {
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_value');
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_value.custom_chemotherapy_regmine_id');
        //$this->db->order_by("custom_phy_findings_id", "asc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_physicalfindingsdata_value() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        $this->db->join('tbl_add_custom_physical_findings', 'tbl_add_custom_physical_findings.custom_phy_findings_id=tbl_add_custom_physical_findings_value.custom_phy_findings_id');
        $this->db->order_by("phy_fin_value", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function complaint_name_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name');
        $this->db->order_by("complain_name", "asc");
        //$this->db->where('patient_id',$patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function by_protocol_help() {
        $this->db->select('*');
        $this->db->from('tbl_protocol_help');
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_protocol_help.custom_chemotherapy_regmine_id');
        $this->db->order_by("protocol_help_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function therapy_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_protocol_help');
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_protocol_help.custom_chemotherapy_regmine_id');
        $this->db->order_by("protocol_help_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function autocomplete_investigation_name_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_path_adivce_test_name');
        $this->db->order_by("test_name", "asc");
        //$this->db->where('patient_id',$patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_drugsearch($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where('prescription_ajax.visiting_no', $visiting_no);
        $this->db->where('prescription_ajax.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function cutomPhyfinInfo_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings');
        //$this->db->order_by("complain_name", "asc");
        //$this->db->where('patient_id',$patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_count() {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_male() {
        $this->db->select('sex');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('sex', 'Male');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_female() {
        $this->db->select('sex');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('sex', 'Female');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_investigation() {
        $this->db->select('test_name');
        $this->db->from('tbl_investigation_name');
        //$this->db->where('sex', 'Female');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_drug() {
        $this->db->select('test_name');
        $this->db->from('prescription_ajax');
        //$this->db->where('sex', 'Female');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_presentingcomplaint() {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        //$this->db->where('sex', 'Female');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function today_p_count() {
        $current_date = Date("Y-m-d");
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function m_patient_january($year) {

        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='01' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }
    
    public function m_patient_january_presentig_complaint($year){
         $sql = "SELECT * FROM tbl_patient_history_info WHERE MONTH(tbl_patient_history_info.current_date)='01' "
                . "AND YEAR(tbl_patient_history_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
        
    }

    public function m_patient_February($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='02' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_March($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='03' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_april($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='04' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_may($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='05' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_june($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='06' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_july($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='07' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_augs($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='08' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_sep($year) {

        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='09' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_octo($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='10' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_nov($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='11' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function m_patient_devem($year) {
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='12' "
                . "AND YEAR(tbl_prescription_patient_info.current_date)='$year'";
        $query_result = $this->db->query($sql);
        $result = count($query_result->result());
        return $result;
    }

    public function this_month_p_count() {
        $current_date = date("Y-m-d");
        $month = date("m", strtotime($current_date));
        $thisyear = date("Y", strtotime($current_date));
        //echo $thisyear;
        // exit();
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE MONTH(tbl_prescription_patient_info.current_date)='$month' AND YEAR(tbl_prescription_patient_info.current_date)='$thisyear'";
//        $this->db->select('*');
//        $this->db->from('tbl_prescription_patient_info');
//        $this->db->where(month('current_date'),$month);
//        $this->db->where(year('current_date'),$thisyear);

        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function this_year_p_count() {
        $current_date = date("Y-m-d");
        $month = date("m", strtotime($current_date));
        $thisyear = date("Y", strtotime($current_date));
        //echo $thisyear;
        // exit();
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE YEAR(tbl_prescription_patient_info.current_date)='$thisyear'";
//        $this->db->select('*');
//        $this->db->from('tbl_prescription_patient_info');
//        $this->db->where(month('current_date'),$month);
//        $this->db->where(year('current_date'),$thisyear);

        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_diagnosis() {
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function totalpatient_chemo_regimen() {
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_main');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function cheief_complaint_by_search($patient_id, $visiting_no = null) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        //$this->db->where('current_date', $current_date);
        $this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function p_history_by_search($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->where('patient_id', $patient_id);
        $this->db->join('tbl_personal_history', 'tbl_personal_history.personal_id=tbl_patient_history_info.personal_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function personal_history_by_search($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_personal_history_info');
        $this->db->join('tbl_personal_history', 'tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);

        $this->db->or_where('tbl_personal_history_info.manual_pid', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function pt_cycle_info($manual_pid) {
        $this->db->select('*');
        $this->db->from('tbl_protocol_cycle');
        $this->db->where('manual_pid', $manual_pid);
        //$this->db->where('visiting_no', $visiting_no);
        //  $this->db->or_where('tbl_chemotherapy_regimen_main.manual_pid', $patient_id);
        //$this->db->join('tbl_add_custom_chemotherapy_regimen','tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_main.custom_chemotherapy_regmine_id');
        //$this->db->join('tbl_chemotherapy_regimen_value','tbl_chemotherapy_regimen_value.chemotherapy_regimen_value_id=tbl_chemotherapy_regimen_main.chemotherapy_regimen_value_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function diagnosis_by_prescription_tab($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('patient_id', $patient_id);
        //$this->db->join('tbl_personal_history','tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_physicalfindings_by_infoPrscription($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        //$this->db->join('tbl_personal_history','tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function comorbidity_by_info($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_comorbidity_info');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->join('tbl_comorbidity', 'tbl_comorbidity.comorbidity_id=tbl_comorbidity_info.comorbidity_id');
        $this->db->or_where('tbl_comorbidity_info.manual_pid', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function visiting_by_info($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        //$this->db->join('tbl_comorbidity', 'tbl_comorbidity.comorbidity_id=tbl_comorbidity_info.comorbidity_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function multiplereport_by_info($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_multiple_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->join('tbl_path_adivce_test_name', 'tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function immuno_type_by_info($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->join('tbl_immunophenotype_test_name', 'tbl_immunophenotype_test_name.immunphenotype_id=tbl_immunophenotype_report.immunphenotype_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function cytogenetic_rpt_by_info($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->join('tbl_cytogenetic_test_name', 'tbl_cytogenetic_test_name.cytogenetic_test_name_id=tbl_cytogenetic_report.cytogenetic_test_name_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function address_info($category_data_id) {
        $this->db->select('*');
        $this->db->from('tbl_category_data');
        $this->db->where('category_data_id', $category_data_id);
        //$this->db->join('tbl_path_adivce_test_name', 'tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function brand_name_information() {
        $this->db->select('*');
        $this->db->from('tbl_drug');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function suggestionInfo() {
        $this->db->select('*');
        $this->db->from('tbl_dose_suggestion');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function patient_advice_by_search() {
        $this->db->select('*');
        $this->db->from('tbl_add_advice_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_by_prescription_all_data($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->where('patient_id', $patient_id);
        //$this->db->or_where('manual_pid', $patient_id);
        //$this->db->or_where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        $this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_drugInfo($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where('prescription_ajax.visiting_no', $visiting_no);
        $this->db->where('prescription_ajax.current_date', $current_date);
        $this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        $this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_prescription_ajax_table_by_search_visitingno($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_visit_counting');
        $this->db->where('tbl_visit_counting.manual_pid', $manual_pid);
        $this->db->where('tbl_visit_counting.visiting_no', $visiting_no);
        $this->db->where('tbl_visit_counting.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function schedule_data_Info() {
        $this->db->select('*');
        $this->db->from('tbl_dose_schedule');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function generic_name_by_id() {
        $this->db->select('*');
        $this->db->from('tbl_generics');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function genericInformation() {
        $this->db->select('*');
        $this->db->from('tbl_generics');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function complaint_group_name() {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_group_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function adviceGroupNameInformaiton() {
        $this->db->select('*');
        $this->db->from('tbl_path_advice_group_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_suggestion_name() {
        $this->db->select('*');
        $this->db->from('tbl_dose_suggestion');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_dictionarydataview() {
        $this->db->select('*');
        $this->db->from('tbl_add_new_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_dictionaryinfo() {
        $this->db->select('*');
        $this->db->from('tbl_category_data');
        $this->db->join('tbl_add_new_category', 'tbl_add_new_category.category_id=tbl_category_data.category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_add_new_drug_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_drug');
        //  $this->db->join('tbl_generics','tbl_generics.user_id=tbl_drug.user_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_registration_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_complaint_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_comorbidity_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_comorbidity');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_personalhistory_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_personal_history');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_particular_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->order_by("patient_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_familyhistory_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_family_history');
        $this->db->order_by("patient_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_diagnosis_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->order_by("patient_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_physicalfindgs_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->order_by("patient_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_diagnosisCategory_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_add_new_diagnosis_category_name');
        $this->db->order_by("diagnosis_category_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_pt_advice_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_add_advice_name');
        $this->db->order_by("add_advice_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function patient_id_search() {
      $this->db->select_max('patient_id'); 
      
      $query=$this->db->get('tbl_prescription_patient_info');
      $patientid=$query->row();
      return $patientid;
        
        
        
        
    }

    public function view_search_drug_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_complaint_wise_generic_brand_and_doctor_help');
        $this->db->order_by("dr_help_drug_id", "desc");
        // $this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_complaint_wise_generic_brand_and_doctor_help.cc_name_id');
        //$this->db->join('tbl_generics', 'tbl_generics.medicine_generic_id=tbl_complaint_wise_generic_brand_and_doctor_help.medicine_generic_id');
        $this->db->join('tbl_drug', 'tbl_drug.drug_id=tbl_complaint_wise_generic_brand_and_doctor_help.drug_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_advice_name_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_path_advice_group_name');
        $this->db->join('tbl_path_adivce_test_name', 'tbl_path_adivce_test_name.path_test_group_id=tbl_path_advice_group_name.path_test_group_id');
        //$this->db->join('tbl_generics','tbl_generics.medicine_generic_id=tbl_complaint_wise_generic_brand_and_doctor_help.medicine_generic_id');
        //$this->db->join('tbl_drug','tbl_drug.drug_id=tbl_complaint_wise_generic_brand_and_doctor_help.drug_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function searchByHaematologyInformation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->order_by("haematology_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_haematologyreport() {
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        $this->db->order_by("haematology_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_haematology_report.manual_pid');
        //$this->db->join('tbl_visit_counting', 'tbl_visit_counting.user_id=tbl_haematology_report.user_id');
//        $this->db->where('tbl_haematology_report.patient_id', $patient_id);
//        $this->db->where('tbl_haematology_report.visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_urinereport() {
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        $this->db->order_by("urine_id", "desc");
        //$this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=tbl_urine_re.manual_pid');
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_urine_re.manual_pid');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_stoolreport() {
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        $this->db->order_by("stool_id", "desc");
        // $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_stool_re.manual_pid');
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_stool_re.manual_pid');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_radiologyreport() {
        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        $this->db->order_by("radiology_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_radiology_report.manual_pid');
        //$this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=tbl_radiology_report.manual_pid');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_usgreport() {
        $this->db->select('*');
        $this->db->from('tbl_usg');
        $this->db->order_by("usg_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_usg.manual_pid');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_bonereport() {
        $this->db->select('*');
        $this->db->from('tbl_bonemarrow');
        $this->db->order_by("bonemarrow_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_bonemarrow.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_echorpt() {
        $this->db->select('*');
        $this->db->from('tbl_echo');
        $this->db->order_by("echo_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_echo.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_cytopathologyrpt() {
        $this->db->select('*');
        $this->db->from('tbl_cytopathology_report');
        $this->db->order_by("cytopathology_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_cytopathology_report.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_histopathologyrpt() {
        $this->db->select('*');
        $this->db->from('tbl_histopathology_report');
        $this->db->order_by("histopathology_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_histopathology_report.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_immunophenotypingyrpt() {
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_report');
        $this->db->order_by("immuno_type_report_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_immunophenotype_report.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_view_karyotyperpt() {
        $this->db->select('*');
        $this->db->from('tbl_karyotype_report');
        $this->db->order_by("karyotype_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_karyotype_report.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_view_cytogeneticrpt() {
        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_report');
        $this->db->order_by("cytogenetic_rpt_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_cytogenetic_report.manual_pid');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_view_othersrpt() {
        $this->db->select('*');
        $this->db->from('tbl_others_report');
        $this->db->order_by("others_id", "desc");
        $this->db->join('tbl_prescription_patient_info', 'tbl_prescription_patient_info.manual_pid=tbl_others_report.manual_pid');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_multipereport() {
        $this->db->select('*');
        $this->db->from('tbl_multiple_report');
        $this->db->order_by("multiple_report_id", "desc");
        $this->db->join('tbl_path_adivce_test_name', 'tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function prescription_wise_brand_name($dose_id) {
        $this->db->select('*');
        $this->db->from('tbl_drug');
        $this->db->where('dose_id', $dose_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function drug_helpInfo_byprescription($brand_name) {
        $this->db->select('*');
        $this->db->from('tbl_drug');
        //$this->db->join('tbl_drug', 'tbl_drug.drug_id=tbl_complaint_wise_generic_brand_and_doctor_help.drug_id');
        $this->db->where('tbl_drug.brand_name', $brand_name);
        //$this->db->where('tbl_complaint_wise_generic_brand_and_doctor_help.drug_help_name', $drug_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function ChemotherapyName_wise_Value_name($custom_chemotherapy_regmine_id) {
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_value');
        $this->db->where('custom_chemotherapy_regmine_id', $custom_chemotherapy_regmine_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function phyfindata($custom_phy_findings_id) {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings_value');
        $this->db->where('custom_phy_findings_id', $custom_phy_findings_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_by_prescription_adviceinfo($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_investigation_name');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function adviceInfo_reportingInfo($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        $this->db->where('patient_id', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_by_patientComplaint($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_name_info($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('patient_id', $patient_id);
        // $this->db->or_where('manual_pid', $patient_id);
        $this->db->where('visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function view_particular_by_search($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('patient_id', $patient_id);
        // $this->db->or_where('manual_pid', $patient_id);
        //$this->db->where('visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function search_by_patient_nameInfo($patient_name) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('patient_name', $patient_name);
        // $this->db->or_where('manual_pid', $patient_id);
        //$this->db->where('visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_by_patientExtraComplaint($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        //  $this->db->join('tbl_chief_complain_name','tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_by_patientAdvice($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_adviceinfo($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /*
      public function prescription_wise_strength_name($drug_id) {
      $this->db->select('*');
      $this->db->from('tbl_drug');
      $this->db->where('drug_id', $drug_id);
      $query_result = $this->db->get();
      $result = $query_result->row();
      return $result;
      }
     * 
     */

    public function revisit_data_byComplaint($patient_id, $date) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('current_date', $date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_byComplaintExtraComplaintInfo($patient_id, $date) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('current_date', $date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_byAdviceInfo($patient_id, $date) {
        $this->db->select('*');
        $this->db->from('tbl_advice_name');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('current_date', $date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisi_data_patientInfo($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_id', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_byDrug($patient_id, $date) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        $this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $this->db->where('patient_id', $patient_id);
        $this->db->where('date', $date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function call_for_pid($patient_id) {
        $this->db->select('patient_id,manual_pid');
        $this->db->where('patient_id', $patient_id);
        $this->db->or_where('manual_pid', $patient_id);
        $query_result = $this->db->get('tbl_prescription_patient_info');
        $result = $query_result->row();
        return $result;
    }

    public function call_patientid($patientid) {
        $this->db->select('*');
        $this->db->where('patient_id', $patientid);
        $this->db->or_where('manual_pid', $patientid);
        $query_result = $this->db->get('tbl_prescription_patient_info');
        $result = $query_result->row();
        return $result;
    }

    public function call_visit_date($patientid, $visiting_no) {

        $this->db->select('current_date');
        // $this->db->where('patient_id', $patientid);
        $this->db->where('manual_pid', $patientid);
        $this->db->where('visiting_no', $visiting_no);
        $query_result = $this->db->get('tbl_visit_counting');
        $result = $query_result->row();
        return $result;
    }

    public function call_for_patient_id($manual_pid) {

        $this->db->select('patient_id');
        //$this->db->from('prescription_ajax');
        //$this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        //$this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        //$this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $this->db->where('manual_pid', $manual_pid);
        //tbl_prescription_patient_info
        //$this->db->where('date', $date);
        $query_result = $this->db->get('tbl_prescription_patient_info');
        $result = $query_result->row();
        return $result;
    }

    public function call_visit_no_by_patient_id($patientid) {
        $this->db->select_max('visiting_no');

        $this->db->where('tbl_visit_counting.patient_id', $patientid);
        $query_result = $this->db->get('tbl_visit_counting');
        $result = $query_result->row();
        return $result;
    }

    public function final_prescription_reporting_pdf($patient_id) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_id', $patient_id);
        //$this->db->join('tbl_pharmaceuticals','tbl_pharmaceuticals.pharma_id=tbl_drug.pharma_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function final_prescription_reporting($patient_id, $date) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        //$this->db->join('tbl_strength','tbl_strength.strength_id=tbl_drug.strength_id');
        //$this->db->join('tbl_drug','tbl_drug.drug_id=prescription_ajax.drug_id');
        $this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $this->db->where('prescription_ajax.patient_id', $patient_id);
        $this->db->where('prescription_ajax.date', $date);
        //$this->db->group_by('prescription_ajax.date');
        //$this->db->join('tbl_pharmaceuticals','tbl_pharmaceuticals.pharma_id=tbl_drug.pharma_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function final_prescription_reportingInfo($patient_id) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        //$this->db->join('tbl_strength','tbl_strength.strength_id=tbl_drug.strength_id');
        //$this->db->join('tbl_drug','tbl_drug.drug_id=prescription_ajax.drug_id');
        $this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $this->db->where('prescription_ajax.patient_id', $patient_id);
        // $this->db->where('prescription_ajax.date');
        //$this->db->group_by('prescription_ajax.date');
        //$this->db->join('tbl_pharmaceuticals','tbl_pharmaceuticals.pharma_id=tbl_drug.pharma_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('tbl_patient_history_info.visiting_no', $visiting_no);
        $this->db->where('tbl_patient_history_info.manual_pid', $manual_pid);
        $this->db->where('tbl_patient_history_info.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_presentingComplaint_info($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('tbl_patient_history_info.visiting_no', $visiting_no);
        $this->db->where('tbl_patient_history_info.patient_id', $patient_id);
        $this->db->or_where('tbl_patient_history_info.manual_pid', $patient_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_dosesuggestion($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where('prescription_ajax.visiting_no', $visiting_no);
        $this->db->where('prescription_ajax.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_patientInfo($manual_pid) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->join('tbl_dose_suggestion','tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        //$this->db->where('visiting_no,$visiting_no');
        $this->db->where('tbl_prescription_patient_info.manual_pid', $manual_pid);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisitno_all_view($manual_pid, $visitno1, $visitno2) {

        $visitrange = "tbl_visit_counting.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_visit_counting');
        //$this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.manual_pid=tbl_visit_counting.manual_pid');
        $this->db->where('tbl_visit_counting.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_patientInfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_visit_counting.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=tbl_prescription_patient_info.manual_pid');
        $this->db->where('tbl_prescription_patient_info.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_visit_counting.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    /*
     more important function
     *  public function revisit_data_patientInfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_visit_counting.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=tbl_prescription_patient_info.manual_pid');
        $this->db->where('tbl_prescription_patient_info.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_visit_counting.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     */
    
    public function revisit_data_pInfo_all_view($manual_pid){
        //$visitrange = "tbl_visit_counting.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=tbl_prescription_patient_info.manual_pid');
        $this->db->where('tbl_prescription_patient_info.manual_pid', $manual_pid);
        //$this->db->where($visitrange);
        //$this->db->order_by('tbl_visit_counting.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
        
        
    }

    // start revisit preview all function

    public function revisit_data_presentingcomorbidity_all_viewinfo($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_comorbidity_info.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_comorbidity_info');
        $this->db->join('tbl_comorbidity', 'tbl_comorbidity.comorbidity_id=tbl_comorbidity_info.comorbidity_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_comorbidity_info.manual_pid');
        $this->db->where('tbl_comorbidity_info.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_comorbidity_info.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_protocol_byCycle_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_protocol_cycle.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_protocol_cycle');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_protocol_cycle.manual_pid');
        //$this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_main.custom_chemotherapy_regmine_id');
        $this->db->where('tbl_protocol_cycle.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_protocol_cycle.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_by_patientAdvice_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_advice.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_advice.manual_pid');
        $this->db->where('tbl_advice.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_advice.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_by_patientExtraComplaint_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_patient_history_info.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_patient_history_info.manual_pid');
        //  $this->db->join('tbl_chief_complain_name','tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        $this->db->where('tbl_patient_history_info.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_patient_history_info.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_by_prescription_adviceinfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_investigation_name.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_investigation_name');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_investigation_name.manual_pid');
        $this->db->where('tbl_investigation_name.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_investigation_name.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_radiologyreport_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_radiology_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_radiology_report.manual_pid');
        $this->db->where('tbl_radiology_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_radiology_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_othersreport_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_others_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_others_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_others_report.manual_pid');
        $this->db->where('tbl_others_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_others_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_stool_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_stool_re.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_stool_re.manual_pid');
        $this->db->where('tbl_stool_re.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_stool_re.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_urine_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_urine_re.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_urine_re.manual_pid');
        $this->db->where('tbl_urine_re.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_urine_re.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_cytogenetic_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_cytogenetic_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_report');
        $this->db->join('tbl_cytogenetic_test_name', 'tbl_cytogenetic_test_name.cytogenetic_test_name_id=tbl_cytogenetic_report.cytogenetic_test_name_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_cytogenetic_report.manual_pid');
        //$this->db->order_by('reciv_date', 'asc');
        $this->db->where('tbl_cytogenetic_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_cytogenetic_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_karyotype_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_karyotype_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_karyotype_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_karyotype_report.manual_pid');
        $this->db->where('tbl_karyotype_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_karyotype_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_immunophenotyping_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_immunophenotype_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_report');
        $this->db->join('tbl_immunophenotype_test_name', 'tbl_immunophenotype_test_name.immunphenotype_id=tbl_immunophenotype_report.immunphenotype_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_immunophenotype_report.manual_pid');
        $this->db->where('tbl_immunophenotype_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_immunophenotype_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_cytopathology_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_cytopathology_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_cytopathology_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_cytopathology_report.manual_pid');
        $this->db->where('tbl_cytopathology_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_cytopathology_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_histopathology_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_histopathology_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_histopathology_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_histopathology_report.manual_pid');
        $this->db->where('tbl_histopathology_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_histopathology_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_echo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_echo.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_echo');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_echo.manual_pid');
        $this->db->where('tbl_echo.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_echo.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_bonemarrow_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_bonemarrow.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_bonemarrow');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_bonemarrow.manual_pid');
        $this->db->where('tbl_bonemarrow.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_bonemarrow.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_radiology_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_radiology_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_radiology_report.manual_pid');
        $this->db->where('tbl_radiology_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_radiology_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_usgreport_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_usg.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_usg');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_usg.manual_pid');
        $this->db->where('tbl_usg.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_usg.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_multiple_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_multiple_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_multiple_report');
        $this->db->join('tbl_path_adivce_test_name', 'tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_multiple_report.manual_pid');
        //$this->db->order_by('reciv_date', 'asc');
        $this->db->where('tbl_multiple_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_multiple_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_haematology_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_haematology_report.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_haematology_report.manual_pid');
        $this->db->where('tbl_haematology_report.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_haematology_report.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_adviceinfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_advice.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_advice.manual_pid');
        $this->db->where('tbl_advice.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_advice.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_investigation_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_investigation_name.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_investigation_name');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_investigation_name.manual_pid');
        $this->db->where('tbl_investigation_name.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_investigation_name.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function adviceinfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_advice.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_advice.manual_pid');
        $this->db->where('tbl_advice.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_advice.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_protocol_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_chemotherapy_regimen_main.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_main');
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_main.custom_chemotherapy_regmine_id');
        // $this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_chemotherapy_regimen_main.manual_pid');
        $this->db->where('tbl_chemotherapy_regimen_main.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_chemotherapy_regimen_main.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_drugInfo_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "prescription_ajax.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_doses', 'tbl_doses.dose_id=prescription_ajax.dose_id');
        $this->db->join('tbl_dose_schedule', 'tbl_dose_schedule.dose_schedule_id=prescription_ajax.dose_schedule_id');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=prescription_ajax.manual_pid');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('prescription_ajax.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_diagnosis_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_diagnosis.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->join('tbl_add_new_diagnosis_category_name', 'tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id');
        // $this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_diagnosis.manual_pid');
        $this->db->where('tbl_diagnosis.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_diagnosis.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_physicalfindingsValue_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_physical_findings.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->join('tbl_add_custom_physical_findings', 'tbl_add_custom_physical_findings.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_physical_findings.manual_pid');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_physical_findings.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_physicalfindings_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_physical_findings.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_physical_findings.manual_pid');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_physical_findings.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_personalhistory_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_personal_history_info.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_personal_history_info');
        $this->db->join('tbl_personal_history', 'tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_personal_history_info.manual_pid');
        $this->db->where('tbl_personal_history_info.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_personal_history_info.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_familyhistory_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_family_history.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_family_history');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_family_history.manual_pid');
        //$this->db->join('tbl_personal_history','tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $this->db->where('tbl_family_history.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_family_history.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_presentingComplaint_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_patient_history_info.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_patient_history_info');
        $this->db->join('tbl_chief_complain_name', 'tbl_chief_complain_name.cc_name_id=tbl_patient_history_info.cc_name_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=tbl_patient_history_info.manual_pid');
        $this->db->where('tbl_patient_history_info.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_patient_history_info.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_dosesuggestion_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "prescription_ajax.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_dose_suggestion', 'tbl_dose_suggestion.doseSuggestion_id=prescription_ajax.doseSuggestion_id');
        //$this->db->join('tbl_visit_counting','tbl_visit_counting.manual_pid=prescription_ajax.manual_pid');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('prescription_ajax.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_byprescription_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "prescription_ajax.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=prescription_ajax.manual_pid');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('prescription_ajax.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_drugsearch_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "prescription_ajax.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->join('tbl_visit_counting', 'tbl_visit_counting.manual_pid=prescription_ajax.manual_pid');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('prescription_ajax.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_prescription_ajax_table_by_search_visitingno_all_view($manual_pid, $visitno1, $visitno2) {
        $visitrange = "tbl_visit_counting.visiting_no BETWEEN '$visitno1' AND '$visitno2'";
        $this->db->select('*');
        $this->db->from('tbl_visit_counting');
        $this->db->where('tbl_visit_counting.manual_pid', $manual_pid);
        $this->db->where($visitrange);
        $this->db->order_by('tbl_visit_counting.visiting_no');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    // end revisit preview all function

    public function revisit_data_familyhistory($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_family_history');
        //$this->db->join('tbl_personal_history','tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $this->db->where('tbl_family_history.manual_pid', $manual_pid);
        $this->db->where('tbl_family_history.visiting_no', $visiting_no);
        $this->db->where('tbl_family_history.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_physicalfindings($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $this->db->where('tbl_physical_findings.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_physicalfindings_value($patient_id, $visiting_no) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.patient_id', $patient_id);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_physicalfindingsdata_revisit($patient_id, $visiting_no) {

        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.patient_id', $patient_id);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_physicalfindings_view($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $this->db->where('tbl_physical_findings.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_physicalfindingsdata($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $this->db->where('tbl_physical_findings.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function revisit_data_physicalfindingsInfo($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $this->db->where('tbl_physical_findings.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_physicalfindingsValue($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->join('tbl_add_custom_physical_findings_value', 'tbl_add_custom_physical_findings_value.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->join('tbl_add_custom_physical_findings', 'tbl_add_custom_physical_findings.custom_phy_findings_id=tbl_physical_findings.custom_phy_findings_id');
        $this->db->where('tbl_physical_findings.manual_pid', $manual_pid);
        $this->db->where('tbl_physical_findings.visiting_no', $visiting_no);
        $this->db->where('tbl_physical_findings.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function adviceinfo($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_advice');
        $this->db->join('tbl_add_advice_name', 'tbl_add_advice_name.add_advice_id=tbl_advice.add_advice_id');
        $this->db->where('tbl_advice.manual_pid', $manual_pid);
        $this->db->where('tbl_advice.visiting_no', $visiting_no);
        $this->db->where('tbl_advice.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_investigation($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_investigation_name');
        $this->db->where('tbl_investigation_name.manual_pid', $manual_pid);
        $this->db->where('tbl_investigation_name.visiting_no', $visiting_no);
        $this->db->where('tbl_investigation_name.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_usgreport($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_usg');
        $this->db->where('tbl_usg.manual_pid', $manual_pid);
        $this->db->where('tbl_usg.visiting_no', $visiting_no);
        $this->db->where('tbl_usg.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_multiple($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_multiple_report');
        $this->db->join('tbl_path_adivce_test_name', 'tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id');
        $this->db->order_by('reciv_date', 'asc');
        $this->db->where('tbl_multiple_report.manual_pid', $manual_pid);
        $this->db->where('tbl_multiple_report.visiting_no', $visiting_no);
        $this->db->where('tbl_multiple_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_cytogenetic($manual_pid, $visiting_no, $current_date) {

        $this->db->select('*');
        $this->db->from('tbl_cytogenetic_report');
        $this->db->join('tbl_cytogenetic_test_name', 'tbl_cytogenetic_test_name.cytogenetic_test_name_id=tbl_cytogenetic_report.cytogenetic_test_name_id');
        //$this->db->order_by('reciv_date', 'asc');
        $this->db->where('tbl_cytogenetic_report.manual_pid', $manual_pid);
        $this->db->where('tbl_cytogenetic_report.visiting_no', $visiting_no);
        $this->db->where('tbl_cytogenetic_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_haematology($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_haematology_report');
        $this->db->where('tbl_haematology_report.manual_pid', $manual_pid);
        $this->db->where('tbl_haematology_report.visiting_no', $visiting_no);
        $this->db->where('tbl_haematology_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_urine($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_urine_re');
        $this->db->where('tbl_urine_re.manual_pid', $manual_pid);
        $this->db->where('tbl_urine_re.visiting_no', $visiting_no);
        $this->db->where('tbl_urine_re.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_stool($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_stool_re');
        $this->db->where('tbl_stool_re.manual_pid', $manual_pid);
        $this->db->where('tbl_stool_re.visiting_no', $visiting_no);
        $this->db->where('tbl_stool_re.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_othersreport($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_others_report');
        $this->db->where('tbl_others_report.manual_pid', $manual_pid);
        $this->db->where('tbl_others_report.visiting_no', $visiting_no);
        $this->db->where('tbl_others_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_radiologyreport($manual_pid, $visiting_no, $current_date) {

        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        $this->db->where('tbl_radiology_report.manual_pid', $manual_pid);
        $this->db->where('tbl_radiology_report.visiting_no', $visiting_no);
        $this->db->where('tbl_radiology_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_radiology($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_radiology_report');
        $this->db->where('tbl_radiology_report.manual_pid', $manual_pid);
        $this->db->where('tbl_radiology_report.visiting_no', $visiting_no);
        $this->db->where('tbl_radiology_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_bonemarrow($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_bonemarrow');
        $this->db->where('tbl_bonemarrow.manual_pid', $manual_pid);
        $this->db->where('tbl_bonemarrow.visiting_no', $visiting_no);
        $this->db->where('tbl_bonemarrow.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_echo($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_echo');
        $this->db->where('tbl_echo.manual_pid', $manual_pid);
        $this->db->where('tbl_echo.visiting_no', $visiting_no);
        $this->db->where('tbl_echo.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_histopathology($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_histopathology_report');
        $this->db->where('tbl_histopathology_report.manual_pid', $manual_pid);
        $this->db->where('tbl_histopathology_report.visiting_no', $visiting_no);
        $this->db->where('tbl_histopathology_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_cytopathology($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_cytopathology_report');
        $this->db->where('tbl_cytopathology_report.manual_pid', $manual_pid);
        $this->db->where('tbl_cytopathology_report.visiting_no', $visiting_no);
        $this->db->where('tbl_cytopathology_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_immunophenotyping($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_immunophenotype_report');
        $this->db->join('tbl_immunophenotype_test_name', 'tbl_immunophenotype_test_name.immunphenotype_id=tbl_immunophenotype_report.immunphenotype_id');
        $this->db->where('tbl_immunophenotype_report.manual_pid', $manual_pid);
        $this->db->where('tbl_immunophenotype_report.visiting_no', $visiting_no);
        $this->db->where('tbl_immunophenotype_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_karyotype($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_karyotype_report');
        $this->db->where('tbl_karyotype_report.manual_pid', $manual_pid);
        $this->db->where('tbl_karyotype_report.visiting_no', $visiting_no);
        $this->db->where('tbl_karyotype_report.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_diagnosis($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->join('tbl_add_new_diagnosis_category_name', 'tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('tbl_diagnosis.visiting_no', $visiting_no);
        $this->db->where('tbl_diagnosis.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_protocol($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_main');
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_main.custom_chemotherapy_regmine_id');
        $this->db->where('tbl_chemotherapy_regimen_main.manual_pid', $manual_pid);
        $this->db->where('tbl_chemotherapy_regimen_main.visiting_no', $visiting_no);
        $this->db->where('tbl_chemotherapy_regimen_main.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_protocol_byCycle($manual_pid, $visiting_no, $current_date) {

        $this->db->select('*');
        $this->db->from('tbl_protocol_cycle');
        //$this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_main.custom_chemotherapy_regmine_id');
        $this->db->where('tbl_protocol_cycle.manual_pid', $manual_pid);
        $this->db->where('tbl_protocol_cycle.visiting_no', $visiting_no);
        $this->db->where('tbl_protocol_cycle.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_byprescription($manual_pid, $visiting_no, $current_date) {

        $this->db->select('*');
        $this->db->from('prescription_ajax');
        $this->db->where('prescription_ajax.manual_pid', $manual_pid);
        $this->db->where('prescription_ajax.visiting_no', $visiting_no);
        $this->db->where('prescription_ajax.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_comorbidity_info');
        $this->db->join('tbl_comorbidity', 'tbl_comorbidity.comorbidity_id=tbl_comorbidity_info.comorbidity_id');
        $this->db->where('tbl_comorbidity_info.manual_pid', $manual_pid);
        $this->db->where('tbl_comorbidity_info.visiting_no', $visiting_no);
        $this->db->where('tbl_comorbidity_info.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_presentingcomorbidity_all_view($manual_pid) {
        $this->db->select('*');
        $this->db->from('tbl_comorbidity_info');
        $this->db->join('tbl_comorbidity', 'tbl_comorbidity.comorbidity_id=tbl_comorbidity_info.comorbidity_id');
        $this->db->where('tbl_comorbidity_info.manual_pid', $manual_pid);
        $this->db->where('tbl_comorbidity_info.visiting_no', $visiting_no);
        $this->db->where('tbl_comorbidity_info.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisit_data_personalhistory($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_personal_history_info');
        $this->db->join('tbl_personal_history', 'tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $this->db->where('tbl_personal_history_info.manual_pid', $manual_pid);
        $this->db->where('tbl_personal_history_info.visiting_no', $visiting_no);
        $this->db->where('tbl_personal_history_info.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function personal_family_history_by_search($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_family_history');
        //$this->db->join('tbl_personal_history', 'tbl_personal_history.personal_id=tbl_personal_history_info.personal_id');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('tbl_family_history.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function diagnosis_by_search($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        $this->db->join('tbl_add_new_diagnosis_category_name', 'tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function chemotherapyRegimenInfo_by_search($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_chemotherapy_regimen_main');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('current_date', $current_date);
        //  $this->db->or_where('tbl_chemotherapy_regimen_main.manual_pid', $patient_id);
        $this->db->join('tbl_add_custom_chemotherapy_regimen', 'tbl_add_custom_chemotherapy_regimen.custom_chemotherapy_regmine_id=tbl_chemotherapy_regimen_main.custom_chemotherapy_regmine_id');
        //$this->db->join('tbl_chemotherapy_regimen_value','tbl_chemotherapy_regimen_value.chemotherapy_regimen_value_id=tbl_chemotherapy_regimen_main.chemotherapy_regimen_value_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date) {
        $this->db->select('*');
        $this->db->from('tbl_physical_findings_multiple_data');
        $this->db->join('tbl_add_custom_physical_findings', 'tbl_add_custom_physical_findings.custom_phy_findings_id=tbl_physical_findings_multiple_data.custom_phy_findings_id');
        $this->db->where('manual_pid', $manual_pid);
        $this->db->where('visiting_no', $visiting_no);
        $this->db->where('tbl_physical_findings_multiple_data.current_date', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function testInformation($path_test_group_id) {
        $this->db->select('*');
        $this->db->from('tbl_path_adivce_test_name');
        $this->db->where('path_test_group_id', $path_test_group_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function revisitInformation($patientid) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patientid', $patientid);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function call_patient_name($manual_pid) {
        $this->db->select('patient_name');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('manual_pid', $manual_pid);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function search_by_patient_id($manual_pid) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('manual_pid', $manual_pid);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function search_betweenage($from_age, $to_age) {

        $betweenage = "BETWEEN LEFT(age,2)='$from_age' AND LEFT(age,2)='$to_age'";
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where($betweenage);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_by_patient_name_search($patient_name) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_name', $patient_name);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_by_patient_name_searchName($patient_name) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_name', $patient_name);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_by_patient_name($patient_name) {

        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->like('patient_name', $patient_name);
        //$this->db->where('patient_name',$patient_name);
        $this->db->order_by('patient_name', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_by_patient_name_searching($patientid) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('patient_id', $patientid);
        //$this->db->where('patient_name',$patient_name);
        //$this->db->order_by('patient_name', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function call_patient_age($manual_pid) {
        $this->db->select('age');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('manual_pid', $manual_pid);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function call_patient_sex($manual_pid) {
        $this->db->select('sex');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('manual_pid', $manual_pid);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function pathological_group_testInfo() {
        $this->db->select('*');
        $this->db->from('tbl_path_advice_group_name');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function view_search_customized_phycialfindings_by_info() {
        $this->db->select('*');
        $this->db->from('tbl_add_custom_physical_findings');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function save_prescription_ajax_investigation($data, $test_name) {

        foreach ($test_name as $advice) {

            $this->db->set('user_id', $data['user_id']);
            $this->db->set('patient_id', $data['patient_id']);
            $this->db->set('manual_pid', $data['manual_pid']);
            $this->db->set('visiting_no', $data['visiting_no']);
            $this->db->set('current_date', $data['current_date']);
            $this->db->set('path_test_group_id', $data['path_test_group_id']);
            //$this->db->set('current_date', $data['current_date']);
            $this->db->set('test_name', $advice);
            $this->db->insert('tbl_investigation_name');
        }
    }

    public function save_prescription_ajax_investigation_autocompleteinfo($data) {
        $this->db->insert('tbl_investigation_name', $data);
    }

    public function revisitdate_range($date_from = NULL, $date_to = NULL, $patientid = NULL) {

        //tbl_prescription_patient_info
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        if ($patientid != NULL) {
            $sql = "SELECT prescription_ajax.patient_id,tbl_prescription_patient_info.patient_name,prescription_ajax.manual_pid,prescription_ajax.visiting_no,prescription_ajax.current_date FROM prescription_ajax INNER JOIN tbl_prescription_patient_info ON tbl_prescription_patient_info.patient_id=prescription_ajax.patient_id WHERE prescription_ajax.patient_id=$patientid GROUP BY prescription_ajax.visiting_no";
            $result = $this->db->query($sql);
            return $result->result();
        } else {
            //$sql = "SELECT prescription_ajax.patient_id,prescription_ajax.visiting_no,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.visiting_no,prescription_ajax.date FROM prescription_ajax INNER JOIN tbl_prescription_patient_info ON tbl_prescription_patient_info.patient_id=prescription_ajax.patient_id WHERE tbl_prescription_patient_info.current_date BETWEEN '$starting_date' AND '$ending_date'";
            $sql = "SELECT prescription_ajax.patient_id,tbl_prescription_patient_info.patient_name,prescription_ajax.manual_pid,prescription_ajax.visiting_no,prescription_ajax.current_date FROM prescription_ajax INNER JOIN tbl_prescription_patient_info ON tbl_prescription_patient_info.patient_id=prescription_ajax.patient_id WHERE prescription_ajax.current_date BETWEEN '$starting_date' AND '$ending_date'";
            $result = $this->db->query($sql);
            return $result->result();
        }
    }

    public function revisitdate_range_patientifo($date_from, $date_to, $patientid) {

        //tbl_prescription_patient_info
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        if ($patientid != NULL) {
            $sql = "SELECT * FROM tbl_prescription_patient_info WHERE tbl_prescription_patient_info.patient_id=$patientid";
            $result = $this->db->query($sql);
            return $result->result();
        } else {
            //$sql = "SELECT prescription_ajax.patient_id,prescription_ajax.visiting_no,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.visiting_no,prescription_ajax.date FROM prescription_ajax INNER JOIN tbl_prescription_patient_info ON tbl_prescription_patient_info.patient_id=prescription_ajax.patient_id WHERE tbl_prescription_patient_info.current_date BETWEEN '$starting_date' AND '$ending_date'";
            $sql = "SELECT * FROM tbl_prescription_patient_info WHERE tbl_prescription_patient_info.current_date BETWEEN '$starting_date' AND '$ending_date'";
            $result = $this->db->query($sql);
            return $result->result();
        }
    }

    public function revisitdate_range_manual_pid($date_from = NULL, $date_to = NULL, $manual_pid = NULL) {

        //tbl_prescription_patient_info
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));


        if ($manual_pid != NULL) {
            $sql = "SELECT * FROM tbl_visit_counting WHERE tbl_visit_counting.manual_pid='$manual_pid'";
            $result = $this->db->query($sql);
            return $result->result();
        }
    }

    public function revisitdate_range_manual_pidnformation($manual_pid) {
        if ($manual_pid != NULL) {
            $sql = "SELECT * FROM tbl_visit_counting WHERE tbl_visit_counting.manual_pid='$manual_pid'";
            $result = $this->db->query($sql);
            return $result->result();
        }
    }

    public function revisitdate_range_manual_pid_pname($date_from = NULL, $date_to = NULL, $manual_pid = NULL) {

        //tbl_prescription_patient_info
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));


        if ($manual_pid != NULL) {
            $sql = "SELECT * FROM tbl_visit_counting WHERE tbl_visit_counting.manual_pid='$manual_pid'";
            $result = $this->db->query($sql);
            return $result->row();
        }
    }

    public function revisitdate_angeInfo($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //$sql="SELECT * FROM tbl_prescription_patient_info WHERE current_date BETWEEN '$starting_date' AND '$ending_date' AND patient_id=$patientid";
        $sql = "SELECT * FROM tbl_prescription_patient_info WHERE current_date BETWEEN '$starting_date' AND '$ending_date'";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function selectgroupbyID($cc_group_id) {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_group_name');
        $this->db->where('cc_group_id', $cc_group_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function complaint_by_groupID($date_from = Null, $date_to = Null, $cc_name_id = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        // echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_patient_history_info ON tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id WHERE cc_name_id='$cc_name_id' AND tbl_patient_history_info.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_patient_history_info ON tbl_patient_history_info.patient_id=tbl_prescription_patient_info.patient_id WHERE cc_name_id='$cc_name_id' AND current_date BETWEEN '$starting_date' AND '$ending_date' ";
        }
        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        return $result->result();

        //  
    }

    public function haematology_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_haematology_report.rbc,tbl_haematology_report.ct_sec,tbl_haematology_report.ct_min,tbl_haematology_report.bt_sec,tbl_haematology_report.bt_min,tbl_haematology_report.pbf,tbl_haematology_report.mp,tbl_haematology_report.rdw,tbl_haematology_report.mchc,tbl_haematology_report.mch,tbl_haematology_report.mcv,tbl_haematology_report.hct,tbl_haematology_report.para_five_rpt,tbl_haematology_report.para_four_rpt,tbl_haematology_report.para_three_rpt,tbl_haematology_report.para_two_rpt,tbl_haematology_report.para_one_rpt,tbl_haematology_report.parameter_five,tbl_haematology_report.parameter_four,tbl_haematology_report.parameter_three,tbl_haematology_report.parameter_two,tbl_haematology_report.parameter_one,tbl_haematology_report.basophil,tbl_haematology_report.monocytes,tbl_haematology_report.eosinophils,tbl_haematology_report.lymphocytes,tbl_haematology_report.neutrophils,tbl_haematology_report.rc,tbl_haematology_report.ce,tbl_haematology_report.wbc,tbl_haematology_report.esr,tbl_haematology_report.hb,tbl_haematology_report.wbc,tbl_haematology_report.platelete,tbl_haematology_report.manual_pid,tbl_haematology_report.test_id,tbl_haematology_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_haematology_report ON tbl_haematology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_haematology_report.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ORDER BY current_date DESC";
        } else {
            $sql = "SELECT tbl_haematology_report.rbc,tbl_haematology_report.ct_sec,tbl_haematology_report.ct_min,tbl_haematology_report.bt_sec,tbl_haematology_report.bt_min,tbl_haematology_report.pbf,tbl_haematology_report.mp,tbl_haematology_report.rdw,tbl_haematology_report.mchc,tbl_haematology_report.mch,tbl_haematology_report.mcv,tbl_haematology_report.hct,tbl_haematology_report.para_five_rpt,tbl_haematology_report.para_four_rpt,tbl_haematology_report.para_three_rpt,tbl_haematology_report.para_two_rpt,tbl_haematology_report.para_one_rpt,tbl_haematology_report.parameter_five,tbl_haematology_report.parameter_four,tbl_haematology_report.parameter_three,tbl_haematology_report.parameter_two,tbl_haematology_report.parameter_one,tbl_haematology_report.basophil,tbl_haematology_report.monocytes,tbl_haematology_report.eosinophils,tbl_haematology_report.lymphocytes,tbl_haematology_report.neutrophils,tbl_haematology_report.rc,tbl_haematology_report.ce,tbl_haematology_report.wbc,tbl_haematology_report.esr,tbl_haematology_report.hb,tbl_haematology_report.wbc,tbl_haematology_report.platelete,tbl_haematology_report.manual_pid,tbl_haematology_report.test_id,tbl_haematology_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_haematology_report ON tbl_haematology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ORDER BY current_date DESC ";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function comorbidity_by_groupID($date_from = Null, $date_to = Null, $comorbidity_id = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        // echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_comorbidity_info ON tbl_comorbidity_info.patient_id=tbl_prescription_patient_info.patient_id WHERE comorbidity_id='$comorbidity_id' OR tbl_comorbidity_info.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
        } else {
            $sql = "SELECT tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_comorbidity_info ON tbl_comorbidity_info.patient_id=tbl_prescription_patient_info.patient_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date'";
        }

        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        return $result->result();
        //  
    }

    public function diagnosis_by_ID($date_from = Null, $date_to = Null, $diagnosis_category_id = Null, $manual_pid = Null) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_add_new_diagnosis_category_name.customized_diagnosis_category_name,tbl_diagnosis.diagnosis,tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_diagnosis ON tbl_diagnosis.patient_id=tbl_prescription_patient_info.patient_id INNER JOIN tbl_add_new_diagnosis_category_name ON tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id WHERE tbl_diagnosis.diagnosis_category_id='$diagnosis_category_id' OR tbl_diagnosis.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
        } else {
            $sql = "SELECT tbl_add_new_diagnosis_category_name.customized_diagnosis_category_name,tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_diagnosis ON tbl_diagnosis.patient_id=tbl_prescription_patient_info.patient_id INNER JOIN tbl_add_new_diagnosis_category_name ON tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_add_new_diagnosis_category_name.diagnosis_category_id WHERE tbl_diagnosis.diagnosis_category_id='$diagnosis_category_id' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
        }

        //$sql = "SELECT tbl_diagnosis.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_diagnosis ON tbl_diagnosis.patient_id=tbl_prescription_patient_info.patient_id WHERE diagnosis_category_id='$diagnosis_category_id' AND current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function family_history_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_family_history.manual_pid,tbl_family_history.familyhistory_value,tbl_family_history.manual_pid,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_family_history ON tbl_family_history.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_family_history.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
        } else {
            $sql = "SELECT tbl_family_history.manual_pid,tbl_family_history.familyhistory_value,tbl_family_history.manual_pid,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_family_history ON tbl_family_history.patient_id=tbl_prescription_patient_info.patient_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date'";
        }

        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        return $result->result();
    }

    // php ci between searching
    public function patient_infobysex($date_from, $date_to, $sex) {
        $daterange = "tbl_prescription_patient_info.current_date BETWEEN '$date_from' AND '$date_to'";
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('sex', $sex);
        $this->db->where($daterange);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function physicalfindings_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_physical_findings.manual_pid,tbl_physical_findings.weight,tbl_physical_findings.diastolic,tbl_physical_findings.bsa,tbl_physical_findings.height,tbl_physical_findings.systolic,tbl_physical_findings.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_physical_findings ON tbl_physical_findings.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_physical_findings.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
        } else {
            $sql = "SELECT tbl_physical_findings.systolic,tbl_physical_findings.diastolic,tbl_physical_findings.bsa,tbl_physical_findings.manual_pid,tbl_physical_findings.weight,tbl_physical_findings.height,tbl_physical_findings.systolic,tbl_physical_findings.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_physical_findings ON tbl_physical_findings.patient_id=tbl_prescription_patient_info.patient_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date'";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function age_group_by_search($starting_age, $ending_age) {
        // check
        $sql = "SELECT tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,"
                . "tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM "
                . "tbl_prescription_patient_info"
                . "tbl_prescription_patient_info.age WHERE "
                . "tbl_physical_findings.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
    }

    public function bonemarrow_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_bonemarrow.reviewed_by,tbl_bonemarrow.test_to_follow,tbl_bonemarrow.special_stain,tbl_bonemarrow.others,tbl_bonemarrow.parasites,tbl_bonemarrow.ly_his_pls_cells,tbl_bonemarrow.mega,tbl_bonemarrow.granu,tbl_bonemarrow.ery,tbl_bonemarrow.meratio,tbl_bonemarrow.meratio,tbl_bonemarrow.cellularity_inf,tbl_bonemarrow.stain_used,tbl_bonemarrow.aspiration,tbl_bonemarrow.introudction,tbl_bonemarrow.comment,tbl_bonemarrow.report_description,tbl_bonemarrow.manual_pid,tbl_bonemarrow.test_id,tbl_bonemarrow.reciv_date,tbl_bonemarrow.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_bonemarrow ON tbl_bonemarrow.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_bonemarrow.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_bonemarrow.reviewed_by,tbl_bonemarrow.test_to_follow,tbl_bonemarrow.special_stain,tbl_bonemarrow.others,tbl_bonemarrow.parasites,tbl_bonemarrow.ly_his_pls_cells,tbl_bonemarrow.mega,tbl_bonemarrow.granu,tbl_bonemarrow.ery,tbl_bonemarrow.meratio,tbl_bonemarrow.meratio,tbl_bonemarrow.cellularity_inf,tbl_bonemarrow.stain_used,tbl_bonemarrow.aspiration,tbl_bonemarrow.introudction,tbl_bonemarrow.comment,tbl_bonemarrow.report_description,tbl_bonemarrow.manual_pid,tbl_bonemarrow.test_id,tbl_bonemarrow.reciv_date,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_bonemarrow.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_bonemarrow ON tbl_bonemarrow.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        // $sql = "SELECT tbl_bonemarrow.test_id,tbl_bonemarrow.reciv_date,tbl_bonemarrow.deli_date,tbl_bonemarrow.report_description,tbl_bonemarrow.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_bonemarrow ON tbl_bonemarrow.patient_id=tbl_prescription_patient_info.patient_id AND current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function radiology_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {
        // condition ok
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {

            $sql = "SELECT tbl_radiology_report.test_name,tbl_radiology_report.report_description,tbl_radiology_report.manual_pid,tbl_radiology_report.test_id,tbl_radiology_report.reciv_date,tbl_radiology_report.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_radiology_report ON tbl_radiology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_radiology_report.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_radiology_report.test_name,tbl_radiology_report.report_description,tbl_radiology_report.manual_pid,tbl_radiology_report.test_id,tbl_radiology_report.reciv_date,tbl_radiology_report.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_radiology_report ON tbl_radiology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function usg_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_usg.report_description,tbl_usg.manual_pid,tbl_usg.test_id,tbl_usg.reciv_date,tbl_usg.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_usg ON tbl_usg.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_usg.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_usg.report_description,tbl_usg.manual_pid,tbl_usg.test_id,tbl_usg.reciv_date,tbl_usg.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_usg ON tbl_usg.patient_id=tbl_prescription_patient_info.patient_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function multiple_rpt_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {

            $sql = "SELECT tbl_path_adivce_test_name.test_name,tbl_multiple_report.reciv_date,tbl_multiple_report.path_test_id,tbl_multiple_report.result,tbl_multiple_report.manual_pid,tbl_multiple_report.unit,tbl_multiple_report.reciv_date,tbl_multiple_report.normal_range,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_multiple_report ON tbl_multiple_report.patient_id=tbl_prescription_patient_info.patient_id INNER JOIN tbl_path_adivce_test_name ON tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id WHERE tbl_multiple_report.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_path_adivce_test_name.test_name,tbl_multiple_report.reciv_date,tbl_multiple_report.path_test_id,tbl_multiple_report.result,tbl_multiple_report.manual_pid,tbl_multiple_report.unit,tbl_multiple_report.normal_range,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_multiple_report ON tbl_multiple_report.patient_id=tbl_prescription_patient_info.patient_id INNER JOIN tbl_path_adivce_test_name ON tbl_path_adivce_test_name.path_test_id=tbl_multiple_report.path_test_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        //$sql = "SELECT tbl_radiology_report.test_id,tbl_radiology_report.reciv_date,tbl_radiology_report.deli_date,tbl_radiology_report.report_description,tbl_radiology_report.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_radiology_report ON tbl_radiology_report.patient_id=tbl_prescription_patient_info.patient_id AND current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function urine_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_urine_re.urobili,tbl_urine_re.urate_crys,tbl_urine_re.amr_ph,tbl_urine_re.candida,tbl_urine_re.bacteria,tbl_urine_re.bile_pig,tbl_urine_re.bile_salt,tbl_urine_re.hayline_cast,tbl_urine_re.chyle,tbl_urine_re.sulph_cry,tbl_urine_re.tre_phs,tbl_urine_re.uric_acid,tbl_urine_re.cal_oxa,tbl_urine_re.granuloar,tbl_urine_re.wbc,tbl_urine_re.sperat,tbl_urine_re.pus_cast,tbl_urine_re.mucus,tbl_urine_re.acetone,tbl_urine_re.others,tbl_urine_re.sugur,tbl_urine_re.b_jons_protein,tbl_urine_re.albumin,tbl_urine_re.ex_ph,tbl_urine_re.reaction,tbl_urine_re.spe_grav,tbl_urine_re.sediment,tbl_urine_re.apper,tbl_urine_re.color,tbl_urine_re.quantity,tbl_urine_re.pus_cells,tbl_urine_re.rbcs,tbl_urine_re.ep_cell,tbl_urine_re.manual_pid,tbl_urine_re.test_id,tbl_urine_re.reciv_date,tbl_urine_re.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_urine_re ON tbl_urine_re.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_urine_re.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_urine_re.urobili,tbl_urine_re.urate_crys,tbl_urine_re.amr_ph,tbl_urine_re.candida,tbl_urine_re.bacteria,tbl_urine_re.bile_pig,tbl_urine_re.bile_salt,tbl_urine_re.hayline_cast,tbl_urine_re.chyle,tbl_urine_re.sulph_cry,tbl_urine_re.tre_phs,tbl_urine_re.uric_acid,tbl_urine_re.cal_oxa,tbl_urine_re.granuloar,tbl_urine_re.wbc,tbl_urine_re.sperat,tbl_urine_re.pus_cast,tbl_urine_re.mucus,tbl_urine_re.acetone,tbl_urine_re.others,tbl_urine_re.sugur,tbl_urine_re.b_jons_protein,tbl_urine_re.albumin,tbl_urine_re.ex_ph,tbl_urine_re.reaction,tbl_urine_re.spe_grav,tbl_urine_re.sediment,tbl_urine_re.apper,tbl_urine_re.color,tbl_urine_re.quantity,tbl_urine_re.pus_cells,tbl_urine_re.rbcs,tbl_urine_re.ep_cell,tbl_urine_re.manual_pid,tbl_urine_re.test_id,tbl_urine_re.reciv_date,tbl_urine_re.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_urine_re ON tbl_urine_re.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function stool_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_stool_re.candida,tbl_stool_re.fusifo_bacili,tbl_stool_re.cast,tbl_stool_re.blas_homins,tbl_stool_re.t_hominis,tbl_stool_re.cyst_of_col,tbl_stool_re.cyst_of_giardia,tbl_stool_re.larva_of,tbl_stool_re.troph_giardia,tbl_stool_re.bacteria,tbl_stool_re.cl_crystals,tbl_stool_re.starch_granules,tbl_stool_re.fat_globules,tbl_stool_re.muscle_fibre,tbl_stool_re.macrophages,tbl_stool_re.rbc,tbl_stool_re.puss_cell,tbl_stool_re.epithe_cells,tbl_stool_re.vege_cell,tbl_stool_re.b_jons_protein,tbl_stool_re.bilirubin,tbl_stool_re.ova_al,tbl_stool_re.fat,tbl_stool_re.rs,tbl_stool_re.reaction,tbl_stool_re.obt,tbl_stool_re.helminth,tbl_stool_re.blood,tbl_stool_re.mucus,tbl_stool_re.ordor,tbl_stool_re.un_fp,tbl_stool_re.str_and_sterobili,tbl_stool_re.color,tbl_stool_re.consistency,tbl_stool_re.quantity,tbl_stool_re.sugur,tbl_stool_re.material,tbl_stool_re.manual_pid,tbl_stool_re.test_id,tbl_stool_re.reciv_date,tbl_stool_re.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_stool_re ON tbl_stool_re.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_stool_re.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_stool_re.candida,tbl_stool_re.fusifo_bacili,tbl_stool_re.cast,tbl_stool_re.blas_homins,tbl_stool_re.t_hominis,tbl_stool_re.cyst_of_col,tbl_stool_re.cyst_of_giardia,tbl_stool_re.larva_of,tbl_stool_re.troph_giardia,tbl_stool_re.bacteria,tbl_stool_re.cl_crystals,tbl_stool_re.starch_granules,tbl_stool_re.fat_globules,tbl_stool_re.muscle_fibre,tbl_stool_re.macrophages,tbl_stool_re.rbc,tbl_stool_re.puss_cell,tbl_stool_re.epithe_cells,tbl_stool_re.vege_cell,tbl_stool_re.b_jons_protein,tbl_stool_re.bilirubin,tbl_stool_re.ova_al,tbl_stool_re.fat,tbl_stool_re.rs,tbl_stool_re.reaction,tbl_stool_re.obt,tbl_stool_re.helminth,tbl_stool_re.blood,tbl_stool_re.mucus,tbl_stool_re.ordor,tbl_stool_re.un_fp,tbl_stool_re.str_and_sterobili,tbl_stool_re.color,tbl_stool_re.consistency,tbl_stool_re.quantity,tbl_stool_re.sugur,tbl_stool_re.material,tbl_stool_re.manual_pid,tbl_stool_re.test_id,tbl_stool_re.reciv_date,tbl_stool_re.deli_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_stool_re ON tbl_stool_re.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function cytogenetic_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_cytogenetic_test_name.cytogenetic_test_name,tbl_cytogenetic_report.result,tbl_cytogenetic_report.manual_pid,tbl_cytogenetic_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_cytogenetic_report ON tbl_cytogenetic_report.patient_id=tbl_prescription_patient_info.patient_id INNER JOIN tbl_cytogenetic_test_name ON tbl_cytogenetic_test_name.cytogenetic_test_name_id=tbl_cytogenetic_report.cytogenetic_test_name_id WHERE tbl_cytogenetic_report.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_cytogenetic_test_name.cytogenetic_test_name,tbl_cytogenetic_report.result,tbl_cytogenetic_report.manual_pid,tbl_cytogenetic_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_cytogenetic_report ON tbl_cytogenetic_report.patient_id=tbl_prescription_patient_info.patient_id INNER JOIN tbl_cytogenetic_test_name ON tbl_cytogenetic_test_name.cytogenetic_test_name_id=tbl_cytogenetic_report.cytogenetic_test_name_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function karyotype_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_karyotype_report.report_description,tbl_karyotype_report.manual_pid,tbl_karyotype_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_karyotype_report ON tbl_karyotype_report.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_karyotype_report.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_karyotype_report.report_description,tbl_karyotype_report.manual_pid,tbl_karyotype_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_karyotype_report ON tbl_karyotype_report.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function immunophenotyping_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_immunophenotype_test_name.immunophenotype_test_name,tbl_immunophenotype_report.description,tbl_immunophenotype_report.value,tbl_immunophenotype_report.cell_line,tbl_immunophenotype_report.manual_pid,tbl_immunophenotype_report.cell_line,tbl_immunophenotype_report.value,tbl_immunophenotype_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info "
                    . "INNER JOIN tbl_immunophenotype_report ON tbl_immunophenotype_report.patient_id=tbl_prescription_patient_info.patient_id "
                    . "INNER JOIN tbl_immunophenotype_test_name ON tbl_immunophenotype_test_name.immunphenotype_id=tbl_immunophenotype_report.immunphenotype_id "
                    . "WHERE tbl_immunophenotype_report.manual_pid='$manual_pid' AND tbl_immunophenotype_report.reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_immunophenotype_test_name.immunophenotype_test_name,tbl_immunophenotype_report.description,tbl_immunophenotype_report.value,tbl_immunophenotype_report.cell_line,tbl_immunophenotype_report.manual_pid,tbl_immunophenotype_report.cell_line,tbl_immunophenotype_report.value,tbl_immunophenotype_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info "
                    . "INNER JOIN tbl_immunophenotype_report ON tbl_immunophenotype_report.patient_id=tbl_prescription_patient_info.patient_id "
                    . "INNER JOIN tbl_immunophenotype_test_name ON tbl_immunophenotype_test_name.immunphenotype_id=tbl_immunophenotype_report.immunphenotype_id "
                    . "WHERE tbl_immunophenotype_report.reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function echo_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_echo.report_description,tbl_echo.manual_pid,tbl_echo.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_echo ON tbl_echo.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_echo.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_echo.report_description,tbl_echo.manual_pid,tbl_echo.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_echo ON tbl_echo.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function cytopathology_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_cytopathology_report.report_description,tbl_cytopathology_report.manual_pid,tbl_cytopathology_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_cytopathology_report ON tbl_cytopathology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_cytopathology_report.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_cytopathology_report.report_description,tbl_cytopathology_report.manual_pid,tbl_cytopathology_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_cytopathology_report ON tbl_cytopathology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date' ";
        }

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function histopathology_by_ID($date_from = Null, $date_to = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_histopathology_report.report_description,tbl_histopathology_report.manual_pid,tbl_histopathology_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_histopathology_report ON tbl_histopathology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE tbl_histopathology_report.manual_pid='$manual_pid' AND reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        } else {
            $sql = "SELECT tbl_histopathology_report.report_description,tbl_histopathology_report.manual_pid,tbl_histopathology_report.reciv_date,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.age,tbl_prescription_patient_info.sex,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_histopathology_report ON tbl_histopathology_report.patient_id=tbl_prescription_patient_info.patient_id WHERE reciv_date BETWEEN '$starting_date' AND '$ending_date' ";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function patient_searcing_by_date($date_from, $date_to) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        $sql = "SELECT tbl_add_new_diagnosis_category_name.customized_diagnosis_category_name,"
                . "tbl_prescription_patient_info.address,tbl_prescription_patient_info.age,"
                . "tbl_prescription_patient_info.sex,tbl_prescription_patient_info.manual_pid,"
                . "tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.patient_name,"
                . "tbl_prescription_patient_info.sex,tbl_prescription_patient_info.age,"
                . "tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.cell_number,"
                . "tbl_prescription_patient_info.visiting_no FROM tbl_prescription_patient_info "
                . "INNER JOIN tbl_diagnosis ON tbl_diagnosis.manual_pid=tbl_prescription_patient_info.manual_pid "
                . "INNER JOIN tbl_add_new_diagnosis_category_name ON tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id "
                //. "INNER JOIN tbl_patient_remarks ON tbl_patient_remarks.manual_pid=tbl_prescription_patient_info.manual_pid "
                //. "INNER JOIN tbl_remarks ON tbl_patient_remarks.remarks_id=tbl_remarks.remarks_id "
                . "WHERE tbl_prescription_patient_info.current_date BETWEEN '$starting_date' AND '$ending_date' "
                . "ORDER BY tbl_diagnosis.diagnosis_category_id DESC";

        $result = $this->db->query($sql);
        return $result->result();
    }

    public function patient_searcing_by_date_remarks($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));

        $sql = "SELECT tbl_remarks.remarks,tbl_add_new_diagnosis_category_name.customized_diagnosis_category_name,"
                . "tbl_prescription_patient_info.address,tbl_prescription_patient_info.age,"
                . "tbl_prescription_patient_info.sex,tbl_prescription_patient_info.manual_pid,"
                . "tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.patient_name,"
                . "tbl_prescription_patient_info.sex,tbl_prescription_patient_info.age,"
                . "tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.cell_number,"
                . "tbl_prescription_patient_info.visiting_no FROM tbl_prescription_patient_info "
                . "INNER JOIN tbl_diagnosis ON tbl_diagnosis.manual_pid=tbl_prescription_patient_info.manual_pid "
                . "INNER JOIN tbl_add_new_diagnosis_category_name ON tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id "
                . "INNER JOIN tbl_patient_remarks ON tbl_patient_remarks.manual_pid=tbl_prescription_patient_info.manual_pid "
                . "INNER JOIN tbl_remarks ON tbl_patient_remarks.remarks_id=tbl_remarks.remarks_id "
                . "WHERE tbl_prescription_patient_info.current_date BETWEEN '$starting_date' AND '$ending_date' "
                . "ORDER BY tbl_diagnosis.diagnosis_category_id DESC";
        $result = $this->db->query($sql);

        return $result->result();
    }

    public function personal_history_by_ID($date_from = Null, $date_to = Null, $personal_id = Null, $manual_pid = Null) {
        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        // echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_personal_history_info ON tbl_personal_history_info.patient_id=tbl_prescription_patient_info.patient_id WHERE personal_id='$personal_id' OR tbl_personal_history_info.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        } else {
            $sql = "SELECT tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_personal_history_info ON tbl_personal_history_info.patient_id=tbl_prescription_patient_info.patient_id WHERE current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function protocol_by_groupID($date_from = Null, $date_to = Null, $custom_chemotherapy_regmine_id = Null, $manual_pid = Null) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        // echo $starting_date;
        // exit();DISTINCT
        if ($manual_pid != Null) {
            $sql = "SELECT tbl_chemotherapy_regimen_main.file_upload,tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_chemotherapy_regimen_main ON tbl_chemotherapy_regimen_main.patient_id=tbl_prescription_patient_info.patient_id WHERE custom_chemotherapy_regmine_id='$custom_chemotherapy_regmine_id' AND tbl_chemotherapy_regimen_main.manual_pid='$manual_pid' AND current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        } else {
            $sql = "SELECT tbl_chemotherapy_regimen_main.file_upload,tbl_prescription_patient_info.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_chemotherapy_regimen_main ON tbl_chemotherapy_regimen_main.patient_id=tbl_prescription_patient_info.patient_id WHERE custom_chemotherapy_regmine_id='$custom_chemotherapy_regmine_id' AND current_date BETWEEN '$starting_date' AND '$ending_date'";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function mt_by_ID($date_from, $date_to) {

        $starting_date = Date('Y-m-d', strtotime($date_from));
        $ending_date = Date('Y-m-d', strtotime($date_to));
        //echo $starting_date;
        // exit();DISTINCT
        $sql = "SELECT tbl_cytogenetic_report.result,tbl_cytogenetic_report.sex,tbl_cytogenetic_report.manual_pid,tbl_prescription_patient_info.patient_name,tbl_prescription_patient_info.current_date,tbl_prescription_patient_info.patient_id,tbl_prescription_patient_info.cell_number FROM tbl_prescription_patient_info INNER JOIN tbl_cytogenetic_report ON tbl_cytogenetic_report.patient_id=tbl_prescription_patient_info.patient_id AND current_date BETWEEN '$starting_date' AND '$ending_date' GROUP BY patient_name";
        // $this->db->join('tbl_prescription_patient_info','tbl_prescription_patient_info.patient_id=tbl_patient_history_info.patient_id');
        $result = $this->db->query($sql);
        return $result->result();
    }

    public function select_presenting_complait_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_chief_complain_name');
        $this->db->order_by('complain_name', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_presenting_comorbidity_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_comorbidity');
        $this->db->order_by('comorbidity_name', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_protocol_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_add_custom_chemotherapy_regimen');
        $this->db->order_by('custom_chemotherapy_regmine_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_presenting_personalHistory_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_personal_history');
        $this->db->order_by('personal_history_name', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_familyHistory_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_family_history');
        $this->db->order_by('familyhistory_value', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_sex_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_prescription_patient_info');
        //$this->db->order_by('familyhistory_value', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_physuicalfindings_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_physical_findings');
        $this->db->order_by('physical_examination_id', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_haematology_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_physical_findings');
        $this->db->order_by('physical_examination_id', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_bonemarrow_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_bonemarrow');
        $this->db->order_by('bonemarrow_id', 'desc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_diagnosis_information() {
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('tbl_haematology_report');
        $this->db->order_by('haematology_id', 'asc');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function selectCompalintGroupBy_Id($cc_name_id) {
        $this->db->select('*');
        $this->db->from('tbl_chief_complain_name');
        $this->db->where('cc_name_id', $cc_name_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function selectProtocolGroupBy_Id($custom_chemotherapy_regmine_id) {

        $this->db->select('*');
        $this->db->from('tbl_add_custom_chemotherapy_regimen');
        $this->db->where('custom_chemotherapy_regmine_id', $custom_chemotherapy_regmine_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function selectComorbidityBy_Id($comorbidity_id) {
        $this->db->select('*');
        $this->db->from('tbl_comorbidity');
        $this->db->where('comorbidity_id', $comorbidity_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_patient_sex($sex) {
        $this->db->select('*');
        $this->db->from('tbl_prescription_patient_info');
        $this->db->where('sex', $sex);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function selectPersonalHistoryBy_Id($personal_id) {
        $this->db->select('*');
        $this->db->from('tbl_personal_history');
        $this->db->where('personal_id', $personal_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function selectdiagnosisBy_Id($diagnosis_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_diagnosis');
        $this->db->where('tbl_diagnosis.diagnosis_category_id', $diagnosis_category_id);
        $this->db->join('tbl_add_new_diagnosis_category_name', 'tbl_add_new_diagnosis_category_name.diagnosis_category_id=tbl_diagnosis.diagnosis_category_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function selectfamilyHistoryBy_Id($family_history_id) {
        $this->db->select('*');
        $this->db->from('tbl_family_history');
        $this->db->where('family_history_id', $family_history_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}

?>