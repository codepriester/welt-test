function download(){
    let inpA = document.getElementById("aTime");
    let inpB = document.getElementById("bTime");

    let img = document.getElementsByClassName("guide")[0].getElementsByTagName("img")[0];
    if (!inpA.value || !inpB.value){
        if (img){
            if (navigator.userAgent.toLocaleLowerCase().includes("mobile")){
                img.src = "res/lena-fragend-1.png";
            } else {
                img.src = "res/lena-fragend-2.png";
            }
            
        }
        return false;
    } else {
        if (img){
            img.src = "res/lena-smile-1.png";
        }
    }

    let params = "a=" + inpA.value + "&b=" + inpB.value;


    let ajax = new XMLHttpRequest();
    ajax.onload = function () {
        //alert(ajax.responseText);
    };
    
    ajax.open("POST", "download.php");
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send(params);
}