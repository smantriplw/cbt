<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasjadwal extends CI_Controller { public function __construct() { goto UTE46; iafGD: rLBqU: goto Cr1fD; HJA_p: $this->load->model("\104\141\x73\x68\x62\157\141\x72\144\x5f\x6d\x6f\x64\145\x6c", "\144\141\x73\x68\142\x6f\x61\x72\x64"); goto E42jv; szIih: $this->load->model("\x4d\x61\x73\164\145\162\137\x6d\157\144\145\154", "\x6d\x61\x73\x74\x65\162"); goto HJA_p; E42jv: $this->load->model("\x43\x62\164\137\x6d\x6f\144\x65\x6c", "\x63\x62\x74"); goto Tszwz; aI1tX: if ($this->ion_auth->logged_in()) { goto rLBqU; } goto yRXrO; j1OOd: $this->load->model("\113\x65\x6c\141\x73\137\155\x6f\144\145\x6c", "\153\x65\x6c\141\163"); goto kKPgz; QxZVp: $this->form_validation->set_error_delimiters('', ''); goto k_4xR; kKPgz: $this->load->model("\104\162\157\160\x64\157\x77\156\x5f\155\157\x64\145\154", "\x64\162\x6f\x70\144\157\167\x6e"); goto QxZVp; UTE46: parent::__construct(); goto aI1tX; Tszwz: $this->load->model("\114\157\x67\137\155\157\144\x65\x6c", "\154\157\147\147\151\x6e\147"); goto j1OOd; yRXrO: redirect("\x61\165\x74\x68"); goto iafGD; Cr1fD: $this->load->library(["\144\x61\164\x61\164\x61\x62\154\x65\x73", "\x66\x6f\x72\x6d\x5f\166\141\x6c\x69\144\141\x74\x69\x6f\x6e"]); goto szIih; k_4xR: } public function output_json($data, $encode = true) { goto PEQGK; WHT9Y: $data = json_encode($data); goto t12ox; jnrZR: $this->output->set_content_type("\x61\160\x70\x6c\151\143\141\x74\x69\x6f\x6e\57\x6a\x73\157\156")->set_output($data); goto eiaYD; t12ox: cNgra: goto jnrZR; PEQGK: if (!$encode) { goto cNgra; } goto WHT9Y; eiaYD: } public function index() { goto vBXln; k3WvI: $this->load->view("\x6d\x65\x6d\142\145\x72\163\57\147\165\162\165\57\153\145\x6c\x61\x73\x2f\x6a\141\144\167\x61\x6c\57\x64\x61\x74\141"); goto sWt6Q; FOwMz: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto KGbRO; IRwVH: $data["\164\x70\137\x61\x63\164\151\x76\x65"] = $tp; goto FOwMz; Dfkqk: $this->load->view("\155\x65\155\142\x65\x72\163\x2f\x67\165\x72\165\x2f\x74\x65\155\x70\x6c\141\164\145\163\x2f\x68\x65\x61\144\x65\162", $data); goto k3WvI; IwpB2: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto tW2cU; RZp60: $this->load->view("\153\x65\154\141\163\x2f\152\x61\144\x77\x61\x6c\57\144\x61\164\x61"); goto cA6Al; DSN8j: $data["\155\145\164\150\x6f\x64"] = ''; goto iFQdg; Ehw0z: if ($this->ion_auth->is_admin()) { goto pN46R; } goto yhMbG; yhMbG: if ($this->ion_auth->in_group("\x67\165\162\x75")) { goto RCBBC; } goto D6Phh; RTuxY: $data["\x74\160"] = $this->dashboard->getTahun(); goto IRwVH; cA6Al: $this->load->view("\x5f\x74\145\x6d\160\154\x61\164\145\163\x2f\144\141\163\150\x62\157\141\162\144\57\x5f\146\157\157\x74\x65\162"); goto v2hZt; KGbRO: $data["\x73\x6d\x74\x5f\141\x63\x74\151\166\x65"] = $smt; goto aB_bw; jJVBR: Psj52: goto wbQYu; FwRKc: $tp = $this->dashboard->getTahunActive(); goto LaxBU; wGyyP: $data["\x70\162\x6f\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto h1TQA; sWt6Q: $this->load->view("\155\x65\x6d\142\145\162\163\x2f\147\x75\x72\x75\x2f\164\x65\155\x70\154\141\164\145\x73\x2f\146\157\157\x74\x65\162"); goto jJVBR; NuSJ2: $data = ["\x75\163\145\162" => $user, "\x6a\165\144\165\154" => "\x4a\x61\x64\167\141\154\x20\120\145\x6c\x61\152\x61\x72\x61\156", "\163\x75\x62\152\x75\x64\x75\x6c" => "\x53\145\164\40\x4a\141\144\167\x61\154\40\120\x65\x6c\141\152\x61\x72\x61\x6e", "\x73\145\164\164\151\x6e\x67" => $this->dashboard->getSetting()]; goto FwRKc; D6Phh: goto Psj52; goto o6Pw8; aB_bw: $data["\x6b\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto aHRlu; o6Pw8: pN46R: goto wGyyP; v2hZt: goto Psj52; goto Xp7bS; h1TQA: $this->load->view("\137\x74\145\x6d\x70\154\141\x74\145\163\x2f\x64\141\163\x68\142\157\x61\x72\144\x2f\137\x68\x65\141\144\x65\162", $data); goto RZp60; aHRlu: $data["\151\x64\x5f\x6b\145\154\x61\x73"] = "\60"; goto DSN8j; iFQdg: $data["\152\155\154\111\x73\164"] = []; goto Zi5lJ; Zi5lJ: $data["\152\155\154\115\x61\160\145\x6c"] = []; goto Ehw0z; LaxBU: $smt = $this->dashboard->getSemesterActive(); goto RTuxY; tW2cU: $data["\147\165\162\x75"] = $guru; goto Dfkqk; vBXln: $user = $this->ion_auth->user()->row(); goto NuSJ2; Xp7bS: RCBBC: goto IwpB2; wbQYu: } public function kelas($kelas) { goto nlU01; KNB8m: OiwGV: goto FPRpc; c5DcF: $data["\x67\x75\x72\x75"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto dIkfK; SNb_A: $smt = $this->dashboard->getSemesterActive(); goto e_R9n; X0D_M: if (!($i < $jml_mapel)) { goto q386N; } goto NQoZo; Eu8oH: W5GS9: goto X0D_M; W0QDQ: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto W8Sd5; e8WHj: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto OkiSF; QIY69: rR6e2: goto c5DcF; YUcnP: $data["\152\x61\144\167\141\154\x5f\153\142\x6d"] = $jadk; goto XPq4k; ox2iM: foreach ($jadm as $j) { $jadwal_mapel[] = ["\x6a\x61\144\x77\x61\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; jtoOV: } goto PGKYa; W8Sd5: if ($jadm == null) { goto xsRO1; } goto ox2iM; C8PqG: q386N: goto tBn0u; JA5TJ: $data["\x73\155\164\x5f\141\x63\x74\151\x76\145"] = $smt; goto i29Fz; G_GeJ: m10N8: goto gFwAr; aNPuR: $data["\152\141\x64\167\141\x6c\x5f\x6d\141\x70\x65\x6c"] = $jadwal_mapel; goto sjskw; e_R9n: $data["\164\160"] = $this->dashboard->getTahun(); goto b6cvo; sjskw: $data["\155\x61\160\145\x6c\163"] = $this->dropdown->getAllKodeMapel(); goto Z29E_; dIkfK: $this->load->view("\x6d\145\x6d\x62\x65\162\163\x2f\147\x75\162\x75\x2f\x74\x65\x6d\160\x6c\141\164\x65\x73\x2f\150\145\141\144\x65\162", $data); goto ms79i; X90OP: $data["\x6d\145\164\150\x6f\x64"] = "\145\x64\x69\x74"; goto c5KdO; SryJH: $i = 0; goto Eu8oH; sQb1e: $this->load->view("\137\164\x65\155\160\x6c\x61\x74\x65\163\x2f\144\x61\x73\x68\x62\x6f\141\x72\144\x2f\x5f\146\157\157\164\x65\162"); goto sWpw9; fkS87: $data = ["\165\163\145\162" => $user, "\152\x75\x64\165\154" => "\x4a\141\x64\167\141\x6c\x20\x50\145\154\141\152\x61\x72\x61\x6e", "\x73\165\142\x6a\165\144\x75\x6c" => "\123\145\164\x20\112\x61\x64\x77\x61\154\x20\x50\145\154\141\x6a\141\162\141\x6e", "\163\x65\x74\x74\x69\x6e\147" => $setting]; goto K3Dxp; q0LG4: is_43: goto AAD5v; aHUQe: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto JA5TJ; MH8Y4: goto W5GS9; goto C8PqG; AAD5v: $data["\x6a\141\x64\x77\x61\x6c\137\x6b\x62\x6d"] = json_decode(json_encode(["\151\x64\137\x74\160" => $tp->tahun, "\x69\x64\137\163\x6d\x74" => $smt->smt, "\151\144\x5f\153\x65\154\x61\163" => $kelas, "\x6b\142\x6d\x5f\152\141\155\137\x70\x65\x6c" => '', "\x6b\x62\155\137\152\x61\x6d\137\x6d\x75\x6c\141\151" => '', "\x6b\x62\x6d\x5f\x6a\155\154\x5f\155\141\160\145\x6c\x5f\x68\x61\162\x69" => '', "\x69\x73\164\x69\162\141\150\x61\x74" => serialize([]), "\x61\144\141" => false])); goto KNB8m; FPRpc: $data["\x69\144\x5f\153\x65\154\141\x73"] = $kelas; goto VGV0_; el96R: $data["\x70\162\x6f\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto CL3LF; c5KdO: goto TZsb3; goto sv8Ep; XPq4k: goto OiwGV; goto q0LG4; VGV0_: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto W0QDQ; sWpw9: goto Kt58y; goto QIY69; sv8Ep: xsRO1: goto SryJH; i29Fz: $data["\153\x65\154\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto e8WHj; y764c: if ($this->ion_auth->in_group("\147\165\x72\165")) { goto rR6e2; } goto RVr3b; PGKYa: TPrmd: goto X90OP; NQoZo: $jadwal_mapel[] = ["\152\141\x64\x77\x61\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto G_GeJ; tBn0u: $data["\155\x65\164\150\157\x64"] = "\141\x64\x64"; goto x9J87; dgljU: $this->load->view("\x6d\x65\155\142\x65\x72\163\57\147\x75\162\x75\57\164\x65\155\160\x6c\141\164\145\x73\x2f\x66\157\157\x74\x65\x72"); goto joc4s; RVr3b: goto Kt58y; goto MLGqg; Z29E_: if ($this->ion_auth->is_admin()) { goto ANz1T; } goto y764c; OkiSF: if ($jadk == null) { goto is_43; } goto YUcnP; MLGqg: ANz1T: goto el96R; K3Dxp: $tp = $this->dashboard->getTahunActive(); goto SNb_A; ms79i: $this->load->view("\x6d\145\x6d\x62\145\x72\x73\57\x67\165\x72\165\x2f\x6b\145\154\141\x73\57\152\x61\x64\167\x61\x6c\x2f\x64\141\164\x61"); goto dgljU; joc4s: Kt58y: goto SMbAF; CL3LF: $this->load->view("\137\164\x65\155\160\154\x61\x74\x65\x73\57\x64\141\163\150\x62\x6f\141\x72\x64\x2f\137\150\145\141\144\145\162", $data); goto AzROJ; nlU01: $user = $this->ion_auth->user()->row(); goto dS9fB; gFwAr: $i++; goto MH8Y4; AzROJ: $this->load->view("\153\145\154\x61\x73\x2f\x6a\x61\144\167\x61\x6c\x2f\x64\x61\164\141"); goto sQb1e; x9J87: TZsb3: goto aNPuR; dS9fB: $setting = $this->dashboard->getSetting(); goto fkS87; b6cvo: $data["\x74\x70\x5f\x61\x63\164\151\166\x65"] = $tp; goto aHUQe; SMbAF: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function setJadwal() { goto YM1Rc; hTE3g: $id_kelas = $this->input->post("\x69\x64\137\x6b\145\x6c\141\163", true); goto uFOGn; CXLDw: XG9uE: goto PSH6f; nsJrq: $durasi = $this->input->post("\x64\165\162\137\x69\x73\x74" . $i, true); goto UIFju; SygIV: goto RYusA; goto CXLDw; A3dOO: $istirahat[] = ["\x69\163\164" => $jamke, "\x64\x75\162" => $durasi]; goto ZMVXf; m5TF2: $data["\163\x74\141\x74\165\163"] = $update; goto Xo8zC; TRqcy: $update = $this->db->replace("\x6b\x65\154\x61\x73\x5f\x6a\141\x64\x77\141\154\x5f\x6b\142\x6d", $insert); goto ds0zA; WeIXg: qK7p3: goto J41wW; krGDN: $i = 1; goto TNv_g; J41wW: $i++; goto SygIV; upmpR: if (!($i < 5)) { goto XG9uE; } goto edm3b; ds0zA: $this->logging->saveLog(3, "\x6d\145\x72\x75\142\x61\x68\x20\x6a\x61\x64\167\x61\x6c\40\160\145\154\141\152\x61\x72\141\156"); goto m5TF2; TNv_g: RYusA: goto upmpR; PSH6f: $id_tp = $this->master->getTahunActive()->id_tp; goto NVsVm; NVsVm: $id_smt = $this->master->getSemesterActive()->id_smt; goto hTE3g; ZMVXf: ct1Lr: goto WeIXg; uFOGn: $insert = ["\151\144\137\x6b\142\x6d" => $id_tp . $id_smt . $id_kelas, "\151\144\x5f\164\160" => $id_tp, "\x69\144\x5f\163\155\164" => $id_smt, "\151\144\137\x6b\x65\154\x61\x73" => $id_kelas, "\x6b\142\x6d\x5f\x6a\x61\155\137\x70\145\x6c" => $this->input->post("\152\141\155\x5f\x6d\x61\160\145\x6c", true), "\153\142\x6d\137\152\141\x6d\x5f\155\x75\x6c\x61\x69" => $this->input->post("\x6a\x61\x6d\x5f\x6d\165\x6c\141\x69", true), "\153\142\155\137\x6a\x6d\154\137\x6d\x61\x70\x65\x6c\x5f\x68\141\162\151" => $this->input->post("\152\x6d\x6c\x5f\x6d\x61\x70\145\x6c", true), "\x69\163\164\151\162\x61\x68\141\x74" => serialize($istirahat)]; goto TRqcy; edm3b: $jamke = $this->input->post("\151\163\x74" . $i, true); goto nsJrq; Xo8zC: $this->output_json($data); goto Tsg3o; UIFju: if (!$jamke) { goto ct1Lr; } goto A3dOO; YM1Rc: $istirahat = []; goto krGDN; Tsg3o: } public function setMapel() { goto GE1OG; o0EY9: $array = array("\151\x64\137\x74\160" => $input[0]->id_tp, "\151\x64\137\x73\155\164" => $input[0]->id_smt, "\151\x64\x5f\153\x65\154\x61\x73" => $id_kelas); goto HZAze; DCUlC: $id_kelas = $this->input->post("\x69\144\x5f\153\145\x6c\141\x73", true); goto o0EY9; GE1OG: $input = json_decode($this->input->post("\144\x61\164\x61", true)); goto DCUlC; wBzaY: foreach ($input as $d) { $data[] = ["\151\x64\x5f\152\141\144\x77\x61\x6c" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\x69\x64\137\x74\160" => $d->id_tp, "\x69\144\137\x73\155\164" => $d->id_smt, "\x69\144\x5f\x6b\145\154\x61\163" => $id_kelas, "\x69\x64\137\150\141\x72\x69" => $d->id_hari, "\x6a\x61\x6d\137\153\145" => $d->jam_ke, "\x69\144\x5f\x6d\141\x70\145\154" => $d->id_mapel]; kx2k7: } goto pfosp; jcyRR: $this->db->delete("\153\x65\154\x61\163\x5f\x6a\x61\x64\167\141\x6c\137\x6d\141\x70\x65\x6c"); goto TMh4K; zLAM3: $res["\163\x74\x61\x74\165\163"] = $update; goto Fctk9; pfosp: rc6ff: goto teogG; Fctk9: $this->output_json($res); goto oHWRz; TMh4K: $data = []; goto wBzaY; teogG: $update = $this->db->insert_batch("\x6b\x65\154\x61\x73\x5f\x6a\141\x64\x77\x61\x6c\x5f\x6d\x61\x70\145\x6c", $data); goto zLAM3; HZAze: $this->db->where($array); goto jcyRR; oHWRz: } }
