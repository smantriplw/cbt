<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\105\x50\x41\124\110") or exit("\116\x6f\x20\144\x69\162\145\143\x74\40\163\x63\x72\151\160\164\40\141\143\x63\145\163\163\x20\141\154\x6c\157\167\145\144"); class Useradmin extends CI_Controller { public function __construct() { goto f2T11; EWfLo: q3qEY: goto hQrU0; qwC7a: $this->load->model("\104\141\163\x68\x62\157\141\x72\144\137\x6d\x6f\x64\145\x6c", "\144\x61\x73\150\x62\x6f\141\x72\144"); goto Ca43X; f2T11: parent::__construct(); goto bIyuV; xffw1: redirect("\x61\165\x74\150"); goto HsmQ9; eH8ZI: eRClL: goto xffw1; cYFOY: $this->load->model("\125\163\x65\162\163\x5f\155\157\144\145\x6c", "\165\163\145\x72\163"); goto eGd7q; Ca43X: $this->form_validation->set_error_delimiters('', ''); goto ULnWt; HsmQ9: Okx07: goto tKgMo; hQrU0: goto Okx07; goto eH8ZI; eGd7q: $this->load->model("\115\x61\x73\x74\x65\162\137\x6d\x6f\144\x65\154", "\155\x61\x73\x74\x65\162"); goto qwC7a; bIyuV: if (!$this->ion_auth->logged_in()) { goto eRClL; } goto vqHdn; bxZyL: show_error("\x48\x61\156\x79\x61\x20\101\x64\x6d\x69\156\151\163\164\162\x61\164\157\162\40\x79\141\156\147\40\144\x69\x62\x65\162\151\x20\150\141\153\40\x75\156\164\x75\x6b\40\155\x65\x6e\x67\141\x6b\x73\x65\163\40\x68\141\154\x61\x6d\141\x6e\40\x69\x6e\x69\x2c\x20\74\x61\x20\150\162\145\x66\75\x22" . base_url("\x64\141\163\x68\142\x6f\141\162\x64") . "\x22\76\x4b\x65\155\x62\141\154\151\x20\153\145\x20\155\x65\156\x75\40\141\x77\141\x6c\x3c\x2f\x61\x3e", 403, "\x41\x6b\x73\x65\x73\40\x54\145\x72\154\x61\x72\141\156\x67"); goto EWfLo; vqHdn: if ($this->ion_auth->is_admin()) { goto q3qEY; } goto bxZyL; xjhhp: $this->load->library(["\144\x61\164\x61\x74\x61\142\x6c\145\163", "\x66\157\x72\x6d\137\x76\141\154\151\144\x61\x74\x69\157\156"]); goto cYFOY; tKgMo: $this->load->library("\x75\x70\x6c\157\x61\x64"); goto xjhhp; ULnWt: } public function is_admin() { goto UBdNA; v21jH: i7dC6: goto KHjPs; v1xd0: show_error("\x48\x61\156\171\x61\40\101\144\x6d\151\x6e\151\x73\164\162\141\164\157\162\40\171\x61\x6e\147\40\144\151\x62\145\162\x69\x20\150\x61\x6b\40\165\156\x74\165\x6b\x20\155\145\156\147\141\153\x73\145\163\x20\150\141\x6c\x61\x6d\141\x6e\40\151\x6e\151\x2c\40\74\x61\40\150\x72\x65\x66\75\42" . base_url("\x64\x61\x73\150\142\157\141\x72\144") . "\42\76\113\145\x6d\x62\141\154\x69\x20\x6b\x65\40\155\x65\156\165\40\x61\167\x61\x6c\74\57\141\x3e", 403, "\101\x6b\163\145\163\x20\124\145\162\154\x61\162\141\156\x67"); goto v21jH; UBdNA: if ($this->ion_auth->is_admin()) { goto i7dC6; } goto v1xd0; KHjPs: } public function output_json($data, $encode = true) { goto Mr1xp; Mr1xp: if (!$encode) { goto I61II; } goto R_7lE; myEEd: I61II: goto oW0IU; oW0IU: $this->output->set_content_type("\141\160\x70\x6c\151\143\x61\164\x69\157\156\57\152\x73\157\156")->set_output($data); goto WI8Og; R_7lE: $data = json_encode($data); goto myEEd; WI8Og: } public function data() { $this->is_admin(); $this->output_json($this->users->getDataadmin(), false); } public function index() { goto opjUh; O8Fss: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto YgAkA; YChvS: $data["\x74\x70\x5f\141\143\x74\x69\166\145"] = $this->dashboard->getTahunActive(); goto O8Fss; hcAV7: $this->load->view("\x5f\164\x65\x6d\x70\x6c\141\x74\x65\163\57\144\x61\163\x68\x62\157\x61\162\144\57\137\150\145\x61\x64\x65\162\56\160\150\x70", $data); goto FJ4xM; ExJ48: $this->load->view("\x5f\x74\145\155\160\x6c\x61\x74\145\163\57\x64\x61\163\x68\x62\x6f\141\162\x64\x2f\x5f\146\157\157\164\145\162\56\160\x68\x70"); goto BtbCo; FJ4xM: $this->load->view("\165\163\x65\162\x73\x2f\141\x64\155\151\x6e\x2f\x64\141\x74\141"); goto ExJ48; YgAkA: $data["\x73\x6d\164\137\x61\143\x74\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto hcAV7; J5PuC: $data["\164\160"] = $this->dashboard->getTahun(); goto YChvS; Fouf9: $data = ["\165\163\145\x72" => $user, "\x6a\165\x64\x75\x6c" => "\101\x64\x6d\151\x6e\x20\x4d\x61\x6e\x61\147\x65\x6d\x65\156\164", "\163\165\x62\x6a\x75\x64\x75\154" => "\104\x61\164\141\40\101\x64\x6d\x69\x6e", "\x70\162\157\x66\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto J5PuC; VA6ka: $user = $this->ion_auth->user()->row(); goto Fouf9; opjUh: $this->is_admin(); goto VA6ka; BtbCo: } public function edit($id) { goto vVjWE; FtjVX: $data = ["\165\x73\145\x72" => $user, "\152\165\x64\165\154" => "\x41\x64\155\x69\x6e\x69\163\x74\162\x61\164\x6f\x72", "\163\165\142\152\165\144\x75\x6c" => "\105\x64\x69\164\40\x44\x61\x74\141\x20\x41\x64\x6d\x69\156", "\x75\163\x65\x72\163" => $this->ion_auth->user($id)->row(), "\147\162\x6f\165\x70\163" => $this->ion_auth->groups()->result(), "\x6c\x65\166\145\x6c" => $level[0], "\x70\162\157\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto rWgZp; SMFeI: $this->load->view("\137\164\x65\x6d\160\154\141\164\145\x73\57\x64\141\163\150\142\157\141\162\x64\57\x5f\x68\145\141\x64\x65\x72\x2e\x70\x68\160", $data); goto nQOCR; l6B1m: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto KKn1T; RjGV7: $this->load->view("\137\x74\145\155\160\x6c\x61\x74\x65\x73\57\x64\x61\x73\x68\x62\x6f\141\x72\x64\57\137\146\x6f\x6f\164\x65\x72\56\x70\x68\x70"); goto r3lcg; vVjWE: $level = $this->ion_auth->get_users_groups($id)->result(); goto MWpff; KKn1T: $data["\163\155\164\x5f\141\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto SMFeI; MWpff: $user = $this->ion_auth->user()->row(); goto FtjVX; WQKmB: $data["\x74\x70\137\x61\143\x74\151\166\145"] = $this->dashboard->getTahunActive(); goto l6B1m; rWgZp: $data["\164\x70"] = $this->dashboard->getTahun(); goto WQKmB; nQOCR: $this->load->view("\165\163\145\162\163\57\x61\144\x6d\151\x6e\x2f\145\144\151\x74"); goto RjGV7; r3lcg: } public function create() { goto v9Dul; uCgby: $data["\x73\x74\x61\x74\x75\x73"] = false; goto itnJV; AYc12: $this->form_validation->set_rules("\x66\x69\x72\x73\164\x5f\x6e\x61\155\x65", "\106\151\x72\163\164\40\116\141\155\145", "\162\x65\161\165\151\162\145\144"); goto HuhDn; pdEdv: $data = ["\163\x74\x61\164\x75\163" => false, "\x6d\163\147" => "\105\155\x61\x69\x6c\40\x74\x69\x64\x61\x6b\x20\x74\145\162\x73\x65\144\x69\141\40\50\x73\x75\x64\141\150\x20\x64\151\x67\x75\156\x61\x6b\x61\x6e\x29\56"]; goto NIhHK; hVLIa: bWxU0: goto uCgby; dSQGb: $data = ["\x73\164\x61\164\x75\163" => false, "\x6d\163\147" => "\x55\x73\145\x72\156\x61\x6d\145\x20\164\151\144\x61\x6b\x20\x74\145\x72\163\145\144\x69\x61\40\50\163\x75\144\x61\x68\40\x64\x69\147\x75\x6e\141\x6b\x61\x6e\51\56"]; goto pjy5y; NIhHK: eTa0O: goto Eurgf; eRbHb: $additional_data = ["\x66\151\162\163\x74\137\x6e\x61\155\145" => $this->input->post("\x66\151\x72\163\x74\x5f\x6e\141\x6d\x65", true), "\154\x61\163\164\x5f\x6e\x61\155\145" => $this->input->post("\154\141\x73\164\137\156\x61\155\145", true)]; goto qLsmf; ZgdJJ: YWcOy: goto dSQGb; ZEKQL: $this->output_json($data); goto w28SF; itnJV: $data["\x65\x72\x72\157\162\x73"] = ["\165\x73\x65\x72\x6e\141\155\145" => form_error("\x75\x73\145\162\156\141\155\145"), "\146\x69\x72\x73\164\x5f\x6e\141\x6d\x65" => form_error("\x66\151\162\163\164\137\x6e\141\x6d\145"), "\154\141\163\164\x5f\x6e\141\155\145" => form_error("\x6c\141\x73\x74\137\x6e\x61\155\145"), "\145\x6d\141\x69\154" => form_error("\x65\x6d\141\x69\154"), "\x70\x61\163\163\x77\x6f\162\x64" => form_error("\160\141\163\163\x77\157\x72\x64"), "\143\157\x6e\146\151\x72\155\x5f\160\x61\163\163\x77\x6f\162\144" => form_error("\x63\157\x6e\146\x69\162\155\137\x70\x61\163\x73\x77\x6f\162\x64")]; goto pASNI; uMgCj: goto eTa0O; goto MUHti; pjy5y: dpXmA: goto uf95g; HuhDn: $this->form_validation->set_rules("\x6c\141\163\x74\137\x6e\x61\155\145", "\x4c\141\x73\x74\x20\x4e\141\x6d\145", "\162\145\161\165\x69\162\x65\144"); goto w7a_W; pASNI: bzdpL: goto ZEKQL; v9Dul: $this->is_admin(); goto SWglQ; uf95g: goto bzdpL; goto hVLIa; hPOr4: $this->form_validation->set_rules("\143\157\156\146\x69\162\x6d\137\x70\x61\163\x73\x77\x6f\x72\144", "\103\x6f\156\146\x69\162\x6d\40\160\x61\163\x73\x77\157\x72\x64", "\x74\x72\x69\155\174\155\141\164\143\x68\145\x73\133\x70\x61\x73\163\x77\x6f\162\x64\x5d\174\162\145\161\x75\151\x72\145\144"); goto IFr1X; uQla5: if ($this->ion_auth->email_check($email)) { goto JSAF1; } goto f1wMK; qLsmf: $group = array("\61"); goto CLAJe; Q_DDm: $email = $this->input->post("\x65\x6d\x61\151\154", true); goto eRbHb; SWglQ: $this->form_validation->set_rules("\x75\x73\145\x72\x6e\x61\x6d\x65", "\x55\163\x65\x72\x6e\x61\x6d\145", "\x72\145\161\165\151\x72\x65\144"); goto AYc12; MUHti: JSAF1: goto pdEdv; piXbp: $password = $this->input->post("\x70\x61\163\163\x77\157\x72\x64", true); goto Q_DDm; d7a7x: $this->form_validation->set_rules("\x70\x61\163\x73\167\157\162\x64", "\x50\141\163\163\x77\x6f\162\144", "\x74\x72\x69\x6d\x7c\x6d\x69\156\x5f\154\x65\x6e\x67\164\150\133\66\x5d\174\155\x61\x78\137\154\145\156\x67\x74\150\133\62\60\135\174\x72\145\x71\165\x69\x72\145\144"); goto hPOr4; CLAJe: if ($this->ion_auth->username_check($username)) { goto YWcOy; } goto uQla5; X8yrl: $data = ["\163\x74\x61\x74\x75\x73" => true, "\x6d\x73\147" => "\x55\x73\x65\162\40\142\x65\x72\x68\141\163\x69\x6c\40\x64\x69\x62\x75\x61\164\56\x20\x4e\x49\120\40\144\151\147\165\x6e\141\153\141\x6e\40\x73\x65\142\x61\147\x61\151\x20\x70\141\163\163\167\157\x72\x64\40\160\x61\x64\141\40\x73\x61\x61\164\x20\154\x6f\x67\151\x6e\x2e"]; goto uMgCj; usdKF: $username = $this->input->post("\x75\163\x65\x72\156\141\155\145", true); goto piXbp; f1wMK: $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto X8yrl; IFr1X: if ($this->form_validation->run() === FALSE) { goto bWxU0; } goto usdKF; w7a_W: $this->form_validation->set_rules("\x65\x6d\x61\x69\154", "\105\155\x61\x69\x6c", "\162\x65\x71\165\151\x72\145\x64\x7c\x76\x61\154\151\x64\137\145\155\x61\x69\x6c"); goto d7a7x; Eurgf: goto dpXmA; goto ZgdJJ; w28SF: } public function edit_info() { goto sl7Di; BMiCS: $this->form_validation->set_rules("\x65\x6d\x61\x69\154", "\x45\155\141\x69\x6c", "\162\x65\x71\165\x69\162\145\144\174\x76\x61\x6c\151\144\137\145\155\x61\x69\x6c"); goto uu330; Gqr_2: $update = $this->master->update("\165\163\145\162\163", $input, "\x69\144", $id); goto mCq_I; O3PTp: $data["\163\164\141\x74\165\x73"] = false; goto PxkOh; mCq_I: $data["\x73\x74\141\164\165\x73"] = $update ? true : false; goto jiXQ2; PxkOh: $data["\145\x72\162\x6f\162\163"] = ["\165\x73\x65\162\x6e\x61\155\145" => form_error("\x75\163\145\x72\x6e\141\155\145"), "\146\x69\x72\163\164\x5f\156\141\155\x65" => form_error("\x66\151\x72\163\x74\x5f\156\141\x6d\x65"), "\x6c\141\x73\x74\137\x6e\x61\155\x65" => form_error("\x6c\x61\163\x74\x5f\x6e\141\155\x65"), "\x65\x6d\141\151\154" => form_error("\x65\155\x61\x69\154")]; goto A9uEY; sBVGz: $this->form_validation->set_rules("\146\151\162\x73\x74\137\156\x61\155\145", "\x46\x69\162\x73\x74\40\x4e\x61\x6d\145", "\162\145\x71\165\151\x72\145\144"); goto Dgu0F; NqM5t: EKV95: goto O3PTp; qYQmI: $this->output_json($data); goto BXR4s; A9uEY: ohyI5: goto qYQmI; Q9yTD: $input = ["\165\x73\x65\162\156\x61\x6d\x65" => $this->input->post("\165\163\x65\x72\x6e\141\155\145", true), "\146\x69\162\163\164\137\156\x61\x6d\145" => $this->input->post("\x66\x69\162\163\164\x5f\x6e\141\155\x65", true), "\x6c\141\x73\164\x5f\156\x61\x6d\x65" => $this->input->post("\154\141\163\164\x5f\156\141\x6d\145", true), "\145\x6d\x61\151\x6c" => $this->input->post("\x65\155\x61\151\154", true)]; goto Gqr_2; sl7Di: $this->is_admin(); goto hM4Aw; Dgu0F: $this->form_validation->set_rules("\154\141\x73\x74\137\x6e\x61\x6d\145", "\114\141\163\164\40\x4e\x61\x6d\x65", "\162\x65\161\x75\151\162\x65\x64"); goto BMiCS; hM4Aw: $this->form_validation->set_rules("\x75\x73\145\162\156\x61\x6d\x65", "\x55\x73\145\162\x6e\141\x6d\x65", "\x72\x65\x71\x75\x69\162\145\144"); goto sBVGz; jiXQ2: goto ohyI5; goto NqM5t; l58Oc: $id = $this->input->post("\x69\144", true); goto Q9yTD; uu330: if ($this->form_validation->run() === FALSE) { goto EKV95; } goto l58Oc; BXR4s: } public function edit_status() { goto fP0_R; lebOQ: $id = $this->input->post("\x69\x64", true); goto iZWGN; sCcmH: $data["\x73\164\141\164\x75\163"] = false; goto yB3_3; xd_a3: wP2qy: goto gRR9n; bTyt7: goto wP2qy; goto oR9rz; h8gNh: $this->form_validation->set_rules("\163\164\x61\x74\165\163", "\x53\164\x61\x74\165\x73", "\x72\x65\161\x75\x69\162\x65\144"); goto MIwNy; qxXB8: $data["\163\164\141\x74\165\x73"] = $update ? true : false; goto bTyt7; gRR9n: $this->output_json($data); goto nRSeX; j1e3b: $update = $this->master->update("\x75\163\x65\x72\x73", $input, "\x69\144", $id); goto qxXB8; oR9rz: gF3Iu: goto sCcmH; MIwNy: if ($this->form_validation->run() === FALSE) { goto gF3Iu; } goto lebOQ; yB3_3: $data["\x65\x72\x72\157\x72\163"] = ["\x73\164\x61\164\165\x73" => form_error("\x73\164\x61\164\165\163")]; goto xd_a3; fP0_R: $this->is_admin(); goto h8gNh; iZWGN: $input = ["\x61\143\x74\x69\x76\x65" => $this->input->post("\163\164\x61\x74\x75\x73", true)]; goto j1e3b; nRSeX: } public function edit_level() { goto IL7Wq; L5LbM: $this->form_validation->set_rules("\x6c\145\166\145\x6c", "\114\145\x76\145\154", "\162\x65\x71\x75\151\x72\x65\144"); goto DqeUg; Q_RnS: $input = ["\x67\x72\157\165\160\x5f\151\x64" => $this->input->post("\154\145\166\x65\154", true)]; goto TTbD2; HF_YH: $data["\163\164\141\164\x75\163"] = $update ? true : false; goto dv03M; IL7Wq: $this->is_admin(); goto L5LbM; Fg6BQ: $data["\163\164\141\x74\165\x73"] = false; goto dja3f; S7OJ1: $id = $this->input->post("\151\x64", true); goto Q_RnS; dja3f: $data["\x65\x72\162\x6f\162\163"] = ["\154\145\x76\145\x6c" => form_error("\154\145\166\145\x6c")]; goto ZVkJm; IPY84: $this->output_json($data); goto L3CVK; dv03M: goto D37HJ; goto ISZJY; ISZJY: JFFMO: goto Fg6BQ; TTbD2: $update = $this->master->update("\x75\163\x65\162\163\137\x67\x72\157\x75\x70\x73", $input, "\165\163\x65\162\137\x69\144", $id); goto HF_YH; ZVkJm: D37HJ: goto IPY84; DqeUg: if ($this->form_validation->run() === FALSE) { goto JFFMO; } goto S7OJ1; L3CVK: } public function change_password() { goto IYpfw; Bx00F: $data["\x73\164\x61\x74\165\163"] = true; goto HDC1F; hiAdH: $data = ["\163\164\x61\x74\165\x73" => false, "\155\x73\x67" => $this->ion_auth->errors()]; goto lOdyb; KmdGd: PN7vS: goto Bx00F; PwdAj: $data = ["\163\x74\141\164\x75\163" => false, "\x65\x72\162\x6f\162\x73" => ["\x6f\x6c\x64" => form_error("\x6f\154\144"), "\x6e\x65\x77" => form_error("\x6e\145\167"), "\156\145\x77\x5f\x63\x6f\x6e\x66\151\162\155" => form_error("\x6e\x65\x77\137\143\x6f\156\x66\151\x72\x6d")]]; goto p6zwR; O_tUE: $this->form_validation->set_rules("\x6e\145\x77\x5f\143\157\x6e\146\x69\162\x6d", $this->lang->line("\x63\150\141\x6e\147\145\x5f\160\x61\163\x73\x77\x6f\x72\x64\x5f\166\141\154\x69\x64\141\164\x69\157\x6e\x5f\x6e\145\167\x5f\160\x61\163\x73\x77\x6f\162\x64\x5f\143\x6f\156\146\151\x72\x6d\x5f\154\141\142\145\x6c"), "\162\145\161\165\x69\x72\x65\144"); goto a5i2m; MlrTd: if ($change) { goto PN7vS; } goto hiAdH; p6zwR: rNssj: goto ZJY0n; a5i2m: if ($this->form_validation->run() === FALSE) { goto i4R6V; } goto fYQwo; lOdyb: goto WxTsg; goto KmdGd; IYpfw: $this->form_validation->set_rules("\157\x6c\x64", $this->lang->line("\143\x68\x61\x6e\147\x65\137\x70\141\x73\x73\167\157\x72\144\x5f\166\141\x6c\151\x64\x61\164\x69\157\156\x5f\x6f\x6c\144\x5f\160\x61\163\163\x77\157\162\x64\x5f\154\141\142\x65\x6c"), "\162\x65\161\x75\x69\162\145\x64"); goto xFsS1; fYQwo: $identity = $this->session->userdata("\151\x64\x65\x6e\164\x69\164\x79"); goto UJcCo; HDC1F: WxTsg: goto F1GbG; UJcCo: $change = $this->ion_auth->change_password($identity, $this->input->post("\157\154\x64"), $this->input->post("\156\145\167")); goto MlrTd; F1GbG: goto rNssj; goto LH6Ro; xFsS1: $this->form_validation->set_rules("\156\x65\167", $this->lang->line("\143\x68\141\156\147\x65\137\160\x61\163\x73\x77\157\162\x64\137\166\141\154\151\x64\x61\x74\x69\x6f\x6e\x5f\x6e\145\167\137\x70\x61\x73\x73\x77\x6f\162\144\137\x6c\x61\x62\145\x6c"), "\x72\145\161\x75\151\x72\145\x64\x7c\155\x69\x6e\137\x6c\x65\156\147\x74\x68\x5b" . $this->config->item("\x6d\x69\156\137\160\x61\163\x73\167\157\162\x64\137\154\x65\x6e\147\164\x68", "\151\x6f\156\x5f\141\x75\x74\x68") . "\135\174\155\x61\x74\143\x68\x65\163\133\156\x65\167\x5f\x63\x6f\156\x66\x69\162\155\x5d"); goto O_tUE; ZJY0n: $this->output_json($data); goto T91w6; LH6Ro: i4R6V: goto PwdAj; T91w6: } public function delete($id) { goto u2gtG; wh3eO: $this->output_json($data); goto r1vqq; u2gtG: $this->is_admin(); goto cE_bA; cE_bA: $data["\x73\x74\141\x74\x75\x73"] = $this->ion_auth->delete_user($id) ? true : false; goto wh3eO; r1vqq: } function uploadFile($id_user) { goto R7dZj; HMplL: $data["\163\162\143"] = $this->upload->display_errors(); goto iCRY4; nWGSs: $data["\164\x79\160\x65"] = $_FILES["\x66\x6f\x74\157"]["\x74\x79\x70\145"]; goto RfXHV; DyqWj: $config["\x75\x70\x6c\157\141\x64\x5f\160\x61\164\x68"] = "\x2e\x2f\165\160\x6c\157\141\144\x73\x2f\x70\162\x6f\x66\151\154\x65\x73\x2f"; goto p71PA; p71PA: $config["\141\x6c\x6c\x6f\167\x65\144\137\164\171\160\x65\163"] = "\147\151\146\x7c\x6a\x70\147\x7c\x70\x6e\x67\x7c\x6a\x70\145\x67\174\112\x50\x45\107\x7c\112\x50\x47\x7c\x50\x4e\107\x7c\107\x49\106"; goto pRur0; dh8RT: $this->upload->initialize($config); goto SOBB9; dxsfQ: RefDs: goto afFF3; R7dZj: if (isset($_FILES["\x66\x6f\x74\x6f"]["\x6e\141\x6d\x65"])) { goto oDB7q; } goto aM1e1; YuMME: $result = $this->upload->data(); goto D72w2; GClLa: goto OXq0h; goto LFpil; pRur0: $config["\x6f\166\x65\162\167\x72\x69\164\145"] = true; goto Vksnu; v5peb: $this->output_json($data); goto ayyHY; D72w2: $data["\163\x72\143"] = base_url() . "\x75\x70\x6c\157\x61\144\x73\57\160\x72\x6f\x66\151\x6c\145\163\x2f" . $result["\146\x69\x6c\145\x5f\156\x61\155\145"]; goto FiKzr; RfXHV: $data["\x73\x69\x7a\x65"] = $_FILES["\x66\157\x74\157"]["\163\x69\x7a\x65"]; goto B2001; B2001: OXq0h: goto v5peb; afFF3: $data["\x73\x74\x61\164\x75\163"] = false; goto HMplL; aDFH_: $data["\163\x74\x61\x74\x75\x73"] = true; goto VunG9; FiKzr: $data["\x66\x69\x6c\x65\156\x61\x6d\x65"] = pathinfo($result["\x66\x69\154\x65\x5f\156\141\155\145"], PATHINFO_FILENAME); goto aDFH_; SOBB9: if (!$this->upload->do_upload("\146\x6f\164\x6f")) { goto RefDs; } goto YuMME; Vksnu: $config["\146\151\154\x65\x5f\x6e\x61\x6d\x65"] = "\146\157\x74\x6f\137" . $id_user; goto dh8RT; VunG9: goto C2_yU; goto dxsfQ; LFpil: oDB7q: goto DyqWj; iCRY4: C2_yU: goto nWGSs; aM1e1: $data["\163\x72\143"] = ''; goto GClLa; ayyHY: } function deleteFile() { goto Eoe88; sNI0l: $file_name = str_replace(base_url(), '', $src); goto nvP_A; LaDv8: sGOSa: goto HuELn; tLoXe: echo "\106\x69\x6c\145\x20\x44\x65\x6c\145\164\x65\x20\x53\x75\x63\x63\145\163\163\x66\x75\x6c\x6c\x79"; goto LaDv8; nvP_A: if (!unlink($file_name)) { goto sGOSa; } goto tLoXe; Eoe88: $src = $this->input->post("\163\162\143"); goto sNI0l; HuELn: } function saveProfile() { goto x_HAy; x_HAy: $nama = $this->input->post("\156\141\155\141\x5f\x6c\145\x6e\147\x6b\141\160"); goto I8A3T; pSUnH: $res["\x73\x74\x61\164\165\x73"] = $update; goto wW0IP; UCrmG: $update = $this->db->replace("\165\163\x65\x72\163\x5f\160\x72\157\x66\x69\154\x65", $insert); goto pSUnH; rFaZ5: $foto = $this->input->post("\146\x6f\164\x6f"); goto xRip2; I8A3T: $jabatan = $this->input->post("\152\141\x62\x61\164\141\x6e"); goto rFaZ5; hE9iK: $insert = ["\151\x64\x5f\165\163\145\162" => $user->id, "\156\141\155\141\x5f\154\x65\156\147\153\141\160" => $nama, "\x6a\x61\142\141\164\x61\156" => $jabatan, "\146\157\164\x6f" => str_replace(base_url(), '', $foto)]; goto UCrmG; wW0IP: $this->output_json($res); goto nO_jB; xRip2: $user = $this->ion_auth->user()->row(); goto hE9iK; nO_jB: } }
