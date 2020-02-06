
//document.addEventListener('DOMContentloaded',() => alert('The file is loaded'));

document.querySelector('#prescription').addEventListener('change',() => {
   const selectedPrescription = document.querySelector('#prescription').value;
    
    if(selectedPrescription == 'lab') {
//           document.querySelector('#lab').style.display = 'block';
//            document.querySelector('#lab').style.backgroundColor = '#75c0f7';
            document.querySelector('#lab').classList.toggle('block');
       }
    
    if(selectedPrescription == 'drug') {
//        document.querySelector('#drug').style.display = 'block';
        document.querySelector('#drug').classList.toggle('block');
    }
    
});

const cards = document.querySelectorAll('.card a');

for(let i = 0; i < cards.length; i++){
    cards[i].addEventListener('click',() => {
        console.log('You just clicked a element')
        cards[i].parentElement.parentElement.style.display = 'none';
        
    });
}
