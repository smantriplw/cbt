<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto x2AfK; x2AfK: if (defined("\x42\x41\x53\105\x50\x41\124\110")) { goto BvIOL; } goto D3RQK; D3RQK: exit("\x4e\x6f\40\144\151\162\145\x63\x74\40\x73\x63\x72\x69\x70\x74\x20\x61\x63\x63\145\163\163\x20\x61\154\154\x6f\167\145\144"); goto tGCEQ; tGCEQ: BvIOL: goto CeghK; CeghK: class Compare extends CI_Controller { function __construct() { goto KDtw4; tTs2x: $this->DB1 = $this->load->database("\x6d\x61\151\x6e\x5f\x67\141\162\165\144\141", TRUE); goto GGzft; hoQE5: $this->CHARACTER_SET = "\x75\x74\146\x38\x20\103\x4f\x4c\x4c\101\x54\105\40\x75\164\146\x38\x5f\147\x65\156\x65\x72\141\x6c\137\143\151"; goto tTs2x; GGzft: $this->DB2 = $this->load->database("\154\151\166\145", TRUE); goto DYgWv; KDtw4: parent::__construct(); goto hoQE5; DYgWv: } function index() { goto Y_l3m; s_1FZ: goto qgxx6; goto zryeL; yAZY0: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\xa"; q4p7p: } goto aTQYZ; aTQYZ: VLdds: goto t1AaA; f1805: $tables_to_drop = array_diff($live_tables, $development_tables); goto ktzJp; pLYxz: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\144\162\157\x70")) : array(); goto ES8m3; ktzJp: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\x63\x72\x65\x61\x74\x65")) : array(); goto pLYxz; SikAF: echo "\74\150\62\x3e\124\x68\x65\x20\x64\141\x74\x61\x62\x61\x73\x65\x20\151\163\x20\x6f\x75\164\40\157\146\x20\123\171\156\x63\41\74\x2f\x68\x32\76\12"; goto lS8M9; Y_l3m: $sql_commands_to_run = array(); goto DlE76; CDPA3: echo "\74\160\162\145\40\x73\x74\x79\154\145\x3d\x27\x70\x61\x64\x64\151\x6e\147\72\40\62\60\160\170\x3b\x20\142\141\143\153\x67\x72\157\x75\156\144\x2d\x63\x6f\x6c\x6f\x72\72\40\43\106\106\x46\101\106\60\x3b\x27\76\12"; goto yAZY0; wIpaE: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto TKvja; zryeL: sW8J_: goto SikAF; t1AaA: echo "\x3c\x70\162\145\76\12"; goto SSooK; DlE76: $development_tables = $this->DB1->list_tables(); goto jcanL; OqJvD: echo "\74\x68\x32\76\124\150\x65\40\144\x61\x74\141\142\141\x73\145\x20\x61\160\x70\145\141\162\x73\x20\x74\x6f\x20\142\145\40\x75\x70\x20\x74\x6f\40\x64\x61\164\145\x3c\57\x68\x32\76\12"; goto s_1FZ; lS8M9: echo "\x3c\160\x3e\124\150\145\x20\x66\157\x6c\154\x6f\x77\151\x6e\147\x20\x53\x51\114\40\143\x6f\x6d\155\x61\156\x64\163\40\156\145\145\144\40\164\157\x20\142\x65\x20\x65\x78\145\x63\165\x74\145\144\x20\x74\x6f\40\x62\x72\x69\x6e\147\x20\164\150\x65\x20\114\151\x76\145\x20\x64\141\x74\x61\142\x61\x73\x65\x20\x74\141\x62\x6c\x65\163\x20\165\x70\x20\164\157\40\144\141\x74\145\72\x20\74\x2f\x70\76\12"; goto CDPA3; SSooK: qgxx6: goto X9ONd; ES8m3: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto Qm714; jcanL: $live_tables = $this->DB2->list_tables(); goto Rkv7J; Qm714: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto wIpaE; Rkv7J: $tables_to_create = array_diff($development_tables, $live_tables); goto f1805; TKvja: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto sW8J_; } goto OqJvD; X9ONd: } function manage_tables($tables, $action) { goto qzApp; fjVGH: foreach ($tables as $table) { goto D_1Rx; GdhMC: YeeTM: goto wBVkh; D_1Rx: $query = $this->DB1->query("\x53\110\x4f\x57\x20\103\x52\x45\x41\x54\x45\40\124\x41\102\x4c\x45\x20\x60{$table}\x60\40\55\55\40\x63\162\x65\141\164\145\40\164\x61\x62\154\145\163"); goto Pn_tT; Pn_tT: $table_structure = $query->row_array(); goto XoEk0; XoEk0: $sql_commands_to_run[] = $table_structure["\103\x72\145\x61\x74\145\x20\124\141\x62\154\145"] . "\x3b"; goto GdhMC; wBVkh: } goto QGnyq; cUqmn: if (!($action == "\143\x72\x65\141\x74\145")) { goto DLmMp; } goto fjVGH; N8zR2: H8WiM: goto kdF3s; jQ0KE: DLmMp: goto YnX8S; YnX8S: if (!($action == "\x64\x72\x6f\160")) { goto K8_0A; } goto dTwYU; QGnyq: Kbmxp: goto jQ0KE; Vn6xv: return $sql_commands_to_run; goto JIDzF; qzApp: $sql_commands_to_run = array(); goto cUqmn; dTwYU: foreach ($tables as $table) { $sql_commands_to_run[] = "\x44\x52\x4f\x50\x20\x54\x41\x42\x4c\x45\x20{$table}\x3b"; MXfjU: } goto N8zR2; kdF3s: K8_0A: goto Vn6xv; JIDzF: } function compare_table_structures($development_tables, $live_tables) { goto JOcAd; Y4TS9: foreach ($live_tables as $table) { goto mMYd2; mMYd2: $query = $this->DB2->query("\123\110\x4f\127\40\103\x52\x45\x41\124\105\x20\x54\101\x42\x4c\105\40\x60{$table}\x60\x20\x2d\x2d\40\x6c\x69\x76\145"); goto mdAAW; ZGc5V: $live_table_structures[$table] = $table_structure["\103\162\145\x61\x74\145\40\124\x61\142\154\145"]; goto EPHf2; mdAAW: $table_structure = $query->row_array(); goto ZGc5V; EPHf2: QaCCb: goto CW4G2; CW4G2: } goto nkwv6; f87Ag: foreach ($development_tables as $table) { goto hs81w; eFEpT: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto yoo8d; yuolu: $tables_need_updating[] = $table; goto zWN9z; zWN9z: I_mIC: goto ju6gg; ju6gg: eKeMZ: goto wZg9W; yoo8d: if (!($this->count_differences($development_table, $live_table) > 0)) { goto I_mIC; } goto yuolu; hs81w: $development_table = $development_table_structures[$table]; goto eFEpT; wZg9W: } goto AonZE; ysvgb: $live_table_structures = $development_table_structures = array(); goto mM1Vj; bWw_i: LBFSv: goto Y4TS9; JOcAd: $tables_need_updating = array(); goto ysvgb; mM1Vj: foreach ($development_tables as $table) { goto ZoGsg; Pk8Nb: hnpbI: goto oEyDT; Q7rqq: $development_table_structures[$table] = $table_structure["\103\162\145\141\x74\145\x20\x54\141\x62\x6c\145"]; goto Pk8Nb; Zukan: $table_structure = $query->row_array(); goto Q7rqq; ZoGsg: $query = $this->DB1->query("\123\110\117\x57\40\x43\x52\x45\x41\x54\x45\x20\124\x41\102\x4c\105\40\x60{$table}\x60\x20\55\x2d\x20\x64\x65\166"); goto Zukan; oEyDT: } goto bWw_i; nkwv6: ulSXh: goto f87Ag; AonZE: m2_P6: goto IW1ry; IW1ry: return $tables_need_updating; goto Hix8t; Hix8t: } function count_differences($old, $new) { goto jZFFi; Md7Ba: $old = trim(preg_replace("\x2f\x5c\x73\x2b\x2f", '', $old)); goto kO7qO; lKN4e: $differences++; goto Xj624; l0qwL: goto jBmQi; goto aEv89; vzESf: $new = explode("\40", $new); goto T3dYJ; a_trC: $i = 0; goto ghl77; f9rKq: if (!($i < $length)) { goto yPv1G; } goto ivGwm; yOGjV: if (!($old == $new)) { goto lL2ar; } goto z4OW0; Xj624: CAU8o: goto YP6bf; ivGwm: if (!($old[$i] != $new[$i])) { goto CAU8o; } goto lKN4e; Rwasd: lL2ar: goto hYqgU; aEv89: yPv1G: goto eG20u; z4OW0: return $differences; goto Rwasd; HqwCW: $i++; goto l0qwL; YP6bf: OhoG8: goto HqwCW; kO7qO: $new = trim(preg_replace("\57\134\x73\53\57", '', $new)); goto yOGjV; eG20u: return $differences; goto PAFJB; jZFFi: $differences = 0; goto Md7Ba; hYqgU: $old = explode("\40", $old); goto vzESf; ghl77: jBmQi: goto f9rKq; T3dYJ: $length = max(count($old), count($new)); goto a_trC; PAFJB: } function update_existing_tables($tables) { goto VSE9_; Txzgp: if (!(is_array($tables) && !empty($tables))) { goto dxe0L; } goto VaXNv; U2ESz: $table_structure_development = array(); goto MAet_; ctCtY: UMOeY: goto OfoDZ; VaXNv: foreach ($tables as $table) { goto zAIHV; RMTAy: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto YHSKt; zAIHV: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto RMTAy; YHSKt: tyCuM: goto kE5YJ; kE5YJ: } goto ctCtY; VSE9_: $sql_commands_to_run = array(); goto U2ESz; WzU30: return $sql_commands_to_run; goto HwnT_; YA3rq: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto WzU30; MAet_: $table_structure_live = array(); goto Txzgp; OfoDZ: dxe0L: goto YA3rq; HwnT_: } function table_field_data($database, $table) { goto Qrmz0; hALWV: gBZkP: goto lW8xo; hqIxV: mysql_select_db($database["\144\141\164\x61\x62\141\x73\x65"]); goto lPYCe; lPYCe: $result = mysql_query("\x53\110\x4f\127\40\x43\117\x4c\x55\115\x4e\x53\x20\106\x52\117\115\x20\x60{$table}\x60"); goto v3Qfe; Iw6i_: goto d81zr; goto hALWV; j8Pgn: if (!($row = mysql_fetch_assoc($result))) { goto gBZkP; } goto AFXRg; AFXRg: $fields[] = $row; goto Iw6i_; v3Qfe: d81zr: goto j8Pgn; Qrmz0: $conn = mysqli_connect($database["\x68\157\163\164\x6e\141\155\x65"], $database["\165\x73\x65\x72\156\x61\x6d\145"], $database["\x70\141\x73\163\167\x6f\162\x64"]); goto hqIxV; lW8xo: return $fields; goto IOYBW; IOYBW: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto Fces3; uqJrt: dVKOs: goto FVt5F; FVt5F: return $sql_commands_to_run; goto nPAWQ; lGxGv: foreach ($source_field_structures as $table => $fields) { goto AfM2m; AfM2m: foreach ($fields as $field) { goto OwFAY; Rzy1z: $n = 0; goto ggkPT; yvvrA: $previous_field = $fields[$n]["\106\151\x65\154\144"]; goto wUr18; zI58w: GOyMd: goto vqkyX; XNRGS: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto Ye0mT; vsoK4: $add_field .= isset($field["\x4e\x75\154\154"]) && $field["\x4e\x75\x6c\x6c"] == "\131\x45\x53" ? "\x20\x4e\x75\x6c\x6c" : ''; goto Qrb1_; WYL8K: $n++; goto CdYkp; wUr18: ka4pS: goto SqeeN; q4Nmm: $modify_field = ''; goto Rzy1z; HyMj6: goto GOyMd; goto aYNpN; TjoTG: sF_pW: goto WYL8K; LBgxp: $add_field = "\x41\x4c\124\x45\x52\x20\x54\x41\102\x4c\105\40{$table}\x20\x41\x44\x44\x20\x43\117\x4c\125\x4d\116\x20\140" . $field["\x46\x69\145\154\x64"] . "\140\40" . $field["\x54\x79\x70\x65"] . "\x20\103\110\x41\122\x41\x43\124\105\x52\40\x53\x45\x54\40" . $this->CHARACTER_SET; goto vsoK4; oxuQY: $modify_field .= isset($previous_field) && $previous_field != '' ? "\40\101\x46\124\x45\122\40" . $previous_field : ''; goto z8oyl; VPdUx: $add_field .= "\73"; goto BoF2C; KAQ01: QOnCf: goto yvvrA; SqeeN: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto Tbgbm; } goto JAh_N; f8_kh: $modify_field = "\x41\114\124\x45\x52\x20\124\x41\x42\114\x45\x20{$table}\40\115\117\104\x49\x46\131\40\103\x4f\114\125\115\x4e\x20\140" . $fields[$n]["\x46\151\x65\154\144"] . "\x60\40" . $fields[$n]["\x54\x79\x70\x65"] . "\40\103\110\x41\122\101\x43\x54\105\x52\x20\123\105\x54\40" . $this->CHARACTER_SET; goto wYWdY; wYWdY: $modify_field .= isset($fields[$n]["\x44\x65\x66\x61\x75\154\x74"]) && $fields[$n]["\x44\145\146\141\x75\x6c\x74"] != '' ? "\x20\104\105\106\x41\x55\x4c\124\40\x27" . $fields[$n]["\104\x65\146\141\165\x6c\164"] . "\x27" : ''; goto P8II3; ggkPT: JlYCp: goto hM4WP; OwFAY: if ($this->in_array_recursive($field["\x46\151\x65\x6c\144"], $destination_field_structures[$table])) { goto rx6Lr; } goto LBgxp; JAh_N: $sql_commands_to_run[] = $modify_field; goto nvmZ_; pbZv2: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\x46\x69\145\x6c\x64"] == $destination_field_structures[$table][$n]["\106\151\x65\154\x64"])) { goto ka4pS; } goto XNRGS; hM4WP: if (!($n < count($fields))) { goto DFqe0; } goto pbZv2; Qrb1_: $add_field .= "\40\x44\x45\106\101\x55\x4c\124\x20" . $field["\104\x65\146\x61\x75\154\164"]; goto wUi05; vqkyX: A_Bel: goto uIwwl; wUi05: $add_field .= isset($field["\105\170\164\162\x61"]) && $field["\x45\170\164\x72\141"] != '' ? "\x20" . $field["\105\170\x74\x72\x61"] : ''; goto VPdUx; z8oyl: $modify_field .= "\73"; goto KAQ01; aYNpN: rx6Lr: goto q4Nmm; Ye0mT: if (!(is_array($differences) && !empty($differences))) { goto QOnCf; } goto f8_kh; NIuGD: $modify_field .= isset($fields[$n]["\x45\x78\x74\162\x61"]) && $fields[$n]["\x45\170\x74\x72\141"] != '' ? "\x20" . $fields[$n]["\x45\x78\x74\x72\141"] : ''; goto oxuQY; nvmZ_: Tbgbm: goto TjoTG; P8II3: $modify_field .= isset($fields[$n]["\116\x75\154\154"]) && $fields[$n]["\x4e\x75\x6c\154"] == "\131\x45\123" ? "\x20\116\x55\114\x4c" : "\x20\116\x4f\x54\x20\x4e\125\x4c\114"; goto NIuGD; BoF2C: $sql_commands_to_run[] = $add_field; goto HyMj6; qwh88: DFqe0: goto zI58w; CdYkp: goto JlYCp; goto qwh88; uIwwl: } goto bO4CZ; bO4CZ: DbGzS: goto uY91T; uY91T: ADOxe: goto loGcF; loGcF: } goto uqJrt; Fces3: $sql_commands_to_run = array(); goto lGxGv; nPAWQ: } function in_array_recursive($needle, $haystack, $strict = false) { goto OHOfs; OHOfs: foreach ($haystack as $array => $item) { goto Wd2FW; erFTb: IBydx: goto YbeFS; keN5d: eQCXW: goto erFTb; Wd2FW: $item = $item["\106\151\x65\154\144"]; goto DTxkK; vSCbP: return true; goto keN5d; DTxkK: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto eQCXW; } goto vSCbP; YbeFS: } goto o8ieD; o8ieD: exa49: goto Frch9; Frch9: return false; goto Ypmi3; Ypmi3: } }
