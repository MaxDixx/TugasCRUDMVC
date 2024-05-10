<?php
class DashModel {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function getAllGurus() {
        $sql = "SELECT * FROM data_guru";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }

    public function addGuru($data) {
        $stmt = $this->con->prepare("INSERT INTO data_guru (id_guru, nama_guru, foto_guru, mata_pelajaran, wali_kelas, nohp) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $data['id_guru'], $data['nama_guru'], $data['foto_guru'], $data['mata_pelajaran'], $data['wali_kelas'], $data['nohp']);
        return $stmt->execute();
    }

    public function updateGuru($data) {
        $stmt = $this->con->prepare("UPDATE data_guru SET nama_guru=?, foto_guru=?, mata_pelajaran=?, wali_kelas=?, nohp=? WHERE id_guru=?");
        $stmt->bind_param("ssssss", $data['nama_guru'], $data['foto_guru'], $data['mata_pelajaran'], $data['wali_kelas'], $data['nohp'], $data['id_guru']);
        return $stmt->execute();
    }

    public function deleteGuru($id_guru) {
        $stmt = $this->con->prepare("DELETE FROM data_guru WHERE id_guru=?");
        $stmt->bind_param("s", $id_guru);
        return $stmt->execute();
    }
}
?>