$(function(){
    //click button to show/hide content
    var button = true;
    $('#btnfirst').on('click', function(){
        if ($('#btnfirst').text().indexOf('Đóng') > -1){
        $(this).text('Chọn chỗ');
        } else{
        $(this).text('Đóng');
        }
    });
   
})

