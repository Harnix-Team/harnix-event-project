@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/apropos.css')}}">
@endsection

@section('title')
    A propos
@endsection
@section('Content')

    <div class="intro-text">
        <p>HARNIX - EVENTS</p>
        <p>Change les événements en rencontres extraordinaires</p>
        <p>Une solution qui change des vies, car elle encourage les rencontres, les occasions de détente et de changement pour un meilleur réseautage. Des opportunités incroyables pour apprendre, développer de nouvelles compétences et grandir.</p>
    </div>

    <div class="transparent-overlay"></div>

    <div class="apropos">
        <p class="title"> À propos</p>
        <p class="text-apropos">Harnix Events, la plateforme d'événements révolutionnaire, a été conçue avec une vision : ancrer les moments dans les mémoires. Développée selon les valeurs fortes et des principes d'accessiblité, de simplicité et d'efficacité, elle offre une expérience sans faille aux organisateurs et participants. De l'achat de billets à la gestion d'événementsen direct, Harnix Events place la qualité et l'impact mémorable au coeur de chaque fonctionnalité, créant ainsi des expériences événementielles inoubliables</p>
    </div>
    
    <br><br>

    <div class="achatTicketInfos">
        <div class="part1">
            <p>Tagline</p>
            <p>Comment acheter mon billet avec Harnix Event ? </p>
            <a class="btnApropos" href="#">Participer à un événement !</a>
            <img src="{{asset('img/content/scan.jpg')}}" alt="">
            <!-- <img src="../ressources/images/ticket.jpg" alt=""> -->
        </div>

        <div class="part2">
            <div class="step">
                <p> Étape 1 : Achat des billets en ligne </p><br>
                <span>Rendez-vous sur notre site web convivial pour acheter vos billets en quelques clics. Une fois l'achat terminé, vous recevrez un mail de confirmation contenant toutes les informations nécessaires.</span>
            </div>
            <div class="step">
                <p> Étape 2 : Fichier dans le mail </p><br>
                <span>Ouvrez le mail que vous avez reçu. À l'intérieur, vous trouverez un fichier spécifique à votre événement. Il contient toutes les données importantes liées à votre participation.</span>
            </div>
            <div class="step">
                <p> Étape 3 : Importation dans l'application mobile </p><br>
                <span>Installez l'application mobile Harnix Events depuis votre magasin d'applications préféré. Une fois installée, importez simplement le fichier depuis votre mail dans l'application. Cela générera automatiquement un code QR unique associé à votre billet.</span>
            </div>
            <div class="step">
                <p> Étape 4 : Code QR pour l'accès </p><br>
                <span>Vous êtes prêt(e) ! À l'événement, présentez votre téléphone avec l'application ouverte. L'équipe sur place scannera le code QR, validant instantanément votre présence.</span>
            </div>
        </div>
    </div>
    <br><br>

    <div class="achatTicketInfos">
        
        <div class="part2">
            <div class="step">
                <p> Étape 1 : Installation de l'application </p><br>
                <span>Commencez par installer l'application Harnix Events sur votre téléphone. Une fois installée, connectez-vous à votre compte créateur d'événement.</span>
            </div>
            <div class="step">
                <p> Étape 2 : Sélection de l'événement </p><br>
                <span>Une fois connecté(e), parcourez la liste de vos événements ou choisissez celui pour lequel vous souhaitez effectuer le scanning des billets. La plateforme affiche toutes les informations pertinentes liées à cet événement spécifique.</span>
            </div>
            <div class="step">
                <p> Étape 3 : Lancement du scanning </p><br>
                <span>Sur l'écran dédié à votre événement, lancez la fonction de scanning des billets. La caméra de votre téléphone est prête à capturer les codes QR associés aux billets des participants.</span>
            </div>
            <div class="step">
                <p> Étape 4 : Validation des billets </p><br>
                <span> Pointez simplement votre téléphone vers le code QR présenté par les participants. L'application reconnaîtra instantanément les billets valides, facilitant ainsi le processus d'entrée pour les participants autorisés.</span>
            </div>
            <div class="step">
                <p> Étape 5 : Suivi en temps réel </p><br>
                <span> Pointez simplement votre téléphone vers le code QR présenté par les participants. L'application reconnaîtra instantanément les billets valides, facilitant ainsi le processus d'entrée pour les participants autorisés.</span>
            </div>
        </div>

        <div class="part1">
            <p>Tagline</p>
            <p>Comment scanner les tickets en toute sécurité ? </p>
            <a class="btnApropos" href="#">Créer un événement </a>
            <img src="{{asset('img/content/scan.jpg')}}" alt="">

        </div>
    </div>
    <br><br>

    <div class="installationApp">
        <div>
            <p>Installez l'app mobile !</p>
            <p>C'est aussi simple que ça ! Harnix Events s'engage à rendre chaque étape de votre expérience événementielle aussi fluide que possible.</p>
            <p>Téléchargez l'application, importez votre billet, et plongez-vous dans l'événement sans tracas.</p><br>
            <a class="btnApropos install" href="#"> &nbsp &nbsp &nbsp Installer &nbsp &nbsp<i class="fa fa-download">&nbsp &nbsp &nbsp</i></a>
        </div>
        <div>
            <div class="image">
                <img src="{{asset('img/content/event_screens.png')}}" alt="img">
            </div>
        </div>
    </div>
    <br>

@endsection

