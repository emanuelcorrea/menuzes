require('./bootstrap');

let sectionEdit = document.getElementById('section-edit');
let sectionVisible = document.getElementById('section-visible');
let sectionRemove = document.getElementById('section-remove');

sectionEdit.addEventListener('click', function (event) {
    event.preventDefault();
}, false);

sectionVisible.addEventListener('click', function (event) {
    event.preventDefault();
}, false);

sectionRemove.addEventListener('click', function (event) {
    event.preventDefault();
}, false);
