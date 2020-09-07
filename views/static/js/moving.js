var knownInput = document.getElementById('known');
var unknownInput = document.getElementById('unknown');

var knownVolume = document.getElementById('knownVolume');
var unknownVolume = document.getElementById('unknownVolume');

var checkboxes = document.getElementsByClassName('volumeCkeckbox');

for(let i = 0; i < checkboxes.length; i++){
    checkboxes[i].addEventListener('click', event => {
        if(checkboxes[i].checked == true){
            let unknownVolumeValue = Number(unknownVolume.value);
            unknownVolume.value = unknownVolumeValue + Number(checkboxes[i].value);
        }
        else{
            let unknownVolumeValue = Number(unknownVolume.value);
            unknownVolume.value = unknownVolumeValue - Number(checkboxes[i].value);
        }
    });
}

function enableInputs(){
    let dropdown = document.getElementsByClassName('dropdown');

    if(knownInput.checked == false){
        knownVolume.value = 0;
        knownVolume.setAttribute("disabled", "disabled");
    }else{
        knownVolume.removeAttribute("disabled");
    }

    if(unknownInput.checked == false){
        dropdown[0].style.display = "none";
    }else{
        dropdown[0].style.display = "inline-block";
    }
}

knownInput.addEventListener('click', event => {
    enableInputs();   
});

unknownInput.addEventListener('click', event => {
    enableInputs();   
});