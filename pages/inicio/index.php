<?php
require_once ROOT . '/config/database.php';
try {
    $stmtBanner = getDbConnection()->prepare("SELECT arquivo FROM banners WHERE pagina = 'home'");
    $stmtBanner->execute();
    $bannerHome = ($stmtBanner->fetchColumn() ?: 'images/bannerHome.jpg');
} catch (Exception $e) {
    $bannerHome = 'images/bannerHome.jpg';
}
try {
    $stmtT = getDbConnection()->query("SELECT * FROM testemunhos ORDER BY id ASC");
    $testemunhosDb = $stmtT->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $testemunhosDb = [];
}
function testimonialInitials($nome) {
    $words = preg_split('/\s+/', trim($nome));
    $a = mb_strtoupper(mb_substr($words[0], 0, 1, 'UTF-8'), 'UTF-8');
    $b = count($words) > 1 ? mb_strtoupper(mb_substr(end($words), 0, 1, 'UTF-8'), 'UTF-8') : '';
    return $a . $b;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<?php include ROOT . '/includes/assets.php';?>
<title>Fórum Animal Bioética - Início</title>
<style>
.homeHero { background-image: url('<?= BASE_URL . '/' . $bannerHome ?>') !important; }</style>
<style>
.doacaoModal { display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 9999; align-items: center; justify-content: center; }
.doacaoModal.is-open { display: flex; }
.doacaoModal__overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,.55); }
.doacaoModal__box { position: relative; z-index: 1; background: #fff; border-radius: 12px; padding: 40px 36px; width: 100%; max-width: 440px; margin: 16px; box-shadow: 0 8px 40px rgba(0,0,0,.18); }
.doacaoModal__close { position: absolute; top: 14px; right: 18px; background: none; border: none; font-size: 28px; line-height: 1; cursor: pointer; color: #888; }
.doacaoModal__close:hover { color: #333; }
.doacaoModal__title { font-size: 1.3rem; font-weight: 700; margin: 0 0 4px; }
.doacaoModal__subtitle { font-size: .9rem; color: #666; margin: 0 0 24px; }
.doacaoModal__field { margin-bottom: 16px; }
.doacaoModal__label { display: block; font-size: .82rem; font-weight: 600; margin-bottom: 6px; color: #333; }
.doacaoModal__input { width: 100%; padding: 10px 14px; border: 1px solid #ddd; border-radius: 8px; font-size: .95rem; box-sizing: border-box; }
.doacaoModal__input:focus { outline: none; border-color: #a01f2e; }
.doacaoModal__input.is-invalid { border-color: #dc3545; }
.doacaoModal__submit { width: 100%; margin-top: 8px; display: flex; justify-content: center; }
</style>
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
                        <p class="homeIntro__lead">É uma ponte que conecta Ciência e Ética<br>A Bioética ajuda na construção de futuro um onde o avanço do conhecimento caminhe junto com o avanço moral da sociedade</p>

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

                            <a class="homeButton homeButton--primary homeCalculator__donate" href="#">FAZER DOAÇÃO MENSAL</a>
                        </div>

                        <div class="homeCalculator__result">
                            <div class="homeCalculator__tooltip">
                                <i class="icon icon-interrogacao homeCalculator__help" aria-hidden="true"></i>
                                <div class="homeCalculator__tooltipBox" role="tooltip">Trata-se de uma simplificação baseada em estimativas globais, devendo ser interpretada com cautela, uma vez que a obtenção de valores precisos é dificultada pela subnotificação e pela falta de padronização nos sistemas de coleta e reporte de dados entre países.</div>
                            </div>
                            <div class="homeAnimalResult"><i class="icon icon-rato homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">0</strong></div>
                            <div class="homeAnimalResult"><i class="icon icon-peixe homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">0</strong></div>
                            <div class="homeAnimalResult"><i class="icon icon-galinha homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">0</strong></div>
                            <div class="homeAnimalResult"><i class="icon icon-outros homeAnimalResult__icon" aria-hidden="true"></i><strong class="homeAnimalResult__number">0</strong></div>
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
        <style>
        .homeTestimonial__quote strong, .homeTestimonial__quote b { font-weight: 600; }
        .homeTestimonial__quote p { margin: 0 0 .5em; }
        .homeTestimonial__quote p:last-child { margin-bottom: 0; }
        </style>
        <div class="container">
            <p class="homeEyebrow homeEyebrow--center">Testemunhos</p>
            <h2 class="homeTitle homeTitle--center">Quem já fez, <strong>recomenda!</strong></h2>

            <div class="homeTestimonials__slider">
            <?php if (!empty($testemunhosDb)): ?>
                <?php foreach ($testemunhosDb as $t): ?>
                <div class="homeTestimonials__slide">
                    <article class="homeTestimonial">
                        <div class="homeTestimonial__quote"><?= $t['texto'] ?></div>
                        <div class="homeTestimonial__author">
                            <span class="homeTestimonial__avatar"><?= testimonialInitials($t['nome']) ?></span>
                            <p class="homeTestimonial__name">
                                <strong><?= htmlspecialchars($t['nome']) ?></strong>
                                <?= $t['profissao'] ? htmlspecialchars($t['profissao']) . '<br>' : '' ?>
                                <?= htmlspecialchars($t['edicao']) ?>
                            </p>
                        </div>
                        <button class="homeTestimonial__button" type="button">Ver mais</button>
                    </article>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
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
            <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="doacaoModal" id="doacaoModal">
        <div class="doacaoModal__overlay"></div>
        <div class="doacaoModal__box">
            <button class="doacaoModal__close" type="button" aria-label="Fechar">&times;</button>
            <h2 class="doacaoModal__title">Complete seus dados</h2>
            <p class="doacaoModal__subtitle" id="doacaoModalSubtitle"></p>
            <form id="doacaoModalForm" novalidate>
                <div class="doacaoModal__field">
                    <label class="doacaoModal__label" for="doacaoNome">Nome completo</label>
                    <input class="doacaoModal__input" type="text" id="doacaoNome" placeholder="Seu nome" autocomplete="name">
                </div>
                <div class="doacaoModal__field">
                    <label class="doacaoModal__label" for="doacaoEmail">E-mail</label>
                    <input class="doacaoModal__input" type="email" id="doacaoEmail" placeholder="seu@email.com" autocomplete="email">
                </div>
                <div class="doacaoModal__field">
                    <label class="doacaoModal__label" for="doacaoTelefone">Telefone</label>
                    <input class="doacaoModal__input" type="tel" id="doacaoTelefone" placeholder="(00) 00000-0000" autocomplete="tel">
                </div>
                <button class="homeButton homeButton--primary doacaoModal__submit" type="submit" id="doacaoSubmit">Ir para o pagamento</button>
            </form>
        </div>
    </div>
</main>

<?php include ROOT . '/includes/footer/footer.php';?>
<?php include ROOT . '/includes/scripts.php';?>
<?php
$version = time();
echo '<script>window.APP_BASE_URL = "' . BASE_URL . '";</script>';
echo '<script src="' . BASE_URL . '/pages/inicio/home.js?' . $version . '"></script>';
?>

</body>
</html>
