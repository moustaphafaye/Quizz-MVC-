const questionTitre=document.getElementById("questionTitre");
const nbPoint=document.getElementById("nbPoint");
const typeReponse=document.getElementById("typeReponse");
const ajouter=document.getElementById("img_ajout");
const divAllInput=document.getElementById("divAllInput");


ajouter.addEventListener('click',addquestion)

function addquestion(){
    switch (typeReponse.value){
        case "texte":
            choixTexte();
            
            break;
        case "choix multiple":
            choix_multiphe();
            // console.log("choix multiple");
            break;
        case "choix simple":
            choix_simple();
            // console.log("choix unique");
            break;
            default:
                alert("vous devez faire un choix");

    }
}
function choixTexte () {
    var divContent = document.createElement("div")
    var label = document.createElement("label")
    var inputText = document.createElement("input")
    var btnSup = document.createElement("button")

    label.innerHTML="Reponse  "
    // inputText.style.width="20em"
    inputText.className="typeReponse"
    inputText.setAttribute("name","reponse[]")
    btnSup.innerHTML= "supr"

    divContent.appendChild(label)
    divContent.appendChild(inputText)
    divContent.appendChild(btnSup)
    divContent.className= "divInputQuest"
    btnSup.className="img_ajout"

    divAllInput.appendChild(divContent)
    btnSup.addEventListener('click',function(){
        divSup =this.parentElement;
            divAllInput.removeChild(divSup)
    })
}
function choix_multiphe(){
    var divContent = document.createElement("div")
    var label = document.createElement("label")
    var inputText = document.createElement("input")
    var btnSup = document.createElement("button")
    var inputcheck=document.createElement("input")


    label.innerHTML="Reponse"
    inputText.setAttribute("name","choix[]")
    btnSup.innerHTML = "sup"
    inputcheck.setAttribute("type", "checkbox")
    inputcheck.setAttribute("name", "reponse[]")
    inputText.className="typeReponse"
    inputcheck.className="img_ajout"
    divContent.className= "divInputQuest"
    btnSup.className="img_ajout"

    divContent.appendChild(label)
    divContent.appendChild(inputText)
    divContent.appendChild(inputcheck)
    divContent.appendChild(btnSup)

    divAllInput.appendChild(divContent)
    btnSup.addEventListener('click',function(){
        divSup=this.parentElement;
        divAllInput.removeChild(divSup)

    })
    inputcheck.addEventListener('click',function(){
        if(inputcheck.checked){
            inputcheck.value=inputText.value;
        }else{
            inputcheck.value=" "
        }
    })

}
function choix_simple(){

    var divContent = document.createElement("div")
    var label = document.createElement("label")
    var inputText = document.createElement("input")
    var btnSup = document.createElement("button")
    var inputcheck=document.createElement("input")

    label.innerHTML="Reponse"
    inputcheck.setAttribute("type","radio")
    inputcheck.setAttribute("name", "reponse[]")
    btnSup.innerHTML="sup"
    
    divContent.className= "divInputQuest"
    inputText.className="typeReponse"
    btnSup.className="img_ajout"
    
    divContent.appendChild(label)
    divContent.appendChild(inputText)
    divContent.appendChild(inputcheck)
    divContent.appendChild(btnSup)
    divAllInput.appendChild(divContent)
    btnSup.addEventListener('click',function(){
        divSup=this.parentElement;
        divAllInput.removeChild(divSup)
    })
    inputcheck.addEventListener('click',function(){
        if(inputcheck.checked){
            inputcheck.value=inputText.value;
            alert("nice");
        }else{
            
            inputcheck.value=" ";
        }
    })
    
}