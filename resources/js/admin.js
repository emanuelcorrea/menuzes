import Swal from 'sweetalert2';
import { route } from "./routes.js";

import 'animate.css';

const csrf = document.querySelector('meta[name="csrf-token"]')['content'];
let sectionId;

if (document.querySelector('div[data-section-id')) {
    sectionId = document.querySelector('div[data-section-id').dataset.sectionId;
}

const sectionsVisible = document.querySelectorAll('.section-visible');
if (sectionsVisible) {
    sectionsVisible.forEach(section => {
        section.addEventListener('click', () => sectionVisible(section));
    });
}

const sectionsDestroy = document.querySelectorAll('.section-destroy');
if (sectionsDestroy) {
    sectionsDestroy.forEach(section => {
        section.addEventListener('click', () => sectionDestroy(section));
    });
}

const sectionsEdit = document.querySelectorAll('.section-edit');
if (sectionsEdit) {
    sectionsEdit.forEach(section => {
        section.addEventListener('click', () => sectionEdit(section));
    });
}

if (document.getElementById('section-add')) {
    const sectionModal = document.getElementById('section-add');
    sectionModal.addEventListener('click', () => sectionAdd())
}

if (document.getElementById('item-add')) {
    const itemModal = document.getElementById('item-add');
    itemModal.addEventListener('click', () => itemAdd());
}

const sectionAdd = () => {
    Swal.fire({
        titleText: 'Adicionar Seção',
        showClass: {
            popup: 'animate__animated animate__fadeIn animate__fast'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOut animate__hyper_faster'
        },
        padding: '2.5rem',
        buttonsStyling: false,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Fechar',
        showCancelButton: true,
        reverseButtons: true,
        focusConfirm: true,
        width: 500,
        html: `
        <form method="POST" action="${route('section.store')}" class="modal-form flex flex-col justify-start items-start h-full sm:h-auto">
            <input type="hidden" value="${csrf}" name="_token">
            <div class="flex flex-col justify-start mb-5 w-full">
                <label class="text-sm mb-2 text-left" for="section-name">Nome</label>
                <input class="appearance-none outline-none h-[50px] text-sm border px-4 text-gray-700 focus:border-pink-cherie" id="section-name" placeholder="Minha nova seção"
                    name="section-name" required>
            </div>
            <div class="flex flex-col justify-start mb-8 w-full">
                <label class="text-sm mb-2 text-left" for="section-description">Descrição</label>
                <textarea class="appearance-none outline-none h-36 text-sm border pt-4 px-4 text-gray-700 focus:border-pink-cherie" id="section-description" placeholder="Minha nova seção"
                    name="section-description" maxlength="150"></textarea>
            </div>
        </form>
        `,
        preConfirm: (() => {
            let form = document.querySelector('.modal-form');

            let data = new FormData(form);

            if (data.get('section-name').length > 2 ) {
                form.submit();
            } else {
                document.querySelector('#section-name').focus();
                return false;
            }
        })
    });
}

const sectionEdit = (section) => {
    section = section.parentNode.parentNode.parentNode.dataset;
    
    Swal.fire({
        titleText: 'Editar Seção',
        showClass: {
            popup: 'animate__animated animate__fadeIn animate__fast'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOut animate__hyper_faster'
        },
        padding: '2.5rem',
        buttonsStyling: false,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Fechar',
        showCancelButton: true,
        reverseButtons: true,
        focusConfirm: true,
        width: 500,
        html: `
        <form method="POST" action="${route('section.update', [section.id])}" class="modal-form flex flex-col justify-start items-start h-full sm:h-auto">
            <input type="hidden" value="${csrf}" name="_token">
            <input type="hidden" value="PUT" name="_method">
            <div class="flex flex-col justify-start mb-5 w-full">
                <label class="text-sm mb-2 text-left" for="section-name">Nome</label>
                <input class="appearance-none outline-none h-6 text-sm border py-6 px-4 text-gray-700 focus:border-pink-cherie" id="section-name" placeholder="Minha nova seção"
                    name="section-name" required value="${section.name}">
            </div>
            <div class="flex flex-col justify-start mb-8 w-full">
                <label class="text-sm mb-2 text-left" for="section-description">Descrição</label>
                <textarea class="appearance-none outline-none h-36 text-sm border pt-4 px-4 text-gray-700 focus:border-pink-cherie" id="section-description" placeholder="Minha nova seção"
                    name="section-description" maxlength="150">${section.description}</textarea>
            </div>
        </form>
        `,
        preConfirm: (() => {
            let form = document.querySelector('.modal-form');

            let data = new FormData(form);

            if (data.get('section-name').length > 2) {
                form.submit();
            } else {
                document.querySelector('#section-name').focus();
                return false;
            }
        })
    });
}

