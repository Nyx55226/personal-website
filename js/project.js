document.addEventListener('DOMContentLoaded',()=>{

    const btns_project=document.querySelectorAll('[data-btn]');
    const projects=document.querySelectorAll('[data-project]');
    let languages_choice=[];

    btns_project.forEach(elements=>{
        elements.addEventListener('click',()=>{
            elements.classList.toggle('active');
            if(elements.classList.contains('active')) languages_choice.push(elements.dataset.btn);
            else {
                languages_choice.splice(languages_choice.indexOf(elements.dataset.btn),1);
            }

            projects.forEach(elements=>{
                if(languages_choice.length===0) elements.style.display='';
                else if(!languages_choice.includes(elements.getAttribute('data-project'))) elements.style.display='none';
                else elements.style.display='';
            });
        });
        
    });

    document.getElementById('btn_reset').addEventListener('click',()=>{
        languages_choice=[];
        btns_project.forEach(elements=>{elements.classList.remove('active')});
        projects.forEach(elements=>{elements.style.display=''});
    });





    



});