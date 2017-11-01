$(function(){
    $("#modalButton").click(function(){
       $('#modal').modal('show')
               .find("#modalContect")
               .load($(this).attr('value'));
    });
});

