const inp = document.getElementById("input1");
const res = document.getElementById("result");

function showMul(){
    event.preventDefault();
    var number = inp.value;
    if(number  === ""){
        res.innerHTML = "Enter the Number Invalid input"
    }
    else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                res.innerHTML = this.responseText;  
            }
        }
       
        xmlhttp.open("GET","../Backend/multiple.php?number="+number)
        xmlhttp.send();
    }
}
