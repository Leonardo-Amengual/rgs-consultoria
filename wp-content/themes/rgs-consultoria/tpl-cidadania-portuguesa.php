<?php
/*
Template Name: Cidadania portuguesa
*/
get_header();
?>

<section class="container-cidadania-portuguesa">
    <div class="banner">
        <img src="<?php echo image("BannerbandeiraPortugal.png") ?>" alt="">
        <img src="<?php echo image("Rectanglebege.png") ?>" alt="">
    </div>

    <div class="session container">
        <div class="left">
            <h2>Quem tem direito a cidadania portuguesa?</h2>
            <p>
                A Cidadania Portuguesa é um direito transmitido por sangue (iure sanguinis), porém, existem outras formas de reconhecimento, assim como a naturalização portuguesa. Em todos os casos, nosso escritório trabalha em parceria com um renomado escritório de São Paulo e juntos organizamos e patrocinamos todas as fases deste processo, de forma pessoal e individualizada. No processo de solicitação da Cidadania Portuguesa não é necessário viajar a Portugal em nenhuma etapa. O Requerente será representado por nossa advogada junto à Conservatória, evitando assim incorrermos nos problemas burocráticos que são continuamente apresentados por Portugal para retardar ou impedir a conclusão exitosa dos processos, sempre que a parte tenta fazer diretamente pelos correios.
            </p>
            <h2>Beneficiados</h2>
            <ul>
                <li>Filhos de Português (mãe ou pai).</li>
                <li>Netos de Português (avô ou avó).</li>
                <li>Cônjuge (casamento civil) de Cidadão Português.</li>
                <li>Menores de idade ou incapazes, filhos de pai ou mãe portugueses.</li>
                <li>Residentes legais há 5 anos (no mínimo) em Portugal.</li>
                <li>Indivíduos nascidos em Portugal, mesmo que filhos de pais estrangeiros, e que tenham morado no país legalmente por no mínimo 2 anos.</li>
            </ul>
        </div>
        <div class="vertical-line"></div>
        <div class="right">
            <p><span class="text-importante">Importante:</span> Netos somente são reconhecidos como cidadãos portugueses quando há o falecimento do seu genitor. Se o genitor for vivo, este precisará fazer o processo primeiro, para depois o neto também ter direito. Caso o pai/mãe já for considerado português, o processo segue o rito tradicional.
                Se o requerente vier a falecer antes do término do processo, o mesmo será cancelado, interrompendo assim, em alguns casos, a linha sucessória da cidadania.
                Para avaliarmos o direito pretendido e sabermos o que ainda precisa ser feito para concluir o processo, bem como os custos até o reconhecimento do direito pretendido, faremos uma análise de toda a documentação reunida pelo Requerente.

                Para uma analise eficaz o requerente deve reunir a seguinte documentação (reúna o máximo dos documentos abaixo que conseguir):
                Certidão de Nascimento ou Batismo e Casamento (se houver) do Cidadão Português atualizada.
                Certidões de Casamento (se houver) e Óbito do antepassado Português, em formato Cópia Reprográfica
                Certidão de Nascimento do Requerente, em formato Cópia Reprográfica • Preencha a árvore genealógica anexa com os nomes dos ascendentes do Requerente até o (a) português (a).
            </p>
        </div>
    </div>

    <div class="arrow-down container">
        <img src="<?php echo image("icone-flecha.svg") ?>" alt="">
    </div>

    <div class="container container-cidades">
        <div class="por-onde-comecar">
            <h1>Por onde começar em <span class="passos-simples">3 passos simples</span></h1>

            <div class="primeiros-passos">
                <div class="pesquisa">
                    <div class="passoum">
                        <div class="icone-pesquisa">
                            <h1>1º Passo: Pesquisa </h1>
                            <img src="<?php echo image("Pesquizar.svg") ?>" alt="">
                        </div>
                        <p>Reúna cópias de documentos e informações orais que nos ajudem na localização da certidão de nascimento (e casamento, se for o caso) do ascendente português. Para isto, cópia do passaporte, dos documentos de identidade, cartas de família, ou, uma cópia da própria certidão portuguesa antiga. Com informações precisas podemos pedir uma segunda via do registro de nascimento ou batismo (e casamento, se for o caso) em Portugal.</p>
                    </div>

                    <div class="passodois">
                        <div class="icone-pesquisa">
                            <h1>2º Passo: Organizar documentos </h1>
                            <img src="<?php echo image("icon_documentos.svg") ?>" alt="">
                        </div>
                        <p>Escanei todas as certidões brasileiras de registro civil, desde o ascendente português até o Requerente, são elas: Certidões de nascimento, casamento e óbito. <span>Para avaliação do direito pretendido é importante que sejam certidões novas</span>, em <span>Inteiro Teor</span> e digitadas, já que são documentos legíveis enquanto as cópias reprográficas (exigência de Portugal) podem estar ilegíveis. Peça ao cartório cada certidão nos dois formatos: inteiro teor e reprográfica. Se precisar solicite um orçamento que nós fazemos este trabalho de reunião das certidões brasileiras.
                            <br>
                            <br>
                            O foco dos documentos a serem reunidos refere-se apenas a linhagem portuguesa, não é necessário juntar documentos dos cônjuges.
                        </p>
                    </div>
                    <div class="passotres">
                        <div class="icone-pesquisa">
                            <h1>2º 3º Passo: Monte sua Árvore Genealógica </h1>
                            <img src="<?php echo image("icon-arvore.svg") ?>" alt="">
                        </div>
                        <p>Reunida a documentação, preencha a árvore genealógica com muita atenção e escrevendo os nomes e sobrenomes completos de acordo com os documentos, nos envie para análise e aguarde ser respondido.
                            <br>
                            <br>
                            <span>ATENÇÃO:</span> É muito importante que a documentação seja enviada junto com sua árvore genealógica preenchida, isso facilita nossa avaliação para agilizar o devido processo.

                        </p>
                    </div>
                </div>
                <div class="img-lisboa">
                    <img src="<?php echo image("quadrado-bege.svg") ?>" alt="">
                </div>
            </div>

            <div class="arrow-down container">
                <img src="<?php echo image("icon_direção.svg") ?>" alt="">
            </div>
        </div>
    </div>



    <?php partial('contact-form') ?>
</section>

<?php
get_footer();
?>