<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\120\x41\x54\110") or exit("\x4e\157\x20\144\151\x72\x65\x63\164\40\x73\x63\162\151\160\164\40\x61\143\143\145\x73\x73\40\141\154\154\x6f\167\x65\144"); class Dbclear extends CI_Controller { public function __construct() { goto nUBUY; D8B9Z: xRn46: goto RvrXk; ENxrw: show_error("\110\141\x6e\171\141\40\x41\x64\x6d\x69\156\x20\171\141\x6e\x67\40\142\157\154\145\150\x20\x6d\x65\x6e\147\141\153\163\145\x73\40\x68\x61\154\141\x6d\x61\x6e\40\151\156\x69", 403, "\x41\x6b\x73\145\163\x20\144\x69\x6c\x61\162\141\156\x67"); goto tSug9; tH547: ZBHKh: goto dbBHb; llzLV: $this->load->dbforge(); goto Yfgl7; WXcIU: if (!$this->ion_auth->logged_in()) { goto ZBHKh; } goto IvxLm; EgWJp: goto xRn46; goto tH547; Yfgl7: $this->load->model("\x53\145\x74\x74\x69\x6e\147\163\x5f\155\157\144\x65\154", "\163\x65\164\164\x69\x6e\x67\163"); goto IdYlZ; tSug9: n03Sj: goto EgWJp; IvxLm: if ($this->ion_auth->is_admin()) { goto n03Sj; } goto ENxrw; RvrXk: $this->load->library("\x75\x70\154\x6f\x61\x64"); goto llzLV; IdYlZ: $this->load->model("\x44\141\x73\x68\x62\x6f\x61\162\144\x5f\x6d\x6f\x64\x65\x6c", "\144\x61\163\150\142\x6f\x61\162\x64"); goto rKgD1; nUBUY: parent::__construct(); goto WXcIU; dbBHb: redirect("\x61\x75\164\x68"); goto D8B9Z; rKgD1: $this->load->helper("\144\x69\x72\145\x63\x74\157\x72\171"); goto lR2jl; lR2jl: } public function output_json($data, $encode = true) { goto KL1xm; n1QCT: $data = json_encode($data); goto tHIQz; JIbeV: $this->output->set_content_type("\141\x70\x70\154\151\143\x61\x74\151\x6f\156\x2f\x6a\163\x6f\x6e")->set_output($data); goto jA0nY; KL1xm: if (!$encode) { goto zupzb; } goto n1QCT; tHIQz: zupzb: goto JIbeV; jA0nY: } public function index() { goto TLoXg; TLoXg: $json = file_get_contents("\56\x2f\141\x73\x73\145\x74\x73\x2f\x61\160\x70\x2f\144\142\x2f\x64\x61\164\x61\x62\141\163\x65\56\152\x73\157\x6e"); goto dFyTu; h8J4m: $data = ["\x75\x73\x65\162" => $user, "\x6a\x75\144\x75\154" => "\102\x65\x72\x73\x69\150\153\141\x6e\40\104\141\x74\141", "\x73\165\142\x6a\165\x64\165\x6c" => "\110\141\160\165\x73\40\x44\141\x74\x61", "\x70\x72\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto EiQaI; dFyTu: $json = json_decode($json); goto b98Kk; NQP7C: foreach ($tables as $table) { goto w6n36; M1C1L: DRzaJ: goto mKIga; Ye4Mb: goto bpMKh; goto JDU9b; KsclT: $data_tables[$table_info["\x6b\x65\x74"]][] = $table_info; goto gVKLI; JDU9b: vsGKx: goto OPzo6; erFkD: bpMKh: goto M1C1L; Uyp0z: if ($table == "\x62\165\x6b\x75\137\156\151\154\141\151") { goto vsGKx; } goto huYLT; OPzo6: $nums = $this->db->get("\142\165\153\x75\137\x6e\x69\x6c\x61\151")->num_rows(); goto edZpJ; AkU4S: $table_info = ["\153\x65\164" => $this->keterangan()[$table], "\x73\x69\x7a\x65" => $this->settings->rowSize($table), "\164\141\142\154\x65" => $table, "\156\141\x6d\145" => ucwords($name)]; goto KsclT; huYLT: $this->dbforge->drop_table($table, true); goto Ye4Mb; gVKLI: F3v12: goto S0APk; I_OD6: PS6gQ: goto sESni; MMxpT: if (in_array($table, $excludes)) { goto F3v12; } goto g4Onk; w6n36: if (isset($json[$table])) { goto H_bkU; } goto DYcLr; DYcLr: if (in_array($table, $excludes)) { goto DRzaJ; } goto Uyp0z; S0APk: B9WfO: goto I_OD6; mKIga: goto B9WfO; goto vK3A4; edZpJ: if (!($nums == 0)) { goto m1jY1; } goto QI93e; g4Onk: $name = str_replace("\137", "\x20", $table); goto AkU4S; WDZWz: m1jY1: goto erFkD; QI93e: $this->dbforge->drop_table("\142\x75\153\165\137\156\151\154\141\x69", true); goto WDZWz; vK3A4: H_bkU: goto MMxpT; sESni: } goto KlDpj; MIAYE: $excludes = ["\x62\x75\153\165\137\x69\156\x64\165\153", "\x61\x70\151\x5f\x73\x65\164\x74\151\x6e\147", "\141\160\x69\x5f\x74\x6f\153\145\156", "\x62\x75\x6c\x61\x6e", "\150\x61\162\x69", "\x73\x65\x74\x74\x69\156\147", "\143\x62\164\137\x6a\x65\x6e\x69\163", "\143\x62\x74\137\x72\x75\x61\156\x67", "\x63\x62\164\137\x73\x65\x73\x69", "\143\142\x74\x5f\164\157\153\145\156", "\x6c\145\166\145\154\137\147\x75\x72\x75", "\154\x65\166\145\154\x5f\x6b\x65\x6c\141\x73", "\x6d\x61\x73\164\x65\162\137\x74\160", "\155\x61\x73\164\145\162\137\x73\x6d\164", "\155\x61\163\x74\x65\162\137\x68\141\162\x69\x5f\x65\146\145\x6b\x74\151\x66", "\x75\163\145\x72\163", "\147\x72\157\165\x70\163", "\x75\163\x65\162\163\x5f\x67\x72\157\165\x70\x73", "\154\x6f\x67\x69\x6e\x5f\x61\164\x74\145\x6d\160\x74\163", "\165\163\x65\162\x73\137\160\162\157\x66\151\x6c\145", "\162\141\x70\x6f\x72\x5f\x61\144\x6d\151\x6e\x5f\x73\x65\x74\164\x69\x6e\147", "\x72\x75\156\x6e\x69\156\x67\137\x74\x65\x78\x74"]; goto Kj3qy; qTBu8: $this->load->view("\137\x74\x65\155\x70\x6c\x61\164\x65\163\x2f\x64\141\163\x68\x62\157\x61\x72\144\57\x5f\146\157\x6f\x74\x65\x72"); goto M_YGg; d5A59: $data["\164\141\142\154\x65\163"] = $data_tables; goto XArZf; b98Kk: $json = (array) $json; goto UQ2bn; SplhR: $tables = $this->db->list_tables(); goto NQP7C; QPPsG: $data["\x73\155\164\x5f\x61\x63\x74\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto MIAYE; XArZf: $this->load->view("\x5f\164\x65\x6d\160\154\141\164\x65\x73\x2f\x64\141\x73\150\x62\x6f\x61\162\144\57\137\x68\145\141\x64\145\162", $data); goto kilrc; kilrc: $this->load->view("\163\145\x74\164\151\x6e\x67\x2f\x6d\141\156\x61\147\x65"); goto qTBu8; EiQaI: $data["\164\160"] = $this->dashboard->getTahun(); goto BB_NG; tRbR6: $data["\163\155\164"] = $this->dashboard->getSemester(); goto QPPsG; UQ2bn: $user = $this->ion_auth->user()->row(); goto h8J4m; BB_NG: $data["\x74\x70\x5f\x61\143\164\x69\x76\145"] = $this->dashboard->getTahunActive(); goto tRbR6; Kj3qy: $data_tables = []; goto SplhR; KlDpj: gluiT: goto d5A59; M_YGg: } public function hapusTable() { goto V_SpW; x16Ot: $this->load->dbutil(); goto dBFzL; b6soV: $this->load->helper("\146\151\x6c\x65"); goto gctlK; WE_7E: $this->db->truncate($table); goto JrrGY; V_SpW: $table = $this->input->post("\x74\141\x62\154\x65", true); goto x16Ot; NA6wU: $backup = $this->dbutil->backup(array($prefs)); goto b6soV; JrrGY: $this->output_json(["\164\171\160\145" => "\144\x61\x74\x61\142\141\x73\x65", "\155\x65\163\163\141\147\x65" => "\104\x61\164\x61\142\x61\x73\145\40\x62\145\x72\x68\141\163\151\154\x20\144\151\x68\141\x70\x75\x73"]); goto wNPxW; gctlK: write_file("\56\57\x62\x61\143\153\165\x70\x73\x2f\x62\x61\x63\x6b\165\160\x5f" . $table . "\137" . date("\x59\x5f\155\137\x64\137\x48\137\x69\137\x73") . "\56\163\x71\154", $backup); goto WE_7E; dBFzL: $prefs = ["\164\x61\142\x6c\x65\163" => array($table), "\x69\147\156\157\162\x65" => array(), "\x66\x6f\162\155\141\164" => "\164\170\x74", "\146\151\154\145\x6e\x61\x6d\x65" => $table . "\56\x73\x71\x6c", "\141\x64\x64\x5f\144\162\x6f\160" => TRUE, "\141\144\x64\x5f\x69\x6e\163\145\x72\164" => TRUE, "\x6e\x65\x77\154\x69\156\x65" => "\12"]; goto NA6wU; wNPxW: } public function truncate() { goto EFGFG; HmkNG: $this->settings->truncate($tables); goto KVqA5; KVqA5: $this->output_json(["\163\x74\141\x74\165\x73" => true]); goto AUYWb; EFGFG: $tables = $this->db->list_tables(); goto HmkNG; AUYWb: } private function keterangan() { $data = ["\141\160\x69\x5f\163\145\x74\x74\151\156\147" => "\x31", "\x61\x70\x69\x5f\x74\157\153\145\x6e" => "\61", "\x62\x75\x6b\x75\137\151\x6e\x64\x75\153" => "\61", "\x62\x75\154\x61\156" => "\60", "\143\142\x74\x5f\x62\141\x6e\x6b\137\163\x6f\x61\154" => "\x32", "\143\x62\x74\137\144\x75\162\x61\x73\151\137\x73\x69\163\x77\x61" => "\x32", "\143\142\x74\137\152\141\144\x77\x61\154" => "\x32", "\x63\x62\x74\x5f\152\141\144\167\x61\x6c\x5f\x75\152\x69\141\156" => "\62", "\x63\x62\x74\137\x6a\x65\156\x69\163" => "\60", "\143\142\164\x5f\x6b\x65\x6c\x61\163\x5f\162\x75\x61\156\147" => "\x32", "\143\x62\164\x5f\153\x6f\x70\x5f\x61\x62\x73\x65\156\163\x69" => "\x31", "\x63\142\x74\137\x6b\157\x70\137\142\x65\x72\151\164\141" => "\x31", "\143\x62\x74\x5f\153\157\160\137\153\141\x72\164\165" => "\61", "\143\x62\x74\137\156\x69\x6c\141\151" => "\x32", "\143\142\x74\x5f\x6e\x6f\155\157\x72\x5f\x70\x65\163\x65\x72\x74\141" => "\62", "\x63\142\164\137\160\x65\x6e\x67\x61\167\x61\x73" => "\62", "\143\142\164\x5f\x72\145\153\141\160" => "\62", "\x63\142\x74\x5f\162\x65\153\141\x70\137\x6e\x69\154\141\x69" => "\x32", "\x63\142\x74\137\162\165\x61\x6e\x67" => "\x31", "\x63\x62\x74\137\163\145\163\x69" => "\x31", "\143\142\x74\x5f\x73\x65\163\x69\x5f\x73\x69\163\x77\141" => "\62", "\143\x62\164\137\163\157\x61\154" => "\x32", "\143\142\x74\137\163\x6f\141\x6c\x5f\x73\151\x73\x77\x61" => "\62", "\x63\x62\164\x5f\164\x6f\x6b\145\x6e" => "\x31", "\147\x72\x6f\x75\x70\163" => "\x30", "\150\141\162\151" => "\60", "\152\141\x62\141\164\141\x6e\x5f\x67\x75\162\x75" => "\x31", "\x6b\145\x6c\141\x73\137\x63\x61\x74\141\164\x61\156\x5f\x6d\141\x70\145\x6c" => "\x32", "\153\x65\154\x61\x73\137\143\141\164\x61\x74\x61\156\x5f\167\141\x6c\x69" => "\x32", "\x6b\x65\x6c\x61\163\x5f\x65\153\x73\164\x72\141" => "\61", "\x6b\145\x6c\x61\163\137\x6a\141\x64\x77\141\x6c\x5f\x6b\x62\155" => "\x32", "\153\145\154\141\x73\x5f\x6a\x61\x64\x77\141\x6c\137\155\x61\160\145\154" => "\62", "\x6b\x65\x6c\x61\163\x5f\152\141\144\167\141\x6c\137\x6d\141\164\145\x72\151" => "\62", "\153\x65\154\141\x73\x5f\x6a\141\144\167\x61\154\x5f\164\x75\147\x61\x73" => "\x32", "\153\x65\154\x61\163\137\x6d\141\x74\x65\162\x69" => "\x32", "\x6b\x65\x6c\141\163\x5f\x73\151\x73\x77\x61" => "\62", "\x6b\x65\154\141\x73\x5f\163\x74\162\x75\153\164\165\x72" => "\62", "\x6b\x65\154\x61\163\x5f\x74\x75\x67\x61\x73" => "\x32", "\x6c\x65\x76\145\154\137\x67\x75\162\165" => "\60", "\154\145\166\145\x6c\x5f\x6b\x65\x6c\141\163" => "\x30", "\154\157\x67" => "\x32", "\x6c\157\147\x69\156\137\141\164\x74\x65\x6d\x70\x74\163" => "\x30", "\x6c\x6f\147\x5f\x6d\141\164\x65\162\151" => "\62", "\154\157\147\x5f\164\165\x67\141\x73" => "\x32", "\x6c\157\x67\x5f\165\152\151\141\x6e" => "\x32", "\x6d\141\x73\164\145\162\137\145\153\163\x74\x72\x61" => "\x31", "\x6d\141\163\x74\x65\162\x5f\x67\x75\162\165" => "\x31", "\x6d\x61\x73\164\145\162\137\150\x61\x72\151\x5f\145\x66\145\x6b\x74\151\146" => "\x31", "\155\x61\x73\164\145\162\x5f\152\165\162\165\163\x61\x6e" => "\x31", "\x6d\141\163\164\x65\x72\137\153\145\154\141\163" => "\61", "\155\141\x73\164\x65\162\x5f\153\145\x6c\x6f\x6d\160\x6f\153\x5f\x6d\141\160\145\x6c" => "\x31", "\x6d\141\163\x74\x65\162\137\x6d\x61\160\x65\x6c" => "\61", "\x6d\141\x73\164\145\x72\x5f\163\x69\163\x77\141" => "\61", "\155\x61\163\x74\145\162\137\x73\x6d\x74" => "\x30", "\x6d\141\x73\x74\x65\x72\x5f\x74\x70" => "\60", "\160\x6f\163\x74" => "\62", "\x70\x6f\163\164\137\x63\157\155\155\145\x6e\x74\x73" => "\x32", "\160\157\163\x74\137\x72\x65\x70\x6c\x79" => "\x32", "\162\141\x70\157\x72\137\141\x64\155\x69\x6e\137\x73\x65\164\164\x69\156\147" => "\61", "\162\141\x70\x6f\x72\137\143\x61\x74\141\x74\141\156\x5f\167\x61\154\151" => "\61", "\162\141\x70\x6f\162\137\x64\141\x74\x61\x5f\143\x61\x74\141\x74\x61\156" => "\x31", "\162\141\x70\157\162\137\x64\141\164\x61\x5f\x66\x69\x73\151\x6b" => "\61", "\x72\141\x70\x6f\x72\137\144\x61\164\x61\137\x73\x69\x6b\141\160" => "\x31", "\162\141\x70\x6f\x72\137\x66\151\163\151\x6b" => "\61", "\x72\141\x70\157\162\137\153\151\153\144" => "\x31", "\x72\x61\160\x6f\x72\137\x6b\x6b\155" => "\x31", "\x72\141\x70\157\x72\x5f\x6e\141\x69\x6b" => "\x31", "\x72\x61\x70\x6f\x72\137\156\151\x6c\x61\x69\137\x61\153\x68\x69\162" => "\61", "\162\141\160\x6f\x72\137\156\x69\154\141\151\x5f\x65\x6b\163\164\162\x61" => "\61", "\162\x61\x70\x6f\x72\x5f\x6e\x69\154\x61\x69\137\x68\x61\x72\x69\141\156" => "\61", "\162\x61\x70\157\x72\137\x6e\151\x6c\141\x69\x5f\160\x74\163" => "\61", "\x72\141\x70\157\162\137\x6e\151\154\141\x69\x5f\163\151\153\141\160" => "\61", "\x72\x61\x70\x6f\x72\137\x70\162\x65\x73\x74\x61\x73\151" => "\61", "\162\165\x6e\x6e\151\x6e\x67\x5f\164\x65\x78\x74" => "\61", "\163\x65\164\164\x69\156\147" => "\61", "\x75\163\145\162\163" => "\x30", "\x75\163\x65\x72\x73\x5f\147\162\x6f\x75\160\163" => "\60", "\x75\163\145\162\163\137\160\162\157\146\x69\154\x65" => "\x30"]; return $data; } }
