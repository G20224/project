var words = ['work smarter not harder'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});

// Menu Burger
$(document).ready(function () {
    $('.header__burger').click(function (event) {
        $('.header__burger,.header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
  });
  
  $(document).ready(function() {
    $('.header__menu_items').click(function(event) {
      $('body').removeClass('lock');
      $('.header__burger,.header__menu').removeClass('active');
    })
  })
  
  var modal1 = document.getElementById("main__myModal");
  var btn1 = document.getElementById("main__button");
  var span1 = document.getElementsByClassName("main__modal_close")[0];
  
  btn1.onclick = function() {
    modal1.style.display = "block";
  }
  span1.onclick = function() {
    modal1.style.display = "none";
  }
  window.onclick = function(event1) {
    if (event1.target == modal1) {
      modal1.style.display = "none";
    }
  }
  
  
  
  var phoneMask = IMask(
    document.getElementById('main__modal_phone'), {
      mask: '+{7}(000)000-00-00',
    });
    document.getElementById("main__modal_form").addEventListener('submit', function(e) {
    e.preventDefault()
    let phone =  document.getElementById('main__modal_phone')
    if(phone.value.length < 16){
      phone.style.border = '1px solid red';
      return
    }
    this.submit()
  })
  