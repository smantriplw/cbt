<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\105\120\x41\124\x48") or exit("\x4e\157\40\x64\x69\x72\x65\x63\164\x20\163\143\162\x69\x70\x74\x20\x61\x63\143\x65\163\x73\40\141\x6c\154\157\167\x65\x64"); class JurusanMapel extends CI_Controller { public function __construct() { goto SmDXQ; jk5XG: if ($this->ion_auth->is_admin()) { goto A1Ui1; } goto rKL6J; cz3bc: N1MQu: goto crNm0; SAeAV: A1Ui1: goto Y4a2b; Y4a2b: goto C3c_w; goto cz3bc; G_jKZ: if (!$this->ion_auth->logged_in()) { goto N1MQu; } goto jk5XG; sFDK9: $this->load->model("\x4d\141\163\x74\145\x72\137\155\x6f\x64\145\154", "\155\141\163\164\145\162"); goto T6x9e; rKL6J: show_error("\x48\141\156\x79\141\40\x41\x64\x6d\151\x6e\151\163\164\x72\x61\x74\157\x72\40\x79\x61\x6e\x67\x20\144\x69\x62\x65\162\151\x20\x68\x61\x6b\40\x75\156\164\x75\x6b\x20\x6d\x65\156\x67\x61\x6b\x73\x65\163\40\x68\x61\x6c\141\155\141\156\40\x69\x6e\x69\54\x20\74\x61\x20\x68\162\x65\146\x3d\42" . base_url("\x64\x61\x73\x68\x62\x6f\141\162\144") . "\x22\x3e\x4b\145\155\x62\x61\154\x69\x20\153\145\x20\x6d\145\156\x75\x20\x61\x77\x61\x6c\x3c\57\141\x3e", 403, "\x41\153\163\145\163\40\x54\145\x72\154\141\162\x61\x6e\x67"); goto SAeAV; SmDXQ: parent::__construct(); goto G_jKZ; bdy2H: $this->load->library(["\144\x61\x74\141\164\141\x62\154\x65\163", "\146\157\x72\x6d\x5f\x76\x61\154\151\x64\x61\164\x69\157\156"]); goto sFDK9; crNm0: redirect("\141\165\164\150"); goto M4VsF; T6x9e: $this->form_validation->set_error_delimiters('', ''); goto o1AqI; M4VsF: C3c_w: goto bdy2H; o1AqI: } public function output_json($data, $encode = true) { goto sJmmH; sJmmH: if (!$encode) { goto b9s3S; } goto TdXXT; paAep: b9s3S: goto RlBGC; TdXXT: $data = json_encode($data); goto paAep; RlBGC: $this->output->set_content_type("\141\x70\x70\x6c\151\143\141\x74\x69\x6f\x6e\x2f\152\x73\157\x6e")->set_output($data); goto KJSQA; KJSQA: } public function index() { goto RuzJx; cRvZX: $this->load->view("\x5f\x74\145\155\x70\x6c\x61\164\145\x73\x2f\144\141\x73\150\142\157\x61\162\x64\x2f\x5f\146\157\157\x74\x65\162\x2e\x70\150\160"); goto Zp4OK; I03kO: $this->load->view("\x5f\x74\x65\155\x70\154\141\164\145\x73\x2f\x64\141\x73\150\x62\x6f\x61\x72\144\57\137\x68\x65\141\144\145\162\x2e\x70\150\160", $data); goto AttOp; RuzJx: $data = ["\x75\x73\x65\x72" => $this->ion_auth->user()->row(), "\x6a\x75\x64\165\x6c" => "\x4a\165\x72\x75\x73\x61\156\x20\115\141\164\141\x20\x4b\165\x6c\x69\141\150", "\163\165\142\152\165\x64\165\x6c" => "\104\141\164\x61\x20\x4a\165\162\165\x73\x61\156\x20\115\141\164\x61\40\113\165\154\x69\x61\150"]; goto I03kO; AttOp: $this->load->view("\x72\145\154\141\163\151\x2f\152\165\x72\165\x73\x61\156\x6d\141\160\145\x6c\x2f\x64\141\164\141"); goto cRvZX; Zp4OK: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto FMxSr; FMxSr: $data = ["\x75\163\x65\x72" => $this->ion_auth->user()->row(), "\152\x75\144\165\154" => "\x54\141\x6d\142\141\150\40\x4a\x75\162\x75\163\x61\x6e\40\x4d\141\164\141\x20\113\165\154\151\x61\150", "\x73\165\142\152\165\144\x75\154" => "\124\x61\x6d\x62\x61\x68\x20\x44\x61\x74\141\x20\x4a\x75\x72\x75\163\141\x6e\40\x4d\141\164\141\x20\113\165\x6c\151\141\x68", "\x6d\x61\160\x65\154" => $this->master->getMapel()]; goto WYWfS; iWfmY: $this->load->view("\x5f\164\x65\155\x70\154\x61\x74\x65\163\57\x64\141\163\150\x62\x6f\x61\162\144\x2f\137\146\x6f\x6f\x74\x65\x72\x2e\160\x68\x70"); goto Uwi_k; WYWfS: $this->load->view("\137\164\145\x6d\160\x6c\x61\x74\x65\x73\x2f\x64\141\163\150\x62\x6f\x61\162\144\x2f\x5f\x68\145\x61\x64\145\162\x2e\x70\x68\160", $data); goto j09zR; j09zR: $this->load->view("\x72\x65\x6c\x61\x73\151\57\152\165\x72\x75\163\x61\x6e\x6d\x61\x70\145\x6c\x2f\x61\144\x64"); goto iWfmY; Uwi_k: } public function edit($id) { goto OC8hj; oDBF2: $this->load->view("\x72\145\154\x61\x73\151\57\152\x75\162\165\x73\141\x6e\x6d\x61\x70\145\x6c\57\145\x64\151\x74"); goto y3Z1F; OC8hj: $data = ["\x75\x73\x65\162" => $this->ion_auth->user()->row(), "\152\x75\x64\165\154" => "\x45\144\151\164\40\x4a\165\x72\x75\163\x61\x6e\x20\x4d\141\x74\x61\40\113\x75\154\x69\x61\150", "\x73\x75\x62\x6a\x75\x64\165\x6c" => "\105\144\x69\164\40\104\x61\x74\141\x20\112\165\x72\x75\x73\141\x6e\40\x4d\x61\164\141\40\x4b\x75\x6c\x69\141\150", "\155\141\x70\145\x6c" => $this->master->getMapelById($id, true), "\x69\144\x5f\x6d\141\x70\145\x6c" => $id, "\141\154\154\137\x6a\x75\x72\165\x73\141\x6e" => $this->master->getAllJurusan(), "\152\x75\162\165\x73\141\156" => $this->master->getJurusanByIdMapel($id)]; goto DRJ16; y3Z1F: $this->load->view("\137\164\145\155\x70\154\141\164\x65\163\x2f\x64\x61\x73\150\142\157\x61\162\x64\x2f\137\146\157\x6f\164\145\x72\x2e\x70\150\x70"); goto CHlZ5; DRJ16: $this->load->view("\137\164\145\x6d\160\x6c\x61\x74\x65\x73\57\144\141\x73\x68\142\157\x61\162\x64\x2f\x5f\150\145\141\144\145\162\x2e\160\x68\160", $data); goto oDBF2; CHlZ5: } public function save() { goto wi9PM; nQbRG: if ($this->form_validation->run() == FALSE) { goto iXRTQ; } goto FtT1k; jY1t0: $this->form_validation->set_rules("\155\141\160\x65\x6c\x5f\x69\x64", "\115\141\164\x61\x20\113\x75\154\x69\141\150", "\162\145\x71\165\151\162\x65\144"); goto Xctwd; fc_vt: iXRTQ: goto YsFBD; B_6xi: $action = $this->master->create("\x6a\165\x72\165\163\141\156\137\x6d\141\160\145\x6c", $input, true); goto jNaBm; hI580: goto NelWp; goto nu7rg; fghR4: foreach ($jurusan_id as $key => $val) { $input[] = ["\x6d\141\160\145\154\x5f\151\144" => $mapel_id, "\152\165\x72\165\x73\141\x6e\137\151\144" => $val]; J5qP1: } goto F1TJb; Fjb8r: $data["\163\x74\x61\x74\x75\163"] = $action ? TRUE : FALSE; goto nzVd1; uX8DJ: if ($method === "\x61\144\x64") { goto Tvfp0; } goto uXFXH; Xctwd: $this->form_validation->set_rules("\152\x75\162\x75\163\x61\x6e\137\151\144\133\x5d", "\112\165\162\x75\x73\x61\x6e", "\162\145\x71\165\151\162\x65\x64"); goto nQbRG; nu7rg: Tvfp0: goto B_6xi; nzVd1: goto E_C88; goto fc_vt; uXFXH: if (!($method === "\145\x64\x69\164")) { goto rGNgx; } goto EJ2qJ; jNaBm: NelWp: goto Fjb8r; FtT1k: $mapel_id = $this->input->post("\x6d\x61\160\145\154\x5f\x69\x64", true); goto iX_aL; geavP: $this->output_json($data); goto vrtpl; F1TJb: ojhzK: goto uX8DJ; GBCAl: rGNgx: goto hI580; vrtpl: E_C88: goto HXNe7; dlcEf: $input = []; goto fghR4; iX_aL: $jurusan_id = $this->input->post("\x6a\165\162\x75\x73\x61\156\x5f\x69\x64", true); goto dlcEf; HXNe7: $this->output_json($data); goto bSycq; YsFBD: $data = ["\x73\x74\x61\x74\x75\x73" => false, "\145\x72\x72\157\x72\x73" => ["\x6d\141\x70\145\x6c\x5f\x69\144" => form_error("\155\141\160\145\154\137\x69\x64"), "\x6a\165\x72\165\x73\x61\156\137\151\144\x5b\x5d" => form_error("\x6a\x75\x72\x75\163\x61\x6e\x5f\x69\144\x5b\x5d")]]; goto geavP; joq8q: $action = $this->master->create("\152\x75\x72\x75\163\x61\x6e\137\155\141\160\x65\154", $input, true); goto GBCAl; EJ2qJ: $id = $this->input->post("\x6d\141\160\145\x6c\137\151\x64", true); goto y8NMi; wi9PM: $method = $this->input->post("\x6d\145\x74\x68\157\144", true); goto jY1t0; y8NMi: $this->master->delete("\152\165\x72\x75\x73\x61\x6e\x5f\155\x61\x70\145\154", $id, "\155\141\x70\x65\154\137\x69\x64"); goto joq8q; bSycq: } public function delete() { goto I_9WE; j2AaS: wLzrM: goto Nt_gP; VNaOc: ZRiNt: goto wns30; I_9WE: $chk = $this->input->post("\x63\x68\145\143\x6b\145\144", true); goto Lsscm; Nt_gP: goto Ijrxf; goto VNaOc; aXDpH: if (!$this->master->delete("\152\165\x72\165\x73\141\x6e\137\155\x61\160\x65\x6c", $chk, "\x6d\x61\x70\x65\154\137\151\144")) { goto wLzrM; } goto cu_2O; cu_2O: $this->output_json(["\x73\164\x61\164\x75\163" => true, "\164\157\x74\141\154" => count($chk)]); goto j2AaS; Kitmt: Ijrxf: goto b4p1n; wns30: $this->output_json(["\163\x74\141\164\x75\x73" => false]); goto Kitmt; Lsscm: if (!$chk) { goto ZRiNt; } goto aXDpH; b4p1n: } }
