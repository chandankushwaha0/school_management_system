//For top-button

const silkSlider = document.querySelector(".silk-slider");
const silkSliderImages = document.querySelectorAll(".silk-slider .testimonials_content");

let counter = 0;
const interval = setInterval(function() {
  counter++;
  if (counter > silkSliderImages.length - 1) {
    counter = 0;
  }
  silkSliderImages.forEach(function(img) {
    img.style.opacity = 0;
  });
  silkSliderImages[counter].style.opacity = 1;
}, 5000);

silkSlider.addEventListener("mouseover", function() {
  clearInterval(interval);
});

silkSlider.addEventListener("mouseout", function() {
  interval = setInterval(function() {
    counter++;
    if (counter > silkSliderImages.length - 1) {
      counter = 0;
    }
    silkSliderImages.forEach(function(img) {
      img.style.opacity = 0;
    });
    silkSliderImages[counter].style.opacity = 1;
  }, 5000);
});


const toTop = document.querySelector(".to-top");


window.addEventListener( 'scroll', () => {
    if( window.pageYOffset > 100 ){
        toTop.classList.add("active_to_top");
        
    } else {
        toTop.classList.remove("active_to_top");
    }
    
});

// Initial AOS 





