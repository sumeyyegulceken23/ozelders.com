<?php 
include "baglan.php";

$ilcek="SELECT * FROM iller";
$ilsorgu=mysqli_query($baglan,$ilcek); 

$ilcecek="SELECT * FROM ilceler";
$ilcesorgu=mysqli_query($baglan,$ilcecek);

$ayarlar="SELECT * FROM ayarlar"; 
$lsorgu=mysqli_query($baglan,$ayarlar);
$ayarcek=mysqli_fetch_assoc($lsorgu);


$derscek="SELECT * FROM ders_alani";
$derssorgu=mysqli_query($baglan,$derscek);

?>
<?php include "inc/navbar.php"; ?>
      <!--Main-->
    <main>
        <h1 style="text-align: center;" class="font-italic">Özel ders almak istiyorum</h1>
        <div class="container my-5"> 
    <div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <form method="GET" action="searchdetay.php">
                                 <!-- <input type="text" name="ara" placeholder="arayın"> -->
                                 <div class="form-group ">
                                    <select id="il" class="form-control" >
                                        <option selected>Seçim Yapınız</option>
                                        <?php  while($ilcek = mysqli_fetch_assoc($ilsorgu)) { ?>
                                           <option  value="<?php echo $ilcek['il_kod'] ?>" id="<?php echo $ilcek['il_kod'] ?> "><?php echo $ilcek['il_adi'] ?> </option>
                                       <?php }?>
                                       
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-3">
                            <div class="form-group ">
                                <select id="ilce" class="form-control" name="ara" >
                                    <option selected>İlçe seçiniz</option>
                                    <?php  while($ilcecek = mysqli_fetch_assoc($ilcesorgu)) { ?>
                                    <option value="<?php echo $ilcecek['ilce_adi'] ?>" id="<?php echo $ilcecek['ilce_il_kodu'] ?>"><?php echo $ilcecek['ilce_adi'] ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group ">
                                <select id="ilce" class="form-control" name="ara" >
                                    <option selected>Alan seçiniz</option>
                                    <?php  while($derscek = mysqli_fetch_assoc($derssorgu)) { ?>
                                    <option value="<?php echo $derscek['alan'] ?>" id="<?php echo $derscek['alan'] ?>"><?php echo $derscek['alan'] ?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <button type="submit" class="btn btn-dark pl-5 pr-5">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
</section>
<section>
    </div>
       
  <h2 style="text-align:center;" class="font-italic"> Kategoriler</h2>

<div class="container">
    <img src="img/r1.png" 
    <img src="img/r2.png">
    <img src="img/r3.png">
    <img src="img/r4.png">
    <img src="img/r5.png">
    <img src="img/r6.png">
    <img src="img/r7.png">
    <img src="img/r8.png">
    <img src="img/r9.png">
</div>

<!--Kutular-->
<p style="text-align:center;font-weight: bolder;font-size: 30px;" class="font-italic ">Ders Verenler</p>

<div class="container-fluid "> 
<div class="row"> 
<div  class="card mx-4" style="width: 35rem;">
  <div  class="card-body">
    <div class="row"> 
    <h5 class="card-title mx-3">Merve Gülçeken</h5>
    <svg style="position: relative;left:140px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
    </svg>
    <h6 style="position: relative;top:4px ;left:145px" class="">Onaylı üye </h6>
    </div>

    <svg style="position: relative;left:302px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
    </svg>
    <h6 style="position: relative;top:-19px ;left:330px" class="">+10 Yıl Deneyim </h6>
    <h6 style="position:relative;top: -55px;" class="card-subtitle mb-2 text-muted">Matematik öğretmeni</h6>
    <p  class="card-text">
    Boğaziçi Üniversitesi Mezunu'ndan  AP, A-level(micro-microeconomics)  matematik, calculus, statistics dersleri.Proje Danışmanlığı.ALES&LGS
   </p>
   </div>
</div>


<div class="card mx-2" style="width: 35rem;">
  <div class="card-body">
    <div class="row"> 
    <h5 class="card-title mx-3">Sümeyye Gülçeken</h5>
    <svg style="position: relative;left:115px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
    </svg>
    <h6 style="position: relative;top:4px ;left:123px" class="">Onaylı üye </h6>
    </div>

    <svg style="position: relative;left: 300px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
    </svg>
    <h6 style="position: relative;top:-19px ;left:327px" class="">+10 Yıl Deneyim </h6>
    <h6 style="position:relative;top: -55px;" class="card-subtitle mb-2 text-muted">Fizik Öğretmeni</h6>
    <p  class="card-text">
   Uzman Psikolog - Öğrenci/Eğitim Koçu - Okul ve Üniversite Derslerine Takviye - Proje Danışmanlığı.YKS&TYT&KPSS&DGS&ALES&LGS
   </p>
   </div>
 </div>
</div>
<div class="row"> 
<div  class="card my-3 mx-4" style="width: 35rem;">
  <div class="card-body">
    <div class="row"> 
    <h5 class="card-title mx-3">Sümeyye Gülçeken</h5>
    <svg style="position: relative;left:112px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
    </svg>
    <h6 style="position: relative;top:4px ;left:119px" class="">Onaylı üye </h6>
    </div>

    <svg style="position: relative;left:298px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
    </svg>
    <h6 style="position: relative;top:-19px ;left:325px" class="">+10 Yıl Deneyim </h6>
    <h6 style="position:relative;top: -55px;" class="card-subtitle mb-2 text-muted">Fizik Öğretmeni</h6>
    <p  class="card-text">
   Uzman Psikolog - Öğrenci/Eğitim Koçu - Okul ve Üniversite Derslerine Takviye - Proje Danışmanlığı.YKS&TYT&KPSS&DGS&ALES&LGS
   </p>
   </div>
 </div>

 <div class="card my-3 mx-2" style="width: 35rem;">
  <div class="card-body">
    <div class="row"> 
    <h5 class="card-title mx-3">Sümeyye Gülçeken</h5>
    <svg style="position: relative;left:115px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
    </svg>
    <h6 style="position: relative;top:4px ;left:119px" class="">Onaylı üye </h6>
    </div>

    <svg style="position: relative;left:303px" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
    </svg>
    <h6 style="position: relative;top:-19px ;left:327px" class="">+10 Yıl Deneyim </h6>
    <h6 style="position:relative;top: -55px;" class="card-subtitle mb-2 text-muted">Fizik Öğretmeni</h6>
    <p  class="card-text">
   Uzman Psikolog - Öğrenci/Eğitim Koçu - Okul ve Üniversite Derslerine Takviye - Proje Danışmanlığı.YKS&TYT&KPSS&DGS&ALES&LGS
   </p>
   </div>
 </div>


 </div>
</div> 

    
 







  </main>

  </body>
  <?php include "inc/footer.php"; ?>
</html>