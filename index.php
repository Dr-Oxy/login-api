<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="/index.css" />
  </head>
  <body>
    <div class="form-wrapper">
      <form id="loginForm">
        <div>
          <div class="email-wrap">
            <label for="email">Email:</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="test@gmail.com"
            />
          </div>
          <div class="pass-wrap">
            <label for="password">password:</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="*******"
            />
          </div>
        </div>

        <div class="submit-btn">
          <button type="submit">Log in</button>
        </div>
      </form>
    </div>

    <script type="text/javascript">
      const loginForm = document.querySelector("#loginForm");
      const em = document.querySelector("#email");
      const pw = document.querySelector("#password");

      function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }


      em.onchange = function handleEmailChange(evt) {
        const email = evt.target.value;

        if (!validateEmail(email)) {
          alert('invalid email');
        }

      }

      loginForm.addEventListener("submit", function () {
        event.preventDefault();

        let isValid = true;

        


        //Login Validation
        if (user.password.trim() == '' || user.password.length < 8) {
          isValid = false;
        }

         if (user.email.trim() == '' || !validateEmail(user.email)) {
          isValid = false;
        }
    

        //1. FORM DATA + FETCH

        if (isValid) {
          const formData = new FormData(this);

          fetch("login.php", {
              method: "post",
              body: formData
          })
            .then(function (response) {
              return response.json();
            })
            .then(function (user) {
              localStorage.setItem("user", JSON.stringify(user))
              // let user = localStorage.getItem('user');
              // user = JSON.parse(user);
              // localStorage.removeItem('user');
              // localStorage.clear();
              chioma;
              console.log(user)
            })
            .catch(function (error) {
              // 404 or 400 or 500 or generic
              console.error(error);
            });
        }
      });
    </script>
  </body>
</html>

