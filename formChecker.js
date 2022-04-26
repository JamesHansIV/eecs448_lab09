
const validate = () => {
    
    //if number form is blank, set to 0
    let numberForms = document.getElementsByClassName('product');
    for(let i = 0; i < numberForms.length; i++ ) {
        if(!numberForms[i].value) numberForms[i].value = "0";
    }

    //username must be email
    if(!isEmail(document.getElementById('username').value)) {
        alert('Enter valid email!');
        return;
    }

    //password cannot be blank
    if(document.getElementById('password').value.length == 0) {
        alert('Enter a password!');
        return;
    }

    //submit form
    document.getElementById('store-form').submit();
}

const isEmail = (username) => {
    let atSymbolIndex;
    let foundAtSymbol = false;

    let dotIndex;
    let foundDotAfterAt = false;

    //find @
    for(let i = 0; i < username.length; i++) {
        if(username[i] == '@') {
            if(foundAtSymbol) return false;
            foundAtSymbol = true;
            atSymbolIndex = i;
        }
    }

    //find . 
    for(let i = 0; i < username.length; i++) {
        if(username[i]=='.') {
            if(i > atSymbolIndex) {
                if(foundDotAfterAt) { return false; }
                foundDotAfterAt = true;
                dotIndex = i;
            }
        }
    }

    //check if it has a domain
    if(dotIndex < username.length - 1) return true;
    else return false;    
};