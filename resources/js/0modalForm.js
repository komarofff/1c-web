document.querySelector(".services__description-button.contact_us555").addEventListener("click", () => {

    document.querySelector(".modal.fade").style.cssText = `display: block`
})
document.getElementById("contact_us").addEventListener("click", (e) => {
    e.preventDefault()
    document.querySelector(".modal.fade").style.cssText = `display: block`
})
scriptAdress = `https://1c-web-com.lc/public`

var files;
document.getElementById('fileForm').onchange = function () {
    let filePath = this.value;
    if (filePath) {
        let fileName = filePath.replace(/^.*?([^\\\/]*)$/, '$1');
        document.getElementById('name_file').innerHTML = fileName;
    }
    files = this.files;
    if (typeof files == 'undefined') return;
    var data = new FormData();
    $.each(files, function (key, value) {
        data.append(key, value);
    });
    data.append('my_file_upload', 1);
    $.ajax({
        url: `${scriptAdress}/php/uploadImage.php`,
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (respond, status, jqXHR) {
            if (typeof respond.error === 'undefined') {
                files_path = respond.files;
                var html = '';
                $.each(files_path, function (key, val) {
                    html += val + '<br>';
                })
                //$('.ajax-reply').html(html);
            }
            // error
            else {
                //console.log('WRONG: ' + respond.data);
            }
        },
        // server error
        error: function (jqXHR, status, errorThrown) {
            //console.log('WRONG AJAX : ' + status, jqXHR);
        }
    });
}


document.getElementById("closeModalWindow").addEventListener("click", () => {

    document.querySelector(".modal.fade").style.cssText = `display: none`
})


let contactPostClick=document.querySelector(".contact-button.margin-top.send-message")
if(contactPostClick) {
    contactPostClick.addEventListener("click", () => {
        document.querySelector(".modal.fade").style.cssText = ` display: block`
    })
}

//// get message to server
document.querySelector('#modalForm').addEventListener('submit', submitHandler);

function submitHandler(e) {
    e.preventDefault();
    event.preventDefault()
    const name = document.getElementById("nameForm").value
    const email = document.getElementById("emailForm").value
    const message = document.getElementById("messageForm").value
    let file = '';
    if (typeof files_path != 'undefined') {
        $.each(files_path, function (key, val) {
            file += val;
        })
    }
    $.ajax({
        type: "POST",
        url: `${scriptAdress}/php/sendMail.php`,
        data: {name: name, email: email, message: message, file: file},
        success: function (data) {
            if (data === 'success') {
                document.querySelector("#modalForm").innerHTML = `
                   <h1>Thank you!</h1>
<h4>Message sent successfully. We will contact you within 24 hours. If it's not a day off.</h4>
                   `
                setTimeout(() => {
                    //document.querySelector(".modal.fade").style.cssText = `display: none`
                    $.ajax({
                        type: "POST",
                        url: `${scriptAdress}/php/deleteUploadedFile.php`,
                        data: {file: file},
                        success: function (data) {
                            //alert(data)
                        }
                    })
                }, 5000)

            } else {
                //alert(" something wrong")
            }
        }
    })


}
