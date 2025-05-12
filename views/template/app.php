<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>ab-movies</title>
</head>

<body class="bg-[#0F0F1A]">
    <?php if (
        $_SERVER["REQUEST_URI"] == "/" ||
        $_SERVER["REQUEST_URI"] == "/meus-filmes" ||
        $_SERVER["REQUEST_URI"] == "/formulario-novo-filme"
    ) : ?>
        <header>
            <nav class="w-[1366px] h-[80px] py-[16px] px-[24px] flex items-center justify-between border border-b-[#131320]">
                <div>
                    <img src="../../assets/img/logo.png" alt="">
                </div>
                <div>
                    <ul class="flex items-center gap-[24px]">
                        <?php if ($_SERVER["REQUEST_URI"] == "/") : ?>
                            <li data-active class="py-[8px] px-[12px] rounded-[8px] text-[#7A7B9F] hover:bg-[#1A1B2D] hover:text-[#A85FDD] data-active:bg-[#1A1B2D] data-active:text-[#A85FDD]">
                                <a href="/" class="flex items-center gap-[8px]">
                                    <img src="../../assets/img/pipoca-hover.svg" alt="">
                                    Explorar
                                </a>
                            </li>
                            <li class="py-[8px] px-[12px] rounded-[8px] text-[#7A7B9F] hover:bg-[#1A1B2D]">
                                <a href="/meus-filmes" class="flex items-center gap-[8px]">
                                    <img src="../../assets/img/movie-icon.svg" alt="">
                                    Meus filmes
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="py-[8px] px-[12px] rounded-[8px] text-[#7A7B9F] hover:bg-[#1A1B2D]">
                                <a href="/" class="flex items-center gap-[8px]">
                                    <img src="../../assets/img/pipoca.svg" alt="">
                                    Explorar
                                </a>
                            </li>
                            <li data-active class="py-[8px] px-[12px] rounded-[8px] text-[#7A7B9F] hover:bg-[#1A1B2D] hover:text-[#A85FDD] data-active:bg-[#1A1B2D] data-active:text-[#A85FDD]">
                                <a href="/meus-filmes" class="flex items-center gap-[8px]">
                                    <img src="../../assets/img/movie-hover.svg" alt="">
                                    Meus filmes
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
                <div class="flex items-center gap-[12px]">
                    <span class="text-[#B5B6C9] text-[14px]">Olá, <?= auth()->name ?></span>
                    <img src="../../assets/img/minha-img.jpg" alt="" class="w-[40px] h-[40px] rounded-full border-2 border-[#A85FDD] overflow-hidden object-cover">
                    <img src="../../assets/img/divider.png" alt="">
                    <a href="/logout" title="Sair" class="w-[32px] h-[32px] flex items-center justify-center border border-[#1A1B2D] rounded-[8px] hover:bg-[#1A1B2D]">
                        <img src="../../assets/img/logout-icon.svg" alt="">
                    </a>
                </div>
            </nav>
        </header>
    <?php endif ?>
    <main>
        <?php if ($mensagem = flash()->get('mensagem')) : ?>
            <div class="w-full p-[12px] rounded-[4px] text-white bg-emerald-700 text-yellow-400">
                <?= $mensagem ?>
            </div>
        <?php endif ?>
        <?php require_once "../views/{$view}.view.php" ?>
    </main>
</body>

</html>