const sectionVisible = (section) => {
    section = section.parentNode.parentNode.parentNode.dataset;
    
    Swal.fire({
        titleText: `${section.active == 1 ? 'Ocultar' : 'Exibir'} Seção`,
        showClass: {
            popup: 'animate__animated animate__fadeIn animate__fast'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOut animate__hyper_faster'
        },
        padding: '2.5rem',
        buttonsStyling: false,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Fechar',
        showCancelButton: true,
        reverseButtons: true,
        focusConfirm: true,
        width: 500,
        html: `
        <form method="POST" action="${route('section.visible', [section.id])}" class="modal-form flex flex-col justify-start items-start h-full sm:h-auto">
            <input type="hidden" value="${csrf}" name="_token">
            <input type="hidden" name="_method" value="PUT">

            <p class="m-5">Deseja ${section.active == 1 ? 'ocultar' : 'exibir'} a seção <b class="text-pink-cherie selection:bg-pink-cherie selection:text-white underline">${section.name}</b>?</p>
        </form>
        `
    }).then((value) => {
        if (value.isConfirmed) {
            let form = document.querySelector('.modal-form');

            form.submit();
        }
    });
};

const sectionDestroy = (section) => {
    section = section.parentNode.parentNode.parentNode.dataset;
    
    Swal.fire({
        titleText: 'Remover Seção',
        showClass: {
            popup: 'animate__animated animate__fadeIn animate__fast'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOut animate__hyper_faster'
        },
        padding: '2.5rem',
        buttonsStyling: false,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Fechar',
        showCancelButton: true,
        reverseButtons: true,
        focusConfirm: true,
        width: 500,
        html: `
        <form method="POST" action="${route('section.destroy', [section.id])}" class="modal-form flex flex-col justify-start items-start h-full sm:h-auto">
            <input type="hidden" value="${csrf}" name="_token">
            <input type="hidden" name="_method" value="DELETE">

            <p class="m-5">Deseja remover a seção <b class="text-pink-cherie selection:bg-pink-cherie selection:text-white underline">${section.name}</b>?</p>
        </form>`
    }).then((value) => {
        if (value.isConfirmed) {
            let form = document.querySelector('.modal-form');

            form.submit();
        }
    });
}

const itemAdd = () => {
    Swal.fire({
        titleText: 'Adicionar Item',
        showClass: {
            popup: 'animate__animated animate__fadeIn animate__fast'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOut animate__hyper_faster'
        },
        padding: '2.5rem',
        buttonsStyling: false,
        confirmButtonText: 'Confirmar',
        cancelButtonText: 'Fechar',
        showCancelButton: true,
        reverseButtons: true,
        focusConfirm: false,
        width: 900,
        html: `
        <form class="modal-form flex flex-col justify-start items-start" method="POST" action="${route('item.store')}" enctype="multipart/form-data">
            <input type="hidden" value="${csrf}" name="_token">
    
            <input type="hidden" value="${sectionId}" name="section-id">
            <div class="flex flex-row justify-between w-full">
                <div class="w-5/12">
                    <div class="w-11/12 h-72 flex flex-col justify-start">
                        <label for="item-image" class="text-sm mb-2 text-left">Imagem</label>
                        <label for="item-image" class="relative flex flex-col items-center justify-center shadow-md border-[.1px] rounded-sm cursor-pointer h-full text-pink-cherie hover:text-white hover:bg-pink-cherie transition ease duration-200">
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
                            <label class="text-sm pb-2 peer-focus:bg-black text-left" for="section-name">Nome</label>
                            <input class="appearance-none outline-none peer focus:border-pink-cherie h-[50px] text-sm border px-4 text-gray-700 hover:border-gray-500" id="section-name" placeholder="Meu novo item"
                                name="item-name" required>
                        </div>
                        <div class="flex flex-col justify-start w-2/12">
                            <label class="text-sm mb-2 text-left" for="section-price">Preço</label>
                            <input class="appearance-none outline-none focus:border-pink-cherie text-sm border h-[50px] px-3 text-gray-700 hover:border-gray-500" id="section-price" placeholder="R$ 0,00"
                                name="item-price" required>
                        </div>
                    </div>
                    <div class="flex flex-col justify-start mb-5 w-full">
                        <label class="text-sm mb-2 text-left" for="section-description">Descrição</label>
                        <textarea class="appearance-none outline-none focus:border-pink-cherie h-36 text-sm border pt-4 px-4 text-gray-700 hover:border-gray-500" id="section-description" placeholder="Meu novo item"
                                name="item-description" maxlength="150"></textarea>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label for="item-visible" class="text-sm mb-2 text-left">Visibilidade</label>
    
                        <div class="flex flex-row items-center">
                            <input id="item-visible" type="checkbox" class="w-4 h-4 cursor-pointer"
                                name="item-visible">
                            <label for="item-visible" class="pl-2 text-sm cursor-pointer">Ocultar prato do cardápio</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        `,
        preConfirm: (() => {
            form.submit();
        })
    });

    let itemImage = document.getElementById('item-image');
    
    itemImage.addEventListener('change', function() {
        let imagePreview = document.getElementById('image-preview');
        
        console.log(imagePreview);
        
        const file = this.files[0];

        console.log(file);

        if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                console.log(this.result);

                imagePreview.style.backgroundImage = `url('${this.result}')`;
                imagePreview.style.display = 'block';
                imagePreview.classList.remove('hidden');
            });

            reader.readAsDataURL(file);
        }
    });
}