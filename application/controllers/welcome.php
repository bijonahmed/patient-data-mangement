<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();

//if (checkdate(05, 27, 2014)) {
// echo "sorry";
        //exit();
//}

        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect("login/index", 'refresh');

            //$this->load->view('home');
        }
        $this->load->model('data_record_model');

        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
//ID of the textarea that will be replaced
            'id' => 'ck_editor',
            'path' => 'resource/ckeditor',
            'config' => array(
                'toolbar' => "Standard Toolbar", //Using the Full toolbar [Full]
                'width' => "1200", //Setting a custom width
                'height' => '200px', //Setting a custom height
            ),
        );
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data = array();
        $data['searchdata'] = $this->data_record_model->category_data_Information_bySearch();
        //$data = array();

        $patient_id = $this->session->userdata('patient_id');
        $visiting_no = $this->session->userdata('visiting_no');
        $manual_pid = $this->session->userdata('manual_pid');

        $data['total_patient_count'] = count($this->data_record_model->totalpatient_count());
        $data['total_patient_diagnosis'] = count($this->data_record_model->totalpatient_diagnosis());
        $data['total_patient_chemo_regimen'] = count($this->data_record_model->totalpatient_chemo_regimen());
        $data['total_patient_male'] = count($this->data_record_model->totalpatient_male());
        $data['total_patient_female'] = count($this->data_record_model->totalpatient_female());

        $data['total_patient_investigation'] = count($this->data_record_model->totalpatient_investigation());
        $data['total_patient_drug'] = count($this->data_record_model->totalpatient_drug());
        $data['total_patient_presentingcomplaint'] = count($this->data_record_model->totalpatient_presentingcomplaint());

        $data['today_patient_count'] = count($this->data_record_model->today_p_count());
        $data['this_month_patient_count'] = count($this->data_record_model->this_month_p_count());
        $data['this_year_patient_count'] = count($this->data_record_model->this_year_p_count());

//        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['auto_complete_investigatino'] = $this->data_record_model->autocomplete_investigation_name_by_search();

//update physical findings function
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
// all function
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['patientadviceInfo'] = $this->data_record_model->patient_advice_by_search();
        $data['path_groupName'] = $this->data_record_model->pathological_group_testInfo();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();

        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();

        $year = $this->input->post('year', true);
        if ($year == Null) {
            $year = date("Y", strtotime(date("Y-m-d")));
        }
        $sdata['year'] = $year;
        $this->session->set_userdata($sdata);

        $data['jan'] = $this->data_record_model->m_patient_january($year);
        $data['Feb'] = $this->data_record_model->m_patient_February($year);
        $data['Mar'] = $this->data_record_model->m_patient_March($year);
        $data['apr'] = $this->data_record_model->m_patient_april($year);
        $data['may'] = $this->data_record_model->m_patient_may($year);
        $data['june'] = $this->data_record_model->m_patient_june($year);
        $data['july'] = $this->data_record_model->m_patient_july($year);
        $data['aug'] = $this->data_record_model->m_patient_augs($year);
        $data['sep'] = $this->data_record_model->m_patient_sep($year);
        $data['octo'] = $this->data_record_model->m_patient_octo($year);
        $data['nov'] = $this->data_record_model->m_patient_nov($year);
        $data['decem'] = $this->data_record_model->m_patient_devem($year);

        //$graph_year=array();

        $data['maincontent'] = $this->load->view('navbar', $data);
        $this->load->view('home', $data);
    }

    public function setting() {
        $data = array();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['new_generic_name'] = $this->data_record_model->generic_name_by_id();
        $data['add_new_complaint_group'] = $this->data_record_model->complaint_group_nameInformaiton();
        $data['view_complaint'] = $this->data_record_model->view_search_complaint_by_info();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['brand_name_info'] = $this->data_record_model->brand_name_information();
        $data['add_new_advice_group'] = $this->data_record_model->advice_group_nameInformaiton();
        $data['advie_info'] = $this->data_record_model->view_search_advice_name_by_info();
        $data['add_new_advice_group'] = $this->data_record_model->advice_group_nameInformaiton();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
        $data['maincontent'] = $this->load->view('source_file/setting', $data);
        $this->load->view('home', $data);
    }

    public function protocol_setting() {
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        $data['maincontent'] = $this->load->view('source_file/protocol_setting', $data);
        $this->load->view('home', $data);
    }

    public function cancel_haematology() {
        redirect('welcome/investigation');
    }

    public function back_revisit() {

        redirect('data_record/patient_revisit_information');
    }

    public function back_prescription() {
        redirect('welcome/my_prescription');
    }

    public function go_setting() {
        redirect('welcome/setting');
    }

    public function go_report() {
        redirect('welcome/report');
    }

    public function backindex() {
        redirect('welcome/re_visit_patient');
    }

    public function backhome() {
        redirect('welcome/index');
    }

    public function investigation() {
        $data['maincontent'] = $this->load->view('source_file/patient_investigation');
        $this->load->view('home', $data);
    }

    public function dictionary() {
        $data = array();
        $data['searchdata'] = $this->data_record_model->category_data_Information_bySearch();
        $data['maincontent'] = $this->load->view('source_file/my_dictionary', $data);
        $this->load->view('home', $data);
    }

    public function new_remarks_information() {
        $data = array();
        $data['searchdata'] = $this->data_record_model->category_data_Information_bySearch();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['remarks_data'] = $this->data_record_model->remarks_by_search();
        $data['maincontent'] = $this->load->view('source_file/patient_remarks', $data);
        $this->load->view('home', $data);
    }

    public function remarks_patient_data_view() {
        $data = array();
        $data['searchdata'] = $this->data_record_model->category_data_Information_bySearch();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['remarks_data'] = $this->data_record_model->remarks_by_search();
        $data['search_patient_remarks'] = $this->data_record_model->p_remarks();
//        echo '<pre>';
//        print_r($data['search_patient_remarks']);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/patient_remarks_view', $data);
        $this->load->view('home', $data);
    }

    public function conditional_address($category_data_id) {
        $data['condition_address'] = $this->data_record_model->address_info($category_data_id);
        $data['searchdata'] = $this->data_record_model->category_data_Information_bySearch();
        $this->load->view('source_file/my_dictionary', $data);
//$this->load->view('home',$data);      
    }

    public function add_new_dose() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_new_dose', $data);
        $this->load->view('home', $data);
    }

    public function user_guide() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/userGuideInfo', $data);
        $this->load->view('home', $data);
    }

    public function viewdoeseInfo() {
        $data = array();
        $data['doseInfo'] = $this->data_record_model->doseInfo_by_search();
        $data['maincontent'] = $this->load->view('source_file/viewdoseInfo', $data);
        $this->load->view('home', $data);
    }

    public function add_new_dose_schedule() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_new_dose_schedule', $data);
        $this->load->view('home', $data);
    }

    public function add_new_patient_advice_name() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_new_patient_advice', $data);
        $this->load->view('home', $data);
    }

    public function my_dictonary() {
        $data = array();
        $data['category'] = $this->data_record_model->categoryInformation();
        $data['searchdata'] = $this->data_record_model->category_data_Information_bySearch();
        $data['maincontent'] = $this->load->view('source_file/my_dictonary', $data);
        $this->load->view('home', $data);
    }
    
     public function manage_appointment() {
        $data = array();
        //$data['category'] = $this->data_record_model->categoryInformation();
        $data['manage_appointment_data'] = $this->data_record_model->call_manage_app_bySearch();
        $data['maincontent'] = $this->load->view('source_file/manage_appointment_info', $data);
        $this->load->view('home', $data);
    }

    public function add_doctor_seal() {
        $data = array();
//        $data['category'] = $this->data_record_model->categoryInformation();
        $data['searchdata_for_seal'] = $this->data_record_model->sealdata_bySearch();
        $data['maincontent'] = $this->load->view('source_file/doctorseal', $data);
        $this->load->view('home', $data);
    }

    public function viewdoes_scheduleName() {
        $data = array();
        $data['dose_schedule'] = $this->data_record_model->doseScheduleInformation();
        $data['maincontent'] = $this->load->view('source_file/view_doseScheduleName', $data);
        $this->load->view('home', $data);
    }

    public function view_doctor_seal() {
        $data = array();
//        $data['category'] = $this->data_record_model->categoryInformation();
        $data['searchdata_for_seal'] = $this->data_record_model->sealdata_bySearch();
        $data['maincontent'] = $this->load->view('source_file/doctor_sealview_data', $data);
        $this->load->view('home', $data);
    }

    public function view_remarks_patient_data() {
        $data = array();
        $data['search_patient_remarks'] = $this->data_record_model->p_remarks();
        $data['maincontent'] = $this->load->view('source_file/view_p_remakrs', $data);
        $this->load->view('home', $data);
    }

    public function add_new_generic_name() {
        $data = array();
//$data['dose_schedule']=$this->data_record_model->doseScheduleInformation();
        $data['maincontent'] = $this->load->view('source_file/add_new_generic', $data);
        $this->load->view('home', $data);
    }

    public function add_new_complaint_group_name() {
        $data = array();
//$data['dose_schedule']=$this->data_record_model->doseScheduleInformation();
        $data['maincontent'] = $this->load->view('source_file/add_new_complaint_group_name', $data);
        $this->load->view('home', $data);
    }

    public function add_new_complaint() {
        $data = array();
        $data['add_new_complaint_group'] = $this->data_record_model->complaint_group_nameInformaiton();
        $data['view_complaint'] = $this->data_record_model->view_search_complaint_by_info();
        $data['maincontent'] = $this->load->view('source_file/add_new_complaint_name', $data);
        $this->load->view('home', $data);
    }

    public function add_new_advice_name() {
        $data = array();
        $data['add_new_advice_group'] = $this->data_record_model->advice_group_nameInformaiton();
        $data['advie_info'] = $this->data_record_model->view_search_advice_name_by_info();
        $data['maincontent'] = $this->load->view('source_file/add_new_advice_name', $data);
        $this->load->view('home', $data);
    }

    public function add_new_investigation_by_prescription_name() {
        $data = array();
        $data['add_new_advice_group'] = $this->data_record_model->advice_group_nameInformaiton();
        $data['maincontent'] = $this->load->view('source_file/add_new_investigation_name_byprescription', $data);
        $this->load->view('home', $data);
    }

    public function add_new_advice_group_name() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_new_adivce_group_name', $data);
        $this->load->view('home', $data);
    }

    public function add_new_drug() {
        $data = array();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['new_generic_name'] = $this->data_record_model->generic_name_by_id();
        $data['maincontent'] = $this->load->view('source_file/add_new_drug', $data);
        $this->load->view('home', $data);
    }

