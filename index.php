<?php 

session_start();

include "../TurboAz/php/db_conn.php";
$sql = "SELECT * FROM carinfo WHERE status = 1";
$stmt = $conn->prepare($sql);
$stmt->execute();
$counter = $stmt->rowCount();
$maxNumberOfAnn = 15;
$x = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Turbo.az</title>
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <?php 

  function createDiv($counter,$maxNumberOfAnn,$x){
  include "../TurboAz/php/db_conn.php";
    if($counter>0){ 

       $sql = "SELECT * FROM carinfo WHERE id = ?";
       $stmt = $conn->prepare($sql);
       $stmt->execute([$counter]);
       $car = $stmt->fetch();
       $emailsql =  $car['email'];
       $marka =  $car['marka'];
       $model =  $car['model'];
       $yurus =  $car['yurus'];
       $qiymet =  $car['qiymet'];
       $buraxilisili =  $car['buraxilisili'];
       $muherrikinhecmi =  $car['muherrikinhecmi'];
       $imgname =  $car['img_name'];
       $status =  $car['status'];
       $id = $car['id'];
         if($status==1){
            ?>
              <a href = "carinfo.php?id<?php echo $x?>=<?php echo $id?>" class="card" style="cursor: pointer; ">
              <img src="images/<?php echo $imgname ?>" alt="" style="height: 250px ;"/>
                <div class="card-info " style="color: black;" >
                  <p><?php echo $qiymet ?> $</p>
                  <p><?php echo $marka?>,<?php echo $model ?></p>
                  <p><?php echo $buraxilisili?>,<?php echo $muherrikinhecmi ?>,<?php echo $yurus ?></p>
                  <p>Baki,19.03.2022 16:16</p>
                  <p><?php echo $emailsql ?></p>
                </div>
         </a>
<?php  }}}?>
    <!--Header-->
    <header>
      <div class="row cont">
        <div
          class="col-3 red-bck mt-2 mr-5 d-flex justify-content-center align-items-center flex-column"
        >
          <img style="width: 50%" src="images/turboaz.png" alt="" />
        </div>
        <div class="col-9 mt-2">
          <div class="row" style="height: 100%">
            <div
              class="col-12 d-flex justify-content-between align-items-center"
            >
              <div>
                <p style="font-size: 15px; color: #c4c4c4">
                  Dəstək xidməti: (012) 599-08-01; (012) 505-77-55
                </p>
              </div>
              <div style="height: 100%; display: flex; gap: 30px">
                <span>по-русски</span>
                <a style="cursor: pointer">
                  <img
                    style="width: 30px"
                    src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#bookmarks--heart-white"
                    alt=""
                  />
                  <span>Seçilmişlər</span>
                </a>

                <a href = "<?php if(!isset($_SESSION["useremail"])){
                  echo "login.php";}
                  else{
                    echo "";
                  }
                  ?>"  style="cursor: pointer">
                  <img
                    style="width: 30px"
                    src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#icon-user"
                    alt=""
                  />
                  <span style="color: white" >
                  <?php if(!isset($_SESSION["useremail"])){
                  echo "Giriş";}
                  else{
                    echo $_SESSION["useremail"];
                  }
                  ?>
                  </span>
                </a>
                <?php if(isset($_SESSION["useremail"])){
                  ?>
                <a href = "php/destroysessions.php" style="cursor: pointer">
                  <img
                    style="width: 30px"
                    src="https://upload.wikimedia.org/wikipedia/commons/8/8a/OOjs_UI_icon_logOut-ltr.svg"
                    alt=""
                  />
                  <span style="color: white" >
                  Log Out
                  </span>
                </a>
                <?php }?>
              </div>
            </div>
            <div class="col-4 sites gx-0">
              <h1 class="header-sites">BINA.AZ</h1>
            </div>
            <div class="col-4 sites gx-0">
              <h1 class="header-sites">TAP.AZ</h1>
            </div>
            <div class="col-4 sites gx-0">
              <h1 class="header-sites">BOSS.AZ</h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--Elan Yerlesdir-->
    <div class="add-announcement red-bck">
      <div
        class="d-flex justify-content-between align-items-center cont"
        style="height: 60px"
      >
        <div
          class="d-flex justify-content-center gap-4 links"
          style="margin-left: 15px"
        >
          <a href="">Bütün elanlar</a>
          <a href="">Avtosalonlar</a>
          <a href="">Ehtiyat hissələri və aksesuarlar</a>
        </div>
        <div
          class="addannounc-btn d-flex justify-content-center align-items-center px-5"
        >
          <a href="<?php if(!isset($_SESSION["useremail"])){
                  echo "login.php";}
                  else{
                    echo "addannounc.php";
                  }
                  ?>">
            <i class="fa-solid fa-circle-plus"></i>
            <span> Elan yerləşdir</span>
          </a>
        </div>
      </div>
    </div>
    <div class="search-section cont">
      <form action="" class="search-form">
        <div class="white-bck">
          <select name="markalar" id="">
            <option value="">Butun Markalar</option>
            <option value="">Mazda</option>
            <option value="">BMW</option>
            <option value="">Mercedes</option>
            <option value="">KIA</option>
          </select>
        </div>
        <div class="cost white-bck">
          <label for="">Qiymet</label>
          <select name="azn" id="">
            <option value="">AZN</option>
            <option value="">USD</option>
            <option value="">EURO</option>
          </select>
          <input type="text" placeholder="min." />
          <input type="text" placeholder="max." />
        </div>
        <div class="white-bck">
          <label for="">Kredit</label>
          <input type="checkbox" />
        </div>
        <div class="white-bck">
          <select name="" id="">
            <option value="">Butun seherler</option>
            <option value="">Baki</option>
            <option value="">Sumqayit</option>
          </select>
        </div>
        <div class="search-btn">
          <span>Axtar</span>
        </div>
        <!--Second row-->
        <div class="white-bck">
          <select name="" id="">
            <option value="">Butun Modeller</option>
            <option value="">Mazda</option>
            <option value="">BMW</option>
            <option value="">Mercedes</option>
            <option value="">KIA</option>
          </select>
        </div>
        <div class="cost white-bck">
          <label for="">Buraxilis ili</label>
          <select name="" id="">
            <option value="">min.</option>
            <option value="">1</option>
            <option value="">100</option>
          </select>
          <select name="" id="">
            <option value="">max.</option>
            <option value="">1</option>
            <option value="">100</option>
          </select>
        </div>
        <div class="white-bck">
          <label for="">Barter</label>
          <input type="checkbox" />
        </div>
        <div class="white-bck">
          <label for="">Bugun: 1340 yeni</label>
        </div>
      </form>
      <div class="more-btn">
        <span>Etrafli axtaris</span>
      </div>
    </div>
    <div class="vip cont d-flex align-items-center mt-3">
      <h1
        style="
          font-size: 18px;
          font-weight: 700;
          margin-bottom: 0px;
          margin-right: 20px;
        "
      >
        VIP ELANLAR
      </h1>
      <a href="" style="color: blue; text-decoration: underline"
        >Butun VIP elanlar</a
      >
    </div>
    <!--CARDS-->

    <div class="cards-section">
      <div class="cont mt-4 cards g-0 main-content">
      <?php 
      while ($maxNumberOfAnn >0) {
        if($counter>0){
          createDiv($counter,$maxNumberOfAnn,$x);
          $counter = $counter - 1; $maxNumberOfAnn = $maxNumberOfAnn - 1;
          $x+=1;
        }
        else
        break;

      }
      ?>

      </div>
    </div>
    <!--Footer-->
    <footer>
      <div class="cont d-flex justify-content-between align-items-center mb-5 mt-5">
        <div style="width: 50%; margin-bottom: 1rem;">
          <a href="">İstifadəçi razılaşması</a>
          <a href="">Qaydalar Qanun</a>
          <a href="">Məxfilik siyasəti</a>
        </div>
        <div>
          <p style="color: #979797;">
            Saytın Administrasiyası reklam bannerlərinin və yerləşdirilmiş
            elanların məzmununa görə məsuliyyət daşımır. Hər hansı bir məlumatı,
            materialı və fotoşəkili administrasiyanın yazılı icazəsi olmadan
            istifadə etmək qeyri-qanuni hesab ediləcək və Azərbaycan
            Respublikasının Qanunlarına əsasən cəzalandırılacaqdır.
          </p>
        </div>
      </div>
      <div class="cont pb-5">
        <div>
          <p style="color: white;">2006-2022 Digital Classifieds MMC. VÖEN: 1405631661</p>
        </div>
        <div>
            <p  style="color: white;">(012) 599-08-01; (012) 505-77-55</p>
        </div>
        <div>
            <a href="">turbo@turbo.az</a>
        </div>
        <div>
            <a href="">Mobil versiyası</a>
        </div>
      </div>
    </footer>
  </body>
</html>
