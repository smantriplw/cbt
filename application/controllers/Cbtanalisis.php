<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtanalisis extends CI_Controller { public function __construct() { goto BtEMM; dg4mj: S6Vp4: goto fY3zX; J9pBJ: $this->form_validation->set_error_delimiters('', ''); goto ApByD; p6bFs: show_error("\110\x61\156\171\141\40\101\x64\155\x69\156\151\x73\x74\162\x61\164\x6f\x72\x20\171\141\x6e\147\x20\x64\151\142\x65\162\x69\x20\x68\141\153\x20\x75\156\164\165\x6b\x20\x6d\x65\156\x67\x61\x6b\163\x65\163\x20\150\x61\x6c\x61\x6d\141\x6e\40\151\156\151\54\x20\x3c\141\x20\x68\x72\x65\146\x3d\42" . base_url("\x64\141\163\x68\142\157\141\x72\x64") . "\x22\x3e\113\x65\x6d\142\x61\x6c\x69\x20\153\x65\40\155\145\156\x75\x20\141\167\x61\x6c\x3c\x2f\141\76", 403, "\x41\x6b\x73\x65\163\40\124\145\x72\154\x61\x72\141\x6e\147"); goto t03Bx; t03Bx: FiMNQ: goto y4Fyp; qTaiC: $this->load->model("\115\141\163\x74\145\x72\137\x6d\157\x64\x65\154", "\x6d\x61\x73\x74\145\162"); goto FdEQq; pzUYt: $this->load->model("\114\157\x67\137\x6d\157\x64\145\x6c", "\x6c\157\x67\x67\151\156\147"); goto vVLUp; pJIS5: $this->load->library(["\144\x61\x74\141\164\141\x62\x6c\x65\x73", "\146\x6f\x72\155\x5f\166\141\x6c\151\144\x61\164\x69\157\x6e"]); goto qTaiC; NCy94: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\165"))) { goto FiMNQ; } goto p6bFs; fY3zX: redirect("\x61\x75\x74\150"); goto x7owH; Y8hfy: if (!$this->ion_auth->logged_in()) { goto S6Vp4; } goto NCy94; FdEQq: $this->load->model("\104\x61\x73\150\x62\x6f\141\x72\x64\x5f\x6d\157\144\145\x6c", "\x64\x61\x73\150\142\x6f\141\x72\x64"); goto u_L6C; BtEMM: parent::__construct(); goto Y8hfy; x7owH: kmqYZ: goto pJIS5; u_L6C: $this->load->model("\103\x62\164\137\155\157\144\145\x6c", "\143\x62\164"); goto pzUYt; y4Fyp: goto kmqYZ; goto dg4mj; vVLUp: $this->load->model("\104\x72\157\x70\144\x6f\167\x6e\x5f\x6d\157\x64\x65\154", "\144\162\x6f\x70\144\157\167\x6e"); goto J9pBJ; ApByD: } public function output_json($data, $encode = true) { goto utFEv; weqak: CY1Gw: goto x_EoH; x_EoH: $this->output->set_content_type("\x61\x70\160\x6c\151\x63\141\164\151\157\x6e\x2f\x6a\163\157\156")->set_output($data); goto o_E14; bOQci: $data = json_encode($data); goto weqak; utFEv: if (!$encode) { goto CY1Gw; } goto bOQci; o_E14: } public function index() { goto zvSzk; aafDU: goto uJ3G6; goto Igxh2; JVNaU: $smt_sel = $smt_sel == null ? $smt->id_smt : $smt_sel; goto kl1Tp; P_dTS: $data = ["\165\x73\x65\162" => $user, "\152\x75\x64\x75\x6c" => "\101\156\x61\x6c\151\x73\141\x20\x53\157\x61\154", "\x73\x75\142\x6a\x75\x64\165\x6c" => "\101\156\141\x6c\151\x73\x61\40\x53\x6f\x61\154\40\x55\152\151\141\156", "\163\145\164\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto AzFh3; A0Cfu: DULpD: goto xSvGQ; dzoX1: $data["\151\156\x66\157"] = $info; goto p_HO7; iNLxg: $this->load->view("\x5f\x74\145\x6d\x70\x6c\x61\x74\x65\x73\x2f\144\x61\163\x68\x62\157\141\162\x64\57\137\150\145\141\x64\x65\162", $data); goto d6WYn; fLNn7: $this->load->view("\x6d\x65\x6d\142\x65\162\163\57\x67\x75\x72\165\x2f\x74\145\x6d\x70\154\x61\164\x65\x73\57\x68\x65\x61\144\145\162", $data); goto aN4k3; MbJQF: if ($this->ion_auth->is_admin()) { goto qDhZ3; } goto BGCUx; rQ7np: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto R5HEN; Q8SXu: $smt_sel = $this->input->get("\163\x6d\164"); goto rAO6B; Stgyc: foreach ($all_jawaban as $jawaban_siswa) { goto ALZ0T; ALZ0T: array_push($ids, $jawaban_siswa->id_siswa); goto vvFwN; MNJk4: Ltezk: goto kgzq7; vvFwN: $jawabans_siswa[$jawaban_siswa->jenis_soal][$jawaban_siswa->nomor_soal][$jawaban_siswa->id_siswa] = $jawaban_siswa->jawaban_siswa; goto MNJk4; kgzq7: } goto SUexz; n9ABN: $all_jawaban = $this->cbt->getJawabanByBank($info->id_bank); goto A7WH2; A7WH2: $jawabans_siswa = []; goto lf4w3; yxU0_: Wblld: goto MbJQF; zvSzk: $user = $this->ion_auth->user()->row(); goto P_dTS; d6WYn: $this->load->view("\143\142\x74\x2f\141\156\x61\x6c\151\x73\x69\163\57\144\141\x74\x61"); goto I5_Fc; qDv6v: $nguru[$guru->id_guru] = $guru->nama_guru; goto aFe_h; gT8Qi: $data["\x70\162\x6f\x66\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto bEbnC; xSvGQ: soG3R: goto dzoX1; vX019: if (!($jadwal != null)) { goto Wblld; } goto YuiL1; sNzqo: $jadwal = $this->input->get("\152\x61\x64\167\141\x6c"); goto am2Lo; aN4k3: $this->load->view("\143\x62\x74\x2f\141\156\141\154\151\163\151\163\57\x64\141\x74\141"); goto Pw7Bx; am2Lo: $thn_sel = $this->input->get("\164\x68\156"); goto Q8SXu; GXiQc: if (!isset($all_soals[1])) { goto soG3R; } goto Y7ck2; qRhLZ: $data["\153\x6f\x64\x65\152\x61\x64\167\141\x6c"] = $this->dropdown->getAllJadwalGuru($thn_sel, $smt_sel, $guru->id_guru); goto fLNn7; Y7ck2: foreach ($all_soals[1] as $no => $soal) { goto IaLJU; QHc6l: if (!($cek == 1)) { goto Yoy71; } goto FeXkj; GAOVp: f5Nyg: goto P2Blq; i8h8Y: fqT_D: goto jCJx_; aam3j: $pearson = $this->pearson($x, $y); goto TfdER; sO9id: $soal->tingkat_kesukaran = $kesukaran; goto pY7_v; DGSZ0: ytlLQ: goto AykCc; u7K11: $pos_a = 0; goto ctW5o; oQ5h4: kFbAp: goto Qeq7L; sq2vU: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah != 0) { goto n1zga; } goto E8Drm; AnT8r: $daya_pembeda = 0; goto tEoC2; j3q8w: $soal->jumlah_salah = 0; goto cHdsQ; PTjhU: QR7o8: goto KGfuW; Plt04: if ($kesukaran >= 0.3) { goto zaKUH; } goto p0WAH; na0P2: $status_soal = "\163\145\144\x61\x6e\x67"; goto kh5LQ; ZrsAH: NPbWr: goto EJ0MM; FeXkj: $jml_siswa--; goto gg4sj; S52Of: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya - $yng_benar_golonganbawah / $bagi_daya; goto zXuPR; FZ41E: E86Hq: goto v2Ybg; Csk1D: $x = []; goto kmZP0; jBnLY: goto qEEYm; goto oQ5h4; cHdsQ: $total_siswa = 0; goto Csk1D; Qe9cX: $salah = $soal->jumlah_salah; goto zpnNO; LUMcc: foreach ($nilai_pg as $id => $nilai) { goto GAj18; rmA2p: if ($no <= $bagi) { goto ws_2p; } goto qMGXM; GdVhy: jsmWt: goto zmwJf; jS4An: $yng_benar_golonganbawah++; goto BE6YJ; VGeum: uPqEw: goto vTwsy; qMGXM: if (!($siswa_menjawab == $soal->jawaban)) { goto cWV99; } goto jS4An; GAj18: array_push($y, $nilai->pg_benar); goto uD9L8; uD9L8: if (!isset($jwbn_siswa[$id])) { goto jsmWt; } goto nk0gZ; kzebu: if (!($siswa_menjawab == $soal->jawaban)) { goto Eg8RB; } goto O6YCJ; O6YCJ: $yng_benar_golonganatas++; goto S7NBv; eXA2N: goto akstj; goto fFmvz; nk0gZ: $siswa_menjawab = $jwbn_siswa[$id]; goto rmA2p; S7NBv: Eg8RB: goto Ur4Xe; Ur4Xe: akstj: goto GdVhy; fFmvz: ws_2p: goto kzebu; zmwJf: $no++; goto VGeum; BE6YJ: cWV99: goto eXA2N; vTwsy: } goto PTjhU; kmZP0: $jwbn_siswa = isset($jawabans_siswa[1][$no]) && isset($jawabans_siswa[1][$no]) ? $jawabans_siswa[1][$no] : []; goto rNNi2; o_iRP: q43mI: goto zo1N1; pY7_v: $soal->status_kesukaran = $status_soal; goto svmRz; Qeq7L: $status_soal = "\155\x75\x64\x61\x68"; goto y8yVt; mu6JW: $yng_benar_golonganbawah = 0; goto UmQue; fyQDm: $bagi = $jml_siswa / 2; goto u7K11; QJIZ6: if ($daya_pembeda >= 0.7) { goto NPbWr; } goto Nh68_; lgEJg: $soal->status_daya = "\103\165\x6b\x75\x70"; goto lsPkk; pQALZ: $soal->skor_siswa = []; goto SbnXc; ctW5o: $pos_b = $bagi; goto JplfF; rmZ9H: $validitas = $this->nilaiSignifikansi($total_siswa) <= $pearson ? "\x56\141\x6c\151\x64" : "\124\x69\x64\141\x6b\x20\166\x61\x6c\151\x64"; goto IRySt; SbnXc: $soal->jumlah_benar = 0; goto j3q8w; Ta1wX: goto q43mI; goto SoEbp; AT0yX: oBLbP: goto lgEJg; lsPkk: C5vb3: goto jMxXR; UmQue: $no = 1; goto LUMcc; Nh68_: if ($daya_pembeda >= 0.4) { goto BSd_M; } goto o6cFx; ajkkW: f3Zpx: goto GAOVp; incn5: if ($kesukaran >= 0.7) { goto kFbAp; } goto Plt04; HpGau: $soal->benar_atas = $yng_benar_golonganatas; goto o1Jeh; svmRz: $cek = $jml_siswa % 2; goto QHc6l; UMfaJ: goto my92U; goto y3e8j; D6Zfk: $yng_benar_golonganatas = 0; goto mu6JW; y3e8j: zaKUH: goto na0P2; IRySt: $soal->status_valid = $validitas; goto ldYax; tEoC2: BpoNc: goto zFOLo; kh5LQ: my92U: goto jBnLY; zXuPR: goto BpoNc; goto Tcyua; jMxXR: goto E86Hq; goto engks; p0WAH: $status_soal = "\163\165\153\x61\162"; goto UMfaJ; TfdER: $soal->nilai_valid = $pearson; goto kJ2dw; Tcyua: bo_tL: goto AnT8r; o6cFx: if ($daya_pembeda >= 0.2) { goto oBLbP; } goto jx1n1; IaLJU: $soal->jawaban_siswa = []; goto pQALZ; MaGN4: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah == 0) { goto bo_tL; } goto S52Of; THSG6: $status_soal = ''; goto WRMZp; WRMZp: if (!($jml_siswa > 0)) { goto qdzVb; } goto JE1Pl; SoEbp: n1zga: goto oUr8A; AykCc: $benar = $soal->jumlah_benar; goto Qe9cX; oUr8A: $daya_pembeda = 0 - $yng_benar_golonganbawah / $bagi_daya; goto o_iRP; u7VqW: cWsuN: goto Ta1wX; zo1N1: $soal->daya_pembeda = $daya_pembeda; goto QJIZ6; JplfF: $y = []; goto D6Zfk; kJ2dw: $soal->table_r = $this->nilaiSignifikansi($total_siswa); goto rmZ9H; lGCXE: $kesukaran = 0; goto THSG6; zFOLo: goto cWsuN; goto i8h8Y; v2Ybg: goto f3Zpx; goto ZrsAH; zpnNO: $jml_siswa = $total_siswa; goto lGCXE; i1_Tp: qdzVb: goto sO9id; y8yVt: qEEYm: goto i1_Tp; gg4sj: Yoy71: goto fyQDm; ldYax: $bagi_daya = $bagi > 0 ? $bagi : 1; goto sq2vU; KGfuW: $soal->total_siswa = $total_siswa; goto HpGau; jCJx_: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya; goto u7VqW; engks: BSd_M: goto GzYmM; GzYmM: $soal->status_daya = "\102\141\x69\153"; goto FZ41E; f7isf: goto C5vb3; goto AT0yX; JE1Pl: $kesukaran = round($benar / $jml_siswa, 2); goto incn5; EJ0MM: $soal->status_daya = "\x42\141\x69\153\x20\123\x65\x6b\141\154\x69"; goto ajkkW; rNNi2: foreach ($jwbn_siswa as $id => $jawab_siswa) { goto jzXw_; FrVOf: dAgGi: goto vw0vq; F5CJv: array_push($x, 0); goto SWwzC; CrTO6: goto J1Lj7; goto hVahT; hVahT: lXCzz: goto V5B9R; V5B9R: $soal->jawaban_siswa["\152\141\167\x61\x62\137\141"][$id] = $jawab_siswa; goto l7qJ5; blgra: ZYYG9: goto FMDgX; JVJ9K: goto J1Lj7; goto ntorD; lXnzz: ELvqO: goto EiKdK; TD8w_: if ($jawab_siswa == "\x41") { goto lXCzz; } goto ZIccH; IHVms: if ($jawab_siswa == "\103") { goto NR01l; } goto Vnq7Z; po6_V: IExjx: goto TD8w_; hw3B8: $soal->jawaban_siswa["\152\141\167\141\142\x5f\142"][$id] = $jawab_siswa; goto apSxP; fIaIs: NR01l: goto heMpK; SWwzC: goto IExjx; goto FrVOf; iaMmi: if ($jawab_siswa == $soal->jawaban) { goto dAgGi; } goto C6yCa; Vnq7Z: if ($jawab_siswa == "\x44") { goto ZYYG9; } goto Pnb6t; l7qJ5: goto J1Lj7; goto NgPUz; heMpK: $soal->jawaban_siswa["\x6a\x61\167\141\x62\137\143"][$id] = $jawab_siswa; goto gEcu2; gEcu2: goto J1Lj7; goto blgra; apSxP: goto J1Lj7; goto fIaIs; W3ACy: $soal->jawaban_siswa["\x6a\141\167\141\x62\x5f\145"][$id] = $jawab_siswa; goto KZvbI; YBhx9: array_push($x, 1); goto po6_V; Pnb6t: if ($jawab_siswa == "\x45") { goto gOrWX; } goto CrTO6; ntorD: gOrWX: goto W3ACy; FMDgX: $soal->jawaban_siswa["\x6a\141\x77\x61\x62\137\x64"][$id] = $jawab_siswa; goto JVJ9K; NgPUz: GdtVG: goto hw3B8; ZIccH: if ($jawab_siswa == "\102") { goto GdtVG; } goto IHVms; vw0vq: $soal->jumlah_benar++; goto YBhx9; KZvbI: J1Lj7: goto lXnzz; C6yCa: $soal->jumlah_salah++; goto F5CJv; jzXw_: $total_siswa++; goto iaMmi; EiKdK: } goto DGSZ0; jx1n1: $soal->status_daya = "\112\145\x6c\x65\x6b"; goto f7isf; o1Jeh: $soal->benar_bawah = $yng_benar_golonganbawah; goto aam3j; E8Drm: if ($yng_benar_golonganatas != 0 && $yng_benar_golonganbawah == 0) { goto fqT_D; } goto MaGN4; P2Blq: } goto A0Cfu; bEbnC: $data["\153\x6f\x64\145\152\141\144\167\x61\154"] = $this->dropdown->getAllJadwal($thn_sel, $smt_sel); goto iNLxg; Pw7Bx: $this->load->view("\x6d\x65\x6d\142\x65\x72\x73\57\x67\165\162\165\57\164\x65\155\160\x6c\x61\164\x65\x73\57\146\157\157\164\145\162"); goto aafDU; AzFh3: $tp = $this->dashboard->getTahunActive(); goto vEp7N; UkAzT: $data["\164\x70\137\141\x63\x74\151\166\x65"] = $tp; goto rQ7np; vEp7N: $smt = $this->dashboard->getSemesterActive(); goto zFtCe; lf4w3: $ids = []; goto Stgyc; aFe_h: $data["\x67\165\162\x75"] = $guru; goto qRhLZ; HfQs6: uJ3G6: goto Ksh5x; R5HEN: $data["\163\x6d\x74\x5f\x61\x63\x74\151\x76\x65"] = $smt; goto sNzqo; SUexz: ipZEN: goto gtLnB; zFtCe: $data["\x74\x70"] = $this->dashboard->getTahun(); goto UkAzT; YuiL1: $info = $this->cbt->getJadwalById($jadwal); goto n9ABN; JE9qv: $data["\x73\155\164\137\163\x65\x6c\x65\x63\164\x65\x64"] = $smt_sel; goto AYsVt; kl1Tp: $data["\x74\160\137\x73\x65\154\145\x63\x74\145\144"] = $thn_sel; goto JE9qv; AYsVt: $data["\x6a\141\144\167\x61\x6c\137\163\x65\x6c\145\x63\164\x65\x64"] = $jadwal; goto vX019; Vpa4F: $data["\156\x69\154\141\151"] = $nilai_pg; goto yxU0_; Igxh2: qDhZ3: goto gT8Qi; BGCUx: $guru = $this->dashboard->getDataGuruByUserId($user->id, $thn_sel, $smt_sel); goto qDv6v; gtLnB: $nilai_pg = $this->cbt->getAllNilaiSiswa($jadwal); goto jLN9J; rAO6B: $thn_sel = $thn_sel == null ? $tp->id_tp : $thn_sel; goto JVNaU; p_HO7: $data["\163\157\141\154\x73"] = $all_soals; goto Vpa4F; jLN9J: $all_soals = $this->cbt->getSoalByBank($info->id_bank); goto GXiQc; I5_Fc: $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\x65\163\57\144\141\x73\150\142\x6f\141\x72\144\x2f\x5f\146\x6f\x6f\164\145\162"); goto HfQs6; Ksh5x: } private function pearson($x, $y) { goto B_c8y; kAVBa: ofOAe: goto bw136; lae5S: UnkaS: goto KXRTu; KXRTu: $x = array_values($x); goto ZTObN; fRRIO: BUPYw: goto KD_az; JIbMT: $ret = -1; goto mjoq9; vv0Ae: if (!($i < $d)) { goto BUPYw; } goto aGvPB; pC1Cz: $i++; goto Fzmyk; usM4a: $i = 0; goto NX1HS; Ec8JC: MZXX1: goto vv0Ae; HjWeQ: if (!(count($x) !== count($y))) { goto UnkaS; } goto JwEJ5; GXZSx: $cy = count($y); goto bHNrY; KD_az: wG20I: goto HjWeQ; lOrCQ: $yr = $y[$i] - $ys; goto CTLGj; bxKLA: $bx += pow($xr, 2); goto VMMei; I_hba: goto MZXX1; goto fRRIO; LWpws: XhC7I: goto NRO7S; VMMei: $by += pow($yr, 2); goto qjZmf; ZTObN: $y = array_values($y); goto Kqg7D; lzTW2: t1Nqf: goto vnl73; NRO7S: if (!($cx > $cy)) { goto wG20I; } goto iWRJO; aGvPB: array_pop($x); goto dVLNI; vlAFR: $bx = 0; goto SY_Ai; jJWlF: return -1; goto lzTW2; dVLNI: E6cAo: goto Uf3tb; vnl73: if (!($cx < $cy)) { goto XhC7I; } goto sX8sE; bw136: if (!($i < count($x))) { goto NZwBu; } goto fUwSe; t2zI_: $a = 0; goto vlAFR; mjoq9: if (!($b > 0)) { goto V3rVY; } goto lzCI8; OtxNY: z8FKh: goto vvy_I; lb44r: mTkLm: goto LWpws; OKfVF: V3rVY: goto ycLSW; CTLGj: $a += $xr * $yr; goto bxKLA; lzCI8: $ret = $a / $b; goto OKfVF; VnqBy: $i = 0; goto kAVBa; fUwSe: $xr = $x[$i] - $xs; goto lOrCQ; NX1HS: ISrnM: goto fRQOb; EfBLg: goto ISrnM; goto lb44r; fRQOb: if (!($i < $d)) { goto mTkLm; } goto tHiQV; ycLSW: return $ret; goto gE07L; Uf3tb: $i++; goto I_hba; qjZmf: W79rD: goto pC1Cz; yAi5P: $ys = array_sum($y) / count($y); goto t2zI_; bHNrY: if (!($cx === 0 || $cy === 0)) { goto t1Nqf; } goto jJWlF; vvy_I: $i++; goto EfBLg; SY_Ai: $by = 0; goto VnqBy; nB6qo: $i = 0; goto Ec8JC; Kqg7D: $xs = array_sum($x) / count($x); goto yAi5P; iWRJO: $d = $cx - $cy; goto nB6qo; sX8sE: $d = $cy - $cx; goto usM4a; B_c8y: $cx = count($x); goto GXZSx; Fzmyk: goto ofOAe; goto OgIIE; OgIIE: NZwBu: goto sWmJm; JwEJ5: return -1; goto lae5S; sWmJm: $b = sqrt($bx * $by); goto JIbMT; tHiQV: array_pop($y); goto OtxNY; gE07L: } public function getNilaiKelas() { goto stQRz; stQRz: $kelas = $this->input->get("\x6b\145\x6c\141\163"); goto TJ1_N; kwyBj: $data["\x6a\141\167\141\x62\141\156"] = $arrDur; goto ruiO3; TJ1_N: $sesi = $this->input->get("\x73\x65\x73\151"); goto NluXF; vK_Fl: $arrDur = []; goto uU2IJ; mJEVw: $smt = $this->dashboard->getSemesterActive(); goto Z5lDb; nj2Zp: $tp = $this->dashboard->getTahunActive(); goto mJEVw; iP4gP: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto vK_Fl; NluXF: $jadwal = $this->input->get("\152\141\144\167\x61\x6c"); goto nj2Zp; Z5lDb: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto iP4gP; ruiO3: $data["\151\x6e\x66\157"] = $info; goto BgJ1k; uU2IJ: foreach ($siswas as $siswa) { goto FwfM9; Bb4SX: $arrJawab_essai[$siswa->id_siswa][] = $jawaban; goto UP233; DV01D: BzlVY: goto mOfnU; Xjni7: $j = 0; goto hnbme; LcjeB: $j++; goto IxuIq; DQUUl: goto rrqd0; goto C0qI7; mWQUQ: $i++; goto DQUUl; IxuIq: goto xJPEu; goto DV01D; C0qI7: JZyt5: goto Xjni7; nG5A0: $arrDur[$siswa->id_siswa] = ["\144\x75\x72" => $this->cbt->getDurasiSiswa($siswa->id_siswa . "\x30" . $jadwal), "\x6a\141\x77\141\142\x5f\x70\147" => $arrJawab_pg[$siswa->id_siswa], "\152\x61\167\x61\x62\x5f\x65\x73\163\x61\151" => $jawab_essai, "\x6c\x6f\x67" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto Jxj59; cQTEX: $arrJawab_essai = []; goto kCs8k; REuKE: luxYY: goto Bb4SX; UP233: kMc1p: goto xU_5c; xU_5c: P4Koh: goto LcjeB; mOfnU: $jawab_essai = isset($arrJawab_essai[$siswa->id_siswa]) ? $arrJawab_essai[$siswa->id_siswa] : []; goto nG5A0; nfpH1: goto kMc1p; goto REuKE; Jxj59: NqUwx: goto siDeA; AELEt: if ($jawaban != null) { goto luxYY; } goto HqU9_; J3gBD: $arrJawab_pg[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\x30" . $jadwal . $info->id_bank . 1 . ($i + 1)); goto dE24s; FwfM9: $arrJawab_pg = []; goto cQTEX; IMdWw: if (!($i < $info->tampil_pg)) { goto JZyt5; } goto J3gBD; hbQUs: if (!($j < $info->tampil_esai)) { goto BzlVY; } goto kCyvR; dE24s: K0etY: goto mWQUQ; x5Bat: rrqd0: goto IMdWw; kCs8k: $i = 0; goto x5Bat; hnbme: xJPEu: goto hbQUs; kCyvR: $jawaban = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\x30" . $jadwal . $info->id_bank . 2 . ($j + 1)); goto AELEt; HqU9_: $arrJawab_essai[$siswa->id_siswa][] = array("\x69\144\x5f\152\141\x77\141\x62\x61\156" => 0, "\x6a\x61\x77\x61\142\141\156" => '', "\x6a\141\167\x61\x62\x61\156\x5f\x62\x65\x6e\x61\x72" => '', "\153\157\x72\145\x6b\x73\x69" => 0); goto nfpH1; siDeA: } goto dszJ2; BgJ1k: $this->output_json($data); goto tEWF5; dw0RE: $data["\163\151\x73\167\x61"] = $siswas; goto kwyBj; dszJ2: S3nch: goto dw0RE; tEWF5: } public function getJadwalUjianByJadwal() { goto FN9FU; FN9FU: $jadwal = $this->input->get("\x6a\141\144\167\x61\x6c"); goto c4Zjc; FEbl0: $this->output_json($kelases); goto WsHRv; qHJ4B: $kelas = unserialize($info->bank_kelas); goto AXNZ2; kkEQo: $info = $this->cbt->getJadwalById($jadwal); goto qHJ4B; emWDC: wkUsY: goto FEbl0; lf3dd: $smt = $this->input->get("\x73\155\164"); goto kkEQo; AXNZ2: $kelases = []; goto nMcq8; c4Zjc: $tp = $this->input->get("\164\150\x6e"); goto lf3dd; nMcq8: foreach ($kelas as $key => $value) { $kelases[$value["\x6b\x65\x6c\141\163\x5f\x69\144"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\x65\154\141\x73\137\151\x64"]); REvZL: } goto emWDC; WsHRv: } public function kalkulasi() { goto tz42b; BmFm9: $update = $this->generateNilaiUjian($jadwal); goto omqCy; omqCy: $this->output_json($update); goto m0Is3; tz42b: $jadwal = $this->input->get("\152\x61\144\x77\141\x6c"); goto BmFm9; m0Is3: } public function generateNilaiUjian($jadwal) { goto AoSqC; nemyo: $bagi_isian = $info->tampil_isian / 100; goto ibnkM; PuMLG: $bobot_jodoh = $info->bobot_jodohkan / 100; goto nemyo; kNm82: $bobot_essai = $info->bobot_esai / 100; goto SK90o; DsBaq: $jawabans_siswa = []; goto lqm63; lqm63: foreach ($jawabans as $jawaban_siswa) { goto V76wQ; k7G6E: $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto en5ru; gIPYt: if (!($jawaban_siswa->jenis_soal == "\x33")) { goto HDRsa; } goto m1bEz; m1bEz: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto dc4YR; fUcpi: $jawaban_siswa->jawaban_benar = array_map("\163\x74\x72\x74\x6f\165\160\x70\145\162", $jawaban_siswa->jawaban_benar); goto GldqT; VT2Vs: $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a); goto MwKLD; dc4YR: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto pdVnd; K07pt: $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar)); goto rFySR; MwKLD: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto LFILp; en5ru: $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto LvmUr; gJ1HU: dfiPk: goto gIPYt; GldqT: $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\x73\x74\x72\x6c\x65\x6e"); goto gJ1HU; rFySR: HDRsa: goto k7G6E; pdVnd: $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa)); goto K07pt; V76wQ: if (!($jawaban_siswa->jenis_soal == "\62")) { goto dfiPk; } goto VT2Vs; LvmUr: H37cF: goto ttUcg; LFILp: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto fUcpi; ttUcg: } goto y_u4B; qcviX: $bagi_pg2 = $info->tampil_kompleks / 100; goto SUKOT; fLGAa: $soal = []; goto DsBaq; ibnkM: $bobot_isian = $info->bobot_isian / 100; goto LhelV; QCnmv: $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases); goto E3ZZ1; T8r9X: $bagi_jodoh = $info->tampil_jodohkan / 100; goto PuMLG; y_u4B: CUxvN: goto fkagj; aw_V2: foreach ($siswas as $key => $value) { array_push($ids, $value->id_siswa); ro0z5: } goto CSXVs; rAm03: $bobot_pg = $info->bobot_pg / 100; goto qcviX; SK90o: $kelas_bank = unserialize($info->bank_kelas); goto Lae3E; LhelV: $bagi_essai = $info->tampil_esai / 100; goto kNm82; Cox_1: foreach ($kelas_bank as $key => $value) { array_push($kelases, $value["\x6b\145\x6c\141\x73\137\151\x64"]); eY2bl: } goto U2DJr; AoSqC: $info = $this->cbt->getJadwalById($jadwal); goto nIUQC; out_f: $update = $this->db->update_batch("\x63\142\x74\x5f\156\x69\x6c\x61\x69", $insets, "\151\x64\x5f\x6e\151\154\x61\x69"); goto DqpKB; qag09: $jawabans = $this->cbt->getJawabanByBank($info->id_bank); goto fLGAa; E3ZZ1: $ids = []; goto aw_V2; hjoUU: foreach ($siswas as $siswa) { goto R56dW; DVfve: $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\x31"] : []; goto PXB2m; aDn10: if (!(count($jawaban_jodoh) > 0)) { goto Em6yK; } goto om1MK; PbOeN: WRBXX: goto CiA10; YNeAC: drJpb: goto VaWy0; az2Je: $insert["\x6a\157\x64\157\x68\x6b\x61\156\x5f\x6e\151\x6c\141\151"] = round($skor_jod, 2); goto NlpUX; X2zhf: if (!($info->tampil_isian > 0)) { goto LgwyP; } goto GdHzo; qH7MY: foreach ($jawaban_es as $num => $jawab_es) { goto yP2Hl; yP2Hl: $skor_koreksi_es += $jawab_es->nilai_koreksi; goto fLMGF; ZPFAJ: $benar_es++; goto gtlWc; WCtKc: if (!$benar) { goto mL56u; } goto ZPFAJ; fLMGF: $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar); goto WCtKc; gtlWc: mL56u: goto K2h81; K2h81: $otomatis_es = $jawab_es->nilai_otomatis; goto qGna3; qGna3: WRS0Z: goto CGg85; CGg85: } goto S2_dA; CiA10: $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai; goto wJwZS; qVAL5: $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es); goto TGSOC; rYzLP: $benar_jod = 0; goto WFPQF; hwjN3: LunFK: goto U0zUL; CxPMX: $insert["\x6b\157\155\160\x6c\145\153\163\x5f\x6e\x69\x6c\x61\151"] = round($skor_pg2, 2); goto az2Je; jpk0M: $input_pg2 = 0; goto rP1x8; WyUma: array_push($insets, $insert); goto LhELu; DpjoW: $insert["\x69\144\137\x73\x69\x73\x77\141"] = $siswa->id_siswa; goto qALNN; DlAGY: $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\x33"] : []; goto rYzLP; aKjO2: foreach ($jawaban_pg2 as $num => $jawab_pg2) { goto s6Xb7; s6Xb7: $otomatis_pg2 = $jawab_pg2->nilai_otomatis; goto dZYac; P4J0v: goBkY: goto zpciS; aRcyx: $arr_benar = []; goto O2YGp; n0urL: AJ71S: goto BjGxk; BjGxk: $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar); goto P4J0v; dZYac: $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi; goto aRcyx; O2YGp: foreach ($jawab_pg2->jawaban_siswa as $js) { goto nqU3T; XD3Lh: PBWSg: goto Tm1Pr; RB3p8: array_push($arr_benar, true); goto XD3Lh; nqU3T: if (!in_array($js, $jawab_pg2->jawaban_benar)) { goto PBWSg; } goto RB3p8; Tm1Pr: Cygop: goto Qf7JF; Qf7JF: } goto n0urL; zpciS: } goto MgM1S; KD78l: $input_jod = 0; goto kWEjK; t0hiV: v7L5B: goto hwjN3; Js3yv: $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2); goto DlAGY; u8uhY: $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\65"] : []; goto OCFTl; oFmD9: $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian; goto c553x; om1MK: foreach ($jawaban_jodoh as $num => $jawab_jod) { goto ZMGCu; KLs0v: $item_salah = 0; goto rGVGg; ZMGCu: $skor_koreksi_jod += $jawab_jod->nilai_koreksi; goto AX5D3; iXmRo: foreach ($arrJawab as $kolJawab) { goto X_wCA; X_wCA: $jwbs = new stdClass(); goto sR6T_; wtgzQ: nNES9: goto Aulfn; b5i4h: array_push($arrJwbJawab, $jwbs); goto wtgzQ; klruU: UIqBt: goto b5i4h; sR6T_: foreach ($kolJawab as $po => $kol) { goto tzIyz; vOrL0: $jwbs->subtitle[] = $sub; goto lNzc2; c9HuA: gqKIW: goto esI5k; lNzc2: Muhmz: goto c9HuA; tzIyz: if (!($kol == "\x31")) { goto Muhmz; } goto XBweH; XBweH: $sub = $headJawab[$po]; goto vOrL0; esI5k: } goto klruU; Aulfn: } goto ik3HD; XaY1t: EEsxn: goto zDJq3; IvIkq: $headJawab = array_shift($arrJawab); goto hOEh0; p6f0I: $headSoal = array_shift($arrSoal); goto Tn3sY; Tn3sY: $arrJwbSoal = []; goto FmXUA; O93IP: $benar_jod += 1 / $items * $item_benar; goto Ofojd; hOEh0: $arrJwbJawab = []; goto iXmRo; Ofojd: $otomatis_jod = $jawab_jod->nilai_otomatis; goto XaY1t; ha2Mm: $item_benar = 0; goto KLs0v; tA2ue: NyAEj: goto W4Q9o; ik3HD: mPcDG: goto ha2Mm; AX5D3: $arrSoal = $jawab_jod->jawaban_benar->jawaban; goto p6f0I; likV_: foreach ($arrSoal as $kolSoal) { goto nCI0H; nCI0H: $jwb = new stdClass(); goto D96If; uOqDg: VO4GL: goto tjOv8; tActk: $jwb->title = array_shift($kolSoal); goto MGbmj; QtQd6: B4z32: goto tActk; D96If: foreach ($kolSoal as $pos => $kol) { goto UAwZO; ybhGb: qTO9V: goto g_y69; S07oL: $items++; goto KdXmk; UAwZO: if (!($kol == "\x31")) { goto tnjyr; } goto tr40N; KdXmk: tnjyr: goto ybhGb; tr40N: $jwb->subtitle[] = $headSoal[$pos]; goto S07oL; g_y69: } goto QtQd6; MGbmj: array_push($arrJwbSoal, $jwb); goto uOqDg; tjOv8: } goto tA2ue; W4Q9o: $arrJawab = $jawab_jod->jawaban_siswa->jawaban; goto IvIkq; rGVGg: foreach ($arrJwbJawab as $p => $ajjs) { goto ZoNu1; j_viu: r0Eub: goto EBKIJ; u8srK: V43DS: goto j_viu; ZoNu1: foreach ($ajjs->subtitle as $pp => $ajs) { goto BTj1q; kqvmF: g8Xi2: goto I0qW7; kQPSN: cu4Rj: goto HPxvi; HPxvi: $item_benar++; goto Ds6mw; BTj1q: if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) { goto cu4Rj; } goto YUTJp; DrY5A: goto b5CcU; goto kQPSN; YUTJp: $item_salah++; goto DrY5A; Ds6mw: b5CcU: goto kqvmF; I0qW7: } goto u8srK; EBKIJ: } goto VgJZ5; FmXUA: $items = 0; goto likV_; VgJZ5: gBJ6o: goto O93IP; zDJq3: } goto t1LD2; Ckhqg: if (!($info->tampil_kompleks > 0)) { goto Kyw6c; } goto gINNj; KHedc: if (!($info->tampil_jodohkan > 0)) { goto t_HrC; } goto aDn10; kAicP: t_HrC: goto dlWmD; NlpUX: $insert["\151\x73\x69\x61\x6e\x5f\x6e\151\154\x61\151"] = round($skor_is, 2); goto vycDX; KwhL_: Em6yK: goto kAicP; LhELu: rNHgG: goto HCpkM; V15Th: $input_es = $nilai_input->essai_nilai; goto DwwMH; c553x: $input_is = 0; goto uNfBq; f_ojQ: $benar_pg2 = 0; goto D60pi; gDUYT: $otomatis_jod = 0; goto KHedc; t1LD2: BXgj5: goto KwhL_; R56dW: $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]); goto tswI8; mBAJB: tQhCb: goto PbOeN; E6WlV: $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x32"]); goto dB6xG; Ovdsm: if (!($info->tampil_pg > 0)) { goto LunFK; } goto SZvH1; OCFTl: $benar_es = 0; goto LO8wg; WFPQF: $skor_koreksi_jod = 0.0; goto gDUYT; gINNj: if (!(count($jawaban_pg2) > 0)) { goto ZndZr; } goto aKjO2; nuVTA: foreach ($jawaban_pg as $jwb_pg) { goto LJ7Yn; T8YX9: uIHBK: goto EH_Nm; KDT3l: Z3G82: goto xbLuv; LJ7Yn: if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) { goto Z3G82; } goto mjCFT; EH_Nm: $benar_pg += 1; goto KK8Nf; xbLuv: PNe3j: goto Y4NlR; KK8Nf: w7LbQ: goto KDT3l; uy7It: goto w7LbQ; goto T8YX9; aj1o2: $salah_pg += 1; goto uy7It; mjCFT: if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) { goto uIHBK; } goto aj1o2; Y4NlR: } goto K4Hx2; DyIrN: $insert["\160\x67\x5f\156\x69\154\141\x69"] = round($skor_pg, 2); goto CxPMX; dSBbj: Fe_Ic: goto oFMNh; uNfBq: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto drJpb; } goto hHFhh; gIduQ: $input_pg2 = $nilai_input->kompleks_nilai; goto nC3Hh; PXB2m: $benar_pg = 0; goto uID9a; PESSG: $insert["\x70\x67\x5f\142\x65\x6e\141\162"] = $benar_pg; goto DyIrN; wJwZS: $input_es = 0; goto FJpS9; SZvH1: if (!(count($jawaban_pg) > 0)) { goto v7L5B; } goto nuVTA; S2_dA: hONET: goto mBAJB; c_bB7: $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\62"] : []; goto f_ojQ; Q0OZI: if (!($info->tampil_esai > 0)) { goto WRBXX; } goto eq5gL; E1q45: $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : []; goto PVJh7; K4Hx2: kQaIR: goto t0hiV; kWEjK: if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) { goto PWkvr; } goto bKhCL; oFMNh: hZ0de: goto Tha9h; dlWmD: $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh; goto KD78l; qALNN: $insert["\151\x64\x5f\152\x61\x64\x77\141\154"] = $jadwal; goto PESSG; TGSOC: $insert["\x69\x64\137\156\x69\x6c\141\x69"] = $siswa->id_siswa . "\x30" . $jadwal; goto DpjoW; dB6xG: $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x33"]); goto Ha9wi; MgM1S: OQRHi: goto gxz8p; U0zUL: $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg; goto c_bB7; DwwMH: u1CTA: goto qVAL5; hHFhh: $input_is = $nilai_input->isian_nilai; goto YNeAC; Ff1KW: $otomatis_is = 0; goto X2zhf; VaWy0: $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is); goto u8uhY; IML_R: $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa); goto DVfve; LO8wg: $skor_koreksi_es = 0.0; goto u24EK; Tha9h: LgwyP: goto oFmD9; UsR6m: Kyw6c: goto r04bB; MTGIf: $otomatis_pg2 = 0; goto Ckhqg; l4lTB: $skor_koreksi_is = 0.0; goto Ff1KW; FJpS9: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto u1CTA; } goto V15Th; oBFck: $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod); goto E1q45; RSIJT: foreach ($jawaban_is as $num => $jawab_is) { goto IiBiW; ISOi6: $otomatis_is = $jawab_is->nilai_otomatis; goto WMkuj; QzvQY: if (!$benar) { goto uTua7; } goto UGDso; Vw2rf: uTua7: goto ISOi6; UGDso: $benar_is++; goto Vw2rf; DTGFw: $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar); goto QzvQY; WMkuj: UnYku: goto Z1HKZ; IiBiW: $skor_koreksi_is += $jawab_is->nilai_koreksi; goto DTGFw; Z1HKZ: } goto dSBbj; UUwJB: PWkvr: goto oBFck; r04bB: $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2; goto jpk0M; eq5gL: if (!(count($jawaban_es) > 0)) { goto tQhCb; } goto qH7MY; JwqgN: $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]); goto IML_R; D60pi: $skor_koreksi_pg2 = 0.0; goto MTGIf; tswI8: $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\61"]); goto E6WlV; u24EK: $otomatis_es = 0; goto Q0OZI; GdHzo: if (!(count($jawaban_is) > 0)) { goto hZ0de; } goto RSIJT; nC3Hh: a6f0i: goto Js3yv; gxz8p: ZndZr: goto UsR6m; Ha9wi: $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]); goto JwqgN; vycDX: $insert["\145\x73\163\141\x69\137\156\151\154\141\x69"] = round($skor_es, 2); goto WyUma; PVJh7: $benar_is = 0; goto l4lTB; rP1x8: if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) { goto a6f0i; } goto gIduQ; bKhCL: $input_jod = $nilai_input->jodohkan_nilai; goto UUwJB; uID9a: $salah_pg = 0; goto Ovdsm; HCpkM: } goto c3UCU; Lae3E: $kelases = []; goto Cox_1; SUKOT: $bobot_pg2 = $info->bobot_kompleks / 100; goto T8r9X; DqpKB: return $update; goto YiAQ0; CSXVs: L5FRA: goto qag09; U2DJr: uHpyX: goto QCnmv; nIUQC: $bagi_pg = $info->tampil_pg / 100; goto rAm03; c3UCU: pXLNO: goto out_f; fkagj: $insets = []; goto hjoUU; YiAQ0: } private function nilaiSignifikansi($jml) { goto m3wqL; V7uYm: return $list[$jml]["\x31"]; goto ig5jq; ofACC: sXB2n: goto NTf8T; j3TB8: return $list[$keys]["\65"]; goto ofACC; ysofG: return $list[$keys]["\x31"]; goto u_nC3; VgBZg: yC9h6: goto xbeL4; ig5jq: goto js73L; goto pL1K8; pL1K8: UDIh3: goto qlcNY; wbt5N: LZ8S8: goto exLjt; MGxs0: $keys = 4; goto xC2zu; NTf8T: goto yC9h6; goto wbt5N; qlcNY: return $list[$jml]["\65"]; goto j_GBm; Ho6qG: IFF0o: goto j3TB8; ojTjW: $keys = $this->getClosest($jml, array_keys($list)); goto hscrz; u_nC3: goto sXB2n; goto Ho6qG; exLjt: if (isset($list[$jml]["\x35"])) { goto UDIh3; } goto V7uYm; hscrz: if (!($keys < 4)) { goto VHZli; } goto MGxs0; m3wqL: $list = [3 => [5 => 0.997], [1 => 0.999], 4 => [5 => 0.95], [1 => 0.99], 5 => [5 => 0.878], [1 => 0.959], 6 => [5 => 0.8110000000000001], [1 => 0.917], 7 => [5 => 0.754], [1 => 0.874], 8 => [5 => 0.707], [1 => 0.834], 9 => [5 => 0.666], [1 => 0.798], 10 => [5 => 0.632], [1 => 0.765], 11 => [5 => 0.602], [1 => 0.735], 12 => [5 => 0.576], [1 => 0.708], 13 => [5 => 0.553], [1 => 0.6840000000000001], 14 => [5 => 0.532], [1 => 0.661], 15 => [5 => 0.514], [1 => 0.641], 16 => [5 => 0.497], [1 => 0.623], 17 => [5 => 0.482], [1 => 0.606], 18 => [5 => 0.468], [1 => 0.59], 19 => [5 => 0.456], [1 => 0.575], 20 => [5 => 0.444], [1 => 0.5610000000000001], 21 => [5 => 0.433], [1 => 0.549], 22 => [5 => 0.423], [1 => 0.537], 23 => [5 => 0.413], [1 => 0.526], 24 => [5 => 0.404], [1 => 0.515], 25 => [5 => 0.396], [1 => 0.505], 26 => [5 => 0.388], [1 => 0.496], 27 => [5 => 0.381], [1 => 0.487], 28 => [5 => 0.374], [1 => 0.478], 29 => [5 => 0.367], [1 => 0.47], 30 => [5 => 0.361], [1 => 0.463], 31 => [5 => 0.355], [1 => 0.456], 32 => [5 => 0.349], [1 => 0.449], 33 => [5 => 0.344], [1 => 0.442], 34 => [5 => 0.339], [1 => 0.436], 35 => [5 => 0.334], [1 => 0.43], 36 => [5 => 0.329], [1 => 0.424], 37 => [5 => 0.325], [1 => 0.418], 38 => [5 => 0.32], [1 => 0.413], 39 => [5 => 0.316], [1 => 0.408], 40 => [5 => 0.312], [1 => 0.403], 41 => [5 => 0.308], [1 => 0.398], 42 => [5 => 0.304], [1 => 0.393], 43 => [5 => 0.301], [1 => 0.389], 44 => [5 => 0.297], [1 => 0.384], 45 => [5 => 0.294], [1 => 0.38], 46 => [5 => 0.291], [1 => 0.376], 47 => [5 => 0.288], [1 => 0.372], 48 => [5 => 0.284], [1 => 0.368], 49 => [5 => 0.281], [1 => 0.364], 50 => [5 => 0.279], [1 => 0.361], 55 => [5 => 0.266], [1 => 0.345], 60 => [5 => 0.254], [1 => 0.33], 65 => [5 => 0.244], [1 => 0.317], 70 => [5 => 0.235], [1 => 0.306], 75 => [5 => 0.227], [1 => 0.296], 80 => [5 => 0.22], [1 => 0.286], 85 => [5 => 0.213], [1 => 0.278], 90 => [5 => 0.207], [1 => 0.27], 95 => [5 => 0.202], [1 => 0.263], 100 => [5 => 0.195], [1 => 0.256], 125 => [5 => 0.176], [1 => 0.23], 150 => [5 => 0.159], [1 => 0.21], 175 => [5 => 0.149], [1 => 0.194], 200 => [5 => 0.138], [1 => 0.191], 300 => [5 => 0.113], [1 => 0.181], 400 => [5 => 0.098], [1 => 0.148], 500 => [5 => 0.08799999999999999], [1 => 0.128], 600 => [5 => 0.08], [1 => 0.115], 700 => [5 => 0.074], [1 => 0.105], 800 => [5 => 0.07000000000000001], [1 => 0.091], 900 => [5 => 0.065], [1 => 0.08599999999999999], 1000 => [5 => 0.062], [1 => 0.081]]; goto v7kR7; JV2U9: if (isset($list[$keys]["\x35"])) { goto IFF0o; } goto ysofG; v7kR7: if (isset($list[$jml])) { goto LZ8S8; } goto ojTjW; j_GBm: js73L: goto VgBZg; xC2zu: VHZli: goto JV2U9; xbeL4: } function getClosest($search, $arr) { goto r1Sox; r1Sox: $closest = null; goto shwV_; shwV_: foreach ($arr as $item) { goto cLyhK; TPKGV: Skulx: goto nVZZJ; arxYX: $closest = $item; goto EUZfU; cLyhK: if (!($closest === null || abs($search - $closest) > abs($item - $search))) { goto grMAG; } goto arxYX; EUZfU: grMAG: goto TPKGV; nVZZJ: } goto yINup; q0I3y: return $closest; goto PSTuw; yINup: zjtyC: goto q0I3y; PSTuw: } }
