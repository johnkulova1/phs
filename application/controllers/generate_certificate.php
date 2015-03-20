<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Generate_certificate extends CI_Controller{
	public function index(){
		$this->getcertdata();
	}
	public function getcertdata(){
		$app_no=$this->input->get("app_no");
		$this->load->model("phsmodel");
		$result=$this->phsmodel->getcertdata($app_no);
		$data=array("certdata"=>$result->result_array());
		$this->load->view('generate_certificate_view',$data);
	}
	public function update_application_status(){
		$user=$this->session->userdata('user');
		$this->input->post('app_no');
		if($user=="inspectingofficer"){
			$userid=21;
			$sts=$this->input->post('status');
			if($sts=="approve"){
				$nextstep="Application approved";
				$taskstatus="approved";
				$remarks=$this->input->post('remarks');
				$data=array(
					'user_id'=>$userid,
					'application_id'=>$this->input->post('app_no'),
					'status'=>"pending"
				);
				$this->load->model("phsmodel");
				$result=$this->phsmodel->update_status($data,$nextstep,$taskstatus,$remarks);
				if($result){
				//	redirect('dashboard', 'refresh');
				}
			}
			if($sts=="Pending"){}
			if($sts=="Rejected"){}
			if($sts=="Query"){}
		}
	}
	public function generate_cert_pdf(/*Enter the parameters for the cert pdf here*/){

			$this->load->library('tcpdf');
			// create new PDF document
			$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('');
			$pdf->SetTitle('');
			$pdf->SetSubject('');
			$pdf->SetKeywords('');

			// set default header data
			//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

			// set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

			// set some language-dependent strings (optional)
			if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			    require_once(dirname(__FILE__).'/lang/eng.php');
			    $pdf->setLanguageArray($l);
			}

			// ---------------------------------------------------------

			// set font
			$pdf->SetFont('dejavusans', '', 10);

			// add a page
			$pdf->AddPage();

			// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
			// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

			// create some HTML content
			$app_no=$this->input->post("app_no");
			$this->load->model("phsmodel");
			$result=$this->phsmodel->getcertdata($app_no);
			$assoc=$result->result_array();
			$this->update_application_status();
			foreach($assoc as $row){
				
			$html = '<table width="846">
					  <tr>
					    <td height="35"  style="padding-left:60px;" >REPUBLIC OF KENYA</td>
					  </tr>
					  <tr>
					    <td colspan="3">ORIGINAL</td>
					  </tr>
					  <tr>
					    <td height="37"  style="padding-left:60px;">MINISTRY OF HEALTH</td>
					  </tr>
					  <tr>
					    <td width="236">0028223</td>
					    <td width="93"><img src="http://localhost:8888/porthealth/assets/images/court_of_arms.jpeg" /></td>
					    <td width="227">Date: '.$row["date"].'</td>
					  </tr>
					  <tr>
					    <td height="55" colspan="3" align="center"><strong>EXPORT HEALTH CERTIFICATE</strong></td>
					  </tr>
					  <tr>
					    <td height="47">Serial Number</td>
					    <td colspan="2">'.$row["application_no"].'</td>
					  </tr>
					  <tr>
					    <td height="44">Consignee Name</td>
					    <td colspan="2">'.$row["consignee_name"].'</td>
					  </tr>
					  <tr>
					    <td height="44">Consignee Address</td>
					    <td colspan="2">'.$row["consignee_address"].'</td>
					  </tr>
					  <tr>
					    <td height="45">Vessel/Flight Number</td>
					    <td colspan="2">'.$row["vessel_no"].'</td>
					  </tr>
					  <tr>
					    <td height="40">Shipping Marks</td>
					    <td colspan="2">'.$row["shipping_marks"].'</td>
					  </tr>
					  <tr>
					    <td height="37">Invoice Number</td>
					    <td colspan="2">'.$row["invoice_no"].'</td>
					  </tr>
					  <tr>
					    <td height="39">C.D. 3 Number</td>
					    <td colspan="2">'.$row["cd3_no"].'</td>
					  </tr>
					  <tr>
					    <td height="40">Product Name</td>
					    <td colspan="2">'.$row["product_name"].'</td>
					  </tr>
					  <tr>
					    <td height="33">Quantity</td>
					    <td colspan="2">'.$row["quantity"].'</td>
					  </tr>
					  <tr>
					    <td height="40">Place of Destination</td>
					    <td colspan="2">'.$row["destination"].'</td>
					  </tr>
					  <tr>
					    <td height="41">Exporter Name</td>
					    <td colspan="2">'.$row["exporter_name"].'</td>
					  </tr>
					  <tr>
					    <td height="41">Exporter Address</td>
					    <td colspan="2">'.$row["exporter_address"].'</td>
					  </tr>
					  <tr>
					    <td colspan="3"><p>This is to certify that the above consignment was inspected on........... and found fit for human consumption.</p>
					    <p>The food product was manufactured and packed in premises licensed under the Food, Drugs and Chemical Substances (Food Hygiene) Regulations, 1978.</p></td>
					  </tr>
					  <tr>
					    <td height="35">Current Licence No.</td>
					    <td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
					    <td height="45">Issued by (Office)</td>
					    <td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
					    <td height="34">Expires on</td>
					    <td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
					    <td height="29" colspan="3">This certificate is only valid fot the above named article(s).</td>
					  </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
					    <td height="39" colspan="3" align="center">Health Authority</td>
					  </tr>
					  <tr>
					    <td height="31">Fee</td>
					    <td colspan="2">Ksh 1500</td>
					  </tr>
					  <tr>
					    <td>M.R. Number</td>
					    <td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
					  	<td></td>
					  </tr>
					</table>';
					// output the HTML content
					$pdf->writeHTML($html, true, false, true, false, '');
					$pdf->Output('example_006.pdf', 'I');
				}
			

	}
}