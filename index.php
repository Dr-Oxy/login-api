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

      loginForm.addEventListener("submit", function () {
        event.preventDefault();

        const user = {
          email: em.value,
          password: pw.value,
        };

        fetch("receive.php", {
          method: "post",
          body: "JSON.stringify(user)",
          headers: {
            "Content-Type": "application/json",
          },
        })
          .then(function (response) {
            return response.text();
          })
          .then(function (text) {
            console.log(text);
          })
          .catch(function (error) {
            console.warn(error);
          });
        console.log(JSON.stringify(user));
      });
    </script>
  </body>
</html>