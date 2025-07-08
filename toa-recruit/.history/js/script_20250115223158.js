document.addEventListener("DOMContentLoaded", function () {
  if ($("section").hasClass("p-mv")) {
    // 初回のみローディング画面を表示するか確認
    const isLoadingDisplayed = !sessionStorage.getItem("loadingDisplayed");

    if (isLoadingDisplayed) {
      sessionStorage.setItem("loadingDisplayed", "true"); // ローディング表示済みフラグを設定
    }

    // const images = document.querySelectorAll("img"); // ページ内の全画像を取得
    let images = Array.from(document.querySelectorAll("img")).filter(
      (image) => {
        return !image.src.includes("gravatar.com"); // Gravatar画像を除外
      }
    );
    // let images = Array.from(document.querySelectorAll("img")).filter((image) => {
    //   return !image.src.includes("bar.svg"); // Gravatar画像を除外
    // });
    const totalImages = images.length;
    let loadedImages = 0;

    const loading = document.getElementById("js-loading");
    const progressBar = document.getElementById("js-loading-not");
    const loadingWrapper = document.getElementById("js-loading-wrapper");
    const mainContent = document.getElementById("js-global-container");
    const loadingTitle = document.getElementById("js-loading-title");

    function updateProgress() {
      loadedImages++;
      const percentComplete = Math.round((loadedImages / totalImages) * 100);
      progressBar.style.width = percentComplete + "%";

      // すべての画像が読み込まれたら
      if (loadedImages === totalImages) {
        setTimeout(function () {
          // loadingWrapper.style.opacity = "0";
          loadingTitle.style.opacity = "0";
          setTimeout(function () {
            // loading.classList.remove("is-visible");
            loading.style.backgroundImage = "none";
            loading.style.position = "absolute";
            mainContent.classList.add("is-visible");
            // loading.style.display = "none";
            // mainContent.style.display = "block"; // メインコンテンツを表示
            // setupAnimations();
            setTimeout(function() {
              loading.classList.remove("is-visible");
            }, 1000)
          }, 300); // フェードアウトのための遅延
        }, 1000); // 少しの遅延を加える
      }
    }

    if (isLoadingDisplayed) {
      loading.classList.add("is-visible");
      mainContent.classList.remove("is-visible");
      // 各画像の読み込み完了を監視
      images.forEach(function (image) {
        // if (image.loading === "lazy") {
        //   image.loading = "eager"; // 強制的に事前ロード
        // }

        if (image.complete) {
          updateProgress(); // 既に読み込まれている場合もカウント
        } else {
          image.addEventListener("load", updateProgress);
          image.addEventListener("error", updateProgress); // エラー時もカウント
        }
      });
    } else {
      // ローディング画面をスキップ

      if (loading.classList.contains("is-visible")) {
        loading.classList.remove("is-visible");
      }

      // loading.classList.add("is-visible");
      // progressBar.style.width = "100%";
      // loadingTitle.style.opacity = "0";
      // loading.style.backgroundImage = "none";
      // loading.style.position = "absolute";
      mainContent.classList.add("is-visible");
      // setupAnimations(); // アニメーションを設定
    }
  } else {
    document.getElementById("js-global-container").classList.add("is-visible");
  }

  // スクロール変化
  const header = document.getElementById("js-header");
  const loading = document.getElementById("js-loading");
  const mv = document.getElementById("js-mv");

  if (header && loading && mv) {
    window.addEventListener("scroll", function () {
      if (this.window.scrollY > 0) {
        header.classList.add("is-scrolled");
        // loading.classList.remove("is-visible");
        // mv.classList.add("is-hidden");
        // this.setTimeout(() => {
        //   mv.style.height = "auto";
        // }, 300);
      } else {
        header.classList.remove("is-scrolled");
        // loading.classList.add("is-visible");
        // mv.classList.remove("is-hidden");
        // mv.style.height = "100vh";
      }
    });
  }

  // MV切り替え
  const slides = document.querySelectorAll(".js-mvSlide");
  let currentSlide = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      if (i === index) {
        slide.classList.add("is-active");
      } else {
        slide.classList.remove("is-active");
      }
    });
  }

  function startSlideshow() {
    showSlide(currentSlide);
    setInterval(() => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }, 5000);
  }

  startSlideshow();

  //ハンバーガーメニューの制御
  const hamburger = document.querySelector(".js-hamburger");
  const mobileMenu = document.querySelector(".js-mobile-menu");

  if (!hamburger || !mobileMenu) {
    return false;
  } else {
    hamburger.addEventListener("mouseenter", function () {
      hamburger.classList.toggle("is-open");
      mobileMenu.classList.toggle("is-show");
    });
  }

  // ハンバーガーメニュー開いている時のスクロールを禁止する
  let state = false;
  let pos;
  $(".js-hamburger").on("mouseenter", function () {
    if (state == false) {
      pos = $(window).scrollTop();
      $("body").addClass("js-fixed").css({ top: -pos });
      state = true;
    } else {
      $("body").removeClass("js-fixed").css({ top: 0 });
      window.scrollTo(0, pos);
      state = false;
    }
  });

  // newsスライダー
  const swiper = new Swiper(".swiper", {
    slidesPerView: 1.56,
    // slidesPerView: "auto",
    spaceBetween: 31, // スライド間の距離
    // centeredSlides: true, // アクティブなスライドを中央にする
    grabCursor: true,
    // ページネーション
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
  });

  // モーダル
  MicroModal.init({
    disableScroll: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
    onShow: function (modal) {
      const match = modal.id.match(/^modal-(0[1-9]|10)$/); // 正規表現で 01~09 または 10 にマッチ
      // // モーダルが表示されたときに実行
      // document.querySelectorAll("#js-header-svg path").forEach((path) => {
      //   path.setAttribute("fill", "#3F6EB4");
      // });
      if (match) {
        gsap.utils.toArray(".js-not-modal").forEach((not) => {
          gsap.fromTo(
            not,
            {
              width: "0%",
              filter: "drop-shadow(0px 0px 0px rgba(255, 255, 255, 0))",
            },
            {
              width: "100%",
              filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
              ease: "power2.out",
              duration: 2,
              // scrollTrigger: {
              //   trigger: not,
              //   start: "top 60%",
              //   end: "top 30%",
              //   scrub: true,
              // },
            }
          );
        });

        // モーダルの前後ボタンのクリックイベントを設定
        document
          // .querySelectorAll("[data-micromodal-trigger]")
          .querySelectorAll(".js-pagination-btn")
          .forEach((button) => {
            button.addEventListener("click", function () {
              const targetModalId = this.getAttribute(
                "data-micromodal-trigger"
              ); // 次に開くモーダルID
              const currentModalId = this.closest(".p-modal").id; // 現在開いているモーダルID

              // modal.querySelector('.p-modal__overlay').style.animation = ''; // アニメーションを有効にする

              // 現在のモーダルを閉じる
              MicroModal.close(currentModalId);

              // 次のモーダルを開く
              MicroModal.show(targetModalId);
            });
          });
      }
    },
  });

  MicroModal.init({
    disableScroll: true,
    awaitOpenAnimation: true,
    awaitCloseAnimation: true,
  });

  // GSAPとScrollTriggerの初期化
  gsap.registerPlugin(ScrollTrigger);

  const setupScrollTrigger = () => {
    ScrollTrigger.matchMedia({
      // 769px以上の画面幅
      "(min-width: 769px)": function () {
        // 画像の切り替えとスクロールに合わせての固定
        const images = document.querySelectorAll(".js-image");
        const contents = document.querySelectorAll(".js-content");

        if (images.length > 0 && contents.length > 0) {
          // 各js-imageの表示状態を管理するためにフェードイン・アウトのアニメーションを設定
          images.forEach((image, index) => {
            gsap.to(image, {
              scrollTrigger: {
                trigger: contents[index], // 各js-contentに対応するjs-imageを表示
                start: "top center", // コンテンツが画面の中央に来るとき
                end: "bottom top", // js-contentが画面から消えるとき
                toggleActions: "play none none reverse", // スクロールに合わせてアニメーション
              },
              // opacity: 1,
              // animation: showSlide 1s ease-in,
              width: "100%",
              zIndex: 1, // 表示されているjs-imageを最前面に
              duration: 0.3, // フェードインの時間
            });
          });

          images.forEach((image, index) => {
            gsap.to(".c-not", {
              scrollTrigger: {
                trigger: contents[index], // 各js-contentに対応するjs-imageを表示
                start: "top center", // コンテンツが画面の中央に来るとき
                end: "bottom top", // js-contentが画面から消えるとき
                toggleActions: "play none none reverse", // スクロールに合わせてアニメーション
              },
              // opacity: 1,
              // animation: showSlide 1s ease-in,
              width: "100%",
              // filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
              // zIndex: 1, // 表示されているjs-imageを最前面に
              duration: 0.6, // フェードインの時間
            });
          });

          // images.forEach((image, index) => {
          //   gsap.to(".p-staff__employeesSlogan--old", {
          //     scrollTrigger: {
          //       trigger: contents[index], // 各js-contentに対応するjs-imageを表示
          //       start: "top center", // コンテンツが画面の中央に来るとき
          //       end: "bottom top", // js-contentが画面から消えるとき
          //       toggleActions: "play none none reverse", // スクロールに合わせてアニメーション
          //     },
          //     // opacity: 1,
          //     // animation: showSlide 1s ease-in,
          //     width: "100%",
          //     // zIndex: 1, // 表示されているjs-imageを最前面に
          //     duration: 1, // フェードインの時間
          //   });
          // });

          // js-imagesを固定しておく設定
          gsap.to(".js-images", {
            scrollTrigger: {
              trigger: ".js-images", // js-imagesが含まれる親要素をトリガー
              pin: true, // スクロールしても固定
              start: "center center",
              end: () =>
                "+=" +
                (document.querySelector(".js-contents").offsetHeight -
                  document.querySelector(".js-content").offsetHeight),
              scrub: true, // スクロールと同期
            },
          });

          // // 要素が重なるパララックス
          // const staffImages = document.querySelectorAll(".js-image");

          // staffImages.forEach((staffImage) => {
          //   const pin = staffImage.querySelector(".js-pin");
          //   const parent = document.querySelector(".p-staff__employeesImages");

          //   const setDimensions = () => {
          //     // const pin = staffImage.querySelector(".js-pin");
          //     const height = staffImage.getBoundingClientRect().height;
          //     const width = parent.offsetWidth;

          //     console.log("Updating dimensions:", { height, width });

          //     gsap.set(pin, {
          //       height: height,
          //       width: width,
          //     });
          //     // ScrollTrigger をリフレッシュして新しい高さを反映
          //     ScrollTrigger.refresh();
          //   };

          //   // 初期設定を実行
          //   setDimensions();

          //   // ウィンドウリサイズ時に再設定
          //   window.addEventListener("resize", setDimensions);

          //   ScrollTrigger.create({
          //     trigger: staffImage,
          //     start: "top top",
          //     end: () => `+=${pin.getBoundingClientRect().height}`, // 動的に高さを計算
          //     scrub: true,
          //     pin: true,
          //     pinSpacing: false,
          //   });
          // });
        }
      },

      // 768px以下の画面幅
      "(max-width: 768px)": function () {
        // // 768px以下の処理が必要な場合、ここに記述
      },
    });
  };

  // 初期化
  setupScrollTrigger();


  // スクロールすると発火するNOTアニメーション(interview)
  gsap.utils.toArray(".js-interview").forEach((notEffect) => {
    const resetAnimation = () => {
      gsap.set([".js-o-part-label", ".js-n-part-label", ".js-t-part-label"], {
        clearProps: "all", // すべてのGSAPプロパティをクリア
      });
    };

    let tl;
    // アニメーションを関数化
    const createAnimation = (element) => {
      // 既存のタイムラインを削除
      if (tl) {
        tl.kill(); // タイムラインを完全に削除してリセット
      }

      resetAnimation(); // 状態をリセット

      // 新しいタイムラインを作成
      tl = gsap.timeline();

      gsap.set([".js-o-part-label"], {
        scaleX: 1 / 7.83,
        transformOrigin: "center center",
      });
      function animateSVG() {
        if (window.innerWidth <= 576) {
          gsap.set([".js-n-part-label"], {
            x: 125.71,
          });
          gsap.set([".js-t-part-label"], {
            x: -127.3,
          });
        } else {
          gsap.set([".js-n-part-label"], {
            x: 341.71,
          });
          gsap.set([".js-t-part-label"], {
            x: -343.3,
          });
        }
      }
      // ページロード時にアニメーション
      animateSVG();
      // ウィンドウサイズ変更時にもアニメーションを実行
      window.addEventListener("resize", animateSVG);

      // SVG全体にdrop-shadowを適用して影を徐々に強くする
      tl.to(
        ".js-not-label",
        {
          duration: 1,
          // filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
          ease: "power1.inOut",
        },
        0
      );

      // Oのアニメーション（左右に広がる）
      tl
        // .to(
        //   ".js-o-part-label",
        //   {
        //     duration: 0, // 横幅の拡大（scaleX）は3秒で行う
        //     // scaleX: (1 / 4.2), // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
        //     scaleX: 1 / 7.83,
        //     transformOrigin: "center center", // 中心を基準に拡大
        //     ease: "power1.inOut",
        //   },
        //   0 // 同時に開始
        // )
        .to(
          ".js-o-part-label",
          {
            duration: 1, // 横幅の拡大（scaleX）は3秒で行う
            scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
            transformOrigin: "center center", // 中心を基準に拡大
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );

      // Nのアニメーション（左へ移動）
      tl
        // .to(
        //   ".js-n-part-label",
        //   {
        //     duration: 0,
        //     x: 341.71, // 左へ移動
        //     ease: "power1.inOut",
        //   },
        //   0
        // )
        .to(
          ".js-n-part-label",
          {
            duration: 1, // 横幅の拡大（scaleX）は3秒で行う
            x: 0, // 左へ移動
            ease: "power1.inOut",
          },
          0 // 同時に開始
        ); // すべて同時に開始

      // Tのアニメーション（右へ移動）
      tl
        // .to(
        //   ".js-t-part-label",
        //   {
        //     duration: 0,
        //     x: -343.3, // 右へ移動
        //     ease: "power1.inOut",
        //   },
        //   0
        // )
        .to(
          ".js-t-part-label",
          {
            duration: 1, // 横幅の拡大（scaleX）は3秒で行う
            x: 0, // 右へ移動
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );

      // // Nのアニメーション（左へ移動）
      // tl.to(
      //   ".n-part.is-content-large",
      //   {
      //     duration: 0,
      //     x: 288.71, // 左へ移動
      //     ease: "power1.inOut",
      //   },
      //   0
      // ).to(
      //   ".n-part.is-content-large",
      //   {
      //     duration: 2,
      //     x: 0, // 左へ移動
      //     ease: "power1.inOut",
      //   },
      //   0 // 同時に開始
      // ); // すべて同時に開始

      // // Tのアニメーション（右へ移動）
      // tl.to(
      //   ".t-part.is-content-large",
      //   {
      //     duration: 0,
      //     x: -289.3, // 右へ移動
      //     ease: "power1.inOut",
      //   },
      //   0
      // ).to(
      //   ".t-part.is-content-large",
      //   {
      //     duration: 2, // 横幅の拡大（scaleX）は3秒で行う
      //     x: 0, // 右へ移動
      //     ease: "power1.inOut",
      //   },
      //   0 // 同時に開始
      // );

      // // Nのアニメーション（左へ移動）
      // tl.to(
      //   ".n-part.is-content-small",
      //   {
      //     duration: 0,
      //     x: 97.71, // 左へ移動
      //     ease: "power1.inOut",
      //   },
      //   0
      // ).to(
      //   ".n-part.is-content-small",
      //   {
      //     duration: 2, // 横幅の拡大（scaleX）は3秒で行う
      //     x: 0, // 左へ移動
      //     ease: "power1.inOut",
      //   },
      //   0 // 同時に開始
      // ); // すべて同時に開始

      // // Tのアニメーション（右へ移動）
      // tl.to(
      //   ".t-part.is-content-small",
      //   {
      //     duration: 0,
      //     x: -98.3, // 右へ移動
      //     ease: "power1.inOut",
      //   },
      //   0
      // ).to(
      //   ".t-part.is-content-small",
      //   {
      //     duration: 2, // 横幅の拡大（scaleX）は3秒で行う
      //     x: 0, // 右へ移動
      //     ease: "power1.inOut",
      //   },
      //   0 // 同時に開始
      // );

      return tl;
    };

    // ScrollTriggerを設定
    ScrollTrigger.create({
      trigger: notEffect,
      start: "top center",
      // start: "top 50%", // ビューポートの中心と揃える
      end: "bottom center",
      // markers: true,
      onEnter: () => createAnimation(notEffect), // スクロール時にアニメーションを作成
      onEnterBack: () => {
        // resetAnimation(); // 状態をリセット
        // console.log('text');
        createAnimation(notEffect); // 戻るときもアニメーションを再実行
      },
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // js-interviewを監視する
  const targets = document.querySelectorAll(".js-interview");
  const labels = document.querySelectorAll(".js-label");
  const containers = document.querySelectorAll(".js-container");

  if (!targets || !labels) return;

  const showLabel = (label, container) => {
    // label.style.display = "block"; // ラベルを表示
    // label.style.opacity = "1";
    // label.style.transition = "opacity 0.5s ease";
    // コンテナにis-activeクラスを追加
    // if (container) {
    //   container.offsetHeight; // 再描画をトリガー
    //   container.classList.add("is-active");
    // }
    // setTimeout(() => {
    //   label.style.opacity = "0";
    //   setTimeout(() => {
    //     label.style.display = "none"; // 非表示
    //   }, 500);
    // }, 1000);
    // // コンテナからis-activeクラスを即座に削除
    // setTimeout(() => {
    //   if (container) {
    //     container.classList.remove("is-active");
    //   }
    // }, 1500); // アニメーションが終わったタイミングで削除
  };

  // Intersection Observerの設定
  const observerOptions = {
    root: null, // ビューポートを基準
    rootMargin: "0px",
    threshold: 0.5, // 50%見えたらトリガー
  };

  targets.forEach((target, index) => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          if (labels[index] && containers[index]) {
            // 対応する.js-labelと.js-containerが存在すれば
            showLabel(labels[index], containers[index]);
          }
        }
      });
    }, observerOptions);

    observer.observe(target);
  });
});

