require('./bootstrap');

require('alpinejs');

window.Masonry = require('masonry-layout');
window.imgs = require('imagesloaded');

window.Masonry = require('masonry-layout');

var grid = document.getElementsByClassName('grid');

if (grid.length > 0) {
    var msnry = new Masonry('.grid', {
        itemSelector: '.grid-item',
        columnWidth: 300,
        gutter: 15,
    });


    function onAlways() {
        msnry.layout();
    }
    window.imgs(document.querySelector('.grid-item'), onAlways);

    window.onload = function () {
        msnry.layout();
    }
    window.onresize = function () {
        msnry.layout();
    }
}