<main class="grid grid-cols-2 gap-[48px] py-[50px] px-[148px]">
    <div class="flex flex-col justify-center items-center gap-[12px] bg-[#1A1B2D] rounded-[8px]">
        <img src="../assets/img/upload-icon.svg" alt="">
        <div>
            <label for="upload" class="text-[#7A7B9F] cursor-pointer">Fazer upload</label>
            <input type="file" form="cadastrar-filme" name="upload" id="upload" style="display: none;">
        </div>
    </div>
    <div>
        <p class="text-white text-[20px] mb-[24px]">Novo filme</p>
        <form action="" method="post" id="cadastrar-filme" class="flex flex-col gap-[16px]">
            <input type="text" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full" placeholder="Título">
            <div class="flex items-center gap-[16px]">
                <input type="text" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full" placeholder="Ano">
                <input type="text" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full" placeholder="Categoria">
            </div>
            <textarea name="" id="" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full h-[200px]" placeholder="Descrição"></textarea>
            <div class="flex items center gap-[32px] justify-end">
                <button type="reset" form="cadastrar-filme" class="text-[#7A7B9F] text-base cursor-pointer">Cancelar</button>
                <button type="submit" class="py-[12px] px-[20px] flex items-center gap-[8px] rounded-[8px] cursor-pointer bg-[#892CCD] text-white hover:bg-[#A85FDD]">Salvar</button>
            </div>
        </form>
    </div>
</main>