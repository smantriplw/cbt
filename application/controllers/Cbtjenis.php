<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjenis extends CI_Controller { public function __construct() { goto ldTlx; PdW6X: S8Bl5: goto UkvpK; gskY8: show_error("\110\141\156\171\x61\x20\101\x64\x6d\151\156\x69\163\164\162\x61\164\x6f\162\x20\171\141\x6e\147\x20\144\151\x62\x65\x72\x69\x20\x68\x61\153\x20\165\x6e\x74\x75\153\x20\155\145\156\147\x61\x6b\163\145\x73\40\x68\141\x6c\141\155\141\x6e\x20\x69\x6e\151\54\x20\x3c\x61\x20\150\x72\145\146\75\x22" . base_url("\x64\141\x73\150\142\x6f\141\x72\144") . "\42\76\x4b\145\x6d\142\x61\x6c\x69\x20\x6b\x65\40\x6d\x65\x6e\x75\x20\141\x77\x61\x6c\x3c\x2f\141\x3e", 403, "\x41\153\163\145\163\40\x54\145\x72\154\x61\x72\x61\156\x67"); goto QQxgs; v0GRU: goto k_AWh; goto PdW6X; S7LIH: $this->load->model("\x4c\157\x67\x5f\x6d\157\144\x65\x6c", "\154\x6f\x67\x67\x69\156\x67"); goto JFDZ8; Qw_Va: if ($this->ion_auth->is_admin()) { goto fsVne; } goto gskY8; KpQGG: $this->load->library(["\x64\141\x74\141\x74\141\142\154\145\163", "\x66\x6f\162\x6d\x5f\166\141\x6c\151\x64\141\164\x69\x6f\156"]); goto SUJ0R; UkvpK: redirect("\x61\165\x74\150"); goto VLYVh; ldTlx: parent::__construct(); goto nxgS7; SUJ0R: $this->load->model("\x4d\x61\x73\164\x65\162\x5f\155\157\144\x65\x6c", "\155\x61\163\x74\x65\162"); goto u2Rp2; QQxgs: fsVne: goto v0GRU; u2Rp2: $this->load->model("\x44\141\x73\x68\x62\157\x61\162\x64\137\x6d\157\x64\x65\154", "\144\141\163\x68\142\157\x61\162\x64"); goto oHq03; oHq03: $this->load->model("\x43\x62\164\137\x6d\x6f\x64\145\154", "\143\x62\x74"); goto S7LIH; VLYVh: k_AWh: goto KpQGG; JFDZ8: $this->form_validation->set_error_delimiters('', ''); goto VhJjV; nxgS7: if (!$this->ion_auth->logged_in()) { goto S8Bl5; } goto Qw_Va; VhJjV: } public function output_json($data, $encode = true) { goto dbMbc; sZ366: TYfrm: goto Fm7kL; dbMbc: if (!$encode) { goto TYfrm; } goto Wcsky; Fm7kL: $this->output->set_content_type("\141\x70\160\154\x69\x63\141\164\151\157\156\x2f\x6a\163\157\156")->set_output($data); goto pTmRk; Wcsky: $data = json_encode($data); goto sZ366; pTmRk: } public function index() { goto Kjjcd; Kjjcd: $user = $this->ion_auth->user()->row(); goto jrHiZ; eQWga: $data["\x74\160\x5f\141\143\x74\151\x76\145"] = $this->dashboard->getTahunActive(); goto s0mJi; dHXCQ: $this->load->view("\137\164\x65\x6d\160\x6c\141\164\x65\163\x2f\144\141\x73\150\x62\157\141\x72\144\57\137\x68\x65\x61\144\145\162", $data); goto NfC89; jrHiZ: $data = ["\x75\x73\x65\x72" => $user, "\152\165\144\165\154" => "\112\x65\156\x69\163\x20\125\152\x69\x61\156", "\163\165\x62\152\x75\144\x75\154" => "\104\141\164\141\40\112\145\156\x69\163\x20\125\x6a\x69\x61\156", "\x70\162\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto xF3KV; vlJjN: $data["\163\x6d\164\137\141\143\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto dHXCQ; s0mJi: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto vlJjN; NfC89: $this->load->view("\x63\142\164\x2f\152\145\x6e\151\163\x2f\x64\141\164\141"); goto hqnGQ; hqnGQ: $this->load->view("\137\164\x65\x6d\160\154\141\164\145\x73\x2f\x64\x61\x73\x68\x62\157\x61\x72\x64\x2f\x5f\146\x6f\157\x74\x65\162"); goto G9yIo; xF3KV: $data["\164\160"] = $this->dashboard->getTahun(); goto eQWga; G9yIo: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function add() { goto maKSq; jri1F: $data["\163\x74\141\164\x75\x73"] = $insert; goto aD4Qn; maKSq: $insert = ["\156\x61\x6d\141\x5f\152\x65\x6e\151\163" => $this->input->post("\x6e\x61\155\x61\x5f\152\145\156\151\163", true), "\153\157\144\145\x5f\152\145\156\x69\x73" => $this->input->post("\x6b\x6f\x64\x65\137\152\x65\156\x69\x73", true)]; goto Ir8ar; aD4Qn: $this->output_json($data); goto ovuKE; Ir8ar: $this->master->create("\x63\x62\164\137\152\x65\156\151\x73", $insert, false); goto jri1F; ovuKE: } public function update() { $data = $this->cbt->updateJenis(); $this->output->set_content_type("\x61\x70\160\154\151\x63\141\164\151\x6f\156\57\152\x73\x6f\x6e")->set_output($data); } public function delete() { goto J1D59; SrAQ3: $this->output_json(["\x73\x74\x61\x74\165\163" => true, "\x74\x6f\x74\141\154" => count($chk)]); goto yrd2E; yrd2E: EqBee: goto ijUak; wklqE: $this->output_json(["\163\164\141\x74\165\163" => false]); goto gl9l8; ijUak: goto D6w31; goto TfVVY; zhEtZ: if (!$this->master->delete("\x63\x62\164\x5f\152\145\x6e\151\163", $chk, "\151\144\x5f\152\145\x6e\x69\163")) { goto EqBee; } goto SrAQ3; gl9l8: D6w31: goto NTKFS; ZBzvy: if (!$chk) { goto h648B; } goto zhEtZ; TfVVY: h648B: goto wklqE; J1D59: $chk = $this->input->post("\x63\150\145\x63\x6b\145\144", true); goto ZBzvy; NTKFS: } public function saveLog($type, $desc) { $user = $this->ion_auth->user()->row(); $this->logging->createLog($user->id, $type, $desc); } }
