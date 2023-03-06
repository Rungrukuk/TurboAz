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
    <link rel="stylesheet" href="css/register.css" />
  </head>
<body>
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
                <a style="cursor: pointer">
                  <img
                    style="width: 30px"
                    src="https://turbo.azstatic.com/assets/application/sprites/main-18cd1e9ee113a0b32e2ee0a2ed0036728d0539b1afe7398d2456b656a986ac69.svg#icon-user"
                    alt=""
                  />
                  <span>Giriş</span>
                </a>
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
    <div class="add-announcement red-bck">
      <div
        class="d-flex justify-content-between align-items-center cont"
        style="height: 60px"
      >
        <div
          class="d-flex justify-content-center gap-4 links"
          style="margin-left: 15px"
        >
          <a href="index.php">Bütün elanlar</a>
          <a href="">Avtosalonlar</a>
          <a href="">Ehtiyat hissələri və aksesuarlar</a>
        </div>
      </div>
    </div>
    <!--/ Form -->
    <form method = "post" action="php/register.php" class="cont">
    <?php if(isset($_GET['error'])){ 
         ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
	<?php } ?>
  <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
    <div>
          <label for="fullname">Adiniz</label>
          <input type="text" name="fullname" id="fullname" class="input">
      </div>
      <div>
        <label for="city">Seher</label>
        <input type="text" name="city" id="city" class="input">
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="input">
    </div>
    <div>
        <label for="number">Nomre</label>
        <input type="number" name="number" class="input" id="number" placeholder="(000) 000-00-00">
    </div>
    <div>
        <label for="password">Şifrə</label>
        <input type="password" name="password" class="input" id="password">
    </div>
    <div>
    <button type ="submit" class="button">Qeydiyyatdan Keç</button>
    <a href="login.php"  id = "link">Daxil Ol</a>
    </div>
    <p class = "link-secondary" >Elan yerləşdirərək, siz Turbo.az-ın İstifadəçi razılaşması və Qaydaları ilə razı olduğunuzu təsdiq edirsiniz</p>
    </form>
     <!--/ Footer -->
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