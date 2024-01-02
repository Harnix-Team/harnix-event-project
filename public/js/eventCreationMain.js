/**
 * @author Valeryio
 * 
 * This code is about the event creation process
 */

let processButton = document.querySelectorAll(".step_box");
let eventCreationSections = document.querySelectorAll(".event_step");

console.log(processButton);
console.log(eventCreationSections);

/**
 * This loop makes the three sections that follows the first one
 * disappear
 */

resetBoxProperty(eventCreationSections, 1);


/**
 * This loop is used to switch section when we complete a
 * step of informations submission
 */

for (let i = 0; i < eventCreationSections.length; i++)
{
    let changeSectionButton = eventCreationSections[i].lastElementChild;

    changeSectionButton.addEventListener("click", (e) =>
    {
        eventCreationSections[i].style.display = "none";
        processButton[i].classList.remove("step_box__active");
        processButton[i + 1].classList.add("step_box__active");

        eventCreationSections[i + 1].style.display = "flex";
    })

}

/**
 * This loop is used to show a specific section when a processButton is
 * clicked!
 *
*//*
for (let i = 0; i < processButton.length; i++)
{
    processButton[i].addEventListener( "click", (e) =>
    {    
        resetBoxClass(processButton, "step_box__active");
        processButton[i].classList.add("step_box__active");

        resetBoxProperty(eventCreationSections);
        eventCreationSections[i].style.display = "flex";
    });
}*/



let createTicketButton = document.querySelector(".adding_ticket__button");

// console.log(createTicketButton);
createTicketButton.addEventListener("click", (e) =>
{
    // Getting the ticket container, in which each ticket will be appended
    let ticket_container = document.querySelector(".event_info__ticket_model");

    /**
     * On this line, you get all the HTMLElement from which the value
     * will be sent, once the user want to create an element
     */
    let ticket_name = document.querySelector(".nom_ticket");
    let ticket_price = document.querySelector(".prix_ticket");
    let ticket_number = document.querySelector(".ticket_number");
    let ticket_description = document.querySelector(".ticket_description");
    

    /**
     * You have here, all the different HTMLElement thath will create the
     * next button
     */

    // ...

    // Création des éléments de formulaire pour représenter le ticket
    let ticket_box = document.createElement("div");
    let ticket_type_and_price = document.createElement("div");
    let ticket_name_input = document.createElement("input");
    let ticket_price_input = document.createElement("input");
    let ticket_number_input = document.createElement("input");
    let ticket_description_input = document.createElement("input");


    // Ajout de classes CSS aux éléments créés
    ticket_box.classList.add("ticket");
    ticket_type_and_price.classList.add("ticket__price_and_type");
    ticket_name_input.classList.add("ticket__type");
    ticket_price_input.classList.add("ticket__price");
    ticket_number_input.classList.add("ticket__number");
    ticket_description_input.classList = document.createElement("ticket__number");


    // Définition des attributs des éléments de formulaire
    ticket_name_input.type = "text";
    ticket_price_input.type = "number";
    ticket_number_input.type = "number";
    ticket_description_input.type = "hidden";

    // Attribution des valeurs aux éléments créés
    ticket_name_input.name = "ticket_names[]";  // Utilisez des crochets pour indiquer un tableau côté serveur
    ticket_name_input.value = "Ticket " + ticket_name.value;

    ticket_price_input.name = "ticket_prices[]";
    ticket_price_input.value = ticket_price.value;

    ticket_number_input.name = "ticket_numbers[]";
    ticket_number_input.value = ticket_number.value;

    ticket_description_input.name = "ticket_description[]";
    ticket_description_input.value = ticket_description.value;

    // Construction de la structure du ticket
    ticket_type_and_price.appendChild(ticket_name_input);
    ticket_type_and_price.appendChild(ticket_price_input);
    ticket_type_and_price.appendChild(ticket_description_input);

    ticket_box.appendChild(ticket_type_and_price);
    ticket_box.appendChild(ticket_number_input);

    // Ajout du nouveau ticket au conteneur
    ticket_container.appendChild(ticket_box);

    // Affichage des valeurs dans la console (facultatif)
    console.log("Ticket Name: " + ticket_name.value);
    console.log("Ticket Price: " + ticket_price.value);
    console.log("Ticket Number: " + ticket_number.value);

    // ...

});