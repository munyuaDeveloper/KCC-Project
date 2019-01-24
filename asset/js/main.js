$(function(){
  // cache the window object
  var $window=$(window);
  //parallax background effect
  $('section[data-type="background"]').each(function(){
    var $bgobj=$(this);//assigning the object
    $(window).scroll(function(){
      //scroll the background at var speed
      // the yPos is a negative value because we're scrolling up

      var yPos= -($window.scrollTop() / $bgobj.data('speed'));

      //pu together our final background position

      var coords='50% '+ yPos + 'px';

      //move the background

      $bgobj.css({backgroundPosition: coords});

    });
  });
});




$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})


function EditFirstname() {
    var person = prompt("");
    
    if (person != null) {
        document.getElementById("firstname").innerHTML = person;
    }
}
function EditLastname() {
    var lastname = prompt("");
    
    if (lastname != null) {
        document.getElementById("lastname").innerHTML = lastname;
    }
}
function EditEmail() {
    var email = prompt("");
    
    if (email != null) {
        document.getElementById("email").innerHTML = email;
    }
}
function EditContact() {
    var contact = prompt("");
    
    if (contact != null) {
        document.getElementById("lastname").innerHTML = contact;
    }
}
function EditAddress() {
    var address = prompt("");
    
    if (address != null) {
        document.getElementById("address").innerHTML = address;
    }
}
function EditNumberCow() {
    var number_cow = prompt("");
    
    if (number_cow != null) {
        document.getElementById("number_cow").innerHTML = number_cow;
    }
}
function EditAverageMilk() {
    var average_milk = prompt("");
    
    if (average_milk != null) {
        document.getElementById("average_milk").innerHTML = average_milk;
    }
}




$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});