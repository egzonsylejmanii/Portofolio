
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./assets/style.css">

    
    
</head>
<body>
    
<header class="header">
    <div class="container">
        <div class="main-header">
            <div class="logo">
               <a href="#">Egzon's Portofolio</a>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>

               <?php
               $egzoni = ["about" , "education","experience", "skills","contact"];
               foreach($egzoni as $item ){      ?>
                       <li><a href=<?= "#" . $item ?> ><?= $item ?></a></li>
               <?php
                }
               
               ?>
               </ul>
            </nav>

        </div>
    </div>
 </header>

 <?php
    include_once './about.php';
    include_once './education.php';
    include_once './experience-courses.php';
    include_once './skills.php';
    include_once './contact.php';
 ?>

 <script src="./assets/script.js"></script>
</body>
</html>