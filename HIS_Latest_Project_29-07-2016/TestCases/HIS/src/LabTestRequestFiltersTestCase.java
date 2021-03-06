import java.io.IOException;
import java.util.ArrayList;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import org.testng.Assert;
import org.testng.annotations.Test;


/**
 * This class is for TestNG Integration Test cases related to all
 * functionalities of Laboratory in HIS Project. developed by Nisal De Silva.
 * 
 * {@link BaseTestCase}
 * @author nisal.d
 * 
 */
public class LabTestRequestFiltersTestCase extends BaseTestCase {
	
public static final int SUCCESS_STATUS_CODE = 200;
	
	public static String patientId;
	public static String locationId;
	public JSONArray jsonArray;
	
	
	/**
	 * This test case is for get all patients
	 * 
	 * @throws IOException
	 * @throws JSONException 
	 */
	@Test(groups = "his.lab.test")
	public void getAllPatientsTestCase() throws IOException, JSONException{

		ArrayList<String> resArrayList = getHTTPResponse(properties.getProperty(TestCaseConstants.URL_APPEND_GET_ALL_PATIENTS_TYPES),
				TestCaseConstants.HTTP_GET, null);
		
		jsonArray = new JSONArray(resArrayList.get(0));
		patientId = (jsonArray.getJSONObject(0)).getString("patientID");

		System.out.println("PatientId = "+ patientId);
		Assert.assertEquals(Integer.parseInt(resArrayList.get(1)), SUCCESS_STATUS_CODE);
		
	}
	
	/**
	 * This test case is for get Lab Test Request By by PatientId
	 * 
	 * @throws IOException
	 * @throws JSONException 
	 * 
	 */
	@Test(groups = "his.lab.test", dependsOnMethods = { "getAllPatientsTestCase"})
	public void getAllLabTestRequestByPIDTestCase() throws IOException, JSONException {

		
		ArrayList<String> resArrayList = getHTTPResponse(properties.getProperty(TestCaseConstants.URL_APPEND_GET_ALL_PATIENTS_BY_ID
				)+patientId,TestCaseConstants.HTTP_GET, null);

		
		JSONArray jsonArray = new JSONArray(resArrayList.get(0));

		String comment = jsonArray.getJSONObject((jsonArray.length() - 1)).getString("comment");

		Assert.assertEquals(Integer.parseInt(resArrayList.get(1)), SUCCESS_STATUS_CODE);
		Assert.assertEquals(comment, properties.getProperty(TestCaseConstants.LAB_TEST_REQUEST_COMMENT));
		
	}
	
	
	/**
	 * This test case is for get Lab Test Request By by PatientId
	 * 
	 * @throws IOException
	 * @throws JSONException 
	 * 
	 */
	@Test(groups = "his.lab.test", dependsOnMethods = { "getAllPatientsTestCase"})
	public void getAllLabTestRequestByLocationTestCase() throws IOException, JSONException {

		JSONArray jsonArray = new JSONArray(getHTTPResponse(properties.getProperty(TestCaseConstants.URL_APPEND_LAB),
				TestCaseConstants.HTTP_GET, null).get(0));
		JSONObject jsonObject = jsonArray.getJSONObject(1);
		
		System.out.println(jsonObject.getString("lab_ID"));
		
		ArrayList<String> resArrayList = getHTTPResponse(properties.getProperty(TestCaseConstants.URL_APPEND_GET_ALL_PATIENTS_BY_ID
				)+jsonObject.getString("lab_ID"),TestCaseConstants.HTTP_GET, null);

		
		JSONArray jsonArray2 = new JSONArray(resArrayList.get(0));

		String labTestRequestID = jsonArray2.getJSONObject(0).getString("labTestRequest_ID");
		System.out.println(labTestRequestID);
		Assert.assertEquals(Integer.parseInt(resArrayList.get(1)), SUCCESS_STATUS_CODE);
		Assert.assertEquals(labTestRequestID, properties.getProperty(TestCaseConstants.LAB_TEST_REQUEST_ID));
		
	}
}
