const deleteForm = document.querySelector(".form-delete");

console.log(deleteForm);

deleteForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const hasConfirmed = confirm(`Vuoi eliminare definitivamente il fumetto?`);
    if (hasConfirmed) deleteForm.submit();
});
