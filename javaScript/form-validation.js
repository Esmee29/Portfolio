// References to the form fields and submit button //
const firstNameInput = document.getElementById('first-name');
const lastNameInput = document.getElementById('last-name');
const emailInput = document.getElementById('email');
const phoneInput = document.getElementById('phone');
const subjectInput = document.getElementById('subject');
const messageInput = document.getElementById('message');
const submitButton = document.getElementById('submit-btn');

// Add event listener to the submit button //
submitButton.addEventListener('click', function(event) {
  // Prevent form submission //
  event.preventDefault();

  // Validate first name (at least 2 characters) //
  const firstName = firstNameInput.value;
  if (firstName.length < 2) {
    alert('Please enter a first name with at least 2 characters');
    return;
  }

  // Validate last name (at least 2 characters) //
  const lastName = lastNameInput.value;
  if (lastName.length < 2) {
    alert('Please enter a last name with at least 2 characters');
    return;
  }

  // Validate email (format: xxx@xxx.xxx) //
  const email = emailInput.value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;;
  if (!emailRegex.test(email)) {
    alert('Please enter a valid email address');
    return;
  }

  // Optional validations
  // Validate phone number (exactly 11 digits), if provided //
  const phoneNumber = phoneInput.value;
  if (phoneNumber.length > 0 && !/^\d{11}$/.test(phoneNumber)) {
    alert('Please enter a valid phone number');
    return;
  }

  // Validate subject (any characters), if provided //
  const subject = subjectInput.value;
  if (subject.length > 0 && subject.length < 5) {
    alert('Please enter a subject with at least 5 characters');
    return;
  }

  // Validate message (any characters), if provided //
  const message = messageInput.value;
  if (message.length > 0 && message.length < 10) {
    alert('Please enter a message with at least 10 characters');
    return;
  }

  // If all validations pass, submit the form //
  alert('Form submitted successfully!');
});