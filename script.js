const replyButtons = document.querySelectorAll('.reply-button');

replyButtons.forEach(button => {
    button.addEventListener('click', event=>{
        const parent_id = event.target.getAttribute('data-parent-id');
        console.log(parent_id);
    });
});