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

                <h2 class="font-bold">1 - Sistema Brasileiro de Planejamento e Orçamento </h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    <strong>Objetivo: </strong> Apresentar a legislação e conceitos dos instrumentos de planejamento governamental: PPA, LDO e LOA
                </p>
                <br>

                <h2 class="font-bold">1 - Os Instrumentos de Planejamento Governamental </h2>
                <hr class="pontLaranja">


                <p class="Texto">
                Depois de muitas décadas de uma gestão de Administração Pública conturbada por desequilíbrios econômicos e instabilidade política e social, a Constituição Federal de 1988 estabeleceu as bases para a retomada de um processo amplo de planejamento. Longe de restringir ao modelo dos grandes planos nacionais adotados ao longo do século XX, a Constituição preconizou:
                </p>
                 
                <ul class="Texto">
                    <i class="fa fa-arrow-right CorLaranja"></i> a adoção de sistema de planejamento constituído por planos e programas nacionais, regionais e setoriais. <br>
                    <i class="fa fa-arrow-right CorLaranja"></i> a consolidação de um Plano Plurianual de médio prazo; e<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> que o detalhamento deve ser feito anualmente por meio de uma Lei Orçamentária Anual, elaborada e executada de acordo com o disposto na Lei de Diretrizes Orçamentárias, igualmente de periodicidade anual.
                </ul>

                <div class="alert alert-light-primary" role="alert">
                    <p class="Texto text-center Azul"> 
                        <strong>
                        Estamos falando de planejamentos de médio e longo prazo
                        </strong>
                    </p>
                </div>

                <p class="Texto">
                    A relação entre planejamento e orçamento se dá na interação desses instrumentos, cuja dinâmica é importante ao gestor público conhecer.
                    <br><br>Como médio e longo prazo podemos considerar os planos, os programas e as políticas elaboradas para as diversas áreas de governo. Alguns desses instrumentos decorrem de leis federais, outros de normas locais. 
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th class="BackLaranja text-white textmiddle">
                                <h5> Exemplo</h5>
                            </th>
                            <td>
                                <ul class="Texto">
                                   <i class="fa fa-arrow-right CorLaranja"></i> O plano municipal de saúde, exigido pela Lei n°8.142, de 28 de dezembro de 1990, para que o município receba recursos do Sistema Único de Saúde;<br>
                                   <i class="fa fa-arrow-right CorLaranja"></i> O plano municipal de assistência social, exigido pela Lei n°8.742, de 7 de dezembro de 1993, para que o município receba repasses federais para a assistência social;<br>
                                   <i class="fa fa-arrow-right CorLaranja"></i> O plano diretor local, exigido pelo Estatuto da Cidade (Lei N° 10.257, de 10 de julho de 2001);<br>
                                   <i class="fa fa-arrow-right CorLaranja"></i> O plano municipal de educação, consoante o Plano Nacional de Educação e seus planos decenais (Lei n°10.172, de 9 de janeiro de 2001).
                                </ul>
                            </td>
                        </tr>
                    </table> 
                </div>   
                

                <p class="Texto">
                O orçamento público organiza a programação de gastos por área de atuação governamental, compatibilizando o conteúdo dos planos setoriais com as orientações estratégicas do governo. Assim, a programação de gastos do orçamento será tão boa quanto boa for a qualidade desses planos de médio e longo prazo.
                <br><br>Nos termos da Constituição Federal de 1988, o sistema orçamentário é composto de leis orçamentárias, dos órgãos envolvidos no processo orçamentário e das normas que regem a elaboração e a execução dessas leis, quais sejam:
                </p>
                
                <ul class="Texto">
                    <i class="fa fa-arrow-right CorLaranja"></i> Plano Plurianual (PPA); <br>
                    <i class="fa fa-arrow-right CorLaranja"></i> Lei de Diretrizes Orçamentárias(LDO);<br>
                    <i class="fa fa-arrow-right CorLaranja"></i> Lei Orçamentária Anual(LOA).
                </ul>

                <p class="Texto">
                A seguir, veremos o papel e o conteúdo do Plano Plurianual, bem como a relação que se estabelece com as demais leis, conforme definido pela Constituição de 1988. 
                </p>



                <br><br>
                <div class="text-center">
                    <a href="Apresentacao.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Topico02.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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

                    $(document).ready(function() {
                        new WOW().init();
                    });
                </script>

            </div> <!-- CLASS PAGE TITLE FIM -->
        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>