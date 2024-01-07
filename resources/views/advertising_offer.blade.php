@extends("layouts.base")

@section('style')
    <link rel="stylesheet" href="{{asset('css/style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/all.min.css.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style/style.css')}}">
    <link rel="stylesheet" href="{{asset('font/flaticon.css')}}">
@endsection

@section('title')
   Nos offres
@endsection
@section('Content')

    <section class="bg-04">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Plans flexibles pour tout types de campagnes !!</h2>
                        <p>Passez à l'action et bénéficiez d'une réduction de 25%.</p>
                      
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="head-content">
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <h4>Plan Basic</h4>
                                <h5>100fr cfa<span>/ jour</span></h5>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="list-content">
                                <h5>Recommandé</h5>
                            </div>
                            <h6>Positionnez vos événements en tête d'affiche sur H-event.</h6>
                            <ol>
                                <li class="se-color"><i class="fal fa-check-circle"></i>Messages personnalisés</li>
                                <li><i class="fal fa-arrow-circle-right"></i>Meilleurs positionnement</li>
                                <li><i class="fal fa-arrow-circle-right"></i>Touchez 50 personnes/jours</li>
                                <!-- <li class="se-color"><i class="fal fa-check-circle"></i>20 Days of support</li> -->
                            </ol>
                            <a class="active-a href="#">Commencer mon boostage</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="head-content">
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <h4>Large Plan</h4>
                                <h5>200fr cfa<span>/jours</span></h5>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="list-content">
                                <h5 class="active-plan">Plus recommandé</h5>
                            </div>
                            <h6>Positionnez vos événements en tête d'affiche sur H-event et ailleurs.</h6>
                            <ol>
                                <li class="se-color"><i class="fal fa-check-circle"></i>Messages personnalisés</li>
                                <li><i class="fal fa-arrow-circle-right"></i>Meilleurs positionnement</li>
                                <li><i class="fal fa-arrow-circle-right"></i>Touchez +100 personnes/jours</li>
                                <li class="se-color"><i class="fal fa-check-circle"></i>Positionnement sur d'autres site</li>
                            </ol>
                            <a class="active-a" href="#">Commencer mon boostage</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="head-content">
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <h4>Pack Avancé</h4>
                                <h5>500fr cfa <span>/jours</span></h5>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="list-content">
                                <h5>Mieux Recommandé</h5>
                            </div>
                            <h6>Positionnez vos événements en tête d'affiche sur H-event et ailleurs + un Accompagnement par nos agences partenaires.</h6>
                            <ol>
                            <li class="se-color"><i class="fal fa-check-circle"></i>Messages personnalisés</li>
                                <li><i class="fal fa-arrow-circle-right"></i>Meilleurs positionnement</li>
                                <li><i class="fal fa-arrow-circle-right"></i>Touchez +1000 personnes/jours</li>
                                <li class="se-color"><i class="fal fa-check-circle"></i>Positionnement sur d'autres site</li>
                                <li class="se-color"><i class="fal fa-check-circle"></i>Accompagnement des agences publicitaires(conception graphiques)</li>

                            </ol>
                            <a class="active-a" href="#">Commencer mon boostage</a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <script src="{{asset('jss/jquery-3.2.1.min.js')}}"></script> -->
    <!-- <script src="{{asset('jss/bootstrap.min.js')}}"></script> -->
    <!-- <script src="{{asset('jss/script.js')}}"></script> -->
                

@endsection

