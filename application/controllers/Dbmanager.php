<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\120\x41\x54\110") or exit("\116\157\x20\144\x69\x72\145\x63\x74\x20\163\143\x72\151\160\x74\40\141\x63\143\x65\x73\163\40\141\154\x6c\x6f\x77\x65\x64"); class Dbmanager extends CI_Controller { public function __construct() { goto V_gx1; fKtYq: if (!$this->ion_auth->logged_in()) { goto YRo7A; } goto thED4; EY4xF: $this->load->library("\165\x70\154\157\x61\144"); goto H647j; H647j: $this->load->model("\123\145\164\164\151\156\147\163\x5f\155\x6f\x64\x65\154", "\x73\145\164\x74\x69\156\147\163"); goto ldUu_; c21uA: $this->load->helper("\144\x69\x72\x65\143\x74\x6f\x72\171"); goto DswLn; PY6l7: show_error("\110\141\x6e\x79\x61\40\x41\x64\155\x69\x6e\40\171\141\x6e\x67\x20\142\x6f\x6c\145\150\x20\155\x65\x6e\147\141\153\x73\145\x73\x20\x68\141\154\x61\x6d\141\156\x20\x69\156\151", 403, "\x41\x6b\163\x65\x73\40\x64\x69\154\x61\x72\141\156\x67"); goto LgjfR; thED4: if ($this->ion_auth->is_admin()) { goto jy9aw; } goto PY6l7; WGpgg: oePi1: goto EY4xF; LgjfR: jy9aw: goto OT36k; ptAXH: redirect("\x61\x75\x74\150"); goto WGpgg; OT36k: goto oePi1; goto al0Lf; V_gx1: parent::__construct(); goto fKtYq; ldUu_: $this->load->model("\104\x61\163\x68\x62\x6f\141\162\x64\137\x6d\157\x64\x65\x6c", "\144\x61\x73\x68\x62\157\x61\x72\x64"); goto c21uA; al0Lf: YRo7A: goto ptAXH; DswLn: } public function output_json($data, $encode = true) { goto PoPuv; PoPuv: if (!$encode) { goto DTiV6; } goto MwPQW; XqQcv: DTiV6: goto TdY5q; MwPQW: $data = json_encode($data); goto XqQcv; TdY5q: $this->output->set_content_type("\141\x70\160\x6c\151\143\141\164\151\157\156\57\x6a\163\157\156")->set_output($data); goto hI3n_; hI3n_: } public function index() { goto FBgTz; hEANQ: $data["\164\141\142\154\x65\x73"] = $this->db->list_tables(); goto pFoMc; FBgTz: $user = $this->ion_auth->user()->row(); goto lHxe_; KTM12: $this->load->view("\137\x74\x65\x6d\x70\x6c\141\x74\145\x73\57\x64\x61\163\150\x62\x6f\x61\x72\x64\x2f\x5f\146\157\157\164\145\x72"); goto ggso9; TYrsj: Tl_KN: goto Eas3N; hgr9z: $data["\164\x70\137\141\x63\x74\x69\166\x65"] = $this->dashboard->getTahunActive(); goto jyyIO; xJqS7: foreach ($list as $key => $value) { goto PJbuX; PJbuX: $nfile = explode("\56", $value); goto M2GBG; JsGQm: $tgl = filemtime("\x2e\57\x62\141\x63\x6b\165\160\163\x2f" . $value); goto KOHqW; M2GBG: $nama = $nfile[0]; goto y8rKJ; KOHqW: $size = $this->formatSizeUnits(filesize("\x2e\57\x62\141\x63\153\x75\160\163\x2f" . $value)); goto EMfAM; y8rKJ: $type = $nfile[1]; goto JsGQm; I9t5z: MOKOn: goto nbSrq; EMfAM: $arrFile[$key] = ["\164\x79\x70\145" => $type, "\x6e\141\x6d\141" => $nama, "\164\x67\x6c" => $tgl, "\x73\151\x7a\145" => $size, "\x73\162\143" => $value]; goto I9t5z; nbSrq: } goto TYrsj; S2ex4: $arrFile = []; goto xJqS7; lHxe_: $data = ["\x75\163\145\x72" => $user, "\152\165\144\x75\x6c" => "\x42\x61\143\153\x75\x70\40\x64\141\156\x20\x52\x65\163\x74\x6f\x72\145", "\x73\165\142\x6a\x75\144\x75\154" => "\x42\141\143\x6b\165\160\40\x53\145\155\165\x61\40\104\141\x74\x61\x62\x61\163\x65\x20\x64\141\x6e\40\106\151\154\x65", "\x70\x72\157\146\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\164\x69\156\x67" => $this->dashboard->getSetting()]; goto e8ZLM; cpPJ3: $data["\163\155\164\x5f\141\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto DZfsm; jyyIO: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto cpPJ3; pFoMc: $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\145\163\x2f\144\x61\x73\x68\142\157\x61\162\144\57\x5f\x68\x65\141\x64\x65\x72", $data); goto MDfZF; DZfsm: $list = directory_map("\x2e\57\x62\141\x63\x6b\165\160\x73\x2f"); goto S2ex4; e8ZLM: $data["\x74\x70"] = $this->dashboard->getTahun(); goto hgr9z; MDfZF: $this->load->view("\x73\145\x74\x74\x69\156\147\x2f\144\142"); goto KTM12; Eas3N: $data["\x6c\151\x73\x74"] = $arrFile; goto hEANQ; ggso9: } public function manage() { goto ZOCuy; u8H_I: $data["\x74\x70\x5f\x61\143\164\151\x76\145"] = $this->dashboard->getTahunActive(); goto dTu80; Gyl68: $data["\164\x61\x62\x6c\x65\163"] = $data_tables; goto uB1sm; hJp3D: $data = ["\165\163\x65\162" => $user, "\x6a\165\x64\165\154" => "\102\x65\162\163\x69\150\153\x61\x6e\x20\x44\141\164\x61", "\x73\165\142\152\x75\x64\x75\154" => "\110\x61\x70\x75\x73\40\104\141\x74\141", "\160\x72\157\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\151\156\147" => $this->dashboard->getSetting()]; goto i24FN; uB1sm: $this->load->view("\137\164\145\155\160\154\x61\x74\145\163\57\144\141\x73\x68\x62\157\x61\162\x64\57\x5f\x68\145\141\144\145\162", $data); goto aerIU; i24FN: $data["\164\160"] = $this->dashboard->getTahun(); goto u8H_I; dTu80: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto u6pp_; gSxtR: $data_tables = []; goto JUaNM; u6pp_: $data["\x73\x6d\x74\x5f\141\x63\x74\151\166\x65"] = $this->dashboard->getSemesterActive(); goto gSxtR; Xbosm: $this->load->view("\137\164\x65\x6d\160\x6c\x61\x74\x65\163\57\144\141\163\150\x62\x6f\x61\x72\x64\x2f\137\x66\x6f\x6f\x74\145\162"); goto H0Mwo; v2Dd7: apZAP: goto Gyl68; aerIU: $this->load->view("\x73\145\164\164\151\x6e\x67\57\155\x61\156\141\147\x65"); goto Xbosm; ZOCuy: $user = $this->ion_auth->user()->row(); goto hJp3D; pcRTS: foreach ($tables as $table) { $data_tables[$table] = $this->settings->toJSON($table); kfXir: } goto v2Dd7; JUaNM: $tables = $this->db->list_tables(); goto pcRTS; H0Mwo: } public function truncate() { goto tPIWk; tPIWk: $tables = $this->db->list_tables(); goto RYGxz; RYGxz: $this->settings->truncate($tables); goto rvT_r; rvT_r: $this->output_json(["\163\x74\141\x74\x75\163" => true]); goto eiuK4; eiuK4: } public function backupDb() { goto SwjGX; hSjP1: $this->dbutil->optimize_database(); goto lT012; lT012: $prefs = ["\164\141\142\154\x65\163" => $this->db->list_tables(), "\x69\x67\x6e\157\x72\x65" => array(), "\x66\157\x72\x6d\x61\164" => "\172\151\x70", "\146\151\x6c\x65\156\x61\x6d\145" => "\142\x61\x63\153\165\160\56\x73\x71\x6c", "\x61\x64\144\137\144\162\157\160" => TRUE, "\x61\144\x64\x5f\151\x6e\x73\x65\162\164" => TRUE, "\156\x65\x77\x6c\151\156\145" => "\12"]; goto nKXD6; ip2w1: write_file("\56\57\142\x61\143\x6b\165\x70\x73\x2f\x62\x61\143\x6b\x75\160\x2d\x64\142\55" . date("\131\x2d\155\x2d\144\55\110\x2d\x69\x2d\x73") . "\56\x73\161\x6c\x2e\x7a\x69\160", $backup); goto L94jE; nKXD6: $backup = $this->dbutil->backup($prefs); goto y2r0K; L94jE: $this->output_json(["\x74\171\x70\145" => "\144\141\164\141\142\x61\163\145", "\x6d\x65\x73\163\141\147\145" => "\x44\141\x74\x61\142\141\x73\x65\40\142\x65\x72\x68\141\x73\151\x6c\40\144\x69\142\141\143\153\165\160"]); goto yb3SB; SwjGX: $this->load->dbutil(); goto hSjP1; y2r0K: $this->load->helper("\x66\x69\154\x65"); goto ip2w1; yb3SB: } public function backupData() { goto akDuX; akDuX: $this->load->library("\172\x69\x70"); goto rVQsH; gLZwu: $this->output_json(["\x74\171\160\145" => "\146\x69\154\145", "\x6d\145\x73\x73\x61\147\x65" => "\x46\x69\x6c\x65\x20\144\141\164\x61\40\142\x65\162\150\141\163\151\x6c\40\x64\x69\142\141\x63\x6b\165\x70"]); goto b2xhx; Z0nIh: $this->zip->archive("\56\57\x62\x61\x63\153\x75\x70\163\57\x62\x61\143\153\x75\x70\x2d\146\x69\x6c\145\x2d" . date("\131\55\155\55\144\55\110\x2d\x69\55\x73") . "\56\x7a\151\x70"); goto gLZwu; rVQsH: $this->zip->read_dir("\x75\160\154\x6f\x61\144\163"); goto Z0nIh; b2xhx: } public function hapusBackup($src) { goto rO_E_; rO_E_: if (unlink("\56\57\142\141\x63\153\x75\160\163\57" . $src)) { goto pYgoL; } goto Kmg1F; JOqMo: goto qFtCl; goto SwH4G; Kmg1F: $this->output_json(["\163\164\x61\164\165\x73" => false, "\155\x65\163\163\x61\147\145" => "\x47\141\147\x61\x6c\x20\155\145\156\147\150\141\160\x75\x73\40\142\x61\x63\153\165\x70"]); goto JOqMo; tAJg5: $this->output_json(["\x73\x74\x61\x74\x75\x73" => true, "\x6d\145\163\x73\141\147\145" => "\x42\x61\143\x6b\165\160\40\142\x65\x72\150\141\x73\151\x6c\40\x64\x69\150\x61\160\x75\x73"]); goto bdLT0; bdLT0: qFtCl: goto C1d0P; SwH4G: pYgoL: goto tAJg5; C1d0P: } function formatSizeUnits($bytes) { goto e7nkK; Jww7_: JSE1k: goto W1_WK; CIDhP: $bytes = number_format($bytes / 1073741824, 2) . "\40\107\x42"; goto FaAgL; xuzEq: goto tC5aK; goto Jww7_; t0pIV: Lcfjc: goto CIDhP; D6Jaa: $bytes = "\60\40\x62\171\x74\145\163"; goto Bu3IJ; Qm6GO: $bytes = number_format($bytes / 1024, 2) . "\x20\x4b\102"; goto bt6qV; sD21O: if ($bytes >= 1024) { goto FbFnn; } goto Czbeo; Bu3IJ: goto tC5aK; goto t0pIV; COp1F: if ($bytes == 1) { goto JSE1k; } goto D6Jaa; PMWw4: focIa: goto T8a8r; xgD2m: tC5aK: goto HMvuk; bt6qV: goto tC5aK; goto PMWw4; e7nkK: if ($bytes >= 1073741824) { goto Lcfjc; } goto UmByC; T8a8r: $bytes = $bytes . "\40\142\171\x74\145\x73"; goto xuzEq; UmByC: if ($bytes >= 1048576) { goto taty0; } goto sD21O; w2_tB: $bytes = number_format($bytes / 1048576, 2) . "\x20\115\x42"; goto pnEZd; sG3F0: FbFnn: goto Qm6GO; Czbeo: if ($bytes > 1) { goto focIa; } goto COp1F; W1_WK: $bytes = $bytes . "\x20\142\x79\x74\x65"; goto xgD2m; FaAgL: goto tC5aK; goto Y1RA3; HMvuk: return $bytes; goto X1ran; pnEZd: goto tC5aK; goto sG3F0; Y1RA3: taty0: goto w2_tB; X1ran: } }
