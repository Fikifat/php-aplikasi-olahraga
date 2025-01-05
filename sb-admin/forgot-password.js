document.addEventListener('DOMContentLoaded', function() {
    const forgotPasswordButton = document.getElementById('forgotPasswordButton');
    const backToLoginButton = document.getElementById('backToLoginButton');

    if (forgotPasswordButton) {
        forgotPasswordButton.addEventListener('click', function() {
            const email = document.getElementById('forgotPasswordEmail').value;
            if (email) {
                // Make an API call to handle the forgot password request
                fetch('/api/forgot-password', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ email: email })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Password reset email has been sent.');
                        // Optionally redirect back to login page
                        window.location.href = 'login.php';
                    } else {
                        alert('Error: ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred. Please try again later.');
                });
            } else {
                alert('Please enter your email address.');
            }
        });
    }

    if (backToLoginButton) {
        backToLoginButton.addEventListener('click', function() {
            // Redirect back to login page
            window.location.href = 'login.php';
        });
    }
});