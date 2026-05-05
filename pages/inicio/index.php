<!DOCTYPE html>
<html>
<head>
<title>Forum Animal Bioetica - Inicio</title>

<?php include ROOT . '/includes/assets.php';?>

</head>

<body>

<?php include ROOT . '/includes/header/header.php';?>

<main class="home">
    <section class="homeHero">
        <div class="container">
            <div class="homeHero__content">
                <h1 class="homeHero__title">Bioetica</h1>
                <p class="homeHero__subtitle">Nos ajude a ajudar os animais usados na ciencia.</p>
                <p class="homeHero__text">Promovemos a substituicao do uso prejudicial de animais em pesquisas, ensino e testes, por um futuro mais justo e consciente.</p>
                <div class="homeHero__actions">
                    <a class="homeButton homeButton--primary" href="#calculadora">Quero apoiar</a>
                    <a class="homeButton homeButton--outline" href="#bioetica">Saiba mais <i class="icon icon-arrowDoiwn" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="homeIntro" id="bioetica">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="homeIntro__content">
                        <h2 class="homeTitle">O que e <strong>bioetica.</strong></h2>
                        <p class="homeIntro__lead">E uma ponte que conecta Ciencia e Etica<br>A Bioetica ajuda na construcao de futuro onde o avanco do conhecimento caminhe junto com o avanco moral da sociedade</p>

                        <div class="homeIntro__pillars">
                            <div class="homePillar">
                                <i class="icon icon-menossofrimento homePillar__icon" aria-hidden="true"></i>
                                <p class="homePillar__text"><strong>Menos sofrimento</strong>Reducao do uso de animais na ciencia.</p>
                            </div>
                            <div class="homePillar">
                                <i class="icon icon-maisciencia homePillar__icon" aria-hidden="true"></i>
                                <p class="homePillar__text"><strong>Mais ciencia</strong>Fomento a metodos modernos e eficazes.</p>
                            </div>
                            <div class="homePillar">
                                <i class="icon icon-maisconciencia homePillar__icon" aria-hidden="true"></i>
                                <p class="homePillar__text"><strong>Mais consciencia</strong>Formacao de pessoas criticas e preparadas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <img class="homeIntro__image" src="<?= BASE_URL ?>/images/imgRato.jpg" alt="Rato em ambiente de laboratorio">
                </div>
            </div>
        </div>
    </section>

    <section class="homeSupport">
        <div class="container">
            <p class="homeEyebrow">Por que nos apoiar?</p>
            <h2 class="homeTitle">Tres frentes <strong>um so proposito</strong></h2>
            <p class="homeSupport__paragraph">Animais ainda sofrem todos os dias em nome da ciencia, mesmo quando isso ja poderia ser evitado.</p>
            <p class="homeSupport__paragraph">Ao apoiar essa causa, voce ajuda a mudar essa realidade de dentro para fora: formando profissionais, influenciando decisoes e reduzindo o uso de animais de forma efetiva.</p>
            <p class="homeSupport__paragraph">Cada contribuicao gera impacto real. Menos sofrimento. Mais ciencia. Mais consciencia.</p>

            <div class="homeSupport__cards">
                <article class="homeImpactCard">
                    <i class="icon icon-livestock homeImpactCard__icon" aria-hidden="true"></i>
                    <p class="homeImpactCard__text"><strong>+500 mil</strong>Animais impactados diretamente por ano.</p>
                </article>
                <article class="homeImpactCard">
                    <i class="icon icon-atuacao homeImpactCard__icon" aria-hidden="true"></i>
                    <p class="homeImpactCard__text"><strong>Atuacao</strong>em comissoes de eticas e politicas publicas.</p>
                </article>
                <article class="homeImpactCard">
                    <i class="icon icon-formacao homeImpactCard__icon" aria-hidden="true"></i>
                    <p class="homeImpactCard__text"><strong>Formacao</strong>que transforma e multiplica o impacto</p>
                </article>
            </div>

            <div class="homeSupport__textBlock">
                <p>O Forum Animal trabalha para transformar a ciencia, reduzindo e substituindo o uso de animais em pesquisas e ensino.</p>
                <p>Em vez de atuar apenas nas consequencias, atuamos na origem do problema: nas decisoes que autorizam o uso de animais.</p>
                <p>Por meio da atuacao em comissoes de etica (CEUAs), da formacao de representantes da sociedade e da promocao de metodos alternativos, conseguimos gerar mudancas reais dentro de universidades, laboratorios e politicas publicas.</p>
                <p>Esse trabalho ja contribuiu para avancos importantes, como a proibicao de testes em cosmeticos e a adocao de metodos mais eticos e eficazes na ciencia.</p>
                <p>Ao apoiar essa causa, voce nao esta apenas ajudando animais individualmente, voce esta ajudando a transformar todo o sistema que impacta milhoes deles.</p>
            </div>

            <a class="homeButton homeButton--primary homeSupport__button" href="#bioetica">Saiba mais sobre bioetica</a>
        </div>
    </section>

    <section class="homeCalculator" id="calculadora">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="homeEyebrow">Calculadora de impacto</p>
                    <h2 class="homeTitle">Veja quantos animais <strong>voce pode ajudar.</strong></h2>
                    <p class="homeCalculator__text">Seu apoio forma pessoas, impulsiona mudancas reais.</p>
                    <p class="homeCalculator__text">Use a calculadora e veja o impacto real da sua doação.</p>
                </div>

                <div class="col-lg-8">
                    <div class="homeCalculator__panel">
                        <div class="homeCalculator__form">
                            <h3 class="homeCalculator__label">Escolha um valor</h3>
                            <div class="homeCalculator__values">
                                <button class="homeCalculator__value" type="button">R$30</button>
                                <button class="homeCalculator__value homeCalculator__value--active" type="button">R$60</button>
                                <button class="homeCalculator__value" type="button">R$120</button>
                            </div>
                            <input class="homeCalculator__input" type="text" placeholder="Outro valor (R$)" aria-label="Outro valor">

                            <h3 class="homeCalculator__label homeCalculator__label--spacing">Frequencia</h3>
                            <div class="homeCalculator__frequency">
                                <button class="homeCalculator__frequencyButton homeCalculator__frequencyButton--active" type="button">Mensal</button>
                                <button class="homeCalculator__frequencyButton" type="button">Unica</button>
                            </div>
                            <button class="homeCalculator__submit" type="button">Calcular impacto</button>
                        </div>

                        <div class="homeCalculator__result">
                            <i class="icon icon-interrogacao homeCalculator__help" aria-hidden="true"></i>
                            <div class="homeAnimalResult"><i class="icon icon-rato homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">2</strong></div>
                            <div class="homeAnimalResult"><i class="icon icon-pato homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">1</strong></div>
                            <div class="homeAnimalResult"><i class="icon icon-galinha homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">1</strong></div>
                            <div class="homeAnimalResult"><i class="icon icon-peixe homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">0</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSponsor" id="apadrinhe">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <p class="homeEyebrow">Apadrinhe</p>
                    <h2 class="homeTitle">Veja porque sua doacao <strong>pode mudar vidas.</strong></h2>
                    <div class="homeSponsor__text">
                        <p>Somos financiados exclusivamente por pessoas que acreditam na ciencia sem animais. Atuamos onde as decisoes realmente acontecem: nas comissoes de etica, regulacoes e normas cientificas.</p>
                        <p>Nossa missao e reduzir e substituir o uso de animais em pesquisa e ensino. E dentro das <strong>CEUAs (Comissoes de Etica no Uso de Animais)</strong> que esse impacto comeca.</p>
                        <p>Nosso principal instrumento e o <strong>Curso de Formacao em Protecao dos Animais nas CEUAs</strong>, em parceria com a UFPR. Ele prepara representantes da sociedade civil para atuar nessas comissoes, influenciando diretamente a aprovacao de projetos com animais.</p>
                        <p>Cada representante pode impactar centenas ou ate <strong>milhares de animais por ano</strong> em uma unica instituicao.</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <img class="homeSponsor__image" src="<?= BASE_URL ?>/images/imgCientista.jpg" alt="Cientista usando microscopio">
                </div>
            </div>
        </div>
    </section>

    <section class="homeTestimonials" id="testemunhos">
        <div class="container">
            <p class="homeEyebrow homeEyebrow--center">Testemunhos</p>
            <h2 class="homeTitle homeTitle--center">Quem ja fez, <strong>recomenda!</strong></h2>

            <div class="homeTestimonials__slider">
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Curso extremamente completo, com grandes nomes da area e que abrange desde a filosofia da etica ate metodologias alternativas. E otimo para expandir a visao sobre o assunto por diversos angulos.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">GL</span><p class="homeTestimonial__name"><strong>Gabriella Lisboa</strong>Aluna da 1a Edicao do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Sou presidente de uma CEUA e membro de uma outra. Ambas sao CEUAs que trabalham quase que em sua totalidade utilizando animais de experimentacao.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">PA</span><p class="homeTestimonial__name"><strong>Paulo Augusto Esteves</strong>Embrapa Suinos e Aves<br>aluno da 4a edicao do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Confesso que o curso superou minhas expectativas. Alguns professores eu ja conhecia e admirava, mas todos sao absolutamente inteligentes e transmitem conhecimento com muita clareza.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">GC</span><p class="homeTestimonial__name"><strong>Gabriela Chueiri de Moraes</strong>Aluna da 1a Edicao do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">O curso contribuiu para ampliar meu entendimento sobre alternativas e sobre a importancia de uma atuacao consciente nas comissoes.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">AM</span><p class="homeTestimonial__name"><strong>Aluna participante</strong>Curso de Formacao</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT . '/includes/footer/footer.php';?>
<?php include ROOT . '/includes/scripts.php';?>
<?php
$version = time();
echo '<script src="' . BASE_URL . '/pages/inicio/home.js?' . $version . '"></script>';
?>

</body>
</html>