// アコーディオン
document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const RUNNING_VALUE = "running"; // アニメーション実行中のときに付与する予定のカスタムデータ属性の値
  const IS_OPENED_CLASS = "is-opened"; // アイコン操作用のクラス名

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      event.preventDefault(); // デフォルトの挙動を無効化

      // 連打防止用。アニメーション中だったらクリックイベントを受け付けないでリターンする
      if (element.dataset.animStatus === RUNNING_VALUE) {
        return;
      }

      // detailsのopen属性を判定
      if (element.open) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーションを実行
        const closingAnim = content.animate(
          closingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を付与
        element.dataset.animStatus = RUNNING_VALUE;

        // アニメーションの完了後に
        closingAnim.onfinish = () => {
          // open属性を取り除く
          element.removeAttribute("open");
          // アニメーション実行中用の値を取り除く
          element.dataset.animStatus = "";
        };
      } else {
        // アコーディオンを開くときの処理
        // open属性を付与
        element.setAttribute("open", "true");

        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーションを実行
        const openingAnim = content.animate(
          openingAnimKeyframes(content),
          animTiming
        );
        // アニメーション実行中用の値を入れる
        element.dataset.animStatus = RUNNING_VALUE;

        // アニメーション完了後にアニメーション実行中用の値を取り除く
        openingAnim.onfinish = () => {
          element.dataset.animStatus = "";
        };
      }
    });
  });
};
// アニメーションの時間とイージング
const animTiming = {
  duration: 400,
  easing: "ease-out",
};
// アコーディオンを閉じるときのキーフレーム
const closingAnimKeyframes = (content) => [
  {
    height: content.offsetHeight + "px", // height: "auto"だとうまく計算されないため要素の高さを指定する
    opacity: 1,
  },
  {
    height: 0,
    opacity: 0,
  },
];
// アコーディオンを開くときのキーフレーム
const openingAnimKeyframes = (content) => [
  {
    height: 0,
    opacity: 0,
  },
  {
    height: content.offsetHeight + "px",
    opacity: 1,
  },
];

