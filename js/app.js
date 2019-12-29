/** FOR INDEX */

// SLIDER
const images = [
    'kyoto-view.jpg',
    'nanzeji.jpg',
    'nijo-castle.jpg',
    'nijo-sky.jpg',
    'taizo-temple.jpg'
];
const buttons = $('.arrows span');
let imageIndex = 0;
const image = $('#image-source');
image.attr('src', `images/jose/index-photos/${images[imageIndex]}`
);

// Arrows -> whichArrow takes in 2 values for bool
buttons.click(e => {
    const whichArrow = buttons.index(e.target);
    if(!whichArrow) (imageIndex == 0)? imageIndex = 4 : imageIndex--;
    else (imageIndex == 4)? imageIndex = 0: imageIndex++;
    image.attr('src', `images/jose/index-photos/${images[imageIndex]}`);
});

/* FOR GILMAN WEBSITE */

// Info
// if we are adding and removing classes, might as well
// do a for loop to all h4's...
const headers = $('#submission .container h4');
const info = $('#submission .container div.submission-info');
headers.click(e => {
    let id = e.currentTarget;
    let index = $(id).index();
    index = Math.floor(index / 2);
    resetClass();
    if($(info).eq(index).css('display') == 'block') $(info).eq(index).slideUp;
    else $(info).eq(index).slideDown();
});

function resetClass() {
    for(let i = 0; i < info.length; i++) {
        if($(info).eq(i).css('display') == 'block') $(info).eq(i).slideUp();
        //console.log(i);
        //$(info).eq(i).css('display', 'none');
    }
}