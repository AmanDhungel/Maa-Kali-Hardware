const searchForm = document.querySelector(".search-form");
const searchInput = document.querySelector(".search-input");

searchForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const searchTerm = searchInput.value;

  // Perform search here (e.g. using an API call or a search function)
  console.log(`Searching for "${searchTerm}"...`);
});

const serviceCards = document.querySelectorAll(".service-card");

serviceCards.forEach((serviceCard) => {
  serviceCard.addEventListener("mouseenter", (event) => {
    serviceCard.style.transform = "scale(1.1)";
  });
  serviceCard.addEventListener("mouseleave", (event) => {
    serviceCard.style.transform = "scale(1)";
  });
});
