function isValid(){
    var value = document.forms['LForm']['value'].value;
    var convert = document.forms['LForm']['convert'].value;
    if(value === ""){
    document.getElementById('Uerror').innerHTML = "value empty";
    
    }
    
    if(convert === ""){
    document.getElementById('Perror').innerHTML = "convert rate empty";
    return false;
    }
    else{
        return true;
    }
    
    }