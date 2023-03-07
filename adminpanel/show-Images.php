<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="@housamz">
  <meta name="description" content="Mass Admin Panel">
  <title>Turboaz Admin Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/announc.css" />

</head>

<body>
  <?php

  if (isset($_GET['index'])) {
    $id = $_GET['index'];
  }
  ?>
  <form method="post" action="confirm-listing.php?id=<?php echo $id ?>" enctype='multipart/form-data'>
    <?php
    include "../php/db_conn.php";
    $sql = "SELECT * FROM carinfo WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $car = $stmt->fetch();
    $emailsql = $car['email'];
    $bannovu = $car['bannovu'];
    $oturucu = $car['oturucu'];
    $yanacaq = $car['yanacaq'];
    $marka = $car['marka'];
    $model = $car['model'];
    $yurus = $car['yurus'];
    $qiymet = $car['qiymet'];
    $buraxilisili = $car['buraxilisili'];
    $muherrikinhecmi = $car['muherrikinhecmi'];
    $imgname = $car['img_name'];
    $imgname2 = $car['img_name2'];
    $suretqutusu = $car['suretqutusu'];
    $reng = $car['reng'];
    $muherrikingucu = $car['muherrikingucu'];


    ?>
    <div style="margin-left: 15%;">
      <div class="car-img">
        <img src="images/<?php echo $imgname2 ?>" alt="" style="width: 400px;height: 250px;">
        <img src="images/<?php echo $imgname ?>" alt="" style="width: 400px;height: 250px;margin-left: 20%">
      </div>



      <div class="form-elements">
        <label for="">Marka:</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <p>
          <?php echo $marka ?>
        </p>
        <label for="">Yanacaq növü: </label>
        <p>
          <?php echo $yanacaq ?>
        </p>
      </div>
      <div class="form-elements">
        <label for="">Model:</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <p>
          <?php echo $model ?>
        </p>
        <label for="">Ötürücü: </label>
        <p>
          <?php echo $oturucu ?>
        </p>
      </div>
      <div class="form-elements">
        <label for="">Ban Novu:</label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <p>
          <?php echo $bannovu ?>
        </p>
        <label for="">Sürətlər qutusu:</label>
        <p>
          <?php echo $suretqutusu ?>
        </p>
      </div>
      <div class="form-elements">
        <label for="">Yürüş:</label>
        <p>
          <?php echo $yurus ?>
        </p>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <label for="">Buraxılış ili: </label>
        <p>
          <?php echo $buraxilisili ?>
        </p>
      </div>
      <div class="form-elements">
        <label for="">Rəng: </label>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <p>
          <?php echo $reng ?>
        </p>
        <label for="">Mühərrikin həcmi, sm3:</label>
        <p>
          <?php echo $muherrikinhecmi ?>
        </p>
      </div>
      <div class="form-elements">
        <label for="">Qiymət:</label>
        <p>
          <?php echo $qiymet ?>
        </p>
        <!-- <input type="text" style="border: 1px solid gray; border-radius: 4px;"> -->
        <label for="">Mühərrikin gücü, a.g: </label>
        <p>
          <?php echo $muherrikingucu ?>
        </p>
      </div>
      <input type="submit" value="Add to listings" class="btn btn-success">
    </div>


  </form>
</body>

</html>