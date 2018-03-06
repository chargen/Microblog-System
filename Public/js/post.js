$(document).ready(function () {
    // 添加文章数据提交
    $(".submit").click(function () {
        var editor = UM.getEditor('myEditor');
        var content = editor.getContent();
        if (content == "") {
            editor.focus();
            return;
        }
        var input = $('input.title');
        var title = input.val();
        if (title == "") {
            input.focus();
            return;
        }
        var url = "/dblog/index.php?s=/Home/Post/add_handle";
        $.post(url, {
            title: title,
            content: content,
            headshot_id: $(this).attr("headshot_id")
        }, function (data) {
            location.replace("/dblog/index.php?s=/Home/Post/content/postid/" + data);
        });
    });
});
