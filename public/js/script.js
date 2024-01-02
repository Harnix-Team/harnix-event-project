
/**
 * This function is used to switch the displayed section in an HTML code
 * So, with this function, between three HTML sections, you can choose to
 * display, only one of them on the HTML page!
 * 
 * @param {HTMLElement} firstSectionDisabled 
 * @param {HTMLElement} secondSectionDisabled 
 * @param {HTMLElement} sectionEnabled 
 * 
 * @author Valeryio
 */

function switchSection(firstSectionDisabled, secondSectionDisabled, sectionEnabled)
{
    desactive(firstSectionDisabled);
    desactive(secondSectionDisabled);
    active(sectionEnabled);
}


/**
 * This function is used to active a section. That means that you can
 * make it disappear from the HTML DOM.
 * 
 * @param {HTMLElement} sectionToactive
 * 
 * @author Valeryio
 */

function active(sectionToactive)
{
    sectionToactive.classList.remove("bl-no-active");
    sectionToactive.classList.add("bl-active");
}


/** 
 * This function is used to active a section. That means that you can
 * make it disappear from the HTML DOM.
 * 
 * @param {HTMLElement} sectionTodesactive 
 *
 * @author Valeryio
 */

function desactive(sectionTodesactive)
{
    sectionTodesactive.classList.remove("bl-active");
    sectionTodesactive.classList.add("bl-no-active");
}


/**
 * This function makes all the child of the HTMLElement disappear
 * from the DOM.
 * @param {HTMLElement} box 
 * @param {number} index 
 */

function resetBoxProperty(box, index = 0, s = 10)
{
    for( let i = index; i < box.length; i++)
    {
            box[i].style.display = "none";
    }
}


/**
 * This function remove a property from all the childs of one
 * HTML Element.
 * @param {HTMLElement} box 
 * @param {string} property 
 */

function resetBoxClass(box, property)
{
    for (let i = 0; i < box.length; i++)
    {
        box[i].classList.remove(property);
    }
}
