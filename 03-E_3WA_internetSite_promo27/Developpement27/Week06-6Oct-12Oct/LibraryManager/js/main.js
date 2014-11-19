function editBook()
{
	var bookIdInt = this.dataset.bookId;
	
	var tableRowId = 'book_' + bookIdInt;
	var DOMObject = document.getElementById(tableRowId);
	var bookTitle = document.querySelector('#' + tableRowId + ' .book_title').innerText;
	var authorName = document.querySelector('#' + tableRowId + ' .author_name').innerText;
	
	DOMObject.innerHTML = '<td colspan="5">'
		+ '	<form action="" method="post">'
		+ '		<input name="bookTitle" value="' + bookTitle + '" type="text">'
		+ '		<input name="authorName" value="' + authorName + '" type="text">'
		+ '		<input name="bookId" value="' + bookTitle + '" type="hidden">'
		+ '		<input name="action" action="bookUpdate" type="hidden">'
		+ '		<input value="METTRE À JOUR" type="submit">'
		+ '	</form>'
		+ '</td>'
}

document.addEventListener('DOMContentLoaded', function()
{
    installEventHandlers('#books_list a', 'click', editBook);
});