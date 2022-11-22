const R1 = document.querySelector('.R1');
const R2 = document.querySelector('.R2');
const R3 = document.querySelector('.R3');
const R4 = document.querySelector('.R4');
const premier = document.querySelector('#premier');
const premier2 = document.querySelector('#premier2');
const premier3 = document.querySelector('#premier3');
const premier4 = document.querySelector('#premier4');
const deuxieme = document.querySelector('#deuxieme');
const deuxieme2 = document.querySelector('#deuxieme2');
const deuxieme3 = document.querySelector('#deuxieme3');
const deuxieme4 = document.querySelector('#deuxieme4');
const troisieme = document.querySelector('#troisieme');
const troisieme2 = document.querySelector('#troisieme2');
const troisieme3 = document.querySelector('#troisieme3');
const troisieme4 = document.querySelector('#troisieme4');
const quatreiem = document.querySelector('#quatreiem');
const quatreiem2 = document.querySelector('#quatreiem2');
const quatreiem3 = document.querySelector('#quatreiem3');
const quatreiem4 = document.querySelector('#quatreiem4');

premier.addEventListener('click' , () =>{
    R1.classList.add('intro') 
    R2.classList.remove('intro')  
    R3.classList.remove('intro')  
    R4.classList.remove('intro') 
      
});
deuxieme.addEventListener('click' , () =>{
        R1.classList.remove('intro')  
        R3.classList.remove('intro')  
        R4.classList.remove('intro')
        R2.classList.add('intro')  
});
troisieme.addEventListener('click' , () =>{ 
        R2.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.remove('intro') 
        R3.classList.add('intro')  
});
quatreiem.addEventListener('click' , () =>{
        R2.classList.remove('intro')  
        R3.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.add('intro')  
});
premier2.addEventListener('click' , () =>{
    R1.classList.add('intro') 
    R2.classList.remove('intro')  
    R3.classList.remove('intro')  
    R4.classList.remove('intro') 
      
});
deuxieme2.addEventListener('click' , () =>{
        R1.classList.remove('intro')  
        R3.classList.remove('intro')  
        R4.classList.remove('intro')
        R2.classList.add('intro')  
});
troisieme2.addEventListener('click' , () =>{ 
        R2.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.remove('intro') 
        R3.classList.add('intro')  
});
quatreiem2.addEventListener('click' , () =>{
        R2.classList.remove('intro')  
        R3.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.add('intro')  
});



premier3.addEventListener('click' , () =>{
    R1.classList.add('intro') 
    R2.classList.remove('intro')  
    R3.classList.remove('intro')  
    R4.classList.remove('intro') 
      
});
deuxieme3.addEventListener('click' , () =>{
        R1.classList.remove('intro')  
        R3.classList.remove('intro')  
        R4.classList.remove('intro')
        R2.classList.add('intro')  
});
troisieme3.addEventListener('click' , () =>{ 
        R2.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.remove('intro') 
        R3.classList.add('intro')  
});
quatreiem3.addEventListener('click' , () =>{
        R2.classList.remove('intro')  
        R3.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.add('intro')  
});
premier4.addEventListener('click' , () =>{
    R1.classList.add('intro') 
    R2.classList.remove('intro')  
    R3.classList.remove('intro')  
    R4.classList.remove('intro') 
      
});
deuxieme4.addEventListener('click' , () =>{
        R1.classList.remove('intro')  
        R3.classList.remove('intro')  
        R4.classList.remove('intro')
        R2.classList.add('intro')  
});
troisieme4.addEventListener('click' , () =>{ 
        R2.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.remove('intro') 
        R3.classList.add('intro')  
});
quatreiem4.addEventListener('click' , () =>{
        R2.classList.remove('intro')  
        R3.classList.remove('intro')  
        R1.classList.remove('intro')  
        R4.classList.add('intro')  
});