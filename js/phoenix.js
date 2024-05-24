
  const phoenixOffcanvasInit = ()=>{
      const {getData: e} = window.phoenix.utils
        , o = document.querySelectorAll("[data-phoenix-toggle='offcanvas']")
        , t = document.querySelector("[data-phoenix-backdrop]")
        , a = document.querySelector("[data-phoenix-scroll]")
        , c = document.querySelector(".faq")
        , n = document.querySelector(".faq-sidebar")
        , s = e=>{
          e.classList.remove("show"),
          document.body.style.removeProperty("overflow");
      }
      ;
      o && o.forEach((o=>{
          const c = e(o, "phoenix-target")
            , n = document.querySelector(c)
            , d = n.querySelectorAll("[data-phoenix-dismiss='offcanvas']");
          o.addEventListener("click", (()=>{
              n.classList.add("show"),
              a || (document.body.style.overflow = "hidden");
          }
          )),
          d && d.forEach((e=>{
              e.addEventListener("click", (()=>{
                  s(n);
              }
              ));
          }
          )),
          t && t.addEventListener("click", (()=>{
              s(n);
          }
          ));
      }
      )),
      c && n.classList.contains("show") && (c.classList.add = "newFaq");
  }
  ;

  console.log(i);

  const getThubmnailDirection = ()=>window.innerWidth < 768 || window.innerWidth >= 992 && window.innerWidth < 1200 ? "horizontal" : "vertical"
    , productDetailsInit = ()=>{
      const {getData: e, resize: t} = window.phoenix.utils
        , i = document.querySelector("[data-product-details]");
        
      if (i) {
          const r = i.querySelector("[data-product-color]")
            , n = (i.querySelector("[data-product-quantity]"),
          i.querySelector('[data-quantity] input[type="number"]'))
            , a = i.querySelector("[data-product-color-variants]")
            , c = r=>{
              const n = i.querySelector("[data-products-swiper]")
                , a = e(n, "swiper")
                , c = e(n, "thumb-target")
                , s = document.getElementById(c);
              let o = "";
              r.forEach((e=>{
                  o += `\n          <div class='swiper-slide '>\n            <img class='w-100' src=${e} alt="">\n          </div>\n        `;
              }
              )),
              n.innerHTML = `<div class='swiper-wrapper'>${o}</div>`;
              let d = "";
              r.forEach((e=>{
                  d += `\n          <div class='swiper-slide '>\n            <div class="product-thumb-container p-2 p-sm-3 p-xl-2">\n              <img src=${e} alt="">\n            </div>\n          </div>\n        `;
              }
              )),
              s.innerHTML = `<div class='swiper-wrapper'>${d}</div>`;
              const l = new window.Swiper(s,{
                  slidesPerView: 5,
                  spaceBetween: 16,
                  direction: getThubmnailDirection(),
                  breakpoints: {
                      768: {
                          spaceBetween: 100
                      },
                      992: {
                          spaceBetween: 16
                      }
                  }
              })
                , p = n.querySelector(".swiper-nav");
              t((()=>{
                  l.changeDirection(getThubmnailDirection());
              }
              )),
              new Swiper(n,{
                  ...a,
                  navigation: {
                      nextEl: p?.querySelector(".swiper-button-next"),
                      prevEl: p?.querySelector(".swiper-button-prev")
                  },
                  thumbs: {
                      swiper: l
                  }
              });
          }
            , s = a.querySelectorAll("[data-variant]");
          s.forEach((t=>{
              t.classList.contains("active") && (c(e(t, "products-images")),
              r.innerHTML = e(t, "variant"));
              const i = e(t, "products-images");
              t.addEventListener("click", (()=>{
                  c(i),
                  s.forEach((e=>{
                      e.classList.remove("active");
                  }
                  )),
                  t.classList.add("active"),
                  r.innerHTML = e(t, "variant");
              }
              ));
          }
          )),
          n.addEventListener("change", (e=>{
              "" == e.target.value && (e.target.value = 0);
          }
          ));
      }
  }
  ;

  const quantityInit = ()=>{
      const {getData: t} = window.phoenix.utils
        , e = "[data-quantity] [data-type]"
        , a = "[data-quantity]"
        , n = '[data-quantity] input[type="number"]'
        , u = "click"
        , i = "min"
        , r = "type";
      document.querySelectorAll(e).forEach((e=>{
          e.addEventListener(u, (e=>{
              const u = e.currentTarget
                , l = t(u, r)
                , c = u.closest(a).querySelector(n)
                , o = c.getAttribute(i);
              let y = parseInt(c.value, 10);
              "plus" === l ? y += 1 : y = y > o ? y -= 1 : y,
              c.value = y;
          }
          ));
      }
      ));
  }
  ;



  const ratingInit = ()=>{
      const {getData: t, getItemFromStore: e} = window.phoenix.utils;
      document.querySelectorAll("[data-rater]").forEach((r=>{
          const a = {
              reverse: e("phoenixIsRTL"),
              starSize: 32,
              step: .5,
              element: r,
              rateCallback(t, e) {
                  this.setRating(t),
                  e();
              },
              ...t(r, "rater")
          };
          return window.raterJs(a)
      }
      ));
  }
  ;



  const simplebarInit = ()=>{
      Array.from(document.querySelectorAll(".scrollbar-overlay")).forEach((r=>new window.SimpleBar(r)));
  }
  ;


  const swiperInit = ()=>{
      const {getData: e} = window.phoenix.utils
        , t = document.querySelectorAll(".swiper-theme-container");
      t && t.forEach((t=>{
          const r = t.querySelector("[data-swiper]")
            , i = e(r, "swiper")
            , n = i.thumb;
          let s;
          if (n) {
              const e = r.querySelectorAll("img");
              let t = "";
              e.forEach((e=>{
                  t += `\n          <div class='swiper-slide'>\n            <img class='img-fluid rounded mt-2' src=${e.src} alt=''/>\n          </div>\n        `;
              }
              ));
              const i = document.createElement("div");
              if (i.setAttribute("class", "swiper thumb"),
              i.innerHTML = `<div class='swiper-wrapper'>${t}</div>`,
              n.parent) {
                  document.querySelector(n.parent).parentNode.appendChild(i);
              } else
                  r.parentNode.appendChild(i);
              s = new window.Swiper(i,n);
          }
          const o = t.querySelector(".swiper-nav");
          new window.Swiper(r,{
              ...i,
              navigation: {
                  nextEl: o?.querySelector(".swiper-button-next"),
                  prevEl: o?.querySelector(".swiper-button-prev")
              },
              thumbs: {
                  swiper: s
              }
          });
      }
      ));
  }
  ;