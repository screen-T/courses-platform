let btnopen = document.getElementById('open');

let content = document.querySelector('.navbar-content'); 
/*
console.log(btnclose) ; 
console.log(btnopen) ; 
console.log(content) ; 
btnclose.onclick = function (){
    content.classList.add('hide') ;
    btnclose.classList.add('hide') ;
    btnopen.classList.remove('hide') ;
}
btnopen.onclick = function()
{
    this.classList.add('hide') ;
    btnclose.classList.remove('hide') ;
    content.classList.remove('hide') ;
    content.classList.toggle('show')
}
*/
btnopen.addEventListener('click', evt => {
    content.classList.toggle('show')
  })
