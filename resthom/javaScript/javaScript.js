


const l1 = document.querySelector('#l1');
const l2 = document.querySelector('#l2');
const l3 = document.querySelector('#l3');
const l4 = document.querySelector('#l4');
const r1 = document.querySelector('.r1');
const r2 = document.querySelector('.r2');
const r3 = document.querySelector('.r3');
const r4 = document.querySelector('.r4');
const li5 = document.querySelector('.eVfhOg');
const r5 = document.querySelector('.menu_t');
const li6 = document.querySelector('.fa-times-circle');


li5.addEventListener('click' , () => {
        r5.classList.add('open')
    });
li6.addEventListener('click' , () => {
        r5.classList.remove('open')
    });

l1.addEventListener('click' , () => {
r1.classList.add('intro')
r2.classList.remove('intro')
r3.classList.remove('intro')
r4.classList.remove('intro')
});

l2.addEventListener('click' , () => {
r1.classList.remove('intro')
r3.classList.remove('intro')
r4.classList.remove('intro')
r2.classList.add('intro')
});
l3.addEventListener('click' , () => {
r1.classList.remove('intro')
r2.classList.remove('intro')
r4.classList.remove('intro')
r3.classList.add('intro')
});
l4.addEventListener('click' , () => {
r2.classList.remove('intro')
r1.classList.remove('intro')
r3.classList.remove('intro')
r4.classList.add('intro')
}); 
                

     
       