// -----------------------------------------------------------------------add new investigation function--------------------------------------

    public function add_new_suggestion() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_new_suggestion', $data);
        $this->load->view('home', $data);
    }

    public function haematology() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['haematology_data'] = $this->data_record_model->searchByHaematologyInformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/haematology', $data);
        $this->load->view('home', $data);
    }

    public function urine_report() {

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['urine_re_data'] = $this->data_record_model->searchByUrineReInformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/urine_report', $data);
        $this->load->view('home', $data);
    }

    public function stool_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['stool_re_data'] = $this->data_record_model->searchBystoolReInformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/stool_report', $data);
        $this->load->view('home', $data);
    }

    public function radiology_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['check_editor'] = $this->data;
        $data['radiology_data'] = $this->data_record_model->searchByradiologyInformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/radiology_report', $data);
        $this->load->view('home', $data);
    }

    public function usg_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['check_editor'] = $this->data;
        $data['usg_data'] = $this->data_record_model->searchByusgInformation($manual_pid, $visiting_no, $current_date);
//       echo '<pre>';
//       print_r($data['usg_data']);
//       exit();
        $data['maincontent'] = $this->load->view('source_file/usg_report', $data);
        $this->load->view('home', $data);
    }

    public function bone_marrow() {
//        $patient_id = $this->session->userdata('patient_id');
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['check_editor'] = $this->data;
        $data['bonemarrow_data'] = $this->data_record_model->searchBybonemarrowInformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/bone_marrow', $data);
        $this->load->view('home', $data);
    }

    public function karyotype_report_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['karyotype_report_data'] = $this->data_record_model->searchByekaryotypeInformation($manual_pid, $visiting_no, $current_date);
        $data['check_editor'] = $this->data;
        $data['maincontent'] = $this->load->view('source_file/karyotype_report', $data);
        $this->load->view('home', $data);
    }

    public function echo_report() {

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        //$data['check_editor'] = $this->data;
        $data['echo_report_data'] = $this->data_record_model->searchByechoreportnformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/echo_report', $data);
        $this->load->view('home', $data);
    }

    public function histopathology_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['check_editor'] = $this->data;
        $data['histopathology_report_data'] = $this->data_record_model->searchByehistopathologyInformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/histopathology_report', $data);
        $this->load->view('home', $data);
    }

    public function others_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['check_editor'] = $this->data;
        $data['others_report_data'] = $this->data_record_model->searchByeothersreportnformation($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/others_report', $data);
        $this->load->view('home', $data);
    }

    public function cytogenetic_report() {
        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data['cytogenetic_rpt'] = $this->data_record_model->cytogenetic_rpt_by_info($manual_pid, $visiting_no, $current_date);
        $data['cytogeneticreport_data'] = $this->data_record_model->searchByecytogeneticreportingdatainformation();
        $data['maincontent'] = $this->load->view('source_file/cytogenetic_report', $data);
        $this->load->view('home', $data);
    }

    public function cytopathology_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        //$data['check_editor'] = $this->data;
        $data['cytopathology_report'] = $this->data_record_model->searchByecytopathologyInformation($manual_pid, $visiting_no, $current_date);
//        echo '<pre>';
//        print_r($data['cytopathology_report']);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/cytopathology_report', $data);
        $this->load->view('home', $data);
    }

    public function immunophenotyping_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['immunophenotype_rpt'] = $this->data_record_model->immuno_type_by_info($manual_pid, $visiting_no, $current_date);
        $data['immunophenotype_data'] = $this->data_record_model->searchimmunophenotypeInformation();
        $data['maincontent'] = $this->load->view('source_file/immunophenotyping_report', $data);
        $this->load->view('home', $data);
    }

    public function biochemistry_report() {
        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data['multiplereport'] = $this->data_record_model->multiplereport_by_info($manual_pid, $visiting_no, $current_date);
        $data['bichemistrydata'] = $this->data_record_model->searchByinvestigationbiochemistryInformation();
        $data['maincontent'] = $this->load->view('source_file/biochemistry', $data);
        $this->load->view('home', $data);
    }

    public function serology_report() {
        $data = array();
        $data['bonemarrow_data'] = $this->data_record_model->searchBybonemarrowInformation();
        $data['maincontent'] = $this->load->view('source_file/serology', $data);
        $this->load->view('home', $data);
    }

