<?php
class DashController {
    private $model;

    public function __construct(DashModel $model) {
        $this->model = $model;
    }

    public function handleRequest() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST;
            $file = $_FILES['foto_guru'];
            $submit = $data['submit'];

            $data['nama_guru'] = sanitizeInput($data['nama_guru']);
            $data['mata_pelajaran'] = sanitizeInput($data['mata_pelajaran']);
            $data['wali_kelas'] = sanitizeInput($data['wali_kelas']);
            $data['nohp'] = sanitizeInput($data['nohp']);

            if ($file['error'] === UPLOAD_ERR_OK) {
                $data['foto_guru'] = $this->uploadFile($file);
            } else {
                echo "Error uploading file.";
                return;
            }

            switch ($submit) {
                case 'tambah':
                    if ($this->model->addGuru($data)) {
                        echo "<script>alert('Data berhasil disimpan'); window.location.href='dashboard.php';</script>";
                        exit();
                    } else {
                        echo "Error adding data.";
                    }
                    break;
                case 'edit':
                    if ($this->model->updateGuru($data)) {
                        echo "<script>alert('Data berhasil diupdate'); window.location.href='dashboard.php';</script>";
                        exit();
                    } else {
                        echo "Error updating data.";
                    }
                    break;
                case 'hapus':
                    if ($this->model->deleteGuru($data['id_guru'])) {
                        echo "<script>alert('Data berhasil dihapus'); window.location.href='dashboard.php';</script>";
                        exit();
                    } else {
                        echo "Error deleting data.";
                    }
                    break;
            }
        }
    }

    private function uploadFile($file) {
        $uploadDirectory = 'C:/laragon/www/ANGKASA RAYA/fotoguru/';
        $tmpFilePath = $file['tmp_name'];
        $newFileName = uniqid(). '_'. basename($file['name']);
        $targetFilePath = $uploadDirectory. '/'. $newFileName;
        if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
            return $newFileName;
        } else {
            return false;
        }
    }
}
?>