<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtanalisis extends CI_Controller { public function __construct() { goto jAXvB; liqyV: $this->load->model("\115\141\163\x74\x65\x72\x5f\x6d\157\144\145\154", "\155\141\163\164\x65\162"); goto gdcTo; W07XN: $this->load->model("\x4c\x6f\147\x5f\155\157\144\x65\154", "\154\x6f\x67\x67\151\156\x67"); goto A8cc7; jAXvB: parent::__construct(); goto o5qXL; ilHDS: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\165"))) { goto jQSmr; } goto QKhtz; Ew7Ny: $this->form_validation->set_error_delimiters('', ''); goto c8JmL; AgiGg: $this->load->model("\x43\x62\x74\137\x6d\x6f\144\x65\154", "\143\142\x74"); goto W07XN; gdcTo: $this->load->model("\104\x61\x73\x68\142\157\141\162\x64\137\155\157\144\145\154", "\x64\141\163\x68\142\157\x61\x72\144"); goto AgiGg; duaqZ: jQSmr: goto HABon; o5qXL: if (!$this->ion_auth->logged_in()) { goto QNo5k; } goto ilHDS; A8cc7: $this->load->model("\104\162\x6f\x70\x64\157\167\x6e\x5f\x6d\x6f\144\145\x6c", "\x64\x72\x6f\x70\x64\x6f\167\156"); goto Ew7Ny; bpV4r: $this->load->library(["\x64\x61\164\x61\164\141\142\154\x65\163", "\x66\157\x72\x6d\x5f\166\141\x6c\x69\x64\141\x74\151\x6f\156"]); goto liqyV; Ktz4G: QNo5k: goto cDMBK; HABon: goto prjTy; goto Ktz4G; cDMBK: redirect("\141\165\164\x68"); goto oUhaT; QKhtz: show_error("\x48\x61\x6e\x79\141\40\x41\144\x6d\x69\x6e\x69\163\164\x72\x61\x74\157\x72\x20\x79\141\156\x67\40\x64\151\x62\145\162\151\x20\150\x61\x6b\40\x75\x6e\164\165\153\40\155\x65\156\147\141\153\163\145\x73\40\150\x61\154\141\x6d\x61\x6e\x20\151\x6e\151\x2c\x20\x3c\x61\x20\150\x72\145\x66\x3d\42" . base_url("\144\x61\163\150\142\x6f\x61\162\144") . "\x22\76\x4b\145\155\x62\141\x6c\x69\x20\x6b\145\40\155\145\x6e\x75\x20\x61\167\141\x6c\x3c\57\141\x3e", 403, "\x41\x6b\163\x65\163\x20\x54\x65\162\x6c\141\162\141\x6e\x67"); goto duaqZ; oUhaT: prjTy: goto bpV4r; c8JmL: } public function output_json($data, $encode = true) { goto scWQ0; scWQ0: if (!$encode) { goto bohia; } goto AjuEP; AjuEP: $data = json_encode($data); goto rwJwr; zBYvC: $this->output->set_content_type("\x61\160\x70\x6c\x69\143\141\x74\151\x6f\156\57\152\163\157\x6e")->set_output($data); goto mCj6W; rwJwr: bohia: goto zBYvC; mCj6W: } public function index() { goto V7_1M; FGXAw: $data["\x74\160\x5f\141\143\164\151\166\145"] = $tp; goto jeaam; EtLIL: $data["\x73\155\164\x5f\x73\x65\x6c\x65\143\x74\x65\x64"] = $smt_sel; goto zb9IN; WjQza: $thn_sel = $thn_sel == null ? $tp->id_tp : $thn_sel; goto mgxaq; AjO9d: goto zRbR7; goto F1DCH; jeaam: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto FFE8g; buoU4: $this->load->view("\155\x65\155\x62\145\162\x73\x2f\x67\x75\x72\x75\x2f\164\x65\x6d\160\x6c\141\164\145\x73\x2f\x68\145\141\x64\145\x72", $data); goto ttAZp; dM28B: $thn_sel = $this->input->get("\164\150\x6e"); goto eFBFG; MGhjs: $this->load->view("\155\145\155\x62\x65\x72\163\x2f\x67\x75\162\x75\x2f\x74\145\x6d\x70\154\x61\x74\145\x73\57\x66\x6f\157\x74\x65\x72"); goto AjO9d; G1MRT: xm9t2: goto UMlpk; RKq2e: $data["\151\x6e\x66\157"] = $info; goto SU3mG; IamDr: $nguru[$guru->id_guru] = $guru->nama_guru; goto j39b7; F1DCH: SacRd: goto fInRa; uHteA: $data["\164\x70"] = $this->dashboard->getTahun(); goto FGXAw; mgxaq: $smt_sel = $smt_sel == null ? $smt->id_smt : $smt_sel; goto dNFhK; zb9IN: $data["\x6a\141\x64\x77\x61\x6c\137\x73\145\x6c\x65\x63\164\x65\144"] = $jadwal; goto bFK4e; ttAZp: $this->load->view("\143\x62\x74\x2f\141\156\x61\154\151\x73\x69\x73\x2f\x64\x61\164\141"); goto MGhjs; fInRa: $data["\x70\162\x6f\x66\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto X2fx5; SU3mG: $data["\x73\x6f\141\154\163"] = $all_soals; goto zV7ZO; tOcar: $this->load->view("\137\x74\145\155\x70\x6c\141\x74\145\163\x2f\x64\x61\x73\x68\142\157\x61\x72\x64\x2f\137\150\145\141\x64\x65\x72", $data); goto s6acs; ZLlk_: if ($this->ion_auth->is_admin()) { goto SacRd; } goto Tmsj0; zV7ZO: $data["\x6e\x69\154\x61\x69"] = $nilai_pg; goto oS2fU; j39b7: $data["\147\x75\x72\165"] = $guru; goto AmkgB; IJrwH: if (!isset($all_soals[1])) { goto onpox; } goto rWADh; A1DOu: $all_soals = $this->cbt->getSoalByBank($info->id_bank); goto IJrwH; dNFhK: $data["\164\160\x5f\x73\145\154\x65\x63\x74\145\x64"] = $thn_sel; goto EtLIL; IyOZ6: $ids = []; goto JRZAH; KRbRt: $data = ["\165\x73\145\x72" => $user, "\x6a\x75\144\x75\154" => "\x41\x6e\x61\154\151\163\141\x20\x53\157\x61\154", "\163\x75\x62\152\165\144\x75\154" => "\101\x6e\x61\154\x69\x73\x61\40\123\157\141\x6c\x20\125\x6a\151\141\x6e", "\163\145\164\x74\151\156\x67" => $this->dashboard->getSetting()]; goto eYAZ_; Vc0Cd: $jawabans_siswa = []; goto IyOZ6; eYAZ_: $tp = $this->dashboard->getTahunActive(); goto DAIV8; s6acs: $this->load->view("\143\142\x74\x2f\141\156\x61\x6c\x69\x73\151\x73\x2f\x64\x61\x74\x61"); goto dOfdL; Tmsj0: $guru = $this->dashboard->getDataGuruByUserId($user->id, $thn_sel, $smt_sel); goto IamDr; eFBFG: $smt_sel = $this->input->get("\x73\155\x74"); goto WjQza; dIBmd: $all_jawaban = $this->cbt->getJawabanByBank($info->id_bank); goto Vc0Cd; qbVbK: $jadwal = $this->input->get("\x6a\141\144\167\141\154"); goto dM28B; DAIV8: $smt = $this->dashboard->getSemesterActive(); goto uHteA; UMlpk: $nilai_pg = $this->cbt->getAllNilaiSiswa($jadwal); goto A1DOu; AmkgB: $data["\x6b\157\x64\x65\x6a\141\144\x77\x61\154"] = $this->dropdown->getAllJadwalGuru($thn_sel, $smt_sel, $guru->id_guru); goto buoU4; rWADh: foreach ($all_soals[1] as $no => $soal) { goto vyMu9; SJnzJ: TcgdU: goto Wp8vA; NL0NB: $jwbn_siswa = isset($jawabans_siswa[1][$no]) && isset($jawabans_siswa[1][$no]) ? $jawabans_siswa[1][$no] : []; goto Kqse0; pZggA: $kesukaran = 0; goto A_ENG; vZAGV: RLTLi: goto JQt4H; UeMuq: fMqHG: goto OAY_E; xLZI6: $soal->daya_pembeda = $daya_pembeda; goto YDRzh; Kqse0: foreach ($jwbn_siswa as $id => $jawab_siswa) { goto FrKIQ; Suoy2: UgxsA: goto j0fhj; j0fhj: $soal->jawaban_siswa["\x6a\x61\167\141\x62\x5f\x62"][$id] = $jawab_siswa; goto flNRk; mxTB6: if ($jawab_siswa == "\102") { goto UgxsA; } goto GjXZw; FrKIQ: $total_siswa++; goto vqG_b; E90rO: if ($jawab_siswa == "\x41") { goto PKX1U; } goto mxTB6; M22po: $soal->jumlah_salah++; goto N0aOE; tp9vt: $soal->jawaban_siswa["\152\141\x77\x61\x62\137\x65"][$id] = $jawab_siswa; goto PHT1j; eCgjn: EkYTR: goto tp9vt; N0aOE: array_push($x, 0); goto e2wGY; wzuVX: if ($jawab_siswa == "\105") { goto EkYTR; } goto RXp9d; klRpX: vNmca: goto E90rO; TlTr4: xx8g7: goto FRMnM; mtcv8: KjEgi: goto jxaj3; PHT1j: m1C_h: goto jZG27; eDc3l: if ($jawab_siswa == "\x44") { goto KjEgi; } goto wzuVX; GjXZw: if ($jawab_siswa == "\103") { goto Sqfmg; } goto eDc3l; KBPZk: $soal->jawaban_siswa["\152\141\x77\141\x62\x5f\143"][$id] = $jawab_siswa; goto Gt6vF; aJcyg: array_push($x, 1); goto klRpX; e2wGY: goto vNmca; goto TlTr4; jxaj3: $soal->jawaban_siswa["\x6a\141\x77\141\142\x5f\144"][$id] = $jawab_siswa; goto mT1QP; FRMnM: $soal->jumlah_benar++; goto aJcyg; flNRk: goto m1C_h; goto mR9Gz; mR9Gz: Sqfmg: goto KBPZk; vqG_b: if ($jawab_siswa == $soal->jawaban) { goto xx8g7; } goto M22po; o1a11: goto m1C_h; goto Suoy2; Iktdw: PKX1U: goto COoqf; COoqf: $soal->jawaban_siswa["\x6a\x61\x77\141\142\137\x61"][$id] = $jawab_siswa; goto o1a11; RXp9d: goto m1C_h; goto Iktdw; mT1QP: goto m1C_h; goto eCgjn; jZG27: ynyl8: goto RfF0H; Gt6vF: goto m1C_h; goto mtcv8; RfF0H: } goto vR2Ha; YuBtz: wP47Z: goto OwFNx; eFxsO: $jml_siswa--; goto SJnzJ; LOcIe: $pos_b = $bagi; goto TrpW4; a4Jrj: $soal->jumlah_benar = 0; goto wIXsu; VmRw1: $pos_a = 0; goto LOcIe; rADEA: AV_6a: goto BV6Hv; znEbZ: goto LuBrE; goto YuBtz; b4UV2: Fkg_r: goto ZOXfl; i3up0: $soal->status_daya = "\x4a\145\x6c\x65\x6b"; goto znEbZ; s5hob: $pearson = $this->pearson($x, $y); goto pikal; fTVAM: $yng_benar_golonganatas = 0; goto DUn8b; FO6KB: goto XsGjc; goto Krla8; GAbDp: XsGjc: goto v9fJn; rLQAr: if ($daya_pembeda >= 0.2) { goto wP47Z; } goto i3up0; Youv9: $soal->total_siswa = $total_siswa; goto E0py4; iTBFJ: $soal->table_r = $this->nilaiSignifikansi($total_siswa); goto nGgdL; OAY_E: c6igP: goto r4AMF; Wp8vA: $bagi = $jml_siswa / 2; goto VmRw1; v9fJn: goto DUP4m; goto b4UV2; p7HPd: m1zxb: goto SJ7NA; JQt4H: VMQ5g: goto VNG9P; uwwB9: $soal->skor_siswa = []; goto a4Jrj; ZpErS: $status_soal = "\x73\165\x6b\x61\x72"; goto PzrP4; pikal: $soal->nilai_valid = $pearson; goto iTBFJ; sF57E: $cek = $jml_siswa % 2; goto GfPL6; fl_gJ: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah == 0) { goto xIOn6; } goto aD3Su; pywXS: $soal->status_daya = "\x42\141\x69\153\40\123\145\x6b\x61\x6c\151"; goto vZAGV; OwFNx: $soal->status_daya = "\x43\x75\x6b\x75\x70"; goto bL2Sh; UxzRY: $soal->status_kesukaran = $status_soal; goto sF57E; BV6Hv: $soal->status_daya = "\102\x61\151\x6b"; goto qUgUC; bL2Sh: LuBrE: goto ip5Uc; nGgdL: $validitas = $this->nilaiSignifikansi($total_siswa) <= $pearson ? "\126\x61\x6c\151\144" : "\x54\x69\x64\x61\x6b\x20\x76\x61\x6c\151\144"; goto QXIkE; b1sg9: n15kM: goto Youv9; SMl8D: $kesukaran = round($benar / $jml_siswa, 2); goto eDsim; gpCFw: $total_siswa = 0; goto ugB4w; Ks23L: if (!($jml_siswa > 0)) { goto c6igP; } goto SMl8D; DUn8b: $yng_benar_golonganbawah = 0; goto JDGM3; RxMxI: TE3ul: goto pywXS; uKrL1: a6ORi: goto xLZI6; HeeuQ: if ($daya_pembeda >= 0.4) { goto AV_6a; } goto rLQAr; vyMu9: $soal->jawaban_siswa = []; goto uwwB9; qRGL0: Jj6tx: goto Xrheo; ugB4w: $x = []; goto NL0NB; GfPL6: if (!($cek == 1)) { goto TcgdU; } goto eFxsO; wlLpe: X1ifa: goto TEQPJ; r4AMF: $soal->tingkat_kesukaran = $kesukaran; goto UxzRY; E_c1x: DUP4m: goto Lg8T0; w2KJR: $salah = $soal->jumlah_salah; goto xwz4t; tQa30: if ($kesukaran >= 0.3) { goto jbn2S; } goto ZpErS; PzrP4: goto X1ifa; goto YoKnd; aD3Su: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya - $yng_benar_golonganbawah / $bagi_daya; goto FO6KB; NorrJ: $daya_pembeda = 0; goto GAbDp; GOS52: $bagi_daya = $bagi > 0 ? $bagi : 1; goto jwc7o; ZOXfl: $daya_pembeda = $yng_benar_golonganatas / $bagi_daya; goto E_c1x; vR2Ha: J6Y39: goto SdaYv; TrpW4: $y = []; goto fTVAM; A_ENG: $status_soal = ''; goto Ks23L; Krla8: xIOn6: goto NorrJ; eDsim: if ($kesukaran >= 0.7) { goto m1zxb; } goto tQa30; ZwYL_: foreach ($nilai_pg as $id => $nilai) { goto GRoo7; GRoo7: array_push($y, $nilai->pg_benar); goto PpB94; PpB94: if (!isset($jwbn_siswa[$id])) { goto WIuIF; } goto f6mno; HwoVh: if (!($siswa_menjawab == $soal->jawaban)) { goto rfi1j; } goto cbCk9; OYU6f: $yng_benar_golonganbawah++; goto bHUmh; KtYLw: if (!($siswa_menjawab == $soal->jawaban)) { goto cc4LZ; } goto OYU6f; ADJzw: lWTcE: goto NrVV4; h6fvi: goto lWTcE; goto qo7h9; iJcdS: jNtLh: goto POl6A; bUQql: $no++; goto iJcdS; bHUmh: cc4LZ: goto h6fvi; NrVV4: WIuIF: goto bUQql; xbA4K: rfi1j: goto ADJzw; wwN8O: if ($no <= $bagi) { goto abeIw; } goto KtYLw; qo7h9: abeIw: goto HwoVh; f6mno: $siswa_menjawab = $jwbn_siswa[$id]; goto wwN8O; cbCk9: $yng_benar_golonganatas++; goto xbA4K; POl6A: } goto b1sg9; Xrheo: $daya_pembeda = 0 - $yng_benar_golonganbawah / $bagi_daya; goto uKrL1; E0py4: $soal->benar_atas = $yng_benar_golonganatas; goto eTKVt; JDGM3: $no = 1; goto ZwYL_; ddVGB: $status_soal = "\x73\x65\144\141\156\x67"; goto wlLpe; xwz4t: $jml_siswa = $total_siswa; goto pZggA; Lg8T0: goto a6ORi; goto qRGL0; YoKnd: jbn2S: goto ddVGB; ztNBi: if ($yng_benar_golonganatas != 0 && $yng_benar_golonganbawah == 0) { goto Fkg_r; } goto fl_gJ; ip5Uc: goto leEJb; goto rADEA; jwc7o: if ($yng_benar_golonganatas == 0 && $yng_benar_golonganbawah != 0) { goto Jj6tx; } goto ztNBi; SyMd1: goto RLTLi; goto RxMxI; SdaYv: $benar = $soal->jumlah_benar; goto w2KJR; SJ7NA: $status_soal = "\x6d\165\x64\x61\x68"; goto UeMuq; wIXsu: $soal->jumlah_salah = 0; goto gpCFw; QXIkE: $soal->status_valid = $validitas; goto GOS52; eTKVt: $soal->benar_bawah = $yng_benar_golonganbawah; goto s5hob; qUgUC: leEJb: goto SyMd1; TEQPJ: goto fMqHG; goto p7HPd; YDRzh: if ($daya_pembeda >= 0.7) { goto TE3ul; } goto HeeuQ; VNG9P: } goto I_j6H; JRZAH: foreach ($all_jawaban as $jawaban_siswa) { goto n9Tmi; n9Tmi: array_push($ids, $jawaban_siswa->id_siswa); goto wGKrN; wGKrN: $jawabans_siswa[$jawaban_siswa->jenis_soal][$jawaban_siswa->nomor_soal][$jawaban_siswa->id_siswa] = $jawaban_siswa->jawaban_siswa; goto Cgw7M; Cgw7M: NLoNn: goto IYG_B; IYG_B: } goto G1MRT; bFK4e: if (!($jadwal != null)) { goto qSh6n; } goto N1o5B; dOfdL: $this->load->view("\137\164\x65\155\x70\x6c\x61\164\x65\x73\57\x64\141\163\150\142\157\141\x72\144\57\x5f\x66\157\x6f\164\x65\162"); goto u9oKA; N1o5B: $info = $this->cbt->getJadwalById($jadwal); goto dIBmd; FFE8g: $data["\163\155\164\137\x61\143\x74\151\x76\x65"] = $smt; goto qbVbK; oS2fU: qSh6n: goto ZLlk_; X2fx5: $data["\x6b\157\x64\x65\x6a\141\144\x77\x61\x6c"] = $this->dropdown->getAllJadwal($thn_sel, $smt_sel); goto tOcar; gV3_4: onpox: goto RKq2e; I_j6H: xECB3: goto gV3_4; V7_1M: $user = $this->ion_auth->user()->row(); goto KRbRt; u9oKA: zRbR7: goto ROmMM; ROmMM: } private function pearson($x, $y) { goto dDt15; kGhnK: jHZF_: goto hZCB3; FAGh_: goto DbspB; goto rdeR9; xcVwB: $ret = $a / $b; goto nrGXP; Mqe0g: if (!($i < $d)) { goto Sfsa0; } goto drZu4; Hz1Cd: $y = array_values($y); goto JXSmr; xBV5K: $i++; goto Ye3om; x7Ucd: cPA2_: goto IS1uB; GQF0V: $bx += pow($xr, 2); goto lZHU7; WbjqX: $xr = $x[$i] - $xs; goto uXEBc; MOP4e: $i++; goto FAGh_; G03co: $i = 0; goto visH_; bBcf0: $ys = array_sum($y) / count($y); goto Bt_4e; sdrBr: if (!($cx < $cy)) { goto AWcc6; } goto mJ6Dc; drZu4: array_pop($x); goto LvFD3; VODSQ: if (!($i < $d)) { goto f9UUv; } goto Wpzvu; Rzm0u: if (!($i < count($x))) { goto eDvxX; } goto WbjqX; hnre6: $by = 0; goto CVxLr; nvELl: $i++; goto sxk0p; BZthy: $cy = count($y); goto nVfd4; nVfd4: if (!($cx === 0 || $cy === 0)) { goto aXzed; } goto bovAn; jl1t2: $d = $cx - $cy; goto b2ORV; IaFGU: aXzed: goto sdrBr; mJ6Dc: $d = $cy - $cx; goto G03co; S17XA: $a += $xr * $yr; goto GQF0V; visH_: DbspB: goto VODSQ; CVxLr: $i = 0; goto lwsg0; Wpzvu: array_pop($y); goto yuq_y; lZHU7: $by += pow($yr, 2); goto Y6E8X; IS1uB: $x = array_values($x); goto Hz1Cd; DhNMM: hG6zx: goto Mqe0g; lwsg0: Ra27j: goto Rzm0u; Ye3om: goto hG6zx; goto mrQo7; xfPIm: $ret = -1; goto OXV_n; b2ORV: $i = 0; goto DhNMM; mrQo7: Sfsa0: goto kGhnK; WNO2z: if (!($cx > $cy)) { goto jHZF_; } goto jl1t2; iJrt6: $b = sqrt($bx * $by); goto xfPIm; BHIrB: $bx = 0; goto hnre6; rdeR9: f9UUv: goto ILCrA; uXEBc: $yr = $y[$i] - $ys; goto S17XA; XGIEP: return -1; goto x7Ucd; bovAn: return -1; goto IaFGU; yuq_y: GaSXq: goto MOP4e; sxk0p: goto Ra27j; goto JNohN; bWdAN: return $ret; goto vBqmz; hZCB3: if (!(count($x) !== count($y))) { goto cPA2_; } goto XGIEP; JNohN: eDvxX: goto iJrt6; dDt15: $cx = count($x); goto BZthy; OXV_n: if (!($b > 0)) { goto F7m3g; } goto xcVwB; Bt_4e: $a = 0; goto BHIrB; Y6E8X: Rud6k: goto nvELl; JXSmr: $xs = array_sum($x) / count($x); goto bBcf0; LvFD3: cCML3: goto xBV5K; ILCrA: AWcc6: goto WNO2z; nrGXP: F7m3g: goto bWdAN; vBqmz: } public function getNilaiKelas() { goto ftQyg; Nf435: $data["\163\x69\x73\x77\x61"] = $siswas; goto T7jcf; a1zos: $this->output_json($data); goto Wh02n; aGGL2: $jadwal = $this->input->get("\152\x61\x64\x77\x61\x6c"); goto y2d3R; UHP1x: $siswas = $this->cbt->getSiswaByKelas($tp->id_tp, $smt->id_smt, $kelas); goto ZL2E6; KkuSo: $info = $this->cbt->getJadwalById($jadwal, $sesi); goto UHP1x; QAmzi: $smt = $this->dashboard->getSemesterActive(); goto KkuSo; I_i_2: foreach ($siswas as $siswa) { goto pgM3M; NiXJ7: cF678: goto kWp9b; w88Dq: RyISS: goto EaGER; pgM3M: $arrJawab_pg = []; goto QnJd6; F4Ohw: $jawaban = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\60" . $jadwal . $info->id_bank . 2 . ($j + 1)); goto t4GjD; GT4XE: Yn0Hs: goto wTu4E; yme06: goto u3E_V; goto pOsIQ; BVaq8: Z3cFQ: goto Oa1sW; pOsIQ: S9blD: goto WgTDw; ztR1z: if (!($i < $info->tampil_pg)) { goto cF678; } goto PwRDo; UwxW0: teOQQ: goto ztR1z; wiTkk: $i = 0; goto UwxW0; yjLb_: goto teOQQ; goto NiXJ7; wTu4E: PpQc2: goto VjY10; iS3OV: $arrJawab_essai[$siswa->id_siswa][] = array("\x69\x64\137\152\141\167\141\142\141\x6e" => 0, "\x6a\141\x77\141\142\x61\156" => '', "\x6a\141\167\x61\142\x61\x6e\137\x62\x65\156\x61\162" => '', "\x6b\157\162\145\153\163\x69" => 0); goto se9I8; WgTDw: $jawab_essai = isset($arrJawab_essai[$siswa->id_siswa]) ? $arrJawab_essai[$siswa->id_siswa] : []; goto mdqNU; mdqNU: $arrDur[$siswa->id_siswa] = ["\144\165\162" => $this->cbt->getDurasiSiswa($siswa->id_siswa . "\x30" . $jadwal), "\152\141\x77\141\142\x5f\x70\x67" => $arrJawab_pg[$siswa->id_siswa], "\152\x61\x77\141\x62\x5f\x65\x73\x73\x61\x69" => $jawab_essai, "\154\157\x67" => $this->cbt->getLogUjian($siswa->id_siswa, $jadwal)]; goto BVaq8; QnJd6: $arrJawab_essai = []; goto wiTkk; sH3F9: yANHW: goto OOYjI; EaGER: $i++; goto yjLb_; XCkmj: if (!($j < $info->tampil_esai)) { goto S9blD; } goto F4Ohw; PwRDo: $arrJawab_pg[$siswa->id_siswa][] = $this->cbt->getJawabanSiswa($siswa->id_siswa . "\x30" . $jadwal . $info->id_bank . 1 . ($i + 1)); goto w88Dq; Kscpq: u3E_V: goto XCkmj; VjY10: $j++; goto yme06; se9I8: goto Yn0Hs; goto sH3F9; kWp9b: $j = 0; goto Kscpq; t4GjD: if ($jawaban != null) { goto yANHW; } goto iS3OV; OOYjI: $arrJawab_essai[$siswa->id_siswa][] = $jawaban; goto GT4XE; Oa1sW: } goto dYX0o; ZL2E6: $arrDur = []; goto I_i_2; BPeqG: $data["\151\156\x66\157"] = $info; goto a1zos; T7jcf: $data["\152\x61\x77\141\x62\141\x6e"] = $arrDur; goto BPeqG; ftQyg: $kelas = $this->input->get("\x6b\x65\x6c\x61\163"); goto rmRCM; y2d3R: $tp = $this->dashboard->getTahunActive(); goto QAmzi; dYX0o: eH581: goto Nf435; rmRCM: $sesi = $this->input->get("\163\145\x73\x69"); goto aGGL2; Wh02n: } public function getJadwalUjianByJadwal() { goto jGvKs; jGvKs: $jadwal = $this->input->get("\152\141\144\x77\141\x6c"); goto RzIs1; Sbwfi: foreach ($kelas as $key => $value) { $kelases[$value["\x6b\145\x6c\x61\163\x5f\151\x64"]] = $this->dropdown->getNamaKelasById($info->id_tp, $info->id_smt, $value["\153\145\154\141\163\x5f\151\144"]); id_Qv: } goto XdVd9; RzIs1: $tp = $this->input->get("\164\150\x6e"); goto WA6M_; XdVd9: Xh0DM: goto LLfFJ; LLfFJ: $this->output_json($kelases); goto whZIL; WA6M_: $smt = $this->input->get("\163\155\164"); goto HVH23; KcNfn: $kelases = []; goto Sbwfi; XUAco: $kelas = unserialize($info->bank_kelas); goto KcNfn; HVH23: $info = $this->cbt->getJadwalById($jadwal); goto XUAco; whZIL: } public function kalkulasi() { goto MloM2; esC5Z: $update = $this->generateNilaiUjian($jadwal); goto gWDqb; MloM2: $jadwal = $this->input->get("\x6a\x61\144\x77\x61\x6c"); goto esC5Z; gWDqb: $this->output_json($update); goto P_KO9; P_KO9: } public function generateNilaiUjian($jadwal) { goto qHKpb; dB0hB: foreach ($kelas_bank as $key => $value) { array_push($kelases, $value["\x6b\x65\x6c\141\163\137\151\x64"]); bJymB: } goto oP0I9; pIY4K: $bagi_pg2 = $info->tampil_kompleks / 100; goto O10_U; O10_U: $bobot_pg2 = $info->bobot_kompleks / 100; goto XXbwX; k2HrS: $insets = []; goto iWbz8; U6PZ6: $jawabans = $this->cbt->getJawabanByBank($info->id_bank); goto NXOJ5; oP0I9: kqH12: goto fwagC; EHzYw: $kelas_bank = unserialize($info->bank_kelas); goto TROW6; m8JhW: $bobot_pg = $info->bobot_pg / 100; goto pIY4K; NXOJ5: $soal = []; goto zWru7; fwagC: $siswas = $this->cbt->getSiswaByKelas($info->id_tp, $info->id_smt, $kelases); goto G0cjj; zWru7: $jawabans_siswa = []; goto biNfC; G0cjj: $ids = []; goto sHf6d; biNfC: foreach ($jawabans as $jawaban_siswa) { goto LenQs; IuqL4: nmcJK: goto Ra2Gl; HGSLH: Vh0VW: goto Q9x_m; yQQf2: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto GKWq7; Ra2Gl: $jawabans_siswa[$jawaban_siswa->id_siswa][$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto ZFGdB; ZFGdB: $soal[$jawaban_siswa->jenis_soal][] = $jawaban_siswa; goto HGSLH; GKWq7: $jawaban_siswa->jawaban_benar = array_map("\x73\164\x72\x74\x6f\165\x70\160\145\162", $jawaban_siswa->jawaban_benar); goto FJLY2; wfBYB: $jawaban_siswa->jawaban_benar = @unserialize($jawaban_siswa->jawaban_benar); goto o0_Bc; qIoZk: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto wfBYB; LenQs: if (!($jawaban_siswa->jenis_soal == "\62")) { goto qB4Zd; } goto bsDS4; A2Pah: $jawaban_siswa->jawaban_siswa = @unserialize($jawaban_siswa->jawaban_siswa); goto yQQf2; CNfYA: if (!($jawaban_siswa->jenis_soal == "\x33")) { goto nmcJK; } goto qIoZk; FJLY2: $jawaban_siswa->jawaban_benar = array_filter($jawaban_siswa->jawaban_benar, "\x73\164\x72\154\x65\x6e"); goto Rr7Q1; Rr7Q1: qB4Zd: goto CNfYA; o0_Bc: $jawaban_siswa->jawaban_siswa = json_decode(json_encode($jawaban_siswa->jawaban_siswa)); goto K1Kqz; bsDS4: $jawaban_siswa->opsi_a = @unserialize($jawaban_siswa->opsi_a); goto A2Pah; K1Kqz: $jawaban_siswa->jawaban_benar = json_decode(json_encode($jawaban_siswa->jawaban_benar)); goto IuqL4; Q9x_m: } goto DcuDP; iWbz8: foreach ($siswas as $siswa) { goto AMsg9; au1qd: if (!($nilai_input != null && $nilai_input->jodohkan_nilai != null)) { goto XyaBY; } goto vUfDb; xsFbY: if (!($info->tampil_esai > 0)) { goto WkZlb; } goto qBayL; p8HHc: $ada_jawaban_jodoh = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\63"]); goto fxuHD; fxuHD: $ada_jawaban_isian = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x34"]); goto OCIah; KKFWi: if (!(count($jawaban_jodoh) > 0)) { goto hZ6Rg; } goto WnFlw; FrBHe: $input_jod = 0; goto au1qd; CkxCl: $skor_koreksi_jod = 0.0; goto l5Ht5; yOD4z: qyN_2: goto pqTgd; IDKWA: WeWZ1: goto JmB_0; bIwA9: array_push($insets, $insert); goto DdRrp; GAeQW: $skor_pg = $bagi_pg == 0 ? 0 : $benar_pg / $bagi_pg * $bobot_pg; goto hatms; DkXFk: $input_is = 0; goto rzCI2; dJVPu: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto ICaJZ; } goto ROj3x; rNeKY: $benar_pg2 = 0; goto o5NGH; kyUwe: WkZlb: goto ZMCdd; Q8y2N: $benar_is = 0; goto RaECD; bWIiz: $input_is = $nilai_input->isian_nilai; goto VHX0s; AgSEE: PuP5t: goto R2EfY; t9Kat: $jawaban_jodoh = $ada_jawaban_jodoh ? $jawabans_siswa[$siswa->id_siswa]["\63"] : []; goto qiUI6; OD4GD: if (!(count($jawaban_is) > 0)) { goto gEXq2; } goto zRxsW; JGdPO: foreach ($jawaban_pg as $jwb_pg) { goto HPtp9; Pkrx5: $salah_pg += 1; goto dBezT; HPtp9: if (!($jwb_pg != null && $jwb_pg->jawaban_siswa != null)) { goto Phszd; } goto BBy5Q; eF1qU: LyS4p: goto gIySb; CcNcs: Phszd: goto eF1qU; uLd9g: EF6Z7: goto CcNcs; wGoGV: yhCXf: goto Ixdwm; dBezT: goto EF6Z7; goto wGoGV; Ixdwm: $benar_pg += 1; goto uLd9g; BBy5Q: if (strtoupper($jwb_pg->jawaban_siswa) == strtoupper($jwb_pg->jawaban_benar)) { goto yhCXf; } goto Pkrx5; gIySb: } goto qGXHz; aLSGf: if (!($nilai_input != null && $nilai_input->kompleks_nilai != null)) { goto v4tuM; } goto LrLfA; OCIah: $ada_jawaban_essai = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\65"]); goto sjHhR; FinyX: if (!($info->tampil_kompleks > 0)) { goto PuP5t; } goto X939K; tj6O9: $jawaban_es = $ada_jawaban_essai ? $jawabans_siswa[$siswa->id_siswa]["\65"] : []; goto VPLp1; clofB: $benar_pg = 0; goto GyPcP; l5Ht5: $otomatis_jod = 0; goto AiO3V; GyPcP: $salah_pg = 0; goto jJnYq; WnFlw: foreach ($jawaban_jodoh as $num => $jawab_jod) { goto AMXOr; AMXOr: $skor_koreksi_jod += $jawab_jod->nilai_koreksi; goto KECHZ; KiKr6: foreach ($arrJawab as $kolJawab) { goto SK7qz; jVooe: array_push($arrJwbJawab, $jwbs); goto scprf; DetFr: foreach ($kolJawab as $po => $kol) { goto jk06d; KSyXd: $sub = $headJawab[$po]; goto qgSz5; qgSz5: $jwbs->subtitle[] = $sub; goto bpl2Q; iWce8: IhBD7: goto dHqZK; bpl2Q: psnK9: goto iWce8; jk06d: if (!($kol == "\61")) { goto psnK9; } goto KSyXd; dHqZK: } goto GC_tR; SK7qz: $jwbs = new stdClass(); goto DetFr; scprf: zrdVK: goto bjaly; GC_tR: pRGqX: goto jVooe; bjaly: } goto bUtGx; ZPjsE: foreach ($arrJwbJawab as $p => $ajjs) { goto NxU7C; VgKSS: Km67j: goto xNX4L; xNX4L: qnKjq: goto Prj4C; NxU7C: foreach ($ajjs->subtitle as $pp => $ajs) { goto c13xJ; U690B: Z4p0L: goto QHt03; WvWjW: $item_salah++; goto Gkf1H; Gkf1H: goto d0MBq; goto H2ztI; c13xJ: if (in_array($ajs, $arrJwbSoal[$p]->subtitle)) { goto zJmWJ; } goto WvWjW; nXNDN: d0MBq: goto U690B; H2ztI: zJmWJ: goto GAmKi; GAmKi: $item_benar++; goto nXNDN; QHt03: } goto VgKSS; Prj4C: } goto BxKEo; BxKEo: g5EIQ: goto mR8km; mR8km: $benar_jod += 1 / $items * $item_benar; goto htnKT; MvLvM: $items = 0; goto SwnWo; gWZIn: zzJfM: goto JK2_6; Do0gU: $item_benar = 0; goto ZDqBC; bUtGx: dGK8U: goto Do0gU; ZDqBC: $item_salah = 0; goto ZPjsE; JK2_6: $arrJawab = $jawab_jod->jawaban_siswa->jawaban; goto YYEN8; htnKT: $otomatis_jod = $jawab_jod->nilai_otomatis; goto hheGC; ADFw7: $arrJwbSoal = []; goto MvLvM; hheGC: y3rsF: goto wYBdP; KECHZ: $arrSoal = $jawab_jod->jawaban_benar->jawaban; goto l_K_i; l_K_i: $headSoal = array_shift($arrSoal); goto ADFw7; YYEN8: $headJawab = array_shift($arrJawab); goto taIQU; taIQU: $arrJwbJawab = []; goto KiKr6; SwnWo: foreach ($arrSoal as $kolSoal) { goto X7aov; GVism: $jwb->title = array_shift($kolSoal); goto IzTHO; DFWzD: foreach ($kolSoal as $pos => $kol) { goto wyGlm; f7tUo: wbVwf: goto S_5Wx; KRr1T: $items++; goto f7tUo; wyGlm: if (!($kol == "\x31")) { goto wbVwf; } goto TiFAm; TiFAm: $jwb->subtitle[] = $headSoal[$pos]; goto KRr1T; S_5Wx: ya4z6: goto h1YV4; h1YV4: } goto HmHNw; IzTHO: array_push($arrJwbSoal, $jwb); goto FKQOw; HmHNw: aGVV0: goto GVism; X7aov: $jwb = new stdClass(); goto DFWzD; FKQOw: OQMTZ: goto o2Z1D; o2Z1D: } goto gWZIn; wYBdP: } goto BK3j_; BuGp5: XyaBY: goto wyXfd; Q8reC: $skor_is = $input_is != 0 ? $input_is : ($otomatis_is == 0 ? $s_is : $skor_koreksi_is); goto tj6O9; NKK9k: I06QU: goto X9eP0; X9eP0: gdMGJ: goto AgSEE; SMcys: $input_es = 0; goto dJVPu; B839n: $jawaban_is = $ada_jawaban_isian ? $jawabans_siswa[$siswa->id_siswa]["\x34"] : []; goto Q8y2N; B1fsE: $insert["\151\144\x5f\163\151\x73\167\x61"] = $siswa->id_siswa; goto iny9D; bLtSJ: $s_jod = $bagi_jodoh == 0 ? 0 : $benar_jod / $bagi_jodoh * $bobot_jodoh; goto FrBHe; z5wTp: if (!(count($jawaban_pg) > 0)) { goto WeWZ1; } goto JGdPO; qVnlL: $insert["\x69\144\x5f\156\151\154\141\151"] = $siswa->id_siswa . "\x30" . $jadwal; goto B1fsE; LrLfA: $input_pg2 = $nilai_input->kompleks_nilai; goto QzJGM; VHX0s: dr1P1: goto Q8reC; VPLp1: $benar_es = 0; goto ISR9g; vUfDb: $input_jod = $nilai_input->jodohkan_nilai; goto BuGp5; dCGbq: $insert["\x70\147\x5f\142\x65\156\x61\162"] = $benar_pg; goto TGzmd; lOgpF: foreach ($jawaban_pg2 as $num => $jawab_pg2) { goto ujCTE; ujCTE: $otomatis_pg2 = $jawab_pg2->nilai_otomatis; goto LHx7l; Rgxne: foreach ($jawab_pg2->jawaban_siswa as $js) { goto CaZ5D; CaZ5D: if (!in_array($js, $jawab_pg2->jawaban_benar)) { goto xcg55; } goto gUh5j; gUh5j: array_push($arr_benar, true); goto EddEj; Ef1qq: tEP0w: goto sAaNA; EddEj: xcg55: goto Ef1qq; sAaNA: } goto Mppar; Mppar: TBEC1: goto EzLmd; LHx7l: $skor_koreksi_pg2 += $jawab_pg2->nilai_koreksi; goto f0KOB; f0KOB: $arr_benar = []; goto Rgxne; EzLmd: $benar_pg2 += 1 / count($jawab_pg2->jawaban_benar) * count($arr_benar); goto VOkH8; VOkH8: l40ci: goto cmqIS; cmqIS: } goto NKK9k; Xq7_W: ICaJZ: goto KvV2V; RaECD: $skor_koreksi_is = 0.0; goto U7pab; QzJGM: v4tuM: goto pNf61; lKU8B: $otomatis_pg2 = 0; goto FinyX; aFopt: $jawaban_pg = $ada_jawaban_pg ? $jawabans_siswa[$siswa->id_siswa]["\x31"] : []; goto clofB; jJnYq: if (!($info->tampil_pg > 0)) { goto X2ijS; } goto z5wTp; NlzpP: dgTYw: goto bLtSJ; JmB_0: X2ijS: goto GAeQW; pNf61: $skor_pg2 = $input_pg2 != 0 ? $input_pg2 : ($otomatis_pg2 == 0 ? $s_pg2 : $skor_koreksi_pg2); goto t9Kat; kCESt: S0vFO: goto m2pJp; pqTgd: $s_is = $bagi_isian == 0 ? 0 : $benar_is / $bagi_isian * $bobot_isian; goto DkXFk; sjHhR: $nilai_input = $this->cbt->getNilaiSiswaByJadwal($jadwal, $siswa->id_siswa); goto aFopt; s8QVS: $insert["\145\x73\163\141\151\137\156\151\154\141\x69"] = round($skor_es, 2); goto bIwA9; KvV2V: $skor_es = $input_es != 0 ? $input_es : ($otomatis_es == 0 ? $s_es : $skor_koreksi_es); goto qVnlL; j7hXM: $insert["\x6b\157\155\x70\x6c\145\x6b\163\137\x6e\x69\x6c\141\x69"] = round($skor_pg2, 2); goto c_E_J; GtZQu: $input_pg2 = 0; goto aLSGf; wyXfd: $skor_jod = $input_jod != 0 ? $input_jod : ($otomatis_jod == 0 ? $s_jod : $skor_koreksi_jod); goto B839n; qBayL: if (!(count($jawaban_es) > 0)) { goto I5TfC; } goto YcK5D; rzCI2: if (!($nilai_input != null && $nilai_input->isian_nilai != null)) { goto dr1P1; } goto bWIiz; lksVj: $insert["\x69\163\151\141\156\137\156\x69\x6c\x61\151"] = round($skor_is, 2); goto s8QVS; aogke: $otomatis_es = 0; goto xsFbY; m2pJp: gEXq2: goto yOD4z; QqVaH: V0RNV: goto x4BEt; AMsg9: $ada_jawaban = isset($jawabans_siswa[$siswa->id_siswa]); goto Stbax; x4BEt: I5TfC: goto kyUwe; DdRrp: uCPxB: goto t0ewx; U7pab: $otomatis_is = 0; goto Bmig_; qGXHz: I0nBY: goto IDKWA; Bmig_: if (!($info->tampil_isian > 0)) { goto qyN_2; } goto OD4GD; BK3j_: qvIvR: goto twaVD; iny9D: $insert["\151\x64\137\x6a\x61\x64\167\x61\x6c"] = $jadwal; goto dCGbq; Stbax: $ada_jawaban_pg = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\x31"]); goto vjhul; twaVD: hZ6Rg: goto NlzpP; TGzmd: $insert["\160\x67\137\x6e\x69\x6c\141\x69"] = round($skor_pg, 2); goto j7hXM; ZMCdd: $s_es = $bagi_essai == 0 ? 0 : $benar_es / $bagi_essai * $bobot_essai; goto SMcys; AiO3V: if (!($info->tampil_jodohkan > 0)) { goto dgTYw; } goto KKFWi; hatms: $jawaban_pg2 = $ada_jawaban_pg2 ? $jawabans_siswa[$siswa->id_siswa]["\x32"] : []; goto rNeKY; o5NGH: $skor_koreksi_pg2 = 0.0; goto lKU8B; ISR9g: $skor_koreksi_es = 0.0; goto aogke; X939K: if (!(count($jawaban_pg2) > 0)) { goto gdMGJ; } goto lOgpF; ROj3x: $input_es = $nilai_input->essai_nilai; goto Xq7_W; R2EfY: $s_pg2 = $bagi_pg2 == 0 ? 0 : $benar_pg2 / $bagi_pg2 * $bobot_pg2; goto GtZQu; YcK5D: foreach ($jawaban_es as $num => $jawab_es) { goto Ewpif; qAr2D: ZrjAh: goto QdFc6; R6Pbf: if (!$benar) { goto MINeD; } goto gUfLc; Ewpif: $skor_koreksi_es += $jawab_es->nilai_koreksi; goto qFE4Y; gUfLc: $benar_es++; goto GuS0D; qFE4Y: $benar = $jawab_es != null && strtolower($jawab_es->jawaban_siswa) == strtolower($jawab_es->jawaban_benar); goto R6Pbf; FENVU: $otomatis_es = $jawab_es->nilai_otomatis; goto qAr2D; GuS0D: MINeD: goto FENVU; QdFc6: } goto QqVaH; zRxsW: foreach ($jawaban_is as $num => $jawab_is) { goto eaTIE; xMZPM: if (!$benar) { goto ppZdi; } goto btpKR; uTwKf: $benar = $jawab_is != null && strtolower($jawab_is->jawaban_siswa) == strtolower($jawab_is->jawaban_benar); goto xMZPM; Etp1M: A16T5: goto pkJwf; btpKR: $benar_is++; goto L5zTN; eaTIE: $skor_koreksi_is += $jawab_is->nilai_koreksi; goto uTwKf; T0mAO: $otomatis_is = $jawab_is->nilai_otomatis; goto Etp1M; L5zTN: ppZdi: goto T0mAO; pkJwf: } goto kCESt; qiUI6: $benar_jod = 0; goto CkxCl; vjhul: $ada_jawaban_pg2 = $ada_jawaban && isset($jawabans_siswa[$siswa->id_siswa]["\62"]); goto p8HHc; c_E_J: $insert["\152\157\144\157\150\153\141\x6e\x5f\x6e\x69\x6c\141\x69"] = round($skor_jod, 2); goto lksVj; t0ewx: } goto LcbZT; tVysp: return $update; goto BohqN; L1JMG: $update = $this->db->update_batch("\143\142\x74\x5f\x6e\151\154\x61\151", $insets, "\151\x64\137\x6e\151\x6c\x61\151"); goto tVysp; Pwcll: $bagi_essai = $info->tampil_esai / 100; goto BwURu; FT9s7: $bagi_pg = $info->tampil_pg / 100; goto m8JhW; QKWIf: $bobot_jodoh = $info->bobot_jodohkan / 100; goto XXf7x; R6k2y: $bobot_isian = $info->bobot_isian / 100; goto Pwcll; BwURu: $bobot_essai = $info->bobot_esai / 100; goto EHzYw; XXf7x: $bagi_isian = $info->tampil_isian / 100; goto R6k2y; sHf6d: foreach ($siswas as $key => $value) { array_push($ids, $value->id_siswa); BtxjL: } goto nkYv6; XXbwX: $bagi_jodoh = $info->tampil_jodohkan / 100; goto QKWIf; nkYv6: TbO2H: goto U6PZ6; TROW6: $kelases = []; goto dB0hB; LcbZT: GrhQj: goto L1JMG; DcuDP: tLWjr: goto k2HrS; qHKpb: $info = $this->cbt->getJadwalById($jadwal); goto FT9s7; BohqN: } private function nilaiSignifikansi($jml) { goto uzTuT; UfkD0: WcHMY: goto fq3Yb; rITGf: return $list[$jml]["\x35"]; goto qOhj0; jiHpF: bjWrZ: goto nE_HC; nE_HC: goto JeTAL; goto UfkD0; JGzbj: goto Zo9gz; goto Ghgdk; h3WfG: oqX7s: goto geScy; uzTuT: $list = [3 => [5 => 0.997], [1 => 0.999], 4 => [5 => 0.95], [1 => 0.99], 5 => [5 => 0.878], [1 => 0.959], 6 => [5 => 0.8110000000000001], [1 => 0.917], 7 => [5 => 0.754], [1 => 0.874], 8 => [5 => 0.707], [1 => 0.834], 9 => [5 => 0.666], [1 => 0.798], 10 => [5 => 0.632], [1 => 0.765], 11 => [5 => 0.602], [1 => 0.735], 12 => [5 => 0.576], [1 => 0.708], 13 => [5 => 0.553], [1 => 0.6840000000000001], 14 => [5 => 0.532], [1 => 0.661], 15 => [5 => 0.514], [1 => 0.641], 16 => [5 => 0.497], [1 => 0.623], 17 => [5 => 0.482], [1 => 0.606], 18 => [5 => 0.468], [1 => 0.59], 19 => [5 => 0.456], [1 => 0.575], 20 => [5 => 0.444], [1 => 0.5610000000000001], 21 => [5 => 0.433], [1 => 0.549], 22 => [5 => 0.423], [1 => 0.537], 23 => [5 => 0.413], [1 => 0.526], 24 => [5 => 0.404], [1 => 0.515], 25 => [5 => 0.396], [1 => 0.505], 26 => [5 => 0.388], [1 => 0.496], 27 => [5 => 0.381], [1 => 0.487], 28 => [5 => 0.374], [1 => 0.478], 29 => [5 => 0.367], [1 => 0.47], 30 => [5 => 0.361], [1 => 0.463], 31 => [5 => 0.355], [1 => 0.456], 32 => [5 => 0.349], [1 => 0.449], 33 => [5 => 0.344], [1 => 0.442], 34 => [5 => 0.339], [1 => 0.436], 35 => [5 => 0.334], [1 => 0.43], 36 => [5 => 0.329], [1 => 0.424], 37 => [5 => 0.325], [1 => 0.418], 38 => [5 => 0.32], [1 => 0.413], 39 => [5 => 0.316], [1 => 0.408], 40 => [5 => 0.312], [1 => 0.403], 41 => [5 => 0.308], [1 => 0.398], 42 => [5 => 0.304], [1 => 0.393], 43 => [5 => 0.301], [1 => 0.389], 44 => [5 => 0.297], [1 => 0.384], 45 => [5 => 0.294], [1 => 0.38], 46 => [5 => 0.291], [1 => 0.376], 47 => [5 => 0.288], [1 => 0.372], 48 => [5 => 0.284], [1 => 0.368], 49 => [5 => 0.281], [1 => 0.364], 50 => [5 => 0.279], [1 => 0.361], 55 => [5 => 0.266], [1 => 0.345], 60 => [5 => 0.254], [1 => 0.33], 65 => [5 => 0.244], [1 => 0.317], 70 => [5 => 0.235], [1 => 0.306], 75 => [5 => 0.227], [1 => 0.296], 80 => [5 => 0.22], [1 => 0.286], 85 => [5 => 0.213], [1 => 0.278], 90 => [5 => 0.207], [1 => 0.27], 95 => [5 => 0.202], [1 => 0.263], 100 => [5 => 0.195], [1 => 0.256], 125 => [5 => 0.176], [1 => 0.23], 150 => [5 => 0.159], [1 => 0.21], 175 => [5 => 0.149], [1 => 0.194], 200 => [5 => 0.138], [1 => 0.191], 300 => [5 => 0.113], [1 => 0.181], 400 => [5 => 0.098], [1 => 0.148], 500 => [5 => 0.08799999999999999], [1 => 0.128], 600 => [5 => 0.08], [1 => 0.115], 700 => [5 => 0.074], [1 => 0.105], 800 => [5 => 0.07000000000000001], [1 => 0.091], 900 => [5 => 0.065], [1 => 0.08599999999999999], 1000 => [5 => 0.062], [1 => 0.081]]; goto ZDGsE; WQdww: WHmKa: goto D6zZo; k6CW3: JeTAL: goto Qg873; ZDGsE: if (isset($list[$jml])) { goto WcHMY; } goto DkddX; h5vwB: $keys = 4; goto h3WfG; LHwow: return $list[$jml]["\x31"]; goto JGzbj; L7nQ0: if (!($keys < 4)) { goto oqX7s; } goto h5vwB; qOhj0: Zo9gz: goto k6CW3; G2F00: return $list[$keys]["\x31"]; goto ci8Bc; Ghgdk: aiGHS: goto rITGf; DkddX: $keys = $this->getClosest($jml, array_keys($list)); goto L7nQ0; geScy: if (isset($list[$keys]["\x35"])) { goto WHmKa; } goto G2F00; fq3Yb: if (isset($list[$jml]["\65"])) { goto aiGHS; } goto LHwow; D6zZo: return $list[$keys]["\65"]; goto jiHpF; ci8Bc: goto bjWrZ; goto WQdww; Qg873: } function getClosest($search, $arr) { goto WiDo7; eC4Mq: return $closest; goto g7M0j; kJX0n: foreach ($arr as $item) { goto U6gvb; vsiVW: $closest = $item; goto q1yjg; sxbF7: lnnkj: goto jNB3V; q1yjg: OvkaY: goto sxbF7; U6gvb: if (!($closest === null || abs($search - $closest) > abs($item - $search))) { goto OvkaY; } goto vsiVW; jNB3V: } goto NxyTv; WiDo7: $closest = null; goto kJX0n; NxyTv: buFwd: goto eC4Mq; g7M0j: } }
