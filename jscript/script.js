//-------Smooth scrolling for internal links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth"
            });
        }
    });
});



//------navbar script
const navbar = document.querySelector('.navbar');
if (navbar) {
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
}
//---------------Animations
  AOS.init({
    duration: 1000, // animation duration in ms
    once: true,     // animate only once
  });


//----------------------------------------------assesments-------------------------------//
//------assesments script
  function switchFocus(index) {
    const panes = document.querySelectorAll('.slider-pane');
    const buttons = document.querySelectorAll('.slider-btn');
  
    panes.forEach((pane, i) => {
      pane.classList.toggle('inactive', i !== index);
    });
  
    buttons.forEach((btn, i) => {
      btn.classList.toggle('active', i === index);
    });
  }
//-----asssesments script —Initialize default focus
  switchFocus(0);
  document.querySelectorAll('.slider-btn').forEach(button => {
  button.addEventListener('click', () => {
    const target = button.getAttribute('data-target');
    document.querySelectorAll('.pane').forEach(pane => {
      pane.classList.add('blurred');
    });
    document.getElementById(target).classList.remove('blurred');
  });
});

/* JavaScript Fix: Adjust switchFocus to toggle 'active' class */
function switchFocus(index) {
  const panes = document.querySelectorAll('.slider-pane');
  const buttons = document.querySelectorAll('.slider-btn');

  panes.forEach((pane, i) => {
    if (window.innerWidth <= 768) {
      pane.classList.remove('active');
      if (i === index) pane.classList.add('active');
    } else {
      pane.classList.toggle('inactive', i !== index);
    }
  });

  buttons.forEach((btn, i) => {
    btn.classList.toggle('active', i === index);
  });
}

// Responsive update on resize
window.addEventListener('resize', () => {
  const currentActive = document.querySelector('.slider-btn.active');
  if (currentActive) {
    const index = Array.from(document.querySelectorAll('.slider-btn')).indexOf(currentActive);
    switchFocus(index);
  }
});

// Initialize
switchFocus(0);




//----------------------------------------------button script-------------------------------------------------//
document.querySelectorAll('.swipeBtn').forEach(button => {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    this.classList.add('clicked');
    const link = this.href;
    setTimeout(() => {
      window.location.href = link;
    }, 250);
  });
});


//----Previews Light box
function openLightbox(src) {
  document.getElementById("lightbox-img").src = src;
  document.getElementById("lightbox").style.display = "flex";
}
function closeLightbox() {
  document.getElementById("lightbox").style.display = "none";
}


