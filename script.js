let toggles = document.getElementsByClassName('toggle')
let conentDiv = document.getElementsByClassName('module-content');
let icons = document.getElementsByClassName('icon');

for (let i=0; i < toggles.length; i++) {
    toggles[i].addEventListener('click', ()=>{
        if(parseInt(conentDiv[i].style.height) != conentDiv[i].scrollHeight){conentDiv[i].style.height = conentDiv[i].scrollHeight + 'px'; 
        toggles[i].style.color = "orange"; 
        icons[i].classList.remove('fa-plus'); 
        icons[i].classList.add('fa-minus');
        }
        else {
            conentDiv[i].style.height = "0px";
            toggles[i].style.color ="";
            icons[i].classList.remove('fa-minus');
            icons[i].classList.add('fa-plus');
        }
        for(let j=0; j <conentDiv.length; j++){
            if(j!==i){
            conentDiv[j].style.height = "0px";
            toggles[j].style.color ="";
            icons[j].classList.remove('fa-minus');
            icons[j].classList.add('fa-plus');
            }
        }
    })
}