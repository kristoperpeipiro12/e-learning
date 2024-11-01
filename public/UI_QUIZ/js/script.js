document.addEventListener("DOMContentLoaded", function () {
  let pauseMenu = document.getElementById("pause-menu");
  if (pauseMenu) {
    let popUpContainer = document.getElementById("pop-up-container");
    let blackAreaPause = document.getElementById("black-area-pause");
    let popUpMenu = document.getElementById("pop-up-menu");
    let xPauseMenu = document.getElementById("x-pause-menu");
    pauseMenu.addEventListener("click", function () {
      blackAreaPause.style.display = "flex";
      popUpMenu.style.display = "flex";
      popUpContainer.style.display = "flex";
    });

    xPauseMenu.addEventListener("click", function () {
      popUpMenu.style.display = "none";
      blackAreaPause.style.display = "none";
      popUpContainer.style.display = "none";
    });

    blackAreaPause.addEventListener("click", function () {
      popUpMenu.style.display = "none";
      blackAreaPause.style.display = "none";
      popUpContainer.style.display = "none";
    });
  }

  let lanjutMenu = document.getElementById("lanjut-menu");
  let pengaturanMenu = document.getElementById("pengaturan-menu");
  let keluarMenu = document.getElementById("keluar-menu");
  if (lanjutMenu && pengaturanMenu && keluarMenu) {
    // tindakan untuk menu Pause
  }

  let playQuiz = document.getElementById("btn-play-quiz");
  let leaveQuiz = document.getElementById("btn-leave-quiz");
  if (playQuiz && leaveQuiz) {
    playQuiz.addEventListener("click", function () {
      const audio = document.querySelector("audio");
      audio.muted = false;
      audio.play().catch((error) => {
        console.log("Autoplay dibatasi oleh browser:", error);
      });
      let bgMainContent = document.getElementById("bg-main-content");
      let nicknameContainer = document.getElementById("nickname-container");
      let mainContentCustom = document.getElementById("main-content-custom");
      bgMainContent.style.display = "flex";
      nicknameContainer.style.display = "flex";
      mainContentCustom.style.paddingTop = "0px";
    });
  }

  let mainMenuCustom = document.getElementById("pop-up-menu");
  if (mainMenuCustom) {
    // console.log(mainMenuCustom.clientWidth);
    // let tinggiMenuPause = mainMenuCustom.clientHeight;
    // let lebarMenuPause = mainMenuCustom.clientWidth;
    // let bgPause = document.getElementById("bg-pause");
    // let pauseVideo = document.getElementById("pause-video");
    // bgPause.style.height = tinggiMenuPause;
    // bgPause.style.width = lebarMenuPause;
  }

  // window.addEventListener("load", function () {
  //   const audio = document.querySelector("audio");
  //   audio.muted = false;
  //   audio.play().catch((error) => {
  //     console.log("Autoplay dibatasi oleh browser:", error);
  //   });
  // });
});
