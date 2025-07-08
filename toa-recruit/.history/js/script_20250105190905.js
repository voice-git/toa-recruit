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
    // const countElement = document.getElementById("count");
    const loadingWrapper = document.getElementById("js-loading-wrapper");
    const mainContent = document.getElementById("js-global-container");

    function updateProgress() {
      loadedImages++;
      const percentComplete = Math.round((loadedImages / totalImages) * 100);
      progressBar.style.width = percentComplete + "%";
      // countElement.textContent = percentComplete;
      // console.log(percentComplete);

      // すべての画像が読み込まれたら
      if (loadedImages === totalImages) {
        setTimeout(function () {
          loadingWrapper.style.opacity = "0";
          setTimeout(function () {
            loading.classList.remove("is-visible");
            mainContent.classList.add("is-visible");
            // loading.style.display = "none";
            // mainContent.style.display = "block"; // メインコンテンツを表示
            setupAnimations();
          }, 300); // フェードアウトのための遅延
        }, 1000); // 少しの遅延を加える
      }
    }

    function setupAnimations() {
      const mediaQueryPc = window.matchMedia("(min-width: 577px)");
      const mediaQuerySp = window.matchMedia("(max-width: 576px)");

      function setupAnimationForMvPc() {
        const tl = gsap.timeline();
        gsap.set(["#o-part"], {
          scaleX: 1 / 7.83,
          transformOrigin: "center center",
        });
        gsap.set(["#n-part"], { x: 367.71 });
        gsap.set(["#t-part"], { x: -369.3 });

        tl.to("#n-part", { duration: 1, x: 0, ease: "power1.inOut" }, 0);
        tl.to(
          "#o-part",
          {
            duration: 1,
            scaleX: 1,
            transformOrigin: "center center",
            ease: "power1.inOut",
          },
          0
        );
        tl.to("#t-part", { duration: 1, x: 0, ease: "power1.inOut" }, 0);
        tl.to(
          "#not-svg",
          {
            duration: 0.5,
            filter: "drop-shadow(0px 0px 10px rgba(255, 255, 255, 1))",
            ease: "power1.inOut",
          },
          0
        );
      }

      function setupAnimationForMvSp() {
        const tl = gsap.timeline();
        gsap.set(["#o-part"], {
          scaleX: 1 / 7.83,
          transformOrigin: "center center",
        });
        gsap.set(["#n-part"], { x: 97.71 });
        gsap.set(["#t-part"], { x: -98.3 });

        tl.to("#n-part", { duration: 1, x: 0, ease: "power1.inOut" }, 0);
        tl.to(
          "#o-part",
          {
            duration: 1,
            scaleX: 1,
            transformOrigin: "center center",
            ease: "power1.inOut",
          },
          0
        );
        tl.to("#t-part", { duration: 1, x: 0, ease: "power1.inOut" }, 0);
        tl.to(
          "#not-svg",
          {
            duration: 0.5,
            filter: "drop-shadow(0px 0px 10px rgba(255, 255, 255, 1))",
            ease: "power1.inOut",
          },
          0
        );
      }

      function handleMediaQueryChange() {
        if (mediaQueryPc.matches) {
          setupAnimationForMvPc();
        } else if (mediaQuerySp.matches) {
          setupAnimationForMvSp();
        }
      }

      handleMediaQueryChange();
      mediaQueryPc.addEventListener("change", handleMediaQueryChange);
      mediaQuerySp.addEventListener("change", handleMediaQueryChange);
    }

    if (isLoadingDisplayed) {
      loading.classList.add("is-visible");
      mainContent.classList.remove("is-visible");
      // 各画像の読み込み完了を監視
      images.forEach(function (image) {
        // if (image.loading === "lazy") {
        //   //ここ考える
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
      // loading.style.display = "none";
      // mainContent.style.display = "block";

      if (loading.classList.contains("is-visible")) {
        loading.classList.remove("is-visible");
      }
      mainContent.classList.add("is-visible");
      setupAnimations(); // アニメーションを設定
    }
  } else {
    document.getElementById("js-global-container").classList.add("is-visible");
  }

  //ハンバーガーメニューの制御
  const hamburger = document.querySelector(".js-hamburger");
  const mobileMenu = document.querySelector(".js-mobile-menu");

  if (!hamburger || !mobileMenu) {
    return false;
  } else {
    hamburger.addEventListener("click", function () {
      hamburger.classList.toggle("is-open");
      mobileMenu.classList.toggle("is-show");
    });
  }

  // ハンバーガーメニュー開いている時のスクロールを禁止する
  let state = false;
  let pos;
  $(".js-hamburger").on("click", function () {
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
      // // モーダルが表示されたときに実行
      // document.querySelectorAll("#js-header-svg path").forEach((path) => {
      //   path.setAttribute("fill", "#3F6EB4");
      // });

      // モーダルの前後ボタンのクリックイベントを設定
      document
        .querySelectorAll("[data-micromodal-trigger]")
        .forEach((button) => {
          button.addEventListener("click", function () {
            const targetModalId = this.getAttribute("data-micromodal-trigger"); // 次に開くモーダルID
            const currentModalId = this.closest(".p-modal").id; // 現在開いているモーダルID

            // modal.querySelector('.p-modal__overlay').style.animation = ''; // アニメーションを有効にする

            // 現在のモーダルを閉じる
            MicroModal.close(currentModalId);

            // 次のモーダルを開く
            MicroModal.show(targetModalId);
          });
        });

      if (window.matchMedia("(max-width: 768px)").matches) {
        const tl = gsap.timeline();
        const nPart = Array.from(modal.querySelectorAll(".n-part-modal-pc")); // 配列化
        const oPart = Array.from(modal.querySelectorAll(".o-part-modal-pc"));
        const tPart = Array.from(modal.querySelectorAll(".t-part-modal-pc"));
        const notSvg = Array.from(modal.querySelectorAll(".not-svg-modal-pc"));

        // if (!nPart.length || !oPart.length || !tPart.length || !notSvg.length) {
        //   console.warn("Missing SVG parts in modal:", modal.id); // デバッグ用
        //   return;
        // }

        gsap.set(nPart, {
          x: 288.71,
        });
        gsap.set(tPart, {
          x: -289.3,
        });
        gsap.set(oPart, {
          scaleX: 1 / 7.83,
          transformOrigin: "center center",
        });

        // Nのアニメーション
        tl.to(
          nPart,
          {
            duration: 2,
            x: 0,
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );
        // Tのアニメーション（右へ移動）
        tl.to(
          tPart,
          {
            duration: 2,
            x: 0,
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );
        // Oのアニメーション
        tl.to(
          oPart,
          {
            duration: 2,
            scaleX: 1,
            transformOrigin: "center center",
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );
        // シャドウ
        tl.to(
          notSvg,
          {
            duration: 2,
            filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
            ease: "power1.inOut",
          },
          0
        );
      } else {
        const tl = gsap.timeline();
        const nPart = Array.from(modal.querySelectorAll(".n-part-modal-sp")); // 配列化
        const oPart = Array.from(modal.querySelectorAll(".o-part-modal-sp"));
        const tPart = Array.from(modal.querySelectorAll(".t-part-modal-sp"));
        const notSvg = Array.from(modal.querySelectorAll(".not-svg-modal-sp"));

        // if (!nPart.length || !oPart.length || !tPart.length || !notSvg.length) {
        //   console.warn("Missing SVG parts in modal:", modal.id); // デバッグ用
        //   return;
        // }

        gsap.set(nPart, {
          x: 288.71,
        });
        gsap.set(tPart, {
          x: -289.3,
        });
        gsap.set(oPart, {
          scaleX: 1 / 7.83,
          transformOrigin: "center center",
        });

        // Nのアニメーション
        tl.to(
          nPart,
          {
            duration: 2,
            x: 0,
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );
        // Tのアニメーション（右へ移動）
        tl.to(
          tPart,
          {
            duration: 2,
            x: 0,
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );
        // Oのアニメーション
        tl.to(
          oPart,
          {
            duration: 2,
            scaleX: 1,
            transformOrigin: "center center",
            ease: "power1.inOut",
          },
          0 // 同時に開始
        );
        // シャドウ
        tl.to(
          notSvg,
          {
            duration: 2,
            filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
            ease: "power1.inOut",
          },
          0
        );
      }
    },
    onClose: function (modal) {
      // モーダルが閉じられたときに実行
      document.querySelectorAll("#js-header-svg path").forEach((path) => {
        path.setAttribute("fill", "#FFFFFF");
      });
    },
  });

  // GSAPとScrollTriggerの初期化
  gsap.registerPlugin(ScrollTrigger);

  if (
    $("section").hasClass("p-mv") &&
    window.matchMedia("(min-width:769px)").matches
  ) {
    // // 画像の切り替えとスクロールに合わせての固定
    // const images = document.querySelectorAll(".js-image");
    // const contents = document.querySelectorAll(".js-content");

    // // 各js-imageの表示状態を管理するためにフェードイン・アウトのアニメーションを設定
    // images.forEach((image, index) => {
    //   gsap.to(image, {
    //     scrollTrigger: {
    //       trigger: contents[index], // 各js-contentに対応するjs-imageを表示
    //       start: "top center", // コンテンツが画面の中央に来るとき
    //       end: "bottom top", // js-contentが画面から消えるとき
    //       toggleActions: "play none none reverse", // スクロールに合わせてアニメーション
    //     },
    //     opacity: 1,
    //     zIndex: 1, // 表示されているjs-imageを最前面に
    //     duration: 0.3, // フェードインの時間
    //   });
    // });

    // // js-imagesを固定しておく設定
    // gsap.to(".js-images", {
    //   scrollTrigger: {
    //     trigger: ".js-images", // js-imagesが含まれる親要素をトリガー
    //     pin: true, // スクロールしても固定
    //     start: "center center",
    //     end: () =>
    //       "+=" +
    //       (document.querySelector(".js-contents").offsetHeight -
    //         document.querySelector(".js-content").offsetHeight),
    //     scrub: true, // スクロールと同期
    //   },
    // });

    // 要素が重なっていくパララックス
    const staffImages = document.querySelectorAll(".js-image");
    const contentsHeight = document.querySelector(".js-contents").offsetHeight;
    const contentHeight = document.querySelector(".js-content").offsetHeight;

    staffImages.forEach((staffImage) => {
      const pin = staffImage.querySelector(".js-pin");
      // const height = staffImage.getBoundingClientRect().height;
      const parent = document.querySelector(".p-staff__employeesImages");
      // const width = parent.offsetWidth;
      // const contentsHeight = document.querySelector(".js-contents").offsetHeight;
      // const contentHeight = document.querySelector(".js-content").offsetHeight;

      const setDimensions = () => {
        const pin = staffImage.querySelector(".js-pin");
        const height = staffImage.getBoundingClientRect().height;
        const width = parent.offsetWidth;

        console.log("Updating dimensions:", { height, width });

        gsap.set(pin, {
          height: height,
          width: width,
          // overwrite: true,
        });

        // pin.style.width = `${width}px`;
        // pin.style.height = `${height}px`;
        pin.style.setProperty("width", `${width}px`, "important");
        pin.style.setProperty("height", `${height}px`, "important");

        // ScrollTrigger をリフレッシュして新しい高さを反映
        ScrollTrigger.refresh();
      };

      // 初期設定を実行
      setDimensions();

      // ウィンドウリサイズ時に再設定
      window.addEventListener("resize", setDimensions);

      // デバウンス付きのリサイズイベント
      // let resizeTimeout;
      // window.addEventListener("resize", () => {
      //     clearTimeout(resizeTimeout);
      //     resizeTimeout = setTimeout(() => {
      //         setDimensions();
      //         ScrollTrigger.refresh(); // ScrollTrigger の状態を更新
      //     }, 200);
      // });

      // const endValue = index === staffImages.length - 1 ? 0 : `+=${height}`;

      // console.log(staffImages.length);
      // console.log(index);

      // console.log(staffImage.offsetHeight);
      // console.log(parent.offsetHeight);
      // console.log(height);

      // console.log(endHeight);

      ScrollTrigger.create({
        trigger: staffImage,
        start: "top top",
        // end: `+=${height * 6}`,
        // end: endValue,
        // end: `+=${height}`,
        end: () => `+=${staffImage.getBoundingClientRect().height}`, // 動的に高さを計算
        // end:
        // end: "top top",
        // end: () => parent.offsetHeight, // 親要素の高さを基準に設定
        // end: () =>
        //   "+=" +
        //   (contentsHeight.offsetHeight -
        //     contentHeight.offsetHeight),
        markers: true,
        scrub: true,
        // pin: staffImage.querySelector(".js-pin"), // 動的に pin を取得
        pin: pin,
        // pin: true,
        pinSpacing: false,
        // onEnter: () => {
        //   gsap.set(pin, {
        //     position: "fixed",
        //     top: "auto",
        //     bottom: 0,
        //     left: 0,
        //     width: width,
        //   });
        // },
        // // onUpdate: (self) => {
        // //   if (self.progress >= 5) {
        // //     gsap.set(pin, {
        // //       position: "absolute",
        // //       // top: `${height}px`,
        // //       top: "0",
        // //       left: "0",
        // //     });
        // //   }
        // //   // else if (self.progress === 0) {
        // //   //   // スクロールが元に戻った場合に位置をリセット
        // //   //   gsap.set(pin, {
        // //   //     // position: "absolute",
        // //   //     // top: "0",
        // //   //     // left: "0",
        // //   //     position: "fixed",
        // //   //   top: "0",
        // //   //   // bottom: 0,
        // //   //   left: "0",
        // //   //   });
        // //   // }
        // // },

        // // onLeave: () => {
        // //   gsap.set(pin, {
        // //     position: "absolute",
        // //     top: "auto",
        // //     bottom: 0,
        // //     left: 0,
        // //   });
        // // },

        // onLeaveBack: () => {
        //   gsap.set(pin, {
        //     position: "absolute",
        //     top: 0,
        //     bottom: "auto",
        //     left: 0,
        //   });
        // },
      });
    });
  }

  // const mediaQueryPc = window.matchMedia("(min-width: 769px)");
  // const mediaQuerySp = window.matchMedia("(max-width: 768px)");

  // function setupAnimationForContent01Pc() {
  //   // スクロールすると発火するNOTアニメーション（content 01)
  //   gsap.utils.toArray(".js-not").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     // gsap.set([".o-part-staff"], {
  //     //   scaleX: 1 / 7.83,
  //     //   transformOrigin: "center center",
  //     // });
  //     // gsap.set([".n-part-staff"], {
  //     //   x: 227.71,
  //     // });
  //     // gsap.set([".t-part-staff"], {
  //     //   x: -229.3,
  //     // });

  //     // Nのアニメーション（左へ移動）
  //     tl.to(
  //       ".n-part-staff",
  //       {
  //         duration: 0,
  //         x: 227.71, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0
  //     ).to(
  //       ".n-part-staff",
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     ); // すべて同時に開始

  //     // Oのアニメーション（左右に広がる）
  //     tl.to(
  //       ".o-part-staff",
  //       {
  //         duration: 0, // 横幅の拡大（scaleX）は3秒で行う
  //         // scaleX: (1 / 4.2), // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         scaleX: 1 / 7.83,
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     ).to(
  //       ".o-part-staff",
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     // Tのアニメーション（右へ移動）
  //     tl.to(
  //       ".t-part-staff",
  //       {
  //         duration: 0,
  //         x: -229.3,
  //         ease: "power1.inOut",
  //       },
  //       0
  //     ).to(
  //       ".t-part-staff",
  //       {
  //         duration: 1,
  //         x: 0,
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       ".not-svg-staff",
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );
  //   });
  // }
  // function setupAnimationForContent01Sp() {
  //   gsap.utils.toArray(".js-not-sp").forEach((notEffect) => {
  //     const oPart = notEffect.querySelector(".o-part-staff-sp");
  //     const nPart = notEffect.querySelector(".n-part-staff-sp");
  //     const tPart = notEffect.querySelector(".t-part-staff-sp");
  //     const svg = notEffect.querySelector(".not-svg-staff-sp");

  //     // console.log("oPart:", oPart);
  //     // console.log("nPart:", nPart);
  //     // console.log("tPart:", tPart);
  //     // console.log("svg:", svg);

  //     // if (!oPart || !nPart || !tPart || !svg) {
  //     //   console.warn("One or more elements are missing");
  //     //   return;
  //     // }

  //     gsap.set([oPart], { scaleX: 1 / 7.83, transformOrigin: "center center" });
  //     gsap.set([nPart], { x: 227.71 });
  //     gsap.set([tPart], { x: -229.3 });

  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect,
  //         start: "top center",
  //         once: true,
  //         markers: true, // ScrollTriggerが作動しているか確認
  //       },
  //     });

  //     // Nのアニメーション
  //     tl.to(nPart, { duration: 1, x: 0, ease: "power1.inOut" }, 0);
  //     // Oのアニメーション
  //     tl.to(oPart, { duration: 1, scaleX: 1, ease: "power1.inOut" }, 0);
  //     // Tのアニメーション
  //     tl.to(tPart, { duration: 1, x: 0, ease: "power1.inOut" }, 0);
  //     // SVGの影のアニメーション
  //     tl.to(
  //       svg,
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );
  //   });
  // }

  // function setupAnimationForContent02Pc() {
  //   // スクロールすると発火するNOTアニメーション(content 02)
  //   gsap.utils.toArray(".js-not-features-normal").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     gsap.set([".o-part.is-features"], {
  //       scaleX: 1 / 7.83,
  //       transformOrigin: "center center",
  //     });
  //     gsap.set([".n-part.is-features"], {
  //       x: 215.71,
  //     });
  //     gsap.set([".t-part.is-features"], {
  //       x: -217.3,
  //     });

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       notEffect.querySelector(".js-not-svg.is-content"),
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );

  //     tl.to(
  //       notEffect.querySelector(".o-part.is-features"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".n-part.is-features"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     ); // すべて同時に開始

  //     tl.to(
  //       notEffect.querySelector(".t-part.is-features"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 右へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );
  //   });
  // }
  // function setupAnimationForContent02Sp() {
  //   gsap.utils.toArray(".js-not-features-normal").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     gsap.set([".o-part.is-features-sp"], {
  //       scaleX: 1 / 7.83,
  //       transformOrigin: "center center",
  //     });
  //     gsap.set([".n-part.is-features-sp"], {
  //       x: 125.71,
  //     });
  //     gsap.set([".t-part.is-features-sp"], {
  //       x: -127.3,
  //     });

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       notEffect.querySelector(".js-not-svg.is-features-sp"),
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );

  //     tl.to(
  //       notEffect.querySelector(".o-part.is-features-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".n-part.is-features-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     ); // すべて同時に開始

  //     tl.to(
  //       notEffect.querySelector(".t-part.is-features-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 右へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );
  //   });
  // }

  // function setupAnimationForContent02LargePc() {
  //   // スクロールすると発火するNOTアニメーション(content 02)
  //   gsap.utils.toArray(".js-not-features-large").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     gsap.set([".o-part.is-content-large"], {
  //       scaleX: 1 / 7.83,
  //       transformOrigin: "center center",
  //     });
  //     gsap.set([".n-part.is-content-large"], {
  //       x: 288.71,
  //     });
  //     gsap.set([".t-part.is-content-large"], {
  //       x: -289.3,
  //     });

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       notEffect.querySelector(".js-not-svg.is-content"),
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );

  //     tl.to(
  //       notEffect.querySelector(".o-part.is-content-large"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".n-part.is-content-large"),
  //       {
  //         duration: 1,
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     ); // すべて同時に開始

  //     tl.to(
  //       notEffect.querySelector(".t-part.is-content-large"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 右へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );
  //   });
  // }
  // function setupAnimationForContent02LargeSp() {
  //   gsap.utils.toArray(".js-not-features-large").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     gsap.set([".o-part.is-content-large-sp"], {
  //       scaleX: 1 / 7.83,
  //       transformOrigin: "center center",
  //     });
  //     gsap.set([".n-part.is-content-large-sp"], {
  //       x: 125.71,
  //     });
  //     gsap.set([".t-part.is-content-large-sp"], {
  //       x: -127.3,
  //     });

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       notEffect.querySelector(".js-not-svg.is-content-large-sp"),
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );

  //     tl.to(
  //       notEffect.querySelector(".o-part.is-content-large-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".n-part.is-content-large-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     ); // すべて同時に開始

  //     tl.to(
  //       notEffect.querySelector(".t-part.is-content-large-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 右へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );
  //   });
  // }

  // function setupAnimationForContent02SmallPc() {
  //   // スクロールすると発火するNOTアニメーション(content 02)
  //   gsap.utils.toArray(".js-not-features-small").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         // once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     gsap.set([".o-part.is-content-small"], {
  //       scaleX: 1 / 7.83,
  //       transformOrigin: "center center",
  //     });
  //     gsap.set([".n-part.is-content-small"], {
  //       x: 97.71,
  //     });
  //     gsap.set([".t-part.is-content-small"], {
  //       x: -98.3,
  //     });

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       notEffect.querySelector(".js-not-svg.is-content"),
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );

  //     tl.to(
  //       notEffect.querySelector(".o-part.is-content-small"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".n-part.is-content-small"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".t-part.is-content-small"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 右へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );
  //   });
  // }
  // function setupAnimationForContent02SmallSp() {
  //   gsap.utils.toArray(".js-not-features-small").forEach((notEffect) => {
  //     // アニメーションのタイムラインを作成
  //     const tl = gsap.timeline({
  //       scrollTrigger: {
  //         trigger: notEffect, // 個別のトリガー要素を指定
  //         start: "top center",
  //         // once: true,
  //         markers: true, // デバッグ用
  //       },
  //     });

  //     gsap.set([".o-part.is-content-small-sp"], {
  //       scaleX: 1 / 7.83,
  //       transformOrigin: "center center",
  //     });
  //     gsap.set([".n-part.is-content-small-sp"], {
  //       x: 125.71,
  //     });
  //     gsap.set([".t-part.is-content-small-sp"], {
  //       x: -127.3,
  //     });

  //     // SVG全体にdrop-shadowを適用して影を徐々に強くする
  //     tl.to(
  //       notEffect.querySelector(".js-not-svg.is-content-small-sp"),
  //       {
  //         duration: 1,
  //         filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
  //         ease: "power1.inOut",
  //       },
  //       0
  //     );

  //     tl.to(
  //       notEffect.querySelector(".o-part.is-content-small-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         scaleX: 1, // 横幅を拡大（611.34 / 107.87 ≈ 5.66）
  //         transformOrigin: "center center", // 中心を基準に拡大
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".n-part.is-content-small-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 左へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );

  //     tl.to(
  //       notEffect.querySelector(".t-part.is-content-small-sp"),
  //       {
  //         duration: 1, // 横幅の拡大（scaleX）は3秒で行う
  //         x: 0, // 右へ移動
  //         ease: "power1.inOut",
  //       },
  //       0 // 同時に開始
  //     );
  //   });
  // }

  // function handleMediaQueryChange() {
  //   if (mediaQueryPc.matches) {
  //     setupAnimationForContent01Pc();
  //     setupAnimationForContent02Pc();
  //     setupAnimationForContent02LargePc();
  //     setupAnimationForContent02SmallPc();
  //   } else if (mediaQuerySp.matches) {
  //     setupAnimationForContent01Sp();
  //     setupAnimationForContent02Sp();
  //     setupAnimationForContent02LargeSp();
  //     setupAnimationForContent02SmallSp();
  //   }
  // }

  // // 初回チェック
  // handleMediaQueryChange();

  // // メディアクエリが変化したときにリスナーをトリガー
  // mediaQueryPc.addEventListener("change", handleMediaQueryChange);
  // mediaQuerySp.addEventListener("change", handleMediaQueryChange);

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
          filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
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
      markers: true,
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
    label.style.display = "block"; // ラベルを表示
    label.style.opacity = "1";
    label.style.transition = "opacity 0.5s ease";

    // label.style.transform = "translateY(0)";

    // コンテナにis-activeクラスを追加
    if (container) {
      container.offsetHeight; // 再描画をトリガー
      container.classList.add("is-active");
    }

    setTimeout(() => {
      // ラベルのopacityを徐々に0にする
      label.style.opacity = "0";

      setTimeout(() => {
        label.style.display = "none"; // 非表示
      }, 500);
    }, 1000);

    // コンテナからis-activeクラスを即座に削除
    setTimeout(() => {
      if (container) {
        container.classList.remove("is-active");
      }
    }, 1500); // アニメーションが終わったタイミングで削除
  };

  // Intersection Observerの設定
  const observerOptions = {
    root: null, // ビューポートを基準
    rootMargin: "0px",
    threshold: 0.5, // 50%見えたらトリガー
    // rootMargin: "-50% 0px 0px 0px", // ビューポートの中心と揃える
    // threshold: 0,
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
gsap.utils.toArray(".c-not").forEach((not) => {
  gsap.to(not, {
    width: "100%",
    filter: "drop-shadow(0px 0px 22.68px rgba(255, 255, 255, 1))",
    ease: "power2.out",
    scrollTrigger: {
      trigger: not,
      start: "top 60%",
      end: "top 30%",
      scrub: true,
    },
  });
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

// スクロールと連動してバーを
// スクルールに合わせて実装する gsapのscrb trueとかで！

// 100vhで　上下余白なしで
// ３枚目　右に余白ある！
// ローディングは最初だけ！！　Topページでも！　それ以降は表示しない！

// インタビューページ
// 高卒の工場勤務とかは実際に表示しとく？
// 確認するから待ってて

// guidelinesのレスポンシブはちょっと待って、ミスt

// swiperのドットはいらない、消す！！
//

// meta情報は後で、テストアップの情報も後で

// 新規案件
// マルチサイト
// ３サイトを一つのWordPressで作る
// 2月28日公開
// 1月20日から2月3日ででもサイトを順次上げていく
