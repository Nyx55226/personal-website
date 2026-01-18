
    const select=document.getElementById('changel');
    let localLangue = localStorage.getItem('lang') || (navigator.language || navigator.userLanguage).slice(0,2);
    if (!["it","en"].includes(localLangue)) localLangue = "en";
    let translations = {};
        fetch('lang.json')
            .then(res => res.json())
            .then(data => {
                translations = data;
                setLanguage(localLangue);
                select.value=localLangue;
                selectImgLanguage();
        });
    
    function selectImgLanguage(){
        if(select.value==='it') {
            select.style.backgroundImage= "url('img/flag/it.png')";
            setLanguage('it');
        }
        else if(select.value==='en') {
            select.style.backgroundImage="url('img/flag/en.png')";
            setLanguage('en');
        }
    }
    function getNested(obj, path) {
        return path.split('.').reduce((o, k) => (o || {})[k], obj);
    }

    function setLanguage(lang) {
        document.querySelectorAll('[data-key]').forEach(e => {
            const path = e.getAttribute('data-key');
            const value = getNested(translations[lang], path);
            if(value){
                if(e.tagName==='INPUT' || e.tagName==='TEXTAREA'){
                    e.placeholder=value;
                }else{
                    e.textContent = value;
                }
            } 
        });
    }
    if(select)select.addEventListener('change',()=>{
        localStorage.setItem('lang', select.value);
        selectImgLanguage();
    });

    const contact=document.getElementById('contact');
    if(contact) contact.addEventListener('click', ()=>{
        window.location.href="contact.php";
    });
    
    const project= document.getElementById('project');
    if(project) project.addEventListener('click',()=>{
        window.location.href="project.php";
    });

    const home=document.getElementById('home');
    if(home) home.addEventListener('click', ()=>{
        window.location.href="/";
    });

    const btn_error=document.getElementById('btn-error');
    if(btn_error) btn_error.addEventListener('click',()=>{
        window.location.href="/";
    });
    const buttonRepositoryMR=document.getElementById('buttonRepositoryMR');
    if(buttonRepositoryMR) buttonRepositoryMR.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226/Magical-Research.git", "_blank");
    });
    
    const buttonRepositoryTris=document.getElementById('buttonRepositoryTris');
    if(buttonRepositoryTris) buttonRepositoryTris.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226/Tris-Tic-Tac-Toe-.git","_blank");
    });
    
    const buttonRepositoryF4=document.getElementById('buttonRepositoryF4');
    if(buttonRepositoryF4) buttonRepositoryF4.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226/Forza-4.git","_blank");
    });

    const buttonRepositoryRadice=document.getElementById('buttonRepositoryRadice');
    if(buttonRepositoryRadice) buttonRepositoryRadice.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226/Radice-Christmas-Harmony.git","_blank");
    });

    const buttonRepositorybattaglia=document.getElementById('buttonRepositorybattaglia');
    if(buttonRepositorybattaglia) buttonRepositorybattaglia.addEventListener('click', ()=>{
        window.open("https://github.com/Nyx55226/Battaglia-Navale.git","_blank");
    });

    const buttonRepositorystudy_swap=document.getElementById('buttonRepositorystudy-swap');
    if(buttonRepositorystudy_swap) buttonRepositorystudy_swap.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226/Study-Swap.git","_blank");
    });

    const buttonRepositoryPersonalP=document.getElementById('buttonRepositoryPersonalP');
    if(buttonRepositoryPersonalP) buttonRepositoryPersonalP.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226/personal-website","_blank");
    });

    const button_github=document.getElementById('button-github');
    if(button_github) button_github.addEventListener('click',()=>{
        window.open("https://github.com/Nyx55226","_blank");
    });


    const projects = document.querySelectorAll('.project');
    const btn_reset=document.getElementById('btn-reset');
    const index_p_s=document.getElementById('span');
    const btn_java=document.getElementById('btn-java');
    const btn_html=document.getElementById('btn-html');
    const btn_cpp=document.getElementById('btn-C++');
    const btn_flutter=document.getElementById('btn-flutter');
    const btn_laravel=document.getElementById('btn-laravel');
    let linguaggi_scelti=[];

    function choice_l(){
        if(linguaggi_scelti.length===0){
            index_p_s.textContent="";
            projects.forEach(p=>p.style.display="");
            index_p_s.classList.remove('active-span');
        }else{
            index_p_s.textContent=linguaggi_scelti.length;
            index_p_s.classList.add('active-span');
            projects.forEach(p=>{
                const typejob=p.dataset.type;
                if(!linguaggi_scelti.includes(typejob)){
                    p.style.display="none";
                }else{
                    p.style.display="";
                }
            });
        }
    }

    if(btn_reset && index_p_s && projects)
    btn_reset.addEventListener('click', ()=>{
        projects.forEach(p=> p.style.display="");
        index_p_s.textContent="";
        btn_java.classList.remove('active');
        btn_html.classList.remove('active');
        index_p_s.classList.remove('active-span');
        btn_cpp.classList.remove('active');
        btn_flutter.classList.remove('active');
        linguaggi_scelti.length=0;
    });

    if(projects && btn_java)
        btn_java.addEventListener('click',()=>{
        if(!btn_java.classList.contains('active')) {
            btn_java.classList.add('active');
            linguaggi_scelti.push("java");
        }else{
            btn_java.classList.remove('active');
            linguaggi_scelti.splice(linguaggi_scelti.indexOf("java"),1);
        }
        choice_l();
    });


    if(projects && btn_html)
        btn_html.addEventListener('click',()=>{
        if(!btn_html.classList.contains('active')){
            btn_html.classList.add('active');
            linguaggi_scelti.push("html/php");
        }else{
            btn_html.classList.remove('active');
            linguaggi_scelti.splice(linguaggi_scelti.indexOf("html/php"),1);
        }
        choice_l();
    });

    if(projects && btn_cpp)
        btn_cpp.addEventListener('click',()=>{
        if(!btn_cpp.classList.contains('active')){
            btn_cpp.classList.add('active');
            linguaggi_scelti.push("cpp");
        }else{
            btn_cpp.classList.remove('active');
            linguaggi_scelti.splice(linguaggi_scelti.indexOf("cpp"),1);
        }
        choice_l();
    });

    if(projects && btn_flutter)
        btn_flutter.addEventListener('click',()=>{
        if(!btn_flutter.classList.contains('active')){
            btn_flutter.classList.add('active');
            linguaggi_scelti.push("flutter");
        }else{
            btn_flutter.classList.remove('active');
            linguaggi_scelti.splice(linguaggi_scelti.indexOf("flutter"),1);
        }
        choice_l();
    });

    const textarea=document.getElementById('textarea');
    const characters=document.getElementById('characters');
    const cont=document.getElementById('cont');
    if(textarea) textarea.addEventListener('input',(event)=>{
        const text=event.target.value.length;
        if(text===0){
            characters.textContent="";
            cont.style.display="none";
        }else{
            characters.textContent=+text;
            cont.style.display="";
        }
    });
    
    // if(projects && btn_laravel) btn_laravel.addEventListener('click',()=>{
    //     if(!btn_laravel.classList.contains('active')){
    //         btn_laravel.classList.add('active');
    //         linguaggi_scelti.push("laravel");
    //     }else{
    //         btn_laravel.classList.remove('active');
    //         linguaggi_scelti.splice(linguaggi_scelti.indexOf("laravel"),1);
    //     }
    //     choice_l();
    // });



    function showMessage(message){
        const toast=document.getElementById('toast');
        toast.textContent=message;
        toast.style.opacity=1;
        setTimeout(()=>{
            toast.style.opacity=0;
        }, 1000);
    }

    const sendEmail=document.getElementById('sendEmail');
    const email_=document.getElementById('email');
    const subject=document.getElementById('subject');
    if(sendEmail) sendEmail.addEventListener('submit',async (e)=>{
        e.preventDefault();
        const sc=document.querySelector("meta[name='SC']").getAttribute('content');
        const sub=subject.value;
        const body=textarea.value;
        const email=email_.value;
        if(sub.length<5 || body.length<40) return;
        
        const formdata= new FormData();
        formdata.append("email", email);
        formdata.append("subject",sub);
        formdata.append("body",body);
        formdata.append("SC",sc);

        try{
            const res= await fetch("../send_email.php",{
                method:'POST',
                body:formdata,
                credentials: "same-origin"
            });

            const r=await res.text();
            if(r==='ok'){
                email_.value="";
                subject.value="";
                textarea.value="";
                characters.textContent="";
                cont.style.display="none"
                showMessage(translations[lang].errors.successsendemail);
            }else if(r==="emptyField") showMessage(translations[lang].errors.emptyField);
            else if(r==="textshort") showMessage(translations[lang].errors.textshort);
            else if(r==="emailnotvalid") showMessage(translations[lang].errors.emailnotvalid);
        }catch(res) { showMessage(translations[lang].errors.generalerror);}
    });

