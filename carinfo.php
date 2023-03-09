<?php

session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Turbo.az</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/announc.css" />
</head>

<body>
  <!--Header-->
  <header style="margin-top: 0%">
    <div class="row cont">
      <div class="col-3 red-bck mt-2 mr-5 d-flex justify-content-center align-items-center flex-column">
        <img style="width: 50%" src="images/turboaz.png" alt="" />
      </div>
      <div class="col-9 mt-2">
        <div class="row" style="height: 100%">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <div>
              <p style="font-size: 15px; color: #c4c4c4">
                Dəstək xidməti: (012) 599-08-01; (012) 505-77-55
              </p>
            </div>
            <div style="height: 100%; display: flex; gap: 30px">
              <span>по-русски</span>
              <a style="cursor: pointer">
                <img style="width: 30px" src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#bookmarks--heart-white" alt="" />
                <span>Seçilmişlər</span>
              </a>
              <a href="<?php if (!isset($_SESSION["useremail"])) {
                          echo "login.php";
                        } else {
                          echo "";
                        }
                        ?>" style="cursor: pointer">
                <img style="width: 30px" src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#icon-user" alt="" />
                <span style="color: white">
                  <?php if (!isset($_SESSION["useremail"])) {
                    echo "Giriş";
                  } else {
                    echo $_SESSION["useremail"];
                  }
                  ?>
                </span>
              </a>
              <?php if (isset($_SESSION["useremail"])) {
              ?>
                <a href="php/destroysessions.php" style="cursor: pointer">
                  <img style="width: 30px" src="https://upload.wikimedia.org/wikipedia/commons/8/8a/OOjs_UI_icon_logOut-ltr.svg" alt="" />
                  <span style="color: white">
                    Log Out
                  </span>
                </a>
              <?php } ?>
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
    <div class="d-flex justify-content-between align-items-center cont" style="height: 60px">
      <div class="d-flex justify-content-center gap-4 links" style="margin-left: 15px">
        <a href="index.php">Bütün elanlar</a>
        <a href="">Avtosalonlar</a>
        <a href="">Ehtiyat hissələri və aksesuarlar</a>
      </div>
    </div>
  </div>
  </div>
  <!--Main Content-->
  <h1 class="cont mt-2 mb-2 py-4" style="
        font-size: 18px;
        font-weight: 700;
        border-bottom: 1px solid #efefef;
      ">
    ELAN
  </h1>
  <!--Form-->
  <?php
  include "../TurboAz/php/db_conn.php";
  $maxNumberOfAnn = 15;
  $x = 1;
  while ($maxNumberOfAnn > 0) {
    $string = "id" . $x . "";
    if (isset($_GET[$string])) {
      $id = $_GET[$string];
      break;
    }
    $x++;
    $maxNumberOfAnn++;
  }
  $sql = "SELECT * FROM carinfo WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);
  $car = $stmt->fetch();
  $emailsql =  $car['email'];
  $bannovu =  $car['bannovu'];
  $oturucu =  $car['oturucu'];
  $yanacaq =  $car['yanacaq'];
  $marka =  $car['marka'];
  $model =  $car['model'];
  $yurus =  $car['yurus'];
  $qiymet =  $car['qiymet'];
  $buraxilisili =  $car['buraxilisili'];
  $muherrikinhecmi =  $car['muherrikinhecmi'];
  $imgname =  $car['img_name'];
  $imgname2 =  $car['img_name2'];
  $status =  $car['status'];
  $suretqutusu =  $car['suretqutusu'];
  $reng =  $car['reng'];
  $muherrikingucu =  $car['muherrikingucu'];
  $sql = "SELECT * FROM userinfo WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$emailsql]);
  $user = $stmt->fetch();
  $ad = $user['fullname'];
  $number = $user['number'];
  $city =  $user['city']
  ?>
  <div style="margin-left: 15%;">
    <div class="car-img">
      <img src="images/<?php echo $imgname2 ?>" alt="" style="width: 400px;height: 250px;">
    </div>

    <div class="form-elements">
      <label for="">Ad:</label>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <p><?php echo $ad  ?></p>
      <label for=""> E-mail:</label>
      <p><?php echo $emailsql  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Mobil Nömrə:</label>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <p><?php echo $number  ?></p>
      <label for=""> Şəhər: </label>
      <p><?php echo $city  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Marka:</label>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <p><?php echo $marka  ?></p>
      <label for="">Yanacaq növü: </label>
      <p><?php echo $yanacaq  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Model:</label>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <p><?php echo $model  ?></p>
      <label for="">Ötürücü: </label>
      <p><?php echo $oturucu  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Ban Novu:</label>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <p><?php echo $bannovu  ?></p>
      <label for="">Sürətlər qutusu:</label>
      <p><?php echo $suretqutusu  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Yürüş:</label>
      <p><?php echo $yurus  ?></p>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <label for="">Buraxılış ili: </label>
      <p><?php echo $buraxilisili  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Rəng: </label>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <p><?php echo $reng  ?></p>
      <label for="">Mühərrikin həcmi, sm3:</label>
      <p><?php echo $muherrikinhecmi  ?></p>
    </div>
    <div class="form-elements">
      <label for="">Qiymət:</label>
      <p><?php echo $qiymet  ?></p>
      <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
      <label for="">Mühərrikin gücü, a.g: </label>
      <p><?php echo $muherrikingucu  ?></p>
    </div>
  </div>







  <!--Footer-->
  <footer>
    <div class="cont d-flex justify-content-between align-items-center mb-5 mt-5">
      <div style="width: 50%; margin-bottom: 1rem">
        <a href="">İstifadəçi razılaşması</a>
        <a href="">Qaydalar Qanun</a>
        <a href="">Məxfilik siyasəti</a>
      </div>
      <div>
        <p style="color: #979797">
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
        <p style="color: white">
          2006-2022 Digital Classifieds MMC. VÖEN: 1405631661
        </p>
      </div>
      <div>
        <p style="color: white">(012) 599-08-01; (012) 505-77-55</p>
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