const image_saisie=document.getElementById("avatar_image");
function opplode(photo){
    image_saisie.src=window.URL.createObjectURL(photo.files[0]);
}
