<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walicatatan extends CI_Controller { public function __construct() { goto P5uQO; KWjra: $this->load->model("\x4b\x65\x6c\x61\x73\x5f\x6d\157\x64\145\154", "\153\x65\x6c\141\x73"); goto waW0N; Dibtk: $this->load->library(["\x64\141\x74\x61\x74\x61\x62\154\145\x73", "\146\x6f\162\155\x5f\166\x61\x6c\151\x64\141\164\x69\x6f\156"]); goto OGZth; Kcw07: goto B05AC; goto lRb9x; qt0TC: if (!$this->ion_auth->logged_in()) { goto Q2kRb; } goto UepyE; XluPA: show_error("\x48\141\156\171\141\x20\x41\144\x6d\x69\x6e\151\x73\164\162\x61\164\x6f\162\40\x64\x61\x6e\x20\x67\165\x72\x75\x20\171\x61\x6e\x67\x20\x64\151\x62\x65\162\x69\x20\150\141\153\x20\x75\x6e\x74\165\153\40\155\145\156\x67\141\x6b\163\x65\x73\x20\x68\x61\x6c\141\x6d\141\x6e\40\x69\x6e\x69\54\x20\74\x61\40\x68\x72\145\x66\x3d\x22" . base_url("\144\x61\163\x68\142\157\x61\162\x64") . "\42\x3e\113\145\155\142\141\154\x69\40\x6b\145\40\x6d\145\x6e\x75\x20\x61\167\x61\154\x3c\x2f\x61\x3e", 403, "\101\153\x73\145\163\x20\124\x65\x72\154\x61\162\141\156\x67"); goto dOtES; CotYV: B05AC: goto Dibtk; lRb9x: Q2kRb: goto EVM7D; EVM7D: redirect("\141\x75\164\x68"); goto CotYV; waW0N: $this->load->model("\x44\162\x6f\x70\144\x6f\x77\x6e\137\x6d\157\x64\145\x6c", "\x64\162\157\x70\144\x6f\x77\x6e"); goto mPBHy; OGZth: $this->load->model("\x4d\141\x73\164\145\x72\x5f\155\x6f\x64\x65\154", "\155\x61\163\x74\x65\x72"); goto gDrNQ; mPBHy: $this->form_validation->set_error_delimiters('', ''); goto TDzZI; gDrNQ: $this->load->model("\x44\x61\x73\x68\142\157\141\x72\x64\x5f\x6d\x6f\144\x65\x6c", "\144\141\x73\x68\x62\157\141\162\144"); goto KWjra; UepyE: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) { goto SPeP0; } goto XluPA; P5uQO: parent::__construct(); goto qt0TC; dOtES: SPeP0: goto Kcw07; TDzZI: } public function output_json($data, $encode = true) { goto fH_0c; qRRrc: xQqVk: goto dA39M; fH_0c: if (!$encode) { goto xQqVk; } goto oLOR5; oLOR5: $data = json_encode($data); goto qRRrc; dA39M: $this->output->set_content_type("\x61\x70\x70\154\x69\x63\141\x74\151\x6f\x6e\x2f\152\163\157\x6e")->set_output($data); goto h6otx; h6otx: } public function index() { goto hvspd; DJbpp: $data["\x63\x61\164\x61\164\x61\156\x5f\153\145\154\x61\163"] = $this->kelas->getCatatanKelas($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto nhvf8; kMorL: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Yidtn; hvspd: $user = $this->ion_auth->user()->row(); goto dyyA9; BHbwF: $smt = $this->master->getSemesterActive(); goto D_HtP; Yidtn: $data["\147\165\x72\165"] = $guru; goto DJbpp; VCAkw: $this->load->view("\155\145\x6d\142\145\x72\x73\x2f\147\165\x72\x75\x2f\167\x61\x6c\151\x2f\143\x61\x74\x61\164\141\x6e"); goto lDx72; D_HtP: $data["\x74\160"] = $this->dashboard->getTahun(); goto MQlBN; w8KiH: $this->load->view("\x6d\145\x6d\142\145\x72\x73\57\x67\165\x72\165\57\x74\145\x6d\x70\154\141\164\x65\163\57\150\x65\141\x64\145\162", $data); goto VCAkw; dyyA9: $data = ["\165\163\145\162" => $user, "\x6a\165\x64\165\154" => "\x43\141\164\141\x74\141\x6e\x20\127\x61\154\x69\40\113\145\154\141\163", "\x73\x75\142\152\165\144\x75\x6c" => "\x43\x61\x74\141\x74\141\156\x20\113\x65\154\x61\163", "\x73\x65\164\164\151\156\147" => $this->dashboard->getSetting()]; goto vPTFS; nhvf8: $data["\143\141\x74\x61\164\141\156\137\x73\151\163\167\141"] = $this->kelas->getCatatanSiswa($tp->id_tp, $smt->id_smt, $guru->wali_kelas); goto w8KiH; MQlBN: $data["\x74\160\137\x61\x63\164\151\166\145"] = $tp; goto AuO96; lDx72: $this->load->view("\155\145\155\142\145\162\163\x2f\147\x75\x72\165\57\164\x65\x6d\160\154\x61\x74\145\x73\57\146\157\x6f\164\145\x72"); goto HG0vZ; vPTFS: $tp = $this->master->getTahunActive(); goto BHbwF; faZvM: $data["\163\155\164\137\x61\143\164\x69\x76\x65"] = $smt; goto kMorL; AuO96: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto faZvM; HG0vZ: } public function siswa() { goto zOYM0; cHM2G: $smt = $this->master->getSemesterActive(); goto y5Jy2; T3dLm: $data["\x69\x64\137\153\145\154\141\163"] = $id_kelas; goto PigaQ; rSibh: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto OgOg8; y5Jy2: $data["\164\x70"] = $this->dashboard->getTahun(); goto i6bHd; pkrWW: $data["\x73\151\163\167\141"] = $this->master->getSiswaById($id_siswa); goto WBdxA; iTiCE: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto q8oGZ; PigaQ: $this->load->view("\x6d\x65\155\142\x65\x72\x73\x2f\x67\x75\x72\165\57\x74\145\x6d\x70\154\x61\x74\x65\163\57\x68\x65\141\144\x65\x72", $data); goto f59UJ; zOYM0: $id_siswa = $this->input->get("\151\144\137\x73\x69\x73\167\141"); goto WnG1b; DF0FG: $data = ["\165\163\145\x72" => $user, "\x6a\165\144\x75\x6c" => "\x43\x61\x74\141\x74\x61\156\40\123\151\163\x77\141", "\x73\x75\x62\152\x75\144\165\x6c" => "\103\141\164\x61\x74\141\156\x20\123\x69\x73\x77\x61", "\163\145\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto njuMH; OgOg8: $data["\x67\165\x72\x75"] = $guru; goto pkrWW; q8oGZ: $data["\x73\155\164\137\x61\143\x74\x69\x76\x65"] = $smt; goto rSibh; tF_EI: $this->load->view("\x6d\145\155\x62\145\x72\163\57\x67\165\162\x75\57\x74\145\155\x70\154\x61\164\x65\x73\x2f\146\x6f\157\164\145\x72"); goto Vncdg; PddlC: $user = $this->ion_auth->user()->row(); goto DF0FG; WBdxA: $data["\x63\x61\x74\x61\164\x61\156\137\163\151\163\x77\141"] = $this->kelas->getAllCatatanSiswa($id_siswa, $tp->id_tp, $smt->id_smt); goto T3dLm; f59UJ: $this->load->view("\x6d\x65\155\x62\145\162\x73\x2f\x67\165\162\x75\x2f\167\141\154\x69\x2f\x70\x65\162\x73\151\x73\x77\x61"); goto tF_EI; i6bHd: $data["\164\160\137\141\x63\164\151\166\x65"] = $tp; goto iTiCE; njuMH: $tp = $this->master->getTahunActive(); goto cHM2G; WnG1b: $id_kelas = $this->input->get("\x69\x64\137\153\x65\154\x61\x73"); goto PddlC; Vncdg: } public function saveCatatanKelas() { goto Pw5YG; OUQNe: $level = $this->input->post("\x6c\x65\166\145\x6c", true); goto l2L72; qwqiH: $text = $this->input->post("\164\145\170\164", true); goto OUQNe; laJ9z: $smt = $this->dashboard->getSemesterActive(); goto OH76r; l2L72: $data = ["\x69\144\137\164\x70" => $tp->id_tp, "\x69\x64\137\163\155\x74" => $smt->id_smt, "\164\171\160\x65" => "\61", "\154\145\166\145\x6c" => $level, "\151\x64\137\x6b\x65\x6c\141\x73" => $guru->wali_kelas, "\164\145\x78\x74" => $text, "\162\145\x61\144\x69\x6e\147" => serialize([])]; goto SMoTQ; GzAcE: $this->output_json($insert); goto hGNOV; OH76r: $user = $this->ion_auth->user()->row(); goto lKTvY; SMoTQ: $insert = $this->master->create("\153\x65\x6c\141\x73\137\143\141\x74\x61\164\141\x6e\137\167\x61\x6c\151", $data); goto GzAcE; Pw5YG: $tp = $this->dashboard->getTahunActive(); goto laJ9z; lKTvY: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto qwqiH; hGNOV: } public function saveCatatanSiswa() { goto oxfUu; pNIQf: $smt = $this->dashboard->getSemesterActive(); goto V3jS_; gE2jX: $data = ["\x69\x64\x5f\164\160" => $tp->id_tp, "\x69\x64\x5f\x73\x6d\x74" => $smt->id_smt, "\x74\x79\x70\x65" => "\x32", "\154\145\x76\x65\x6c" => $level, "\x69\x64\x5f\153\145\154\x61\163" => $guru->wali_kelas, "\151\x64\x5f\163\151\x73\167\141" => $id_siswa, "\164\x65\170\164" => $text, "\x72\x65\141\x64\x69\156\147" => serialize([])]; goto KEd9t; KEd9t: $insert = $this->master->create("\153\x65\x6c\141\163\x5f\143\141\164\x61\x74\141\156\x5f\167\141\154\x69", $data); goto bQLtH; cPJnV: $id_siswa = $this->input->post("\x69\144\x5f\x73\x69\163\167\x61"); goto JNxvu; KTZQi: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto cPJnV; KpEjB: $level = $this->input->post("\154\145\x76\x65\154", true); goto gE2jX; V3jS_: $user = $this->ion_auth->user()->row(); goto KTZQi; oxfUu: $tp = $this->dashboard->getTahunActive(); goto pNIQf; JNxvu: $text = $this->input->post("\x74\145\170\164", true); goto KpEjB; bQLtH: $this->output_json($insert); goto chi8r; chi8r: } public function updateCatatanKelas() { } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\x65\154\x61\x73\x5f\143\x61\x74\141\x74\x61\x6e\137\x77\x61\x6c\151", $id_catatan, "\151\x64\137\x63\141\x74\141\164\x61\x6e"); $this->output_json($delete); } }
