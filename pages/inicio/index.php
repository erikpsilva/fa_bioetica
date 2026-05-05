<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php include ROOT . '/includes/assets.php';?>
<title>Fórum Animal Bioética - Início</title>
</head>

<body>

<?php include ROOT . '/includes/header/header.php';?>

<main class="home">
    <section class="homeHero">
        <div class="container">
            <div class="homeHero__content">
                <h1 class="homeHero__title">Bioética</h1>
                <p class="homeHero__subtitle">Nos ajude a ajudar os animais usados na ciência.</p>
                <p class="homeHero__text">Promovemos a substituição do uso prejudicial de animais em pesquisas, ensino e testes, por um futuro mais justo e consciente.</p>
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
                        <h2 class="homeTitle">O que é <strong>bioética.</strong></h2>
                        <p class="homeIntro__lead">É uma ponte que conecta Ciência e Ética<br>A Bioética ajuda na construção de futuro onde o avanço do conhecimento caminhe junto com o avanço moral da sociedade</p>

                        <div class="homeIntro__pillars">
                            <div class="homePillar">
                                <i class="icon icon-menossofrimento homePillar__icon" aria-hidden="true"></i>
                                <p class="homePillar__text"><strong>Menos sofrimento</strong>Redução do uso de animais na ciência.</p>
                            </div>
                            <div class="homePillar">
                                <i class="icon icon-maisciencia homePillar__icon" aria-hidden="true"></i>
                                <p class="homePillar__text"><strong>Mais ciência</strong>Fomento a métodos modernos e eficazes.</p>
                            </div>
                            <div class="homePillar">
                                <i class="icon icon-maisconciencia homePillar__icon" aria-hidden="true"></i>
                                <p class="homePillar__text"><strong>Mais consciência</strong>Formação de pessoas críticas e preparadas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <img class="homeIntro__image" src="<?= BASE_URL ?>/images/imgRato.jpg" alt="Rato em ambiente de laboratório">
                </div>
            </div>
        </div>
    </section>

    <section class="homeSupport">
        <div class="container">
            <p class="homeEyebrow">Por que nos apoiar?</p>
            <h2 class="homeTitle">Três frentes <strong>um só propósito</strong></h2>
            <p class="homeSupport__paragraph">Animais ainda sofrem todos os dias em nome da ciência, mesmo quando isso já poderia ser evitado.</p>
            <p class="homeSupport__paragraph">Ao apoiar essa causa, você ajuda a mudar essa realidade de dentro para fora: formando profissionais, influenciando decisões e reduzindo o uso de animais de forma efetiva.</p>
            <p class="homeSupport__paragraph">Cada contribuição gera impacto real. Menos sofrimento. Mais ciência. Mais consciência.</p>

            <div class="homeSupport__cards">
                <article class="homeImpactCard">
                    <i class="icon icon-livestock homeImpactCard__icon" aria-hidden="true"></i>
                    <p class="homeImpactCard__text"><strong>+500 mil</strong>Animais impactados diretamente por ano.</p>
                </article>
                <article class="homeImpactCard">
                    <i class="icon icon-atuacao homeImpactCard__icon" aria-hidden="true"></i>
                    <p class="homeImpactCard__text"><strong>Atuação</strong>em comissões de éticas e políticas públicas.</p>
                </article>
                <article class="homeImpactCard">
                    <i class="icon icon-formacao homeImpactCard__icon" aria-hidden="true"></i>
                    <p class="homeImpactCard__text"><strong>Formação</strong>que transforma e multiplica o impacto</p>
                </article>
            </div>

            <div class="homeSupport__textBlock">
                <p>O Fórum Animal trabalha para transformar a ciência, reduzindo e substituindo o uso de animais em pesquisas e ensino.</p>
                <p>Em vez de atuar apenas nas consequências, atuamos na origem do problema: nas decisões que autorizam o uso de animais.</p>
                <p>Por meio da atuação em comissões de ética (CEUAs), da formação de representantes da sociedade e da promoção de métodos alternativos, conseguimos gerar mudanças reais dentro de universidades, laboratórios e políticas públicas.</p>
                <p>Esse trabalho já contribuiu para avanços importantes, como a proibição de testes em cosméticos e a adoção de métodos mais éticos e eficazes na ciência.</p>
                <p>Ao apoiar essa causa, você não está apenas ajudando animais individualmente, você está ajudando a transformar todo o sistema que impacta milhões deles.</p>
            </div>

            <a class="homeButton homeButton--primary homeSupport__button" href="#bioetica">Saiba mais sobre bioética</a>
        </div>
    </section>

    <section class="homeCalculator" id="calculadora">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="homeEyebrow">Calculadora de impacto</p>
                    <h2 class="homeTitle">Veja quantos animais <strong>você pode ajudar.</strong></h2>
                    <p class="homeCalculator__text">Seu apoio forma pessoas, impulsiona mudanças reais.</p>
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

                            <h3 class="homeCalculator__label homeCalculator__label--spacing">Frequência</h3>
                            <div class="homeCalculator__frequency">
                                <button class="homeCalculator__frequencyButton homeCalculator__frequencyButton--active" type="button">Mensal</button>
                                <button class="homeCalculator__frequencyButton" type="button">Única</button>
                            </div>
                        </div>

                        <div class="homeCalculator__result">
                            <div class="homeCalculator__tooltip">
                                <i class="icon icon-interrogacao homeCalculator__help" aria-hidden="true"></i>
                                <div class="homeCalculator__tooltipBox" role="tooltip">Trata-se de uma simplificação baseada em estimativas globais, devendo ser interpretada com cautela, uma vez que a obtenção de valores precisos é dificultada pela subnotificação e pela falta de padronização nos sistemas de coleta e reporte de dados entre países.</div>
                            </div>
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
                    <h2 class="homeTitle">Veja porque sua doação <strong>pode mudar vidas.</strong></h2>
                    <div class="homeSponsor__text">
                        <p>Somos financiados exclusivamente por pessoas que acreditam na ciência sem animais. Atuamos onde as decisões realmente acontecem: nas comissões de ética, regulações e normas científicas.</p>
                        <p>Nossa missão é reduzir e substituir o uso de animais em pesquisa e ensino. É dentro das <strong>CEUAs (Comissões de Ética no Uso de Animais)</strong> que esse impacto começa.</p>
                        <p>Nosso principal instrumento é o <strong>Curso de Formação em Proteção dos Animais nas CEUAs</strong>, em parceria com a UFPR. Ele prepara representantes da sociedade civil para atuar nessas comissões, influenciando diretamente a aprovação de projetos com animais.</p>
                        <p>Cada representante pode impactar centenas ou até <strong>milhares de animais por ano</strong> em uma única instituição.</p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <img class="homeSponsor__image" src="<?= BASE_URL ?>/images/imgCientista.jpg" alt="Cientista usando microscópio">
                </div>
            </div>
        </div>
    </section>

    <section class="homeTestimonials" id="testemunhos">
        <div class="container">
            <p class="homeEyebrow homeEyebrow--center">Testemunhos</p>
            <h2 class="homeTitle homeTitle--center">Quem já fez, <strong>recomenda!</strong></h2>

            <div class="homeTestimonials__slider">
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Curso extremamente completo, com grandes nomes da área e que abrange desde a filosofia da ética até metodologias alternativas. É ótimo para expandir a visão sobre o assunto por diversos ângulos. Recomendo a todos!</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">GL</span><p class="homeTestimonial__name"><strong>Gabriella Lisboa</strong>Aluna da 1ª Edição do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Confesso que o curso superou minhas expectativas. Alguns professores eu já conhecia e admirava, mas todos são absolutamente inteligentes e transmitem conhecimento com muita facilidade. Esse curso contribuiu demais com minha pesquisa de pós-graduação! Sou muito grata a toda a equipe.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">GC</span><p class="homeTestimonial__name"><strong>Gabriela Chueiri de Moraes</strong>Médica Veterinária, doutoranda em epidemiologia e saúde única pela USP.<br>Aluna da 1ª Edição do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Sou presidente de uma CEUA e membro de uma outra. Ambas são CEUAS que trabalham quase que em sua totalidade avaliando propostas que envolvem a utilização de animais de produção em atividades de ensino ou pesquisa. Em ambas as CEUAs sempre tentamos verificar a real necessidade da execução da atividade e, também, sempre buscamos a possibilidade da redução do número de animais utilizados, ou, a utilização de métodos alternativos. O início do curso foi difícil para mim. Achei o discurso dos professores um pouco agressivo demais. Como não sou membro de uma organização protetora de animais, me senti como sendo julgado e culpado por estar atuando fora de uma ONG deste tipo. Mas, entendendo que o objetivo fundamental do curso é a capacitação de representantes de ONGs em CEUAS e o incentivo a que tais representantes sejam, de fato, atuantes; como respeito a ideia, fui em frente. Gostei demais do curso, especialmente das aulas ministradas pelos professores Vicente, Tales (muito top as aulas do módulo 3), Paula e Evelyne. O curso me trouxe várias informações que eu desconhecia e me levou a novas reflexões sobre o conteúdo apresentado, abrindo minha mente para uma nova percepção da experimentação animal como um todo.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">PA</span><p class="homeTestimonial__name"><strong>Paulo Augusto Esteves</strong>Embrapa Suínos e Aves<br>Aluno da 4ª Edição do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Sou o coordenador da CEUA Mackenzie em São Paulo. Estou quase terminando o módulo 6 e portanto perto de terminar o curso. O nosso vice coordenador também está matriculado e esse curso está exercendo uma influência muito grande em nossa CEUA. Realmente o curso é muito bom e muito instrumentalização para nossa conduta como líderes de nossa CEUA...</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">MC</span><p class="homeTestimonial__name"><strong>Marcelo Coelho Almeida</strong>Psicólogo, Doutor em Educação Arte e História da Cultura<br>Coordenador da CEUA Mackenzie - Aluno da 5ª Edição</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Terminei o curso e fiquei deslumbrado de tantas informações preciosas.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">RF</span><p class="homeTestimonial__name"><strong>Rafael Ferreira Muniz</strong>Eng. de Pesca / Eng. de Seg. do Trabalho<br>Aluno da 5ª Edição do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">O Curso para Proteção dos Animais na Ciência oferecido pelo FNPDA é fundamental para quem se propõe a representar os interesses dos animais, pois nos possibilita obter conhecimento técnico, legislação, dicas de especialistas e membros mais experientes, de forma a otimizar nossos esforços para a discussão dos casos apresentados nas CEUAs e a busca de caminhos alternativos que beneficiem os animais não humanos.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">AT</span><p class="homeTestimonial__name"><strong>Alexandre Terreri</strong>Ativista da causa animal<br>Aluno da 1ª Edição do Curso</p></div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <p class="homeTestimonial__quote">Olá, meu nome é Eduardo, fiz a 3ª edição do curso em 2023. Embora já tivesse estudado um pouco sobre o tema, o curso foi fundamental para meu ingresso e atuação em Comissões de Ética. A diversidade de conteúdos permitiu revisar e expandir conhecimentos essenciais na atuação em defesa dos animais em CEUAs. Mais do que o conteúdo em si, a organização do curso me forneceu segurança e melhores maneiras de argumentar e me portar para alcançar melhores resultados para os animais nas discussões dos protocolos. Vejo como indispensável a proposição de cursos como este, que pode atingir o público docente que utiliza os animais, abrindo portas para novas abordagens experimentais, assim como para reunir, fortalecer e amadurecer pessoas que tem o desejo de ajudar os animais nos contextos de experimentação científica.</p>
                        <div class="homeTestimonial__author"><span class="homeTestimonial__avatar">EH</span><p class="homeTestimonial__name"><strong>Eduardo Henrique Gonçalves</strong>Biólogo, pesquisador em bem-estar animal<br>Aluno da 3ª Edição do Curso</p></div>
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
