document.getElementById('languageContainer').addEventListener('click',(e)=>{
    if (e.target.nodeName=="IMG"){
        let language=e.target.parentNode.id;
        window.location.href="?language="+language
    }
})