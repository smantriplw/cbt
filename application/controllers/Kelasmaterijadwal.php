<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasmaterijadwal extends CI_Controller { public function __construct() { goto lH2yM; xKdor: ATjXE: goto wArji; lH2yM: parent::__construct(); goto LkLWl; kUBce: redirect("\141\165\x74\x68"); goto xKdor; ixCRT: $this->load->model("\104\141\163\x68\x62\157\x61\162\x64\x5f\155\157\144\x65\154", "\144\141\x73\150\142\157\x61\x72\144"); goto E2EMQ; LkLWl: if ($this->ion_auth->logged_in()) { goto ATjXE; } goto kUBce; pxlff: $this->form_validation->set_error_delimiters('', ''); goto EgXaa; Bx1Fe: $this->load->model("\x44\x72\157\160\x64\x6f\x77\156\137\x6d\x6f\144\145\154", "\x64\162\157\160\144\x6f\x77\156"); goto pxlff; lU_Yc: $this->load->model("\114\157\x67\x5f\x6d\x6f\x64\x65\x6c", "\154\157\147\147\x69\156\x67"); goto xB20i; xB20i: $this->load->model("\113\145\x6c\141\x73\x5f\155\x6f\144\x65\154", "\153\145\x6c\141\163"); goto Bx1Fe; wArji: $this->load->library(["\x64\x61\x74\141\x74\x61\142\x6c\x65\163", "\x66\x6f\x72\155\137\x76\x61\154\151\x64\141\164\x69\157\x6e"]); goto DkuuH; DkuuH: $this->load->model("\115\x61\x73\x74\145\x72\x5f\155\x6f\x64\x65\154", "\x6d\x61\163\x74\145\x72"); goto ixCRT; E2EMQ: $this->load->model("\103\x62\x74\x5f\x6d\x6f\144\x65\x6c", "\143\x62\x74"); goto lU_Yc; EgXaa: } public function output_json($data, $encode = true) { goto vRuCB; WhUmN: $this->output->set_content_type("\141\160\x70\154\x69\143\x61\x74\151\157\156\x2f\152\163\x6f\156")->set_output($data); goto UbmVT; vRuCB: if (!$encode) { goto cIbH9; } goto ba9lh; ba9lh: $data = json_encode($data); goto U4OxM; U4OxM: cIbH9: goto WhUmN; UbmVT: } public function index() { goto V6GTJ; QDSPa: $data["\x6a\x6d\154\115\x61\x70\x65\x6c"] = []; goto yegKr; ZxL_j: $this->load->view("\x6d\145\x6d\x62\x65\162\163\57\x67\x75\162\165\x2f\x74\x65\x6d\x70\x6c\141\x74\x65\x73\57\146\x6f\157\x74\x65\162"); goto L56A0; dZUdd: $this->load->view("\153\145\154\x61\x73\57\x6d\141\x74\145\162\x69\x6a\141\x64\x77\x61\154\57\x64\141\164\141"); goto ZxL_j; sl8aV: $smt = $this->dashboard->getSemesterActive(); goto SHIuZ; ksh1I: $data["\x64\x61\164\145\x5f\163\x65\x6c\145\143\164\x65\144"] = $thn . "\x2d" . $bln . "\55" . date("\x64"); goto fnC08; shL2t: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto deDMg; KgCYm: $data["\x73\155\x74\x5f\x61\143\164\x69\166\145"] = $smt; goto PzUY6; VXJzM: $tahun = explode("\57", $tp->tahun); goto EPBJo; f4Nt6: $data["\155\x65\164\150\157\x64"] = ''; goto tGRYE; zOZEM: o4vB0: goto shL2t; tGRYE: $data["\x6a\155\x6c\x49\163\x74"] = []; goto QDSPa; SHIuZ: $data["\x74\160"] = $this->dashboard->getTahun(); goto Zgrjt; V6GTJ: $user = $this->ion_auth->user()->row(); goto wL79P; B20oM: $data["\142\154\156\x5f\x73\x65\x6c\145\x63\164\145\144"] = $bln; goto ksh1I; Fm3wR: $tp = $this->dashboard->getTahunActive(); goto sl8aV; yegKr: $data["\164\x68\156\137\163\x65\x6c\x65\143\x74\145\x64"] = $tp->tahun; goto wCKky; x0C1x: goto FI3UZ; goto zOZEM; wCKky: $bln = $smt->id_smt == "\x31" ? "\x37" : "\61"; goto VXJzM; wCI01: $data["\x70\162\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto zAgY_; fnC08: if ($this->ion_auth->is_admin()) { goto ZvHUa; } goto esVbi; deDMg: $data["\147\x75\x72\165"] = $guru; goto t0T06; EPBJo: $thn = $smt->id_smt == "\x31" ? $tahun[0] : $tahun[1]; goto B20oM; PzUY6: $data["\153\x65\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto re54R; t0T06: $this->load->view("\x6d\145\155\142\145\162\163\x2f\x67\x75\x72\x75\57\164\145\155\x70\x6c\141\x74\x65\x73\57\150\145\x61\144\x65\x72", $data); goto dZUdd; Zgrjt: $data["\164\160\137\x61\x63\x74\x69\x76\x65"] = $tp; goto ehK88; zAgY_: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\x74\145\x73\57\x64\141\163\x68\x62\157\x61\x72\x64\57\137\150\145\141\144\145\162", $data); goto c4D4F; re54R: $data["\x69\144\x5f\153\145\x6c\x61\x73"] = "\60"; goto f4Nt6; X2I3j: ZvHUa: goto wCI01; esVbi: if ($this->ion_auth->in_group("\x67\165\x72\x75")) { goto o4vB0; } goto CNYch; ehK88: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto KgCYm; c4D4F: $this->load->view("\153\x65\x6c\x61\163\57\155\x61\164\x65\162\x69\x6a\141\144\167\x61\x6c\x2f\x64\x61\x74\141"); goto RWavW; CNYch: goto FI3UZ; goto X2I3j; wL79P: $data = ["\165\x73\x65\162" => $user, "\x6a\x75\x64\165\x6c" => "\112\x61\144\167\141\154\40\x50\145\154\141\x6a\141\162\141\156", "\163\165\x62\x6a\165\144\165\x6c" => "\123\145\164\40\x4a\x61\144\x77\141\154\40\x50\x65\154\141\x6a\141\x72\x61\156", "\163\x65\x74\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto Fm3wR; L56A0: FI3UZ: goto nCeCM; RWavW: $this->load->view("\x5f\164\145\x6d\160\154\x61\164\x65\x73\x2f\x64\141\x73\150\x62\157\x61\x72\x64\x2f\x5f\x66\x6f\157\164\145\x72"); goto x0C1x; nCeCM: } public function kelas() { goto GWu28; C8jS0: $data["\x6a\141\x64\167\141\x6c\137\x6b\142\155"] = $jadk; goto M25fM; NLhOC: if (!($i < $jml_mapel)) { goto jzbd6; } goto jJBeZ; FhXIt: $data["\x77\145\145\153"] = $week; goto HiSlt; pvZBa: I71JZ: goto NLhOC; hYow0: jzbd6: goto wXpEY; Z4vKJ: eGuP7: goto cTaZP; h56R3: $data["\x64\145\x74\x61\151\x6c\137\x6a\x61\x64\x77\141\154\x5f\164\x75\147\141\163"] = isset($semua_materi[2]) ? $semua_materi[2] : []; goto QELpt; jqB1r: $this->load->view("\x5f\164\x65\x6d\160\154\141\164\x65\163\57\x64\x61\163\150\x62\x6f\x61\x72\144\x2f\x5f\146\x6f\x6f\164\145\x72"); goto p4Q6o; wTAJt: $data["\x64\145\x74\x61\151\154\137\x6a\x61\x64\167\141\154\137\155\141\x74\x65\x72\151"] = isset($semua_materi[1]) ? $semua_materi[1] : []; goto h56R3; qS144: $user = $this->ion_auth->user()->row(); goto jo9zm; QELpt: if ($this->ion_auth->is_admin()) { goto eGuP7; } goto jefjf; M2xzW: $data["\x74\160\137\x61\143\x74\151\166\x65"] = $tp; goto uCzHp; GWu28: $tahun = $this->input->get("\x74\141\x68\165\156"); goto mvAgX; Oyh29: $data["\164\x70"] = $this->dashboard->getTahun(); goto M2xzW; LkiI3: $data["\x6d\145\164\150\157\x64"] = "\x65\144\151\164"; goto yg3of; jJBeZ: $jadwal_mapel[] = ["\152\141\144\167\x61\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto lyu2I; qA8fT: foreach ($jadm as $j) { $jadwal_mapel[] = ["\152\141\x64\x77\x61\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; N_AJ_: } goto uyXcg; I6W5i: $data["\x6d\141\x70\x65\x6c\x73"] = $this->master->getAllMapel(); goto YP0gZ; lyu2I: A2BtN: goto lFWar; nMbnL: $this->load->view("\137\164\x65\155\160\154\x61\164\x65\163\57\x64\141\x73\150\142\x6f\x61\162\x64\57\x5f\150\145\141\x64\145\x72", $data); goto R3zAt; jWdbR: $data["\x6a\141\x64\167\141\x6c\137\155\x61\160\145\x6c"] = $jadwal_mapel; goto I6W5i; Ph73z: goto I71JZ; goto hYow0; dgIkM: hJNAX: goto k2XGf; zfuYt: $data["\142\x6c\156\x5f\x73\x65\154\145\x63\164\x65\144"] = $bulan; goto Nm47B; YRG03: $i = 0; goto pvZBa; v0Dfc: $data["\164\150\156\137\x73\x65\154\x65\143\x74\145\144"] = $tahun; goto zfuYt; YP0gZ: $week = [date("\x59\x2d\155\x2d\144", strtotime("\x6d\x6f\156\x64\141\171\x20\164\150\x69\163\x20\x77\x65\x65\x6b", strtotime($date))), date("\131\55\155\55\144", strtotime("\164\165\x65\163\x64\x61\x79\40\x74\x68\151\163\x20\167\x65\x65\153", strtotime($date))), date("\x59\x2d\x6d\x2d\x64", strtotime("\167\x65\144\156\x65\163\x64\x61\171\40\164\x68\x69\163\40\x77\x65\145\153", strtotime($date))), date("\131\x2d\155\x2d\144", strtotime("\164\150\x75\x72\163\x64\x61\171\40\x74\x68\x69\x73\x20\x77\x65\x65\153", strtotime($date))), date("\x59\55\x6d\55\144", strtotime("\x66\x72\151\144\141\x79\x20\164\150\151\163\40\167\x65\x65\x6b", strtotime($date))), date("\131\55\155\x2d\x64", strtotime("\x73\x61\164\x75\x72\144\x61\171\40\164\150\151\x73\40\167\145\x65\153", strtotime($date)))]; goto v0Dfc; DWtup: $this->load->view("\x6d\145\155\x62\x65\x72\x73\x2f\x67\165\x72\165\x2f\x74\x65\x6d\x70\154\141\164\145\x73\x2f\150\145\141\x64\145\162", $data); goto wN8zQ; UILt4: ZUdar: goto LM2wW; yLZqw: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto M2zjJ; cTaZP: $data["\160\x72\157\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto nMbnL; Wfkyv: HHM7U: goto Y4gfB; gs0PA: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto dFIDx; uyXcg: y6ER1: goto LkiI3; lFWar: $i++; goto Ph73z; GuxNj: $data["\x6b\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto yLZqw; h2jcD: $smt = $this->dashboard->getSemesterActive(); goto Oyh29; p4Q6o: goto ZUdar; goto dgIkM; Y4gfB: $data["\152\x61\x64\x77\141\x6c\137\x6b\142\x6d"] = json_decode(json_encode(["\x69\144\x5f\x74\x70" => $tp->tahun, "\x69\x64\137\163\x6d\x74" => $smt->smt, "\151\144\137\x6b\145\154\x61\163" => $kelas, "\x6b\142\x6d\137\x6a\x61\155\x5f\160\x65\x6c" => '', "\153\x62\155\x5f\x6a\x61\155\x5f\x6d\x75\x6c\x61\151" => '', "\x6b\x62\x6d\x5f\x6a\x6d\x6c\x5f\x6d\141\x70\145\x6c\137\150\x61\x72\151" => '', "\151\163\164\x69\x72\x61\150\141\x74" => serialize([]), "\x61\x64\141" => false])); goto dhd3f; V5Lyf: goto ZUdar; goto Z4vKJ; M2zjJ: if ($jadk == null) { goto HHM7U; } goto C8jS0; R5wkp: $data = ["\x75\x73\145\x72" => $user, "\x6a\x75\144\x75\154" => "\112\x61\144\x77\141\x6c\40\x4d\x61\164\145\162\151\x20\x2f\40\x54\x75\x67\x61\163", "\163\165\x62\152\x75\x64\x75\x6c" => "\123\x65\164\x20\112\x61\x64\167\x61\154\x20\x4d\141\x74\145\162\x69\x20\x2f\x20\124\165\x67\x61\163", "\163\x65\164\164\x69\x6e\147" => $setting]; goto DLvIN; jefjf: if ($this->ion_auth->in_group("\147\165\162\165")) { goto hJNAX; } goto V5Lyf; jo9zm: $setting = $this->dashboard->getSetting(); goto R5wkp; aO99d: $data["\x69\x64\137\153\145\154\x61\x73"] = $kelas; goto gs0PA; HiSlt: $data["\x6f\x70\x73\151\x5f\x6d\x61\x74\145\162\151"] = $this->kelas->getAllMateriByKelas($tp->id_tp, $smt->id_smt); goto TPCLc; f790U: HVv1_: goto jWdbR; wN8zQ: $this->load->view("\153\x65\154\x61\163\57\155\141\x74\x65\x72\151\x6a\141\144\x77\141\154\x2f\x64\x61\x74\x61"); goto ryCwm; giNNW: $date = $this->input->get("\144\x61\x74\x65"); goto qS144; gYplq: if ($jadm == null) { goto DuPGD; } goto qA8fT; M25fM: goto ciQRR; goto Wfkyv; uCzHp: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto rJORO; Nm47B: $data["\144\141\164\x65\x5f\163\x65\x6c\x65\143\x74\145\144"] = $date; goto FhXIt; dFIDx: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto gYplq; iZzsm: $kelas = $this->input->get("\153\x65\154\141\163"); goto giNNW; ryCwm: $this->load->view("\155\x65\155\142\x65\x72\x73\57\x67\165\x72\165\57\164\x65\155\x70\x6c\x61\164\145\163\x2f\x66\x6f\x6f\x74\x65\x72"); goto UILt4; wXpEY: $data["\155\145\x74\x68\x6f\144"] = "\141\x64\x64"; goto f790U; yg3of: goto HVv1_; goto rLSbY; DLvIN: $tp = $this->dashboard->getTahunActive(); goto h2jcD; rLSbY: DuPGD: goto YRG03; R3zAt: $this->load->view("\153\145\154\x61\163\x2f\x6d\x61\164\x65\162\151\152\141\x64\167\141\x6c\x2f\x64\141\x74\x61"); goto jqB1r; dhd3f: ciQRR: goto aO99d; k2XGf: $data["\x67\165\x72\165"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto DWtup; rJORO: $data["\163\155\164\137\141\x63\164\151\x76\145"] = $smt; goto GuxNj; TPCLc: $semua_materi = $this->kelas->getAllJadwalMateriByKelas($tp->id_tp, $smt->id_smt); goto wTAJt; mvAgX: $bulan = $this->input->get("\x62\x75\x6c\x61\156"); goto iZzsm; LM2wW: } public function setJadwal() { goto czBHb; zi0Wv: $durasi = $this->input->post("\x64\165\x72\x5f\x69\x73\164" . $i, true); goto MCFci; cCcGz: $id_smt = $this->master->getSemesterActive()->id_smt; goto fhMN3; cqLHo: OBVbx: goto XBu0f; njBSh: $data["\163\x74\x61\x74\x75\163"] = $update; goto a15Wd; kdpAa: $i++; goto K8YXl; MCFci: if (!$jamke) { goto hBCOh; } goto ajJHI; Klh3O: wr0f2: goto m3TBg; v0WIE: $this->logging->saveLog(3, "\155\x65\162\x75\x62\x61\x68\x20\152\141\x64\167\x61\154\x20\160\145\154\x61\152\x61\x72\x61\156"); goto njBSh; fhMN3: $id_kelas = $this->input->post("\151\x64\x5f\x6b\x65\154\141\163", true); goto THRhE; c1T7Y: hBCOh: goto PSqXo; LwKct: $i = 1; goto Klh3O; m3TBg: if (!($i < 5)) { goto OBVbx; } goto b3nBu; ajJHI: $istirahat[] = ["\151\x73\164" => $jamke, "\x64\165\162" => $durasi]; goto c1T7Y; czBHb: $istirahat = []; goto LwKct; XBu0f: $id_tp = $this->master->getTahunActive()->id_tp; goto cCcGz; PSqXo: SJ_Sk: goto kdpAa; K8YXl: goto wr0f2; goto cqLHo; ELY9m: $update = $this->db->replace("\153\145\x6c\x61\x73\137\x6a\141\x64\x77\x61\x6c\137\153\x62\x6d", $insert); goto v0WIE; THRhE: $insert = ["\151\144\137\153\142\x6d" => $id_tp . $id_smt . $id_kelas, "\x69\144\x5f\164\160" => $id_tp, "\x69\144\x5f\x73\155\x74" => $id_smt, "\151\144\137\153\x65\154\141\x73" => $id_kelas, "\x6b\142\x6d\x5f\x6a\x61\x6d\x5f\160\145\x6c" => $this->input->post("\152\141\155\137\155\x61\x70\x65\x6c", true), "\x6b\142\155\x5f\x6a\x61\155\x5f\x6d\165\154\x61\x69" => $this->input->post("\152\x61\x6d\x5f\x6d\165\154\x61\151", true), "\x6b\142\x6d\137\x6a\x6d\154\x5f\x6d\x61\x70\145\154\137\x68\141\x72\151" => $this->input->post("\152\x6d\x6c\x5f\x6d\x61\x70\x65\154", true), "\x69\163\x74\151\162\x61\150\141\164" => serialize($istirahat)]; goto ELY9m; b3nBu: $jamke = $this->input->post("\x69\163\x74" . $i, true); goto zi0Wv; a15Wd: $this->output_json($data); goto M1IN2; M1IN2: } public function setMapel() { goto AwDNH; DULv9: $this->output_json($res); goto RGxnX; f8cyc: XuvDE: goto F274j; sK1RL: foreach ($input as $d) { goto qfQrT; z8G4n: rVRfC: goto Dl6Bo; qfQrT: $data = ["\x69\144\137\x6a\141\144\167\141\x6c" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\x64\x5f\164\x70" => $d->id_tp, "\x69\x64\x5f\163\x6d\x74" => $d->id_smt, "\x69\x64\137\153\x65\x6c\141\163" => $id_kelas, "\x69\x64\137\x68\x61\162\x69" => $d->id_hari, "\x6a\141\155\x5f\153\x65" => $d->jam_ke, "\x69\144\x5f\155\x61\160\x65\154" => $d->id_mapel]; goto uJK65; uJK65: $update = $this->db->replace("\153\145\x6c\141\163\137\x6a\x61\x64\x77\141\x6c\137\x6d\x61\x70\x65\154", $data); goto z8G4n; Dl6Bo: } goto f8cyc; F274j: $res["\x73\164\x61\164\165\163"] = $update; goto DULv9; V_QBn: $id_kelas = $this->input->post("\x69\144\x5f\153\x65\x6c\x61\163", true); goto sK1RL; AwDNH: $input = json_decode($this->input->post("\144\x61\x74\141", true)); goto V_QBn; RGxnX: } public function saveJadwal() { goto SkNRN; SkNRN: $input_materi = json_decode($this->input->post("\155\x61\x74\x65\162\151", true)); goto wJNq4; wJNq4: $input_tugas = json_decode($this->input->post("\x74\x75\147\x61\163", true)); goto q_Wav; KHA_Q: vkj7O: goto xtF0U; q_Wav: foreach ($input_materi as $im) { goto E337v; YV3nQ: UgikX: goto UQdp6; E337v: $insert = ["\x6a\145\156\x69\163" => "\61", "\x69\144\x5f\x6b\152\155" => $im->id_kjm, "\x69\x64\x5f\x74\160" => $im->id_tp, "\151\x64\x5f\x73\x6d\x74" => $im->id_smt, "\x69\x64\x5f\153\145\x6c\x61\x73" => $im->id_kelas, "\151\144\x5f\x6d\141\x74\x65\162\x69" => $im->id_materi, "\x69\x64\137\155\141\160\x65\x6c" => $im->id_mapel, "\152\141\x64\167\141\x6c\137\155\x61\164\x65\162\x69" => $im->jadwal_materi]; goto ZmnNO; ZmnNO: $update = $this->db->replace("\x6b\145\154\141\163\x5f\152\141\x64\167\141\x6c\x5f\155\x61\164\x65\162\151", $insert); goto YV3nQ; UQdp6: } goto KHA_Q; LBunP: E9gMg: goto kJWKZ; nbJUw: $this->output_json($update); goto qF_1F; xtF0U: foreach ($input_tugas as $im) { goto WlBx0; WlBx0: $insert = ["\x6a\145\x6e\151\x73" => "\x32", "\151\144\x5f\153\152\x6d" => $im->id_kjm, "\x69\144\137\x74\160" => $im->id_tp, "\151\144\x5f\x73\155\x74" => $im->id_smt, "\x69\144\x5f\x6b\145\154\x61\163" => $im->id_kelas, "\151\x64\x5f\155\x61\x74\x65\x72\x69" => $im->id_materi, "\x69\144\137\155\x61\160\145\x6c" => $im->id_mapel, "\x6a\141\144\167\x61\154\x5f\155\141\x74\145\x72\x69" => $im->jadwal_materi]; goto xYCXS; xYCXS: $update = $this->db->replace("\153\145\154\141\x73\137\152\141\144\x77\141\x6c\x5f\x6d\141\164\145\x72\x69", $insert); goto r_hxP; r_hxP: UtMLV: goto us_le; us_le: } goto LBunP; kJWKZ: $this->logging->saveLog(3, "\155\145\162\165\142\141\150\x20\x6a\x61\x64\x77\141\154\x20\x6d\x61\x74\x65\x72\151\40\x64\x61\x6e\40\x74\x75\x67\x61\x73"); goto nbJUw; qF_1F: } }
