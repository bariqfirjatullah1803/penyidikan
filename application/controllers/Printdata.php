<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Printdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url', 'date', 'global'));
	}

	public function index()
	{
		$data['list'] = [
			[
				'label' => 'General',
				'file' => '',
				'view' => 'general'
			],
			[
				'label' => 'Laporan Kejadian',
				'file' => 'laporan-kejadian',
				'view' => 'laporan-kejadian'
			],
			[
				'label' => 'Surat pemberitahuan dimulainya penyidikkan',
				'file' => 'spdp',
				'view' => 'surat-pemberitahuan-dimulainya-penyidikan'
			],
			[
				'label' => 'Surat perintah penyidikan',
				'file' => 'surat-perintah-penyidikan',
				'view' => 'surat-perintah-penyidikan'
			],
			[
				'label' => 'Berita acara penggeledahan',
				'file' => 'berita-acara-penggeledahan',
				'view' => 'berita-acara-penggeledahan'
			],
			[
				'label' => 'Surat perintah penggeledahan',
				'file' => 'surat-penggeledahan',
				'view' => 'surat-perintah-penggeledahan'
			],
			[
				'label' => 'Berita acara penyitaan',
				'file' => 'ba-penyitaan',
				'view' => 'berita-acara-penyitaan'
			],
			[
				'label' => 'Berita acara penangkapan',
				'file' => 'ba-penangkapan',
				'view' => 'berita-acara-penangkapan'
			],
			[
				'label' => 'Surat perintah penangkapan',
				'file' => 'sprint-penangkapan',
				'view' => 'surat-perintah-penangkapan'
			],
			// [
			// 	'label' => 'Berita acara pemeriksaan saksi',
			// 	'file' => 'nodin-saksi-ahli',
			// 	'view' => 'berita-acara-pemeriksaan-saksi'
			// ],
			[
				'label' => 'Surat pemanggilan saksi',
				'file' => 'surat-panggilan-saksi',
				'view' => 'surat-pemanggilan-saksi'
			]
			// 'Berita acara pengambilan sumpah saksi' => [
			// 	'view' => 'berita-acara-pengambilan-sumpah-saksi'
			// ],
			// 'Berita acara pemeriksaan ahli' => [
			// 	'view' => 'berita-acara-pemeriksaan-ahli'
			// ],
			// 'Nota dinas penunjukan saksi ahli' => [
			// 	'view' => 'nota-dinas-penunjukan-saksi-ahli'
			// ],
			// 'Surat perintah tugas' => [
			// 	'view' => 'surat-perintah-tugas'
			// ],
			// 'Surat perintah penyitaan' => [
			// 	'view' => 'surat-perintah-penyitaan'
			// ],
			// 'Daftar saksi' => [
			// 	'view' => 'daftar-saksi'
			// ],
			// 'Daftar tersangka' => [
			// 	'view' => 'daftar-tersangka'
			// ],
			// 'Daftar barang bukti' => [
			// 	'view' => 'daftar-barang-bukti'
			// ]
		];
		$this->load->view('form/list', $data);
	}

	public function cetak()
	{


		// $pdf = [
		// 	'1. LK P21',
		// 	'2. Surat Perintah Penyidikan',
		// 	'3.SURAT PEMBERITAHUAN DIMULAINYA PENYIDIKAN',
		// 	'4. SURAT PEMANGGILAN SAKSI',
		// 	'5. BAP SAKSI',
		// 	'6. Berita Acara Pengambilan Sumpah Saksi',
		// 	'7. BAP saksi ahli',
		// 	'7. nota dinas penunjukan saksi ahli',
		// 	'8. BAP tersangka',
		// 	'9. SURAT PERINTAH TUGAS',
		// 	'10. BERITA ACARA PENANGKAPAN 1.2',
		// 	'10. SURAT PERINTAH PENANGKAPAN 1.1',
		// 	'11.BAP Penggeledahan 1.1',
		// 	'11.Berita penggeledahan1.2',
		// 	'12.BAP Penyitaan 1.1',
		// 	'12.Berita Penyitaan 1.2',
		// 	'13. DAFTAR SAKSI',
		// 	'14. DAFTAR TERSANGKA',
		// 	'15. barang bukti'
		// ];

		date_default_timezone_set('Asia/Jakarta');
		$data['title'] = 'P 21';
		$data['data'] = $this->input->post();

		$this->load->library('upload');

		// Set the upload configuration
		$config['upload_path'] = './upload/ttd/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] = true;

		$this->upload->initialize($config);

		// Check if the "ttd" file input is set
		if (isset($_FILES['ttd']) && is_array($_FILES['ttd'])) {
			foreach ($_FILES['ttd']['name'] as $fileKey => $fileArray) {
				foreach ($fileArray as $index => $file) {
					$_FILES['userfile']['name'] = $_FILES['ttd']['name'][$fileKey][$index];
					$_FILES['userfile']['type'] = $_FILES['ttd']['type'][$fileKey][$index];
					$_FILES['userfile']['tmp_name'] = $_FILES['ttd']['tmp_name'][$fileKey][$index];
					$_FILES['userfile']['error'] = $_FILES['ttd']['error'][$fileKey][$index];
					$_FILES['userfile']['size'] = $_FILES['ttd']['size'][$fileKey][$index];

					if ($this->upload->do_upload('userfile')) {
						$resultImage = $this->upload->data();
						$data['data'][$fileKey]['image'][$index] = $resultImage['file_name'];
					} else {
						$data['data'][$fileKey]['image'][$index] = '';
						// $image_path = base_url('upload/ttd/' . $data['file_name']);

						// Display temporary preview of the uploaded image
						// echo '<img src="' . $image_path . '" alt="Tanda Tangan"><br>';
					}
				}
			}
		}
		// echo '<pre>';
		// var_dump($data);
		// die();

		// // echo json_encode($data);
		// // die;
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => ['210', '330']]);
		$mpdf->SetDefaultFont('Arial');

		// foreach ($this->input->post('list') as $key => $value) {
		// 	$pdfFile = 'upload/pdf/'.$pdf[$key].'.pdf';
		// 	$pageCount = $mpdf->SetSourceFile($pdfFile);
		// 	for ($i=1; $i <= $pageCount; $i++) { 
		// 		$templateId1 = $mpdf->ImportPage($i);
		// 		$mpdf->UseTemplate($templateId1);
		// 		// if($i < $pageCount){
		// 			$mpdf->AddPage();
		// 		// }
		// 	}
		// }
		foreach ($this->input->post('list') as $key => $value) {
			if (file_exists(APPPATH . 'views/pdf/' . $key . '.php')) {
				$html = $this->load->view('pdf/' . $key, $data, true);
				$mpdf->WriteHTML($html);

				$mpdf->AddPage();
			}
		}
		// die();


		// $html = $this->load->view('pdf/laporan-kejadian', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/surat-perintah-penyidikan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/spdp', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/surat-panggilan-saksi', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/bap-pengambilan-sumpah-saksi', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/nodin-saksi-ahli', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/bap-tersangka', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/sprint-penangkapan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/ba-penangkapan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/berita-acara-penggeledahan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/surat-penggeledahan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/ba-penyitaan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/surat-tanda-penerimaan', $data, true);
		// $mpdf->WriteHTML($html);

		// $mpdf->AddPage();
		// $html = $this->load->view('pdf/surat-daftar-saksi', $data, true);
		// $mpdf->WriteHTML($html);

		$mpdf->Output('P21.pdf', 'I');
	}
}

/* End of file PrintData.php */