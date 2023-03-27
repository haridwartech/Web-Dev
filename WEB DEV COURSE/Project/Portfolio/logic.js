// Header Toggle Start
let menuBtn = document.getElementById('menuBtn')

menuBtn.addEventListener('click', ()=>
{
    document.querySelector('body').classList.toggle('menuActive')
    menuBtn.classList.toggle('bx-x')
})
// Header Toggle END

// Typing Animation START
let type = new Typed('.auto-input',
{
    strings: ['Front-End Developer...!', 'Learner....!', 'UI Designer....!', 'Youtuber....!'],
    typeSpeed: 100, 
    backSpeed : 50, 
    backDelay: 200,
    loop : true ,

})

// Typing Animation END