// NOTバーのアニメーション
// gsap.utils.toArray(".js-not-bar").forEach((not) => {
//   const notBar = not.querySelector(".c-not"); // 各要素内の .c-not を取得

//   if (!notBar) return; // .c-not が存在しない場合はスキップ
//   gsap.to(notBar, {
//     width: "100%",
//     filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
//     ease: "power2.out",
//     scrollTrigger: {
//       trigger: not,
//       start: "top 60%",
//       end: "top 30%",
//       scrub: true,
//     },
//   });
// });

// const notBars = document.querySelectorAll(".js-not-bar");


// notBars.forEach((notBar) => {
gsap.utils.toArray(".c-not").forEach((not) => {
  const isInViewport = not.getBoundingClientRect().top < window.innerHeight;

  if (isInViewport) {
    // ページロード時のアニメーション
    gsap.fromTo(
      not,
      { 
        // width: "0%" 
        clipPath: "inset(0 100% 0 0)",
      }, // 初期状態
      {
        // width: "100%", // アニメーション終了状態
        clipPath: "inset(0 0 0 0)",
        ease: "power2.out",
        duration: 1, // アニメーション時間
        delay: 1.2, // ページ読み込み直後に少し遅延
        toggleActions: "play none none reverse",
      }
    );
  } else {
    // gsap.utils.toArray(".c-not").forEach((not) => {
      gsap.to(not, {
        // width: "100%",
        clipPath: "inset(0 0 0 0)",
        // filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
        ease: "power2.out",
        scrollTrigger: {
          trigger: not,
          start: "top 60%",
          end: "top 30%",
          // scrub: true,
          delay: 1.2,
          toggleActions: "play none none reverse",
        },
      });
    // });
  }
});

