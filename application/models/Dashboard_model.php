<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\x45\120\101\124\x48") or exit("\116\157\x20\144\x69\x72\145\143\x74\x20\163\x63\162\151\160\164\x20\141\143\143\x65\163\163\40\x61\x6c\x6c\157\x77\x65\144"); class Dashboard_model extends CI_Model { public function getSetting() { return $this->db->get("\163\x65\164\x74\151\156\x67")->row(); } public function getRunningText() { return $this->db->get("\162\165\156\156\x69\x6e\147\x5f\164\x65\170\164")->result(); } public function total($table, $where = null) { goto BxJ4A; toVnw: $query = $this->db->get($table)->num_rows(); goto Er5Lb; Er5Lb: return $query; goto zgHyC; GUSrr: $this->db->where($where); goto xDXik; BxJ4A: if (!($where != null)) { goto VstE2; } goto GUSrr; xDXik: VstE2: goto toVnw; zgHyC: } public function hapus($table, $data, $pk) { $this->db->where_in($pk, $data); return $this->db->delete($table); } public function getProfileAdmin($id_user) { goto tG_f3; relbN: $this->db->where("\141\56\151\x64", $id_user); goto hvxVk; tG_f3: $this->db->select("\x62\x2e\x2a"); goto zADoa; zADoa: $this->db->from("\165\163\x65\162\163\40\141"); goto XZHYB; XZHYB: $this->db->join("\x75\x73\145\162\x73\x5f\x70\x72\x6f\x66\x69\x6c\x65\x20\142", "\141\56\151\x64\x3d\x62\56\151\x64\137\x75\163\x65\x72", "\154\x65\146\x74"); goto relbN; hvxVk: $query = $this->db->get()->row(); goto teSkT; teSkT: return $query; goto wBA6Z; wBA6Z: } public function totalWaliKelas() { $query = $this->get_where("\152\x61\142\141\164\x61\156\x5f\147\x75\162\165", "\151\x64\x5f\x6a\x61\x62\x61\164\141\156", "\x34")->num_rows(); return $query; } public function totalSiswaKelas($id_kelas, $id_tp, $id_smt) { goto CRVLL; Ewqsb: $this->db->where("\141\56\x69\x64\x5f\163\x6d\164", $id_smt); goto ZpCOv; tnJ7t: $query = $this->db->get()->num_rows(); goto sDyNZ; ZpCOv: $this->db->where("\x61\x2e\x69\x64\137\153\145\154\x61\163", $id_kelas); goto tnJ7t; sDyNZ: return $query; goto NbB1J; CRVLL: $this->db->select("\141\x2e\151\x64\137\x73\151\163\x77\141"); goto QAeS1; QAeS1: $this->db->from("\153\x65\154\x61\163\137\x73\151\x73\x77\141\40\141"); goto eYKr6; eYKr6: $this->db->where("\x61\56\x69\144\137\x74\x70", $id_tp); goto Ewqsb; NbB1J: } public function totalPengawas() { goto h63kU; h63kU: $this->db->select("\52"); goto OG_7I; Ok6v8: return $query; goto Pnvqx; OG_7I: $this->db->where("\151\144\x5f\x6a\141\x64\x77\141\154\40\41\75", "\x61\x3a\60\x3a\173\175"); goto z_X6I; z_X6I: $query = $this->db->get("\x63\142\x74\x5f\x70\145\x6e\x67\x61\167\141\x73")->num_rows(); goto Ok6v8; Pnvqx: } public function totalJadwal() { goto GQxgX; QZWo2: return $query; goto p0RaF; DNU2J: $query = $this->db->get("\143\x62\x74\x5f\152\x61\144\167\x61\154")->num_rows(); goto QZWo2; GQxgX: $this->db->select("\52"); goto DNU2J; p0RaF: } public function getDataTahun() { goto NSmky; EamVe: $this->datatables->from("\155\x61\x73\x74\x65\162\x5f\164\x70"); goto OHG0P; OHG0P: return $this->datatables->generate(); goto UnADX; NSmky: $this->datatables->select("\151\x64\137\164\160\x2c\x20\164\x61\150\165\x6e\54\x20\141\143\x74\151\x76\x65"); goto EamVe; UnADX: } public function getTahun() { goto tOKHv; tOKHv: $this->db->order_by("\x74\141\150\x75\x6e", "\101\123\103"); goto DBwJh; DBwJh: $result = $this->db->get("\x6d\141\163\x74\x65\x72\x5f\x74\160")->result(); goto B2Ts5; B2Ts5: return $result; goto p7DcH; p7DcH: } public function getTahunById($id) { $result = $this->db->get_where("\x6d\141\163\x74\145\x72\137\164\160", "\151\144\137\164\x70\75" . $id)->row(); return $result; } public function getTahunByTahun($tahun) { $result = $this->db->get_where("\155\141\163\164\145\x72\137\x74\160", "\164\x61\x68\165\x6e\75" . "\42" . $tahun . "\42")->row(); return $result; } public function getTahunActive() { goto HkK6T; uKnx9: $this->db->where("\141\x63\164\151\166\x65", 1); goto FYOpO; zHf5a: return $result; goto oTaVL; FYOpO: $result = $this->db->get()->row(); goto zHf5a; HkK6T: $this->db->select("\x69\144\137\164\160\x2c\40\x74\x61\x68\x75\156"); goto p3oxb; p3oxb: $this->db->from("\x6d\x61\x73\x74\145\162\137\164\x70"); goto uKnx9; oTaVL: } public function getSemester() { goto tcNZR; Tl7lP: return $result; goto xxhUq; tcNZR: $this->db->order_by("\163\x6d\x74", "\101\x53\103"); goto BSCWq; BSCWq: $result = $this->db->get("\x6d\x61\x73\x74\x65\162\x5f\x73\x6d\x74")->result(); goto Tl7lP; xxhUq: } public function getSemesterById($id) { $result = $this->db->get_where("\155\141\163\164\x65\x72\x5f\x73\155\x74", "\x69\144\137\163\155\164\75" . $id)->row(); return $result; } public function getSemesterByNama($nama_smt) { $result = $this->db->get_where("\x6d\141\x73\164\145\162\x5f\x73\155\x74", "\156\141\155\x61\x5f\x73\x6d\x74\75" . "\x22" . $nama_smt . "\x22")->row(); return $result; } public function getSemesterActive() { goto ay_Sk; ay_Sk: $this->db->select("\x69\144\137\x73\155\x74\54\40\156\x61\155\141\x5f\x73\155\x74\x2c\x20\163\x6d\x74"); goto hR80v; rQPl6: $result = $this->db->get()->row(); goto AF1rs; hR80v: $this->db->from("\155\141\163\164\x65\x72\x5f\163\155\x74"); goto Pv9Wh; AF1rs: return $result; goto xnRgU; Pv9Wh: $this->db->where("\x61\x63\x74\151\166\145", 1); goto rQPl6; xnRgU: } public function getDataGuruByUserId($id_user, $id_tp, $id_smt) { goto Ecf6f; TDuVI: $this->db->join("\154\145\166\145\154\137\147\165\x72\165\x20\145", "\142\x2e\x69\144\x5f\x6a\141\x62\141\164\141\156\x3d\145\x2e\151\x64\x5f\x6c\145\x76\145\x6c", "\x6c\x65\x66\x74"); goto Ugl17; zCNL8: $query = $this->db->get()->row(); goto VUI0S; wKLTC: $this->db->from("\155\x61\163\164\145\162\x5f\147\x75\162\165\40\141"); goto kr3Mm; Ecf6f: $this->db->query("\123\x45\x54\40\123\x51\114\137\x42\x49\x47\x5f\x53\105\114\105\103\124\x53\x3d\x31"); goto HbjBO; APU75: $this->db->join("\154\145\166\145\x6c\x5f\153\x65\x6c\x61\163\x20\x67", "\146\x2e\154\145\x76\145\154\x5f\x69\144\x3d\x67\x2e\151\x64\137\x6c\x65\166\145\154", "\x6c\145\x66\x74"); goto DrzZh; VUI0S: return $query; goto WjLh2; kr3Mm: $this->db->join("\x6a\141\142\x61\x74\x61\156\137\147\165\162\165\x20\142", "\141\56\x69\x64\137\x67\165\x72\165\75\142\56\x69\144\137\147\x75\162\x75\40\101\x4e\x44\40\x62\56\151\144\137\164\x70\75" . $id_tp . "\40\x41\x4e\x44\x20\142\56\151\144\x5f\x73\155\x74\75" . $id_smt, "\x6c\x65\x66\x74"); goto TDuVI; HbjBO: $this->db->select("\x61\56\x69\x64\137\147\x75\162\x75\x2c\40\x61\56\156\x61\x6d\141\137\x67\x75\x72\165\54\x20\x61\56\156\151\x70\x2c\x20\x61\56\151\144\x5f\x75\163\145\162\x2c\40\141\56\146\x6f\x74\157\x2c\x20\142\x2e\x69\x64\137\152\141\x62\x61\164\141\156\x2c\40\142\56\x69\144\137\x6b\x65\x6c\141\163\x20\141\x73\x20\x77\x61\154\151\x5f\x6b\145\x6c\141\x73\x2c\40\x66\x2e\x6c\x65\x76\145\154\137\x69\144\x2c\x20\x67\56\x6c\x65\x76\145\154"); goto wKLTC; Ugl17: $this->db->join("\x6d\141\163\x74\145\162\x5f\x6b\x65\154\141\163\40\146", "\x61\56\151\x64\137\147\165\162\165\x3d\x66\56\147\x75\x72\165\137\151\144\x20\x41\116\104\40\146\x2e\151\144\137\164\x70\75" . $id_tp . "\x20\x41\x4e\x44\x20\x66\x2e\151\x64\x5f\x73\155\164\75" . $id_smt, "\154\145\146\x74"); goto APU75; DrzZh: $this->db->where("\141\x2e\151\144\x5f\165\163\145\162", $id_user); goto zCNL8; WjLh2: } public function getDataGuruById($id_guru, $id_tp, $id_smt) { goto oWL2A; jdhq0: $this->db->select("\x61\x2e\x69\x64\137\x67\165\162\x75\54\40\x61\56\156\x61\x6d\141\x5f\x67\x75\x72\165\x2c\40\141\x2e\156\x69\160\x2c\40\x61\x2e\x69\x64\137\165\x73\x65\x72\x2c\40\141\x2e\146\x6f\x74\157\54\x20\142\x2e\x69\x64\x5f\x6a\x61\x62\141\x74\x61\x6e\54\x20\142\x2e\x69\x64\x5f\x6b\145\x6c\x61\x73\40\141\x73\x20\x77\141\x6c\151\137\153\x65\154\x61\163\54\x20\x66\x2e\x6c\x65\166\x65\154\x5f\151\144\54\x20\x67\x2e\x6c\145\x76\x65\154"); goto pvZ1F; T_eKF: $this->db->join("\x6a\x61\142\x61\x74\x61\x6e\137\x67\x75\162\165\40\x62", "\x61\x2e\151\x64\137\147\x75\162\x75\x3d\x62\x2e\151\x64\137\x67\x75\x72\165\x20\101\x4e\104\x20\x62\56\x69\x64\137\164\160\x3d" . $id_tp . "\40\101\x4e\104\40\x62\56\151\x64\x5f\163\155\x74\x3d" . $id_smt, "\x6c\145\x66\x74"); goto qCjWn; HOnX_: $this->db->where("\x61\x2e\151\x64\137\147\165\162\x75", $id_guru); goto VfFEg; aQfJx: $this->db->join("\x6d\x61\163\x74\x65\x72\137\153\145\x6c\141\x73\40\146", "\x61\x2e\151\144\137\x67\x75\x72\165\x3d\x66\x2e\x67\165\x72\x75\x5f\151\x64\x20\101\116\x44\40\146\56\x69\144\137\164\x70\x3d" . $id_tp . "\x20\x41\x4e\x44\x20\146\x2e\x69\x64\x5f\163\x6d\x74\75" . $id_smt, "\x6c\x65\x66\164"); goto eRtC5; oWL2A: $this->db->query("\123\x45\x54\x20\123\x51\x4c\x5f\x42\111\107\137\123\x45\x4c\105\x43\x54\x53\75\61"); goto jdhq0; qCjWn: $this->db->join("\x6c\x65\166\x65\x6c\x5f\147\x75\162\165\x20\145", "\142\56\151\144\x5f\152\x61\142\x61\x74\141\x6e\x3d\145\56\x69\144\x5f\154\x65\x76\x65\154", "\154\x65\146\164"); goto aQfJx; GmvEn: return $query; goto zswGq; VfFEg: $query = $this->db->get()->row(); goto GmvEn; pvZ1F: $this->db->from("\155\141\163\x74\145\x72\x5f\x67\x75\x72\x75\40\x61"); goto T_eKF; eRtC5: $this->db->join("\x6c\145\x76\x65\154\137\x6b\145\x6c\x61\x73\x20\x67", "\146\x2e\154\145\166\x65\154\x5f\x69\144\75\147\x2e\151\144\137\x6c\x65\x76\x65\154", "\x6c\x65\146\x74"); goto HOnX_; zswGq: } public function getListGuruByUserId($id_tp, $id_smt) { goto TNyLE; O73Ee: $this->db->join("\155\x61\x73\x74\x65\162\x5f\x6b\x65\x6c\x61\x73\x20\x66", "\141\56\151\144\137\x67\x75\162\165\75\146\x2e\x67\x75\x72\x75\x5f\151\x64\40\101\116\x44\40\x66\x2e\x69\144\137\x74\160\75" . $id_tp . "\x20\x41\x4e\x44\40\146\56\151\x64\x5f\x73\155\164\75" . $id_smt, "\154\145\x66\164"); goto ewlE4; ik7s3: RukZC: goto BozeA; TNyLE: $this->db->query("\123\x45\124\40\x53\121\x4c\x5f\x42\111\x47\137\123\105\114\105\x43\124\x53\75\x31"); goto HWqxm; BozeA: return $rest; goto arr1k; arEFO: foreach ($query as $guru) { $rest[$guru->id_guru] = $guru; kNwtr: } goto ik7s3; QAGQb: $this->db->join("\x6a\x61\142\141\164\x61\156\137\x67\x75\162\165\40\x62", "\141\x2e\151\x64\x5f\x67\x75\x72\165\75\142\x2e\151\144\137\x67\x75\x72\x75\x20\101\116\104\40\142\56\151\x64\137\164\160\75" . $id_tp . "\x20\x41\x4e\x44\40\x62\56\151\144\x5f\163\x6d\164\x3d" . $id_smt, "\x6c\x65\x66\x74"); goto QZK0H; QZK0H: $this->db->join("\x6c\145\166\145\x6c\x5f\147\165\x72\165\x20\145", "\142\56\151\144\x5f\x6a\x61\142\141\x74\141\x6e\75\145\56\x69\144\x5f\x6c\145\x76\145\x6c", "\154\x65\x66\164"); goto O73Ee; ewlE4: $this->db->join("\x6c\x65\x76\145\154\137\x6b\x65\154\141\163\40\x67", "\146\56\154\145\x76\x65\x6c\x5f\x69\144\x3d\x67\x2e\151\x64\x5f\x6c\x65\166\x65\x6c", "\154\x65\146\164"); goto ejA06; dyu6p: $rest = []; goto arEFO; uZBqY: $this->db->from("\x6d\141\x73\x74\145\162\x5f\147\x75\x72\x75\40\141"); goto QAGQb; HWqxm: $this->db->select("\x61\x2e\x69\x64\137\147\x75\162\x75\54\x20\141\56\156\141\x6d\x61\137\x67\165\162\x75\54\x20\x61\56\151\x64\x5f\x75\163\145\162\54\40\x61\56\146\157\x74\x6f\54\40\142\56\x69\144\x5f\x6a\x61\x62\x61\164\141\x6e\x2c\40\142\56\151\x64\x5f\x6b\145\154\x61\x73\40\141\x73\40\167\x61\154\x69\x5f\x6b\x65\154\x61\163\54\x20\x66\56\x6c\145\x76\145\154\137\x69\144\54\x20\147\x2e\154\x65\166\x65\154"); goto uZBqY; ejA06: $query = $this->db->get()->result(); goto dyu6p; arr1k: } public function getDetailGuruByUserId($id_user, $id_tp, $id_smt) { goto M1jen; MdbBq: $this->db->where("\x61\56\x69\x64\137\x75\x73\145\x72", $id_user); goto s03hl; PR1Dk: $this->db->join("\152\141\142\x61\164\141\x6e\x5f\147\165\162\x75\x20\x62", "\141\56\x69\x64\137\147\165\x72\165\x3d\x62\x2e\151\144\x5f\x67\165\x72\165\x20\101\116\x44\x20\x62\56\x69\x64\x5f\x74\160\x3d" . $id_tp . "\x20\101\x4e\104\40\x62\56\x69\144\x5f\163\x6d\164\75" . $id_smt, "\x6c\x65\x66\164"); goto BJZlK; nScPF: $this->db->select("\x2a"); goto lWX0B; BJZlK: $this->db->join("\154\x65\x76\x65\154\x5f\x67\165\x72\x75\x20\145", "\142\x2e\151\144\137\x6a\x61\x62\x61\x74\141\156\75\145\56\x69\144\137\x6c\x65\x76\145\154", "\x6c\145\146\164"); goto He5M0; d3Pah: return $query; goto dcg4B; s03hl: $query = $this->db->get()->row(); goto d3Pah; lWX0B: $this->db->from("\155\141\163\x74\x65\x72\x5f\x67\x75\x72\165\x20\x61"); goto PR1Dk; M1jen: $this->db->query("\x53\x45\x54\40\123\x51\114\137\x42\111\107\137\123\x45\x4c\x45\x43\124\123\x3d\x31"); goto nScPF; He5M0: $this->db->join("\155\141\x73\x74\145\x72\x5f\x6b\x65\154\x61\163\x20\146", "\x61\x2e\151\144\x5f\x67\x75\x72\165\75\x66\x2e\147\165\162\x75\137\x69\144\x20\101\116\x44\x20\x66\56\151\144\137\164\160\75" . $id_tp . "\40\101\116\104\40\x66\x2e\x69\144\137\x73\x6d\x74\x3d" . $id_smt, "\x6c\x65\x66\164"); goto MdbBq; dcg4B: } public function getKelasByMapel($id_mapel = null) { goto V2D79; JAEII: $this->db->select("\x2a"); goto ujS0b; pXZ2x: $this->db->join("\x6c\x65\166\x65\x6c\137\147\165\162\x75\40\144", "\x61\56\x6c\145\x76\145\154\x5f\151\x64\x3d\x64\x2e\x69\x64\137\154\x65\166\x65\154", "\x6c\145\146\164"); goto y2H_r; wqen6: $this->db->join("\x6d\141\163\x74\x65\x72\x5f\x6d\x61\160\145\154\x20\x62", "\x61\x2e\x6d\141\x70\145\154\x5f\x69\144\75\142\x2e\151\x64\x5f\155\x61\160\x65\x6c", "\x6c\x65\x66\x74"); goto pXZ2x; V2D79: $this->db->query("\123\105\x54\x20\123\121\114\x5f\x42\x49\x47\x5f\123\x45\x4c\x45\x43\x54\x53\75\x31"); goto JAEII; myZns: return $query; goto G6LfR; ujS0b: $this->db->from("\x6d\x61\x73\164\x65\162\x5f\x6b\x65\x6c\x61\x73"); goto wqen6; y2H_r: $query = $this->db->get()->row(); goto myZns; G6LfR: } public function get_where($table, $pk, $id, $join = null, $order = null) { goto iUxDe; iUxDe: $this->db->select("\x2a"); goto bAKvo; su0x0: DRXU4: goto CI0Wc; gIvA0: s4XQu: goto B6Aqy; Nf81z: if (!($join !== null)) { goto DRXU4; } goto IsPSV; eFY9o: $this->db->where($pk, $id); goto Nf81z; bAKvo: $this->db->from($table); goto eFY9o; jGYnJ: Ohjlu: goto su0x0; CI0Wc: if (!($order !== null)) { goto KGCtY; } goto d_R6P; MryAh: return $query; goto Qd6aM; IsPSV: foreach ($join as $table => $field) { $this->db->join($table, $field); ygaol: } goto jGYnJ; B6Aqy: KGCtY: goto CVKBY; CVKBY: $query = $this->db->get(); goto MryAh; d_R6P: foreach ($order as $field => $sort) { $this->db->order_by($field, $sort); tCGaj: } goto gIvA0; Qd6aM: } public function create($table, $data) { $insert = $this->db->insert($table, $data); return $insert; } public function update($table, $data, $pk, $id = null, $batch = false) { goto GXVvO; b8Od2: E3kIG: goto dsR0N; a8r4S: $insert = $this->db->update_batch($table, $data, $pk); goto Mp9gp; dsR0N: $insert = $this->db->update($table, $data, array($pk => $id)); goto eidSe; GXVvO: if ($batch === false) { goto E3kIG; } goto a8r4S; O352V: return $insert; goto BaYRY; Mp9gp: goto Dai6T; goto b8Od2; eidSe: Dai6T: goto O352V; BaYRY: } public function getDataSiswa($username, $id_tp, $id_smt) { goto byHar; ep6d4: $this->db->select("\x2a"); goto Fchlb; CeKul: $this->db->join("\155\141\x73\x74\145\162\x5f\153\x65\x6c\x61\x73\x20\143", "\142\x2e\x69\x64\137\x6b\145\x6c\x61\x73\x3d\143\56\151\x64\x5f\153\145\154\x61\x73\x20\x41\116\104\40\x63\56\x69\144\137\164\x70\75" . $id_tp . "\40\x41\x4e\x44\x20\143\56\151\x64\x5f\163\155\x74\x3d" . $id_smt, "\x6c\145\x66\x74"); goto Ba93m; YeDlW: $this->db->where("\x75\x73\x65\162\x6e\x61\x6d\x65", $username); goto i05Q2; Fchlb: $this->db->from("\155\141\x73\164\145\162\x5f\x73\x69\x73\167\x61\x20\x61"); goto Ydg5r; i05Q2: $query = $this->db->get()->row(); goto GEKCF; Ydg5r: $this->db->join("\x6b\x65\x6c\141\x73\x5f\163\151\x73\167\141\40\142", "\141\56\x69\x64\137\163\x69\x73\x77\141\75\142\x2e\x69\x64\x5f\x73\x69\163\x77\x61\40\x41\x4e\x44\x20\142\x2e\x69\144\x5f\164\x70\75" . $id_tp . "\x20\101\x4e\104\x20\142\x2e\151\x64\137\x73\155\x74\x3d" . $id_smt, "\x6c\x65\146\164"); goto CeKul; byHar: $this->db->query("\x53\105\124\x20\x53\x51\x4c\137\102\x49\x47\137\x53\x45\114\x45\103\124\x53\x3d\x31"); goto ep6d4; GEKCF: return $query; goto duT6s; Ba93m: $this->db->join("\x63\x62\x74\x5f\163\x65\x73\x69\x5f\x73\x69\x73\167\x61\40\x64", "\x61\56\x69\144\x5f\x73\151\163\167\141\75\144\56\163\x69\x73\167\141\137\151\x64", "\154\x65\x66\164"); goto YeDlW; duT6s: } public function loadPengumuman($id_for) { goto bgZbm; xyyGI: $query = $this->db->get()->result(); goto Pocgw; Ixx_l: $this->db->join("\x6d\141\163\164\x65\x72\x5f\x67\x75\x72\x75\40\x62", "\141\x2e\144\x61\162\x69\75\x62\56\x69\x64\137\147\165\x72\x75", "\154\145\x66\164"); goto hknUu; Pocgw: return $query; goto ZNDgD; QqVC9: $this->db->from("\160\x65\156\x67\165\155\165\155\141\x6e\x20\141"); goto Ixx_l; bgZbm: $this->db->select("\x61\x2e\52\54\x20\142\56\x6e\x61\x6d\141\x5f\147\165\162\x75\54\40\142\56\x66\157\164\x6f"); goto QqVC9; hknUu: $this->db->where("\x6b\x65\x70\x61\144\x61", $id_for); goto xyyGI; ZNDgD: } public function loadJadwalHariIni($id_tp, $id_smt, $id_kelas = null, $id_hari = null) { goto AQtxx; Fota4: $query = $this->db->get()->result(); goto NKSZ6; AQtxx: $this->db->select("\x2a"); goto aUzm4; M1ApH: $this->db->join("\155\141\163\164\x65\162\x5f\155\141\x70\x65\154\x20\x62", "\x62\56\x69\x64\x5f\x6d\141\160\145\154\75\x61\x2e\x69\x64\x5f\155\141\160\145\154", "\154\x65\146\164"); goto GQokK; ZGTlj: $this->db->where("\x61\56\x69\144\137\150\141\162\151", $id_hari); goto Z1Nmf; ahsAQ: if (!($id_hari != null)) { goto mpyBe; } goto ZGTlj; ypT7V: if (!($id_kelas != null)) { goto hTNLT; } goto B4eZ8; Ioo8i: $this->db->where("\x61\x2e\x69\x64\137\163\x6d\164", $id_smt); goto ypT7V; NKSZ6: return $query; goto xEjYW; GQokK: $this->db->where("\141\56\151\144\137\164\x70", $id_tp); goto Ioo8i; B4eZ8: $this->db->where("\x61\x2e\x69\144\137\153\145\154\x61\163", $id_kelas); goto lgDPt; Z1Nmf: mpyBe: goto Fota4; aUzm4: $this->db->from("\153\x65\x6c\141\x73\x5f\152\x61\144\167\141\x6c\137\x6d\141\160\x65\154\x20\x61"); goto M1ApH; lgDPt: hTNLT: goto ahsAQ; xEjYW: } public function getJadwalKbm($id_tp, $id_smt, $id_kelas = null) { goto t6Mjv; mJ7G9: $query = $this->db->get()->row(); goto OC5ar; AF0jD: goto e2PjX; goto vyBln; OC5ar: e2PjX: goto nAIYq; epj4Z: $this->db->where("\x69\x64\137\x74\160", $id_tp); goto SRFJg; vyBln: rxSJP: goto y6byQ; dPqKV: $query = $this->db->get()->result(); goto AF0jD; y6byQ: $this->db->where("\x69\144\x5f\x6b\x65\154\141\163", $id_kelas); goto mJ7G9; d4gkS: $this->db->from("\153\145\154\x61\x73\x5f\152\141\x64\167\x61\x6c\137\x6b\142\x6d"); goto epj4Z; nAIYq: return $query; goto v2kFB; SRFJg: $this->db->where("\x69\144\x5f\163\155\x74", $id_smt); goto sVLTx; sVLTx: if ($id_kelas != null) { goto rxSJP; } goto dPqKV; t6Mjv: $this->db->select("\x2a"); goto d4gkS; v2kFB: } }
