<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Post_model extends CI_Model { public function getPostUser($id_user) { goto Im8Ly; dwMYU: $this->db->where("\x61\x2e\x64\x61\162\151", $id_user); goto VmLS_; QEBBH: $this->db->order_by("\141\56\x75\160\144\x61\164\x65\x64", "\144\x65\x73\x63"); goto e71av; YsnqW: return $posts; goto L24DG; hENCo: if (!($id_user != 0)) { goto JtJCS; } goto dwMYU; ZSfX2: $this->db->join("\155\141\x73\x74\x65\162\x5f\x67\165\162\165\40\142", "\x61\56\x64\141\162\151\x3d\x62\56\151\x64\x5f\147\x75\x72\x75", "\154\x65\146\x74"); goto hENCo; Im8Ly: $this->db->select("\x61\56\x2a\x2c\40\142\56\x6e\141\x6d\141\x5f\x67\x75\x72\165\54\x20\142\x2e\146\x6f\x74\157\x2c\x20\x28\x53\105\x4c\x45\103\124\40\103\117\x55\x4e\124\x28\160\x6f\x73\164\137\143\x6f\x6d\155\x65\156\x74\163\56\x69\144\137\x63\x6f\x6d\x6d\145\156\x74\51\40\106\x52\117\x4d\x20\160\157\x73\x74\137\143\x6f\x6d\x6d\145\x6e\x74\163\40\127\x48\x45\122\x45\40\x61\56\x69\144\137\160\x6f\x73\164\x20\x3d\40\x70\x6f\x73\x74\x5f\143\x6f\155\155\145\x6e\164\163\x2e\x69\x64\137\160\x6f\x73\164\51\40\x41\123\x20\152\x6d\154"); goto XBTXB; e71av: $posts = $this->db->get()->result(); goto YsnqW; XBTXB: $this->db->from("\x70\157\163\x74\40\x61"); goto ZSfX2; VmLS_: JtJCS: goto QEBBH; L24DG: } public function getPostForUser($kepada, $kelas = null) { goto zbxb7; VD9y3: $posts = $this->db->get()->result(); goto U4feT; xxqct: qB9Ud: goto Fm10H; zbxb7: $this->db->select("\x61\x2e\x2a\54\x20\142\56\156\x61\155\141\137\147\165\x72\x75\x2c\40\x62\x2e\x66\157\x74\x6f\54\x20\x28\123\x45\x4c\105\103\x54\x20\x43\x4f\x55\x4e\x54\50\x70\x6f\x73\164\x5f\x63\157\155\x6d\145\x6e\x74\163\56\151\144\137\143\157\x6d\x6d\x65\x6e\164\x29\40\x46\x52\x4f\115\40\160\x6f\x73\x74\137\x63\x6f\155\155\x65\156\164\x73\x20\x57\110\105\x52\105\40\x61\56\151\x64\x5f\160\x6f\163\164\40\75\40\160\x6f\x73\164\137\143\157\x6d\x6d\x65\x6e\164\163\56\x69\x64\x5f\160\x6f\x73\x74\x29\x20\x41\123\x20\x6a\155\154"); goto UggMW; U4feT: return $posts; goto Bl2tG; Fm10H: $this->db->order_by("\141\x2e\165\x70\144\141\164\145\x64", "\144\x65\x73\x63"); goto VD9y3; LxuXP: $this->db->join("\155\141\x73\x74\x65\x72\x5f\x67\165\162\x75\40\142", "\x61\56\x64\x61\162\151\x3d\x62\56\151\x64\x5f\x67\165\x72\x75", "\154\x65\146\x74"); goto FZFm3; FZFm3: if (!($kepada != null)) { goto qB9Ud; } goto m2FJU; UggMW: $this->db->from("\x70\x6f\x73\x74\40\141"); goto LxuXP; m2FJU: $this->db->where("\50\x61\x2e\153\x65\160\141\144\x61\x20\x4c\x49\x4b\105\40" . $kepada . "\51\x20\x4f\x52\x20\x28\x61\x2e\153\x65\160\141\x64\x61\x20\114\111\113\105\x20" . $kelas . "\51"); goto xxqct; Bl2tG: } public function getIdComments($id_post) { goto cX3kr; SpZfQ: return $ids; goto LH3wq; EGrtq: $ids = $this->db->get("\160\x6f\163\164\x5f\x63\157\155\155\145\156\164\x73")->result(); goto SpZfQ; cX3kr: $this->db->select("\151\144\x5f\143\x6f\x6d\x6d\145\x6e\164"); goto jnewJ; jnewJ: $this->db->where("\x69\144\137\x70\157\163\x74", $id_post); goto EGrtq; LH3wq: } public function getIdReplies($id_comment) { goto hcj2d; eDNxP: if (is_array($id_comment)) { goto UbTeF; } goto hN1FZ; hN1FZ: $this->db->where("\151\x64\137\x63\157\x6d\x6d\x65\156\164", $id_comment); goto Q_QYO; hcj2d: $this->db->select("\151\144\x5f\x72\145\x70\154\171"); goto eDNxP; pvyMP: UbTeF: goto p0cBv; zdqmo: return $ids; goto eYsmW; YFpvO: $ids = $this->db->get("\x70\x6f\x73\164\x5f\x72\x65\160\154\x79")->result(); goto zdqmo; p0cBv: $this->db->where_in("\151\144\137\143\157\155\155\x65\156\164", $id_comment); goto tO1iF; Q_QYO: goto fsylD; goto pvyMP; tO1iF: fsylD: goto YFpvO; eYsmW: } }
