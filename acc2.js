document.querySelector('.button-conte').addEventListener('click', () =>{
    let accord_block = document.querySelector('.accord');
    let rotate_arrow = document.querySelector('.rotate-img');

    if(accord_block.style.height){
        accord_block.style.height = null;
        rotate_arrow.style.transform = 'rotate(0deg)';
    } else {
        rotate_arrow.style.transform = 'rotate(180deg)';
        accord_block.style.height = 270 + "px";
    }
})