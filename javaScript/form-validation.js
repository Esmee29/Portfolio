document.addEventListener('DOMContentLoaded', function() {
  // References to the form fields and submit button //
  const form = document.getElementById('form');
  const validationMsgContainer = document.querySelector('.validation-msg-container');

  // Add event listener to the form submit event //
  form.addEventListener('submit', function(event) {
      // Clear previous validation messages //
      validationMsgContainer.innerHTML = '';
  
      // Validate name (at least 2 characters)
      const FirstNameInput = document.getElementById('first-name');
      const FirstName = nameInput.value.trim();
      if (FirstName.length < 2) {
          displayValidationMessage('Please enter a value into  first name.', 'alert-error');
          event.preventDefault(); // Prevent form submission if there are errors
      }
      // Validate name (at least 2 characters)
      const LastNameInput = document.getElementById('name');
      const LastName = nameInput.value.trim();
      if (LastName.length < 2) {
          displayValidationMessage('Please enter a value into last name.', 'alert-error');
          event.preventDefault(); // Prevent form submission if there are errors
      }
  
      // Validate email (format: xxx@xxx.xxx)
      const emailInput = document.getElementById('email');
      const email = emailInput.value.trim();
      const emailRegex = /^[^\s@]+([-][^\s@]+)?@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
          displayValidationMessage('Please enter a valid email address', 'alert-error');
          event.preventDefault(); // Prevent form submission if there are errors
      }

      // Validate subject (at least 3 characters)
      const subjectInput = document.getElementById('subject');
      const subject = messageInput.value.trim();
      if (subject.length < 3) {
          displayValidationMessage('Please enter a message with at least 10 characters', 'alert-error');
          event.preventDefault(); // Prevent form submission if there are errors
      }

      // Validate message (at least 10 characters)
      const messageInput = document.getElementById('message');
      const message = messageInput.value.trim();
      if (message.length < 10) {
          displayValidationMessage('Please enter a message with at least 10 characters', 'alert-error');
          event.preventDefault(); // Prevent form submission if there are errors
      }
  
      // If no validation errors, display success message //
      if (validationMsgContainer.children.length === 0) {
          displayValidationMessage('Your Enquiry has been Submitted', 'alert-success');
      }
  });

  // Function to display validation messages //
  function displayValidationMessage(message, className) {
      const validationMsgBox = document.createElement('div');
      validationMsgBox.classList.add('validation-msg', className);
  
      const msgText = document.createTextNode(message);
      validationMsgBox.appendChild(msgText);
  
      const closeBtn = document.createElement('span');
      closeBtn.classList.add('close-btn');
      closeBtn.innerHTML = '&times;';
      closeBtn.addEventListener('click', function() {
          validationMsgBox.remove(); // Remove the message box when close button is clicked
      });
      validationMsgBox.appendChild(closeBtn);
  
      validationMsgContainer.appendChild(validationMsgBox);
  }
});
