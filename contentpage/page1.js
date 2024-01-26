function sendEmail(){
    
    
    emailjs.send("service_9zpeinm","template_e49xibu",{
        name: document.getElementById("name").value,
        mob_number: document.getElementById("mob").value,
        message: document.getElementById("message").value,
        to_email: document.getElementById("email").value
        });
        
}
