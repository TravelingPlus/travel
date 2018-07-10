function save()
{
    console.log('saaaaaave');
    console.log(window.informationToSaveInDB);
    var dataString = 'from=' + '7777' + '&to=' + '999999' ;

    $.ajax({
        type: "POST",
        url: "http://travel-anton/public/home/prepareToSave",
        data: dataString
    });


}
