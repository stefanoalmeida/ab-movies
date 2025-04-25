<div id="wrapper" class="grid grid-cols-2">
    <div>
        <img src="./../assets/img/img-login.png" alt="" class="w-full h-screen">
    </div>
    <div id="login" class="py-[90px] px-[171px]">
        <div id="button-login" class="mb-[52px]">
            <nav class="w-[328px] bg-[#131320] p-[4px] rounded-[8px]">
                <ul class="flex justify-center gap-[4px]">
                    <li class="flex items-center justify-center py-[8px] px-[12px] w-[158px] h-[40px] rounded-[8px] text-[#7A7B9F] hover:bg-[#1A1B2D] hover:text-[#A85FDD]"><a href="/login" class="text">Login</a></li>
                    <li data-active  class="flex justify-center py-[8px] px-[12px] w-[158px] h-[40px] rounded-[8px] text-[#7A7B9F] data-active:bg-[#1A1B2D] data-active:text-[#A85FDD]"><a href="/registrar" class="text">Cadastro</a></li>
                </ul>
            </nav>
        </div>
        <div id="form-login" class="flex flex-col items-center">
            <h1 class="text-white mb-[20px] text-3xl font-bold">Crie sua conta</h1>
            <form action="/cadastrar-usuario" method="post" class="flex flex-col gap-[16px]">
                <?php if (strlen($mensagem) > 0):?>
                    <div id="mensagem" class="flex items-center justify-center bg-[#892CCD] text-white p-[4px] rounded-[8px]">
                        <?= $mensagem ?>
                    </div>
                <?php endif; ?>
                <input type="text" name="name" placeholder="Nome" class="w-[328px] py-[12px] px-[16px] rounded-[8px] border border-[#1A1B2D] text-[#7A7B9F] focus: outline-none">
                <input type="text" name="email" placeholder="E-mail" class="w-[328px] py-[12px] px-[16px] rounded-[8px] border border-[#1A1B2D] text-[#7A7B9F] focus: outline-none">
                <input type="password" name="password" placeholder="Senha" class="w-[328px] py-[12px] px-[16px] rounded-[8px] border border-[#1A1B2D] text-[#7A7B9F] focus: outline-none">

                <button type="submit" class="py-[12px] px-[20px] bg-[#892CCD] text-white rounded-[8px] cursor-pointer hover:bg-[#A85FDD]">Criar</button>
            </form>
        </div>
    </div>
</div>
