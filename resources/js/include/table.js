export function table() {
    const tableContainer = document.querySelector('.table-responsive');

    tableContainer.addEventListener('wheel', function(e) {
        if (e.deltaY !== 0) {
            tableContainer.scrollLeft += e.deltaY;
            e.preventDefault();
        }
    });
}
