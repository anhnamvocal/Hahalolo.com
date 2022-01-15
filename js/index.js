var buttons = document.getElementsByClassName('tablinks');
var contents = document.getElementsByClassName('tabcontent');
var id_news = document.getElementById('news');
var id_ex = document.getElementById('ex');
var index_light = document.getElementById('id-index-view');
var header = document.getElementsByTagName('html')
function reply_click(clicked_name)
{
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active");
    }
    this.className += " active";
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = 'none';
    }
    var content = document.getElementsByClassName(clicked_name);
    for (var i = 0; i < contents.length; i++) {
        content[i].style.display = 'block';
    }
    index_light.className += " my-light";
    header.className += " my-light";
}


function countChar(val) {
    var len = val.value.length;
    if (len >= 1500) {  
      val.value = val.value.substring(0, 1500);
    } else {
      $('#charNum').text(len);
    }
  };

  
$(document).ready(function() {
  $('#image').change(function(){
      var file_data = $('#image').prop('files')[0];   
      var form_data = new FormData();                  
      form_data.append('image', file_data);
      $.ajax({
          url: "upload.php",
          type: "POST",
          data: form_data,
          contentType: false,
          cache: false,
          processData:false,
          success: function(data){
            $("#targetLayer").html(data);
              },
              error: function()
              {
              },
              complete: function (data) {
                $('#uploadForm')[0].reset(); // this will reset the form fields
            } 	        
      });
  });
});
  
