const inp = document.getElementById("input1");
const res = document.getElementById("result");

function check(){
    event.preventDefault();
    let str1 = inp.value;
    if(str1.length == 0){
        str1.innerHTML = "";
    }
    // console.log(str1);
    else{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                res.innerHTML = this.responseText;  
            }
        }
       
        xmlhttp.open("GET","../Backend/palindrome.php?str="+str1)
        xmlhttp.send();
    }
}