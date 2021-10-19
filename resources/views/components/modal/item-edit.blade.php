<div class="modal micromodal-slide font-poppins" id="modal-item-edit" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container w-7/12 2xl:w-[900px] px-12 pt-8 pb-8" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <form class="flex flex-col justify-start items-start" method="POST" action="{{ url('admin/item') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" value="1" name="section-id">
                <h5 class="text-lg mx-auto mb-8 text-gray-800">Editar Item</h5>

                <div class="flex flex-row justify-between w-full">
                    <div class="w-5/12">
                        <div class="w-11/12 h-72 flex flex-col justify-start">
                            <label for="item-image" class="text-sm mb-2">Imagem</label>
                            <label for="item-image" class="relative flex flex-col items-center justify-center shadow-md rounded-sm cursor-pointer h-full text-pink-cherie hover:text-white hover:bg-pink-cherie transition ease duration-200">
                                <div id="image-preview" class="absolute inset-y-0 w-full h-full hidden bg-center bg-no-repeat bg-cover hover:opacity-20 transition ease duration-200"></div>
                                <i class="fas fa-camera-retro text-4xl mb-2"></i>
                                <span class="text-center">Clique para adicionar<br> uma imagem</span>
                            </label>
                            <input class="hidden" type="file" name="image" id="item-image">
                        </div>
                    </div>
                    <div class="w-7/12 flex flex-col">
                        <div class="flex flex-row w-full mb-5">
                            <div class="flex flex-col justify-start mr-2 w-10/12">
                                <label class="text-sm mb-2 peer-focus:bg-black" for="section-name">Nome</label>
                                <input id="item-name" class="appearance-none outline-none peer focus:border-pink-cherie h-6 text-sm border py-6 px-4 text-gray-700" id="section-name" placeholder="Meu novo item"
                                       name="item-name" required>
                            </div>
                            <div class="flex flex-col justify-start w-2/12">
                                <label class="text-sm mb-2" for="section-price">Preço</label>
                                <input id="item-price" class="appearance-none outline-none focus:border-pink-cherie h-6 text-sm border py-6 px-3 text-gray-700" id="section-price" placeholder="R$ 0,00"
                                       name="item-price" required>
                            </div>
                        </div>
                        <div class="flex flex-col justify-start mb-5 w-full">
                            <label class="text-sm mb-2" for="section-description">Descrição</label>
                            <textarea id="item-description" class="appearance-none outline-none focus:border-pink-cherie h-36 text-sm border pt-4 px-4 text-gray-700" id="section-description" placeholder="Meu novo item"
                                      name="item-description" maxlength="150"></textarea>
                        </div>
                        <div class="flex flex-col mb-8">
                            <label for="item-visible" class="text-sm mb-2">Visibilidade</label>

                            <div class="flex flex-row items-center">
                                <input id="item-visible" type="checkbox" class="w-4 h-4 cursor-pointer"
                                       name="item-visible">
                                <label for="item-visible" class="pl-2 text-sm cursor-pointer">Ocultar prato do cardápio</label>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-end items-end w-full mt-4 flex-grow sm:flex-grow-0 gap-y-4 sm:gap-y-0">
                            <button type="button" class="cancel-button w-full sm:w-36 text-pink-cherie sm:mr-4 text-center py-2.5 ring-2 ring-pink-cherie hover:ring-2 hover:text-white rounded-3xl cursor-pointer hover:bg-pink-cherie transition ease duration-200 hover:shadow-md" data-micromodal-close>Fechar</button>
                            <button type="submit" class="w-full sm:w-36 text-center py-2.5 ring-2 ring-pink-cherie text-white rounded-3xl cursor-pointer bg-pink-cherie transition ease duration-200 shadow-md focus:bg-opacity-70">Confirmar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
