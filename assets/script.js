
 const navToggler = document.querySelector(".nav-toggler");
 navToggler.addEventListener("click", navToggle);

 function navToggle() {
    navToggler.classList.toggle("active");
    const nav = document.querySelector(".nav");
    nav.classList.toggle("open");
    if(nav.classList.contains("open")){
    	nav.style.maxHeight = nav.scrollHeight + "px";
    }
    else{
    	nav.removeAttribute("style");
    }
 } 



//  ABOUT ME JS


const text = document.querySelector(".animation");
const strText = text.textContent;
const splitText = strText.split("");
text.textContent = "";
for(let i=0; i<splitText.length;i++){
	text.innerHTML +="<span>" + splitText[i] + "</span>"
}

let char =0;
let timer = setInterval(onTick, 50);

function onTick(){
	const span = text.querySelectorAll('span')[char];
	span.classList.add('fade');
	char++;

	if( char === splitText.length){
		complete();
		return;
	}
}

function complete(){
	clearInterval(timer);
	timer =null;
}
 