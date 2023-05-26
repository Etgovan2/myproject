
$(document).ready(function (){
    
    $("#urun").change(function () {

        var $UrunID = $(this).find("option:selected").val();

        var $url = "http://localhost/Mesleki/urun/actions.php";

        $.post($url,{id : $UrunID},function (callback) {

            var data = JSON.parse(callback);

            $("#urun_fiyat").val(data.urun_fiyat);
            $("#urun_aciklama").val(data.urun_aciklama);


        })


    })

})


