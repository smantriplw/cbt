<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Bukuinduk extends CI_Controller { public function __construct() { goto VwydK; Q0Rbq: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\165"))) { goto VRH73; } goto RcwbT; nyuus: if (!$this->ion_auth->logged_in()) { goto bePjo; } goto Q0Rbq; V_Jeg: goto wFn2s; goto Rn3F2; rWE2N: $this->load->model("\x52\x61\160\157\x72\137\155\157\x64\x65\154", "\162\141\x70\157\162"); goto c7ELJ; dvdJO: $this->load->model("\104\141\163\x68\x62\x6f\141\162\x64\137\155\x6f\x64\145\154", "\x64\x61\163\x68\x62\157\x61\162\x64"); goto rWE2N; fDfNe: $this->load->model("\104\162\x6f\160\x64\x6f\167\x6e\x5f\x6d\x6f\x64\x65\154", "\x64\162\157\160\144\157\x77\x6e"); goto TCMM5; Xj3Ca: $this->form_validation->set_error_delimiters('', ''); goto p48f6; iNZOj: redirect("\141\165\x74\x68"); goto pwqz0; pwqz0: wFn2s: goto CHrPg; VwydK: parent::__construct(); goto nyuus; HDAxm: VRH73: goto V_Jeg; CHrPg: $this->load->library(["\x64\141\x74\141\164\x61\x62\154\x65\163", "\x66\157\162\155\x5f\x76\x61\154\x69\x64\x61\x74\x69\157\x6e"]); goto dvdJO; c7ELJ: $this->load->model("\113\x65\154\x61\x73\x5f\x6d\x6f\144\x65\x6c", "\x6b\145\x6c\141\163"); goto fDfNe; Rn3F2: bePjo: goto iNZOj; TCMM5: $this->load->model("\115\x61\163\x74\145\x72\137\x6d\157\x64\145\154", "\x6d\x61\163\x74\x65\162"); goto Xj3Ca; RcwbT: show_error("\x48\x61\156\x79\x61\x20\x41\144\155\x69\156\x69\x73\x74\162\141\164\157\x72\40\171\141\156\147\40\x64\151\x62\145\162\x69\x20\x68\141\x6b\x20\165\156\164\165\153\x20\x6d\x65\156\147\141\153\163\x65\163\40\150\141\x6c\x61\155\x61\156\40\x69\156\151\x2c\x20\x3c\141\x20\x68\x72\145\146\75\x22" . base_url("\x64\x61\163\150\x62\157\141\162\144") . "\x22\x3e\x4b\x65\x6d\142\141\x6c\x69\40\x6b\x65\x20\x6d\x65\156\165\40\141\x77\141\154\x3c\57\x61\x3e", 403, "\x41\x6b\163\145\163\40\x54\145\x72\154\x61\x72\x61\156\147"); goto HDAxm; p48f6: } public function output_json($data, $encode = true) { goto rKL1Q; RVSYi: $this->output->set_content_type("\x61\160\160\154\151\143\x61\x74\x69\157\156\57\152\x73\x6f\x6e")->set_output($data); goto XCTf9; rKL1Q: if (!$encode) { goto eKzt1; } goto uHfye; rDPfA: eKzt1: goto RVSYi; uHfye: $data = json_encode($data); goto rDPfA; XCTf9: } function generateTahunMasuk($tp, $level) { goto KFnsv; b_dTo: $thn = $tahun; goto hyLRt; zgTId: return $thn; goto aaWgZ; yVE72: goto uLSYZ; goto oC900; oC900: Px4Z1: goto GeHOk; bAklx: M_Sfs: goto CVeZ1; KFnsv: $tahun = explode("\57", $tp)[0]; goto b_dTo; n1U3R: if ($level == 8) { goto iQ2Mc; } goto u1vgm; CVeZ1: $thn = $tahun; goto I5709; sJDeH: iQ2Mc: goto shGDA; hyLRt: if ($level == 9) { goto Px4Z1; } goto n1U3R; shGDA: $thn = $tahun - 1; goto HOqvE; GeHOk: $thn = $tahun - 2; goto l26JA; I5709: uLSYZ: goto zgTId; l26JA: goto uLSYZ; goto sJDeH; u1vgm: if ($level == 7) { goto M_Sfs; } goto yVE72; HOqvE: goto uLSYZ; goto bAklx; aaWgZ: } public function index() { goto nL9nG; kODk2: $arrSmt = $this->dashboard->getSemester(); goto l3ytl; l3ytl: $tp = $this->dashboard->getTahunActive(); goto se20d; XAVlz: $arrTp = $this->dashboard->getTahun(); goto kODk2; BgsMS: $data["\x73\x6d\164\137\x61\143\164\151\x76\145"] = $smt; goto FaazD; GjD91: $setting = $this->dashboard->getSetting(); goto L5Qdc; H6dXT: $data_siswa = []; goto pvM2X; L5Qdc: $data = ["\165\x73\145\162" => $user, "\x6a\165\144\x75\154" => "\x42\165\153\x75\40\x49\x6e\x64\165\153", "\163\x75\142\152\165\x64\x75\154" => "\x42\165\153\165\x20\x49\x6e\x64\165\153", "\163\145\x74\x74\x69\x6e\147" => $setting]; goto XAVlz; se20d: $smt = $this->dashboard->getSemesterActive(); goto Pl8Hn; EbpoJ: nOVXV: goto m_pVq; HfYma: if (!($count_siswa > $count_induk)) { goto I0LQn; } goto C6H2N; m24Ci: qQ9C0: goto CSn05; Q3pt1: $siswas = $this->master->getDataInduk(); goto Sul1o; Kz3RR: $this->load->view("\x73\145\x74\164\151\156\x67\57\x69\156\144\x75\153"); goto oTgqT; Sul1o: $deskFisik = $this->rapor->getAllDeskripsiFisikKelas(); goto FO_0Z; ZVPPz: $data["\x6e\157\151\x6e\144\x75\x6b"] = $noinduk; goto We7e_; nL9nG: $user = $this->ion_auth->user()->row(); goto GjD91; cuB0g: $data["\152\165\155\154\x61\x68\x5f\154\165\x6c\165\x73"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\x32", $level); goto J0L1r; FO_0Z: $fisik_siswa = $this->rapor->getAllRaporFisik(); goto H6dXT; J0L1r: $this->load->view("\137\164\x65\x6d\x70\154\x61\x74\x65\163\57\144\141\x73\x68\142\157\x61\162\144\57\x5f\150\x65\141\x64\x65\162", $data); goto Kz3RR; C6H2N: $uids = $this->db->select("\151\144\137\163\151\163\x77\141\54\x20\x75\151\x64")->from("\x6d\x61\163\164\145\x72\137\163\x69\163\x77\141")->get()->result(); goto fKhoV; fKhoV: foreach ($uids as $uid) { goto df57u; df57u: $check = $this->db->select("\151\x64\137\163\151\x73\x77\141")->from("\x62\x75\153\165\x5f\x69\156\x64\x75\x6b")->where("\151\144\137\x73\x69\163\x77\x61", $uid->id_siswa); goto Cf9QX; mCjkm: em9tP: goto vOuDY; Cf9QX: if (!($check->get()->num_rows() == 0)) { goto ZMqWe; } goto c0AQn; AJTbB: ZMqWe: goto mCjkm; c0AQn: $this->db->insert("\x62\x75\x6b\165\x5f\151\x6e\144\x75\153", $uid); goto AJTbB; vOuDY: } goto EbpoJ; p81xi: $count_siswa = $this->db->count_all("\155\141\163\x74\x65\x72\137\163\x69\163\x77\141"); goto OIYGm; oTgqT: $this->load->view("\137\x74\145\155\x70\x6c\x61\164\145\163\x2f\x64\141\163\x68\x62\x6f\141\162\x64\57\137\146\x6f\157\164\x65\162"); goto bCYcB; m_pVq: I0LQn: goto Q3pt1; Pl8Hn: $data["\164\160"] = $arrTp; goto S4Y_y; FaazD: $data["\160\x72\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto p81xi; SvV0D: $level = $setting->jenjang == "\x31" ? "\x36" : ($setting->jenjang == "\62" ? "\71" : ($setting->jenjang == "\x31" ? "\63" : "\61\x32")); goto cuB0g; v_FzK: foreach ($siswas as $id_siswa => $siswa) { goto tZY1z; UrRr7: $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\x2f" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3)]; goto Gds1w; XjNhx: $berat = []; goto HwVan; KxTmg: AoAzN: goto Za8uA; Keu9t: TslwY: goto RGlbM; vR9V4: $tahunMasuk = explode("\55", $siswa->tahun_masuk)[0]; goto KnSaO; MR465: $penyakit = []; goto CNzf5; r0kpo: if ($siswa->tahun_masuk != null) { goto Px_n2; } goto I2SGX; I6lxg: foreach ($data_tahun as $dtp) { goto F01sD; pp9e9: if (!isset($rapor_fisik[$dtp])) { goto Ja01F; } goto nGBs3; gPqfK: $penyakit[$dtp][2] = ''; goto dfOcH; AjLTi: $tinggi[$dtp][1] = ''; goto BlxXQ; dk7ax: $berat[$dtp][2] = ''; goto AjLTi; C945U: qZOUi: goto W7wFH; F01sD: $berat[$dtp][1] = ''; goto dk7ax; dfOcH: $kelainan[$dtp][1] = ''; goto uU97t; BlxXQ: $tinggi[$dtp][2] = ''; goto I7oZJ; tST3q: YSQen: goto ZfwE6; uU97t: $kelainan[$dtp][2] = ''; goto pp9e9; W7wFH: Ja01F: goto tST3q; I7oZJ: $penyakit[$dtp][1] = ''; goto gPqfK; nGBs3: foreach ($rapor_fisik[$dtp]->fisik as $rf) { goto P8EH2; Oee4n: $tinggi[$dtp][$rf->id_smt] = $rf->tinggi; goto lt4ks; lt4ks: FX4KH: goto fjKwQ; P8EH2: $berat[$dtp][$rf->id_smt] = $rf->berat; goto Oee4n; fjKwQ: } goto C945U; ZfwE6: } goto KxTmg; tZY1z: $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : []; goto a80nB; HwVan: $tinggi = []; goto MR465; RGlbM: $data_tahun = [intval($tahunMasuk) . "\x2f" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\x2f" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\57" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\x2f" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\x2f" . (intval($tahunMasuk) + 6)]; goto tpIk1; lEs39: Px_n2: goto vR9V4; Gds1w: goto azN74; goto Keu9t; I2SGX: $tahunMasuk = ''; goto Gi154; KnSaO: kCbiC: goto uyKkR; tkIme: yON3c: goto r0kpo; QAqwB: $data_siswa[$siswa->id_siswa] = ["\156\151\x73" => $siswa->nis, "\156\151\163\x6e" => $siswa->nisn, "\x70\141\147\145\61" => ["\x41" => ["\164\151\164\x6c\145" => "\113\x45\x54\105\122\101\116\x47\x41\116\40\124\105\116\x54\x41\116\x47\40\104\111\122\x49\x20\123\111\123\127\x41", "\166\x61\154\x75\145" => ["\116\141\155\141\x20\123\x69\x73\167\x61" => ["\116\141\155\141\x20\114\x65\x6e\147\x6b\141\x70" => $siswa->nama, "\x4e\141\x6d\x61\x20\120\141\156\147\x67\151\x6c\x61\x6e" => ''], "\x4a\145\x6e\x69\x73\x20\113\145\x6c\141\x6d\x69\x6e" => $siswa->jenis_kelamin, "\124\x65\155\160\141\164\40\x64\141\x6e\x20\x54\x67\x6c\x20\114\141\x68\151\x72" => $siswa->tempat_lahir, "\x41\x67\x61\155\141" => $siswa->agama, "\113\145\x77\141\162\147\141\x6e\145\147\141\162\x61\x61\x6e" => $siswa->warga_negara, "\101\x6e\x61\x6b\x20\x6b\145" => $siswa->anak_ke, "\112\x75\x6d\x6c\x61\x68\40\123\144\162\x2e\x20\113\141\156\144\x75\156\x67" => '', "\112\165\155\x6c\x61\x68\40\x53\x64\x72\56\40\124\151\162\151" => '', "\112\x75\x6d\154\141\150\40\123\x64\x72\x2e\x20\x41\x6e\147\153\x61\x74" => '', "\101\x6e\141\x6b\x20\x59\x61\164\x69\155\57\x59\141\164\151\x6d\x20\x50\151\141\x74\165" => '', "\x42\x61\150\141\x73\141\40\x53\x65\x68\x61\x72\151\55\150\141\x72\x69" => '']], "\102" => ["\x74\151\x74\154\x65" => "\113\105\124\105\x52\x41\x4e\x47\101\x4e\40\124\105\x4d\x50\x41\x54\40\x54\111\x4e\x47\x47\x41\114", "\166\x61\x6c\165\145" => ["\101\154\x61\x6d\141\x74" => $siswa->alamat, "\116\157\x6d\157\162\x20\x54\x65\154\145\x70\x6f\x6e" => $siswa->hp, "\124\151\x6e\147\147\141\x6c\x20\x42\x65\x72\x73\x61\x6d\x61" => '', "\112\x61\162\x61\x6b\x20\x6b\x65\x20\123\145\x6b\x6f\154\141\150" => '']], "\x43" => ["\164\x69\x74\154\x65" => "\x4b\105\124\x45\x52\101\116\107\101\x4e\x20\x4b\x45\123\105\x48\101\x54\101\116", "\166\141\154\165\x65" => ["\x47\x6f\154\157\156\x67\x61\x6e\40\x44\141\162\141\x68" => '', "\x4b\145\x61\144\141\141\156\x20\x4a\141\163\x6d\x61\156\151" => "\x5b\164\141\x62\x6c\x65\135"], "\x74\141\142\154\145" => ["\x74\x61\150\x75\156" => $data_tahun, "\142\145\x72\x61\164" => $berat, "\x74\x69\156\147\147\x69" => $tinggi, "\x70\x65\x6e\x79\141\x6b\x69\x74" => $penyakit, "\x6b\x65\x6c\x61\x69\156\141\156" => $kelainan]], "\x44" => ["\x74\x69\x74\154\145" => "\113\x45\124\105\x52\x41\116\107\101\116\x20\x50\105\116\x44\111\104\x49\x4b\101\x4e", "\x76\x61\x6c\165\x65" => ["\x50\145\x6e\x64\x69\144\151\x6b\141\156\x20\123\145\142\x65\x6c\165\x6d\x6e\171\x61" => ["\114\x75\x6c\165\163\141\x6e\x20\104\x61\x72\151" => $siswa->sekolah_asal, "\116\x6f\x6d\157\162\x20\111\152\141\x7a\141\x68" => ''], "\x50\x69\156\144\141\x68\x61\x6e" => ["\104\141\162\x69\x20\123\x65\x6b\x6f\x6c\x61\x68" => '', "\101\154\141\163\141\x6e" => ''], "\104\151\164\x65\x72\x69\155\x61\x20\x44\151\163\145\x6b\157\154\x61\x68\40\111\156\x69" => ["\x44\151\40\x54\x69\x6e\x67\153\141\164" => $siswa->kelas_awal, "\x4b\x65\x6c\157\155\x70\157\153" => '', "\x4a\x75\x72\x75\163\141\156" => '', "\x54\x61\x6e\x67\147\141\x6c" => $siswa->tahun_masuk]]]], "\x70\x61\147\145\62" => ["\105" => ["\x74\151\x74\x6c\x65" => "\113\105\x54\105\122\101\116\107\x41\x4e\40\x54\105\x4e\x54\101\116\107\40\101\131\x41\x48\x20\x4b\101\116\x44\125\116\107", "\x76\141\x6c\x75\145" => ["\x4e\141\x6d\141" => $siswa->nama_ayah, "\x54\x65\155\160\141\164\40\x64\141\156\x20\124\141\x6e\x67\147\x61\x6c\x20\x4c\141\150\151\162" => $siswa->tgl_lahir_ayah, "\101\x67\141\x6d\x61" => '', "\113\145\167\141\x72\x67\x61\x6e\x65\x67\141\x72\141\x61\x6e" => '', "\120\x65\x6e\144\151\144\151\153\141\x6e" => $siswa->pendidikan_ayah, "\120\145\153\145\162\152\x61\x61\156" => $siswa->pekerjaan_ayah, "\x50\145\x6e\147\x68\141\x73\x69\x6c\141\156\40\160\x65\162\x20\102\x75\154\141\156" => '', "\x41\154\141\155\x61\x74\40\57\x20\x4e\x6f\x6d\x6f\162\x20\x54\145\x6c\x65\160\157\x6e" => $siswa->nohp_ayah, "\x4b\145\x62\145\162\x61\144\x61\x61\156\40\x41\x79\141\x68" => "\x4d\141\163\x69\150\40\x48\151\x64\165\160\x20\57\40\x4d\x65\156\x69\156\147\147\141\x6c\40\x44\x75\x6e\151\141\40\x54\x61\x68\x75\x6e\72\x20\x2e\x2e\x2e\x2e\56\56\x2e\56"]], "\x46" => ["\164\151\164\x6c\145" => "\x4b\105\124\x45\x52\101\116\x47\x41\116\40\x54\x45\116\124\x41\x4e\107\40\111\102\x55\x20\x4b\101\x4e\x44\x55\116\x47", "\x76\141\x6c\165\145" => ["\116\141\x6d\x61" => $siswa->nama_ayah, "\124\145\155\160\141\x74\x20\x64\141\156\x20\x54\141\x6e\147\x67\141\x6c\x20\114\141\x68\151\x72" => $siswa->tgl_lahir_ayah, "\101\147\141\155\x61" => '', "\x4b\145\167\x61\162\147\x61\x6e\x65\x67\x61\x72\x61\141\x6e" => '', "\120\x65\156\144\151\144\151\153\x61\156" => $siswa->pendidikan_ayah, "\x50\x65\x6b\x65\162\x6a\141\x61\156" => $siswa->pekerjaan_ayah, "\x50\x65\x6e\147\150\x61\x73\x69\154\141\156\x20\160\145\162\40\x42\165\154\x61\156" => '', "\101\154\141\x6d\x61\x74\x20\x2f\x20\116\157\x6d\x6f\162\x20\124\145\x6c\145\160\157\x6e" => $siswa->nohp_ayah, "\x4b\x65\142\145\162\141\144\141\x61\156\x20\x49\x62\x75" => "\x4d\x61\x73\151\x68\40\110\x69\x64\x75\x70\x20\57\40\x4d\145\x6e\151\156\147\147\x61\154\x20\104\x75\156\151\x61\40\x54\141\150\x75\x6e"]], "\x47" => ["\164\151\x74\154\x65" => "\113\x45\x54\105\x52\101\x4e\107\101\116\40\124\105\x4e\124\101\x4e\107\x20\x57\x41\x4c\111", "\x76\141\154\x75\145" => ["\x4e\141\x6d\141" => $siswa->nama_ayah, "\124\145\155\x70\x61\164\40\x64\x61\156\40\x54\x61\156\147\x67\141\154\40\x4c\x61\150\151\x72" => $siswa->tgl_lahir_ayah, "\x41\x67\141\155\x61" => '', "\x4b\145\167\x61\x72\147\x61\156\x65\x67\141\162\x61\x61\x6e" => '', "\x50\x65\156\x64\x69\x64\x69\x6b\x61\x6e" => $siswa->pendidikan_ayah, "\x50\x65\x6b\145\x72\x6a\x61\141\x6e" => $siswa->pekerjaan_ayah, "\x50\x65\x6e\x67\150\141\163\151\x6c\141\x6e\x20\160\145\162\x20\x42\x75\154\141\156" => '', "\101\154\x61\x6d\141\x74\40\x2f\x20\x4e\x6f\155\x6f\x72\40\124\145\154\x65\x70\x6f\156" => $siswa->nohp_ayah]], "\110" => ["\164\x69\x74\154\145" => "\113\105\107\x45\x4d\101\x52\x41\116\x20\123\111\x53\x57\x41", "\x76\x61\154\x75\145" => ["\113\145\x73\x65\x6e\x69\x61\x6e" => '', "\117\154\x61\150\x20\122\x61\x67\x61" => '', "\117\x72\x67\x61\156\151\x73\x61\x73\x69" => '', "\114\141\x69\x6e\342\200\x93\x6c\x61\x69\156" => '']]], "\x70\x61\147\145\63" => ["\111" => ["\x74\x69\x74\x6c\145" => "\113\105\x54\x45\x52\101\x4e\107\x41\x4e\40\x50\105\122\113\x45\115\x42\x41\116\x47\101\x4e\40\x53\111\123\x57\x41", "\x76\x61\x6c\x75\x65" => ["\x4d\x65\x6e\145\x72\151\155\x61\x20\x42\x65\141\40\123\151\x73\x77\141" => "\133\164\x61\x68\165\156\135", "\115\x65\156\151\x6e\x67\147\141\154\153\x61\x6e\40\123\145\153\157\x6c\x61\150" => ["\x54\x61\x6e\x67\147\141\x6c" => '', "\x41\x6c\x61\163\x61\156" => ''], "\x41\153\x68\151\x72\x20\120\145\x6e\x64\x69\144\151\153\141\156" => ["\124\141\x6d\141\164\40\x42\x65\x6c\141\x6a\x61\162" => $siswa->tahun_lulus, "\116\157\x6d\157\x72\40\x49\x6a\x61\172\141\x68" => $siswa->no_ijazah]], "\x74\141\150\x75\156" => ["\x54\141\x68\165\156\x20\56\x2e\x2e\x2e\56\56\x2e\x2e\x2e\x2e\x2e\56\57\x20\x54\x4b\40\342\x80\xa6\xe2\200\xa6\342\x80\xa6\xe2\200\xa6\342\x80\246\xe2\200\246\xe2\200\246\xe2\200\246\56\x2e\144\x61\162\x69\xe2\x80\246\xe2\x80\xa6\342\200\246\xe2\x80\xa6\xe2\200\xa6\xe2\x80\xa6\342\x80\246\xe2\x80\xa6\x2e\x2e", "\x54\141\150\x75\x6e\x20\x2e\x2e\x2e\56\x2e\56\56\x2e\56\56\56\56\57\x20\x54\x4b\x20\342\200\246\xe2\200\246\342\200\xa6\342\x80\246\342\200\xa6\342\200\246\342\x80\xa6\342\x80\246\x2e\x2e\144\141\x72\x69\342\x80\246\342\200\246\xe2\x80\246\xe2\200\246\xe2\x80\246\342\x80\xa6\342\x80\246\342\x80\246\56\x2e", "\124\141\150\165\156\40\x2e\x2e\x2e\56\x2e\56\x2e\56\56\x2e\56\x2e\x2f\x20\x54\113\x20\342\x80\246\xe2\200\246\342\200\246\342\x80\xa6\342\x80\xa6\342\200\246\xe2\x80\246\xe2\200\xa6\x2e\x2e\x64\x61\x72\151\xe2\200\246\342\200\246\xe2\x80\xa6\xe2\x80\246\342\200\xa6\342\x80\246\342\200\246\342\200\246\x2e\56"]], "\x4a" => ["\x74\x69\164\154\145" => "\x4b\x45\x54\x45\x52\101\116\x47\101\x4e\x20\123\x45\x54\105\114\101\110\x20\123\105\114\x45\123\x41\111\x20\x50\105\116\x44\x49\104\x49\113\x41\x4e", "\x76\x61\154\x75\145" => ["\115\x65\x6c\x61\156\152\x75\x74\153\x61\x6e\x20\x64\x69" => '', "\102\x65\153\145\x72\x6a\x61" => ["\x54\141\x6e\147\x67\141\x6c\x20\x4d\x75\x6c\x61\x69\x20\x42\145\153\145\x72\x6a\141" => '', "\x4e\x61\x6d\x61\40\x54\x65\x6d\160\x61\164\40\102\145\153\145\x72\x6a\x61" => '', "\x50\x65\156\x67\x68\x61\x73\151\x6c\141\x6e" => '']]], "\113" => ["\164\x69\164\x6c\x65" => "\114\x41\111\116\40\xe2\x80\223\40\x4c\101\111\116", "\166\x61\x6c\165\x65" => ["\103\141\164\141\x74\141\x6e\40\131\x61\156\147\40\x50\x65\x6e\x74\x69\x6e\x67" => '']]]]; goto R6pO9; CNzf5: $kelainan = []; goto I6lxg; uyKkR: if ($setting->jenjang == "\x31") { goto TslwY; } goto UrRr7; tpIk1: azN74: goto XjNhx; Za8uA: $noinduk[$siswa->id_siswa] = ["\156\x69\x73" => $siswa->nis, "\x6e\x69\x73\156" => $siswa->nisn]; goto QAqwB; Gi154: goto kCbiC; goto lEs39; R6pO9: KZH7J: goto QpCxs; a80nB: foreach ($rapor_fisik as $rf) { goto ZqE2q; ZqE2q: $rf->fisik = unserialize($rf->fisik); goto jwIyI; Msvo7: Wa62b: goto r1YP2; jwIyI: foreach ($rf->fisik as $value) { $value->kondisi = unserialize($value->kondisi); EB9uY: } goto VBRal; VBRal: ay4B2: goto Msvo7; r1YP2: } goto tkIme; QpCxs: } goto m24Ci; UUyOc: $data["\144\145\164\x61\x69\154"] = $data_siswa; goto ODRy9; pvM2X: $thn_siswa = []; goto v_FzK; We7e_: $data["\x73\x69\163\x77\x61\163"] = $siswas; goto UUyOc; ODRy9: $data["\141\x72\162\x5f\x74\x65\163\164"] = $thn_siswa; goto SvV0D; OIYGm: $count_induk = $this->db->count_all("\142\165\153\x75\137\x69\156\x64\x75\153"); goto HfYma; S4Y_y: $data["\x74\x70\137\141\143\164\151\x76\145"] = $tp; goto EKLNf; CSn05: $data["\162\141\x70\157\162\x5f\x66\x69\x73\x69\153"] = $rapor_fisik; goto ZVPPz; EKLNf: $data["\163\155\164"] = $arrSmt; goto BgsMS; bCYcB: } }