// タイトルバーの表示
document.querySelectorAll(".c-title").forEach((title) => {
  const firstBar = title.querySelector(".js-bar-first img");
  const lastBar = title.querySelector(".js-bar-last img");

  // 最初のバーのアニメーション
  if (firstBar) {
    gsap.to(firstBar, {
      width: "100%",
      ease: "power2.out",
      scrollTrigger: {
        trigger: title,
        start: "top 80%",
        end: "top 50%",
        scrub: true,
      },
    });
  }
  // 次のバーのアニメーション
  if (lastBar) {
    gsap.to(lastBar, {
      width: "100%",
      ease: "power2.out",
      scrollTrigger: {
        trigger: title,
        start: "top 50%",
        end: "top 20%",
        scrub: true,
      },
    });
  }
});

// document.querySelectorAll(".js-slideIn").forEach((slide) => {
//   // const firstBar = title.querySelector(".js-bar-first img");
//   // const lastBar = title.querySelector(".js-bar-last img");

//   // 最初のバーのアニメーション
//   // if (firstBar) {
//   gsap.to(slide, {
//     width: "100%",
//     ease: "power2.out",
//     scrollTrigger: {
//       trigger: slide,
//       start: "top 80%",
//       end: "top 50%",
//       // scrub: true,
//       toggleActions: "play none none reverse",
//     },
//   });
//   // }
//   // 次のバーのアニメーション
//   // if (lastBar) {
//   //   gsap.to(lastBar, {
//   //     width: "100%",
//   //     ease: "power2.out",
//   //     scrollTrigger: {
//   //       trigger: title,
//   //       start: "top 50%",
//   //       end: "top 20%",
//   //       scrub: true,
//   //     },
//   //   });
//   // }
// });

