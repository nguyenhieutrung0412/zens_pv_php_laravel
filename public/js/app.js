const submit = document.getElementById('submit'); 
//sự kiện click vào button sum
submit.addEventListener('click', () => {
    const value = document.getElementById('value').value;
    //xử lý đầu vào dữ liệu nếu lỗi sẽ thông báo sai định dạng ra màn hình

    //end xử lý
    ajax_sum(value);
});

//hàm ajax gửi và xử lý dữ liệu qua api
function ajax_sum(value) {
    $.ajax({
        type: "POST",
        url: "./api/index",
        data: {
            value: value,
        },
        cache: false,
        dataType: "json",

        success: function(rs) {
            //xuất dữ liệu ra màn hình
            const divResult = document.getElementById("result");
            divResult.innerHTML = `${rs}`;
        }
    });
}

//xử lý đầu vào dữ liệu