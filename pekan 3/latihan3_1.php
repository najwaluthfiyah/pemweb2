<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
$ar_skill = ["HTML"=>10, "CSS"=>10, "Javascript"=>20, "RWD"=>20, "PHP"=>30, "python"=>30, "Java"=>50];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];

?>

<h1 style="text-align:center;">From Fungsi</h1>
<form method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="radio_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="select" name="prodi" class="custom-select">
        <?php 
        foreach($ar_prodi as $prodi => $p){
        ?>
         <option value="<?= $p ?>"><?= $p ?></option>

        <?php } ?>

      </select>
    </div>
  </div>
  <div class="form-group row">
  <label for="programming_skill" class="col-4 col-form-label">Skill Programming</label>
  <div class="col-8">
    <div class="d-flex flex-wrap gap-2">
      <?php foreach ($ar_skill as $skill => $s) { ?>
  <div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" name="skill<?= $skill ?>" id="skill<?= $skill ?>" value="<?= $skill ?>">
    <label class="form-check-label" for="skill<?= $skill ?>">
      <?= $skill ?>
    </label>
  </div>
                    <?php } ?>
                </div>
            </div>
        </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="select1" name="domisili" class="custom-select">
      <?php 
        foreach($ar_domisili as $d) {
        ?>
        <option value="<?= $d ?>"<?= $d ?>></option>

        <?php } ?>
        
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text2" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php 
  if(isset($_POST['proses'])){
 
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $prodi = $_POST['prodi'];
  $skill = $_POST['skill'];
  $d = $_POST['domisili'];
  $total = 100;
    


    ?>
  
  Nama : <?= $nama ?><br/>
  NIM : <?= $nim ?><br/>
  JK : <?= $jk ?><br> 
  Prodi : <?= $prodi ?><br/>
  Skill : <?= $skill ?><br/>
  Domisili : <?= $d ?><br/>


<?php 
  function skor_skill($total){
    if($total >= 100 && $total <= 150 ) {
      return "sangat Baik";
    } elseif ($total >= 60 && $total <= 100 ) {
      return "Baik";
    } elseif ($total >= 40 && $total <= 60){
      return "Cukup";
    } elseif ($total >= 0 && $total <= 40){
      return "Kurang";
    } else {
      return "Tidak memadai";  
    } 

  }
  echo 'Kategori Skill :'.skor_skill($total);
} 
?>