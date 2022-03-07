 //trượt theo menu

 //   $('nav-item a[href^="#"]').on('click', function(e) {
 //       // e.preventDefault();
 //       $(document).off("scroll");
 //       $('a').each(function() {
 //           $(this).removeClass('active');
 //       })
 //       $(this).addClass('active');
 //       var target = this.hash,
 //           menu = target;
 //       $target = $(target);
 //       $('html, body').stop().animate({
 //           'scrollTop': $target.offset().top - $('.navbar').height()
 //       }, 500, 'swing', function() {
 //           window.location.hash = target;
 //           $(document).on("scroll", onScroll);
 //       });
 //   });
 //   $(document).on("scroll", onScroll);

 //menu trượt theo
 //   function onScroll(event) {
 //       var scrollPos = $(document).scrollTop();
 //       $('.nav-item a').each(function() {
 //           var currLink = $(this);
 //           var refElement = $(currLink.attr("href"));
 //           if (refElement.position().top - $('.navbar').height() - 20 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
 //               $('.nav-item a').removeClass("active");
 //               currLink.addClass("active");
 //           } else {
 //               currLink.removeClass("active");
 //           }
 //       });
 //   }


 //loc hinh anh
 $(document).ready(function() {
     $(".image").slick({
         dots: true,
         infinite: true,
         prevArrow: false,
         nextArrow: false,
         autoplay: true,
         autoplaySpeed: 3000,

         slidesToShow: 1,
         slidesToScroll: 1,
         responsive: [{
                 breakpoint: 1024,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     infinite: true,
                     dots: true,
                 },
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2,
                 },
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                 },
             },
         ],
     });

     $(".section-5-box").slick({
         infinite: false,
         autoplay: false,
         slidesToShow: 4,
         slidesToScroll: 1,
     });

     $(".section-9-box").slick({
         infinite: false,
         autoplay: false,
         slidesToShow: 3,
         slidesToScroll: 1,
     });
     $(".halq-ks").slick({
         infinite: false,
         autoplay: false,
         slidesToShow: 3,
         slidesToScroll: 1,
     });
     $(".halq").slick({
         infinite: false,
         autoplay: false,
         slidesToShow: 3,
         slidesToScroll: 1,
     });

     $(".baner-slider").slick({
         dots: true,
         infinite: true,
         prevArrow: false,
         nextArrow: false,
         autoplay: true,
         autoplaySpeed: 2000,
         slidesToShow: 1,
         slidesToScroll: 1,
         responsive: [{
                 breakpoint: 1024,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     infinite: true,
                     dots: true,
                 },
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                 },
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                 },
             },
         ],
     });

     //nút trượt 
     $(".circle-down").click(function() {
         $("html, body").animate({ scrollTop: $(".section-5").offset().top - $('.dau').height() }, "50");
     });


     //ẩn hiện màu thanh menu
     $(window).scroll(function() {
         var scroll = $(window).scrollTop();

         if (scroll >= 50) {
             $(".navbar").addClass("change");

         } else {
             $(".navbar").removeClass("change");
         }
     });


     $("#char").click(function() {
         $("#div1").fadeOut();
         $("#div3").fadeOut("slow");
         $("#div5").fadeOut();
         $("#div7").fadeOut("slow");
         $("#char").addClass("btn-style")
         $("#art").removeClass("btn-style")
     });
 });


 $(document).ready(function() {
     $("#art").click(function() {
         $("#div1").fadeIn("slow");
         $("#div3").fadeIn("slow");
         $("#div5").fadeIn("slow");
         $("#div7").fadeIn("slow");
         $("#char").removeClass("btn-style")
         $("#art").addClass("btn-style")
     });
 });

 $(document).ready(function() {
     $('a.me').click(function() {
         $('a.me').removeClass("active-2", 3000);
         $(this).addClass("active-2", 3000);
     });
 })

 $(function() {
     var star = '.star',
         selected = '.selected';
     $(star).on('click', function() {
         $(selected).each(function() {
             $(this).removeClass('selected');
         });
         $(this).addClass('selected');
     });
 });

 /*---------------------LOAD-CMT---------------- */

 $(document).ready(function() {
     var _token, ten, idtour, ndcmt;
     loadcmt();

     function loadcmt() {
         _token = $("input[name='_token']").val();
         idtour = $("input[name='idtour']").val();
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $.ajax({
             url: "chitiettour/" + idtour,
             type: 'POST',
             data: { _token: _token, id_tour: idtour },
             success: function(data) {
                 if ($.isEmptyObject(data.error)) {
                     $('.cmt').html(data);
                 } else {
                     printErrorMsg(data.error);
                 }
             }
         });
     };

     /*---------------------SEND-DATA-CMT---------------- */
     $("#ajaxSubmit").click(function(e) {
         e.preventDefault();
         _token = $("input[name='_token']").val();
         ten = $("input[name='tencmt']").val();
         idtour = $("input[name='idtour']").val();
         ndcmt = $("textarea[name='ndcmt']").val();
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $.ajax({
             url: "chitiettour/" + idtour,
             type: 'POST',
             data: { _token: _token, ten: ten, idtour: idtour, ndcmt: ndcmt },
             success: function(data) {
                 if ($.isEmptyObject(data.error)) {
                     loadcmt();
                 } else {
                     printErrorMsg(data.error);
                 }
             }
         });
     });



     /*---------------------LOAD-CMT-KHACHSAN---------------- */
     var _token_ks, ten_cmt, idks, ndcmt_ks;
     loadcmtks();

     function loadcmtks() {
         _token_ks = $("input[name='_token']").val();
         idks = $("input[name='idks']").val();
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $.ajax({
             url: "chitietks/" + idks,
             type: 'POST',
             data: { _token_ks: _token_ks, id_ks: idks },
             success: function(data) {
                 if ($.isEmptyObject(data.error)) {
                     $('.cmtks').html(data);
                 } else {
                     printErrorMsg(data.error);
                 }
             }
         });
     };

     /*---------------------SEND-CMT-KHACHSAN---------------- */
     $("#ajaxSubmit-ks").click(function(e) {
         e.preventDefault();
         _token_ks = $("input[name='_token']").val();
         ten_cmt = $("input[name='ten-cmt']").val();
         idks = $("input[name='idks']").val();
         ndcmt_ks = $("textarea[name='ndcmt-ks']").val();
         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
         $.ajax({
             url: "chitietks/" + idks,
             type: 'POST',
             data: { _token_ks: _token_ks, ten_cmt: ten_cmt, idks: idks, ndcmt_ks: ndcmt_ks },
             success: function(data) {
                 if ($.isEmptyObject(data.error)) {
                     loadcmtks();
                 } else {
                     printErrorMsg(data.error);
                 }
             }
         });
     });
 });