<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelascatatan extends CI_Controller { public function __construct() { goto Wgjrl; JZbtn: $this->load->library(["\144\141\164\x61\x74\x61\x62\x6c\x65\x73", "\146\157\x72\155\x5f\166\141\154\151\144\x61\x74\151\157\x6e"]); goto Weeuo; Weeuo: $this->load->model("\x4d\x61\x73\x74\145\162\137\x6d\x6f\144\145\154", "\x6d\x61\x73\164\145\x72"); goto dwd7k; wAtYe: $this->form_validation->set_error_delimiters('', ''); goto fngnH; F1_Rq: YGiyg: goto JZbtn; oU0Z7: yc013: goto zO8nc; EcmB5: show_error("\110\141\x6e\x79\x61\40\x41\144\155\x69\x6e\x69\163\x74\162\141\x74\157\162\40\x79\x61\156\147\x20\144\x69\x62\x65\x72\x69\x20\150\x61\x6b\x20\x75\156\x74\x75\x6b\40\155\x65\156\x67\x61\153\x73\x65\x73\x20\150\141\x6c\x61\x6d\141\156\40\151\156\x69\54\x20\74\141\x20\x68\162\x65\146\x3d\42" . base_url("\144\141\163\x68\142\x6f\141\162\144") . "\x22\76\x4b\145\x6d\x62\x61\x6c\x69\40\153\x65\x20\x6d\x65\x6e\165\40\141\x77\141\x6c\74\57\x61\76", 403, "\101\x6b\163\145\x73\x20\124\145\162\154\x61\x72\x61\156\x67"); goto XtXhV; j6Hlj: $this->load->model("\104\x72\x6f\x70\x64\157\x77\156\137\x6d\x6f\144\145\x6c", "\x64\162\x6f\x70\x64\x6f\x77\x6e"); goto dhnzx; Wgjrl: parent::__construct(); goto SZKJp; SZKJp: if (!$this->ion_auth->logged_in()) { goto yc013; } goto TLMbw; TLMbw: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) { goto SR3oz; } goto EcmB5; nCqLO: goto YGiyg; goto oU0Z7; dwd7k: $this->load->model("\104\x61\163\x68\142\157\141\x72\144\x5f\x6d\x6f\x64\145\x6c", "\144\x61\x73\x68\x62\x6f\x61\x72\x64"); goto j6Hlj; zO8nc: redirect("\141\165\x74\x68"); goto F1_Rq; XtXhV: SR3oz: goto nCqLO; dhnzx: $this->load->model("\x4b\145\154\141\x73\x5f\x6d\157\144\x65\x6c", "\153\145\x6c\141\x73"); goto wAtYe; fngnH: } public function output_json($data, $encode = true) { goto rHN4M; FUbjE: $data = json_encode($data); goto CrqkB; CrqkB: UxDAZ: goto aputb; aputb: $this->output->set_content_type("\141\x70\160\154\x69\143\x61\164\x69\157\156\57\152\163\x6f\x6e")->set_output($data); goto n8g25; rHN4M: if (!$encode) { goto UxDAZ; } goto FUbjE; n8g25: } public function index() { goto r9i0E; LJ31U: goto YCCoZ; goto jXl42; RUQXJ: if (!(count($arrId) > 0)) { goto lJ_u5; } goto rf7b9; c8eQR: $this->load->view("\137\x74\x65\155\x70\x6c\x61\x74\145\163\57\144\x61\x73\x68\x62\x6f\x61\162\144\x2f\137\150\145\141\144\x65\x72", $data); goto LTrCu; UuDe1: $data["\164\x70"] = $this->dashboard->getTahun(); goto JIQOl; REknt: $data["\x6b\145\x6c\141\x73"] = $arrKelas; goto G6mI8; PYoLt: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto JHtlr; JHtlr: $data["\147\x75\x72\x75"] = $guru; goto s2_z8; vSarA: mboGY: goto UmpkE; s2_z8: $data["\151\144\137\147\x75\x72\x75"] = $guru->id_guru; goto Z2r0n; C0s4T: $data["\163\155\164\137\141\143\164\x69\166\145"] = $smt; goto K99gR; Z2r0n: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto PJqqr; JIQOl: $data["\x74\x70\x5f\x61\x63\164\x69\x76\145"] = $tp; goto c5HNC; KkbC3: $setting = $this->dashboard->getSetting(); goto H4cPr; XUJj0: $data["\155\141\x70\x65\x6c"] = $arrMapel; goto REknt; CjT10: $data["\153\x65\154\141\x73\137\x73\145\154\x65\x63\x74\x65\x64"] = $id_kelas; goto EvSVe; TfQma: $arrKelas = []; goto tJyNa; DfCSL: $this->load->view("\155\x65\x6d\142\145\162\x73\x2f\x67\x75\x72\165\57\164\x65\155\160\x6c\x61\164\x65\x73\57\146\x6f\157\x74\145\x72"); goto LJ31U; s8W0D: HTxzX: goto Fqbp4; EvSVe: $data["\155\141\x70\x65\x6c\x5f\x73\145\154\145\x63\164\x65\x64"] = $id_mapel; goto evcns; ZYxS4: vet42: goto EZ0ds; kxdBu: $this->load->view("\155\145\x6d\x62\145\x72\163\57\x67\x75\162\165\57\x6b\x65\154\141\163\x2f\143\141\164\x61\164\x61\156\57\x64\x61\164\141"); goto DfCSL; tJyNa: if (!($mapel != null)) { goto XmiJ2; } goto J_dbX; H4cPr: $data = ["\165\x73\x65\162" => $user, "\152\165\144\165\x6c" => "\x43\x61\x74\x61\164\141\156\x20\107\165\162\165", "\x73\165\142\x6a\x75\x64\165\154" => "\103\x61\164\141\164\x61\x6e\x20\123\x65\x6c\x61\155\x61\40\120\x65\155\x62\145\x6c\x61\152\141\162\x61\x6e", "\163\145\x74\x74\x69\x6e\x67" => $setting]; goto i4Qz3; lYxIt: lJ_u5: goto gc_Ad; i4Qz3: $tp = $this->dashboard->getTahunActive(); goto p9Q0c; LTrCu: $this->load->view("\x6d\145\x6d\x62\x65\162\x73\57\x67\x75\x72\165\57\153\145\x6c\141\163\x2f\143\x61\x74\141\164\x61\x6e\x2f\144\141\164\x61"); goto fag_2; R1a3W: p7_lS: goto ZYxS4; Jz2Tp: YCCoZ: goto dbN6q; QefzN: if ($this->ion_auth->is_admin()) { goto zsgmd; } goto PYoLt; fag_2: $this->load->view("\137\x74\145\x6d\160\154\141\x74\x65\x73\57\144\x61\163\150\x62\x6f\x61\162\144\57\x5f\146\157\157\164\145\162"); goto Jz2Tp; evcns: if (!($id_kelas != null)) { goto pzLfH; } goto sKvrK; J_dbX: foreach ($mapel as $m) { goto CGHti; nD8Fc: foreach ($m->kelas_mapel as $kls_mapel) { goto ItucV; RGGk7: UmBR7: goto uf5_h; ItucV: foreach ($kelasses as $key => $kelass) { goto q96M4; e9Bhd: $arrKelas[$m->id_mapel][$key] = $kelass; goto Mxuz6; Mxuz6: WQySE: goto b3aP1; b3aP1: N06hO: goto nsYgs; q96M4: if (!($kls_mapel->kelas == $key)) { goto WQySE; } goto e9Bhd; nsYgs: } goto UiMT8; UiMT8: tyHCi: goto RGGk7; uf5_h: } goto GOzA9; Unn4R: HzLRm: goto MGMST; CGHti: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto nD8Fc; GOzA9: A177p: goto Unn4R; MGMST: } goto vSarA; c5HNC: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto C0s4T; sKvrK: $cat_kelas = $this->kelas->getCatatanMapelKelas($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto GDsO5; jLTHz: $data["\x63\141\164\137\x73\151\163\167\x61"] = $this->kelas->getCatatanMapelSiswa($tp->id_tp, $smt->id_smt, $id_kelas, $id_mapel); goto F9J8D; jXl42: zsgmd: goto jczKS; gc_Ad: $arrMapel = []; goto TfQma; QkZ1j: $id_mapel = $this->input->get("\155\141\x70\145\154", true); goto CjT10; p9Q0c: $smt = $this->dashboard->getSemesterActive(); goto UuDe1; GDsO5: foreach ($cat_kelas as $ck) { $ck->reading = unserialize($ck->reading); d4TBm: } goto s8W0D; jczKS: $data["\160\x72\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto vGqjI; UmpkE: XmiJ2: goto XUJj0; F9J8D: pzLfH: goto QefzN; K99gR: $id_kelas = $this->input->get("\153\x65\154\x61\x73", true); goto QkZ1j; Fqbp4: $data["\x63\141\x74\137\x6b\145\x6c\x61\163"] = $cat_kelas; goto jLTHz; G6mI8: $this->load->view("\155\145\155\x62\145\x72\x73\x2f\147\165\x72\165\57\x74\x65\155\x70\154\x61\x74\x65\163\x2f\150\x65\x61\x64\145\x72", $data); goto kxdBu; vGqjI: $data["\x6d\x61\x70\x65\x6c"] = $this->dropdown->getAllMapel(); goto Z1Cxf; xhU1e: $arrId = []; goto nSqZa; rf7b9: $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId); goto lYxIt; PZBDd: foreach ($mapel as $mpl) { goto DLO2A; h1THA: V8QsK: goto oOnFE; Ddk1Y: ZCkhb: goto h1THA; DLO2A: foreach ($mpl->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); xg6pO: } goto Ddk1Y; oOnFE: } goto R1a3W; PJqqr: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto xhU1e; Z1Cxf: $data["\153\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto c8eQR; r9i0E: $user = $this->ion_auth->user()->row(); goto KkbC3; EZ0ds: $kelasses = []; goto RUQXJ; nSqZa: if (!($mapel != null)) { goto vet42; } goto PZBDd; dbN6q: } public function siswa() { goto vVe9a; vink0: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto sDD1f; Cn860: $data["\x6d\141\x70\145\154"] = $id_mapel; goto So4dy; d8j_A: $smt = $this->master->getSemesterActive(); goto QKLmZ; QKLmZ: $data["\x74\160"] = $this->dashboard->getTahun(); goto mcGAY; JUOui: q3Xkz: goto yp1v_; P5WLW: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto m1JtM; AVxa1: $tp = $this->master->getTahunActive(); goto d8j_A; zJ25U: $data["\160\162\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto gIK5G; J69RU: if ($this->ion_auth->is_admin()) { goto zkHmg; } goto vink0; qVxRw: $id_mapel = $this->input->get("\x6d\141\160\145\154"); goto PIHwG; eGjPN: $this->load->view("\155\145\155\142\x65\x72\x73\57\147\165\x72\165\x2f\153\145\x6c\x61\163\57\143\141\164\x61\x74\141\x6e\x2f\x70\145\162\163\x69\163\x77\x61"); goto pwub2; gIK5G: $this->load->view("\x5f\x74\145\155\x70\154\141\x74\145\x73\57\144\141\x73\150\x62\x6f\141\162\144\x2f\137\x68\145\x61\x64\x65\x72", $data); goto eGjPN; So4dy: $data["\x6b\x65\154\141\x73"] = $id_kelas; goto J69RU; twpjB: $user = $this->ion_auth->user()->row(); goto fWxrS; PIHwG: $id_kelas = $this->input->get("\153\145\154\x61\163"); goto twpjB; fWxrS: $data = ["\x75\163\145\162" => $user, "\x6a\165\144\165\154" => "\x43\141\164\141\164\x61\x6e\40\x53\x69\x73\167\x61", "\163\165\x62\x6a\165\x64\x75\x6c" => "\103\x61\164\x61\164\141\156\40\x53\151\163\167\141", "\163\x65\x74\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto AVxa1; BJx9p: goto q3Xkz; goto MXPYF; nXRiY: $this->load->view("\x6d\145\155\142\x65\x72\x73\x2f\x67\x75\x72\x75\57\x74\x65\x6d\160\154\x61\x74\x65\163\x2f\150\x65\x61\x64\x65\162", $data); goto S5z13; XzckR: $data["\163\151\x73\167\x61"] = $this->master->getSiswaById($id_siswa); goto RgLL8; RgLL8: $data["\x63\x61\164\x61\164\141\x6e\137\163\x69\163\x77\141"] = $this->kelas->getAllCatatanMapelSiswa($id_siswa, $id_mapel, $tp->id_tp, $smt->id_smt); goto Cn860; S5z13: $this->load->view("\x6d\x65\155\x62\x65\162\163\57\147\x75\x72\x75\57\x6b\145\154\141\163\x2f\143\141\x74\141\x74\x61\156\x2f\x70\145\x72\163\x69\x73\167\141"); goto VgkZk; sDD1f: $data["\x67\165\x72\165"] = $guru; goto nXRiY; VgkZk: $this->load->view("\155\145\155\142\145\x72\163\57\x67\165\x72\x75\57\x74\145\x6d\x70\154\141\x74\x65\x73\x2f\146\157\157\x74\145\x72"); goto BJx9p; pwub2: $this->load->view("\x5f\164\145\155\x70\154\x61\164\145\163\57\x64\x61\x73\x68\142\157\141\162\x64\x2f\x5f\146\157\x6f\x74\x65\162"); goto JUOui; vVe9a: $id_siswa = $this->input->get("\x69\x64"); goto qVxRw; MXPYF: zkHmg: goto zJ25U; mcGAY: $data["\164\160\137\141\x63\x74\151\x76\145"] = $tp; goto P5WLW; m1JtM: $data["\x73\155\164\x5f\x61\143\164\151\x76\x65"] = $smt; goto XzckR; yp1v_: } public function saveCatatanKelas() { goto u8LBs; NramJ: $this->output_json($insert); goto DlM2U; tAvNe: $id_kelas = $this->input->post("\x69\x64\137\153\145\x6c\141\163"); goto wZMzj; ZSOD8: $insert = $this->master->create("\153\145\x6c\x61\163\x5f\x63\141\x74\141\164\x61\x6e\137\x6d\x61\160\x65\154", $data); goto NramJ; HhBRj: $text = $this->input->post("\164\x65\170\x74", true); goto xKJT5; qNETS: $tgl = date("\131\55\x6d\x2d\144"); goto BAgub; u8LBs: $tp = $this->dashboard->getTahunActive(); goto PsNKQ; BAgub: $data = ["\x69\x64\x5f\164\x70" => $tp->id_tp, "\151\x64\x5f\163\x6d\x74" => $smt->id_smt, "\x74\x79\x70\x65" => "\61", "\x69\x64\x5f\x6d\x61\x70\145\x6c" => $id_mapel, "\x69\x64\137\153\x65\154\x61\x73" => $id_kelas, "\151\144\137\147\x75\162\165" => $guru->id_guru, "\x6c\145\x76\x65\x6c" => $level, "\164\x65\170\164" => $text, "\x72\x65\x61\144\x69\x6e\147" => serialize([])]; goto ZSOD8; xKJT5: $level = $this->input->post("\154\145\x76\x65\154", true); goto qNETS; wZMzj: $id_mapel = $this->input->post("\x69\144\137\155\x61\x70\x65\x6c", true); goto HhBRj; l8wg3: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto tAvNe; PsNKQ: $smt = $this->dashboard->getSemesterActive(); goto XVN_j; XVN_j: $user = $this->ion_auth->user()->row(); goto l8wg3; DlM2U: } public function saveCatatanSiswa() { goto a3gVa; YiObk: $smt = $this->dashboard->getSemesterActive(); goto kfWBt; Q4dlm: $data = ["\x69\x64\137\x74\x70" => $tp->id_tp, "\151\144\137\163\155\x74" => $smt->id_smt, "\164\171\x70\x65" => "\x32", "\151\144\137\x6d\x61\x70\145\154" => $id_mapel, "\x69\x64\137\x73\x69\x73\167\x61" => $id_siswa, "\x69\x64\137\x67\165\x72\x75" => $guru->id_guru, "\x6c\145\166\x65\154" => $level, "\164\145\x78\x74" => $text, "\x72\145\141\x64\x69\x6e\147" => serialize([])]; goto AJdCX; kfWBt: $user = $this->ion_auth->user()->row(); goto y9RyQ; rAHCq: $this->output_json($insert); goto Zf03f; kFxTm: $text = $this->input->post("\x74\x65\170\164", true); goto YMGNv; y9RyQ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto nfdbn; a3gVa: $tp = $this->dashboard->getTahunActive(); goto YiObk; nfdbn: $id_siswa = $this->input->post("\x69\144\137\163\x69\163\167\x61"); goto Xk3hK; AJdCX: $insert = $this->master->create("\153\145\154\141\163\137\x63\141\x74\x61\x74\x61\x6e\137\155\x61\x70\x65\x6c", $data); goto rAHCq; Xk3hK: $id_mapel = $this->input->post("\x69\144\137\155\x61\160\x65\154", true); goto kFxTm; YMGNv: $level = $this->input->post("\x6c\145\166\145\x6c", true); goto Q4dlm; Zf03f: } public function hapus($id_catatan) { $delete = $this->master->delete("\153\145\154\x61\x73\137\143\141\x74\x61\x74\141\x6e\137\155\141\160\145\x6c", $id_catatan, "\x69\144\x5f\x63\141\x74\x61\164\141\x6e"); $this->output_json($delete); } }
