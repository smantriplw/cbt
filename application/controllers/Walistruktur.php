<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walistruktur extends CI_Controller { public function __construct() { goto mZlQj; JgsQP: $this->load->model("\115\141\x73\x74\145\162\x5f\155\x6f\144\x65\x6c", "\155\141\163\x74\x65\162"); goto o_7AD; i8kpV: $this->load->model("\x44\162\x6f\x70\x64\x6f\x77\x6e\x5f\155\157\144\145\x6c", "\x64\x72\157\x70\144\x6f\x77\x6e"); goto Zl8aw; mZlQj: parent::__construct(); goto NayRm; hCKnE: $this->load->model("\x4b\x65\x6c\141\163\x5f\155\x6f\144\x65\x6c", "\153\x65\x6c\141\x73"); goto i8kpV; o_7AD: $this->load->model("\104\141\163\150\x62\x6f\x61\162\144\x5f\155\x6f\144\145\154", "\144\x61\x73\150\x62\x6f\141\x72\x64"); goto hCKnE; Zl8aw: $this->form_validation->set_error_delimiters('', ''); goto mrpBM; jR0ct: $this->load->library(["\144\x61\164\x61\x74\141\x62\154\x65\163", "\146\x6f\162\x6d\137\166\x61\154\151\x64\141\x74\151\157\156"]); goto JgsQP; V04rk: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\165"))) { goto F7iLM; } goto YbFi2; VKjIj: KHFrN: goto kLUx5; kLUx5: redirect("\141\x75\164\x68"); goto GtRvQ; YbFi2: show_error("\110\x61\x6e\171\141\40\x41\144\x6d\x69\x6e\x69\163\x74\x72\x61\164\157\x72\x20\144\x61\x6e\x20\147\x75\x72\165\40\171\141\x6e\x67\x20\x64\151\x62\145\162\151\x20\x68\141\x6b\40\165\x6e\x74\x75\153\x20\x6d\145\156\x67\x61\153\x73\145\x73\40\150\141\x6c\141\x6d\x61\156\x20\151\156\151\x2c\x20\x3c\x61\x20\150\x72\145\x66\x3d\42" . base_url("\144\141\163\x68\142\x6f\141\162\144") . "\42\76\113\145\x6d\142\x61\154\151\40\153\x65\x20\x6d\145\x6e\x75\40\141\167\141\x6c\x3c\57\141\x3e", 403, "\101\x6b\163\145\x73\x20\x54\145\x72\154\141\162\x61\x6e\x67"); goto zo7H_; GtRvQ: YSmRT: goto jR0ct; zo7H_: F7iLM: goto gS1wF; gS1wF: goto YSmRT; goto VKjIj; NayRm: if (!$this->ion_auth->logged_in()) { goto KHFrN; } goto V04rk; mrpBM: } public function output_json($data, $encode = true) { goto tC6BF; WkRDm: $this->output->set_content_type("\x61\x70\x70\x6c\x69\x63\141\164\x69\157\156\x2f\x6a\x73\157\156")->set_output($data); goto zK8s9; A8xiu: $data = json_encode($data); goto qk5LS; tC6BF: if (!$encode) { goto WxgAW; } goto A8xiu; qk5LS: WxgAW: goto WkRDm; zK8s9: } public function index() { goto N9BVz; ErvW_: F_h2j: goto qQq2t; OMdlP: $this->load->view("\x6d\145\155\x62\145\x72\x73\57\x67\x75\x72\x75\x2f\x74\x65\x6d\160\x6c\x61\164\x65\x73\x2f\x66\157\x6f\164\145\x72"); goto KydAq; lluQ9: goto F_h2j; goto DKyWe; kqprD: $data["\x74\160"] = $this->dashboard->getTahun(); goto xyGp0; vu0qU: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto T0Zq0; NyF3f: $siswas[''] = "\120\x69\154\151\150\40\x53\x69\x73\x77\x61"; goto GcQss; H3tRA: $data["\163\x6d\x74\x5f\141\x63\x74\x69\166\145"] = $smt; goto vu0qU; bDAV1: $tp = $this->master->getTahunActive(); goto V2LmU; xyGp0: $data["\164\x70\x5f\x61\x63\x74\151\166\x65"] = $tp; goto hz59J; B_5YE: $siswa = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto NyF3f; rNWIU: $data["\x69\x64\x5f\x6b\145\x6c\x61\163"] = $guru->wali_kelas; goto rWVem; QGuj3: if ($struktur == null) { goto NIeT4; } goto fuoRq; N9BVz: $user = $this->ion_auth->user()->row(); goto xAHKy; V2LmU: $smt = $this->master->getSemesterActive(); goto kqprD; hz59J: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto H3tRA; xcuqO: $data["\147\x75\162\165\x73"] = $this->dropdown->getAllGuru(); goto B_5YE; Q2c0k: $data["\163\x69\163\x77\x61\163"] = $siswas; goto rNWIU; GcQss: foreach ($siswa as $key => $value) { $siswas[$value->id_siswa] = $value->nama; ZrBDm: } goto EYHkz; EYHkz: mnnAK: goto Q2c0k; fuoRq: $data["\163\x74\162\165\x6b\x74\165\x72"] = $struktur; goto lluQ9; xAHKy: $data = ["\x75\x73\145\x72" => $user, "\152\x75\144\x75\x6c" => "\x53\164\162\x75\x6b\x74\165\x72\x20\x4f\162\147\141\x6e\151\163\x61\x73\x69", "\x73\165\x62\x6a\165\x64\165\154" => "\x53\x74\x72\x75\x6b\164\x75\x72\40\x4f\x72\147\141\x6e\x69\x73\141\163\x69", "\x73\x65\164\x74\151\156\x67" => $this->dashboard->getSetting()]; goto bDAV1; T0Zq0: $struktur = $this->kelas->getStrukturKelas($guru->wali_kelas); goto QGuj3; DKyWe: NIeT4: goto rGgLt; qQq2t: $data["\147\165\162\165"] = $guru; goto xcuqO; rGgLt: $data["\163\x74\x72\165\x6b\x74\x75\162"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto ErvW_; QhJOW: $this->load->view("\x6d\145\x6d\x62\x65\x72\163\x2f\x67\x75\x72\x75\57\167\x61\x6c\x69\57\x73\164\x72\x75\153\164\x75\162"); goto OMdlP; rWVem: $this->load->view("\x6d\145\x6d\142\145\162\x73\57\147\x75\x72\x75\x2f\164\x65\x6d\160\x6c\x61\164\145\163\x2f\x68\x65\x61\144\145\x72", $data); goto QhJOW; KydAq: } public function save() { goto ELKdw; XMzh8: $insert = $this->db->replace("\x6b\145\x6c\141\x73\x5f\163\x74\x72\x75\153\x74\x75\x72", $data); goto j1ghn; ELKdw: $data = ["\151\144\137\153\145\x6c\141\163" => $this->input->post("\151\144\x5f\153\145\x6c\x61\x73"), "\x6b\145\x74\165\141" => $this->input->post("\x6b\145\164\165\141"), "\167\141\x6b\x69\154\137\x6b\145\164\x75\x61" => $this->input->post("\x77\x61\x6b\x69\x6c\x5f\x6b\x65\x74\165\141"), "\163\x65\x6b\162\145\164\141\162\x69\x73\x5f\61" => $this->input->post("\x73\145\153\x72\x65\x74\x61\162\151\x73\x5f\61"), "\x73\145\153\x72\x65\x74\x61\162\151\163\x5f\x32" => $this->input->post("\163\x65\x6b\x72\x65\164\x61\162\151\163\137\x32"), "\142\145\156\144\x61\x68\141\x72\x61\x5f\x31" => $this->input->post("\x62\x65\156\144\x61\150\x61\162\141\x5f\61"), "\142\145\x6e\x64\141\150\141\162\x61\137\62" => $this->input->post("\142\x65\x6e\x64\141\x68\x61\x72\x61\137\x32"), "\163\x69\145\x5f\x65\153\163\164\x72\141\x6b\x75\162\151\x6b\x75\154\145\162" => $this->input->post("\163\x69\145\x5f\145\153\163\164\x72\141\153\165\x72\x69\x6b\x75\154\x65\x72"), "\163\151\145\137\x75\x70\141\x63\141\x72\141" => $this->input->post("\163\x69\145\137\165\x70\141\143\141\x72\x61"), "\163\151\x65\x5f\157\x6c\141\x68\x72\x61\147\x61" => $this->input->post("\x73\x69\x65\x5f\157\154\x61\x68\162\141\x67\x61"), "\163\151\x65\137\153\x65\x61\147\141\x6d\x61\141\156" => $this->input->post("\x73\x69\145\137\x6b\145\x61\147\141\x6d\x61\141\x6e"), "\163\151\145\137\153\145\141\x6d\141\x6e\141\x6e" => $this->input->post("\x73\x69\145\x5f\x6b\145\x61\x6d\141\156\141\156"), "\163\x69\x65\x5f\x6b\145\x74\x65\162\164\151\x62\x61\156" => $this->input->post("\x73\151\145\137\153\145\x74\x65\162\x74\151\142\x61\x6e"), "\163\x69\x65\137\x6b\145\142\145\x72\x73\x69\150\141\156" => $this->input->post("\x73\151\145\137\x6b\145\142\x65\x72\163\151\150\141\x6e"), "\163\x69\145\x5f\153\145\151\x6e\x64\141\x68\141\x6e" => $this->input->post("\163\x69\x65\137\153\x65\151\156\144\x61\150\141\x6e"), "\x73\x69\145\137\153\145\x73\145\150\x61\x74\x61\x6e" => $this->input->post("\x73\x69\x65\x5f\153\145\x73\x65\x68\141\x74\x61\x6e"), "\x73\151\145\137\x6b\145\153\145\154\x75\x61\162\147\x61\141\156" => $this->input->post("\x73\x69\145\137\x6b\x65\x6b\145\154\165\x61\x72\x67\x61\141\156"), "\163\x69\145\137\x68\x75\x6d\141\163" => $this->input->post("\163\151\145\137\x68\x75\155\141\x73")]; goto XMzh8; j1ghn: $this->output_json($insert); goto O0qZp; O0qZp: } }
