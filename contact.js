function onSubmit(event){
    var name = document.getElementById('name').value
    var email = document.getElementById('email').value
    var messagge = document.getElementById('messagge').value
    console.log(name)
    console.log(email)
    console.log(messagge)

    let contact = event.target;
    let formdata = new FormData(contact)

    let form_data_obj = Object.fromEntries(formdata)
    console.log(form_data_obj)

    localStorage.setItem('nam', form_data_obj.name)
    localStorage.setItem('email',form_data_obj.email)
    localStorage.setItem('message',form_data_obj.messagge)

    event.preveentDefault();

}



function store() {
    localStorage.setItem('nam', nam.value);
    localStorage.setItem('email', email.value);
    localStorage.setItem('messagge', messagge.value);
}