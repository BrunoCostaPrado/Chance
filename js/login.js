var startApp = function () {
  gapi.load("auth2", function () {
    auth2 = gapi.auth2.init({
      client_id:
        "403727070129-ajucujjjbbe5g7m47ff760j50t8s4ov6.apps.googleusercontent.com",
      cookiepolicy: "single_host_origin",
      scope: "profile email",
    });
    auth2.attachClickHandler(
      document.getElementById("customBtn"),
      {},
      onSuccess,
      onFailure
    );
  });
};
function onSuccess(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log("ID: " + profile.getId());
  console.log("Name: " + profile.getName());
  console.log("Image URL: " + profile.getImageUrl());
  console.log("Email: " + profile.getEmail());

  var id_token = googleUser.getAuthResponse().id_token;
  console.log("ID Token: " + id_token);
}
function onFailure(error) {
  console.log(error);
}

function signOut() {
  var auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function () {
    console.log("User signed out.");
  });
}
function onSuccess(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;

  $.post("http://localhost:85", function (id_token) {
    console.log("sucesso");
  });
}
