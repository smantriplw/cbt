<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\x45\120\x41\x54\x48") or exit("\116\x6f\40\144\x69\x72\x65\143\x74\40\x73\x63\162\151\160\x74\x20\x61\x63\143\x65\163\163\40\141\x6c\x6c\x6f\167\145\x64"); class Dbclear extends CI_Controller { public function __construct() { goto zzXyT; jks3P: $this->load->model("\x53\x65\x74\164\151\x6e\x67\x73\137\x6d\157\144\x65\x6c", "\x73\x65\x74\164\x69\x6e\x67\163"); goto Vh2jM; B4LX3: $this->load->dbforge(); goto jks3P; bZIfO: show_error("\x48\141\x6e\171\x61\40\x41\x64\155\151\x6e\40\171\141\156\x67\40\x62\157\154\145\x68\40\x6d\x65\156\147\141\x6b\x73\145\x73\x20\150\x61\154\x61\155\x61\x6e\40\151\156\x69", 403, "\101\153\x73\145\x73\x20\144\x69\154\141\x72\x61\x6e\147"); goto LdoHU; a4VwY: if ($this->ion_auth->is_admin()) { goto uPh2E; } goto bZIfO; ItkJu: if (!$this->ion_auth->logged_in()) { goto bv1WR; } goto a4VwY; KRwBj: redirect("\141\x75\164\150"); goto mwBqG; UOkBo: bv1WR: goto KRwBj; mwBqG: bAL_i: goto CryDp; ft5iB: $this->load->helper("\x64\x69\x72\145\143\x74\157\x72\171"); goto UccHJ; VtHzm: goto bAL_i; goto UOkBo; zzXyT: parent::__construct(); goto ItkJu; CryDp: $this->load->library("\165\x70\154\157\x61\144"); goto B4LX3; LdoHU: uPh2E: goto VtHzm; Vh2jM: $this->load->model("\104\141\163\150\142\x6f\141\162\x64\x5f\x6d\x6f\x64\x65\154", "\144\x61\x73\x68\x62\x6f\x61\x72\x64"); goto ft5iB; UccHJ: } public function output_json($data, $encode = true) { goto QTRo1; VlR4G: $this->output->set_content_type("\x61\x70\160\x6c\151\x63\141\x74\x69\157\156\x2f\x6a\x73\157\x6e")->set_output($data); goto O2eKQ; jAF4w: $data = json_encode($data); goto F1l3C; QTRo1: if (!$encode) { goto N21fG; } goto jAF4w; F1l3C: N21fG: goto VlR4G; O2eKQ: } public function index() { goto mr1I_; mr1I_: $json = file_get_contents("\x2e\57\141\163\x73\145\164\163\57\x61\160\x70\x2f\144\x62\x2f\144\141\164\x61\142\x61\163\x65\x2e\152\x73\157\156"); goto l5Nr6; aA2Jf: $data_tables = []; goto CvEha; UPZCG: $data["\x73\155\164\137\141\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto hEHa1; g0dPq: $json = (array) $json; goto d5xQm; pRq35: BU4Hz: goto zjzSm; WkGFy: foreach ($tables as $table) { goto bGyno; DPQFR: if (in_array($table, $excludes)) { goto IenZK; } goto V_j8I; nbKM9: goto DtZxu; goto b91ev; airiQ: dcyJH: goto bkay7; F_3MW: $data_tables[$table_info["\153\145\x74"]][] = $table_info; goto airiQ; ZZNrg: $this->dbforge->drop_table("\x62\x75\x6b\x75\x5f\x6e\151\154\x61\151", true); goto Ep14o; qROpt: OqdT5: goto tfRyS; bGyno: if (isset($json[$table])) { goto pBVBh; } goto DPQFR; oogUG: $table_info = ["\153\x65\164" => $this->keterangan()[$table], "\163\151\x7a\145" => $this->settings->rowSize($table), "\164\x61\142\x6c\x65" => $table, "\156\141\155\145" => ucwords($name)]; goto F_3MW; bqGJo: $nums = $this->db->get("\x62\165\x6b\165\x5f\156\151\154\141\151")->num_rows(); goto xw_zt; tJ9Vz: $this->dbforge->drop_table($table, true); goto BhQbW; Ee3gk: tN2kO: goto hQfm1; dX1r7: $name = str_replace("\137", "\x20", $table); goto oogUG; V_j8I: if ($table == "\x62\x75\x6b\165\137\156\x69\x6c\141\x69") { goto DgNLY; } goto tJ9Vz; BhQbW: goto OqdT5; goto Giup6; Giup6: DgNLY: goto bqGJo; Ep14o: x9UT4: goto qROpt; bkay7: DtZxu: goto Ee3gk; v84rp: if (in_array($table, $excludes)) { goto dcyJH; } goto dX1r7; b91ev: pBVBh: goto v84rp; xw_zt: if (!($nums == 0)) { goto x9UT4; } goto ZZNrg; tfRyS: IenZK: goto nbKM9; hQfm1: } goto pRq35; zjzSm: $data["\x74\x61\x62\x6c\145\163"] = $data_tables; goto k2HF6; XVZpz: $data["\x74\x70\137\141\143\164\x69\x76\145"] = $this->dashboard->getTahunActive(); goto UP3sr; d5xQm: $user = $this->ion_auth->user()->row(); goto vXsPz; hEHa1: $excludes = ["\142\165\x6b\165\x5f\x69\156\x64\x75\x6b", "\141\160\x69\137\x73\x65\x74\164\x69\x6e\x67", "\141\160\151\137\164\x6f\153\145\156", "\142\x75\x6c\141\x6e", "\150\141\162\x69", "\x73\x65\x74\164\x69\156\x67", "\143\142\164\137\x6a\x65\156\151\163", "\x63\142\x74\137\162\165\x61\156\147", "\x63\142\x74\137\x73\145\163\x69", "\143\x62\x74\x5f\164\157\x6b\x65\156", "\154\x65\x76\x65\x6c\x5f\x67\165\x72\165", "\154\145\166\145\x6c\x5f\x6b\145\154\141\x73", "\x6d\141\x73\164\x65\162\x5f\x74\160", "\155\141\163\164\x65\x72\137\163\x6d\x74", "\x6d\141\x73\x74\145\162\x5f\150\141\x72\x69\137\x65\146\145\153\164\x69\x66", "\x75\x73\x65\x72\x73", "\x67\162\157\165\160\x73", "\x75\163\x65\162\163\137\x67\x72\157\165\x70\x73", "\x6c\157\147\x69\x6e\x5f\141\164\x74\x65\155\160\x74\163", "\x75\x73\x65\x72\163\x5f\x70\x72\x6f\x66\x69\x6c\145", "\x72\x61\160\x6f\x72\x5f\141\x64\155\151\156\137\163\145\x74\x74\151\x6e\147", "\162\165\x6e\x6e\151\x6e\147\137\164\145\x78\x74"]; goto aA2Jf; fWfyx: $this->load->view("\137\x74\145\x6d\x70\x6c\141\164\145\x73\57\144\141\x73\150\142\x6f\141\x72\144\57\x5f\x66\x6f\157\164\145\x72"); goto sE8kS; iqRnJ: $data["\x74\160"] = $this->dashboard->getTahun(); goto XVZpz; KspUm: $this->load->view("\163\x65\164\164\x69\156\147\x2f\155\141\156\141\147\145"); goto fWfyx; CvEha: $tables = $this->db->list_tables(); goto WkGFy; vXsPz: $data = ["\165\163\145\x72" => $user, "\x6a\x75\144\165\154" => "\x42\x65\x72\x73\151\x68\x6b\x61\156\x20\x44\141\x74\x61", "\x73\165\x62\x6a\x75\x64\165\154" => "\110\141\160\x75\163\x20\104\x61\164\x61", "\160\x72\x6f\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\164\151\x6e\x67" => $this->dashboard->getSetting()]; goto iqRnJ; l5Nr6: $json = json_decode($json); goto g0dPq; UP3sr: $data["\163\155\164"] = $this->dashboard->getSemester(); goto UPZCG; k2HF6: $this->load->view("\137\x74\145\x6d\160\x6c\141\164\x65\x73\x2f\144\x61\x73\x68\142\157\141\162\144\57\137\x68\x65\x61\144\145\162", $data); goto KspUm; sE8kS: } public function hapusTable() { goto rx2DW; D7oSN: $this->load->helper("\146\151\154\145"); goto w0EPJ; xFwZv: $this->load->dbutil(); goto n3XwR; w0EPJ: write_file("\56\x2f\x62\x61\143\x6b\165\x70\x73\x2f\142\x61\143\x6b\x75\x70\137" . $table . "\x5f" . date("\x59\x5f\155\137\144\x5f\x48\137\151\137\163") . "\56\x73\161\x6c", $backup); goto PpHoj; rx2DW: $table = $this->input->post("\x74\141\x62\x6c\145", true); goto xFwZv; rzcEo: $backup = $this->dbutil->backup(array($prefs)); goto D7oSN; n3XwR: $prefs = ["\x74\x61\x62\154\x65\x73" => array($table), "\151\147\156\157\x72\145" => array(), "\x66\x6f\x72\155\x61\164" => "\164\170\164", "\x66\151\154\145\156\141\155\x65" => $table . "\x2e\163\x71\x6c", "\x61\144\144\x5f\144\x72\157\160" => TRUE, "\x61\144\x64\137\x69\156\163\x65\162\164" => TRUE, "\156\145\167\154\x69\x6e\145" => "\xa"]; goto rzcEo; PpHoj: $this->db->truncate($table); goto QIk2s; QIk2s: $this->output_json(["\x74\171\160\145" => "\144\141\164\x61\142\141\x73\145", "\155\x65\x73\163\x61\147\x65" => "\x44\141\164\141\142\141\163\145\40\x62\145\x72\x68\x61\x73\x69\x6c\x20\x64\x69\x68\x61\160\x75\x73"]); goto wpHC9; wpHC9: } public function truncate() { goto MUVhx; S3gqZ: $this->settings->truncate($tables); goto UvSgq; UvSgq: $this->output_json(["\163\164\x61\x74\165\163" => true]); goto Gu_4g; MUVhx: $tables = $this->db->list_tables(); goto S3gqZ; Gu_4g: } private function keterangan() { $data = ["\x61\x70\151\x5f\163\x65\164\164\x69\x6e\x67" => "\x31", "\x61\x70\151\x5f\x74\157\x6b\145\x6e" => "\61", "\142\x75\x6b\x75\137\151\x6e\144\x75\153" => "\61", "\142\x75\x6c\141\x6e" => "\60", "\143\x62\x74\137\142\141\156\x6b\137\x73\157\x61\x6c" => "\62", "\x63\x62\164\x5f\x64\x75\x72\141\x73\151\137\163\x69\163\167\x61" => "\x32", "\x63\142\x74\x5f\152\141\x64\167\x61\x6c" => "\62", "\x63\142\x74\137\x6a\x61\144\167\141\154\137\x75\152\x69\x61\156" => "\x32", "\x63\x62\164\x5f\x6a\x65\x6e\x69\163" => "\60", "\143\142\x74\x5f\x6b\x65\x6c\141\x73\137\x72\165\x61\x6e\147" => "\62", "\x63\x62\x74\x5f\x6b\157\x70\x5f\x61\142\x73\145\x6e\x73\151" => "\61", "\143\x62\164\x5f\x6b\x6f\x70\137\x62\145\x72\x69\164\141" => "\61", "\x63\x62\x74\137\x6b\x6f\x70\x5f\x6b\141\x72\164\165" => "\61", "\x63\142\164\137\156\151\x6c\x61\151" => "\62", "\x63\142\164\x5f\156\x6f\155\157\x72\137\x70\x65\x73\x65\162\x74\141" => "\x32", "\x63\x62\164\x5f\160\145\156\147\x61\167\x61\163" => "\x32", "\143\142\164\137\x72\145\153\141\x70" => "\62", "\143\142\x74\137\x72\x65\153\141\160\137\156\x69\154\141\151" => "\62", "\143\142\x74\x5f\162\x75\141\156\x67" => "\61", "\143\x62\x74\137\x73\145\x73\x69" => "\61", "\x63\x62\x74\137\x73\x65\163\x69\x5f\163\x69\x73\167\141" => "\x32", "\x63\142\x74\137\x73\157\x61\x6c" => "\x32", "\143\x62\164\137\x73\x6f\x61\x6c\x5f\x73\151\x73\x77\141" => "\x32", "\x63\x62\x74\x5f\x74\157\153\145\x6e" => "\x31", "\147\x72\157\165\x70\x73" => "\x30", "\x68\x61\162\151" => "\x30", "\152\x61\x62\141\x74\x61\x6e\x5f\147\x75\x72\x75" => "\61", "\153\x65\x6c\x61\163\137\143\141\164\x61\x74\141\156\x5f\x6d\141\160\145\x6c" => "\62", "\153\145\x6c\141\x73\x5f\143\141\x74\x61\164\141\x6e\x5f\167\x61\154\151" => "\x32", "\x6b\x65\154\x61\163\x5f\x65\153\x73\164\x72\x61" => "\x31", "\153\x65\x6c\141\x73\x5f\152\x61\x64\x77\141\x6c\x5f\153\142\x6d" => "\x32", "\153\x65\x6c\141\x73\137\152\x61\x64\x77\x61\154\137\155\141\x70\145\154" => "\x32", "\x6b\145\154\x61\x73\x5f\152\141\144\x77\141\154\137\155\x61\164\145\162\151" => "\62", "\153\145\x6c\141\163\137\x6a\141\x64\167\x61\x6c\137\164\x75\147\x61\163" => "\62", "\153\145\x6c\141\x73\137\x6d\x61\164\145\x72\151" => "\62", "\x6b\145\x6c\141\163\137\x73\x69\x73\167\x61" => "\x32", "\153\145\x6c\141\163\137\163\x74\x72\x75\x6b\x74\x75\x72" => "\62", "\153\x65\x6c\141\163\x5f\164\x75\147\141\x73" => "\x32", "\154\x65\x76\x65\154\x5f\147\x75\x72\x75" => "\60", "\x6c\x65\166\145\x6c\137\x6b\145\154\141\163" => "\60", "\x6c\x6f\x67" => "\62", "\154\x6f\x67\151\156\x5f\141\164\x74\145\155\x70\x74\163" => "\60", "\154\157\x67\x5f\155\x61\x74\145\x72\x69" => "\x32", "\x6c\x6f\x67\137\164\x75\x67\141\163" => "\x32", "\154\x6f\147\137\165\x6a\151\141\x6e" => "\62", "\155\141\x73\164\145\x72\x5f\145\x6b\163\164\162\x61" => "\61", "\x6d\x61\x73\x74\x65\162\x5f\147\165\162\165" => "\x31", "\x6d\141\163\164\145\162\x5f\150\x61\x72\151\x5f\x65\146\145\153\164\151\x66" => "\61", "\x6d\x61\x73\164\x65\x72\x5f\152\x75\x72\165\x73\x61\156" => "\61", "\x6d\141\x73\164\145\x72\x5f\153\x65\154\x61\x73" => "\x31", "\x6d\141\x73\164\x65\162\137\x6b\145\x6c\x6f\155\x70\x6f\x6b\137\x6d\141\x70\145\154" => "\61", "\x6d\141\163\x74\x65\x72\x5f\x6d\x61\160\x65\x6c" => "\x31", "\155\x61\163\x74\x65\x72\x5f\163\151\x73\x77\141" => "\61", "\x6d\x61\x73\x74\x65\162\x5f\x73\155\164" => "\x30", "\155\x61\x73\164\145\x72\137\164\x70" => "\x30", "\x70\x6f\163\x74" => "\62", "\x70\157\x73\x74\137\x63\x6f\155\x6d\145\156\x74\x73" => "\62", "\160\x6f\x73\164\137\x72\145\x70\x6c\171" => "\x32", "\162\x61\x70\x6f\162\137\x61\144\155\151\156\137\163\x65\x74\164\151\x6e\x67" => "\61", "\162\x61\160\157\x72\137\143\x61\x74\141\164\x61\x6e\137\167\x61\154\151" => "\x31", "\162\x61\x70\157\162\137\144\141\x74\141\x5f\x63\x61\x74\141\x74\x61\x6e" => "\61", "\162\x61\x70\x6f\162\137\144\141\x74\x61\x5f\146\151\163\151\153" => "\61", "\162\141\160\157\x72\x5f\144\x61\164\141\x5f\x73\x69\x6b\141\x70" => "\x31", "\162\141\x70\x6f\162\137\x66\151\x73\151\153" => "\x31", "\162\x61\x70\157\162\x5f\x6b\x69\x6b\x64" => "\61", "\x72\141\x70\x6f\162\x5f\x6b\x6b\x6d" => "\x31", "\x72\141\160\x6f\x72\137\x6e\x61\151\153" => "\x31", "\x72\x61\160\x6f\162\137\x6e\x69\154\x61\151\x5f\141\153\150\151\162" => "\61", "\x72\141\x70\157\162\x5f\156\x69\x6c\141\x69\x5f\145\153\163\x74\162\141" => "\61", "\x72\141\x70\x6f\x72\137\x6e\151\154\141\151\x5f\x68\x61\162\x69\141\156" => "\61", "\x72\x61\x70\x6f\x72\137\x6e\x69\154\141\x69\x5f\160\x74\163" => "\x31", "\x72\141\x70\x6f\x72\137\156\151\x6c\x61\151\x5f\163\x69\153\141\160" => "\61", "\x72\x61\x70\x6f\162\137\x70\162\145\x73\164\141\163\151" => "\x31", "\162\165\156\156\x69\x6e\147\137\x74\145\170\164" => "\61", "\163\x65\x74\x74\x69\156\147" => "\x31", "\x75\x73\x65\x72\x73" => "\60", "\165\163\x65\162\x73\137\x67\x72\157\x75\160\x73" => "\60", "\x75\163\145\x72\163\x5f\160\162\157\146\x69\154\145" => "\x30"]; return $data; } }
