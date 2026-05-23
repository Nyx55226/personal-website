let translations = {};

function getNested(obj, path) {
    return path.split('.').reduce((o, k) => (o || {})[k], obj);
}

function setLanguage(select) {
    const lang=window.localStorage.getItem('languages') ? window.localStorage.getItem('languages') : 'en';
    select.value=lang;
    document.querySelectorAll('[data-key]').forEach(el => {
        const path = el.getAttribute('data-key');
        const value = getNested(translations[lang], path);
        if (value) {
            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.placeholder = value;
            } else {
                el.textContent = value;
            }
        }
    });

    switch(select.value){
        case 'it':
            select.style.backgroundImage='url(storage/flag/it.svg)';
            break;
        case 'en':
            select.style.backgroundImage='url(storage/flag/en.svg)';
            break;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const switchLanguages = document.getElementById('switchLanguages');
    

    fetch('storage/lang.json')
        .then(res => res.json())
        .then(data => {
            translations = data;
            setLanguage(switchLanguages);
        });

    switchLanguages.addEventListener('change', () => {
        window.localStorage.setItem('languages',switchLanguages.value);
        setLanguage(switchLanguages);
    });

});