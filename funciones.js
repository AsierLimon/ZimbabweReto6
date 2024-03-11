function Submenu(submenuId) {
    var submenu = document.getElementById(submenuId + 'Submenu');
    if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
    } else {
        submenu.style.display = 'block';
    }
}
document.addEventListener("DOMContentLoaded", function () {
    var sidebarToggle = document.getElementById("sidebar-toggle");
    var sidebar = document.getElementById("sidebar");

    sidebarToggle.addEventListener("click", function () {
        // Si el sidebar está oculto, lo mostramos; de lo contrario, lo ocultamos.
        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
        }
    });
});