document.addEventListener("DOMContentLoaded", function () {
  const slides = document.querySelectorAll(".js-slideIn");

  slides.forEach((slide) => {
    const isInViewport = slide.getBoundingClientRect().top < window.innerHeight;

    if (isInViewport) {
      // ページロード時のアニメーション
      gsap.fromTo(
        slide,
        { 
          // width: "0%"
          clipPath: "inset(0 100% 0 0)",
         }, // 初期状態
        {
          clipPath: "inset(0 0 0 0)", // アニメーション終了状態
          ease: "power2.out",
          duration: .5, // アニメーション時間
          // delay: 0.2, // ページ読み込み直後に少し遅延
        }
      );
    } else {
      // ScrollTriggerの設定（スクロールで発火する要素）
      gsap.to(slide, {
        // width: "100%",
        duration: .5,
        clipPath: "inset(0 0 0 0)",  // 100%で表示
        ease: "power2.out",
        scrollTrigger: {
          trigger: slide,
          start: "top 80%",
          end: "top 50%",
          // toggleActions: "play none none reverse",
        },
      });
    }
  });
});


// document.addEventListener("DOMContentLoaded", function () {
//   const interviewSlides = document.querySelectorAll(".js-interviewSlideIn");

//   interviewSlides.forEach((interviewSlide) => {
//     const isInViewport = interviewSlide.getBoundingClientRect().top < window.innerHeight;
    

