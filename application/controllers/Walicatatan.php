<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walicatatan extends CI_Controller { public function __construct() { goto ddzjj; awn1C: $this->load->model("\104\141\163\150\x62\157\x61\162\144\137\155\x6f\144\145\154", "\x64\141\163\x68\142\x6f\141\x72\x64"); goto CrmbQ; CrmbQ: $this->load->model("\x4b\145\x6c\x61\x73\137\x6d\157\144\x65\x6c", "\153\145\154\x61\163"); goto HeweJ; TivgF: goto CmVD2; goto ITRCo; HeweJ: $this->load->model("\x44\x72\157\x70\144\x6f\x77\156\x5f\155\x6f\x64\x65\x6c", "\x64\x72\157\x70\x64\157\x77\156"); goto fuAuS; ddzjj: parent::__construct(); goto gIx5Z; wR6Hs: CmVD2: goto TtUKD; gIx5Z: if (!$this->ion_auth->logged_in()) { goto Pfbxf; } goto kU28q; fuAuS: $this->form_validation->set_error_delimiters('', ''); goto buQ2R; LjsVZ: show_error("\x48\x61\156\171\141\x20\101\x64\155\x69\156\151\163\164\162\x61\164\157\x72\x20\x64\x61\156\40\147\165\x72\165\40\x79\x61\x6e\147\40\x64\151\142\145\x72\151\x20\150\x61\153\x20\165\156\x74\x75\153\40\x6d\x65\x6e\147\x61\153\163\x65\163\40\x68\141\x6c\x61\155\x61\x6e\40\x69\x6e\151\54\x20\74\x61\40\150\162\x65\146\x3d\x22" . base_url("\144\141\163\150\142\x6f\x61\x72\144") . "\42\x3e\113\x65\155\142\x61\x6c\x69\40\153\145\x20\155\145\156\x75\x20\141\167\x61\154\74\57\141\76", 403, "\x41\153\163\145\x73\40\x54\145\x72\154\x61\x72\x61\156\x67"); goto mNaxE; TtUKD: $this->load->library(["\x64\x61\x74\x61\x74\141\142\x6c\145\x73", "\146\157\x72\155\137\x76\141\154\x69\x64\141\x74\151\x6f\x6e"]); goto m_vyL; ITRCo: Pfbxf: goto bGYwS; bGYwS: redirect("\x61\165\x74\150"); goto wR6Hs; mNaxE: lgzan: goto TivgF; kU28q: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\165"))) { goto lgzan; } goto LjsVZ; m_vyL: $this->load->model("\x4d\x61\163\164\x65\162\137\x6d\157\144\x65\x6c", "\155\141\x73\x74\145\x72"); goto awn1C; buQ2R: } public function output_json($data, $encode = true) { goto QWt_5; my0Yr: $data = json_encode($data); goto kG66y; QWt_5: if (!$encode) { goto UtpW2; } goto my0Yr; kG66y: UtpW2: goto dcZVP; dcZVP: $this->output->set_content_type("\x61\x70\160\154\151\x63\x61\164\151\x6f\156\57\x6a\x73\x6f\x6e")->set_output($data); goto BzD9r; BzD9r: } public function index() { goto lvUPn; qEf9q: $this->load->view("\x6d\x65\155\x62\x65\162\163\57\147\x75\162\165\57\164\145\x6d\160\x6c\141\x74\145\x73\x2f\146\157\x6f\x74\x65\x72"); goto rYb2P; wV5_H: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto zy9Kw; uhLte: $data["\143\x61\164\141\164\x61\156\137\x73\x69\x73\167\141"] = $this->kelas->getCatatanSiswa($tp->id_tp, $smt->id_smt, $guru->wali_kelas); goto jBZIQ; abWX0: $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\165\154" => "\x43\x61\x74\x61\164\141\156\40\127\141\x6c\151\x20\113\145\154\141\163", "\x73\165\x62\152\165\144\165\x6c" => "\103\x61\x74\141\164\141\156\40\113\x65\x6c\141\x73", "\x73\145\164\x74\151\156\x67" => $this->dashboard->getSetting()]; goto Tl6WL; Tl6WL: $tp = $this->master->getTahunActive(); goto O0O3v; qgfyM: $this->load->view("\155\x65\155\142\145\x72\163\57\147\165\162\x75\x2f\167\141\x6c\x69\x2f\x63\141\164\x61\x74\x61\156"); goto qEf9q; tIa2s: $data["\x73\x6d\x74\x5f\x61\x63\164\x69\x76\145"] = $smt; goto wV5_H; zy9Kw: $data["\147\x75\162\x75"] = $guru; goto pqdjt; aBINd: $data["\x74\160"] = $this->dashboard->getTahun(); goto HkJ2i; pqdjt: $data["\143\x61\x74\x61\164\x61\x6e\x5f\x6b\x65\x6c\x61\x73"] = $this->kelas->getCatatanKelas($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto uhLte; RUyPZ: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto tIa2s; lvUPn: $user = $this->ion_auth->user()->row(); goto abWX0; HkJ2i: $data["\164\160\137\x61\143\164\x69\x76\x65"] = $tp; goto RUyPZ; O0O3v: $smt = $this->master->getSemesterActive(); goto aBINd; jBZIQ: $this->load->view("\155\145\155\142\x65\x72\x73\57\147\x75\x72\x75\x2f\164\x65\x6d\x70\x6c\x61\x74\145\x73\x2f\x68\x65\141\x64\145\162", $data); goto qgfyM; rYb2P: } public function siswa() { goto fkyXD; fkyXD: $id_siswa = $this->input->get("\151\x64\x5f\163\151\x73\167\141"); goto DbJsq; aixG4: $data = ["\165\x73\x65\x72" => $user, "\152\165\144\165\154" => "\x43\141\x74\x61\x74\x61\x6e\x20\123\151\x73\x77\141", "\163\x75\x62\x6a\x75\144\165\154" => "\x43\x61\164\141\164\141\x6e\40\123\151\x73\167\141", "\x73\145\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto dUK7l; nB93V: $user = $this->ion_auth->user()->row(); goto aixG4; ayxsQ: $data["\163\x6d\x74\137\x61\x63\x74\151\166\145"] = $smt; goto qSeZT; wLpI9: $this->load->view("\155\145\x6d\142\145\162\163\x2f\147\165\162\x75\57\164\145\x6d\160\x6c\141\164\145\x73\57\x68\145\141\144\145\x72", $data); goto H3UvD; DKjT6: $data["\147\x75\162\165"] = $guru; goto Uyp6X; Uyp6X: $data["\163\151\163\x77\141"] = $this->master->getSiswaById($id_siswa); goto PtItz; p09gU: $data["\164\x70\x5f\x61\143\164\x69\166\145"] = $tp; goto rk69N; UF_mQ: $this->load->view("\155\x65\155\x62\145\162\163\x2f\x67\x75\x72\165\57\164\x65\x6d\x70\x6c\141\164\145\163\57\x66\x6f\157\164\x65\162"); goto RAttD; DbJsq: $id_kelas = $this->input->get("\x69\x64\137\x6b\x65\x6c\141\x73"); goto nB93V; rk69N: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto ayxsQ; Hcae5: $smt = $this->master->getSemesterActive(); goto bITUK; LzKIQ: $data["\x69\x64\x5f\x6b\145\154\x61\163"] = $id_kelas; goto wLpI9; PtItz: $data["\143\141\164\141\164\141\x6e\137\x73\x69\163\167\141"] = $this->kelas->getAllCatatanSiswa($id_siswa, $tp->id_tp, $smt->id_smt); goto LzKIQ; bITUK: $data["\164\x70"] = $this->dashboard->getTahun(); goto p09gU; dUK7l: $tp = $this->master->getTahunActive(); goto Hcae5; H3UvD: $this->load->view("\x6d\x65\x6d\142\145\x72\163\57\147\x75\162\x75\57\x77\141\154\151\x2f\160\145\162\x73\x69\163\167\x61"); goto UF_mQ; qSeZT: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DKjT6; RAttD: } public function saveCatatanKelas() { goto DlhzZ; mV4fJ: $data = ["\151\144\x5f\164\160" => $tp->id_tp, "\151\144\137\163\x6d\x74" => $smt->id_smt, "\164\171\160\145" => "\61", "\x6c\x65\166\x65\154" => $level, "\x69\144\x5f\153\x65\x6c\141\163" => $guru->wali_kelas, "\x74\x65\x78\164" => $text, "\162\145\x61\144\x69\x6e\x67" => serialize([])]; goto Z_HIN; h_6OK: $text = $this->input->post("\x74\x65\170\164", true); goto YWI2b; Z_HIN: $insert = $this->master->create("\153\x65\x6c\x61\x73\137\x63\141\164\x61\164\x61\x6e\x5f\167\x61\x6c\x69", $data); goto h_nB3; Dful7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto h_6OK; YWI2b: $level = $this->input->post("\154\x65\x76\145\154", true); goto mV4fJ; DlhzZ: $tp = $this->dashboard->getTahunActive(); goto KdHi1; UzBZJ: $user = $this->ion_auth->user()->row(); goto Dful7; KdHi1: $smt = $this->dashboard->getSemesterActive(); goto UzBZJ; h_nB3: $this->output_json($insert); goto Z7hJU; Z7hJU: } public function saveCatatanSiswa() { goto aoWcD; FiB03: $insert = $this->master->create("\x6b\145\154\x61\163\x5f\143\141\164\x61\164\x61\x6e\x5f\167\x61\x6c\151", $data); goto eS113; DukR0: $id_siswa = $this->input->post("\x69\144\x5f\163\151\163\x77\141"); goto JunzE; sGaQc: $level = $this->input->post("\154\145\x76\x65\x6c", true); goto qSqkM; aoWcD: $tp = $this->dashboard->getTahunActive(); goto aMKTi; aMKTi: $smt = $this->dashboard->getSemesterActive(); goto O4WN2; JunzE: $text = $this->input->post("\x74\145\x78\x74", true); goto sGaQc; eS113: $this->output_json($insert); goto GQiRv; qSqkM: $data = ["\x69\x64\x5f\x74\x70" => $tp->id_tp, "\151\144\x5f\163\155\x74" => $smt->id_smt, "\164\x79\x70\145" => "\x32", "\154\x65\166\x65\x6c" => $level, "\151\x64\x5f\153\x65\x6c\x61\163" => $guru->wali_kelas, "\x69\x64\x5f\163\151\163\167\141" => $id_siswa, "\164\x65\x78\164" => $text, "\162\x65\141\144\x69\156\147" => serialize([])]; goto FiB03; O4WN2: $user = $this->ion_auth->user()->row(); goto gn1FZ; gn1FZ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DukR0; GQiRv: } public function updateCatatanKelas() { } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\145\154\x61\163\137\x63\x61\x74\141\x74\x61\156\x5f\x77\141\154\x69", $id_catatan, "\x69\144\x5f\x63\141\164\x61\164\141\156"); $this->output_json($delete); } }
