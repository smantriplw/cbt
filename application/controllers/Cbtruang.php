<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtruang extends CI_Controller { public function __construct() { goto omgUM; G7jw9: $this->form_validation->set_error_delimiters('', ''); goto MR0Cg; oO0e5: $this->load->model("\x4d\x61\163\164\x65\x72\137\x6d\x6f\144\145\x6c", "\x6d\x61\163\164\x65\162"); goto wyFE0; kQXUV: show_error("\110\141\156\x79\141\x20\x41\144\155\151\156\x69\163\x74\162\x61\x74\x6f\162\x20\171\x61\x6e\147\x20\144\151\142\x65\x72\151\40\x68\x61\153\40\165\x6e\164\x75\x6b\x20\155\145\x6e\147\141\153\163\145\163\x20\x68\141\154\x61\x6d\141\156\40\x69\156\x69\x2c\x20\74\141\40\x68\162\145\146\75\42" . base_url("\x64\141\x73\150\142\x6f\141\162\x64") . "\42\76\x4b\145\155\142\x61\x6c\151\x20\153\145\x20\155\145\x6e\165\x20\x61\167\141\154\74\57\141\76", 403, "\x41\153\163\145\163\40\x54\145\162\x6c\x61\x72\141\x6e\x67"); goto gDojt; WLTUZ: FwY4e: goto qpfVS; uFTlr: goto GiP57; goto WLTUZ; gC4wR: GiP57: goto TBHL3; qpfVS: redirect("\141\165\164\x68"); goto gC4wR; twkzu: if (!$this->ion_auth->logged_in()) { goto FwY4e; } goto aEchJ; TBHL3: $this->load->library(["\144\141\164\141\164\x61\142\x6c\x65\163", "\146\157\x72\x6d\137\166\141\154\151\144\x61\164\x69\x6f\x6e"]); goto oO0e5; XoLs4: $this->load->model("\103\142\164\137\155\157\144\145\x6c", "\143\x62\x74"); goto G7jw9; aEchJ: if ($this->ion_auth->is_admin()) { goto YOoda; } goto kQXUV; omgUM: parent::__construct(); goto twkzu; gDojt: YOoda: goto uFTlr; wyFE0: $this->load->model("\x44\141\x73\x68\x62\x6f\141\x72\x64\x5f\x6d\x6f\144\145\154", "\144\x61\163\x68\142\157\x61\x72\x64"); goto XoLs4; MR0Cg: } public function output_json($data, $encode = true) { goto M6EF0; M6EF0: if (!$encode) { goto KELYo; } goto tQsc9; o9mZG: $this->output->set_content_type("\141\160\160\x6c\x69\x63\141\164\x69\x6f\156\x2f\x6a\163\157\156")->set_output($data); goto oOV2y; tQsc9: $data = json_encode($data); goto tV8VX; tV8VX: KELYo: goto o9mZG; oOV2y: } public function index() { goto mEA7v; ulDdI: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto SPWRz; wji5P: $data["\164\x70"] = $this->dashboard->getTahun(); goto i0w1I; sqnyo: $this->load->view("\x63\x62\164\57\162\x75\x61\x6e\x67\57\x64\x61\164\141"); goto hmJ95; SPWRz: $data["\163\x6d\x74\137\x61\143\x74\x69\x76\145"] = $this->dashboard->getSemesterActive(); goto fFaS7; i0w1I: $data["\x74\160\137\141\143\164\151\166\145"] = $this->dashboard->getTahunActive(); goto ulDdI; pioKo: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\144\165\154" => "\122\x75\x61\x6e\x67\40\125\x6a\x69\x61\x6e", "\163\x75\x62\152\165\144\x75\154" => "\x44\x61\x74\x61\x20\x52\165\141\x6e\147\40\x55\152\x69\141\x6e", "\160\x72\157\x66\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\164\164\x69\156\147" => $this->dashboard->getSetting()]; goto wji5P; mEA7v: $user = $this->ion_auth->user()->row(); goto pioKo; fFaS7: $this->load->view("\x5f\164\145\x6d\160\154\141\164\145\x73\57\x64\x61\x73\x68\142\157\141\162\144\57\137\150\x65\141\x64\x65\x72", $data); goto sqnyo; hmJ95: $this->load->view("\137\164\x65\x6d\x70\154\x61\x74\145\163\x2f\144\x61\163\150\x62\157\x61\x72\144\57\x5f\146\x6f\x6f\x74\x65\162"); goto ME7Ye; ME7Ye: } public function add() { goto TeLkn; TeLkn: $insert = ["\156\x61\155\x61\137\162\165\141\x6e\147" => $this->input->post("\156\x61\155\141\137\162\x75\141\156\x67", true), "\153\x6f\x64\145\137\x72\165\x61\x6e\147" => $this->input->post("\x6b\157\144\x65\137\x72\x75\141\156\147", true)]; goto U819B; gXPuf: $this->output_json($data); goto NNQht; U819B: $this->master->create("\143\142\164\137\x72\x75\141\x6e\147", $insert, false); goto XdnoW; XdnoW: $data["\x73\x74\x61\x74\x75\163"] = $insert; goto gXPuf; NNQht: } public function update() { $data = $this->cbt->updateRuang(); $this->output->set_content_type("\141\160\160\154\x69\143\x61\164\x69\x6f\x6e\x2f\x6a\x73\157\156")->set_output($data); } public function delete() { goto ELR5H; AyceH: if (!$this->master->delete("\143\142\x74\x5f\x72\165\x61\156\x67", $chk, "\x69\144\137\162\x75\141\156\x67")) { goto vrPLP; } goto MofWC; nnYxm: iOxbY: goto YfXXo; dMkY0: ZV63c: goto xa_zJ; ByDPH: vrPLP: goto LpTQV; LpTQV: goto iOxbY; goto dMkY0; U3jnR: if (!$chk) { goto ZV63c; } goto AyceH; ELR5H: $chk = $this->input->post("\143\x68\x65\143\153\145\144", true); goto U3jnR; MofWC: $this->output_json(["\x73\164\x61\x74\x75\163" => true, "\164\157\x74\x61\x6c" => count($chk)]); goto ByDPH; xa_zJ: $this->output_json(["\x73\164\x61\x74\165\163" => false]); goto nnYxm; YfXXo: } }
