let click = document.querySelector('.click');
        let list = document.querySelector('.list');
        click.addEventListener("click",()=>{
            list.style.transition = "0s";
            list.classList.toggle('newlist');
            list.style.transition = "0.3s";
        });