//     if (isInViewport) {
//       // ページロード時のアニメーション
//       gsap.fromTo(
//         interviewSlide,
//         { width: "0%" }, // 初期状態
//         {
//           width: "100%", // アニメーション終了状態
//           ease: "power2.out",
//           duration: 1.5, // アニメーション時間
//           delay: 0.2, // ページ読み込み直後に少し遅延
//         }
//       );
//     } else {
//       // // ScrollTriggerの設定（スクロールで発火する要素）
//       // gsap.fromTo(interviewSlide, {
//       //   width: "0"
//       // }, {
//       //   width: "100%",
//       //   ease: "power2.out",
//       //   duration: 1,
//       //   // scrollTrigger: {
//       //   //   trigger: interviewSlide,
//       //   //   start: "top top",
//       //   //   // end: "top 50%",
//       //   //   // toggleActions: "play none none reverse",
//       //   // },
//       // });


//       // // ScrollTriggerの設定（スクロールで発火する要素）
//       // gsap.to(interviewSlide, {
//       //   width: "100%",
//       //   ease: "power2.out",
//       //   // duration: 1, // アニメーション時間
//       //   scrollTrigger: {
//       //     // trigger: ".p-interview__itemOuter",
//       //     trigger: ".c-label",
//       //     start: "center 10%",
//       //     end: "top 80%",
//       //     toggleActions: "play none none reverse",
//       //     markers: true, // デバッグ用
//       //   },
//       // });
//     }
//   });
// });

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // .js-interviewSlideIn のすべての要素に対してアニメーションを適用
        entry.target.querySelectorAll(".js-interviewSlideIn").forEach((element) => {
          gsap.to(element, {
            // width: "100%",
            clipPath: "inset(0 0 0 0)",
            ease: "power2.out",
            duration: 1,
            toggleActions: "play none none reverse",
          });
        });
      } 
      // else {
      //   // 必要であればビューポートを離れたときの処理を追加
      //   entry.target.querySelectorAll(".js-interviewSlideIn").forEach((element) => {
      //     gsap.to(element, {
      //       // width: "0%",
      //       clipPath: "inset(0 100% 0 0)",
      //       ease: "power2.in",
      //       duration: 1,
      //     });
      //   });
      // }
    });
  },
  {
    threshold: 0.1, // 要素の50%が見えたら発火
  }
);

