/**
 * Admin Panel
 */
(function(){
    $(document).ready(function() {
        _setHandlers();
    });

    function _setHandlers()
    {
        //При нажатии кнопок "Создать" и "Изменить" перенаправлять на соответствующую страницу
        $('.admin-panel__create-btn, .admin-panel__update-btn').on('click', function(event) {
            let link = $(event.target).data('href');
            window.location = link;
        });
        //Подтверждение удаления
        $('.admin-panel__delete').on('click', function(event) {
            if (!confirm('Delete record?')) {
                event.preventDefault();
            }
        });
    }
})();
