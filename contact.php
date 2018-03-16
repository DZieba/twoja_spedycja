

<?php $current = 'contact' ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
      
    <body>
    <section class="prices" id="prices">
    <div class="container">
        <h1>Wycena</h1>

        <form id="myForm"  method="post" name="myForm" class="pricing_form" onsubmit="" action="form-to-email.php">

            <div class="general">              
                              <input type="email" name="email" placeholder="email" required>
                <input type="text" placeholder="Twoj nr tel." name="phone">

</div>
<div class="description">
                
                <textarea class="text_full" rows="6" placeholder="wpisz swoją wiadomość"  name="message"></textarea>
                
                <button class="btn-info" name="submit" id="submitbutton" type="submit">Wyślij</button>
            </div>

        </form>
    </div>
    </div>
</section>
</div>
<section class="contact" id="contact">
    <div class="container">
        <h1>Kontakt</h1>
        <div class="contact_people">
    
        </div>
        <h2 class="person_title">Obsługa klienta</h2>
        <div class="contact_people">

            <div class='staff'>

               
                <p>Szymon Fiszer</p>
                    <div class="icon">
                        <i class="ion-ios-telephone"></i>
                        <a href="tel:533514522‬"> 533 514 522‬ </a>
                    </div>
                    <div class="icon">
                        <i class="ion-email"></i>
                        <a href="mailto:szymon.fiszer@movido.pl"> szymon.fiszer@movido.pl</a>
                    </div>              
</div>
         <div class='staff'>           
                <p>Łukasz Emmerich</p>
                    <div class="icon">
                        <i class="ion-ios-telephone"></i>
                        <a href="tel:‭667851401">‭667 851 401 </a>
                    </div>
                    <div class="icon">
                        <i class="ion-email"></i>
                        <a href="mailto:lukasz.emmerich@movido.pl"> lukasz.emmerich@movido.pl</a>
                    </div>
                
</div>
        </div>
        <div class="contact_people">

            <div class='staff'>
                <h2 class="person_title">Biuro</h2>               
                    <div class="icon">
                        <i class="ion-ios-telephone"></i>
                        <a href="tel:0048 323218909">0048 323218909</a>
                    </div>
                    <div class="icon">
                        <i class="ion-email"></i>
                        <a href="mailto:sabina.biuro@movido.pl">  biuro@movido.pl

</a>
                    </div>
                
</div>
        </div>

    </div>

</section>
<?php include('footer.php'); ?>

