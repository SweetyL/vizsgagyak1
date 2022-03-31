<?php

class Jelentkezes {

    private $rajtszam;
    private $nev;
    private $email;
    private $szulido;
    private $nem;

    public function set_jelentkezo($id, $conn) {
        $sql = "SELECT rajtszam, nev, email, szulido, nem FROM jelentkezes";
        $sql .= " WHERE rajtszam = ".$id."";
        $result = $conn->query($sql);
        if ($conn->query($sql)) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $this->rajtszam = $row['rajtszam'];
                $this->nev = $row['nev'];
                $this->email = $row['email'];
                $this->szulido = $row['szulido'];
                $this->nem = $row['nem'];
            } 
        }
    }

    public function get_id(){
        return $this->rajtszam;
    }

    public function get_nev(){
        return $this->nev;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_szul(){
        return $this->szulido;
    }

    public function get_nem(){
        return $this->nem;
    }

    public function set_id($id){
        $this->rajtszam = $id;
    }

    public function set_nev($nev){
        $this->nev = $nev;
    }

    public function set_email($email){
        $this->email = $email;
    }

    public function set_szul($szul){
        $this->szulido = $szul;
    }

    public function set_nem($nem){
        $this->nem = $nem;
    }

    public function listaz($conn) {
        $list = array();
        $sql = "SELECT rajtszam FROM jelentkezes";
        if($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    $list[] = $row['rajtszam'];
                }
            }
        }
        return $list;
    }

}
?>