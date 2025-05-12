<main class="py-[64px] px-[88px]">
    <div class="flex items-center justify-between">
        <span class="text-white text-[24px]">Meus Filmes</span>
        <form action="" method="post" class="flex items-center gap-[16px]">
            <input type="text" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none" placeholder="Pesquisar filme">
            <img src="../../assets/img/divider.png" alt="">
            <a href="/formulario-novo-filme" class="py-[12px] px-[20px] flex items-center gap-[8px] rounded-[8px] bg-[#892CCD] text-white hover:bg-[#A85FDD]">
                <img src="../assets/img/adicionar.png" alt="">
                Novo
            </a>
        </form>
    </div>
    <?php
    $meusFilmes = Filmes::getMyMovies(auth()->id);
    ?>
    <?php if (count($meusFilmes) != 0) : ?>
        <section class="grid grid-cols-4 gap-[24px] mt-[33px]">
            <?php foreach ($meusFilmes as $filme) : ?>
                <div class="w-[280px] h-[360px] bg-red-200 rounded-[8px] overflow-hidden">
                    <img src="<?= $filme->cover ?>" alt="" class="object-cover">
                </div>
            <?php endforeach ?>
        </section>
    <?php else : ?>
        <div class="flex flex-col items-center gap-[20px] mt-[33px]">
            <img src="../assets/img/movie-filtro.svg" alt="">
            <p class="text-[#B5B6C9] text-base flex flex-col items-center">
                Nenhum filme registrado.
                <span>Que tal começar cadastrando seu primeiro filme?</span>
            </p>
            <a href="/formulario-novo-filme" type="reset" form="pesquisar" class="flex items center gap-[8px] p-[4px] text-[#7A7B9F] text-base cursor-pointer">
                <img src="../assets/img/adicionar.svg" alt="">
                Cadastrar novo
            </a>
        </div>
    <?php endif ?>
</main>