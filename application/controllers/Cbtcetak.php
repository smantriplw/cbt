<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtcetak extends CI_Controller { public function __construct() { goto O5pzL; vV7Ig: show_error("\110\141\156\171\141\40\x41\x64\x6d\151\x6e\x69\163\164\162\141\x74\x6f\162\40\x79\x61\156\147\40\x64\x69\x62\145\x72\x69\40\150\141\x6b\x20\165\x6e\164\165\153\x20\x6d\x65\x6e\147\x61\153\163\145\x73\x20\x68\141\x6c\x61\155\x61\156\40\151\x6e\x69\x2c\40\74\141\40\x68\x72\x65\146\75\42" . base_url("\x64\x61\x73\150\x62\x6f\x61\162\144") . "\42\76\113\145\x6d\142\x61\154\151\x20\x6b\145\x20\155\145\x6e\165\x20\x61\x77\x61\x6c\x3c\57\141\x3e", 403, "\101\153\x73\x65\x73\40\x54\x65\x72\154\x61\x72\x61\x6e\x67"); goto rixtL; TBVv2: $this->load->model("\104\162\x6f\x70\144\x6f\x77\156\x5f\x6d\x6f\x64\x65\x6c", "\144\162\157\x70\x64\x6f\167\156"); goto KAgD0; O5pzL: parent::__construct(); goto kcVxV; kcVxV: if (!$this->ion_auth->logged_in()) { goto lIgqB; } goto Ebwf6; QSlW0: lIgqB: goto LPOKM; cwNCT: $this->load->model("\104\x61\x73\x68\x62\157\x61\x72\x64\137\x6d\157\144\x65\x6c", "\x64\141\163\150\x62\157\141\162\144"); goto jEImw; LPOKM: redirect("\x61\x75\x74\x68"); goto PaYfc; XJ6u4: goto ssKiR; goto QSlW0; jEImw: $this->load->model("\103\x62\164\x5f\155\x6f\x64\x65\x6c", "\x63\x62\x74"); goto TBVv2; Br8FJ: $this->load->model("\x4d\x61\163\x74\x65\162\x5f\155\x6f\144\x65\x6c", "\155\x61\x73\164\x65\x72"); goto FITzV; rixtL: hjSJc: goto XJ6u4; KAgD0: $this->load->model("\x52\141\x70\x6f\x72\137\x6d\157\x64\x65\x6c", "\x72\x61\160\157\162"); goto QxNLh; Ebwf6: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\x75"))) { goto hjSJc; } goto vV7Ig; rm2mt: $this->load->library(["\x64\x61\x74\141\164\x61\x62\x6c\x65\x73", "\146\x6f\x72\155\x5f\166\x61\x6c\151\144\141\164\x69\x6f\156"]); goto YXaaR; PaYfc: ssKiR: goto rm2mt; YXaaR: $this->load->library("\165\160\x6c\x6f\x61\x64"); goto Br8FJ; FITzV: $this->load->model("\x4b\x65\154\x61\163\137\155\157\x64\145\154", "\x6b\x65\x6c\x61\163"); goto cwNCT; QxNLh: $this->form_validation->set_error_delimiters('', ''); goto HU1qY; HU1qY: } public function output_json($data, $encode = true) { goto V1F82; B2Kd9: bCD1O: goto U3oU7; V1F82: if (!$encode) { goto bCD1O; } goto ab2uM; ab2uM: $data = json_encode($data); goto B2Kd9; U3oU7: $this->output->set_content_type("\x61\160\160\x6c\151\143\x61\x74\x69\x6f\156\x2f\x6a\x73\x6f\156")->set_output($data); goto VMGxO; VMGxO: } public function index() { goto ZePki; gjQeE: RmMA5: goto rKtvu; Xdmb1: $data = ["\165\x73\x65\x72" => $user, "\x6a\x75\144\165\x6c" => "\103\145\x74\141\153\x20\104\x61\164\x61\x20\120\x65\x6e\x69\154\x61\151\141\156", "\x73\x75\142\x6a\x75\x64\x75\154" => "\x43\145\164\141\x6b", "\x70\x72\x6f\146\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto EuaMK; EuaMK: $tp = $this->master->getTahunActive(); goto RiKjG; u9WD8: $this->load->view("\143\x62\x74\x2f\x63\x65\x74\141\x6b\x2f\144\x61\164\141"); goto fwhL8; m40Yr: $ids_pengawas = []; goto NIm3S; Dgrx6: $this->load->view("\x5f\x74\145\155\160\x6c\141\x74\x65\x73\57\144\141\163\x68\x62\x6f\141\162\x64\57\x5f\x68\x65\x61\144\145\162", $data); goto u9WD8; oHzqU: goto shw08; goto qxEE1; ZePki: $user = $this->ion_auth->user()->row(); goto Xdmb1; r6eGy: shw08: goto xfTm9; rKtvu: $data["\151\x64\x73\137\160\145\156\147\x61\x77\141\x73"] = $ids_pengawas; goto vPvaa; RiKjG: $smt = $this->master->getSemesterActive(); goto FQpc7; yx6Cz: $data["\x70\145\156\x67\141\x77\141\163"] = $pengawas; goto m40Yr; FQpc7: $data["\164\160"] = $this->dashboard->getTahun(); goto uR6S9; BqA8S: $data["\163\155\x74\137\141\143\164\151\166\x65"] = $smt; goto rZ4FC; uVzq4: $pengawas = $this->cbt->getPengawasHariIni(date("\131\x2d\155\x2d\x64")); goto yx6Cz; rg3gE: $this->load->view("\143\142\x74\57\143\x65\x74\141\x6b\x2f\x64\x61\x74\x61"); goto a12hi; a12hi: $this->load->view("\x6d\x65\155\142\145\162\x73\57\147\x75\x72\x75\57\164\145\155\x70\154\x61\164\145\163\x2f\146\x6f\x6f\164\145\162"); goto oHzqU; uR6S9: $data["\x74\x70\137\x61\x63\x74\x69\166\x65"] = $tp; goto iLDw7; RUxZk: $data["\x67\x75\162\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto uVzq4; B3uWq: if ($this->ion_auth->is_admin()) { goto deRuz; } goto RUxZk; fwhL8: $this->load->view("\x5f\164\x65\x6d\160\154\x61\x74\145\163\x2f\x64\x61\x73\x68\x62\x6f\x61\x72\144\57\137\146\x6f\157\x74\145\x72"); goto r6eGy; qxEE1: deRuz: goto Dgrx6; iLDw7: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto BqA8S; rZ4FC: $data["\153\157\x70"] = $this->cbt->getSettingKopAbsensi(); goto B3uWq; NIm3S: foreach ($pengawas as $pws) { goto YSANR; xSs3M: HmYaX: goto kTrlX; wwmcK: foreach ($ids as $id) { goto s3_uj; WMMxi: $ids_pengawas[] = $id; goto tCuIo; s3_uj: if (!(!in_array($id, $ids_pengawas) && $id != '')) { goto GBLyr; } goto WMMxi; oLIkF: zUhqI: goto I_nhS; tCuIo: GBLyr: goto oLIkF; I_nhS: } goto xSs3M; kTrlX: p1VcE: goto si2K4; YSANR: $ids = explode("\x2c", $pws->id_guru); goto wwmcK; si2K4: } goto gjQeE; vPvaa: $this->load->view("\x6d\x65\x6d\x62\145\162\x73\x2f\x67\165\162\165\57\164\145\x6d\x70\x6c\141\164\x65\163\57\x68\145\x61\144\145\162", $data); goto rg3gE; xfTm9: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function kartuPeserta() { goto FbXAh; jfK55: $data["\x6b\141\162\164\165"] = $this->cbt->getSettingKartu(); goto tNKaK; dsGJT: $smt = $this->dashboard->getSemesterActive(); goto Re5px; fdnb9: $data["\x73\155\x74\x5f\x61\x63\164\x69\166\145"] = $smt; goto jfK55; tNKaK: $data["\153\x65\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto QH0DI; QH0DI: $data["\162\x75\141\x6e\x67"] = $this->dropdown->getAllRuang(); goto XIC3t; HHpbq: $this->load->view("\143\142\x74\57\143\145\164\x61\153\x2f\x6b\141\162\x74\x75"); goto ciFCL; VnisH: $data = ["\x75\163\145\162" => $user, "\x6a\x75\x64\165\x6c" => "\103\145\x74\141\153\x20\x4b\x61\162\x74\x75\x20\x50\x65\163\x65\x72\164\x61", "\x73\x75\142\x6a\165\x64\x75\x6c" => "\103\x65\164\x61\153", "\160\162\157\x66\151\154\145" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\151\x6e\147" => $this->dashboard->getSetting()]; goto es2n4; yB57E: $this->load->view("\137\164\x65\155\x70\x6c\141\164\145\163\57\144\x61\x73\150\142\x6f\141\162\x64\57\x5f\150\x65\141\144\x65\x72", $data); goto HHpbq; es2n4: $tp = $this->dashboard->getTahunActive(); goto dsGJT; Re5px: $data["\164\160"] = $this->dashboard->getTahun(); goto qOWh2; XIC3t: $data["\x73\145\x74\164\x69\x6e\x67\137\x72\x61\x70\x6f\162"] = $this->rapor->getRaporSetting($tp->id_tp, $smt->id_smt); goto yB57E; FbXAh: $user = $this->ion_auth->user()->row(); goto VnisH; ciFCL: $this->load->view("\x5f\x74\145\x6d\160\x6c\141\164\x65\x73\x2f\144\141\x73\x68\142\x6f\x61\x72\x64\x2f\x5f\x66\157\157\164\145\162"); goto D2ouh; fCZqN: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto fdnb9; qOWh2: $data["\164\x70\137\x61\143\164\151\x76\x65"] = $tp; goto fCZqN; D2ouh: } function uploadFile($logo) { goto jpUwP; xm2pR: vvoPf: goto ZshBe; C7NZ8: Mij2m: goto WbZuK; vnVr6: $result = $this->upload->data(); goto fYJrY; XSch3: $data["\163\x72\x63"] = ''; goto c9AX3; mvUTF: $data["\146\x69\x6c\145\x6e\x61\155\145"] = pathinfo($result["\146\x69\154\145\137\156\141\155\x65"], PATHINFO_FILENAME); goto H3pTe; EKxIh: $config["\x75\160\154\x6f\141\x64\x5f\x70\x61\x74\150"] = "\x2e\x2f\x75\160\x6c\x6f\x61\x64\163\57\x73\x65\164\164\151\156\x67\163\x2f"; goto PAY1N; mJNff: $config["\157\166\145\162\x77\x72\x69\x74\145"] = true; goto qIzbf; fYJrY: $data["\x73\162\x63"] = base_url() . "\165\160\x6c\157\141\144\163\x2f\163\x65\x74\x74\151\156\x67\x73\x2f" . $result["\x66\151\154\x65\x5f\x6e\141\x6d\145"]; goto mvUTF; pLSKZ: $data["\x73\x74\x61\164\165\163"] = false; goto ObO0W; ZshBe: $this->output_json($data); goto PmhZk; c9AX3: goto vvoPf; goto F8Nlt; jpUwP: if (isset($_FILES["\154\x6f\x67\x6f"]["\x6e\x61\155\x65"])) { goto TmEKj; } goto XSch3; vfRiu: if (!$this->upload->do_upload("\154\x6f\147\157")) { goto wkCyc; } goto vnVr6; ObO0W: $data["\163\162\x63"] = $this->upload->display_errors(); goto C7NZ8; oQKnU: goto Mij2m; goto pHq_P; PAY1N: $config["\141\x6c\x6c\157\167\x65\144\x5f\x74\x79\160\x65\163"] = "\147\x69\x66\174\152\160\x67\x7c\x70\156\x67\174\152\x70\145\147\x7c\x4a\120\105\107\174\x4a\x50\107\x7c\x50\116\x47\x7c\107\111\x46"; goto mJNff; vOENZ: $data["\163\151\172\145"] = $_FILES["\154\x6f\x67\157"]["\x73\151\172\145"]; goto xm2pR; pHq_P: wkCyc: goto pLSKZ; H3pTe: $data["\163\x74\x61\164\165\x73"] = true; goto oQKnU; F8Nlt: TmEKj: goto EKxIh; qIzbf: $config["\x66\151\154\x65\137\x6e\x61\155\x65"] = $logo; goto FGVmf; FGVmf: $this->upload->initialize($config); goto vfRiu; WbZuK: $data["\164\171\x70\145"] = $_FILES["\x6c\157\x67\157"]["\x74\171\x70\145"]; goto vOENZ; PmhZk: } function deleteFile() { goto smgPc; EfvAP: OHgHS: goto e_Nap; NbsoE: $file_name = str_replace(base_url(), '', $src); goto GJamO; pZFwZ: echo "\106\x69\154\x65\40\x44\x65\154\x65\164\145\40\x53\165\143\x63\145\x73\163\146\x75\154\154\x79"; goto EfvAP; smgPc: $src = $this->input->post("\x73\162\x63"); goto NbsoE; GJamO: if (!unlink($file_name)) { goto OHgHS; } goto pZFwZ; e_Nap: } public function saveKartu() { goto rBg6X; rBg6X: $header_1 = $this->input->post("\x68\145\141\x64\x65\162\x5f\x31", true); goto RoGdF; uvMg5: $tanggal = $this->input->post("\164\x61\156\x67\x67\x61\x6c", true); goto NVEP1; CEjyc: $header_3 = $this->input->post("\150\x65\141\x64\145\x72\137\63", true); goto zsZ3Y; zsZ3Y: $header_4 = $this->input->post("\150\x65\x61\144\x65\x72\137\64", true); goto uvMg5; RoGdF: $header_2 = $this->input->post("\x68\145\x61\144\x65\162\137\x32", true); goto CEjyc; xQJcZ: $this->output_json($update); goto AH5Za; NVEP1: $insert = ["\x69\x64\137\163\145\x74\x5f\x6b\141\162\x74\165" => 123456, "\150\145\141\x64\145\162\137\x31" => $header_1, "\150\x65\x61\x64\x65\x72\x5f\62" => $header_2, "\150\145\141\x64\x65\162\x5f\x33" => $header_3, "\x68\x65\141\144\145\162\137\64" => $header_4, "\x74\x61\x6e\147\147\x61\154" => $tanggal]; goto HKbwc; HKbwc: $update = $this->db->replace("\143\142\x74\x5f\153\x6f\x70\137\x6b\141\162\x74\x75", $insert); goto xQJcZ; AH5Za: } public function getSiswaKelas() { goto iMAja; iWV2J: $pengawass = $this->cbt->getPengawasByJadwal($tp->id_tp, $smt->id_smt, $jadwal, $sesi); goto r2BDP; EX8te: $pengawas = []; goto q6fUU; hbsIb: $ijadwal = $this->cbt->getJadwalById($jadwal, $s); goto SDPXM; WI4kO: $s = !$sesi ? null : $sesi; goto RxXO7; M3NqW: $ikelas = $this->kelas->getIdKelas($tp->id_tp, $smt->id_smt); goto SmwNZ; iMAja: $sesi = $this->input->get("\163\x65\x73\x69"); goto rcYfS; oWDM7: $smt = $this->dashboard->getSemesterActive(); goto iWV2J; SDPXM: UvpaA: goto qg2Nb; RxXO7: $isesi = null; goto Z3rFd; rAKrh: $kelas = $this->input->get("\x6b\x65\x6c\141\163"); goto ueHZ_; q6fUU: if (!($jadwal != null && $jadwal != "\x6e\165\154\154")) { goto UvpaA; } goto iJlBh; Dr7Y0: $ijadwal = null; goto EX8te; SmwNZ: $kelas = $ikelas; goto yRERx; ueHZ_: if ($kelas == "\x61\154\154") { goto M0zvt; } goto oUHU_; GPwAT: $data["\x69\156\146\157"] = ["\x6b\145\x6c\141\163" => $ikelas, "\x73\x65\163\x69" => $isesi, "\x6a\141\144\x77\x61\x6c" => $ijadwal, "\x70\145\x6e\x67\x61\x77\x61\163" => $pengawas]; goto QKMO3; r2BDP: $pengawas = []; goto gqILY; QKMO3: $this->output_json($data); goto cFOUc; oJE40: Lq8lx: goto Dr7Y0; FfvoH: zG_s0: goto hbsIb; EQkFF: foreach ($siswas as $siswa) { array_push($data["\x73\151\163\x77\x61"], $siswa); AY3zb: } goto VzVt2; gqILY: foreach ($pengawass as $p) { goto s7N6Z; s7N6Z: if (!(count(explode("\54", $p->id_guru)) > 0)) { goto h3iKF; } goto KTDUP; jffmC: sXLPK: goto FWEx3; nei21: h3iKF: goto jffmC; KTDUP: array_push($pengawas, $this->master->getGuruByArrId(explode("\54", $p->id_guru))); goto nei21; FWEx3: } goto FfvoH; XfqFH: $smt = $this->dashboard->getSemesterActive(); goto rAKrh; aIzw1: $isesi = $this->cbt->getSesiById($s); goto oJE40; rcYfS: $jadwal = $this->input->get("\x6a\141\144\167\x61\x6c"); goto l3P7j; VzVt2: q4iXF: goto GPwAT; yRERx: R2R0q: goto WI4kO; dm0ia: goto R2R0q; goto zp90a; oUHU_: $ikelas = $this->master->getKelasById($kelas); goto dm0ia; zp90a: M0zvt: goto M3NqW; iJlBh: $tp = $this->dashboard->getTahunActive(); goto oWDM7; Fl79q: $siswas = $this->cbt->getRuangSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas, $s); goto EQkFF; Z3rFd: if (!($s != null)) { goto Lq8lx; } goto aIzw1; qg2Nb: $data["\x73\x69\x73\167\x61"] = []; goto Fl79q; l3P7j: $tp = $this->dashboard->getTahunActive(); goto XfqFH; cFOUc: } public function getSiswaRuang() { goto SIHDY; weR1R: $tp = $this->dashboard->getTahunActive(); goto IifOX; E4S8k: $s = $sesi == "\156\x75\x6c\x6c" ? null : $sesi; goto BBi8z; FRQUd: $pengawass = $this->cbt->getPengawas($tp->id_tp . $smt->id_smt . $jadwal . $ruang . $sesi); goto gkrm_; GjKxQ: Anhm0: goto FRQUd; L0gqa: $data["\x69\156\146\x6f"] = ["\162\x75\x61\156\x67" => $iruang, "\x73\x65\x73\x69" => $isesi, "\152\141\144\x77\x61\154" => $ijadwal, "\x70\145\x6e\x67\141\x77\x61\163" => $pengawas]; goto mEc4F; BBi8z: $isesi = null; goto J3H3j; J3H3j: if (!($s != null)) { goto yl0EU; } goto F69T1; P2qxk: $jadwal = $this->input->get("\152\x61\144\167\x61\154"); goto weR1R; QI52h: $iruang = $this->cbt->getRuangById($ruang); goto E4S8k; wTBmX: $sesi = $this->input->get("\x73\x65\163\x69"); goto P2qxk; KQTGp: KZXYB: goto mjToV; mjToV: $data["\x73\151\163\167\141"] = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ruang, $s); goto L0gqa; aCSFK: if (!($jadwal != null && $jadwal != "\x6e\x75\154\x6c")) { goto Anhm0; } goto LZi3r; gkrm_: $pengawas = []; goto Lj93t; IifOX: $smt = $this->dashboard->getSemesterActive(); goto QI52h; GOqJG: $pengawas = $this->master->getGuruByArrId(explode("\54", $pengawass->id_guru)); goto KQTGp; LZi3r: $ijadwal = $this->cbt->getJadwalById($jadwal, $s); goto GjKxQ; SIHDY: $ruang = $this->input->get("\162\x75\141\156\x67"); goto wTBmX; mEc4F: $this->output_json($data); goto kkAbU; Lj93t: if (!($pengawass != null && count(explode("\54", $pengawass->id_guru)) > 0)) { goto KZXYB; } goto GOqJG; jl1nC: yl0EU: goto Ndjr4; Ndjr4: $ijadwal = null; goto aCSFK; F69T1: $isesi = $this->cbt->getSesiById($s); goto jl1nC; kkAbU: } public function saveKop() { goto qBH3z; sr_Yb: $header_4 = $this->input->post("\150\x65\141\x64\x65\x72\137\x34", true); goto Ec6OQ; qBH3z: $header_1 = $this->input->post("\x68\145\x61\144\145\162\137\x31", true); goto DeOh5; Ec6OQ: $proktor = $this->input->post("\x70\x72\157\153\x74\x6f\x72", true); goto lKmh2; FUrRS: $header_3 = $this->input->post("\x68\145\141\x64\145\162\137\63", true); goto sr_Yb; lKmh2: $pengawas_1 = $this->input->post("\x70\x65\x6e\x67\x61\x77\141\163\137\x31", true); goto D7z0c; D7z0c: $pengawas_2 = $this->input->post("\x70\145\x6e\147\141\x77\141\x73\137\62", true); goto Y3oiA; DeOh5: $header_2 = $this->input->post("\150\145\141\x64\145\x72\137\62", true); goto FUrRS; Y3oiA: $insert = ["\x69\x64\137\x6b\x6f\x70" => 123456, "\x68\145\141\144\x65\x72\137\61" => $header_1, "\x68\145\x61\144\145\x72\x5f\62" => $header_2, "\x68\145\x61\x64\145\x72\x5f\x33" => $header_3, "\x68\x65\141\x64\x65\x72\x5f\x34" => $header_4, "\x70\162\x6f\153\x74\157\162" => $proktor, "\x70\x65\156\147\x61\x77\x61\163\x5f\x31" => $pengawas_1, "\x70\145\x6e\x67\x61\x77\x61\x73\137\x32" => $pengawas_2]; goto yio_o; lorlv: $this->output_json($update); goto tDQVs; yio_o: $update = $this->db->replace("\x63\142\164\137\153\x6f\160\137\141\x62\x73\145\156\x73\x69", $insert); goto lorlv; tDQVs: } public function absenPeserta() { goto y2EaT; pRbT9: $data["\x73\145\x73\151"] = $this->dropdown->getAllSesi(); goto UEQnt; HqWLC: $data["\152\x61\x64\167\x61\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto O0_SD; t6b2W: $this->load->view("\137\164\145\155\160\154\x61\x74\x65\163\x2f\x64\x61\x73\x68\142\157\x61\162\144\57\x5f\x68\x65\141\x64\x65\x72", $data); goto wZHHu; rdYNV: $smt = $this->dashboard->getSemesterActive(); goto Vejd0; ZaKtk: $data["\163\155\164"] = $this->dashboard->getSemester(); goto LKJx_; wZHHu: $this->load->view("\x63\142\164\x2f\x63\x65\x74\x61\153\x2f\x61\142\163\145\x6e"); goto DFMd2; O0_SD: $data["\x6b\x65\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto w5asr; w5asr: $data["\x72\165\x61\x6e\147"] = $this->dropdown->getAllRuang(); goto pRbT9; glV4Z: $tp = $this->dashboard->getTahunActive(); goto rdYNV; LKJx_: $data["\x73\155\x74\137\141\x63\164\151\x76\x65"] = $smt; goto HqWLC; y2EaT: $user = $this->ion_auth->user()->row(); goto ZbCG8; Vejd0: $data["\164\160"] = $this->dashboard->getTahun(); goto D4rg6; D4rg6: $data["\x74\160\x5f\x61\x63\x74\x69\x76\145"] = $tp; goto ZaKtk; ZbCG8: $data = ["\x75\163\145\162" => $user, "\x6a\165\144\x75\x6c" => "\x43\x65\164\x61\153\40\104\x61\146\x74\141\x72\40\x4b\145\150\x61\x64\x69\162\141\x6e", "\163\165\x62\152\165\x64\x75\x6c" => "\103\x65\x74\x61\x6b", "\160\162\x6f\x66\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\156\x67" => $this->dashboard->getSetting()]; goto glV4Z; UEQnt: $data["\x6b\x6f\160"] = $this->cbt->getSettingKopAbsensi(); goto t6b2W; DFMd2: $this->load->view("\x5f\164\x65\x6d\x70\x6c\141\164\145\163\57\144\141\x73\150\142\x6f\141\162\x64\x2f\137\x66\157\157\164\x65\162"); goto eIwad; eIwad: } public function beritaAcara() { goto ytccN; WajMR: $smt = $this->dashboard->getSemesterActive(); goto V4sA9; y1yMA: $data["\x73\x65\x73\x69"] = $this->dropdown->getAllSesi(); goto Oyshs; GiVWH: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto dBdYy; BVBh7: $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\164\145\163\x2f\144\x61\x73\x68\142\157\x61\162\144\57\137\x68\x65\x61\x64\x65\162", $data); goto MPFyn; E5kFb: $data["\153\145\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto TgjYs; spVPU: $data["\x74\x70\137\141\x63\164\x69\166\145"] = $tp; goto GiVWH; MPFyn: $this->load->view("\143\x62\164\x2f\143\x65\x74\x61\153\57\x62\145\x72\x69\x74\141\x61\x63\x61\162\141"); goto V3I0r; V4sA9: $data["\x74\x70"] = $this->dashboard->getTahun(); goto spVPU; dJPny: $tp = $this->dashboard->getTahunActive(); goto WajMR; dBdYy: $data["\x73\x6d\x74\137\141\143\x74\x69\x76\145"] = $smt; goto J0c0A; ytccN: $user = $this->ion_auth->user()->row(); goto oWwty; Oyshs: $data["\x6b\157\x70"] = $this->cbt->getSettingKopBeritaAcara(); goto BVBh7; TgjYs: $data["\162\165\x61\x6e\x67"] = $this->dropdown->getAllRuang(); goto y1yMA; J0c0A: $data["\152\141\144\167\141\154"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto E5kFb; V3I0r: $this->load->view("\137\x74\x65\155\160\x6c\141\164\145\x73\57\x64\x61\163\x68\x62\157\141\162\x64\57\137\x66\x6f\157\x74\x65\x72"); goto G_HI6; oWwty: $data = ["\x75\x73\x65\x72" => $user, "\x6a\165\144\165\x6c" => "\x43\145\x74\x61\x6b\x20\x42\x65\162\151\164\141\40\101\143\141\162\141", "\163\x75\142\152\x75\144\x75\154" => "\103\x65\x74\x61\x6b", "\160\162\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\151\156\x67" => $this->dashboard->getSetting()]; goto dJPny; G_HI6: } public function saveKopBerita() { goto M2uV3; lGB86: $header_4 = $this->input->post("\150\145\141\x64\x65\x72\x5f\64", true); goto YYA9v; Y2zzm: $update = $this->db->replace("\143\x62\164\137\153\157\x70\137\x62\x65\x72\151\164\141", $insert); goto qFYVV; CMeG9: $header_3 = $this->input->post("\150\x65\x61\x64\x65\x72\x5f\63", true); goto lGB86; YYA9v: $insert = ["\151\144\x5f\153\157\x70" => 123456, "\150\145\141\144\x65\162\137\61" => $header_1, "\150\x65\x61\144\x65\162\137\62" => $header_2, "\150\x65\141\144\x65\x72\x5f\63" => $header_3, "\x68\145\x61\x64\x65\162\137\x34" => $header_4]; goto Y2zzm; qFYVV: $this->output_json($update); goto W0hN0; M2uV3: $header_1 = $this->input->post("\150\145\141\x64\145\x72\137\61", true); goto e4CqW; e4CqW: $header_2 = $this->input->post("\x68\x65\x61\x64\145\x72\137\62", true); goto CMeG9; W0hN0: } public function pesertaUjian($mode = null) { goto SRNgE; ds5tE: $data["\164\160\137\141\x63\x74\151\166\145"] = $tp; goto NGypj; rM7rN: $this->load->view("\143\142\164\57\x63\x65\164\x61\153\x2f\160\145\x73\x65\x72\164\141\165\x6a\151\141\x6e"); goto kX1X8; phkxb: $data["\x73\x69\x73\x77\141"] = $this->cbt->getAllPesertaByRuang($tp->id_tp, $smt->id_smt); goto hzSzN; hzSzN: O1unj: goto Cvauh; Zcx7L: if ($mode == "\61" || $mode == null) { goto IUb8R; } goto O5a9i; v8vyK: $data["\163\x65\x73\x69\163"] = $this->cbt->getAllKodeSesi(); goto HwOmN; HwOmN: $data["\x6b\157\x70"] = $this->dashboard->getSetting(); goto GvGu8; NGypj: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto MLh1C; GvGu8: $data["\165\152\x69\141\156"] = $this->dropdown->getAllJenisUjian(); goto Qo8YD; O4EbK: $data["\162\165\x61\156\x67\x73"] = $this->dropdown->getAllRuang(); goto v8vyK; NqKkE: $data = ["\165\163\145\162" => $user, "\152\x75\144\x75\x6c" => "\103\145\164\x61\153\40\104\141\x66\x74\x61\x72\x20\x50\145\x73\145\x72\164\x61", "\x73\165\x62\152\x75\144\165\x6c" => "\103\145\x74\x61\153", "\x70\x72\x6f\146\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto CvSo0; Cvauh: $this->load->view("\137\x74\145\155\x70\154\x61\164\x65\163\57\x64\x61\163\x68\x62\157\x61\162\144\57\x5f\x68\145\x61\144\145\x72", $data); goto rM7rN; k8c3a: $data["\x74\x70"] = $this->dashboard->getTahun(); goto ds5tE; Qo8YD: $data["\x6d\157\144\145"] = $mode; goto Zcx7L; O5a9i: $data["\x73\151\x73\167\x61"] = $this->cbt->getAllPesertaByKelas($tp->id_tp, $smt->id_smt); goto IHklx; MLh1C: $data["\x73\155\x74\137\141\143\164\151\x76\x65"] = $smt; goto to11_; kX1X8: $this->load->view("\137\x74\x65\155\160\154\x61\x74\145\x73\x2f\x64\141\163\150\142\157\x61\162\x64\57\x5f\x66\x6f\x6f\164\145\x72"); goto O2iGD; yzE69: $smt = $this->dashboard->getSemesterActive(); goto k8c3a; IHklx: goto O1unj; goto b8hrN; b8hrN: IUb8R: goto phkxb; SRNgE: $user = $this->ion_auth->user()->row(); goto NqKkE; to11_: $data["\153\x65\154\141\x73\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto O4EbK; CvSo0: $tp = $this->dashboard->getTahunActive(); goto yzE69; O2iGD: } public function pengawas() { goto o2RFH; x8Vxq: $pengawas = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt); goto zdKel; H9sxY: $data["\152\141\x64\x77\x61\x6c\x73\137\162\165\141\x6e\147"] = $perRuang; goto Umy3y; Qlq7K: $data["\x6a\145\x6e\x69\x73"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto OByT0; Yz1s9: $data["\146\x69\x6c\x74\x65\162"] = ["\x30" => "\x53\145\x6d\x75\141", "\x31" => "\x54\141\156\x67\x67\x61\154"]; goto bbIbX; zdKel: EyVOq: goto M5lBf; CDiDm: jGT4u: goto rtVOh; uztZc: if (!($jenis_selected != null)) { goto jdnPC; } goto Eqc5z; L3sEq: TZA4b: goto zuQg3; jv5mS: $this->load->view("\x5f\164\145\x6d\160\154\141\164\x65\163\x2f\144\x61\163\x68\x62\x6f\x61\x72\144\x2f\x5f\150\x65\x61\144\145\x72", $data); goto DAzUb; PDj2l: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto Xchtt; wIeW_: $data = ["\x75\x73\145\162" => $user, "\x6a\x75\144\x75\x6c" => "\112\x61\144\x77\141\154\40\120\145\156\147\141\x77\x61\163", "\x73\165\x62\152\165\x64\x75\x6c" => "\x43\x65\x74\x61\153\x20\x4a\x61\x64\167\x61\154\x20\120\x65\x6e\147\x61\x77\141\163", "\x73\x65\x74\164\x69\x6e\x67" => $setting]; goto q1xIQ; DAzUb: $this->load->view("\x63\x62\164\x2f\143\x65\x74\x61\x6b\57\160\x65\156\147\141\x77\x61\x73"); goto Heabg; zuQg3: $jadwal_pengawas = []; goto ZtdJ_; SefiE: if (count($ids) > 0) { goto uzwk0; } goto jSehL; g22j3: $data["\x66\x69\x6c\164\x65\x72\x5f\163\145\x6c\145\143\x74\x65\x64"] = $filter_selected; goto MDHH5; PLQ5X: $data["\152\141\x64\x77\141\154\x73"] = $result; goto H9sxY; a41bG: if (!($jenis_selected != null)) { goto EyVOq; } goto x8Vxq; jSehL: $data["\x6a\x65\156\x69\163"] = ['' => "\142\145\x6c\x75\x6d\x20\x61\x64\141\x20\152\141\144\x77\141\x6c\x20\165\152\151\x61\156"]; goto DpEEM; Eqc5z: $jadwals = $this->cbt->getJadwalByJenis($jenis_selected, "\60", $dari_selected, $sampai_selected); goto sryYY; ZtdJ_: if (!(count($arrKls) > 0)) { goto jGT4u; } goto Pbqms; PRyb5: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); bqF3b: } goto DY7dt; ZwTDR: $data["\163\x61\155\160\x61\x69\137\x73\x65\154\x65\143\x74\145\144"] = $sampai_selected; goto zwja3; Xchtt: $ids = []; goto lJzrn; QW2Sl: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto HYYjy; o2RFH: $user = $this->ion_auth->user()->row(); goto mJ__h; q1xIQ: $tp = $this->dashboard->getTahunActive(); goto SOXma; wHGoa: if (!(count($arrLevel) > 0)) { goto OHw6T; } goto bttD_; VFRqu: $data["\153\x65\x6c\x61\x73\x5f\x6c\x65\x76\x65\x6c"] = $kelas_level; goto IyQPw; QtTCe: foreach ($jadwals as $jadwal) { goto y9FMJ; YcOaY: fjgLM: goto umT5U; umT5U: BmDU5: goto cHEsP; Hqy7I: array_push($arrLevel, $jadwal->bank_level); goto YcOaY; y9FMJ: if (in_array($jadwal->bank_level, $arrLevel)) { goto fjgLM; } goto Hqy7I; cHEsP: } goto lA4k1; EVtbl: $filter_selected = $this->input->get("\x66\151\154\x74\145\x72", true); goto utsno; lA4k1: gLCBO: goto TY3st; DzGA2: jBGl2: goto SefiE; dQFfk: uzwk0: goto Qlq7K; MDHH5: $data["\144\141\x72\x69\x5f\x73\145\154\145\143\164\x65\x64"] = $dari_selected; goto ZwTDR; OByT0: ckaYr: goto EVtbl; gkOH7: $result = []; goto GnPEN; s4Vxi: $data["\x72\x75\141\x6e\x67"] = $ruangs; goto ejP3v; AbAdB: $data["\x73\x65\163\151"] = $this->dropdown->getAllSesi(); goto jv5mS; DpEEM: goto ckaYr; goto dQFfk; D0Ilg: $jenis_ujian = $this->cbt->getJenisById($jenis_selected); goto wIeW_; hpmYX: $gurus = $this->dropdown->getAllGuru(); goto JXwGS; zwja3: $pengawas = []; goto a41bG; DY7dt: YBE4G: goto DzGA2; utsno: $dari_selected = $this->input->get("\x64\141\162\151", true); goto jXFHy; Q3hNM: $data["\164\160\137\141\143\x74\151\x76\145"] = $tp; goto QW2Sl; SOXma: $smt = $this->dashboard->getSemesterActive(); goto Y5wBz; lJzrn: if (!(count($id_jenis) > 0)) { goto jBGl2; } goto PRyb5; zkDbX: Op3Sl: goto CDiDm; mJ__h: $setting = $this->dashboard->getSetting(); goto hcfE1; M5lBf: $data["\160\145\x6e\x67\141\x77\141\163"] = $pengawas; goto hpmYX; JXwGS: $jadwals = []; goto uztZc; Umy3y: $data["\160\x72\157\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto yFx9q; HYYjy: $data["\x73\155\164\137\141\x63\164\x69\x76\145"] = $smt; goto PDj2l; sryYY: jdnPC: goto Tj3Pa; hcfE1: $jenis_selected = $this->input->get("\152\x65\x6e\151\163", true); goto D0Ilg; tpxsR: MeeR6: goto PLQ5X; TY3st: $kelas_level = []; goto wHGoa; Pbqms: $ruangs = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, $arrKls); goto s4Vxi; GnPEN: foreach ($jadwal_pengawas as $jadwal_pengawa) { goto deRF_; IIT6N: tzz4D: goto jqrgp; deRF_: foreach ($jadwal_pengawa as $r => $jp) { goto IzXLt; IzXLt: foreach ($jp as $s => $j) { goto a6uIP; a6uIP: foreach ($j as $m => $km) { goto oxdtL; BT2D2: $is = $ruangs[$r][$s]->sesi_id; goto OWEV_; r9wug: array_push($perRuang[$forAdd->ruang], $forAdd); goto c17__; kgJV4: $jp = 0; goto cpTIZ; t0WTD: $ir = $ruangs[$r][$s]->ruang_id; goto BT2D2; nltTc: goto lfkdd; goto iFQUM; qaGn9: foreach ($sel as $p) { goto kV870; u1sXc: $pw .= $gurus[$p]; goto OqgHV; CSBl_: $pw .= "\74\x62\162\76"; goto Qd3ga; OqgHV: $jp += 1; goto DWiCm; Qd3ga: MSb3e: goto aHEYO; DWiCm: if (!($jp < $jpp)) { goto MSb3e; } goto CSBl_; RvvBg: tTb3c: goto ClcP1; aHEYO: VkvZl: goto RvvBg; kV870: if (!isset($gurus[$p])) { goto VkvZl; } goto u1sXc; ClcP1: } goto mrCBj; M9YY0: array_push($result, $forAdd); goto nusql; sQ_5l: array_push($perRuang[$forAdd->ruang], $forAdd); goto nltTc; mrCBj: qkIE3: goto UTRrW; kTNl6: $ns = $ruangs[$r][$s]->nama_sesi; goto t0WTD; oxdtL: $nr = $ruangs[$r][$s]->nama_ruang; goto kTNl6; cpTIZ: $jpp = count($sel); goto vTzcs; UTRrW: $siswas = $this->cbt->getSiswaByRuang($tp->id_tp, $smt->id_smt, $ir, $is); goto jk98K; nusql: if (isset($perRuang[$forAdd->ruang])) { goto CfNAK; } goto W4dIf; vTzcs: $pw = ''; goto qaGn9; c17__: lfkdd: goto tcSXN; tcSXN: flQ01: goto SU15P; iFQUM: CfNAK: goto r9wug; OWEV_: $sel = isset($pengawas[$km->id_jadwal]) && isset($pengawas[$km->id_jadwal][$ir]) && isset($pengawas[$km->id_jadwal][$ir][$is]) ? explode("\54", $pengawas[$km->id_jadwal][$ir][$is]->id_guru) : []; goto kgJV4; W4dIf: $perRuang[$forAdd->ruang] = []; goto sQ_5l; jk98K: $forAdd = json_decode(json_encode(["\x6a\155\154\x5f\x73\x69\x73\x77\x61" => count($siswas), "\164\141\156\x67\x67\x61\x6c" => $km->tgl_mulai, "\x72\x75\x61\156\x67" => $nr, "\x73\145\x73\x69" => $ns, "\155\141\x70\145\x6c" => $km->nama_mapel, "\167\x61\153\x74\x75" => $km->jam_ke, "\x70\145\156\147\141\167\141\163" => $pw])); goto M9YY0; SU15P: } goto eL1Di; vxt7F: R8T8S: goto XfTMu; eL1Di: Jk6Vm: goto vxt7F; XfTMu: } goto GV40W; GV40W: c_hGf: goto N8IdF; N8IdF: nQ7JU: goto eLDWc; eLDWc: } goto IIT6N; jqrgp: XPmZk: goto Wg1oe; Wg1oe: } goto tpxsR; wEL1S: $arrKls = []; goto PXwVz; cs1F4: $data["\152\145\156\151\x73\137\x75\x6a\x69\141\x6e"] = $jenis_ujian; goto g22j3; Y5wBz: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Q3hNM; yFx9q: $data["\162\165\x61\x6e\x67\137\x73\x65\163\x69"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto AbAdB; jXFHy: $sampai_selected = $this->input->get("\x73\x61\x6d\x70\x61\x69", true); goto Yz1s9; ejP3v: foreach ($ruangs as $id_ruang => $ruang) { goto ANtFm; pPSye: EekYk: goto wciXE; ANtFm: foreach ($ruang as $id_sesi => $sesi) { goto H6qgK; H6qgK: foreach ($kelas_level as $kl) { goto Dc78h; Dc78h: foreach ($jadwals as $jadwal) { goto hL4D3; AA4G3: Inern: goto pH_7p; hL4D3: if (!($jadwal->bank_level == $kl->level_id)) { goto nrC8a; } goto DSmTT; DSmTT: $jadwal_pengawas[$jadwal->tgl_mulai][$id_ruang][$id_sesi][$jadwal->kode] = $jadwal; goto jKi_a; jKi_a: nrC8a: goto AA4G3; pH_7p: } goto JIGeL; JIGeL: ss7oz: goto dCkh1; dCkh1: BwuoF: goto R__bV; R__bV: } goto Ha8g_; kBCBm: Y337v: goto IYhE0; Ha8g_: tSVdv: goto kBCBm; IYhE0: } goto pPSye; wciXE: tcUIx: goto PHpJ1; PHpJ1: } goto zkDbX; Heabg: $this->load->view("\x5f\164\145\155\x70\x6c\141\x74\x65\x73\57\144\141\x73\150\x62\157\x61\x72\144\57\x5f\x66\x6f\x6f\164\x65\162"); goto TY3BA; bttD_: $kelas_level = $this->cbt->getDistinctKelasLevel($tp->id_tp, $smt->id_smt, $arrLevel); goto VFRqu; rtVOh: $perRuang = []; goto gkOH7; bbIbX: $data["\x6a\145\x6e\x69\163\137\x73\x65\154\145\x63\x74\x65\x64"] = $jenis_selected; goto cs1F4; Tj3Pa: $arrLevel = []; goto QtTCe; PXwVz: foreach ($kelas_level as $kl) { array_push($arrKls, $kl->id_kelas); Oa9yX: } goto L3sEq; IyQPw: OHw6T: goto wEL1S; TY3BA: } }
