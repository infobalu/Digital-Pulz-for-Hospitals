<?php
class Sample_centre_manager_modal extends CI_Model {

    public function GetAllSampleTypes() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "SampleCenterType/getAllSampleCenterTypes";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
        
    public function GetAllSampleCenters() {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $serviceURL = SERVICE_BASE_URL . "SampleCenters/getAllSampleCenters";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_GET_All_Request($serviceURL, $media_Type);
        $decodeResponse = json_decode($response);
        return $decodeResponse;
    }
    
    public function addSampleCenter($cate) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $category_JSON_Obj = $cate;
        $serviceURL = SERVICE_BASE_URL . "SampleCenters/addNewsampleCenter";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $category_JSON_Obj, $media_Type);
        print_r($category_JSON_Obj);
        return $response;
    }
    
    public function addSampleCenterType($cate) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $category_JSON_Obj = $cate;
        $serviceURL = SERVICE_BASE_URL . "SampleCenterType/addSampleCenterType";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $category_JSON_Obj, $media_Type);
        print_r($category_JSON_Obj);
        return $response;
    }
    
    public function updateLabType($LabType) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $category_JSON_Obj = $LabType;
        $serviceURL = SERVICE_BASE_URL . "LabType/updateLabTypes";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $category_JSON_Obj, $media_Type);
        return $response;
    }


   public function UpdateSampleCenterTypes($SampleCenterType) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $category_JSON_Obj = $SampleCenterType;
        $serviceURL = SERVICE_BASE_URL . "SampleCenterType/updateSampleCenterTypes";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $category_JSON_Obj, $media_Type);
        return $response;
    }

     public function UpdateSampleCenter($cate) {
        $this->load->model('/Service_Caller/ServiceCaller', 'serviceCaller');
        $category_JSON_Obj = $cate;
        $serviceURL = SERVICE_BASE_URL . "SampleCenters/updateSampleCenter";
        $media_Type = "application/json";
        $response = $this->serviceCaller->curl_POST_Request($serviceURL, $category_JSON_Obj, $media_Type);
        return $response;
    }
    
   
    
    
    
    
    
    
}