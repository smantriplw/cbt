<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\105\x50\101\x54\x48") or exit("\116\157\x20\144\151\162\x65\x63\164\40\163\143\x72\151\x70\164\x20\141\x63\x63\145\x73\163\40\x61\x6c\x6c\x6f\x77\x65\144"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; class Dataekstra extends CI_Controller { public function __construct() { goto U72TB; YEOAt: show_error("\x48\141\156\171\141\40\x41\x64\x6d\x69\x6e\151\x73\x74\162\x61\x74\x6f\x72\x20\x79\141\156\x67\x20\144\x69\x62\x65\162\151\40\150\141\x6b\x20\x75\156\164\165\x6b\40\x6d\x65\x6e\147\x61\153\x73\145\163\40\x68\141\x6c\x61\x6d\x61\156\40\151\x6e\151\x2c\x20\x3c\141\40\150\162\x65\146\x3d\x22" . base_url("\144\141\x73\150\142\157\141\x72\144") . "\42\x3e\113\x65\x6d\x62\x61\154\151\x20\153\x65\40\x6d\x65\156\165\x20\141\x77\141\x6c\74\x2f\x61\x3e", 403, "\x41\153\x73\145\163\40\x54\x65\162\x6c\141\x72\141\x6e\147"); goto Kabrc; WkGpE: $this->load->library(["\x64\x61\x74\141\x74\x61\142\x6c\x65\x73", "\146\157\162\x6d\137\166\141\x6c\x69\x64\141\164\151\x6f\156"]); goto e528J; Yd1Tq: $this->load->model("\104\x72\157\160\x64\x6f\x77\x6e\x5f\x6d\x6f\x64\145\154", "\x64\162\157\x70\144\157\167\x6e"); goto erhuh; GYYYP: hqoB4: goto oIx20; zdSAX: $this->form_validation->set_error_delimiters('', ''); goto cAQaQ; erhuh: $this->load->model("\x4b\145\x6c\141\x73\137\x6d\x6f\144\145\x6c", "\153\145\x6c\x61\163"); goto zdSAX; n0s3O: goto zJ_1K; goto GYYYP; e528J: $this->load->model("\x4d\141\x73\164\x65\x72\137\x6d\157\144\145\x6c", "\x6d\141\163\164\145\162"); goto m_o0x; Kabrc: H4mJq: goto n0s3O; PMdhV: zJ_1K: goto WkGpE; BI3Fl: if ($this->ion_auth->is_admin()) { goto H4mJq; } goto YEOAt; M_8TF: if (!$this->ion_auth->logged_in()) { goto hqoB4; } goto BI3Fl; oIx20: redirect("\141\x75\x74\x68"); goto PMdhV; m_o0x: $this->load->model("\104\x61\163\x68\x62\x6f\x61\x72\x64\x5f\155\157\x64\x65\x6c", "\144\141\163\150\142\x6f\x61\x72\x64"); goto Yd1Tq; U72TB: parent::__construct(); goto M_8TF; cAQaQ: } public function output_json($data, $encode = true) { goto lcuPC; ZiRgE: T0yF3: goto w9MO4; lsyR0: $data = json_encode($data); goto ZiRgE; w9MO4: $this->output->set_content_type("\141\x70\x70\154\151\143\x61\164\151\x6f\156\57\x6a\x73\x6f\156")->set_output($data); goto XFb2Q; lcuPC: if (!$encode) { goto T0yF3; } goto lsyR0; XFb2Q: } public function index() { goto oYXjU; qzAKS: $data["\x65\153\x73\153\x75\x6c"] = $this->dropdown->getAllEkskul(); goto jGG5K; QwTQJ: $this->load->view("\137\x74\x65\x6d\x70\x6c\141\164\x65\163\57\144\141\163\x68\x62\x6f\141\x72\x64\x2f\x5f\x68\145\x61\x64\x65\162", $data); goto E0n8U; QHo5x: $data["\x74\x70"] = $this->dashboard->getTahun(); goto CgvCj; e6Ch6: $data["\160\x65\155\x62\x69\155\142\151\x6e\147"] = $this->dropdown->getAllGuru(); goto QwTQJ; CgvCj: $data["\164\160\137\x61\143\x74\x69\166\145"] = $tp; goto LDF9_; BKaww: $data["\x6b\145\x6c\x61\x73"] = $kelas; goto e6Ch6; LDF9_: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto zSHQv; zSHQv: $data["\163\155\164\137\x61\143\x74\x69\166\x65"] = $smt; goto qzAKS; jcd1E: $kelasEks = []; goto rtowp; v3xSk: $this->load->view("\x5f\164\145\x6d\x70\154\x61\164\145\163\x2f\144\141\x73\150\x62\157\x61\x72\144\x2f\137\146\x6f\157\164\x65\162"); goto cRU5f; oYXjU: $user = $this->ion_auth->user()->row(); goto Xxv_t; jGG5K: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto jcd1E; a836X: $data["\145\x6b\x73\153\x75\x6c\137\153\x65\x6c\141\x73"] = $kelasEks; goto BKaww; E0n8U: $this->load->view("\155\x61\x73\x74\145\162\57\145\153\163\164\162\x61\x2f\x64\141\x74\141"); goto v3xSk; w87R3: Pi2fJ: goto a836X; apTLG: $smt = $this->dashboard->getSemesterActive(); goto QHo5x; Xxv_t: $data = ["\x75\163\x65\162" => $user, "\152\x75\x64\165\154" => "\x45\153\163\x74\162\141\x6b\165\x72\x69\153\165\154\145\x72", "\x73\x75\142\x6a\x75\x64\165\154" => "\104\x61\164\141\x20\x4d\141\x74\141\x20\120\x65\154\x61\152\141\x72\x61\156", "\x70\x72\x6f\146\x69\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto XtIrS; XtIrS: $tp = $this->dashboard->getTahunActive(); goto apTLG; rtowp: foreach ($kelas as $key => $kls) { $kelasEks[$key] = $this->kelas->getKelasEkskul($key, $tp->id_tp, $smt->id_smt); kWze7: } goto w87R3; cRU5f: } public function create() { goto hpd8w; hpd8w: $insert = ["\156\141\155\141\137\145\x6b\x73\164\162\141" => $this->input->post("\x6e\x61\155\141\x5f\145\x6b\x73\x74\x72\141", true), "\153\157\144\x65\x5f\x65\x6b\163\164\162\141" => $this->input->post("\x6b\x6f\x64\x65\137\145\x6b\163\164\162\141", true)]; goto ELNyJ; ELNyJ: $data = $this->master->create("\155\141\163\x74\x65\x72\137\145\153\x73\164\x72\141", $insert); goto acF2p; acF2p: $this->output->set_content_type("\x61\160\x70\154\x69\x63\x61\164\151\157\156\57\152\x73\157\156")->set_output($data); goto P9MVo; P9MVo: } public function read() { goto Vqq31; C31T5: $this->datatables->from("\x6d\x61\x73\x74\145\x72\x5f\145\x6b\163\x74\x72\141"); goto U0ROw; Vqq31: $this->datatables->select("\x2a"); goto C31T5; U0ROw: echo $this->datatables->generate(); goto RLDHg; RLDHg: } public function update() { $data = $this->master->updateEkstra(); $this->output->set_content_type("\141\160\160\154\151\143\x61\164\x69\157\156\x2f\x6a\163\x6f\156")->set_output($data); } public function delete($id) { goto rrjZd; cRqYu: $tabless = $this->db->list_tables(); goto lSef5; UnJ5p: if (count($messages) > 0) { goto jqo6q; } goto lunQC; lSef5: foreach ($tabless as $table) { goto liUSH; zqDp2: EGXVZ: goto eokQH; fPWnr: BnWUT: goto zqDp2; elw43: foreach ($fields as $field) { goto FJ2NQ; a57ci: ry48F: goto tK4KT; FJ2NQ: if (!($field->name == "\x69\144\137\x65\x6b\163\x74\x72\141" || $field->name == "\145\x6b\x73\164\x72\x61\x5f\x69\144")) { goto ry48F; } goto PwX9W; tK4KT: qcX3F: goto wgPp3; PwX9W: array_push($tables, $table); goto a57ci; wgPp3: } goto fPWnr; liUSH: $fields = $this->db->field_data($table); goto elw43; eokQH: } goto obkhh; aZ2Pk: goto BiT3s; goto xRuRY; ZMqnt: $this->output_json(["\163\164\x61\x74\x75\x73" => false, "\155\145\163\x73\x61\x67\145" => "\x45\x6b\x73\153\165\154\40\x67\x61\x67\x61\x6c\x20\x64\x69\x68\141\x70\165\163"]); goto ubUye; ubUye: goto moEWD; goto SwS_c; xRuRY: jqo6q: goto nSjOL; SwS_c: xqSlF: goto Ealay; wwqy7: $tables = []; goto cRqYu; Ealay: $this->output_json(["\163\x74\x61\164\165\x73" => true, "\x6d\x65\163\163\x61\x67\x65" => "\105\x6b\x73\153\x75\154\x20\x62\145\162\x68\x61\x73\x69\x6c\40\x64\x69\150\141\x70\165\163"]); goto KMSGS; U3hA1: Jcx23: goto UnJ5p; O6P_V: BiT3s: goto iYL8s; OenJ7: $this->output_json($tables); goto RLqAA; obkhh: AFk7N: goto OenJ7; KMSGS: moEWD: goto aZ2Pk; nSjOL: $this->output_json(["\163\164\x61\x74\x75\163" => false, "\164\x6f\164\x61\154" => "\x4d\x61\160\x65\x6c\40\144\x69\147\165\156\x61\153\141\156\x20\144\151\40" . count($messages) . "\40\164\x61\x62\145\154\72\74\142\162\76" . implode("\x3c\142\162\x3e", $messages)]); goto O6P_V; RLqAA: foreach ($tables as $table) { goto bWzRo; attz1: I2vWX: goto L0x6f; Zeh35: $num = $this->db->count_all_results($table); goto vauIB; kUDft: array_push($messages, $table); goto Bw0Um; Bw0Um: FVC5k: goto attz1; vauIB: if (!($num > 0)) { goto FVC5k; } goto kUDft; gq4Ls: $this->db->where("\151\144\x5f\x65\153\163\164\x72\141", $id); goto Zeh35; bWzRo: if (!($table != "\155\141\163\164\145\x72\x5f\x65\153\x73\x74\x72\141")) { goto I2vWX; } goto gq4Ls; L0x6f: KPbhu: goto kVjDq; kVjDq: } goto U3hA1; lunQC: if ($this->master->delete("\155\x61\x73\x74\145\x72\137\x65\x6b\x73\164\162\x61", [$id], "\x69\x64\137\x65\153\163\164\162\x61")) { goto xqSlF; } goto ZMqnt; rrjZd: $messages = []; goto wwqy7; iYL8s: } public function save() { goto jA9Xc; ig9dI: $res["\x75\160\x64\x61\x74\145"] = $update; goto Lf7VW; jA9Xc: $check_kelas = json_decode(json_encode(json_decode($this->input->post("\x6b\x65\154\141\x73", true)))); goto nKP3Y; cxpV0: $update = []; goto n82rb; iI5vC: $res["\x73\164\x61\164\x75\x73"] = true; goto ig9dI; j8tfQ: eGppo: goto iI5vC; WTcaw: $smt = $this->master->getSemesterActive()->id_smt; goto YVe4s; Lf7VW: $this->output_json($res); goto mZN6w; YVe4s: $row_insert = 0; goto cxpV0; n82rb: foreach ($check_kelas as $key => $kls) { goto BUNbF; XzMtx: goto TVnVs; goto ogyoR; C4XSX: if (!($j <= $row_ekskul)) { goto hnF2z; } goto CKeCs; CKeCs: $kelaseks = $this->input->post("\145\153\163\x6b\x75\x6c" . $kls->kls_id . "\x5b" . $j . "\135", true); goto GSfCx; fc8XZ: iXvdP: goto RdO4L; PuG25: $row_ekskul = count($this->input->post("\145\x6b\x73\x6b\x75\x6c" . $kls->kls_id, true)); goto hxk5i; hxk5i: $ekstra = []; goto tvwWV; GSfCx: $ekstra[] = ["\x65\x6b\x73\164\x72\141" => $kelaseks]; goto u4lpE; PYWMV: $update[] = $this->db->replace("\x6b\x65\x6c\141\x73\x5f\x65\153\163\x74\162\141", $ekstras); goto fc8XZ; D_mII: $ekstras = ["\x69\144\137\x6b\145\x6c\x61\163\137\145\x6b\163\x74\x72\141" => $kls->kls_id . $tp . $smt, "\x69\144\137\x6b\x65\x6c\x61\x73" => $kls->kls_id, "\151\144\x5f\x74\x70" => $tp, "\151\x64\137\163\x6d\164" => $smt, "\145\153\163\164\x72\x61" => serialize($ekstra)]; goto PYWMV; BUNbF: $check_ekskul = $this->input->post("\x65\153\163\153\165\x6c" . $kls->kls_id, true); goto XsEoI; tvwWV: $j = 0; goto sU5rv; RdO4L: DBmZG: goto Q9htZ; sU5rv: TVnVs: goto C4XSX; XsEoI: if (!$check_ekskul) { goto iXvdP; } goto PuG25; u4lpE: kW8EL: goto n68qh; ogyoR: hnF2z: goto D_mII; n68qh: $j++; goto XzMtx; Q9htZ: } goto j8tfQ; nKP3Y: $tp = $this->master->getTahunActive()->id_tp; goto WTcaw; mZN6w: } public function import($import_data = null) { goto ilHre; JKqWm: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto WPWM_; kkCzI: mAIPy: goto BkmyS; utvVH: if (!($import_data != null)) { goto mAIPy; } goto eiEyt; YUcmV: $data["\x74\160\137\x61\143\164\x69\x76\145"] = $this->dashboard->getTahunActive(); goto JKqWm; WPWM_: $data["\163\x6d\164\x5f\x61\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto Sj7ao; eiEyt: $data["\151\155\x70\x6f\x72\x74"] = $import_data; goto kkCzI; BkmyS: $data["\x74\160"] = $this->dashboard->getTahun(); goto YUcmV; s4x1e: $this->load->view("\x5f\164\145\155\x70\154\141\x74\x65\x73\x2f\144\x61\x73\x68\142\x6f\x61\x72\144\57\x5f\x66\157\157\164\145\162"); goto PzlWw; Pe9o3: $data = ["\165\163\145\162" => $user, "\x6a\x75\x64\165\154" => "\115\141\x74\141\x20\120\145\154\141\152\x61\x72\x61\156", "\163\165\142\152\x75\x64\x75\154" => "\111\x6d\160\x6f\x72\x74\40\115\x61\x74\141\x20\x50\x65\x6c\141\x6a\x61\x72\141\x6e", "\x70\162\x6f\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto utvVH; Sj7ao: $this->load->view("\137\164\x65\155\160\x6c\x61\x74\x65\x73\x2f\x64\141\x73\150\142\157\x61\x72\144\x2f\137\150\145\x61\144\145\162", $data); goto Tmpkl; ilHre: $user = $this->ion_auth->user()->row(); goto Pe9o3; Tmpkl: $this->load->view("\x6d\x61\x73\x74\145\x72\57\145\x6b\x73\x74\162\141\x2f\x69\x6d\160\x6f\162\164"); goto s4x1e; PzlWw: } }
