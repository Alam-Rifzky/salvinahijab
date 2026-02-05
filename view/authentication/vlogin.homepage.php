<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Salvina Hijab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4">Login</h3>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="auth[username]" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="auth[password]" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Captcha</label>
                                <div class="d-flex gap-2 mb-2">
                                    <div class="border p-3 bg-secondary text-white rounded flex-grow-1 text-center" id="captcha">
                                        <span id="captchaText"></span>
                                    </div>
                                    <button type="button" class="btn btn-outline-secondary" onclick="generateCaptcha()">
                                        &#x21bb;
                                    </button>
                                </div>
                                <input type="text" class="form-control" id="captchaInput" name="auth[captcha]" placeholder="Enter captcha" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" onclick="return validateCaptcha()">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let captchaCode;

        function generateCaptcha() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            captchaCode = '';
            for (let i = 0; i < 6; i++) {
                captchaCode += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('captchaText').textContent = captchaCode;
        }

        function validateCaptcha() {
            const userInput = document.getElementById('captchaInput').value;
            if (userInput !== captchaCode) {
                alert('Invalid captcha. Please try again.');
                generateCaptcha();
                document.getElementById('captchaInput').value = '';
                return false;
            }
            return true;
        }

        window.onload = generateCaptcha;
    </script>
</body>
</html>