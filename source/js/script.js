document.addEventListener('DOMContentLoaded', function () {
    new DataTable('#jv_table', {
        language: {
            lengthMenu: "Jeux affichés : _MENU_",
            info: "Affichage de _START_ à _END_ sur _TOTAL_ jeux",
            search: "Rechercher :"
        }
    });
});