 /*====================SEARCH=========================*/
 const searchButton = document.getElementById('search-button');
 searchClose = document.getElementById('search-close');
 searchContent = document.getElementById('search-content');

 /*==============Search Function==================*/
 
 function searchBook() {
    const title = document.getElementById('book-title').value;
    const errorMessage = document.getElementById('error-message');
    fetch(`search.php?title=${title}`)
        .then(response => {
            if (response.redirected) {
                window.location.href = response.url;
            } else {
                errorMessage.style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// Display error message if redirected from search.php
window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('error')) {
        document.getElementById('error-message').style.display = 'block';
    }
}
 

 /*==============Show Menu==================*/
if(searchButton){
    searchButton.addEventListener('click', () =>{
        searchContent.classList.add('show-search')
    })
}

/*==============Hide Menu===============*/
if(searchClose){
    searchClose.addEventListener('click', () =>{
        searchContent.classList.remove('show-search')
    })
}

/*================ADD SHADOW HEADER ===================*/
const shadowHeader = () =>{
    const header = document.getElementById('header')
    //when scroll is greater than 50 viewport height 
    this.scrollY >= 50 ? header.classList.add('shadow-header')
                       :header.classList.remove('shadow-header')
}


/*==============Swiper================*/
let swiperHome = new Swiper('.home_swiper', {
    loop: true,
    spaceBetween: -24,
    grabCursor: true,
    slidesPerView: 'auto',
    centeredSlides: 'auto',

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,

    },

    breakpoints: {
        1220: {
            spaceBetween: -32,
        }
    }
  });

  /*==============Featuerd Swiper================*/
let swiperFeatured = new Swiper('.featured_swiper', {
    loop: true,
    spaceBetween: 16,
    grabCursor: true,
    slidesPerView: 'auto',
    centeredSlides: 'auto',

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    breakpoints: {
        1150: {
            slidesPerView: 4,
            centeredSlides: false, 
        }
    }
  });

    /*==============New Swiper================*/
let swiperNew = new Swiper('.new_swiper', {
    loop: true,
    spaceBetween: 16,
    slidesPerView: 'auto',
   

    breakpoints: {
        1150: {
            slidesPerView: 3,
        }
    }
  });

  let swiperTestimonial = new Swiper('.testimonial_swiper', {
    loop: true,
    spaceBetween: 20,
    grabCursor: true,
    slidesPerView: 'auto',
    centeredSlides: 'auto',


    breakpoints: {
        1150: {
            slidesPerView: 3,
            centeredSlides: false, 
        }
    }
  });


  /*===================SCROLL UP=====================*/
  const scrollUp = () =>{
    const scrollUp = document.getElementById('scroll-up')
        //When the scroll is higher than 350 viewport height
    this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
    	      :scrollUp.classList.remove('show-scroll')
  }

  window.addEventListener('scroll', scrollUp)

   /*===================SCROLL Section Active Link=====================*/
  const section = document.querySelector('section[id]')

  const scrollActive = () =>{
    const scrollDown = window.screenY

    section.forEach(current =>{
        const sectionHeight = current.offsetHeight,
            sectionTop = current.offsetTop - 58,
            sectionId = current.getAttribute('id'),
            sectionClass = document.querySelector(' .nav_menu a[href*=' + sectionId + ']')
        
        if(scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight){
            sectionClass.classList.add('active-link')
        
        }else{
            sectionClass.classList.remove('active-link')
        }
    })
  }

  window.addEventListener('scroll', scrollActive)