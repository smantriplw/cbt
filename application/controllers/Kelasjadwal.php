<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasjadwal extends CI_Controller { public function __construct() { goto Kbun9; XjE7i: redirect("\x61\x75\x74\150"); goto hBpH0; k4mZm: if ($this->ion_auth->logged_in()) { goto zLlo1; } goto XjE7i; EPjj1: $this->form_validation->set_error_delimiters('', ''); goto pvqcV; Pq86D: $this->load->model("\103\142\164\137\155\x6f\x64\145\x6c", "\x63\x62\x74"); goto gg4YL; iYZ4b: $this->load->model("\115\x61\163\x74\145\x72\137\x6d\157\x64\145\x6c", "\x6d\141\x73\x74\x65\162"); goto fmK66; fmK66: $this->load->model("\x44\x61\x73\x68\142\x6f\141\x72\x64\x5f\155\x6f\144\145\154", "\x64\x61\163\x68\x62\157\141\162\144"); goto Pq86D; mCzw7: $this->load->model("\104\162\157\160\144\x6f\x77\x6e\137\x6d\157\x64\145\154", "\144\x72\x6f\x70\x64\x6f\x77\x6e"); goto EPjj1; FmWNW: $this->load->library(["\x64\141\x74\141\164\141\142\154\x65\x73", "\146\x6f\x72\x6d\x5f\x76\141\x6c\x69\144\x61\x74\x69\157\156"]); goto iYZ4b; gg4YL: $this->load->model("\114\x6f\x67\x5f\x6d\x6f\x64\x65\154", "\x6c\157\x67\147\x69\156\x67"); goto gKlsO; hBpH0: zLlo1: goto FmWNW; gKlsO: $this->load->model("\x4b\145\154\x61\163\x5f\x6d\157\144\x65\x6c", "\153\145\x6c\x61\163"); goto mCzw7; Kbun9: parent::__construct(); goto k4mZm; pvqcV: } public function output_json($data, $encode = true) { goto RvWk7; eqfF8: Y4zxG: goto jF86M; jF86M: $this->output->set_content_type("\141\x70\160\x6c\x69\x63\141\x74\x69\157\156\57\x6a\163\157\x6e")->set_output($data); goto lUVbt; hggkr: $data = json_encode($data); goto eqfF8; RvWk7: if (!$encode) { goto Y4zxG; } goto hggkr; lUVbt: } public function index() { goto b0ob4; pbdKz: $data["\x74\x70\x5f\x61\x63\164\x69\x76\x65"] = $tp; goto naiF2; b32zU: $data["\x6b\x65\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto fN9sJ; sVs5e: $this->load->view("\153\x65\x6c\141\163\x2f\152\141\144\167\x61\154\x2f\144\141\164\x61"); goto LQiXV; NDuQx: if ($this->ion_auth->is_admin()) { goto dxwFy; } goto yJpo9; LQiXV: $this->load->view("\137\164\145\x6d\x70\x6c\141\164\x65\163\x2f\144\141\x73\150\x62\x6f\x61\x72\x64\x2f\x5f\146\157\x6f\164\x65\x72"); goto mjJpT; PwWRi: HO8wk: goto M1ZRQ; ByOXQ: $tp = $this->dashboard->getTahunActive(); goto d5VUL; M1ZRQ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Qqf1F; d5VUL: $smt = $this->dashboard->getSemesterActive(); goto XffOU; CH0M8: goto Y5SCo; goto Lk36D; s8evA: $this->load->view("\155\145\x6d\x62\x65\162\163\x2f\x67\165\x72\x75\57\153\x65\x6c\x61\163\57\152\x61\x64\x77\x61\x6c\57\144\x61\164\141"); goto HTyon; fN9sJ: $data["\151\x64\137\x6b\145\154\141\163"] = "\60"; goto M9GMS; zJU4U: $data = ["\165\x73\x65\162" => $user, "\152\x75\x64\x75\x6c" => "\112\141\144\167\141\x6c\40\x50\145\x6c\141\152\x61\162\141\x6e", "\x73\x75\142\x6a\x75\144\x75\154" => "\123\x65\x74\x20\x4a\141\144\167\x61\x6c\x20\120\x65\x6c\x61\152\141\162\x61\156", "\163\145\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto ByOXQ; uaTGX: $data["\152\155\x6c\x49\163\164"] = []; goto QBnNJ; XffOU: $data["\164\x70"] = $this->dashboard->getTahun(); goto pbdKz; yJpo9: if ($this->ion_auth->in_group("\x67\165\x72\x75")) { goto HO8wk; } goto CH0M8; QBnNJ: $data["\152\x6d\154\115\141\160\145\x6c"] = []; goto NDuQx; mjJpT: goto Y5SCo; goto PwWRi; Lk36D: dxwFy: goto H4754; naiF2: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto rBMEw; b0ob4: $user = $this->ion_auth->user()->row(); goto zJU4U; HTyon: $this->load->view("\155\145\155\x62\x65\x72\x73\57\x67\x75\x72\x75\x2f\x74\x65\155\x70\x6c\x61\x74\145\163\x2f\146\157\157\164\x65\162"); goto qc0ax; qc0ax: Y5SCo: goto Hf2B6; rBMEw: $data["\x73\155\164\x5f\141\143\x74\151\x76\x65"] = $smt; goto b32zU; Qqf1F: $data["\x67\165\162\x75"] = $guru; goto dD12l; dD12l: $this->load->view("\x6d\145\155\142\145\x72\x73\x2f\147\165\162\165\x2f\x74\145\155\x70\154\141\x74\145\x73\57\x68\145\x61\x64\x65\162", $data); goto s8evA; nIeAF: $this->load->view("\137\x74\x65\x6d\x70\154\x61\164\x65\x73\57\x64\x61\163\150\142\x6f\x61\162\x64\57\137\150\x65\x61\x64\x65\x72", $data); goto sVs5e; M9GMS: $data["\155\x65\x74\150\157\x64"] = ''; goto uaTGX; H4754: $data["\x70\162\x6f\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto nIeAF; Hf2B6: } public function kelas($kelas) { goto OEOOM; yuucm: $tp = $this->dashboard->getTahunActive(); goto oxt5m; sNNcs: $data["\155\x65\x74\x68\157\x64"] = "\x65\144\x69\x74"; goto thvLL; oCETF: if ($jadm == null) { goto jcZWy; } goto tAzP2; T_24k: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto oCETF; csxjL: goto VbSIX; goto EBU2w; tAzP2: foreach ($jadm as $j) { $jadwal_mapel[] = ["\x6a\x61\144\x77\141\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; RDI82: } goto HAfeH; TCAYD: $data["\x67\165\x72\165"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto i54Rp; NmKM1: VbSIX: goto FRFyu; o3geR: $data["\155\145\164\x68\x6f\x64"] = "\x61\x64\x64"; goto tBWKT; IGsAx: $this->load->view("\155\x65\x6d\x62\145\162\x73\x2f\x67\x75\162\x75\57\164\145\x6d\x70\x6c\141\164\145\163\57\146\157\x6f\x74\x65\162"); goto oV4wt; Cxcr1: $data["\x6d\x61\160\x65\154\163"] = $this->dropdown->getAllKodeMapel(); goto K8P2C; pTVJF: $data = ["\165\x73\145\162" => $user, "\152\x75\x64\x75\x6c" => "\112\x61\x64\x77\x61\154\x20\x50\x65\x6c\141\x6a\x61\x72\141\156", "\x73\x75\142\x6a\x75\x64\165\x6c" => "\123\x65\x74\40\112\x61\144\x77\141\x6c\x20\x50\145\154\141\152\x61\x72\141\156", "\x73\x65\x74\164\151\156\x67" => $setting]; goto yuucm; oV4wt: PmV1z: goto FBA15; rQjX0: $data["\x73\x6d\x74\137\x61\x63\x74\151\166\x65"] = $smt; goto wv2kC; OEOOM: $user = $this->ion_auth->user()->row(); goto DFv19; HAfeH: nnZBH: goto sNNcs; tSjAn: jcZWy: goto alwFT; oxt5m: $smt = $this->dashboard->getSemesterActive(); goto iKvwC; Spa7E: $data["\164\160\x5f\x61\143\164\151\x76\x65"] = $tp; goto oiRB0; K8P2C: if ($this->ion_auth->is_admin()) { goto TE4q1; } goto LLiOo; nqXUF: $data["\160\x72\x6f\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto HlIOw; LLiOo: if ($this->ion_auth->in_group("\147\165\162\x75")) { goto RRtju; } goto b6GG3; DFv19: $setting = $this->dashboard->getSetting(); goto pTVJF; i54Rp: $this->load->view("\x6d\145\x6d\142\x65\162\163\57\147\165\162\165\57\x74\x65\x6d\x70\154\x61\x74\145\x73\x2f\x68\x65\141\x64\x65\162", $data); goto cyPDw; INr8o: $this->load->view("\153\x65\154\x61\x73\57\x6a\x61\144\167\141\x6c\57\144\141\164\x61"); goto ydhWM; A1qp0: $data["\152\x61\144\167\141\154\x5f\x6b\142\155"] = $jadk; goto Tq9S5; oiRB0: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto rQjX0; roJu0: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto hxxpc; cerKN: $data["\x6a\x61\144\x77\x61\x6c\x5f\153\x62\155"] = json_decode(json_encode(["\151\x64\137\x74\160" => $tp->tahun, "\151\144\137\163\x6d\x74" => $smt->smt, "\151\x64\137\153\145\154\x61\163" => $kelas, "\x6b\x62\155\137\152\141\x6d\x5f\160\x65\x6c" => '', "\153\x62\155\x5f\152\x61\x6d\x5f\x6d\x75\x6c\x61\x69" => '', "\153\x62\x6d\x5f\x6a\x6d\x6c\137\155\x61\x70\145\154\x5f\150\x61\x72\151" => '', "\x69\x73\x74\x69\162\x61\150\141\164" => serialize([]), "\141\x64\x61" => false])); goto Oqath; vEJkj: TE4q1: goto nqXUF; hxxpc: if ($jadk == null) { goto vmW6Q; } goto A1qp0; cyPDw: $this->load->view("\155\145\155\142\x65\162\x73\57\147\x75\x72\x75\x2f\153\145\154\x61\163\x2f\152\141\x64\x77\141\x6c\x2f\144\x61\x74\x61"); goto IGsAx; JbW35: RRtju: goto TCAYD; b6GG3: goto PmV1z; goto vEJkj; EBU2w: u3CmQ: goto o3geR; Tq9S5: goto Jir9O; goto O60PR; ln2ZO: id_VQ: goto LzZX5; Oqath: Jir9O: goto pIKoq; PX_I7: goto PmV1z; goto JbW35; pIKoq: $data["\x69\144\137\153\145\154\141\163"] = $kelas; goto YrzYE; ydhWM: $this->load->view("\x5f\164\145\x6d\160\154\x61\x74\x65\x73\57\144\141\163\150\x62\x6f\x61\162\144\57\x5f\x66\x6f\157\x74\145\x72"); goto PX_I7; wv2kC: $data["\153\145\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto roJu0; ljTzA: $jadwal_mapel[] = ["\152\x61\x64\167\141\154" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto ln2ZO; OVxBB: $data["\152\x61\144\167\141\154\137\x6d\x61\x70\x65\x6c"] = $jadwal_mapel; goto Cxcr1; thvLL: goto rbyMh; goto tSjAn; YrzYE: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto T_24k; LzZX5: $i++; goto csxjL; O60PR: vmW6Q: goto cerKN; HlIOw: $this->load->view("\137\164\x65\x6d\160\x6c\x61\164\145\x73\x2f\x64\141\x73\x68\x62\157\141\x72\x64\57\137\x68\x65\x61\x64\x65\162", $data); goto INr8o; iKvwC: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Spa7E; tBWKT: rbyMh: goto OVxBB; FRFyu: if (!($i < $jml_mapel)) { goto u3CmQ; } goto ljTzA; alwFT: $i = 0; goto NmKM1; FBA15: } public function setJadwal() { goto ua1ki; qB86Q: $insert = ["\151\x64\137\153\142\x6d" => $id_tp . $id_smt . $id_kelas, "\x69\144\137\164\x70" => $id_tp, "\151\x64\x5f\x73\155\x74" => $id_smt, "\x69\144\x5f\x6b\x65\154\x61\x73" => $id_kelas, "\153\142\x6d\x5f\152\x61\x6d\137\160\145\154" => $this->input->post("\152\x61\x6d\137\155\141\x70\x65\x6c", true), "\153\x62\155\x5f\x6a\141\155\x5f\x6d\x75\154\x61\x69" => $this->input->post("\x6a\x61\155\137\155\165\154\141\151", true), "\x6b\x62\x6d\137\x6a\155\x6c\x5f\155\x61\x70\145\x6c\137\x68\x61\162\x69" => $this->input->post("\x6a\x6d\x6c\x5f\155\141\x70\145\154", true), "\x69\x73\x74\x69\x72\x61\x68\141\164" => serialize($istirahat)]; goto zcpGY; H3NSy: if (!($i < 5)) { goto y_OE6; } goto e4yV8; eYzcF: $data["\x73\x74\141\x74\x75\163"] = $update; goto vaGrw; vaGrw: $this->output_json($data); goto Nz5WF; D1ul0: j95Nd: goto H3NSy; fUiDw: $this->logging->saveLog(3, "\x6d\x65\x72\x75\142\141\x68\40\x6a\x61\x64\167\x61\154\40\160\x65\154\x61\x6a\141\x72\x61\156"); goto eYzcF; ou2_Y: $i = 1; goto D1ul0; oUhA3: $id_kelas = $this->input->post("\151\144\137\153\x65\154\x61\x73", true); goto qB86Q; HoVGV: $id_tp = $this->master->getTahunActive()->id_tp; goto po6br; BVXLA: $istirahat[] = ["\x69\163\164" => $jamke, "\144\x75\x72" => $durasi]; goto qatxm; ua1ki: $istirahat = []; goto ou2_Y; CyF6T: if (!$jamke) { goto alP_b; } goto BVXLA; zcpGY: $update = $this->db->replace("\153\x65\154\141\163\137\x6a\x61\144\x77\x61\x6c\137\x6b\x62\155", $insert); goto fUiDw; gHxrD: $i++; goto nq25E; xfMKA: y_OE6: goto HoVGV; nq25E: goto j95Nd; goto xfMKA; po6br: $id_smt = $this->master->getSemesterActive()->id_smt; goto oUhA3; e4yV8: $jamke = $this->input->post("\x69\x73\164" . $i, true); goto QdUBA; QdUBA: $durasi = $this->input->post("\x64\165\162\x5f\x69\163\164" . $i, true); goto CyF6T; m7YKu: i9R_t: goto gHxrD; qatxm: alP_b: goto m7YKu; Nz5WF: } public function setMapel() { goto qS2_a; qS2_a: $input = json_decode($this->input->post("\x64\141\164\x61", true)); goto Im8sd; tY02W: $data = []; goto gpXB1; DIxkU: $res["\163\164\141\x74\x75\x73"] = $update; goto j4hOp; Im8sd: $id_kelas = $this->input->post("\x69\144\x5f\x6b\145\x6c\x61\163", true); goto nhqyD; j4hOp: $this->output_json($res); goto giQkt; gpXB1: foreach ($input as $d) { $data[] = ["\x69\x64\x5f\152\141\144\167\141\154" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\151\x64\x5f\164\160" => $d->id_tp, "\x69\144\137\x73\155\164" => $d->id_smt, "\x69\144\137\153\145\x6c\x61\x73" => $id_kelas, "\x69\144\137\150\141\162\151" => $d->id_hari, "\152\x61\155\x5f\x6b\145" => $d->jam_ke, "\151\x64\x5f\155\141\x70\x65\154" => $d->id_mapel]; LiM_1: } goto D4Ndk; nhqyD: $array = array("\x69\144\x5f\164\x70" => $input[0]->id_tp, "\x69\x64\x5f\163\155\x74" => $input[0]->id_smt, "\x69\144\137\x6b\145\x6c\141\x73" => $id_kelas); goto C9n5K; D4Ndk: mvUIH: goto JiZit; JiZit: $update = $this->db->insert_batch("\153\x65\154\141\x73\137\152\141\144\167\x61\154\x5f\155\x61\160\145\x6c", $data); goto DIxkU; C9n5K: $this->db->where($array); goto MVcnL; MVcnL: $this->db->delete("\x6b\x65\x6c\141\163\x5f\x6a\141\x64\x77\141\154\137\x6d\141\x70\145\x6c"); goto tY02W; giQkt: } }
