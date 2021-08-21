/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/modalForm.js ***!
  \***********************************/
document.querySelector(".services__description-button.contact_us555").addEventListener("click", function () {
  document.querySelector(".modal.fade").style.cssText = "display: block";
});
document.getElementById("contact_us").addEventListener("click", function (e) {
  e.preventDefault();
  document.querySelector(".modal.fade").style.cssText = "display: block";
}); // scriptAdress = `https://1c-web-com.lc/public`

var files;
file_attachment = '';

document.getElementById('fileForm').onchange = function () {
  var filePath = this.value;

  if (filePath) {
    var fileName = filePath.replace(/^.*?([^\\\/]*)$/, '$1');
    document.getElementById('name_file').innerHTML = fileName;
  }

  var data = new FormData($('#modalForm')[0]);
  console.log(data);
  $.ajax({
    url: "/upload-file",
    type: 'POST',
    data: data,
    contentType: false,
    processData: false,
    success: function success(respond, status, jqXHR) {
      file_attachment = respond;
    },
    // server error
    error: function error(jqXHR, status, errorThrown) {//console.log('WRONG AJAX : ' + status, jqXHR);
    }
  });
};

document.getElementById("closeModalWindow").addEventListener("click", function () {
  document.querySelector(".modal.fade").style.cssText = "display: none";
});
var contactPostClick = document.querySelector(".contact-button.margin-top.send-message");

if (contactPostClick) {
  contactPostClick.addEventListener("click", function () {
    document.querySelector(".modal.fade").style.cssText = " display: block";
  });
} //// get message to server


document.querySelector('#modalForm').addEventListener('submit', submitHandler);

function submitHandler(e) {
  e.preventDefault();
  event.preventDefault();
  var name = document.getElementById("nameForm").value;
  var email = document.getElementById("emailForm").value;
  var message = document.getElementById("messageForm").value;
  var file = file_attachment;
  var headers = {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  };
  $.ajax({
    type: "POST",
    headers: headers,
    url: "/send-mail",
    data: {
      name: name,
      email: email,
      message: message,
      fileName: file
    },
    success: function success(data) {
      if (data === 'success') {
        document.querySelector("#modalForm").innerHTML = "\n                   <h1>Thank you!</h1>\n<h4>Message sent successfully. We will contact you within 24 hours. If it's not a day off.</h4>\n                   "; // setTimeout(() => {
        //     //document.querySelector(".modal.fade").style.cssText = `display: none`
        //     $.ajax({
        //         type: "POST",
        //         url: `${scriptAdress}/php/deleteUploadedFile.php`,
        //         data: {file: file},
        //         success: function (data) {
        //             //alert(data)
        //         }
        //     })
        // }, 5000)
      } else {//alert(" something wrong")
        }
    }
  });
}
/******/ })()
;