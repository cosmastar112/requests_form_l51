
$(document).ready(function() {
    _setHandlers();
});

function _setHandlers()
{
    let form = $('#create-request');
    let perIdSelect = form.find('select#per_id');
    let isRequestPage = form.find('input[name="isRequestPage"]');

    //Наблюдать за изменением получателя только на странице создания заявки.
    //При изменении получателя загружать и отображать информацию о нём.
    if (isRequestPage.length > 0) {
        $(perIdSelect).on('change', function(event) {
            //код выбранного получателя
            let value = $(event.target).val();
            //загружать информацию о получателе, только если выбран непустой результат
            if (value === 0 || value === '0') {
                //очистить блок с информацией если выбран пустой результат
                _resetPersonInfo();
            } else {
                _fetchAndRenderPersonInfo(value);
            }
        });

        //Повторно загружать информацию о пользователе после отправки формы, которая невалидна.
        //Загружать информацию о получателе, только если выбран непустой результат.
        let value = perIdSelect.val();
        if (value !== 0 && value !== '0') {
            _fetchAndRenderPersonInfo(value);
        }
    }
}

function _fetchAndRenderPersonInfo(value)
{
    $.ajax({
        'method': 'get',
        'url': [URL_PERSON_INFO, value].join('/'),
    })
     .then(function(data) {
        _renderPersonInfo(data);
    });
}

function _renderPersonInfo(data)
{
    let personInfoBlock = $('.person-info');

    _updateElement(data, personInfoBlock, 'name');
    _updateElement(data, personInfoBlock, 'login');
    _updateElement(data, personInfoBlock, 'email');
}

function _updateElement(data, rootElement, elementName)
{
    if (data[elementName]) {
        let element = rootElement.find('.person-info__' + elementName + '-value');
        $(element).html(data[elementName]);
    }
}

function _resetPersonInfo()
{
    let personInfoBlock = $('.person-info');
    ['name', 'login', 'email'].forEach(function(elementName) {
        let element = personInfoBlock.find('.person-info__' + elementName + '-value');
        $(element).html('');
    });

}