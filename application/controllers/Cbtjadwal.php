<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjadwal extends CI_Controller { public function __construct() { goto qpc1p; tOQNF: $this->load->model("\113\x65\x6c\141\x73\137\155\x6f\144\x65\154", "\x6b\x65\x6c\141\163"); goto JKNff; u992l: $this->load->model("\x4c\x6f\147\137\x6d\x6f\144\145\154", "\154\157\147\x67\151\156\x67"); goto tOQNF; qziN2: s51l7: goto ke8e8; Ohzn9: redirect("\x61\x75\164\150"); goto IshzC; w519u: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) { goto s51l7; } goto C9Lft; uZ3RC: if (!$this->ion_auth->logged_in()) { goto dZWtc; } goto w519u; IshzC: fgmg3: goto uDEpx; ke8e8: goto fgmg3; goto rxxse; bj6mU: $this->form_validation->set_error_delimiters('', ''); goto NmjiU; FWkdd: $this->load->model("\104\x61\163\150\x62\157\141\x72\144\x5f\x6d\157\144\145\154", "\x64\141\163\x68\142\x6f\141\162\144"); goto cz48s; rxxse: dZWtc: goto Ohzn9; cz48s: $this->load->model("\x43\x62\x74\137\x6d\x6f\144\145\154", "\x63\142\x74"); goto u992l; qpc1p: parent::__construct(); goto uZ3RC; uDEpx: $this->load->library(["\x64\x61\164\x61\164\x61\142\154\x65\163", "\x66\157\162\155\x5f\166\x61\154\151\x64\x61\164\x69\157\156"]); goto Wf5Nz; JKNff: $this->load->model("\x44\x72\157\x70\144\157\167\156\137\155\157\144\x65\x6c", "\x64\162\x6f\x70\x64\157\x77\x6e"); goto bj6mU; C9Lft: show_error("\x48\x61\x6e\171\141\40\x41\144\155\x69\156\x69\163\164\162\x61\164\x6f\x72\x20\144\141\x6e\40\x67\x75\x72\165\40\x79\141\x6e\x67\40\144\151\142\x65\x72\x69\x20\x68\x61\153\40\165\156\164\x75\153\40\x6d\145\156\x67\x61\x6b\x73\x65\163\40\150\x61\154\141\155\x61\156\40\151\156\151\x2c\40\x3c\x61\x20\x68\162\x65\146\x3d\x22" . base_url("\x64\141\163\x68\142\157\141\162\x64") . "\42\76\113\145\155\x62\x61\154\151\40\x6b\x65\40\155\145\156\x75\40\141\167\141\154\74\57\x61\x3e", 403, "\x41\153\x73\x65\163\40\124\x65\x72\154\141\x72\141\156\x67"); goto qziN2; Wf5Nz: $this->load->model("\115\141\x73\x74\145\x72\137\155\157\144\x65\x6c", "\155\x61\x73\164\145\x72"); goto FWkdd; NmjiU: } public function output_json($data, $encode = true) { goto CsSfq; cl7rj: u_xZP: goto F8NK7; F8NK7: $this->output->set_content_type("\x61\x70\x70\154\151\143\x61\164\151\x6f\156\57\x6a\x73\x6f\x6e")->set_output($data); goto ZeWWw; D_FCl: $data = json_encode($data); goto cl7rj; CsSfq: if (!$encode) { goto u_xZP; } goto D_FCl; ZeWWw: } public function index() { goto ip2iL; BvBzp: $smt = $this->dashboard->getSemesterActive(); goto tHx0Y; ex8o7: $data["\x62\141\x6e\x6b\163"] = $this->cbt->getAllBankSoal($guru->id_guru); goto SC5YR; biV0A: $mode = $this->input->get("\155\x6f\144\x65"); goto eMSiT; AaD8Q: $nguru[$guru->id_guru] = $guru->nama_guru; goto qihdn; yZ0xu: $level = $lvl == null ? "\60" : $lvl; goto bEM67; YV5oq: $data["\x6a\x6d\x6c\x4d\x61\160\145\x6c"] = []; goto bFnXX; bFnXX: $data["\154\145\166\x65\x6c"] = $level; goto Npyg5; ip2iL: $lvl = $this->input->get("\x6c\x65\x76\x65\x6c", true); goto yZ0xu; RSUSQ: $data = ["\x75\163\145\162" => $user, "\152\165\144\165\154" => "\x4a\x61\x64\167\x61\154\40\120\145\x6e\x69\154\141\151\141\x6e", "\x73\x75\142\x6a\165\x64\165\154" => "\x50\x48\x2f\x50\x54\x53\57\x50\x41\x54\57\x55\x53\x42\113", "\x73\145\x74\164\151\x6e\147" => $this->dashboard->getSetting()]; goto WZBDi; ynxgk: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto EHyZW; WZBDi: $tp = $this->dashboard->getTahunActive(); goto BvBzp; EHyZW: $data["\x73\155\164\x5f\141\143\x74\151\x76\x65"] = $smt; goto biV0A; oyrYH: $this->load->view("\x63\x62\x74\x2f\x6a\x61\x64\167\x61\x6c\57\x64\x61\x74\141"); goto N2LQy; hfU49: foreach ($terpakai as $idj => $rows) { $jadwal_terpakai[$idj] = count($rows); UknHA: } goto yAUtV; SC5YR: $data["\152\x61\144\x77\141\154\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru); goto mYBco; ag2bY: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto AaD8Q; eMSiT: $data["\x6d\157\144\x65"] = $mode == null ? "\x31" : $mode; goto jPVe_; CwOA9: $data["\x73\145\x73\151\163"] = $this->dropdown->getAllSesi(); goto Z79Sb; ZJZO6: $jadwal_terpakai = []; goto hfU49; sKcGS: $data["\x61\x64\x61\137\165\x6a\151\x61\156"] = $this->cbt->getDataJadwalByTgl(date("\131\55\x6d\x2d\x64")); goto uqo22; l2m3y: $this->load->view("\x5f\x74\x65\x6d\160\x6c\x61\164\x65\163\57\x64\x61\x73\x68\142\x6f\x61\x72\x64\57\x5f\x66\x6f\157\x74\x65\162"); goto uCtsN; fb1NK: $data["\x74\160\x5f\141\143\x74\x69\x76\145"] = $tp; goto ynxgk; bEM67: $user = $this->ion_auth->user()->row(); goto RSUSQ; N2LQy: $this->load->view("\155\145\155\x62\145\162\x73\57\x67\x75\162\x75\57\164\145\x6d\x70\154\x61\x74\x65\163\x2f\x66\157\157\164\145\162"); goto bnmf7; qihdn: $data["\147\x75\x72\x75"] = $guru; goto ex8o7; BY91D: $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\164\x65\x73\x2f\x64\x61\163\150\x62\x6f\141\162\x64\x2f\137\x68\x65\x61\144\145\162", $data); goto XMBu5; Npyg5: $terpakai = $this->cbt->getJadwalTerpakai(); goto ZJZO6; mpH1K: $data["\x6a\155\154\111\163\x74"] = []; goto YV5oq; tHx0Y: $data["\x74\x70"] = $this->dashboard->getTahun(); goto fb1NK; bnmf7: goto tvRtz; goto lT1NP; OSwQv: $data["\x70\x72\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto bcPF6; jPVe_: $data["\162\165\141\156\147\x73"] = $this->cbt->getAllRuang(); goto CwOA9; mYBco: $this->load->view("\x6d\145\x6d\x62\145\x72\x73\57\x67\x75\x72\x75\57\164\145\155\x70\x6c\x61\x74\x65\163\x2f\x68\145\141\x64\x65\x72", $data); goto oyrYH; uCtsN: tvRtz: goto Gp0e1; uqo22: if ($this->ion_auth->is_admin()) { goto Vf7Kw; } goto ag2bY; RUvIa: $data["\x6a\x61\144\167\x61\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto MYJ5y; y0jat: $data["\164\x6f\164\x61\154\137\x73\151\x73\167\x61"] = $jadwal_terpakai; goto sKcGS; Z79Sb: $data["\152\x65\x6e\x69\x73"] = $this->cbt->getAllJenisUjian(); goto RUvIa; lT1NP: Vf7Kw: goto OSwQv; yAUtV: Eo0bm: goto y0jat; MYJ5y: $data["\153\145\154\141\x73"] = $this->cbt->getKelas(); goto mpH1K; XMBu5: $this->load->view("\143\x62\164\57\x6a\x61\x64\167\141\x6c\57\x64\x61\164\x61"); goto l2m3y; bcPF6: $data["\x6a\141\144\167\x61\154\163"] = $this->cbt->getAllDataJadwal(); goto aa9hs; aa9hs: $data["\142\x61\156\x6b\163"] = $this->cbt->getAllBankSoal(); goto BY91D; Gp0e1: } public function add($id_jadwal) { goto uTWHl; IDxGz: vNP_u: goto bj2UD; HGpKY: $data["\163\145\x73\151\163"] = $this->dropdown->getAllSesi(); goto yU1YX; ctawj: $data["\x73\x6d\164\x5f\141\x63\x74\x69\166\145"] = $smt; goto Xa2qK; jDGeo: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto Fquzt; mFYtW: $tp = $this->dashboard->getTahunActive(); goto wgSXH; q7uLk: goto ZBhqP; goto IDxGz; bj2UD: $data["\x70\162\x6f\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto hrLsA; DREwV: $data["\147\x75\x72\x75"] = $guru; goto RwmHN; C9LJ1: $data["\x74\160"] = $this->dashboard->getTahun(); goto tfd5R; RwmHN: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto jDGeo; U_Nhs: $this->load->view("\x5f\164\145\x6d\160\x6c\141\164\145\163\x2f\144\x61\163\150\142\157\141\x72\x64\x2f\137\146\157\157\164\x65\162"); goto R39qo; jHq9t: $this->load->view("\x63\142\x74\x2f\152\x61\x64\167\x61\x6c\57\x61\x64\144"); goto pFgCp; tfd5R: $data["\x74\x70\x5f\x61\143\164\151\x76\x65"] = $tp; goto Cao5o; RSoYY: fMnjr: goto DdR1a; yU1YX: $data["\152\x65\x6e\x69\x73"] = $this->cbt->getAllJenisUjian(); goto sz1dh; obpFh: $data["\x6a\141\144\x77\x61\154"] = $this->cbt->getJadwalById($id_jadwal); goto BRZ22; QVL9Z: $data["\155\141\160\145\154"] = $this->dropdown->getAllMapel(); goto OgFYI; h9_Pj: $data["\x6a\x61\144\167\x61\x6c"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto RSoYY; Fquzt: $arrMapel = []; goto aD06l; uTWHl: $enable = $this->input->get("\145\x6e\x61\142\154\145", true); goto YIMv9; wgSXH: $smt = $this->dashboard->getSemesterActive(); goto C9LJ1; aD06l: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; L2Pn6: } goto vYdDZ; sz1dh: $data["\153\x65\x6c\141\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto gHhb9; YIMv9: $user = $this->ion_auth->user()->row(); goto VfPjr; pFgCp: $this->load->view("\155\x65\155\142\145\162\163\x2f\x67\165\162\165\57\164\x65\155\160\154\x61\164\x65\x73\57\146\157\157\164\x65\x72"); goto q7uLk; vZ9QS: ImSaN: goto h9_Pj; R39qo: ZBhqP: goto R9mbf; DdR1a: $gurus = $this->dropdown->getAllGuru(); goto kfiIx; CHHWP: $this->load->view("\x6d\145\155\142\145\x72\x73\x2f\x67\165\x72\x75\57\164\x65\155\160\x6c\141\x74\145\x73\57\150\x65\141\144\145\162", $data); goto jHq9t; gHhb9: $data["\144\151\163\x61\142\x6c\x65\137\157\160\x73\x69"] = $enable != null && $enable == 1; goto ovhh5; Xa2qK: if ($id_jadwal == 0) { goto ImSaN; } goto obpFh; ovhh5: if ($this->ion_auth->is_admin()) { goto vNP_u; } goto rTc7l; OgFYI: $this->load->view("\137\x74\x65\155\x70\x6c\141\x74\x65\x73\57\144\141\163\150\x62\157\x61\x72\x64\57\137\150\145\x61\144\145\162", $data); goto MVs7x; uYXnS: $data["\x6d\141\160\145\x6c"] = $arrMapel; goto CHHWP; MVs7x: $this->load->view("\143\x62\x74\x2f\x6a\141\144\167\x61\154\x2f\141\144\144"); goto U_Nhs; rTc7l: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DREwV; hrLsA: $data["\147\165\x72\x75"] = $gurus; goto QVL9Z; BRZ22: goto fMnjr; goto vZ9QS; VfPjr: $data = ["\165\163\145\x72" => $user, "\152\x75\144\x75\x6c" => $id_jadwal == 0 ? "\124\x61\155\142\x61\x68\x20\112\x61\144\x77\x61\x6c\x20\x55\152\x69\141\156" : "\105\x64\151\x74\40\112\141\144\x77\x61\x6c\x20\125\x6a\151\141\156", "\x73\x75\x62\x6a\165\x64\x75\x6c" => "\112\x61\x64\167\141\x6c", "\163\x65\x74\x74\x69\156\147" => $this->dashboard->getSetting()]; goto mFYtW; kfiIx: $data["\162\165\141\156\147\x73"] = $this->cbt->getAllRuang(); goto HGpKY; vYdDZ: dF4XV: goto uYXnS; Cao5o: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto ctawj; R9mbf: } public function getBankMapel($id_mapel) { goto eFUqd; G8P6o: $filtered = []; goto d4a3Z; Co9AJ: $smt = $this->dashboard->getSemesterActive(); goto OQ3ry; eFUqd: $tp = $this->dashboard->getTahunActive(); goto Co9AJ; OQ3ry: $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel); goto G8P6o; HlGSV: $this->output_json($filtered); goto GliZc; d4a3Z: foreach ($banks as $key => $bank) { goto V4thM; fPnBI: if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) { goto y8bo8; } goto N1gj_; odM8_: QJn92: goto hiSb1; EUQs8: $num1 = isset($cek_soal["\x31"]) ? count($cek_soal["\x31"]) : 0; goto DySrZ; hbEht: $ada3 = $num3 == (int) $bank->tampil_jodohkan; goto Zn_kK; lz3Ai: $ada1 = $num1 == (int) $bank->tampil_pg; goto gDSs4; Zn_kK: $ada4 = $num4 == (int) $bank->tampil_isian; goto SiKnK; V4thM: $cek_soal = $this->cbt->getJumlahJenisSoal($key); goto EUQs8; fnHcB: y8bo8: goto odM8_; Dd1RS: $num3 = isset($cek_soal["\x33"]) ? count($cek_soal["\63"]) : 0; goto dm5kX; dm5kX: $num4 = isset($cek_soal["\x34"]) ? count($cek_soal["\x34"]) : 0; goto JOeCr; N1gj_: $filtered[$key] = $bank->bank_kode; goto fnHcB; gDSs4: $ada2 = $num2 == (int) $bank->tampil_kompleks; goto hbEht; DySrZ: $num2 = isset($cek_soal["\62"]) ? count($cek_soal["\x32"]) : 0; goto Dd1RS; SiKnK: $ada5 = $num5 == (int) $bank->tampil_esai; goto fPnBI; JOeCr: $num5 = isset($cek_soal["\65"]) ? count($cek_soal["\x35"]) : 0; goto lz3Ai; hiSb1: } goto nIm7V; nIm7V: TbxZR: goto HlGSV; GliZc: } public function saveJadwal() { goto Dw0T1; b4G8G: $data["\163\x75\x63\x63\x65\163\163"] = $status; goto xT6Al; CvyC8: $data["\x6d\x65\163\163\141\147\145"] = $res ? "\112\x61\144\167\x61\154\40\x62\145\x72\150\141\163\x69\x6c\x20\x64\151\x73\x69\x6d\x70\141\x6e" : "\x4a\141\x64\167\x61\154\40\x73\x75\x64\x61\150\40\x61\144\141"; goto iuq5N; iuq5N: $status = $res; goto iJAH1; SNW7Z: $data["\155\145\163\163\141\147\145"] = "\x4b\x65\x73\141\154\x61\150\x61\x6e\x20\x34\60\x34"; goto yzuxQ; yzuxQ: $status = FALSE; goto H_0K3; KaNlu: MsSMu: goto MtRm2; BmZ3c: $this->logging->saveLog(4, "\155\x65\x6e\147\x65\144\x69\164\40\152\x61\x64\167\141\154\40\160\145\x6c\x61\152\141\x72\x61\156"); goto RVJ0W; RVJ0W: goto RzcUT; goto TsnIx; TsnIx: JKz5R: goto HNVSn; HUF15: if (!$id) { goto JKz5R; } goto BmZ3c; iJAH1: O43so: goto b4G8G; ORR7u: if ($this->input->post()) { goto MsSMu; } goto SNW7Z; xT6Al: $id = $this->input->post("\x69\x64\x5f\152\x61\144\x77\141\154", true); goto HUF15; H_0K3: goto O43so; goto KaNlu; qETvk: $this->output_json($data); goto XbNJ0; HNVSn: $this->logging->saveLog(3, "\x6d\145\156\141\155\142\141\150\40\152\141\144\167\x61\x6c\40\x70\x65\x6c\141\x6a\141\x72\141\x6e"); goto i2pG0; Dw0T1: $tp = $this->dashboard->getTahunActive(); goto OLWIm; MtRm2: $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt); goto CvyC8; OLWIm: $smt = $this->dashboard->getSemesterActive(); goto ORR7u; i2pG0: RzcUT: goto qETvk; XbNJ0: } public function deleteJadwal() { goto mEfhL; EYinJ: $hapusDurasiSiswa = $this->master->delete("\143\142\x74\137\144\x75\x72\x61\163\x69\137\163\x69\x73\x77\141", $id, "\x69\x64\x5f\152\141\144\x77\141\x6c"); goto LFuYK; TDbOJ: if ($this->master->delete("\x63\142\164\137\152\141\x64\x77\141\154", $id, "\151\144\x5f\152\141\144\x77\141\154")) { goto RmQ5N; } goto thbEi; thbEi: $data["\163\x74\x61\x74\165\163"] = false; goto mUx19; t3dsX: if ($terpakai && $jadwal->rekap == 0) { goto G4mMZ; } goto TDbOJ; VUGNr: RmQ5N: goto jOn5a; SNIH3: $this->output_json($data); goto lwLoz; Gg1V7: k3ECz: goto zbEKz; flR7U: goto k3ECz; goto VUGNr; mEfhL: $id = $this->input->get("\151\x64\x5f\x6a\x61\x64\167\141\x6c", true); goto rwsyS; tpWd8: $data["\155\145\x73\x73\x61\x67\145"] = "\x62\x65\x72\150\141\163\x69\x6c"; goto Gg1V7; zbEKz: goto wcQZh; goto RQ2ba; BaeVc: $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0; goto jYJh2; mUx19: $data["\x6d\145\163\163\141\147\145"] = "\112\x61\x64\167\141\x6c\x20\125\152\151\x61\x6e\40\x73\145\144\141\x6e\147\40\144\x69\147\165\x6e\141\x6b\141\156"; goto flR7U; LFuYK: $this->logging->saveLog(5, "\155\145\156\147\150\x61\x70\x75\163\x20\152\141\144\x77\x61\154\40\x75\152\151\141\x6e"); goto e3Nq0; OJqLW: $data["\163\164\141\164\165\x73"] = false; goto mkRQH; jOn5a: $hapusNilaiSiswa = $this->master->delete("\x63\142\164\137\163\157\x61\x6c\x5f\163\x69\163\x77\x61", $id, "\x69\144\x5f\x6a\x61\x64\x77\141\x6c"); goto EYinJ; mkRQH: $data["\155\x65\x73\x73\x61\147\145"] = "\110\x61\163\x69\x6c\x20\x55\x6a\151\141\156\x20\x62\x65\x6c\x75\x6d\x20\144\x69\x72\145\153\x61\x70"; goto pnEzr; EmCAz: $jadwal = $this->cbt->getJadwalById($id); goto t3dsX; jYJh2: $data["\163\x74\x61\164\165\163"] = false; goto EmCAz; rwsyS: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto BaeVc; e3Nq0: $data["\x73\x74\141\x74\x75\x73"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto tpWd8; pnEzr: wcQZh: goto SNIH3; RQ2ba: G4mMZ: goto OJqLW; lwLoz: } public function deleteAllJadwal() { goto ODupl; D2MFa: ob_end_clean(); goto FFmOg; wOWDe: $backuped = []; goto t4bU8; EzcnC: tEi9g: goto FGj0d; FFmOg: $data["\163\x74\141\x74\165\x73"] = false; goto flHDs; kA2rS: $counts = array_count_values($backuped); goto tXh9m; XnD1b: ob_end_clean(); goto EVhk7; L55AR: ob_start(); goto GJ87w; OEA_W: goto tEi9g; goto kN9AN; tXh9m: if ($count_terpakai[1] > 0 && $counts[0] > 0) { goto cqqOQ; } goto GSiGD; huLny: $data["\x6d\x65\163\x73\141\x67\145"] = "\x62\x65\162\150\141\163\151\154"; goto EzcnC; eBo_g: $data["\155\145\163\x73\x61\147\145"] = "\112\x61\x64\167\x61\x6c\40\125\x6a\151\141\156\40\163\145\x64\x61\x6e\x67\x20\x64\151\147\165\x6e\141\153\x61\156"; goto OEA_W; Hn2cB: $data["\x64\151\147\x75\156\x61\x6b\x61\156"] = $count_terpakai; goto K9Kky; eA1hm: $this->output_json($data); goto WICKW; vD6xn: ZNowL: goto Qkq_S; GSiGD: if ($this->master->delete("\143\x62\164\x5f\x6a\141\x64\x77\141\154", $arrId, "\151\x64\137\x6a\x61\x64\167\x61\x6c")) { goto V5Y3C; } goto XnD1b; CxUTL: $this->logging->saveLog(5, "\155\x65\156\x67\x68\141\160\x75\x73\40\x6a\141\144\167\x61\x6c\x20\165\152\151\x61\156"); goto a3aAH; GJ87w: $jadwals = $this->cbt->getJadwalByArrId($arrId); goto Pmyjh; t4bU8: $digunakan = []; goto eOo4m; ODupl: $arrId = json_decode($this->input->post("\143\150\x65\143\x6b\x65\144", true)); goto L55AR; NtHJl: dq0nf: goto Hn2cB; K9Kky: $data["\142\x61\143\153\x75\160"] = $counts; goto eA1hm; a3aAH: ob_end_clean(); goto mmOkO; pQiUn: cqqOQ: goto D2MFa; Pmyjh: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto wOWDe; ngns8: $hapusDurasiSiswa = $this->master->delete("\x63\x62\164\137\144\165\x72\141\163\x69\137\163\151\163\167\141", $arrId, "\151\144\x5f\152\141\144\167\141\154"); goto CxUTL; Qkq_S: $count_terpakai = array_count_values($digunakan); goto kA2rS; EVhk7: $data["\x73\164\141\164\x75\163"] = false; goto eBo_g; FGj0d: goto dq0nf; goto pQiUn; flHDs: $data["\155\145\x73\x73\x61\147\x65"] = "\110\141\163\151\x6c\x20\x55\152\x69\141\156\x20\x62\x65\154\165\x6d\40\144\x69\162\x65\153\x61\160"; goto NtHJl; kN9AN: V5Y3C: goto M7yvM; mmOkO: $data["\x73\x74\x61\x74\x75\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto huLny; eOo4m: foreach ($jadwals as $jadwal) { goto mDio7; ZLGz9: array_push($digunakan, $terpakai); goto hoefc; mDio7: $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0; goto y0j1S; hoefc: g36mT: goto Sak03; y0j1S: array_push($backuped, $jadwal->rekap); goto ZLGz9; Sak03: } goto vD6xn; M7yvM: $hapusNilaiSiswa = $this->master->delete("\143\x62\x74\137\x73\157\x61\154\x5f\x73\x69\163\x77\x61", $arrId, "\151\144\x5f\x6a\x61\144\167\141\154"); goto ngns8; WICKW: } }
