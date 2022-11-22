const f1 = document.querySelector('.s1');
const f2 = document.querySelector('.s2');
const f3 = document.querySelector('.s3');
const f4 = document.querySelector('.s4');
const d1 = document.querySelector('.dis1');
const d2 = document.querySelector('.dis2');
const d3 = document.querySelector('.dis3');
const d4 = document.querySelector('.dis4');


f1.addEventListener('click' , () => {
        d1.classList.add('intro')
        d2.classList.remove('intro')
        d3.classList.remove('intro')
        d4.classList.remove('intro')
    });
f2.addEventListener('click' , () => {
        d1.classList.remove('intro')
        d2.classList.add('intro')
        d3.classList.remove('intro')
        d4.classList.remove('intro')
    });
f3.addEventListener('click' , () => {
        d1.classList.remove('intro')
        d2.classList.remove('intro')
        d3.classList.add('intro')
        d4.classList.remove('intro')
    });
f4.addEventListener('click' , () => {
        d1.classList.remove('intro')
        d2.classList.remove('intro')
        d3.classList.remove('intro')
        d4.classList.add('intro')
    });