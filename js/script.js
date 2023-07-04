// выбор цвета кота
let colors = document.querySelectorAll('.color');

for (let i = colors.length - 1; i >= 0; i--) {
	colors[i].addEventListener('click', (evt)=>{
		for(let j = colors.length - 1; j >= 0; j--){
			colors[j].classList.remove('active');
		}
		if (!colors[i].classList.contains('active')) {
			colors[i].classList.add('active');
		}		
	})
}