function add_hotel(){


    //var flight = {}
    // $($(".dir .flight")[0]).find('input').each((i, input) => flight[input.name] = input.value)
    //var all_input = document.getElementById('all_inputs');
    var str= '<hr style="color: #fff; height: 1px;">\n' +
        ' <div class="row forms" id="all_inputs">\n' +
        '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">\n' +
        '<label>Select currency:</label>\n' +
        '                    <select name="currency_hotel" class="form-control">\n' +
        '                        <option value="usd">USD</option>\n' +
        '                        <option value="rub">RUB</option>\n' +
        '                        <option value="eur">EUR</option>\n' +
        '                    </select>\n' +
        '                        </div>\n' +
        '                    <hr class="hr">\n' +
        '                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group">\n' +
        '                    <div class="form-group">\n' +
        '                        <label>Arrival date:</label>\n' +
        '                        <input type="date" name="arrival" class="input form-control text-muted" max="2020-12-01"\n' +
        '                               min="now">\n' +
        '                    </div>\n' +
        '                        </div>    \n' +
        '\n' +
        '                    <div class="form-group">\n' +
        '                        <label>Out of hotel date:</label>\n' +
        '                        <input type="date" name="out" class="input form-control text-muted" max="2020-12-01"\n' +
        '                               min="now">\n' +
        '                    </div>\n' +
        '\n' +
        '\n' +
        '                    <div class="form-group">\n' +
        '                        <div class="inputs">\n' +
        '                            <label>City:</label>\n' +
        '                            <input type="search" class="input form-control text-muted" name="city[]"\n' +
        '                                   placeholder="city for hotel"/>\n' +
        '                        </div>\n' +
        '                    </div>\n' +
        '\n' +
        '                    <div class="form-group">\n' +
        '                        <div class="row">\n' +
        '                            <div class="col-lg-4">\n' +
        '                            </div>\n' +
        '\n' +
        '                        </div>\n' +
        '                    </div>'
        '                    </div>\n' +
        '                    <hr>';
    var all_str_input='<input type="search" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-group" name="name[]"placeholder="from"/>';

    $('#ajax_form').append(str);

}