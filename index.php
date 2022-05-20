<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <script src="https://kit.fontawesome.com/1eaebda83d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
          
</head>
<body>
    <div class="container-fluid p-0">
        <!-- navbar -->
        <?php include "navbar.php";?>

        <div class="main">
            <main>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <section class="home" id="home">
                            <h1>Hello, I'm Miku Nagakawa.</h1>
                        </section>
                        <!-- <div class="container"> -->
                        <section class="about" id="about">
                            <h2 class="text-center">About Me</h2>
                            <p>永川美空です。2021年の5月からプログラミングの勉強を始めました。PHPを初めに学び、その後Laravelを習得しました。現在はUdemyでweb developmentコースを用いてJavaScriptを中心に学習を続けています。今後の目標は、成長できる企業で働きながら様々な経験と知識をつけて、業務システムの開発に携わることです。流学区や英会話講師としてのアルバイト経験もあるので、いつかグローバル案件に携わりたいと考えています。</p>
                            
                        </section>
                    </div>
                </div>
                

                    <!-- projects section -->
                        <?php include 'projects.php'; ?>

                    <!-- skills section -->
                        <?php include 'skills.php'; ?>

                    <!-- education -->
                        <?php include 'education.php'; ?>
                <!-- </div> -->
            </main>
        </div>
    </div>
</body>
</html>