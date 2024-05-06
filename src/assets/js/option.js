function toggleEditMode(button) {
    var row = button.parentNode.parentNode;
    var actionCell = row.cells[4];

    // Check if row is already in edit mode
    if (row.classList.contains('edit-mode')) {
        // Remove edit mode
        row.classList.remove('edit-mode');
        button.innerText = 'Edit / Delete';
    } else {
        // Add edit mode
        row.classList.add('edit-mode');
        button.innerText = 'Cancel';
    }
}