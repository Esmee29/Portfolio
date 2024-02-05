//Header text//
const headerElement = document.querySelector("#header1");
const subHeaderElement = document.querySelector("#header2")

console.log(headerElement.classList); //h1
function typingEffect(element, speed)
{
    const text = element.innerText.split("");

    element.innerText = "";

    text.forEach((character, index) => {
        setTimeout(() => { // loop is repeating whatever the speed variable is set to.
            element.innerHTML += character; // adds each character from the element one at a time to the inner header text.
        }, index * speed);
        
    });
}

typingEffect(headerElement, 200); 

if (subHeaderElement !== null) //for the h2//
{
    typingEffect(subHeaderElement, 200);
}