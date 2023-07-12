document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get the values from the input fields
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
  
    // Perform validation
    if (username === 'admin' && password === 'password') {
      showNotification('Success!', 'Login successful', 'success');
    } else {
      showNotification('Error!', 'Invalid username or password', 'error');
    }
  });
  
  function showNotification(title, message, type) {
    var notification = document.createElement('div');
    notification.className = 'notification ' + type;
    notification.innerHTML = '<h3>' + title + '</h3><p>' + message + '</p>';
  
    document.body.appendChild(notification);
  
    setTimeout(function() {
      notification.remove();
    }, 3000);
  }
  