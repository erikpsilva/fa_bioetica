<aside class="sidebar">
    <nav class="sidebar__nav">
        <ul class="sidebar__menu">

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/inicio"
                   class="sidebar__link <?= ($subRoute === 'inicio') ? 'sidebar__link--active' : '' ?>">
                    Início
                </a>
            </li>

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/meusdados"
                   class="sidebar__link <?= ($subRoute === 'meusdados') ? 'sidebar__link--active' : '' ?>">
                    Meus Dados
                </a>
            </li>

            <?php if ($_SESSION['usuario']['nivel_acesso'] === 'admin'): ?>
            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/cadastrarusuario"
                   class="sidebar__link <?= ($subRoute === 'cadastrarusuario') ? 'sidebar__link--active' : '' ?>">
                    Cadastrar Usuário
                </a>
            </li>

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/administrarusuarios"
                   class="sidebar__link <?= ($subRoute === 'administrarusuarios') ? 'sidebar__link--active' : '' ?>">
                    Administrar Usuários
                </a>
            </li>

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/doadores"
                   class="sidebar__link <?= ($subRoute === 'doadores') ? 'sidebar__link--active' : '' ?>">
                    Doadores
                </a>
            </li>

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/testemunhos"
                   class="sidebar__link <?= ($subRoute === 'testemunhos') ? 'sidebar__link--active' : '' ?>">
                    Testemunhos
                </a>
            </li>

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/banners"
                   class="sidebar__link <?= ($subRoute === 'banners') ? 'sidebar__link--active' : '' ?>">
                    Banners
                </a>
            </li>

            <li class="sidebar__item">
                <a href="<?= BASE_URL ?>/admin/configuracoes"
                   class="sidebar__link <?= ($subRoute === 'configuracoes') ? 'sidebar__link--active' : '' ?>">
                    Configurações
                </a>
            </li>
            <?php endif; ?>

        </ul>
    </nav>
</aside>

<div class="sidebar__overlay" id="sidebarOverlay"></div>
