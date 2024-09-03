const backArrow = document.querySelector('.project-arrow .back');
const nextArrow = document.querySelector('.project-arrow .next');
const projectSlider = document.querySelector('.project-slider > ul');

backArrow.addEventListener('click', () => {
    projectSlider.scrollLeft -= 300;
});

nextArrow.addEventListener('click', () => {
    projectSlider.scrollLeft += 300;
});


// 