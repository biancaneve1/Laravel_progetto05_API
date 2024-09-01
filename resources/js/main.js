




fetch('/api/anime/list')

.then(response=>response.json())
.then(data=>{

console.log(data);
let wrapper=document.querySelector('#wrapper');

data.forEach(item => {

    let col =document.createElement('div');
    col.classList.add('col-12', 'col-md-4', 'my-2' ,'d-flex','justify-content-center');
    
    col.innerHTML=`
    <div class="card" style="width: 18rem;">
    <img src="${item.img}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">${item.title}</h5>
    </div>
    </div>`
    
wrapper.appendChild(col);


})

})
.catch(error=>{
    console.error('sie è verificato un errore',error);
})
