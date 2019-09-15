<?php include_once 'view/head.php'; ?>

<?php include_once 'view/header.php'; ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1>CriptoFiles</h1>
                            <p>Criptografe e descriptografe seus arquivos de forma rápida e prática.</p>
                            <a href="#" class="btn_1">Escolha seu arquivo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="Arquivo-tab" data-toggle="tab" href="#Arquivo" role="tab" aria-controls="Arquivo" aria-selected="true">Arquivo</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="Arquivo" role="tabpanel" aria-labelledby="Arquivo-tab">
                                <div class="booking_form">
                                    <?php include_once 'criptografia/form.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->
    <?php include_once 'view/footer.php'; ?>

    <?php include_once 'view/foot.php'; ?>
