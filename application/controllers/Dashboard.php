<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\105\x50\x41\x54\110") or exit("\116\x6f\40\144\151\x72\x65\x63\164\40\x73\143\x72\x69\160\x74\40\141\x63\143\145\163\x73\x20\141\x6c\x6c\157\x77\145\x64"); class Dashboard extends CI_Controller { public function __construct() { goto qjQ4U; Egqmw: $this->load->model("\x44\141\x73\150\142\157\141\162\x64\137\x6d\x6f\144\145\154", "\144\141\163\150\x62\x6f\141\x72\x64"); goto aDj0f; qjQ4U: parent::__construct(); goto eeoLd; dHI0A: ZV6Pd: goto MysI5; aDj0f: $this->load->model("\114\157\147\137\155\157\x64\145\x6c", "\x6c\x6f\x67\x67\151\x6e\x67"); goto vIks3; vIks3: $this->load->model("\104\162\x6f\160\x64\x6f\167\156\137\x6d\x6f\x64\x65\154", "\x64\x72\157\160\x64\x6f\167\156"); goto eWXU3; gTWQY: redirect("\141\165\x74\x68"); goto dHI0A; eWXU3: $this->load->model("\x43\x62\x74\x5f\155\157\x64\145\154", "\x63\x62\164"); goto wapSG; MysI5: $this->load->model("\x4d\141\163\164\145\x72\x5f\155\157\144\x65\154", "\x6d\x61\x73\x74\145\162"); goto Egqmw; eeoLd: if ($this->ion_auth->logged_in()) { goto ZV6Pd; } goto gTWQY; wapSG: } public function admin_box() { goto MW1gD; zREty: zcOxf: goto VFpDB; G49HU: goto ahX_l; goto zREty; CkAXN: Vibey: goto BPlRI; ptWHQ: $where = ''; goto sZz5Y; wFwYN: $box = [["\142\157\x78" => "\142\154\165\x65", "\164\x6f\164\141\154" => $this->dashboard->total("\x6d\x61\x73\x74\145\x72\137\163\151\x73\x77\x61"), "\164\x69\164\154\x65" => "\123\151\x73\x77\x61", "\165\162\154" => "\x64\x61\x74\141\163\x69\163\x77\x61", "\151\x63\157\156" => "\165\163\145\162\x73"], ["\142\x6f\x78" => "\x63\171\x61\156", "\x74\157\164\x61\154" => $this->dashboard->total("\x6d\x61\x73\164\x65\x72\137\x6b\x65\154\141\x73"), "\164\151\x74\x6c\x65" => "\122\x6f\155\142\145\154", "\165\x72\154" => "\x64\141\x74\141\153\x65\154\x61\163", "\151\x63\157\156" => "\142\145\154\154"], ["\142\157\170" => "\x74\x65\x61\154", "\164\157\x74\x61\154" => $this->dashboard->total("\155\141\163\164\x65\162\x5f\147\165\x72\x75"), "\x74\x69\x74\x6c\145" => "\107\165\162\x75", "\x75\162\x6c" => "\x64\141\x74\141\147\x75\x72\x75", "\x69\x63\157\x6e" => "\x75\x73\145\x72"], ["\x62\157\170" => "\x66\x75\143\150\x73\x69\141", "\164\x6f\164\141\154" => $this->dashboard->totalWaliKelas(), "\x74\151\x74\154\145" => "\127\x61\154\151\x20\113\x65\154\141\163", "\x75\x72\x6c" => "\144\141\164\x61\x67\165\x72\x75", "\x69\143\x6f\156" => "\165\x73\145\162"], ["\x62\x6f\x78" => "\163\165\x63\x63\x65\x73\163", "\x74\157\x74\x61\x6c" => $this->dashboard->total("\155\141\x73\x74\145\x72\x5f\x6d\141\160\x65\x6c", $where), "\x74\x69\x74\x6c\145" => "\x4d\x61\x70\x65\x6c", "\165\x72\154" => "\144\x61\164\141\155\141\x70\145\x6c", "\x69\x63\157\x6e" => "\142\157\157\x6b"], ["\x62\x6f\170" => "\x79\145\154\154\157\167", "\164\157\164\141\154" => $this->dashboard->total("\x6d\141\163\164\x65\162\x5f\x65\153\163\x74\162\x61"), "\164\x69\164\154\x65" => "\105\x6b\x73\164\162\x61\x6b\x75\162\151\153\165\x6c\145\162", "\165\162\154" => "\144\x61\x74\141\x65\x6b\163\164\162\141", "\151\143\x6f\156" => "\x62\x6f\x6f\x6b"]]; goto qtiTq; TEA7l: if ($setting->jenjang == "\x32") { goto Vibey; } goto G49HU; GN0r7: goto ahX_l; goto CkAXN; sZz5Y: if ($setting->jenjang == "\61") { goto zcOxf; } goto TEA7l; qtiTq: $info_box = json_decode(json_encode($box), FALSE); goto IS7zH; VFpDB: $where = "\152\x65\156\x6a\141\156\x67\x3d\60\40\117\122\x20\x6a\145\156\x6a\x61\x6e\147\x3d\x31"; goto GN0r7; IS7zH: return $info_box; goto CEujy; BPlRI: $where = "\x6a\145\x6e\152\141\156\x67\75\x32\x20\117\x52\40\x6a\x65\x6e\x6a\x61\156\147\x3d\x31"; goto jvoFb; jvoFb: ahX_l: goto wFwYN; MW1gD: $setting = $this->dashboard->getSetting(); goto ptWHQ; CEujy: } public function guru_box() { goto eFr2X; EKRpz: if ($setting->jenjang == "\x32") { goto Filzv; } goto a0gE2; Bg0wv: return $info_box; goto ByBtZ; NIpnJ: $where = ''; goto NZMtu; NG4tS: d20_V: goto sv8_2; Yi1SI: $info_box = json_decode(json_encode($box), FALSE); goto Bg0wv; Rlq_S: Filzv: goto XNLGD; sv8_2: $where = "\152\x65\x6e\152\141\x6e\147\75\60\40\x4f\x52\40\x6a\145\x6e\152\141\x6e\x67\75\x31"; goto s0dnL; XBVRU: A9wWp: goto TOBgd; a0gE2: goto A9wWp; goto NG4tS; eFr2X: $setting = $this->dashboard->getSetting(); goto NIpnJ; TOBgd: $box = [["\x62\157\170" => "\x74\145\141\x6c", "\x74\157\164\x61\x6c" => $this->dashboard->total("\155\x61\163\164\145\162\137\x6b\145\x6c\x61\163"), "\x74\x69\164\154\x65" => "\x52\157\155\x62\145\x6c", "\x69\143\x6f\156" => "\x75\x73\x65\162"], ["\x62\157\x78" => "\142\154\x75\x65", "\x74\157\x74\141\154" => $this->dashboard->total("\x6d\141\x73\x74\x65\x72\x5f\x73\151\x73\167\141"), "\164\x69\164\x6c\x65" => "\123\x69\163\x77\x61", "\x69\x63\157\156" => "\x75\x73\145\x72\163"], ["\142\x6f\x78" => "\x66\x75\x63\x68\x73\151\141", "\x74\157\164\x61\154" => $this->dashboard->total("\x6d\141\163\164\145\x72\x5f\x67\165\162\165"), "\x74\151\164\x6c\x65" => "\x47\165\x72\165", "\x69\143\x6f\x6e" => "\x75\163\145\x72"], ["\x62\157\x78" => "\163\165\x63\x63\145\x73\x73", "\164\x6f\164\x61\154" => $this->dashboard->total("\x6d\x61\x73\164\145\162\137\155\141\160\145\154", $where), "\x74\x69\x74\154\145" => "\115\141\x70\145\x6c", "\x69\143\x6f\156" => "\142\157\157\153"]]; goto Yi1SI; XNLGD: $where = "\152\x65\156\152\x61\x6e\x67\75\62\x20\x4f\122\40\152\x65\156\x6a\x61\156\x67\x3d\61"; goto XBVRU; s0dnL: goto A9wWp; goto Rlq_S; NZMtu: if ($setting->jenjang == "\61") { goto d20_V; } goto EKRpz; ByBtZ: } public function ujian_box() { goto ZLJ7C; ZLJ7C: $box = [["\x62\157\x78" => "\151\156\144\x69\x67\x6f", "\x74\157\x74\x61\154" => $this->dashboard->total("\143\x62\x74\137\x72\165\141\156\147"), "\164\151\x74\154\x65" => "\122\x75\141\x6e\147\40\125\152\x69\x61\x6e", "\x75\162\x6c" => "\x63\142\164\x72\165\141\x6e\x67", "\x69\x63\x6f\x6e" => "\x73\x63\x68\157\157\154"], ["\142\x6f\170" => "\155\141\x72\x6f\x6f\156", "\164\157\x74\x61\154" => $this->dashboard->total("\x63\x62\164\x5f\163\145\x73\x69"), "\x74\151\x74\154\145" => "\123\145\x73\x69", "\165\162\x6c" => "\x63\142\164\x73\x65\163\x69", "\151\x63\157\156" => "\143\x6c\157\x63\x6b"], ["\x62\157\170" => "\147\x72\x65\145\x6e", "\164\157\x74\x61\x6c" => $this->dashboard->total("\x63\142\x74\x5f\142\141\156\153\137\x73\x6f\x61\x6c"), "\x74\x69\164\154\x65" => "\x42\141\x6e\153\40\123\x6f\141\x6c", "\x75\x72\154" => "\143\x62\164\x62\141\x6e\153\163\x6f\x61\x6c", "\151\x63\x6f\156" => "\x66\157\154\144\x65\x72"], ["\x62\157\170" => "\x74\x65\x61\154", "\164\x6f\164\141\x6c" => $this->dashboard->totalJadwal(), "\x74\151\x74\154\145" => "\112\141\144\167\141\154", "\x75\x72\154" => "\143\142\164\x6a\141\144\x77\x61\154", "\x69\143\157\156" => "\143\x6c\x6f\143\153"]]; goto Oz0TS; Oz0TS: $info_box = json_decode(json_encode($box), FALSE); goto t5xUQ; t5xUQ: return $info_box; goto P8eG4; P8eG4: } public function menu_siswa_box() { goto aKhRH; R04Ww: return $info_box; goto FvCnD; aKhRH: $box = [["\x74\x69\x74\x6c\145" => "\x4a\141\x64\167\x61\x6c\40\x50\x65\x6c\x61\152\x61\x72\x61\156", "\x69\x63\157\156" => "\x69\x63\137\157\x6e\154\151\156\x65\56\160\x6e\147", "\x6c\151\x6e\x6b" => "\163\151\163\167\x61\x2f\x6a\141\144\167\141\154\160\x65\154\141\152\141\x72\x61\156"], ["\x74\x69\164\154\145" => "\x4d\141\164\145\x72\151", "\x69\143\157\x6e" => "\151\143\x5f\145\154\145\141\162\x6e\151\156\147\56\160\x6e\147", "\x6c\151\x6e\153" => "\163\151\163\167\x61\x2f\155\141\x74\145\x72\x69"], ["\x74\151\x74\154\145" => "\124\165\147\x61\163", "\151\143\x6f\156" => "\x69\143\x5f\161\x75\145\x73\x74\x69\x6f\x6e\163\x2e\160\x6e\147", "\154\151\x6e\x6b" => "\163\x69\x73\x77\x61\x2f\x74\165\x67\x61\x73"], ["\x74\151\x74\x6c\145" => "\x55\x6a\x69\x61\x6e\x20\x2f\x20\125\x6c\141\156\x67\x61\x6e", "\151\143\x6f\156" => "\151\143\137\161\x75\145\163\164\x69\x6f\156\x2e\x70\156\147", "\154\x69\156\x6b" => "\x73\x69\x73\x77\x61\57\143\142\164"], ["\164\x69\164\x6c\x65" => "\116\151\x6c\x61\x69\40\110\141\163\151\154", "\151\x63\x6f\156" => "\151\143\137\x65\170\141\155\x2e\x70\x6e\x67", "\154\x69\x6e\153" => "\x73\x69\163\x77\141\x2f\x68\x61\x73\151\x6c"], ["\x74\x69\x74\x6c\145" => "\101\x62\x73\145\x6e\x73\151", "\x69\143\x6f\156" => "\151\x63\137\143\x6c\x69\x70\142\x6f\141\162\x64\56\x70\156\147", "\154\x69\156\153" => "\163\151\163\x77\141\57\x6b\x65\x68\141\144\151\x72\x61\156"], ["\x74\151\164\154\x65" => "\x43\x61\164\x61\x74\141\x6e\x20\107\165\162\165", "\x69\143\x6f\x6e" => "\151\x63\x5f\x73\x74\x75\144\145\x6e\164\56\160\x6e\147", "\154\151\156\153" => "\163\151\163\167\141\57\x63\x61\164\x61\164\141\x6e"]]; goto XjUV1; XjUV1: $info_box = json_decode(json_encode($box), FALSE); goto R04Ww; FvCnD: } public function index() { goto EcpDa; gH3zP: $tkn["\x65\154\x61\x70\x73\x65\144"] = "\x30\60\72\x30\x30\72\60\x30"; goto Leq_f; JFw6_: MwCXF: goto sGfXU; YKrjA: $data["\x67\x75\x72\x75\163"] = $this->dropdown->getAllGuru(); goto bS77K; A2h0J: $this->load->view("\x6d\145\x6d\142\x65\162\x73\x2f\x67\165\162\x75\57\x64\x61\x73\150\142\x6f\x61\x72\x64"); goto eQ_59; px0qr: $siswa = $this->dashboard->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt); goto W2rpr; xmPmn: $data["\152\x61\x64\167\x61\154\163\137\165\x6a\151\141\156"] = $tglJadwals; goto cIUD6; NBS5b: mWhIp: goto tUreE; DPBGm: $tkn["\141\165\164\x6f"] = "\x30"; goto cp8s4; KEmxe: $user = $this->ion_auth->user()->row(); goto xmC20; Ttmrf: if ($this->ion_auth->in_group("\163\151\163\167\x61")) { goto ztwqR; } goto KVwQd; cvlhW: $data["\x74\160"] = $this->dashboard->getTahun(); goto TndqZ; kqNy3: goto mWhIp; goto pWXLk; lhMbb: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto H26mx; WO0D3: $data["\151\x6e\x66\157\x5f\142\x6f\170"] = $this->admin_box(); goto fMZ11; cSEB3: $tkn["\x74\157\x6b\145\x6e"] = ''; goto DPBGm; cIUD6: $data["\160\145\156\147\x61\167\141\163"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt, null, null); goto qEKr2; xcexC: $data["\163\155\x74\x5f\141\x63\x74\151\x76\145"] = $smt; goto ZUiwm; U_ZWU: $this->load->view("\x6d\145\155\x62\145\162\163\57\x73\151\x73\167\x61\x2f\x74\145\155\160\154\141\164\145\x73\x2f\x68\x65\141\x64\x65\x72", $data); goto sdXeL; StpZ6: $data["\153\x62\155\x73"] = $arrKbm[$siswa->id_kelas] ?? null; goto MgysB; tK9IA: $this->load->view("\x64\x69\163\141\x62\154\x65\x5f\x6c\x6f\147\x69\x6e", $data); goto QP9b3; yRoSI: $data["\162\165\156\x6e\151\x6e\147\137\164\145\170\164"] = $this->dashboard->getRunningText(); goto U_ZWU; jZ5i2: kcbHI: goto xmPmn; Qbn9m: $tglJadwals = $this->cbt->getAllJadwalByJenis(null, $tp->id_tp, $smt->id_smt); goto eC_cv; sGfXU: $data["\x6b\x65\x6c\141\163\145\163"] = $kelass; goto C6bHp; bS77K: if ($this->ion_auth->is_admin()) { goto fJOKi; } goto ByLDv; W4DYM: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto xcexC; PAu0i: goto wDAel; goto v45F_; Klo8j: fJOKi: goto WO0D3; Leq_f: $data["\x74\157\153\x65\156"] = $token != null ? $token : json_decode(json_encode($tkn)); goto zKRYz; HErX1: foreach ($kbms as $key => $item) { $arrKbm[$item->id_kelas] = $item; WNUjy: } goto Mllti; fdhv9: $data["\155\141\160\x65\x6c\163"] = $this->master->getAllMapel(); goto Qbn9m; tUreE: wDAel: goto P3Cd8; xokdK: $data["\165\152\x69\141\x6e\x5f\x62\x6f\x78"] = $this->ujian_box(); goto hJtWa; KVwQd: $token = $this->cbt->getToken(); goto cSEB3; FTnrU: $this->load->view("\x5f\164\145\155\x70\x6c\x61\164\145\163\57\144\x61\163\x68\x62\157\141\162\144\57\137\146\x6f\157\x74\x65\162"); goto CLvWy; q9HXB: $arrJadwalKelas = []; goto ogny6; BN2ON: $data["\152\x61\144\167\141\154\x73"] = $arrJadwalKelas; goto qK5f3; C6bHp: $day = date("\x4e", strtotime(date("\x59\x2d\155\x2d\x64"))); goto F8vEu; EFDHk: foreach ($kbms as $kbm) { $kbm->istirahat = unserialize($kbm->istirahat); NpW4R: } goto Q7_H_; isvGv: $this->load->view("\x5f\x74\x65\155\160\154\141\x74\145\163\57\144\141\x73\x68\142\x6f\141\162\x64\x2f\137\150\x65\x61\144\x65\162", $data); goto RpmV6; MgysB: $data["\152\141\x64\167\141\x6c\x73"] = $arrJadwalKelas[$siswa->id_kelas] ?? []; goto yRoSI; qK5f3: $data["\x6b\x62\x6d\163"] = $arrKbm; goto fdhv9; IOy3u: $arrKbm = []; goto HErX1; hJtWa: $data["\147\x75\x72\x75"] = $guru; goto S9lLF; xmC20: $data = ["\165\x73\x65\162" => $user, "\152\x75\144\165\x6c" => "\x42\x65\162\141\x6e\x64\141", "\x73\x75\142\152\165\x64\165\154" => "\110\x61\x6c\141\x6d\141\156\x20\x55\x74\x61\x6d\141", "\163\x65\164\x74\151\156\x67" => $setting]; goto O4xmo; RpmV6: $this->load->view("\x64\141\163\x68\142\157\x61\x72\x64"); goto FTnrU; CsD6j: oE_CC: goto tK9IA; ZUiwm: $kelass = []; goto omAuc; eaf5G: $this->load->view("\144\x69\x73\141\142\154\145\x5f\x6c\x6f\x67\x69\156", $data); goto NBS5b; kw273: $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto JFw6_; pWXLk: pihld: goto eaf5G; Nw0Io: $data["\160\x72\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto isvGv; QP9b3: xyoTE: goto UXXVl; kdP84: $smt = $this->dashboard->getSemesterActive(); goto cvlhW; O4xmo: $tp = $this->dashboard->getTahunActive(); goto kdP84; SjdWD: i2c3h: goto lhMbb; A7jlj: $data["\155\x65\x6e\x75"] = $this->menu_siswa_box(); goto StpZ6; RK3ZW: $data["\x73\x69\163\167\141"] = $siswa; goto A7jlj; fMZ11: $data["\x75\x6a\x69\x61\156\x5f\x62\157\x78"] = $this->ujian_box(); goto Nw0Io; g9D5B: goto xyoTE; goto CsD6j; oN93I: eoHdT: goto IOy3u; eQ_59: $this->load->view("\155\145\155\x62\x65\x72\163\57\147\165\162\x75\57\x74\x65\x6d\x70\x6c\141\164\145\x73\x2f\146\x6f\x6f\x74\x65\x72"); goto g9D5B; EcpDa: $setting = $this->dashboard->getSetting(); goto KEmxe; hS2hO: $this->load->view("\155\x65\155\142\145\162\x73\x2f\163\151\163\167\x61\x2f\164\145\155\x70\x6c\141\164\145\x73\57\x66\x6f\x6f\164\145\x72"); goto kqNy3; omAuc: if (!($tp != null)) { goto MwCXF; } goto kw273; v45F_: ztwqR: goto px0qr; eC_cv: foreach ($tglJadwals as $tgl => $jadwalss) { goto iD7oB; slp1o: etjAl: goto bK4Bg; iD7oB: foreach ($jadwalss as $mpl => $jadwals) { goto Pn6Tr; Pn6Tr: foreach ($jadwals as $jadwal) { goto WzKog; WzKog: $jadwal->bank_kelas = unserialize($jadwal->bank_kelas); goto wvvOx; uBPbo: tufkK: goto JZ7D0; wvvOx: foreach ($jadwal->bank_kelas as $kb) { goto e4Jjv; M0FP7: $jadwal->peserta[] = $p; goto L5ZAe; e4Jjv: if (!($kb["\x6b\145\154\x61\x73\x5f\x69\144"] != '')) { goto JxE4p; } goto NWHhw; L5ZAe: JxE4p: goto Ig4rg; Ig4rg: LhAA3: goto Y_qds; NWHhw: $p = $this->cbt->getKelasUjian($kb["\x6b\x65\154\141\163\137\x69\x64"]); goto M0FP7; Y_qds: } goto uBPbo; JZ7D0: TJvv9: goto HD4Uq; HD4Uq: } goto Ugib2; X0CxJ: iy9jM: goto Mbdjn; Ugib2: R6kno: goto X0CxJ; Mbdjn: } goto Un02A; Un02A: YewtD: goto slp1o; bK4Bg: } goto jZ5i2; TndqZ: $data["\164\x70\x5f\x61\x63\164\151\x76\x65"] = $tp; goto W4DYM; W2rpr: if ($siswa == null) { goto pihld; } goto RK3ZW; I2nyC: $kbms = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt); goto EFDHk; qEKr2: $data["\x72\165\x61\x6e\147\x73"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []); goto YKrjA; Q7_H_: vYP0v: goto q9HXB; JluUq: $data["\x69\x6e\146\157\x5f\x62\157\170"] = $this->admin_box(); goto xokdK; cp8s4: $tkn["\x6a\x61\x72\141\x6b"] = "\61"; goto gH3zP; CLvWy: goto Rnyh1; goto SjdWD; sdXeL: $this->load->view("\x6d\x65\x6d\142\x65\162\x73\57\x73\151\163\167\x61\57\144\x61\163\x68\x62\x6f\141\162\x64"); goto hS2hO; S9lLF: $this->load->view("\155\x65\155\x62\x65\162\163\x2f\x67\165\162\165\57\164\145\x6d\160\x6c\141\x74\145\163\57\150\145\141\x64\145\x72", $data); goto A2h0J; UXXVl: Rnyh1: goto PAu0i; H26mx: if ($guru == null) { goto oE_CC; } goto JluUq; YS4Fk: goto Rnyh1; goto Klo8j; F8vEu: $jadwal = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, null, $day); goto I2nyC; ogny6: foreach ($jadwal as $key => $item) { $arrJadwalKelas[$item->id_kelas][$item->jam_ke] = $item; BI3gF: } goto oN93I; ByLDv: if ($this->ion_auth->in_group("\x67\165\x72\x75")) { goto i2c3h; } goto YS4Fk; Mllti: TkHPm: goto Ttmrf; zKRYz: $data["\x61\144\141\x5f\165\152\x69\x61\156"] = $this->cbt->getDataJadwalByTgl(date("\131\55\x6d\55\x64")); goto BN2ON; P3Cd8: } public function checkTokenJadwal() { goto GPbj7; GPbj7: $data["\141\144\141\x5f\165\x6a\x69\x61\x6e"] = $this->cbt->getDataJadwalByTgl(date("\x59\55\x6d\x2d\x64")); goto WhdnK; zShLc: $data["\x74\157\x6b\145\x6e"] = $token; goto mgF5C; mgF5C: $this->output_json($data); goto KxqPx; ddmEa: $token->now = date("\144\x2d\x6d\55\131\x20\x48\72\151\x3a\x73"); goto zShLc; WhdnK: $token = $this->cbt->getToken(); goto ddmEa; KxqPx: } public function output_json($data, $encode = true) { goto oWgL1; Z_v7s: $data = json_encode($data); goto qfT1I; Tll2x: $this->output->set_content_type("\x61\160\160\154\151\143\141\164\x69\157\156\x2f\x6a\163\x6f\x6e")->set_output($data); goto ksgld; qfT1I: Hkz8X: goto Tll2x; oWgL1: if (!$encode) { goto Hkz8X; } goto Z_v7s; ksgld: } public function gantiTahun() { goto ANUYv; uHCwT: nz0pC: goto gdIu6; H1TFk: $rows = count($this->input->post("\164\x61\x68\x75\x6e", true)); goto Ce6p2; m1_zU: PWsYQ: goto BniGu; dONcb: goto c3wa_; goto uHCwT; btyCJ: $id_tp = $this->input->post("\151\x64\137\x74\x70\133" . $i . "\x5d", true); goto dpqj2; Ce6p2: $i = 0; goto rLsV8; wqLr4: if (!($i <= $rows)) { goto nz0pC; } goto btyCJ; dpqj2: $tahun = $this->input->post("\x74\141\150\165\156\133" . $i . "\135", true); goto rl6JZ; lX1Nl: $data["\163\164\141\x74\x75\163"] = true; goto ykJBe; eHxdb: $active = 0; goto p4Q8G; BniGu: $active = 1; goto y8rbe; p4Q8G: goto oW2Hh; goto m1_zU; OyzRa: gr9VL: goto s1K8I; gdIu6: $this->dashboard->update("\x6d\141\x73\x74\145\x72\137\x74\160", $update, "\151\144\x5f\164\160", null, true); goto oRtad; y8rbe: oW2Hh: goto OQC1O; oRtad: $data["\165\160\144\x61\x74\x65"] = $update; goto lX1Nl; s1K8I: $i++; goto dONcb; rLsV8: c3wa_: goto wqLr4; oXrkj: $this->output_json($data); goto n_7lH; ANUYv: $aktif = $this->input->post("\x61\x63\164\151\x76\x65", true); goto H1TFk; rl6JZ: if ($id_tp === $aktif) { goto PWsYQ; } goto eHxdb; OQC1O: $update[] = array("\x69\144\137\x74\160" => $id_tp, "\x74\141\150\165\x6e" => $tahun, "\141\x63\x74\151\x76\x65" => $active); goto OyzRa; ykJBe: $this->logging->saveLog(4, "\x6d\x65\156\x67\x67\141\x6e\164\151\40\x74\x61\x68\x75\x6e\40\141\152\141\162\141\156\x20\x61\x6b\164\x69\146"); goto oXrkj; n_7lH: } public function gantiSemester() { goto y3n3N; XdG5P: $data["\165\x70\x64\x61\x74\145"] = $update; goto Vxw2H; NVQIl: $smt = $this->input->post("\163\x6d\x74\x5b" . $i . "\135", true); goto UYnIY; uVCfY: goto dDMl4; goto bGj4n; p3d3K: if (!($i <= $rows)) { goto H0Qgx; } goto etcW3; Ksk8b: $active = 0; goto W_YVU; p5e7h: JVp0E: goto ibKk0; txP_b: wfe7y: goto A25k3; gZDhK: $rows = count($this->input->post("\163\x6d\164", true)); goto puC3I; ibKk0: $active = 1; goto KH7Ma; y3n3N: $aktif = $this->input->post("\141\x63\x74\x69\166\x65", true); goto gZDhK; bGj4n: H0Qgx: goto T828P; UYnIY: if ($id_smt === $aktif) { goto JVp0E; } goto Ksk8b; Vxw2H: $data["\x73\164\x61\x74\x75\163"] = true; goto WEFML; bKsgE: $this->output_json($data); goto PUdFN; WEFML: $this->logging->saveLog(4, "\x6d\x65\x6e\x67\147\x61\156\x74\151\x20\x73\145\155\145\x73\164\x65\x72\x20\x61\153\x74\151\x66"); goto bKsgE; KH7Ma: WJImr: goto Pq3o2; W_YVU: goto WJImr; goto p5e7h; Pq3o2: $update[] = array("\151\144\x5f\x73\x6d\164" => $id_smt, "\163\155\164" => $smt, "\141\x63\164\151\x76\145" => $active); goto txP_b; etcW3: $id_smt = $this->input->post("\151\x64\x5f\x73\155\x74\x5b" . $i . "\x5d", true); goto NVQIl; T828P: $this->dashboard->update("\x6d\141\163\x74\x65\162\x5f\x73\155\x74", $update, "\x69\x64\x5f\x73\x6d\x74", null, true); goto XdG5P; puC3I: $i = 1; goto GIZcC; GIZcC: dDMl4: goto p3d3K; A25k3: $i++; goto uVCfY; PUdFN: } public function getNotifikasi() { } public function getLog($limit) { $this->output_json($this->logging->loadAktifitas($limit)); } public function hapusLog() { goto U3POL; dTAn4: goto jHQPz; goto AEb8l; AEb8l: vloUZ: goto W3mb6; f5UaX: $this->output_json($deleted); goto MSLIx; U3POL: $this->db->trans_start(); goto KMG5i; nkVNT: $this->db->trans_complete(); goto f5UaX; W3mb6: $deleted = ["\x73\x74\141\x74\x75\x73" => true, "\155\145\x73\163\141\x67\145" => "\x62\145\162\150\141\x73\151\x6c"]; goto yy_e3; yy_e3: jHQPz: goto nkVNT; KMG5i: if ($this->db->empty_table("\x6c\x6f\147")) { goto vloUZ; } goto e21GA; e21GA: $deleted = ["\x73\164\x61\164\x75\x73" => false, "\155\x65\163\x73\141\147\x65" => "\147\x61\x67\141\x6c"]; goto dTAn4; MSLIx: } public function getLogSiswa($limit) { $this->output_json($this->logging->loadAktifitasSiswa($limit)); } public function getPengumuman($for) { $this->output_json($this->dashboard->loadPengumuman($for)); } public function getJadwalHariIni($id_kelas, $id_hari) { goto MzIRU; ENYVt: $smt = $this->dashboard->getSemesterActive(); goto Z3Y9f; MzIRU: $tp = $this->dashboard->getTahunActive(); goto ENYVt; Z3Y9f: $this->output_json($this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $id_hari)); goto IOhfP; IOhfP: } public function getJadwalKbm($id_kelas) { goto PxRfD; aIL99: $smt = $this->dashboard->getSemesterActive(); goto mOsPa; mOsPa: $jadwal = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas); goto ipvf3; ipvf3: $istirahat = unserialize($jadwal->istirahat); goto QP124; PxRfD: $tp = $this->dashboard->getTahunActive(); goto aIL99; QP124: $this->output_json(array("\x6a\x61\144\x77\141\x6c" => $jadwal, "\151\163\164\151\162\x61\x68\x61\164" => $istirahat)); goto z2VU2; z2VU2: } }
