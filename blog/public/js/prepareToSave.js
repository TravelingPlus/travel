function save()
{

    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    console.log('saaaaaave');
    console.log(window.informationToSaveInDB);
    var dataString = 'from=' + '7777' + '&to=' + '999999' ;

    $.ajax({
        type: "POST",
        url: "http://localhost/lara2/blog/public/home/prepareToSave",
        data: dataString,
        success: function(msg){
     		alert(msg);
   		}
    });


}
