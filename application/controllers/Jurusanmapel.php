<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\x45\x50\101\124\x48") or exit("\x4e\x6f\40\144\x69\x72\145\143\x74\40\x73\143\162\x69\160\164\x20\x61\143\x63\145\x73\163\40\141\154\154\157\167\145\x64"); class JurusanMapel extends CI_Controller { public function __construct() { goto crOxa; YdCYs: if (!$this->ion_auth->logged_in()) { goto n2Rfz; } goto PLyQ0; tCKi_: $this->load->model("\115\141\163\164\145\162\137\x6d\x6f\144\x65\154", "\x6d\x61\x73\x74\145\x72"); goto rV5SO; iZXiU: MpGo5: goto ONP8G; r_iUy: redirect("\141\x75\x74\150"); goto iZXiU; HO3xk: goto MpGo5; goto G5hEN; RjRsN: EvU04: goto HO3xk; ONP8G: $this->load->library(["\x64\x61\164\141\x74\141\142\x6c\145\x73", "\146\x6f\x72\x6d\x5f\166\141\154\x69\x64\x61\164\151\x6f\156"]); goto tCKi_; rV5SO: $this->form_validation->set_error_delimiters('', ''); goto ic3rb; Yo5u3: show_error("\110\x61\x6e\171\x61\40\101\x64\155\x69\x6e\151\163\164\x72\141\x74\x6f\162\40\x79\141\156\147\40\144\151\x62\x65\x72\151\x20\150\x61\153\40\165\156\164\165\153\x20\155\x65\156\147\x61\x6b\x73\145\x73\40\x68\x61\x6c\x61\x6d\x61\156\x20\151\156\151\x2c\x20\x3c\141\40\x68\162\145\146\x3d\42" . base_url("\x64\x61\163\150\x62\x6f\141\x72\144") . "\42\76\x4b\x65\x6d\x62\141\154\151\40\153\145\40\x6d\x65\x6e\165\x20\141\167\x61\154\x3c\57\141\x3e", 403, "\x41\153\x73\145\x73\40\x54\145\162\x6c\x61\162\x61\x6e\147"); goto RjRsN; G5hEN: n2Rfz: goto r_iUy; crOxa: parent::__construct(); goto YdCYs; PLyQ0: if ($this->ion_auth->is_admin()) { goto EvU04; } goto Yo5u3; ic3rb: } public function output_json($data, $encode = true) { goto TxpE9; TxpE9: if (!$encode) { goto FmGwm; } goto wQVAJ; IaQ1H: $this->output->set_content_type("\141\x70\x70\x6c\151\x63\x61\x74\x69\157\156\57\152\x73\x6f\x6e")->set_output($data); goto tJLlQ; bvZRn: FmGwm: goto IaQ1H; wQVAJ: $data = json_encode($data); goto bvZRn; tJLlQ: } public function index() { goto TU8y6; VT5pd: $this->load->view("\x72\x65\154\x61\163\x69\x2f\x6a\165\x72\165\x73\x61\156\x6d\141\160\x65\154\57\144\141\x74\x61"); goto SRDI5; VXgcP: $this->load->view("\x5f\164\145\155\160\x6c\141\x74\145\x73\x2f\x64\x61\x73\150\142\157\141\162\x64\57\x5f\150\x65\141\x64\x65\x72\56\160\150\160", $data); goto VT5pd; SRDI5: $this->load->view("\137\164\145\155\x70\x6c\x61\x74\145\163\x2f\x64\x61\x73\150\142\x6f\x61\x72\x64\57\137\x66\157\157\164\x65\162\x2e\x70\x68\160"); goto mLFAc; TU8y6: $data = ["\x75\x73\x65\x72" => $this->ion_auth->user()->row(), "\152\165\x64\x75\x6c" => "\x4a\165\x72\x75\x73\x61\156\x20\115\141\x74\x61\x20\x4b\x75\x6c\151\x61\x68", "\x73\165\142\152\x75\144\x75\154" => "\104\141\x74\141\40\x4a\x75\162\x75\163\141\156\40\x4d\141\164\141\x20\113\165\154\x69\141\150"]; goto VXgcP; mLFAc: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto HkTcE; HkTcE: $data = ["\x75\163\x65\x72" => $this->ion_auth->user()->row(), "\x6a\165\x64\x75\154" => "\124\141\x6d\142\141\x68\x20\x4a\165\x72\x75\163\x61\x6e\40\115\x61\164\141\40\x4b\x75\154\x69\x61\x68", "\x73\x75\x62\x6a\165\144\165\154" => "\124\141\x6d\x62\x61\x68\x20\104\141\x74\x61\x20\x4a\165\162\165\163\x61\x6e\x20\x4d\141\x74\x61\x20\x4b\165\154\x69\x61\150", "\x6d\x61\160\x65\x6c" => $this->master->getMapel()]; goto fiLll; eZrqc: $this->load->view("\x72\145\154\141\163\151\x2f\152\165\162\165\x73\x61\x6e\x6d\141\x70\145\x6c\x2f\141\144\x64"); goto e2JZv; e2JZv: $this->load->view("\137\x74\145\x6d\160\154\141\x74\x65\163\x2f\x64\x61\x73\x68\x62\x6f\141\x72\144\x2f\x5f\146\x6f\x6f\x74\145\162\56\160\x68\x70"); goto RUIqp; fiLll: $this->load->view("\137\x74\145\155\160\x6c\x61\164\145\163\x2f\x64\x61\x73\150\x62\x6f\141\162\144\57\x5f\150\145\x61\x64\x65\x72\56\160\x68\x70", $data); goto eZrqc; RUIqp: } public function edit($id) { goto m97NZ; lbkkt: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\164\145\163\x2f\x64\x61\163\150\142\x6f\141\162\144\x2f\x5f\x68\145\x61\x64\x65\162\x2e\160\x68\x70", $data); goto b1ld8; dZi6V: $this->load->view("\137\x74\x65\155\160\x6c\x61\x74\145\163\x2f\x64\x61\x73\x68\x62\157\x61\162\144\57\137\x66\x6f\x6f\164\x65\162\x2e\160\150\x70"); goto QfgI4; b1ld8: $this->load->view("\x72\145\x6c\x61\163\x69\57\x6a\x75\x72\x75\x73\141\x6e\x6d\x61\160\x65\154\57\x65\144\151\164"); goto dZi6V; m97NZ: $data = ["\x75\x73\x65\x72" => $this->ion_auth->user()->row(), "\x6a\x75\x64\165\x6c" => "\x45\x64\x69\164\40\x4a\x75\162\x75\x73\x61\156\40\115\x61\164\x61\40\113\165\x6c\x69\x61\150", "\x73\x75\x62\152\165\144\x75\154" => "\105\144\x69\x74\x20\x44\x61\164\x61\x20\112\165\162\165\x73\x61\156\40\115\141\164\141\x20\x4b\165\x6c\x69\141\150", "\155\x61\160\x65\x6c" => $this->master->getMapelById($id, true), "\x69\x64\x5f\x6d\x61\x70\x65\154" => $id, "\141\154\x6c\137\x6a\x75\x72\165\x73\x61\x6e" => $this->master->getAllJurusan(), "\152\x75\162\165\x73\141\x6e" => $this->master->getJurusanByIdMapel($id)]; goto lbkkt; QfgI4: } public function save() { goto GKQme; bFKA1: $jurusan_id = $this->input->post("\x6a\x75\162\165\163\x61\x6e\x5f\151\x64", true); goto b81IZ; ZNgUz: $this->master->delete("\x6a\x75\162\x75\163\141\156\x5f\155\141\160\x65\x6c", $id, "\x6d\141\160\145\x6c\x5f\151\x64"); goto x0OCv; GKQme: $method = $this->input->post("\155\145\x74\150\157\x64", true); goto pjO91; iNchx: tIIuU: goto AvRcT; ICPjn: $this->output_json($data); goto F6dbH; B2BDv: $data = ["\163\164\141\164\165\x73" => false, "\x65\162\162\157\x72\x73" => ["\x6d\141\x70\145\x6c\137\x69\144" => form_error("\x6d\141\160\x65\154\137\x69\144"), "\x6a\x75\x72\x75\x73\x61\156\x5f\x69\x64\x5b\135" => form_error("\152\165\x72\x75\163\x61\x6e\137\x69\144\133\135")]]; goto LsDdQ; IcYbq: $data["\x73\x74\x61\164\165\x73"] = $action ? TRUE : FALSE; goto zs9sZ; qHklT: $mapel_id = $this->input->post("\155\141\160\145\154\137\x69\x64", true); goto bFKA1; LsDdQ: $this->output_json($data); goto q7g0N; JI8zu: if ($this->form_validation->run() == FALSE) { goto B1LBj; } goto qHklT; q7g0N: OXjga: goto ICPjn; Hmff1: B1LBj: goto B2BDv; DWseq: if (!($method === "\x65\x64\x69\x74")) { goto Ygwmg; } goto eT_wM; u9rnY: M3_3S: goto tmc2B; pjO91: $this->form_validation->set_rules("\x6d\x61\x70\x65\x6c\137\151\x64", "\x4d\x61\x74\x61\x20\113\x75\x6c\x69\141\150", "\x72\145\161\x75\x69\x72\145\x64"); goto a_oIg; eT_wM: $id = $this->input->post("\x6d\141\160\145\x6c\137\151\144", true); goto ZNgUz; GrynX: goto QkEn4; goto iNchx; x0OCv: $action = $this->master->create("\152\165\162\x75\163\141\156\x5f\155\x61\x70\145\154", $input, true); goto TTjCY; a_oIg: $this->form_validation->set_rules("\x6a\x75\162\165\x73\141\x6e\x5f\151\144\133\x5d", "\112\x75\162\x75\163\141\156", "\162\145\161\165\x69\162\x65\x64"); goto JI8zu; oKlGd: foreach ($jurusan_id as $key => $val) { $input[] = ["\x6d\x61\160\145\x6c\x5f\151\x64" => $mapel_id, "\152\x75\x72\165\163\x61\x6e\x5f\151\x64" => $val]; KKCEk: } goto u9rnY; tmc2B: if ($method === "\x61\144\144") { goto tIIuU; } goto DWseq; TTjCY: Ygwmg: goto GrynX; AvRcT: $action = $this->master->create("\x6a\165\x72\x75\x73\x61\x6e\x5f\155\x61\x70\x65\x6c", $input, true); goto Nh2tR; zs9sZ: goto OXjga; goto Hmff1; Nh2tR: QkEn4: goto IcYbq; b81IZ: $input = []; goto oKlGd; F6dbH: } public function delete() { goto wzyST; GILXJ: goto NyZqs; goto cl5JA; KKm8V: NyZqs: goto xllRw; cl5JA: ESncE: goto UyVjZ; UyVjZ: $this->output_json(["\x73\164\x61\164\x75\163" => false]); goto KKm8V; Xo8Vl: if (!$chk) { goto ESncE; } goto XDgbQ; wzyST: $chk = $this->input->post("\143\x68\x65\x63\x6b\145\144", true); goto Xo8Vl; jySES: $this->output_json(["\163\x74\141\164\165\x73" => true, "\x74\157\164\x61\x6c" => count($chk)]); goto sBMHV; sBMHV: KhwCl: goto GILXJ; XDgbQ: if (!$this->master->delete("\x6a\x75\162\x75\163\141\156\137\155\x61\x70\145\x6c", $chk, "\155\141\x70\x65\x6c\137\x69\x64")) { goto KhwCl; } goto jySES; xllRw: } }
