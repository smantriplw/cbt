<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\x45\x50\x41\x54\x48") or exit("\116\x6f\x20\144\x69\162\145\143\164\x20\163\x63\162\x69\160\164\x20\141\x63\143\145\163\163\40\x61\x6c\x6c\x6f\x77\145\144"); class Update extends CI_Controller { function __construct() { goto qcDrO; f11ms: include APPPATH . "\143\x6f\156\x66\x69\147\57\144\x61\164\x61\142\x61\163\145\56\160\150\160"; goto LV9Uo; LV9Uo: $this->load->dbforge(); goto toOFH; cA39R: $this->load->library("\145\156\x63\x72\x79\x70\x74\x69\157\156"); goto F5GZg; toOFH: $this->load->database(); goto cA39R; qcDrO: parent::__construct(); goto f11ms; F5GZg: } public function output_json($data, $encode = true) { goto cXZLA; HcBtr: $this->output->set_content_type("\x61\x70\x70\x6c\151\143\x61\x74\x69\x6f\x6e\x2f\x6a\x73\157\x6e")->set_output($data); goto L4H1V; cXZLA: if (!$encode) { goto W1EdZ; } goto FdPZ6; FdPZ6: $data = json_encode($data); goto XkKT5; XkKT5: W1EdZ: goto HcBtr; L4H1V: } public function index() { goto a_5rh; S9URo: $this->load->view("\x69\156\163\x74\141\154\154\x2f\150\x65\141\144\x65\162", $data); goto wZXsD; a_5rh: $json = file_get_contents("\56\57\141\x73\x73\145\x74\163\x2f\141\x70\160\57\144\x62\x2f\x64\141\x74\141\x62\x61\x73\x65\x2e\152\163\157\156"); goto c3zRt; ydXJP: $json = (array) $json; goto rmEEV; rmEEV: $data["\x6a\163\x6f\156"] = $json; goto S9URo; SF3Pi: $this->load->view("\x69\x6e\163\x74\141\154\x6c\57\x66\x6f\157\x74\145\162"); goto cfve5; wZXsD: $this->load->view("\x69\156\x73\164\141\x6c\154\x2f\x75\160\x64\x61\x74\x65"); goto SF3Pi; c3zRt: $json = json_decode($json); goto ydXJP; cfve5: } function object_to_array($data) { goto WZMFc; y3OKw: CfFmf: goto uILzs; uILzs: return $data; goto V35aU; NFUOA: foreach ($data as $key => $value) { $result[$key] = is_array($data) || is_object($data) ? $this->object_to_array($value) : $value; alNdd: } goto lUHm7; lUHm7: MoK1n: goto iPKFR; Gxhgl: $result = []; goto NFUOA; WZMFc: if (!(is_array($data) || is_object($data))) { goto CfFmf; } goto Gxhgl; iPKFR: return $result; goto y3OKw; V35aU: } public function checkDatabase() { goto h2LiR; Us2be: $currentDb = []; goto NWMwZ; k3PEW: $this->output_json($data); goto PdNfg; FHcXc: v0hUi: goto Ad1QD; lXKIk: $fields = []; goto Us2be; NWMwZ: foreach ($tabless as $table) { goto qfrw5; OwGh6: $retval[$i]->name = $query[$i]->column_name; goto AFB_I; oDdGx: sud07: goto wBeI3; ZuPGB: XK83g: goto cidDy; DRYY3: XB2Na: goto CUusY; VmGuO: $c = count($query); goto oDdGx; wjXL8: if (!($query[$i]->extra != '')) { goto XB2Na; } goto XPTQM; qPcb8: h8V3w: goto DRYY3; RvZ9R: goto h8V3w; goto RffJR; ny_74: zwqni: goto beO2_; qCaop: $i++; goto wEIwB; CUusY: SlB8m: goto wZmH7; j3KYH: if (!($datafld[$i]->name == $query[$i]->column_name)) { goto SlB8m; } goto wjXL8; OiWHy: $i = 0; goto VmGuO; e3ntI: $datafld[$i]->auto_increment = true; goto qPcb8; wBeI3: if (!($i < $c)) { goto fl4Xt; } goto j3KYH; cJHQe: $currentDb = FALSE; goto ZuPGB; cidDy: $query = $query->result_object(); goto gUUYa; ZtnO3: R1BJW: goto qCaop; s7Npl: if (!(($query = $this->db->query($sql)) === FALSE)) { goto XK83g; } goto cJHQe; wEIwB: goto sud07; goto KyFKc; AFB_I: $retval[$i]->extra = $query[$i]->extra; goto ZtnO3; ZM3OM: $datafld[$i]->extra = $query[$i]->extra; goto RvZ9R; qfrw5: $datafld = $this->db->field_data($table); goto zN0gg; aAIKx: $currentDb[$table] = $retval; goto JVnwW; XPTQM: if ($query[$i]->extra == "\141\165\x74\157\x5f\x69\156\x63\162\145\x6d\x65\x6e\164") { goto Gm9tY; } goto ZM3OM; KyFKc: fl4Xt: goto aAIKx; zN0gg: $sql = "\x53\105\114\x45\x43\124\x20\140\x63\157\154\165\x6d\x6e\x5f\x6e\141\155\x65\x60\x2c\40\140\156\x75\155\145\x72\151\x63\x5f\x70\162\x65\143\x69\163\x69\x6f\156\140\54\x20\140\145\x78\x74\162\141\140\54\40\140\151\x73\137\x6e\x75\154\154\x61\x62\154\x65\x60" . "\40\x46\x52\x4f\115\x20\140\151\x6e\x66\x6f\162\155\141\164\x69\x6f\156\x5f\163\143\150\x65\x6d\x61\140\56\140\143\157\154\x75\x6d\x6e\x73\140\x20\127\x48\105\x52\x45\x20\164\141\142\x6c\145\137\163\x63\150\x65\x6d\141\40\x3d\40\x22" . $this->db->database . "\x22\x20\x41\116\x44\x20\x74\141\142\x6c\x65\x5f\156\141\155\145\x20\75\x20\x22" . $table . "\x22"; goto s7Npl; RffJR: Gm9tY: goto e3ntI; gUUYa: $retval = array(); goto OiWHy; JVnwW: $fields[$table] = $datafld; goto ny_74; wZmH7: $retval[$i] = new stdClass(); goto OwGh6; beO2_: } goto FHcXc; jj257: $counts = count($create_tables) + count($add_columns) + count($edit_columns); goto E3_uu; anVxR: $json = json_decode($json); goto YS0kv; U0yqf: foreach ($full_tables as $table) { goto WeaNU; pXHHY: IsDzx: goto UExUP; w5cd8: $create_tables[$table] = $json[$table]; goto CNI99; LHM6_: VMov8: goto pXHHY; UExUP: R47zQ: goto BQr6W; CNI99: goto IsDzx; goto m0qyt; VlB1U: OLifu: goto LHM6_; b3dSn: if (!isset($json[$table])) { goto VMov8; } goto J778O; m0qyt: jcr2_: goto b3dSn; WeaNU: if ($this->db->table_exists($table)) { goto jcr2_; } goto w5cd8; J778O: foreach ($json[$table] as $jtbl) { goto N2VUp; uc1BG: Hs2Qx: goto cVkYt; cVkYt: foreach ($fields[$table] as $ftbl) { goto yxFlK; ioQzo: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto U1OJ2; } goto Ae8va; pXT9z: U1OJ2: goto IRAVI; Ae8va: $edit_columns[$table][] = $jtbl; goto pXT9z; yxFlK: if (!($jtbl->name == $ftbl->name)) { goto bzFHQ; } goto ioQzo; X5Xgh: LMdBY: goto kAYkN; IRAVI: bzFHQ: goto X5Xgh; kAYkN: } goto u_FZR; u_FZR: vbmR5: goto bUhpW; bUhpW: jeKj5: goto yvuEw; yvuEw: ajBvW: goto nly_4; N2VUp: if ($this->db->field_exists($jtbl->name, $table)) { goto Hs2Qx; } goto tHhOi; tHhOi: $add_columns[$table][] = $jtbl; goto zl031; zl031: goto jeKj5; goto uc1BG; nly_4: } goto VlB1U; BQr6W: } goto bI98W; zFYZ2: sort($full_tables); goto Z9q6n; cjkaH: $this->db->db_debug = FALSE; goto OmYH9; YS0kv: $json = (array) $json; goto QTIxc; CBUpt: $full_tables = array_merge($tbl_baru, $tbl_ada); goto td7pO; q8A1t: $add_columns = []; goto ypYVA; OmYH9: $tabless = $this->db->list_tables(); goto lXKIk; ypYVA: $edit_columns = []; goto U0yqf; iKyMc: $tbl_ada = array_keys($fields); goto CBUpt; Z9q6n: $create_tables = []; goto q8A1t; td7pO: $full_tables = array_unique($full_tables); goto zFYZ2; Ad1QD: $json = file_get_contents("\x2e\x2f\x61\x73\163\145\164\163\57\141\x70\160\x2f\x64\x62\57\x64\x61\x74\141\142\x61\163\x65\x2e\152\x73\157\156"); goto anVxR; h2LiR: $db_debug = $this->db->db_debug; goto cjkaH; bI98W: t7oVi: goto jj257; E3_uu: $data = ["\x64\x62" => $fields, "\x63\162\145\x61\x74\145" => $create_tables, "\x6d\x6f\144\151\146\x79" => $edit_columns, "\141\144\x64" => $add_columns, "\x63\157\x75\x6e\164\x73" => $counts, "\x6a\x73\157\x6e" => $json, "\x63\165\x72\162\x65\x6e\164" => $currentDb]; goto k3PEW; QTIxc: $tbl_baru = array_keys($json); goto iKyMc; PdNfg: } public function updateDatabase() { goto TjX5K; HfOc_: $tbl_ada = array_keys($fields); goto t7L9H; ylula: $full_tables = array_unique($full_tables); goto yR7ey; t7L9H: $full_tables = array_merge($tbl_baru, $tbl_ada); goto ylula; wjBQP: $json = file_get_contents("\x2e\57\x61\163\x73\x65\164\x73\x2f\x61\160\160\57\x64\142\x2f\x64\x61\164\x61\142\141\x73\x65\56\x6a\163\x6f\156"); goto T_lQW; hRr2B: foreach ($tabless as $table) { $fields[$table] = $this->db->field_data($table); tblOz: } goto N56ib; U5r3g: $json = (array) $json; goto WlkrQ; T_lQW: $json = json_decode($json); goto U5r3g; YbEIP: echo true; goto qnUIt; TjX5K: $tabless = $this->db->list_tables(); goto hUMy4; tl01K: k96SC: goto YbEIP; WlkrQ: $tbl_baru = array_keys($json); goto HfOc_; hUMy4: $fields = []; goto hRr2B; yR7ey: sort($full_tables); goto BrEHB; BrEHB: foreach ($full_tables as $table) { goto PlMhl; ogjBS: rAs7U: goto Vum3p; uHZ5n: goto rAs7U; goto xsmAp; K6chh: foreach ($json[$table] as $tbl => $jtbl) { goto cR6H2; o_WnO: $this->dbforge->add_field($field); goto MJg8W; h7SA3: uq89X: goto XeU4j; cR6H2: $field = [$jtbl->name => ["\x74\171\x70\145" => $jtbl->type, "\143\x6f\156\x73\x74\162\x61\x69\156\x74" => $jtbl->max_length, "\156\165\154\154" => $jtbl->primary_key == 0]]; goto o_WnO; MJg8W: if (!($jtbl->primary_key == 1)) { goto QVHiT; } goto Nz42U; Nz42U: $this->dbforge->add_key($jtbl->name, true); goto gIUhG; gIUhG: QVHiT: goto h7SA3; XeU4j: } goto JSD1L; kf04K: hljo4: goto uHZ5n; PlMhl: if ($this->db->table_exists($table)) { goto cr4uY; } goto maAVC; Vum3p: Tp3ZT: goto frGqc; nhSd5: avPnL: goto gwRjL; U68jT: $this->dbforge->create_table($table, TRUE); goto ESgho; dyb2E: if (!isset($json[$table])) { goto VP7d6; } goto cXvIs; maAVC: if (!isset($json[$table])) { goto hljo4; } goto K6chh; gwRjL: VP7d6: goto ogjBS; cXvIs: foreach ($json[$table] as $jtbl) { goto jFd1Q; RUvnA: ZZUXZ: goto hT8qf; cPa9a: foreach ($fields[$table] as $ftbl) { goto xLuXd; bKTeA: goto oncrZ; goto kgurl; vd37h: e13kq: goto ciOky; XWC0J: OuviX: goto gfeG1; RJAA6: rNaOZ: goto Z_CLa; F2Ldz: OXjGu: goto cSGfd; MFG80: goto OXjGu; goto LW8jx; bsXnY: goto rNaOZ; goto vd37h; hTTRu: if (!($jtbl->default != $ftbl->default || $jtbl->max_length != $ftbl->max_length || $jtbl->type != $ftbl->type)) { goto OuviX; } goto akw_9; cSGfd: $this->dbforge->modify_column($table, $field); goto lUDzk; PxY1_: if ($jtbl->auto_increment == true) { goto e13kq; } goto PMfef; eWa3V: $this->dbforge->modify_column($table, $field); goto bKTeA; zxqOB: $field = array($jtbl->name . "\40\144\141\164\x65\164\151\x6d\145\x20\x64\x65\146\x61\165\x6c\164\x20\x63\x75\x72\162\145\x6e\x74\137\164\x69\x6d\145\x73\164\141\x6d\160" . $onUpdate); goto F2Ldz; Z_CLa: $this->dbforge->add_key($jtbl->name, true); goto eWa3V; jYPNx: $field = array($jtbl->name => array("\x74\x79\x70\x65" => $jtbl->type, "\143\x6f\x6e\x73\164\162\x61\151\x6e\x74" => $jtbl->max_length, "\144\145\x66\141\165\154\x74" => $jtbl->default)); goto MFG80; LW8jx: d82tv: goto USQdi; kgurl: RLAJF: goto U2Yb6; PMfef: $field = array($jtbl->name => array("\164\x79\160\x65" => $jtbl->type, "\143\157\156\163\164\x72\141\151\156\x74" => $jtbl->max_length, "\156\165\x6c\x6c" => false)); goto bsXnY; USQdi: $onUpdate = isset($jtbl->extra) ? "\40" . strtolower($jtbl->extra) : ''; goto zxqOB; U2Yb6: if ($jtbl->default == "\x43\125\122\122\105\116\124\137\124\111\115\105\x53\124\x41\115\120") { goto d82tv; } goto jYPNx; ciOky: $field = array($jtbl->name => array("\164\171\x70\x65" => $jtbl->type, "\143\157\x6e\x73\164\x72\141\x69\156\164" => $jtbl->max_length, "\x6e\x75\x6c\x6c" => false, "\x61\x75\x74\157\137\151\156\143\162\145\x6d\x65\156\164" => true)); goto RJAA6; gfeG1: CnTRL: goto I1RWN; akw_9: if ($jtbl->primary_key == 0) { goto RLAJF; } goto PxY1_; I1RWN: ecamm: goto XADZE; lUDzk: oncrZ: goto XWC0J; xLuXd: if (!($jtbl->name == $ftbl->name)) { goto CnTRL; } goto hTTRu; XADZE: } goto EMObU; cmU0a: $field = array($jtbl->name => array("\x74\171\160\145" => $jtbl->type, "\143\x6f\156\x73\x74\x72\x61\x69\x6e\x74" => $jtbl->max_length, "\144\x65\x66\141\165\x6c\x74" => $jtbl->default)); goto RY62I; hT8qf: goto ffW7o; goto w8Eso; jFd1Q: if ($this->db->field_exists($jtbl->name, $table)) { goto z2sMj; } goto Vzh68; moZvI: goto ZZUXZ; goto rfvL0; hWAVW: ffW7o: goto k_yoW; rfvL0: PoTw5: goto cmU0a; EMObU: tbpmS: goto hWAVW; OONZp: $this->dbforge->add_column($table, $field); goto moZvI; k_yoW: c0moT: goto BBbkN; RY62I: $this->dbforge->add_column($table, $field); goto RUvnA; I3niu: $field = array($jtbl->name => array("\164\171\x70\145" => $jtbl->type, "\x63\x6f\x6e\x73\x74\162\x61\151\156\x74" => $jtbl->max_length, "\156\x75\x6c\154" => false)); goto SrqhM; SrqhM: $this->dbforge->add_key($jtbl->name, true); goto OONZp; Vzh68: if ($jtbl->primary_key == 0) { goto PoTw5; } goto I3niu; w8Eso: z2sMj: goto cPa9a; BBbkN: } goto nhSd5; xsmAp: cr4uY: goto dyb2E; ESgho: $this->db->query("\101\114\x54\x45\122\x20\124\101\102\x4c\x45\40\40\x60" . $table . "\140\40\105\x4e\x47\111\116\x45\40\x3d\40\111\156\x6e\x6f\x44\x42"); goto kf04K; JSD1L: sjb35: goto U68jT; frGqc: } goto tl01K; N56ib: qv_qj: goto wjBQP; qnUIt: } public function checkDb() { goto CEZ2D; gg5a2: $edit_columns = []; goto qdptM; TZKqq: $create_tables = []; goto zDqVf; eo0U9: $tabless = $this->db->list_tables(); goto wkHJl; wkHJl: $fields = []; goto XeefQ; D6x2n: $this->output_json($data); goto YPE9m; KZagr: $json = file_get_contents("\x2e\57\x61\163\163\145\164\163\x2f\141\x70\x70\x2f\144\x62\57\x64\141\164\141\142\x61\163\145\56\152\x73\x6f\x6e"); goto BzEbw; O0jf0: $tbl_ada = array_keys($fields); goto kxTei; CEZ2D: $db_debug = $this->db->db_debug; goto drday; b1sja: foreach ($full_tables as $table) { goto YTV3a; a2COo: $pri = ''; goto PIdTM; pPpWV: b9FOP: goto aTSOG; Dbg_3: $script = "\x43\122\105\x41\124\105\x20\124\x41\102\x4c\105\x20\140" . $table . "\x60\40\50"; goto a2COo; KTCyg: $create_tables[] = $json[$table]; goto Dbg_3; Xqsvn: IXLoX: goto ByFE8; NTIdU: if (!isset($json[$table])) { goto o5Tdg; } goto iPXUZ; BeZE5: VONKJ: goto L3HqU; mRlRO: foreach ($json[$table]->columns as $jtbl) { goto ZoAZm; veMXB: $extra = $jtbl->extra == '' ? '' : "\40" . strtoupper($jtbl->extra); goto NrfCM; cCRYP: $length = "\50" . $jtbl->max_length . "\51"; goto CBMol; qJf_7: goto SqdJW; goto Ji8Br; Ji8Br: qhFXU: goto CJ7CL; G3uLa: $nullable = $jtbl->nullable == "\x4e\x4f" ? "\x20\116\x4f\124\40\x4e\x55\x4c\114" : ''; goto SvAOH; jpTBn: $extra .= "\x20\x50\x52\x49\x4d\x41\x52\131\x20\x4b\x45\x59"; goto TKgWH; G1AkY: $length = "\x28" . ($jtbl->max_length + 1) . "\51"; goto p8Jgq; qidQC: $length = ''; goto qJf_7; SvAOH: $default = $jtbl->default == null ? '' : "\x20\104\x45\106\x41\x55\114\124\40" . $jtbl->default; goto veMXB; sMYTb: $length = ''; goto wfJR1; NrfCM: if (!(strtoupper($extra) == "\x20\x41\x55\x54\117\137\111\x4e\103\x52\x45\115\x45\116\124")) { goto zocDz; } goto jpTBn; gwmdB: if ($jtbl->max_length == null) { goto D2g96; } goto efKub; yg4aB: D2g96: goto qidQC; HIl1N: Gn3jB: goto edomm; ZoAZm: if ($this->db->field_exists($jtbl->name, $table)) { goto Gn3jB; } goto cCDr5; EhPP6: vK1Ie: goto LN3Nb; p8Jgq: kIqm9: goto BG8IT; CJ7CL: if ($jtbl->type == "\151\156\x74") { goto RsSjC; } goto cCRYP; YHRro: array_push($add_column, "\101\x44\x44\40\x60" . $jtbl->name . "\x60\x20" . $jtbl->type . $length . $nullable . $default . $extra . $comment); goto HIl1N; wfJR1: goto SqdJW; goto yg4aB; efKub: if ($jtbl->type != "\x6c\x6f\156\147\164\145\170\164" && $jtbl->type != "\155\x65\144\x69\x75\155\164\145\x78\x74" && $jtbl->type != "\x74\x65\170\164") { goto qhFXU; } goto sMYTb; TKgWH: zocDz: goto i1VT0; cCDr5: $add_columns[$table][] = $jtbl; goto gwmdB; edomm: foreach ($fields[$table]->columns as $ftbl) { goto Vbl0o; nb6_c: $jtbl->extra = str_replace("\50\51", '', $jtbl->extra); goto LKo0A; bYIux: kir_j: goto UTV3L; I2hQG: if (!($jtbl->primary != $ftbl->primary)) { goto JL6aH; } goto UUUwP; UUUwP: $edit_columns[$table][$jtbl->name]["\160\162\151\155\x61\x72\171"] = $jtbl->primary; goto kaqPo; h9mc8: lYVxD: goto BAho3; bGGBB: AeCfN: goto FAkw8; r06WA: $ftbl->default = str_replace("\x28\51", '', $ftbl->default); goto dYTTb; Ui1Om: gkaJ0: goto YpQLv; dYTTb: $ftbl->default = strtoupper($ftbl->default); goto IdsGR; p_3Tw: $ftbl->extra = str_replace("\50\51", '', $ftbl->extra); goto kMkAH; pcP6n: if (!($jtbl->comment != $ftbl->comment)) { goto UjIJY; } goto PHhiG; dcZ2j: $jtbl->default = str_replace("\x28\x29", '', $jtbl->default); goto YoavG; BAho3: JL6aH: goto yejtw; EBtrF: $nullable = $jtbl->nullable == "\116\117" ? "\40\116\117\124\x20\116\125\x4c\x4c" : ''; goto rWydf; FAkw8: if (!($jtbl->extra != $ftbl->extra)) { goto i6tGk; } goto w03PT; ZS8eB: array_push($modif_column, "\x41\x44\x44\40\120\x52\111\x4d\x41\122\131\40\113\105\131\x20\50\140" . $jtbl->name . "\x60\51"); goto f3H09; yejtw: if (!($jtbl->col_type != $ftbl->col_type || $jtbl->nullable != $ftbl->nullable || $jtbl->default != $ftbl->default || $jtbl->extra != $ftbl->extra || $jtbl->comment != $ftbl->comment)) { goto YgHMo; } goto EBtrF; rWydf: $default = $jtbl->default == null ? '' : "\40\104\x45\x46\101\125\114\124\x20" . $jtbl->default; goto HShxs; Wht3F: if (!($jtbl->col_type != $ftbl->col_type)) { goto gkaJ0; } goto wCaIQ; wCaIQ: $edit_columns[$table][$jtbl->name]["\143\157\154\137\164\x79\x70\145"] = $jtbl->col_type; goto Ui1Om; tvruW: YgHMo: goto bYIux; UTV3L: MupcN: goto nBWzV; f3H09: goto lYVxD; goto g81uQ; CSSBp: $edit_columns[$table][$jtbl->name]["\156\x75\154\x6c\141\x62\154\x65"] = $jtbl->nullable; goto vrrO3; g1iZp: ALiv8: goto GjfoE; buRJm: if (!($jtbl->default != $ftbl->default)) { goto ALiv8; } goto UhOBK; ImJyb: goto lYVxD; goto aBw0V; vrrO3: x3dlV: goto z3U2T; MGnSF: $comment = $jtbl->comment == '' ? '' : "\x20\103\117\115\x4d\105\116\124\x20\x27" . $jtbl->comment . "\x27"; goto MxI18; Vbl0o: if (!($jtbl->name == $ftbl->name)) { goto kir_j; } goto Wht3F; MxI18: array_push($modif_column, "\115\117\104\x49\106\131\40\x60" . $jtbl->name . "\140\x20" . $jtbl->col_type . $nullable . $default . $extra . $comment); goto tvruW; UhOBK: $edit_columns[$table][$jtbl->name]["\x64\x65\x66\141\165\154\x74"] = $jtbl->default; goto g1iZp; pKaYQ: if (!($ftbl->default != null)) { goto r8Ntm; } goto r06WA; YoavG: $jtbl->default = strtoupper($jtbl->default); goto QFXO1; REKIF: UjIJY: goto I2hQG; QFXO1: Jp87Y: goto pKaYQ; z3U2T: if (!($jtbl->default != null)) { goto Jp87Y; } goto dcZ2j; HShxs: $extra = $jtbl->extra == '' ? '' : "\x20" . strtoupper($jtbl->extra); goto MGnSF; PHhiG: $edit_columns[$table][$jtbl->name]["\x63\157\x6d\x6d\145\x6e\164"] = $jtbl->comment; goto REKIF; w03PT: $edit_columns[$table][$jtbl->name]["\145\170\164\162\x61"] = $jtbl->extra; goto EgR7E; GjfoE: if (!($jtbl->extra != null)) { goto uK8bm; } goto nb6_c; IdsGR: r8Ntm: goto buRJm; a5W8Q: uK8bm: goto iFZXu; kaqPo: if (strtolower($jtbl->primary) == "\x70\162\x69") { goto HXUqA; } goto ntTGn; iFZXu: if (!($ftbl->extra != null)) { goto AeCfN; } goto p_3Tw; YpQLv: if (!($jtbl->nullable != $ftbl->nullable)) { goto x3dlV; } goto CSSBp; kMkAH: $ftbl->extra = strtoupper($ftbl->extra); goto bGGBB; LKo0A: $jtbl->extra = strtoupper($jtbl->extra); goto a5W8Q; Hu7sv: array_push($modif_column, "\x41\x44\x44\x20\x55\x4e\111\x51\125\105\x20\113\105\x59\40\140" . $jtbl->name . "\x60\40\x28\x60" . $jtbl->name . "\x60\51"); goto h9mc8; aBw0V: HXUqA: goto ZS8eB; ntTGn: if (strtolower($jtbl->primary) == "\165\156\151") { goto dw2mi; } goto ImJyb; EgR7E: i6tGk: goto pcP6n; g81uQ: dw2mi: goto Hu7sv; nBWzV: } goto Vf1Vg; i1VT0: $comment = $jtbl->comment == '' ? '' : "\x20\103\x4f\115\x4d\x45\x4e\x54\40\47" . $jtbl->comment . "\47"; goto YHRro; NnhIb: RsSjC: goto G1AkY; CBMol: goto kIqm9; goto NnhIb; Vf1Vg: ne9cy: goto EhPP6; BG8IT: SqdJW: goto G3uLa; LN3Nb: } goto Xqsvn; Wfcgh: D3ejb: goto KTCyg; EvVay: $script_create_column[$table] = "\x41\x4c\124\105\122\40\124\x41\x42\x4c\x45\40\x60" . $table . "\x60\x20" . implode("\54\x20", $add_column) . "\73"; goto LxmK_; QVvJC: $script .= $pri . "\x29\40\x45\x4e\107\111\116\x45\75\111\156\x6e\157\104\x42\x20\104\105\x46\x41\x55\x4c\x54\40\x43\110\x41\122\123\105\124\x3d\165\164\146\x38\155\x62\x34\73"; goto PlFTv; h0Pzo: if (!(count($modif_column) > 0)) { goto VONKJ; } goto RwGMX; LxmK_: m9ujR: goto h0Pzo; L3HqU: o5Tdg: goto I9iJJ; aw8Pb: X2yVl: goto QVvJC; tOYo9: $modif_column = []; goto mRlRO; YTV3a: if (!$this->db->table_exists($table)) { goto D3ejb; } goto NTIdU; PlFTv: $script_create_table[$table] = $script; goto pPpWV; aTSOG: cGnpm: goto AQaD1; iPXUZ: $add_column = []; goto tOYo9; RwGMX: $script_edit_column[$table] = "\x41\114\124\105\122\40\124\101\x42\x4c\105\x20\x60" . $table . "\x60\40" . implode("\54\x20", $modif_column) . "\73"; goto BeZE5; PIdTM: foreach ($json[$table]->columns as $column) { goto m40Jl; m40Jl: if ($column->max_length == null) { goto WzHyF; } goto c0tgP; YDyjj: goto lVF2D; goto XG2Fg; Pd8sl: WzHyF: goto Dzryn; mwJNm: $length = ''; goto U9p7k; QO2iF: $pri .= $column->primary != '' ? "\x50\122\111\x4d\x41\x52\x59\x20\x4b\105\x59\40\50\x60" . $column->name . "\x60\x29" : ''; goto JZZLd; t9OQ4: $comment = $column->comment == '' ? '' : "\x20\x43\117\x4d\115\105\116\124\x20\x27" . $column->comment . "\47"; goto igcN_; Dzryn: $length = ''; goto YDyjj; JZZLd: W2jnF: goto ByEV4; TDr4d: $nullable = $column->nullable == "\x4e\x4f" ? "\40\116\x4f\x54\x20\116\x55\114\x4c" : ''; goto qQtJn; XG2Fg: H19wq: goto HNqj9; U9p7k: goto lVF2D; goto Pd8sl; HNqj9: if ($column->type == "\151\x6e\x74") { goto uwNYv; } goto D0HoZ; igcN_: $script .= "\140" . $column->name . "\140\x20" . $column->type . $length . $nullable . $default . $extra . $comment . "\54\x20"; goto QO2iF; dM9ou: goto dMy7o; goto wSTNU; tJizG: dMy7o: goto xo76b; Bem3y: $length = "\50" . ($column->max_length + 1) . "\51"; goto tJizG; qQtJn: $default = $column->default == null ? '' : "\40\104\x45\106\101\x55\x4c\x54\x20" . $column->default; goto RAkoO; c0tgP: if ($column->type != "\x6c\157\x6e\x67\164\x65\x78\x74" && $column->type != "\155\x65\144\x69\x75\155\164\145\170\164" && $column->type != "\x74\145\x78\x74") { goto H19wq; } goto mwJNm; D0HoZ: $length = "\50" . $column->max_length . "\51"; goto dM9ou; RAkoO: $extra = $column->extra == '' ? '' : "\x20" . strtoupper($column->extra); goto t9OQ4; wSTNU: uwNYv: goto Bem3y; xo76b: lVF2D: goto TDr4d; ByEV4: } goto aw8Pb; ByFE8: if (!(count($add_column) > 0)) { goto m9ujR; } goto EvVay; I9iJJ: goto b9FOP; goto Wfcgh; AQaD1: } goto Iqqzz; XeefQ: foreach ($tabless as $table) { goto zQ83G; YFRGq: $i++; goto alXAU; AX1rA: $retval[$i]->type = $query[$i]->data_type; goto W1x_o; uMyCs: CMUTu: goto OwabH; bzPMB: $retval[$i]->max_length = $query[$i]->character_maximum_length > 0 ? $query[$i]->character_maximum_length : $query[$i]->numeric_precision; goto Jnidg; n2Wq5: $retval[$i]->nullable = $query[$i]->is_nullable; goto xYQW_; DEjbw: $retval[$i]->extra = $query[$i]->extra; goto n2Wq5; W1x_o: $retval[$i]->collation = $query[$i]->collation_name; goto bzPMB; zXK0u: $retval[$i]->col_type = $query[$i]->column_type; goto AX1rA; N4JwH: $query = $query->result_object(); goto pNVVJ; xMGW6: ZbdaF: goto soDob; EAw6G: Y_Rrp: goto YFRGq; QZRrs: $retval[$i]->comment = $query[$i]->column_comment; goto DEjbw; txYIB: RsC_I: goto g7Ltg; jIrVs: ZqAzV: goto N4JwH; zQ83G: $sql = "\123\x45\114\x45\x43\x54\40\x60\x63\x6f\154\x75\155\156\x5f\x6e\141\x6d\x65\140\54\40\x60\x63\x6f\154\165\x6d\x6e\137\x74\171\160\145\140\x2c\40\x60\143\x6f\x6c\x6c\141\164\x69\x6f\156\137\156\x61\x6d\145\x60\x2c\x20\x60\x64\141\164\x61\x5f\164\171\x70\x65\140\54\40\140\143\x68\141\x72\141\143\x74\x65\162\x5f\155\141\x78\151\x6d\x75\x6d\137\154\145\x6e\x67\x74\150\x60\54\40\x60\156\165\x6d\145\x72\151\x63\x5f\x70\162\x65\x63\151\163\x69\x6f\x6e\140\54" . "\x20\140\143\x6f\154\x75\x6d\156\x5f\x64\145\146\141\x75\154\164\140\x2c\x20\140\143\x6f\154\x75\x6d\156\x5f\153\x65\171\x60\54\40\x60\x63\x6f\154\x75\155\x6e\x5f\143\157\x6d\155\145\x6e\164\140\54\40\x60\x65\x78\164\x72\x61\x60\54\40\140\151\x73\137\x6e\165\154\x6c\141\142\x6c\x65\140\15\xa\11\11\x9\x46\122\x4f\115\40\x60\x69\156\x66\157\162\x6d\x61\x74\151\x6f\x6e\x5f\163\x63\150\x65\155\x61\x60\56\x60\143\157\154\165\x6d\x6e\163\x60\x20\x57\x48\x45\x52\x45\x20\x74\x61\142\154\145\x5f\163\x63\x68\x65\x6d\x61\40\75\40\42" . $this->db->database . "\x22\x20\101\x4e\x44\x20\164\141\142\x6c\x65\137\x6e\141\x6d\x65\40\75\40\x22" . $table . "\x22"; goto DF3nd; xYQW_: $retval[$i]->primary = $query[$i]->column_key; goto EAw6G; DF3nd: if (!(($query = $this->db->query($sql)) === FALSE)) { goto ZqAzV; } goto zc40h; Jnidg: $retval[$i]->default = $query[$i]->column_default; goto QZRrs; pNVVJ: $retval = array(); goto Otilv; OwabH: if (!($i < $c)) { goto RsC_I; } goto M53bO; alXAU: goto CMUTu; goto txYIB; g7Ltg: $fields[$table] = (object) ["\x74\141\142\154\145\137\156\x61\x6d\145" => $table, "\143\x6f\154\x75\155\x6e\163" => $retval]; goto xMGW6; jWe3C: $c = count($query); goto uMyCs; JfcwB: $retval[$i]->name = $query[$i]->column_name; goto zXK0u; M53bO: $retval[$i] = new stdClass(); goto JfcwB; zc40h: $fields = FALSE; goto jIrVs; Otilv: $i = 0; goto jWe3C; soDob: } goto pFfjL; Iqqzz: WQ8p8: goto OTVFB; zDqVf: $script_create_table = []; goto icn6B; pFfjL: wW7wk: goto KZagr; kxTei: $full_tables = array_merge($tbl_seharusnya, $tbl_ada); goto U2Skg; OTVFB: $this->db->db_debug = $db_debug; goto iYcU6; bDbVb: sort($full_tables); goto TZKqq; U2Skg: $full_tables = array_unique($full_tables); goto bDbVb; icn6B: $add_columns = []; goto iUoO1; drday: $this->db->db_debug = FALSE; goto eo0U9; iQyPi: $json = (array) $json; goto fdfwD; fdfwD: $tbl_seharusnya = array_keys($json); goto O0jf0; qdptM: $script_edit_column = []; goto b1sja; BzEbw: $json = json_decode($json); goto iQyPi; iUoO1: $script_create_column = []; goto gg5a2; iYcU6: $data = ["\146\x69\145\154\x64\x73" => $fields, "\x63\x72\145\x61\164\x65\x5f\x74\141\142\x6c\x65\163" => $create_tables, "\x63\157\x75\156\x74\137\164\x62\154" => count($create_tables), "\141\x64\x64\137\x63\x6f\154\x75\155\156\163\137\164\x6f\137\164\141\142\154\145" => $add_columns, "\143\157\x75\156\x74\137\x63\x6f\x6c" => count($add_columns), "\145\144\x69\x74\137\x63\157\154\x75\x6d\156\163" => $edit_columns, "\x63\157\165\156\164\137\x6d\x6f\x64" => count($edit_columns), "\141\144\144\x5f\164\142\154" => $this->encryption->encrypt(json_encode($script_create_table)), "\141\144\x64\137\143\x6f\x6c" => $this->encryption->encrypt(json_encode($script_create_column)), "\x6d\157\x64\137\143\x6f\x6c" => $this->encryption->encrypt(json_encode($script_edit_column))]; goto D6x2n; YPE9m: } public function createTable() { goto cbWZA; cbWZA: $scripts = $this->input->post("\x64\x61\164\141", true); goto FMyXO; PK5I4: $data["\x6d\x65\x73\x73\x61\147\145"] = "\125\x70\x64\141\164\x65\40\153\157\x6c\157\x6d"; goto qh20r; FMyXO: str_replace("\x25\x32\x42", "\53", $scripts); goto clgeE; QlYXa: $queries = ''; goto uvU2i; qh20r: $this->output_json($data); goto Ap9Du; clgeE: sleep(1); goto BdOy9; xclLp: $data["\163\x75\143\x63\145\x73\163"] = $this->runQuery($queries); goto PK5I4; uvU2i: foreach ($scripts as $script) { $queries .= $script; Plx6e: } goto oYD8d; BdOy9: $scripts = json_decode($this->encryption->decrypt($scripts)); goto QlYXa; oYD8d: vt2Hz: goto xclLp; Ap9Du: } public function createColumn() { goto VFM12; GBxre: sleep(1); goto e7dlt; RHi15: $data["\x6d\x65\x73\163\141\147\x65"] = "\x4d\157\x64\x69\146\x79\x20\153\157\154\x6f\155"; goto wKtZC; e7dlt: $scripts = json_decode($this->encryption->decrypt($scripts)); goto Hl_or; YE3rj: str_replace("\45\62\102", "\53", $scripts); goto GBxre; VFM12: $scripts = $this->input->post("\144\141\164\141", true); goto YE3rj; Hl_or: $queries = ''; goto D5i2P; fAJYf: ruP6z: goto NLQr5; dfttd: S75df: goto xYPfD; D5i2P: foreach ($scripts as $script) { $queries .= $script; QJ7wt: } goto fAJYf; xYPfD: $data["\163\165\x63\143\145\x73\x73"] = $this->runQuery($queries); goto RHi15; NLQr5: if (!(strpos("\140\165\151\144\140", $queries) !== false)) { goto S75df; } goto M1ruU; M1ruU: $this->updateUID(); goto dfttd; wKtZC: $this->output_json($data); goto LEB0b; LEB0b: } public function editColumn() { goto wx9UQ; OhEQW: $scripts = json_decode($this->encryption->decrypt($scripts)); goto PykIw; QpB4Y: $data["\x6d\x65\163\163\x61\x67\x65"] = "\125\160\x64\x61\164\145\x20\x73\145\x6c\x65\163\141\151"; goto mjgOU; T51PA: foreach ($scripts as $script) { $queries .= $script; Onpf7: } goto Xap8v; VYHzb: $data["\x73\x75\x63\143\x65\x73\163"] = $this->runQuery($queries); goto QpB4Y; Pu13j: str_replace("\x25\x32\x42", "\53", $scripts); goto zPA2D; mjgOU: $this->output_json($data); goto Uc6Yz; PykIw: $queries = ''; goto T51PA; wx9UQ: $scripts = $this->input->post("\144\141\164\x61", true); goto Pu13j; zPA2D: sleep(1); goto OhEQW; Xap8v: P7FwO: goto VYHzb; Uc6Yz: } function runQuery($script) { goto I1jof; sHBTW: $hostuser = $this->db->username; goto p0_0g; wiksm: xOSbF: goto eXRvX; I1jof: $hostname = $this->db->hostname; goto sHBTW; uens5: return true; goto YA2D9; hxcYd: if (!mysqli_connect_errno()) { goto xOSbF; } goto Ap29S; VldRs: $database = $this->db->database; goto Y6Dch; p0_0g: $hostpass = $this->db->password; goto VldRs; eXRvX: $mysqli->multi_query($script); goto YxSCq; Ap29S: return mysqli_connect_errno(); goto wiksm; YxSCq: $mysqli->close(); goto uens5; Y6Dch: $mysqli = new mysqli($hostname, $hostuser, $hostpass, $database); goto hxcYd; YA2D9: } function updateUID() { goto j3F2f; s0uG6: $siswas = $this->db->get("\155\141\x73\164\x65\x72\x5f\163\x69\163\x77\141")->result(); goto uvLbN; ow8LX: return $this->db->update_batch("\155\x61\x73\x74\x65\162\x5f\x73\x69\x73\x77\x61", $input, "\151\x64\x5f\163\151\163\x77\141"); goto dJ_l_; dgWk4: SXicH: goto ow8LX; uvLbN: $input = array(); goto BUb01; j3F2f: $this->load->library("\125\165\151\x64", "\165\165\151\x64"); goto s0uG6; BUb01: foreach ($siswas as $siswa) { $input[] = array("\x69\x64\137\163\x69\x73\167\x61" => $siswa->id_siswa, "\165\151\144" => $this->uuid->v4()); Dgnss: } goto dgWk4; dJ_l_: } function make_base() { } }
