function reloadData(html_post, html_get, path){
    $(document).ready(function(){
        var answer = html_post.val();
        $.get(path+answer,function(data){
            html_get.html(data);
        });
    });
}

function loadCbxXeTheoCbxHang(){
    reloadData( $('#cbx_hang_xe') , $('#cbx_xe') , 'ajax/load-cbx-xe-theo-cbx-hang/' );
}