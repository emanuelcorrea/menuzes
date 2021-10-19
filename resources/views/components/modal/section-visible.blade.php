<div class="modal micromodal-slide font-poppins" id="modal-section-visible" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container rounded-none sm:rounded-md w-full h-full sm:h-auto sm:w-5/12 2xl:w-[510px] px-12 pt-8 pb-8" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <form method="POST" action="{{ url('admin/section/visible') }}" class="flex flex-col justify-start items-start h-full sm:h-auto">
                @csrf
                @method('PUT')

                <h5 class="text-lg mx-auto mb-12 sm:mb-5 text-gray-800">Ocultar Seção</h5>
                <p class="m-5">Deseja <span id="section-visible"></span> a seção <b id="section-name" class="text-pink-cherie selection:bg-pink-400 selection:text-white underline"></b>?</p>
                <div class="flex flex-col sm:flex-row justify-end items-end w-full mt-4 flex-grow sm:flex-grow-0 gap-y-4 sm:gap-y-0">
                    <button type="button" class="cancel-button w-full sm:w-36 text-pink-cherie sm:mr-4 text-center py-2.5 ring-2 ring-pink-cherie hover:ring-2 hover:text-white rounded-3xl cursor-pointer hover:bg-pink-cherie transition ease duration-200 hover:shadow-md" data-micromodal-close>Fechar</button>
                    <button type="submit" class="w-full sm:w-36 text-center py-2.5 ring-2 ring-pink-cherie text-white rounded-3xl cursor-pointer bg-pink-cherie transition ease duration-200 shadow-md focus:bg-opacity-70">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
