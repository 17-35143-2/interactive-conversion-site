function isValid(){
    var feet = document.forms['LForm']['feet'].value;
    var inch = document.forms['LForm']['inch'].value;
    var kg = document.forms['LForm']['kg'].value;
    var g = document.forms['LForm']['g'].value;
    if(feet === ""){
    document.getElementById('Uerror').innerHTML = "feet value empty";
    
    }
    
    if(convert === ""){
    document.getElementById('Cerror').innerHTML = "convert rate empty";
    return false;
    }
    if(inch === ""){
    document.getElementById('Ierror').innerHTML = "inch rate empty";
    return false;
    }
    if(kg === ""){
    document.getElementById('Kgerror').innerHTML = "kg rate empty";
    return false;
    }
    if(g === ""){
    document.getElementById('Gerror').innerHTML = "G rate empty";
    return false;
    }
    else{
        return true;
    }
    
    }