// .p-interview__itemOuter を監視
document.querySelectorAll(".p-interview__itemOuter").forEach((item) => {
  observer.observe(item);
});




//テキストスライドアニメーション
$(function () {
  // スクロールイベントを設定
  $(window).scroll(function () {
    // ウィンドウの高さを取得
    const windowHeight = $(window).height();
    // 現在のスクロール位置を取得
    const scroll = $(window).scrollTop();

    // 各ターゲット要素('.slide')に対して処理を行う
    $(".js-slide").each(function () {
      // ターゲット要素の位置を取得
      const targetPosition = $(this).offset().top;
      // ターゲット要素が表示されたらアニメーションを発動
      if (scroll > targetPosition - windowHeight + 100) {
        const $target1 = $(this);
        const $target2 = $target1.find(".js-slide-content");
        const className = "is-visible";
        const timeout = 1500;
        const delay = 100;

        // 一度アニメーションが発動していないか確認
        if (!$target1.hasClass(className)) {
          // アニメーション開始
          $target1.addClass(className);
          setTimeout(() => {
            $target2.addClass(className);
          }, delay);
        }
      }
    });
  });
});


// 背景画像固定
document.addEventListener("DOMContentLoaded", function () {
  const pMessage = document.querySelector(".p-message");
  // const otherContents = document.querySelector(".l-other-contents");
  const unfixedClass = document.querySelector(".is-unfixedClass");

  if (pMessage && otherContents) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // .l-other-contents が画面内に入ったらクラスを追加
            pMessage.classList.add("is-unfixed");
          } else {
            // .l-other-contents が画面外になったらクラスを削除（必要に応じて）
            pMessage.classList.remove("is-unfixed");
          }
        });
      },
      {
        root: null, // ビューポートを監視
        threshold: 0, // 少しでも交差したら発火
      }
    );

    observer.observe(otherContents);
  }
});

