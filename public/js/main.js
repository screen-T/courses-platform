let btnopen = document.getElementById('open');

let content = document.querySelector('.navbar-content'); 
let x=2 ;
function show()
{
    if (x%2==0)
    {
        content.classList.remove('content-old')
        content.classList.add('show') 
        x=x+1 ;
    }
    else if(x%2!=0)
    {     
        content.classList.add('content-old') 
        content.classList.remove('show')
        x=x+1
    }  
}



