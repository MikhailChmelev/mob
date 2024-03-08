document.querySelectorAll(".acc").forEach((el) => {
    el.addEventListener('click', (ev)=>{
        let content = el.nextElementSibling;
        let clickedBlock = ev.target.closest('.acc');
        let arrow = clickedBlock.querySelector('.imge');

        if(content.style.height){
            document.querySelectorAll('.content').forEach((el)=> el.style.height = null);
            arrow.style.transform = 'rotate(0deg)';

        } else {
            document.querySelectorAll('.content').forEach((el)=> el.style.height = null);
            content.style.height = 260 + 'px';
            arrow.style.transform = 'rotate(180deg)';

        }
    });
});