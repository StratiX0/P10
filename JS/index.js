let button = document.getElementById("likeButton");
let val = 0
function like(){
    button.addEventListener("click", () => {
    val = val+1;
    console.log("val+1");
    return val;
    
    })
    
}

