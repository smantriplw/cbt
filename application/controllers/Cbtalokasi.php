<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtalokasi extends CI_Controller { public function __construct() { goto hxBqq; QF158: if (!$this->ion_auth->logged_in()) { goto HAK2k; } goto S9wn0; hqbej: HAK2k: goto VOy1_; BqVVI: $this->load->model("\115\141\163\164\145\162\137\155\157\x64\x65\154", "\155\141\x73\164\x65\x72"); goto O8Tm5; jGTtX: $this->load->library(["\144\141\x74\141\x74\x61\142\x6c\145\x73", "\146\157\162\x6d\x5f\x76\141\x6c\151\144\141\x74\151\x6f\x6e"]); goto BqVVI; S9wn0: if ($this->ion_auth->is_admin()) { goto qUCFZ; } goto GkOf6; QfA1a: IkpVB: goto jGTtX; bqOdB: $this->load->model("\104\162\157\x70\x64\157\167\x6e\137\155\157\144\x65\x6c", "\144\x72\157\160\144\x6f\x77\x6e"); goto RzNhX; CVMee: goto IkpVB; goto hqbej; Tab03: $this->load->model("\x43\142\x74\137\155\157\x64\x65\154", "\143\142\164"); goto kbvdG; VOy1_: redirect("\141\165\164\150"); goto QfA1a; eOg4w: qUCFZ: goto CVMee; GkOf6: show_error("\x48\x61\x6e\x79\141\40\101\x64\x6d\x69\156\x69\x73\164\162\x61\164\157\162\x20\171\141\x6e\147\40\144\151\x62\x65\x72\x69\x20\x68\141\153\x20\165\x6e\164\165\153\40\x6d\x65\156\x67\141\x6b\x73\145\x73\x20\150\x61\154\x61\155\141\x6e\40\x69\156\151\x2c\x20\x3c\141\40\x68\162\145\146\75\42" . base_url("\x64\141\x73\x68\x62\157\x61\x72\144") . "\42\76\113\x65\x6d\x62\141\154\x69\x20\x6b\145\40\x6d\145\x6e\x75\40\x61\167\x61\x6c\74\x2f\141\x3e", 403, "\101\x6b\163\x65\163\x20\x54\x65\162\x6c\x61\162\x61\x6e\147"); goto eOg4w; RzNhX: $this->form_validation->set_error_delimiters('', ''); goto RqcG2; hxBqq: parent::__construct(); goto QF158; kbvdG: $this->load->model("\114\157\147\137\155\x6f\x64\145\154", "\154\x6f\x67\x67\x69\x6e\147"); goto bqOdB; O8Tm5: $this->load->model("\x44\x61\163\x68\142\157\141\x72\144\137\155\157\x64\145\154", "\144\x61\163\150\x62\x6f\x61\x72\x64"); goto Tab03; RqcG2: } public function output_json($data, $encode = true) { goto acSGX; acSGX: if (!$encode) { goto jeVaz; } goto rrIrG; Xw4j0: $this->output->set_content_type("\x61\x70\160\x6c\x69\x63\x61\164\x69\x6f\156\57\152\163\x6f\156")->set_output($data); goto DB5Ff; UAKoS: jeVaz: goto Xw4j0; rrIrG: $data = json_encode($data); goto UAKoS; DB5Ff: } public function index() { goto ZbEbO; u9HEp: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto rw9hE; aTp57: uCFLi: goto jK05o; rw9hE: $data["\x73\x6d\x74\x5f\x61\x63\x74\x69\x76\x65"] = $smt; goto SPp2s; RRgE_: $data["\x74\x70"] = $this->dashboard->getTahun(); goto MpUN6; SPp2s: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto kUjY2; DYfmy: Deeof: goto C3DcV; eiNSl: goto Deeof; goto WKU_N; y39mB: Jk5Tn: goto gcpQE; TGNHU: $data["\154\145\166\145\154\137\x73\145\154\x65\143\164\145\144"] = $level_selected; goto P4LZH; Jh8Qd: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\163\x2f\x64\141\163\x68\142\157\x61\162\144\57\x5f\x68\145\141\x64\145\x72", $data); goto kHKuS; hxi11: $data["\162\165\x61\156\147"] = $this->dropdown->getAllRuang(); goto gB3AH; mOksT: $data["\160\x72\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto Jh8Qd; Zsx83: if (!(count($id_jenis) > 0)) { goto HYxnW; } goto HEwBr; HEwBr: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); dMceH: } goto y39mB; Ihqfc: $levels = ["\60" => "\120\x69\154\151\150\x20\114\145\166\x65\154", "\61" => "\61", "\62" => "\x32", "\x33" => "\x33", "\64" => "\64", "\65" => "\65", "\x36" => "\x36"]; goto SZ0ha; yEFPV: $smt = $this->dashboard->getSemesterActive(); goto RRgE_; ABG5B: Y1uen: goto MQSUb; lS6bK: UDIP8: goto FTy1A; MQSUb: $data["\153\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto hxi11; MpUN6: $data["\164\x70\x5f\x61\x63\x74\x69\x76\x65"] = $tp; goto u9HEp; vD7nu: if ($setting->jenjang == "\62") { goto uCFLi; } goto rdjuk; DQU1r: $this->load->view("\x5f\x74\145\155\160\x6c\141\x74\x65\163\x2f\x64\141\163\150\142\157\141\x72\144\57\137\146\157\x6f\164\x65\162"); goto CwO35; bPUam: $data["\x6a\x65\x6e\151\163"] = ['' => "\142\145\x6c\165\x6d\x20\141\x64\141\40\152\x61\144\x77\x61\154\40\x75\x6a\x69\x61\x6e"]; goto eiNSl; JZyDD: $dari_selected = $this->input->get("\x64\x61\162\x69", true); goto ivy9T; ZbEbO: $user = $this->ion_auth->user()->row(); goto yKms6; qbXeT: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, $level_selected, $dari_selected, $sampai_selected); goto ABG5B; rdjuk: if ($setting->jenjang == "\x33") { goto cktl0; } goto qfYgp; P4LZH: $data["\146\x69\154\164\145\x72\x5f\163\x65\x6c\145\143\164\x65\x64"] = $filter_selected; goto ku2om; ivy9T: $sampai_selected = $this->input->get("\x73\x61\x6d\160\x61\151", true); goto hhM0T; gB3AH: $levels = []; goto R3J0s; M74L6: $data["\x6a\145\156\x69\x73\x5f\x73\145\154\x65\x63\x74\145\x64"] = $jenis_selected; goto TGNHU; AqIr1: $level_selected = $this->input->get("\154\x65\166\145\x6c", true); goto GfSAs; Z24uz: cktl0: goto LvXp2; pzBkW: O1lMO: goto dA738; KWTL9: foreach ($jadwals as $key => $row) { goto kHHQV; R0Od2: array_push($ret[$row->tgl_mulai], $row); goto FCwXV; oDnFY: AUOh3: goto R0Od2; JYJNL: goto QD6CL; goto oDnFY; CqiH3: $ret[$row->tgl_mulai] = []; goto vAVzG; kHHQV: if (isset($ret[$row->tgl_mulai])) { goto AUOh3; } goto CqiH3; vAVzG: array_push($ret[$row->tgl_mulai], $row); goto JYJNL; oMS3v: x29Vg: goto nv9bl; FCwXV: QD6CL: goto oMS3v; nv9bl: } goto lS6bK; sFzbW: $data["\152\145\x6e\x69\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto DYfmy; qfYgp: goto O1lMO; goto ZPWP_; LvXp2: $levels = ["\x30" => "\x50\151\154\151\150\40\x4c\x65\x76\145\154", "\61\60" => "\x31\x30", "\61\61" => "\x31\x31", "\61\62" => "\x31\62"]; goto pzBkW; i2FXQ: goto O1lMO; goto Z24uz; uN0mR: $data = ["\165\x73\145\x72" => $user, "\x6a\165\144\165\x6c" => "\x41\x6c\x6f\x6b\x61\163\x69\40\127\x61\x6b\164\165", "\163\165\142\152\x75\x64\x75\x6c" => "\101\x6c\157\153\x61\x73\151\40\127\141\x6b\164\x75\x20\x55\152\151\x61\156", "\x73\x65\x74\164\151\156\147" => $setting]; goto AcqM6; WKU_N: pSX0H: goto sFzbW; GfSAs: $filter_selected = $this->input->get("\x66\151\x6c\x74\x65\x72", true); goto JZyDD; gcpQE: HYxnW: goto Xj7UM; AcqM6: $tp = $this->dashboard->getTahunActive(); goto yEFPV; aw9kq: $jadwals = []; goto zEDDZ; ku2om: $data["\x64\141\162\x69\137\163\145\x6c\x65\143\164\x65\x64"] = $dari_selected; goto Bgy_J; R3J0s: if ($setting->jenjang == "\61") { goto ZSOGv; } goto vD7nu; hhM0T: $data["\146\x69\x6c\x74\x65\x72"] = ["\60" => "\123\145\x6d\x75\x61", "\x31" => "\x54\141\x6e\x67\147\141\154"]; goto M74L6; jK05o: $levels = ["\x30" => "\x50\151\x6c\151\150\x20\x4c\145\x76\145\x6c", "\67" => "\x37", "\70" => "\x38", "\71" => "\71"]; goto i2FXQ; kUjY2: $ids = []; goto Zsx83; C3DcV: $jenis_selected = $this->input->get("\152\145\156\x69\163", true); goto AqIr1; FTy1A: $data["\152\141\x64\x77\x61\154\x73"] = $jadwals; goto mOksT; Xj7UM: if (count($ids) > 0) { goto pSX0H; } goto bPUam; Bgy_J: $data["\163\x61\x6d\160\141\x69\x5f\163\x65\154\145\143\x74\145\144"] = $sampai_selected; goto aw9kq; dA738: $data["\154\145\x76\145\154\163"] = $levels; goto mCZPY; ZPWP_: ZSOGv: goto Ihqfc; yKms6: $setting = $this->dashboard->getSetting(); goto uN0mR; kHKuS: $this->load->view("\143\142\164\57\141\154\x6f\x6b\x61\163\151\57\144\x61\164\x61"); goto DQU1r; zEDDZ: if (!($jenis_selected != null && $level_selected != null)) { goto Y1uen; } goto qbXeT; mCZPY: $ret = []; goto KWTL9; SZ0ha: goto O1lMO; goto aTp57; CwO35: } public function saveAlokasi() { goto wpV_h; tzH6Y: $insert = []; goto Ygx_4; hDSQU: BTatw: goto dgxTN; Ygx_4: foreach ($input as $d) { goto GALJP; zjXHZ: array_push($insert, ["\x69\x64\x5f\x6a\x61\x64\x77\141\154" => $d->id_jadwal, "\152\x61\155\137\x6b\145" => $d->jam_ke]); goto cRZI0; cRZI0: p6tRq: goto sBCSe; GALJP: if (!($d->id_jadwal != "\60")) { goto p6tRq; } goto zjXHZ; sBCSe: j3SFc: goto qhKbe; qhKbe: } goto hDSQU; A4jQz: $data["\163\164\141\164\165\x73"] = $update; goto HBKim; dgxTN: $update = $this->db->update_batch("\x63\142\164\x5f\152\x61\x64\167\x61\154", $insert, "\x69\x64\137\x6a\141\144\167\x61\x6c"); goto A4jQz; HBKim: $this->output_json($data); goto XgjQH; wpV_h: $input = json_decode($this->input->post("\141\154\157\153\x61\x73\151", true)); goto tzH6Y; XgjQH: } }
