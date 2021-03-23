<?php
// HEADER
include('layout/header.php');
?>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid">
            <div class="page-title">

                <h2 class="font-bold">Apresentação</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                Nesta aula, será discutido o Plano Plurianual. Serão apresentados também os eixos governamentais de atuação intersetorial com foco nos temas estratégicos, programas governamentais e iniciativas com seus respectivos atributos.
 
                <br><br>A elaboração do conteúdo é fundamentada em trabalhos produzidos por: Rita de Cássia  eal Fonseca dos Santos e a Célula de Planejamento da Seplag.
                </p>

               
                <br>

                <h2 class="font-bold">Objetivo</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                Apresentar os eixos governamentais de atuação intersetorial com foco nos temas estratégicos, programas governamentais e iniciativas. 
                </p>


                <br><br>

                <div class="text-center">
                    <a href="Topico01.php" type="button" class="btn btn-outline-success btn-sm">Próxima página</a>
                </div>

                <!-- SCRIPT LIGHTBOX -->
                <script>
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox();
                    });

                    $(function() {
                        $('[data-toggle="popover"]').popover()
                    })

                    $('.popover-dismiss').popover({
                        trigger: 'focus'
                    })
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>