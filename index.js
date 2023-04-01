const card = document.querySelectorAll(".card__inner"); 
 
card.forEach((item, i) =>  { 
    item.addEventListener('click', () => { 
        item.classList.toggle('is-flipped'); 
    }) 
})
    