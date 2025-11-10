const buttons = document.querySelectorAll('button');
const fullScreen = document.getElementsByClassName('floating-button');
buttons.forEach(button =>{
    button.addEventListener('click', ()=>{
        let myEvent = button.dataset['command'];
        if(myEvent === "insertImage" || myEvent === "createLink"){
            let url = prompt("Enter your Link Here: ");
            document.execCommand(myEvent, false, url);
        }
        else if(myEvent === "formatBlock"){
            let formattingValue = button.dataset['block'];
            document.execCommand(myEvent, false, formattingValue);
        }
        else{
        document.execCommand(myEvent, false, null);
        }
		event.preventDefault();
    })

})

