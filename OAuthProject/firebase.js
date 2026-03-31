const firebaseConfig = {
  apiKey: "YOUR_FIREBASE_API_KEY",
};

firebase.initializeApp(firebaseConfig);

function firebaseLogin() {
  const provider = new firebase.auth.GoogleAuthProvider();

  firebase.auth()
    .signInWithPopup(provider)
    .then(result => {
      alert("Login Success: " + result.user.email);
    })
    .catch(error => {
      console.error(error);
    });
}