let colorBtn = document.getElementById("colorBtn").addEventListener('click', function(){
    document.querySelector('.theme-btn-container').classList.toggle("active");
});

let themeBtn = document.querySelectorAll('.themeBtns');
themeBtn.forEach(color =>{
    color.addEventListener('click',()=>{
        let dataColor = color.getAttribute('data-color');
        let body = document.getElementById("main-body");
        let header =document.getElementById('header');
        if(dataColor=='#ffffff'){
            document.querySelector(':root').style.setProperty('--text-color','black')
            header.style.backgroundColor = dataColor;
            body.style.backgroundColor = dataColor;
        }
        if(dataColor=='#1a0706'){
            document.querySelector(':root').style.setProperty('--text-color','white')
            header.style.backgroundColor = dataColor;
            body.style.backgroundColor = dataColor;
        }
        
        if(dataColor=='#00e0d5'){
            document.querySelector(':root').style.setProperty('--text-color','black')
            header.style.backgroundColor = dataColor;
            body.style.backgroundColor = dataColor;
        }
        
        
    });
});