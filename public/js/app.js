const deleteButton = document.querySelector('.js-handle-delete');

if (deleteButton) {
  deleteButton.addEventListener('click', (e) => {
    e.preventDefault();
  
    const isDelete = confirm("Видалити цей продукт?");
  
    if (isDelete) {
      const form = document.querySelector('.js-delete-form');
      form.submit();
    }
  });
}
