        <style>*{
  margin: 0;
  padding: 0;
  font-family: "Popins", sans-serif;
}
body{
  background:linear-gradient(to bottom, #21b5da, #138da0, #1143ad);
  justify-content: center;
  display: flex;
}
.navbar {
  background-color: #62C4D9;
  overflow: hidden;
  width: 1821px;
  color: white;
  top: 0%;
  padding: 10px 20px;
  text-align: center;
  display: flex;
  z-index: 2;
  justify-content: space-between ;
}

.title {
  justify-self: center;
  align-self: center;
  text-align: center;
}

.btn-sidebar {
  justify-self: left;
  background-color: #E0BF6C;
  cursor: pointer;
}

.btn-logout {
  height: 50px;
  width: 150px;
  justify-self: flex-end; 
  align-self: center; 
  background-color: #8CE395;
  display: flex;
  border: white;
  color: black;
  justify-content: center;
  border-radius: 10px;
  cursor: pointer;
}

.btn-logout img {
  margin-top: 10px;
}

.btn-logout h2 {
  margin-top: 15px;
  margin-left: 10px;
}

.sidebar {
  background-color: #A6ECF1;
  color: white;
  padding: 20px;
  height: 90vh;
  width: 0%; 
  float: left;
  display: flex;
  flex-direction: column;
  transition: width 0.3s ease-in-out;
  font-size: auto;
}

.sidebar.active {
  width: 150px;
  font-size: auto;
}

.sidebar button {
  background-color: #A6ECF1;
  color: rgb(0, 0, 0);
  border: none;
  font-size: 20px;
  text-align: left;
  height: 140px;
  overflow: hidden;
  width: auto;
  position: relative;
  transition: width 3s ease-in-out; 
  cursor: pointer;
}

.sidebar button:hover {
  background-color: #62C4D9;
  transition: width 1s ease-in-out; 
}
.sidebar button.active {
  display: flex;
  flex-direction: column;
  width: 100px;
}
.btn-tambah{
  width: 119px;
  height: 36px;
  background-color: #8CE395;
  color: rgb(0, 0, 0);
  border: none;
  border-radius: 20px;
  margin-top: 10px;
}
.btn-edit{
  width: 119px;
  height: 36px;
  background-color: chocolate;
  color: aliceblue;
  border: none;
  border-radius: 20px;
  margin-top: 10px;
}
.btn-hapus{
  width: 119px;
  height: 36px;
  background-color: brown;
  color: aliceblue;
  border: none;
  border-radius: 20px;
  margin-top: 10px;
}
.tools{
  display: none;
  width: fit-content;
  height: 30px;
}
.content {
  margin-left: 200px;
  margin-right: auto;
  margin-top: 80px;
  display: flex;
  position: relative;
  flex-direction: column;
  background-color: #EAE9E9;
  width: max-content;
  height: 400px;
  align-items: center;
  border-radius: 10px;
  overflow:hidden;
  overflow-y: scroll;
}
.btn-content{
  display: inline-block;
  align-items: center;
  margin-left: 950px;
  z-index: 2;
  position: sticky;
}
.table-content{
  display: flex;
  flex-direction: column;
  align-items: center;
}
.table-content h2{
  margin-top: -30px;
  padding-bottom: 40px;
}
.content h5 {
  margin-left: 10px;
  margin-top: -10px;
  text-align: left;
}

.stats div {
  display: inline-block;
  margin-right: 10px;
}

table {
  width: 1300px;
  height: 150px;
  border-collapse: collapse;
}

.head {
  background-color: #8CE395;
  top: 0;
  z-index: 2;
  position: sticky;
}
table,
th,
td {
  border: none;
  height: 40px;
}
.table-content table td:hover {
  background-color: #21b5da;
}


th,
td {
  padding: 10px;
  text-align: left;
}

.right-sidebar {
  background-color: #DFFDFF;
  position: absolute;
  right: 0;
  margin-right: -10px;
  width: 300px;
  height: 94vh;
  display: flex;
  flex-direction: column;
  justify-self: flex-end;
}

.btn-jdwl {
  margin-top: 30px;
  cursor: pointer;
  background-color: aqua;
  width: 90px;
  height: 35px;
  align-self: center;
  text-align: center;
  border-radius: 10px;
  cursor: pointer;
}

.btn-hari {
  display: flex;
  width: 180px;
  margin-top: 30px;
  font-size: medium;
  height: 40px;
  align-self: center;
  justify-content: space-between;
  color: #000000;
  border-radius: 10px;
  background-color: #EAE9E9;
}

.right-sidebar button img {
  margin-top: 5px;
  margin-right: 5px;
  cursor: pointer;
}

.right-sidebar button h5 {
  font-size: large;
  margin-top: 5px;
}
.info{
  width: 1090px;
  height: 221px;
  align-self: center;
  margin: auto;
  margin-top: 180px;
  display: flex;
  justify-content: space-evenly;
}
.guru{
  align-content: center;
  align-items: center;
  text-align: center;
}
.guruh2{
  background-color: #6CB6E0;
  border-radius: 10px;
  width: 119px;
  text-align: center;
  height: 36px;
  margin-bottom: 10px;
}
.matpel{
  align-content: center;
  align-items: center;
  text-align: center;
}
.matpelh2{
  background-color: #E0C06C;
  border-radius: 10px;
  width: 119px;
  text-align: center;
  height: fit-content;
  font-size: large;
  margin-bottom: 10px;
}

.matpel img{
  width: 98px;
  height: 98px;
}

.kls{
  align-content: center;
  align-items: center;
  text-align: center;
}
.klsh2{
  background-color: #E07A6C;
  border-radius: 10px;
  width: 119px;
  text-align: center;
  height: 36px;
  margin-bottom: 10px;
}
.kls img{
  width: 98px;
  height: 98px;
}

.slbs{
  align-content: center;
  align-items: center;
  text-align: center;
}
.slbsh2{
  background-color: #EDEF7C;
  border-radius: 10px;
  width: 119px;
  text-align: center;
  height: 36px;
  margin-bottom: 10px;
}
.slbs img{
  width: 98px;
  height: 98px;
}
.foto_guru{
  width: fit-content;
  height: fit-content;
}
@media screen and (max-width: 768px) {
  
  body{
    width: 100%;
  }
  .container{
    width: 100%;
  }
  .navbar {
    flex-direction: flex;
    width: 100%;
    position: relative;
    margin-top: 850px;
  }

  .btn-sidebar {
    justify-self: center;
  }

  .btn-logout {
    justify-self: center;

  }

  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    float: none;
    margin: auto;
    flex-direction: row;
    overflow: auto;
  }

  .sidebar button {
    width: 100%;
    height: 50px;
  }

  .content {
    margin-left: 0px;
  }

  .btn-content {
    margin-left: 0px;
  }

  .table-content {
    width: 100%;
  }

  .right-sidebar {
    height: 100%;
    width: 300px;
    position: relative;
    margin-right: 0px;
  }
}
</style>

        <div class="navbar">
            <button class="btn-sidebar" id="sidebar-toggle">
                <img src="asset/list_6767791 1.png" alt="">
            </button>
            <h1 class="title">ANGKASA RAYA</h1>
            <button class="btn-logout" id="btn-logout" onclick="location.href='logout.php'">
                <img src="asset/logout_7828466 1.png" alt=""><h2>Logout</h2>
            </button>
        </div>
        <div id="sidebar" class="sidebar">
            <img src="asset/image 1.png" alt="">
            <button class="btn-on-sidebar">
                <img src="asset/home_10263239 1.png" alt="">
                <h5>Beranda</h5>
            </button>
            <button class="btn-on-sidebar">
                <img src="asset/study_6650383 1.png" alt="">
                <h5>Kelas</h5>
            </button>
            <button class="btn-on-sidebar">
                <img src="asset/book_13362754 1.png" alt="">
                <h5>Mata Pelajaran</h5>
            </button>
            <button class="btn-on-sidebar">
                <img src="asset/report_3333989 1.png" alt="">
                <h5>Silabus</h5>
            </button>
            <button class="btn-on-sidebar">
                <img src="asset/reading-book_4173183 1.png" alt="">
                <h5><?= $_SESSION['user'] ?></h5>
            </button>
        </div>
        <div class="right-sidebar">
            <button class="btn-jdwl">JADWAL</button>
            <select name="hari" class="btn-hari" id="hari">
                <option value="">Senin</option>
                <option value="">Selasa</option>
                <option value="">Rabu</option>
                <option value="">Kamis</option>
                <option value="">Jumat</option>
                <img src="asset/Group.png" alt="">
            </select>
            <div class="guru1">
                <div class="kiri">
                    <img src="" alt="">
                    <span></span>
                </div>
                <div class="kanan">
                    
                    </div>
                </div>
                <div class="guru2"></div>
                <div class="guru3"></div>
                <div class="guru4"></div>
            </div>
            <div class="info">
                <div class="guru">
                    <h2 class="guruh2">Guru</h2>
                    <img src="asset/teacher_3485639 1.png" alt="">
                    <h2 class="angkah"><?php echo (mysqli_num_rows($result))?></h2>
                </div>
                <div class="matpel">
                    <h2 class="matpelh2">Mata Pelajaran</h2>
                    <img src="asset/book_13362754 1.png" alt="">
                    <h2 class="matpelh">39</h2>
                </div>
                <div class="kls">
                    <h2 class="klsh2">Kelas</h2>
                    <img src="asset/study_6650383 1.png" alt="">
                    <h2 class="klsh">58</h2>
                </div>
                <div class="slbs">
                    <h2 class="slbsh2">Silabus</h2>
                    <img src="asset/report_3333989 1.png" alt="">
                    <h2 class="silahh">67</h2>
                </div>
            </div>
            <form id='form' class="form" method="POST" enctype="multipart/form-data">
                <div class="content">
                    <div class="btn-content">       
                        <button id="btn-tambah" class="btn-tambah" type="submit" name="submit" value="tambah">Tambah</button>
                        <button id="btn-edit" class="btn-edit" type="submit" name="submit" value="edit">Edit</button>
                        <button id="btn-hapus" class="btn-hapus" type="submit" name="submit" onclick="confirmDelete(event)">Hapus</button>
                    </div>
                    <div class="table-content">
                        <h2>Teacher List</h2>
                        <table>
                            <thead class="head">
                                <tr>
                                    <th>ID Guru</th>
                                    <th>Nama Guru</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Wali Kelas</th>
                                    <th>NO Telepon</th>
                                    <th>Foto Guru</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr id='db' class='db'>";
                        echo "<td>" . $row["id_guru"] . "</td>";
                        echo "<td>" . $row["nama_guru"] . "</td>";
                        echo "<td>" . $row["mata_pelajaran"] . "</td>";
                        echo "<td>" . $row["wali_kelas"] . "</td>";
                        echo "<td>" . $row["nohp"] . "</td>";
                        echo "<td><img src='/ANGKASA%20RAYA/fotoguru/". $row["foto_guru"]. "' alt='' width='250' height='150'></td>";
                        echo "</tr>";
                    }
                    
                } else {
                    echo "<td> 0 results </td>";
                }
                ?>
                <tr>
                    <td><input type="text" id="idguru" class="idguru" name="id_guru"  placeholder="ID Guru"></td>
                    <td><input type="text" id="namagur" class="namagur" name="nama_guru"  placeholder="Nama Guru"></td>
                    <td><input type="text" id="matpel" class="matpel" name="mata_pelajaran"  placeholder="Mata Pelajaran"></td>
                    <td><input type="text" id="walkel" class="walkel" name="wali_kelas" placeholder="Wali Kelas"></td>
                    <td><input type="text" id="telp" class="telp" name="nohp"  placeholder="Nomer Telepon"></td>
                    <td><input type="file" id="foto_guru" class="foto_guru" name="foto_guru" ></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</form> 
<script src="dashboard.js"></script>

