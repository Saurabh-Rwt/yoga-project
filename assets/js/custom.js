/*--------- Sticky Header --------- */
$(window).scroll(function () {
  var sticky = $('nav'),
    scroll = $(window).scrollTop();
  if (scroll >= 50) sticky.addClass('sticky');
  else sticky.removeClass('sticky');
});

/*--------- dropdown toggle --------- */
document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 991) {
    const dropdownLinks = document.querySelectorAll('.dropdown-link');

    dropdownLinks.forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        const dropTargetId = this.getAttribute('data-drop-target');
        const dropdownMenu = document.getElementById(dropTargetId);

        dropdownLinks.forEach(function (otherLink) {
          if (otherLink !== link) {
            const otherDropTargetId = otherLink.getAttribute('data-drop-target');
            const otherDropdownMenu = document.getElementById(otherDropTargetId);
            if (otherDropdownMenu.classList.contains('show')) {
              otherDropdownMenu.classList.remove('show');
            }
          }
        });

        dropdownMenu.classList.toggle('show');
      });
    });
  }
});

/*------------ mail --------------*/
$("#contact-form, #apply-form").submit(function (e) {
  e.preventDefault();
  if (this.id === 'contact-form') {
    action_url = 'vendor/mail.php';
  }
  if (this.id === 'apply-form') {
    action_url = 'vendor/apply-mail.php';
  }
  const form = $(this);
  const submit_button = form.find("button[type='submit']");
  const button_text = submit_button.html();
  submit_button.prop('disabled', true);
  submit_button.html("Please wait...");
  let data = form.serialize();

  $.ajax({
    url: action_url,
    method: 'POST',
    data: data,
    dataType: 'json',
    success: function (data) {
      if (data.status) {
        form.trigger('reset');
      }
      // const responseMessage = '<h3 class="res-msg">' + data.message + '</h3>';
      // $(responseMessage).insertBefore(submit_button);
      const resModal = document.getElementById("bookNow-modal");
      const closeBtn = document.getElementById("success-close");
      resModal.classList.add("modal");
      resModal.classList.add("show");
      resModal.style.display = "block";
      submit_button.prop('disabled', false);
      submit_button.html(button_text);

      closeBtn.addEventListener('click', ()=>{
        resModal.classList.remove("show");
        resModal.style.display = "none";
      })
    }
  });
});

/*---------- banner ---------- */
$("#hero-slider").owlCarousel({
  loop: true,
  items: 1,
  animateOut: "fadeOut",
  animateIn: "fadeIn",
  smartSpeed: 500,
  autoplay: 2000,
  autoplayTimeout: 3000,
  nav: true
});

$("#program-scroller").owlCarousel({
  loop: true,
  margin: 10,
  items: 3,
  nav: true,
  autoplay: 2000,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    991: {
      items: 3,
    }
  }
});

$("#yoga-teacher").owlCarousel({
  loop: true,
  margin: 20,
  items: 4,
  nav: true,
  autoplay: 2000,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    991: {
      items: 4,
    }
  }
});

$("#excursion-carousel").owlCarousel({
  loop: true,
  margin: 20,
  items: 3,
  nav: true,
  autoplay: 2000,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    991: {
      items: 3,
    }
  }
});

$("#students-review").owlCarousel({
  loop: true,
  margin: 20,
  autoplayHoverPause:true,
  items: 3,
  nav: true,
  autoplay: 2000,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    991: {
      items: 3,
    }
  }
});

/*----------- humburger Icon -------------*/
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".navbarnav");
hamburger.addEventListener("click", () => {
  navMenu.classList.toggle("show");
  hamburger.classList.toggle("active");
  document.body.classList.toggle("overflowY-hidden");
});


/*---------------- faq ---------------- */
let header = document.querySelectorAll(".accordion-header");
header.forEach(
  (header) => {
    header.addEventListener("click", function (e) {
      let accordion = document.querySelectorAll(".accordion");
      let parentElm = header.parentElement;
      let siblings = this.nextElementSibling;

      accordion.forEach((element) => {
        element.children[1].style.maxHeight = null;
      });

      parentElm.classList.toggle("active");
      if (parentElm.classList.contains("active")) {
        accordion.forEach((element) => {
          element.classList.remove("active");
        });

        parentElm.classList.toggle("active");

        if (siblings.style.maxHeight) {
          siblings.style.maxHeight = null;
        } else {
          siblings.style.maxHeight = siblings.scrollHeight + "px";
        }
      }
    });
  }
);