<main class="grid grid-cols-2 gap-[48px] py-[50px] px-[148px]">
    <div class="flex flex-col justify-center items-center gap-[12px] bg-[#1A1B2D] rounded-[8px] overflow-hidden">
        <div>
            <label for="upload" id="label_upload" class="text-[#7A7B9F] cursor-pointer">Clique aqui para fazer upload</label>
            <input type="file" form="cadastrar-filme" name="cover" id="upload" style="display: none;" onchange="previewImage(event)">
            <img id="previewImage" src="#" alt="" class="rounded-[8px]">
        </div>
    </div>
    <div>
        <p class="text-white text-[20px] mb-[24px]">Novo filme</p>
        <form action="/cadastrar-filme" enctype="multipart/form-data" method="post" id="cadastrar-filme" class="flex flex-col gap-[16px]">
            <?php if ($validacoes = flash()->get('validacoes_filme')) : ?>
                <div>
                    <ul class="bg-red-600 text-white p-4 rounded-[8px]">
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach ($validacoes as $validacao) : ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <input type="text" name="titulo" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full" placeholder="Título">
            <div class="flex items-center gap-[16px]">
                <input type="text" name="ano" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full" placeholder="Ano">
                <input type="text" name="categoria" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full" placeholder="Categoria">
            </div>
            <textarea name="descricao" id="" class="py-[12px] px-[16px] border border-[#1A1B2D] text-[#7A7B9F] rounded-[8px] focus:outline-none w-full h-[200px]" placeholder="Descrição"></textarea>
            <div class="flex items center gap-[32px] justify-end">
                <button type="reset" form="cadastrar-filme" class="text-[#7A7B9F] text-base cursor-pointer">Cancelar</button>
                <button type="submit" class="py-[12px] px-[20px] flex items-center gap-[8px] rounded-[8px] cursor-pointer bg-[#892CCD] text-white hover:bg-[#A85FDD]">Salvar</button>
            </div>
        </form>
    </div>
</main>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById("previewImage").src = e.target.result;
            document.getElementById("label_upload").style.display = "none";
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }
</script>