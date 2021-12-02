// function onSignIn(googleUser) {
//   var profile = googleUser.getBasicProfile();
//   console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
//   console.log("Name: " + profile.getName());
//   console.log("Image URL: " + profile.getImageUrl());
//   console.log("Email: " + profile.getEmail()); // This is null if the 'email' scope is not present.
// }

// function onSignIn(response) {
//       // Conseguindo as informações do seu usuário:
//       var perfil = response.getBasicProfile();

//       // Conseguindo o ID do Usuário
//       var userID = perfil.getId();

//       // Conseguindo o Nome do Usuário
//       var userName = perfil.getName();

//       // Conseguindo o E-mail do Usuário
//       var userEmail = perfil.getEmail();

//       // Conseguindo a URL da Foto do Perfil
//       var userPicture = perfil.getImageUrl();

//       document.getElementById('user-photo').src = userPicture;
//       document.getElementById('user-name').innerText = userName;
//       document.getElementById('user-email').innerText = userEmail;

//       // Recebendo o TOKEN que você usará nas demais requisições à API:
//       var LoR = response.getAuthResponse().id_token;
//       console.log("~ le Tolkien: " + LoR);
//   };
var startApp = function() {
    gapi.load('auth2', function(){
      auth2 = gapi.auth2.init({
        //nesse exemplo o client id também pode ser informado pela meta tag "google-signin-client_id"
        //caso ele não seja informado aqui
        client_id: '403727070129-ajucujjjbbe5g7m47ff760j50t8s4ov6.apps.googleusercontent.com',
        cookiepolicy: 'single_host_origin',
        scope: 'profile email' // solicitando acesso ao profile e ao e-mail do usuário
      });
      auth2.attachClickHandler(document.getElementById('customBtn'), {}, onSuccess, onFailure);
    });
  };
  function onSuccess(googleUser) {
    // Recuperando o profile do usuário
    var profile = googleUser.getBasicProfile();
    console.log("ID: " + profile.getId()); // Don't send this directly to your server!
    console.log("Name: " + profile.getName());
    console.log("Image URL: " + profile.getImageUrl());
    console.log("Email: " + profile.getEmail());

    // Recuperando o token do usuario. Essa informação você necessita passar para seu backend
    var id_token = googleUser.getAuthResponse().id_token;
    console.log("ID Token: " + id_token);
}
function onFailure(error) {
    console.log(error);
}

/**
  Função de deslogar o usuario
*/
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}
function onSuccess(googleUser) {
    // Recuperando o token do usuario.
    var id_token = googleUser.getAuthResponse().id_token;

    // post com jQuery para enviar o token to usuário para o servidor
    $.post( "http://localhost:85",
      function(id_token) {
        console.log('sucesso')
      });
}