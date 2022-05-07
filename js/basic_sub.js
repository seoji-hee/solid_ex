$(function () {
  /* 서브 제품: 디자인 start---------------------------------------------------------*/

  //제품 > design 페이지 슬라이드

  var myMarket = new Swiper(".myMarket", {
    slidesPerView: 2,
    slidesPerGroup: 1,
    initialSlide: 2,
    spaceBetween: 10,
    centeredSlides: true,   
    autoplay: {
      delay: 3000,
    },
    loop:true,
    loopFillGroupWithBlank: true,
    observer: true,
    observeParents: true,
    slideToClickedSlide: false,
    mousewheel: false,
    mousewheelControl: false,
    pagination: {
      el: ".design-pagination",
      type: "fraction",
      clickable: false,
      },
    navigation: {
      nextEl: ".design-btn-next",
      prevEl: ".design-btn-prev",
    },

    on: {
      slideChangeTransitionEnd: function () {
        let realIdx = this.realIndex + 1;
      },
      afterInit: function (e) {
        $(".myMarket .C-btn").click(function () {
          const idx = Number(this.dataset.index);
          ModalSwiper.slideToLoop(idx, 0);
          // console.log("idx", idx);

          var modalnext =
            document.getElementsByClassName("modal-design-next")[0];
          var modalprev =
            document.getElementsByClassName("modal-design-prev")[0];
          var closeBtn = document.getElementsByClassName("close-btn")[0];

          modalnext.style.display = "block";
          modalprev.style.display = "block";
          closeBtn.style.display = "block";
          console.log(ModalSwiper);
        
        });
      },
    },
    breakpoints: {
      200: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      641: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1025: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1500: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },

  
  });



  //@@@@@@@@@@@@@@@@@@
  //제품 > 디자인 페이지 슬라이드를 눌렀을때 나오는 팝업 슬라이드 입니다.
  var ModalSwiper = new Swiper(".ModalSwiper", {
    slidesPerView: 1,
    observer: true,   
    observeParents: true,
    loop: true,
    observeParents: true,
    navigation: {
      nextEl: ".modal-design-next",
      prevEl: ".modal-design-prev",
    },
    breakpoints: {
      200: {
        allowTouchMove: true,
        slidesPerView: 1,
      },
      1025: {
        allowTouchMove: false,
        slidesPerView: 1,
      },
    },
    on: {
      slideChange: function (e) {
        console.log("e", e);
        // console.log("realIndex.", e.realIndex);
        // console.log("activeIndex", e.activeIndex);
      },
    },

  });


//marketing page


var myPage = new Swiper(".myPage", {
  slidesPerView: 2,
  slidesPerGroup: 1,
  initialSlide: 0,
  spaceBetween: 10,
  centeredSlides: true,   
  autoplay: {
    delay: 3000,
  },
  // loop:true,
  loopFillGroupWithBlank: true,
  observer: true,
  observeParents: true,
  slideToClickedSlide: false,
  mousewheel: false,
  mousewheelControl: false,
  pagination: {
    el: ".design-pagination",
    type: "fraction",
    clickable: false,
    },
  navigation: {
    nextEl: ".design-btn-next",
    prevEl: ".design-btn-prev",
  },

  on: {
    slideChangeTransitionEnd: function () {
      let realIdx2 = this.realIndex + 1;
    },
    afterInit: function (e) {
      $(".myPage .C-btn").click(function () {
        const idx2 = Number(this.dataset.index);
        myPageModal.slideToLoop(idx2, 0);
       

        var modalnext =
          document.getElementsByClassName("modal-design-next")[0];
        var modalprev =
          document.getElementsByClassName("modal-design-prev")[0];
        var closeBtn = document.getElementsByClassName("close-btn")[0];

        modalnext.style.display = "block";
        modalprev.style.display = "block";
        closeBtn.style.display = "block";
        console.log(myPageModal);
      
      });
    },
  },
  breakpoints: {
    200: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    641: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1025: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1500: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
  },


});



//@@@@@@@@@@@@@@@@@@
//제품 > 디자인 페이지 슬라이드를 눌렀을때 나오는 팝업 슬라이드 입니다.
var myPageModal = new Swiper(".myPageModal", {
  slidesPerView: 1,
  observer: true,   
  observeParents: true,
  loop: true,
  observeParents: true,
  navigation: {
    nextEl: ".modal-design-next",
    prevEl: ".modal-design-prev",
  },
  breakpoints: {
    200: {
      allowTouchMove: true,
      slidesPerView: 1,
    },
    1025: {
      allowTouchMove: false,
      slidesPerView: 1,
    },
  },
  on: {
    slideChange: function (e) {
      console.log("e", e);
      // console.log("realIndex.", e.realIndex);
      // console.log("activeIndex", e.activeIndex);
    },
  },

});








  $(".C-btn").click(function () {
    $(".design-swiper").show();
  });
  $(".modal-A  .close-btn").click(function () {
    $(".modal-A.design-swiper").hide();
  });
  //제품 : 디자인 offer 슬라이드
  var myOffer = new Swiper(".myOffer", {
    initialSlide: 2,
    slidesPerView: 5,
    slidesPerGroup: 1,
    spaceBetween: 10,
    observer: true,
    observeParents: true,
    centeredSlides: true,
    allowTouchMove: false,
    loop: true,
    loopFillGroupWithBlank: true,
    mousewheel: false,
    pagination: {
      el: ".offer-pagination",
      type: "fraction",
      clickable: true,
    },
    navigation: {
      nextEl: ".offer-btn-next",
      prevEl: ".offer-btn-prev",
    },
    breakpoints: {
      200: {
        slidesPerView: 2,
        spaceBetween: 10,
        mousewheel:true,
        allowTouchMove: true,
      },
      641: {
        slidesPerView: 2,
        spaceBetween: 30,
        mousewheel:true,
        allowTouchMove: true,
      },
      1025: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      1300: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
  });

  //@@@@@@@@@@ 이하 다른 영역 스크립트 입니다 ==========
  //디자인 제품 > offer 슬라이드 팝업 index값에 따라 나오게
  $(".myOffer .swiper-slide").click(function (e) {
    openModalFn(e);
  });

  function openModalFn(e) {
    var modalIndex = e.currentTarget.attributes[1].value;
    $(`.sub-wrap.offer .${modalIndex}`).show();
  }

  $(".sub-wrap.offer .modal-B .close-btn-offer").click(function () {
    $(".sub-wrap.offer .modal-B").hide();
  });

  //제품 : data page offer 슬라이드
  var dataOffer = new Swiper(".dataOffer", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    observer: true,
    observeParents: true,
    centeredSlides: true,
    allowTouchMove: false,
    loop: false,
    mousewheel: false,
    breakpoints: {
      200: {
        allowTouchMove: false,
        slidesPerView: 2,
        spaceBetween: 10,
      },
      641: {
        slidesPerView: 2,
        spaceBetween: 30,
        mousewheel:true,
        allowTouchMove: true,
      },
      1025: {
        allowTouchMove: false,
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1500: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
    },
  });

  //제품 > data page offer 모달 창
  $(".product-data .dataOffer .swiper-slide").click(function () {
    $(".product-data .sub-wrap.offer .modal-B").show();
  });

  $(".product-data .sub-wrap.offer .modal-B .close-btn").click(function () {
    $(".product-data .sub-wrap.offer .modal-B").hide();
  });



  // $(".exam-tab-inner ul li").click(function () {
  //   var certification_tab = $(this).attr("data-tab");
  //   $(".exam-tab-inner ul li").removeClass("modal_on");
  //   $(".exam-tab-inner .tab-content").removeClass("modal_on");
  //   $(this).addClass("modal_on");
  //   $("#" + certification_tab).addClass("modal_on");
  // });




  // Modal을 가져옵니다.
  var modals = document.getElementsByClassName("modal-p");
  // Modal을 띄우는 클래스 이름을 가져옵니다.
  var partnersPop = document.getElementsByClassName("partnersPop");
  // Modal을 닫는 close 클래스를 가져옵니다.
  var spanes = document.getElementsByClassName("cl");
  var funcs_partner = [];

  // 원하는 Modal 수만큼 Modal 함수를 호출해서 funcs 함수에 정의합니다.
  for (var pop_i = 0; pop_i < partnersPop.length; pop_i++) {
    funcs_partner[pop_i] = Modal(pop_i);
  }

  // 원하는 Modal 수만큼 funcs 함수를 호출합니다.
  for (var pop_j = 0; pop_j < partnersPop.length; pop_j++) {
    funcs_partner[pop_j]();
  }

  // Modal을 띄우고 닫는 클릭 이벤트를 정의한 함수
  function Modal(num) {
    return function () {
      // 해당 클래스의 내용을 클릭하면 Modal을 띄웁니다.
      partnersPop[num].onclick = function () {
        modals[num].style.display = "block";
        console.log(num);
      };

      // <span> 태그(X 버튼)를 클릭하면 Modal이 닫습니다.
      spanes[num].onclick = function () {
        modals[num].style.display = "none";
      };
    };
  }

  // Modal 영역 밖을 클릭하면 Modal을 닫습니다.
  window.onclick = function (event) {
    if (event.target.className == "modal-p") {
      event.target.style.display = "none";
    }
  };


});


