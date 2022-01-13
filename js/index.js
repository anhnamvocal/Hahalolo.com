        var buttons = document.getElementsByClassName('tablinks');
        var contents = document.getElementsByClassName('tabcontent');
        var id_news = document.getElementById('news');
        var id_ex = document.getElementById('ex');
        var index_light = document.getElementById('id-index-view');

        function reply_click(clicked_name)
        {
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = 'none';
            }
            var content = document.getElementsByClassName(clicked_name);
            for (var i = 0; i < contents.length; i++) {
                content[i].style.display = 'block';
            }
            index_light.className += " my-light";
            
        }
        

        function countChar(val) {
            var len = val.value.length;
            if (len >= 1500) {  
              val.value = val.value.substring(0, 1500);
            } else {
              $('#charNum').text(len);
            }
          };