//------------------------------------------------------------------------------print preview--------------------------------------------------
    public function print_preview_multireport() {
        $data = array();
        $patient_id = $this->session->userdata('patient_id');
        $data['multiplereport'] = $this->data_record_model->multiplereport_by_info($patient_id);
        $data['bichemistrydata'] = $this->data_record_model->searchByinvestigationbiochemistryInformation();
        $this->load->view('source_file/print_preview_multireport', $data);
    }

    public function print_preview_haematology() {
        $this->load->view('source_file/haematology_print_preview');
    }

    public function preview_all_visit_data() {

        
        $manual_pid = $this->input->post('manual_pid', true);
        $visitno1 = $this->input->post('visitno1', true);
        $visitno2 = $this->input->post('visitno2', true);
        
        $pvisitInfo=array();
        $pvisitInfo['manual_pid']=$manual_pid;
        $pvisitInfo['visitno1']=$visitno1;
        $pvisitInfo['visitno2']=$visitno2;
        $this->session->set_userdata($pvisitInfo);
        
        $data = array();
        $data['prescrptioninfo'] = $this->data_record_model->revisit_drugsearch_all_view($manual_pid, $visitno1, $visitno2);
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription_all_view($manual_pid, $visitno1, $visitno2);
        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['search_patient_info'] = $this->data_record_model->revisit_data_pInfo_all_view($manual_pid);
        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity_all_viewinfo($manual_pid, $visitno1, $visitno2);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion_all_view($manual_pid, $visitno1, $visitno2);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint_all_view($manual_pid, $visitno1, $visitno2);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory_all_view($manual_pid, $visitno1, $visitno2);
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory_all_view($manual_pid, $visitno1, $visitno2);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings_all_view($manual_pid, $visitno1, $visitno2);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue_all_view($manual_pid, $visitno1, $visitno2);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis_all_view($manual_pid, $visitno1, $visitno2);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['protocol_type'] = $this->data_record_model->revisit_data_protocol_all_view($manual_pid, $visitno1, $visitno2);
        $data['adviceInformation'] = $this->data_record_model->adviceinfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation_all_view($manual_pid, $visitno1, $visitno2);
        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['auto_complete_investigatino'] = $this->data_record_model->autocomplete_investigation_name_by_search();
        $data['adviceinfo'] = $this->data_record_model->revisit_adviceinfo_all_view($manual_pid, $visitno1, $visitno2);

        $data['haematology_report'] = $this->data_record_model->revisit_haematology_all_view($manual_pid, $visitno1, $visitno2);
        $data['multile_report'] = $this->data_record_model->revisit_multiple_all_view($manual_pid, $visitno1, $visitno2);
        $data['usg_report'] = $this->data_record_model->revisit_usgreport_all_view($manual_pid, $visitno1, $visitno2);
        $data['radiology_report'] = $this->data_record_model->revisit_radiology_all_view($manual_pid, $visitno1, $visitno2);
        $data['bomemarrow_report'] = $this->data_record_model->revisit_bonemarrow_all_view($manual_pid, $visitno1, $visitno2);
        $data['echo_report'] = $this->data_record_model->revisit_echo_all_view($manual_pid, $visitno1, $visitno2);
        $data['histopathology_report'] = $this->data_record_model->revisit_histopathology_all_view($manual_pid, $visitno1, $visitno2);
        $data['cytopathology_report'] = $this->data_record_model->revisit_cytopathology_all_view($manual_pid, $visitno1, $visitno2);
        $data['immunophenotyping_report'] = $this->data_record_model->revisit_immunophenotyping_all_view($manual_pid, $visitno1, $visitno2);
        $data['karyotype_report'] = $this->data_record_model->revisit_karyotype_all_view($manual_pid, $visitno1, $visitno2);
        $data['cytogenetic_report'] = $this->data_record_model->revisit_cytogenetic_all_view($manual_pid, $visitno1, $visitno2);
        $data['urine_report'] = $this->data_record_model->revisit_urine_all_view($manual_pid, $visitno1, $visitno2);
        $data['stool_report'] = $this->data_record_model->revisit_stool_all_view($manual_pid, $visitno1, $visitno2);
        $data['others_report'] = $this->data_record_model->revisit_othersreport_all_view($manual_pid, $visitno1, $visitno2);
        $data['radiology_report'] = $this->data_record_model->revisit_radiologyreport_all_view($manual_pid, $visitno1, $visitno2);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint_all_view($manual_pid, $visitno1, $visitno2); //row
        $data['adviceInformation'] = $this->data_record_model->select_by_patientAdvice_all_view($manual_pid, $visitno1, $visitno2);
        $data['protocol_pt_info'] = $this->data_record_model->revisit_data_protocol_byCycle_all_view($manual_pid, $visitno1, $visitno2);
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $data['maincontent']=$this->load->view('reporting/preview_revisit_all_data', $data,true);
        $this->load->view('home', $data);
        
        
    }
    
    public function pdf_preview_all_visit_datainfo() {
//        $manual_pid = $this->input->post('manual_pid', true);
//        $visitno1 = $this->input->post('visitno1', true);
//        $visitno2 = $this->input->post('visitno2', true);

        $manual_pid = $this->session->userdata('manual_pid');
        $visitno1 = $this->session->userdata('visitno1');
        $visitno2 = $this->session->userdata('visitno2');
//   echo $manual_pid, $visitno1,$visitno2;
//   exit();
        $data = array();
        $data['prescrptioninfo'] = $this->data_record_model->revisit_drugsearch_all_view($manual_pid, $visitno1, $visitno2);
        $data['revisitInformation'] = $this->data_record_model->revisit_data_byprescription_all_view($manual_pid, $visitno1, $visitno2);
        $data['patient_information'] = $this->data_record_model->revisit_data_patientInfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['search_patient_info'] = $this->data_record_model->revisit_data_pInfo_all_view($manual_pid);

        $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity_all_viewinfo($manual_pid, $visitno1, $visitno2);
        $data['doseSuggestion'] = $this->data_record_model->revisit_data_dosesuggestion_all_view($manual_pid, $visitno1, $visitno2);
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint_all_view($manual_pid, $visitno1, $visitno2);
        $data['familyhistory'] = $this->data_record_model->revisit_data_familyhistory_all_view($manual_pid, $visitno1, $visitno2);
        $data['personalhistory'] = $this->data_record_model->revisit_data_personalhistory_all_view($manual_pid, $visitno1, $visitno2);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings_all_view($manual_pid, $visitno1, $visitno2);
        $data['physicalfindingsValue'] = $this->data_record_model->revisit_data_physicalfindingsValue_all_view($manual_pid, $visitno1, $visitno2);
        $data['diagnosis'] = $this->data_record_model->revisit_data_diagnosis_all_view($manual_pid, $visitno1, $visitno2);
        $data['prescriptoin_data'] = $this->data_record_model->revisit_drugInfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['protocol_type'] = $this->data_record_model->revisit_data_protocol_all_view($manual_pid, $visitno1, $visitno2);
        $data['adviceInformation'] = $this->data_record_model->adviceinfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['investigationinfo'] = $this->data_record_model->revisit_investigation_all_view($manual_pid, $visitno1, $visitno2);
        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['auto_complete_investigatino'] = $this->data_record_model->autocomplete_investigation_name_by_search();
        $data['adviceinfo'] = $this->data_record_model->revisit_adviceinfo_all_view($manual_pid, $visitno1, $visitno2);

        $data['haematology_report'] = $this->data_record_model->revisit_haematology_all_view($manual_pid, $visitno1, $visitno2);
        $data['multile_report'] = $this->data_record_model->revisit_multiple_all_view($manual_pid, $visitno1, $visitno2);
        $data['usg_report'] = $this->data_record_model->revisit_usgreport_all_view($manual_pid, $visitno1, $visitno2);
        $data['radiology_report'] = $this->data_record_model->revisit_radiology_all_view($manual_pid, $visitno1, $visitno2);
        $data['bomemarrow_report'] = $this->data_record_model->revisit_bonemarrow_all_view($manual_pid, $visitno1, $visitno2);
        $data['echo_report'] = $this->data_record_model->revisit_echo_all_view($manual_pid, $visitno1, $visitno2);
        $data['histopathology_report'] = $this->data_record_model->revisit_histopathology_all_view($manual_pid, $visitno1, $visitno2);
        $data['cytopathology_report'] = $this->data_record_model->revisit_cytopathology_all_view($manual_pid, $visitno1, $visitno2);
        $data['immunophenotyping_report'] = $this->data_record_model->revisit_immunophenotyping_all_view($manual_pid, $visitno1, $visitno2);
        $data['karyotype_report'] = $this->data_record_model->revisit_karyotype_all_view($manual_pid, $visitno1, $visitno2);
        $data['cytogenetic_report'] = $this->data_record_model->revisit_cytogenetic_all_view($manual_pid, $visitno1, $visitno2);
        $data['urine_report'] = $this->data_record_model->revisit_urine_all_view($manual_pid, $visitno1, $visitno2);
        $data['stool_report'] = $this->data_record_model->revisit_stool_all_view($manual_pid, $visitno1, $visitno2);
        $data['others_report'] = $this->data_record_model->revisit_othersreport_all_view($manual_pid, $visitno1, $visitno2);
        $data['radiology_report'] = $this->data_record_model->revisit_radiologyreport_all_view($manual_pid, $visitno1, $visitno2);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo_all_view($manual_pid, $visitno1, $visitno2);
        $data['extracomplaintList'] = $this->data_record_model->select_by_patientExtraComplaint_all_view($manual_pid, $visitno1, $visitno2); //row
        $data['adviceInformation'] = $this->data_record_model->select_by_patientAdvice_all_view($manual_pid, $visitno1, $visitno2);
        $data['protocol_pt_info'] = $this->data_record_model->revisit_data_protocol_byCycle_all_view($manual_pid, $visitno1, $visitno2);
        //$data['maincontent']=$this->load->view('reporting/pdf_preview_revisit_all_data', $data); 
        $this->load->helper(array('dompdf', 'file'));
        $view_file = $this->load->view('reporting/pdf_preview_revisit_all_data', $data, true);
        $file_name = pdf_create($view_file, 'Download Patient  Info..');
        echo $file_name;
        
    }
    
    public function send_mail_info() {
        
//        $data=array();
//        $data['mailto'] = $this->input->post('mailto',true);
//        $data['msg'] = $this->input->post('msg',true);
//        $data['subject'] = $this->input->post('subject',true);
//        $data['upload_file'] = $this->input->post('upload_file',true);
        //$this->data_record_model->update_history_Info_by_haematologyReport($data);
        
        $mdata = array();
        $mdata['from_address'] = 'info@tutsbd.com';
        $mdata['to_address'] = $data['email'];
        $mdata['admin_full_name'] = "info@tutsbd.com";
        $mdata['subject'] = 'Please confirmation your email';
        $mdata['full_name'] = $data['full_name'];
        //print_r($mdata);
        //exit();
        $this->load->model('mailer_model');
        $this->mailer_model->sendEmail($mdata, 'patientInfomail');
echo '<pre>';
print_r($data);
exit();
        $sdata=array();
        $sdata['message']='';
        $this->session->set_userdata($sdata);
        redirect("welcome/thankyou",$mdata);   
        
        
        
    }
    
    public function thankyou() {
        $data['maincontent'] = $this->load->view('thankyou');
        $this->load->view('home', $data);
       
    }

    public function print_preview_others() {
        $this->load->view('source_file/print_preview_others_report');
    }

    public function print_preview_bonemarrow() {
        $this->load->view('source_file/bonemarrow_report');
    }

    public function print_preview_echo() {
        $this->load->view('source_file/echo_report_print_preview');
    }

    public function print_preview_histopathology() {
        $this->load->view('source_file/histopathology_print_preview');
    }

    public function print_preview_cytopathology() {
        $this->load->view('source_file/cytopathology_print_preview');
    }

    public function print_preview_karyotype_report() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['karyotype_report_data'] = $this->data_record_model->searchByekaryotypeInformation($manual_pid, $visiting_no, $current_date);
        $this->load->view('source_file/karyotype_print_preview', $data);
    }

    public function print_preview_urinere() {
        $this->load->view('source_file/urinere_print_preview');
    }

    public function print_preview_stoolre() {
        $this->load->view('source_file/report_stool_re_print_preview');
    }

    public function print_preview_radiology() {
        $this->load->view('source_file/radiology_print_preview');
    }

    public function immunopenotype_rpt() {

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['immunophenotype_rpt'] = $this->data_record_model->immuno_type_by_info($manual_pid, $visiting_no, $current_date);
        $this->load->view('source_file/immunphenotype_print_preview', $data);
    }

    public function cytogenetic_rpt() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['cytogenetic_rpt'] = $this->data_record_model->cytogenetic_rpt_by_info($manual_pid, $visiting_no, $current_date);
        $this->load->view('source_file/cytogenetic_print_preview', $data);
    }

    public function ultrasonography_report() {
        $this->load->view('source_file/ultrasonography_report');
    }

