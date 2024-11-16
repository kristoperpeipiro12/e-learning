const modal = document.getElementById("modal");
const openModal = document.getElementById("openModal");
const closeModal = document.getElementById("closeModal");

// Open modal
openModal.addEventListener("click", () => {
    modal.classList.add("show");
});

// Close modal
closeModal.addEventListener("click", () => {
    modal.classList.remove("show");
});

// Close modal when clicking outside
modal.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.classList.remove("show");
    }
});
