<div class="modal micromodal-slide font-poppins" id="modal-section-edit" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container w-5/12 px-12 pt-8 pb-8" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <form method="POST" action="#" class="flex flex-col justify-start items-start">
                <h5 class="text-lg mx-auto mb-5 text-gray-800">Adicionar Seção</h5>

                <div class="flex flex-col justify-start mb-5 w-full">
                    <label class="text-sm mb-2" for="section-name">Nome</label>
                    <input class="appearance-none outline-none h-6 text-sm border py-6 px-4 text-gray-700" id="section-name" placeholder="Minha nova seção">
                </div>
                <div class="flex flex-col justify-start mb-8 w-full">
                    <label class="text-sm mb-2" for="section-description">Descrição</label>
                    <textarea class="appearance-none outline-none h-36 text-sm border pt-4 px-4 text-gray-700" id="section-description" placeholder="Minha nova seção"></textarea>
                </div>
                <div class="flex flex-row justify-end items-center w-full mt-4">
                    <button type="button" class="w-36 text-pink-cherie mr-4 cursor-pointer text-center py-2.5 ring-2 ring-pink-cherie hover:ring-2 hover:ring-pink-500 hover:text-white rounded-3xl cursor-pointer hover:bg-pink-cherie transition ease duration-200 hover:shadow-md" data-micromodal-close>Fechar</button>
                    <button type="submit" class="w-36 cursor-pointer text-center py-2.5 ring-2 ring-pink-cherie text-white rounded-3xl cursor-pointer bg-pink-cherie transition ease duration-200 shadow-md focus:bg-opacity-70">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
