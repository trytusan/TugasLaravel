document.addEventListener('DOMContentLoaded', () => {
    // Filter Table Functionality
    function filterTable() {
        const input = document.getElementById("searchInput").value.toLowerCase();
        const table = document.getElementById("itemsTable");
        const rows = table.getElementsByTagName("tr");

        for (let i = 1; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName("td");
            let match = false;
            for (let j = 1; j < cells.length - 1; j++) { // Skip first and last column
                if (cells[j] && cells[j].innerText.toLowerCase().includes(input)) {
                    match = true;
                    break;
                }
            }
            rows[i].style.display = match ? "" : "none";
        }
    }

    // Delete Selected Items
    function deleteSelectedItems() {
        // Ambil semua checkbox yang tercentang
        const selected = Array.from(document.querySelectorAll('.product-checkbox:checked')).map(cb => cb.value);

        if (selected.length === 0) {
            alert('Please select at least one item to delete.');
            return;
        }

        // Masukkan ID yang terpilih ke dalam input hidden
        document.getElementById('selected_ids').value = selected.join(',');

        // Konfirmasi sebelum menghapus
        if (confirm('Are you sure you want to delete the selected items?')) {
            // Submit form untuk penghapusan massal
            document.getElementById('deleteSelectedForm').submit();
        }
    }

    // Event Listener untuk Search Input
    document.getElementById("searchInput").addEventListener("keyup", filterTable);

    // Delete Selected Button Event Listener
    const deleteButton = document.querySelector('#deleteSelectedForm button');
    deleteButton.addEventListener('click', deleteSelectedItems);
});