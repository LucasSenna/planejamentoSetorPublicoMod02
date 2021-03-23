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

                <h2 class="font-bold">5 – Componentes do PPA: Dimensão Tática</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    <strong>Objetivo:</strong> Apresentar o conceito de programa governamental, com enfoque na
                    dimensão tática: iniciativa, produtos e metas.
                </p>

                <h2 class="font-bold">1 - A Dimensão Tática</h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    Na dimensão tática, o PPA é composto pelos programas e suas iniciativas, sendo que cada iniciativa
                    apresenta seu produto principal e suas metas.
                </p>

                <h2 class="font-bold"> 1.1 - Programas Governamentais </h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    Os programas são instrumentos de organização da ação governamental visando ao alcance dos
                    resultados desejados, ou seja, buscam solucionar ou amenizar problemas, atender demandas ou
                    criar/aproveitar oportunidades de desenvolvimento para a população cearense.
                </p>
                <br>

                <p class="Texto">
                    Os programas devem ter a abrangência necessária para representar os desafios, a territorialidade e
                    permitir o monitoramento e a avaliação. Em alguns casos, devem expressar, ou deixar claras, as
                    intersetorialidades ou transversalidades pertinentes.
                </p>
                <br>

                <p class="Texto">
                    Os títulos dos programas devem expressar o tema de política pública tratado, de modo que o
                    governo, a sociedade e todos os demais interessados, atores relevantes na construção e gestão dos
                    programas, conheçam, de forma clara e objetiva, sua linha de atuação.
                </p>
                <br>

                <p class="Texto">
                    Quanto à sua classificação, os programas podem ser:
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Finalísticos</h5>
                            </th>
                            <td class="Texto">
                                São aqueles programas
                                que, para o alcance do
                                resultado pretendido, geram
                                bens ou serviços para a
                                sociedade.
                            </td>
                        </tr>
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Administrativos</h5>
                            </th>
                            <td class="Texto">
                                São aqueles programas
                                voltados para o funcionamento da
                                máquina administrativa do Estado.
                            </td>
                        </tr>
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Especiais</h5>
                            </th>
                            <td class="Texto">
                                São os programas que não
                                contribuem, de forma direta, para a
                                manutenção, expansão ou
                                aperfeiçoamento das ações de
                                governo. Ou seja, não geram
                                produtos à sociedade, nem ao
                                governo.
                            </td>
                        </tr>
                    </table>
                </div>
                <hr>

                <p class="Texto">
                    <strong>
                        <u>Atributos dos programas</u>
                    </strong>
                </p>

                <p class="Texto pl-5">
                    Cada programa conterá atributos que respondam às seguintes perguntas:
                </p>

                <div class="text-center">
                    <img src="imagens/imagem04.png" class="img-fluid wow fadeInDown" alt="Responsive image">
                </div>

                <p class="Texto">
                    <i class="fas fa-square CorLaranja"></i> <strong>Órgão gestor (Quem gerencia?)</strong>
                </p>

                <p class="Texto">
                    É o responsável pela coordenação e gestão do programa. Em regra, corresponde à Secretaria de
                    Governo que coordena políticas no âmbito do tema estratégico ao qual o programa está única ou
                    preponderantemente relacionado.
                </p>
                <hr>

                <!-- Saiba Mais -->
                <div class="accordion" id="accordion1">
                    <div class="cardSaibaMais">
                        <div class="card-headerSaibaMais" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-saibaMais" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="SaibaMaisTitulo"> SAIBA MAIS </div>
                                </button>
                            </h5>
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="SaibaMaisTexto">
                        <p class="Texto">
                            Não haverá a figura de órgão executor de objetivo, pois se entende que o objetivo é do
                            programa, o que torna desnecessária a definição de objetivos do órgão executor. Desse
                            modo, pressupõe que o programa seja pensado em conjunto pelos diversos atores que
                            contribuem para este objetivo.
                        </p>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    <i class="fas fa-square CorLaranja"></i> <strong>Justificativa (Por quê?)</strong>
                </p>

                <p class="Texto">
                    Apresenta, de forma clara e objetiva, o que motivou a elaboração do programa, isto é, o problema, a
                    demanda ou oportunidade que justifica sua execução. A justificativa destaca o contexto que ensejou a
                    criação do programa.
                </p>
                <hr>

                <p class="Texto">
                    <i class="fas fa-square CorLaranja"></i> <strong>Público alvo (Para quem?)</strong>
                </p>

                <p class="Texto">
                    Representa o(s) segmento(s) da sociedade para o(s) qual(is) o programa está sendo construído, ou
                    seja, aquele(s) que se beneficia(m) de forma direta pelas entregas do programa. Em outras palavras, o
                    público-alvo se traduz pelos grupos de pessoas, comunidades, instituições ou setores que serão o foco
                    principal do objetivo do programa.
                </p>
                <hr>


                <p class="Texto">
                    <i class="fas fa-square CorLaranja"></i> <strong>Objetivo (Para quê?)</strong>
                </p>

                <p class="Texto">
                    Expressa para que será realizado o programa, com foco no tratamento de um problema específico,
                    atendimento de determinada demanda social ou potencialização de oportunidades, declarando o resultado
                    que o Governo deseja alcançar em certa área das políticas públicas.
                </p>

                <p class="Texto">
                    O título do objetivo comunica à sociedade as escolhas do Poder Público, orientando taticamente a
                    ação governamental e refletindo as situações a serem alcançadas pela concreta distribuição de bens e
                    serviços e pelo desenvolvimento de novos valores de políticas públicas.
                </p>

                <p class="Texto">
                    O objetivo expressa um resultado transformador da situação atual em que se encontra um
                    determinado tema.
                </p>

                <p class="Texto">
                    Além disso, o objetivo permite a definição de iniciativas que declarem aquilo que deve ser ofertado
                    na forma de bens e serviços, com metas factíveis e realistas para o Governo e a sociedade no período de
                    vigência do Plano.
                </p>

                <p class="Texto">
                    Pretende-se, com isso, evitar declarações genéricas que não representem desafios, bem como a
                    assunção de compromissos inatingíveis.
                </p>
                <hr>

                <!-- Saiba Mais -->
                <div class="accordion" id="accordion1">
                    <div class="cardSaibaMais">
                        <div class="card-headerSaibaMais" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-saibaMais" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="SaibaMaisTitulo"> SAIBA MAIS </div>
                                </button>
                            </h5>
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="SaibaMaisTexto">
                        <p class="Texto">
                            A regra é que cada programa tenha apenas um objetivo, de modo a deixar mais claro o
                            foco do programa. Excepcionalmente, o programa poderá ter mais de um objetivo,
                            mediante justificativa do órgão gestor.
                        </p>
                    </div>
                </div>
                <hr>

                <h2 class="font-bold"> 1.2 - As Iniciativas </h2>
                <hr class="pontLaranja">

                <p class="Texto">
                    <i class="fas fa-circle CorLaranja"></i> <strong>Iniciativas (O quê?)</strong><br>
                </p>

                <p class="Texto">
                    Consistem nas entregas à sociedade ou ao Estado de bens e serviços (produtos), resultando na
                    execução de um conjunto de ações orçamentárias e não-orçamentárias, com o propósito principal de
                    contribuir para a consecução do objetivo do programa e, consequentemente, para o resultado do tema
                    estratégico.
                </p>

                <p class="Texto">
                    Como mencionado, <strong>produto</strong> consiste no bem ou serviço ofertado à sociedade ou ao próprio Estado.
                </p>


                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Exemplo</h5>
                            </th>
                            <td class="Texto">
                                Escola construída, sistema de TV via satélite implantado. Em alguns casos, pode ser
                                expresso pelos beneficiários da iniciativa: família assentada
                            </td>
                        </tr>
                    </table>
                </div>
                <hr>

                <p class="Texto">
                    Dessa forma, o produto responde à pergunta <strong>"O quê?"</strong>, apontando para o que será entregue à
                    sociedade (ou ao Estado) e, em alguns casos, <strong>quem</strong> será beneficiado com a execução da iniciativa.
                </p>

                <p class="Texto">
                    As iniciativas definem a atuação do Poder Público e estabelecem um elo entre o PPA e o Orçamento
                    (Lei Orçamentária Anual – LOA).
                </p>

                <p class="Texto">
                    Os títulos das iniciativas devem comunicar o que será entregue à sociedade ou ao Estado como
                    contribuição para o alcance do objetivo do programa.
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Exemplo</h5>
                            </th>
                            <td class="Texto">
                                Construção, implantação etc.
                            </td>
                        </tr>
                    </table>
                </div>
                <hr>

                <p class="Texto">
                    Apenas as iniciativas finalísticas, conforme conceituadas posteriormente, deverão ter seu(s)
                    produto(s) principal(is) cadastrados com suas respectivas metas regionalizadas.
                </p>

                <!-- ATENÇÃO -->
                <div class="FiqueAtento">
                    <p class="FiqueAtentoTitulo"> Atenção </p>
                    <p class="Texto">
                        Por ocasião da escolha do(s) produto(s) principal(is), o usuário deve dar atenção
                        ao disposto no título da iniciativa, de modo a evitar incoerências.?
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th class="BCorEad text-white textmiddle">
                                    <h5> Exemplo</h5>
                                </th>
                                <td class="Texto">
                                    <strong>Iniciativa:</strong> construção, reforma e ampliação de escolas;<br>
                                    <strong>Produto principal:</strong> escola construída
                                </td>
                            </tr>
                        </table>
                    </div>
                    </p>
                </div>
                <hr>

                <p class="Texto">
                    Por fim, temos a última pergunta feita por ocasião da elaboração dos programas:
                </p>

                <p class="Texto">
                    <i class="fas fa-circle CorLaranja"></i> <strong>Valor global (Por quanto?)</strong><br>
                </p>

                <p class="Texto">
                    Expressa uma previsão dos recursos necessários à execução do programa, ou seja, os recursos
                    orçamentários e não-orçamentários suficientes para a oferta dos produtos, nas iniciativas, que contribuem
                    para o alcance do objetivo do programa, construído para a consecução de resultados.
                </p>

                <!-- Saiba Mais -->
                <div class="accordion" id="accordion1">
                    <div class="cardSaibaMais">
                        <div class="card-headerSaibaMais" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-saibaMais" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="SaibaMaisTitulo"> SAIBA MAIS </div>
                                </button>
                            </h5>
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="SaibaMaisTexto">
                        <p class="Texto">
                            O valor global do programa será sumarizado pelo registro das despesas das ações
                            ligadas às suas respectivas iniciativas.
                        </p>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    Vale ressaltar que os programas não agregam apenas recursos de natureza fiscal do Estado, mas
                    podem incorporar também recursos disponíveis do setor privado, do terceiro setor e de parcerias, o que
                    será expresso por meio das ações não-orçamentárias.
                </p>

                <p class="Texto">
                    <strong><u>Classificação das Iniciativas</u></strong>
                </p>

                <p class="Texto">
                    As iniciativas podem ser classificadas em diferentes categorias, conforme os seguintes critérios:
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Temáticas</h5>
                            </th>
                            <td class="Texto">
                                Quando contribuem apenas para o resultado do tema ao qual seu programa
                                está vinculado;
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th class="BCorEad text-white textmiddle">
                                <h5> Multitemáticas</h5>
                            </th>
                            <td class="Texto">
                                Quando além de contribuírem para o tema de seu programa, contribuem para
                                outro tema.
                            </td>
                        </tr>
                    </table>
                </div>
                <hr>

                <p class="Texto">
                    Dependendo do caso, a iniciativa que contribuir para o resultado de outro tema deverá ter uma ação
                    orçamentária separada para essa finalidade, de modo a se destacar o seu “pedaço” do recurso
                    orçamentário, que contribui para um tema diferente daquele ao qual seu programa está
                    preponderantemente relacionado.
                </p>

                <i class="fas fa-lightbulb CorLaranja"></i>
                <strong class="CorLaranja">Clique nos botões abaixo</strong>

                <div class="accordion" id="accordionExample">
                    <div class="card" style="border-color:#F8E3AC;">
                        <div class="card-header" style="background-color: #F8E3AC;" id="headingOne">
                            <h5 class="mb-0">

                                <button class="btn1" style="color:#FC6B30; background-color: #F8E3AC;" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <h3><i class="fas fa-arrow-down"></i> Necessidade de recursos financeiros</h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <strong>Valoradas:</strong> que exigem a previsão de recursos financeiros para sua execução, subdividindo-se em:<br>
                                    ♠ orçamentárias: quando os recursos constam na LOA;<br>
                                    ♠ não-orçamentárias: recursos aplicados diretamente por outros entes federativos ou entidades
                                    privadas e que, portanto, não constam na LOA do Estado.<br><br>
                                    <strong>Não-valoradas:</strong> são aquelas que não demandam o desembolso de recursos financeiros,
                                    especialmente as iniciativas de articulação, coordenação e gestão.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card" style="border-color:#F8E3AC;">
                        <div class="card-header" style="background-color: #F8E3AC;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn1" style="color:#FC6B30; background-color: #F8E3AC;" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                    <h3><i class="fas fa-arrow-down"></i> Oferta</h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <strong>Finalísticas:</strong> quando geram bens ou serviços para a sociedade – projetos e custeio finalístico.<br>
                                    <strong>Administrativas:</strong> quando o foco da oferta é o funcionamento da máquina administrativa – projetos e custeio administrativo.<br>
                                    <strong>Especiais:</strong> são aquelas das quais resultam ações orçamentárias da mesma natureza, sendo voltadas para o atendimento de despesas que não contribuem para a manutenção, expansão ou aperfeiçoamento das ações de Governo, como amortização, juros, encargos e rolagem da dívida contratual e mobiliária etc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card" style="border-color:#F8E3AC;">
                        <div class="card-header" style="background-color: #F8E3AC;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn1" style="color:#FC6B30; background-color: #F8E3AC;" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                    <h3><i class="fas fa-arrow-down"></i> Temporalidade</h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <strong>Contínuas:</strong> são as correspondentes às atividades necessárias ao funcionamento da máquina administrativa e dos serviços destinados à população - custeio administrativo e finalístico.<br>
                                    <strong>Não-Contínuas:</strong> são aquelas cuja execução é limitada a um determinado período - projetos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card" style="border-color:#F8E3AC;">
                        <div class="card-header" style="background-color: #F8E3AC;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn1" style="color:#FC6B30; background-color: #F8E3AC;" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    <h3><i class="fas fa-arrow-down"></i> Individualização do produto</h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <strong>Individualizadas:</strong> quando se destina à entrega de um único produto (Hospital Regional
                                    Metropolitano), tendo em vista sua grande contribuição para a evolução de um indicador de resultado e o elevado volume de recursos orçamentários previstos.<br>
                                    <strong>Agregadas:</strong> quando se destina à entrega de várias unidades do mesmo produto ou afins, sem necessidade de destaque: implantação de escolas estaduais de educação profissional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card" style="border-color:#F8E3AC;">
                        <div class="card-header" style="background-color: #F8E3AC;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn1" style="color:#FC6B30; background-color: #F8E3AC;" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    <h3><i class="fas fa-arrow-down"></i> Padronização</h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <strong>Padronizadas:</strong> quando sua descrição for comum para os vários órgãos do Estado, sendo definidapela Seplag, como deverá ser, em regra, o caso das iniciativas administrativas (custeio e projetosadministrativos – Programa 500) e das iniciativas finalísticas contínuas (custeio finalístico).<br>
                                    <strong>Não-padronizadas:</strong> quando sua descrição for única e definida pela órgão gestor, atendendo àssuas especificidades.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card" style="border-color:#F8E3AC;">
                        <div class="card-header" style="background-color: #F8E3AC;" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn1" style="color:#FC6B30; background-color: #F8E3AC;" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                    <h3><i class="fas fa-arrow-down"></i> Compartilhamento</h3>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse6" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="Texto">
                                    <strong>Exclusivas:</strong> quando só uma Secretaria de Governo executa ações orçamentárias ligadas à
                                    determinada iniciativa.<br>
                                    <strong>Compartilhadas:</strong> quando mais de uma Secretaria executa ações orçamentárias ligadas à mesma
                                    iniciativa.
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th class="BCorEad text-white textmiddle">
                                                <h5> Exemplo</h5>
                                            </th>
                                            <td class="Texto">
                                                Aquário Ceará, executado pela Setur e pela Seinfra.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <p class="Texto">
                    <strong>
                        Atributos das Iniciativas
                    </strong>
                </p>

                <p class="Texto">
                    As iniciativas devem apresentar as seguintes informações:
                </p>

                <p class="Texto pl-5">
                    <i class="far fa-star CorLaranja"></i> <strong>
                        Meta (Quantos?)
                    </strong>
                </p>

                <p class="Texto">
                    Expressa a quantidade de um determinado bem ou serviço a ser entregue por meio da execução de
                    uma iniciativa finalística durante a vigência do Plano, de modo a contribuir para a realização do objetivo
                    pretendido. As metas representam a medida física das iniciativas.
                </p>
                <hr>

                <p class="Texto pl-5">
                    <i class="far fa-star CorLaranja"></i> <strong>
                        Ano(s) (Quando?)
                    </strong>
                </p>

                <p class="Texto">
                    Os produtos das iniciativas deverão ter suas quantidades programadas distribuídas em um ou mais
                    anos de vigência do PPA, de modo a informar quando se pretende realizar sua entrega.
                </p>
                <hr>

                <p class="Texto pl-5">
                    <i class="far fa-star CorLaranja"></i> <strong>
                        Região (Onde?)
                    </strong>
                </p>

                <p class="Texto">
                    Expressa o alcance territorial das metas definidas para as iniciativas, ou seja, indica em que região
                    de planejamento pretende-se realizar a oferta do(s) produto(s).
                </p>
                <hr>

                <!-- Saiba Mais -->
                <div class="accordion" id="accordion1">
                    <div class="cardSaibaMais">
                        <div class="card-headerSaibaMais" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-saibaMais" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="SaibaMaisTitulo"> SAIBA MAIS </div>
                                </button>
                            </h5>
                        </div>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion1">
                    <div class="SaibaMaisTexto">
                        <p class="Texto">
                            A distribuição espacial dos produtos das iniciativas foi orientada pelas Diretrizes
                            Regionais, advindas das oficinas do Planejamento Participativo e Regionalizado, cujo
                            foco principal é contribuir para o desenvolvimento de todas as regiões do Ceará, em
                            suas três perspectivas: econômica, social e ambiental.
                        </p>
                    </div>
                </div>
                <hr>

                <br><br>
                <div class="text-center">
                    <a href="Topico04.php" type="button" class="btn btn-outline-success btn-sm">Página Anterior</a>
                    <a href="Referencias.php" type="button" class="btn btn-outline-success btn-sm">Próxima Página</a>
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