function enableButton(){
    let a = document.getElementById('loginName').value
    let b = document.getElementById('loginPassword').value
    if (length(a) > 0 && length(b) >0){
        document.getElementById('login').disabled = false
    }
    else{
        document.getElementById('login').disabled = true
    }
}