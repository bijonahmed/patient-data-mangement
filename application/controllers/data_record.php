<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data_Record extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();

        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            //redirect("login/index", 'refresh');

            $this->load->view('login');
        }

        $this->load->model('data_record_model');
        $this->load->helper('ckeditor');
//$this->load->library('pagination');
        $this->data['ckeditor'] = array(
//ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'resource/ckeditor',
            'config' => array(
                'toolbar' => "Standard Toolbar", //Using the Full toolbar [Full]
                'width' => "800", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
    }

// ------------------------------------------------------------------delete all function----------------------------------------------------
    public function delete_doseName($dose_id) {
        $this->data_record_model->delete_dosename_info($dose_id);
        redirect("welcome/viewdoeseInfo");
    }

    public function delete_v_p_remarks($patient_remarks_id) {
        $this->data_record_model->delete_patient_information_view($patient_remarks_id);
        redirect("welcome/view_remarks_patient_data");
    }

    public function delete_protocol_help($protocol_help_id) {
        $this->data_record_model->delete_protocolhelp_info($protocol_help_id);
        redirect("welcome/view_protocol_help_searching");
    }

    public function delete_diagnosis_category($diagnosis_category_id) {
        $this->data_record_model->delete_diagnosisCategory_info($diagnosis_category_id);
        redirect("welcome/view_diagnosisCategory_Info");
    }

    public function delete_patient_advice_name($add_advice_id) {
        $this->data_record_model->delete_patientadvice_info($add_advice_id);
        redirect("welcome/viewpatientadviceInfo");
    }

    public function delete_diagnosis($diagnosis_id) {
        $this->data_record_model->delete_diagnosis_info($diagnosis_id);
        redirect("welcome/view_diagnosisdata");
    }

    public function delete_dose_schedule($dose_schedule_id) {
        $this->data_record_model->delete_dose_schedule_info($dose_schedule_id);
        redirect("welcome/viewdoes_scheduleName");
    }

    public function delete_complaint_groupname($cc_group_id) {
        $this->data_record_model->delete_cc_group_info($cc_group_id);
        redirect("welcome/view_complaint_group_name_Info");
    }

    public function delete_personalhistory($personal_id) {
        $this->data_record_model->delete_personalhistory_id($personal_id);
        redirect("welcome/viewpesonalhistoryInfo");
    }

    public function delete_generic_name($medicine_generic_id) {
        $this->data_record_model->delete_generic_info($medicine_generic_id);
        redirect("welcome/view_generic_Info");
    }

    public function delete_suggestion_name($doseSuggestion_id) {
        $this->data_record_model->delete_suggestion_info($doseSuggestion_id);
        redirect("welcome/view_suggestion_Info");
    }

    public function delete_new_drug($drug_id) {
        $this->data_record_model->delete_new_drug_info($drug_id);
        redirect("welcome/viewdoes_add_new_drug");
    }

    public function delete_drug_help($dr_help_drug_id) {
        $this->data_record_model->delete_drug_info($dr_help_drug_id);
        redirect("welcome/view_drug_help");
    }

    public function delete_advice_name($path_test_id) {
        $this->data_record_model->delete_test_name_info($path_test_id);
        redirect("welcome/view_advice_name_Info");
    }

    public function delete_physicalFindings_heading($custom_phy_findings_id) {
        $this->data_record_model->delete_phy_fin_heading_info($custom_phy_findings_id);
        redirect("welcome/add_new_physicalfindings");
    }

    public function delete_multiple_report($multiple_report_id) {
        $this->data_record_model->delete_multiplereport_info($multiple_report_id);
        redirect("welcome/biochemistry_report");
    }

    public function delete_complaintName($cc_name_id) {
        $this->data_record_model->delete_complaint_name_delete($cc_name_id);
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/patient_prescription_step_one', $data);
        $this->load->view('home', $data);
        //redirect("welcome/patient_prescription_step_one");
    }

    public function delete_multiple_rpt($multiple_report_id) {

        $this->data_record_model->delete_multiplereport_delete($multiple_report_id);
        redirect("welcome/view_multiple_report");
    }

    public function delete_complaintName_update($cc_name_id) {

        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        //$data = array();
        //$data['user_id'] = $this->session->userdata('user_id');
        //$data['patient_id'] = $result->patient_id;
        //$data['manual_pid'] = $result->manual_pid;
        //$data['visiting_no'] = $visitno;
        $this->data_record_model->delete_complaint_name_delete($cc_name_id);
        // redirect("welcome/patient_prescription_step_one");
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_familyhistory_name($family_history_id) {
        $this->data_record_model->delete_familyhistory_name_delete($family_history_id);
        redirect("welcome/view_family_history_data");
    }

    public function delete_personalHistoryName($personal_histor_id) {
        $this->data_record_model->delete_personal_history_info($personal_histor_id);
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        //$data['patient_history_info'] = $this->data_record_model->revisit_data_presenting_patient_history_info($manual_pid, $visiting_no,$current_date); 
        $data['patient_history_info'] = $this->data_record_model->revisit_data_personalhistory($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/personalHistory', $data);
        $this->load->view('home', $data);


        //redirect("welcome/personalHistorInfo");
    }

    public function delete_familyHistoryName($family_history_id) {


        $this->data_record_model->delete_family_history_info($family_history_id);
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['patient_family_history_info'] = $this->data_record_model->personal_family_history_by_search($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/familyHistory', $data);
        $this->load->view('home', $data);
        //redirect("welcome/familyHistory");
    }

    public function delete_immunophenotype_report($immuno_type_report_id) {
        $this->data_record_model->delete_immunphenotype_info($immuno_type_report_id);
        redirect("welcome/immunophenotyping_report");
    }

    public function delete_cytogenetic_report($cytogenetic_rpt_id) {
        $this->data_record_model->delete_cytogenetic_info($cytogenetic_rpt_id);
        redirect("welcome/cytogenetic_report");
    }

    public function delete_chemotherapyInfo_main($chemotherapy_main_id) {
        $this->data_record_model->delete_chemotherapyRegimen_info_main($chemotherapy_main_id);
        redirect("welcome/chemotherapy_region");
    }

    public function delete_personalHistoryName_update($personal_histor_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        // $result = $this->data_record_model->call_patientid($pid);  


        $this->data_record_model->delete_personal_history_info($personal_histor_id);
        $url = base_url() . 'welcome/personalhistory_by_update/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
        //redirect("welcome/personalHistorInfo");
    }

    public function delete_user_info($user_id) {
        $this->data_record_model->delete_user_info($user_id);
        redirect("welcome/view_new_user_Info");
    }

    public function delete_medicine($prescription_id) {
        $this->data_record_model->delete_prescription_info($prescription_id);
        redirect("welcome/prescription");
    }

    public function delete_comorbidity($comorbidity_id) {
        $this->data_record_model->delete_comorbidity_info($comorbidity_id);
        redirect("welcome/viewComorbidityInfo");
    }

    public function delete_ComorbidityName($comoribdity_info_id) {
        $this->data_record_model->delete_comorbidity_infoprescription($comoribdity_info_id);
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['comorbidityinfo'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/comorbidity', $data);
        $this->load->view('home', $data);



        //redirect("welcome/comorbidityInfo");
    }

    public function delete_remarks($remarks_id) {
        $this->data_record_model->delete_remarksinformation($remarks_id);
        redirect("welcome/view_remarks_Info");
    }

    public function delete_ComorbidityName_update($comoribdity_info_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $this->data_record_model->delete_comorbidity_infoprescription($comoribdity_info_id);
        //redirect("welcome/comorbidity_by_update");
        $url = base_url() . 'welcome/comorbidity_by_update/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_diagnosisinformation_update($diagnosis_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $this->data_record_model->delete_diangosis_infoprescription($diagnosis_id);
        //redirect("welcome/comorbidity_by_update");
        $url = base_url() . 'welcome/diagnostic_by_update/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_SystolicName_update($new_systolic_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $this->data_record_model->delete_systolic_infoprescription($new_systolic_id);
        //redirect("welcome/comorbidity_by_update");
        $url = base_url() . 'welcome/add_new_physicalfindings_systolic_information/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_physicalFindingsName($physical_examination_id) {
        $this->data_record_model->delete_physical_findings($physical_examination_id);
        redirect("welcome/physical_findings");
    }

    public function delete_diagnosisNameInfo($diagnosis_id) {
        $this->data_record_model->delete_diagnosiInfo($diagnosis_id);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($manual_pid, $visiting_no, $current_date);
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['maincontent'] = $this->load->view('source_file/diagnosis', $data);
        $this->load->view('home', $data);

        // redirect("welcome/diagnosis");
    }

    public function delete_diagnsosis_update($diagnosis_id) {

        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];

        $this->data_record_model->delete_diagnosisupdate($diagnosis_id);
        $url = base_url() . 'welcome/diagnostic_by_update/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
//redirect("welcome/physical_findings");
    }

    public function delete_phy_value_data($physical_examination_id) {
        $this->data_record_model->delete_physical_findings_value_byInfo($physical_examination_id);

        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');


        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/physicalFindings', $data);
        $this->load->view('home', $data);
        //redirect("welcome/physical_findings");
    }

    public function delete_phy_value_data_information_multiple($physical_finds_multiple_id) {
        $this->data_record_model->delete_physical_findings_value_byInfo_multiple($physical_finds_multiple_id);

        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');


        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date);

        $data['maincontent'] = $this->load->view('source_file/physicalFindings', $data);
        $this->load->view('home', $data);
        //redirect("welcome/physical_findings");
    }

    public function delete_complaint_name($cc_name_id) {
        $this->data_record_model->delete_complaint_name_info($cc_name_id);
        redirect("welcome/view_complaint_name_Info");
    }

    public function delete_investigation_by_prescription($investigation_id) {
        $this->data_record_model->delete_investigation_by_prescription($investigation_id);
        redirect("welcome/my_prescription");
    }

    public function delete_investigation_by_prescription_by_update($investigation_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);
        $this->data_record_model->delete_investigation_by_prescription($investigation_id);
        //redirect("data_record/edit_revisit_prescription");

        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_familyhistory_by_prescription_by_update($family_history_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);
        $this->data_record_model->delete_familyhistory_by_update_prescription($family_history_id);
        //redirect("data_record/edit_revisit_prescription");

        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_drug_name($prescription_id) {
        $this->data_record_model->delete_drug_by_prescription($prescription_id);
        redirect("welcome/my_prescription");
    }

    public function delete_patientadviceInfo_name_update($patient_advice_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        //$data = array();
        //$data['user_id'] = $this->session->userdata('user_id');
        //$data['patient_id'] = $result->patient_id;
        //$data['manual_pid'] = $result->manual_pid;
        //$data['visiting_no'] = $visitno;

        $this->data_record_model->delete_p_advice($patient_advice_id);
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);

        // redirect("data_record/edit_revisit_prescription");
    }

    public function delete_patientadviceInfo_name($patient_advice_id) {

        $this->data_record_model->delete_p_advice($patient_advice_id);
        redirect("welcome/my_prescription");
    }

    public function drug_delete_drug_name($prescription_id) {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        //$data = array();
        //$data['user_id'] = $this->session->userdata('user_id');
        //$data['patient_id'] = $result->patient_id;
        //$data['manual_pid'] = $result->manual_pid;
        //$data['visiting_no'] = $visitno;  

        $this->data_record_model->delete_drug_by_prescription($prescription_id);
        //redirect("data_record/edit_revisit_prescription");
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function delete_physicalFindings($physical_examination_id) {
        $this->data_record_model->delete_physicalFindings($physical_examination_id);
        redirect("welcome/view_physical_findings_data");
    }

    public function revisit_delete_medicine($prescription_id) {


        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['patient_id']=$this->session->userdata('patient_id');
        //$revisitInformation
        $r_data = array();
        $r_data['revisit_patient_id'] = trim($this->session->userdata('patient_id'));
        $r_data['revisitInformation'] = trim($this->input->post('prescription_id', true));
        $url = base_url() . 'data_record/re_visit_conditional_prescription/' . $r_data['revisit_patient_id'];
        $this->data_record_model->delete_prescription_info($prescription_id);


        redirect($url);
    }

// ------------------------------------------------------------------edit form all function----------------------------------------------------
    public function edit_form_new_drug_name($drug_id) {
        $data = array();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['new_generic_name'] = $this->data_record_model->generic_name_by_id();
        $data['new_drug'] = $this->data_record_model->add_new_drug_by_search($drug_id);
        $data['maincontent'] = $this->load->view('source_file/update_new_drug', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_patient_advice($add_advice_id) {
        $data = array();
        $data['patientAdviceInformation'] = $this->data_record_model->ptadviceInformation_bypt($add_advice_id);
        $data['maincontent'] = $this->load->view('source_file/updatepatientadvice', $data);
        $this->load->view('home', $data);
    }

    public function edit_formphysicalfindings($custom_phy_findings_id) {
        $data = array();
        $data['physicalFindings'] = $this->data_record_model->physicalfindings_bypt($custom_phy_findings_id);
        $data['maincontent'] = $this->load->view('source_file/update_physicalfindingsInfo', $data);
        $this->load->view('home', $data);
    }

    public function edit_physicalfindings_onchange_value($phy_fin_value_Id) {
        $data = array();
        $data['physicalFindingsValueOnChange'] = $this->data_record_model->physicalfindingsValueOnchange_bypt($phy_fin_value_Id);
        $data['view_customized_physicalfindings'] = $this->data_record_model->view_search_customized_phycialfindings_by_info();
        $data['maincontent'] = $this->load->view('source_file/update_physicalfindingsInfoValue', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_dictionary_cat_name($category_id) {
        $data = array();
        $data['cat_name_dictionary'] = $this->data_record_model->dictionary_by_cat_id($category_id);
        $data['maincontent'] = $this->load->view('source_file/update_dictionary_cate', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_cmorbidity_name($comorbidity_id) {
        $data = array();
        $data['comorbidtyInfo'] = $this->data_record_model->comorbidityInformation_bypt($comorbidity_id);
        $data['maincontent'] = $this->load->view('source_file/update_comorbidity', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_registration($user_id) {

        $data = array();
        $data['userInfo'] = $this->data_record_model->userinformation($user_id);
        $data['maincontent'] = $this->load->view('source_file/update_user', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_physicalFindings_name($physical_examination_id) {

        $data = array();
        $data['physicalFindings'] = $this->data_record_model->physicalFindingsinformation($physical_examination_id);
        $data['maincontent'] = $this->load->view('source_file/update_physicalfindings', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_diagnosis_name($diagnosis_id) {

        $data = array();
        $data['diangosisinfo'] = $this->data_record_model->diagnosisinformation($diagnosis_id);
        $data['maincontent'] = $this->load->view('source_file/update_diagnosis', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_dictionary_info($category_data_id) {
        $data = array();
        $data['dictionaryInfor_data'] = $this->data_record_model->dictionary_name_by_id_search($category_data_id);
        $data['category'] = $this->data_record_model->categoryInformation();
        $data['maincontent'] = $this->load->view('source_file/update_dictionaryNameInfo', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_dose_name($dose_id) {
        $data = array();
        $data['doseinfo'] = $this->data_record_model->doseInformation($dose_id);
        $data['maincontent'] = $this->load->view('source_file/update_dose', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_complaint_name($cc_group_id) {
        $data = array();
        $data['complaint_name'] = $this->data_record_model->complaint_name($cc_group_id);
        $data['maincontent'] = $this->load->view('source_file/update_complaint_name', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_path_groupName($path_test_group_id) {
        $data = array();
        $data['investigation_group_name'] = $this->data_record_model->investigationGroup_name($path_test_group_id);
        $data['maincontent'] = $this->load->view('source_file/update_investigationgroup', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_informaiton_by_complaint($cc_name_id) {
        $data = array();
        $data['add_new_complaint_group'] = $this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint'] = $this->data_record_model->complaint_by_search_name($cc_name_id);
        $data['maincontent'] = $this->load->view('source_file/update_complaint_name_info', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_generic($medicine_generic_id) {
        $data = array();
        $data['generic_name'] = $this->data_record_model->generic_Information($medicine_generic_id);
        $data['maincontent'] = $this->load->view('source_file/update_generic', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_dose_schedule_name($dose_schedule_id) {
        $data = array();
        $data['dose_schedule'] = $this->data_record_model->doseschedule_Information($dose_schedule_id);
        $data['maincontent'] = $this->load->view('source_file/update_dose_schedule', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_suggestion($doseSuggestion_id) {
        $data = array();
        $data['dose_suggestion'] = $this->data_record_model->doseSuggestionID($doseSuggestion_id);
        $data['maincontent'] = $this->load->view('source_file/update_dose_suggestion', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_patient_appointment($patient_id) {
        $data = array();

        $data['appointment'] = $this->data_record_model->patient_appointmentInformation($patient_id);
        $data['complaint_group_info'] = $this->data_record_model->complaint_group_name();
        $data['maincontent'] = $this->load->view('source_file/patient_prescription_step_two', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_re_visit_info($patient_id) {
        $data = array();
        $data['complaint_group_info'] = $this->data_record_model->complaint_group_name();
        $data['revisitInfo'] = $this->data_record_model->revisitinformation_by_ID($patient_id);
        $data['maincontent'] = $this->load->view('source_file/update_revisit_step_one', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_personal_history($personal_id) {
        $data = array();
        //$data['complaint_group_info']=$this->data_record_model->complaint_group_name();
        $data['personal_history_info'] = $this->data_record_model->personalhistory_by_edit($personal_id);
        $data['maincontent'] = $this->load->view('source_file/update_patienthistory', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_advice_name($path_test_id) {
        $data = array();
        $data['advicenameInformation'] = $this->data_record_model->advice_nameInfo($path_test_id);
        $data['add_new_advice_group'] = $this->data_record_model->advice_group_nameInformaiton();
        $data['maincontent'] = $this->load->view('source_file/update_advice_name', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_phy_fin_heading($custom_phy_findings_id) {
        $data = array();
        $data['phyfinInfo'] = $this->data_record_model->phy_findingsInfo($custom_phy_findings_id);
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['maincontent'] = $this->load->view('source_file/update_custom_phyFindings', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_phy_fin_heading_value($phy_fin_value_Id) {
        $data = array();
        $data['phyfinInfo_value'] = $this->data_record_model->phy_findingsInfo_value($phy_fin_value_Id);
        $data['updatephyfinInfo_value'] = $this->data_record_model->phy_findingsInfo_value_by_update($phy_fin_value_Id);
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['phyfinValueInfo'] = $this->data_record_model->by_physicalfindingValuesdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['maincontent'] = $this->load->view('source_file/update_custom_phyFindings_value', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_particular_name($patient_id) {
        $data['particular'] = $this->data_record_model->particularInfo($patient_id);
        //$data['particular'] = $this->data_record_model->particularInfo($patient_id);
        $data['maincontent'] = $this->load->view('source_file/update_particular', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_particular_by_name($patient_id) {
        $data['particular'] = $this->data_record_model->particularInfo($patient_id);
        $data['maincontent'] = $this->load->view('source_file/update_particular_name', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_chemotherapy_regimen_name($custom_chemotherapy_regmine_id) {
        $data['chemotherapy_regimen'] = $this->data_record_model->chemotherapy_regimentInformation($custom_chemotherapy_regmine_id);
        $data['maincontent'] = $this->load->view('source_file/update_chemotherapy_regimen', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_remarks($remarks_id) {
        $data['remarksinformationname'] = $this->data_record_model->remarksInformation($remarks_id);
        $data['maincontent'] = $this->load->view('source_file/update_remarks', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_doctor_seal($seal_id) {
        $data['edit_doctorsealInfo'] = $this->data_record_model->editdoctorseal_search($seal_id);
        $data['maincontent'] = $this->load->view('source_file/update_doctor_seal', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_protocol_help_name($protocol_help_id) {
        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        $data['protocolhelpiinfo'] = $this->data_record_model->protocol_helping_data($protocol_help_id);
        $data['maincontent'] = $this->load->view('source_file/update_protocol_help', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_chemotherapy_value($chemotherapy_regimen_value_id) {
        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        $data['chemotherapy_regimen_value'] = $this->data_record_model->chemotherapy_regiment_valueInformation($chemotherapy_regimen_value_id);
        $data['maincontent'] = $this->load->view('source_file/update_chemotherapy_regimen_value', $data);

        $this->load->view('home', $data);
    }

    public function edit_form_familyhistory_name($family_history_id) {
        $data['familyHistory'] = $this->data_record_model->familyhistoryInfo($family_history_id);
        $data['maincontent'] = $this->load->view('source_file/update_familyhistory', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_haematology($haematology_id) {
        $data['haematologyreport'] = $this->data_record_model->haematologyInfo($haematology_id);
        $data['maincontent'] = $this->load->view('source_file/update_haematology', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_others_report($others_id) {
        $data = array();
        $data['check_editor'] = $this->data;
        $data['othersreport'] = $this->data_record_model->othersreportinfo($others_id);
        $data['maincontent'] = $this->load->view('source_file/update_othersreport', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_multiple_rpt($multiple_report_id) {
        $patient_id = $this->session->userdata('patient_id');
        $data['multiplereport'] = $this->data_record_model->multiplereport_by_info($patient_id);
        $data['haematologyreport'] = $this->data_record_model->multiplereport($multiple_report_id);
        $data['bichemistrydata'] = $this->data_record_model->searchByinvestigationbiochemistryInformation();
        $data['maincontent'] = $this->load->view('source_file/update_multiple_rpt', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_urine_re($urine_id) {
        $data['urinereport'] = $this->data_record_model->urinereInfo($urine_id);
        $data['maincontent'] = $this->load->view('source_file/update_urinere', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_stool_re($stool_id) {
        $data['stool_re'] = $this->data_record_model->stoolreInfo($stool_id);
        $data['maincontent'] = $this->load->view('source_file/update_stool_re', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_radiology_report($radiology_id) {
        $data['radiology_report'] = $this->data_record_model->radiologyrptInfo($radiology_id);
        $data['maincontent'] = $this->load->view('source_file/update_radiology', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_usg_report($usg_id) {
        $data['usg_report'] = $this->data_record_model->usgrptInfo($usg_id);
        $data['maincontent'] = $this->load->view('source_file/update_usg_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_bonemarrow_report($bonemarrow_id) {
        $data['boneMarrowData'] = $this->data_record_model->bonemarrow($bonemarrow_id);
        $data['maincontent'] = $this->load->view('source_file/update_bonemarrow_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_echo_report($echo_id) {

        // $patient_id = $this->session->userdata('patient_id');
        $data['echoData'] = $this->data_record_model->echoInfo($echo_id);
        $data['maincontent'] = $this->load->view('source_file/update_echo_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_systolic_heading($custom_phy_findings_systolic_id) {
        $data['systolic_data'] = $this->data_record_model->systolicInformation($custom_phy_findings_systolic_id);
        $data['maincontent'] = $this->load->view('source_file/update_systolicHeading', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_histopathology_report($histopathology_id) {
        $data['histopathology_data'] = $this->data_record_model->histopahtologyInformation($histopathology_id);
        $data['maincontent'] = $this->load->view('source_file/update_histopathology_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_karyotype_report($karyotype_id) {
        $data['karyotype_data'] = $this->data_record_model->karyotypeInformation($karyotype_id);
        $data['maincontent'] = $this->load->view('source_file/update_karyrotype_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_cytopathology_report($cytopathology_id) {
        $data['cytopathology_data'] = $this->data_record_model->cytopahtologyInformation($cytopathology_id);
        $data['maincontent'] = $this->load->view('source_file/update_cytopathology_report', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_diagnosis_category($diagnosis_category_id) {
        $data['diagnosis_category_data'] = $this->data_record_model->diagnosis_categoryInformation($diagnosis_category_id);
        $data['maincontent'] = $this->load->view('source_file/update_diagnosis_category', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_immunophenotype_test_name($immunphenotype_id) {
        $data['immunophenotypeing_data'] = $this->data_record_model->immunophenotypeInformation($immunphenotype_id);
        $data['maincontent'] = $this->load->view('source_file/update_immunophenotye_testname', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_cytogenetic_test_name($cytogenetic_test_name_id) {
        $data['cytogenetic_data'] = $this->data_record_model->cytogeneticInformation($cytogenetic_test_name_id);
        $data['maincontent'] = $this->load->view('source_file/update_cytogenetic', $data);
        $this->load->view('home', $data);
    }

    public function edit_form_phy_fin_value($phy_fin_value_Id) {
        //$data['view_systolic']=$this->data_record_model->by_physicalfindingsdata_systolic();
        //$data['view_systolic_value']=$this->data_record_model->by_physicalfindingsdata_systolic_value();
        //$data['systolic_valuedata'] = $this->data_record_model->systolicvalueInformation($phy_fin_systolic_id);
        // echo $phy_fin_value_Id;
        $data['systolic_valueinfo'] = $this->data_record_model->systolicvalue($phy_fin_value_Id);
        $data['maincontent'] = $this->load->view('source_file/update_systolicvalue', $data);
        $this->load->view('home', $data);
    }

// ----------------------------------------------------------------------------- all report update function--------------------------------------------------
    public function update_haematologyreporting() {
        $data = array();
//        $data['patient_id'] = $this->session->userdata('patient_id');
//        $patient_id=$this->session->userdata('patient_id');
//        $data['manual_pid'] = $this->session->userdata('manual_pid');
//        $manual_pid= $this->session->userdata('manual_pid');
//        //$patient_name= $this->session->userdata('patient_name');
//        
//        $data['visiting_no'] = $this->session->userdata('visiting_no');
//        $data['user_id'] = $this->session->userdata('user_id');
//        //$data['patient_name'] = $this->session->userdata('patient_name');
//        //$data['current_date'] = $this->session->userdata('current_date');
//       // $patientid=$this->data_record_model->findpatientid($patient_id,$manual_pid);
//       // $patient_id=$patientid->patient_id;
//         $currentdate=$this->session->userdata('current_date');
//        if($currentdate!=NULL)
//        {
//            $data['current_date'] = Date("Y-m-d",strtotime($currentdate));
//            $this->session->unset_userdata('revisit_date');
//            
//        }  else {
//            
//        $data['current_date'] = Date("Y-m-d",strtotime($this->session->userdata('revisit_date')));  
//            
//        }


        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['haematology_id'] = $this->input->post('haematology_id', true);
        //$data['test_id'] = $this->input->post('test_id', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));

        $data['hb'] = $this->input->post('hb', true);
        $data['esr'] = $this->input->post('esr', true);
        $data['rbc'] = $this->input->post('rbc', true);
        $data['platelete'] = $this->input->post('platelete', true);
        $data['wbc'] = $this->input->post('wbc', true);
        $data['ce'] = $this->input->post('ce', true);
        $data['rc'] = $this->input->post('rc', true);
        $data['neutrophils'] = $this->input->post('neutrophils', true);
        $data['lymphocytes'] = $this->input->post('lymphocytes', true);
        $data['eosinophils'] = $this->input->post('eosinophils', true);
        $data['monocytes'] = $this->input->post('monocytes', true);
        $data['basophil'] = $this->input->post('basophil', true);
        $data['parameter_one'] = $this->input->post('parameter_one', true);
        $data['parameter_two'] = $this->input->post('parameter_two', true);
        $data['parameter_three'] = $this->input->post('parameter_three', true);
        $data['parameter_four'] = $this->input->post('parameter_four', true);
        $data['parameter_five'] = $this->input->post('parameter_five', true);
        $data['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $data['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $data['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $data['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $data['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $data['hct'] = $this->input->post('hct', true);
        $data['mcv'] = $this->input->post('mcv', true);
        $data['mch'] = $this->input->post('mch', true);
        $data['mchc'] = $this->input->post('mchc', true);
        $data['rdw'] = $this->input->post('rdw', true);
        $data['mp'] = $this->input->post('mp', true);
        $data['pbf'] = $this->input->post('pbf', true);
        $data['bt_min'] = $this->input->post('bt_min', true);
        $data['bt_sec'] = $this->input->post('bt_sec', true);
        $data['ct_min'] = $this->input->post('ct_min', true);
        $data['ct_sec'] = $this->input->post('ct_sec', true);
        $data['display'] = $this->input->post('display', true);
        $this->data_record_model->update_history_Info_by_haematologyReport($data);
        $sdata = array();
        $sdata['save_message'] = 'update..';
        $this->session->set_userdata($sdata);
        $haematology = array();
        $haematology['user_id'] = $this->session->userdata('user_id');
        $haematology['patient_id'] = $this->session->userdata('patient_id');
        $haematology['test_id'] = $this->input->post('test_id', true);
        $haematology['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $haematology['deli_date'] = $this->input->post('deli_date', true);


        $haematology['hb'] = $this->input->post('hb', true);
        $haematology['esr'] = $this->input->post('esr', true);
        $haematology['rbc'] = $this->input->post('rbc', true);
        $haematology['platelete'] = $this->input->post('platelete', true);
        $haematology['wbc'] = $this->input->post('wbc', true);
        $haematology['ce'] = $this->input->post('ce', true);
        $haematology['rc'] = $this->input->post('rc', true);
        $haematology['neutrophils'] = $this->input->post('neutrophils', true);
        $haematology['lymphocytes'] = $this->input->post('lymphocytes', true);
        $haematology['eosinophils'] = $this->input->post('eosinophils', true);
        $haematology['monocytes'] = $this->input->post('monocytes', true);
        $haematology['basophil'] = $this->input->post('basophil', true);
        $haematology['parameter_one'] = $this->input->post('parameter_one', true);
        $haematology['parameter_two'] = $this->input->post('parameter_two', true);
        $haematology['parameter_three'] = $this->input->post('parameter_three', true);
        $haematology['parameter_four'] = $this->input->post('parameter_four', true);
        $haematology['parameter_five'] = $this->input->post('parameter_five', true);
        $haematology['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $haematology['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $haematology['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $haematology['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $haematology['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $haematology['hct'] = $this->input->post('hct', true);
        $haematology['mcv'] = $this->input->post('mcv', true);
        $haematology['mch'] = $this->input->post('mch', true);
        $haematology['mchc'] = $this->input->post('mchc', true);
        $haematology['rdw'] = $this->input->post('rdw', true);
        $haematology['mp'] = $this->input->post('mp', true);
        $haematology['pbf'] = $this->input->post('pbf', true);
        $haematology['bt_min'] = $this->input->post('bt_min', true);
        $haematology['bt_sec'] = $this->input->post('bt_sec', true);
        $haematology['ct_min'] = $this->input->post('ct_min', true);
        $haematology['ct_sec'] = $this->input->post('ct_sec', true);
        $this->session->set_userdata($haematology);
        redirect('welcome/haematology');
    }

    public function update_urine_re_information() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['urine_id'] = $this->input->post('urine_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['quantity'] = $this->input->post('quantity');
        $data['color'] = $this->input->post('color');
        $data['apper'] = $this->input->post('apper');
        $data['sediment'] = $this->input->post('sediment');
        $data['spe_grav'] = $this->input->post('spe_grav');
        $data['reaction'] = $this->input->post('reaction');
        $data['ex_ph'] = $this->input->post('ex_ph');
        $data['albumin'] = $this->input->post('albumin');
        $data['sugur'] = $this->input->post('sugur');
        $data['others'] = $this->input->post('others');
        $data['acetone'] = $this->input->post('acetone');
        $data['pus_cells'] = $this->input->post('pus_cells');
        $data['rbcs'] = $this->input->post('rbcs');
        $data['mucus'] = $this->input->post('mucus');
        $data['pus_cast'] = $this->input->post('pus_cast');
        $data['sperat'] = $this->input->post('sperat');
        $data['wbc'] = $this->input->post('wbc');
        $data['granuloar'] = $this->input->post('granuloar');
        $data['cal_oxa'] = $this->input->post('cal_oxa');
        $data['uric_acid'] = $this->input->post('uric_acid');
        $data['tre_phs'] = $this->input->post('tre_phs');

        $data['sulph_cry'] = $this->input->post('sulph_cry');
        $data['hayline_cast'] = $this->input->post('hayline_cast');
        $data['bacteria'] = $this->input->post('bacteria');

        $data['bile_pig'] = $this->input->post('bile_pig');
        $data['urobili'] = $this->input->post('urobili');
        $data['chyle'] = $this->input->post('chyle');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['ep_cell'] = $this->input->post('ep_cell');
        $data['bile_salt'] = $this->input->post('bile_salt');

        $data['candida'] = $this->input->post('candida');
        $data['amr_ph'] = $this->input->post('amr_ph');
        $data['urate_crys'] = $this->input->post('urate_crys');
        $data['display'] = $this->input->post('display');
        $this->data_record_model->update_urine_re_rpt($data);

        $update_urine_re = array();
        $update_urine_re['user_id'] = $this->session->userdata('user_id');
        $update_urine_re['patient_id'] = $this->session->userdata('patient_id');
        $update_urine_re['urine_id'] = $this->input->post('urine_id', true);
        $update_urine_re['test_id'] = $this->input->post('test_id', true);
        $update_urine_re['reciv_date'] = $this->input->post('reciv_date');
        $update_urine_re['deli_date'] = $this->input->post('deli_date');
        $update_urine_re['patient_name'] = $this->input->post('patient_name');
        $update_urine_re['age'] = $this->input->post('age');
        $update_urine_re['ref_by'] = $this->input->post('ref_by');
        $update_urine_re['sex'] = $this->input->post('sex');
        $update_urine_re['hospital_name'] = $this->input->post('hospital_name');
        $update_urine_re['material'] = $this->input->post('material');

        $update_urine_re['quantity'] = $this->input->post('quantity');
        $update_urine_re['color'] = $this->input->post('color');
        $update_urine_re['apper'] = $this->input->post('apper');
        $update_urine_re['sediment'] = $this->input->post('sediment');
        $update_urine_re['spe_grav'] = $this->input->post('spe_grav');
        $update_urine_re['reaction'] = $this->input->post('reaction');
        $update_urine_re['ex_ph'] = $this->input->post('ex_ph');
        $update_urine_re['albumin'] = $this->input->post('albumin');
        $update_urine_re['sugur'] = $this->input->post('sugur');
        $update_urine_re['others'] = $this->input->post('others');
        $update_urine_re['acetone'] = $this->input->post('acetone');
        $update_urine_re['pus_cells'] = $this->input->post('pus_cells');
        $update_urine_re['rbcs'] = $this->input->post('rbcs');
        $update_urine_re['mucus'] = $this->input->post('mucus');
        $update_urine_re['pus_cast'] = $this->input->post('pus_cast');
        $update_urine_re['sperat'] = $this->input->post('sperat');
        $update_urine_re['wbc'] = $this->input->post('wbc');
        $update_urine_re['granuloar'] = $this->input->post('granuloar');
        $update_urine_re['cal_oxa'] = $this->input->post('cal_oxa');
        $update_urine_re['uric_acid'] = $this->input->post('uric_acid');
        $update_urine_re['tre_phs'] = $this->input->post('tre_phs');

        $update_urine_re['sulph_cry'] = $this->input->post('sulph_cry');
        $update_urine_re['hayline_cast'] = $this->input->post('hayline_cast');
        $update_urine_re['bacteria'] = $this->input->post('bacteria');

        $update_urine_re['bile_pig'] = $this->input->post('bile_pig');
        $update_urine_re['urobili'] = $this->input->post('urobili');
        $update_urine_re['chyle'] = $this->input->post('chyle');
        $update_urine_re['b_jons_protein'] = $this->input->post('b_jons_protein');
        $update_urine_re['ep_cell'] = $this->input->post('ep_cell');
        $update_urine_re['bile_salt'] = $this->input->post('bile_salt');
        $update_urine_re['candida'] = $this->input->post('candida');
        $update_urine_re['amr_ph'] = $this->input->post('amr_ph');
        $update_urine_re['urate_crys'] = $this->input->post('urate_crys');

        $this->session->set_userdata($update_urine_re);
        redirect("welcome/urine_report");
    }

    public function update_stool_re_information() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        //$data['test_id'] = $this->input->post('test_id', true);
        $data['stool_id'] = $this->input->post('stool_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date');
        $data['material'] = $this->input->post('material');

        $data['quantity'] = $this->input->post('quantity');
        $data['consistency'] = $this->input->post('consistency');
        $data['color'] = $this->input->post('color');
        $data['un_fp'] = $this->input->post('un_fp');
        $data['ordor'] = $this->input->post('ordor');
        $data['mucus'] = $this->input->post('mucus');
        $data['blood'] = $this->input->post('blood');
        $data['helminth'] = $this->input->post('helminth');
        $data['reaction'] = $this->input->post('reaction');
        $data['rs'] = $this->input->post('rs');
        $data['fat'] = $this->input->post('fat');
        $data['ova_al'] = $this->input->post('ova_al');
        $data['bilirubin'] = $this->input->post('bilirubin');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['vege_cell'] = $this->input->post('vege_cell');
        $data['epithe_cells'] = $this->input->post('epithe_cells');
        $data['puss_cell'] = $this->input->post('puss_cell');
        $data['rbc'] = $this->input->post('rbc');
        $data['obt'] = $this->input->post('obt');
        $data['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $data['macrophages'] = $this->input->post('macrophages');
        $data['muscle_fibre'] = $this->input->post('muscle_fibre');
        $data['fat_globules'] = $this->input->post('fat_globules');
        $data['starch_granules'] = $this->input->post('starch_granules');
        $data['cl_crystals'] = $this->input->post('cl_crystals');
        $data['bacteria'] = $this->input->post('bacteria');
        $data['troph_giardia'] = $this->input->post('troph_giardia');
        $data['larva_of'] = $this->input->post('larva_of');
        $data['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $data['cyst_of_col'] = $this->input->post('cyst_of_col');
        $data['t_hominis'] = $this->input->post('t_hominis');
        $data['blas_homins'] = $this->input->post('blas_homins');
        $data['cast'] = $this->input->post('cast');
        $data['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $data['candida'] = $this->input->post('candida');
        $data['display'] = $this->input->post('display');
        $this->data_record_model->update_stool_info($data);

        $updateStool = array();
        $updateStool['user_id'] = $this->session->userdata('user_id');
        $updateStool['patient_id'] = $this->session->userdata('patient_id');
        $updateStool['test_id'] = $this->input->post('test_id', true);
        $updateStool['stool_id'] = $this->input->post('stool_id', true);
        $updateStool['reciv_date'] = $this->input->post('reciv_date');
        $updateStool['deli_date'] = $this->input->post('deli_date');
        $updateStool['patient_name'] = $this->input->post('patient_name');
        $updateStool['age'] = $this->input->post('age');
        $updateStool['ref_by'] = $this->input->post('ref_by');
        $updateStool['sex'] = $this->input->post('sex');
        $updateStool['hospital_name'] = $this->input->post('hospital_name');
        $updateStool['material'] = $this->input->post('material');

        $updateStool['quantity'] = $this->input->post('quantity');
        $updateStool['consistency'] = $this->input->post('consistency');
        $updateStool['color'] = $this->input->post('color');
        $updateStool['un_fp'] = $this->input->post('un_fp');
        $updateStool['ordor'] = $this->input->post('ordor');
        $updateStool['mucus'] = $this->input->post('mucus');
        $updateStool['blood'] = $this->input->post('blood');
        $updateStool['helminth'] = $this->input->post('helminth');
        $updateStool['reaction'] = $this->input->post('reaction');
        $updateStool['rs'] = $this->input->post('rs');
        $updateStool['fat'] = $this->input->post('fat');
        $updateStool['ova_al'] = $this->input->post('ova_al');
        $updateStool['bilirubin'] = $this->input->post('bilirubin');
        $updateStool['b_jons_protein'] = $this->input->post('b_jons_protein');
        $updateStool['vege_cell'] = $this->input->post('vege_cell');
        $updateStool['epithe_cells'] = $this->input->post('epithe_cells');
        $updateStool['puss_cell'] = $this->input->post('puss_cell');
        $updateStool['rbc'] = $this->input->post('rbc');
        $updateStool['obt'] = $this->input->post('obt');
        //$updateStool['str_and_sterobili']=$this->input->post('str_and_sterobili');
        $updateStool['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $updateStool['macrophages'] = $this->input->post('macrophages');
        $updateStool['muscle_fibre'] = $this->input->post('muscle_fibre');
        $updateStool['fat_globules'] = $this->input->post('fat_globules');
        $updateStool['starch_granules'] = $this->input->post('starch_granules');
        $updateStool['cl_crystals'] = $this->input->post('cl_crystals');
        $updateStool['bacteria'] = $this->input->post('bacteria');
        $updateStool['troph_giardia'] = $this->input->post('troph_giardia');
        $updateStool['larva_of'] = $this->input->post('larva_of');
        $updateStool['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $updateStool['cyst_of_col'] = $this->input->post('cyst_of_col');
        $updateStool['t_hominis'] = $this->input->post('t_hominis');
        $updateStool['blas_homins'] = $this->input->post('blas_homins');
        $updateStool['cast'] = $this->input->post('cast');
        $updateStool['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $updateStool['candida'] = $this->input->post('candida');
        $this->session->set_userdata($updateStool);
        redirect("welcome/stool_report");
    }

    public function update_echo_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['echo_id'] = $this->input->post('echo_id', true);
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display', true);

        $echodata = array();
        $echodata['user_id'] = $this->session->userdata('user_id');
        $echodata['patient_id'] = $this->session->userdata('patient_id');
        $echodata['current_date'] = $this->input->post('current_date', true);
        $echodata['echo_id'] = $this->input->post('echo_id', true);
        $echodata['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($echodata);


        $this->data_record_model->update_echoreport($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/echo_report');
    }

    public function update_radiology_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['radiology_id'] = $this->input->post('radiology_id', true);

        //$data['current_date'] = $this->input->post('current_date', true);
        //$data['reciv_date'] = $this->input->post('reciv_date');
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['display'] = $this->input->post('display');
//echo '<pre>';
//        print_r($data);
//        exit();
        $radiology_reportinfo = array();
        $radiology_reportinfo['user_id'] = $this->session->userdata('user_id');
        $radiology_reportinfo['patient_id'] = $this->session->userdata('patient_id');
        $radiology_reportinfo['current_date'] = $this->input->post('current_date', true);
        $radiology_reportinfo['test_id'] = $this->input->post('test_id', true);
        $radiology_reportinfo['deli_date'] = $this->input->post('deli_date');
        $radiology_reportinfo['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($radiology_reportinfo);

        $this->data_record_model->update_radiology_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/radiology_report");
    }

    public function update_usg_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['usg_id'] = $this->input->post('usg_id', true);
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['display'] = $this->input->post('display');

        $userdata = array();
        $userdata['user_id'] = $this->session->userdata('user_id');
        $userdata['patient_id'] = $this->session->userdata('patient_id');
        //$userdata['current_date'] = $this->input->post('current_date', true);
        $userdata['test_id'] = $this->input->post('test_id', true);
        $userdata['reciv_date'] = $this->input->post('reciv_date');
        $userdata['deli_date'] = $this->input->post('deli_date');
        $userdata['patient_name'] = $this->input->post('patient_name');
        $userdata['age'] = $this->input->post('age');
        $userdata['ref_by'] = $this->input->post('ref_by');
        $userdata['sex'] = $this->input->post('sex');
        $userdata['hospital_name'] = $this->input->post('hospital_name');
        $userdata['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($userdata);

        $this->data_record_model->update_usg_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/usg_report");
    }

    public function update_others_report() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['others_id'] = $this->input->post('others_id', true);
        $data['report_description'] = $this->input->post('report_description', true);
        $this->data_record_model->update_othersreport($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_others_report');
    }

    public function update_bonemarrow_report() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['bonemarrow_id'] = $this->input->post('bonemarrow_id', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['report_description'] = $this->input->post('report_description');
        $data['introudction'] = $this->input->post('introudction');
        $data['aspiration'] = $this->input->post('aspiration');
        $data['stain_used'] = $this->input->post('stain_used');
        $data['cellularity_inf'] = $this->input->post('cellularity_inf');
        $data['meratio'] = $this->input->post('meratio');
        $data['ery'] = $this->input->post('ery');
        $data['granu'] = $this->input->post('granu');
        $data['mega'] = $this->input->post('mega');
        $data['ly_his_pls_cells'] = $this->input->post('ly_his_pls_cells');
        $data['parasites'] = $this->input->post('parasites');
        $data['others'] = $this->input->post('others');
        $data['special_stain'] = $this->input->post('special_stain');
        $data['comment'] = $this->input->post('comment');
        $data['test_to_follow'] = $this->input->post('test_to_follow');
        $data['reviewed_by'] = $this->input->post('reviewed_by');
        $data['display'] = $this->input->post('display');

        //bonemarrow_id
        $userdata = array();
        $userdata['user_id'] = $this->session->userdata('user_id');
        $userdata['patient_id'] = $this->session->userdata('patient_id');
        $userdata['current_date'] = $this->input->post('current_date', true);
        $userdata['bonemarrow_id'] = $this->input->post('bonemarrow_id', true);
        $userdata['test_id'] = $this->input->post('test_id', true);
        $userdata['reciv_date'] = $this->input->post('reciv_date');
        $userdata['deli_date'] = $this->input->post('deli_date');
        $userdata['patient_name'] = $this->input->post('patient_name');
        $userdata['age'] = $this->input->post('age');
        $userdata['ref_by'] = $this->input->post('ref_by');
        $userdata['sex'] = $this->input->post('sex');
        $userdata['hospital_name'] = $this->input->post('hospital_name');
        $userdata['report_description'] = $this->input->post('report_description');
        $userdata['introudction'] = $this->input->post('introudction');
        $userdata['aspiration'] = $this->input->post('aspiration');
        $userdata['stain_used'] = $this->input->post('stain_used');
        $userdata['cellularity_inf'] = $this->input->post('cellularity_inf');
        $userdata['meratio'] = $this->input->post('meratio');
        $userdata['ery'] = $this->input->post('ery');
        $userdata['granu'] = $this->input->post('granu');
        $userdata['mega'] = $this->input->post('mega');
        $userdata['ly_his_pls_cells'] = $this->input->post('ly_his_pls_cells');
        $userdata['parasites'] = $this->input->post('parasites');
        $userdata['others'] = $this->input->post('others');
        $userdata['special_stain'] = $this->input->post('special_stain');
        $userdata['comment'] = $this->input->post('comment');
        $userdata['test_to_follow'] = $this->input->post('test_to_follow');
        $userdata['reviewed_by'] = $this->input->post('reviewed_by');

        $this->session->set_userdata($userdata);

        $this->data_record_model->update_bonemarrow_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/bone_marrow");
    }

    public function update_customized_physical_fidings() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['customized_physical_findings_name'] = $this->input->post('customized_physical_findings_name', true);
        $this->data_record_model->update_customizedPhysicalFindings($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_physicalfindings');
    }

    public function update_phy_findings_valueOnchange() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['phy_fin_value'] = $this->input->post('phy_fin_value', true);
        $data['phy_fin_value_Id'] = $this->input->post('phy_fin_value_Id', true);
        $this->data_record_model->update_customizedPhysicalFindingsOnChangeValue($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_customized_phy_value_info_Info_onchangevalue');
    }

    public function update_physicalfindings_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['customized_physical_findings_name'] = $this->input->post('customized_physical_findings_name', true);
        $this->data_record_model->update_customizedPhysicalFindings($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_customized_phy_info_Info');
    }

    public function update_customized_physical_fidings_value() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['phy_fin_value_Id'] = $this->input->post('phy_fin_value_Id', true);
        $data['phy_fin_value'] = $this->input->post('phy_fin_value', true);
        $this->data_record_model->update_customizedPhysicalFindingsValue($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_physicalfindings');
    }

    public function update_add_new_patient_info() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['prescription_pt_id']=$this->input->post('prescription_pt_id',true);
        $data['patient_id'] = $this->input->post('patient_id', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['current_date'] = date("Y-m-d", strtotime($this->input->post('current_date', true)));
        //$data['manual_pid']=$this->input->post('manual_pid',true);
        $data['manual_pid'] = preg_replace('/[^0-9]/', '', $this->input->post('manual_pid', true));
        $data['age'] = $this->input->post('age', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $data['address'] = $this->input->post('address', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->data_record_model->update_patient_info_by_prescription($data);

        $udata = array();
        $udata['patient_id_search'] = $this->data_record_model->search_by_patient_id($data['manual_pid']);
//echo '<pre>';
//print_r($udata);
//exit();
        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('welcome/patient_date_to_date_searching',$udata);
        $data['maincontent'] = $this->load->view('source_file/date_to_searching', $udata);
        $this->load->view('home', $data);
    }

    public function update_add_new_patient_info_by_name() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['prescription_pt_id']=$this->input->post('prescription_pt_id',true);
        $data['patient_id'] = $this->input->post('patient_id', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['current_date'] = date("Y-m-d", strtotime($this->input->post('current_date', true)));
        //$data['manual_pid']=$this->input->post('manual_pid',true);
        $data['manual_pid'] = preg_replace('/[^0-9]/', '', $this->input->post('manual_pid', true));
        $data['age'] = $this->input->post('age', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $data['address'] = $this->input->post('address', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->data_record_model->update_patient_info_by_prescription($data);
        $udata = array();
        $udata['patientname'] = $this->data_record_model->search_by_patient_name_search($data['patient_name']);
//                echo '<pre>';
//        print_r($udata['patientname']);
//        exit();
        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('data_record/pt_find_information_by_name');

        $data['maincontent'] = $this->load->view('source_file/patient_find_information_byName', $udata);
        $this->load->view('home', $data);
    }

    public function update_doctor_seal() {


        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['seal_id'] = $this->input->post('seal_id', true);
        $data['for_bangla_seal'] = $this->input->post('for_bangla_seal', true);
        $data['for_english_seal'] = $this->input->post('for_english_seal', true);
        $data['prescription_footer'] = $this->input->post('prescription_footer', true);
        $this->data_record_model->update_doctor_seal($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_doctor_seal');
    }

    public function update_comorbidity_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['comorbidity_id'] = $this->input->post('comorbidity_id', true);
        $data['comorbidity_name'] = $this->input->post('comorbidity_name', true);
        $this->data_record_model->update_comorbidity_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/viewComorbidityInfo');
    }

    public function update_remarks_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['remarks_id'] = $this->input->post('remarks_id', true);
        $data['remarks'] = $this->input->post('remarks', true);
        $this->data_record_model->update_remarks_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_remarks_Info');
    }

    public function update_personalHistory_info() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['personal_id'] = $this->input->post('personal_id', true);
        $data['personal_history_name'] = $this->input->post('personal_history_name', true);
        $this->data_record_model->update_personal_history_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/viewpesonalhistoryInfo');
    }

    public function update_customized_physical_fidings_systolic_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['phy_fin_systolic_id'] = $this->input->post('phy_fin_systolic_id', true);
        $data['phy_fin_value_systolic'] = $this->input->post('phy_fin_value_systolic', true);
        $data['custom_phy_findings_systolic_id'] = $this->input->post('custom_phy_findings_systolic_id', true);

        $this->data_record_model->update_systolicValue_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_physicalfindings_systolic');
    }

    public function update_customized_physical_fidings_systolic_value_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['phy_fin_value_Id'] = $this->input->post('phy_fin_value_Id', true);
        $data['phy_fin_value'] = $this->input->post('phy_fin_value', true);
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        //echo '<pre>';
        // print_r($data);
        // exit();
        $this->data_record_model->update_systolicValue($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_customized_systolic_value_Info');
    }

    public function update_complaint_nameInformation_by_complaint() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['cc_name_id'] = $this->input->post('cc_name_id', true);
        $data['cc_group_id'] = $this->input->post('cc_group_id', true);
        $data['complain_name'] = $this->input->post('complain_name', true);
        $this->data_record_model->update_complaint_information_by_complaint($data);

        $sdata = array();
        $sdata['save_message'] = 'Update Successfully';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_complaint_name_Info');
    }

    public function update_patieint_history_info_by_familyhistory() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['family_history_id'] = $this->input->post('family_history_id', true);
        $data['familyhistory'] = $this->input->post('familyhistory', true);
        $data['nothing_contributory'] = $this->input->post('nothing_contributory', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $this->data_record_model->update_patient_history_Info_by_familyhistory($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Update..';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_family_history_data');
    }

    public function update_doseType_info() {
        $data = array();
        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_type'] = $this->input->post('dose_type', true);
        $this->data_record_model->update_doseType($data);

        $sdata = array();
        $sdata['message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/viewdoeseInfo');
    }

    public function update_cytogenetic_testName() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['cytogenetic_test_name_id'] = $this->input->post('cytogenetic_test_name_id', true);
        $data['cytogenetic_test_name'] = $this->input->post('cytogenetic_test_name', true);
        $this->data_record_model->update_cytogenetic_testnameupdate($data);

        $sdata = array();
        $sdata['message'] = 'Update Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_cytogenetic_test_name');
    }

    public function update_patieint_history_info_by_physical_findings() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['physical_examination_id'] = $this->input->post('physical_examination_id', true);
        $data['height'] = $this->input->post('height', true);
        $data['weight'] = $this->input->post('weight', true);
        $data['presasure'] = $this->input->post('presasure', true);
        $data['general_examination'] = $this->input->post('general_examination', true);
        $data['systemic_examination'] = $this->input->post('systemic_examination', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $this->data_record_model->update_patient_history_Info_by_physical_findings($data);
        $sdata = array();
        $sdata['message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_physical_findings_data');
    }

    public function update_doseschedule_name() {

        $data = array();
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_schedule'] = $this->input->post('dose_schedule', true);
        $this->data_record_model->update_dosesheduleInfo($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/viewdoes_scheduleName');
    }

    public function update_category_name() {
        $data = array();
        $data['category_id'] = $this->input->post('category_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['category_name'] = $this->input->post('category_name', true);
        $this->data_record_model->update_dic_cate_name($data);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_dictionary_category_Info');
    }

    public function update_generic_info() {
        $data = array();
        $data['medicine_generic_id'] = $this->input->post('medicine_generic_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['generic_name'] = $this->input->post('generic_name', true);
        $this->data_record_model->update_genericName($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update database';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_generic_Info');
    }

    public function update_patieint_history_info_by_diagnosis() {

        $data = array();
        $data['diagnosis_id'] = $this->input->post('diagnosis_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['diagnosis'] = $this->input->post('diagnosis', true);
        $this->data_record_model->update_diagnosis($data);

        $sdata = array();
        $sdata['save_message'] = 'Update database';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_diagnosisdata');
    }

    public function update_complaint_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['cc_group_id'] = $this->input->post('cc_group_id', true);
        $data['complain_group_name'] = $this->input->post('complain_group_name', true);
        $this->data_record_model->update_complaint_group_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_complaint_group_name_Info');
    }

    public function update_patient_advice_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['add_advice_id'] = $this->input->post('add_advice_id', true);
        $data['patient_advice_name'] = $this->input->post('patient_advice_name', true);
        $this->data_record_model->update_patientadvice($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/viewpatientadviceInfo');
    }

    public function update_suggestion_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_suggestion'] = $this->input->post('dose_suggestion', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        $this->data_record_model->update_suggestion_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_suggestion_Info');
    }

    public function update_advice_gruop_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $data['path_test_group_name'] = $this->input->post('path_test_group_name', true);
        $this->data_record_model->update_advice_group_nameInfo($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_advice_group_name_Info');
    }

    public function update_info_data() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['category_id'] = $this->input->post('category_id', true);
        $data['category_data_id'] = $this->input->post('category_data_id', true);
        $data['name'] = $this->input->post('name', true);
        $data['address'] = $this->input->post('address', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $this->data_record_model->update_dictoinary_infodata($data);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_dictionary_Info');
    }

    public function update_new_drug_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['drug_id'] = $this->input->post('drug_id', true);
        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        $data['medicine_generic_id'] = $this->input->post('medicine_generic_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['pharma_name'] = $this->input->post('pharma_name', true);
        $data['pharma_cell_number'] = $this->input->post('pharma_cell_number', true);
        $data['pharma_email_number'] = $this->input->post('pharma_email_number', true);
        $data['mro_name'] = $this->input->post('mro_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['drug_advice_info'] = $this->input->post('drug_advice_info', true);
        $this->data_record_model->update_add_newd_drug_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/viewdoes_add_new_drug');
    }

    public function update_advice_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['path_test_id'] = $this->input->post('path_test_id', true);
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['unit'] = $this->input->post('unit', true);
        $data['normal_range'] = $this->input->post('normal_range', true);
        $this->data_record_model->update_advice_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_advice_name_Info');
    }

    public function update_new_user_name() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['type'] = $this->input->post('type', true);
        $data['name'] = $this->input->post('name', true);
        $data['cell_number	'] = $this->input->post('cell_number', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $data['address'] = $this->input->post('address', true);
        $this->data_record_model->update_new_user_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Thankyou for Registration Updateing';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_new_user_Info');
    }

    public function update_customized_physical_fidings_systolic() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['custom_phy_findings_systolic_id'] = $this->input->post('custom_phy_findings_systolic_id', true);
        $data['customized_physical_findings_systolic_name'] = $this->input->post('customized_physical_findings_systolic_name', true);
        $this->data_record_model->update_systolic_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_customized_systolic_Info');
    }

    public function update_histopathology_report() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['histopathology_id'] = $this->input->post('histopathology_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date', true);
        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display', true);
        $histopathology = array();
        $histopathology['histopathology_id'] = $this->input->post('histopathology_id');
        $histopathology['reciv_date'] = $this->input->post('reciv_date', true);
        $histopathology['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($histopathology);

        $this->data_record_model->update_histopathology_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/histopathology_report');
    }

    public function update_cytopathology_report() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['cytopathology_id'] = $this->input->post('cytopathology_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date', true);
        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display', true);

        $cytopathology = array();
        $cytopathology['histopathology_id'] = $this->input->post('histopathology_id');
        $cytopathology['reciv_date'] = $this->input->post('reciv_date');
        $cytopathology['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($cytopathology);
        $this->data_record_model->update_cytopathology_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/cytopathology_report');
    }

    public function update_karyotype_report() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['karyotype_id'] = $this->input->post('karyotype_id', true);
        $data['reciv_date'] = $this->input->post('reciv_date', true);
        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display', true);

        $karyotype = array();
        $karyotype['karyotype_id'] = $this->input->post('karyotype_id');
        $karyotype['reciv_date'] = $this->input->post('reciv_date');
        $karyotype['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($karyotype);
        $this->data_record_model->update_karyotype_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/karyotype_report_report');
    }

    public function update_immunophenotype_testName() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['immunphenotype_id'] = $this->input->post('immunphenotype_id', true);
        $data['immunophenotype_test_name'] = $this->input->post('immunophenotype_test_name', true);
        $this->data_record_model->update_immunopenotyping_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_immunophenotype_test_name');
    }

    public function update_customized_chemotherapy_regmin_name() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['custom_chemotherapy_regmine_id'] = $this->input->post('custom_chemotherapy_regmine_id', true);
        $data['customized_chemotherapy_regimen_name'] = $this->input->post('customized_chemotherapy_regimen_name', true);
        $this->data_record_model->update_chemotherapy_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_ChemotherapyRegimenName_Info');
    }

    public function update_chemotherapy_regimen_value() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['custom_chemotherapy_regmine_id'] = $this->input->post('custom_chemotherapy_regmine_id', true);
        $data['chemotherapy_regimen_value_id'] = $this->input->post('chemotherapy_regimen_value_id', true);
        $data['chemotherapy_regimen_value'] = $this->input->post('chemotherapy_regimen_value', true);
        $this->data_record_model->update_chemotherapy_information_value($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_chemotherapy_regimen');
    }

    public function update_customized_diagnosis_category() {
        $data = array();
        //$data['user_id']=$this->session->userdata('user_id');
        $data['user_id'] = $this->input->post('user_id', true);
        $data['diagnosis_category_id'] = $this->input->post('diagnosis_category_id', true);
        $data['customized_diagnosis_category_name'] = $this->input->post('customized_diagnosis_category_name', true);
        $this->data_record_model->update_customize_diagnosis_information($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Update';
        $this->session->set_userdata($sdata);
        redirect('welcome/view_diagnosisCategory_Info');
    }

    public function update_chemotherapy_regemin_main_help() {
        $data = array();
        $data['protocol_help_id'] = $this->input->post('protocol_help_id', true);
        $data['user_id'] = $this->session->userdata('user_id');
        $data['current_date'] = Date("Y-m-d", strtotime($this->input->post('current_date')));
        $data['custom_chemotherapy_regmine_id'] = $this->input->post('custom_chemotherapy_regmine_id', true);
        $data['cycle'] = $this->input->post('cycle', true);
        $data['next_cycle'] = $this->input->post('next_cycle', true);

        $this->data_record_model->update_chemotherapy_regimen_help($data);
        $sdata = array();
        $sdata['save_messages_help'] = 'Successfully Update..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/view_protocol_help_searching");
    }

    // -------------------------------------------------------------------------\all save function ------------------------------------------------------------
    public function save_doseType_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_type'] = $this->input->post('dose_type', true);
        $result = $this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
        // $ssdata=array();
        //$ssdata['dose_type']=$this->input->post('dose_type',true);
        //$this->session->set_userdata($ssdata);
        //$sdata = array();
        //$sdata['save_message'] = 'Successfully Added database';
        //$this->session->set_userdata($sdata);
        //redirect('welcome/setting');
    }

    public function save_patient_advice_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_advice_name'] = $this->input->post('patient_advice_name', true);
        $result = $this->data_record_model->save_patientAdviceInfo($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
        //$sdata = array();
        //$sdata['save_message'] = 'Successfully Added database';
        //$this->session->set_userdata($sdata);
        //redirect('welcome/setting');
    }

    public function save_patient_advice_info_by_pp() {

        $data = array();
        //$data['patient_id'] = $this->session->userdata('patient_id');
        //$data['manual_pid'] = $this->session->userdata('manual_pid');
        //$data['visiting_no'] = $this->session->userdata('visiting_no');
        //$data['current_date'] = $this->session->userdata('current_date');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_advice_name'] = $this->input->post('patient_advice_name', true);
        $this->data_record_model->save_patientAdviceInfo($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_prescription');
    }

    public function save_patient_advice_info_by_pp_update() {

        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        //$data['user_id'] = $this->session->userdata('user_id');
        // $data['patient_id'] = $result->patient_id;
        // $data['manual_pid'] = $result->manual_pid;
        // $data['visiting_no'] = $visitno;  
        //$data=array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $data['add_advice_id'] = $this->input->post('add_advice_id', true);
        echo '<pre>';
        print_r($data);
        exit();
        $this->data_record_model->save_patientAdviceInfo_revisit($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        //redirect('welcome/my_prescription');

        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function save_comorbidity_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['comorbidity_name'] = $this->input->post('comorbidity_name', true);
        $data['current_date'] = $this->input->post('current_date', true);
        //$data['extra_comorbidity']=$this->input->post('extra_comorbidity',true);
        $result = $this->data_record_model->save_comorbidity($data);
//$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
//        $sdata = array();
//        $sdata['save_message'] = 'Successfully Added database';
//        $this->session->set_userdata($sdata);
//        redirect('welcome/add_new_comorbidity');
    }

    public function save_comorbidity_info_by_modal() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['comorbidity_name'] = $this->input->post('comorbidity_name', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['extra_comorbidity'] = $this->input->post('extra_comorbidity', true);

        $this->data_record_model->save_comorbidity($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/comorbidityInfo');
    }

    public function save_comorbidity_nameinfo_by_modal() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['comorbidity_name'] = $this->input->post('comorbidity_name', true);
        $data['current_date'] = $this->input->post('current_date', true);
        //  $data['extra_comorbidity']=$this->input->post('extra_comorbidity',true);

        $this->data_record_model->save_comorbidity($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/comorbidityInfo');
    }

    public function save_doseschedule_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_schedule'] = $this->input->post('dose_schedule', true);
        $result = $this->data_record_model->save_dosesheduleInfo($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_generic_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['generic_name'] = $this->input->post('generic_name', true);
        $result = $this->data_record_model->save_genericName($data);
        //$result=$this->data_record_model->save_dosesheduleInfo($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_drug_help() {
        $data = array();
        // $data['user_id']=$this->session->userdata('user_id');
        $data['drug_id'] = $this->input->post('drug_id', true);
        $data['drug_help_name'] = $this->input->post('drug_help_name', true);
        $this->data_record_model->save_drug_helpinformation($data);


        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/drug_help');
    }

    public function save_advice_gruop_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['path_test_group_name'] = $this->input->post('path_test_group_name', true);
        $result = $this->data_record_model->save_advice_group_name($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
//        $sdata = array();
//        $sdata['save_message'] = 'Successfully Added database';
//        $this->session->set_userdata($sdata);
//        redirect('welcome/setting');
    }

    public function save_customized_physical_fidings() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_physical_findings_name'] = $this->input->post('customized_physical_findings_name', true);
        $result = $this->data_record_model->save_customPhysicalFidings($data);
//$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_customized_chemotherapy_regmin_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_chemotherapy_regimen_name'] = $this->input->post('customized_chemotherapy_regimen_name', true);
        $result = $this->data_record_model->save_customChemotherapy_regimenName($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
//
//        $sdata = array();
//        $sdata['save_message'] = 'Successfully Added database';
//        $this->session->set_userdata($sdata);
//        redirect('welcome/setting');
    }

    public function save_customized_chemotherapy_regmin_name_protocol_setting() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_chemotherapy_regimen_name'] = $this->input->post('customized_chemotherapy_regimen_name', true);
        $result = $this->data_record_model->save_customChemotherapy_regimenName($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/protocol_setting');
    }

    public function save_customized_diagnosis_category() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_diagnosis_category_name'] = $this->input->post('customized_diagnosis_category_name', true);
        $result = $this->data_record_model->save_diagnosis_category_name($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
        //$result=$this->data_record_model->save_customChemotherapy_regimenName($data);
//        $sdata = array();
//        $sdata['save_message'] = 'Successfully Added database';
//        $this->session->set_userdata($sdata);
//        redirect('welcome/setting');
    }

    public function save_customized_diagnosis() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_diagnosis_category_name'] = $this->input->post('customized_diagnosis_category_name', true);
        $this->data_record_model->save_diagnosis_category($data);
//        if($result==true){
//            echo "Saved successfully";
//            
//        }else{
//            echo "Sorry, Already saved";
//        }
        //$this->data_record_model->save_customChemotherapy_regimenName($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/diagnosis');
    }

    public function save_immunophenotype_testName() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['immunophenotype_test_name'] = $this->input->post('immunophenotype_test_name', true);
        $this->data_record_model->save_immunophenotype_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_immunophenotype_test_name');
    }

    public function save_cytogenetic_testName() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['cytogenetic_test_name'] = $this->input->post('cytogenetic_test_name', true);
        $this->data_record_model->save_cytogenetic_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_cytogenetic_test_name');
    }

    public function physicalfindings() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_physical_findings_name'] = $this->input->post('customized_physical_findings_name', true);
        $this->data_record_model->save_customPhysicalFidings_ph($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');


        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date);
        //redirect('welcome/physical_findings');   
    }

    public function save_customized_physical_fidings_systolic() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_physical_findings_systolic_name'] = $this->input->post('customized_physical_findings_systolic_name', true);
        $result = $this->data_record_model->save_customPhysicalFidings_systolic($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
//        $sdata = array();
//        $sdata['save_message'] = 'Successfully Added database';
//        $this->session->set_userdata($sdata);
//        redirect('welcome/setting');
    }

    public function save_customized_physical_fidings_systolic_redirect() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['customized_physical_findings_systolic_name'] = $this->input->post('customized_physical_findings_systolic_name', true);
        $this->data_record_model->save_customPhysicalFidings_systolic($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_physicalfindings_systolic_information');
    }

    public function save_customized_physical_fidings_systolic_info_save() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_systolic_id'] = $this->input->post('custom_phy_findings_systolic_id', true);
        $data['phy_fin_value_systolic'] = $this->input->post('phy_fin_value_systolic', true);
        $result = $this->data_record_model->save_PhysicalFidings_systolic($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
//
//        $sdata = array();
//        $sdata['save_message'] = 'Successfully Added database';
//        $this->session->set_userdata($sdata);
//        redirect('welcome/setting');
    }

    public function save_customized_physical_fidings_value() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['phy_fin_value'] = $this->input->post('phy_fin_value', true);

        $result = $this->data_record_model->save_customPhysicalFidings_value($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_patient_remarks_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['remarks'] = $this->input->post('remarks', true);

        $result = $this->data_record_model->save_remarks_name($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_customized_physical_fidings_value_ph() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['phy_fin_value'] = $this->input->post('phy_fin_value', true);

        $this->data_record_model->save_customPhysicalFidings_value_ph($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/physical_findings');

    }

    public function save_chemotherapy_regimen_value() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_chemotherapy_regmine_id'] = $this->input->post('custom_chemotherapy_regmine_id', true);
        $data['chemotherapy_regimen_value'] = $this->input->post('chemotherapy_regimen_value', true);
        $this->data_record_model->save_chemotherapy_regimen_value($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_chemotherapy_regimen');
    }

    public function save_advice_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['unit'] = $this->input->post('unit', true);
        $data['normal_range'] = $this->input->post('normal_range', true);
        $result = $this->data_record_model->save_advice_name($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_category_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['category_name'] = $this->input->post('category_name', true);
        $this->data_record_model->save_category_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_dictonary');
    }

    public function save_category_data() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['category_id'] = $this->input->post('category_id', true);
        $data['name'] = $this->input->post('name', true);
        $data['address'] = $this->input->post('address', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $this->data_record_model->save_category_data($data);

        $sdata = array();
        $sdata['save_message'] = 'Save';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_dictonary');
    }

    public function save_advice_name_by_prescription() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['unit'] = $this->input->post('unit', true);
        $data['normal_range'] = $this->input->post('normal_range', true);
        $result = $this->data_record_model->save_advice_name($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_complaint_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['complain_group_name'] = $this->input->post('complain_group_name', true);
        $this->data_record_model->save_complaint_group_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Save';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_complaint_group_name');
    }

    public function save_patient_remarks() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['manual_pid'] = $this->input->post('manual_pid', true);
        $data['manual_pid'] = preg_replace('/[^0-9]/', '', $this->input->post('manual_pid', true));
        $data['remarks_date'] = Date("Y-m-d", strtotime($this->input->post('remarks_date', true)));
        $data['remarks_id'] = $this->input->post('remarks_id', true);
//echo '<pre>';
//print_r($data);
//exit();
        $this->data_record_model->save_patientremarks_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Save';
        $this->session->set_userdata($sdata);
        redirect('welcome/new_remarks_information');
    }

    public function save_patient_remarks_name_by_modal() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['remarks'] = $this->input->post('remarks', true);
        $this->data_record_model->save_remarksinformation_name($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Save';
        $this->session->set_userdata($sdata);
        redirect('welcome/new_remarks_information');
    }

    public function save_doctor_seal() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['for_bangla_seal'] = $this->input->post('for_bangla_seal', true);
        $data['for_english_seal'] = $this->input->post('for_english_seal', true);
        $data['prescription_footer'] = $this->input->post('prescription_footer', true);
        $this->data_record_model->save_doctor_seal($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Save';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_doctor_seal');
    }

    public function save_complaint_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['cc_group_id'] = $this->input->post('cc_group_id', true);
        $data['complain_name'] = $this->input->post('complain_name', true);
        $result = $this->data_record_model->save_complaint_info($data);

        //$result=$this->data_record_model->save_dosesheduleInfo($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_complaint_name_by_modal() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['cc_group_id'] = $this->input->post('cc_group_id', true);
        $data['complain_name'] = $this->input->post('complain_name', true);
        $this->data_record_model->save_complaint_info_modal($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/patient_prescription_step_one');
    }

    public function save_suggestion_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_suggestion'] = $this->input->post('dose_suggestion', true);
        $result = $this->data_record_model->save_suggestion_info($data);

        //$result=$this->data_record_model->save_dosesheduleInfo($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_adviceInformation() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['add_advice_id'] = $this->input->post('add_advice_id', true);
        $this->data_record_model->save_advice_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Add';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_prescription');
    }

    public function save_adviceInfo_revisit() {

        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;
        // echo '<pre>';
        //print_r($data);
        //exit();
        $data['add_advice_id'] = $this->input->post('add_advice_id', true);
        $this->data_record_model->save_advice_info($data);
        $sdata = array();
        $sdata['save_message'] = 'Add';
        $this->session->set_userdata($sdata);
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function save_systolic_information() {
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        {
            $currentdate = $this->session->userdata('current_date');
            if ($currentdate != NULL) {
                $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
                $this->session->unset_userdata('revisit_date');
            } else {

                $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
            }

            $data['custom_phy_findings_systolic_id'] = $this->input->post('custom_phy_findings_systolic_id', true);
            //$data['current_date'] = $this->input->post('current_date', true);
            $data['systolic_value'] = $this->input->post('systolic_value', true);
            $data['extra_systolic'] = $this->input->post('extra_systolic', true);
            $data['new_systolic'] = $this->input->post('new_systolic', true);

            $this->data_record_model->save_patient_systolic_Info($data);

            //$history_info = array();
            $history_info['complain_name'] = $this->input->post('complain_name', true);
            //$history_info['patient_history_info'] = $this->input->post('patient_history_info', true);
            $history_info['extra_complaint'] = $this->input->post('extra_complaint', true);
            $history_info['patieint_history_id'] = $this->input->post('patieint_history_id', true);
            $this->session->set_userdata($history_info);


            $sdata = array();
            $sdata['save_message'] = '';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_physicalfindings_systolic_information');
        }
    }

    public function save_systolic_information_redirect() {
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        {
            $currentdate = $this->session->userdata('current_date');
            if ($currentdate != NULL) {
                $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
                $this->session->unset_userdata('revisit_date');
            } else {

                $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
            }

            $data['custom_phy_findings_systolic_id'] = $this->input->post('custom_phy_findings_systolic_id', true);
            //$data['current_date'] = $this->input->post('current_date', true);
            $data['systolic_value'] = $this->input->post('systolic_value', true);
            $data['extra_systolic'] = $this->input->post('extra_systolic', true);
            $data['new_systolic'] = $this->input->post('new_systolic', true);
            // $data['new_systolic'] = $this->input->post('new_systolic', true);

            $this->data_record_model->save_patient_systolic_Info($data);

            //$history_info = array();
            $history_info['complain_name'] = $this->input->post('complain_name', true);
            //$history_info['patient_history_info'] = $this->input->post('patient_history_info', true);
            $history_info['extra_complaint'] = $this->input->post('extra_complaint', true);
            $history_info['patieint_history_id'] = $this->input->post('patieint_history_id', true);
            $this->session->set_userdata($history_info);


            $sdata = array();
            $sdata['save_message'] = '';
            $this->session->set_userdata($sdata);
            redirect('welcome/add_new_physicalfindings_systolic_information');
        }
    }

    public function save_patieint_history_info_by_prescription() {
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['extra_complaint'] = $this->input->post('extra_complaint', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['cc_name_id'] = $this->input->post('cc_name_id', true);
        $data['complaint_duration'] = $this->input->post('complaint_duration', true);
        $data['complaint_timing'] = $this->input->post('complaint_timing', true);
        $data['display'] = $this->input->post('display', true);
//   echo '<pre>';
//   print_r($data);
//   exit();
        $this->data_record_model->save_patient_history_Info($data);

        $history_info['complain_name'] = $this->input->post('complain_name', true);
        //$history_info['patient_history_info'] = $this->input->post('patient_history_info', true);
        $history_info['extra_complaint'] = $this->input->post('extra_complaint', true);
        $history_info['patieint_history_id'] = $this->input->post('patieint_history_id', true);
        $this->session->set_userdata($history_info);


        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('welcome/patient_prescription_step_one');
        // redirect('welcome/patient_prescription_step_one');
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/patient_prescription_step_one', $data);
        $this->load->view('home', $data);
    }

    public function save_patieint_history_info_by_prescription_update() {
        // $patient_id=$this->session->userdata('patient_id');
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;

        $data['extra_complaint'] = $this->input->post('extra_complaint', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $data['cc_name_id'] = $this->input->post('cc_name_id', true);
        $data['complaint_duration'] = $this->input->post('complaint_duration', true);
        $data['complaint_timing'] = $this->input->post('complaint_timing', true);
        //echo '<pre>';
        //print_r($data);
        //exit();
        $this->data_record_model->save_patient_history_Info($data);

        //$history_info = array();
        $history_info['complain_name'] = $this->input->post('complain_name', true);
        //$history_info['patient_history_info'] = $this->input->post('patient_history_info', true);
        $history_info['extra_complaint'] = $this->input->post('extra_complaint', true);
        $history_info['patieint_history_id'] = $this->input->post('patieint_history_id', true);
        $this->session->set_userdata($history_info);


        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('welcome/patient_prescription_by_update');

        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    //visiting_no


    public function save_patieint_history_info_by_comorbidity() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }


        $data['comorbidity_id'] = $this->input->post('comorbidity_id', true);
        $data['comorbidity_duration'] = $this->input->post('comorbidity_duration', true);
        $data['comorbidity_timing'] = $this->input->post('comorbidity_timing', true);
        $data['extra_comorbidity'] = $this->input->post('extra_comorbidity', true);
        $data['display'] = $this->input->post('display', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $this->data_record_model->save_patient_history_Info_by_comorbidity($data);

        $comorbidity = array();
        $comorbidity['comorbidity_id'] = $this->input->post('comorbidity_id', true);
        $comorbidity['comorbidity_duration'] = $this->input->post('comorbidity_duration', true);
        $comorbidity['comorbidity_timing'] = $this->input->post('comorbidity_timing', true);
        $comorbidity['extra_comorbidity'] = $this->input->post('extra_comorbidity', true);
        //$comorbidity['current_date'] = $this->input->post('current_date', true);
        $this->session->set_userdata($comorbidity);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('welcome/patient_prescription_step_one');
        // redirect('welcome/patient_prescription_step_one');
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data['comorbidityinfo'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/comorbidity', $data);
        $this->load->view('home', $data);

        //redirect('welcome/comorbidityInfo');
    }

    public function save_patieint_history_info_by_personalHistory() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['personal_id'] = $this->input->post('personal_id', true);
        $data['personal_history_duration'] = $this->input->post('personal_history_duration', true);
        $data['personal_history_timing'] = $this->input->post('personal_history_timing', true);
        $data['extra_personal_history'] = $this->input->post('extra_personal_history', true);
        $data['display'] = $this->input->post('display', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
        //$data['current_date'] = $this->input->post('current_date', true);

        $this->data_record_model->save_patient_history_Info_personal_history($data);

        $history_info = array();
        $history_info['personal_id'] = $this->input->post('personal_id', true);
        $history_info['personal_history_duration'] = $this->input->post('personal_history_duration', true);
        $history_info['personal_history_timing'] = $this->input->post('personal_history_timing', true);
        $history_info['extra_personal_history'] = $this->input->post('extra_personal_history', true);
        // $history_info['current_date'] = $this->input->post('current_date', true);
        $this->session->set_userdata($history_info);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        //$data['patient_history_info'] = $this->data_record_model->revisit_data_presenting_patient_history_info($manual_pid, $visiting_no,$current_date); 
        $data['patient_history_info'] = $this->data_record_model->revisit_data_personalhistory($manual_pid, $visiting_no, $current_date);
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/personalHistory', $data);
        $this->load->view('home', $data);

        //  redirect('welcome/personalHistorInfo');
    }

    public function save_personalHistory_info() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['patient_id']=$this->session->userdata('patient_id');    
        $data['personal_history_name'] = $this->input->post('personal_history_name', true);
        $this->data_record_model->save_personal_historyInfo($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Save..';
        $this->session->set_userdata($sdata);
        redirect('welcome/add_new_personal_history');
    }

    public function save_personalHistory_info_by_modal() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['personal_history_name'] = $this->input->post('personal_history_name', true);
        $this->data_record_model->save_personal_historyInfo($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Save..';
        $this->session->set_userdata($sdata);
        redirect('welcome/personalHistorInfo');
    }

    public function save_patieint_history_info_by_familyhistory() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['current_date'] = $this->session->userdata('current_date');
        $patientid = $this->data_record_model->findpatientid($patient_id, $manual_pid);
        $patient_id = $patientid->patient_id;

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        // END LOGIC
        //$data['familyhistory'] = $this->input->post('familyhistory', true);
        $data['familyhistory_value'] = $this->input->post('familyhistory_value', true);
        $data['nothing_contributory'] = $this->input->post('nothing_contributory', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        //$data['current_date'] = $this->session->userdata('current_date');
        $this->data_record_model->save_patient_history_Info_by_familyhistory($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Save..';
        $this->session->set_userdata($sdata);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['patient_family_history_info'] = $this->data_record_model->personal_family_history_by_search($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/familyHistory', $data);
        $this->load->view('home', $data);
        //redirect('welcome/familyHistory');
    }

    public function save_patieint_history_info_by_physical_findings() {

        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        // END LOGIC
        //$data['current_date'] = $this->session->userdata('current_date');
        $data['height'] = $this->input->post('height', true);
        $data['weight'] = $this->input->post('weight', true);
        $data['weightkg'] = $this->input->post('weightkg', true);
        $data['systolic'] = $this->input->post('systolic', true);
        $data['diastolic'] = $this->input->post('diastolic', true);
        $data['others_information'] = $this->input->post('others_information', true);
        $data['bsa'] = $this->input->post('bsa', true);
        $data['custom_phy_findings_id'] = $this->input->post('custom_phy_findings_id', true);
        $data['display'] = $this->input->post('display', true);
        //$data['phy_fin_value'] = $this->input->post('phy_fin_value', true);
        $phy_fin_value = $this->input->post('phy_fin_value', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $this->data_record_model->save_patient_history_Info_by_physical_findings($data);
        $this->data_record_model->save_physical_findings_value($data, $phy_fin_value);
        $sdata = array();
        $sdata['message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/physical_findings');
    }

    public function save_patieint_history_info_by_diagnosis() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['diagnosis_category_id'] = $this->input->post('diagnosis_category_id', true);
        $data['diagnosis'] = $this->input->post('diagnosis', true);
        $data['display'] = $this->input->post('display', true);
        // $data['current_date'] = $this->input->post('current_date', true);
        $this->data_record_model->save_patient_history_Info_by_diagnosis($data);
        $sdata = array();
        $sdata['message'] = '';
        $this->session->set_userdata($sdata);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($manual_pid, $visiting_no, $current_date);
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['maincontent'] = $this->load->view('source_file/diagnosis', $data);
        $this->load->view('home', $data);
        //redirect('welcome/diagnosis');
    }

    public function save_patieint_history_info_by_diagnosis_by_update() {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;

        $data['diagnosis'] = $this->input->post('diagnosis', true);
        //$data['current_date'] = $this->input->post('current_date', true);
        $this->data_record_model->save_patient_history_Info_by_diagnosis($data);
        $sdata = array();
        $sdata['message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('welcome/diagnosis');
        $url = base_url() . 'welcome/diagnostic_by_update/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function save_new_drug_name() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        $data['medicine_generic_id'] = $this->input->post('medicine_generic_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['pharma_name'] = $this->input->post('pharma_name', true);
        $data['pharma_cell_number'] = $this->input->post('pharma_cell_number', true);
        $data['pharma_email_number'] = $this->input->post('pharma_email_number', true);
        $data['current_date'] = $this->input->post('current_date', true);
        $data['mro_name'] = $this->input->post('mro_name', true);
        $data['address'] = $this->input->post('address', true);
        $data['drug_advice_info'] = $this->input->post('drug_advice_info', true);
        $result = $this->data_record_model->save_add_newd__drug_info($data);
        //$result=$this->data_record_model->save_doseType($data);
        if ($result == true) {
            echo "Saved successfully";
        } else {
            echo "Sorry, Already saved";
        }
    }

    public function save_new_drug_name_prescription() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['current_date'] = $this->session->userdata('current_date');
        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        $data['medicine_generic_id'] = $this->input->post('medicine_generic_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['pharma_name'] = $this->input->post('pharma_name', true);
        $data['pharma_cell_number'] = $this->input->post('pharma_cell_number', true);
        $data['pharma_email_number'] = $this->input->post('pharma_email_number', true);
        $data['mro_name'] = $this->input->post('mro_name', true);
        $data['address'] = $this->input->post('address', true);
        $this->data_record_model->save_add_newd__drug_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_prescription');
    }

    public function save_new_drug_name_prescription_by_revisit() {

        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['current_date'] = $result->current_date;

        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        $data['medicine_generic_id'] = $this->input->post('medicine_generic_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['pharma_name'] = $this->input->post('pharma_name', true);
        $data['pharma_cell_number'] = $this->input->post('pharma_cell_number', true);
        $data['pharma_email_number'] = $this->input->post('pharma_email_number', true);
        $data['mro_name'] = $this->input->post('mro_name', true);
        $data['address'] = $this->input->post('address', true);
        $this->data_record_model->save_add_newd__drug_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Successfully Added database';
        $this->session->set_userdata($sdata);
        // redirect('data_record/edit_revisit_prescription');
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function save_new_user_name() {

        $data = array();
        //  $data['user_id']=$this->session->userdata('user_id');
        $data['type'] = $this->input->post('type', true);
        $data['name'] = $this->input->post('name', true);
        $data['cell_number	'] = $this->input->post('cell_number', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $data['address'] = $this->input->post('address', true);
        $this->data_record_model->save_new_user_info($data);

        $sdata = array();
        $sdata['save_message'] = 'Thankyou for Registration';
        $this->session->set_userdata($sdata);
        redirect('welcome/user_registration');
    }

    public function save_add_new_patient_info() {
        //$this->session->unset_userdata('test_id');
        //$this->session->unset_userdata('reciv_date');
        //$this->session->unset_userdata('deli_date');
        //$this->session->unset_userdata('patient_name');
        //$this->session->unset_userdata('age');
        //$this->session->unset_userdata('sex');
        //$this->session->unset_userdata('ref_by');
        //$this->session->unset_userdata('hospital_name');

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');

        $data['visiting_no'] = 1;
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['manual_pid'] = preg_replace('/[^0-9]/', '', $this->input->post('next_patientid', true));

        $data['age'] = $this->input->post('age', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $data['current_date'] = date('Y-m-d', strtotime($this->input->post('current_date', true)));
        $data['address'] = $this->input->post('address', true);
        $patient_id = $this->data_record_model->save_patient_info_by_prescription($data);
        $data['patient_id'] = $patient_id;
        $patient_id_visit = $this->data_record_model->save_patient_info_by_prescription_visting_count($data);

        $patient_name = array();
        $patient_name['user_id'] = $this->session->userdata('user_id');
        $patient_name['patient_id'] = $patient_id;
        $patient_name['manual_pid'] = preg_replace('/[^0-9]/', '', $this->input->post('next_patientid', true));
        $patient_name['current_date'] = date('Y-m-d', strtotime($this->input->post('current_date', true)));
        $patient_name['patient_name'] = $this->input->post('patient_name', true);
        //$patient_name['patient_id'] = sprintf('%06d', ($patient_id));
        //$patient_name['patient_id']=sprintf('%06d',($this->admin_model->teacher_profile_data_save($data))+1);
        $patient_name['age'] = $this->input->post('age', true);
        $patient_name['visiting_no'] = 1;
        $patient_name['sex'] = $this->input->post('sex', true);
        $patient_name['address'] = $this->input->post('address', true);
        $patient_name['prescription_pt_id'] = $this->input->post('prescription_pt_id');
        $this->session->set_userdata($patient_name);


        $sdata = array();
        $sdata['save_message'] = 'Successfully Save...';

        $this->session->set_userdata($sdata);
        redirect('welcome/patient_prescription_step_one');
    }

    public function save_add_new_patient_appoint_info() {

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['prescription_pt_id']=$this->input->post('prescription_pt_id',true);
        $data['visiting_no'] = $this->input->post('visiting_no', true);
        $data['patient_name'] = $this->input->post('patient_name', true);
        $data['registration_date'] = $this->input->post('registration_date', true);
        $data['age'] = $this->input->post('age', true);
        $data['sex'] = $this->input->post('sex', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $data['current_date'] = $this->input->post('current_date', true);

        $patient_name = array();
        $patient_name['user_id'] = $this->session->userdata('user_id');
        $patient_name['patient_name'] = $this->input->post('patient_name', true);
        $patient_name['patient_id'] = sprintf('%06d', ($this->data_record_model->save_patient_info_by_prescription($data)) + 1);
        //$teacherInfo['teacher_pin']=sprintf('%06d',($this->admin_model->teacher_profile_data_save($data))+1);
        $patient_name['age'] = $this->input->post('age', true);
        $patient_name['sex'] = $this->input->post('sex', true);
        $patient_name['prescription_pt_id'] = $this->input->post('prescription_pt_id');
        $this->session->set_userdata($patient_name);


        $sdata = array();
        $sdata['save_message'] = 'Thankyou for Registration';
        $this->session->set_userdata($sdata);
        redirect('welcome/patient_appointment_list');
    }
    
    public function save_patient_appoint_info() {
        $data = array();
        $data['patient_name'] = $this->input->post('patient_name', true);
        //$data['current_date'] = date("d-m-Y",  strtotime($this->input->post('current_date', true)));
        $data['current_date'] = date('Y-m-d', strtotime($this->input->post('current_date', true)));
        $data['sex'] = $this->input->post('sex', true);
        $data['cell_number'] = $this->input->post('cell_number', true);
        $data['remarks'] = $this->input->post('remarks', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->data_record_model->save_patient_appointment($data);
        
        $sdata = array();
        $sdata['save_message'] = 'Successfully Send ...';
        $this->session->set_userdata($sdata);
        redirect('login/patient_appointment');
        
    }
    
    public function save_manage_patient_appoint_info() {
        $data = array();
        //$data['patient_name'] = $this->input->post('patient_name', true);
        //$data['current_date'] = date("d-m-Y",  strtotime($this->input->post('current_date', true)));
        $data['current_date'] = date('Y-m-d', strtotime($this->input->post('current_date', true)));
        $data['patient_limit'] = $this->input->post('patient_limit', true);
        $data['notice'] = $this->input->post('notice', true);
      //  $data['remarks'] = $this->input->post('remarks', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->data_record_model->save_manange_patient_appointment($data);
        
        $sdata = array();
        $sdata['save_message'] = 'Thankyou for Registration';
        $this->session->set_userdata($sdata);
        
        redirect('welcome/manage_appointment');
    }

    public function revisit_prescription_ajax_tableinfo() {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['prescription_id'] = $this->input->post('prescription_id', true);
        $data['dose_id'] = $this->input->post('dose_id', true);

        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['strength'] = $this->input->post('strength', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['amount'] = $this->input->post('amount', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        //$data['path_test_group_id']=$this->input->post('path_test_group_id',true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['day'] = $this->input->post('day', true);
        // $data['date'] = $this->input->post('date', true);
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        //$test_name=$this->input->post('test_name',true);
        echo '<pre>';
        print_r($data);
        exit();
        $this->data_record_model->save_prescription_ajax_table($data);
        $sdata = array();
        $sdata['save_message'] = 'Update';
        $this->session->set_userdata($sdata);
        //redirect('data_record/edit_revisit_prescription');     
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function save_prescription_ajax_tableinfo() {

        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['patient_name'] = $this->session->userdata('patient_name');
        //$patientid=$this->data_record_model->findpatientid($patient_id,$manual_pid);
        //$patient_id=$patientid->patient_id;
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['strength'] = $this->input->post('strength', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['amount'] = $this->input->post('amount', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        //$data['path_test_group_id']=$this->input->post('path_test_group_id',true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['day'] = $this->input->post('day', true);
        //$data['date'] = $this->input->post('date', true);
        //$data['visiting_no'] = $this->session->userdata('visiting_no');
        //$test_name=$this->input->post('test_name',true);

        $this->data_record_model->save_prescription_ajax_table($data);
        $sdata = array();
        $sdata['save_message'] = 'Save';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_prescription');
    }

    public function revisit_save_prescription_ajax_table() {
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['p_date']=$this->session->userdata('p_date');
        //$revisitInformation
        // $data['patient_id']=$this->input->post('patient_id',true);
        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['strength'] = $this->input->post('strength', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['amount'] = $this->input->post('amount', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        //$data['path_test_group_id']=$this->input->post('path_test_group_id',true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['day'] = $this->input->post('day', true);
        $data['date'] = date("Y-m-d");
        $this->data_record_model->revisit_save_prescription_ajax_table($data);
        $r_data = array();
        $r_data['revisitInformation'] = trim($this->session->userdata('p_id'));
        $url = base_url() . 'data_record/re_visit_conditional_prescription/' . $r_data['revisitInformation'] . 'date' . date("Y-m-d");
        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($r_data);
        redirect($url);
    }

    public function revisit_save_patieint_history_info_by_prescription() {

        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;

        // $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('p_id');
        $data['patient_history_info'] = $this->input->post('patient_history_info', true);
        $data['cc_group_id'] = $this->input->post('cc_group_id', true);
        $data['extra_complaint'] = $this->input->post('extra_complaint', true);

        $complain_name = $this->input->post('complain_name', true);

        $this->data_record_model->save_patient_history_Info($data, $complain_name);

        $r_data = array();

        $url = base_url() . 'data_record/re_visit_conditional_prescription/' . trim($this->session->userdata('p_id')) . 'date' . date("Y-m-d");

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($r_data);
        redirect($url);
    }

    public function save_prescription_ajax_table_by_investigation() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['current_date'] = $this->session->userdata('current_date');
        $patientid = $this->data_record_model->findpatientid($patient_id, $manual_pid);
        $patient_id = $patientid->patient_id;
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $test_name = $this->input->post('test_name', true);
        $this->data_record_model->save_prescription_ajax_investigation($data, $test_name);

        $testname = array();
        $testname['test_name'] = $this->input->post('test_name', true);
        $this->session->set_userdata($testname);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_prescription');
    }

    public function save_prescription_ajax_table_by_investigation_autocomplete() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        //$data['current_date'] = $this->session->userdata('current_date');
        $patientid = $this->data_record_model->findpatientid($patient_id, $manual_pid);
        $patient_id = $patientid->patient_id;
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['test_name'] = $this->input->post('test_name', true);

        $this->data_record_model->save_prescription_ajax_investigation_autocompleteinfo($data);

        $testname = array();
        $testname['test_name'] = $this->input->post('test_name', true);
        $this->session->set_userdata($testname);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        redirect('welcome/my_prescription');
    }

    public function save_prescription_ajax_table_by_investigation_revisit() {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $test_name = $this->input->post('test_name', true);
        $this->data_record_model->save_prescription_ajax_investigation($data, $test_name);

        $testname = array();
        $testname['test_name'] = $this->input->post('test_name', true);
        $this->session->set_userdata($testname);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('data_record/edit_revisit_prescription');
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    // revisit information

    public function revisit_advice() {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;
        $data['add_advice_id'] = $this->input->post('add_advice_id', true);
        $this->data_record_model->save_patientAdviceInfo_revisit($data);
        $testname = array();
        $testname['add_advice_id'] = $this->input->post('add_advice_id', true);
        $this->session->set_userdata($testname);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('data_record/edit_revisit_prescription');
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function revisit_investigation_by_precription() {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;

        $data['test_name'] = $this->input->post('test_name', true);
        $this->data_record_model->save_prescription_ajax_investigation_autocompleteinfo($data);

        $testname = array();
        $testname['test_name'] = $this->input->post('test_name', true);
        $this->session->set_userdata($testname);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('data_record/edit_revisit_prescription');
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function revisit_drug() {
        $pid = $this->session->userdata('pid');
        $visitno = $this->session->userdata('visitno');
        $patientid = $pdata[0];
        //$manual_pid = $pdata[1];
        $visiting_no = $pdata[1];
        $result = $this->data_record_model->call_patientid($pid);

        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $result->patient_id;
        $data['manual_pid'] = $result->manual_pid;
        $data['current_date'] = $result->current_date;
        $data['visiting_no'] = $visitno;

        $data['dose_id'] = $this->input->post('dose_id', true);
        $data['brand_name'] = $this->input->post('brand_name', true);
        $data['strength'] = $this->input->post('strength', true);
        $data['dose_schedule_id'] = $this->input->post('dose_schedule_id', true);
        $data['amount'] = $this->input->post('amount', true);
        $data['doseSuggestion_id'] = $this->input->post('doseSuggestion_id', true);
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $data['test_name'] = $this->input->post('test_name', true);
        $data['day'] = $this->input->post('day', true);

        $this->data_record_model->revisitdruginformation($data);

        $testname = array();
        $testname['add_advice_id'] = $this->input->post('add_advice_id', true);
        $this->session->set_userdata($testname);

        $sdata = array();
        $sdata['save_message'] = '';
        $this->session->set_userdata($sdata);
        //redirect('data_record/edit_revisit_prescription');
        $url = base_url() . 'data_record/edit_revisit_prescription/' . $pid . 'VisitNo' . $visitno;
        redirect($url);
    }

    public function revisit_save_prescription_ajax_table_by_advice() {
        $data = array();
        $data['user_id'] = $this->session->userdata('user_id');
        $data['patient_id'] = $this->session->userdata('p_id');
        $data['path_test_group_id'] = $this->input->post('path_test_group_id', true);
        $data['current_date'] = date("Y-m-d");
        $test_name = $this->input->post('test_name', true);

        $this->data_record_model->save_prescription_ajax_advice($data, $test_name);

        $r_data = array();
        $r_data['adviceinfo'] = trim($this->session->userdata('p_id'));
        $url = base_url() . 'data_record/re_visit_conditional_prescription/' . $r_data['adviceinfo'] . 'date' . date("Y-m-d");

        $testname = array();
        $testname['test_name'] = $this->input->post('test_name', true);
        $this->session->set_userdata($testname);
        $sdata = array();
        $this->session->set_userdata($sdata);
        redirect($url);
    }

    public function save_haematologyreporting() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['hb'] = $this->input->post('hb', true);
        $data['esr'] = $this->input->post('esr', true);
        $data['rbc'] = $this->input->post('rbc', true);
        $data['platelete'] = $this->input->post('platelete', true);
        $data['wbc'] = $this->input->post('wbc', true);
        $data['ce'] = $this->input->post('ce', true);
        $data['rc'] = $this->input->post('rc', true);
        $data['neutrophils'] = $this->input->post('neutrophils', true);
        $data['lymphocytes'] = $this->input->post('lymphocytes', true);
        $data['eosinophils'] = $this->input->post('eosinophils', true);
        $data['monocytes'] = $this->input->post('monocytes', true);
        $data['basophil'] = $this->input->post('basophil', true);
        $data['parameter_one'] = $this->input->post('parameter_one', true);
        $data['parameter_two'] = $this->input->post('parameter_two', true);
        $data['parameter_three'] = $this->input->post('parameter_three', true);
        $data['parameter_four'] = $this->input->post('parameter_four', true);
        $data['parameter_five'] = $this->input->post('parameter_five', true);
        $data['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $data['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $data['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $data['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $data['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $data['hct'] = $this->input->post('hct', true);
        $data['mcv'] = $this->input->post('mcv', true);
        $data['mch'] = $this->input->post('mch', true);
        $data['mchc'] = $this->input->post('mchc', true);
        $data['rdw'] = $this->input->post('rdw', true);
        $data['mp'] = $this->input->post('mp', true);
        $data['pbf'] = $this->input->post('pbf', true);
        $data['bt_min'] = $this->input->post('bt_min', true);
        $data['bt_sec'] = $this->input->post('bt_sec', true);
        $data['ct_min'] = $this->input->post('ct_min', true);
        $data['ct_sec'] = $this->input->post('ct_sec', true);
        $data['display'] = $this->input->post('display', true);

        $this->data_record_model->save_patient_history_Info_by_haematologyReport($data);
        $sdata = array();
        $sdata['save_message'] = 'Successfully Save..';
        $this->session->set_userdata($sdata);
        $haematology = array();
        $haematology['user_id'] = $this->session->userdata('user_id');
        $haematology['patient_id'] = $this->session->userdata('patient_id');
        $haematology['reciv_date'] = $this->input->post('reciv_date', true);

        $haematology['hb'] = $this->input->post('hb', true);
        $haematology['esr'] = $this->input->post('esr', true);
        $haematology['rbc'] = $this->input->post('rbc', true);
        $haematology['platelete'] = $this->input->post('platelete', true);
        $haematology['wbc'] = $this->input->post('wbc', true);
        $haematology['ce'] = $this->input->post('ce', true);
        $haematology['rc'] = $this->input->post('rc', true);
        $haematology['neutrophils'] = $this->input->post('neutrophils', true);
        $haematology['lymphocytes'] = $this->input->post('lymphocytes', true);
        $haematology['eosinophils'] = $this->input->post('eosinophils', true);
        $haematology['monocytes'] = $this->input->post('monocytes', true);
        $haematology['basophil'] = $this->input->post('basophil', true);
        $haematology['parameter_one'] = $this->input->post('parameter_one', true);
        $haematology['parameter_two'] = $this->input->post('parameter_two', true);
        $haematology['parameter_three'] = $this->input->post('parameter_three', true);
        $haematology['parameter_four'] = $this->input->post('parameter_four', true);
        $haematology['parameter_five'] = $this->input->post('parameter_five', true);
        $haematology['para_one_rpt'] = $this->input->post('para_one_rpt', true);
        $haematology['para_two_rpt'] = $this->input->post('para_two_rpt', true);
        $haematology['para_three_rpt'] = $this->input->post('para_three_rpt', true);
        $haematology['para_four_rpt'] = $this->input->post('para_four_rpt', true);
        $haematology['para_five_rpt'] = $this->input->post('para_five_rpt', true);
        $haematology['hct'] = $this->input->post('hct', true);
        $haematology['mcv'] = $this->input->post('mcv', true);
        $haematology['mch'] = $this->input->post('mch', true);
        $haematology['mchc'] = $this->input->post('mchc', true);
        $haematology['rdw'] = $this->input->post('rdw', true);
        $haematology['mp'] = $this->input->post('mp', true);
        $haematology['pbf'] = $this->input->post('pbf', true);
        $haematology['bt_min'] = $this->input->post('bt_min', true);
        $haematology['bt_sec'] = $this->input->post('bt_sec', true);
        $haematology['ct_min'] = $this->input->post('ct_min', true);
        $haematology['ct_sec'] = $this->input->post('ct_sec', true);
        $this->session->set_userdata($haematology);
        redirect('welcome/haematology');
    }

    public function save_urine_reporting() {
        $data = array();
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        // END LOGIC
        $data['user_id'] = $this->session->userdata('user_id');
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['quantity'] = $this->input->post('quantity');
        $data['color'] = $this->input->post('color');
        $data['apper'] = $this->input->post('apper');
        $data['sediment'] = $this->input->post('sediment');
        $data['spe_grav'] = $this->input->post('spe_grav');
        $data['reaction'] = $this->input->post('reaction');
        $data['ex_ph'] = $this->input->post('ex_ph');
        $data['albumin'] = $this->input->post('albumin');
        $data['sugur'] = $this->input->post('sugur');
        $data['others'] = $this->input->post('others');
        $data['acetone'] = $this->input->post('acetone');
        $data['pus_cells'] = $this->input->post('pus_cells');
        $data['rbcs'] = $this->input->post('rbcs');
        $data['mucus'] = $this->input->post('mucus');
        $data['pus_cast'] = $this->input->post('pus_cast');
        $data['sperat'] = $this->input->post('sperat');
        $data['wbc'] = $this->input->post('wbc');
        $data['granuloar'] = $this->input->post('granuloar');
        $data['cal_oxa'] = $this->input->post('cal_oxa');
        $data['uric_acid'] = $this->input->post('uric_acid');
        $data['tre_phs'] = $this->input->post('tre_phs');
        $data['sulph_cry'] = $this->input->post('sulph_cry');
        $data['hayline_cast'] = $this->input->post('hayline_cast');
        $data['bacteria'] = $this->input->post('bacteria');
        $data['bile_pig'] = $this->input->post('bile_pig');
        $data['urobili'] = $this->input->post('urobili');
        $data['chyle'] = $this->input->post('chyle');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['ep_cell'] = $this->input->post('ep_cell');
        $data['bile_salt'] = $this->input->post('bile_salt');
        $data['candida'] = $this->input->post('candida');
        $data['amr_ph'] = $this->input->post('amr_ph');
        $data['urate_crys'] = $this->input->post('urate_crys');
        $data['display'] = $this->input->post('display');
        $data['extra_urine'] = $this->input->post('extra_urine');
        $this->data_record_model->save_urine_re_rpt($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        $ure = array();
        $ure['user_id'] = $this->session->userdata('user_id');
        $ure['patient_id'] = $this->session->userdata('patient_id');

        $ure['reciv_date'] = $this->input->post('reciv_date');
        $ure['material'] = $this->input->post('material');
        $ure['quantity'] = $this->input->post('quantity');
        $ure['color'] = $this->input->post('color');
        $ure['apper'] = $this->input->post('apper');
        $ure['sediment'] = $this->input->post('sediment');
        $ure['spe_grav'] = $this->input->post('spe_grav');
        $ure['reaction'] = $this->input->post('reaction');
        $ure['ex_ph'] = $this->input->post('ex_ph');
        $ure['albumin'] = $this->input->post('albumin');
        $ure['sugur'] = $this->input->post('sugur');
        $ure['others'] = $this->input->post('others');
        $ure['acetone'] = $this->input->post('acetone');
        $ure['pus_cells'] = $this->input->post('pus_cells');
        $ure['rbcs'] = $this->input->post('rbcs');
        $ure['mucus'] = $this->input->post('mucus');
        $ure['pus_cast'] = $this->input->post('pus_cast');
        $ure['sperat'] = $this->input->post('sperat');
        $ure['wbc'] = $this->input->post('wbc');
        $ure['granuloar'] = $this->input->post('granuloar');
        $ure['cal_oxa'] = $this->input->post('cal_oxa');
        $ure['uric_acid'] = $this->input->post('uric_acid');
        $ure['tre_phs'] = $this->input->post('tre_phs');
        $ure['sulph_cry'] = $this->input->post('sulph_cry');
        $ure['hayline_cast'] = $this->input->post('hayline_cast');
        $ure['bacteria'] = $this->input->post('bacteria');
        $ure['bile_pig'] = $this->input->post('bile_pig');
        $ure['urobili'] = $this->input->post('urobili');
        $ure['chyle'] = $this->input->post('chyle');
        $ure['b_jons_protein'] = $this->input->post('b_jons_protein');
        $ure['ep_cell'] = $this->input->post('ep_cell');
        $ure['bile_salt'] = $this->input->post('bile_salt');
        $ure['candida'] = $this->input->post('candida');
        $ure['amr_ph'] = $this->input->post('amr_ph');
        $ure['urate_crys'] = $this->input->post('urate_crys');
        $ure['extra_urine'] = $this->input->post('extra_urine');
        $this->session->set_userdata($ure);
        redirect("welcome/urine_report");
    }

    public function save_stool_re() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['quantity'] = $this->input->post('quantity');
        $data['consistency'] = $this->input->post('consistency');
        $data['color'] = $this->input->post('color');
        $data['un_fp'] = $this->input->post('un_fp');
        $data['ordor'] = $this->input->post('ordor');
        $data['mucus'] = $this->input->post('mucus');
        $data['blood'] = $this->input->post('blood');
        $data['helminth'] = $this->input->post('helminth');
        $data['reaction'] = $this->input->post('reaction');
        $data['rs'] = $this->input->post('rs');
        $data['fat'] = $this->input->post('fat');
        $data['ova_al'] = $this->input->post('ova_al');
        $data['bilirubin'] = $this->input->post('bilirubin');
        $data['b_jons_protein'] = $this->input->post('b_jons_protein');
        $data['vege_cell'] = $this->input->post('vege_cell');
        $data['epithe_cells'] = $this->input->post('epithe_cells');
        $data['puss_cell'] = $this->input->post('puss_cell');
        $data['rbc'] = $this->input->post('rbc');
        $data['obt'] = $this->input->post('obt');
        $data['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $data['macrophages'] = $this->input->post('macrophages');
        $data['muscle_fibre'] = $this->input->post('muscle_fibre');
        $data['fat_globules'] = $this->input->post('fat_globules');
        $data['starch_granules'] = $this->input->post('starch_granules');
        $data['cl_crystals'] = $this->input->post('cl_crystals');
        $data['bacteria'] = $this->input->post('bacteria');
        $data['troph_giardia'] = $this->input->post('troph_giardia');
        $data['larva_of'] = $this->input->post('larva_of');
        $data['obt'] = $this->input->post('obt');
        $data['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $data['cyst_of_col'] = $this->input->post('cyst_of_col');
        $data['t_hominis'] = $this->input->post('t_hominis');
        $data['blas_homins'] = $this->input->post('blas_homins');
        $data['cast'] = $this->input->post('cast');
        $data['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $data['candida'] = $this->input->post('candida');
        $data['extra_stool'] = $this->input->post('extra_stool');
        $data['display'] = $this->input->post('display');
        $this->data_record_model->save_stool_re($data);

        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);

        $stool_re = array();
        $stool_re['test_id'] = $this->input->post('test_id', true);
        $stool_re['reciv_date'] = $this->input->post('reciv_date');
        $stool_re['deli_date'] = $this->input->post('deli_date');
        $stool_re['material'] = $this->input->post('material');
        $stool_re['quantity'] = $this->input->post('quantity');
        $stool_re['consistency'] = $this->input->post('consistency');
        $stool_re['color'] = $this->input->post('color');
        $stool_re['un_fp'] = $this->input->post('un_fp');
        $stool_re['ordor'] = $this->input->post('ordor');
        $stool_re['mucus'] = $this->input->post('mucus');
        $stool_re['blood'] = $this->input->post('blood');
        $stool_re['helminth'] = $this->input->post('helminth');
        $stool_re['reaction'] = $this->input->post('reaction');
        $stool_re['rs'] = $this->input->post('rs');
        $stool_re['fat'] = $this->input->post('fat');
        $stool_re['obt'] = $this->input->post('obt');
        $stool_re['ova_al'] = $this->input->post('ova_al');
        $stool_re['bilirubin'] = $this->input->post('bilirubin');
        $stool_re['b_jons_protein'] = $this->input->post('b_jons_protein');
        $stool_re['vege_cell'] = $this->input->post('vege_cell');
        $stool_re['epithe_cells'] = $this->input->post('epithe_cells');
        $stool_re['puss_cell'] = $this->input->post('puss_cell');
        $stool_re['rbc'] = $this->input->post('rbc');
        $stool_re['obt'] = $this->input->post('obt');
        $stool_re['str_and_sterobili'] = $this->input->post('str_and_sterobili');
        $stool_re['macrophages'] = $this->input->post('macrophages');
        $stool_re['muscle_fibre'] = $this->input->post('muscle_fibre');
        $stool_re['fat_globules'] = $this->input->post('fat_globules');
        $stool_re['starch_granules'] = $this->input->post('starch_granules');
        $stool_re['cl_crystals'] = $this->input->post('cl_crystals');
        $stool_re['bacteria'] = $this->input->post('bacteria');
        $stool_re['troph_giardia'] = $this->input->post('troph_giardia');
        $stool_re['larva_of'] = $this->input->post('larva_of');
        $stool_re['cyst_of_giardia'] = $this->input->post('cyst_of_giardia');
        $stool_re['cyst_of_col'] = $this->input->post('cyst_of_col');
        $stool_re['t_hominis'] = $this->input->post('t_hominis');
        $stool_re['blas_homins'] = $this->input->post('blas_homins');
        $stool_re['cast'] = $this->input->post('cast');
        $stool_re['fusifo_bacili'] = $this->input->post('fusifo_bacili');
        $stool_re['candida'] = $this->input->post('candida');
        $stool_re['search_stool'] = $this->input->post('search_stool');
        $this->session->set_userdata($stool_re);
        redirect("welcome/stool_report");
    }

    public function save_histopathology_report() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['display'] = $this->input->post('display');
        $histopahtology_report = array();
        $histopahtology_report['user_id'] = $this->session->userdata('user_id');
        $histopahtology_report['patient_id'] = $this->session->userdata('patient_id');
        $histopahtology_report['reciv_date'] = $this->input->post('reciv_date');
        $histopahtology_report['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($histopahtology_report);

        $this->data_record_model->save_histopathology_report($data);
        $sdata = array();
        $sdata['save_messages_histo'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/histopathology_report");
    }

    public function save_cytopathology_report() {
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['display'] = $this->input->post('display');
        $cytopahtology_report = array();
        $cytopahtology_report['user_id'] = $this->session->userdata('user_id');
        $cytopahtology_report['patient_id'] = $this->session->userdata('patient_id');
        $cytopahtology_report['reciv_date'] = $this->input->post('reciv_date');
        $cytopahtology_report['patient_name'] = $this->input->post('patient_name');
        $cytopahtology_report['age'] = $this->input->post('age');
        $cytopahtology_report['sex'] = $this->input->post('sex');
        $cytopahtology_report['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($cytopahtology_report);

        $this->data_record_model->save_cytopathology_report($data);
        $sdata = array();
        $sdata['save_messages_cytopathology'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/cytopathology_report");
    }

    public function save_karyotype_report_info() {
        $data = array();

        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));

        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display');
        //        $data['report_description'] = preg_replace('/<p\b[^>]*>(.*?)<\/p>/i', '',$this->input->post('report_description'));
        $karyotype_report = array();
        $karyotype_report['user_id'] = $this->session->userdata('user_id');
        $karyotype_report['patient_id'] = $this->session->userdata('patient_id');
        $karyotype_report['reciv_date'] = $this->input->post('reciv_date');
        $karyotype_report['report_description'] = $this->input->post('report_description');

        $this->session->set_userdata($karyotype_report);

        $this->data_record_model->save_karyotype_report_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/karyotype_report_report");
    }

    public function save_radiology_report() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['path_test_group_id'] = $this->input->post('path_test_group_id');
        $data['test_name'] = $this->input->post('test_name');
        $data['display'] = $this->input->post('display');
        $radiology_report = array();
        $radiology_report['user_id'] = $this->session->userdata('user_id');
        $radiology_report['patient_id'] = $this->session->userdata('patient_id');
        $radiology_report['reciv_date'] = $this->input->post('reciv_date');
        $radiology_report['path_test_group_id'] = $this->input->post('reciv_date');
        $radiology_report['test_name'] = $this->input->post('test_name');
        $radiology_report['patient_name'] = $this->input->post('patient_name');
        $radiology_report['age'] = $this->input->post('age');
        $radiology_report['sex'] = $this->input->post('sex');
        $radiology_report['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($radiology_report);

        $this->data_record_model->save_radiology_report($data);
        $sdata = array();
        $sdata['save_radiology_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/radiology_report");
    }

    public function save_immunophenotype_report() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['immunphenotype_id'] = $this->input->post('immunphenotype_id');
        $data['description'] = $this->input->post('description');
        $data['value'] = $this->input->post('value');
        //$data['negative'] = $this->input->post('negative');
        $data['cell_line'] = $this->input->post('cell_line');
        $data['display'] = $this->input->post('display');

        $immunophenotype = array();
        $immunophenotype['user_id'] = $this->session->userdata('user_id');
        $immunophenotype['patient_id'] = $this->session->userdata('patient_id');
        $immunophenotype['reciv_date'] = $this->input->post('reciv_date');
        $immunophenotype['immunphenotype_id'] = $this->input->post('immunphenotype_id');
        $immunophenotype['value'] = $this->input->post('value');
        $immunophenotype['cell_line'] = $this->input->post('cell_line');
        $immunophenotype['description'] = $this->input->post('description');
        $this->session->set_userdata($immunophenotype);
        $this->data_record_model->save_immunophenotype_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/immunophenotyping_report");
    }

    public function save_cytogenetic_report() {
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['cytogenetic_test_name_id'] = $this->input->post('cytogenetic_test_name_id');
        $data['result'] = $this->input->post('result');
        $data['display'] = $this->input->post('display');
//        echo '<pre>';
//        print_r($data);
//        exit();
        $cytogenetic = array();
        $cytogenetic['user_id'] = $this->session->userdata('user_id');
        $cytogenetic['patient_id'] = $this->session->userdata('patient_id');
        $cytogenetic['reciv_date'] = $this->input->post('reciv_date');
        $cytogenetic['cytogenetic_test_name_id'] = $this->input->post('cytogenetic_test_name_id');
        $cytogenetic['result'] = $this->input->post('result');

        $this->session->set_userdata($cytogenetic);

        $this->data_record_model->save_cytogenetic_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/cytogenetic_report");
    }

    public function save_usg_report() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display', true);

        $usgdata = array();
        $usgdata['user_id'] = $this->session->userdata('user_id');
        $usgdata['patient_id'] = $this->session->userdata('patient_id');
        $usgdata['test_id'] = $this->input->post('test_id', true);
        $usgdata['reciv_date'] = $this->input->post('reciv_date');
        $usgdata['deli_date'] = $this->input->post('deli_date');
        $usgdata['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($usgdata);

        $this->data_record_model->save_usg_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/usg_report");
    }

    public function save_bonemarrow_report() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['display'] = $this->input->post('display');
        // customized rpt
        $data['introudction'] = $this->input->post('introudction');
        $data['aspiration'] = $this->input->post('aspiration');
        $data['stain_used'] = $this->input->post('stain_used');
        $data['cellularity_inf'] = $this->input->post('cellularity_inf');
        $data['meratio'] = $this->input->post('meratio');
        $data['ery'] = $this->input->post('ery');
        $data['granu'] = $this->input->post('granu');
        $data['mega'] = $this->input->post('mega');
        $data['ly_his_pls_cells'] = $this->input->post('ly_his_pls_cells');
        $data['parasites'] = $this->input->post('parasites');
        $data['others'] = $this->input->post('others');
        $data['special_stain'] = $this->input->post('special_stain');
        $data['comment'] = $this->input->post('comment');
        $data['test_to_follow'] = $this->input->post('test_to_follow');
        $data['reviewed_by'] = $this->input->post('reviewed_by');

        $bonemarrow = array();
        $bonemarrow['user_id'] = $this->session->userdata('user_id');
        $bonemarrow['patient_id'] = $this->session->userdata('patient_id');

        $bonemarrow['test_id'] = $this->input->post('test_id', true);
        $bonemarrow['reciv_date'] = $this->input->post('reciv_date');
        $bonemarrow['deli_date'] = $this->input->post('deli_date');

        $bonemarrow['report_description'] = $this->input->post('report_description');
        //customied session rpt
        $bonemarrow['introudction'] = $this->input->post('introudction');
        $bonemarrow['aspiration'] = $this->input->post('aspiration');
        $bonemarrow['stain_used'] = $this->input->post('stain_used');
        $bonemarrow['cellularity_inf'] = $this->input->post('cellularity_inf');
        $bonemarrow['meratio'] = $this->input->post('meratio');
        $bonemarrow['ery'] = $this->input->post('ery');
        $bonemarrow['granu'] = $this->input->post('granu');
        $bonemarrow['mega'] = $this->input->post('mega');
        $bonemarrow['ly_his_pls_cells'] = $this->input->post('ly_his_pls_cells');
        $bonemarrow['parasites'] = $this->input->post('parasites');
        $bonemarrow['others'] = $this->input->post('others');
        $bonemarrow['special_stain'] = $this->input->post('special_stain');
        $bonemarrow['comment'] = $this->input->post('comment');
        $bonemarrow['test_to_follow'] = $this->input->post('test_to_follow');
        $bonemarrow['reviewed_by'] = $this->input->post('reviewed_by');
        $this->session->set_userdata($bonemarrow);

        $this->data_record_model->save_bonemarrow_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save';
        $this->session->set_userdata($sdata);
        redirect("welcome/bone_marrow");
    }

    public function save_echo_report() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');
        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description', true);
        $data['display'] = $this->input->post('display');
        $echoreport = array();
        $echoreport['user_id'] = $this->session->userdata('user_id');
        $echoreport['patient_id'] = $this->session->userdata('patient_id');
        $echoreport['reciv_date'] = $this->input->post('reciv_date');
        $echoreport['patient_name'] = $this->input->post('patient_name');
        $echoreport['age'] = $this->input->post('age');
        $echoreport['sex'] = $this->input->post('sex');
        $echoreport['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($echoreport);

        $this->data_record_model->save_echo_report($data);
        $sdata = array();
        $sdata['save_messages_echo'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/echo_report");
    }

    public function save_others_report() {
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['report_description'] = $this->input->post('report_description');
        $data['display'] = $this->input->post('display');
        $othersreport = array();
        $othersreport['user_id'] = $this->session->userdata('user_id');
        $othersreport['patient_id'] = $this->session->userdata('patient_id');
        $othersreport['reciv_date'] = $this->input->post('reciv_date');
        $othersreport['patient_name'] = $this->input->post('patient_name');
        $othersreport['age'] = $this->input->post('age');
        $othersreport['sex'] = $this->input->post('sex');
        $othersreport['report_description'] = $this->input->post('report_description');
        $this->session->set_userdata($othersreport);

        $this->data_record_model->save_others_report($data);
        $sdata = array();
        $sdata['save_messages_others'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/others_report");
    }

    public function save_multiple_reporting() {
        $this->session->unset_userdata('test_id');
        $data = array();
        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {
            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('current_date')));
        }
        $data['user_id'] = $this->session->userdata('user_id');
        $data['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $data['path_test_id'] = $this->input->post('path_test_id', true);
        $data['result'] = $this->input->post('result', true);
        $data['unit'] = $this->input->post('unit', true);
        $data['normal_range'] = $this->input->post('normal_range', true);
        $data['display'] = $this->input->post('display', true);
        $multiplereport = array();
        // $multiplereport['current_date'] = $this->input->post('current_date', true);
        $multiplereport['test_id'] = $this->input->post('test_id', true);
        //$multiplereport['reciv_date'] = $this->input->post('reciv_date', true);
        $multiplereport['reciv_date'] = date("Y-m-d", strtotime($this->input->post('reciv_date', true)));
        $multiplereport['deli_date'] = $this->input->post('deli_date', true);
        $multiplereport['patient_name'] = $this->input->post('patient_name', true);
        $multiplereport['age'] = $this->input->post('age', true);
        $multiplereport['ref_by'] = $this->input->post('ref_by', true);
        $multiplereport['sex'] = $this->input->post('sex', true);
        $multiplereport['hospital_name'] = $this->input->post('hospital_name', true);
        $multiplereport['path_test_id'] = $this->input->post('path_test_id', true);
        $multiplereport['result'] = $this->input->post('result', true);
        $multiplereport['unit'] = $this->input->post('unit', true);
        $multiplereport['normal_range'] = $this->input->post('normal_range', true);
        $this->session->set_userdata($multiplereport);
        $this->data_record_model->save_multiple_report($data);
        $sdata = array();
        $sdata['save_messages'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/biochemistry_report");
    }

    public function save_chemotherapy_regemin_main() {

        // START LOGIC 
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['user_id'] = $this->session->userdata('user_id');
        $data['custom_chemotherapy_regmine_id'] = $this->input->post('custom_chemotherapy_regmine_id', true);
        $data['chemotherapy_regimen_value'] = $this->input->post('chemotherapy_regimen_value', true);
        $data['cycle'] = $this->input->post('cycle', true);
        $data['next_cycle'] = $this->input->post('next_cycle', true);
        //$data['file_upload'] = $this->input->post('file_upload', true);

        if ($_FILES['file_upload']['size'] <= 10000000000000000) {
            $result = $this->do_upload('file_upload');
            if ($result['upload_data']) {
                $data['file_upload'] = 'resource/rpt_folder/' . $result['upload_data']['file_name'];
            }
        } else {
            
        }

        $this->data_record_model->save_chemotherapy_regimen_man($data);
        $sdata = array();
        $sdata['save_messages_prtocol_help'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        redirect("welcome/chemotherapy_region");
    }

    public function save_protocol_cycle() {
        $data = array();
        $data['patient_id'] = $this->session->userdata('patient_id');
        $patient_id = $this->session->userdata('patient_id');
        $data['manual_pid'] = $this->session->userdata('manual_pid');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['visiting_no'] = $this->session->userdata('visiting_no');
        $data['user_id'] = $this->session->userdata('user_id');
        $cycleno = $this->data_record_model->call_cycleno($manual_pid, $patient_id);
        $data['cycle_no'] = $cycleno->cycle_no + 1;

        $currentdate = $this->session->userdata('current_date');
        if ($currentdate != NULL) {
            $data['current_date'] = Date("Y-m-d", strtotime($currentdate));
            $this->session->unset_userdata('revisit_date');
        } else {

            $data['current_date'] = Date("Y-m-d", strtotime($this->session->userdata('revisit_date')));
        }

        $data['user_id'] = $this->session->userdata('user_id');
        $data['cycle_date_one'] = date("Y-m-d", strtotime($this->input->post('cycle_date_one', true)));
        $data['cycle_date_two'] = date("Y-m-d", strtotime($this->input->post('cycle_date_two', true)));
        $data['remarks'] = $this->input->post('remarks', true);
        //$data['next_cycle'] = $this->input->post('next_cycle', true);
        //$data['file_upload'] = $this->input->post('file_upload', true);

        $this->data_record_model->save_chemotherapy_regimen_protocol_cycle($data);
        $sdata = array();
        $sdata['save_messages_prtocol_help'] = 'Successfully save..... ';
        $this->session->set_userdata($sdata);
        // redirect("welcome/chemotherapy_region");

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data['ChemotherapyInformationMain'] = $this->data_record_model->chemotherapyRegimenInfo_by_search($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date);
        $data['patient_cycle_info'] = $this->data_record_model->pt_cycle_info($manual_pid);

        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        $data['chemotherapy_regimen_value'] = $this->data_record_model->by_chemotherapydata_value();
        $data['maincontent'] = $this->load->view('source_file/chemotherapy_region', $data);
        $this->load->view('home', $data);
    }

    private function do_upload($image_file) {
        // $this->load->library('upload');
        $config['upload_path'] = './resource/rpt_folder/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xlsx|xls|zip';
        //  $config['max_size'] = '100';
        $config['max_size'] = '1000000';
        $config['max_width'] = '1024000';
        $config['max_height'] = '768000';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        //$this->upload->resize();
        if (!$this->upload->do_upload($image_file)) {
            //  if ( ! $this->upload->resize())  
            $error = array('error' => $this->upload->display_errors(), 'upload_data' => '');
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data(), 'error' => '');
            return $data;
        }
    }

// -------------------------------------------------------- -------------------- all condition function && ajax onChange function -------------------------------------------------
    public function dose_type_wise_brand_name_info() {
        $dose_id = $_GET['dose_id'];
        $data['show_brand_name'] = $this->data_record_model->prescription_wise_brand_name($dose_id);
        echo $this->load->view('source_file/dose_wise_brand_name', $data);
    }

    public function drug_help_presctiption_info() {
        $brand_name = $_GET['brand_name'];
        $data['show_druginfo'] = $this->data_record_model->drug_helpInfo_byprescription($brand_name);
//        echo '<pre>';
//        print_r($data);
//        exit();
        echo $this->load->view('source_file/drughelpinformation', $data);
    }

    public function ChemotherapyRegimenWiseValue_info() {
        $custom_chemotherapy_regmine_id = $_GET['custom_chemotherapy_regmine_id'];
        $data['show_chemotherapy_value'] = $this->data_record_model->ChemotherapyName_wise_Value_name($custom_chemotherapy_regmine_id);
        echo $this->load->view('source_file/chemotherapy_value_ajax', $data);
    }

    public function physicalFindings_by_search() {
        $custom_phy_findings_id = $_GET['custom_phy_findings_id'];
        $data['show_fing_name'] = $this->data_record_model->phyfindata($custom_phy_findings_id);
        echo $this->load->view('source_file/phy_fing_onchange_ajax', $data);
    }

    public function patient_monthly_wise_rpt() {
        $year = $this->input->post('year', true);
        $mpatient = array();
        $mpatient['jan'] = $this->data_record_model->m_patient_january($year);
        $this->load->view('welcome/index', $mpatient);
    }

//    public function srength_info_by_prescription() {
//        $drug_id = $_GET['drug_id'];
//        $data['show_strength_info'] = $this->data_record_model->prescription_wise_strength_name($drug_id);
//        echo $this->load->view('source_file/srength_name', $data);
//    }

    public function complain_group_wise_complaine_name() {
        $cc_group_id = $_GET['cc_group_id'];
        $data['show_complain_name_left'] = $this->data_record_model->complainInformation($cc_group_id);
        echo $this->load->view('source_file/view_complain_name', $data, true);
    }

    public function print_preview_prescription() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($manual_pid);
        $data['prescriptoin_data_visitingNo'] = $this->data_record_model->revisit_prescription_ajax_table_by_search_visitingno($manual_pid, $visiting_no, $current_date);
        $data['auto_complete_investigatino'] = $this->data_record_model->autocomplete_investigation_name_by_search();
        $data['prescrptioninfo'] = $this->data_record_model->revisit_drugsearch($manual_pid, $visiting_no, $current_date);
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($manual_pid, $visiting_no, $current_date);

        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($manual_pid, $visiting_no, $current_date);
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($manual_pid, $visiting_no, $current_date);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($manual_pid, $visiting_no, $current_date);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue($manual_pid, $visiting_no, $current_date);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($manual_pid, $visiting_no, $current_date);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($manual_pid, $visiting_no, $current_date);
        $data['protocol_type'] = $this->data_record_model->revisit_data_protocol($manual_pid, $visiting_no, $current_date);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($manual_pid, $visiting_no, $current_date);
        $data['adviceInformation'] = $this->data_record_model->adviceinfo($manual_pid, $visiting_no, $current_date);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation($manual_pid, $visiting_no, $current_date);
        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['auto_complete_investigatino'] = $this->data_record_model->autocomplete_investigation_name_by_search();
        $data['adviceinfo'] = $this->data_record_model->revisit_adviceinfo($manual_pid, $visiting_no, $current_date);

        $data['haematology_report'] = $this->data_record_model->revisit_haematology($manual_pid, $visiting_no, $current_date);
        $data['multile_report'] = $this->data_record_model->revisit_multiple($manual_pid, $visiting_no, $current_date);
        $data['usg_report'] = $this->data_record_model->revisit_usgreport($manual_pid, $visiting_no, $current_date);
        $data['radiology_report'] = $this->data_record_model->revisit_radiology($manual_pid, $visiting_no, $current_date);
        $data['bomemarrow_report'] = $this->data_record_model->revisit_bonemarrow($manual_pid, $visiting_no, $current_date);
        $data['echo_report'] = $this->data_record_model->revisit_echo($manual_pid, $visiting_no, $current_date);
        $data['histopathology_report'] = $this->data_record_model->revisit_histopathology($manual_pid, $visiting_no, $current_date);
        $data['cytopathology_report'] = $this->data_record_model->revisit_cytopathology($manual_pid, $visiting_no, $current_date);
        $data['immunophenotyping_report'] = $this->data_record_model->revisit_immunophenotyping($manual_pid, $visiting_no, $current_date);
        $data['karyotype_report'] = $this->data_record_model->revisit_karyotype($manual_pid, $visiting_no, $current_date);
        $data['cytogenetic_report'] = $this->data_record_model->revisit_cytogenetic($manual_pid, $visiting_no, $current_date);
        $data['urine_report'] = $this->data_record_model->revisit_urine($manual_pid, $visiting_no, $current_date);
        $data['stool_report'] = $this->data_record_model->revisit_stool($manual_pid, $visiting_no, $current_date);
        $data['others_report'] = $this->data_record_model->revisit_othersreport($manual_pid, $visiting_no, $current_date);
        $data['radiology_report'] = $this->data_record_model->revisit_radiologyreport($manual_pid, $visiting_no, $current_date);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($manual_pid, $visiting_no, $current_date);
        $data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint($manual_pid, $visiting_no, $current_date);
        $data['adviceInformation'] = $this->data_record_model->select_by_patientAdvice($manual_pid, $visiting_no, $current_date);
        $data['protocol_pt_info'] = $this->data_record_model->revisit_data_protocol_byCycle($manual_pid, $visiting_no, $current_date);
        $this->load->view('reporting/prescription', $data);
    }

    public function revist_print_preview_prescription() {

        $patient_id = $this->session->userdata('patient_id');
        $visiting_no = $this->session->userdata('visiting_no');
        //$manual_pid=$this->session->userdata('manual_pid');

        $data = array();
        $data['chiefComplaint'] = $this->data_record_model->cheief_complaint_by_search($patient_id, $visiting_no);
        $data['reporting_data'] = $this->data_record_model->final_prescription_reportingInfo($patient_id);
        $data['comorbidityinfo'] = $this->data_record_model->comorbidity_by_info($patient_id, $visiting_no);
        $data['by_visiting_no_bysearch'] = $this->data_record_model->visiting_by_info($patient_id, $visiting_no);
        $data['patient_history_info'] = $this->data_record_model->personal_history_by_search($patient_id, $visiting_no);
        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($patient_id, $visiting_no);
        $data['diagnosisInfo_by_prescripiton_tab'] = $this->data_record_model->diagnosis_by_prescription_tab($patient_id, $visiting_no);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
        $data['physicalfindingsInfo_prescription'] = $this->data_record_model->view_physicalfindings_by_infoPrscription($patient_id, $visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->select_by_prescription_all_data($patient_id, $visiting_no);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($patient_id, $visiting_no);
        $data['complaintList'] = $this->data_record_model->select_by_patientComplaint($patient_id, $visiting_no);
//        $data['nameInformation']=$this->data_record_model->view_name_info($patient_id,$manual_pid);
        $data['patient_information'] = $this->data_record_model->view_name_info($patient_id, $visiting_no);

        $data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint($patient_id, $visiting_no);
        $data['adviceInformation'] = $this->data_record_model->select_by_patientAdvice($patient_id, $visiting_no);
        $this->load->view('reporting/prescription', $data);
    }

    public function conditional_print_preview_prescription($visiting_no) {
        $data = array();
        $patient_id = $this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($visiting_no);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($visiting_no);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($visiting_no);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($visiting_no);
        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($patient_id);
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($visiting_no);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($visiting_no);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($visiting_no);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($visiting_no);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($visiting_no);
        $data['adviceinfo'] = $this->data_record_model->revisit_advice($visiting_no);
        $data['investigationinfo'] = $this->data_record_model->revisit_i($visiting_no);
        //$data['maincontent'] = $this->load->view('source_file/revisit_step_one', $data);
        //$this->load->view('home', $data);

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('reporting/prescription_pdf', $data);
        $file_name = pdf_create($view_file, 'Re Visit Information');
        echo $file_name;
    }

    public function re_visit_patient_prescription_pdf() {
        $patient_id = $this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($patient_id);
        $data['revisit_Complaint'] = $this->data_record_model->revisit_data_byComplaint($patient_id);
        $data['revisit_drugInformation'] = $this->data_record_model->revisit_data_byDrug($patient_id);
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('reporting/revisit_step_one_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Re visit patient pdf report');
        echo $file_name;
    }

    public function edit_revisit_prescription($visiting_no) {

        $pdata = explode('VisitNo', $visiting_no);
        $spdata = array();
        $spdata['pid'] = $pdata[0];
        $spdata['visitno'] = $pdata[1];
        $this->session->set_userdata($spdata);
//echo '<pre>';
//      print_r($spdata);
//      exit();
        $patientid = $pdata[0];
        $visiting_no = $pdata[1];
        $visit_date = $this->data_record_model->call_visit_date($patientid, $visiting_no);
        $result = $this->data_record_model->call_patientid($patientid);
        $vdata = array();
        $vdata['manual_pid'] = $patientid;
        $vdata['visiting_no'] = $visiting_no;
        $vdata['current_date'] = $visit_date->current_date;
        $this->session->set_userdata($vdata);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();

        //$data['prescriptoin_data_visitingNo'] = $this->data_record_model->revisit_prescription_ajax_table_by_search_visitingno($patient_id, $visiting_no);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        //$data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $data['maincontent'] = $this->load->view('source_file/patient_prescription_step_one', $data);
        $this->load->view('home', $data);
    }

    public function re_visit_conditional_prescription($visiting_no) {
        $pdata = explode('VisitNo', $visiting_no);
        $spdata = array();
        $spdata['pid'] = $pdata[0];
        $spdata['visitno'] = $pdata[1];
        $this->session->set_userdata($spdata);

        $patientid = $pdata[0];
        $visiting_no = $pdata[1];
        $visit_date = $this->data_record_model->call_visit_date($patientid, $visiting_no);
        $result = $this->data_record_model->call_patientid($patientid);
        $vdata = array();
        $vdata['manual_pid'] = $patientid;
        $vdata['visiting_no'] = $visiting_no;
        $vdata['current_date'] = $visit_date->current_date;
        $this->session->set_userdata($vdata);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        //$patient_id=$this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($manual_pid, $visiting_no, $current_date);

        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($manual_pid);

        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($manual_pid, $visiting_no, $current_date);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($manual_pid, $visiting_no, $current_date);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($manual_pid, $visiting_no, $current_date);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings_view($manual_pid, $visiting_no, $current_date);

        $data['physicalfindingsdata'] = $this->data_record_model->revisit_data_physicalfindingsdata($manual_pid, $visiting_no, $current_date);
        $data['physicalfindingsInfo'] = $this->data_record_model->revisit_data_physicalfindingsInfo($manual_pid, $visiting_no, $current_date);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue($manual_pid, $visiting_no, $current_date);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($manual_pid, $visiting_no, $current_date);
        $data['protocol_type'] = $this->data_record_model->revisit_data_protocol($manual_pid, $visiting_no, $current_date);
        $data['protocol_pt_info'] = $this->data_record_model->revisit_data_protocol_byCycle($manual_pid, $visiting_no, $current_date);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($manual_pid, $visiting_no, $current_date);
        $data['prescriptoin_data_visitingNo'] = $this->data_record_model->revisit_prescription_ajax_table_by_search_visitingno($manual_pid, $visiting_no, $current_date);
        $data['adviceinfo'] = $this->data_record_model->revisit_adviceinfo($manual_pid, $visiting_no, $current_date);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation($manual_pid, $visiting_no, $current_date);

        $data['haematology_report'] = $this->data_record_model->revisit_haematology($manual_pid, $visiting_no, $current_date);
        $data['multile_report'] = $this->data_record_model->revisit_multiple($manual_pid, $visiting_no, $current_date);
        $data['usg_report'] = $this->data_record_model->revisit_usgreport($manual_pid, $visiting_no, $current_date);
        $data['radiology_report'] = $this->data_record_model->revisit_radiology($manual_pid, $visiting_no, $current_date);
        $data['bomemarrow_report'] = $this->data_record_model->revisit_bonemarrow($manual_pid, $visiting_no, $current_date);
        $data['echo_report'] = $this->data_record_model->revisit_echo($manual_pid, $visiting_no, $current_date);
        $data['histopathology_report'] = $this->data_record_model->revisit_histopathology($manual_pid, $visiting_no, $current_date);
        $data['cytopathology_report'] = $this->data_record_model->revisit_cytopathology($manual_pid, $visiting_no, $current_date);
        $data['immunophenotyping_report'] = $this->data_record_model->revisit_immunophenotyping($manual_pid, $visiting_no, $current_date);
        $data['karyotype_report'] = $this->data_record_model->revisit_karyotype($manual_pid, $visiting_no, $current_date);
        $data['cytogenetic_report'] = $this->data_record_model->revisit_cytogenetic($manual_pid, $visiting_no, $current_date);
        $data['urine_report'] = $this->data_record_model->revisit_urine($manual_pid, $visiting_no, $current_date);
        $data['stool_report'] = $this->data_record_model->revisit_stool($manual_pid, $visiting_no, $current_date);
        $data['others_report'] = $this->data_record_model->revisit_othersreport($manual_pid, $visiting_no, $current_date);
        $data['radiology_report'] = $this->data_record_model->revisit_radiologyreport($manual_pid, $visiting_no, $current_date);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($manual_pid, $visiting_no, $current_date);
        $data['view_doctor_sealinfo'] = $this->data_record_model->by_doctorsealdata();
        $data['maincontent'] = $this->load->view('source_file/revisit_step_one', $data);
        $this->load->view('home', $data);
    }
    
    public function create_pdf_patient_info($visiting_no) {
        
        $pdata = explode('VisitNo', $visiting_no);
        $spdata = array();
        $spdata['pid'] = $pdata[0];
        $spdata['visitno'] = $pdata[1];
        $this->session->set_userdata($spdata);

        $patientid = $pdata[0];
        $visiting_no = $pdata[1];
        $visit_date = $this->data_record_model->call_visit_date($patientid, $visiting_no);
        $result = $this->data_record_model->call_patientid($patientid);
        $vdata = array();
        $vdata['manual_pid'] = $patientid;
        $vdata['visiting_no'] = $visiting_no;
        $vdata['current_date'] = $visit_date->current_date;
        $this->session->set_userdata($vdata);

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        //$patient_id=$this->session->userdata('patient_id');
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($manual_pid, $visiting_no, $current_date);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion($manual_pid, $visiting_no, $current_date);

        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo($manual_pid);

        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory($manual_pid, $visiting_no, $current_date);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory($manual_pid, $visiting_no, $current_date);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($manual_pid, $visiting_no, $current_date);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings_view($manual_pid, $visiting_no, $current_date);

        $data['physicalfindingsdata'] = $this->data_record_model->revisit_data_physicalfindingsdata($manual_pid, $visiting_no, $current_date);
        $data['physicalfindingsInfo'] = $this->data_record_model->revisit_data_physicalfindingsInfo($manual_pid, $visiting_no, $current_date);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue($manual_pid, $visiting_no, $current_date);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis($manual_pid, $visiting_no, $current_date);
        $data['protocol_type'] = $this->data_record_model->revisit_data_protocol($manual_pid, $visiting_no, $current_date);
        $data['protocol_pt_info'] = $this->data_record_model->revisit_data_protocol_byCycle($manual_pid, $visiting_no, $current_date);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo($manual_pid, $visiting_no, $current_date);
        $data['prescriptoin_data_visitingNo'] = $this->data_record_model->revisit_prescription_ajax_table_by_search_visitingno($manual_pid, $visiting_no, $current_date);
        $data['adviceinfo'] = $this->data_record_model->revisit_adviceinfo($manual_pid, $visiting_no, $current_date);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation($manual_pid, $visiting_no, $current_date);

        $data['haematology_report'] = $this->data_record_model->revisit_haematology($manual_pid, $visiting_no, $current_date);
        $data['multile_report'] = $this->data_record_model->revisit_multiple($manual_pid, $visiting_no, $current_date);
        $data['usg_report'] = $this->data_record_model->revisit_usgreport($manual_pid, $visiting_no, $current_date);
        $data['radiology_report'] = $this->data_record_model->revisit_radiology($manual_pid, $visiting_no, $current_date);
        $data['bomemarrow_report'] = $this->data_record_model->revisit_bonemarrow($manual_pid, $visiting_no, $current_date);
        $data['echo_report'] = $this->data_record_model->revisit_echo($manual_pid, $visiting_no, $current_date);
        $data['histopathology_report'] = $this->data_record_model->revisit_histopathology($manual_pid, $visiting_no, $current_date);
        $data['cytopathology_report'] = $this->data_record_model->revisit_cytopathology($manual_pid, $visiting_no, $current_date);
        $data['immunophenotyping_report'] = $this->data_record_model->revisit_immunophenotyping($manual_pid, $visiting_no, $current_date);
        $data['karyotype_report'] = $this->data_record_model->revisit_karyotype($manual_pid, $visiting_no, $current_date);
        $data['cytogenetic_report'] = $this->data_record_model->revisit_cytogenetic($manual_pid, $visiting_no, $current_date);
        $data['urine_report'] = $this->data_record_model->revisit_urine($manual_pid, $visiting_no, $current_date);
        $data['stool_report'] = $this->data_record_model->revisit_stool($manual_pid, $visiting_no, $current_date);
        $data['others_report'] = $this->data_record_model->revisit_othersreport($manual_pid, $visiting_no, $current_date);
        $data['radiology_report'] = $this->data_record_model->revisit_radiologyreport($manual_pid, $visiting_no, $current_date);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($manual_pid, $visiting_no, $current_date);
        $data['view_doctor_sealinfo'] = $this->data_record_model->by_doctorsealdata();
//        $data['maincontent'] = $this->load->view('reporting/patient_pdf_view', $data);
//        $this->load->view('home', $data);
        
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('reporting/patient_pdf_view', $data,true);
        $this->load->view('home', $data);
        $file_name = pdf_create($view_file, 'Download Patient  Info..');
        echo $file_name;
    }
    

    public function create_new_prescription($patient_id) {
        $this->session->unset_userdata('patient_id');
        $this->session->unset_userdata('visiting_no');
        $this->session->unset_userdata('manual_pid');
        //$this->session->unset_userdata('current_date');
        $pdata = explode('date', $patient_id);
        $spdata = array();
        $patient_id = urlencode($pdata[0]);

        $pid = $this->data_record_model->call_for_pid($patient_id);
        $patientid = $pid->patient_id;
        $spdata['patient_id'] = $pid->patient_id;
        $spdata['manual_pid'] = $pid->manual_pid;

        $visit_no = $this->data_record_model->call_visit_no_by_patient_id($patientid);

        $spdata['visiting_no'] = $visit_no->visiting_no + 1;
        $spdata['user_id'] = $this->session->userdata('user_id');
        $spdata['current_date'] = $this->session->userdata('current_date');
        $this->data_record_model->save_revisit_no($spdata);
        //echo '<pre>';
        //echo $spdata['visiting_no'];
        //exit();   

        $this->session->set_userdata($spdata);
        redirect('welcome/patient_prescription_step_one');
    }

    public function re_visit__prescription($patient_id) {
        $pdata = explode('date', $patient_id);
        $spdata = array();
        $spdata['p_id'] = $pdata[0];
        $spdata['p_date'] = $pdata[1];
        $this->session->set_userdata($spdata);
        $data = array();

        $data['complaint_group_info'] = $this->data_record_model->complaint_group_name();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['path_groupName'] = $this->data_record_model->pathological_group_testInfo();

        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription($pdata[0], $pdata[1]);
        $data['revisit_Complaint'] = $this->data_record_model->revisit_data_byComplaint($pdata[0], $pdata[1]);
        $data['adviceinfo'] = $this->data_record_model->revisit_data_byAdviceInfo($pdata[0], $pdata[1]);
        $data['revisit_drugInformation'] = $this->data_record_model->revisit_data_byDrug($pdata[0], $pdata[1]);

        $sdata = array();
        $sdata['patient_id'] = $patient_id;
        $this->session->set_userdata($sdata);
        $data['maincontent'] = $this->load->view('source_file/revisit_heightComplaintInfo', $data);
        $this->load->view('home', $data);
    }

    public function test_group_wise_test_name() {
        $path_test_group_id = $_GET['path_test_group_id'];
        $data['show_test_name_left'] = $this->data_record_model->testInformation($path_test_group_id);
        echo $this->load->view('source_file/view_test_name', $data, true);
    }

    public function patient_id_search() {

        $data = array();
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        $data['patient_id_search'] = $this->data_record_model->search_by_patient_id($manual_pid);
        $data['view_particulardata'] = $this->data_record_model->view_particular_by_info();

        $data['maincontent'] = $this->load->view('source_file/date_to_searching', $data);
        $this->load->view('home', $data);
    }

    public function pt_find_information_by_name() {
        $patient_name = $this->input->post('patient_name', true);
        $data['patientname'] = $this->data_record_model->search_by_patient_name($patient_name);
        //$data['view_particulardata'] = $this->data_record_model->view_particular_by_info();
        $data['maincontent'] = $this->load->view('source_file/patient_find_information_byName', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_information_by_date_wise() {
        $data = array();
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        $data['patient_id_search'] = $this->data_record_model->search_by_patient_id($manual_pid);
        $data['view_particulardata'] = $this->data_record_model->view_particular_by_info();

        $data['maincontent'] = $this->load->view('source_file/patient_find_information_date_range', $data);
        $this->load->view('home', $data);
    }

    public function patient_revisit_information() {


        $ssdata = array();
        $ssdata['current_date'] = date("Y-m-d", strtotime($this->input->post('current_date', true)));
        $ssdata['manual_pid'] = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        $this->session->set_userdata($ssdata);

        $data = array();
        $patientid = $this->input->post('patient_id', true);
        $current_date = $this->input->post('current_date', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $revisit_info = $this->data_record_model->revisitdate_range_manual_pidnformation($manual_pid);
        if ($revisit_info == null) {
            $sdata = array();
            $sdata['patient_id'] = $patientid;
            $sdata['manual_pid'] = $manual_pid;
            $sdata['current_date'] = $current_date;
            $sdata['patient_name'] = $this->data_record_model->call_patient_name($manual_pid);
            $sdata['age'] = $this->data_record_model->call_patient_age($manual_pid);
            $sdata['sex'] = $this->data_record_model->call_patient_sex($manual_pid);

            $this->session->set_userdata($sdata);
            redirect("welcome/patient_informaiton_record");
        } else {

            $data['revisit'] = $this->data_record_model->revisitdate_range_manual_pidnformation($manual_pid);
            $data['patient_name'] = $this->data_record_model->call_patient_name($manual_pid);

            $sdata = array();
            $sdata['patient_id'] = $patientid;
            $sdata['manual_pid'] = $manual_pid;
            $sdata['patient_name'] = $this->data_record_model->call_patient_name($manual_pid);
            $sdata['age'] = $this->data_record_model->call_patient_age($manual_pid);
            $sdata['sex'] = $this->data_record_model->call_patient_sex($manual_pid);

            $this->session->set_userdata($sdata);

            $data['maincontent'] = $this->load->view('source_file/show_revisit_info', $data);
            $this->load->view('home', $data);
        }
    }

    public function patient_revisit_information_data_revisit() {
        //patient_id
        $ssdata = array();
        $ssdata['revisit_date'] = $this->input->post('revisit_date', true);
        $this->session->set_userdata($ssdata);

        $data = array();
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        $patientid = $this->input->post('patient_id', true);
        $manual_pid = trim(strtoupper($this->input->post('manual_pid', true)));

//manual_pid
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['patient_id'] = $patientid;
        $data['manual_pid'] = $manual_pid;
        if ($patientid != NULL) {
            $data['revisit'] = $this->data_record_model->revisitdate_range($date_from, $date_to, $patientid);
        } else {
            $data['revisit'] = $this->data_record_model->revisitdate_range_manual_pid($date_from, $date_to, $manual_pid);
        }


        $sdata = array();
        $sdata['patient_id'] = $patientid;
        $sdata['manual_pid'] = $manual_pid;
        $this->session->set_userdata($sdata);

        $data['maincontent'] = $this->load->view('source_file/show_revisit_info_data_range', $data);
        $this->load->view('home', $data);
    }

    public function patient_revisit_information_data_revisit_by_date() {
        // by date searching
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);
        //$cc_name_id = $this->input->post('cc_name_id', true);
        //$manual_pid = $this->input->post('manual_pid', true);

        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;

        $this->session->set_userdata($pdfinfo);
        $data = array();
        //$data['complaint'] = $this->data_record_model->diangosis_by_search();
        $data['complaint'] = $this->data_record_model->patient_searcing_by_date($date_from, $date_to);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/show_conditional_report_by_date', $data, true);
        $this->load->view('home', $data);
    }

    public function patient_revisit_information_data_revisit_by_date_findpatient() {
        // by date searching
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);

        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;

        $this->session->set_userdata($pdfinfo);
        $data = array();
        //$data['complaint'] = $this->data_record_model->diangosis_by_search();
        $data['date_wise_search'] = $this->data_record_model->patient_searcing_by_date($date_from, $date_to);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/patient_find_information_date_range', $data, true);
        $this->load->view('home', $data);
    }

    public function create_pdf_date_to_date_searching() {

        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        //$cc_name_id = $this->session->userdata('cc_name_id');
        $data['complaint'] = $this->data_record_model->patient_searcing_by_date($date_from, $date_to);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        //echo '<pre>';

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_conditional_report_by_date_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Date to Date Searching');
        echo $file_name;
    }

    public function patient_revisit_information_data_revisit_by_date_remarks() {
        // by date searching
        $date_from = $this->input->post('starting_date', true);
        $date_to = $this->input->post('ending_date', true);

        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;

        $this->session->set_userdata($pdfinfo);
        $data = array();
        //$data['complaint'] = $this->data_record_model->diangosis_by_search();
        $data['patient_remarks'] = $this->data_record_model->patient_searcing_by_date_remarks($date_from, $date_to);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/view_p_remakrs', $data, true);
        $this->load->view('home', $data);
    }

    public function create_pdf_date_to_date_searching_remarks() {

        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        //$cc_name_id = $this->session->userdata('cc_name_id');
        $data['complaint'] = $this->data_record_model->patient_searcing_by_date_remarks($date_from, $date_to);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        //echo '<pre>';

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_conditional_report_by_date_remarks_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Date to Date Searching Remarks');
        echo $file_name;
    }

    public function preview_date_wise_statment() {

        $date_from = $this->input->post('prescription_date_from', true);
        $date_to = $this->input->post('prescription_date_from_date_to', true);
        $cc_name_id = $this->input->post('cc_name_id', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;
        $pdfinfo['cc_name_id'] = $cc_name_id;
        $pdfinfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($pdfinfo);


        $data = array();
        $data['complaint'] = $this->data_record_model->complaint_by_groupID($date_from, $date_to, $cc_name_id, $manual_pid);
        $com_group_info = $this->data_record_model->selectCompalintGroupBy_Id($cc_name_id);

        if ($com_group_info) {
            $data['presenting_complaint'] = $com_group_info->complain_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['complaint_groupname'] = $this->data_record_model->select_presenting_complait_information();

        $data['maincontent'] = $this->load->view('source_file/show_complaint_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_protocol() {


        $date_from = $this->input->post('starting_date_protocol', true);
        $date_to = $this->input->post('ending_date_protocol', true);
        $custom_chemotherapy_regmine_id = $this->input->post('custom_chemotherapy_regmine_id', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;
        $pdfinfo['custom_chemotherapy_regmine_id'] = $custom_chemotherapy_regmine_id;
        $pdfinfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($pdfinfo);


        $data = array();

        $data['protocol_search'] = $this->data_record_model->protocol_by_groupID($date_from, $date_to, $custom_chemotherapy_regmine_id, $manual_pid);
        $protocol = $this->data_record_model->selectProtocolGroupBy_Id($custom_chemotherapy_regmine_id);

        if ($protocol) {
            $data['protocolInfo'] = $protocol->customized_chemotherapy_regimen_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['protocol_data'] = $this->data_record_model->select_protocol_information();

        $data['maincontent'] = $this->load->view('source_file/show_protocol_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_comorbidity() {
        $date_from = $this->input->post('prescription_date_from_comorbidity', true);
        $date_to = $this->input->post('prescription_date_from_date_to_comorbidity', true);
        $comorbidity_id = $this->input->post('comorbidity_id', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $comorbidityinfo = array();
        $comorbidityinfo['date_from'] = $date_from;
        $comorbidityinfo['date_to'] = $date_to;
        $comorbidityinfo['cc_name_id'] = $comorbidity_id;
        $comorbidityinfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($comorbidityinfo);

        $data = array();

        $data['comorbidity'] = $this->data_record_model->comorbidity_by_groupID($date_from, $date_to, $comorbidity_id, $manual_pid);
        $comorbidity_info = $this->data_record_model->selectComorbidityBy_Id($comorbidity_id);

        if ($comorbidity_info) {
            $data['comorbidityInformation'] = $comorbidity_info->comorbidity_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['comorbidity_by_name'] = $this->data_record_model->select_presenting_comorbidity_information();
        $data['maincontent'] = $this->load->view('source_file/show_comorbidity_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_diagnosis() {
        $date_from = $this->input->post('starting_date_diagnosis', true);
        $date_to = $this->input->post('ending_date_diagnosis', true);
        $diagnosis_category_id = $this->input->post('diagnosis_category_id', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $diagnosisInfo = array();
        $diagnosisInfo['date_from'] = $date_from;
        $diagnosisInfo['date_to'] = $date_to;
        $diagnosisInfo['manual_pid'] = $manual_pid;

        $this->session->set_userdata($diagnosisInfo);

        $data = array();
        $data['diagnosisinfo'] = $this->data_record_model->diagnosis_by_ID($date_from, $date_to, $diagnosis_category_id, $manual_pid);
        $diagnosis_information_byPT = $this->data_record_model->selectdiagnosisBy_Id($diagnosis_category_id);

        if ($diagnosis_information_byPT) {
            $data['diagnosis_information_byPT'] = $diagnosis_information_byPT->customized_diagnosis_category_name;
        }

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['diagnosisinformation'] = $this->data_record_model->select_diagnosis_information();

        $data['maincontent'] = $this->load->view('source_file/show_diagnosis_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_personal_history() {
        $date_from = $this->input->post('prescription_date_from_p_history', true);
        $date_to = $this->input->post('prescription_date_from_date_to_p_history', true);
        $personal_id = $this->input->post('personal_id', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $personalInfo = array();
        $personalInfo['date_from'] = $date_from;
        $personalInfo['date_to'] = $date_to;
        $personalInfo['cc_name_id'] = $personal_id;
        $personalInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($personalInfo);

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();
        $data['personal_history'] = $this->data_record_model->personal_history_by_ID($date_from, $date_to, $personal_id, $manual_pid);
        $personal_information = $this->data_record_model->selectPersonalHistoryBy_Id($personal_id);

        if ($personal_information) {
            $data['personal_historyInformation'] = $personal_information->personal_history_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['personalHistory_by_name'] = $this->data_record_model->select_presenting_personalHistory_information();

        $data['maincontent'] = $this->load->view('source_file/show_personal_history_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_family_history() {
        $date_from = $this->input->post('starting_date_family_history', true);
        $date_to = $this->input->post('ending_date_family_history', true);
        $manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$family_history_id= $this->input->post('family_history_id', true);

        $familyhistoryInfo = array();
        $familyhistoryInfo['date_from'] = $date_from;
        $familyhistoryInfo['date_to'] = $date_to;
        $familyhistoryInfo['manual_pid'] = $manual_pid;
        //$familyhistoryInfo['family_history_id'] = $family_history_id;
        $this->session->set_userdata($familyhistoryInfo);

        $data = array();
        $data['family_history'] = $this->data_record_model->family_history_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['familyHistory_by_name'] = $this->data_record_model->select_familyHistory_information();

        $data['maincontent'] = $this->load->view('source_file/show_family_history_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function patient_age_group_searching() {
        $starting_age = $this->input->post('starting_age', true);
        $ending_age = $this->input->post('ending_age', true);

        $agenfo = array();
        $agenfo['starting_age'] = $starting_age;
        $agenfo['ending_age'] = $ending_age;

        $this->session->set_userdata($agenfo);

        $data = array();
        $data['age_group_by_search'] = $this->data_record_model->age_group_by_search($starting_age, $ending_age);
    }

    public function preview_date_wise_statment_sex_searching() {


        $date_from = date('Y-m-d', strtotime($this->input->post('starting_date_sex', true)));
        $date_to = date('Y-m-d', strtotime($this->input->post('ending_date_sex', true)));
        $sex = $this->input->post('sex', true);

        $sexinfo = array();
        $sexinfo['date_from'] = $date_from;
        $sexinfo['date_to'] = $date_to;
        $sexinfo['sex'] = $sex;
        //$familyhistoryInfo['family_history_id'] = $family_history_id;
        $this->session->set_userdata($sexinfo);

        $data = array();
        $data['sex_by_search'] = $this->data_record_model->patient_infobysex($date_from, $date_to, $sex);

        $sexinfo = $this->data_record_model->select_patient_sex($sex);

        if ($sexinfo) {
            $data['sex_information'] = $sexinfo->sex;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['sex_by_name'] = $this->data_record_model->select_sex_information();



        $data['maincontent'] = $this->load->view('source_file/patient_find_information_bygender', $data, true);
        $this->load->view('home', $data);
    }

    public function create_pdf_date_to_date_searching_sex() {
        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        $sex = $this->session->userdata('sex');
        //$cc_name_id = $this->session->userdata('cc_name_id');
        $data['sex_by_search'] = $this->data_record_model->sex_by_ID($date_from, $date_to, $sex);

        $sexinfo = $this->data_record_model->select_patient_sex($sex);

        if ($sexinfo) {
            $data['sex_information'] = $sexinfo->sex;
        }

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['sex_by_name'] = $this->data_record_model->select_sex_information();

        //echo '<pre>';

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_conditional_report_by_date_sex_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Date to Date Searching Sex');
        echo $file_name;
    }

    public function preview_date_wise_statment_physicalfindings() {
        // only id search and date statment
        $date_from = $this->input->post('starting_date_physicalfindings', true);
        $date_to = $this->input->post('ending_date_physicalfindings', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $physicalfindingsInfo = array();
        $physicalfindingsInfo['date_from'] = $date_from;
        $physicalfindingsInfo['date_to'] = $date_to;
        $this->session->set_userdata($physicalfindingsInfo);
        $data = array();
        $data['physicalFindingsInfo'] = $this->data_record_model->physicalfindings_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['physicalfindings_by_name'] = $this->data_record_model->select_physuicalfindings_information();

        $data['maincontent'] = $this->load->view('source_file/show_physicalfindings_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_haematology() {
        $date_from = $this->input->post('starting_date_haematology', true);
        $date_to = $this->input->post('ending_date_haematology', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $haematologyInfo = array();
        $haematologyInfo['date_from'] = $date_from;
        $haematologyInfo['date_to'] = $date_to;
        $haematologyInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($haematologyInfo);
        $data = array();
        $data['haematology_rpt_searching'] = $this->data_record_model->haematology_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['haematology_data'] = $this->data_record_model->select_haematology_information();

        $data['maincontent'] = $this->load->view('source_file/show_haematology_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_bonemarrow() {
        $date_from = $this->input->post('starting_date_bonemarrow', true);
        $date_to = $this->input->post('ending_date_bonemarrow', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $bonemarrowInfo = array();
        $bonemarrowInfo['date_from'] = $date_from;
        $bonemarrowInfo['date_to'] = $date_to;
        $bonemarrowInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($bonemarrowInfo);
        $data = array();
        $data['bonemarrow_rpt_searching'] = $this->data_record_model->bonemarrow_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['bonemarrow_data'] = $this->data_record_model->select_bonemarrow_information();

        $data['maincontent'] = $this->load->view('source_file/show_bonemarrow_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_radiology() {

        $date_from = $this->input->post('starting_date_radiology', true);
        $date_to = $this->input->post('ending_date_radiology', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $radiologyInfo = array();
        $radiologyInfo['date_from'] = $date_from;
        $radiologyInfo['date_to'] = $date_to;
        $radiologyInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($radiologyInfo);
        $data = array();
        $data['radiology_rpt_searching'] = $this->data_record_model->radiology_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['maincontent'] = $this->load->view('source_file/show_radiology_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_usg() {

        $date_from = $this->input->post('starting_date_usg', true);
        $date_to = $this->input->post('ending_date_usg', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $usgInfo = array();
        $usgInfo['date_from'] = $date_from;
        $usgInfo['date_to'] = $date_to;
        $usgInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($usgInfo);
        $data = array();
        $data['usg_rpt_searching'] = $this->data_record_model->usg_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['maincontent'] = $this->load->view('source_file/show_usg_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_multiple_rpt() {

        $date_from = $this->input->post('starting_date_multiple', true);
        $date_to = $this->input->post('ending_date_multiple', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $usgInfo = array();
        $usgInfo['date_from'] = $date_from;
        $usgInfo['date_to'] = $date_to;
        $usgInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($usgInfo);
        $data = array();
        $data['multiple_rpt_searching'] = $this->data_record_model->multiple_rpt_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['maincontent'] = $this->load->view('source_file/show_multiple_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_urine() {

        $date_from = $this->input->post('starting_date_urine', true);
        $date_to = $this->input->post('ending_date_urine', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $urineInfo = array();
        $urineInfo['date_from'] = $date_from;
        $urineInfo['date_to'] = $date_to;
        $urineInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($urineInfo);
        $data = array();
        $data['urine_rpt_searching'] = $this->data_record_model->urine_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        //$data['bonemarrow_data'] = $this->data_record_model->select_bonemarrow_information();
        //echo '<pre>';
        //print_r($data['urine_rpt_searching']);
        //EXIT();
        $data['maincontent'] = $this->load->view('source_file/show_urine_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_stool() {
        $date_from = $this->input->post('starting_date_stool', true);
        $date_to = $this->input->post('ending_date_stool', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $stoolInfo = array();
        $stoolInfo['date_from'] = $date_from;
        $stoolInfo['date_to'] = $date_to;
        $stoolInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($stoolInfo);
        $data = array();
        $data['stool_rpt_searching'] = $this->data_record_model->stool_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['maincontent'] = $this->load->view('source_file/show_stool_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_echo() {

        $date_from = $this->input->post('starting_date_echo', true);
        $date_to = $this->input->post('ending_date_echo', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $echoInfo = array();
        $echoInfo['date_from'] = $date_from;
        $echoInfo['date_to'] = $date_to;
        $echoInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($echoInfo);
        $data = array();
        $data['echo_rpt_searching'] = $this->data_record_model->echo_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['maincontent'] = $this->load->view('source_file/show_echo_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_histpathology() {
        $date_from = $this->input->post('starting_date_histopathology', true);
        $date_to = $this->input->post('ending_date_histopathology', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));


        $histopathologyInfo = array();
        $histopathologyInfo['date_from'] = $date_from;
        $histopathologyInfo['date_to'] = $date_to;
        //$histopathologyInfo['manual_pid'] = $manual_pid;
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        $this->session->set_userdata($histopathologyInfo);
        $data = array();
        $data['histopathology_rpt_searching'] = $this->data_record_model->histopathology_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        $data['maincontent'] = $this->load->view('source_file/show_histopathology_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_cytopathology() {
        $date_from = $this->input->post('starting_date_cytopathology', true);
        $date_to = $this->input->post('ending_date_cytopathology', true);
        // $manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $cytopathologyInfo = array();
        $cytopathologyInfo['date_from'] = $date_from;
        $cytopathologyInfo['date_to'] = $date_to;
        $cytopathologyInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($cytopathologyInfo);
        $data = array();
        $data['cytopathology_rpt_searching'] = $this->data_record_model->cytopathology_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/show_cytopathology_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_immunphenotyping() {

        $date_from = $this->input->post('starting_date_immunophenotyping', true);
        $date_to = $this->input->post('ending_date_immunophenotyping', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $immunoInfo = array();
        $immunoInfo['date_from'] = $date_from;
        $immunoInfo['date_to'] = $date_to;
        $immunoInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($immunoInfo);
        $data = array();
        $data['immunophenotyping_rpt_searching'] = $this->data_record_model->immunophenotyping_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/show_immunophenotyping_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_karyotype() {


        $date_from = $this->input->post('starting_date_karyotype', true);
        $date_to = $this->input->post('ending_date_karyotype', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $karyotypeInfo = array();
        $karyotypeInfo['date_from'] = $date_from;
        $karyotypeInfo['date_to'] = $date_to;
        $karyotypeInfo['manual_pid'] = $manual_pid;

        $this->session->set_userdata($karyotypeInfo);
        $data = array();
        $data['karyotype_rpt_searching'] = $this->data_record_model->karyotype_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/show_karyotype_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_cytogenetice() {
        $date_from = $this->input->post('starting_date_cytogenetic', true);
        $date_to = $this->input->post('ending_date_cytogenetic', true);

        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $karyotypeInfo = array();
        $karyotypeInfo['date_from'] = $date_from;
        $karyotypeInfo['date_to'] = $date_to;
        $karyotypeInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($karyotypeInfo);
        $data = array();
        $data['cytogenetic_rpt_searching'] = $this->data_record_model->cytogenetic_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/show_cytogenetic_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function preview_date_wise_statment_mt() {

        $date_from = $this->input->post('starting_date_mt', true);
        $date_to = $this->input->post('ending_date_mt', true);

        $karyotypeInfo = array();
        $karyotypeInfo['date_from'] = $date_from;
        $karyotypeInfo['date_to'] = $date_to;
        $this->session->set_userdata($karyotypeInfo);
        $data = array();
        $data['mt_rpt_searching'] = $this->data_record_model->mt_by_ID($date_from, $date_to);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['maincontent'] = $this->load->view('source_file/show_cytogenetic_rpt_conditional_report', $data, true);
        $this->load->view('home', $data);
    }

    public function pdf_all_comorbidity_info() {

        //$date_from = $this->input->post('prescription_date_from_comorbidity');
        //$date_to = $this->input->post('prescription_date_from_date_to_comorbidity');
        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        $comorbidity_id = $this->session->userdata('comorbidity_id');
        // $comorbidity_id = $this->input->post('comorbidity_id');
        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();
        $data['comorbidity'] = $this->data_record_model->comorbidity_by_groupID($date_from, $date_to, $comorbidity_id);
        $comorbidity_info = $this->data_record_model->selectComorbidityBy_Id($comorbidity_id);

        if ($comorbidity_info) {
            $data['comorbidityInformation'] = $comorbidity_info->comorbidity_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['comorbidity_by_name'] = $this->data_record_model->select_presenting_comorbidity_information();

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_comorbidity_conditional_report_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Comorbidity List');
        echo $file_name;
    }

    public function pdf_all_complaint_group_info() {

        $date_from = $this->session->userdata('date_from');
        $date_to = $this->session->userdata('date_to');
        $cc_name_id = $this->session->userdata('cc_name_id');

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['complaint'] = $this->data_record_model->complaint_by_groupID($date_from, $date_to, $cc_name_id);
        $com_group_info = $this->data_record_model->selectCompalintGroupBy_Id($cc_name_id);

        if ($com_group_info) {
            $data['presenting_complaint'] = $com_group_info->complain_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['complaint_groupname'] = $this->data_record_model->select_presenting_complait_information();

        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/show_complaint_conditional_report_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Complaint Group Informtion');
        echo $file_name;
    }

    public function all_drug_help_PDF() {
        $data = array();
        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/view_drug_help_pdf', $data, true);
        $file_name = pdf_create($view_file, 'My Drug Help Data PDF');
        echo $file_name;
    }

    public function all_information_PDF() {
        $data = array();
        $data['dictionaryinfo'] = $this->data_record_model->view_dictionaryinfo();
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/view_p_information_pdf', $data, true);
        $file_name = pdf_create($view_file, 'My Data');
        echo $file_name;
    }

    public function appointment_list_pdf() {
        $data = array();
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('source_file/appointment_listInfo_pdf', $data, true);
        $file_name = pdf_create($view_file, 'Patient Appointment List');
        echo $file_name;
    }

    public function test_wise_unit() {
        $path_test_id = $_GET['path_test_id'];
        $data['show_test_wise_unit'] = $this->data_record_model->test_wise_unit($path_test_id);
        echo $this->load->view('source_file/test_wise_unit', $data);
    }

    public function test_wise_normal_range() {
        $path_test_id = $_GET['path_test_id'];
        $data['show_test_wise_unit'] = $this->data_record_model->test_wise_unit($path_test_id);
        echo $this->load->view('source_file/show_normal_range', $data);
    }

    public function backup_db() {

        // Load the DB utility class
        // $user_id=$this->session->userdata('user_id');
        //$user_type=$this->session->userdata('type');
        //if($user_id!=null && $user_type==="Admin" ){
        $this->load->dbutil();
        // Backup your entire database and assign it to a variable
        $backup = & $this->dbutil->backup();
        $date = new DateTime();
        $date_result = $date->format(' d-m-y (H-i-s)');
        $backup_file = "HPDM" . $date_result . "." . "gz";
        // Load the file helper and write the file to your server
        //$this->load->helper('file');
        //write_file('/path/to/mybackup.gz', $backup);
        // Load the download helper and send the fi_le to your desktop
        $this->load->helper('download');
        force_download($backup_file, $backup);
    }

}

?>