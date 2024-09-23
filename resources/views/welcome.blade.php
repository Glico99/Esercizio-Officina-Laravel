<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <title>Officina Abagnale</title>
</head>

<body>
    <div id="titolo">
        <img src="{{Vite::asset('resources/imgs/styleImages/icona.png')}}" alt="logo officina" class="animate__animated animate__flip"><br>
        <section>
            <h1>OFFICINA <b>ABAGNALE</b></h1>
            <h2>di <b>Abagnale Antonio</b></h2>
        </section>
    </div>

    <div class="navBar" >
        <ul>
            <a href="https://www.facebook.com/people/Officina-Meccanica-Abagnale-Antonio/100067082151835/" target="_blank"><li>Facebook</li></a>
            <a href="index.html#titoloGalleria"><li>Galleria</li></a>
            <a href="index.html#contatti"><li>Contatti</li></a>
            <a href="index.html#mappa" class="minuscolo"><li>Dove Trovarci</li></a>
        </ul>
    </div>

    <div class="presentazione">
        <section id="benvenuto"><p class="animate__animated animate__fadeInDown">Vieni a scoprire la nostra officina, l'unica in campania autorizzata a riparare il tuo mezzo da lavoro con pezzi originali Leomar</p></section>
        <section id="storia" ><p class="animate__animated animate__flipInX">Un'officina automobilistica è un luogo in cui le auto vengono riparate e mantenute. Meccanici qualificati lavorano in queste officine per risolvere eventuali problemi con i veicoli. Utilizzano strumenti e attrezzature per diagnosticare i problemi ed effettuare le riparazioni necessarie. L'officina è organizzata e dispone di aree designate per diverse attività come la riparazione del motore, la carrozzeria e la verniciatura. I clienti portano le loro auto in officina quando hanno bisogno di riparazioni o manutenzione regolare. I meccanici assicurano che le auto siano in buone condizioni e pronte per essere guidate in sicurezza sulle strade.</p><section/>
    </div>

    <div id="titoloGalleria" class="animazioneTitolo">
        <h1>Scopri la gamma di veicoli Leomar</h1>
        <section>
            <div></div>
            <!--FIGURE JS-->
        </section>
        
    </div>
   <script>{!!Vite::content('resources/js/listaCamion.js')!!}</script>
    <div class="galleria" >
        <figure id="camionUno" class="animazioneTitolo">
            <figcaption>Gransasso 60 Q.li</figcaption>
            <img src="{{Vite::asset('resources/imgs/galleryImages/leomar1.jpg')}}" alt="camion uno">
        </figure>

        <figure id="camionDue" class="animazioneTitolo">
            <figcaption>Leomar Puma</figcaption>
            <video src="{{Vite::asset('resources/imgs/galleryImages/video1.mp4')}}" type="video/mp4" class="hover" muted autoplay loop></video>
            <script>{!!Vite::content('resources/js/hover.js')!!}</script>
        </figure><br>

        <figure id="camionTre" class="animazioneTitolo">
            <figcaption>Leomar Puma Giallo</figcaption>
            <img src="{{Vite::asset('resources/imgs/galleryImages/leomar3.jpg')}}" alt="camion tre">
        </figure>
    </div>

    <div id="contatti" class="animazioneTitolo">
        <ul>
            <li id="telefono">Telefono</li>
            <li id="fax">Fax</li>
            <li id="email">Email</li>
        </ul>
    </div>
    <div id="mappa">
        <h1>La nostra sede</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!4v1705416647037!6m8!1m7!1sjbBSFhXf8cAy9ihBYdmwjQ!2m2!1d40.70822885732812!2d14.52031908759241!3f179.4724488312879!4f-22.417148625781863!5f0.40029639980361975" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <script>{!!Vite::content('resources/js/main.js')!!}</script>
</body>
</html>