<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensibulanan extends CI_Controller { public function __construct() { goto Kg92j; Kg92j: parent::__construct(); goto uMdnZ; sv_4V: $this->load->model("\x44\162\x6f\x70\x64\157\167\x6e\137\x6d\157\x64\145\x6c", "\144\x72\157\160\144\157\167\156"); goto HFvQY; gguB2: $this->form_validation->set_error_delimiters('', ''); goto bpwLA; afYoG: JVwb9: goto bKvXV; bKvXV: $this->load->library(["\144\141\164\x61\x74\141\142\154\x65\x73", "\146\x6f\162\155\137\x76\x61\x6c\x69\144\x61\164\151\157\156"]); goto C01GX; uMdnZ: if (!$this->ion_auth->logged_in()) { goto gndAt; } goto tWG68; sH1ul: fh21X: goto Jzot0; a8pEv: redirect("\141\x75\164\x68"); goto afYoG; tWG68: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\x75"))) { goto fh21X; } goto yxkLd; HFvQY: $this->load->model("\x4b\145\x6c\x61\x73\137\155\157\144\x65\154", "\153\x65\x6c\141\163"); goto gguB2; yxkLd: show_error("\110\141\156\171\141\40\x41\144\155\151\156\x69\x73\x74\162\141\164\x6f\162\40\x79\141\156\x67\x20\144\151\x62\x65\162\151\x20\x68\141\x6b\x20\165\156\164\165\153\x20\x6d\145\x6e\x67\x61\x6b\163\145\163\x20\x68\141\154\x61\x6d\141\156\40\151\156\151\x2c\x20\x3c\141\40\150\x72\x65\x66\75\42" . base_url("\144\x61\163\150\142\x6f\141\x72\x64") . "\x22\x3e\x4b\145\x6d\x62\x61\x6c\151\x20\153\145\x20\x6d\x65\156\x75\x20\141\x77\141\x6c\74\x2f\x61\76", 403, "\101\153\163\x65\163\40\104\x69\142\x61\x74\x61\163\x69"); goto sH1ul; f2C_H: gndAt: goto a8pEv; C01GX: $this->load->model("\x4d\141\x73\x74\x65\x72\x5f\155\157\x64\145\x6c", "\x6d\x61\163\x74\145\162"); goto ayUqx; Jzot0: goto JVwb9; goto f2C_H; ayUqx: $this->load->model("\x44\x61\163\x68\x62\157\141\x72\144\x5f\155\157\144\145\x6c", "\144\x61\163\150\142\x6f\x61\162\144"); goto sv_4V; bpwLA: } public function output_json($data, $encode = true) { goto HwoXO; knzGb: $data = json_encode($data); goto O1m80; W81M7: $this->output->set_content_type("\x61\160\x70\x6c\151\143\x61\164\x69\157\x6e\x2f\x6a\x73\157\x6e")->set_output($data); goto PdVcv; O1m80: aPgEf: goto W81M7; HwoXO: if (!$encode) { goto aPgEf; } goto knzGb; PdVcv: } public function index() { goto ZTEaP; Q2n7C: $arrId = []; goto bS9NK; RaUqO: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto c_VoM; kYtSq: $tp = $this->master->getTahunActive(); goto EToda; KY_uR: $data["\155\x61\160\145\154"] = $this->dropdown->getAllMapel(); goto MwIAP; fJECd: GSJAM: goto dpU6u; hpIlC: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); ZhsuU: } goto fJECd; jODl1: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Oajcm; bS9NK: if (!($mapel != null)) { goto js_0T; } goto hpIlC; VZJxe: foreach ($mapel as $m) { goto mmgVH; mmgVH: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto bFmjc; bFmjc: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\x69\144\137\153\145\x6c\141\163" => $kls->kelas, "\x6e\141\x6d\x61\x5f\153\145\154\141\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; GScJM: } goto Mo2gX; VG_4y: FnA8j: goto h7W5h; Mo2gX: DnkFl: goto VG_4y; h7W5h: } goto WRDLr; HX_fQ: I6yNs: goto hIJbf; WRDLr: IW3QG: goto ZcaQp; MwIAP: $this->load->view("\x5f\164\x65\155\160\154\141\164\145\163\57\144\x61\x73\150\142\x6f\141\x72\x64\57\x5f\x68\x65\141\144\145\x72", $data); goto utMtO; YO266: $data["\147\x75\x72\x75"] = $this->dropdown->getAllGuru(); goto KY_uR; e43GA: $data["\160\x72\x6f\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto GDjGt; EToda: $smt = $this->master->getSemesterActive(); goto EJyjm; q0jJb: $data["\x6d\x61\160\145\154"] = $arrMapel; goto sVFrn; GjOig: $data["\x6b\x65\154\141\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto l0EQL; uPpdC: $this->load->view("\137\x74\x65\155\160\x6c\x61\x74\x65\x73\57\144\x61\x73\x68\142\x6f\141\162\144\x2f\x5f\146\157\157\164\x65\162"); goto HX_fQ; EJyjm: $data["\164\160"] = $this->dashboard->getTahun(); goto vAUKe; V0buS: $this->load->view("\153\145\154\x61\163\57\141\142\163\x65\x6e\142\x75\x6c\141\x6e\x61\x6e\57\x64\x61\164\x61"); goto vN0t5; dpU6u: js_0T: goto q0jJb; QqbJR: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto VERJU; VERJU: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto RL2DD; gSQzS: goto I6yNs; goto UKo3x; Oajcm: $nguru[$guru->id_guru] = $guru->nama_guru; goto wYcL9; c3JSF: if ($this->ion_auth->is_admin()) { goto U9VPf; } goto jODl1; l0EQL: $this->load->view("\155\x65\x6d\142\x65\x72\x73\x2f\147\x75\x72\165\x2f\164\x65\155\160\154\141\x74\x65\163\x2f\150\x65\141\x64\145\162", $data); goto V0buS; BA_gj: $arrKelas = []; goto f_YHl; wYcL9: $data["\147\165\162\x75"] = $guru; goto LiVZj; sVFrn: $data["\x61\162\162\153\x65\154\141\163"] = $arrKelas; goto GjOig; GDjGt: $data["\153\145\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto YO266; ErTXx: $data["\142\x75\154\141\x6e"] = $this->dropdown->getBulan(); goto c3JSF; RL2DD: $arrMapel = []; goto BA_gj; ZTEaP: $user = $this->ion_auth->user()->row(); goto Ifti8; LiVZj: $data["\151\144\137\147\x75\162\165"] = $guru->id_guru; goto QqbJR; vN0t5: $this->load->view("\155\145\x6d\x62\x65\162\x73\57\x67\x75\x72\165\57\x74\x65\155\x70\x6c\x61\164\x65\163\x2f\146\157\157\164\145\x72"); goto gSQzS; Ifti8: $data = ["\x75\x73\145\x72" => $user, "\x6a\165\144\165\154" => "\x44\x61\x66\164\141\162\40\x48\x61\144\151\x72\x20\x42\x75\x6c\x61\x6e\x61\156", "\x73\x75\x62\x6a\165\144\x75\x6c" => "\x44\141\x66\164\x61\162\x20\x48\x61\144\151\162\40\102\165\x6c\x61\x6e\141\156\x20\x53\x69\x73\167\141", "\163\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto kYtSq; vAUKe: $data["\x74\x70\137\x61\x63\164\151\x76\145"] = $tp; goto RaUqO; f_YHl: if (!($mapel != null)) { goto FqQdT; } goto VZJxe; utMtO: $this->load->view("\153\x65\x6c\x61\163\57\x61\142\163\145\x6e\x62\x75\x6c\x61\x6e\x61\x6e\x2f\144\141\x74\141"); goto uPpdC; c_VoM: $data["\x73\x6d\164\x5f\x61\x63\164\151\x76\145"] = $smt; goto ErTXx; UKo3x: U9VPf: goto e43GA; ZcaQp: FqQdT: goto Q2n7C; hIJbf: } public function loadAbsensiMapel() { goto Lo0Jj; xTnCE: $jadwal->istirahat = unserialize($jadwal->istirahat); goto CWCXi; JMGKF: $materi_perbulan = $this->kelas->getRekapBulananSiswa($id_mapel, $id_kelas, $tahun, $bulan); goto GfHGY; gI_rb: ZdaZi: goto sp69d; PpdTP: $jadwal_materi = []; goto DGR_J; OCc8F: Us9nd: goto WfIKS; hw8xV: tA9kH: goto JMGKF; g8ICY: kHcVw: goto NgJ5L; WfIKS: $this->output_json(["\154\157\147" => $log, "\152\141\x64\167\141\154" => $jadwal, "\155\141\164\145\x72\x69" => $jadwal_materi, "\x6d\x61\160\x65\x6c\163" => $mapel_bulan_ini]); goto Y2Vpw; Lo0Jj: $id_kelas = $this->input->post("\x6b\x65\x6c\141\163", true); goto fOid7; EMap2: $jadwal = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto isiqP; hu28y: goto ACeAg; goto YhFc6; Uznho: $tahun = $this->input->post("\164\x68\156", true); goto J17aw; isiqP: if ($jadwal != null) { goto i8_gC; } goto azDZx; J17aw: $bulan = $this->input->post("\x62\x6c\156", true); goto OOyXt; CAJ4R: foreach ($infos as $info) { goto UNtoe; hhRqJ: Sj51d: goto sMlcX; UNtoe: $dates = $this->total_hari($info->id_hari, $bulan, $tahun); goto FUwIT; lxgBo: WLlFC: goto hhRqJ; FUwIT: foreach ($dates as $date) { goto b0754; b0754: $d = explode("\55", $date); goto k9sRF; k9sRF: $mapel_bulan_ini[$d[2]][$info->jam_ke] = $date; goto jkl6z; jkl6z: IkDME: goto K9ej2; K9ej2: } goto lxgBo; sMlcX: } goto OCc8F; DfITX: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto bmOhe; RwTKb: VScLA: goto GhFgO; OOyXt: $id_tp = $this->master->getTahunActive()->id_tp; goto V60eN; GhFgO: $i++; goto IAC6z; GfHGY: $log = []; goto DfITX; sp69d: $mapel_bulan_ini = []; goto XZF0v; Y2Vpw: ACeAg: goto zC6tS; XZF0v: $infos = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $id_tp, $id_smt); goto CAJ4R; xi8bu: $jadwal_materi[$t] = (array) $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $b . "\55" . $t, [$id_mapel]); goto RwTKb; bmOhe: foreach ($siswa as $s) { goto sicM5; aAiKN: $b = $bulan < 10 ? "\60" . $bulan : $bulan; goto V5ki2; V5ki2: $arrMateri[1][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][1]) && isset($materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\x2d" . $t]) ? $materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\x2d" . $t] : null; goto wIQku; TCqqJ: if (!($i < $tgl)) { goto UZJXY; } goto wtfSd; WVGq5: $i++; goto Qn60I; Qn60I: goto TVLTQ; goto KwTtT; m_9i5: Qkfvr: goto WVGq5; wIQku: $arrMateri[2][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][2]) && isset($materi_perbulan[$s->id_siswa][2][$tahun . "\55" . $b . "\x2d" . $t]) ? $materi_perbulan[$s->id_siswa][2][$tahun . "\x2d" . $b . "\x2d" . $t] : null; goto m_9i5; sicM5: $arrMateri = []; goto xZrc5; xZrc5: $i = 0; goto FTUno; wtfSd: $t = $i + 1 < 10 ? "\60" . ($i + 1) : $i + 1; goto aAiKN; n_KX0: $log[$s->id_siswa] = ["\x6e\141\x6d\x61" => $s->nama, "\156\x69\163" => $s->nis, "\x6b\x65\x6c\141\163" => $s->nama_kelas, "\x6d\141\x74\x65\162\x69" => $arrMateri[1], "\x74\x75\x67\141\163" => $arrMateri[2]]; goto ZQdgK; ZQdgK: MLy4B: goto pPr9f; KwTtT: UZJXY: goto n_KX0; FTUno: TVLTQ: goto TCqqJ; pPr9f: } goto gI_rb; IAC6z: goto kHcVw; goto hw8xV; DGR_J: $i = 0; goto g8ICY; fOid7: $id_mapel = $this->input->post("\x6d\x61\x70\x65\154", true); goto Uznho; qKVMw: $t = $i + 1 < 10 ? "\x30" . ($i + 1) : $i + 1; goto GpVVm; CWCXi: $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); goto PpdTP; YhFc6: i8_gC: goto xTnCE; V60eN: $id_smt = $this->master->getSemesterActive()->id_smt; goto EMap2; GpVVm: $b = $bulan < 10 ? "\x30" . $bulan : $bulan; goto xi8bu; azDZx: $this->output_json(["\152\141\144\167\141\x6c" => $jadwal]); goto hu28y; NgJ5L: if (!($i < $tgl)) { goto tA9kH; } goto qKVMw; zC6tS: } function total_hari($id_day, $bulan, $taun) { goto zZsn6; HcPpF: WxNH_: goto Ale6G; RnhX9: return $dates; goto V9bk6; g9wyN: cyJUl: goto RnhX9; yEUKl: $idday = $id_day == "\67" ? 0 : $id_day; goto aBXJm; bcIAx: array_push($dates, date("\x59\x2d\x6d\x2d\144", strtotime($taun . "\55" . $bulan . "\x2d" . $i))); goto YUPwe; wS978: l_occ: goto Tr1A_; YUPwe: UoS_g: goto HcPpF; aBXJm: $i = 1; goto wS978; IPWKr: if (!(date("\x4e", strtotime($taun . "\x2d" . $bulan . "\55" . $i)) == $idday)) { goto UoS_g; } goto BW066; BVoZz: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto yEUKl; vq5UK: $dates = []; goto BVoZz; zZsn6: $days = 0; goto vq5UK; oIQ2F: goto l_occ; goto g9wyN; Ale6G: $i++; goto oIQ2F; BW066: $days++; goto bcIAx; Tr1A_: if (!($i < $total_days)) { goto cyJUl; } goto IPWKr; V9bk6: } }