// READ MOREボタン
jQuery(document).ready(function ($) {
  var postCount = 6; // 初期表示件数

  $("#js-news-btn").on("click", function () {
    postCount += 6; // クリックごとに6件増加
    $(".p-news-list__item.is-hidden").slice(0, 6).removeClass("is-hidden"); // 次の6件を表示

    // すべての記事が表示されたらボタンを非表示にする
    if ($(".p-news-list__item.is-hidden").length === 0) {
      $("#js-news-btn").hide();
    }
  });
});

//　タブ切り替え
$(function () {
  let tabs = $(".js-tab");
  $(".js-tab").on("click", function () {
    $(".is-active").removeClass("is-active");
    $(this).addClass("is-active");
    const index = tabs.index(this);
    $(".js-tab-content").removeClass("is-show").eq(index).addClass("is-show");
  });
});

!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? "width=device-width,initial-scale=1"
        : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

//　背景画像切り替え
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".p-interview__item.js-interview");

  function updateBackgroundImages() {
    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    items.forEach((item) => {
      // const desktopBg = item.getAttribute('style')?.match(/url\(["']?(.*?)["']?\)/)?.[1];
      // const mobileBg = item.getAttribute('data-mobile-bg');

      // if (isMobile && mobileBg) {
      //     item.style.backgroundImage = `url(${mobileBg})`;
      // } else {
      //     item.style.backgroundImage = desktopBg;
      // }

      const desktopBg = item.getAttribute("data-desktop-bg");
      const mobileBg = item.getAttribute("data-mobile-bg");

      if (isMobile && mobileBg) {
        item.style.backgroundImage = `url(${mobileBg})`;
      } else if (desktopBg) {
        item.style.backgroundImage = `url(${desktopBg})`;
      }
    });
  }

  // 初期ロード時に実行
  updateBackgroundImages();

  // ウィンドウサイズ変更時にも実行
  window.addEventListener("resize", updateBackgroundImages);
});
