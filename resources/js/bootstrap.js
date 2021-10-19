window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// MicroModal.init({
//     disableScroll: true,
//     disableFocus: true
// });

// MicroModal.init({
//     onShow: modal => sectionModal(modal),
//     openTrigger: 'data-section-modal',
//     disableScroll: true,
//     disableFocus: true
// });

let sectionOptions = document.querySelectorAll('li.section button');
let itemOptions = document.querySelectorAll('li.item button');

if (sectionOptions.length) {
    sectionOptions.forEach(option => {
        option.addEventListener('click', (e) => e.preventDefault());
    });
}

if (itemOptions.length) {
    itemOptions.forEach(option => {
        option.addEventListener('click', (e) => e.preventDefault());
    });
}

// if (sectionOptions.length) {
//     sectionOptions.forEach(option => {
//         option.addEventListener('click', function (event) {
//             event.preventDefault();
    
//             let modal = option.dataset.modalFunction;
    
//             let section = option.parentNode.parentNode.parentNode.dataset;
            
//             switch (modal) {
//                 case 'edit':
    
//                     /**
//                      * Section Edit
//                      */
//                     MicroModal.show('modal-section-edit', {
//                         onShow: modal => sectionEdit(modal, section),
//                         disableScroll: true,
//                         disableFocus: true
//                     });
                    
//                     break;
//                 case 'visible':
                        
//                     /**
//                      * Section Visible
//                      */
//                     MicroModal.show('modal-section-visible', {
//                         onShow: modal => sectionVisible(modal, section),
//                         disableScroll: true,
//                         disableFocus: true
//                     });
                
//                     break;
//                 case 'destroy':
    
//                     /**
//                      * Section Destroy
//                      */
//                     MicroModal.show('modal-section-destroy', {
//                         onShow: modal => sectionDestroy(modal, section),
//                         disableScroll: true,
//                         disableFocus: true
//                     });
                    
//                 default:
//                     break;
//             }
//         }, false);
//     });
// }

// if (itemOptions.length) {
//     itemOptions.forEach(option => {
//         option.addEventListener('click', function (event) {
//             event.preventDefault();
    
//             let modal = option.dataset.modalFunction;
    
//             let item = option.parentNode.parentNode.parentNode.dataset;
            
//             switch (modal) {
//                 case 'edit':
    
//                     /**
//                      * Item Edit
//                      */
//                     itemAdd();
                    
//                     break;
//                 case 'visible':
                        
//                     /**
//                      * Item Visible
//                      */
//                     MicroModal.show('modal-item-visible', {
//                         onShow: modal => itemVisible(modal, item),
//                         disableScroll: true,
//                         disableFocus: true
//                     });
                
//                     break;
//                 case 'destroy':
    
//                     /**
//                      * Item Destroy
//                      */
//                     MicroModal.show('modal-item-destroy', {
//                         onShow: modal => itemDestroy(modal, item),
//                         disableScroll: true,
//                         disableFocus: true
//                     });
                    
//                 default:
//                     break;
//             }
//         }, false);
//     });
// }


// /**
//  * Edit Section
//  * 
//  * @param {*} modal 
//  * @param {*} section 
//  */
// const sectionEdit = (modal, section) => {
//     let form = modal.querySelector('form');
//     let formAction = form.action;
//     let inputName = modal.querySelector('#section-name');
//     let inputDescription = modal.querySelector('#section-description');
    
//     form.setAttribute('action', `${formAction}/${section.id}`);

//     inputName.value = section.name;
//     inputDescription.value = section.description;

//     let cancelButton = modal.querySelector('.cancel-button');

//     cancelButton.addEventListener('click', function() {
//         form.setAttribute('action', formAction);
//     });
// }

// /**
//  * Visible Section
//  * 
//  * @param {*} modal 
//  * @param {*} section 
//  */
// const sectionVisible = (modal, section) => {
//     let form = modal.querySelector('form');
//     let formAction = form.action;

//     let name = modal.querySelector('#section-name');
//     let visible = modal.querySelector('#section-visible');
    
//     form.setAttribute('action', `${formAction}/${section.id}`);

//     name.innerHTML = section.name;
//     visible.innerHTML = section.active == 1 ? 'ocultar' : 'exibir';

//     let cancelButton = modal.querySelector('.cancel-button');

//     cancelButton.addEventListener('click', function() {
//         form.setAttribute('action', formAction);
//     });
// }

// /**
//  * Destroy Section
//  * 
//  * @param {*} modal 
//  * @param {*} section 
//  */
// const sectionDestroy = (modal, section) => {
//     let form = modal.querySelector('form');
//     let formAction = form.action;

//     let name = modal.querySelector('#section-name');
    
//     form.setAttribute('action', `${formAction}/${section.id}`);

//     name.innerHTML = section.name;

//     let cancelButton = modal.querySelector('.cancel-button');

//     cancelButton.addEventListener('click', function() {
//         form.setAttribute('action', formAction);
//     });
// }

// // Item  

// /**
//  * Edit SecItemtion
//  * 
//  * @param {*} modal 
//  * @param {*} item 
//  */
// const itemEdit = (modal, item) => {
//     let form = modal.querySelector('form');
//     let formAction = form.action;
//     let inputName = modal.querySelector('#item-name');
//     let inputPrice = modal.querySelector('#item-price');
//     let inputDescription = modal.querySelector('#item-description');
//     let inputChecked = modal.querySelector('#item-visible');
    
//     form.setAttribute('action', `${formAction}/${item.id}`);

//     inputName.value = item.name;
//     inputDescription.value = item.description;
//     inputPrice.value = item.price;
//     inputChecked.checked = !item.active;

//     if (item.imagePath != '') {
//         modal.querySelector('#image-preview').style.backgroundImage = `url('${item.imagePath}')`;
//         modal.querySelector('#image-preview').classList.remove("hidden"); 
//     }

//     let cancelButton = modal.querySelector('.cancel-button');

//     cancelButton.addEventListener('click', function() {
//         form.setAttribute('action', formAction);
//     });
// }

// /**
//  * Visible Item
//  * 
//  * @param {*} modal 
//  * @param {*} item 
//  */
// const itemVisible = (modal, item) => {
//     let form = modal.querySelector('form');
//     let formAction = form.action;

//     let name = modal.querySelector('#item-name');
//     let visible = modal.querySelector('#item-visible');
    
//     form.setAttribute('action', `${formAction}/${item.id}`);

//     name.innerHTML = item.name;
//     visible.innerHTML = item.active == 1 ? 'ocultar' : 'exibir';

//     let cancelButton = modal.querySelector('.cancel-button');

//     cancelButton.addEventListener('click', function() {
//         form.setAttribute('action', formAction);
//     });
// }

// /**
//  * Destroy Item
//  * 
//  * @param {*} modal 
//  * @param {*} item 
//  */
// const itemDestroy = (modal, item) => {
//     let form = modal.querySelector('form');
//     let formAction = form.action;

//     let name = modal.querySelector('#section-name');
    
//     form.setAttribute('action', `${formAction}/${section.id}`);

//     name.innerHTML = section.name;

//     let cancelButton = modal.querySelector('.cancel-button');

//     cancelButton.addEventListener('click', function() {
//         form.setAttribute('action', formAction);
//     });
// }

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