// -------------------------------------------------------------------- drug help------------------
    public function drug_help() {
        $data = array();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['brand_name_info'] = $this->data_record_model->brand_name_information();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['new_generic_name'] = $this->data_record_model->generic_name_by_id();
        $data['maincontent'] = $this->load->view('source_file/drug_help', $data);
        $this->load->view('home', $data);
    }

//----------------------------------------------------------------------------- view all function----------------
    public function view_generic_Info() {
        $data = array();
        $data['generic_info'] = $this->data_record_model->genericInformation();
        $data['maincontent'] = $this->load->view('source_file/view_generic_name', $data);
        $this->load->view('home', $data);
    }

    public function view_complaint_group_name_Info() {
        $data = array();
        $data['complaint_group_info'] = $this->data_record_model->complaint_group_name();
        $data['maincontent'] = $this->load->view('source_file/view_complaint_name', $data);
        $this->load->view('home', $data);
    }

    public function view_advice_group_name_Info() {
        $data = array();
        $data['advice_groupName'] = $this->data_record_model->adviceGroupNameInformaiton();
        $data['maincontent'] = $this->load->view('source_file/view_advice_group_name', $data);
        $this->load->view('home', $data);
    }

    public function view_new_investigation_name_Info() {
        $data = array();
        $data['advice_groupName'] = $this->data_record_model->adviceGroupNameInformaiton();
        $data['advie_info'] = $this->data_record_model->view_search_advice_name_by_info();
        //echo '<pre>';
        //print_r( $data['advie_info']);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_investigation_name', $data);
        $this->load->view('home', $data);
    }

    public function view_suggestion_Info() {
        $data = array();
        $data['suggestion_name'] = $this->data_record_model->view_suggestion_name();
        $data['maincontent'] = $this->load->view('source_file/view_suggestion_name', $data);
        $this->load->view('home', $data);
    }

    public function view_dictionary_category_Info() {
        $data = array();
        $data['dictionaryDataView'] = $this->data_record_model->view_dictionarydataview();
        $data['maincontent'] = $this->load->view('source_file/view_dic_cate_name', $data);
        $this->load->view('home', $data);
    }

    public function view_dictionary_Info() {
        $data = array();
        $data['dictionaryinfo'] = $this->data_record_model->view_dictionaryinfo();
        $data['maincontent'] = $this->load->view('source_file/view_dic_info', $data);
        $this->load->view('home', $data);
    }

    public function viewdoes_add_new_drug() {
        $data = array();
        $data['add_new_drug'] = $this->data_record_model->view_add_new_drug_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_add_new_drug_name', $data);
        $this->load->view('home', $data);
    }

    public function view_drug_help() {
        $data = array();
        $data['drug_help'] = $this->data_record_model->view_search_drug_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_drug_help', $data);
        $this->load->view('home', $data);
    }

    public function view_advice_name_Info() {
        $data = array();
        $data['advie_info'] = $this->data_record_model->view_search_advice_name_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_advice_name', $data);
        $this->load->view('home', $data);
    }

    public function view_haematology_report() {

//        $patient_id = $this->session->userdata('patient_id');
//        $visiting_no = $this->session->userdata('visiting_no');   
        $data = array();
        $data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['maincontent'] = $this->load->view('source_file/view_haematology_name', $data);
        $this->load->view('home', $data);
    }

    public function view_multiple_report() {
        $data = array();
        $data['view_multiple_report'] = $this->data_record_model->view_search_multipereport();
        $data['maincontent'] = $this->load->view('source_file/view_multiple_report', $data);
        $this->load->view('home', $data);
    }

    public function view_urine_report() {
        $data = array();
        $data['view_urine_report'] = $this->data_record_model->view_search_urinereport();
        $data['maincontent'] = $this->load->view('source_file/view_urine_report', $data);
        $this->load->view('home', $data);
    }

    public function view_stool_report() {
        $data = array();
        $data['view_stool_report'] = $this->data_record_model->view_search_stoolreport();
        $data['maincontent'] = $this->load->view('source_file/view_stool_report', $data);
        $this->load->view('home', $data);
    }

    public function view_radiology_report() {

        $data = array();
        $data['view_radiology_report'] = $this->data_record_model->view_search_radiologyreport();
        $data['maincontent'] = $this->load->view('source_file/view_radiology_report', $data);
        $this->load->view('home', $data);
    }

    public function view_usg_report() {
        $data = array();
        $data['view_usg_report'] = $this->data_record_model->view_search_usgreport();
        $data['maincontent'] = $this->load->view('source_file/view_usg_report', $data);
        $this->load->view('home', $data);
    }

    public function view_bone_marrow_report() {
        $data = array();
        $data['view_bonemarrow_report'] = $this->data_record_model->view_search_bonereport();
        $data['maincontent'] = $this->load->view('source_file/view_bonemarrow_report', $data);
        $this->load->view('home', $data);
    }

    public function view_echo_report() {
        $data = array();
        $data['view_echo_report'] = $this->data_record_model->view_search_echorpt();
        $data['maincontent'] = $this->load->view('source_file/view_echo_report', $data);
        $this->load->view('home', $data);
    }

    public function view_cytopathology_report() {
        $data = array();
        $data['view_cytopathology_report'] = $this->data_record_model->view_search_cytopathologyrpt();
        $data['maincontent'] = $this->load->view('source_file/view_cytopathology_report', $data);
        $this->load->view('home', $data);
    }

    public function view_histopathology_report() {
        $data = array();
        $data['view_histopathology_report'] = $this->data_record_model->view_search_histopathologyrpt();
        $data['maincontent'] = $this->load->view('source_file/view_histopathology_report', $data);
        $this->load->view('home', $data);
    }

    public function view_immunophenotyping_report() {
        $data = array();
        $data['view_immunophenotyping_report'] = $this->data_record_model->view_search_immunophenotypingyrpt();
        $data['maincontent'] = $this->load->view('source_file/view_immunophenotyping_report', $data);
        $this->load->view('home', $data);
    }

    public function view_karyotype_report() {
        $data = array();
        $data['view_karyotype_report'] = $this->data_record_model->view_search_view_karyotyperpt();
        $data['maincontent'] = $this->load->view('source_file/view_karyotype_report', $data);
        $this->load->view('home', $data);
    }

    public function view_cytogetic_report() {
        $data = array();
        $data['view_cytogenetic_report'] = $this->data_record_model->view_search_view_cytogeneticrpt();
        $data['maincontent'] = $this->load->view('source_file/view_cytogenetic_report', $data);
        $this->load->view('home', $data);
    }

    public function view_others_report() {
        $data = array();
        $data['view_others_report'] = $this->data_record_model->view_search_view_othersrpt();
        $data['maincontent'] = $this->load->view('source_file/view_others_report', $data);
        $this->load->view('home', $data);
    }

    public function view_new_user_Info() {
        $data = array();
        $data['registrationInfo'] = $this->data_record_model->view_search_registration_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_user_registration', $data);
        $this->load->view('home', $data);
    }

    public function view_complaint_name_Info() {
        $data = array();
        $data['view_complaint'] = $this->data_record_model->view_search_complaint_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_complaint_name_informaiton', $data);
        $this->load->view('home', $data);
    }

    public function view_customized_phy_info_Info() {
        $data = array();
        $data['view_customized_physicalfindings'] = $this->data_record_model->view_search_customized_phycialfindings_by_info();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        //echo '<pre>';
        //print_r($data);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_customized_physicalfindgins_informaiton', $data);
        $this->load->view('home', $data);
    }

    public function view_customized_phy_value_info_Info_onchangevalue() {
        $data = array();
        $data['view_customized_physicalfindings'] = $this->data_record_model->view_search_customized_phycialfindings_by_info();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        //$data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        //$data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        //echo '<pre>';
        //print_r($data['view_customized_physicalfindings'] );
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_phy_value_informaiton', $data);
        $this->load->view('home', $data);
    }

    public function view_customized_phy_value_info_Info() {
        $data = array();
        $data['view_customized_physicalfindings'] = $this->data_record_model->view_search_customized_phycialfindings_by_info();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
        //echo '<pre>';
        //print_r($data['view_systolic_value']);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_customized_physicalfindgins_value_informaiton', $data);
        $this->load->view('home', $data);
    }

    public function view_customized_systolic_Info() {
        $data = array();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
        //echo '<pre>';
        //print_r($data['view_systolic_value']);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_customized_systolic_informaiton', $data);
        $this->load->view('home', $data);
    }

    public function view_customized_systolic_value_Info() {
        $data = array();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
        //echo '<pre>';
        //print_r($data['view_systolic_value']);
        //exit();

        $data['maincontent'] = $this->load->view('source_file/view_customized_systolic_value_informaiton', $data);
        $this->load->view('home', $data);
    }

    public function viewComorbidityInfo() {
        $data = array();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_comorbidity_information', $data);
        $this->load->view('home', $data);
    }

    public function viewpesonalhistoryInfo() {
        $data = array();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_personal_history', $data);
        $this->load->view('home', $data);
    }

    public function view_my_data() {
        $data = array();
        $data['view_particulardata'] = $this->data_record_model->view_particular_by_info();
        $data['view_complaint'] = $this->data_record_model->view_search_complaint_by_info();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_particularinfo', $data);
        $this->load->view('home', $data);
    }

    public function view_family_history_data() {
        $data = array();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
//echo '<pre>';
//print_r($data);
//exit();
        $data['maincontent'] = $this->load->view('source_file/view_familyhistoryinfo', $data);
        $this->load->view('home', $data);
    }

    public function view_diagnosisdata() {
        $data = array();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_diagnosisinfo', $data);
        $this->load->view('home', $data);
    }

    public function view_particular() {
        $data = array();
        $data['view_particulardata'] = $this->data_record_model->view_particular_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_particular', $data);
        $this->load->view('home', $data);
    }

    public function view_physical_findings_data() {
        $data = array();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_physicalfindings', $data);
        $this->load->view('home', $data);
    }

    public function view_diagnosisCategory_Info() {
        $data = array();
        $data['view_diagnosisCategory'] = $this->data_record_model->view_diagnosisCategory_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_diagnosisCategory', $data);
        $this->load->view('home', $data);
    }

    public function user_registration() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/new_user_registration', $data);
        $this->load->view('home', $data);
    }

    public function viewpatientadviceInfo() {
        $data = array();
        $data['view_patient_advice'] = $this->data_record_model->view_pt_advice_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_patientadvice', $data);
        $this->load->view('home', $data);
    }

    public function view_presenting_complaint() {
        $data = array();
        $data['view_complaint'] = $this->data_record_model->view_search_complaint_by_info();
        $data['view_patient_advice'] = $this->data_record_model->view_pt_advice_by_info();
        $data['maincontent'] = $this->load->view('source_file/view_complaint_info', $data);
        $this->load->view('home', $data);
    }

    public function view_ChemotherapyRegimenName_Info() {
        $data = array();
        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        //$data['chemotherapy_regimen_value'] = $this->data_record_model->by_chemotherapydata_value();
        //echo '<pre>';
        //print_r($data);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_ChemotherapyRegimen_info', $data);
        $this->load->view('home', $data);
    }

    public function view_remarks_Info() {
        $data = array();
        $data['remarks_name'] = $this->data_record_model->by_remarksdata();
        //$data['chemotherapy_regimen_value'] = $this->data_record_model->by_chemotherapydata_value();
        //echo '<pre>';
        //print_r($data);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_remarks', $data);
        $this->load->view('home', $data);
    }

    public function view_protocol_help_searching() {
        $data = array();
        $data['help_protocol'] = $this->data_record_model->by_protocol_help();
        //$data['chemotherapy_regimen_value'] = $this->data_record_model->by_chemotherapydata_value();
        //echo '<pre>';
        //print_r($data);
        //exit();
        $data['maincontent'] = $this->load->view('source_file/view_protocol_help', $data);
        $this->load->view('home', $data);
    }

    public function patient_informaiton_record() {
        $patientid= $this->data_record_model->patient_id_search();
        $patient_nextid=$patientid->patient_id+1;
        
        $data = array();
        $data['manual_id']= $patient_nextid;
        $data['maincontent'] = $this->load->view('source_file/patient_information', $data);
        $this->load->view('home', $data);
    }

   

    public function add_new_comorbidity() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_newComorbidity', $data);
        $this->load->view('home', $data);
    }

    public function familyHistory() {
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['patient_family_history_info'] = $this->data_record_model->personal_family_history_by_search($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/familyHistory', $data);
        $this->load->view('home', $data);
    }

    public function physical_findings() {

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data = array();
        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date);
        $data['maincontent'] = $this->load->view('source_file/physicalFindings', $data);
        $this->load->view('home', $data);
    }

    public function diagnosis() {
        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($manual_pid, $visiting_no, $current_date);
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['maincontent'] = $this->load->view('source_file/diagnosis', $data);
        $this->load->view('home', $data);
    }

    public function chemotherapy_region() {
        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');

        $data['ChemotherapyInformationMain'] = $this->data_record_model->chemotherapyRegimenInfo_by_search($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($manual_pid, $visiting_no, $current_date);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($manual_pid, $visiting_no, $current_date);
        $data['patient_cycle_info'] = $this->data_record_model->pt_cycle_info($manual_pid);
        $cycleno = $this->data_record_model->call_cycleno($manual_pid = null);
        $data['cycle_no'] = $cycleno->cycle_no + 1;

        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        $data['chemotherapy_regimen_value'] = $this->data_record_model->by_chemotherapydata_value();
        $data['maincontent'] = $this->load->view('source_file/chemotherapy_region', $data);
        $this->load->view('home', $data);
    }

    public function my_prescription() {
        $data = array();
        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        // start view data
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

        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
//        echo '<pre>';
//        print_r($data['complaint_nameInfo']);
//        exit();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['patientadviceInfo'] = $this->data_record_model->patient_advice_by_search();
        $data['path_groupName'] = $this->data_record_model->pathological_group_testInfo();
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['view_doctor_sealinfo'] = $this->data_record_model->by_doctorsealdata();

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

        // end view data     
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['maincontent'] = $this->load->view('source_file/my_prescription_tab', $data);
        $this->load->view('home', $data);
    }

    public function add_new_personal_history() {
        $data = array();
        $data['maincontent'] = $this->load->view('source_file/add_newper_history', $data);
        $this->load->view('home', $data);
    }

    public function close_physical_findings_page() {
        redirect("welcome/physical_findings");
    }

    public function add_new_physicalfindings_systolic() {
        $data = array();
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['view_systolic_value'] = $this->data_record_model->by_physicalfindingsdata_systolic_value();
//$data['view_physicafindings_value']=$this->data_record_model->by_physicalfindingsdata_value();
        $data['maincontent'] = $this->load->view('source_file/add_physicalfindins_systolic', $data);
        $this->load->view('home', $data);
    }

    public function add_new_physicalfindings() {
        $data = array();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['maincontent'] = $this->load->view('source_file/add_physicalfindins', $data);
        $this->load->view('home', $data);
    }

    public function add_new_diagnosis_category() {
        $data = array();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        //$data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['maincontent'] = $this->load->view('source_file/add_new_diagnosis_category', $data);
        $this->load->view('home', $data);
    }

    public function add_new_immunophenotype_test_name() {
        $data = array();

        $data['view_immunophenotype_name'] = $this->data_record_model->by_immunophenotypedata();
        //$data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['maincontent'] = $this->load->view('source_file/add_new_immunophenotype_testName', $data);
        $this->load->view('home', $data);
    }

    public function add_new_cytogenetic_test_name() {
        $data = array();
        $data['cytogenetic_name'] = $this->data_record_model->by_cytogeneticdata();
        $data['maincontent'] = $this->load->view('source_file/add_new_cytogenetic_testName', $data);
        $this->load->view('home', $data);
    }

    public function add_new_chemotherapy_regimen() {
        $data = array();
        $data['chemotherapy_regimen_name'] = $this->data_record_model->by_chemotherapydata();
        $data['chemotherapy_regimen_value'] = $this->data_record_model->by_chemotherapydata_value();
        $data['maincontent'] = $this->load->view('source_file/add_new_chemotherapy_Name', $data);
        $this->load->view('home', $data);
    }

    public function add_new_physicalfindings_systolic_information() {
        $data = array();
        $patient_id = $this->session->userdata('patient_id');
        $visiting_no = $this->session->userdata('visiting_no');
//$data['view_physicafindings']=$this->data_record_model->by_physicalfindingsdata();
//$data['view_physicafindings_value']=$this->data_record_model->by_physicalfindingsdata_value();
        $data['view_systolicInformaiton'] = $this->data_record_model->by_physicalfindingsdata_systolicInformation($patient_id, $visiting_no);
        $data['view_systolic'] = $this->data_record_model->by_physicalfindingsdata_systolic();
        $data['maincontent'] = $this->load->view('source_file/systolic_information_physical_findings', $data);
        $this->load->view('home', $data);
    }

    public function patient_appointment_list() {
        $data = array();
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/view_patient_appointment_listInfo', $data);
        $this->load->view('home', $data);
    }

    public function re_visit_patient() {
        $data = array();
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();

        $data['maincontent'] = $this->load->view('source_file/re_visit_patient', $data);
        $this->load->view('home', $data);
    }

    public function patient_date_to_date_searching() {

        $data = array();
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        $data['patient_id_search'] = $this->data_record_model->search_by_patient_id($manual_pid = null);
        $data['view_particulardata'] = $this->data_record_model->view_particular_by_search($manual_pid);
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
//        echo '<pre>';
//        print_r($data['view_particulardata']);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/date_to_searching', $data);
        $this->load->view('home', $data);
    }

    public function presenting_complaint_search() {
        $data = array();
        $date_from = $this->input->post('prescription_date_from', true);
        $date_to = $this->input->post('prescription_date_from_date_to', true);
        $cc_name_id = $this->input->post('cc_name_id', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);
        $year = $this->input->post('year', true);
        if ($year == Null) {
            $year = date("Y", strtotime(date("Y-m-d")));
        }
        $sdata['year'] = $year;
        $this->session->set_userdata($sdata);
        
        $pdfinfo = array();
        $pdfinfo['date_from'] = $date_from;
        $pdfinfo['date_to'] = $date_to;
        $pdfinfo['cc_name_id'] = $cc_name_id;
        $pdfinfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($pdfinfo);

        $data['jan'] = $this->data_record_model->m_patient_january_presentig_complaint($year);
        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();
        $data['complaint'] = $this->data_record_model->complaint_by_groupID($date_from, $date_to, $cc_name_id, $manual_pid);
        $com_group_info = $this->data_record_model->selectCompalintGroupBy_Id($cc_name_id);

        if ($com_group_info) {
            $data['presenting_complaint'] = $com_group_info->complain_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        
        
//        $data['Feb'] = $this->data_record_model->m_patient_February($year);
//        $data['Mar'] = $this->data_record_model->m_patient_March($year);
//        $data['apr'] = $this->data_record_model->m_patient_april($year);
//        $data['may'] = $this->data_record_model->m_patient_may($year);
//        $data['june'] = $this->data_record_model->m_patient_june($year);
//        $data['july'] = $this->data_record_model->m_patient_july($year);
//        $data['aug'] = $this->data_record_model->m_patient_augs($year);
//        $data['sep'] = $this->data_record_model->m_patient_sep($year);
//        $data['octo'] = $this->data_record_model->m_patient_octo($year);
//        $data['nov'] = $this->data_record_model->m_patient_nov($year);
//        $data['decem'] = $this->data_record_model->m_patient_devem($year);
        
        
        $data['complaint_groupname'] = $this->data_record_model->select_presenting_complait_information();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/presenting_comnplaint_search', $data);
        $this->load->view('home', $data);
    }

    public function protocol_info() {
        $data = array();
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

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['protocol_search'] = $this->data_record_model->protocol_by_groupID($date_from, $date_to, $custom_chemotherapy_regmine_id, $manual_pid);
        $protocol = $this->data_record_model->selectProtocolGroupBy_Id($custom_chemotherapy_regmine_id);

        if ($protocol) {
            $data['protocolInfo'] = $protocol->customized_chemotherapy_regimen_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['protocol_data'] = $this->data_record_model->select_protocol_information();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/protocol_search_info', $data);
        $this->load->view('home', $data);
    }

    public function physical_findings_info() {
        $data = array();
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

        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();

        $data['maincontent'] = $this->load->view('source_file/physical_findings_search', $data);
        $this->load->view('home', $data);
    }

    public function patient_manual_id_searching($patient_id) {
        $data = array();
        $patient_id = $this->data_record_model->particularInfo($patient_id);
        $data['patient_id_search'] = $this->data_record_model->view_particular_by_search($patient_id);
        $data['maincontent'] = $this->load->view('source_file/date_to_searching', $data);
        $this->load->view('home', $data);
    }

    public function patient_name_searching() {

        $data = array();
        $patient_name = $this->input->post('patient_name', true);
        $data['patientname'] = $this->data_record_model->search_by_patient_name_search($patient_name = null);
        $data['dynamicSearch_pInfo'] = $this->data_record_model->patient_appointmentInfo();
        //$data['dynamicSearch_pInfo_pname'] = $this->data_record_model->search_by_patient_name_searching($patient_name);
        $data['maincontent'] = $this->load->view('source_file/patient_find_information_byName', $data);
        $this->load->view('home', $data);
    }

    public function comorbidity_search_informaiton() {
        $data = array();
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

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        //$data = array();

        $data['comorbidity'] = $this->data_record_model->comorbidity_by_groupID($date_from, $date_to, $comorbidity_id, $manual_pid);
        $comorbidity_info = $this->data_record_model->selectComorbidityBy_Id($comorbidity_id);

        if ($comorbidity_info) {
            $data['comorbidityInformation'] = $comorbidity_info->comorbidity_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['comorbidity_by_name'] = $this->data_record_model->select_presenting_comorbidity_information();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/comorbidity_searching_info', $data);
        $this->load->view('home', $data);
    }

    public function diagnosis_info() {

        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/diangosis_search_info', $data);
        $this->load->view('home', $data);
    }

    public function personalhistory_search_info() {
        $data = array();
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

//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/personalhistory_search_info', $data);
        $this->load->view('home', $data);
    }

    public function family_history_search_info() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
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

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();
        $data['family_history'] = $this->data_record_model->family_history_by_ID($date_from, $date_to, $manual_pid);
        //$familyhistoryinformation = $this->data_record_model->selectfamilyHistoryBy_Id($family_history_id);
        // if ($familyhistoryinformation) {
        //    $data['family_historyInformation'] = $familyhistoryinformation->familyhistory_value;
        // }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['familyHistory_by_name'] = $this->data_record_model->select_familyHistory_information();

        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/familyhistory_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_name_by_searching($patient_id) {

        $data = array();
        $data['particular'] = $this->data_record_model->particularInfo($patient_id);
        echo '<pre>';
        print_r($data);
        exit();
        $data['maincontent'] = $this->load->view('source_file/patient_find_information_byName_searching', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_information_by_gender_wise() {
        $data = array();
        $data['dynamicSearch_pInfo_pname'] = $this->data_record_model->p_name();
        $data['maincontent'] = $this->load->view('source_file/patient_find_information_bygender', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_information_by_between_age() {
        $data = array();
//        $age= preg_replace('/[^0-9]/','',trim($this->input->post('age', true))); 
//        $data['between_age'] = $this->data_record_model->search_betweenage($age);
        $data['maincontent'] = $this->load->view('source_file/patient_find_information_betweenage', $data);
        $this->load->view('home', $data);
    }

    public function search_between_age() {
        $data = array();
        $from_age = preg_split('/(?<=[0-9])(?=[a-z]+)/i', trim($this->input->post('from_age', true)));
        $to_age = preg_split('/(?<=[0-9])(?=[a-z]+)/i', trim($this->input->post('to_age', true)));
        $data['between_age'] = $this->data_record_model->search_betweenage($from_age, $to_age);

        echo '<pre>';
        print_r($data['between_age']);
        exit();
        // example link : http://codepad.org/fXwLOrEC
    }

    public function patient_find_information_by_remarks() {
        $data = array();
        $data['search_patient_remarks'] = $this->data_record_model->p_remarks();
        $data['maincontent'] = $this->load->view('source_file/view_p_remakrs', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation() {

        $data = array();
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

        $data['add_new_complaint_group'] = $this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();

        $data['maincontent'] = $this->load->view('source_file/patient_find_investigation', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_histopathology() {

        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/histopathology_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_cytopathology() {

        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/cytopathology_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_cytogenetic() {


        $data = array();
        $date_from = $this->input->post('starting_date_cytogenetic', true);
        $date_to = $this->input->post('ending_date_cytogenetic', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        //$karyotypeInfo = array();
        $karyotypeInfo['date_from'] = $date_from;
        $karyotypeInfo['date_to'] = $date_to;
        $karyotypeInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($karyotypeInfo);
        $data = array();
        $data['cytogenetic_rpt_searching'] = $this->data_record_model->cytogenetic_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/cytogenetic_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_single_line_rpt() {
        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/singline_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_bone_marrow() {

        $data = array();
        $date_from = $this->input->post('starting_date_bonemarrow', true);
        $date_to = $this->input->post('ending_date_bonemarrow', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));
        //$manual_pid = $this->input->post('manual_pid', true);

        $bonemarrowInfo = array();
        $bonemarrowInfo['date_from'] = $date_from;
        $bonemarrowInfo['date_to'] = $date_to;
        $bonemarrowInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($bonemarrowInfo);
        //$data = array();
        $data['bonemarrow_rpt_searching'] = $this->data_record_model->bonemarrow_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['bonemarrow_data'] = $this->data_record_model->select_bonemarrow_information();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_radiology() {

        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/radiology_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_ultrasonography() {

        $data = array();
        $date_from = $this->input->post('starting_date_usg', true);
        $date_to = $this->input->post('ending_date_usg', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $usgInfo = array();
        $usgInfo['date_from'] = $date_from;
        $usgInfo['date_to'] = $date_to;
        $usgInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($usgInfo);
        //$data = array();
        $data['usg_rpt_searching'] = $this->data_record_model->usg_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/usg_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_urine() {

        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/urine_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_stool() {

        $data = array();
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
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/stool_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_immunophentypint() {

        $data = array();

        $date_from = $this->input->post('starting_date_immunophenotyping', true);
        $date_to = $this->input->post('ending_date_immunophenotyping', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $immunoInfo = array();
        $immunoInfo['date_from'] = $date_from;
        $immunoInfo['date_to'] = $date_to;
        $immunoInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($immunoInfo);
        //$data = array();
        $data['immunophenotyping_rpt_searching'] = $this->data_record_model->immunophenotyping_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/immunophentypint_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_karyotype() {

        $data = array();
        $date_from = $this->input->post('starting_date_karyotype', true);
        $date_to = $this->input->post('ending_date_karyotype', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $karyotypeInfo = array();
        $karyotypeInfo['date_from'] = $date_from;
        $karyotypeInfo['date_to'] = $date_to;
        $karyotypeInfo['manual_pid'] = $manual_pid;

        $this->session->set_userdata($karyotypeInfo);
        //$data = array();
        $data['karyotype_rpt_searching'] = $this->data_record_model->karyotype_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/karyeotype_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_find_investigation_echo() {

        $data = array();
        $date_from = $this->input->post('starting_date_echo', true);
        $date_to = $this->input->post('ending_date_echo', true);
        //$manual_pid = $this->input->post('manual_pid', true);
        $manual_pid = preg_replace('/[^0-9]/', '', trim($this->input->post('manual_pid', true)));

        $echoInfo = array();
        $echoInfo['date_from'] = $date_from;
        $echoInfo['date_to'] = $date_to;
        $echoInfo['manual_pid'] = $manual_pid;
        $this->session->set_userdata($echoInfo);
        //$data = array();
        $data['echo_rpt_searching'] = $this->data_record_model->echo_by_ID($date_from, $date_to, $manual_pid);

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/echo_rpt_search_info', $data);
        $this->load->view('home', $data);
    }

    public function patient_date_to_date__remarks_searching() {
        $data = array();
        $data['patient_appointment'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();

        $data['maincontent'] = $this->load->view('source_file/date_to__date_searching_remarks', $data);
        $this->load->view('home', $data);
    }

    public function patient_prescription_step_one() {

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        // $data['comorbidityInformation'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no,$current_date);  
        $data['presentingComplaint'] = $this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no, $current_date);
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['maincontent'] = $this->load->view('source_file/patient_prescription_step_one', $data);
        $this->load->view('home', $data);
    }

//------------------------------------------------------------------------------- Start revisit update by prescription function -----------------------------
    public function patient_prescription_by_update($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
//$manual_pid=$this->session->userdata('manual_pid');
        $visiting_no = $pdata[1];
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['chiefComplaint'] = $this->data_record_model->cheief_complaint_by_search($patient_id, $visiting_no);
        $data['presentingComplaintInfo'] = $this->data_record_model->revisit_data_presentingComplaint_info($patient_id, $visiting_no);
        $data['maincontent'] = $this->load->view('source_file/update/patient_prescription_step_one_update', $data);
        $this->load->view('home', $data);
    }

    public function comorbidityInfo() {
        // $patient_id = $this->session->userdata('patient_id');
        //$visiting_no = $this->session->userdata('visiting_no');

        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['comorbidityinfo'] = $this->data_record_model->revisit_data_presentingcomorbidity($manual_pid, $visiting_no, $current_date);
        //$data['presentingComplaint']=$this->data_record_model->revisit_data_presentingComplaint($manual_pid, $visiting_no,$current_date);  
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        // $data['chiefComplaint'] = $this->data_record_model->cheief_complaint_by_search($patient_id, $visiting_no);
        //$data['comorbidityinfo'] = $this->data_record_model->comorbidity_by_info($patient_id, $visiting_no);
        $data['maincontent'] = $this->load->view('source_file/comorbidity', $data);
        $this->load->view('home', $data);
    }

    public function comorbidity_by_update($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
//$manual_pid=$this->session->userdata('manual_pid');
        $visiting_no = $pdata[1];
        $data = array();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['comorbidityinfo'] = $this->data_record_model->comorbidity_by_info($patient_id, $visiting_no);
        $data['maincontent'] = $this->load->view('source_file/update/update_comorbidity', $data);
        $this->load->view('home', $data);
    }

    public function personalhistory_by_update($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
//$result = $this->data_record_model->call_patientid($pid); 
        $visiting_no = $pdata[1];
//$data=array();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['patient_history_info'] = $this->data_record_model->personal_history_by_search($patient_id, $visiting_no);
        $data['maincontent'] = $this->load->view('source_file/update/update_personal_history', $data);
        $this->load->view('home', $data);
    }

    public function familyhistory_by_update($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
//$result = $this->data_record_model->call_patientid($pid); 
        $visiting_no = $pdata[1];
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['maincontent'] = $this->load->view('source_file/update/update_family_history', $data);
        $this->load->view('home', $data);
    }

    public function physicalfindings_by_update($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
        //$result = $this->data_record_model->call_patientid($patientid);
        $visiting_no = $pdata[1];

        //$data = array();
//$patient_id = $this->session->userdata('patient_id');
//        $visiting_no = $this->session->userdata('visiting_no');
        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['edit_physicalfindings'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($patient_id, $visiting_no);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
        $data['physicalfindings_revisitinfor'] = $this->data_record_model->revisit_data_physicalfindings($patient_id, $visiting_no);
        $data['physicalfindings_data'] = $this->data_record_model->revisit_data_physicalfindingsdata_revisit($patient_id, $visiting_no);
        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($patient_id, $visiting_no);
//        echo '<pre>';
//        print_r($data['physicalfindings']);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/update/update_physicalfindings', $data);
        $this->load->view('home', $data);
    }

    public function diagnostic_by_update($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
//$result = $this->data_record_model->call_patientid($pid); 
        $visiting_no = $pdata[1];
        $data['view_diagnosisCategory'] = $this->data_record_model->view_diagnosisCategory_by_info();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($patient_id, $visiting_no);
        $data['maincontent'] = $this->load->view('source_file/update/update_diagnosis', $data);
        $this->load->view('home', $data);
    }

    public function physicalfindings_by_update_view($patientid) {
        $pdata = explode('VisitNo', $patientid);
        $data = array();
        $patient_id = $pdata[0];
//$result = $this->data_record_model->call_patientid($pid); 
        $visiting_no = $pdata[1];
        $data['custom_phy_info'] = $this->data_record_model->cutomPhyfinInfo_by_search();
        $data['view_diagnosisCategory'] = $this->data_record_model->view_diagnosisCategory_by_info();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings'] = $this->data_record_model->by_physicalfindingsdata();
        $data['view_physicafindings_value'] = $this->data_record_model->by_physicalfindingsdata_value();
        $data['diagnosisInfo'] = $this->data_record_model->diagnosis_by_search($patient_id, $visiting_no);

        $data['physicalfindings'] = $this->data_record_model->revisit_data_physicalfindings($patient_id, $visiting_no);

        $data['view_physicalfindingsInfo_value'] = $this->data_record_model->view_physicalfindings_by_info_value($patient_id, $visiting_no);
        $data['view_physicalfindingsInfo'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
        $data['phyFingdings'] = $this->data_record_model->revisit_data_physicalfindings($patient_id, $visiting_no);

        //$data['edit_physicalfindings'] = $this->data_record_model->view_physicalfindings_by_info($patient_id, $visiting_no);
//        echo '<pre>';
//        print_r($data['physicalfindings']);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/update/update_physicalfindings', $data);
        $this->load->view('home', $data);
    }

//------------------------------------------------------------------------------- End revisit update by prescription function -----------------------------


    public function personalHistorInfo() {


        $manual_pid = $this->session->userdata('manual_pid');
        $visiting_no = $this->session->userdata('visiting_no');
        $current_date = $this->session->userdata('current_date');
        $data = array();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['patient_history_info'] = $this->data_record_model->revisit_data_personalhistory($manual_pid, $visiting_no, $current_date);
//        echo '<pre>';
//        print_r($data['patient_history_info']);
//        exit();
        $data['maincontent'] = $this->load->view('source_file/personalHistory', $data);
        $this->load->view('home', $data);
    }

    public function re_visit_patient_prescription_step_one() {
        $data = array();
        $data['complaint_group_info'] = $this->data_record_model->complaint_group_name();
        $data['maincontent'] = $this->load->view('source_file/re_visit_patient_prescription_step_one', $data);
        $this->load->view('home', $data);
    }

    public function prescription() {
        $data = array();
        $patient_id = $this->session->userdata('patient_id');
        $visiting_no = $this->session->userdata('visiting_no');
        $data['dosetype'] = $this->data_record_model->dosetypeInfo();
        $data['scheduleInfo'] = $this->data_record_model->schedule_data_Info();
        $data['suggestion'] = $this->data_record_model->suggestionInfo();
        $data['path_groupName'] = $this->data_record_model->pathological_group_testInfo();
        $data['prescriptoin_data'] = $this->data_record_model->select_by_prescription_all_data($patient_id, $visiting_no);
        $data['test_name'] = $this->data_record_model->select_by_prescription_adviceinfo($patient_id, $visiting_no);
        $data['complaintList'] = $this->data_record_model->select_by_patientComplaint($patient_id, $visiting_no);
//echo '<pre>';
//print_r($data['patientComplain']);
//exit();
        $data['maincontent'] = $this->load->view('source_file/my_prescription', $data);
        $this->load->view('home', $data);
    }

    public function report() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/report', $data);
        $this->load->view('home', $data);
    }

    public function presenting_complaint() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/presentingComplaint', $data);
        $this->load->view('home', $data);
    }

    public function comorbidity_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/comorbidity_searching', $data);
        $this->load->view('home', $data);
    }

    public function personalhistory_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/personalhistory_search', $data);
        $this->load->view('home', $data);
    }

    public function familyhistory_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/familyhistory_search', $data);
        $this->load->view('home', $data);
    }

    public function patient_sex_searching() {

        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['sex_searching'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/sex_searching', $data);
        $this->load->view('home', $data);
    }

    public function patient_age_group_searching() {

        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['sex_searching'] = $this->data_record_model->patient_appointmentInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/age_group_searching_searching', $data);
        $this->load->view('home', $data);
    }

    public function physicalfindings_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/physicalfindings_search', $data);
        $this->load->view('home', $data);
    }

    public function diangosis_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/diangosis_search', $data);
        $this->load->view('home', $data);
    }

    public function protocol_search() {
        $data = array();
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

        //echo $date_from;
        //exit();
        //  $data['complaintgroup']=$complaint_info->complain_group_name;
        $data = array();

        $data['protocol_search'] = $this->data_record_model->protocol_by_groupID($date_from, $date_to, $custom_chemotherapy_regmine_id, $manual_pid);
        $protocol = $this->data_record_model->selectProtocolGroupBy_Id($custom_chemotherapy_regmine_id);

        if ($protocol) {
            $data['protocolInfo'] = $protocol->customized_chemotherapy_regimen_name;
        }
        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;
        $data['protocol_data'] = $this->data_record_model->select_protocol_information();

//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/protocol_search_info', $data);
        $this->load->view('home', $data);
    }

    public function haemtology_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/haemtology_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function singline_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/singline_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function bonemarrow_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/bonemarrow_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function radiology_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/radiology_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function usg_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/usg_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function urine_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/urine_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function stool_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/stool_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function echo_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/echo_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function histopathology_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/histopathology_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function cytopathology_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/cytopathology_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function immunophentypint_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/immunophentypint_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function karyeotype_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/karyeotype_rpt_search', $data);
        $this->load->view('home', $data);
    }

    public function cytogenetic_rpt_search() {
        $data = array();
//$data['add_new_complaint_group']=$this->data_record_model->complaint_group_nameInformaiton();
        $data['complaint_nameInfo'] = $this->data_record_model->complaint_name_by_search();
        $data['view_comorbidityInfo'] = $this->data_record_model->view_search_comorbidity_by_info();
        $data['view_personalhistoryInfo'] = $this->data_record_model->view_personalhistory_by_info();
        $data['view_family_history'] = $this->data_record_model->view_familyhistory_by_info();
        $data['view_physicalfindings'] = $this->data_record_model->view_physicalfindgs_by_info();
        $data['view_diagnosis'] = $this->data_record_model->view_diagnosis_by_info();
        //$data['view_haematologyreport'] = $this->data_record_model->view_search_haematologyreport();
        $data['view_diagnosis_category_name'] = $this->data_record_model->by_diagnosis_categorydata();
        $data['view_ChemotherayRegimen_name'] = $this->data_record_model->by_chemotherapy_regimenInfo();
        $data['dynamicSearch_pInfo_mauan_pid'] = $this->data_record_model->patient_appointmentInfo();
        $data['maincontent'] = $this->load->view('source_file/cytogenetic_rpt_search', $data);
        $this->load->view('home', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */