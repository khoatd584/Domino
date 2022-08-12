const buyBtns = document.querySelectorAll(".js-buy-ticket");
const modal = document.querySelector(".js-modal");
const modalContainer = document.querySelector(".js-modal-conteiner");
const modalClose = document.querySelector(".js-modal-close");

function showBuyTickets() {
  modal.classList.add("open");
}

function hideBuyTickets() {
  modal.classList.remove("open");
}

for (const buyBtn of buyBtns) {
  buyBtn.addEventListener("click", showBuyTickets);
}

modalClose.addEventListener("click", hideBuyTickets);
modal.addEventListener("click", hideBuyTickets);
modalContainer.addEventListener("click", function (event) {
  event.stopPropagation();
});

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$(".tab");
const contents = $$(".ctx");

tabs.forEach((tab, index) => {
  const content = contents[index];
  tab.onclick = function () {
    $(".tab.active").classList.remove("active");
    $(".ctx.activeC").classList.remove("activeC");
    this.classList.add("active");
    content.classList.add("activeC");
  };
});
