
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>renFOOD</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<div id="core">
   <div id="up">
    <div id="logo"><p id="ff">ren</p><p id="fff">FOOD</p></div>
    <div id="search"><p>&#128269 Search</p></div>
    <div id="profile">
      <div id="background_profile"></div>
    </div>
   </div>
   <div id="absolute">
   <div id="strelka"></div>
    <div id="asd">
      <div id="jkl">Fast</div>
      <div id="lkj"><div id="food">Food</div><div id="delivery">Delivery</div></div>
    </div>
    <div id="sdf">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium</div>
    <div id="but"> <p a href="cart.php"> Order Now </p></div>
<!--     <a href="second.html" class="buy_color">buy</a>
 -->

   </div>
   <div id="absolute2"></div>
   <div id="down"></div>  
    </div>
    <div id="cart">
  <div id="options">
    
</body>
</html>