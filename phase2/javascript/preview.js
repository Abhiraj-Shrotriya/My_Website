
let title = localStorage.getItem('title');
let content = localStorage.getItem('content');

let newSection = document.createElement('section');

let newh2 = document.createElement('h2');
newh2.appendChild(document.createTextNode(title));

let newP = document.createElement('p');
newP.appendChild(document.createTextNode(content));

newSection.appendChild(newh2);
newSection.appendChild(newP);

let container = document.getElementById('container');
let end = document.getElementById('end');

container.insertBefore(newSection, end);


function addPreview(){
    document.getElementById('content').value = localStorage.getItem('content');
    document.getElementById('title').value = localStorage.getItem('title');

    localStorage.removeItem('title');
    localStorage.removeItem('content');
}

let add = document.getElementById('post').addEventListener('click', addPreview)