<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasjadwal extends CI_Controller { public function __construct() { goto Luba6; cs7XG: $this->load->model("\114\x6f\147\x5f\155\x6f\x64\145\154", "\x6c\157\x67\x67\x69\156\x67"); goto G350K; OgWHQ: $this->load->model("\103\x62\x74\x5f\x6d\157\x64\145\154", "\x63\x62\164"); goto cs7XG; G350K: $this->load->model("\x4b\x65\x6c\x61\163\x5f\155\157\x64\x65\154", "\153\x65\x6c\141\x73"); goto F47j4; Luba6: parent::__construct(); goto JFQ2s; wLgJn: redirect("\x61\165\164\x68"); goto pamvR; YVVWe: $this->load->model("\x4d\x61\x73\164\145\x72\137\x6d\x6f\x64\145\x6c", "\x6d\x61\163\x74\145\162"); goto NZpZH; JFQ2s: if ($this->ion_auth->logged_in()) { goto xB_RE; } goto wLgJn; F47j4: $this->load->model("\x44\x72\157\x70\144\x6f\x77\156\x5f\x6d\x6f\x64\145\x6c", "\x64\x72\157\160\x64\x6f\x77\156"); goto eqmoh; pamvR: xB_RE: goto KVEzs; eqmoh: $this->form_validation->set_error_delimiters('', ''); goto QwYP9; NZpZH: $this->load->model("\104\x61\x73\150\142\157\141\x72\144\137\x6d\x6f\x64\145\x6c", "\144\x61\x73\x68\x62\157\x61\162\x64"); goto OgWHQ; KVEzs: $this->load->library(["\144\x61\164\x61\164\x61\x62\x6c\145\163", "\146\x6f\162\155\137\166\x61\x6c\x69\144\x61\164\x69\x6f\156"]); goto YVVWe; QwYP9: } public function output_json($data, $encode = true) { goto TQ7JM; TQ7JM: if (!$encode) { goto pJf9J; } goto mpeat; mpeat: $data = json_encode($data); goto W8zJC; W8zJC: pJf9J: goto NlC3s; NlC3s: $this->output->set_content_type("\x61\160\160\x6c\x69\143\x61\164\x69\x6f\156\x2f\152\x73\157\156")->set_output($data); goto dnWtp; dnWtp: } public function index() { goto t_AOc; J3LEQ: jNkiF: goto fj62v; OkW_p: $smt = $this->dashboard->getSemesterActive(); goto TsFW4; fj62v: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Mcx95; nDoji: $data["\x6b\x65\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto T6Adz; fZDjB: goto lsdL1; goto WUvRF; U5Rpw: $data["\155\145\164\x68\157\x64"] = ''; goto jBMmL; ZaHTK: $data["\x74\x70\137\141\x63\164\151\166\145"] = $tp; goto prok8; eD5vs: $data["\x73\x6d\x74\137\141\x63\x74\x69\x76\x65"] = $smt; goto nDoji; Bloq4: $this->load->view("\x6d\145\155\142\x65\162\163\x2f\x67\x75\x72\x75\x2f\164\x65\155\x70\154\x61\x74\145\163\57\150\145\141\x64\x65\162", $data); goto d2zHL; rPoAq: $this->load->view("\x6b\x65\x6c\x61\163\57\152\x61\144\167\x61\x6c\x2f\144\141\x74\141"); goto NMnEM; nh7A7: lsdL1: goto pgThJ; prok8: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto eD5vs; sypo0: $data = ["\165\x73\145\162" => $user, "\x6a\165\x64\x75\x6c" => "\x4a\141\x64\167\141\x6c\40\120\x65\x6c\141\x6a\x61\x72\x61\x6e", "\x73\x75\x62\152\165\x64\165\154" => "\123\x65\x74\40\112\141\144\167\141\154\40\120\145\x6c\141\152\x61\162\x61\156", "\x73\x65\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto OC9ja; NMnEM: $this->load->view("\x5f\x74\x65\x6d\160\154\x61\x74\x65\163\57\144\141\163\150\x62\x6f\141\162\x64\57\137\146\157\157\164\x65\x72"); goto ZUMxH; WUvRF: J8g8q: goto rR0Tm; ZAj7L: if ($this->ion_auth->is_admin()) { goto J8g8q; } goto JcgWx; Fe2o4: $this->load->view("\137\164\x65\x6d\160\154\x61\x74\x65\163\57\144\x61\x73\x68\x62\x6f\141\x72\x64\x2f\137\150\145\141\x64\x65\x72", $data); goto rPoAq; jBMmL: $data["\x6a\155\x6c\111\163\x74"] = []; goto QE61m; ZUMxH: goto lsdL1; goto J3LEQ; Mcx95: $data["\147\x75\162\165"] = $guru; goto Bloq4; OC9ja: $tp = $this->dashboard->getTahunActive(); goto OkW_p; d2zHL: $this->load->view("\155\x65\155\142\x65\162\x73\x2f\147\x75\x72\x75\57\x6b\x65\x6c\x61\163\57\x6a\141\x64\167\x61\154\x2f\144\x61\x74\x61"); goto qlCfb; QE61m: $data["\x6a\155\x6c\115\x61\160\x65\154"] = []; goto ZAj7L; T6Adz: $data["\x69\144\x5f\153\x65\154\141\x73"] = "\x30"; goto U5Rpw; JcgWx: if ($this->ion_auth->in_group("\147\x75\162\x75")) { goto jNkiF; } goto fZDjB; rR0Tm: $data["\x70\162\x6f\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Fe2o4; t_AOc: $user = $this->ion_auth->user()->row(); goto sypo0; qlCfb: $this->load->view("\x6d\x65\155\x62\145\162\163\x2f\147\x75\x72\165\x2f\x74\x65\x6d\x70\154\x61\164\145\163\57\146\x6f\157\164\145\x72"); goto nh7A7; TsFW4: $data["\164\160"] = $this->dashboard->getTahun(); goto ZaHTK; pgThJ: } public function kelas($kelas) { goto LCUap; lP1CM: if ($this->ion_auth->is_admin()) { goto mJlKI; } goto uyW6O; E3guw: $jadwal_mapel[] = ["\x6a\x61\x64\x77\141\x6c" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto LIISy; R8CfI: $data = ["\165\163\x65\162" => $user, "\152\165\144\165\154" => "\x4a\x61\x64\x77\x61\154\40\120\x65\x6c\141\152\x61\162\x61\x6e", "\163\x75\x62\152\x75\144\165\154" => "\123\x65\x74\x20\x4a\x61\144\x77\x61\x6c\40\120\145\154\141\x6a\x61\x72\x61\156", "\163\x65\164\164\151\x6e\147" => $setting]; goto vyDbD; mcqIH: $data["\152\141\144\x77\x61\x6c\137\155\141\x70\145\x6c"] = $jadwal_mapel; goto NPUF5; VB_tP: $data["\164\x70\x5f\141\143\x74\151\x76\145"] = $tp; goto bNsrZ; OPt6i: DaJwi: goto Ce3ID; Y4FcY: $data["\x6b\x65\154\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto hty7L; uqrLF: goto NCfJ2; goto O7Zgm; uyW6O: if ($this->ion_auth->in_group("\x67\165\x72\x75")) { goto Pdfcf; } goto tENtA; ScSYR: $this->load->view("\155\145\155\142\145\162\163\57\x67\165\x72\x75\57\164\x65\x6d\x70\154\141\x74\x65\x73\57\x68\145\141\x64\x65\x72", $data); goto ctvWZ; GHd6H: $smt = $this->dashboard->getSemesterActive(); goto SPwM2; hiDfu: $data["\152\141\144\167\141\x6c\137\153\142\x6d"] = json_decode(json_encode(["\151\x64\137\x74\x70" => $tp->tahun, "\151\144\137\163\x6d\164" => $smt->smt, "\x69\x64\137\153\x65\154\x61\163" => $kelas, "\153\142\155\x5f\x6a\141\155\137\160\145\154" => '', "\x6b\142\x6d\x5f\152\x61\155\x5f\x6d\165\x6c\141\151" => '', "\x6b\142\x6d\137\152\155\x6c\x5f\155\141\x70\x65\154\137\150\x61\x72\x69" => '', "\151\x73\164\151\162\x61\150\x61\164" => serialize([]), "\x61\x64\x61" => false])); goto OEJYE; Ce3ID: if (!($i < $jml_mapel)) { goto vopIF; } goto E3guw; gr3MQ: vopIF: goto Mq_Xe; wBhKO: $data["\155\x65\164\x68\157\x64"] = "\145\144\x69\x74"; goto uqrLF; G8VHK: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto HEjPS; NPUF5: $data["\x6d\141\160\x65\154\163"] = $this->dropdown->getAllKodeMapel(); goto lP1CM; gRw3I: $data["\x67\165\x72\x75"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ScSYR; CAmNi: $data["\x6a\141\144\x77\141\154\137\x6b\142\155"] = $jadk; goto L7J20; uzZay: HxO74: goto C1Ybq; GgbVB: WyFRy: goto wBhKO; OGDOD: $this->load->view("\x6d\x65\155\142\145\162\x73\x2f\x67\165\x72\x75\x2f\164\x65\x6d\x70\154\141\x74\145\163\x2f\146\157\157\164\x65\162"); goto uzZay; a29ur: foreach ($jadm as $j) { $jadwal_mapel[] = ["\x6a\141\144\167\x61\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; IxGtb: } goto GgbVB; SPwM2: $data["\x74\160"] = $this->dashboard->getTahun(); goto VB_tP; ctvWZ: $this->load->view("\155\145\155\142\x65\x72\x73\57\147\x75\162\165\57\153\x65\x6c\x61\x73\57\x6a\x61\x64\x77\141\x6c\57\144\x61\164\x61"); goto OGDOD; LIISy: mRtV3: goto IM98t; yEtsn: B2cc2: goto hiDfu; pbdmk: Pdfcf: goto gRw3I; HEjPS: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto tMPxu; Eqjhl: $data["\x70\x72\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto JVY3_; xEiho: goto DaJwi; goto gr3MQ; h2Soz: if ($jadk == null) { goto B2cc2; } goto CAmNi; vR3Sr: mJlKI: goto Eqjhl; O7Zgm: lFqGP: goto Mb71O; tMPxu: if ($jadm == null) { goto lFqGP; } goto a29ur; XwQDF: NCfJ2: goto mcqIH; JVY3_: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\164\145\x73\57\x64\x61\x73\150\142\x6f\141\162\144\x2f\x5f\150\145\x61\144\145\162", $data); goto tTw1W; Mb71O: $i = 0; goto OPt6i; Cqn6f: $data["\x69\144\x5f\153\145\154\141\163"] = $kelas; goto G8VHK; tENtA: goto HxO74; goto vR3Sr; LCUap: $user = $this->ion_auth->user()->row(); goto z2EMI; vGlv0: $data["\163\x6d\164\137\x61\143\164\151\166\145"] = $smt; goto Y4FcY; L7J20: goto Ccy_g; goto yEtsn; s6uOg: goto HxO74; goto pbdmk; hty7L: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto h2Soz; Mq_Xe: $data["\x6d\145\164\150\x6f\144"] = "\x61\144\144"; goto XwQDF; tTw1W: $this->load->view("\x6b\145\x6c\x61\163\x2f\x6a\x61\144\x77\141\154\57\144\x61\x74\141"); goto KX9pD; bNsrZ: $data["\163\155\164"] = $this->dashboard->getSemester(); goto vGlv0; vyDbD: $tp = $this->dashboard->getTahunActive(); goto GHd6H; z2EMI: $setting = $this->dashboard->getSetting(); goto R8CfI; IM98t: $i++; goto xEiho; KX9pD: $this->load->view("\137\x74\145\x6d\x70\154\x61\164\145\163\x2f\x64\141\x73\150\x62\x6f\x61\162\144\x2f\x5f\x66\x6f\157\164\145\162"); goto s6uOg; OEJYE: Ccy_g: goto Cqn6f; C1Ybq: } public function data() { $this->output_json($this->cbt->getJenis(), false); } public function setJadwal() { goto DQRDq; Z1soH: sp5qb: goto TeJuT; WnbTF: $i++; goto L0aFn; mR66M: $istirahat[] = ["\151\163\x74" => $jamke, "\x64\165\x72" => $durasi]; goto Z1soH; S_6jL: $jamke = $this->input->post("\151\x73\164" . $i, true); goto BL0i7; UyYsN: $insert = ["\x69\x64\137\x6b\x62\155" => $id_tp . $id_smt . $id_kelas, "\151\144\x5f\x74\x70" => $id_tp, "\x69\x64\137\163\x6d\164" => $id_smt, "\x69\x64\x5f\153\x65\154\141\163" => $id_kelas, "\153\142\155\x5f\152\x61\155\137\x70\x65\154" => $this->input->post("\152\141\x6d\x5f\x6d\x61\160\145\154", true), "\x6b\142\155\137\152\x61\155\137\155\165\x6c\141\x69" => $this->input->post("\x6a\x61\155\137\x6d\x75\154\141\x69", true), "\153\x62\155\x5f\x6a\155\154\x5f\155\x61\x70\145\154\137\x68\141\x72\151" => $this->input->post("\152\155\154\137\x6d\x61\x70\x65\154", true), "\x69\x73\164\x69\162\141\x68\141\164" => serialize($istirahat)]; goto f9XgO; cj2x7: $id_smt = $this->master->getSemesterActive()->id_smt; goto JlBpT; LRI8n: $i = 1; goto YLvaV; DQRDq: $istirahat = []; goto LRI8n; BL0i7: $durasi = $this->input->post("\144\165\162\x5f\151\x73\164" . $i, true); goto JKHuk; aNTG3: $data["\x73\164\x61\x74\165\163"] = $update; goto gBaET; EalS_: $this->logging->saveLog(3, "\x6d\145\x72\165\142\141\x68\x20\152\141\144\x77\141\x6c\x20\x70\145\x6c\141\152\x61\x72\141\156"); goto aNTG3; f9XgO: $update = $this->db->replace("\x6b\x65\154\141\x73\137\152\x61\144\x77\x61\154\137\153\x62\x6d", $insert); goto EalS_; ewK4h: gFm0q: goto Erv95; Erv95: $id_tp = $this->master->getTahunActive()->id_tp; goto cj2x7; TeJuT: yT69V: goto WnbTF; EzrRq: if (!($i < 5)) { goto gFm0q; } goto S_6jL; gBaET: $this->output_json($data); goto iUnwy; L0aFn: goto MqOoU; goto ewK4h; JlBpT: $id_kelas = $this->input->post("\151\x64\137\153\145\154\x61\163", true); goto UyYsN; YLvaV: MqOoU: goto EzrRq; JKHuk: if (!$jamke) { goto sp5qb; } goto mR66M; iUnwy: } public function setMapel() { goto O7CNc; tnwxO: $data = []; goto dOuND; O7CNc: $input = json_decode($this->input->post("\x64\x61\164\141", true)); goto FWQa0; n6VBb: $this->db->where($array); goto RywjV; dOuND: foreach ($input as $d) { $data[] = ["\151\x64\x5f\x6a\141\x64\167\141\154" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\144\137\x74\160" => $d->id_tp, "\x69\x64\x5f\x73\x6d\164" => $d->id_smt, "\x69\144\137\153\145\154\x61\x73" => $id_kelas, "\x69\x64\137\150\141\162\x69" => $d->id_hari, "\x6a\141\x6d\137\153\x65" => $d->jam_ke, "\151\144\x5f\155\141\160\x65\x6c" => $d->id_mapel]; yYbIZ: } goto te55l; fb8Nu: $array = array("\x69\x64\137\x74\160" => $input[0]->id_tp, "\151\x64\x5f\163\x6d\164" => $input[0]->id_smt, "\x69\x64\137\x6b\x65\154\x61\x73" => $id_kelas); goto n6VBb; Gqq_m: $res["\x73\164\141\164\x75\163"] = $update; goto djuXH; djuXH: $this->output_json($res); goto AgAga; te55l: paGVz: goto H6GMz; RywjV: $this->db->delete("\x6b\x65\x6c\x61\x73\x5f\x6a\x61\x64\167\x61\154\137\x6d\x61\x70\145\154"); goto tnwxO; FWQa0: $id_kelas = $this->input->post("\151\x64\137\x6b\145\x6c\141\x73", true); goto fb8Nu; H6GMz: $update = $this->db->insert_batch("\x6b\x65\154\x61\x73\x5f\152\141\x64\167\x61\154\x5f\x6d\x61\x70\145\x6c", $data); goto Gqq_m; AgAga: } }
