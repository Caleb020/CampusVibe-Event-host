// GET HTML ELEMENTS
const searchInput = document.getElementById("searchInput");
const categoryFilter = document.getElementById("categoryFilter");
const eventCards = document.querySelectorAll(".event-card");
const noEvents = document.getElementById("noEvents");


// SEARCH AND FILTER EVENTS
function filterEvents() {

    const searchText = searchInput.value.toLowerCase();
    const selectedCategory = categoryFilter.value;

    let visibleEvents = 0;

    eventCards.forEach(function(card) {

        const eventName = card.querySelector("h3").textContent.toLowerCase();

        const category = card.dataset.category;

        const matchesSearch = eventName.includes(searchText);

        const matchesCategory =
            selectedCategory === "all" || category === selectedCategory;

        if (matchesSearch && matchesCategory) {

            card.style.display = "block";
            visibleEvents++;

        } else {

            card.style.display = "none";

        }

    });

    noEvents.style.display = visibleEvents === 0 ? "block" : "none";

}


// Listen for search and filter changes
searchInput.addEventListener("input", filterEvents);

categoryFilter.addEventListener("change", filterEvents);


// REGISTRATION MODAL
const modal = document.getElementById("registrationModal");
const closeModal = document.getElementById("closeModal");
const selectedEvent = document.getElementById("selectedEvent");
const eventName = document.getElementById("eventName");


// Open registration form
document.querySelectorAll(".rsvp-btn").forEach(function(button) {

    button.addEventListener("click", function() {

        const name = button.dataset.event;

        selectedEvent.textContent = "Registering for: " + name;

        eventName.value = name;

        modal.style.display = "flex";

    });

});


// Close registration form
closeModal.addEventListener("click", function() {

    modal.style.display = "none";

});


// Close modal when clicking outside it
window.addEventListener("click", function(event) {

    if (event.target === modal) {

        modal.style.display = "none";

    }

});


// EVENT REGISTRATION
const registrationForm = document.getElementById("registrationForm");
const registrationMessage = document.getElementById("registrationMessage");

registrationForm.addEventListener("submit", function(event) {

    event.preventDefault();

    const formData = new FormData(registrationForm);

    fetch("register.php", {

        method: "POST",
        body: formData

    })

    .then(response => response.json())

    .then(data => {

        registrationMessage.textContent = data.message;

        registrationMessage.style.color =
            data.success ? "green" : "red";

        if (data.success) {

            registrationForm.reset();

            setTimeout(function() {

                modal.style.display = "none";
                registrationMessage.textContent = "";

            }, 2000);

        }

    })

    .catch(function() {

        registrationMessage.textContent = "Something went wrong. Please try again.";

        registrationMessage.style.color = "red";

    });

});


// CONTACT FORM
const contactForm = document.getElementById("contactForm");
const contactMessage = document.getElementById("contactMessage");

contactForm.addEventListener("submit", function(event) {

    event.preventDefault();

    const formData = new FormData(contactForm);

    fetch("contact.php", {

        method: "POST",
        body: formData

    })

    .then(response => response.json())

    .then(data => {

        contactMessage.textContent = data.message;

        contactMessage.style.color =
            data.success ? "green" : "red";

        if (data.success) {

            contactForm.reset();

        }

    })

    .catch(function() {

        contactMessage.textContent = "Something went wrong. Please try again.";

        contactMessage.style.color = "red";

    });

});