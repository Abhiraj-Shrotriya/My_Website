document.getElementById('title').value = localStorage.getItem('title');
document.getElementById('content').value = localStorage.getItem('content');

function clearContent(){
    document.getElementById('content').value = '';
    document.getElementById('title').value = '';
    localStorage.removeItem('title');
    localStorage.removeItem('content');

    let header = document.querySelector('header');

    header.removeChild(document.querySelector('header aside'));
}

function cancelClearContent(){
    let header = document.querySelector('header');

    header.removeChild(document.querySelector('header aside'));
}

function clearContentAlert(){
    
    let alertBox = document.createElement('aside');
    let alertMsg = document.createElement('h2');

    let alertCancel = document.createElement('input');
    let alertOk = document.createElement('input');

    alertMsg.appendChild(document.createTextNode("Do you really want to clear the post?"));

    alertCancel.type = "button";
    alertCancel.id = "cancelClear";

    alertOk.type = "button";
    alertOk.id = "okClear";

    alertCancel.value = "Cancel";
    alertOk.value = "Ok";

    alertBox.appendChild(alertMsg);
    alertBox.appendChild(alertCancel);
    alertBox.appendChild(alertOk);

    let container = document.querySelector("header");
    let end = document.querySelector("header div");

    container.insertBefore(alertBox, end);
    
    var clearOk = document.getElementById('okClear').addEventListener('click', clearContent);
    var clearCancel = document.getElementById('cancelClear').addEventListener('click', cancelClearContent);
    var textWrite = document.getElementById('content').addEventListener('change', cancelClearContent)
}

let clear = document.getElementById('clear').addEventListener('click', clearContentAlert);

function removeContentHighlight(){
    let content = document.getElementById('content');

    content.style.border = '';
}
function removeTitleHighlight(){
    let title = document.getElementById('title');

    title.style.border = '';
}

function previewEntry(e){
    let content = document.getElementById('content');
    let title = document.getElementById('title');
    
    if( content.value == ''){
        e.preventDefault();
        content.style.border = 'red solid 1.5pt';

        var write = content.addEventListener('change', removeContentHighlight);

    }

    if( title.value == ''){
        e.preventDefault();
        title.style.border = 'red solid 1.5pt';

        var write = title.addEventListener('change', removeTitleHighlight);

    }
    
    localStorage.setItem('title', title.value);
    localStorage.setItem('content', content.value);
}

let preview = document.getElementById('preview').addEventListener('click', previewEntry);

function addPost(e){
    let content = document.getElementById('content');
    let title = document.getElementById('title');

    if( content.value == ''){
        e.preventDefault();
        content.style.border = 'red solid 1.5pt';

        var write = content.addEventListener('change', removeContentHighlight);

    }

    if( title.value == ''){
        e.preventDefault();
        title.style.border = 'red solid 1.5pt';

        var write = title.addEventListener('change', removeTitleHighlight);

    }

    localStorage.removeItem('title');
    localStorage.removeItem('content');
}

let add = document.getElementById('addPost').addEventListener('click', addPost);



function cancelPost(){
    localStorage.setItem('title', document.getElementById('title').value);
    localStorage.setItem('content', document.getElementById('content').value);
}


let cancel = document.getElementById('cancel').addEventListener('click', cancelPost);