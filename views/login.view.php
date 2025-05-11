<div id="wrapper" class="grid grid-cols-2">
    <div>
        <img src="./../assets/img/img-login.png" alt="" class="w-full h-screen">
    </div>
    <div id="login" class="py-[110px] px-[171px]">
        <div id="button-login" class="mb-[52px]">
            <nav class="w-[328px] bg-[#131320] p-[4px] rounded-[8px]">
                <ul class="flex justify-center gap-[4px]">
                    <li data-active class="flex items-center justify-center py-[8px] px-[12px] w-[158px] h-[40px] rounded-[8px] text-[#7A7B9F] data-active:bg-[#1A1B2D] data-active:text-[#A85FDD]"><a href="/login" class="text">Login</a></li>
                    <li class="flex justify-center py-[8px] px-[12px] w-[158px] h-[40px] rounded-[8px] text-[#7A7B9F] hover:bg-[#1A1B2D] hover:text-[#A85FDD]"><a href="/registrar" class="text">Cadastro</a></li>
                </ul>
            </nav>
        </div>
        <div id="form-login" class="flex flex-col items-center">
            <h1 class="text-white mb-[20px] text-3xl font-bold">Acesse sua conta</h1>
            <?php if ($validacoes = flash()->get('validacoes_login')) : ?>
                <div>
                    <ul class="bg-red-600 text-white p-4 rounded-[8px]">
                        <li>Wooops, acho que deu ruim hein?! 😬</li>
                        <?php foreach ($validacoes as $validacao) : ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <form action="/login" method="post" class="flex flex-col gap-[16px]">
                <input type="text" placeholder="E-mail" name="email" class="w-[328px] py-[12px] px-[16px] rounded-[8px] border border-[#1A1B2D] text-[#7A7B9F] focus: outline-none">
                <input type="password" placeholder="Senha" name="password" class="w-[328px] py-[12px] px-[16px] rounded-[8px] border border-[#1A1B2D] text-[#7A7B9F] focus: outline-none">

                <button class="py-[12px] px-[20px] bg-[#892CCD] text-white rounded-[8px] cursor-pointer hover:bg-[#A85FDD]">Entrar</button>
            </form>
        </div>
    </div>
</div>