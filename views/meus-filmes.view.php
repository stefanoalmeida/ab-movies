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
    <!--
    <section class="grid grid-cols-4 gap-[24px] mt-[33px]">
        <div class="w-[280px] h-[360px] bg-red-200 rounded-[8px] overflow-hidden">
            <img src="../assets/img/filme-1.png" alt="" class="object-cover">
        </div>
        <div class="w-[280px] h-[360px] bg-red-200 rounded-[8px] overflow-hidden">
            <img src="../assets/img/filme-2.png" class="object-cover" alt="">
        </div>
        <div class="w-[280px] h-[360px] bg-red-200 rounded-[8px] overflow-hidden">
            <img src="../assets/img/filme-3.png" class="object-cover" alt="">
        </div>
        <div class="w-[280px] h-[360px] bg-red-200 rounded-[8px] overflow-hidden">
            <img src="../assets/img/filme-4.png" class="object-cover" alt="">
        </div>
    </section>
    !-->
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
</main>