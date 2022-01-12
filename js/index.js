        var buttons = document.getElementsByClassName('tablinks');
        var contents = document.getElementsByClassName('tabcontent');
        
        function reply_click(clicked_name)
        {
            var btn_color = document.getElementsByName(clicked_name);
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }

            btn_color.className += " active"
            for (var i = 0; i < contents.length; i++) {
                contents[i].style.display = 'none';
            }
            var content = document.getElementById(clicked_name);
            content.style.display = 'block';
            
        }
        