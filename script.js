const replyButtons = document.querySelectorAll('.reply-button');

replyButtons.forEach(button => {
    button.addEventListener('click', event=>{
        const parent_id = event.target.getAttribute('data-parent-id');
        const name = event.target.getAttribute('data-username-text');
        const replyTo = '@'+name;
        const replyForm = document.getElementById("reply-form");
        const parentFields = document.querySelector("#parent-id");
        const replyToField = document.querySelector("#reply-to");
        replyToField.value = replyTo;
        parentFields.value = parent_id;
        replyForm.style.display="block";

        scrollToBottom();

        console.log(replyTo);
    });
});

function scrollToBottom(){
    const replyForm = document.getElementById("reply-form");
    replyForm.scrollIntoView({behavior:"smooth"});
}

const cancelButton= document.querySelector("#cancel-button");
const replyForm= document.getElementById("reply-form");

cancelButton.addEventListener('click', event=>{
    event.preventDefault();
    replyForm.style.display="none";
});
