<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\x45\x50\x41\x54\x48") or exit("\116\x6f\x20\x64\x69\x72\x65\143\164\40\x73\143\x72\x69\160\164\40\x61\143\143\145\x73\163\x20\x61\154\154\157\x77\x65\x64"); class JurusanMapel extends CI_Controller { public function __construct() { goto MeslC; Jh7x2: if ($this->ion_auth->is_admin()) { goto knntG; } goto Mct3q; mrU5P: $this->load->library(["\x64\x61\x74\141\x74\141\x62\154\x65\163", "\x66\x6f\162\155\x5f\x76\x61\x6c\151\144\x61\164\151\x6f\156"]); goto MxzV0; gj5TT: redirect("\141\x75\164\150"); goto oB0GB; MeslC: parent::__construct(); goto kTcuc; CKPIe: knntG: goto iknXw; MxzV0: $this->load->model("\x4d\141\163\x74\x65\162\x5f\155\x6f\144\145\x6c", "\155\x61\x73\x74\145\x72"); goto PtuqI; oB0GB: jbGLf: goto mrU5P; kTcuc: if (!$this->ion_auth->logged_in()) { goto LHnbT; } goto Jh7x2; PtuqI: $this->form_validation->set_error_delimiters('', ''); goto OUbLT; QPMpU: LHnbT: goto gj5TT; Mct3q: show_error("\110\141\156\x79\x61\x20\101\144\x6d\151\156\x69\163\x74\x72\141\164\157\x72\40\x79\141\156\x67\40\x64\151\142\x65\x72\x69\x20\150\x61\x6b\40\165\156\164\165\x6b\40\155\145\x6e\x67\x61\x6b\x73\145\x73\40\150\141\x6c\x61\x6d\x61\x6e\x20\151\x6e\151\54\x20\74\141\x20\150\x72\x65\146\75\42" . base_url("\144\141\163\150\142\x6f\141\162\x64") . "\42\x3e\x4b\145\x6d\142\x61\154\151\40\153\x65\x20\x6d\145\156\165\40\x61\167\x61\x6c\x3c\x2f\x61\76", 403, "\x41\153\163\145\x73\40\x54\145\x72\154\x61\x72\141\156\x67"); goto CKPIe; iknXw: goto jbGLf; goto QPMpU; OUbLT: } public function output_json($data, $encode = true) { goto VZhyd; nhK8g: $data = json_encode($data); goto UEweI; UEweI: jvaYG: goto EjUqp; EjUqp: $this->output->set_content_type("\141\160\x70\x6c\x69\x63\x61\164\151\x6f\156\x2f\152\x73\157\x6e")->set_output($data); goto Y85dV; VZhyd: if (!$encode) { goto jvaYG; } goto nhK8g; Y85dV: } public function index() { goto Tol6M; RVY3B: $this->load->view("\162\145\154\x61\163\x69\x2f\152\165\x72\x75\163\141\x6e\155\141\x70\x65\154\x2f\144\141\x74\x61"); goto h8KGm; Tol6M: $data = ["\165\163\x65\162" => $this->ion_auth->user()->row(), "\152\165\x64\x75\x6c" => "\x4a\165\x72\x75\163\141\156\40\x4d\x61\x74\x61\40\x4b\165\154\x69\141\x68", "\163\165\x62\x6a\x75\x64\x75\154" => "\x44\141\164\141\40\112\165\x72\x75\163\x61\x6e\x20\115\x61\164\141\40\113\x75\x6c\x69\x61\150"]; goto WO0J9; h8KGm: $this->load->view("\137\164\145\155\160\x6c\141\164\x65\x73\x2f\x64\141\x73\150\x62\157\x61\162\144\x2f\x5f\146\157\157\164\145\x72\56\160\x68\x70"); goto TjN8q; WO0J9: $this->load->view("\137\x74\x65\155\160\x6c\141\164\145\x73\57\144\141\163\x68\142\157\x61\162\144\x2f\x5f\x68\145\x61\144\145\x72\56\x70\x68\x70", $data); goto RVY3B; TjN8q: } public function data() { $this->output_json($this->master->getJurusanMapel(), false); } public function getJurusanId($id) { $this->output_json($this->master->getAllJurusan($id)); } public function add() { goto m00ZV; Rm6C9: $this->load->view("\137\164\x65\x6d\160\154\x61\x74\145\x73\57\144\141\163\x68\142\157\x61\x72\144\x2f\137\x68\x65\x61\x64\x65\x72\x2e\x70\x68\x70", $data); goto C6lIX; ZduWC: $this->load->view("\x5f\x74\x65\x6d\x70\x6c\x61\164\145\x73\57\x64\x61\163\x68\x62\157\x61\x72\x64\57\137\146\157\x6f\164\145\x72\56\x70\x68\x70"); goto oLSBQ; m00ZV: $data = ["\x75\x73\x65\x72" => $this->ion_auth->user()->row(), "\x6a\x75\144\165\x6c" => "\x54\141\155\x62\x61\x68\40\112\165\x72\x75\163\x61\156\x20\x4d\141\x74\x61\x20\x4b\x75\154\x69\x61\x68", "\163\x75\142\152\165\144\x75\x6c" => "\x54\141\x6d\x62\141\x68\x20\x44\141\164\141\40\x4a\165\x72\165\x73\141\x6e\40\115\x61\x74\x61\x20\x4b\165\154\151\x61\150", "\155\x61\160\145\154" => $this->master->getMapel()]; goto Rm6C9; C6lIX: $this->load->view("\162\145\154\x61\x73\151\57\152\x75\x72\x75\x73\x61\156\x6d\141\x70\x65\154\x2f\x61\x64\144"); goto ZduWC; oLSBQ: } public function edit($id) { goto Eae0c; OGfER: $this->load->view("\162\x65\154\x61\x73\151\x2f\152\165\x72\165\163\141\156\155\x61\160\x65\154\x2f\x65\144\151\x74"); goto iHOg5; iHOg5: $this->load->view("\137\x74\145\155\160\154\x61\x74\145\x73\x2f\144\x61\x73\x68\x62\157\141\x72\x64\x2f\x5f\146\x6f\157\x74\x65\x72\x2e\160\150\160"); goto SoLqx; m_G2C: $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\145\163\57\144\141\x73\150\142\x6f\x61\162\x64\x2f\137\150\x65\x61\144\145\162\x2e\160\150\160", $data); goto OGfER; Eae0c: $data = ["\165\163\145\x72" => $this->ion_auth->user()->row(), "\152\x75\144\x75\x6c" => "\105\144\x69\x74\x20\112\165\162\x75\x73\x61\156\40\115\141\x74\x61\x20\x4b\165\x6c\151\x61\x68", "\x73\165\x62\x6a\x75\144\165\x6c" => "\105\x64\x69\x74\x20\x44\x61\x74\141\40\x4a\165\x72\165\163\141\x6e\40\x4d\x61\x74\141\x20\x4b\165\154\151\x61\x68", "\x6d\x61\x70\x65\x6c" => $this->master->getMapelById($id, true), "\151\x64\137\155\141\x70\x65\x6c" => $id, "\x61\x6c\x6c\x5f\152\x75\x72\165\163\141\x6e" => $this->master->getAllJurusan(), "\152\x75\x72\x75\x73\x61\156" => $this->master->getJurusanByIdMapel($id)]; goto m_G2C; SoLqx: } public function save() { goto de6G8; c73PH: if ($this->form_validation->run() == FALSE) { goto MK1qX; } goto IjflZ; de6G8: $method = $this->input->post("\155\145\x74\150\157\x64", true); goto UChqk; UChqk: $this->form_validation->set_rules("\155\x61\x70\145\x6c\137\x69\x64", "\115\x61\x74\141\x20\113\x75\x6c\151\x61\x68", "\162\x65\161\x75\151\x72\145\x64"); goto giw9B; qZn17: $action = $this->master->create("\x6a\165\x72\165\163\x61\156\x5f\x6d\141\160\145\154", $input, true); goto F0hjs; Mym1T: $input = []; goto Bc2uB; N1lKg: $data = ["\x73\x74\141\164\x75\x73" => false, "\145\162\x72\x6f\162\163" => ["\155\x61\160\145\x6c\x5f\x69\144" => form_error("\x6d\x61\x70\x65\154\137\151\144"), "\x6a\x75\x72\165\163\141\x6e\x5f\151\144\x5b\135" => form_error("\152\x75\x72\x75\x73\x61\x6e\x5f\x69\x64\x5b\x5d")]]; goto XhVNl; axJU5: goto e_FGa; goto zMw76; F0hjs: iVlSG: goto axJU5; vTo2G: if ($method === "\x61\144\144") { goto BzkBJ; } goto fN2dT; GeCZy: $id = $this->input->post("\x6d\141\160\x65\x6c\x5f\151\144", true); goto qIWdR; IjflZ: $mapel_id = $this->input->post("\155\141\160\145\x6c\137\151\144", true); goto Ur5Hx; giw9B: $this->form_validation->set_rules("\x6a\x75\162\165\163\x61\156\137\151\144\133\135", "\112\165\x72\x75\x73\x61\156", "\162\x65\161\165\151\x72\145\144"); goto c73PH; jR9tm: V4p9P: goto goOpJ; nQeov: $action = $this->master->create("\x6a\165\x72\165\x73\141\156\137\155\141\x70\x65\x6c", $input, true); goto r1hn4; Ur5Hx: $jurusan_id = $this->input->post("\152\x75\162\x75\x73\x61\x6e\137\x69\144", true); goto Mym1T; r1hn4: e_FGa: goto bMy2a; XhVNl: $this->output_json($data); goto jR9tm; fN2dT: if (!($method === "\x65\144\x69\x74")) { goto iVlSG; } goto GeCZy; qIWdR: $this->master->delete("\x6a\x75\162\x75\x73\x61\x6e\137\x6d\x61\160\x65\x6c", $id, "\155\x61\160\145\x6c\x5f\x69\144"); goto qZn17; Bc2uB: foreach ($jurusan_id as $key => $val) { $input[] = ["\x6d\141\x70\x65\154\137\151\x64" => $mapel_id, "\x6a\x75\x72\x75\x73\141\x6e\x5f\x69\x64" => $val]; FVhwb: } goto zNf1_; bMy2a: $data["\163\164\141\x74\x75\163"] = $action ? TRUE : FALSE; goto XElOK; zNf1_: m9_NZ: goto vTo2G; zMw76: BzkBJ: goto nQeov; goOpJ: $this->output_json($data); goto HxTQT; UuY_t: MK1qX: goto N1lKg; XElOK: goto V4p9P; goto UuY_t; HxTQT: } public function delete() { goto JDIGC; C0Y5k: RLYrs: goto j9YjA; ntJNV: goto YN4i_; goto C0Y5k; n4PC_: $this->output_json(["\163\164\141\164\165\x73" => true, "\164\157\164\141\154" => count($chk)]); goto vomPr; O7PFa: YN4i_: goto Ws6Ty; njEGN: if (!$this->master->delete("\x6a\x75\162\x75\x73\x61\156\137\155\x61\160\x65\x6c", $chk, "\155\141\160\x65\x6c\x5f\151\x64")) { goto vfK5I; } goto n4PC_; vomPr: vfK5I: goto ntJNV; j9YjA: $this->output_json(["\x73\x74\x61\164\x75\x73" => false]); goto O7PFa; RoVkI: if (!$chk) { goto RLYrs; } goto njEGN; JDIGC: $chk = $this->input->post("\143\x68\145\x63\153\x65\x64", true); goto RoVkI; Ws6Ty: } }
