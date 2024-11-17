import './bootstrap';

window.addEventListener('scroll', e => {
    const header = document.querySelector('#header')
    e.preventDefault()
    header.classList.toggle('sticky-nav', window.scrollY > 120);
})

