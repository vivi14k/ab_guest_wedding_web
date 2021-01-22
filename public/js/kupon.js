const jumlahKupon = document.querySelector('.jumlahKupon');
const getWrapper =  document.querySelector('.setWrapper');

let noKupon = 1;

let setHTML = [];

for(let c = 1; c <= jumlahKupon.value; c++){
    if(c <= jumlahKupon.value){ 
        let htmlCourse = `<div class="input-group dropdown mt-5">
        <select name="kodeKupon${noKupon}" class="form-select" style="width: 100%;" id="inputGroupSelect02">
        <option selected>Kupon ${noKupon}</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
        </div>`;

        setHTML.push(htmlCourse);

        let card = "";
        setHTML.forEach((result) =>{
            return card += result;
        });
        getWrapper.innerHTML = card;
        noKupon++;
    } else {
        break;
    }
}
